<?php
/* Smarty version 3.1.33, created on 2020-10-18 23:49:01
  from '/var/www/html/themes/etrendlite/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8cb84d87a539_29972080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4fcf23f74030543d341f5c88129f6fe8b1790eb' => 
    array (
      0 => '/var/www/html/themes/etrendlite/templates/page.tpl',
      1 => 1603047253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8cb84d87a539_29972080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17523710095f8cb84d876392_86519952', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6808545375f8cb84d876bd5_93605965 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8153131845f8cb84d876749_82261462 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6808545375f8cb84d876bd5_93605965', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11720541315f8cb84d878b33_31068549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_16265978625f8cb84d879087_49196455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8420371835f8cb84d8786f9_34235949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11720541315f8cb84d878b33_31068549', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16265978625f8cb84d879087_49196455', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7990849135f8cb84d879c17_16676951 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1306035585f8cb84d879880_87748619 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7990849135f8cb84d879c17_16676951', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17523710095f8cb84d876392_86519952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17523710095f8cb84d876392_86519952',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8153131845f8cb84d876749_82261462',
  ),
  'page_title' => 
  array (
    0 => 'Block_6808545375f8cb84d876bd5_93605965',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8420371835f8cb84d8786f9_34235949',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11720541315f8cb84d878b33_31068549',
  ),
  'page_content' => 
  array (
    0 => 'Block_16265978625f8cb84d879087_49196455',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1306035585f8cb84d879880_87748619',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7990849135f8cb84d879c17_16676951',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8153131845f8cb84d876749_82261462', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8420371835f8cb84d8786f9_34235949', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1306035585f8cb84d879880_87748619', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
