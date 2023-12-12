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
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 1)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/1' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/1' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/1' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/1' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 1)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/1' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[1]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[1]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 2)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/2' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/2' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/2' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/2' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 2)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/2' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[2]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[2]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 3)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/3' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/3' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/3' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/3' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 3)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/3' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[3]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[3]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 4)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/4' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/4' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/4' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/4' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 4)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/4' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[4]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[4]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 5)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/5' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/5' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/5' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/5' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 5)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/5' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[5]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[5]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 6)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/6' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/6' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/6' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/6' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 6)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/6' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[6]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[6]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 7)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/7' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/7' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/7' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/7' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 7)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/7' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset($menu[7]['imagen'])}}" alt="home" style="height: 28px; margin-right: 5px;">
                            <div >{!! nl2br($menu[7]['nombre']) !!}</div>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $a = 0; $b = 0; ?>
                            @foreach($submenu as $data)
                                @if($data['menu_id'] == 8)
                                    @if($a == 0)
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu titulo-tecnico">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/8' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item titulo-tecnico" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/8' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                         @endif
                                        <?php $a = 1; ?>
                                    @else
                                        <?php $b = 0; ?>
                                        @foreach($submenu2 as $infosubmenu2)
                                            @if($infosubmenu2['submenu_id'] == $data['id'])
                                                <li class="dropdown-item dropdown-submenu">
                                                    <a><em>{{ $data['nombre'] }}</em></a>
                                                    <ul class="dropdown-menu">
                                                        <a href="{{ $infosubmenu2['link_interno'] == '' ? $infosubmenu2['link_externo'] : asset('loadViewMenu/' . $infosubmenu2['link_interno']) . '/8' }}">
                                                            <li class=" dropdown-item ">
                                                                {{ $infosubmenu2['nombre'] }}
                                                            </li>
                                                        </a>
                                                    </ul>
                                                </li>
                                                <?php $b = 1; ?>
                                            @endif
                                        @endforeach
                                        @if($b == 0)
                                            <a class="dropdown-item" href="{{ $data['link_interno'] == '' ? $data['link_externo'] : asset('loadViewMenu/' . $data['link_interno']) . '/8' }}"> <em>{{ $data['nombre'] }}</em> </a>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                            @foreach($transversales as $data2)
                                @if($data2['menu_id'] == 8)
                                    <a class="dropdown-item" href="{{ asset('loadViewMenuTransversal/' . $data2['link_interno']) . '/8' }}"> <em>{{ $data2['titulo'] }}</em> </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="separator"></div>
    <script async src="https://cse.google.com/cse.js?cx=010779789636525152016:fmmws7fdbi9"></script>
</header>

