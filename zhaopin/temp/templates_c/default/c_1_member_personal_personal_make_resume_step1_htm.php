<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:52 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
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
// ��ʾ����
 		$("#jobsCity").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCate").show();
		        var dx = $("#divCityCate").offset().left; // ��ȡ�������x����
		        var dwidth = $("#divCityCate").outerWidth(true); // ��ȡ������Ŀ��
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
	 			$("#divCityCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					if((lastx - sx) < swidth) { // �ж�li�뵯�������ұߵľ����Ƿ��������������Ŀ��
			 						tharsub.css("left",-265); // ���С�ھ͸ı�����������x�����λ��
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
// ��ʾ���� 
 		$("#jobsCityH").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCateH").show();
		        var dx = $("#divCityCateH").offset().left; // ��ȡ�������x����
		        var dwidth = $("#divCityCateH").outerWidth(true); // ��ȡ������Ŀ��
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
	 			$("#divCityCateH li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					if((lastx - sx) < swidth) { // �ж�li�뵯�������ұߵľ����Ƿ��������������Ŀ��
			 						tharsub.css("left",-265); // ���С�ھ͸ı�����������x�����λ��
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
// ��ʾ��������  
 		$("#jobsCityW").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCateW").show();
		        var dx = $("#divCityCateW").offset().left; // ��ȡ�������x����
		        var dwidth = $("#divCityCateW").outerWidth(true); // ��ȡ������Ŀ��
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
	 			$("#divCityCateW li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					if((lastx - sx) < swidth) { // �ж�li�뵯�������ұߵľ����Ƿ��������������Ŀ��
			 						tharsub.css("left",-265); // ���С�ھ͸ı�����������x�����λ��
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
                $("#divCityCateW").hide(); 
            }
		});
// ��ʾ��ҵ
		$("#jobsTrad").hoverDelay({
		    hoverEvent: function(){
		        $("#divTradCate").show();
		    },
		    outEvent: function(){
                $("#divTradCate").hide();
            }
		});
// ��ʾְλ
 		$("#jobsSort").hoverDelay({
		    hoverEvent: function(){
		        $("#divJobCate").show();
		        var dx = $("#divJobCate").offset().left; // ��ȡ�������x����
		        var dy = $("#divJobCate").offset().top; // ��ȡ�������y����
		        var dwidth = $("#divJobCate").outerWidth(true); // ��ȡ������Ŀ��
		        var dheight = $("#divJobCate").outerHeight(true); // ��ȡ������ĸ߶�
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
		        var lasty = dy + dheight; // ���ϵ�����ĸ߶Ȼ�ȡ���������±ߵ�y����
	 			$("#divJobCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				var sy = that.offset().top; // ��ȡ��ǰli��y����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					var sheight = tharsub.outerHeight(true); // ��ȡ����������ĸ߶�
			 					if((lastx - sx) < swidth && (lasty - sy) > sheight) { 
			 						thap.css("border-bottom",0);
			 						tharsub.css("left",-265);
			 					}
			 					if((lastx - sx) > swidth && (lasty - sy) > sheight) { 
			 						thap.css("border-bottom",0);
			 						tharsub.css("left",0); 
			 					}
			 					if((lastx - sx) < swidth && (lasty - sy) < sheight) { 
				 					thap.css({
				 						"border-top": '0px',
				 						"border-bottom": ''
				 					});
			 						tharsub.css("left",-265); 
				 					tharsub.css("top",-(sheight - 2));
			 					}
			 					if((lastx - sx) > swidth && (lasty - sy) < sheight) { 
				 					thap.css({
				 						"border-top": '0px',
				 						"border-bottom": ''
				 					});
			 						tharsub.css("left",0); 
				 					tharsub.css("top",-(sheight - 2));
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
                $("#divJobCate").hide(); 
            }
		});
//��д������Ϣ����ѡ������
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
//�����ֻ���֤�밴ťЧ��
$("#mobilesend").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
//�����ֻ���֤��

//��д������Ϣ,��ѡ���ťЧ��
$("#displaymore").hover(
  function () {
    $(this).css("background-color","#F6F6F6");
  },
  function () {
    $(this).css("background-color","#FFFFFF");
  }
);
//�������ʵ�ѡ
var nature_obj = $("#nature_radio .input_radio").first();
$("#nature").val(nature_obj.attr("id"));
$("#nature_cn").val(nature_obj.text());
$("#nature_radio .input_radio").click(function(){
		$("#nature").val($(this).attr('id'));
		$("#nature_cn").val($(this).text());
		$("#nature_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});
//������������
 $("#publicitydiv").hover(
  function () {
     $("#publicitydiv .selbox").slideDown('fast');
  },
  function () {
    $("#publicitydiv .selbox").slideUp('fast');
  }
);
//������������-�˵�Ч��
$("#publicitydiv .selbox div").hover(
  function () {
     $(this).css("background-color","#F6F6F6");
  },
  function () {
     $(this).css("background-color","#FFFFFF");
  }
);
//������������-���ִ������
$("#publicitydiv .selbox div").click(function(){
		$("#display_name").val($(this).attr('id'));
		$("#display_name_cn").text($(this).text());
		$("#publicitydiv .selbox").slideUp('fast');
});

//�Ա�ѡ
$("#sex_radio .input_radio").click(function(){
		$("#sex").val($(this).attr('id'));
		$("#sex_cn").val($(this).text());
		$("#sex_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});

//����״����ѡ
$("#marriage_radio .input_radio").click(function(){
		$("#marriage").val($(this).attr('id'));
		$("#marriage_cn").val($(this).text());
		$("#marriage_radio .input_radio").removeClass("select");
		$(this).addClass("select");
});

//�����˵�
menuDown("#education_menu","#education","#education_cn","#menu1","218px");
menuDown("#experience_menu","#experience","#experience_cn","#menu2","218px");
menuDown("#wage_menu","#wage","#wage_cn","#menu3","218px");
<?php if ($this->_vars['QISHI']['subsite'] == "1"): ?>
menuDown("#subsite_menu","#subsite_id","","#menu4","218px");
<?php endif; ?>
function menuDown(menuId,input,input_cn,menuList,width){
	$(menuId).click(function(){
		$(menuList).css("width",width);
		$(menuList).slideDown('fast');
		//���ɱ���
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
showyearbox(".date_input","#birthdate");
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
		htm+="<li title=\""+i+"\">"+i+"��</li>";
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
	//�����ֻ���֤��
	var mobileinterval; //����������
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
			alert_dialog("fail:����д�ֻ���","","","","");
			}
			else if(!tel.test($("#mobile").val()))
			{
			alert_dialog("fail:�ֻ��Ŵ���","","","","");
			}
			else
			{
				 $("#mobilesend").html("���ڷ���...");
				 var mobile = $("#mobile").val();
				 $("#mobile").attr("disabled","disabled");
				 $("#Form1").append("<input type='hidden' name='mobile' id='mobile' value='"+mobile+"'>");
				 $.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_mobile.php", {"mobile": $("#mobile").val(),"send_key": "<?php echo $this->_vars['send_key']; ?>
","time":new Date().getTime(),"act":"send_code"},
		 	function (data,textStatus)
		 	 {
				if (data=="success")
				{	
					mobileSendTime = 60; // ���õ���ʱ��ʼʱ��
					$("#remainTime").html(mobileSendTime);
					mobilerun();
					$("#mobilesend").hide();
					$("#mobilesendsucceed").show();
					$("#displaymobilesend").show();
					$("#verifycode").attr("disabled","");
				}
				else
				{
					$("#mobilesend").attr("disabled","");
					$("#mobilesend").html("��ȡ��֤��");
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
			$("#mobilesend").html("��ȡ��֤��");
			$("#mobilesend").show();
			$("#mobilesendsucceed").hide();
			$("#displaymobilesend").hide();
			clearInterval(mobileinterval);
		};
	}
	//������֤���
//�����֤��
$("#postverify").click(function()
	{
		if($("#verifycode").val()=='')
		{
			alert_dialog("fail:����дЧ����","","","","");
		}
		else
		{
					$.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_mobile.php", {"verifycode": $("#verifycode").val(),"send_key": "<?php echo $this->_vars['send_key']; ?>
","time":new Date().getTime(),"act":"verify_code"},
				function (data,textStatus)
				 {
					if (data=="success")
					{	
						 window.location.href="?act=user_mobile";
					}
					else
					{
						alert_dialog("fail:��֤����д����","","","","");
					}
				 })		
		}
	});
//��֤
$(document).ready(function() {
var myDate = new Date();
var y=myDate.getFullYear();
 $("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   fullname: "required",
   birthdate: "required",
   residence: "required",
   education: "required",
   experience: "required",
   mobile: "required",
   email: {
	   required:true,
	   email:true
	},
	intention_jobs:"required",
	trade_cn:"required",
	district:"required",
	wage: "required"
   <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
   ,
	postcaptcha:{
	IScaptchastr: true,
	required: true,
	remote:{     
	url:"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php",     
	type:"post",    
	data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
	}
   }
   <?php endif; ?>  
	},
    messages: {
    fullname: {
    required: jQuery.format("��������ʵ����")
   },
   birthdate: {
    required: jQuery.format("��ѡ��������")
   },
   residence: {
    required: jQuery.format("��ѡ���־�ס��")
   },
   education: {
    required: jQuery.format("��ѡ�����ѧ��")
   },
   experience: {
    required: jQuery.format("��ѡ��������")
   },
   mobile: {
    required: jQuery.format("����д�ֻ���")
   },
   email: {
    required: jQuery.format("����д��������"),
	email: jQuery.format("����ȷ��д��������")
   },
   intention_jobs:"��ѡ������ְλ",
   trade_cn:"��ѡ��������ҵ",
   district: {
    required: jQuery.format("��ѡ��������")
   },
   wage: {
    required: jQuery.format("��ѡ������н��")
   }
   <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
   ,
    postcaptcha: {
    required: "����д��֤��",
	remote: jQuery.format("��֤�����")	
   }
    <?php endif; ?>
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
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="�����ȡ��֤��";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "����д��֤��");
		/////��֤�벿��
<?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="�����ȡ��֤��")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//������֤��DIV
		$(imgdiv).css({ position: "absolute", left:  $(inputID).width(), "bottom": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "25px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"��������֤�룿�������һ��\"  border=\"0\"/>");
		}
		$(imgdiv+" img").click(function()
		{
			$(imgdiv+" img").attr("src",$(imgdiv+" img").attr("src")+"1");
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
		});
		$(document).click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
			}			
		});
	});
}
imgcaptcha("#postcaptcha","#imgdiv");
//��֤�����
<?php endif; ?>
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

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > ��������</div>

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
	  <div class="addresume">
		
	    <div class="titleH1">
	      <div class="h1-title">��������</div>
        </div>
	    <div class="titleH2"><span>������Ϣ</span></div>
		<form id="Form1" name="Form1" method="post" action="?act=make1_save" >
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall">
		  <tr>
			<td width="125" align="right">�������ƣ�</td>
			<td width="230"><input name="title" type="text" class="input_text_200" id="title" maxlength="80"   value=""/></td>
			<td><div class="righttip">�������ƽ������������Ĳ�ͬ������������վ����ʾ!</div></td>
		  </tr>
		  <tr>
			<td align="right"><span class="nec">����</span>��</td>
			<td><input name="fullname" type="text" class="input_text_200" id="fullname" maxlength="6"   value="<?php echo $this->_vars['userprofile']['realname']; ?>
" /> </td>
			<td>
			<input name="display_name" id="display_name" type="hidden" value="<?php echo $this->_vars['QISHI']['resume_privacy']; ?>
" />
			  <div class="publicity" id="publicitydiv">
			    <div class="input_text_70_bg" id="display_name_cn"><?php if ($this->_vars['QISHI']['resume_privacy'] == "1"): ?>��ȫ����<?php elseif ($this->_vars['QISHI']['resume_privacy'] == "2"): ?>��ʾ���<?php elseif ($this->_vars['QISHI']['resume_privacy'] == "3"): ?>��������<?php endif; ?></div>
					<div class="selbox">
						<div class="div" id="1">��ȫ����</div>
						<div class="div" id="2">��ʾ���</div>
						<div class="div" id="3">��������</div>
					</div>
			  </div>
		    </td>
		  </tr>
		  <tr>
			<td align="right"><span class="nec">�Ա�</span>��</td>
			<td>
			<div id="sex_radio">
			<input name="sex" id="sex" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['sex'], 'default', 'plugin', 1, 1); ?>
" />
			<input name="sex_cn" id="sex_cn" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['sex_cn'], 'default', 'plugin', 1, '��'); ?>
" />
			  <div class="input_radio<?php if ($this->_vars['userprofile']['sex'] == 1 || $this->_vars['userprofile']['sex'] == ""): ?> select<?php endif; ?>" id="1">��</div>
			  <div class="input_radio<?php if ($this->_vars['userprofile']['sex'] == 2): ?> select<?php endif; ?>" id="2">Ů</div>			  
			  <div class="clear"></div>
			  </div>
		    </td>
			<td>&nbsp;</td>
		  </tr>
		  <tr>
			<td align="right"><span class="nec">�������</span>��</td>
			<td>
			<div>
			 <div class="input_text_200_bg date_input"><?php if ($this->_vars['userprofile']['birthday']):  echo $this->_vars['userprofile']['birthday'];  else: ?>��ѡ��<?php endif; ?></div>
              <input name="birthdate" id="birthdate" type="hidden" value="<?php echo $this->_vars['userprofile']['birthday']; ?>
" />
            </div>
			</td>
			<td>&nbsp;</td>
		  </tr>
		 <tr class="jobmain">
			<td align="right"><span class="nec">�־�ס��</span>��</td>
			<td id="jobsCity" style="position:relative;">
              <div class="input_text_200_bg" id="cityText"><?php echo $this->_run_modifier($this->_vars['userprofile']['residence_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
</div>
              <div style="display:none;left:1px;top:46px;" id="divCityCate" class="divJobCate">
		 			<table class="jobcatebox citycatebox"><tbody></tbody></table>
		 		</div>
              <input name="residence" id="residence" type="hidden" value="<?php echo $this->_vars['userprofile']['residence']; ?>
" />
              <input name="residence_cn" id="residence_cn" type="hidden" value="<?php echo $this->_vars['userprofile']['residence_cn']; ?>
" />
			</td>
			<td>&nbsp;</td>
		  </tr>
		   <tr>
			<td align="right"><span class="nec">ѧ��</span>��</td>
			<td>
				<div style="position:relateve;">
             	 	<div id="education_menu" class="input_text_200_bg"><?php if ($this->_vars['userprofile']['education']):  echo $this->_vars['userprofile']['education_cn'];  else: ?>��ѡ��<?php endif; ?></div>	
             	 	<div class="menu" id="menu1">
	              		<ul>
	              			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_education,�б���:c_education"), $this);?>
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
			<td align="right"><span class="nec">��������</span>��</td>
			<td>
				<div style="position:relateve;">
             	 	<div id="experience_menu" class="input_text_200_bg"><?php if ($this->_vars['userprofile']['experience']):  echo $this->_vars['userprofile']['experience_cn'];  else: ?>��ѡ��<?php endif; ?></div>	
             	 	<div class="menu" id="menu2">
	              		<ul>
	              			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_experience,�б���:c_experience"), $this);?>
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
		  <tr>
			<td align="right"><span class="nec">�ֻ�</span>��</td>
			<td><input name="mobile" id="mobile" type="text" class="input_text_200" value="<?php echo $this->_vars['userprofile']['phone']; ?>
" /> </td>
			<td>
				<?php if ($this->_vars['user']['mobile_audit'] != "1"): ?>
				<div class="mobilesend" id="mobilesend">������֤��</div><div class="mobilesend succeed" id="mobilesendsucceed">�ѳɹ���������֤�룬<span id="remainTime">60</span>�������·��ͣ�</div>
				<?php endif; ?>
			</td>
		  </tr>
	    </table>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" id="displaymobilesend" style="display:none" >
		  <tr>
			<td align="right" width="125"><span class="nec">�ֻ���֤��</span>��</td>
			<td width="230"><input name="verifycode" id="verifycode" type="text" class="input_text_200" value="" /></td>
			<td><div class="righttip">����д���ֻ��յ�����֤��!</div></td>
		  </tr>
		  </table>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall">
		  <tr>
			<td width="125" align="right"><span class="nec">����</span>��</td>
			<td width="230"><input name="email" id="email" type="text" class="input_text_200" value="<?php if ($this->_vars['userprofile']['email'] != ''):  echo $this->_vars['userprofile']['email'];  else:  echo $this->_vars['user']['email'];  endif; ?>" /></td>
			<td>&nbsp;<label><input name="email_notify" type="checkbox" value="1" checked="checked"/>������������</label></td>
		  </tr>
		  <tr>
			<td align="right">&nbsp;</td>
			<td> <div class="displaymore" id="displaymore">չ��ѡ����Ϣ</div></td>
			<td>&nbsp;</td>
		  </tr>
		</table>
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" id="displaymorediv" style="display:none">
		  <tr>
			<td width="125" align="right">��ߣ�</td>
			<td width="220"><input name="height" type="text" class="input_text_200_bgsg" value="<?php echo $this->_vars['userprofile']['height']; ?>
" /> </td>
			<td>&nbsp;</td>
		  </tr>
		  <tr class="jobmain">
			<td width="125" align="right">���᣺</td>
			<td width="220" id="jobsCityH" style="position:relative;">
				<div class="input_text_200_bg" id="cityTextH"><?php echo $this->_run_modifier($this->_vars['userprofile']['householdaddress_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
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
			<td align="right">����״����</td>
			<td>
			<div id="marriage_radio">
			<input name="marriage" id="marriage" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['marriage'], 'default', 'plugin', 1, '1'); ?>
" />
			<input name="marriage_cn" id="marriage_cn" type="hidden" value="<?php echo $this->_run_modifier($this->_vars['userprofile']['marriage_cn'], 'default', 'plugin', 1, 'δ��'); ?>
" />
			  <div class="input_radio<?php if ($this->_vars['userprofile']['marriage'] == 1 || $this->_vars['userprofile']['marriage'] == ''): ?> select<?php endif; ?>" id="1">δ��</div>
			  <div class="input_radio<?php if ($this->_vars['userprofile']['marriage'] == 2): ?> select<?php endif; ?>" id="2">�ѻ�</div>			  
			  <div class="clear"></div>
			  </div>
		    </td>
			<td>&nbsp;</td>
		  </tr>
		</table>
		
		<div class="titleH2"><span>��ְ����</span></div>
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" >
		  <tr class="jobmain">
			<td width="127" align="right" valign="top" style="padding-top:16px;"><span class="nec">����ְλ��</span></td>
			<td  id="jobsSort" style="position:relative" colspan=2>
				<div class="input_text_200_bg" id="jobText">��ѡ��</div>
				<div style="display:none;left:1px;top:46px;" id="divJobCate" class="divJobCate">
		 			<table class="jobcatebox">
		 				<div class="acquired">
			 				<div class="l">��ѡ</div>
			 				<div class="c" id="jobAcq"></div>
			 				<div class="r">
			 					<div class="empty" id="jobEmpty"></div>
			 					<div class="sure" id="jobSure">ȷ��</div>
			 					<div class="container" id="jobdropcontent">
									<div class="content">����ѡ���Ѵ����ޣ�5�<br>������ȷ���������Ƴ�����ѡ��</div>
									<s><e></e></s>
								</div>
			 				</div>
			 			</div>
		 				<tbody></tbody>
		 			</table>
		 		</div>
			    <input name="intention_jobs" id="intention_jobs" type="hidden" value="" />
			    <input name="intention_jobs_id" id="intention_jobs_id"  type="hidden" value="" />
			</td>
		  </tr>
		  <tr class="jobmain">
			<td width="127" align="right" valign="top" style="padding-top:16px;"><span class="nec">������ҵ��</span></td>
			<td  id="jobsTrad" style="position:relative;z-index:2;" colspan=2>
				<div class="input_text_200_bg" id="tradText">��ѡ��</div>
				<div id="divTradCate" class="infoList divIndCate" style="display:none;left:1px;top:46px;">
		 			<div class="acquired">
		 				<div class="l">��ѡ</div>
		 				<div class="c" id="tradAcq"></div>
		 				<div class="r">
		 					<div class="empty" id="tradEmpty"></div>
		 					<div class="sure" id="tradSure">ȷ��</div>
		 					<div class="container" id="tradropcontent">
								<div class="content">����ѡ���Ѵ����ޣ�5�<br>������ȷ���������Ƴ�����ѡ��</div>
								<s><e></e></s>
							</div>
		 				</div>
		 			</div>
		 			<ul class="indcatelist" id="tradList"></ul>
		 		</div>
			    <input name="trade_cn" id="trade_cn" type="hidden" value="" />
			    <input name="trade" id="trade" type="hidden" value="" />
			</td>
		  </tr>
		  
		   <tr class="jobmain">
			<td width="127" align="right"><span class="nec">����������</span></td>
			<td  id="jobsCityW" style="position:relative;z-index:1;" colspan=2>
				<div class="input_text_200_bg" id="cityTextW">��ѡ��</div>
				<div style="display:none;left:1px;top:46px;" id="divCityCateW" class="divJobCate">
		 			<table class="jobcatebox citycatebox"><tbody></tbody></table>
		 		</div>
                <input id="district" type="hidden" value="" name="district">
                <input id="sdistrict" type="hidden" value="" name="sdistrict">
                <input id="districtID" type="hidden" value="">
                <input name="district_cn" id="district_cn" type="hidden" value="" />
			</td>
		  </tr>
		  
		   <tr>
			<td width="127" align="right"><span class="nec">�������ʣ�</span></td>
			<td colspan="2">
			<div id="nature_radio">
			<input name="nature" id="nature" type="hidden" value="" />
			<input name="nature_cn" id="nature_cn" type="hidden" value="" />
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_jobs_nature,�б���:c_nature"), $this);?>
			<?php if (isset($this->_sections['list'])) unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($this->_vars['c_nature']) ? count($this->_vars['c_nature']) : max(0, (int)$this->_vars['c_nature']);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
	$this->_sections['list']['total'] = $this->_sections['list']['loop'];
	if ($this->_sections['list']['total'] == 0)
		$this->_sections['list']['show'] = false;
} else
	$this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

		for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
			 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
			 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']	  = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']	   = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
			  <div class="input_radio <?php if ($this->_sections['list']['index'] == 0): ?>select<?php endif; ?>" id="<?php echo $this->_vars['c_nature'][$this->_sections['list']['index']]['id']; ?>
"><?php echo $this->_vars['c_nature'][$this->_sections['list']['index']]['categoryname']; ?>
</div>
			  <?php endfor; endif; ?>			  
			  <div class="clear"></div>
			  </div>			  </td>
		  </tr>


 		<tr>
			<td width="127" align="right"><span class="nec">����н�ʣ�</span></td>
			<td colspan="2">
				<div style="position:relateve;">
             	 	<div id="wage_menu" class="input_text_200_bg">��ѡ��</div>	
             	 	<div class="menu" id="menu3">
	              		<ul>
	              			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_wage,�б���:c_wage"), $this);?>
	              			<?php if (count((array)$this->_vars['c_wage'])): foreach ((array)$this->_vars['c_wage'] as $this->_vars['list']): ?>
	              			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
	              			<?php endforeach; endif; ?>
	              		</ul>
	              	</div>
	            </div>				
             	 <input name="wage" type="hidden" id="wage" value="" />
             	 <input name="wage_cn" type="hidden" id="wage_cn" value="" />
			</td>
		  </tr>
		  <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
		  <tr>
			<td width="125" align="right">��֤�룺</td>
			<td width="230" colspan=2>
				<div>
					<div id="imgdiv"></div>
					<input  class="input_text_200" name="postcaptcha" id="postcaptcha" type="text" value="�����ȡ��֤��" style="color:#999999"/>
				</div></td>
		  </tr>
		  <?php endif; ?>
		   <tr>
			<td width="127" align="right"> </td>
			<td colspan="2"><input type="submit" name="submitsave" id="submitsave" value="����"  class="but220lan"/>			</td>
		  </tr>
		</table>
	</form>

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
