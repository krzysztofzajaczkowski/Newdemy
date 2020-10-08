<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:20:12
  from '/var/www/html/modules/appagebuilder/views/templates/hook/ApModule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7ed9cc60ee96_56375866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e15a0f3b94d4f1ce9a8540e825055a70fbf0a8ab' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/ApModule.tpl',
      1 => 1602148654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ed9cc60ee96_56375866 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApModule -->
<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';
echo $_smarty_tpl->tpl_vars['apContent']->value;
echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';
}
}
