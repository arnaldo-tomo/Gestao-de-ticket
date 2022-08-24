@extends('encludes.corpo')
@section('conteudo')
<main>
    <title>Gestao de Ticket.</title>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">

            {{-- <div class="row justify-content-center form-bg-image" data-background-lg="../../assets/img/illustrations/signin.svg"> --}}
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="row justify-content-center form-bg-image">
                    <p class="text-center"><a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                            </svg>
                            De volta ao login

                        </a>
                    </p>

                    <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            @if(session('status'))

                            <div class="alert alert-success">{{session('status') }}</div>
                            @endif
                            @if ($errors->any())

                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger role">
                                <div class="display">
                                    <strong> {{$error}}</strong>
                                </div>
                            </div>
                            @endforeach
                            @endif
                            <h1 class="h3">Esqueceu a sua senha?</h1>
                            <p class="mb-4">Não se preocupe! Basta escrever no seu e-mail e enviar-lhe-emos um código para redefinir a sua palavra-passe!</p>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-4">
                                    <label for="email">Seu Email</label>
                                    <div class="input-group">
                                        <input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus class="form-control" id="email" placeholder="FooLam@company.com" required autofocus>

                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Recover password</button>
                                </div>
                            </form>






                        </div>
                    </div>
                </div>
            </div>
    </section>
</main @endsection
