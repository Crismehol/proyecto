<section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock'>
        <br>
        <li class="launcher" id="dashboard-link">
            <i class='icon-dashboard'></i>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        <br>
        <li  class="launcher" id='employees-link'>
            <i class='icon-file-text-alt'></i>
            <a href="{{ url('employees/list') }}">Empleados</a>
        </li>
        <br>
        <li class="active launcher dropdown hover" id='customers-link'>
            <i class='icon-folder-open'></i>
            <a href='{{ url('customers/list') }}'>Clientes</a>
            <ul class='dropdown-menu'>
                <li>
                    <a href={{ url('customers/list') }}>Listado</a>
                </li>
                <li>
                    <a href='{{url('customers/records/list')}}'>Historial</a>
                </li>
                <li>
                    <a href='{{ url('tickets/list') }}'>Tickets</a>
                </li>
            </ul>
        </li>
        <br>
        <li class="launcher" id='products-link'>
            <i class='icon-file'></i>
            <a href="{{ url('products/list') }}">Productos</a>
        </li>
        <br>
        <li class="launcher" id='providers-link'>
            <i class='icon-truck'></i>
            <a href="{{ url('providers/list') }}">Proveedores</a>
        </li>
    </ul>
    <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
</section>