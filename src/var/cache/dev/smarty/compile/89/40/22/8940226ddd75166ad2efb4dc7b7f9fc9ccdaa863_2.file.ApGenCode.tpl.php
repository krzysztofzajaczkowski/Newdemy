<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:42
  from '/var/www/html/modules/appagebuilder/views/templates/hook/ApGenCode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f69e63d266_14506135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8940226ddd75166ad2efb4dc7b7f9fc9ccdaa863' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/ApGenCode.tpl',
      1 => 1602197269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f69e63d266_14506135 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'])) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['formAtts']->value['tpl_file'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['error_file']) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['error_file'])) {?>
	<?php echo $_smarty_tpl->tpl_vars['formAtts']->value['error_message'];
}
}
}
