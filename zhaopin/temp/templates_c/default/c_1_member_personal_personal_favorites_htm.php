<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:01 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 职位收藏夹</div>

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
		  <div class="favorites link_bk">
	 	    <div class="topnav">
			 	<div class="titleH1">
				  <div class="h1-title">职位收藏夹</div>
				</div>
				<div class="navs">
				    <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=" <?php if ($_GET['settr'] == ""): ?>class="se"<?php endif; ?>>所有的</a>
				    <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=3" <?php if ($_GET['settr'] == "3"): ?>class="se"<?php endif; ?>>最新三天</a>
				    <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=7" <?php if ($_GET['settr'] == "7"): ?>class="se"<?php endif; ?>>最近一周</a>
				    <div class="clear"></div>
				</div>	
		  	</div> 
		  	<form action="?act=del_favorites" name="form1" id="form1" method="post">
		  		<div class="toptitle">
				    <div class="t1"><label><input name="" type="checkbox" value="" id="chk" />&nbsp;&nbsp;职位名称</label></div>
					<div class="t2">公司名称</div>
					<div class="t3">工作地区</div>
					<div class="t4">月薪</div>
					<div class="t5">收藏时间</div>
					<div class="clear"></div>
				</div>
		 	 	<?php if ($this->_vars['favorites']): ?>
				<?php if (count((array)$this->_vars['favorites'])): foreach ((array)$this->_vars['favorites'] as $this->_vars['list']): ?>
				<?php if ($this->_vars['list']['district_cn']): ?>
				<div class="ilist userliststyle">
				    <div class="t1"><input name="y_id[]" id="y_id" type="checkbox" value="<?php echo $this->_vars['list']['did']; ?>
" />&nbsp;&nbsp;<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></div>
					<div class="t2"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></div>
					<div class="t3"><?php echo $this->_vars['list']['district_cn']; ?>
</div>
					<div class="t4"><?php echo $this->_vars['list']['wage_cn']; ?>
</div>
					<div class="t5"><?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</div>
					<div class="clear"></div>
				</div>
				<?php else: ?>
				<div class="ilist userliststyle">
				    <div class="t1" style="width:400px;"><input name="y_id[]" id="y_id" type="checkbox" value="<?php echo $this->_vars['list']['did']; ?>
" />&nbsp;&nbsp;您收藏的职位(<?php echo $this->_vars['list']['jobs_id']; ?>
)可能已经被删除。</div>	
					<div class="clear"></div>
				</div>
				<?php endif; ?>
				<?php endforeach; endif; ?>
				<div class="but">
				   <input type="submit" name="delete" id="submitsave" value="删除所选" onClick="return confirm('您确定删除吗?')" class="but95_35lan"/>
				</div>
				<?php if ($this->_vars['page']): ?>
				<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
		          <tr>
		            <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
		          </tr>
		      </table>
		      <?php endif; ?>
				<?php else: ?>
				<div class="emptytip" style="margin:0 15px;">对不起！没有找到您要的信息！</div>
				<?php endif; ?>
			</form>
			
		  </div>
		</div>
	</div>
</div>
<div class="clear"></div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
