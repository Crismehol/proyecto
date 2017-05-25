<div class="sidebar" data-color="blue" data-image="">
    <div class="logo">
        <a href="javascript:;" class="simple-text">Gestión <strong>Óptica</strong></a>
        <a href="javascript:;" class="simple-text-closed hidden-sm hidden-xs">O</a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li id="inicio-link">
                <a href="{{ url('inicio') }}">
                    <i class="material-icons">home</i>
                    <p>Inicio</p>
                </a>
            </li>
            <li id="customers-link">
                <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#submenu-customers" aria-expanded="false">
                    <i class="material-icons">description</i>
                    <p>Clientes <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></p>
                </a>
                <div class="collapse" id="submenu-customers">
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('customers/list') }}"><p>Lista de clientes</p></a>
                        </li>
                        <li>
                            <a href="{{ url('history') }}"><p>Historial</p></a>
                        </li>
                        <li>
                            <a href="{{ url('tickets') }}"><p>Tickets</p></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li id="employees-link">
                <a href="{{ url('employees/list') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Empleados</p>
                </a>
            </li>
            <li id="products-link">
                <a href="javascript:;">
                    <i class="material-icons">assessment</i>
                    <p>Productos</p>
                </a>
            </li>
            <li id="providers-link">
                <a href="javascript:;">
                    <i class="material-icons">view_list</i>
                    <p>Proveedores</p>
                </a>
            </li>
        </ul>
    </div>
</div>