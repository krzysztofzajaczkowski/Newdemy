<?php
/* Smarty version 3.1.33, created on 2020-10-10 01:47:51
  from '/var/www/html/modules/appagebuilder/views/templates/hook/ApTwitter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f80f6a7407070_24006043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ebf81d3eef2e59ad9831724687d1ff5b21e207' => 
    array (
      0 => '/var/www/html/modules/appagebuilder/views/templates/hook/ApTwitter.tpl',
      1 => 1602197270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f80f6a7407070_24006043 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- @file modules\appagebuilder\views\templates\hook\ApTwitter -->
<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id']) && $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id']) {
if (!isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?><div class="block widget-twitter <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
	
    <div class="block_content">
		<div id="ap-twitter<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="apollo-twitter">
            <a class="twitter-timeline" href="https://twitter.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['username'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-width="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['width']), ENT_QUOTES, 'UTF-8');?>
"
                data-height="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['height']), ENT_QUOTES, 'UTF-8');?>
"
            	data-dnt="true"
            	data-widget-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['link_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['link_color']) {?>data-link-color="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['link_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['border_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['border_color']) {?>data-border-color="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['border_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['count']) && $_smarty_tpl->tpl_vars['formAtts']->value['count']) {?>data-tweet-limit="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['count']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	data-show-replies="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_replies']) && $_smarty_tpl->tpl_vars['formAtts']->value['show_replies']) {?>true<?php } else { ?>false<?php }?>"
            	data-chrome="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['transparent']) && !$_smarty_tpl->tpl_vars['formAtts']->value['transparent']) {?> transparent<?php }?> 
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_scrollbar']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_scrollbar']) {?> noscrollbar<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_border']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_border']) {?> noborders<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_header']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_header']) {?> noheader<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_footer']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_footer']) {?> nofooter<?php }?>"
        	><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tweets by','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['username'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php } elseif (isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type']) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>    
<div class="block widget-twitter block-toggler <?php echo htmlspecialchars(isset($_smarty_tpl->tpl_vars['formAtts']->value['class']) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>">
	<?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['title']) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
    <div class="title clearfix" data-target="#ap-twitter<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
        <h4 class="title_block"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">&#xE313;</i>
            <i class="material-icons remove">&#xE316;</i>
          </span>
        </span>
    </div>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
    <?php }?>
	
    <div class="block_content">
		<div id="ap-twitter<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="apollo-twitter collapse">
            <a class="twitter-timeline" href="https://twitter.com/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['username'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-width="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['width']), ENT_QUOTES, 'UTF-8');?>
"
                data-height="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['height']), ENT_QUOTES, 'UTF-8');?>
"
            	data-dnt="true"
            	data-widget-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['link_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['link_color']) {?>data-link-color="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['link_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['border_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['border_color']) {?>data-border-color="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['border_color'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['count']) && $_smarty_tpl->tpl_vars['formAtts']->value['count']) {?>data-tweet-limit="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['formAtts']->value['count']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            	data-show-replies="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_replies']) && $_smarty_tpl->tpl_vars['formAtts']->value['show_replies']) {?>true<?php } else { ?>false<?php }?>"
            	data-chrome="<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['transparent']) && !$_smarty_tpl->tpl_vars['formAtts']->value['transparent']) {?> transparent<?php }?> 
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_scrollbar']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_scrollbar']) {?> noscrollbar<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_border']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_border']) {?> noborders<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_header']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_header']) {?> noheader<?php }?>
            				<?php if (isset($_smarty_tpl->tpl_vars['formAtts']->value['show_footer']) && !$_smarty_tpl->tpl_vars['formAtts']->value['show_footer']) {?> nofooter<?php }?>"
        	><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tweets by','mod'=>'appagebuilder'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['username'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
</div>
<?php }
echo '<script'; ?>
>
	ap_list_functions.push(function(){
        // Check avoid include duplicate library Facebook SDK
        if($("#twitter-wjs").length == 0) {
            window.twttr = (function (d, s, id) {
                var t, js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id; js.src= "https://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js, fjs);
                return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
            }(document, "script", "twitter-wjs"));
        }
    
		var leo_flag_twitter_set_css = 1;
		$('#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
').bind("DOMSubtreeModified", function() {
			leo_flag_twitter_set_css++;
			
			var isRun = 10;
			
                                                var is_safari = navigator.userAgent.indexOf("Safari") > -1;
                        			if(window.chrome || is_safari){
				isRun = 5;
			}
            
			if(leo_flag_twitter_set_css == isRun)
			{
				// Run only one time
				
				$('#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
 iframe').ready(function() {

					<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['border_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['border_color']) && isset($_smarty_tpl->tpl_vars['formAtts']->value['show_border']) && $_smarty_tpl->tpl_vars['formAtts']->value['show_border']) {?>
						// SHOW BORDER COLOR
						$('#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
 iframe').css('border', '1px solid <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['border_color'], ENT_QUOTES, 'UTF-8');?>
');
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['name_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['name_color'])) {?>
						$('#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
 iframe').contents().find('.TweetAuthor-name.Identity-name.customisable-highlight').css('color', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['name_color'], ENT_QUOTES, 'UTF-8');?>
');
					<?php }?>
					<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['mail_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['mail_color'])) {?>
						$('#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
 iframe').contents().find('.TweetAuthor-screenName.Identity-screenName').css('color', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['mail_color'], ENT_QUOTES, 'UTF-8');?>
');
					<?php }?>

					var head = jQuery("#ap-twitter<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['twidget_id'], ENT_QUOTES, 'UTF-8');?>
 iframe").contents().find("head");

					var css = '<style type="text/css">\n\
					<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['text_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['text_color'])) {?>\n\
						body { color : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['text_color'], ENT_QUOTES, 'UTF-8');?>
 ; }\n\
					<?php }?>\n\
					<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['link_color']) && $_smarty_tpl->tpl_vars['formAtts']->value['link_color'])) {?>\n\
						.timeline-Tweet-text a { color : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['formAtts']->value['link_color'], ENT_QUOTES, 'UTF-8');?>
 ; }\n\
					<?php }?>\n\
							</style>';
					$(head).append(css);
				});
			
			}
		});	
	});
<?php echo '</script'; ?>
>
<?php }
}
}
