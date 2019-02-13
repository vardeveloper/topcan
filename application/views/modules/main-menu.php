<div class="header-inner">
    <div class="header-top">
        <div class="header-top-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 header-top-left">
                        <div class="sidebar-inner">
                            <div id="widget-phone-info-2" class="widget widget_phone_info">
                                <h3 class="widget-title">Phone</h3>
                                <div class="phone">
                                    <span class="kreme-icon"><i class="fa fa-phone"></i></span>
                                    <span class="phone-content"><a href="tel:955302630">955302630 - 998520288</a></span></div>
                            </div>
                        </div>
                    </div>
                    <!--div class="col-sm-6 header-top-right">
                        <div class="sidebar-inner">
                            <div id="nav_menu-24" class="widget widget_nav_menu">
                                <div class="menu-top-menu-container">
                                    <ul id="menu-top-menu" class="menu">
                                        <li id="menu-item-2342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2342"><a
                                                href="#">Mi Lista</a></li>
                                        <li id="menu-item-2343" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2343"><a
                                                href="#">Mi Cuenta</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="mtheme-minicart-2" class="widget mTheme-minicart">
                                <div class="widget-inner">
                                    <div class="cart">
                                        <a href="#" title="View contents of your shopping cart"
                                           class="cart-icon cart-icon-img">
                                            <img src="<?php echo base_url(); ?>assets/themes/kreme/assets/imgs/icon/icon-cart.png"
                                                 alt="" />
                                            <span class="cart-count">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="header-middle-inner">
            <div class="container">
                <div id="logo" class="logo">
                    <a href="<?php echo base_url(); ?>" title="TOP CAN">
                        <img alt="Kreme Theme Style 1" src="<?php echo base_url(); ?>assets/img/logo.png">
                    </a>
                </div>
                <nav id="primary-navigation" class="navbar" role="navigation">
                    <div class="navbar-inner">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" onclick="openNav();">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul id="menu-left-menu-1" class="nav navbar-nav">
                                <li class="menu-item">
                                    <a title="" href="/">Inicio</a>
                                </li>
                                <li class="menu-item">
                                    <a title="" href="/index.php/nosotros" class="">Nosotros</a>
                                </li>
                                <li class="megamenu col-4 menu-item dropdown">
                                    <a title="" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">Productos <span class="caret"></span></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2391 dropdown">
                                            <a title="" href="#">Categorías</a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <?php foreach ($arrayCategorias as $key => $asoc): ?>
                                                    <li class="menu-item">
                                                        <a data-menu="<?= $asoc->cod_tip_categoria ?>" href="/index.php/categoria/index/<?= $asoc->cod_tip_categoria ?>">
                                                            <?= $asoc->des_tip_categoria ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach ?>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul id="menu-right-menu" class="nav navbar-nav main-menu-v2">
                                <li class="menu-item">
                                    <a title="" href="/index.php/novedades">Novedades </a>
                                </li>
                                <li class="menu-item">
                                    <a title="" href="/index.php/ubicacion">Ubicación</a>
                                </li>
                                <li class="menu-item">
                                    <a title="" href="/index.php/contacto">Contacto</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>