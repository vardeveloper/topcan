
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
                <div class="page-content full-width">
                    <div class="page-content-inner">
                        <div class="container-fluid">
                            <div class="product-detail">
                                <div class="prodcut-summary" itemscope itemtype="http://schema.org/WebPage">
                                    <div class="container">
                                        <div class="row">

                                            <?php foreach ($productoDetalle as $key => $asoc): ?>

                                                <div class="col-sm-5">
                                                    <div class="images">
                                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                            data-columns="4">
                                                            <figure class="woocommerce-product-gallery__wrapper">
                                                                <div data-thumb="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                    class="woocommerce-product-gallery__image"><a href="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"><img
                                                                        width="458" height="505" src="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                        class="attachment-shop_single size-shop_single"
                                                                        alt="" title="imge_27-min" data-caption=""
                                                                        data-src="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                        data-large_image="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                        data-large_image_width="458"
                                                                        data-large_image_height="505" srcset="<?php echo base_url(); ?><?= $asoc->img1_producto ?>"
                                                                        sizes="(max-width: 458px) 100vw, 458px" /></a>
                                                                </div>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-7">
                                                    <div class="summary entry-summary">
                                                        <div class="summary-header">
                                                            <!-- <div class="tags"><a href="../../product-tag/kreme-chicken-dry/index.html"
                                                                    rel="tag">Verano</a></div> -->
                                                            <h3 class="product_title entry-title"><?= $asoc->des_producto ?></h3>
                                                        </div>
                                                        <div class="woocommerce-product-rating" itemprop="aggregateRating"
                                                            itemscope itemtype="http://schema.org/AggregateRating">
                                                        </div>
                                                        <!-- <p class="price">
                                                            <ins><span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>
                                                                Talla de 0 a 5</span>
                                                            </ins>
                                                        </p> -->
                                                        <div itemprop="description" class="description">
                                                            <p><?= $asoc->det_producto ?></p>
                                                        </div>
                                                        <form class="cart" method="post">
                                                            <!--div class="quantity">
                                                                <input type="text" id="" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" />
                                                            </div-->
                                                            <div class="buttons">
                                                                <!--button type="submit" name="add-to-cart" value="2105" class="single_add_to_cart_button button">Cotizar</button-->
                                                                <a class="single_add_to_cart_button button" href="<?= base_url("index.php/contacto/index/$asoc->cod_producto") ?>">Cotizar</a>
                                                                <a class="single_add_to_cart_button button" href="<?= $retornar ?>">Retornar</a>
                                                            </div>
                                                        </form>
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
