<?php
/* Smarty version 3.1.33, created on 2020-10-23 20:40:26
  from '/var/www/html/themes/etrendlite/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f93239a382db6_82258151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e6b44516a1f542cc278a586b93d555c218b53e3' => 
    array (
      0 => '/var/www/html/themes/etrendlite/templates/index.tpl',
      1 => 1603478302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f93239a382db6_82258151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_319059065f93239a3808e1_42968901', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_9939598365f93239a380e37_54590571 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1200482335f93239a381b43_32074465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_8401522145f93239a381567_35516046 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1200482335f93239a381b43_32074465', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_319059065f93239a3808e1_42968901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_319059065f93239a3808e1_42968901',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_9939598365f93239a380e37_54590571',
  ),
  'page_content' => 
  array (
    0 => 'Block_8401522145f93239a381567_35516046',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1200482335f93239a381b43_32074465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9939598365f93239a380e37_54590571', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8401522145f93239a381567_35516046', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
