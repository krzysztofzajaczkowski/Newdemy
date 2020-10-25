<?php
/* Smarty version 3.1.33, created on 2020-10-23 20:40:26
  from 'module:psspecialsviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f93239a36f1c5_73887886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69eca6f7099f96303240f391e6c6743858b25719' => 
    array (
      0 => 'module:psspecialsviewstemplatesh',
      1 => 1603478302,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5f93239a36f1c5_73887886 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/etrendlite/modules/ps_specials/views/templates/hook/ps_specials.tpl -->
<section class="featured-products clearfix top-margin bottom-margin">
    <div class="container">
        <div class="section-title">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</i>
            </span>
        </div>
        <div class="products-grid">
            <div class="row">
                <div class="products product-slider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="all-products">
                    <a class="all-product-link float-xs-left float-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All sale products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end /var/www/html/themes/etrendlite/modules/ps_specials/views/templates/hook/ps_specials.tpl --><?php }
}
