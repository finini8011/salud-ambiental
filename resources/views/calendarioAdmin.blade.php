@extends('templateAR')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">Calendario</h1>
    </div>

    <div class="card" id="card1">
        <div class="card-header bg-light">
            <h1 class="h4 mb-0 text-gray-500">Cargar eventos</h1>
        </div>
        <div class="card-body login-card-body">
            <label>Calendario de eventos Salud Ambiental</label>
            <div class="col-10 offset-1" >
                <div id='calendar'></div>
            </div>
        </div>
    </div>
@endsection