<?php
/* Smarty version 3.1.33, created on 2020-10-17 19:32:57
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8b2ac98d1325_39093156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1602938948,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5f8b2ac98d1325_39093156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '12809894375f8b2ac98c3be9_35183622';
?>
<!-- begin /var/www/html/themes/ap_office/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products clearfix block">
  <h2 class="h2 products-section-title text-uppercase title_block">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Popular Products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </h2>
  <div class="block_content">
    <div class="products">
      <div class="owl-row">
        <div id="featured-products" class="owl-carousel owl-theme owl-loading">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'mypLoop', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>
            <div class="item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17895745945f8b2ac98cb0e8_11416466', 'product_miniature');
?>

            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php echo '<script'; ?>
 type="text/javascript">

  products_list_functions.push(
    function(){
      if($('#featured-products').parents('.tab-pane').length)
      {   
          if(!$('#featured-products').parents('.tab-pane').hasClass('active'))
          {
              var width_owl_active_tab = $('#featured-products').parents('.tab-pane').siblings('.active').find('.owl-carousel').width();    
              $('#featured-products').width(width_owl_active_tab);
          }
      }
      $('#featured-products').owlCarousel({
        <?php if (isset($_smarty_tpl->tpl_vars['IS_RTL']->value) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>
          direction:'rtl',
        <?php } else { ?>
          direction:'ltr',
        <?php }?>
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1200, 4],
        itemsDesktopSmall : [992, 3],
        itemsTablet : [768, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,         // true : show only 1 item
        itemsScaleUp : false,
        slideSpeed : 200,  //  change speed when drag and drop a item
        paginationSpeed :800, // change speed when go next page

        autoPlay : false,   // time to show each item
        stopOnHover : false,
        navigation : true,
        navigationText : ["&lsaquo;", "&rsaquo;"],

        scrollPerPage :true,
        responsive :true,
        
        pagination : false,
        paginationNumbers : false,
        
        addClassActive : true,
        
        mouseDrag : true,
        touchDrag : true,

        addClassActive :    true,
        afterInit: OwlLoaded,
        afterAction : SetOwlCarouselFirstLast,

      });
    }
  ); 
  function OwlLoaded(el){
    el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
    if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
        el.width('100%');
  };
<?php echo '</script'; ?>
><!-- end /var/www/html/themes/ap_office/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
/* {block 'product_miniature'} */
class Block_17895745945f8b2ac98cb0e8_11416466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_17895745945f8b2ac98cb0e8_11416466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if (isset($_smarty_tpl->tpl_vars['productProfileDefault']->value) && $_smarty_tpl->tpl_vars['productProfileDefault']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProfileProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'profile'=>$_smarty_tpl->tpl_vars['productProfileDefault']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php }?>
              <?php
}
}
/* {/block 'product_miniature'} */
}
