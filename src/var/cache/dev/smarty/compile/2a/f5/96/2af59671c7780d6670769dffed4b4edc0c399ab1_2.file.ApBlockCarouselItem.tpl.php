<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:49
  from '/var/www/html/modules/appagebuilder/views/templates/hook/ApBlockCarouselItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6a57ea052_81062327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2af59671c7780d6670769dffed4b4edc0c399ab1' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/ApBlockCarouselItem.tpl',
      1 => 1602197269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6a57ea052_81062327 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarouselItem -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
	<h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
<?php }
if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
    <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
<?php }
if (isset($_smarty_tpl->tpl_vars['formAtts']->value['descript'])) {?>
	<div><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['descript'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
<?php }?>
<div data-ride="carousel" class="carousel slide" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php $_smarty_tpl->_assignInScope('NumCount', count($_smarty_tpl->tpl_vars['formAtts']->value['slides']));?>
	<?php if ($_smarty_tpl->tpl_vars['NumCount']->value > $_smarty_tpl->tpl_vars['itemsperpage']->value) {?>
		<div class="direction">
			<a class="carousel-control left" href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-slide="prev">
				<span class="icon-prev hidden-xs" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control right" href="#<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['carouselName']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	<?php }?>
	<div class="carousel-inner">
	<?php $_smarty_tpl->_assignInScope('Num', array_chunk($_smarty_tpl->tpl_vars['formAtts']->value['slides'],$_smarty_tpl->tpl_vars['itemsperpage']->value));?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Num']->value, 'sliders', false, NULL, 'val', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sliders']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_val']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_val']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_val']->value['index'];
?>
		<div class="carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_val']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_val']->value['first'] : null)) {?>active<?php }?>">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider', false, NULL, 'sliders', array (
  'first' => true,
  'iteration' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['total'];
?>
				<?php if ($_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['first'] : null) || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?>
					<div class="row">
				<?php }?>
				<div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['scolumn']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
					<a title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s','sprintf'=>array($_smarty_tpl->tpl_vars['slider']->value['title']),'mod'=>'appagebuilder'),$_smarty_tpl ) );?>
" <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['is_open']) {?>target="_blank"<?php }?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value['link'], ENT_QUOTES, 'UTF-8');?>
">
					<?php }?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image']) && !empty($_smarty_tpl->tpl_vars['slider']->value['image'])) {?>
						<img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
					<?php } else { ?>
						<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['image_link']) && !empty($_smarty_tpl->tpl_vars['slider']->value['image_link'])) {?>
							<img class="img-fluid<?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> lazy<?php }?>" <?php if ($_smarty_tpl->tpl_vars['aplazyload']->value) {?> data-src<?php } else { ?>src<?php }?>="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['image_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
						<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['title']) && !empty($_smarty_tpl->tpl_vars['slider']->value['title'])) {?>
						<div class="title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['title'],'html','UTF-8' ));?>
</div>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['sub_title']) && !empty($_smarty_tpl->tpl_vars['slider']->value['sub_title'])) {?>
						<p class="sub-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['sub_title'],'html','UTF-8' ));?>
</p>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['slider']->value['descript']) && !empty($_smarty_tpl->tpl_vars['slider']->value['descript'])) {?>
						<div class="descript"><?php echo $_smarty_tpl->tpl_vars['slider']->value['descript'];?>
</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['slider']->value['link']) {?>
					</a>
					<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['last'] : null) || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sliders']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?>
					</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>
<?php }
}
