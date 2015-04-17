<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_nav.php'); $this->register_function("qishi_nav", "tpl_function_qishi_nav",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_hotword.php'); $this->register_function("qishi_hotword", "tpl_function_qishi_hotword",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:51 ?D1ú±ê×?ê±?? */ ?>
<div class="user_top_nav" >
	<div class="main">
	    <div class="ltit"><span id="top_loginform"></span></div>	
	    <div class="rlink link_lan">
	    	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("top-nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	    </div>	
	    <div class="clear"></div>
    </div>
</div>
<div class="user_top_logo">
	  <div class="logobox">
		<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
"><img src="<?php echo $this->_vars['QISHI']['upfiles_dir'];  echo $this->_vars['QISHI']['web_logo']; ?>
" alt="" border="0" align="absmiddle" /></a>
	  </div>
      <div class="sobox">	  
  		<div class="keybox">
  		  <div class="lbox"><input name="key" value="请输入关键字..." style="color: #CCCCCC" type="text" id="index-search-key" class="keyinput" /></div>
  		  <div class="rbox"><input name="" id="index-search-button" type="button"  class="but"/></div>
		  <div class="clear"></div>
	      <div class="selectbox" id="usertopselectbox">
				<div class="seltxt" id="seltxt">职位</div>
				<div class="selmenu" id="selmenu">简历</div>
				<input name="topsotype" id="topsotype" type="hidden" value="1" />
	      </div>
	      <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.autocomplete.js" type="text/javascript"></script>
	      <script language="javascript" type="text/javascript">
			 $(document).ready(function()
			{
				  var a = $('#index-search-key').autocomplete({ 
					serviceUrl:'<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_common.php?act=hotword',
					minChars:1, 
					maxHeight:400,
					width:360,
					zIndex: 9999,
					deferRequestBy: 0 
				  });
				  $("#index-search-button").click(function()
					{
						index_search_location();
					});
					function index_search_location()
					{
						$("body").append('<div id="pageloadingbox">页面加载中....</div><div id="pageloadingbg"></div>');
						$("#pageloadingbg").css("opacity", 0.5);

						 var sotype=$("#topsotype").val();
					 	if(sotype==1){
					 		var sotype_code = "QS_jobslist";
					 	}else{
					 		var sotype_code = "QS_resumelist";
					 	}
					 	var patrn=/^(请输入关键字)/i; 
						var key=$("#index-search-key").val();
						if (patrn.exec(key))
						{
						$("#index-search-key").val('');
						key='';
						}
						$.get("<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_search_location.php", {"act":sotype_code,"key":key},
							function (data,textStatus)
							 {
								 window.location.href=data;
							 }
						);
					}
					$("#index-search-key").focus(function()
					{
					 var patrn=/^(请输入关键字)/i; 
					 var key=$(this).val();
						if (patrn.exec(key))
						{
						$(this).css('color','').val('');
						} 
						$('input[id="index-search-key"]').keydown(function(e)
						{
						if(e.keyCode==13){
					   index_search_location()
						}
						});
					});
			
			});
			</script>
  		</div>		
        <div class="hotkey link_bk"><strong>热门关键字：</strong>
        	<?php echo tpl_function_qishi_hotword(array('set' => "显示数目:8,列表名:list"), $this);?>
			<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
			<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,key:", 'cat', 'plugin', 1, $this->_vars['li']['w_word_code']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['li']['w_word']; ?>
</a>
			<?php endforeach; endif; ?>
		</div>
      </div>
	  <div class="clear"></div>
</div>
<div class="nav">
	<?php echo tpl_function_qishi_nav(array('set' => "调用名称:QS_top,列表名:list"), $this);?>
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
        <div class="li"><a href="<?php echo $this->_vars['list']['url']; ?>
" target="<?php echo $this->_vars['list']['target']; ?>
" <?php if ($this->_vars['list']['tag'] == $this->_vars['page_select'] && $this->_vars['list']['tag'] != ""): ?>class="select"<?php endif; ?>><?php echo $this->_vars['list']['title']; ?>
</a></div>
    <?php endforeach; endif; ?>
  <div class="clear"></div>
</div>