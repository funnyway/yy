<?php
// require("hi_init.php");
// if(isset($_SESSION['toprx_api_userid'])) {
// 	header('Location:/hi/index.php');
// }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学时网大赛管理员登录</title>
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
	margin:0 auto;
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
    <td rowspan="2"><img src="../../images/index_r2_c4.jpg" width="282" height="72" /></td>
    <td width="60"><a href="#"></a></td>
    <td width="120"><a href="#"></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top">
	<div class="loginright">
		     <div class="logintop">管理员登录</div>
		     <form id="loginform" method="post">
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
    <input type="checkbox" id="auto_login" name="remember" value="auto_login" />
      <label for="auto_login">下次自动登录</label>
      <span class="reg-a">　　　　　　　<a href="forgetpassword.php">忘记密码</a></span></td>
    </tr>
  <tr>
  </form>
    <td colspan="2"><table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center"><button  type="button"  class="btns2" id="btn_login" style="line-height:34px;" />登录</button></td>
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
<script src="../../js/jquery-1.8.3.js"
	type="text/javascript"></script>
<script type="text/javascript">
$(function() {

	$('#btn_login').click(function() {
		$.ajax({
		 	type : 'POST',
			dataType : "json",
			url : "dologin.php",
			data:$('#loginform').serialize(),
			success : function(data){
				console.log(data);
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
</div>
</body>
</html>

