<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:31:11
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a5fc91f19_89074198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a492db7c40348fedeea5e8dcbfe0369661dce8b0' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCheckoutSummaryTop.tpl',
      1 => 1602938928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a5fc91f19_89074198 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <h5 class="aeuc_scart"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shopping_cart']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My shopping cart','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a></h5>
<?php }
}
