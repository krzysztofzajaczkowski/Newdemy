<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:46
  from '/var/www/html/modules/leobootstrapmenu/views/templates/hook/widgets/widget_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a46b3e679_22148580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36ca12a483bccd2bc19d988e3e285fd0cb5cce6' => 
    array (
      0 => '/var/www/html/modules/leobootstrapmenu/views/templates/hook/widgets/widget_product_list.tpl',
      1 => 1602938923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a46b3e679_22148580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leo-widget" data-id_widget="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && !empty($_smarty_tpl->tpl_vars['products']->value)) {?>
	<div class="widget-products">
		<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
		<div class="menu-title">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

		</div>
		<?php }?>
		<div class="widget-inner">
			<?php if (isset($_smarty_tpl->tpl_vars['products']->value) && $_smarty_tpl->tpl_vars['products']->value) {?>
				<div class="product-block">
					<?php $_smarty_tpl->_assignInScope('liHeight', 140);?>
					<?php $_smarty_tpl->_assignInScope('nbItemsPerLine', 3);?>
					<?php $_smarty_tpl->_assignInScope('nbLi', $_smarty_tpl->tpl_vars['limit']->value);?>
					<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

					<?php echo smarty_function_math(array('equation'=>"nbLines*liHeight",'nbLines'=>ceil($_smarty_tpl->tpl_vars['nbLines']->value),'liHeight'=>$_smarty_tpl->tpl_vars['liHeight']->value,'assign'=>'ulHeight'),$_smarty_tpl);?>
	 

					<?php $_smarty_tpl->_assignInScope('mproducts', array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['limit']->value));?>
					 
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'homeFeaturedProducts', array (
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
						<?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeFeaturedProducts']->value['total'] : null),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?> 
						<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
							<div class="thumbnail-container clearfix">
								<div class="product-image">
									<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7327251965f8b2a46b0c1c6_42261522', 'product_thumbnail');
?>

								</div>
								<div class="product-meta">
									<div class="product-description">
										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13591703375f8b2a46b125a0_42722227', 'product_name');
?>


										<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10759509365f8b2a46b16c04_43129977', 'product_price_and_shipping');
?>

									</div>
								</div>
							</div>
						</div>			
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			<?php }?>
		</div>
	</div>
<?php } else { ?>
    <div class="widget-products">		
        <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products found.','mod'=>'leobootstrapmenu'),$_smarty_tpl ) );?>
</p>
    </div>
<?php }?>
<div class="w-name">
        <select name="inject_widget" class="inject_widget_name">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['key_widget'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['w']->value['name'], ENT_QUOTES, 'UTF-8');?>

                </option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div><?php }
/* {block 'product_thumbnail'} */
class Block_7327251965f8b2a46b0c1c6_42261522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_7327251965f8b2a46b0c1c6_42261522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

										<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
											<img
												class="img-fluid"
												src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
												alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
												data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
											>
										</a>
									<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_13591703375f8b2a46b125a0_42722227 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_13591703375f8b2a46b125a0_42722227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<h4 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
										<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_10759509365f8b2a46b16c04_43129977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_10759509365f8b2a46b16c04_43129977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

											<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
												<div class="product-price-and-shipping">
													<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
														<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

														<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
															<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
														<?php }?>
													<?php }?>
													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


													<span class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
														<span itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"></span><span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
													</span>

													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


													<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

												</div>
											<?php }?>
										<?php
}
}
/* {/block 'product_price_and_shipping'} */
}
