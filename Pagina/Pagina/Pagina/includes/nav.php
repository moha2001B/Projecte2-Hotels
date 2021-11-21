<!--
    * Include navbar Kirill tus muertos vago de mierda
    * 
    * @author: MohamedBourarach mbourarachs@cendrassos.net
    *
    * Es mostra a totes les pagines
    *
-->
 <?php
    session_start();
?>
                        <!-- ***** Barra de Navegació ***** -->
 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div>
                    <nav class="main-nav">
                        <!-- ***** Logo Inici ***** -->
                        <a href="index.php" class="logo">HOTEL <em> MK</em></a>
                        <!-- ***** Logo Final ***** -->
                        <!-- ***** Menu Inici ***** -->
                        <ul class="nav">
                            <li><a href="index.php?r=index" class="active">Inici</a></li>
                            <li><a href="index.php?r=habitacions">Habitacions</a></li>
                            <li><a href="index.php?r=reservabuscador">Reserva</a></li>
							<li><a href="index.php?r=about">Sobre Nosaltes</a></li>
                            <li><a href="index.php?r=contacte">Contacte</a></li> 
							<?php
                            if($_SESSION["usuari"]) {
                            ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Compte</a>
                                                      <!-- ***** Si la sessió es diferent no apareixen alguns so es admin surt el apartat de crear següent ***** -->

                                <div class="dropdown-menu">
                                    <a class="dropdown-item"  href=""><?php echo $_SESSION["usuari"]; ?></a>
                                    <a href="index.php?r=configuracio" class="dropdown-item"  href="">Reserves i configuració</a>
                                   
                                    <?php
                                    if($_SESSION["tipo"] == "admin"|| $_SESSION["tipo"] == "gestor") {
                                    ?>
                                    <a class="dropdown-item"  href="../admin/crear.php"> Panell d'admin</a>
                                    <?php
                                        }
                                      ?>
                                    <a class="dropdown-item" href="../includes/logout.php">Tancar sessió</a>
                                </div>
                            </li>
                            <li><a class="responsiveItem" hef=""><?php echo $_SESSION["usuari"]; ?></a></li> 
                            <li><a class="responsiveItem" href=""><?php echo $_SESSION["tipo"]; ?></a></li> 
                            <li><a class="responsiveItem" href="../includes/logout.php">Tancar sessió</a></li> 
                            <?php 
                             }else{ ?>
                            <li><a href="index.php?r=login"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sessió</a></li> 
                            <li><a href="index.php?r=registre"> Registre</a></li> 
                            <?php
                         }
                            ?>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
