<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title') - Fabricio Fidelis</title>

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="{{ route('admin.lead') }}">Fabricio Fidelis</a>

            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="navbar-nav ms-auto me-2">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Comercial</div>
                            <a class="nav-link {{ request()->routeIs('admin.lead') ? 'active' : '' }}" href="{{ route('admin.lead') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Leads
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">{{ auth()->user()->name }}</div>
                        <a href="{{ route('admin.logout') }}" class="text-decoration-none text-secondary">
                            <i class="fa-solid fa-right-from-bracket"></i> Sair
                        </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @if (session('message'))
                            <div class="alert alert-success ml-3 mr-3 mt-3">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger ml-3 mr-3 mt-3">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="d-flex nowrap justify-content-between align-items-center mt-4">
                            <div class="">
                                <h1 class="">@yield('subtitle')</h1>
                            </div>
    
                            @yield('subtitleItem2')
                        </div>

                        <ol class="breadcrumb mb-2">
                            @yield('breadcrumb')
                        </ol>

                        <hr>

                        @yield('content')
                    </div>
                </main>

                <footer class="py-2 bg-light mt-auto text-center">
                    <div class="container-fluid px-1">
                        <p class="text-muted mb-0">Copyright &copy; Fabrio Fidelis {{ date('Y') }}</p>
                    </div>
                </footer>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

        @yield('scripts')
    </body>
</html>