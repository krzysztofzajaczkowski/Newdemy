<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:46
  from '/var/www/html/modules/leobootstrapmenu/views/templates/hook/widgets/widget_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a4673f2b7_08363091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08664003fd1a7833730c599f7024adab3c2eb500' => 
    array (
      0 => '/var/www/html/modules/leobootstrapmenu/views/templates/hook/widgets/widget_html.tpl',
      1 => 1602938923,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a4673f2b7_08363091 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leo-widget" data-id_widget="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
        <div class="widget-html">
            <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
            <div class="menu-title">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <?php }?>
            <div class="widget-inner">
                    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>
            </div>
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
}
