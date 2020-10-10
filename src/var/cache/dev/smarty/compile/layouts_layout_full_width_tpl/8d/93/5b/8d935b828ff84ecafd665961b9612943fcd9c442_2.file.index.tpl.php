<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:37
  from '/var/www/html/themes/ap_office/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f699d092a8_75530714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d935b828ff84ecafd665961b9612943fcd9c442' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/index.tpl',
      1 => 1602197332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f699d092a8_75530714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6418240745f80f699d063f7_42174738', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_803686085f80f699d06ad7_94102905 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9325511495f80f699d07b96_63125019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_21301373335f80f699d073f0_97998930 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9325511495f80f699d07b96_63125019', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6418240745f80f699d063f7_42174738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6418240745f80f699d063f7_42174738',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_803686085f80f699d06ad7_94102905',
  ),
  'page_content' => 
  array (
    0 => 'Block_21301373335f80f699d073f0_97998930',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9325511495f80f699d07b96_63125019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_803686085f80f699d06ad7_94102905', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21301373335f80f699d073f0_97998930', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
