<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:48:21
  from '/var/www/html/themes/ap_office/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6c5b63a72_52035487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c652486d6a5a18bb3a8ff228b2b3360022a897f' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/_partials/breadcrumb.tpl',
      1 => 1602197333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6c5b63a72_52035487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
  <ul itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19426465755f80f6c5af0ca7_38278842', 'breadcrumb_item');
?>

    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
  
  <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {?>
    <?php if ($_smarty_tpl->tpl_vars['category']->value['image']) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
      </div>
    <?php }?>
  <?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['tpl_uri']->value) && $_smarty_tpl->tpl_vars['tpl_uri']->value) {?>
      <div class="category-cover hidden-sm-down">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tpl_uri']->value, ENT_QUOTES, 'UTF-8');?>
/assets/img/bg-breadcrumb.png" class="img-fluid" alt="Breadcrumb image">
      </div>
    <?php } else { ?>  
      <div class="image-breadcrumb"></div>
    <?php }?>
  <?php }?>
</nav><?php }
/* {block 'breadcrumb_item'} */
class Block_19426465755f80f6c5af0ca7_38278842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb_item' => 
  array (
    0 => 'Block_19426465755f80f6c5af0ca7_38278842',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
          <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php
}
}
/* {/block 'breadcrumb_item'} */
}
