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
                                <div class="col-sm-6 header-top-right">
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
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="header-middle-inner">
                        <div class="container">
                            <div id="logo" class="logo">
                                <a href="#" title="TOP CAN">
                                    <img alt="Kreme Theme Style 1" src="<?php echo base_url(); ?>assets/img/logo.png">
                                </a></div>
                            <nav id="primary-navigation" class="navbar" role="navigation">
                                <div class="navbar-inner">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" onclick="openNav();">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button></div>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul id="menu-left-menu-1" class="nav navbar-nav">
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2328 dropdown"><a
                                                    title="Home" href="/index.php" data-toggle="dropdown" class="dropdown-toggle"
                                                    aria-haspopup="true">Inicio</a>
                                               
                                            </li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2330 dropdown"><a
                                                    title="About Us" href="/index.php/nosotros" data-toggle="dropdown" class="dropdown-toggle"
                                                    aria-haspopup="true">Nosotros</a>
                                              
                                            </li>
                                            <li class="megamenu col-4 menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-2102 dropdown"><a
                                                    title="Mega" href="#" data-toggle="dropdown"
                                                    class="dropdown-toggle" aria-haspopup="true">Productos <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2391 dropdown"><a
                                                            title="Pet Shop" href="#">Categorías</a>
                                                        <ul role="menu" class=" dropdown-menu">
                                                            <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                    title="Product List v1" href="/index.php/categoria">Marca</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                    title="Product List v2" href="/index.php/categoria">Color</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                    title="Product List v3" href="/index.php/categoria">Estación</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                    title="Product Single" href="/index.php/categoria">Disfraz</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                    title="Product Single" href="/index.php/categoria">Material</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                    title="Product Single" href="/index.php/categoria">Accesorios</a></li> -->

                                                                <?php foreach ($arrayCategorias as $key => $asoc): ?>
                                                                        <li class="menu-item">
                                                                                <a data-menu="<?= $asoc->cod_tip_categoria ?>" href="/index.php/categoria/index/<?= $asoc->cod_tip_categoria ?>">
                                                                                        <?= $asoc->des_tip_categoria ?>
                                                                                </a>
                                                                        </li>
                                                                <?php endforeach ?>
                                                        </ul>
                                                    </li>
                                                    <!-- <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2396 dropdown"><a
                                                            title="Pages" href="#">Color</a>
                                                            <ul role="menu" class=" dropdown-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                        title="Product List v1" href="">Producto 1</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                        title="Product List v2" href="">Producto 2</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                        title="Product List v3" href="">Producto 3</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                        title="Product Single" href="">Producto 4</a></li>
                                                            </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2401 dropdown"><a
                                                            title="Blog" href="#">Estación</a>
                                                            <ul role="menu" class=" dropdown-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                        title="Product List v1" href="">Producto 1</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                        title="Product List v2" href="">Producto 2</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                        title="Product List v3" href="">Producto 3</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                        title="Product Single" href="">Producto 4</a></li>
                                                            </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2373 dropdown"><a
                                                            title="Gravy Food" href="#">Disfraz</a>
                                                            <ul role="menu" class=" dropdown-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                        title="Product List v1" href="">Producto 1</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                        title="Product List v2" href="">Producto 2</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                        title="Product List v3" href="">Producto 3</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                        title="Product Single" href="">Producto 4</a></li>
                                                            </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2373 dropdown"><a
                                                            title="Gravy Food" href="#">Material</a>
                                                            <ul role="menu" class=" dropdown-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                        title="Product List v1" href="">Producto 1</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                        title="Product List v2" href="">Producto 2</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                        title="Product List v3" href="">Producto 3</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                        title="Product Single" href="">Producto 4</a></li>
                                                            </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2373 dropdown"><a
                                                            title="Gravy Food" href="#">Accesorios</a>
                                                            <ul role="menu" class=" dropdown-menu">
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392 active"><a
                                                                        title="Product List v1" href="">Producto 1</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                                                                        title="Product List v2" href="">Producto 2</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                                                                        title="Product List v3" href="">Producto 3</a></li>
                                                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                                                                        title="Product Single" href="">Producto 4</a></li>
                                                            </ul>
                                                    </li> -->
                                                </ul>
                                            </li>
                                            <!-- <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2101"><a
                                                    title="For Cats" href="for-cats/index.html">For Cats</a></li> -->
                                        </ul>
                                        <ul id="menu-right-menu" class="nav navbar-nav main-menu-v2">
                                            <!-- <li id="menu-item-1913" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item menu-item-1913 dropdown active"><a
                                                    title="Shop" href="index.html" data-toggle="dropdown" class="dropdown-toggle"
                                                    aria-haspopup="true">Shop <span class="caret"></span></a>
                                                <ul role="menu" class=" dropdown-menu">
                                                    <li id="menu-item-2085" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item current_page_item menu-item-2085 active"><a
                                                            title="Product List v1" href="index.html">Product List v1</a></li>
                                                    <li id="menu-item-2333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2333"><a
                                                            title="Product List v2" href="http://kreme.mthemes.org/style2/shop/?orderby=rating&amp;filter_color=blue">Product
                                                            List v2</a></li>
                                                    <li id="menu-item-2334" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2334"><a
                                                            title="Product List v3" href="http://kreme.mthemes.org/style2/product-category/chicken-food/">Product
                                                            List v3</a></li>
                                                    <li id="menu-item-2117" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-2117"><a
                                                            title="Product Detail" href="product/beef-carrot-pea-food-4/index.html">Product
                                                            Detail</a></li>
                                                </ul>
                                            </li> -->
                                            <li id="menu-item-1737" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1737 dropdown"><a
                                                    title="Blog" href="/index.php/novedades" data-toggle="dropdown"
                                                    class="dropdown-toggle" aria-haspopup="true">Novedades </a>
                                                <!-- <ul role="menu" class=" dropdown-menu">
                                                    <li id="menu-item-2084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2084"><a
                                                            title="Blog Grid" href="for-dogs/index.html">Blog Grid</a></li>
                                                    <li id="menu-item-2083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2083"><a
                                                            title="Blog List" href="for-cats/index.html">Blog List</a></li>
                                                    <li id="menu-item-2262" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2262"><a
                                                            title="Post Single" href="healthy-and-fun-frozen-yogurt-snacks/index.html">Post
                                                            Single</a></li>
                                                </ul> -->
                                            </li>
                                            <li id="menu-item-2350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2350"><a
                                                    title="Nutrition" href="/index.php/ubicacion">Ubicación</a></li>
                                            <li id="menu-item-1736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1736"><a
                                                    title="Contact Us" href="/index.php/contacto">Contacto</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>