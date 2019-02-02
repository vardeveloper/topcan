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
                        <h1 class="page-title"><span>Novedades</span></h1>
                    </div>
                </div>
                <div class="section-radius section-radius-bottom"></div>
            </div>
            <div class="page-content full-width">
                <div class="page-content-inner">
                    <div class="container-fluid">


                        <div class="products full-width">
                            
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
                                    
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
