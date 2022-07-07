<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('categorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categorias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('proveedors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Proveedors</span>
    </a>
</li>
<li class="nav-item {{ Request::is('marcas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('marcas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Marcas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>Usuarios</span>
    </a>
</li>
