@extends('templateDA')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Carrusel #1</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveFile') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Link #1</label>
                    <input type="text" class="form-control form-control-user" name="link-23" value="{{ $data[22]['datos'] }}">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #1</label>
                    <input type="file" class="form-control" name="archivo-9">
                </div>
                <div class="form-group">
                    <label for="texto">Link #2</label>
                    <input type="text" class="form-control form-control-user" name="link-24" value="<?= $data[23]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #2</label>
                    <input type="file" class="form-control" name="archivo-10">
                </div>
                <div class="form-group">
                    <label for="texto">Link #3</label>
                    <input type="text" class="form-control form-control-user" name="link-25" value="<?= $data[24]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #3</label>
                    <input type="file" class="form-control" name="archivo-11">
                </div>
                <div class="form-group">
                    <label for="texto">Link #4</label>
                    <input type="text" class="form-control form-control-user" name="link-26" value="<?= $data[25]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #4</label>
                    <input type="file" class="form-control" name="archivo-12">
                </div>
                <div class="form-group">
                    <label for="texto">Link #5</label>
                    <input type="text" class="form-control form-control-user" name="link-27" value="<?= $data[26]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #5</label>
                    <input type="file" class="form-control" name="archivo-13">
                </div>
                <div class="form-group">
                    <label for="texto">Link #6</label>
                    <input type="text" class="form-control form-control-user" name="link-28" value="<?= $data[27]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #6</label>
                    <input type="file" class="form-control" name="archivo-14">
                </div>
                <div class="form-group">
                    <label for="texto">Link #7</label>
                    <input type="text" class="form-control form-control-user" name="link-29" value="<?= $data[28]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #7</label>
                    <input type="file" class="form-control" name="archivo-15">
                </div>
                <div class="form-group">
                    <label for="texto">Link #8</label>
                    <input type="text" class="form-control form-control-user" name="link-30" value="<?= $data[29]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #8</label>
                    <input type="file" class="form-control" name="archivo-16">
                </div>
                <!-- <div class="form-group">
                    <label for="texto">Link #9</label>
                    <input type="text" class="form-control form-control-user" name="link-31" value="?= $data[30]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #9</label>
                    <input type="file" class="form-control" name="archivo-17">
                </div>
                <div class="form-group">
                    <label for="texto">Link #10</label>
                    <input type="text" class="form-control form-control-user" name="link-32" value="?= $data[31]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #10</label>
                    <input type="file" class="form-control" name="archivo-18">
                </div>
                <div class="form-group">
                    <label for="texto">Link #11</label>
                    <input type="text" class="form-control form-control-user" name="link-33" value="?= $data[32]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #11</label>
                    <input type="file" class="form-control" name="archivo-19">
                </div>
                <div class="form-group">
                    <label for="texto">Link #12</label>
                    <input type="text" class="form-control form-control-user" name="link-34" value="?= $data[33]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #12</label>
                    <input type="file" class="form-control" name="archivo-20">
                </div>
                <div class="form-group">
                    <label for="texto">Link #13</label>
                    <input type="text" class="form-control form-control-user" name="link-35" value="?= $data[34]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #13</label>
                    <input type="file" class="form-control" name="archivo-21">
                </div>
                <div class="form-group">
                    <label for="texto">Link #14</label>
                    <input type="text" class="form-control form-control-user" name="link-36" value="?= $data[35]['datos'] ?>">
                </div>
                <div class="form-group">
                    <label for="file">Imagen #14</label>
                    <input type="file" class="form-control" name="archivo-22">
                </div> -->
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Guardar</button>
            </form>
        </div>
    </div>
@endsection