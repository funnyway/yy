<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 11:23 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/jobs.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/cache_classify.js" type='text/javascript' charset="utf-8"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.user.selectlayer.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.hoverDelay.js" type='text/javascript'></script>
<script type="text/javascript">
$(document).ready(function()
{
allaround('<?php echo $this->_vars['QISHI']['site_dir']; ?>
');
// 显示地区
 		$("#jobsCity").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCate").show();
		        var dx = $("#divCityCate").offset().left; // 获取弹出框的x坐标
		        var dwidth = $("#divCityCate").outerWidth(true); // 获取弹出框的宽度
		        var lastx = dx + dwidth; // 加上弹出框的宽度获取弹出框最右边的x坐标
	 			$("#divCityCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // 获取当前li的x坐标
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // 获取三级弹出框的宽度
			 					if((lastx - sx) < swidth) { // 判断li与弹出框最右边的距离是否大于三级弹出框的宽度
			 						tharsub.css("left",-265); // 如果小于就改变三级弹出框x方向的位置
			 					}
			 					tharsub.show();
			 				} else {
			 					that.find('a').css("color","#f77d40");
			 				}
					    },
					    outEvent: function(){
			                if(that.find('.subcate').length > 0) {
				 				that.removeClass('selected');
				 				that.find('.subcate').hide();
			 				} else {
			 					that.find('a').css("color","#0180cf");
			 				}    
			            }
					});
	 			});
		    },
		    outEvent: function(){
                $("#divCityCate").hide(); 
            }
		});
// 显示籍贯 
 		$("#jobsCityH").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCateH").show();
		        var dx = $("#divCityCateH").offset().left; // 获取弹出框的x坐标
		        var dwidth = $("#divCityCateH").outerWidth(true); // 获取弹出框的宽度
		        var lastx = dx + dwidth; // 加上弹出框的宽度获取弹出框最右边的x坐标
	 			$("#divCityCateH li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // 获取当前li的x坐标
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // 获取三级弹出框的宽度
			 					if((lastx - sx) < swidth) { // 判断li与弹出框最右边的距离是否大于三级弹出框的宽度
			 						tharsub.css("left",-265); // 如果小于就改变三级弹出框x方向的位置
			 					}
			 					tharsub.show();
			 				} else {
			 					that.find('a').css("color","#f77d40");
			 				}
					    },
					    outEvent: function(){
			                if(that.find('.subcate').length > 0) {
				 				that.removeClass('selected');
				 				that.find('.subcate').hide();
			 				} else {
			 					that.find('a').css("color","#0180cf");
			 				}    
			            }
					});
	 			});
		    },
		    outEvent: function(){
                $("#divCityCateH").hide(); 
            }
		});
//填写基本信息，打开选填内容
$("#displaymore").click(function(){
		var tb=$("#displaymorediv");
		var tb_display=tb.css("display");
		if (tb_display=="block")
		{
		$(this).css("background","url(<?php echo $this->_vars['QISHI']['site_template']; ?>
images/13.gif) no-repeat 108px -122px");
		tb.slideUp('fast');
		}
		else
		{
		$(this).css("background","url(<?php echo $this->_vars['QISHI']['site_template']; ?>
images/new_choose.gif) no-repeat 110px -10px");
		tb.slideDown('fast');
		}
});
//发送手机验证码按钮效果
$("#mobilesend").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
//发送手机验证码
//发送邮箱验证码按钮效果
$("#emailsend").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
//发送邮箱验证码

//填写基本信息,打开选填项按钮效果
$("#displaymore").hover(
  function () {
    $(this).css("background-color","#F6F6F6");
  },
  function () {
    $(this).css("background-color","#FFFFFF");
  }
);
//工作性质单选
var nature_obj = $("#nature_radio .input_radio").first();
$("#nature").val(nature_obj.attr("id"));
$("#nature_cn").val(nature_obj.text());
$("#nature_radio .input_radio").click(function(){
		$("#nature").val($(this).attr('id'));
		$("#nature_cn").val($(this).text());
		$("#nature_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});
//简历公开设置
 $("#publicitydiv").hover(
  function () {
     $("#publicitydiv .selbox").slideDown('fast');
  },
  function () {
    $("#publicitydiv .selbox").slideUp('fast');
  }
);
//简历公开设置-菜单效果
$("#publicitydiv .selbox div").hover(
  function () {
     $(this).css("background-color","#F6F6F6");
  },
  function () {
     $(this).css("background-color","#FFFFFF");
  }
);
//简历公开设置-点击执行填充表单
$("#publicitydiv .selbox div").click(function(){
		$("#display_name").val($(this).attr('id'));
		$("#display_name_cn").text($(this).text());
		$("#publicitydiv .selbox").slideUp('fast');
});

//性别单选
$("#sex_radio .input_radio").click(function(){
		$("#sex").val($(this).attr('id'));
		$("#sex_cn").val($(this).text());
		$("#sex_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});
//婚姻状况单选
$("#marriage_radio .input_radio").click(function(){
		$("#marriage").val($(this).attr('id'));
		$("#marriage_cn").val($(this).text());
		$("#marriage_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});
//下拉菜单
menuDown("#education_menu","#education","#education_cn","#menu1","218px");
menuDown("#experience_menu","#experience","#experience_cn","#menu2","218px");
function menuDown(menuId,input,input_cn,menuList,width){
	$(menuId).click(function(){
		$(menuList).css("width",width);
		$(menuList).slideDown('fast');
		//生成背景
		$(menuId).parent("div").before("<div class=\"menu_bg_layer\"></div>");
		$(".menu_bg_layer").height($(document).height());
		$(".menu_bg_layer").css({ width: $(document).width(), position: "absolute", left: "0", top: "0" , "z-index": "0", "background-color": "#ffffff"});
		$(".menu_bg_layer").css("opacity","0");
		$(".menu_bg_layer").click(function(){
			$(".menu_bg_layer").remove();
			$(menuList).slideUp("fast");
			$(menuId).parent("div").css("position","");
		});
	});

	$(menuList+" li").click(function(){
		var id = $(this).attr("id");
		var title = $(this).attr("title");
		$(input).val(id);
		$(input_cn).val(title);
		$(menuId).html(title);
		$(menuList).slideUp('fast');
		$(".menu_bg_layer").remove();
	});
}
showyearbox(".date_input","#birthday");
function showyearbox(divname,inputname)
{
	$(divname).click(function(){
		var inputdiv=$(this);
		$(inputdiv).parent("div").before("<div class=\"menu_bg_layer\"></div>");
		$(".menu_bg_layer").height($(document).height());
		$(".menu_bg_layer").css({ width: $(document).width(), position: "absolute", left: "0", top: "0" , "z-index": "0"});
		$(inputdiv).parent("div").css("position","relative");
		
		var myDate = new Date();
		var y=myDate.getFullYear();
			 y=y-18;
		var ymin=y-35;
		htm="<div class=\"showyearbox yearlist\">";		
		htm+="<ul>";
		for (i=y;i>=ymin;i--)
		{
		htm+="<li title=\""+i+"\">"+i+"年</li>";
		}
		htm+="<div class=\"clear\"></div>";
		htm+="</ul>";
		htm+="</div>";
		$(inputdiv).blur();
		if ($(inputdiv).parent("div").find(".showyearbox").html())
		{
			$(inputdiv).parent("div").children(".showyearbox.yearlist").slideToggle("fast");
		}
		else
		{
			$(inputdiv).parent("div").append(htm);
			$(inputdiv).parent("div").children(".showyearbox.yearlist").slideToggle("fast");
		}
		//
		$(inputdiv).parent("div").children(".yearlist").find("li").unbind("click").click(function()
		{
			$(inputname).val($(this).attr("title"));
			$(inputdiv).html($(this).attr("title"));
			$(inputdiv).parent("div").children(".yearlist").hide();
			$(".menu_bg_layer").remove();
		});	
		//
		$(".showyearbox>ul>li").hover(
		function()
		{
		$(this).css("background-color","#DAECF5");
		$(this).css("color","#ff0000");
		},
		function()
		{
		$(this).css("background-color","");
		$(this).css("color","");
		}
		);
		//
		$(".menu_bg_layer").click(function(){
					$(".menu_bg_layer").hide();
					$(inputdiv).parent("div").css("position","");
					$(inputdiv).parent("div").find(".showyearbox").hide();
					
		});
	});
}
/*
		//发送手机验证
		var mobileinterval; //调度器对象。
		var mobileSendTime;
		$(function () {
			var mobiletime = 1000;
		    function mobilerun() {
		        mobileinterval = setInterval(mobilefun, mobiletime);
		    }
			$("#mobilesend").click(function(){
				var tel = /^(13|15|14|18)\d{9}$/; 
				if($("#mobile").val()=='')
				{
				alert_dialog("fail:请填写手机号","","","","");
				}
				else if(!tel.test($("#mobile").val()))
				{
				alert_dialog("fail:手机号错误","","","","");
				}
				else
				{
					 $("#mobilesend").html("正在发送...");
					 var mobile = $("#mobile").val();
					 $("#mobile").attr("disabled","disabled");
					 $("#Form1").append("<input type='hidden' name='mobile' id='mobile' value='"+mobile+"'>");
					 $.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_mobile.php", {"mobile": $("#mobile").val(),"send_key": "<?php echo $this->_vars['send_mobile_key']; ?>
","time":new Date().getTime(),"act":"send_code"},
			 	function (data,textStatus)
			 	 {
					if (data=="success")
					{	
						mobileSendTime = 60; // 设置倒计时开始时间
						$("#remainTime").html(mobileSendTime);
						mobilerun();
						$("#mobilesend").hide();
						$("#mobilesendsucceed").show();
						$("#displaymobilesend").show();
						$("#mobile_verifycode").attr("disabled","");
					}
					else
					{
						$("#mobilesend").attr("disabled","");
						$("#mobilesend").html("手机认证");
						$("#mobile").attr("disabled","");
						$("#displaymobilesend").hide();
						$("#mobilesendsucceed").hide();
						alert_dialog("fail:"+data,"","","","");
					}
			 	 }
				 ,"text"
				 )				 
				}
			});
		});
		function mobilefun() {
			if (mobileSendTime > 0) {
				mobileSendTime --;
				$("#remainTime").html(mobileSendTime);
			} else {
				$("#mobilesend").attr("disabled","");
				$("#mobile").attr("disabled","");
				$("#mobilesend").html("手机认证");
				$("#mobilesend").show();
				$("#mobilesendsucceed").hide();
				$("#displaymobilesend").hide();
				clearInterval(mobileinterval);
			};
		}
		*/
		//发送手机验证完毕

		//发送邮箱验证
		var emailinterval; //调度器对象。
		var emailSendTime;
		$(function () {
			var emailtime = 1000;
		    function emailrun() {
		        emailinterval = setInterval(emailfun, emailtime);
		    }
			$("#emailsend").click(function() {	
				var str =/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]w+)*$/; 
				if($("#email").val()=='')
				{
				alert_dialog("fail:请填写邮箱","","","","");
				}
				else if(!str.test($("#email").val()))
				{
				alert_dialog("fail:邮箱填写错误","","","","");
				}
				else
				{
					 $("#emailsend").html("正在发送...");
					 var email = $("#email").val();
					 $("#email").attr("disabled","disabled");
					 $("#Form1").append("<input type='hidden' name='email' id='email' value='"+email+"'>");
					 $.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_email.php", {"email": $("#email").val(),"send_key": "<?php echo $this->_vars['send_email_key']; ?>
","time":new Date().getTime(),"act":"send_code"},
			 	function (data,textStatus)
			 	 {
					if (data=="success")
					{	
						emailSendTime = 60; // 设置倒计时开始时间
						$("#remainTimeEmail").html(emailSendTime);
						emailrun();
						$("#emailsend").hide();
						$("#emailsendsucceed").show();
						$("#displayemailsend").show();
						$("#email_verifycode").attr("disabled","");
					}
					else
					{
						$("#emailsend").attr("disabled","");
						$("#emailsend").html("邮箱认证");
						$("#email").attr("disabled","");
						$("#displayemailsend").hide();
						$("#emailsendsucceed").hide();
						alert_dialog("fail:"+data,"","","","");
					}
			 	 }
				 ,"text"
				 )				 
				}
			});
		});
		function emailfun() {
			if (emailSendTime > 0) {
				emailSendTime --;
				$("#remainTimeEmail").html(emailSendTime);
			} else {
				$("#emailsend").attr("disabled","");
				$("#email").attr("disabled","");
				$("#emailsend").html("邮箱认证");
				$("#emailsend").show();
				$("#emailsendsucceed").hide();
				$("#displayemailsend").hide();
				clearInterval(emailinterval);
			};
		}
		//发送邮箱验证完毕
 $("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   realname: "required",
   birthday: "required",
   residence: "required",
   education: "required",
   experience: "required",
   mobile: "required",
   shenfenzhenghao: "required",
   foreign_language_level: "required",
   nation: "required",
   politics: "required",
   school: "required",
   major: "required",
   target_job: "required",
   computer_level: "required",
   educations: "required",
  // foreign_language_level："required",
   email: {
	   required:true,
	   email:true
	}    
	},
    messages: {
    realname: {
    required: jQuery.format("请输入真实姓名")
   },
   shenfenzhenghao: {
    required: jQuery.format("请输入身份证号")
   },
   nation: {
    required: jQuery.format("请输入民族")
   },
   politics: {
    required: jQuery.format("请输入政治面貌")
   },
   school: {
    required: jQuery.format("请输入毕业院校")
   },
   major: {
    required: jQuery.format("请输入专业")
   },
   target_job: {
    required: jQuery.format("请输入请输入求职岗位")
   },
   computer_level: {
    required: jQuery.format("请输入计算机水平")
   },
   foreign_language_level: {
    required: jQuery.format("请输入外语水平")
   },
   educations: {
    required: jQuery.format("请输入教育背景")
   },
   birthday: {
    required: jQuery.format("请选择出生年份")
   },
   residence: {
    required: jQuery.format("请选择现居住地")
   },
   education: {
    required: jQuery.format("请选择你的学历")
   },
   experience: {
    required: jQuery.format("请选择工作经验")
   },
   mobile: {
    required: jQuery.format("请填写手机号")
   },
   email: {
    required: jQuery.format("请填写电子邮箱"),
	email: jQuery.format("请正确填写电子邮箱")
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 基本资料</div>

<div class="usermain">
  <div class="leftmenu link_bk">
   <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>	
  </div>
<div class="rightmain">
	<div class="bbox1">
	  <div class="addresume link_bk">
 	    <div class="topnav" style="height:50px">
				 	<div class="titleH1">
					  <div class="h1-title">大赛报名</div>
					</div>
	  	</div>
		<form id="Form1" name="Form1" method="post" action="?act=baoming_save" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" style="margin-top:15px;">
		 <tr>
			<td width="125" align="right"><span class="nec">姓名</span>：</td>
			<td width="230"><input name="realname" type="text" class="input_text_200" id="realname" maxlength="6"   value="<?php echo $this->_vars['userprofile']['realname']; ?>
" /> </td>
		  </tr>
		  <tr>
		 <td align="right"><span class="nec">性别</span>：</td>
			<td>
			<div id="sex_radio">
			<input name="sex" id="sex" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['sex'], 'default', 'plugin', 1, 1); ?>
" />
			<input name="sex_cn" id="sex_cn" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['sex_cn'], 'default', 'plugin', 1, '男'); ?>
" />
			  <div class="input_radio<?php if ($this->_vars['userprofile']['sex'] == 1 || $this->_vars['userprofile']['sex'] == ''): ?> select<?php endif; ?>" id="1">男</div>
			  <div class="input_radio<?php if ($this->_vars['userprofile']['sex'] == 2): ?> select<?php endif; ?>" id="2">女</div>			  
			  <div class="clear"></div>
			  </div>
		    </td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td align="right"><span class="nec">出生年份</span>：</td>
			<td>
			<div>
			 <div class="input_text_200_bg date_input"><?php if ($this->_vars['userprofile']['birthday'] > 0):  echo $this->_vars['userprofile']['birthday'];  else: ?>请选择<?php endif; ?></div>
              <input name="birthday" id="birthday" type="hidden" value="<?php echo $this->_vars['userprofile']['birthday']; ?>
" />
            </div>
			</td>
			<td>&nbsp;</td>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">身份证号</span>：</td>
			<td width="230"><input name="shenfenzhenghao" type="text" class="input_text_200" id="shenfenzhenghao" maxlength="18"   value="<?php echo $this->_vars['userprofile']['shenfenzhenghao']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">民族</span>：</td>
			<td width="230"><input name="nation" type="text" class="input_text_200" id="nation" maxlength="10"   value="<?php echo $this->_vars['userprofile']['nation']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">政治面貌</span>：</td>
			<td width="230"><input name="politics" type="text" class="input_text_200" id="politics" maxlength="10"   value="<?php echo $this->_vars['userprofile']['politics']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">毕业院校</span>：</td>
			<td width="230"><input name="school" type="text" class="input_text_200" id="school" maxlength="15"   value="<?php echo $this->_vars['userprofile']['school']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">专业</span>：</td>
			<td width="230"><input name="major" type="text" class="input_text_200" id="major" maxlength="15"   value="<?php echo $this->_vars['userprofile']['major']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">求职岗位</span>：</td>
			<td width="230"><input name="target_job" type="text" class="input_text_200" id="target_job" maxlength="15"   value="<?php echo $this->_vars['userprofile']['target_job']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">联系电话</span>：</td>
			<td width="230"><input name="mobile" type="text" class="input_text_200" id="mobile" maxlength="15"   value="<?php echo $this->_vars['userprofile']['mobile']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">外语水平</span>：</td>
			<td width="230"><input name="foreign_language_level" type="text" class="input_text_200" id="foreign_language_level" maxlength="6"   value="<?php echo $this->_vars['userprofile']['foreign_language_level']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">计算机水平</span>：</td>
			<td width="230"><input name="computer_level" type="text" class="input_text_200" id="computer_level" maxlength="6"   value="<?php echo $this->_vars['userprofile']['computer_level']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  </tr>
			<tr>
			<td width="125" align="right"><span class="nec">教育背景</span>：</td>
			<td width="230"><input name="educations" type="text" class="input_text_500" id="educations" maxlength="200"   value="<?php echo $this->_vars['userprofile']['educations']; ?>
" />
			</td>
			
			<td>（注：请写明高中或中专及以后的受教育情况，并注明期间曾担任的职务）</td>
		  </tr>
		  </tr>
		<tr>
			<td width="125" align="right"><span class="nec">获奖情况</span>：</td>
			<td width="230"><input name="awards" type="text" class="input_text_500" id="realname" maxlength="200"   value="<?php echo $this->_vars['userprofile']['awards']; ?>
" /> </td>
			<td>（注：请写明曾在什么时间获得过什么奖项或奖励）</td>
		  </tr>
		  <tr>
			<td width="125" align="right"><span class="nec">社会实践</span>：</td>
			<td width="230"><input name="social_practice" type="text" class="input_text_500" id="realname" maxlength="200"   value="<?php echo $this->_vars['userprofile']['social_practice']; ?>
" /> </td>
			<td>（注：请写明什么时间在什么单位实习或实践）</td>
		  </tr>
		  <tr>
			<td width="125" align="right"><span class="nec">特困生填写</span>：</td>
			<td width="230"><input name="is_poor_student" type="text" class="input_text_500" id="realname" maxlength="200"   value="<?php echo $this->_vars['userprofile']['is_poor_student']; ?>
" /> </td>
			<td>（注：请写明是否为特困生）</td>
		  </tr>
		  <tr>
			<td width="125" align="right"><span class="nec">学校意见</span>：</td>
			<td width="230"><input name="school_opinion" type="text" class="input_text_500" id="realname" maxlength="200"   value="<?php echo $this->_vars['userprofile']['school_opinion']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  <tr class="jobmain">
			<td align="right"><span class="nec">现居住地</span>：</td>
			<td id="jobsCity" style="position:relative;">
				<div class="input_text_200_bg" id="cityText"><?php echo $this->_run_modifier($this->_vars['userprofile']['residence_cn'], 'default', 'plugin', 1, "请选择"); ?>
</div>
				<div style="display:none;left:1px;top:46px;" id="divCityCate" class="divJobCate">
		 			<table class="jobcatebox citycatebox"><tbody></tbody></table>
		 		</div>
                <input name="residence" id="residence" type="hidden" value="<?php echo $this->_vars['userprofile']['residence']; ?>
" />
                <input name="residence_cn" id="residence_cn" type="hidden" value="<?php echo $this->_vars['userprofile']['residence_cn']; ?>
" />
			</td>
			</td>
			<td>&nbsp;</td>
		  </tr>
		   <tr>
			<td align="right"><span class="nec">学历</span>：</td>
			<td>
				<div style="position:relateve;">
             	 	<div id="education_menu" class="input_text_200_bg"><?php if ($this->_vars['userprofile']['education'] > 0):  echo $this->_vars['userprofile']['education_cn'];  else: ?>请选择<?php endif; ?></div>	
             	 	<div class="menu" id="menu1">
	              		<ul>
	              			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_education,列表名:c_education"), $this);?>
	              			<?php if (count((array)$this->_vars['c_education'])): foreach ((array)$this->_vars['c_education'] as $this->_vars['list']): ?>
	              			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
	              			<?php endforeach; endif; ?>
	              		</ul>
	              	</div>
	            </div>				
             	 <input name="education" type="hidden" id="education" value="<?php echo $this->_vars['userprofile']['education']; ?>
" />
             	 <input name="education_cn" type="hidden" id="education_cn" value="<?php echo $this->_vars['userprofile']['education_cn']; ?>
" />
			</td>
			<td>&nbsp;</td>
		  </tr>
		   <tr>
			<td align="right"><span class="nec">工作经验</span>：</td>
			<td>
				<div style="position:relateve;">
             	 	<div id="experience_menu" class="input_text_200_bg"><?php if ($this->_vars['userprofile']['experience'] > 0):  echo $this->_vars['userprofile']['experience_cn'];  else: ?>请选择<?php endif; ?></div>	
             	 	<div class="menu" id="menu2">
	              		<ul>
	              			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_experience,列表名:c_experience"), $this);?>
	              			<?php if (count((array)$this->_vars['c_experience'])): foreach ((array)$this->_vars['c_experience'] as $this->_vars['list']): ?>
	              			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
	              			<?php endforeach; endif; ?>
	              		</ul>
	              	</div>
	            </div>				
             	 <input name="experience" type="hidden" id="experience" value="<?php echo $this->_vars['userprofile']['experience']; ?>
" />
             	 <input name="experience_cn" type="hidden" id="experience_cn" value="<?php echo $this->_vars['userprofile']['experience_cn']; ?>
" />
			</td>
			<td>&nbsp;</td>
		  </tr>
		<!--  <tr>
			<td align="right"><span class="nec">手机</span>：</td>
			<td>
				<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
				<?php echo $this->_vars['userprofile']['phone']; ?>

				<?php else: ?>
				<input name="mobile" id="mobile" type="text" class="input_text_200" value="<?php echo $this->_vars['userprofile']['phone']; ?>
" />
				<?php endif; ?>
			</td>
			<td>
			<?php if ($this->_vars['user']['mobile_audit'] != "1"): ?>
			<div class="mobilesend" id="mobilesend">手机认证</div><div class="mobilesend succeed" id="mobilesendsucceed">已成功发送验证码，<span id="remainTime">60</span>秒后可重新发送！</div>
			<?php endif; ?>
			</td>
		  </tr>
		  -->
	    </table>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" id="displaymobilesend" style="display:none" >
		  <tr>
			<td align="right" width="125"><span class="nec">手机验证码</span>：</td>
			<td width="230"><input name="mobile_verifycode" id="mobile_verifycode" type="text" class="input_text_200" value="" /></td>
			<td><div class="righttip">请填写您手机收到的验证码!</div></td>
		  </tr>
		  </table>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall">
		  <tr>
			<td width="125" align="right"><span class="nec">邮箱</span>：</td>
			<td width="230">
				<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
				<?php echo $this->_vars['userprofile']['email']; ?>

				<?php else: ?>
				<input name="email" id="email" type="text" class="input_text_200" value="<?php echo $this->_vars['userprofile']['email']; ?>
" />
				<?php endif; ?>
			</td>
			<td>
			<?php if ($this->_vars['user']['email_audit'] != "1"): ?>
			<div class="emailsend" id="emailsend">邮箱认证</div><div class="emailsend succeed" id="emailsendsucceed">已成功发送验证码，<span id="remainTime">60</span>秒后可重新发送！</div>
			<?php endif; ?>
			</td>
		  </tr>
		</table>
		 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" id="displayemailsend" style="display:none" >
		  <tr>
			<td align="right" width="125"><span class="nec">邮箱验证码</span>：</td>
			<td width="230"><input name="email_verifycode" id="email_verifycode" type="text" class="input_text_200" value="" /></td>
			<td><div class="righttip">请填写您邮箱收到的验证码!</div></td>
		  </tr>
		  </table>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall">
		  <tr>
			<td width="125" align="right">&nbsp;</td>
			<td width="230"><div class="displaymore" id="displaymore">展开选填信息</div></td>
			<td>&nbsp;</td>
		  </tr>
		</table>		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" id="displaymorediv" style="display:none">
		  <tr>
			<td width="125" align="right">身高：</td>
			<td width="220"><input name="height" type="text" class="input_text_200_bgsg" value="<?php echo $this->_vars['userprofile']['height']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  <tr class="jobmain">
			<td width="125" align="right">籍贯：</td>
			<td width="220" id="jobsCityH" style="position:relative;">
				<div class="input_text_200_bg" id="cityTextH"><?php echo $this->_run_modifier($this->_vars['userprofile']['householdaddress_cn'], 'default', 'plugin', 1, "请选择"); ?>
</div>
				<div style="display:none;left:1px;top:46px;" id="divCityCateH" class="divJobCate">
		 			<table class="jobcatebox citycatebox"><tbody></tbody></table>
		 		</div>
              <input name="householdaddress" id="householdaddress" type="hidden" value="<?php echo $this->_vars['userprofile']['householdaddress']; ?>
" />
              <input name="householdaddress_cn" id="householdaddress_cn" type="hidden" value="<?php echo $this->_vars['userprofile']['householdaddress_cn']; ?>
" />
			</td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td align="right">婚姻状况：</td>
			<td>
			<div id="marriage_radio">
			<input name="marriage" id="marriage" type="hidden" value="<?php echo $this->_vars['userprofile']['marriage']; ?>
" />
			<input name="marriage_cn" id="marriage_cn" type="hidden" value="<?php echo $this->_vars['userprofile']['marriage_cn']; ?>
" />
			  <div class="input_radio<?php if ($this->_vars['userprofile']['marriage'] == 1): ?> select<?php endif; ?>" id="1">未婚</div>
			  <div class="input_radio<?php if ($this->_vars['userprofile']['marriage'] == 2): ?> select<?php endif; ?>" id="2">已婚</div>			  
			  <div class="clear"></div>
			  </div>
		    </td>
			<td>&nbsp;</td>
		  </tr>
		</table>
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" >
		  <tr>
			<td width="127" align="right"> </td>
			<td colspan="2"><input type="submit" name="submitsave" id="submitsave" value="保存"  class="but220lan"/>			</td>
		  </tr>
		</table>
	</form>  
	  </div>
	</div>
  </div>
	</div>
</div>

<div class="clear"></div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>