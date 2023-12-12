@extends('layout')
@section('titulo')

@section('styles')

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/news.css')}}" />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/modalCalendar.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('contenido')
<div class="wrapper min-ancho">
    <div class="container-fluid">
        <div class="row">
            <div class="row justify-content-center">
                <div class="mt-3 mb-3 container-calendar">
                    <div style="height: 600px; width: 800px;">
                        <label>Calendario de eventos Salud Ambiental</label>
                        <div class="col-10 offset-1" >
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Cerrar" class="close" onclick=CloseModal()>X</a>
        <h2 id="titulo"></h2>
        <p id="cuerpo"></p>
    </div>
</div>
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/locale/es.js'></script>
<script>
    function CloseModal() {
        document.getElementById('openModal').style.display = 'none';
    }
    $(document).ready(function() {

        // pass _token in all ajax
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // initialize calendar in all events
        var calendar = $('#calendar').fullCalendar({
            initialView: 'dayGridMonth',
            editable: true,
            locale: 'es',
            events: "{{ route('calendar.index') }}",
            displayEventTime: true,
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
            eventClick: function (event) {
                console.log("d".charCodeAt(0))
                var start = $.fullCalendar.formatDate(event.start, "dddd DD MMMM [de] YYYY");
                document.getElementById('titulo').innerText = start;
                document.getElementById('cuerpo').innerText = event.title;
                document.getElementById('openModal').style.display = 'block';
            }
        });
    });
</script>
@endsection