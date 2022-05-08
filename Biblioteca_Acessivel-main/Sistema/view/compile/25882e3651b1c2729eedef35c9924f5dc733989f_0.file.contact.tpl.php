<?php
/* Smarty version 3.1.39, created on 2021-08-13 18:27:04
  from 'C:\xampp\htdocs\biblioteca\view\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61169d58deef01_61055902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25882e3651b1c2729eedef35c9924f5dc733989f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\contact.tpl',
      1 => 1628872020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61169d58deef01_61055902 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start: Contact Us Section -->
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="contact-main">
                <div class="contact-us">
                    <div class="container">
                       <!-- <div class="contact-location">
                              <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>121 King Street, Melbourne </li>
                                            <li>Victoria 3000 Australia</li>
                                            <li>PO Box 16122</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li>121 King Street, Melbourne </li>
                                            <li>Victoria 3000 Australia</li>
                                            <li>PO Box 16122</li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                            <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                            <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                            <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                            <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flipcard">
                                <div class="front">
                                    <div class="top-info">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                    </div>
                                    <div class="bottom-info">
                                        <span class="top-arrow"></span>
                                        <ul>
                                            <li>www.libraria.com</li>
                                            <li>support@libraria.com</li>
                                            <li>info@libraria.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="back">
                                    <div class="bottom-info orange-bg">
                                        <span class="bottom-arrow"></span>
                                        <ul>
                                            <li><a href="http://www.libraria.com/">www.libraria.com </a></li>
                                            <li><a href="mailto:support@libraria.com">support@libraria.com</a></li>
                                            <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                        </ul>
                                    </div>
                                    <div class="top-info dark-bg">
                                        <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div> -->
                        <div class="row">
                            <div class="contact-area">
                                <div class="container">
                                    <div class="col-md-5 col-md-offset-1 border-gray-left">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-map bg-light margin-left">
                                                    <div class="company-map" id="map"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 border-gray-right">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-form bg-light margin-right">
                                                    <h2>Envie-nos uma mensagem</h2>
                                                    <span class="underline left"></span>
                                                    <div class="contact-fields">
                                                        <form id="contact" name="contact" action="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
" method="post" >
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Nome" name="first-name" id="first-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Apelido" name="last-name" id="last-name" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]$" placeholder="Email" name="email" id="email" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text" placeholder="Número de telefone" name="phone" id="phone" size="30" value="" aria-required="true" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" placeholder="Sua Mensagem" id="message" aria-required="true"></textarea>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group form-submit">
                                                                        <input class="btn btn-default" id="submit-contact-form" type="button" name="submit" value="Enviar"  />
                                                                    </div>
                                                                </div>
                                                                <div id="success">
                                                                    <span>Sua mensagem foi enviada com sucesso! Nossa equipe entrará em contato com você em breve.</span>
                                                                </div>

                                                                <div id="error">
                                                                    <span>Ocorreu um erro. Tente atualizar e enviar o formulário novamente.</span>
                                                                </div>
                                                            </div>
                                                        </form>
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
        </main>
    </div>
</div>
<!-- End: Contact Us Section -->


<!-- Google Map API -->
<?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAT5k-RhvFSVIuCALkpHhKgQx6SJUd9gpI"><?php echo '</script'; ?>
>

<!-- Google Map (Custom Style) -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/google.map.js"><?php echo '</script'; ?>
><?php }
}
