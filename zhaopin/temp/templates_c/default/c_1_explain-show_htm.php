<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_explain_list.php'); $this->register_function("qishi_explain_list", "tpl_function_qishi_explain_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_explain_show.php'); $this->register_function("qishi_explain_show", "tpl_function_qishi_explain_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:56 ?D1ú±ê×?ê±?? */  echo tpl_function_qishi_explain_show(array('set' => "说明页ID:GET[id],列表名:show"), $this);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['show']['title']; ?>
 - <?php echo $this->_vars['QISHI']['site_name']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['show']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['show']['keywords']; ?>
">
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/explain.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' ></script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<!-- 当前位置 -->
<div class="page_location link_bk">
  当前位置：<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
">首页</a>&nbsp;>>&nbsp;<?php echo $this->_vars['show']['title']; ?>

</div>
  <!-- 主体内容 -->
  <div class="container link_bk">
    <div class="about_left">
      <?php echo tpl_function_qishi_explain_list(array('set' => "列表名:explain,分类ID:1"), $this);?>
      <h2 class="about_tit">关于我们</h2>
      <ul>
        <?php if (count((array)$this->_vars['explain'])): foreach ((array)$this->_vars['explain'] as $this->_vars['list']): ?>
        <li <?php if ($_GET['id'] == $this->_vars['list']['id']): ?>class="active"<?php endif; ?>><a href="<?php echo $this->_vars['list']['url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a></li>
        <?php endforeach; endif; ?>
        <li><a href="<?php echo $this->_run_modifier('QS_suggest', 'qishi_url', 'plugin', 1); ?>
">意见反馈</a></li>
      </ul>
    </div>
    <div class="about_right">
      <div class="about_r_tit">
        <?php echo $this->_vars['show']['title']; ?>

      </div>
      <div class="about_r_content">
        <p><?php echo $this->_vars['show']['content']; ?>
</p>
      </div>

    </div>
    <div class="clear"></div>
  </div>
  <!-- 主体内容 结束 -->
   <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>