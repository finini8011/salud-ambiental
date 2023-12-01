@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Botones</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Link #1</label>
                    <input type="text" class="form-control form-control-user" name="link-53" value="{{ $data[52]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-48">
                </div>
                <div class="form-group">
                    <label for="texto">Link #2</label>
                    <input type="text" class="form-control form-control-user" name="link-54" value="{{ $data[53]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="archivo-49">
                </div>
                <div class="form-group">
                    <label for="texto">Link #3</label>
                    <input type="text" class="form-control form-control-user" name="link-55" value="{{ $data[54]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #3</label>
                    <input type="file" class="form-control" name="archivo-50">
                </div>
                <div class="form-group">
                    <label for="texto">Link #4</label>
                    <input type="text" class="form-control form-control-user" name="link-56" value="{{ $data[55]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #4</label>
                    <input type="file" class="form-control" name="archivo-51">
                </div>
                <div class="form-group">
                    <label for="texto">Link #5</label>
                    <input type="text" class="form-control form-control-user" name="link-57" value="{{ $data[56]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #5</label>
                    <input type="file" class="form-control" name="archivo-52">
                </div>
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>

        </div>
    </div>
@endsection