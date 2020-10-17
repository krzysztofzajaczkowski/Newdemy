<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:31:10
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2a5e281910_22373837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdae76e669214bb14839fb4256916c923288becd' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayOverrideTemplateFooter.tpl',
      1 => 1602938928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8b2a5e281910_22373837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6685527915f8b2a5e278b54_58421034', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/checkout.tpl');
}
/* {block 'footer'} */
class Block_6685527915f8b2a5e278b54_58421034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6685527915f8b2a5e278b54_58421034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php
}
}
/* {/block 'footer'} */
}
