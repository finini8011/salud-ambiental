@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Crear/Modificar Página</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('savePagina') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="texto">Patrón</label>
                    <input type="text" class="form-control form-control-user" name="patron" value="{{ $id != 0 ? $pagina['patron'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="texto">Título</label>
                    <input type="text" class="form-control form-control-user" name="titulo" value="{{ $id != 0 ? $pagina['titulo'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="texto">Link Interno</label>
                    <input type="text" class="form-control form-control-user" name="link_interno" value="{{ $id != 0 ? $pagina['link_interno'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="file">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                <div class="form-group">
                    <label for="file">Banner</label>
                    <input type="file" class="form-control" name="banner">
                </div>
                <div class="form-group">
                    <label for="texto">Link Banner</label>
                    <input type="text" class="form-control form-control-user" name="link_banner" value="{{ $id != 0 ? $pagina['link_banner'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="texto">Cuerpo</label>
                    <textarea class="form-control" rows="20" cols="120" name="cuerpo">
                        {{ $id != 0 ? $pagina['cuerpo'] : '' }}
                    </textarea>
                </div>
                <input type="hidden" name="idPagina" id="idPagina" value="{{ $id }}">
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3">Guardar</button>
            </form>

        </div>
    </div>
@endsection