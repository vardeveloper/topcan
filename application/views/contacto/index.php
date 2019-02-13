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
                        <h1 class="page-title"><span>Contacto</span></h1>
                    </div>
                </div>
                <div class="section-radius section-radius-bottom"></div>
            </div>
            <div class="page-content full-width">
                <div class="page-content-inner">
                    <div class="container">
                        <div class="page-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="contents">
                                        <div class="page-entry">
                                            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1477977425832">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner ">
                                                        <div class="wpb_wrapper">
                                                            <div class="section-header  style-v2">
                                                                <h2 class="section-title"><span>Formulario de Contacto</span></h2>
                                                                <div class="section-subtitle">Envíenos su pedido o consultas sobre nuestros productos o servicios:</div>
                                                            </div>
                                                            <div role="form" class="wpcf7">

                                                                <?php if (!empty(validation_errors())) { ?>
                                                                <div class="alert alert-danger alert-dismissible show" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <?php echo validation_errors(); ?>
                                                                </div>
                                                                <?php } ?>
                                                                
                                                                <?php if ($this->session->flashdata('send')) { ?>
                                                                <div class="alert alert-success alert-dismissible show" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    Mensaje enviado!
                                                                </div>
                                                                <?php } ?>

                                                                <?php echo form_open('index.php/contacto'); ?>
                                                                    <div style="display: none;">
                                                                        <input type="hidden" name="" value="" />
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xs-6 col-sm-6">
                                                                            <p class="">
                                                                                <span class="">
                                                                                    <input
                                                                                        type="text" 
                                                                                        name="name"
                                                                                        id="name" 
                                                                                        value="<?php echo set_value('name'); ?>" 
                                                                                        size="40" 
                                                                                        class=""
                                                                                        required="true"
                                                                                        placeholder="Nombre" />
                                                                                </span>
                                                                            </p>
                                                                            <p class="">
                                                                                <span class="">
                                                                                    <input
                                                                                        type="email" 
                                                                                        name="email"
                                                                                        id="email" 
                                                                                        value="<?php echo set_value('email'); ?>" 
                                                                                        size="40" 
                                                                                        class=""
                                                                                        required="true"
                                                                                        placeholder="Correo Electrónico" />
                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-xs-6 col-sm-6">
                                                                            <p class="">
                                                                                <span class="">
                                                                                    <input
                                                                                        type="text" 
                                                                                        name="phone"
                                                                                        id="phone" 
                                                                                        value="<?php echo set_value('phone'); ?>" 
                                                                                        size="40" 
                                                                                        class=""
                                                                                        required="true"
                                                                                        placeholder="Teléfono / celular" />
                                                                                    </span>
                                                                                </p>
                                                                            <p class="">
                                                                                <span class="">
                                                                                    <input
                                                                                        type="text" 
                                                                                        name="subject"
                                                                                        id="subject" 
                                                                                        value="<?php echo set_value('subject'); ?>" 
                                                                                        size="40" 
                                                                                        class=""
                                                                                        required="true"
                                                                                        placeholder="Asunto" />
                                                                                </span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <p>
                                                                        <span>
                                                                            <textarea
                                                                                name="message" 
                                                                                id="message" 
                                                                                rows="10">
                                                                            </textarea>
                                                                        </span>
                                                                    </p>
                                                                    <p class="form-submit buttons button-center">
                                                                        <input type="submit" value="Enviar Mensaje"
                                                                               class="button"
                                                                               id="submit" /></p>
                                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="vc_row-full-width vc_clearfix"></div>
                                            <!-- <div data-vc-full-width="true" data-vc-full-width-init="false"
                                                data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid kreme-main-bg vc_custom_1487825799126 vc_row-no-padding">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner vc_custom_1477977615352">
                                                        <div class="wpb_wrapper">
                                                            <div class="contact-info ">
                                                                <div class="container">
                                                                    <div class="row">
                                                                        <div class="col-sm-4 contact-info-item">
                                                                            <div class="entry">
                                                                                <h3 class="entry-title" style="color:#fff;">Address</h3>
                                                                                <div class="entry-content" style="color:#fff;">9067
                                                                                    Zurich, Switzerland 87.</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4 contact-info-item">
                                                                            <div class="entry">
                                                                                <h3 class="entry-title" style="color:#fff;">Phone</h3>
                                                                                <div class="entry-content" style="color:#fff;">01-222-567-6789
                                                                                    - (+84) 222-567-6789</div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4 contact-info-item">
                                                                            <div class="entry">
                                                                                <h3 class="entry-title" style="color:#fff;">Email</h3>
                                                                                <div class="entry-content" style="color:#fff;"><a
                                                                                        href="mailto:Sakatran88@gmail.com">Sakatran88@gmail.com</a>
                                                                                    - Kreme@gmail.com</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="vc_row-full-width vc_clearfix"></div>
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
