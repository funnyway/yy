<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:11 ?D1��������?����?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#ButAudit").QSdialog({
	DialogTitle:"��ѡ��",
	DialogContent:"#AuditSet",
	DialogContentType:"id",
	DialogAddObj:"#OpAudit",	
	DialogAddType:"html"	
	});
	//ɾ��
	$("#ButDel").click(function(){
		if (confirm('��ȷ��Ҫɾ����'))
		{
			$("form[name=form1]").attr("action","?act=simple_del");
			$("form[name=form1]").submit()
		}
	});
	//ˢ��
	$("#Butrefresh").click(function(){
			$("form[name=form1]").attr("action","?act=simple_refresh");
			$("form[name=form1]").submit()
	});
	
		
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("simple/admin_simple_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
 
 <div class="toptip">
	<h2>��ʾ��</h2>
	<p>
ϵͳ��ÿ���Զ����������Ϣ�����ڼƻ������б༭������ڡ�
</p>
</div>

 
 
 
 
<div class="seltpye_y">

	<div class="tit link_lan">
	<strong>΢��Ƹ�б�</strong><span>(���ҵ�<?php echo $this->_vars['total']; ?>
��)</span>
	<a href="?act=">[�ָ�Ĭ��]</a>
	<div class="pli link_bk"><u>ÿҳ��ʾ��</u>
	<a href="<?php echo $this->_run_modifier("perpage:10", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "10"): ?>class="select"<?php endif; ?>>10</a>
	<a href="<?php echo $this->_run_modifier("perpage:20", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "20"): ?>class="select"<?php endif; ?>>20</a>
	<a href="<?php echo $this->_run_modifier("perpage:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "30"): ?>class="select"<?php endif; ?>>30</a>
	<a href="<?php echo $this->_run_modifier("perpage:60", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "60"): ?>class="select"<?php endif; ?>>60</a>
	<div class="clear"></div>
	</div>
	</div>	
    <div class="list">
	  <div class="t">���״̬</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("audit:", 'qishi_parse_url', 'plugin', 1); ?>
"  <?php if ($_GET['audit'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("audit:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "1"): ?>class="select"<?php endif; ?>>���ͨ��</a>
		<a href="<?php echo $this->_run_modifier("audit:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "2"): ?>class="select"<?php endif; ?>>�ȴ����</a>
		<a href="<?php echo $this->_run_modifier("audit:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "3"): ?>class="select"<?php endif; ?>>���δͨ��</a>
	  </div>
    </div>
	
	<div class="list">
	  <div class="t">���ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("addtime:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addtime'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("addtime:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addtime'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("addtime:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addtime'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("addtime:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addtime'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	<div class="list">
	  <div class="t">����ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("deadline:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("deadline:0", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "0"): ?>class="select"<?php endif; ?>>�Ѿ�����</a>
		<a href="<?php echo $this->_run_modifier("deadline:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "3"): ?>class="select"<?php endif; ?>>�����ڵ���</a>
		<a href="<?php echo $this->_run_modifier("deadline:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "7"): ?>class="select"<?php endif; ?>>һ���ڵ���</a>
	  </div>
    </div>
	
	<div class="list">
	  <div class="t">ˢ��ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("refreshtime:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['refreshtime'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("refreshtime:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['refreshtime'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("refreshtime:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['refreshtime'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("refreshtime:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['refreshtime'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	 
	
	
	<div class="clear"></div>
</div>

 
  
  <form id="form1" name="form1" method="post" action="?act=simple_audit">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="link_lan" id="list">
    <tr>
      <td height="26" class="admin_list_tit admin_list_first" >
      <label id="chkAll"><input type="checkbox" name=" " title="ȫѡ/��ѡ" id="chk"/>��Ƹְλ</label>
	  </td>
      <td  class="admin_list_tit">��˾����</td>
	   <td width="10%"   class="admin_list_tit"> ���״̬ </td>
      <td width="10%"    align="center" class="admin_list_tit"> ˢ��ʱ�� </td>
      <td width="10%"    align="center" class="admin_list_tit">����ʱ��</td>
      <td width="10%"   align="center" class="admin_list_tit" >��������</td>
      <td width="10%"    align="center" class="admin_list_tit" >����</td>
    </tr>
	  <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
      <tr>
      <td  class="admin_list admin_list_first">
        <input name="id[]" type="checkbox" id="id" value="<?php echo $this->_vars['list']['id']; ?>
"/>    
		<a href="?act=simple_edit&id=<?php echo $this->_vars['list']['id']; ?>
"><?php echo $this->_vars['list']['jobname']; ?>
</a>
	    </td>
		 <td  class="admin_list" >
		<?php echo $this->_vars['list']['comname']; ?>

		 </td>
		  <td  class="admin_list" >
		<?php if ($this->_vars['list']['audit'] == "1"): ?>
		<span style="color:#009900">���ͨ��</span>
		<?php elseif ($this->_vars['list']['audit'] == "2"): ?>
		�ȴ����
		<?php elseif ($this->_vars['list']['audit'] == "3"): ?>
		<span style="color: #999999">���δͨ��</span>
		<?php endif; ?>
		 </td>
        <td align="center"  class="admin_list">
		<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%m-%d  %H:%M"); ?>
		
		</td>
        <td align="center"  class="admin_list">
		<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%m-%d  %H:%M"); ?>

		</td>
        <td align="center"  class="admin_list">
		<?php if ($this->_vars['list']['deadline'] == "0"): ?>
		����
		<?php else: ?>
		<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		<?php endif; ?>
		</td>
        <td align="center"  class="admin_list">
		<a href="?act=simple_edit&id=<?php echo $this->_vars['list']['id']; ?>
">�޸�</a> &nbsp;&nbsp;
		<a href="?act=simple_del&id=<?php echo $this->_vars['list']['id']; ?>
&<?php echo $this->_vars['urltoken']; ?>
" onclick="return confirm('��ȷ��Ҫɾ����')">ɾ��</a></td>
      </tr>
      <?php endforeach; endif; ?>
    </table>
	<span id="OpAudit"></span>
  </form>
	<?php if (! $this->_vars['list']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>	
<table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
        <input name="ButADD" type="button" class="admin_submit" id="ButADD" value="����"  onclick="window.location='?act=simple_add'"/>
		<input name="ButAudit" type="button" class="admin_submit" id="ButAudit" value="���" />
		 <input name="Butrefresh" type="button" class="admin_submit" id="Butrefresh" value="ˢ��" />
		<input name="ButDel" type="button" class="admin_submit" id="ButDel"  value="ɾ��"/>
		</td>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "ְλ"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="ְλ">ְλ</li>
														<li id="2" title="��˾">��˾</li>
														<li id="3" title="�绰">�绰</li>
														<li id="4" title="��ϵ��">��ϵ��</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
				<input name="act" type="hidden" value="" />
				<input type="submit" name="" class="sbt" id="sbt" value="����"/>
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

<div style="display:none" id="AuditSet">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">����ѡ��Ϣ��Ϊ��</strong></td>
    </tr>
	      <tr>
      <td width="27" height="25">&nbsp;</td>
      <td>
                      <label><input name="audit" type="radio" value="1" checked="checked"  />
                      ���ͨ��</label></td>
    </tr>
    <tr>
      <td width="27" height="25">&nbsp;</td>
      <td>
                      <label><input type="radio" name="audit" value="3"  />
                       ���δͨ��</label></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>
	  <input type="submit" name="set_audit" value="ȷ��" class="admin_submit"/>
 </td>
    </tr>
  </table>
  </div>


</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>