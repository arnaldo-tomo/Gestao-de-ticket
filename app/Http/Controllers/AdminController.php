<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\departamneto;
use App\Models\nivel;
use App\Models\setor;
use App\Models\suporte;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use PhpParser\Node\Stmt\Echo_;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class AdminController extends Controller
{
    public function erros()
    {
        return view('usuario.erros');
    }

    public function index()
    {
        $usuarios = user::all();
        $suporte = suporte::where('deleted_at', null)->get();
        $nado = suporte::all();
        if (session('logado')) {
            return view(
                'admin.dashboard',
                ['usuarios' => $usuarios, 'suporte' => $suporte]
            );
        }
        return view('admin.index');
    }

    public function dashboard()
    {
        $usuarios = user::all();
        $suporte = suporte::where('deleted_at', null)->get();
        $nado = suporte::all();

        if (!session('logado')) {
            return view('admin.index');
        }
        return view('admin.dashboard', ['usuarios' => $usuarios, 'suporte' => $suporte]);
    }


    public function login(Request $request)
    {
        // validadacao de campos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        // // verificar se o susuario existe
        $query_ru = admin::where('email', $request->email)->first();

        //    Verificar  se Existe o susuario
        if (isset($query_ru) == 0) {
            return redirect('admin')->with('status', 'Usuário não existe ');
        }

        //    Verificar se a senha corresponde ao que na DB
        if (!hash::check($request->senha, $query_ru->senha)) {
            return redirect('admin')->with('status', 'Palavra-passe Incorreta.');
        }

        Session::put('logado', 'sim');
        Session::put('usuario', $query_ru->nome);
        return redirect()->route('AdminDashboard')->with('status', 'Logado com sucessos');
    }

    public function logout()
    {
        Session::flush();
        Session()->flush();
        return redirect('admin')->with('status', 'terminado com sucessos');
    }

    public function usuario()
    {
        $usuarios = user::all();
        $setor = setor::all();
        // $usuarios = DB::select('SELECT * FROM `users` ORDER BY `users`.`created_at` DESC', [1]);
        // $tarefas = user::where('visivel', 1)->OrderBy('created_at', 'desc')->get();
        if (!session('logado')) {
            return view('admin.index');
        }
        return view('admin.usuario', ['usuarios' => $usuarios, 'setor' => $setor]);
    }

    public function inativo()
    {
        $usuarios = user::onlyTrashed()->get();
        return view('admin.inativos', ['usuarios' => $usuarios]);
    }

    public function usuarios()
    {
        $usuarios = user::all();
        return view('admin.usuarios', ['usuarios' => $usuarios]);
    }
    public function registar(Request $request)
    {
        $password = $request->password;
        $password1 = $request->password1;

        if ($password == $password1) {

            $query_ru = user::where('email', "=", $request->email)->orWhere('password', "=", $request->password)->get();

            if ($query_ru->count() != 0) {

                return redirect('/usuario')->with('status', ' O E-mail Invalido,ja foi registado');
            } else {

                $novo = new User();
                $novo->name = $request->name;
                $novo->departamento = $request->departamento;
                $novo->email = $request->email;
                $novo->password = $request->password;
                $novo->password = hash::make($request->password);
                $novo->save();
                return redirect('/usuario')->with('status', ' Usuario registado');
            }
        } else {

            return redirect('/usuario')->with('status', ' Passoword nao confere ');
        }
    }


    public function usuarioeditar($id)
    {
        $setor = setor::all();
        $usuario = user::findOrFail($id);
        return view('admin.usuarioeditar', ['usuario' => $usuario, 'setor' => $setor]);
    }


    public function delete($id)
    {
        $usuarios = user::findOrFail($id);
        $usuarios->delete();
        return redirect()->route('AdminUsario')->with('status', 'Usuario Desativado ');
    }

    public function deleteinativo($id)
    {
        $deleteinativo = user::withTrashed()->find($id)->forceDelete();
        return redirect()->route('inativo')->with('status', 'Eleminado ');
    }

    public function restaurar($id)
    {
        $deleteinativo = user::withTrashed()->find($id)->restore();
        return redirect()->route('inativo')->with('status', 'Ativado ');
    }

    public function actuliazar($id, Request $request)
    {
        $user = user::findOrFail($id);
        $user = $user->update($request->all());
        return redirect()->route('AdminUsario');
    }

    public function pedidos()
    {
        $pedente = suporte::where('deleted_at', null)->get();
        $resolvido = suporte::onlyTrashed()->get();
        $suporte = suporte::ORDERBY('id', 'DESC')->get();
        return view('admin.Pedidos', ['suporte' => $suporte, 'pendente' => $pedente, 'resolvido' => $resolvido]);
    }

    public function finalizar($id, Request $request)
    {
        $finalizar = suporte::findOrFail($id);
        $finalizar->delete();
        return  redirect()->route('pedidos')->with('status', 'Suporte Finalizado');
    }
    public function finalizado()
    {
        $suporte = suporte::ORDERBY('id', 'DESC')->get();
        $finalizado = suporte::ORDERBY('id', 'DESC')->onlyTrashed()->get();
        return view('admin.finalizdos', ['finalizado' => $finalizado,  'suporte' => $suporte]);
    }
    public function configuracao()
    {
        $usuarios = user::all();
        $suporte = suporte::where('deleted_at', null)->get();
        $nivel = nivel::all();
        $setor = setor::all();
        return View('admin.configuracao', ['usuarios' => $usuarios, 'suporte' => $suporte, 'setor' => $setor, 'nivel' => $nivel]);;
    }

    public function departamento(Request $request)
    {
        $setor = new setor();
        $setor->setor = $request->setor;
        $setor->save();
        return redirect()->back()->with('status', 'Departamento Registado Com Exito.');

        // echo $request->setor;
    }
    public function nivel(Request $request)
    {
        $nivel = new nivel();
        $nivel->nivel = $request->nivel;
        $nivel->save();
        return redirect()->back()->with('nivel', 'Nivel Registado Com Exito.');

        // echo $request->setor;
    }

    public function save()
    {
        //para criar admin
        $usuario = new admin;
        $usuario->nome = "Arnaldo Jose Tomo";
        $usuario->email = "admin@gmail.com";
        $usuario->senha = Hash::make('admin');
        $usuario->save();
        return "Craido Com Exito! ";
    }
}
