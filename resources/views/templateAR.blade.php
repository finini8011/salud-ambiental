<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Home - Dashboard</title>

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicioAdmin">
                <div class="sidebar-brand-text mx-3">Inicio - Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('archivosAdmin') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menús de Temas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            @include('menusIzquierdosAR')

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    @if ( session('mensaje') )
                        <div class="alert alert-success">{{ session('mensaje') }}</div>
                    @endif

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <img class="img-profile rounded-circle" src="{{asset('img/222222.png')}}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    @yield('contenido')


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Salud Ambiental {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea salir del administrador?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar Sesión" para salir del aplicativo</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ingresarEventoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingrese los datos del evento</h5>
                    <button class="close" type="button" onclick="CloseModal2()" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre de la imagen:</label>
                        <input type="text" class="form-control" id="imagen">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="CloseModal2()">Cancelar</button>
                    <button class="btn btn-primary" type="button" onclick="Ingresar()">Aceptar</button>
                    <input type="hidden" name="start" id="start" value="">
                    <input type="hidden" name="end" id="end" value="">
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="openModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
                    <button class="close" type="button" onclick="CloseModal()" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 id="titulo"></h2>
                    <p id="cuerpo"></p>
                    <img id="imagenModal" src="" style="width: 100%">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" onclick="CloseModal()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/locale/es.js'></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } ); */

        tinymce.init({
            selector: 'textarea#basic-example',
            valid_elements: '*[*]',
            valid_attributes: '*[*]',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help | code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });

        $('#exampleModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            var menuid = button.data('menuid') // Extract info from data-* attributes
            var nombre = $("#n"+menuid+"-"+id).text() // Extract info from data-* attributes
            var link_interno = $("#li"+menuid+"-"+id).text() // Extract info from data-* attributes
            var link_externo = $("#le"+menuid+"-"+id).text() // Extract info from data-* attributes
            var modal = $(this)
            modal.find('#nombre').val(nombre)
            modal.find('#link_interno').val(link_interno)
            modal.find('#link_externo').val(link_externo)
            modal.find('#idSubmenu').val(id)
            modal.find('#menuId').val(menuid)
        });

        $(function() {
            $('#btn-guardar').click( function(){
                numero = $("#menuId").val();
                if( $('#nombre').val() !== '' && $('#link').val() !== '' ) {
                    $.ajax({
                        method: "POST",
                        url: "{{asset('edit_submenu')}}/"+numero,
                        data: {
                            nombre: $("#nombre").val() ,
                            link_interno: $("#link_interno").val(),
                            link_externo: $("#link_externo").val(),
                            id: $("#idSubmenu").val()
                        }
                    })
                    .done(function( data ) {
                        if(data[1]) {
                            data = data[0];
                            $("#n"+data.menu_id+"-"+data.id).text(data.nombre);
                            $("#li"+data.menu_id+"-"+data.id).text(data.link_interno);
                            $("#le"+data.menu_id+"-"+data.id).text(data.link_externo);
                        } else {
                            data = data[0];
                            console.log(data);
                            document.getElementById("tabla_submenus"+data[0]?.menu_id).innerHTML="";
                            fila = "";
                            data.forEach((element) => {
                                fila += "<tr>";
                                fila += "<td id='n"+ element.menu_id + "-" + element.id +"'>"+element.nombre+"</td>";
                                fila += "<td id='li"+ element.menu_id + "-" + element.id +"'>"+(element.link_interno ? element.link_interno : '')+"</td>";
                                fila += "<td id='le"+ element.menu_id + "-" + element.id +"'>"+(element.link_externo ? element.link_externo : '')+"</td>";
                                fila += "<td>";
                                fila += '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="'+element.id+'" data-menuid="'+element.menu_id+'">Editar</button>';
                                fila += "</td></tr>";
                            });
                            document.getElementById("tabla_submenus"+data[0]?.menu_id).innerHTML = fila;
                        }
                        
                        $('#exampleModal').modal('hide');
                    });
                } else {
                    $('#exampleModal').modal('hide');
                    $('#infoModal').modal('show');
                }

            });
        });
        $(function() {
            $('#toggle-event').change(function() {
                if(document.getElementById('toggle-event').checked) {
                    $("#estado").val(1);
                }else {
                    $("#estado").val(0);
                }
            })
        })

        function CloseModal() {
            $('#openModal').modal('hide');
        }

        function CloseModal2() {
            $('#ingresarEventoModal').modal('hide');
        }

        function Ingresar() {
            var start = $("#start").val();
            var end = $("#end").val();
            console.log(start);
            console.log(end);
            var tit = $("#titulo").val();
            var img = $("#imagen").val();
            $.ajax({
                url: "{{ route('calendar.create') }}",
                data: {
                    title: tit,
                    image: img,
                    start: start,
                    end: end
                },
                type: 'post',
                success: function (data) {
                    console.log(data);
                    iziToast.success({
                        position: 'topRight',
                        message: 'Evento creado satisfactoriamente.',
                    });
                    $("#titulo").val('');
                    $("#imagen").val('');
                    CloseModal2();
                    $('#calendar').fullCalendar('renderEvent', {
                        id: data.data.id,
                        title: data.data.title,
                        image: data.data.image,
                        start: start,
                        end: end,
                        allDay: false
                    }, true);
                    $('#calendar').fullCalendar('unselect');
                }
            });
        }

        $(document).ready(function() {

            // initialize calendar in all events
            var calendar = $('#calendar').fullCalendar({
                initialView: 'dayGridMonth',
                editable: true,
                locale: 'es',
                events: "{{ route('calendar.index') }}", 
                displayEventTime: false,
                eventLimit: true,
                eventRender: function (event, element, view) {
                    if (event.allDay === 'true') {
                            event.allDay = true;
                    } else {
                            event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    $("#ingresarEventoModal").modal("show");
                    $("#start").val($.fullCalendar.formatDate(start, "YYYY-MM-DD"));
                    $("#end").val($.fullCalendar.formatDate(end, "YYYY-MM-DD"));
                },
                eventClick: function (event) {
                    console.log("d".charCodeAt(0))
                    var start = $.fullCalendar.formatDate(event.start, "dddd DD MMMM [de] YYYY");
                    document.getElementById('titulo').innerText = start;
                    document.getElementById('cuerpo').innerText = event.title;
                    document.getElementById("imagenModal").src = "img/" + event.image;
                    $("#openModal").modal("show");
                    /* var eventDelete = confirm('Are you sure to remove event?');
                    if (eventDelete) {
                        $.ajax({
                            type: "post",
                            url: "{ route('calendar.destroy') }}",
                            data: {
                                id: event.id,
                                _method: 'delete',
                            },
                            success: function (response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                iziToast.success({
                                    position: 'topRight',
                                    message: 'Event removed successfully.',
                                });
                            }
                        });
                    } */
                }
            });
        });
    </script>

</body>

</html>