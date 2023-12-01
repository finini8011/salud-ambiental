<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Salud Ambiental Bogotá</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/stylesAdmin.css')}}" rel="stylesheet" />
        <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg bg-gradient-primary">
            <div class="container px-lg-5">
                <span class="navbar-brand btn-primary btn-lg">Bienvenidos al módulo administrador</span>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow">
                    <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
                </li>
            </ul>
        </nav>
        <!-- Header-->
        <header class="py-3">
            <div class="container px-lg-12">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-8 fw-bold">Módulo de Inicio (Home)</h1>
                        <p class="fs-6">Ingrese a este módulo para administrar el contenido de la página de inicio</p>
                        <a class="btn btn-primary btn-lg" href="{{ route('dashboardAdmin') }}">Ingresar</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature text-white"><a class="btn btn-primary btn-lg" href="{{ ('menuAdmin') }}"><i class="bi bi-collection"></i></a></div>
                                <h2 class="fs-4 fw-bold">Administración de Menús de Temas</h2>
                                <p class="mb-0">Aquí podrá configurar los 8 temas de los menús principales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature text-white"><a class="btn btn-primary btn-lg" href="{{ ('aireAdmin') }}"><i class="bi bi-collection"></i></a></div>
                                <h2 class="fs-4 fw-bold">Módulo Aire, ruido y radiación electromagnética</h2>
                                <p class="mb-0">Ingrese aquí para administrar el tema del primer menú</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-3 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Salud Ambiental Bogotá 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scriptsAdmin.js')}}"></script>
    </body>
</html>
