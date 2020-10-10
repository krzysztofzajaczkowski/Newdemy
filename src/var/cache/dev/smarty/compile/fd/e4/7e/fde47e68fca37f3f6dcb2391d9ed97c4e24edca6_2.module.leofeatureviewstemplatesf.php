<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:54
  from 'module:leofeatureviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6aadd28d5_99252253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde47e68fca37f3f6dcb2391d9ed97c4e24edca6' => 
    array (
      0 => 'module:leofeatureviewstemplatesf',
      1 => 1602197279,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6aadd28d5_99252253 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/leofeature/views/templates/front/fly_cart_slide_bar.tpl --><?php if ($_smarty_tpl->tpl_vars['enable_overlay_background']->value) {?>
	<div class="leo-fly-cart-mask"></div>
<?php }?>

<div class="leo-fly-cart-slidebar <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
	
	<div class="leo-fly-cart disable-dropdown">
		<div class="leo-fly-cart-wrapper">
			<div class="leo-fly-cart-icon-wrapper">
				<a href="javascript:void(0)" class="leo-fly-cart-icon"><i class="material-icons">&#xE8CC;</i></a>
				<span class="leo-fly-cart-total"></span>
			</div>
						<div class="leo-fly-cart-cssload-loader"></div>
		</div>
	</div>

</div><!-- end /var/www/html/modules/leofeature/views/templates/front/fly_cart_slide_bar.tpl --><?php }
}
