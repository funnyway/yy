<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 13:23 ?D1ú±ê×?ê±?? */ ?>
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
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#btn_print').click(function() {
		var targetContent = $('#printarea').html();
		$('body').html(targetContent);
		window.print();
	})

});
</script>
<style>
#printarea table td {
	
}
</style>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 下载/打印报名表</div>
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
 	    <div style="margin:5px;margin-left:200px">
					  <!-- <input type="button" id="btn_download" class="but100lan"  value="下载" /> -->
					  <input type="button" id="btn_print" class="but100lan" value="打印/下载" />
		</div>
	  	</div>
	  	<div id="printarea">
<table width="600px" border="1" height="860" style="margin-left:20px;margin-top:20px;border-collapse:collapse;text-indent:10px;">
  <tr>
    <td align="center" width="18%" height="36" scope="col">姓名</td>
    <td  width="28%" scope="col"><?php echo $this->_vars['user']['realname']; ?>
</td>
    <td align="center" width="18%" scope="col">性别</td>
    <td width="18%" scope="col"><?php echo $this->_vars['user']['sex_cn']; ?>
</td>
    <td align="center" width="18%" rowspan="4" scope="col" style="text-indent:0px;"><img src="/dasai/photo/166/<?php echo $this->_vars['user']['photo']; ?>
"></td>
  </tr>
  <tr>
    <td align="center"height="34">身份证号</td>
    <td><?php echo $this->_vars['user']['shenfenzhenghao']; ?>
</td>
    <td align="center">民族</td>
    <td><?php echo $this->_vars['user']['nation']; ?>
</td>
  </tr>
  <tr>
    <td align="center" height="36">政治面貌</td>
    <td><?php echo $this->_vars['user']['politics']; ?>
</td>
    <td align="center">学历</td>
    <td><?php echo $this->_vars['user']['degree']; ?>
</td>
  </tr>
  <tr>
    <td align="center" height="32">毕业院校</td>
    <td><?php echo $this->_vars['user']['school']; ?>
</td>
    <td align="center">专业</td>
    <td><?php echo $this->_vars['user']['major']; ?>
</td>
  </tr>
  <tr>
    <td align="center" height="34">求职岗位</td>
    <td><?php echo $this->_vars['user']['target_job']; ?>
</td>
    <td align="center">联系电话</td>
    <td colspan="2"><?php echo $this->_vars['user']['mobile']; ?>
</td>
  </tr>
  <tr>
    <td align="center" height="35">邮箱</td>
    <td><?php echo $this->_vars['user']['email']; ?>
</td>
    <td align="center">QQ号码</td>
    <td colspan="2"><?php echo $this->_vars['user']['qq']; ?>
</td>
  </tr>
  <tr>
    <td height="42" align="center">外语水平</td>
    <td><?php echo $this->_vars['user']['foreign_language_level']; ?>
</td>
    <td  align="center">计算机水平</td>
    <td colspan="2"><?php echo $this->_vars['user']['computer_level']; ?>
</td>
  </tr>
  <tr>
    <td align="center" height="120">教育背景</td>
    <td colspan="4"><?php echo $this->_vars['user']['educations']; ?>
</td>
  </tr>
  <tr>
    <td height="101" align="center">获奖情况</td>
    <td colspan="4"><?php echo $this->_vars['user']['awards']; ?>
</td>
  </tr>
  <tr>
    <td height="97" align="center">社会实践</td>
    <td colspan="4"><?php echo $this->_vars['user']['social_practice']; ?>
</td>
  </tr>
  <tr>
    <td height="91" align="center">特困生填写</td>
    <td colspan="4"><?php echo $this->_vars['user']['is_poor_student']; ?>
</td>
  </tr>
  <tr>
    <td height="161" align="center">学校意见</td>
    <td colspan="4"><table width="100%%" border="0" height="26%">
      <tr>
        <th width="32%" height="31" scope="col">&nbsp;</th>
        <th width="27%" scope="col">&nbsp;</th>
        <th width="41%" scope="col">&nbsp;</th>
      </tr>
      <tr>
        <td height="49">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="82">&nbsp;</td>
        <td>&nbsp;</td>
        <td align="center"><p>&nbsp;&nbsp; 盖&nbsp;&nbsp; 章&nbsp;&nbsp;</p>
          <p>年&nbsp;&nbsp;&nbsp; 月&nbsp;&nbsp;&nbsp; 日 </p></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>
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