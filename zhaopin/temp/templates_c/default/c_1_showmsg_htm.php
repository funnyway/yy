<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 11:07 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>系统提示！</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.shadow {   
 -moz-box-shadow: 3px 3px 5px #D9E1EA;   
 -webkit-box-shadow: 3px 3px 5px #D9E1EA;   
box-shadow: 3px 3px 5px #D9E1EA;   
/* For IE 8 */   
-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#D9E1EA')";   
/* For IE 5.5 - 7 */   
filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='#D9E1EA');   
}
-->
</style></head>
<body style="background-color:#F5F5F5;background-image:none">
<table width="600" border="0" align="center" cellpadding="6" cellspacing="0" style="font-size:14px; margin-top:160px; border:1px #CAE3EB solid; margin-bottom:100px;" class="shadow">
  <tr>
    <td bgcolor="#017FCF"><strong style="color:#FFFFFF">系统提示：</strong></td>
  </tr>
  <tr>
    <td height="22" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="20" >
      <tr>
        <td width="80" align="right" valign="top"> 
		<?php if ($this->_vars['msg_type'] == "0"): ?> 
		<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/showmsg/11.gif" /> 
		<?php elseif ($this->_vars['msg_type'] == "1"): ?> 
		<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/showmsg/12.gif" /> 
		<?php else: ?> 
		<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/showmsg/13.gif" />
		 <?php endif; ?> 
		 </td>
        <td>
		<div style="font-size:12px; margin-top:2px; line-height:200%;">
		<strong style="font-size:14px ; color: #006699"><?php echo $this->_vars['msg_detail']; ?>
</strong>
         <div id="redirectionMsg" style="color:#999999;">
		 <?php if ($this->_vars['auto_redirect']): ?>如果您不做出选择，将在 <span id="spanSeconds"><?php echo $this->_vars['seconds']; ?>
</span> 秒后跳转到第一个链接地址。<?php else: ?>请选择以下操作。<?php endif; ?>
		 </div>
		<div style=" border-bottom:1px #CCCCCC solid; width:400px; height:1px;"></div>
          <ul style="margin:0;list-style:none; margin-top:7px;" >
            <?php if (count((array)$this->_vars['links'])): foreach ((array)$this->_vars['links'] as $this->_vars['link']): ?>
            <li><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/showmsg/21.gif" align="absmiddle" style="margin-right:5px;"/><a href="<?php echo $this->_vars['link']['href']; ?>
" <?php if ($this->_vars['link']['target']): ?> target="<?php echo $this->_vars['link']['target']; ?>
"<?php endif; ?> style="color: #006699"><?php echo $this->_vars['link']['text']; ?>
</a></li>
            <?php endforeach; endif; ?>
          </ul>
        </div></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php if ($this->_vars['auto_redirect']): ?>
<script language="JavaScript">
<!--
var seconds = <?php echo $this->_vars['seconds']; ?>
;
var defaultUrl = "<?php echo $this->_vars['default_url']; ?>
";

onload = function()
{
  if (defaultUrl == 'javascript:history.go(-1)' && window.history.length == 0)
  {
    document.getElementById('redirectionMsg').innerHTML = '';
    return;
  }

  window.setInterval(redirection, 1000);
}
function redirection()
{
  if (seconds <= 0)
  {
    window.clearInterval();
    return;
  }

  seconds --;
  document.getElementById('spanSeconds').innerHTML = seconds;

  if (seconds == 0)
  {
    window.clearInterval();
    location.href = defaultUrl;
  }
}
//-->
</script>
<?php endif; ?>
</body>
</html>