<?php

namespace App\Http\Controllers;

use App\Http\Requests\request as RequestsRequest;
use App\Models\nivel;
use App\Models\User;
use App\Models\suporte;

// use App\Http\Controllers\DB;

use Illuminate\Support\Facades\DB;

use Error;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use PhpParser\Node\Stmt\Echo_;

use function GuzzleHttp\Promise\all;

class UsuarioController extends Controller
{
    public function index()
    {

        return view('usuario.index');
    }

    public function home()
    {
        $janeiro = suporte::whereMonth('created_at', '7')->get()->count();
        $pedente = suporte::where('user_id', auth()->user()->id)->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->withTrashed()->get();
        // return view('usuario.dashboard');
        return view('usuario.dashboard', ['pendente' => $pedente, 'resolvido' => $resolvido, 'suporte' => $suporte, 'janeiro' => $janeiro]);
    }

    public function usuariologin(Request $request)
    {
        $query_ru = user::where('email', $request->email)->first();
        //    Verificar  se Existe o susuario
        if (isset($query_ru) == 0) {
            return redirect()->route('index')->with('status', 'Usuário não existe ');
        }
        //    Verificar se a senha corresponde ao que na DB
        if (!hash::check($request->password, $query_ru->password)) {
            return redirect()->route('index')->with('status', 'Palavra-passe Incorreta.');
        }

        Session::put('logado', 'sim');
        $teste = session($query_ru->name);
        Session::put('usuario', $query_ru->name);
        return redirect()->route('dashboard')->with('status', 'Logado com sucessos');
    }

    public function Addsuporte(Request $request)
    {
        $suporte =  new suporte();
        $suporte->suporte = $request->input('suporte');
        $suporte->status = $request->input('status');
        $user = auth()->user();
        $suporte->user_id = $user->id;
        $suporte->save();
        // $suporte=$request->$name->id;
        // $suporte->create($request->all());
        return redirect()->route('show')->with('status', 'Suporte Solicitado,Aguarde');
    }


    public function suporte()
    {
        // $nivel = DB::select('select * from nivels');

        $nivel = nivel::all();
        $pedente = suporte::where('user_id', auth()->user()->id)->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->withTrashed()->get();
        return view('usuario.suporte', ['pendente' => $pedente, 'resolvido' => $resolvido, 'suporte' => $suporte, 'nivel' => $nivel]);
    }

    public function showsuporte()
    {
        $pendente = suporte::where('user_id', auth()->user()->id)->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->withTrashed()->get();
        return view('usuario.showsuporte', ['suporte' => $suporte, 'pendente' => $pendente, 'resolvido' => $resolvido]);
    }
    public function show()
    {
        $pedente = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->withTrashed()->get();
        return view('usuario.show', ['suporte' => $suporte, 'pedente' => $pedente, 'resolvido' => $resolvido]);
    }
    public function perfil()
    {
        $user = User::where('name', Auth::user()->name)->get();
        return view('usuario.perfil', ['user' => $user]);
    }
    public function update(Request $request)
    {
        // $criptografar = Hash::make($request['senhaactual']);
        // $query_ru = user::where(auth()->user()->password, $criptografar);
        $check = hash::check($request['senhaactual'], auth()->user()->password);
        if (!$check == true) {
            return redirect()->back()->withErrors('A sua senha Actual Nao confere ');
        } else {

            $password = $request->password;
            $password_confirmation = $request->password_confirmation;

            if ($password == $password_confirmation) {
                // $user = auth()->user()->id;
                // // $user = User::findOrfail($user);
                // Hash::make($request['password']);
                // auth()->user()->id;
                // $user->update('password', $request->password);
                DB::table('users')->where(['id' => auth()->user()->id])->update(['password' => Hash::make($request->password)]);

                return redirect()->back()->with('status', 'Senha Actualizada com Successos.');
            } else {
                return redirect()->back()->withErrors('suas credencias nao  batem com os nossos registos');
            }
        }
    }

    public function todos()
    {
        $pendente = suporte::where('user_id', auth()->user()->id)->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->withTrashed()->get();
        return view('usuario.todos', ['suporte' => $suporte, 'pendente' => $pendente, 'resolvido' => $resolvido]);
    }

    public function apagar($request)
    {
        $delete = suporte::find($request)->delete();
        return back()->with('status', 'Deletado com sucessos');
    }
    public function editar($request)
    {
        $delete = suporte::find($request);

        // echo $delete->status;
        // echo $delete->suporte;
        $pendente = suporte::where('user_id', auth()->user()->id)->where('deleted_at', null)->get();
        $resolvido = suporte::where('user_id', auth()->user()->id)->onlyTrashed()->get();
        $suporte = suporte::where('user_id', auth()->user()->id)->ORDERBY('id', 'DESC')->withTrashed()->get();
        return view('usuario.editar', compact('delete',  'suporte',  'resolvido',  'pendente'));
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('/');
    }
}
