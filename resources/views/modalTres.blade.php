@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modal #3</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Título #1</label>
                    <input type="text" class="form-control form-control-user" name="link-84" value="{{ $data[83]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Título #2</label>
                    <input type="text" class="form-control form-control-user" name="link-85" value="{{ $data[84]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Texto #1</label>
                    <textarea id="basic-example" name="link-86">
                    {{ $data[85]['datos'] }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-87">
                </div>
                
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>

        </div>
    </div>
@endsection