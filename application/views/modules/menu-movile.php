<ul id="menu-left-menu" class="cd-navigation">
    <li id="menu-item-2328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2101">
        <a href="/">Inicio</a>
    </li>
    <li id="menu-item-2330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2101">
        <a href="/nosotros">Nosotros</a>
    </li>
    <li id="menu-item-2102" class="megamenu col-4 menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-2102">
        <a href="#l">Productos</a>
        <ul class="sub-menu">

            <?php foreach ($arrayCategorias as $key => $asoc): ?>
                <li class="menu-item">
                    <a data-menu="<?= $asoc->cod_tip_categoria ?>" href="/categoria/index/<?= $asoc->cod_tip_categoria ?>">
                        <?= $asoc->des_tip_categoria ?>
                    </a>
                </li>
            <?php endforeach ?>

            <!-- <ul class="sub-menu"> -->
            <!-- <li id="menu-item-2392" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392">
            <a href="#">Marca</a>
            </li>
            <li id="menu-item-2393" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393">
            <a href="#">Color</a>
            </li>
            <li id="menu-item-2394" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394">
            <a href="#">Estación</a>
            </li>
            <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395">
            <a href="#">Disfraz</a>
            </li>
            <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395">
            <a href="#">Material</a>
            </li>
            <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395">
            <a href="#">Accesorios</a>
            </li> -->
            <!-- </ul> -->
            <!-- <li id="menu-item-2391" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2391"><a
                            href="#">Categoria</a>
                    
                    </li> -->
            <!-- <li id="menu-item-2396" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2396"><a
                    href="#">Color</a>
                    <ul class="sub-menu">
                    <li id="menu-item-2392" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392"><a
                            href="index.html">Producto 1</a></li>
                    <li id="menu-item-2393" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                            href="http://kreme.mthemes.org/style2/shop/?orderby=rating&amp;filter_color=blue">Producto 2</a></li>
                    <li id="menu-item-2394" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                            href="http://kreme.mthemes.org/style2/product-category/chicken-food/">Producto 3</a></li>
                    <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                            href="http://kreme.mthemes.org/style2/product/beef-carrot-pea-food-4/">Producto 4</a></li>
                    </ul>
            </li>
            <li id="menu-item-2401" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2401"><a
                    href="#">Estación</a>
                    <ul class="sub-menu">
                    <li id="menu-item-2392" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392"><a
                            href="index.html">Producto 1</a></li>
                    <li id="menu-item-2393" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                            href="http://kreme.mthemes.org/style2/shop/?orderby=rating&amp;filter_color=blue">Producto 2</a></li>
                    <li id="menu-item-2394" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                            href="http://kreme.mthemes.org/style2/product-category/chicken-food/">Producto 3</a></li>
                    <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                            href="http://kreme.mthemes.org/style2/product/beef-carrot-pea-food-4/">Producto 4</a></li>
                    </ul>
            </li>
            <li id="menu-item-2373" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2373"><a
                    href="#"> Disfraz</a>
                    <ul class="sub-menu">
                    <li id="menu-item-2392" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-2392"><a
                            href="index.html">Producto 1</a></li>
                    <li id="menu-item-2393" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2393"><a
                            href="http://kreme.mthemes.org/style2/shop/?orderby=rating&amp;filter_color=blue">Producto 2</a></li>
                    <li id="menu-item-2394" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2394"><a
                            href="http://kreme.mthemes.org/style2/product-category/chicken-food/">Producto 3</a></li>
                    <li id="menu-item-2395" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2395"><a
                            href="http://kreme.mthemes.org/style2/product/beef-carrot-pea-food-4/">Producto 4</a></li>
                    </ul>
            </li> -->
        </ul>
    </li>
    <li id="menu-item-2101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2101">
        <a href="/ubicacion">Ubicación</a>
    </li>
    <li id="menu-item-2101" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2101">
        <a href="/contacto">Contacto</a>
    </li>
</ul>