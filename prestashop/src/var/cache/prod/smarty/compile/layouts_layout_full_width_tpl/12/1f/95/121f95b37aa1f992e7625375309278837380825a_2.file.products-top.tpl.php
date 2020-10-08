<?php
/* Smarty version 3.1.33, created on 2020-10-08 11:42:20
  from '/var/www/html/themes/ap_office/templates/catalog/_partials/products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f7edefc9d8bd2_11136206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '121f95b37aa1f992e7625375309278837380825a' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/catalog/_partials/products-top.tpl',
      1 => 1602148672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/setting.tpl' => 1,
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_5f7edefc9d8bd2_11136206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (!isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_COLUMN_MODULE']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_TABLET']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_SMALLDEVICE']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_EXTRASMALLDEVICE']->value) || !isset($_smarty_tpl->tpl_vars['LISTING_PRODUCT_MOBILE']->value)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3918812375f7edefc9ce033_73855799', "setting");
?>

<?php }?>

<div id="js-product-list-top" class="products-selection">
  <div class="row">
    <div class="col-lg-6 col-md-3 hidden-sm-down total-products">     
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1358012215f7edefc9cf3b3_18763669', 'leo_gird_list');
?>

      <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
        <p class="products-counter hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
    <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
        <p class="products-counter hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
    <div class="col-lg-6 col-md-9">
      <div class="row sort-by-row">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4143425785f7edefc9d56d2_89151719', 'sort_by');
?>


        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
          <div class="col-sm-3 col-xs-4 col-sp-12 hidden-md-up filter-button">
            <button id="search_filter_toggler" class="btn btn-outline">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          </div>
        <?php }?>
      </div>
    </div>
    <div class="col-sm-12 hidden-lg-up text-xs-center showing">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php }
/* {block "setting"} */
class Block_3918812375f7edefc9ce033_73855799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'setting' => 
  array (
    0 => 'Block_3918812375f7edefc9ce033_73855799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:layouts/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block "setting"} */
/* {block 'leo_gird_list'} */
class Block_1358012215f7edefc9cf3b3_18763669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leo_gird_list' => 
  array (
    0 => 'Block_1358012215f7edefc9cf3b3_18763669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="display">
          <div id="grid" class=" leo_grid <?php if (isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value) && $_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value == 'grid') {?>selected<?php }?>"><a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grid','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><i class="fa fa-th" aria-hidden="true"></i></a></div>
          <div id="list" class="leo_list <?php if (isset($_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value) && $_smarty_tpl->tpl_vars['LISTING_GRID_MODE']->value == 'list') {?>selected<?php }?>"><a rel="nofollow" href="#" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"><i class="fa fa-list-ul" aria-hidden="true"></i></a></div>
        </div>
      <?php
}
}
/* {/block 'leo_gird_list'} */
/* {block 'sort_by'} */
class Block_4143425785f7edefc9d56d2_89151719 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_4143425785f7edefc9d56d2_89151719',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
        <?php
}
}
/* {/block 'sort_by'} */
}
