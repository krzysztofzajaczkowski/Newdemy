<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:52
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6a862ceb8_17799531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1602197331,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6a862ceb8_17799531 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/ap_office/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="block_newsletter block float-lg-left">
  <h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for email update on product offers and discounts','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
  <div class="block_content">
    <div class="msg-block">
        <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
          <p class="hidden-xl-down"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
          <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

          </p>
        <?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

      <?php }?>
    </div>

    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="form-group">          
          <!-- <div class="input-wrapper"> -->
              <input name="email" type="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
">
          <!-- </div> -->
          <button class="btn btn-outline" name="submitNewsletter" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sign up','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
            <i class="material-icons">&#xE8E4;</i>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sign up','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
          </button>
          <input type="hidden" name="action" value="0">
          <div class="clearfix"></div>
        </div>
    </form>
  </div>
</div>
<!-- end /var/www/html/themes/ap_office/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
