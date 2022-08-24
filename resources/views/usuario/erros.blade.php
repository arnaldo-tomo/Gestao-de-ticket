@extends('encludes.corpo')
@section('conteudo')
    <!--

                                                =========================================================
                                                * Volt Pro - Premium Bootstrap 5 Dashboard
                                                =========================================================

                                                * Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
                                                * Copyright 2021 Themesberg (https://www.themesberg.com)
                                                * License (https://themesberg.com/licensing)

                                                * Designed and coded by https://themesberg.com

                                                =========================================================

                                                * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

                                                -->
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Primary Meta Tags -->
        <title>Volt Premium Bootstrap Dashboard - Forms</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="title" content="Volt Premium Bootstrap Dashboard - Forms">
        <meta name="author" content="Themesberg">
        <meta name="description"
            content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
        <meta name="keywords"
            content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
        <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
        <meta property="og:title" content="Volt Premium Bootstrap Dashboard - Forms">
        <meta property="og:description"
            content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
        <meta property="og:image"
            content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
        <meta property="twitter:title" content="Volt Premium Bootstrap Dashboard - Forms">
        <meta property="twitter:description"
            content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
        <meta property="twitter:image"
            content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
        <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">

        <!-- Sweet Alert -->
        <link type="text/css" href="../../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

        <!-- Notyf -->
        <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

        <!-- Volt CSS -->
        <link type="text/css" href="../../css/volt.css" rel="stylesheet">

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    </head>

    <body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->


        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
            <a class="navbar-brand me-lg-5" href="../../index.html">
                <img class="navbar-brand-dark" src="../../assets/img/brand/light.svg" alt="Volt logo" /> <img
                    class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
            </a>
            <div class="d-flex align-items-center">
                <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
            <div class="sidebar-inner px-4 pt-3">

                <ul class="nav flex-column pt-3 pt-md-0">
                    <li class="nav-item  ">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
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
                    <li class="nav-item active ">
                        <a href="{{ route('todos') }}" class="nav-link">
                            <span class="sidebar-icon">
                                <i class=" fa fa-tasks"></i>
                            </span>
                            <span class="sidebar-text">Todos Suportes</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('perfil') }}" class="nav-link">
                            <span class="sidebar-icon">
                                <i class="fa fa-user"></i>

                            </span>
                            <span class="sidebar-text">perfil</span>
                        </a>
                    </li>
                    <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center">
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="sidebar-text">versão <span
                                    class="badge badge-sm bg-secondary ms-1 text-gray-800">{{ config('constantes.VERSAO') }}</span></span>

                        </a>
                    </li>
                </ul>

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
                                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" id="topbarInputIconLeft"
                                        placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                                </div>
                            </form>
                            <!-- / Search form -->
                        </div>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark notification-bell unread dropdown-toggle"
                                    data-unread-notifications="true" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                        </path>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
                                    <div class="list-group list-group-flush">
                                        <a href="#"
                                            class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
                                        <a href="#" class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-1.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small class="text-danger">a few moments ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">Added you to an event "Project
                                                        stand-up" tomorrow at 12:30 AM.</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-2.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Neil Sims</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small class="text-danger">2 hrs ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">You've been assigned a task for
                                                        "Awesome new project".</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-3.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 m-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small>5 hrs ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">Tagged you in a document called
                                                        "Financial plans",</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-4.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Joseph Garth</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small>1 d ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">New message: "Hey, what's up? All set
                                                        for the presentation?"</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action border-bottom">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/team/profile-picture-5.jpg"
                                                        class="avatar-md rounded">
                                                </div>
                                                <div class="col ps-0 ms-2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 text-small">Bonnie Green</h4>
                                                        </div>
                                                        <div class="text-end">
                                                            <small>2 hrs ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="font-small mt-1 mb-0">New message: "We need to improve the
                                                        UI/UX for the landing page."</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
                                            <svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                                <path fill-rule="evenodd"
                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown ms-lg-3">
                                <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="media d-flex align-items-center">
                                        <img class="avatar rounded-circle" alt="Image placeholder"
                                            src="../../assets/img/team/profile-picture-3.jpg">
                                        <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                            <span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        My Profile
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Settings
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Messages
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Support
                                    </a>
                                    <div role="separator" class="dropdown-divider my-1"></div>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Volt</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Forms</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Forms</h1>
                        <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and
                            more.</p>
                    </div>
                    <div>
                        <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/forms/"
                            class="btn btn-outline-gray"><i class="far fa-question-circle me-1"></i> Forms Docs</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                            aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="exampleInputIconLeft">Icon Left</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" id="exampleInputIconLeft"
                                                placeholder="Search" aria-label="Search">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="exampleInputIconRight">Icon Right</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="exampleInputIconRight"
                                                placeholder="Search" aria-label="Search">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="exampleInputIconPassword">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="exampleInputIconPassword"
                                                placeholder="Password" aria-label="Password">
                                            <span class="input-group-text" id="basic-addon3">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control is-valid" id="firstName"
                                            value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                <div class="col-lg-4 col-sm-6">

                                    <!-- Form -->
                                    <div class="my-4">
                                        <label for="textarea">Example textarea</label>
                                        <textarea class="form-control" placeholder="Enter your message..." id="textarea" rows="4"></textarea>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="usernameValidate">Username</label>
                                        <input type="text" class="form-control is-invalid" id="usernameValidate"
                                            required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="mb-3">
                                        <label for="birthday">Birthday</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <input data-datepicker="" class="form-control" id="birthday" type="text"
                                                placeholder="dd/mm/yyyy" required>
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="disabledTextInput">Name</label>
                                        <input type="text" id="disabledTextInput" class="form-control"
                                            placeholder="Disabled input" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="disabledSelect">Disabled select menu</label>
                                        <select id="disabledSelect" class="form-control" disabled>
                                            <option>Disabled select</option>
                                        </select>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label class="my-1 me-2" for="country">Country</label>
                                        <select class="form-select" id="country" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                            <div class="row mb-5 mb-lg-5">
                                <div class="col-lg-3 col-md-6">
                                    <!-- Checkboxes -->
                                    <div class="mb-3">
                                        <span class="h6 fw-bold">Checkboxes Round</span>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck10">
                                        <label class="form-check-label" for="defaultCheck10">
                                            Default checkbox
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="defaultCheck20" disabled>
                                        <label class="form-check-label" for="defaultCheck20">
                                            Disabled checkbox
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                                    <!-- Radio -->
                                    <fieldset>
                                        <legend class="h6">Radios</legend>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Default radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Second default radio
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios3" value="option3" disabled>
                                            <label class="form-check-label" for="exampleRadios3">
                                                Disabled radio
                                            </label>
                                        </div>
                                        <!-- End of Radio -->
                                    </fieldset>
                                </div>
                                <div class="col-lg-3 col-sm-6 mt-4 mt-md-0">
                                    <div class="mb-3">
                                        <span class="h6 fw-bold">Switches</span>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled"
                                            disabled>
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                            checked switch input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
                <div class="card-body bg-gray-800 text-white pt-4">
                    <button type="button" class="btn-close theme-settings-close" aria-label="Close"
                        data-bs-toggle="collapse" href="#theme-settings" role="button" aria-expanded="false"
                        aria-controls="theme-settings"></button>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span>
                        </p>
                        <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                            data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                            data-size="large" data-show-count="true"
                            aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
                    </div>
                    <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
                        class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
                        Download
                        <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
                    <div class="d-flex justify-content-center">
                        <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                            target="_blank">
                            <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
                        </a>
                        <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                            <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
                        </a>
                    </div>
                </div>
            </div>

            <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
                <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
                    <span class="fw-bold d-inline-flex align-items-center h6">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Settings
                    </span>
                </div>
            </div>

            <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                        <p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
                                class="text-primary fw-normal" href="https://themesberg.com"
                                target="_blank">Themesberg</a></p>
                    </div>
                    <div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
                        <!-- List -->
                        <ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
                            <li class="list-inline-item px-0 px-sm-2">
                                <a href="https://themesberg.com/about">About</a>
                            </li>
                            <li class="list-inline-item px-0 px-sm-2">
                                <a href="https://themesberg.com/themes">Themes</a>
                            </li>
                            <li class="list-inline-item px-0 px-sm-2">
                                <a href="https://themesberg.com/blog">Blog</a>
                            </li>
                            <li class="list-inline-item px-0 px-sm-2">
                                <a href="https://themesberg.com/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>

        </main>

        <!-- Core -->
        {{-- <script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script> --}}
        <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

        {{-- <!-- Vendor JS -->
        <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

        <!-- Slider -->
        <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

        <!-- Smooth scroll -->
        <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

        <!-- Charts -->
        <script src="../../vendor/chartist/dist/chartist.min.js"></script>
        <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

        <!-- Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Sweet Alerts 2 -->
        <script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

        <!-- Moment JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

        <!-- Vanilla JS Datepicker -->
        <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

        <!-- Notyf -->
        <script src="../../vendor/notyf/notyf.min.js"></script>

        <!-- Simplebar -->
        <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Volt JS -->
        <script src="../../assets/js/volt.js"></script> --}}


        {{-- </body>

    </html> --}}
    @endsection
