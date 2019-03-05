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
                                                    <form action="<?= base_url() ?>index.php/Categoria/loadRecord" class="search-form"
                                                          method="post" role="search">
                                                        <label>
                                                            <span class="screen-reader-text">Buscar:</span>
                                                            <input type="text" name="search" placeholder="Buscar"
                                                                   class="search-field">
                                                        </label>
                                                        <button class="search-submit" type="submit"><span class="fa fa-search"></span></button>
                                                    </form>
                                                </div>


                                                <?php foreach ($treeOfCategories as $key => $value): ?>
                                                <div class="widget woocommerce">
                                                    <a href="<?php echo base_url("index.php/categoria/index/$key/sub/0"); ?>">
                                                        <h3 class="widget-title"><?= $value['name'] ?></h3>
                                                    </a>
                                                    <ul class="product-categories">
                                                        <?php foreach ($value['subcategories'] as $index => $item): ?>
                                                            <li class="cat-item ">
                                                                <a href="<?php echo base_url("index.php/categoria/index/$key/sub/$index"); ?>"> <?= $item['name'] ?></a>
                                                            </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                                <?php endforeach ?>

                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                            <!--
                                            <div class="count-order">
                                                <p class="woocommerce-result-count">
                                                    Mostrando <span class="count">3</span> de 6 resultados
                                                </p>
                                                <form class="woocommerce-ordering" method="get">
                                                    <div class="select select-style2">
                                                        <div class="select-wrapper">
                                                            <span>Sort by average rating</span>
                                                            <select name="orderby" class="orderby option-tree-ui-select">
                                                                <option value="menu_order" selected='selected'>Ordenar</option>
                                                                <option value="popularity">Más Popular</option>
                                                                <option value="rating">Más Comprados</option>
                                                                <option value="date">Recien Llegados</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="filter_color" value="blue">
                                                </form>
                                            </div>
                                            -->

                                            <?php foreach ($result as $data): ?>

                                                <div class="col-xs-6 col-sm-4 product" itemscope="" itemtype="#">
                                                    <div class="entry" style="height: 420px">
                                                        <figure class="entry-thumbnail">
                                                            <a href="<?php echo base_url("index.php/detalle/index/" . $data['cod_producto']); ?>" title="">
                                                                <img src="<?php echo base_url(); ?><?= $data['img1_producto'] ?>"
                                                                     class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                     alt=""
                                                                     title="">
                                                            </a>
                                                        </figure>
                                                        <div class="entry-body">
                                                            <h3 class="entry-title">
                                                                <a href="<?php echo base_url("index.php/detalle/index/" . $data['cod_producto']); ?>" title="">
                                                                    <?= $data['des_producto'] ?>
                                                                </a>
                                                            </h3>
                                                            <div class="buttons">
                                                                <a rel="nofollow" href="<?php echo base_url("index.php/detalle/index/" . $data['cod_producto']); ?>"
                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                                    Ver Detalle
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach ?>

                                            <!--div class="navigation-wrap">
                                                <nav role="navigation" class="navigation pagination">
                                                    <a class="next page-numbers" href="#">Anterior</a>
                                                    <a class="page-numbers" href="#">1</a>
                                                    <span class="page-numbers current">2</span>
                                                    <a class="page-numbers" href="#">3</a>
                                                    <a class="next page-numbers" href="#">Siguiente</a>
                                                </nav>
                                            </div-->

                                        </div>

                                        <div class="row-fluid">
                                            <?= $pagination; ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
