<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:31:11
  from '/var/www/html/themes/ap_office/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a5f445612_82813591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6760f319b39a0b929c4e2cc2a76f346039d92885' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1602938948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a5f445612_82813591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15953425415f8b2a5f442f70_05253674', 'step');
?>

<?php }
/* {block 'step'} */
class Block_15953425415f8b2a5f442f70_05253674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_15953425415f8b2a5f442f70_05253674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
