<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_nav.php'); $this->register_function("qishi_nav", "tpl_function_qishi_nav",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_ad.php'); $this->register_function("qishi_ad", "tpl_function_qishi_ad",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-13 13:36 ?D1ú±ê×?ê±?? */ ?>
<script>
	$(function(){
		// 点击事件
		$(".local_station").live("click",function(){
			if($(".sub_station").attr('data') == "hide") {
				$(this).blur();
				$(this).parent().parent().before("<div class=\"menu_bg_layer\"></div>");
				$(".menu_bg_layer").height($(document).height());
				$(".menu_bg_layer").css({ width: $(document).width(), position: "absolute",left:"0", top:"0","z-index":"88","background-color":"#000000"});
				$(".menu_bg_layer").css("opacity",0);
				$(".sub_station").show();
				$(".sub_station").attr('data',"show");
				$(".menu_bg_layer").click(function() {
					$(".sub_station").hide();
					$(".sub_station").attr('data',"hide");
					$(".menu_bg_layer").remove();
				});
			} else {
				$(".sub_station").hide();
				$(".sub_station").attr('data',"hide");
			}
		});
		//单数行变色
		$(".sub_st_content li:odd").css("background-color", "#F5F5F5");
		$(".local_station>p").hover(function(){
			$(this).addClass("hover");
		},function(){
			$(this).removeClass("hover");
		})
	});
</script>
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
" alt="<?php echo $this->_vars['QISHI']['site_name']; ?>
" border="0" align="absmiddle" /></a>
	  </div>
	  <?php echo tpl_function_qishi_ad(array('set' => "显示数目:1,调用名称:QS_alltopimg,列表名:ad"), $this);?>
	  <?php if ($this->_vars['ad']): ?>
	  <?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
	  <div class="top_ad">
	  	<a href="<?php echo $this->_vars['list']['img_url']; ?>
"><img src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
" width="468" height="60" border="0" /></a>
	  </div>
	  <?php endforeach; endif; ?>
	  <?php endif; ?>
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