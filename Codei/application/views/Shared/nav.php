<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?=site_url('Home')?>">
                    <span class="light">FUT - </span> Bolistas
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="hidden active" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?= site_url('Home')?>">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#bienvenido">Bienvenido</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Opciones <strong class='caret'></strong></a>
                        <ul class='dropdown-menu'>
                            <li><a href="<?= site_url('Login/usuario')?>">Editar Perfil</a></li>
                            <li><a href="<?= site_url('Futbolista')?>">Ver Lista de Futbolistas</a></li>
                            <li><a href="<?= site_url('Futbolista/Agregar')?>">Agregar Futbolistas</a></li>
                            <li><a href="<?= site_url('Club')?>">Ver Lista de Clubes</a></li>
                            <li><a href="<?= site_url('Club/Agregar')?>">Agregar Clubes</a></li>
                            <li><a href="<?= site_url('Pais')?>">Ver Lista de Paises</a></li>
                            <li><a href="<?= site_url('Pais/Agregar')?>">Agregar Paises</a></li>
                            <li><a href="<?= site_url('Posicion')?>">Ver Lista de Posiciones</a></li>
                            <li><a href="<?= site_url('Posicion/Agregar')?>">Agregar Posiciones</a></li>
                            <li><a href="<?= site_url('Login/Logout')?>">Cerrar Session</a></li>
                        </ul>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="#acerca">Acerca de Futbolistas</a>
                    </li>-->
                    <li>
                        <a href="<?=site_url('Login/Registrate')?>">Registrate</a>
                    </li>
                    <li>
                        <a href="<?=site_url('Login')?>">Iniciar Session</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>