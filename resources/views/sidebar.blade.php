<section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock'>
        <li class='launcher'>
            <i class='icon-dashboard'></i>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
        </li>
        <li class='active launcher'>
            <i class='icon-file-text-alt'></i>
            <a href="{{ url('employees/list') }}">Empleados</a>
        </li>
        <li class='launcher dropdown hover'>
            <i class='icon-flag'></i>
            <a href=''>Clientes</a>
            <ul class='dropdown-menu'>
                <li>
                    <a href={{ url('customers/list') }}>Listado</a>
                </li>
                <li>
                    <a href='{{url('records/list')}}'>Historial</a>
                </li>
                <li>
                    <a href='{{ url('tickets/list') }}'>Tickets</a>
                </li>
            </ul>
        </li>
        <li class='launcher'>
            <i class='icon-file'></i>
            <a href="{{ url('products/list') }}">Productos</a>
        </li>
        <li class='launcher'>
            <i class='icon-book'></i>
            <a href="{{ url('providers/list') }}">Proveedores</a>
        </li>
    </ul>
    <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
</section>