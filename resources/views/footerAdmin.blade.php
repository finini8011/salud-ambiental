@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Footer</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Link #1</label>
                    <input type="text" class="form-control form-control-user" name="link-104" value="{{ $data[103]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-98">
                </div>
                <div class="form-group">
                    <label for="texto">Link #2</label>
                    <input type="text" class="form-control form-control-user" name="link-105" value="{{ $data[104]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="archivo-99">
                </div>
                <div class="form-group">
                    <label for="texto">Link #3</label>
                    <input type="text" class="form-control form-control-user" name="link-106" value="{{ $data[105]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #3</label>
                    <input type="file" class="form-control" name="archivo-100">
                </div>
                <div class="form-group">
                    <label for="texto">Link #4</label>
                    <input type="text" class="form-control form-control-user" name="link-107" value="{{ $data[106]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #4</label>
                    <input type="file" class="form-control" name="archivo-101">
                </div>
                <div class="form-group">
                    <label for="texto">Link #5</label>
                    <input type="text" class="form-control form-control-user" name="link-108" value="{{ $data[107]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #5</label>
                    <input type="file" class="form-control" name="archivo-102">
                </div>
                <div class="form-group">
                    <label for="texto">Link #6</label>
                    <input type="text" class="form-control form-control-user" name="link-109" value="{{ $data[108]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #6</label>
                    <input type="file" class="form-control" name="archivo-103">
                </div>
                <div class="form-group">
                    <label for="texto">Link #7</label>
                    <input type="text" class="form-control form-control-user" name="link-114" value="{{ $data[113]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #7</label>
                    <input type="file" class="form-control" name="archivo-110">
                </div>
                <div class="form-group">
                    <label for="texto">Link #8</label>
                    <input type="text" class="form-control form-control-user" name="link-115" value="{{ $data[114]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #8</label>
                    <input type="file" class="form-control" name="archivo-111">
                </div>
                <div class="form-group">
                    <label for="texto">Link #9</label>
                    <input type="text" class="form-control form-control-user" name="link-116" value="{{ $data[115]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #9</label>
                    <input type="file" class="form-control" name="archivo-112">
                </div>
                <div class="form-group">
                    <label for="texto">Link #10</label>
                    <input type="text" class="form-control form-control-user" name="link-117" value="{{ $data[116]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #10</label>
                    <input type="file" class="form-control" name="archivo-113">
                </div>
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>
        </div>
    </div>
@endsection