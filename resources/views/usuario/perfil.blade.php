@extends('encludes.corpo')
@section('conteudo')
<title>Gestão de Tickts -Meu Perfil</title>

<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ asset('') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets/img/brand/light.svg') }}" alt="Volt logo" /> <img class="navbar-brand-light" src="{{ asset('assets/img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>

            <li class="nav-item  ">
                <a href="{{ route('suporte') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-paper-plane"></i>
                    </span>
                    <span class="sidebar-text">Suporte</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('show') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class=" fa fa-tasks"></i>
                    </span>
                    <span class="sidebar-text">Suportes Pedentes</span>
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('showsuporte') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class=" fa fa-tasks"></i>
                    </span>
                    <span class="sidebar-text">Suportes Realizados</span>
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('todos') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class=" fa fa-tasks"></i>
                    </span>
                    <span class="sidebar-text">Todos Suportes</span>
                </a>
            </li>

            <li class="nav-item active ">
                <a href="{{ route('perfil') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <i class="fa fa-user"></i>
                    </span>
                    <span class="sidebar-text">Perfil</span>
                </a>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">versão <span class="badge badge-sm bg-secondary ms-1 text-gray-800">{{ config('constantes.VERSAO')}}</span></span>

                </a>
            </li>


        </ul>
    </div>
</nav>

<main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                    <!-- Search form -->
                    <form class="navbar-search form-inline" id="navbar-search-main">
                        <div class="input-group input-group-merge search-bar">
                            <span class="input-group-text" id="topbar-addon">
                                <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                        </div>
                    </form>
                    <!-- / Search form -->
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark notification-bell unread dropdown-toggle" data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                            <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="text-center text-primary fw-bold border-bottom border-light py-3">Notificação</a>
                                <a href="#" class="list-group-item list-group-item-action border-bottom">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Avatar -->
                                            <img alt="Image placeholder" src="{{ asset('assets/img/ft4.jpg') }}" class="avatar-md rounded">
                                        </div>
                                        <div class="col ps-0 ms-2">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <h4 class="h6 mb-0 text-small">Mauro Peniel</h4>
                                                </div>
                                                <div class="text-end">
                                                    <small class="text-danger">a 5 menutos atras</small>
                                                </div>
                                            </div>
                                            <p class="font-small mt-1 mb-0">Added you to an event "Project
                                                stand-up" tomorrow at 12:30 AM.
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                    <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Ver Todas
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="avatar rounded-circle" alt="Image placeholder" src="{{ asset('assets/img/ft4.jpg') }}">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::user()->email }}</span>

                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('perfil') }}">

                                <svg class=" dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                </svg>
                                {{ Auth::user()->name }}

                            </a>
                            <div role="separator" class="dropdown-divider my-1"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">

                                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Terminar Sessão
                                </a>
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="row">
        <div class="py-4">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">


                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Meu Perfil</li>
                </ol>
            </nav>
        </div>

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Informação Pessoal</h2>

                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="first_name">Codigo</label>
                                    @foreach ($user as $dado )
                                    <input class="form-control" value="{{ $dado->id }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="last_name">Username</label>
                                    <input class="form-control" value="{{ $dado->name }}" disabled>

                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="birthday">Criado Em</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input data-datepicker="" class="form-control" value="{{ $dado->created_at }}" disabled>


                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">E-mail</label>
                                <input class="form-control" value="{{ $dado->email }}" disabled>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Departamento</label>
                                    <input class="form-control" value="{{ $dado->departamento }}" disabled>

                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Actualizado Em</label>
                                    <input class="form-control" disabled value="{{ $dado->updated_at }}" required>


                                </div>
                            </div>
                        </div>
                        @endforeach

                    </form>
                </div>

            </div>

            @if (Session::has('MSG'))
            <script>
                swal.fire({
                    icon: 'error'
                    , title: 'Falha na validação'
                    , text: 'Erro no campo senha Actual!'
                    , showConfirmButton: true
                    , timer: 25000
                })

            </script>
            @endif

            <div class="col-12 col-xl-4">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="card shadow border-0  p-2">
                            @if ($errors->any())

                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger role">
                                <div class="display">
                                    <strong> {{$error}}</strong>
                                </div>
                            </div>
                            @endforeach

                            @endif

                            @if(session('status'))
                            <div class="alert alert-success">
                                <strong>{{ session('status') }}</strong>
                            </div>

                            @endif

                            <form method="POST" action="{{ route('update') }}">
                                @csrf
                                <h2 class="h5 mb-4">Actualizar Informação</h2>
                                <label>Senha Actual</label>
                                <input type="hidden" name="email" id="email" value="{{ auth::user()->email }}">
                                <input type="password" placeholder="Senha Actual" name="senhaactual" value="{{ old('senhaactual') }}" class="form-control" required>
                                <label>Nova Senha</label>
                                <input type="password" name="password" id="password" placeholder="Nova Senha" class="form-control" value="{{ old('password') }}" required>
                                <label>Confirme a nova senha</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirme A nova Senha" class="form-control mb-2" required>

                                <label></label>
                                <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
                                <button type="reset" class="btn btn-danger mb-3">Pagar</button>
                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>


    </div>
    @endsection
