<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:51 ?D1��������?����?? */ ?>
<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
mobile/" class="mphone">�ֻ�Ƶ��</a>
<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
">��վ��ҳ</a>
<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/shortcut.php">���浽����</a>
<script type="text/javascript">
//��������¼
$.get("<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$("#top_loginform").html(data);
}
);
//
var headHeight=$(".header").height()+10;
    var nav=$(".nav");
    $(window).scroll(function(){
        if($(this).scrollTop()>headHeight){
            nav.addClass("navFix");
            }
        else{
            nav.removeClass("navFix");
            }
});
//
$("#t_so").hover(
function(){
$("#t_so").css("position","relative");
$("#op_search").show();
},
function(){
$("#op_search").hide();
$("#t_so").css("position","");	
}
);
$(".top-search-button").click(function()
{
	$("body").append('<div id="pageloadingbox">ҳ�������....</div><div id="pageloadingbg"></div>');
	$("#pageloadingbg").css("opacity", 0.5);
	$.get("<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_search_location.php", {"act":$(this).attr('id'),"key":$("#top-search-key").val()},
			function (data,textStatus)
			 {
				 window.location.href=data;
			 }
		);
});
</script>