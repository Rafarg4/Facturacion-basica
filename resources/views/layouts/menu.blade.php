<li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}"><i class="icon-speedometer"></i> Escritorio</a>
                    </li>
                    <li class="nav-title">
                        Mantenimiento
                    </li>
<li class="nav-item {{ Request::is('categorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categorias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('marcas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('marcas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Marcas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('clientes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('clientes.index') }}">
        <i class="nav-icon icon-user-follow"></i>
        <span>Clientes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('ventas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('ventas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Ventas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('descuentos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('descuentos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Descuentos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Productos</span>
    </a>
</li>
<li class="nav-item {{ Request::is('compras*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('compras.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Compras</span>
    </a>
</li>
<li class="nav-item {{ Request::is('pagoCompras*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('pagoCompras.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Pago Compras</span>
    </a>
</li>
<li class="nav-item {{ Request::is('proveedors*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('proveedors.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Proveedors</span>
    </a>
</li>
<li class="nav-item {{ Request::is('users*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('users.index') }}">
        <i class="nav-icon icon-user"></i>
        <span>Usuarios</span>
    </a>
</li>

