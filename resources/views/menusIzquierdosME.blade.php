<!-- Heading -->
<div class="sidebar-heading">
    Componentes
</div>

<!-- Nav Item - Charts -->
<li class="nav-item {{ $extension == 'ar' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('menu_principal_Admin') }}">
        <i class="fa fa-address-book"></i>
        <span>Menús Principales</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item {{ $extension == 'ar' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('submenu_Admin') }}">
        <i class="fa fa-address-book"></i>
        <span>Submenús Primer Nivel</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ $extension == 'ca' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('submenu2_Admin') }}">
        <i class="fa fa-bullseye"></i>
        <span>Submenús Segundo Nivel</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ $extension == 'ca' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('transversales_Admin') }}">
        <i class="fa fa-bullseye"></i>
        <span>Transversales</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item {{ $extension == 'ca' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('paginas_Admin') }}">
        <i class="fa fa-bullseye"></i>
        <span>Páginas</span></a>
</li>