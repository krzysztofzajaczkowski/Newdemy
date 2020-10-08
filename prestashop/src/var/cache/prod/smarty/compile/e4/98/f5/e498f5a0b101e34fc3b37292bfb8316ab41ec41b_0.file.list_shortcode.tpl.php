<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:38:24
  from '/var/www/html/modules/appagebuilder/views/templates/hook/list_shortcode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7ede10a937f6_18250401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e498f5a0b101e34fc3b37292bfb8316ab41ec41b' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/list_shortcode.tpl',
      1 => 1602148654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ede10a937f6_18250401 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
	<head>	
		<style>			
			.list-sc-header
			{
				text-align: center;
			}
			
			.list-sc-header .btn-success
			{
				background: #5cb85c;
				border-color: #4cae4c;
				color: #fff;
				text-align: center;
				padding: 6px 12px;
				vertical-align: middle;
				border-radius: 4px;
				text-decoration: none;
			}
			
			.list-sc-header .btn-info
			{
				background: #5bc0de;
				border-color: #46b8da;
				color: #fff;
				text-align: center;
				padding: 6px 12px;
				vertical-align: middle;
				border-radius: 4px;
				text-decoration: none;
			}
			
			.list-sc-item
			{
				float: left;
				width: 30%;
				text-align: center;
				border: 1px solid #000;
				cursor: pointer;
				background: #337ab7;
				color: #fff;
				padding: 5px;
			}
			
			.list-sc-item:hover
			{
				background: #286090;
			}
			
			.list-sc-item.inactive
			{
				background: #f0ad4e;
			}
			
			.list-sc-item.inactive:hover
			{
				background: #ec971f;
			}
			
			.list-sc-content
			{
				margin-top: 20px;
				padding-left: 5%;
			}
			
			
		</style>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['js_dir']->value;?>
jquery/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<!--
		<div class="cssload-container">
			<div class="cssload-speeding-wheel"></div>
		</div>
		-->
		<div class="list-sc-header">
			<a target="_blank" class="sc-direct btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['shortcode_url']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List Shortcode','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
			<a target="_blank" class="sc-direct btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['shortcode_url_add']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create Shortcode','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
</a>
		</div>
		<?php if (count($_smarty_tpl->tpl_vars['list_shortcode']->value) > 0) {?>
			<div class="list-sc-content">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_shortcode']->value, 'list_shortcode_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list_shortcode_item']->value) {
?>
					<div class="list-sc-item<?php if (!$_smarty_tpl->tpl_vars['list_shortcode_item']->value['active']) {?> inactive<?php }?>" data-shortcode-key="<?php echo $_smarty_tpl->tpl_vars['list_shortcode_item']->value['shortcode_key'];?>
">
						<div class="sc-name">
							<?php echo $_smarty_tpl->tpl_vars['list_shortcode_item']->value['shortcode_name'];?>

						</div>
						<div class="sc-key">
							<?php echo $_smarty_tpl->tpl_vars['list_shortcode_item']->value['shortcode_key'];?>

						</div>
						<div class="sc-status">
							(ID: <?php echo $_smarty_tpl->tpl_vars['list_shortcode_item']->value['id_appagebuilder_shortcode'];?>
 - 
							<?php if ($_smarty_tpl->tpl_vars['list_shortcode_item']->value['active']) {?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
					
							<?php } else { ?>
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Inactive','mod'=>'appagebuilder'),$_smarty_tpl ) );?>

							<?php }?>
							)
						</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
		
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function(){
				$('.list-sc-item').click(function(){
					var shortcode_key = $(this).data('shortcode-key');
					var shortcode_txt = '[ApSC sc_key='+shortcode_key+'][/ApSC]';
					parent.tinyMCE.execCommand('mceInsertContent', false,shortcode_txt);
					parent.tinyMCE.activeEditor.windowManager.close();
				});
				
				$('.sc-direct').click(function(){
					window.open($(this).attr('href'), '_blank');
					parent.tinyMCE.activeEditor.windowManager.close();
				});
			});
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
