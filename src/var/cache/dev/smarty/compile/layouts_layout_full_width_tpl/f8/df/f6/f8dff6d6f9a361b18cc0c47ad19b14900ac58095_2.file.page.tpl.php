<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:45
  from '/var/www/html/themes/ap_office/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a45085ed6_85057288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8dff6d6f9a361b18cc0c47ad19b14900ac58095' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/page.tpl',
      1 => 1602938949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a45085ed6_85057288 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2256042105f8b2a4505d466_71467548', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_12261338625f8b2a4505f8c7_46490444 extends Smarty_Internal_Block
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
class Block_413316045f8b2a4505e5b2_13478081 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12261338625f8b2a4505f8c7_46490444', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_21235280595f8b2a4507f624_28060859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17377419535f8b2a45080dc5_47106455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12090127255f8b2a4507e5e0_89863508 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21235280595f8b2a4507f624_28060859', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17377419535f8b2a45080dc5_47106455', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_18350000245f8b2a45083af3_28002459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_21131281895f8b2a45082df8_50212917 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18350000245f8b2a45083af3_28002459', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2256042105f8b2a4505d466_71467548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2256042105f8b2a4505d466_71467548',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_413316045f8b2a4505e5b2_13478081',
  ),
  'page_title' => 
  array (
    0 => 'Block_12261338625f8b2a4505f8c7_46490444',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12090127255f8b2a4507e5e0_89863508',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_21235280595f8b2a4507f624_28060859',
  ),
  'page_content' => 
  array (
    0 => 'Block_17377419535f8b2a45080dc5_47106455',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_21131281895f8b2a45082df8_50212917',
  ),
  'page_footer' => 
  array (
    0 => 'Block_18350000245f8b2a45083af3_28002459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_413316045f8b2a4505e5b2_13478081', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12090127255f8b2a4507e5e0_89863508', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21131281895f8b2a45082df8_50212917', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
