<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:38
  from '/var/www/html/themes/ap_office/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f69a1bb669_05676997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8dff6d6f9a361b18cc0c47ad19b14900ac58095' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/page.tpl',
      1 => 1602197332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f69a1bb669_05676997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10460113265f80f69a0ef823_99190169', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5844459925f80f69a0f1562_85918685 extends Smarty_Internal_Block
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
class Block_3939387795f80f69a0f07e4_57974992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5844459925f80f69a0f1562_85918685', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_17096398865f80f69a1b7be1_52712476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11080012245f80f69a1b87f3_14544285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6146260685f80f69a1b7103_91481109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17096398865f80f69a1b7be1_52712476', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11080012245f80f69a1b87f3_14544285', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_1042051525f80f69a1ba246_30859421 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_8718786245f80f69a1b99e4_73086923 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1042051525f80f69a1ba246_30859421', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10460113265f80f69a0ef823_99190169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10460113265f80f69a0ef823_99190169',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3939387795f80f69a0f07e4_57974992',
  ),
  'page_title' => 
  array (
    0 => 'Block_5844459925f80f69a0f1562_85918685',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_6146260685f80f69a1b7103_91481109',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17096398865f80f69a1b7be1_52712476',
  ),
  'page_content' => 
  array (
    0 => 'Block_11080012245f80f69a1b87f3_14544285',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8718786245f80f69a1b99e4_73086923',
  ),
  'page_footer' => 
  array (
    0 => 'Block_1042051525f80f69a1ba246_30859421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3939387795f80f69a0f07e4_57974992', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6146260685f80f69a1b7103_91481109', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8718786245f80f69a1b99e4_73086923', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
