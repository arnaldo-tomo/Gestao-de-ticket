@extends('encludes.corpo')
@section('conteudo')
<main>

    <!-- Section -->
    <title>Login</title>
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">

                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        {{-- <h1 class="h3 mb-4 text-center">Ola,Admin</h1> --}}



                        @if (session('status'))
                        <div class="alert alert-danger" role="">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{ route('autenticaco') }}" method="post">
                            @csrf
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email"></label>
                                <div class="input-group">
                                    <input class="form-control  roudend-0" placeholder="Ola,Informe as suas credencias." disabled>
                                </div>
                            </div>

                            @if($errors->any())
                            @foreach ( $errors->all() as $erro )
                            <div class="alert alert-danger" role="alert">
                                <strong> {{ $erro }}</strong>

                            </div>
                            @endforeach
                            @endif

                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input type="email" placeholder="Root" class="form-control" name="email">
                                </div>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="confirm_password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input type="password" placeholder="Password" class="form-control" name="senha">
                                </div>
                            </div>
                            <!-- End of Form -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
