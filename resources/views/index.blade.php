<!DOCTYPE html>
<html>
    <head>
    
    <!-- Load js files -->
    <script src="/jquery/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>

    <!-- Load CSS & Icons library -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- Responsive design for mobile navigation -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial;
        }
    </style>

    <!-- Assign UTF-8 -->
    <meta charset="utf-8" />

    <title>
        Index
    </title>
    </head>
    <body>

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
        style="position: sticky; z-index: 1071; top: 0;">
            <div class="d-flex justify-content-end">
            <a class="navbar-brand" href="/"  style="color: #fff;">
                <img src="/images/mg2.jpg" width="80" height="30" class="d-inline-block align-top" data-toggle="tooltip" data-placement="bottom" title="Sistema de Logística Master Game">
                Sistema de Logística
               </a>
            <div class="nav navbar-nav navbar-right">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/" style="margin-right: 1rem; color: #fff;">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/empleados" style="color: #fff;">Personal</a>
                        </li>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/proveedores" style="color: #fff;">Proveedores</a>
                        </li>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/socios" style="color: #fff;">Clientes</a>
                        </li>
                        <li class="nav-item" style="margin-right: 1rem;">
                            <a class="nav-link" href="/admin/stock" style="color: #fff;">Gestionar Stock</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                    </span>
                </div>
            </div>
        </nav>
        <!-- End of Navbar -->

        <!-- Content -->

        <div class="container-fluid" style="margin-top: 3rem;">
            <div class="row flex-xl-nowrap">

                <!-- Left Sidebar -->

                <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
                    
                </div>

                <!-- Main body -->

                <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content">

                    <div class="container-fluid">
                        @yield('main')
                    </div>

                </main>

                <!-- Right Sidebar -->
                <div class="d-none d-xl-block col-xl-2 bd-toc" style="margin-top: 2rem;">
                    <ul class="section-nav" style="list-style: none; margin-top: 4rem;">
                    @yield('sidebar')
                    </ul>
                </div>

            </div>

        </div>

    </body>
</html>


</html>
