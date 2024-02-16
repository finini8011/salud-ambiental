<!-- Heading -->
<div class="sidebar-heading">
    Componentes
</div>

<!-- Nav Item - Charts -->
<li class="nav-item {{ $extension == 'ar' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('subir_archivos_Admin') }}">
        <i class="fa fa-address-book"></i>
        <span>Subir archivos</span></a>
</li>
<li class="nav-item {{ $extension == 'ar' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('calendario_Admin') }}">
        <i class="fa fa-address-book"></i>
        <span>Calendario</span></a>
</li>
<li class="nav-item {{ $extension == 'ar' ? 'active' : '' }}">
    <a class="nav-link" href="{{ asset('subir_img_calendario_Admin') }}">
        <i class="fa fa-address-book"></i>
        <span>Subir imágenes calendario</span></a>
</li>