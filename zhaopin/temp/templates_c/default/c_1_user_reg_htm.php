<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 13:45 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ע��</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/reg.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
//��֤
$(document).ready(function() {
 $("#Form1").validate({
//debug: true,
// onsubmit:false,
//onfocusout :true,
submitHandler:function(form){
if($("#agreement").attr("checked")==false)
{
alert("������ͬ��[ע��Э��]���ܼ�����һ��");
return false;
}
		$("#reg").hide();
		$("#waiting").show();
		var tsTimeStamp= new Date().getTime();
		$.post("<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php", { "username": $("#username").val(),"password": $("#password").val(),"member_type": $("#member_type").val(),"email":$("#email").val(),"postcaptcha": $("#postcaptcha").val(),"time":tsTimeStamp,"act":"do_reg"},
	 	function (data,textStatus)
	 	 {
			if (data=="err")
			{
			$("#waiting").hide();
			$("#reg").show();
			$("#username").attr("value","");
			$("#email").attr("value","");
			alert("ע��ʧ��");
			}
			else
			{
				$("body").append(data);
			}
	 	 })
//$(form).ajaxSubmit();
},
success: function(label) {
				label.text(" ").addClass("success");
			},
   rules:{
   username:{
    required: true,
	userName : true,
	nomobile : true,
	byteRangeLength : [3, 18],
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"usname":function (){return $("#username").val()},"act":"check_usname","time":function (){return new Date().getTime()}}     
		}
   },
   email:{
    required: true,
	email:true,
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"email":function (){return $("#email").val()},"act":"check_email","time": new Date().getTime()}     
		}
   },
   <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha:{
	IScaptchastr:true,
    required: true,
	remote:{     
	url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
include/imagecaptcha.php",     
	type:"post",    
	data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
	}
   },
   <?php endif; ?>
   password:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password2:{
   required: true,
	 equalTo:"#password"
   }
	},
    messages: {
    username: {
    required: "����д�û���",
	remote: jQuery.format("�û����Ѿ����ڻ��߲��Ϸ�")	
   },
    email: {
    required: "����д��������",
	email: jQuery.format("���������ʽ����"),
	remote: jQuery.format("email�Ѿ�����")	
   },
    <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha: {
    required: "����д��֤��",
	remote: jQuery.format("��֤�����")	
   },
    <?php endif; ?>
   password: {
    required: "����д����",
    minlength: jQuery.format("��д����С��{0}���ַ�"),
	maxlength: jQuery.format("��д���ܴ���{0}���ַ�")
   },
   password2: {
   required: "����д����",
    equalTo: "������������벻ͬ"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent().next());
	}
    });
	 //�����������ֽ�
	jQuery.validator.addMethod("byteRangeLength", function(value, element,	param) {
	var length = value.length;
	for (var i = 0; i < value.length; i++) {
			if (value.charCodeAt(i) > 127) {
			length++;
			}
		}
	return this.optional(element)	|| (length >= param[0] && length <= param[1]);
	}, "ȷ����ֵ��3-18���ֽ�֮��");
	 //�ַ���֤
	jQuery.validator.addMethod("userName", function(value, element) {
	return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
	}, "ֻ�ܰ�����Ӣ�ġ����ֺ��»���");
	jQuery.validator.addMethod("nomobile", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/;
	var $cstr= true;
	if (tel.test(value)) $cstr= false;
	return $cstr || this.optional(element); 
}, "�û����������ֻ���");
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
<?php if ($this->_vars['verify_userreg'] == "1"): ?>
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
		$(imgdiv).css({ position: "absolute",right: "-148px", "top": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['main_domain']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"��������֤�룿�������һ��\"  border=\"0\"/>");
		}
		$(imgdiv+" img").click(function()
		{
			$(imgdiv+" img").attr("src",$(imgdiv+" img").attr("src")+"1");
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
		});
		$(document).unbind().click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
			$(document).unbind();
			}			
		});
	});
}
imgcaptcha("#postcaptcha","#imgdiv");
//��֤�����
<?php endif; ?>
//
$(".but-reg").hover(function(){$(this).addClass("but-reg-hover")},function(){$(this).removeClass("but-reg-hover")});
$(".but-reg-login").hover(function(){$(this).addClass("but-reg-login-hover")},function(){$(this).removeClass("but-reg-login-hover")});
//

});
</script>
</head>
<body class="login_body">
	<div class="sign_up_box">
		<div class="container">
			<div class="sign_lgo">
				<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
"><img src="<?php echo $this->_vars['QISHI']['upfiles_dir'];  echo $this->_vars['QISHI']['web_logo']; ?>
" alt="<?php echo $this->_vars['QISHI']['site_name']; ?>
" border="0" align="absmiddle" /></a>
				<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
" class="back-to-index"></a>
			</div>
			<div class="reg_type"><?php if ($_GET['type'] == "2" || $_GET['type'] == ""): ?>����ע��<?php elseif ($_GET['type'] == "1"): ?>��ҵע��<?php elseif ($_GET['type'] == "3"): ?>ע����ͷ��Ա<?php else: ?>ע����ѵ��Ա<?php endif; ?></div>
			<div class="clear"></div>
			<div class="sign_centent">
				<!-- ע��� -->
				<div class="sign_left">
					<div class="sign_nav">
						<ul>
							<li><a href="?type=2" <?php if ($_GET['type'] == "2" || $_GET['type'] == ""): ?>class="select"<?php endif; ?>>����ע��</a></li>
							<li><a href="?type=1" <?php if ($_GET['type'] == "1"): ?>class="select"<?php endif; ?>>��ҵע��</a></li>
							<div class="clear"></div>
						</ul>
					</div>
					<form id="Form1" name="Form1" method="post" action="?sd">
					<div class="sign_form">
						<ul>
							<li>
								<div class="w99"><span>*</span>�û�����</div>
								<div class="input_box"><input type="text" name="username" id="username" class="sign_up_input_name" placeholder="�������û���" maxlength="25" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>���룺</div>
								<div class="input_box"><input type="password" name="password" id="password" class="sign_up_input_pwd" placeholder="�������¼����" maxlength="18" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>ȷ�����룺</div>
								<div class="input_box"><input type="password" name="password2" id="password2" class="sign_up_input_pwd" placeholder="��ȷ�ϵ�¼����" maxlength="18"/></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>�������䣺</div>
								<div class="input_box"><input type="text" name="email" id="email" class="sign_up_input_mail" placeholder="���������ĳ�������" maxlength="60" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<?php if ($this->_vars['verify_userreg'] == "1"): ?>
							<li>
								<div class="w99"><span>*</span>��֤�룺</div>
								<div class="input_box">
									<div id="imgdiv"></div>
									<input  class="sign_up_input_varcode" name="postcaptcha" id="postcaptcha" type="text" value="�����ȡ��֤��" style="color:#999999"/>
								</div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<?php endif; ?>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="input_box user_agree"><input type="checkbox" name="agreement" id="agreement" value="1" checked="checked"/>�����Ķ���ͬ��<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
agreement/">��<?php echo $this->_vars['QISHI']['site_name']; ?>
�û�����Э�顷</a></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="input_box">
									<input name="member_type" type="hidden" id="member_type" value="<?php echo $this->_run_modifier($_GET['type'], 'default', 'plugin', 1, 2); ?>
" />
									<input type="submit" name="reg" id="reg" value="<?php if ($_GET['type'] == '3'): ?>ע����ͷ��Ա<?php elseif ($_GET['type'] == '4'): ?>ע����ѵ��Ա<?php elseif ($_GET['type'] == '2' || $_GET['type'] == ''): ?>ע����˻�Ա<?php else: ?>ע����ҵ��Ա<?php endif; ?>" class="sign_up_but_sign" /></div>
							</li>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="item-input-box waiting" id="waiting" style="display:none">
								����ע����,��ȴ�...
								</div>
							</li>
						</ul>
					</div>
					</form>
				</div>
				<!-- ע��� ���� -->

				<div class="sign_right">
					<div class="fast_login">
						<p class="title">����<?php echo $this->_vars['QISHI']['site_name']; ?>
�˺ţ�</p>
						<div><input type="button" value="���ϵ�½" class="sign_up_but_login" onclick="window.location='<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
'"/></div>
						<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
						<div class="content_box">
							<p>ʹ�ú�����վ�˺ŵ�¼��</p>
							
							<ul style="margin-bottom:40px;">
								<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
								<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>"class="qq">QQ</a></li>
								<?php endif; ?>
								<?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
								<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_sina.php" class="weibo">weibo</a></li>
								<?php endif; ?>
								<?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
								<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_taobao.php" class="taobao">taobao</a></li>
								<?php endif; ?>
								<div class="clear"></div>
							</ul>
								<div class="clear"></div>
						</div>
						<?php endif; ?>
					</div>
					<div class="other_sign">
						<p>������ҵ�û���<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_reg.php?type=1">ע��<strong>��ҵ��Ա</strong></a></p>
						<p>���Ǹ����û���<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_reg.php?type=2">ע��<strong>���˻�Ա</strong></a></p>
					</div>
				</div>
				<div class="clear"></div>
				
			</div>
		</div>
	</div>
</body>
</html>