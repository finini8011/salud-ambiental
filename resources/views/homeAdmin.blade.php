@extends('layout')


@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Theme style -->



@endsection
@section('contenido')
<div class="wrapper min-ancho">
    <div class="container-fluid">
        <br /><br />
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Introduzca los datos para ingresar</p>
                <form action="{{ route('inicioAdmin') }}" method="post">
                {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="pass" type="password" class="form-control" placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-block" style="color:white;background-color:#1334eeb3;border-color:#1334eeb3 ">Enviar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
        <br /><br />
    </div>
</div>
</div>

@endsection
@section('scripts')

<script>
    
</script>
@endsection