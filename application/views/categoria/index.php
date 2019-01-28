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
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/marca/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Color</h3>
                                                    <ul>
                                                        <?php foreach ($arrayColores as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/color/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Estación</h3>
                                                    <ul>
                                                        <?php foreach ($arrayEstaciones as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/estacion/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Disfráz</h3>
                                                    <ul>
                                                        <?php foreach ($arrayDisfraces as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/disfraz/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Material</h3>
                                                    <ul>
                                                        <?php foreach ($arrayMateriales as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/material/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <div id="woocommerce_layered_nav-4" class="widget woocommerce widget_layered_nav">
                                                    <h3 class="widget-title">Accesorio</h3>
                                                    <ul>
                                                        <?php foreach ($arrayAccesorios as $key => $asoc): ?>
                                                            <li class="wc-layered-nav-term">
                                                                <a href="<?php echo base_url(); ?>index.php/categoria/accesorio/<?= $asoc->cod_categoria ?>"> <?= $asoc->des_categoria ?></a>
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
                                                        </select></div>
                                                </form>
                                            </div>

                                            <?php foreach ($noticiaDetalle as $key => $asoc): ?>
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
                                                                    <span class="woocommerce-Price-currencySymbol">Talla de 0 a 5</ins></span>
                                                                            <br>
                                                            <div class="buttons">
                                                                <a rel="nofollow" href="<?php echo base_url(); ?>index.php/detalle/index/<?= $asoc->cod_producto ?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                                    Ver Detalle
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>

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
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

