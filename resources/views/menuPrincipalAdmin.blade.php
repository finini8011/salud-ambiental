@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Menús Principales</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveMenu') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Texto #1</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[0]['id'] }}" value="{{ $menu[0]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="{{ $menu[0]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #2</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[1]['id'] }}" value="{{ $menu[1]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="{{ $menu[1]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #3</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[2]['id'] }}" value="{{ $menu[2]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #3</label>
                    <input type="file" class="form-control" name="{{ $menu[2]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #4</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[3]['id'] }}" value="{{ $menu[3]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #4</label>
                    <input type="file" class="form-control" name="{{ $menu[3]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #5</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[4]['id'] }}" value="{{ $menu[4]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #5</label>
                    <input type="file" class="form-control" name="{{ $menu[4]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #6</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[5]['id'] }}" value="{{ $menu[5]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #6</label>
                    <input type="file" class="form-control" name="{{ $menu[5]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #7</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[6]['id'] }}" value="{{ $menu[6]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #7</label>
                    <input type="file" class="form-control" name="{{ $menu[6]['id'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #8</label>
                    <input type="text" class="form-control form-control-user" name="{{ $menu[7]['id'] }}" value="{{ $menu[7]['nombre'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #8</label>
                    <input type="file" class="form-control" name="{{ $menu[7]['id'] }}">
                </div>
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>

        </div>
    </div>
@endsection