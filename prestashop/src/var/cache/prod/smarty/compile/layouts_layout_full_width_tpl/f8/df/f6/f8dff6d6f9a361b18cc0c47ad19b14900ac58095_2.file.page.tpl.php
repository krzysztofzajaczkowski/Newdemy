<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:20:11
  from '/var/www/html/themes/ap_office/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7ed9cb1e8d96_19508449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8dff6d6f9a361b18cc0c47ad19b14900ac58095' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/page.tpl',
      1 => 1602148673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7ed9cb1e8d96_19508449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17320415795f7ed9cb18e165_09935704', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_8029394195f7ed9cb18f389_89532020 extends Smarty_Internal_Block
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
class Block_14245464265f7ed9cb18e9a5_48557919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8029394195f7ed9cb18f389_89532020', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13301989915f7ed9cb1e6649_39270974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17751603385f7ed9cb1e6f41_00590551 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6507746285f7ed9cb1e6016_96582008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13301989915f7ed9cb1e6649_39270974', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17751603385f7ed9cb1e6f41_00590551', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16985224505f7ed9cb1e7fe5_86954391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_6948357385f7ed9cb1e7ad0_35429010 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16985224505f7ed9cb1e7fe5_86954391', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17320415795f7ed9cb18e165_09935704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17320415795f7ed9cb18e165_09935704',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14245464265f7ed9cb18e9a5_48557919',
  ),
  'page_title' => 
  array (
    0 => 'Block_8029394195f7ed9cb18f389_89532020',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6507746285f7ed9cb1e6016_96582008',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13301989915f7ed9cb1e6649_39270974',
  ),
  'page_content' => 
  array (
    0 => 'Block_17751603385f7ed9cb1e6f41_00590551',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_6948357385f7ed9cb1e7ad0_35429010',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16985224505f7ed9cb1e7fe5_86954391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14245464265f7ed9cb18e9a5_48557919', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6507746285f7ed9cb1e6016_96582008', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6948357385f7ed9cb1e7ad0_35429010', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
