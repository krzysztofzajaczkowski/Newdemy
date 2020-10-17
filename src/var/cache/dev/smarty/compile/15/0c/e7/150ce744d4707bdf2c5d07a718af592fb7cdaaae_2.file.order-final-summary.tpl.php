<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:32:30
  from '/var/www/html/themes/ap_office/templates/checkout/_partials/order-final-summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2aaeecba58_44373108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '150ce744d4707bdf2c5d07a718af592fb7cdaaae' => 
    array (
      0 => '/var/www/html/themes/ap_office/templates/checkout/_partials/order-final-summary.tpl',
      1 => 1602938948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-final-summary-table.tpl' => 1,
  ),
),false)) {
function content_5f8b2aaeecba58_44373108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="order-summary-content" class="page-content page-order-confirmation">
  <div class="row">
    <div class="col-md-12">
      <h4 class="h4 black"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please check your order before payment','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="h4">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        <span class="step-edit step-to-addresses js-edit-addresses"><i class="material-icons edit">&#xE254;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card noshadow">
        <div class="card-block">
          <h4 class="h5 black addresshead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Delivery Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
          <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_delivery']]['formatted'];?>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card noshadow">
        <div class="card-block">
          <h4 class="h5 black addresshead"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your Invoice Address','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
          <?php echo $_smarty_tpl->tpl_vars['customer']->value['addresses'][$_smarty_tpl->tpl_vars['cart']->value['id_address_invoice']]['formatted'];?>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="h4">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping Method','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

        <span class="step-edit step-to-delivery js-edit-delivery"><i class="material-icons edit">&#xE254;</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </h4>

      <div class="col-md-12 summary-selected-carrier">
        <div class="row">
          <div class="col-md-2 col-sm-2 col-xs-2 col-sp-12">
            <div class="logo-container">
              <?php if ($_smarty_tpl->tpl_vars['selected_delivery_option']->value['logo']) {?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
              <?php } else { ?>
                &nbsp;
              <?php }?>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 col-sp-12">
            <span class="carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-4 col-sp-12">
            <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-3 col-sp-12">
            <span class="carrier-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_delivery_option']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20901513285f8b2aaeec7701_10615656', 'order_confirmation_table');
?>

  </div>
</section>
<?php }
/* {block 'order_confirmation_table'} */
class Block_20901513285f8b2aaeec7701_10615656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_confirmation_table' => 
  array (
    0 => 'Block_20901513285f8b2aaeec7701_10615656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-final-summary-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['cart']->value['products'],'products_count'=>$_smarty_tpl->tpl_vars['cart']->value['products_count'],'subtotals'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['cart']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['cart']->value['labels'],'add_product_link'=>true), 0, false);
?>
    <?php
}
}
/* {/block 'order_confirmation_table'} */
}
