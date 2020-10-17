<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:31:10
  from '/var/www/html/themes/ap_office/templates/checkout/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a5e5231a5_77173320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b07b01a285f3402b7a94f3bcc92ee084abb9a89d' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/checkout/_partials/header.tpl',
      1 => 1602938948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a5e5231a5_77173320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18130861855f8b2a5e511e26_12506618', 'header');
?>

<?php }
/* {block 'header_nav'} */
class Block_6458776015f8b2a5e513650_47300942 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav">
      <div class="topnav">
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
        <div class="container">
        <?php }?>
          <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
        </div>
        <?php }?>
      </div>
      <div class="bottomnav">
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
          <div class="container">
        <?php }?>
          <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
        <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
          </div>
        <?php }?>
      </div>
    </nav>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_11657469155f8b2a5e51d7b7_72105645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top">
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
      <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
        </div>
      <?php }?>
    </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'header_top'} */
/* {block 'header'} */
class Block_18130861855f8b2a5e511e26_12506618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18130861855f8b2a5e511e26_12506618',
  ),
  'header_nav' => 
  array (
    0 => 'Block_6458776015f8b2a5e513650_47300942',
  ),
  'header_top' => 
  array (
    0 => 'Block_11657469155f8b2a5e51d7b7_72105645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6458776015f8b2a5e513650_47300942', 'header_nav', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11657469155f8b2a5e51d7b7_72105645', 'header_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'header'} */
}
