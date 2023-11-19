@extends('layout')
@section('titulo')

@section('styles')

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset("css/news.css")}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
@endsection
@section('contenido')
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div >
                <a href="<?= $data[1]['datos'] ?>" id= "icon2"class="redes pl-1.5 pt-1" style="margin-top: 30px">
                    <img  src="<?= $data[0]['datos'] ?>" alt="" style="height:32px" width="46px">
                </a>
                <a href="<?= $data[3]['datos'] ?>" class="redes pl-1 pt-2" style="margin-top: 90px">
                    <img  src="<?= $data[2]['datos'] ?>" alt="" style="height: 80%">
                </a>
                <a href="<?= $data[5]['datos'] ?>" class="redes pl-2 pt-2" style="margin-top: 150px">
                    <img  src="<?= $data[4]['datos'] ?>" alt="" style="height: 95%">
                </a>
                <a href="<?= $data[7]['datos'] ?>" class="redes pl-1 pt-2" style="margin-top: 210px">
                    <img  src="<?= $data[6]['datos'] ?>" alt="" style="height: 70%">
                </a>
            </div>

                   <!--    MÓDULO BANNERS HOME-->
            <div id="carouselExampleIndicators" class="carousel slide carousel-news" data-ride="carousel">
                <ol class="carousel-indicators">

                    <?php $b = 0; ?>
                    @for ($i = 0; $i <= 7; $i++)
                        @isset($data[$i+22]['datos'])
                            @if($b == 0)
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                                <?php $b = 1; ?>
                            @else
                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                            @endif
                        @endisset
                    @endfor
                        
                </ol>
                
                    <div class="carousel-inner">

                    <?php $a = 0; ?>
                    @for ($i = 0; $i <= 7; $i++)
                        @isset($data[$i+22]['datos'])
                            @if($a == 0)
                                <div class="carousel-item active">
                                    <a classs="img-webpo"  href="{{ $data[$i+22]['datos'] }}">
                                        <img class="d-block w-100 altura" src="{{ $data[$i+8]['datos'] }}" alt="Eighth slide">
                                    </a>
                                </div>
                                <?php $a = 1; ?>
                            @else
                                <div class="carousel-item">
                                    <a classs="img-webpo"  href="{{ $data[$i+22]['datos'] }}">
                                        <img class="d-block w-100 altura" src="{{ $data[$i+8]['datos'] }}" alt="Eighth slide">
                                    </a>
                                </div>
                            @endif
                        @endisset
                    @endfor

                 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                 </a>

                 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                 </a>
            </div>
        </div>
    </div>
           <!--    MÓDULO BOTONES HORA FECHA NOMBRE BOGOTÁ Y NOTICIAS-->
    <div class="wrapper min-ancho">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="d-inline-block">
                        <img class="concept-title d-inline-block"  src="{{asset('img/news/Iconomodulonoticias.svg')}}" alt="">
                </div>
                <div class="col-7">
                        <div class="row">
                            <div class="col-10 date-time-title">
                            Cuida el ambiente
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10 date-time" >
                            <font COLOR="White">
                              <h3><b><v>VIVE</b></v> saludablemente</h3></font> 
                            </div>
                        </div>
                </div>
                <div class="col-4 ml-4">
                    <div class="row">
                        <div class="col-12 date-time-title">
                           <span>Bogotá hoy</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 date-time" id="reloj">
                           Fecha y hora
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mr-2 fluid-left">
                    <div id="rootwizard">
                        <div class="content-inside tab-content" data-duration="1000"> 
                            <div class="tab-pane active" id="tab1">
                              <section class="content">
                                <div class="header-content col-12">
                                    <div class="row ">
                                       
                                        <div class="row cont-inside">
                                            <div class="col-12">
                                                <div class="row mr-1">
                                                    <div class="col" style="text-align: justify">

                                                 <!--    MÓDULO NOTICIAS-->
                                                       
                <div id="carouselExample" class="carousel slide carousel-news" data-ride="carousel">
                   <ol class="carousel-indicators">
                        <dl data-target="#carouselExample" data-slide-to="12" class="active"></dl>
                        <dl data-target="#carouselExample" data-slide-to="13"></dl>
                        <dl data-target="#carouselExample" data-slide-to="14"></dl>
                        <dl data-target="#carouselExample" data-slide-to="15"></dl>
                        <dl data-target="#carouselExample" data-slide-to="16"></dl>
                    </ol> 
                 <div class="carousel-inner">
                   <div class="carousel-item active" class="tab-pane" id="tab4">
                     <a data-toggle="modal" data-target="#exampleModal" data-line="new" data-title="{{ $data[75]['datos'] }}" data-response="new-4">
                     <em style="color: blue; cursor: pointer;"><img class="d-block w-80 altura" style="height:500px; width:711px" classs="img-webpo"  src="{{ $data[36]['datos'] }}"></a></em>
                      </div>
                      <div class="carousel-item" class="tab-pane" id="tab2">
                     <a data-toggle="modal" data-target="#exampleModal" data-line="new" data-title="{{ $data[79]['datos'] }}" data-response="new-2">
                     <em style="color: blue; cursor: pointer;"><img class="d-block w-80 altura" style="height:500px; width:711px" classs="img-webpo"  src="{{ $data[37]['datos'] }}"></a></em>
                     </div>
                     <div class="carousel-item" class="tab-pane" id="tab3">
                     <a data-toggle="modal" data-target="#exampleModal" data-line="new" data-title="{{ $data[83]['datos'] }}" data-response="new-3">
                     <img class="d-block w-80 altura" style="height:500px; width:711px" src="{{ $data[38]['datos'] }}"></a></em>
                      </div>
                      <div class="carousel-item" data-duration="1000" class="tab-pane" id="tab5">
                      <a data-toggle="modal" data-target="#exampleModal" data-line="new" data-title="{{ $data[87]['datos'] }}" data-response="new-5">
                      <em style="color: blue; cursor: pointer;"><img class="d-block w-80 altura" style="height:500px; width:711px" src="{{ $data[39]['datos'] }}"></a></em>   
                      </div>
                      <div class="carousel-item" id="tab1">
                         <em style="color: blue; cursor: pointer;">
                         <a data-toggle="modal" data-target="#exampleModal" data-line="new" data-title="{{ $data[91]['datos'] }}" data-response="new-1">
                            <img class="d-block w-80 altura"  style="height:500px; width:711px"src="{{ $data[40]['datos'] }}"></a></em>
                      </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>

                  <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                 </a>
                 </div>
     
            </div>
        </div>
    </div>
                                </section>
                            </div>
                        </div>

                                                                 <!--    MÓDULO INDICADORES DESTACADOS IBOCA, INDICE UV Y CLIMA ACTUAL-->
                    </div>
                </div>
                <div class="col-4" style="margin-left: 7px;">
                    <div class="d-flex justify-content-center">
                        <div class="col-4">
                            <a classs="img-webpo"  href="{{ $data[44]['datos'] }}">
                                <img src="{{ $data[41]['datos'] }}" alt="calidad aire" class="img-calidad-aire">
                            </a>
                        </div>
                        <div class="col-4">
                            <a classs="img-webpo" href="{{ $data[45]['datos'] }}">
                                <img src="{{ $data[42]['datos'] }}" alt="indice uv" class="img-indice-uv">
                            </a>
                        </div>
                        <div class="col-4">
                            <a classs="img-webpo" href="{{ $data[46]['datos'] }}">
                                <img  src="{{ $data[43]['datos'] }}" alt="clima actual" class="img-clima-actual">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <a href="{{asset('calendario')}}">
                            <div class="mt-3 container-calendar">
                                <label>Calendario de eventos Salud Ambiental</label>
                                <div class="col-10 offset-1" >
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="row">
                        

                <ol class="row1 subsections my-5">
                    <li style="display: none" class="">
                    </li>
                         <li class="logo logo_rest">
                          <div data-target="#homeSlider" data-slide-to="5">
                            <div logo logo_rest></div>
                            
                          </div>
                         <div class="text-right mt-2">
                            <div class="btn yellow"><a href="{{asset("politica_cronica")}}">Crónicas de ciudad</a></div>
                           </div>
                         </li>
                       </ol>
                            </div> 
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
                        <!--    MÓDULO BOTONES AUTORREGULACIÓN, LISTADO DE FAVORABLES, ESTABLECIMIENTOS ACREDITADOS, REGISTRE AQUÍ-->
    <div class="wrapper min-ancho">
        <table width="100%">
        <tr>
                <td width="25%">
                    <a classs="img-webpo"  href="{{ $data[52]['datos'] }}">
                        <img class="d-block altura" src="{{ $data[47]['datos'] }}" style="height:200px; width:200px;">
                    </a>
                </td>
                <td width="25%">
                        <a classs="img-webpo"  href="{{ $data[53]['datos'] }}" class="boton-registe">
                            <img src="{{ $data[48]['datos'] }}" style="height:120px; width:220px">
                        </a>
                    </td>
                    <td width="25%">
                        <a classs="img-webpo"  href="{{ $data[54]['datos'] }}" class="boton-registe">
                            <img src="{{ $data[49]['datos'] }}" style="height:120px; width:220px">
                        </a>
                    </td>
                <td width="25%">
                        <a classs="img-webpo"  href="{{ $data[55]['datos'] }}">
                            <img src="{{ $data[50]['datos'] }}" style="height:120px; width:220px">
                        </a>
                    </td>
                <td width="25%"style="text-align: center;">
                    <a classs="img-webpo"  href="{{ $data[56]['datos'] }}">
                        <img src="{{ $data[51]['datos'] }}" style="height:120px; width:200px">
                    </a>
                </td>
                </tr>
            </table>
    </div>
                                                 <!--    MÓDULO BANER INDICADOR DESTACADO-->
<br>
    <div class="content-wrapper min-ancho" >

        <div class="wrapper">
            <div class="container-fluid">
                <div class="row mb-3">
                   <a classs="img-webpo"  href="{{ $data[58]['datos'] }}">
                      <img class="d-block w-100" src="{{ $data[57]['datos'] }}" alt="Indicador principal">
                    </a>
                </div>
            </div>
        </div>
    </div>

                                                     <!--    MÓDULO FORMULARIO DE CONTÁCTENOS-->
    <div class="content-wrapper min-ancho">
        <div class="wrapper min-ancho">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class=" d-inline-block">
                        <div class="row">
                          <div class="col-7">
                                <form id ="form-contactenos" class="form-contactenos">
                                    <div class="row align-items-start mt-4">
                                        <div class="col-4 icono-contactenos media">
                                            <img src="{{asset('img/contactenos/IconoContactenos.svg')}}" alt="" style="width: 70px;">
                                            <div>
                                                <h3 class="pt-3">Contáctenos</h3>
                                            </div>
                                        </div>
                                        <div class="col-6 offset-2 pt-4">
                                            <label >Eres:&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                Propietario  <input type="radio" name="optradio" value="propietario" checked> &nbsp;&nbsp;
                                            </label>
                                            <label class="radio-inline">
                                                Ciudadano <input type="radio" name="optradio" value="ciudadano">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mt-3">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    {{-- <div class="form-group row">
                                                        <label for="Nombre" class="col-sm-2 col-form-label">Nombre: </label>
                                                        <div class="col-sm-9 offset-1">
                                                            <input type="text" class="form-control" id="nombre" placeholder="">
                                                        </div>
                                                    </div> --}}
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-user"></i></span>
                                                        </div>
                                                        <input id="name" name="nombre" type="text" class="form-control" placeholder="Nombre" required="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-flag"></i></span>
                                                        </div>
                                                        <input id="localidad" name="localidad" type="text" class="form-control" placeholder="Localidad" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-phone"></i></span>
                                                        </div>
                                                        <input id="telefono" name="telefono" type="number" class="form-control" placeholder="Teléfono" required="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-heart"></i></span>
                                                        </div>
                                                        <input id="temainteres" name="temainteres" type="text" class="form-control" placeholder="Tema de Interés" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6">

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-envelope"></i></span>
                                                        </div>
                                                        <input id="correo" name="correo" type="email" class="form-control" placeholder="Correo electrónico" required="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="inputIconBox"><i class="fas fa-edit"></i></span>
                                                        </div>
                                                        <input id="comentarios" name="comentarios" type="text" class="form-control" placeholder="Comentarios" required="">
                                                    </div>
                                                    {{-- <div class="form-group row">
                                                        <label for="comentarios" class="col-sm-5 col-form-label">Comentarios: </label>
                                                        <div class="col-sm-7">
                                                            <textarea name="comentarios" id="comentarios" cols="18" rows="3"></textarea>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        {{--<div class="row">
                                                <div class="col-6">
                                                    {{-- <div class="form-group row">
                                                        <label for="tiponegocio" class="col-sm-5 col-form-label">Tipo de negocio: </label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" id="tiponegocio" placeholder="">
                                                        </div>
                                                    </div> -}}
                                                    <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="inputIconBox"><i class="fas fa-building"></i></span>
                                                              
                                                            <input id="tiponegocio" name="tiponegocio" type="text" class="form-control" placeholder="Tipo de negocio" required="">
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="row mt-1 justify-content-end">
                                                <div class="col-3 offset-1">
                                                    <div  class="btn blue w-100 py-2"  data-toggle="modal" data-target="#contactModal" data-line="contact-send" >Enviar</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>         
                               <br>
                               <br> 
                     <div class="d-flex justify-content-center">
                    <iframe width="500" height="360" src="{{ $data[73]['datos'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>  
                    </div>
                    </div>
                                                 <!--    MÓDULO BOTÓN PREGUNTAS FRECUENTES-->
                            <div class="d-flex justify-content-center"> 
                                <div class="col-4 ml-4">
                                    <div class="col-12">
                                        <a href="{{ $data[63]['datos'] }}">
                                            <div class="container-contactenos">
                                                <div class="rectangulo-contactenos">
                                                    <div class="row align-items-center ml-3 mt-1">
                                                        <div class="d-inline-block ">
                                                            <img  class="right-bottom-menu" src="{{ $data[59]['datos'] }}" alt=""  style="height:40.9px;">
                                                        </div>
                                                        <div class="d-inline menu-header-interno preguntas-frecuentes">
                                                            <label>{{ $data[61]['datos'] }}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <br>
                                       <!--    MÓDULO BOTÓN OFICINAS DE ATENCION AL AMBIENTE-->
                                        <a  href="{{ $data[64]['datos'] }}">
                                            <div class="container-oficinas">
                                                <div class="rectangulo-contactenos">
                                                    <div class="row align-items-center ml-3">
                                                        <div class="d-inline-block ">
                                                            <img  class="right-bottom-menu" src="{{ $data[60]['datos'] }}" alt=""  style="height:40.9px;">
                                                        </div>
                                                        <div class="d-inline menu-header-interno oficinas">
                                                            <label class="mt-2">{!! nl2br($data[62]['datos']) !!}</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <br>
                                <!--    MÓDULO BOTONES PUNTOS DE RECOLECCIÓN-->
                                        <div class="puntos-recoleccion">
                                            <label >Ubica los puntos de recolección</label>
                                        </div>
                                        <table class="">
                                        <tr>
                                        <td width="25%">
                                            <a classs="img-webpo"  href="{{ $data[69]['datos'] }}">
                                                <img  class="right-bottom-menu" src="{{ $data[65]['datos'] }}" alt=""  style="height:58px;">
                                            </a>
                                        </td>
                                        <td width="25%">
                                            <a classs="img-webpo" href="{{ $data[70]['datos'] }}">
                                                <img  class="right-bottom-menu" src="{{ $data[66]['datos'] }}" alt=""  style="height:58px;">
                                            </a>
                                        </td>
                                        <td width="25%">
                                            <a classs="img-webpo" href="{{ $data[71]['datos'] }}">
                                                <img  class="right-bottom-menu" src="{{ $data[67]['datos'] }}" alt=""  style="height:58px;">
                                            </a>
                                        </td>
                                        <td width="25%">
                                            <a classs="img-webpo" href="{{ $data[72]['datos'] }}">
                                                <img  class="right-bottom-menu" src="{{ $data[68]['datos'] }}" alt=""  style="height:58px;">
                                            </a>
                                        </td>
                                     </tr>
                              </table>
                              <br>
                              <br>
                            <div class="twitter">
                              <a class="twitter-timeline" classs="img-webpo" href="{{ $data[74]['datos'] }}" width="280px" height="400px">Tweets by SectorSalud</a>
                             <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                             
                        </div>
                            </div>                                                      
          
           <div class="col-7">    
              <div class="row">
               <div class="col-12">

          </div>
        </div>
      
    </div>
                            <!-- Modal MENSAJES INFORMATIVO -->
                                    <div class="modal fade  bd-example-modal-lg" id="ETOZModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="ument">
                                        <div class="modal-content alert-ambiental">
                                            <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
                                                <h5 class="modal-title" id="exampleModalLabel">La secretaría Distrital de Salud informa que se suspende temporalmente la vacunación antirrábica canina y felina gratuita realizada a través de las Subredes Integradas de Servicio de Salud. Se espera retomar las jornadas hacia la última semana de septiembre</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
    <!-- Modal -->
    <div class="modal fade  bd-example-modal-lg" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="ument">
            <div class="modal-content alert-ambiental">
                <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
                    <h5 class="modal-title" id="exampleModalLabel">¿Desea recibir más información sobre salud ambiental?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
               

                <div class="modal-body">
                    <form>
                        <input type="radio" name="gender" value="male"> Acepta los términos y condiciones: autorizo expresamente a las Secretaría  Distrital de Salud,
                        para hacer uso y tratamiento de datos personales de conformidad con lo previsto en Decreto 1377 de 2013 que reglamenta la Ley 1581 de 2012. (Política de Protección de Datos Personales)
                        <br>
                    </form>
                </div>
                <div class="modal-footer" style="border-top: 0px solid #dee2e6; align-items: center; justify-content:center;">
                    <div class="container-fluid">
                        <div class="row justify-content-between">
                            <div class="col offset-2">
                                <button type="button" class="btn btn-modal" data-dismiss="modal">No, Gracias</button>
                            </div>
                            <div class="col">
                                <button id="btn-enviar" type="button" class="btn btn-modal">Sí, suscribirme</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="
        dialog " role="document">
            <div class="modal-content alert-ambiental">
                <div class="modal-header" style="border-bottom: 0px solid #dee2e6;">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Debe ingresar toda la información solicitada.
                </div>
                <div class="modal-footer" style="border-top: 0px solid #dee2e6; align-items: center; justify-content:center;">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col offset-4">
                                <button type="button" class="btn btn-modal" data-dismiss="modal">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: justify;">
             </div>
          </div>
         </div>
    </div>


     <!-- Modal -->
     <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content1">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: justify;">
             </div>
          </div>
         </div>
    </div>

    <div>

<div class="modal fade" id="dialogo1">
<div class="modal-dialog modal modal-dialog-centered">
<div class="modal-content1">

</div>
</div>
</div> 

</div>
 </div>
 
                                                 <!-- VENTANAS Y COMPLEMENTO DE MODULO DE NOTICIAS -->
    <div hidden>
        <div id="new-5">
            <div class="row cont-inside">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-10-justify-content-center" >
                            <p><strong>{{ $data[88]['datos'] }}</strong></p>
                            <img  src="{{ $data[90]['datos'] }}" class="rounded float-left"style="height: 230px; width:360px" style=" margin-right: 10px;">
                            {!! nl2br($data[89]['datos']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="new-4">
            <div class="row cont-inside">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-10-justify-content-center" >
                            <p><strong>{{ $data[76]['datos'] }}</strong></p>
                            <img  src="{{ $data[78]['datos'] }}" class="rounded float-left"style="height: 230px; width:340px" style=" margin-right: 10px;">
                            <p style="text-align:justify; margin-left: 5px;">
                            {!! nl2br($data[77]['datos']) !!}
                        </p>
                        </div>
                    </div> 

                </div>
            </div>
        </div>
        <div id="new-1">
            <div class="row cont-inside">
                <div class="col-10 offset-1">
                   
                    <div class="row">
                        <div class="col-10-justify-content-center" >
                            <p><strong>{{ $data[92]['datos'] }}</strong></p>
                            <img src="{{ $data[94]['datos'] }}" class="rounded float-left" style="height: 260px; width:410px" style=" margin-right: 5px;">
                            {!! nl2br($data[93]['datos']) !!}
                        </div>
                    
                    </div>

                </div>
            </div>
        </div>
        <div id="new-2">
            <div class="row cont-inside">
                <div class="col-12">
                    <div class="row">
                        <div class="col-10-justify-content-center" style="padding:10px;">
                           <p><strong>{{ $data[80]['datos'] }}</strong></p>
                            <img  src="{{ $data[82]['datos'] }}" style=" height: 280px; width:420px; margin-right: 10px;" class="rounded float-left" >
                            <p style="text-align:justify; margin-left: 5px;">
                            {!! nl2br($data[81]['datos']) !!}
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="new-3">
            <div class="row ">
                <div class="col-12">
                    <div class="row">
                          <div class="col-10-justify-content-center" style="padding:10px;">
                            <p><strong>{{ $data[84]['datos'] }}</strong></p>
                            <img src="{{ $data[86]['datos'] }}" class="rounded float-left" style="height:280px; width:470px" style=" margin-right: 10px;">
                            <p style="text-align:justify; padding:10px">
                             {!! nl2br($data[85]['datos']) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')

<script>
    
$('#popupModal').modal('show');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
     $('#exampleModal').on('show.bs.modal', function (event) {
         console.log(event.relatedTarget);
        var button = $(event.relatedTarget);
        var recipient = button.data('title');

        $('#exampleModal').find('.modal-header').addClass(button.data('line'));

        var modal = $(this);
        modal.find('.modal-title').text( recipient);
        modal.find('.modal-body').text('');
        $('#'+button.data('response')).clone().appendTo(modal.find('.modal-body'));
    });
    
    $('#popupModal').on('show.bs.modal', function (event) {
       var button = $(event.relatedTarget);
       var recipient = button.data('title');

       $('#popupModal').find('.modal-header').addClass(button.data('line'));

       var modal = $(this);
       modal.find('.modal-title').text( recipient);
       modal.find('.modal-body').text('');
       $('#popupModal'+button.data('response')).clone().appendTo(modal.find('.modal-body'));
   });
      

    $(function() {
        $('#btn-enviar').click( function(){
            if(  $('#name').val() !== '' && $('#localidad').val() !== '' && $('#telefono').val() !== '' && $('#temainteres').val() !== '' && $('#correo').val() !== '' && $('#comentarios').val() !== '' && $('#tiponegocio').val() !== '' ) {
                $.ajax({
                    method: "POST",
                    url: "{{asset('email')}}",
                    data: {
                        nombre: $("#name").val() ,
                        telefono: $("#telefono").val(),
                        email: $("#correo").val(),
                        localidad: $("#localidad").val(),
                         Interés: $("#temainterés").val(),
                        comentarios: $("#comentarios").val()
                    }
                })
                .done(function( msg ) {
                    alert( "Proceso exitoso: \n" + msg );
                });
            } else {
                $('#contactModal').modal('hide');

                $('#infoModal').modal('show');
            }

        });
    });
    // MÓDULO CALENDARIO DE EVENTOS//
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [  'dayGrid' ],
        defaultDate: new Date(),
        editable: true,
        lang: 'es',
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
           title: 'Día internacional del tatuaje  ”.',
           start: '2023-07-01'
           },
            {
           title: 'Día internacional libre de bolsas  de plástico  ”.',
           start: '2023-07-03'
           },
           {
           title: 'Día de la conservación del suelo      ”.',
           start: '2023-07-07'
           }, 
           {
           title: 'Día del Panadero    ”.',
           start: '2023-07-13'
           },
           {
           title: 'Día del Transportador  ”.',
           start: '2023-07-16'
           },
           {
           title: 'Día del Bodeguero    ”.',
           start: '2023-07-19'
           }
           
        
           
          
        ]
        });

        calendar.render();

        calendar.setOption('locale','es');
    });


</script>

<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>
@endsection
@section('scripts')
<script type='text/javascript'  src="{{asset("js/news/news.js")}}"></script>


<script async src="https://www.googletagmanager.com/gtag/js?id=UA-152412441-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-152412441-1');
</script>

@endsection

