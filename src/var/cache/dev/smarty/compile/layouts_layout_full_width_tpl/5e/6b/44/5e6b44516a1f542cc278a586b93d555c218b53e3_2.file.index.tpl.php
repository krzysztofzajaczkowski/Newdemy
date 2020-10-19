<?php
/* Smarty version 3.1.33, created on 2020-10-18 23:49:01
  from '/var/www/html/themes/etrendlite/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8cb84d874221_47360521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6b44516a1f542cc278a586b93d555c218b53e3' => 
    array (
      0 => '/var/www/html/themes/etrendlite/templates/index.tpl',
      1 => 1603047253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8cb84d874221_47360521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3697427705f8cb84d872711_35257036', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14498727525f8cb84d872b29_98684301 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_3339730985f8cb84d873473_86221238 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2441726625f8cb84d8730d3_64557574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3339730985f8cb84d873473_86221238', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_3697427705f8cb84d872711_35257036 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_3697427705f8cb84d872711_35257036',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14498727525f8cb84d872b29_98684301',
  ),
  'page_content' => 
  array (
    0 => 'Block_2441726625f8cb84d8730d3_64557574',
  ),
  'hook_home' => 
  array (
    0 => 'Block_3339730985f8cb84d873473_86221238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14498727525f8cb84d872b29_98684301', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2441726625f8cb84d8730d3_64557574', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
