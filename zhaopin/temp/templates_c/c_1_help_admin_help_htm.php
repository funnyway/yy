<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_help_category.php'); $this->register_function("qishi_help_category", "tpl_function_qishi_help_category",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:07 ?D1ú±ê×?ê±?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	//点击批量取消	
	$("#ButDel").click(function(){
		if (confirm('你确定要删除吗？'))
		{
			$("form[name=form1]").submit()
		}
	});
		
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("help/admin_help_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="seltpye_x">
		<div class="left">帮助分类</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("type_id:,parentid:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['parentid'] == ""): ?>class="select"<?php endif; ?>>不限</a>
		<?php echo tpl_function_qishi_help_category(array('set' => "列表名:category,大类:0"), $this);?>
		<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
			<a href="<?php echo $this->_run_modifier($this->_run_modifier("type_id:,parentid:", 'cat', 'plugin', 1, $this->_vars['list']['id']), 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['parentid'] == $this->_vars['list']['id']): ?>class="select"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</a>
			<?php endforeach; endif; ?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
<?php if ($_GET['parentid'] <> ""): ?>
<div class="seltpye_x">
		<div class="left"><span style="color:#999999">└ </span>子分类</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("type_id:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['type_id'] == ""): ?>class="select"<?php endif; ?>>不限</a>
	 	<?php echo tpl_function_qishi_help_category(array('set' => $this->_run_modifier("列表名:category,大类:", 'cat', 'plugin', 1, $_GET['parentid'])), $this);?>
		<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
		<a href="<?php echo $this->_run_modifier($this->_run_modifier("type_id:", 'cat', 'plugin', 1, $this->_vars['list']['id']), 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['type_id'] == $this->_vars['list']['id']): ?>class="select"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</a>
			<?php endforeach; endif; ?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
<?php endif; ?>

 
  <form id="form1" name="form1" method="post" action="?act=help_del">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan">
    <tr>
      <td height="26" class="admin_list_tit admin_list_first" >
      <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>标题</label></td>
      <td width="100"   align="center" class="admin_list_tit">排序</td>
      <td width="100"   align="center" class="admin_list_tit">点击</td>
      <td width="120"   align="center" class="admin_list_tit" >添加日期</td>
      <td width="130"   align="center" class="admin_list_tit" >操作</td>
    </tr>
	  <?php if (count((array)$this->_vars['helplist'])): foreach ((array)$this->_vars['helplist'] as $this->_vars['list']): ?>
      <tr>
      <td  class="admin_list admin_list_first">
        <input name="id[]" type="checkbox" id="id" value="<?php echo $this->_vars['list']['id']; ?>
"/>
		<?php if ($this->_vars['list']['c_categoryname']): ?>
		<a href="?type_id=<?php echo $this->_vars['list']['type_id']; ?>
&parentid=<?php echo $this->_vars['list']['parentid']; ?>
" style="color: #006699">[<?php echo $this->_vars['list']['c_categoryname']; ?>
]</a> 
		<?php else: ?>
		[分类不存在]&nbsp; 
		<?php endif; ?>
		<?php echo $this->_vars['list']['title']; ?>

		</td>
	    <td align="center"  class="admin_list"><?php echo $this->_vars['list']['order']; ?>
</td>
        <td align="center"  class="admin_list"><?php echo $this->_vars['list']['click']; ?>
</td>
        <td align="center"  class="admin_list"><?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</td>
        <td align="center"  class="admin_list">
		<a href="?act=edit&id=<?php echo $this->_vars['list']['id']; ?>
">修改</a> &nbsp;&nbsp;
		<a href="?act=help_del&id=<?php echo $this->_vars['list']['id']; ?>
&del_Submit=ok&<?php echo $this->_vars['urltoken']; ?>
" onclick="return confirm('你确定要删除吗？')">删除</a></td>
      </tr>
      <?php endforeach; endif; ?>
    </table>
  </form>
	<?php if (! $this->_vars['helplist']): ?>
	<div class="admin_list_no_info">没有任何信息！</div>
	<?php endif; ?>	
<table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
        <input name="ButADD" type="button" class="admin_submit" id="ButADD" value="添加"  onclick="window.location='?act=add'"/>
		<input name="ButDel" type="button" class="admin_submit" id="ButDel"  value="删除所选"/>
		</td>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "标题"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="标题">标题</li>
														<li id="2" title="帮助ID">帮助ID</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
				<input name="act" type="hidden" value="list" />
				<input type="submit" name="" class="sbt" id="sbt" value="搜索"/>
				</div>
				<div class="clear"></div>
		  </div>
		  </form>
		  <script type="text/javascript">$(document).ready(function(){showmenu("#key_type_cn","#sehmenu","#key_type");});	</script>
	    </td>
      </tr>
  </table>
<div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>