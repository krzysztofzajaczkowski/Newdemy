<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:48:25
  from '/var/www/html/themes/ap_office/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6c9793e96_21079747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '239d95642da83519d5a20457c94b172c960a5754' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/_partials/pagination.tpl',
      1 => 1602197333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6c9793e96_21079747 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination">
  <div class="col-xs-12 col-md-6 col-lg-5 text-md-left text-xs-center">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14040052885f80f6c9781032_32287089', 'pagination_summary');
?>

  </div>
  <div class="col-xs-12 col-md-6 col-lg-7">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6702346965f80f6c97853f4_02276051', 'pagination_page_list');
?>

  </div>
</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_14040052885f80f6c9781032_32287089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_14040052885f80f6c9781032_32287089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_6702346965f80f6c97853f4_02276051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_6702346965f80f6c97853f4_02276051',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
      <ul class="page-list clearfix text-md-right text-xs-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
              <span class="spacer">&hellip;</span>
            <?php } else { ?>
              <a
                rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
              >
                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                  <i class="material-icons">&#xE5CB;</i><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prev','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                  <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span><i class="material-icons">&#xE5CC;</i>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </a>
            <?php }?>
          </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
      <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
