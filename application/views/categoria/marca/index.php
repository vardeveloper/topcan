<div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php include("application/views/modules/menu-movile.php"); ?>
    </div>
    <div id="wrap" class="">
    <header id="header" class="header style-v1">
        <?php include("application/views/modules/main-menu.php"); ?>
    </header>
    <div id="main-content" class="main-content style-v2">
        <div class="main-contents-inner style-v2">
            <div class="page-header">
                <div class="page-header-inner">
                    <div class="page-header-entry">
                        <h1 class="page-title"><span>Categoria</span></h1>
                    </div>
                </div>
                <div class="section-radius section-radius-bottom"></div>
            </div>
            <div class="page-content right-sidebar">
                <div class="page-content-inner">
                    <div class="container-fluid">
                        <div class="products right-sidebar">
                            <div class="container">
                                <div class="products-content">
                                    <div class="row product-grid">
                                    <div class="col-md-3">
                                            <div class="sidebar-page sidebar">

                                                <div id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                                                    <form action="" class="search-form"
                                                        method="get" role="search">
                                                        <label>
                                                            <span class="screen-reader-text">Buscar:</span>
                                                            <input type="search" id="woocommerce-product-search-field"
                                                                name="s" value="" placeholder="Buscar"
                                                                class="search-field">
                                                        </label>
                                                        <button class="search-submit" type="submit"><span class="fa fa-search"></span></button>
                                                        <input type="hidden" name="post_type" value="product" /></form>
                                                </div>
                                                
                                                <div id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                                                    <h3 class="widget-title">Marca</h3>
                                                    <ul class="product-categories">
                                                        <?php foreach ($arrayMarcas as $key => $asoc): ?>
                                                            <li class="cat-item cat-item-230">
                                                                <a href="<?php echo base_url(); ?>/marca/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Color</h3>
                                                    <ul>
                                                        <?php foreach ($arrayColores as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>/marca/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Estación</h3>
                                                    <ul>
                                                        <?php foreach ($arrayEstaciones as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>/estacion/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Disfráz</h3>
                                                    <ul>
                                                        <?php foreach ($arrayDisfraces as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>/estacion/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Material</h3>
                                                    <ul>
                                                        <?php foreach ($arrayMateriales as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>/estacion/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Accesorio</h3>
                                                    <ul>
                                                        <?php foreach ($arrayAccesorios as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>/estacion/index/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="count-order">
                                                <div class="view-mode">
                                                    <a data-view="list" href="indexd1fd.html?view=list" class="list"><i
                                                            class="fa fa-th-list"></i></a>
                                                    <a data-view="grid" href="indexb92a.html?view=grid" class="grid active"><i
                                                            class="fa fa-th"></i></a></div>
                                                <p class="woocommerce-result-count">
                                                    Mostrando <span class="count">3</span> de 6 resultados</p>
                                                <form class="woocommerce-ordering" method="get">
                                                    <div class="select select-style2">
                                                        <select name="orderby" class="orderby option-tree-ui-select">
                                                            <option value="menu_order" selected='selected'>Ordenar</option>
                                                            <option value="popularity">Más Popular</option>
                                                            <option value="rating">Más Comprados</option>
                                                            <option value="date">Recien Llegados</option>
                                                            <!-- <option value="price">Proximamente</option> -->
                                                            <!-- <option value="price-desc">Sort by price: high to low</option> -->
                                                        </select></div>
                                                </form>
                                            </div>

                                            <?php foreach ($arrayArticulosMarca as $key => $asoc): ?>
                                                <div class="col-xs-6 col-sm-4 product" itemscope itemtype="">
                                                    <div class="entry">
                                                        <figure class="entry-thumbnail">
                                                            <a href="<?php echo base_url(); ?>index.php/detalle/index/<?= $asoc->cod_producto ?>"
                                                                title="Baked Delights Snackers"><img width="400" height="500"
                                                                    src="<?php echo base_url(); ?><?= $asoc->img1_producto ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    alt="Tên ảnh" title="Tên ảnh" /></a>
                                                        </figure>
                                                        <div class="entry-body">
                                                            <h3 class="entry-title"><a href="/index.php/detalle"
                                                                    title="Baked Delights Snackers"><?= $asoc->des_producto ?></a></h3>
                                                            <span class="price">
                                                                <ins><span class="woocommerce-Price-amount amount">
                                                                    <span
                                                                            class="woocommerce-Price-currencySymbol">Talla de 0 a 5</ins></span>
                                                                            <br>
                                                            <div class="buttons">
                                                                <a rel="nofollow" href="/index.php/detalle"
                                                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                                Ver Detalle</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>

                                            <!-- <div class="col-xs-6 col-sm-4 product" itemscope itemtype="">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle"
                                                            title="Baked Delights Snackers"><img width="400" height="500"
                                                                src="<?php echo base_url(); ?>assets/img/galeria/foto_18.png" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="Tên ảnh" title="Tên ảnh" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Baked Delights Snackers">Casaca Acolchada</a></h3>
                                                        <span class="price">
                                                            <ins><span class="woocommerce-Price-amount amount">
                                                                <span
                                                                        class="woocommerce-Price-currencySymbol">Talla de 0 a 5</ins></span>
                                                                        <br>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle"
                                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                            Ver Detalle</a></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle"
                                                            title="Baked Delights Snackers"><img width="400" height="500"
                                                                src="<?php echo base_url(); ?>assets/img/galeria/foto_17.png" class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="Tên ảnh" title="Tên ảnh" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Baked Delights Snackers">Casaca Acolchada</a></h3>
                                                        <span class="price">
                                                            <ins><span class="woocommerce-Price-amount amount">
                                                                <span
                                                                        class="woocommerce-Price-currencySymbol">Talla de 0 a 5</ins></span>
                                                                        <br>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                            Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->


                                            
                                            
                                            <!-- <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/beef-spinach-food/index.html" title="Beef &#038; Spinach Food"><img
                                                                width="400" height="500" src="../../files/2017/03/imge_13-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_13-min" title="imge_13-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/beef-spinach-food/index.html"
                                                                title="Beef &#038; Spinach Food">Beef &#038;
                                                                Spinach Food</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>69.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>34.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="indexd0db.html?add-to-cart=2455"
                                                                data-quantity="1" data-product_id="2455"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/beef-carrot-pea-food/index.html"
                                                            title="Beef Carrot &#038; Pea Food"><img width="400"
                                                                height="500" src="../../files/2013/06/imge_1-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_1-min" title="imge_1-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/beef-carrot-pea-food/index.html"
                                                                title="Beef Carrot &#038; Pea Food">Beef Carrot
                                                                &#038; Pea Food</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="indexf6b1.html?add-to-cart=70"
                                                                data-quantity="1" data-product_id="70"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/beef-carrot-pea-food-2/index.html"
                                                            title="Beef Carrot &#038; Pea Food"><img width="400"
                                                                height="500" src="../../files/2017/01/imge_30-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/beef-carrot-pea-food-2/index.html"
                                                                title="Beef Carrot &#038; Pea Food">Beef Carrot
                                                                &#038; Pea Food</a></h3>
                                                        <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">&#36;</span>300.00</span></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="index8c28.html?add-to-cart=2061"
                                                                data-quantity="1" data-product_id="2061"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/beef-carrot-pea-food-3/index.html"
                                                            title="Beef Carrot &#038; Pea Food"><img width="400"
                                                                height="500" src="../../files/2017/01/imge_33-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_33-min" title="imge_33-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/beef-carrot-pea-food-3/index.html"
                                                                title="Beef Carrot &#038; Pea Food">Beef Carrot
                                                                &#038; Pea Food</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="indexdd1b.html?add-to-cart=2103"
                                                                data-quantity="1" data-product_id="2103"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/biscuits-salmon-and-oats/index.html"
                                                            title="Biscuits Salmon and Oats"><img width="400"
                                                                height="500" src="../../files/2017/01/imge_7-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_7-min" title="imge_7-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/biscuits-salmon-and-oats/index.html"
                                                                title="Biscuits Salmon and Oats">Biscuits Salmon
                                                                and Oats</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>500.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="index455b.html?add-to-cart=2066"
                                                                data-quantity="1" data-product_id="2066"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/biscuits-salmon-and-oats-copy/index.html"
                                                            title="Biscuits Salmon and Oats (Copy)"><img width="400"
                                                                height="500" src="../../files/2017/01/imge_27-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_27-min" title="imge_27-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/biscuits-salmon-and-oats-copy/index.html"
                                                                title="Biscuits Salmon and Oats (Copy)">Biscuits
                                                                Salmon and Oats (Copy)</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>12.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="indexce91.html?add-to-cart=2492"
                                                                data-quantity="1" data-product_id="2492"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/chopped-blends-food/index.html"
                                                            title="Chopped Blends Food"><img width="400" height="500"
                                                                src="../../files/2017/03/imge_11-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_11-min" title="imge_11-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/chopped-blends-food/index.html"
                                                                title="Chopped Blends Food">Chopped Blends Food</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>49.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>34.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="index54a3.html?add-to-cart=2450"
                                                                data-quantity="1" data-product_id="2450"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="http://schema.org/WebPage">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="../../product/healthy-smile-food/index.html" title="Healthy Smile Food"><img
                                                                width="400" height="500" src="../../files/2017/01/imge_27-min-400x500.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_27-min" title="imge_27-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="../../product/healthy-smile-food/index.html"
                                                                title="Healthy Smile Food">Healthy Smile Food</a></h3>
                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>59.00</span></del>
                                                            <ins><span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">&#36;</span>35.00</span></ins></span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="index1814.html?add-to-cart=2452"
                                                                data-quantity="1" data-product_id="2452"
                                                                data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart"><img
                                                                    src="../../wp-content/themes/kreme/assets/imgs/icon/icon-cart-white.png"
                                                                    alt="" /></a></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="navigation-wrap">
                                                <nav role="navigation" class="navigation pagination">
                                                    <span class='page-numbers current'>1</span>
                                                    <a class='page-numbers' href='#'>2</a>
                                                    <a class="next page-numbers" href="#">Siguiente</a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="section-custom-1 section" style="background-image: url(../../wp-content/blogs.dir/3/files/2016/10/bg_img.jpg); background-position: center bottom; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                            <div class="section-radius"></div>
                            <div class="container">
                                <div class="section-header">
                                    <h2 class="section-title f-color"><span>NEED HELP CHOOSING THE PERFECT FOOD FOR
                                            YOUR PET?</span></h2>
                                    <div class="section-subtitle">When my pet is hungry I hear:</div>
                                </div>
                                <div class="section-content call-to-action">
                                    <a href="#" class="dog"><img alt="" src="../../wp-content/blogs.dir/3/files/2016/10/left-img.png"></a>
                                    <a href="#" class="cat"><img alt="" src="../../wp-content/blogs.dir/3/files/2016/10/right-img.png"></a>
                                    <img class="choose-icon hidden-xs" alt="Choose icon" src="../../wp-content/themes/kreme/assets/imgs/icon-choose.png" /></div>
                                <div class="buttons">
                                    <a href="../../index.html" target="_blank" class="button">Try our food finder</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="section-compare redirect_category">
                                                    <div class="section-content">
                                                        <h2 class="section-title compare-title f-color"><span>Show
                                                                how kreme compare</span></h2>
                                                        <div class="kreme-select select select-style2">
                                                            <select class="compare-select option-tree-ui-select">
                                                                <option value="">Select Type</option>
                                                                <option value="http://kreme.mthemes.org/style2/product-category/chicken-food/"
                                                                    data-slug="203">Chicken Food</option>
                                                                <option value="http://kreme.mthemes.org/style2/product-category/dry-food/"
                                                                    data-slug="200">Dry Food</option>
                                                                <option value="http://kreme.mthemes.org/style2/product-category/snack-food/"
                                                                    data-slug="232">Snack Food</option>
                                                                <option value="http://kreme.mthemes.org/style2/product-category/treats-food/"
                                                                    data-slug="202">Treats Food</option>
                                                                <option value="http://kreme.mthemes.org/style2/product-category/wet-food/"
                                                                    data-slug="231">Wet Food</option>
                                                            </select></div><span class="compare-icon">Choose Your
                                                            Type</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey">
                                                            <img src="../../files/2016/06/compare-image.png" class="vc_single_image-img attachment-full"
                                                                alt="" /></div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

