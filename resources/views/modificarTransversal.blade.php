@extends('templateME')

@section('contenido')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Modificar Transversal</h1>
    </div>

    <div class="card">
        <div class="card-body login-card-body">

            <form action="{{ route('saveTransversales') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="activo">Estado</label>
                    <input id="toggle-event" type="checkbox" <?= $transversales['activo'] ? 'checked' : '' ?> data-width="100" data-toggle="toggle" data-size="sm" data-on="Activo" data-off="Inactivo">
                </div>
                <div class="form-group">
                    <label for="texto">Patrón</label>
                    <input type="text" class="form-control form-control-user" name="patron" value="{{ $id != 0 ? $transversales['patron'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control form-control-user" name="titulo" value="{{ $id != 0 ? $transversales['titulo'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="texto">Link Interno</label>
                    <input type="text" class="form-control form-control-user" name="link_interno" value="{{ $id != 0 ? $transversales['link_interno'] : '' }}">
                </div>
                <div class="form-group">
                    <label for="logo_boton">Logo de Botón</label>
                    <input type="file" class="form-control" name="logo_boton">
                </div>
                <div class="form-group">
                    <label for="logo_titulo">Logo de Título</label>
                    <input type="file" class="form-control" name="logo_titulo">
                </div>
                <div class="form-group">
                    <label for="file">Banner</label>
                    <input type="file" class="form-control" name="banner">
                </div>
                <div class="form-group">
                    <label for="texto">Link Banner</label>
                    <input type="text" class="form-control form-control-user" name="link_banner" value="{{ $transversales['link_banner'] }}">
                </div>
                <div class="form-group">
                    <label for="texto">Cuerpo</label>
                    <br>
                    <textarea rows="20" cols="120" name="cuerpo">
                        {{ $transversales['cuerpo'] }}
                    </textarea>
                </div>
                <input type="hidden" name="idTransversales" id="idTransversales" value="{{ $id }}">
                <input type="hidden" name="activo" id="estado" value="{{ $transversales['activo'] }}">
                <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3">Guardar</button>
            </form>
        </div>
    </div>
@endsection