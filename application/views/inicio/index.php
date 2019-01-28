
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <?php include("application/views/modules/menu-movile.php"); ?>

    </div>
    <div id="wrap" class="">
        <header id="header" class="header style-v1">

            <?php include("application/views/modules/main-menu.php"); ?>

        </header>
        <div id="main-content" class="main-content style-v1">
            <div class="main-contents-inner style-v1">
                <div class="page-header">
                    <div class="page-header-inner">
                        <div class="page-header-entry">
                            <h1 class="page-title"><span>Bienvenido</span></h1>
                            <!-- <div class="page-breadcrumb">
                                <div class="breadcrumb"><span><a href="http://kreme.mthemes.org/style1">Home</a></span>
                                    / <span>Shop</span></div>
                            </div> -->
                        </div>
                    </div>
                    <div class="section-radius section-radius-bottom"></div>
                </div>
                <div class="page-content full-width without-padding">
                    <div class="page-content-inner">
                        <div class="container-fluid">
                            <!-- <div id="mtheme-jumbotron-2" class="widget shop-about">
                                <div class="container ">
                                    <div class="row">
                                     

                                        <div id="list-product">

                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="products full-width">
                                <div class="filter complex-filter">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-3 hidden-xs hidden-sm">
                                                <div class="filter-title">Muéstrame...</div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="product-category-slider">
                                                    <div class="slider-flickity" data-selected-index="0">
                                                        <div class="item-category">
                                                            <a class="button active" href="index.html" data-filter="*">Todos</a></div>
                                                        <div class="item-category">
                                                            <a class="button" href="#" data-filter="">Los más vendido</a>
                                                        </div>
                                                        <div class="item-category">
                                                            <a class="button" href="#" data-filter="">Los más popular</a>
                                                        </div>
                                                        <div class="item-category">
                                                            <a class="button" href="#" data-filter="">Recién Llegados</a>
                                                        </div>
                                                        <!-- <div class="item-category">
                                                            <a class="button" href="product-category/gravy-food/index.html" data-filter="">Item 4</a>
                                                        </div>
                                                        <div class="item-category">
                                                            <a class="button" href="product-category/snack-food/index.html" data-filter="">Item 5</a>
                                                        </div>
                                                        <div class="item-category">
                                                            <a class="button" href="product-category/treats-food/index.html" data-filter="">Item 6</a>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-content">
                                    <div class="container">
                                        <div class="row product-grid">

                                            <?php foreach ($arrayProductosHome as $key => $asoc): ?>

                                                <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                    <div class="entry">
                                                        <figure class="entry-thumbnail">
                                                            <a href="<?php echo base_url(); ?>index.php/detalle/index/<?= $asoc->cod_producto ?>" title=""><img
                                                                    width="400" height="500" src="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                    alt="imge_30-min" title="imge_30-min" /></a>
                                                        </figure>
                                                        <div class="entry-body">
                                                            <h3 class="entry-title"><a href="/index.php/detalle"
                                                                    title=""><?= $asoc->des_producto ?></a></h3>
                                                            <span class="price">
                                                                <ins>
                                                                    <!-- <span class="woocommerce-Price-amount amount"><span
                                                                            class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                        </span> -->
                                                            <div class="buttons">
                                                                <a rel="nofollow" href="<?php echo base_url(); ?>index.php/detalle/index/<?= $asoc->cod_producto ?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach ?>

                                            <!-- <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_2.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Enterizo Reno Plush</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_3.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Enterizo Cacheton Plush</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_4.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Enterizo Noel plus</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_5.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Enterizo Duende Algodón</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_6.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Vestido Listado Navideño</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_7.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Polo Camicero Navideño</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_8.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Polo Algodón Listado</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_9.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Vestido Tull Navideño con peluche</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_10.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Vestido Tull Navideño Minnie</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_11.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Vestido Tull Navideño con peluche</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                             <div class="col-xs-6 col-sm-4 product" itemscope itemtype="#">
                                                <div class="entry">
                                                    <figure class="entry-thumbnail">
                                                        <a href="/index.php/detalle" title="Beef Carrot &#038; Pea Food"><img
                                                                width="400" height="500" src="<?php echo base_url(); ?>assets/img/galeria/foto_16.png"
                                                                class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                alt="imge_30-min" title="imge_30-min" /></a>
                                                    </figure>
                                                    <div class="entry-body">
                                                        <h3 class="entry-title"><a href="/index.php/detalle"
                                                                title="Beef Carrot &#038; Pea Food">Vestido Listado Navideño</a></h3>
                                                        <span class="price">
                                                            <ins>
                                                                <span class="woocommerce-Price-amount amount"><span
                                                                        class="woocommerce-Price-currencySymbol">Talla 0 a 5</ins>
                                                                    </span>
                                                        <div class="buttons">
                                                            <a rel="nofollow" href="/index.php/detalle" class="button product_type_simple add_to_cart_button ajax_add_to_cart"> Ver Detalle</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                         
                                            <br><br><br>

                                        </div>
                                        <!-- <div class="loadmore">
                                            <a href="page/2/index.html"></a> <span class="loadmore-text">/ Ver Más /</span>
                                            <span class="loading">loading...</span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="section-custom-1 section" style="background-image: url(<?php echo base_url(); ?>assets/blogs.dir/2/files/2016/10/bg_img.jpg); background-position: center bottom; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
                                <div class="section-radius-footer"></div>
                                <div class="container">
                                    <div class="section-header">
                                        <h2 class="section-title f-color"><span>NEED HELP CHOOSING THE PERFECT FOOD FOR
                                                YOUR PET?</span></h2>
                                        <div class="section-subtitle">When my pet is hungry I hear:</div>
                                    </div>
                                    <div class="section-content call-to-action">
                                        <a href="#" class="dog"><img alt="" src="<?php echo base_url(); ?>assets/blogs.dir/2/files/2016/10/left-img.png"></a>
                                        <a href="#" class="cat"><img alt="" src="<?php echo base_url(); ?>assets/blogs.dir/2/files/2016/10/right-img.png"></a>
                                        <img class="choose-icon hidden-xs" alt="Choose icon" src="<?php echo base_url(); ?>assets/themes/kreme/assets/imgs/icon-choose.png" /></div>
                                    <div class="buttons">
                                        <a href="index.html" target="_blank" class="button">Try our food finder</a></div>
                                </div>
                            </div> -->

                            <!-- <div class="widget widget-reviews">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 review-line">
                                            <div class="left-content">
                                                <div class="review-author">
                                                    <h4 class="review-title">Saka.Tran</h4>
                                                    <p>Chicago, IL <br />Dog</p>
                                                </div>
                                                <div class="review-content">
                                                    <h4 class="review-title">Excellent Quality</h4>
                                                    <span class="review-date">March 16, 2017</span>
                                                    <p class="review-text">[Our dog] wants to eat, she is very
                                                        energetic, her coat is soft and fluffy! What a change in
                                                        attitude with our dog!</p>
                                                    <div class="buttons">
                                                        <a href="#" target="_self" class="button" title="Read more Reviews">Read
                                                            more Reviews</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <div class="review-thumb">
                                                    <img src="<?php echo base_url(); ?>assets/blogs.dir/2/files/2017/02/review-thumb.png"
                                                        alt="Read more" /></div>
                                                <div class="review-content review-content-2">
                                                    <h4 class="review-title">See Why Kreme is Different</h4>
                                                    <p class="review-text">Natural ingredients are just the beginning.</p>
                                                    <div class="buttons">
                                                        <a href="#" target="_self" class="button" title="Read more">Read
                                                            more</a></div>
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
    </div>