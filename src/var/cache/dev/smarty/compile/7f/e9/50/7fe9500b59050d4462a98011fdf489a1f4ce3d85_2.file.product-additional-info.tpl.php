<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:53:21
  from '/var/www/html/themes/ap_office/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f7f19b8579_37470782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fe9500b59050d4462a98011fdf489a1f4ce3d85' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1602197332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f7f19b8579_37470782 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
