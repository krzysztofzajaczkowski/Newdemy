<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:46
  from '/var/www/html/modules/appagebuilder/views/templates/hook/ApGeneral.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a4615f9b5_74088872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69d68b6de99be3a6b889def5c5e691173ebcd106' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/ApGeneral.tpl',
      1 => 1602938916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a4615f9b5_74088872 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- @file modules\appagebuilder\views\templates\hook\ApGeneral -->
<div<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['id']) && $_smarty_tpl->tpl_vars['formAtts']->value['id']) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['id'],'html','UTF-8' ));?>
"<?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) {?> class="block <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['class'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' ));?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['content_html'])) {?>
        <?php echo $_smarty_tpl->tpl_vars['formAtts']->value['content_html'];?>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['apContent']->value;?>
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div><?php }
}
