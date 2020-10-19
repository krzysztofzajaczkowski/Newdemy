<?php
/* Smarty version 3.1.33, created on 2020-10-19 18:43:26
  from '/var/www/html/admin-panel/themes/default/template/controllers/addresses/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8dc22eab39e0_56872396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '009b97e58557d2f60c9098ae8eeb6fa3de03a524' => 
    array (
      0 => '/var/www/html/admin-panel/themes/default/template/controllers/addresses/helpers/list/list_header.tpl',
      1 => 1587033346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8dc22eab39e0_56872396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14099543055f8dc22eab24c1_15352237', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_14099543055f8dc22eab24c1_15352237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_14099543055f8dc22eab24c1_15352237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		parent.getSummary();
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
