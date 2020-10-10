<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:24
  from '/var/www/html/themes/ap_office/modules/leofeature/views/templates/hook/leo_cart_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f68c432355_90181567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09fb68a5f2371c374600066b8544769530ca40bd' => 
    array (
      0 => '/var/www/html/themes/ap_office/modules/leofeature/views/templates/hook/leo_cart_button.tpl',
      1 => 1602197331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f68c432355_90181567 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="button-container cart">
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_cart']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
		<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" class="quantity_product quantity_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="quantity_product">
		<input type="hidden" value="<?php if (isset($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity']) && $_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'] > $_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>" class="minimal_quantity minimal_quantity_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="minimal_quantity">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="id_product_attribute id_product_attribute_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product_attribute">
		<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" class="id_product" name="id_product">
		<input type="hidden" name="id_customization" value="<?php if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_customization']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_customization'], ENT_QUOTES, 'UTF-8');
}?>" class="product_customization_id">
			
		<input type="hidden" class="input-group form-control qty qty_product qty_product_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="qty" value="<?php if (isset($_smarty_tpl->tpl_vars['leo_cart_product']->value['wishlist_quantity'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['wishlist_quantity'], ENT_QUOTES, 'UTF-8');
} else {
if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'] && $_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'] > $_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}
}?>" data-min="<?php if ($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'] && $_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'] > $_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>">
		  <button class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['leo_cart_product']->value['id_product'], ENT_QUOTES, 'UTF-8');
if (!$_smarty_tpl->tpl_vars['leo_cart_product']->value['add_to_cart_url']) {?> disabled<?php }?>" data-button-action="add-to-cart" type="submit">
			<span class="leo-loading cssload-speeding-wheel"></span>
			<span class="leo-bt-cart-content">
				<i class="fa fa-shopping-cart"></i>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Cart','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</span>
		</button>
		
	</form>
</div>

<?php }
}
