<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> SEGUROS</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Resumen<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">xx</a>
                    </li>
                    <li>
                        <a href="#">xxx</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Mis Datos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">xx</a>
                    </li>
                    <li>
                        <a href="#">xxx</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-money fa-fw"></i> Cotizaciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('quotes.index') }}">Buscar Cotización</a>
                    </li>
                    <li>
                        <a href="{{ route('quotes.create') }}">Cotizador</a>
                    </li>
                    <li>
                        <a href="#">Cotizador Masivo</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-exclamation-circle fa-fw"></i> Polizas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Nueva</a>
                    </li>
                    <li>
                        <a href="#">Consultar</a>
                    </li>
                </ul>
            </li>           
        </ul>
    </div>
</div>