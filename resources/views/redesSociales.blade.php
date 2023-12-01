@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Redes Sociales</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Link #1</label>
                    <input type="text" class="form-control form-control-user" name="link-2" value="<?= $data[1]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-1">
                </div>
                <div class="form-group">
                    <label for="texto">Link #2</label>
                    <input type="text" class="form-control form-control-user" name="link-4" value="<?= $data[3]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="archivo-3">
                </div>
                <div class="form-group">
                    <label for="texto">Link #3</label>
                    <input type="text" class="form-control form-control-user" name="link-6" value="<?= $data[5]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #3</label>
                    <input type="file" class="form-control" name="archivo-5">
                </div>
                <div class="form-group">
                    <label for="texto">Link #4</label>
                    <input type="text" class="form-control form-control-user" name="link-8" value="<?= $data[7]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #4</label>
                    <input type="file" class="form-control" name="archivo-7">
                </div>
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>

        </div>
    </div>
@endsection