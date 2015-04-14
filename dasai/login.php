<?php
require("hi_init.php");
if(isset($_SESSION['toprx_api_userid'])) {
	header('Location:/hi/index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开发者登录</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<style>
.porleft p {
 height: 35px;
}
.loginleft {
	float: left;
	width: 500px;
	margin-top: 40px;
}
.loginright {
	height: 384px;
	width: 404px;
	border: 2px solid #DEDEDE;
	margin-top: 20px;
	margin-bottom: 20px;
	float: right;
	margin-right: 30px;
}
.logintop {
	font-size: 15px;
	line-height: 46px;
	font-weight: bold;
	color: #333333;
	background-color: #F3F3F7;
	height: 46px;
	width: 404px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #DEDEDE;
	text-indent: 30px;
}
.logintable {
	font-size: 15px;
	line-height: 60px;
	color: #666666;
	text-decoration: none;
	width: 300px;
	margin-right: auto;
	margin-left: auto;
}
.logintable02 {
	font-size: 12px;
	line-height: 34px;
	color: #333333;
	text-decoration: none;
}
.logininput {
	font-size: 14px;
	line-height: 34px;
	color: #666666;
	text-decoration: none;
	height: 34px;
	width: 200px;
	border: 1px solid #DEDEDE;
}
.fb{ font-weight:bold;}
.link-login{font-family: '宋体';}
#nextwrap{position:relative;}
#validatecode{width:75px;}
#pre{font-size:12px;line-height:34px;cursor:pointer;}
.btnGray input.disable{color:#a0a0a0;cursor:default;}


</style>
</head>


<body>
<div class="box">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="2"><img src="../images/TopRx_r2_c3.jpg" width="282" height="72" /></td>
    <td width="60"><a href="#"></a></td>
    <td width="120"><a href="#"></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="720" align="center" valign="middle"><img src="../images/login.jpg" width="671" height="388" /></td>
    <td align="left" valign="top">
	<div class="loginright">
		     <div class="logintop">账号登录</div>
		     <form id="loginform" method="post" >
			 <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
               <tr>
                 <td height="40"></td>
               </tr>
             </table>
			 <table class="logintable" width="300" border="0" align="center" cellpadding="0" cellspacing="0">
			     
  <tr>
    <td width="80">账户名</td>
    <td><label>

      <input class="logininput" type="text" id="us" name="us" />
      <div id="usTip" style="width: 150px"></div>
    </label></td>
  </tr>
  <tr>
    <td>密　码</td>
    <td><label>
      <input class="logininput" type="password" id="password" name="password" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      
      <input type="hidden" id="http_referer" name="http_referer" value="<?php echo $_SERVER["HTTP_REFERER"] ?>">
    <input type="checkbox" id="auto_login" name="remember" value="auto_login" />
      <label for="auto_login">下次自动登录</label>
      <span class="reg-a">　　　　　　　<a href="forgetpassword.php">忘记密码</a></span></td>
    </tr>
  <tr>
  </form>
    <td colspan="2"><table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><button  type="button" class="btns2" id="btn_login" style="line-height:34px;">登录
          </button></td>
          <td align="center" valign="middle"><a href="zc.php"><button type="button" class="btns3" style="line-height:34px;">注册
          </button></a></td>
        </tr>
      </table>
      </td>
    </tr>
</table>

	    </div>
	</td>
  </tr>
</table>
<script src="js/formValidator/jquery-1.4.4.min.js"
	type="text/javascript"></script>
<link type="text/css" rel="stylesheet"
	href="js/formValidator/style/validator.css"></link>
<script src="js/formValidator/formValidator-4.0.1.js"
	type="text/javascript" charset="UTF-8"></script>
<script type="text/javascript">
$(function() {
	$.formValidator.initConfig({formID:"loginform",debug:false,submitOnce:true,
		onError:function(msg,obj,errorlist){
			$("#errorlist").empty();
			$.map(errorlist,function(msg){
				$("#errorlist").append("<li>" + msg + "</li>")
			});
			alert(msg);
		},
		submitAfterAjaxPrompt : '有数据正在异步验证，请稍等...'
	});
	$('#us').formValidator({onShow:"",onFocus:"",onCorrect:""})
	.ajaxValidator({
		 	type:'POST',
			dataType : "json",
			url : "ajax/checkunique.php",
			data:{key:'username'},
			success : function(data){
				console.log(data);
	            if( data.status == 1 ) return true;
	            if( data.status == 0 ) return false;
				return false;
			},
			buttons: $("#btn_submit"),
			error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
			onError : "用户名不存在",
			onWait : ""
		}).defaultPassed();
	$('#btn_login').click(function() {
		$.ajax({
		 	type : 'POST',
			dataType : "json",
			url : "dologin.php",
			data:$('#loginform').serialize(),
			success : function(data){
	            if(data.status==1){
		            if(data.url) {
		            	window.location.href = data.url;
		            }else {
		            	window.location.href = "index.php";
			         }
		        }else {
		        	alert(data.msg)
			    }
			}
		})
	})

	
})

</script>
<?php

include('template/foot.temp.php');
?>

