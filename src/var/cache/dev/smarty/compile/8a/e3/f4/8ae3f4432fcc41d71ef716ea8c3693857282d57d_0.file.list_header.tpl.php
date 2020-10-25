<?php
/* Smarty version 3.1.33, created on 2020-10-25 18:29:40
  from '/var/www/html/admin-panel/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f95b604ac81e2_20530471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ae3f4432fcc41d71ef716ea8c3693857282d57d' => 
    array (
      0 => '/var/www/html/admin-panel/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1603645281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f95b604ac81e2_20530471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12611702075f95b604ac7733_94610455', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_12611702075f95b604ac7733_94610455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_12611702075f95b604ac7733_94610455',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
