<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:36 ?D1��������?����?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	//�������ȡ��	
	$("#ButDel").click(function(){
		if (confirm('��ȷ��Ҫɾ����'))
		{
			$("form[name=form1]").submit()
		}
	});
	//�����б�����
	$(".list .txt").each(function(i){
	var li=$(this).children(".select");
	var htm="<a href=\""+li.attr("href")+"\" class=\""+li.attr("class")+"\">"+li.text()+"</a>";
	li.detach();
	$(this).prepend(htm);
	});
	
});
</script>
<div class="admin_main_nr_dbox">

<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>

<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
ϵͳ�����Զ����һ����ǰ�Ļ�Ա��־��
</p>
</div>



<div class="seltpye_y">

	<div class="tit link_lan">
	<strong><?php echo $this->_vars['pageheader']; ?>
</strong><span>(���ҵ�<?php echo $this->_vars['total']; ?>
��)</span>
	<a href="?">[�ָ�Ĭ��]</a>
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
	  <div class="t">��־����</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("log_utype:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_utype'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("log_utype:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_utype'] == "1"): ?>class="select"<?php endif; ?>>��ҵ��Ա</a>
		<a href="<?php echo $this->_run_modifier("log_utype:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_utype'] == "2"): ?>class="select"<?php endif; ?>>���˻�Ա</a> 
		<a href="<?php echo $this->_run_modifier("log_utype:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_utype'] == "3"): ?>class="select"<?php endif; ?>>��ͷ����</a> 
		<a href="<?php echo $this->_run_modifier("log_utype:4", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_utype'] == "4"): ?>class="select"<?php endif; ?>>��ѵ����</a> 
	  </div>
    </div>
	<div class="list">
	  <div class="t">����ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("settr:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("settr:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("settr:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("settr:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("settr:180", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "180"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("settr:360", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "360"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	<div class="list">
	  <div class="t">��־����</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("log_type:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("log_type:1000", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1000"): ?>class="select"<?php endif; ?>>ע��</a>
		<a href="<?php echo $this->_run_modifier("log_type:1001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1001"): ?>class="select"<?php endif; ?>>��¼</a>
		<a href="<?php echo $this->_run_modifier("log_type:1003", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1003"): ?>class="select"<?php endif; ?>>�޸��ʺ�״̬</a>
		<a href="<?php echo $this->_run_modifier("log_type:1004", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1004"): ?>class="select"<?php endif; ?>>�޸�����</a>
		<a href="<?php echo $this->_run_modifier("log_type:1005", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1005"): ?>class="select"<?php endif; ?>>�޸ĸ�������</a>
		<a href="<?php echo $this->_run_modifier("log_type:1006", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1006"): ?>class="select"<?php endif; ?>>�޸ĸ���ͷ��</a>


		
		<a href="<?php echo $this->_run_modifier("log_type:2001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2001"): ?>class="select"<?php endif; ?>>���ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:2002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2002"): ?>class="select"<?php endif; ?>>�޸�ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:2003", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2003"): ?>class="select"<?php endif; ?>>ɾ��ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:2004", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2004"): ?>class="select"<?php endif; ?>>ˢ��ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:2005", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2005"): ?>class="select"<?php endif; ?>>�޸�ְλ״̬</a>
		<a href="<?php echo $this->_run_modifier("log_type:2006", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2006"): ?>class="select"<?php endif; ?>>�鿴ְλ����</a>
		<a href="<?php echo $this->_run_modifier("log_type:2007", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2007"): ?>class="select"<?php endif; ?>>����ְλ</a>


		<a href="<?php echo $this->_run_modifier("log_type:3001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3001"): ?>class="select"<?php endif; ?>>���Ӷ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:3002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3002"): ?>class="select"<?php endif; ?>>ȡ������</a>
		<a href="<?php echo $this->_run_modifier("log_type:3003", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3003"): ?>class="select"<?php endif; ?>>�������</a>
		<a href="<?php echo $this->_run_modifier("log_type:3005", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3005"): ?>class="select"<?php endif; ?>>�ӳ��ƹ�ʱ��</a>
		<a href="<?php echo $this->_run_modifier("log_type:3006", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3006"): ?>class="select"<?php endif; ?>>ȡ���ƹ�</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:4001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "4001"): ?>class="select"<?php endif; ?>>���ؼ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:4002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "4002"): ?>class="select"<?php endif; ?>>ɾ�����ؼ���</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:5001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "5001"): ?>class="select"<?php endif; ?>>��ӵ��˲ſ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:5002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "5002"): ?>class="select"<?php endif; ?>>ɾ���˲ſ�</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:6001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "6001"): ?>class="select"<?php endif; ?>>������������</a>
		<a href="<?php echo $this->_run_modifier("log_type:6002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "6002"): ?>class="select"<?php endif; ?>>ɾ����������</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:7001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "7001"): ?>class="select"<?php endif; ?>>��ӷ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:7002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "7002"): ?>class="select"<?php endif; ?>>ɾ������</a>
		<a href="<?php echo $this->_run_modifier("log_type:7003", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "7003"): ?>class="select"<?php endif; ?>>�ٱ���Ϣ</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:8001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8001"): ?>class="select"<?php endif; ?>>�޸���ҵ��Ϣ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8002"): ?>class="select"<?php endif; ?>>�ϴ�Ӫҵִ��</a>
		<a href="<?php echo $this->_run_modifier("log_type:8003", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8003"): ?>class="select"<?php endif; ?>>�ϴ�logo</a>
		<a href="<?php echo $this->_run_modifier("log_type:8004", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8004"): ?>class="select"<?php endif; ?>>ɾ��logo</a>
		<a href="<?php echo $this->_run_modifier("log_type:8005", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8005"): ?>class="select"<?php endif; ?>>��ͨ���ӵ�ͼ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8006", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8006"): ?>class="select"<?php endif; ?>>���õ��ӵ�ͼ����</a>
		<a href="<?php echo $this->_run_modifier("log_type:8007", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8007"): ?>class="select"<?php endif; ?>>�޸���ҵģ��</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:9001", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9001"): ?>class="select"<?php endif; ?>>���ֲ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:9002", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9002"): ?>class="select"<?php endif; ?>>�����ײͲ���</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:1101", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1101"): ?>class="select"<?php endif; ?>>��������</a>
		<a href="<?php echo $this->_run_modifier("log_type:1102", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1102"): ?>class="select"<?php endif; ?>>ˢ�¼���</a>
		<a href="<?php echo $this->_run_modifier("log_type:1103", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1103"): ?>class="select"<?php endif; ?>>ɾ������</a>
		<a href="<?php echo $this->_run_modifier("log_type:1104", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1104"): ?>class="select"<?php endif; ?>>���ü�����˽</a>
		<a href="<?php echo $this->_run_modifier("log_type:1105", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1105"): ?>class="select"<?php endif; ?>>�޸ļ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:1106", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1106"): ?>class="select"<?php endif; ?>>���ü���ģ��</a>
		<a href="<?php echo $this->_run_modifier("log_type:1107", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1107"): ?>class="select"<?php endif; ?>>����߼��˲�</a>
		<a href="<?php echo $this->_run_modifier("log_type:1108", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1108"): ?>class="select"<?php endif; ?>>�鿴��������</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:1401", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1401"): ?>class="select"<?php endif; ?>>���˻�Ա����γ�</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:1201", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1201"): ?>class="select"<?php endif; ?>>���ְλ�ղ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:1202", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1202"): ?>class="select"<?php endif; ?>>ɾ��ְλ�ղ�</a>
 		<a href="<?php echo $this->_run_modifier("log_type:1301", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1301"): ?>class="select"<?php endif; ?>>����ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:1302", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1302"): ?>class="select"<?php endif; ?>>ɾ��ְλ����</a>
 		<a href="<?php echo $this->_run_modifier("log_type:1401", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1401"): ?>class="select"<?php endif; ?>>Ԥ����Ƹ��չλ</a>
		
  		<a href="<?php echo $this->_run_modifier("log_type:8100", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8100"): ?>class="select"<?php endif; ?>>���ƻ�����Ϣ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8101", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8101"): ?>class="select"<?php endif; ?>>�޸Ļ�����Ϣ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8102", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8102"): ?>class="select"<?php endif; ?>>�ϴ�����Ӫҵִ��</a>
		<a href="<?php echo $this->_run_modifier("log_type:8103", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8103"): ?>class="select"<?php endif; ?>>�ϴ�����logo</a>
		<a href="<?php echo $this->_run_modifier("log_type:8104", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8104"): ?>class="select"<?php endif; ?>>ɾ������logo</a>
		<a href="<?php echo $this->_run_modifier("log_type:8105", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8105"): ?>class="select"<?php endif; ?>>��ͨ�������ӵ�ͼ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8106", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8106"): ?>class="select"<?php endif; ?>>��ע�������ӵ�ͼ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8107", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8107"): ?>class="select"<?php endif; ?>>��ӽ�ʦ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8108", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8108"): ?>class="select"<?php endif; ?>>�޸Ľ�ʦ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8109", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8109"): ?>class="select"<?php endif; ?>>ɾ����ʦ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8201", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8201"): ?>class="select"<?php endif; ?>>��ӿγ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:8202", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8202"): ?>class="select"<?php endif; ?>>�޸Ŀγ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:8204", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8204"): ?>class="select"<?php endif; ?>>ɾ���γ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:8203", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8203"): ?>class="select"<?php endif; ?>>ˢ�¿γ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:8205", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8205"): ?>class="select"<?php endif; ?>>���Ŀγ�״̬</a>
		<a href="<?php echo $this->_run_modifier("log_type:8206", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8206"): ?>class="select"<?php endif; ?>>�鿴�γ�����</a>
		<a href="<?php echo $this->_run_modifier("log_type:8207", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8207"): ?>class="select"<?php endif; ?>>ɾ���γ�����</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:9101", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9101"): ?>class="select"<?php endif; ?>>��ѵ��Ա���ֲ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:9102", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9102"): ?>class="select"<?php endif; ?>>��ѵ��Ա�ײͲ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:3101", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3101"): ?>class="select"<?php endif; ?>>��ѵ��Ա���Ӷ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:3102", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3102"): ?>class="select"<?php endif; ?>>��ѵ��Աȡ������</a>
		
		<a href="<?php echo $this->_run_modifier("log_type:8500", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8500"): ?>class="select"<?php endif; ?>>���ƹ�������</a>
		<a href="<?php echo $this->_run_modifier("log_type:8501", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8501"): ?>class="select"<?php endif; ?>>�޸Ĺ�������</a>
		<a href="<?php echo $this->_run_modifier("log_type:8502", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8502"): ?>class="select"<?php endif; ?>>���ʷ���ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8504", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8504"): ?>class="select"<?php endif; ?>>����ˢ��ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8503", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8503"): ?>class="select"<?php endif; ?>>�����޸�ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8505", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8505"): ?>class="select"<?php endif; ?>>����ɾ��ְλ</a>
		<a href="<?php echo $this->_run_modifier("log_type:8506", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "8506"): ?>class="select"<?php endif; ?>>��������ְλ״̬</a>
  
		<a href="<?php echo $this->_run_modifier("log_type:9201", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9201"): ?>class="select"<?php endif; ?>>��ͷ���ʻ��ֲ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:9202", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "9202"): ?>class="select"<?php endif; ?>>��ͷ�����ײͲ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:3201", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3201"): ?>class="select"<?php endif; ?>>��ͷ�������Ӷ���</a>
		<a href="<?php echo $this->_run_modifier("log_type:3202", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "3202"): ?>class="select"<?php endif; ?>>��ͷ����ȡ������</a>
 
	  </div>
    </div>
	
	
	<div class="clear"></div>
</div>

 
  <form id="form1" name="form1" method="post" action="?act=del_memberslog">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan">
    <tr>
      <td height="26"  class="admin_list_tit admin_list_first"  width="200">
      <label id="chkAll"><input type="checkbox" name=" " title="ȫѡ/��ѡ" id="chk"/>��Ա��</label></td>
	   <td width="100"  align="center"   class="admin_list_tit">����</td>
      <td width="13%"     align="center"  class="admin_list_tit">����ʱ��</td>
      <td width="10%"   align="center" class="admin_list_tit"> IP </td>
      <td width="10%"   align="center" class="admin_list_tit"> ��¼��ַ </td>
     
      <td   class="admin_list_tit" >����</td>
    </tr>
	  <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
      <tr>
	 
      <td  class="admin_list admin_list_first">
        <input name="id[]" type="checkbox" id="id" value="<?php echo $this->_vars['li']['log_id']; ?>
"/>
		 <?php echo $this->_vars['li']['log_username']; ?>
<span style="color: #CCCCCC">[uid:<?php echo $this->_vars['li']['log_uid']; ?>
]</span>
	    </td>
		 <td  class="admin_list"   align="center">
		 <?php if ($this->_vars['li']['log_utype'] == "1"): ?>��ҵ��Ա<?php endif; ?>
	 	 <?php if ($this->_vars['li']['log_utype'] == "2"): ?>���˻�Ա<?php endif; ?>
	 	 <?php if ($this->_vars['li']['log_utype'] == "3"): ?>��ͷ����<?php endif; ?>
	 	 <?php if ($this->_vars['li']['log_utype'] == "4"): ?>��ѵ����<?php endif; ?>
		</td>
		 <td    class="admin_list"   align="center">
		 <?php echo $this->_run_modifier($this->_vars['li']['log_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>

	    </td>
        <td   class="admin_list"  align="center"><?php echo $this->_vars['li']['log_ip']; ?>
</td>
        <td   class="admin_list"  align="center"><?php echo $this->_vars['li']['log_address']; ?>
</td>
        
        <td   class="admin_list vtip"  title="<?php echo $this->_vars['li']['log_value']; ?>
"><?php echo $this->_vars['li']['log_value']; ?>
</td>
      </tr>
      <?php endforeach; endif; ?>
    </table>
	<?php if (! $this->_vars['list']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>	
<span id="OpPi"></span>
  </form>
<table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
		<input name="" type="button" class="admin_submit" id="ButDel"  value="ɾ����ѡ"/>
				
		<input name="" type="button" class="admin_submit" id="ButPidel"  value="����ɾ��" onClick="window.location='?act=pidel_memberslog'"/>
				</td>
        <td width="305" align="right">
		
		
		
		<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "��Ա��"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="��Ա��">��Ա��</li>
														<li id="2" title="UID">UID</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
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
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>