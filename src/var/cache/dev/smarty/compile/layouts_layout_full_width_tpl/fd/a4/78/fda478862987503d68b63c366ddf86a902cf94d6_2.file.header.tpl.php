<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:45
  from '/var/www/html/themes/ap_office/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a4591f5a3_29542079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fda478862987503d68b63c366ddf86a902cf94d6' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/_partials/header.tpl',
      1 => 1602938948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a4591f5a3_29542079 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8358973965f8b2a459079f7_18212890', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18583142495f8b2a4590d875_35764254', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3443454175f8b2a45916c26_60880808', 'header_top');
}
/* {block 'header_banner'} */
class Block_8358973965f8b2a459079f7_18212890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_8358973965f8b2a459079f7_18212890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner']) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      </div>
      <?php }?>
  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_18583142495f8b2a4590d875_35764254 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_18583142495f8b2a4590d875_35764254',
  ),
);
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
class Block_3443454175f8b2a45916c26_60880808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_3443454175f8b2a45916c26_60880808',
  ),
);
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
}
