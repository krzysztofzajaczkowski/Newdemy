<?php
/* Smarty version 3.1.33, created on 2020-10-27 00:14:43
  from '/var/www/html/admin-panel/themes/new-theme/template/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f975863e98836_71605334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42333d703672df48452c19dfe4ee7fba15e55f16' => 
    array (
      0 => '/var/www/html/admin-panel/themes/new-theme/template/footer.tpl',
      1 => 1603731854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f975863e98836_71605334 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer" class="bootstrap">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

</div>
<?php }
}
