@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/indicator.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/secAmbiente.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/questions.css')}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class=" d-inline-block" >
                            <img class="concept-title d-inline-block"  src="{{asset($paginaAnexa[0]['componente1'] ?? '')}}" alt="">
                        </div>
                        <br>
                        <div class="d-inline-block titulo-contenido px-5">
                        <p><span style="color: #ffffff;"><strong>{{$paginaAnexa[0]['componente2'] ?? ''}}</strong></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row ">
                        <div class="col-12 date-time-title">
                            <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" id="reloj">
                            Fecha y hora
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <a href="{{ $data[44]['datos'] }}">
                                <img src="{{asset($data[41]['datos'])}}" alt="calidad aire" class="img-calidad-aire">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ $data[45]['datos'] }}">
                                <img src="{{asset($data[42]['datos'])}}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ $data[46]['datos'] }}">
                                <img  src="{{asset($data[43]['datos'])}}" alt="clima actual" class="img-clima-actual">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                    {!! nl2br($paginaAnexa[0]['componente6'] ?? '') !!}
                </div>
                    <p class="notaPiePagina">&nbsp;</p>
                
            </div>

            
        </div>
    </div>

@endsection
@section('scripts')
    @if ( session('mensaje') )
        <script>
            //alert("El archivo no existe");
        </script>
    @endif
    <script type='text/javascript'  src="{{asset('js/news/news.js')}}"></script>
@endsection
