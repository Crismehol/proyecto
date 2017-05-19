<div class="sidebar" data-color="red" data-image="">

    <div class="logo">
        <a href="javascript:;" class="simple-text">
            Promo<strong>forms</strong>
        </a>
        <a href="javascript:;" class="simple-text-closed hidden-sm hidden-xs">
            P
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li id="inicio-link">
                <a href="{{ url('inicio') }}">
                    <i class="material-icons">inicio</i>
                    <p>Inicio</p>
                </a>
            </li>
            <li id="promos-link">
                <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#submenu-promociones" aria-expanded="false">
                    <i class="material-icons">description</i>
                    <p>Clientes <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></p>
                </a>
                <div class="collapse" id="submenu-promociones">
                    <ul class="submenu">
                        <li>
                            <a href="{{ url('promos/list') }}">
                                <p>Historial</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('promos/create/general') }}">
                                <p>Tickets</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li id="validations-link">
                <a href="{{ url('promos/validation/list') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Empleados</p>
                </a>
            </li>
            <li id="reports-link">
                <a href="javascript:;">
                    <i class="material-icons">assessment</i>
                    <p>Productos</p>
                </a>
            </li>
            <li id="black-list-link">
                <a href="javascript:;">
                    <i class="material-icons">view_list</i>
                    <p>Proveedores</p>
                </a>
            </li>
        </ul>
    </div>
</div>