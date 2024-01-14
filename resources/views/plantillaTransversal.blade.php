@extends('layout')
@section('styles')
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/indicator.css')}}" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/secAmbiente.css')}}" />
@endsection
@section('contenido')
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-8">
                    <br clear="left">
                    <img src="{{asset('img/iconoHome.png')}}" width="42" height="38" alt="Ir al home" />
                    <span class="breadcrumb_"> | {{$transveralId['patron']}} |</span>
                    <span class="breadcrumb_ {{ $color[0] }}">{{ $transveralId['titulo'] }}</span>
                    <div width="300px">
                        <img src="{{asset($transveralId['logo_titulo'])}}" width="100%" alt="" />
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
                <div>
                    <a href="<?= $data[1]['datos'] ?>" id= "icon2"class="redes pl-1.5 pt-1" style="margin-top: 40px; margin-left:0px;">
                        <img  src="{{asset($data[0]['datos'])}}" alt="" style="height:32px" width="46px">
                    </a>
                    <a href="<?= $data[3]['datos'] ?>" class="redes pl-1 pt-2" style="margin-top: 100px; margin-left:0px;">
                        <img  src="{{asset($data[2]['datos'])}}" alt="" style="height: 80%">
                    </a>
                    <a href="<?= $data[5]['datos'] ?>" class="redes pl-2 pt-2" style="margin-top: 160px; margin-left:0px;">
                        <img  src="{{asset($data[4]['datos'])}}" alt="" style="height: 95%">
                    </a>
                    <a href="<?= $data[7]['datos'] ?>" class="redes pl-1 pt-2" style="margin-top: 220px; margin-left:0px;">
                        <img  src="{{asset($data[6]['datos'])}}" alt="" style="height: 70%">
                    </a>
                </div>

                <div height="355">
                    <a href="{{ $transveralId['link_banner'] }}">
                        <img class="d-block w-100 altura" src="{{asset($transveralId['banner'])}}" width="1140" height="340">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="contenidoSecAmb centradoDiv">
                    {!! nl2br($transveralId['cuerpo']) !!}
                </div>
                    <p class="notaPiePagina">&nbsp;</p>
                
            </div>

            <div class="row">
               <hr class="{{ $color[1] }} mt80" style="width: 100%;">
            </div>

            <div class="logos {{ $color[2] }} bold140p">
                @foreach($transversales as $data)
                    @if($data['menu_id'] == $menuId)
                        <div class="centrado {{ $color[2] }}">
                            <p class="{{ $color[2] }}">{{ $data['titulo'] }}</p>
                            <a href="{{asset('loadViewMenuTransversal/' . $data['link_interno']) . '/' . $menuId }}">
                                <img src="{{asset($data['logo_boton'])}}" width="85" height="63">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>

            </div>
            </div>

        </div>
    </div>


@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset('js/news/news.js')}}"></script>
@endsection
