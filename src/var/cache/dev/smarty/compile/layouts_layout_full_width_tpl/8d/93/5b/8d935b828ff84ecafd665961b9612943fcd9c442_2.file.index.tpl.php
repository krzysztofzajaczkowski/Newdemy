<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:30:44
  from '/var/www/html/themes/ap_office/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a44e930c1_67824806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d935b828ff84ecafd665961b9612943fcd9c442' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/index.tpl',
      1 => 1602938948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a44e930c1_67824806 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4394902015f8b2a44e8ce10_01428700', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_14129869225f8b2a44e8df29_56013069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_143777005f8b2a44e906d0_93412731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2299815355f8b2a44e8fa37_65851808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143777005f8b2a44e906d0_93412731', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4394902015f8b2a44e8ce10_01428700 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4394902015f8b2a44e8ce10_01428700',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14129869225f8b2a44e8df29_56013069',
  ),
  'page_content' => 
  array (
    0 => 'Block_2299815355f8b2a44e8fa37_65851808',
  ),
  'hook_home' => 
  array (
    0 => 'Block_143777005f8b2a44e906d0_93412731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14129869225f8b2a44e8df29_56013069', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2299815355f8b2a44e8fa37_65851808', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
