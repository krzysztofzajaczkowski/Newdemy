<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:41
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a412ab857_11189179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd272f7551f012d569a371d873c754fb658837a7f' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_before_price.tpl',
      1 => 1602938928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a412ab857_11189179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13944683565f8b2a41295d42_52132605';
?>

<?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'])) {?>
        <span class="aeuc_from_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['before_price']['from_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
