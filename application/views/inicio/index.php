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
                        <!--<div class="page-breadcrumb">
                            <div class="breadcrumb">
                                <span><a href="#">Home</a></span> / <span>Shop</span>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="section-radius section-radius-bottom"></div>
            </div>
            <div class="page-content full-width without-padding">
                <div class="page-content-inner">
                    <div class="container-fluid">
                        <div class="products full-width">
                            <!--div class="filter complex-filter">
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
                                                        <a class="button" href="#" data-filter="mas-vendidos">Los más vendido</a>
                                                    </div>
                                                    <div class="item-category">
                                                        <a class="button" href="#" data-filter="mas-popular">Los más popular</a>
                                                    </div>
                                                    <div class="item-category">
                                                        <a class="button" href="#" data-filter="recien-llegados">Recién Llegados</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                            
                            
                            
                            <div class="products-content">
                                <div class="container">
                                    <div class="row product-grid">
                                        <?php foreach ($results as $data): ?>
                                        <div class="col-xs-6 col-sm-4 product" itemscope="" itemtype="#">
                                            <div class="entry">
                                                <figure class="entry-thumbnail">
                                                    <a href="<?php echo base_url("detalle/index/$data->cod_producto"); ?>" title="">
                                                        <img src="<?php echo base_url(); ?><?= $data->img1_producto ?>" 
                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image" 
                                                             alt="" 
                                                             title=""
                                                             width="400" 
                                                             height="500">
                                                    </a>
                                                </figure>
                                                <div class="entry-body">
                                                    <h3 class="entry-title">
                                                        <a href="<?php echo base_url("detalle/index/$data->cod_producto"); ?>" title="">
                                                            <?= $data->des_producto ?>
                                                        </a>
                                                    </h3>
                                                    <div class="buttons">
                                                        <a rel="nofollow" href="<?php echo base_url("detalle/index/$data->cod_producto"); ?>" 
                                                           class="button product_type_simple add_to_cart_button ajax_add_to_cart">
                                                            Ver Detalle
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                        
                                    </div>

                                    <!--div class="navigation-wrap">
                                        <nav role="navigation" class="navigation pagination">
                                            <a class="next page-numbers" href="#">Anterior</a>
                                            <a class="page-numbers" href="#">1</a>
                                            <span class="page-numbers current">2</span>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="next page-numbers" href="#">Siguiente</a>
                                        </nav>
                                    </div-->
                                    
                                    <div class="row-fluid">
                                        <?php if (isset($links)) { ?>
                                            <?php echo $links ?>
                                        <?php } ?>
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
