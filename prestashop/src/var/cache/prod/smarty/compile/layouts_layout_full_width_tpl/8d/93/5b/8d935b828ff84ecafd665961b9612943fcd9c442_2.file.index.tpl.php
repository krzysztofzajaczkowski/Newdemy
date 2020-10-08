<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:20:10
  from '/var/www/html/themes/ap_office/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7ed9caf240c0_57824948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d935b828ff84ecafd665961b9612943fcd9c442' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/index.tpl',
      1 => 1602148673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ed9caf240c0_57824948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10660593615f7ed9caf21277_54761960', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4465883855f7ed9caf21882_90990156 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7166071035f7ed9caf22b34_88719633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_13834082645f7ed9caf22616_76889671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7166071035f7ed9caf22b34_88719633', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10660593615f7ed9caf21277_54761960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_10660593615f7ed9caf21277_54761960',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4465883855f7ed9caf21882_90990156',
  ),
  'page_content' => 
  array (
    0 => 'Block_13834082645f7ed9caf22616_76889671',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7166071035f7ed9caf22b34_88719633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4465883855f7ed9caf21882_90990156', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13834082645f7ed9caf22616_76889671', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
