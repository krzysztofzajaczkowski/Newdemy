<?php
/* Smarty version 3.1.33, created on 2020-10-18 23:49:13
  from '/var/www/html/admin-panel/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8cb859ac3e33_18608175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e0a99361655252188a18a7915e0f0cd2e67cb9' => 
    array (
      0 => '/var/www/html/admin-panel/themes/new-theme/template/content.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8cb859ac3e33_18608175 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
