<header>
    <div class="header">
        <div class="container-fluid">
            <div class="row align-items-start justify-content-between"></div>
            <div class="imagan-top-header">
                <img src="{{ asset($data[95]['datos'] ?? 'img/LogoAlcaldiaBogo.png') }}" alt="Alcaldía Bogotá" style="height: 130px; width: 270px;">
            </div>
            <div class="col-8"> 
                <div class=" row justify-content-end">
                    <img class="imagan-top-header" src="{{ asset($data[96]['datos'] ?? 'img/LogoSAB.png') }}" style="height: 160px; width: 360px;">
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4"></div>
                <div class="col-4"> 
                    <div class="search">
                        <div>
                            <div class="gcse-searchbox-only"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-start">
                <div class="col-12">
                    <div class="row justify-content-end">
                        <div class="col-2">
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                <li class="">
                                    <a class href data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style=" width: 150px ; padding-left: 15px;">
                                        <div class="">
                                            <img class="" src="{{asset('img/header/menu/iconos politicaDistrital.svg')}}" alt=""  >
                                        </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="" href="{{asset('politica_distrital_salud_ambiental')}}">
                                            <div class="">
                                                    <img  class="" src="{{asset('img/header/menu/PoliticaSaludAmbiental.svg')}}" style="width: 155px; height: 50px;">
                                                <div class="col-8">
                                                </div>
                                            </div>
                                        </a>
        
                                        <a class href="{{asset('vigilancia_salud_ambiental')}}">
                                                <div class="col-2" style="margin-left: -15px;">
                                                    <img  class="right-bottom-menu" src="{{asset('img/header/menu/SaludAmbiental.svg')}}" style="width: 155px; height: 50px;">
                                                <div class="col-8">
                                                </div>
                                            </div>
                                        </a>
                                        <a class href="{{asset('participacion_ciudadana')}}">

                                                <div class="col-2" style="margin-left: -15px;">
                                                    <img  class="right-bottom-menu" src="{{asset('img/header/menu/ParticipacionCiudadana.svg')}}" style="width: 155px; height: 50px;">
                                                <div class="col-8">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" container-fluid menu-nav">
            <nav class="navbar navbar-expand-sm  py-0 menu-down-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="{{asset('/')}}">
                        <img src="{{asset('img/header/IconoHomeMenu.svg')}}" alt="home" style="height: 30px">
                    </a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset($menu[0]['imagen'])}}" alt="home" style="height: 15px; margin-top: 10px; margin-right: 5px;">
                                <div >{!! nl2br($menu[0]['nombre']) !!}</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php $a = 0; ?>
                                @foreach($submenu1 as $data)
                                    @if($a == 0)
                                        <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu1/' . $data['link_interno']) }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        <?php $a = 1; ?>
                                        @else
                                        <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu1/' . $data['link_interno']) }}"> <em>{{ $data['nombre'] }}</em> </a>
                                    @endif
                                @endforeach
                                @foreach($transversales as $data2)
                                    @if($data2['menu_id'] == 1)
                                        <a class="dropdown-item" href="{{ asset('loadViewMenu1/' . $data2['link_interno']) }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/header/IconoMenuAlimentosSanos.svg')}}" alt="Alimentos Sanos" style="height: 28px;  margin-right: 5px;">
                                <div>Alimentos <br> y bebidas</div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset('alimentos_sanos')}}"> <em>Alimentos sanos y seguros</em> </a>
                                <a class="dropdown-item" href="https://app.invima.gov.co/alertas/alertas-alimentos-bebidas"> Alertas Sanitarias</a>
                                <a class="dropdown-item" href="https://drive.google.com/open?id=1HEDzya0dQhS35H8YvuQCE-BrUKipdOlw">Restaurantes 1A</a>
                                <li class="dropdown-item dropdown-submenu">
                                    <a >Expendio de carnes y cárnicos comestibles</a>
                                    <ul class="dropdown-menu">
                                        <a href="http://appb.saludcapital.gov.co/Sivigiladc/ExpendioDeCarne/frmSubMenuExpCarnes.aspx?opcion=New&n=&Origen=Login#">
                                            <li class=" dropdown-item ">
                                                Inscripción y Autorización sanitaria
                                            </li>
                                        </a>
                                      <!--  <a href="http://appb.saludcapital.gov.co/Sivigiladc/ExpendioDeCarne/frmSubMenuExpCarnes.aspx?opcion=New&n=&Origen=Login#">
                                            <li class="dropdown-item">
                                             Autorización sanitaria-->
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                                  <li class="dropdown-item dropdown-submenu">
                                  <a>Vehículos transportadores</a>
                                    <ul class=" dropdown-menu ">
                                        <a href="https://appb.saludcapital.gov.co/Sivigiladc/ExpendioDeCarne/frmSubMenuExpCarnes.aspx?opcion=New&n=&Origen=Login&opcion=New&n=&Origen=Login#">
                                            <li class="dropdown-item">
                                               Inscripción y Autorización sanitaria
                                             </li>
                                        </a>
                                          <!-- <a href="http://appb.saludcapital.gov.co/sivigiladc/VehiculosTranspCarne/frmSubMenehiculos.aspx?opcion=New&Origen=Login&IdTipo=258&n=990998692#">
                                            <li class="dropdown-item">
                                                Autorización sanitaria-->
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                                <!-- <a class="dropdown-item" href="http://autorregulacion.saludcapital.gov.co">Establecimientos con concepto favorable</a> -->
                                <a class="dropdown-item" href="{{asset('alimentos_sanos_indicadores')}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset('alimentos_sanos_normatividad')}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset('alimentos_sanos_Mapas')}}">Mapas</a>
                                <a class="dropdown-item" href="{{asset('alimentos_sanos_documentos')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/header/IconoMenuAguaySaneamiento.svg')}}" alt="Agua y Saneamiento" style="height: 28px;  margin-right: 5px;">
                                <div>Agua y <br> saneamiento</div>
                            </a>
                            <ul class="dropdown-menu" >
                                <a class="dropdown-item titulo-tecnico" href="{{asset('agua_saneamiento_basico')}}"> <em>Calidad del agua y Saneamiento Básico</em> </a>
                                <!-- <li class="dropdown-item dropdown-submenu">
                                     <a>Carrotanques</a> -->
                                    
                                    <ul class="dropdown-menu dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <a href="https://drive.google.com/open?id=1viKWkuMqYlujwWnJLNfSfXw_ARKD9THh">
                                            <li class="dropdown-item">
                                                Lista de vehículos
                                            </li>
                                        </a>
                                        <a href="https://drive.google.com/open?id=1fy8BouY9rKpWETj07mpzjTrtf293_GB_">
                                            <li class="dropdown-item">
                                             Lista de coches fúnebres
                                            </li>
                                        </a>
                                    </ul>
                                </li>
                                <a class="dropdown-item" href="https://drive.google.com/file/d/1mBHX2D_Pf0rNwPUqj3E1DIfc3OsgGGyP/view?usp=drive_link">Calidad del Agua</a>
                                <a class="dropdown-item" href="{{asset('agua_saneamiento_adulto_mayor')}}">Hogares para persona mayor</a>
                                <a class="dropdown-item" href="{{asset('agua_saneamiento_conceptos_favorable')}}">Establecimientos con concepto favorable</a>
                                <a class="dropdown-item" href="{{asset('agua_saneamiento_indicadores')}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset('agua_saneamiento_normatividad')}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset('agua_saneamiento_mapas')}}">Mapas</a>
                                <a class="dropdown-item"  href="{{asset('agua_saneamiento_documentos')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambienblel</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/header/IconoMenuCambioClimatico.svg')}}" alt="Cambio climatico" style="height: 28px;  margin-right: 5px;">
                                <div>Cambio <br> climático</div>
                            </a>
                            <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset('cambio_climatico')}}"><em>Cambio Climático</em> </a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_Ultravioleta')}}">Índice Ultravioleta</a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_vulnerabilidad')}}">Índice de vulnerabilidad</a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_indicadores')}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_normatividad')}}">Normatividad</a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_mapas')}}">Mapas</a>
                                <a class="dropdown-item" href="{{asset('cambio_climatico_documentos')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/header/IconoMenuEspacioyMovilidad.svg')}}" alt="Espacio y movilidad" style="height: 28px;  margin-right: 5px;">
                                <div>Espacio y <br> movilidad</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico" href="{{asset('espacio_movilidad')}}"> <em>Hábitat, Espacio público y movilidad</em> </a>
                                <!-- <a class="dropdown-item" href="{{asset("espacio_movilidad_indicadores")}}">Indicadores</a> -->
                                <!-- <a class="dropdown-item" href="{{asset("espacio_movilidad_normatividad")}}">Normatividad</a> -->
                                {{-- <a class="dropdown-item" href="{{asset('espacio_movilidad_radiacion')}}">Radiación Electromagnética</a> --}}
                                {{-- <a class="dropdown-item" href="#">Mapas</a>--}}
                                <a class="dropdown-item" href="{{asset('espacio_movilidad_DocumentoInvestigaciones')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/header/IconoMenuMedicamentosSeguros.svg')}}" alt="Medicamentos" style="height: 28px;  margin-right: 5px;">
                                <div>Medicamentos y <br> dispositivos médicos</div>
                            </a>
                            <ul class="dropdown-menu" >
                                <a class="dropdown-item titulo-tecnico" href="{{asset('medicamentos')}}"> <em>Medicamentos Seguros</em> </a>

                                    <li class=" dropdown-submenu">
                                        <ul class="dropdown-item"><a>Droguerías
                                          </ul>
                                        <ul class="dropdown-menu">
                                            <a href="https://drive.google.com/open?id=121RI17U_iD8WNz9EQ7MUdGQVjhbvcccU">
                                                <ul class="dropdown-item">
                                                    Requisitos
                                                    <br> de apertura
                                                </ul>
                                              </a>

                                            <a href="https://drive.google.com/open?id=1GuebAz0Lh2ITQKVZmxQqT29LtCyJcuPJ">
                                                <ul class="dropdown-item">
                                                    Información a
                                                    <br> Droguerías
                                                </ul>
                                              </a>

                                        </ul>
                                    </li>
                                     <a class="dropdown-item" href="{{asset('medicamentos_Opticas')}}"> Ópticas</a>
                                    <a class="dropdown-item" href="https://app.invima.gov.co/alertas/medicamentos-productos-biologicos">Alertas Sanitarias</a>
                                    <a class="dropdown-item" href="https://drive.google.com/file/d/1cyVKnIqz7lhzECUb793VBw_09tP9OX16/view?usp=sharing">Farmacovigilancia</a>
                                    <a class="dropdown-item"  href="{{asset('medicamentos_favorables')}}">Establecimiento con concepto favorable</a>
                                   <!--  <a class="dropdown-item" href="#">Indicadores</a> -->
                                    <a class="dropdown-item" href="{{asset('medicamentos_normatividad')}}">Normatividad</a>
                                    {{-- <a class="dropdown-item" href="#">Mapas</a> --}}
                                    <a class="dropdown-item" href="{{asset('medicamentos_documentos')}}">Documentos e investigaciones</a>
                                    {{--  <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset('img/header/IconoMenuSeguridadQuimica.svg')}}" alt="Productos Químicos" style="height: 28px;  margin-right: 5px;">
                                <div>Productos químicos, <br> industria y belleza</div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico"  href="{{asset('quimicos')}}"><em>Seguridad Química</em> </a>
                                <a class="dropdown-item" href="{{asset('quimicos_sectorbelleza')}}">Estética y belleza</a>
                                <a class="dropdown-item" href="https://drive.google.com/open?id=1yzklCm3MbDFIJFcvXehRA4kW7H6vX1_D">Proyecto PISA</a>
                                <a class="dropdown-item" href="{{asset('quimicos_inventario')}}">Buscador sustancias químicas</a>
                                <a class="dropdown-item" href="{{asset('quimicos_conceptos')}}">Establecimiento con concepto favorable</a>
                                <a class="dropdown-item" href="{{asset('quimicos_indicadores')}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset('quimicos_normatividad')}}">Normatividad</a>
                               <a class="dropdown-item" href="{{asset('quimicos_mapas')}}">Mapas</a>
                                <a class="dropdown-item" href="{{asset('quimicos_documentos')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img  src="{{asset('img/header/IconoMenuZoonosisyVectores.svg')}}" alt="Zoonosis" style="height: 28px;  margin-right: 5px;">
                                <div>Zoonosis <br> y vectores</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-izq" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item titulo-tecnico" href="{{asset('etoz')}}"><em>Eventos Transmisibles de Origen <br> Zoonótico ETOZ</em> </a>
                                <!-- <a class="dropdown-item" href="#">Clínicas y consultorios veterinarios</a> -->
                                <a class="" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="row mt-1 justify-content-end">
                                                <div class="col-12 offset-1">
                                                    <a class=""  href="https://drive.google.com/file/d/11ZoCucvgEcTbsR-DtF_P9s9JhWrUzbXn" data-line="contact-send"><font class="dropdown-item">Vacunación antirrábica canina y felina</font></a>
                                                </div>
                                            </div>
                               </a>
                                
                                </a>
                                <a class="dropdown-item" href="https://drive.google.com/file/d/1IDGrKBBq4QeuWqok-eaf2EZEsVZ3SVy4/view?usp=sharing">Agresión Animal</a>
                                <a class="dropdown-item" href="https://drive.google.com/open?id=1O_1ttf1bCVs9W0xA1g8nSdw_B1ZiqVOi">Control de roedores e insectos</a>
                                <a class="dropdown-item" href="{{asset('etoz_favorable')}}">Establecimiento con concepto favorable</a> 
                                <a class="dropdown-item"  href="{{asset('etoz_indicadores')}}">Indicadores</a>
                                <a class="dropdown-item" href="{{asset('etoz_normatividad')}}">Normatividad</a>
                                 <a class="dropdown-item"  href="{{asset('etoz_mapas')}}">Mapas</a>
                                <a class="dropdown-item"  href="{{asset('etoz_documentos')}}">Documentos e investigaciones</a>
                                {{-- <a class="dropdown-item" href="#">Gestión de la salud ambiental</a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="separator"></div>
        <script async src="https://cse.google.com/cse.js?cx=010779789636525152016:fmmws7fdbi9"></script>
</header>

