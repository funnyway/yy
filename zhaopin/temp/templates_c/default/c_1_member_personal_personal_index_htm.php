<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:52 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type="text/javascript" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
//��������������ְλ����Ӧ
$(".mli .imgbox").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
$(".imgbox").click(function(){
	window.location.href="personal_apply.php?act="+$(this).attr("mark");
});
$.get("?act=ajax_get_interest_jobs&pid="+$(".myresume").first().attr("pid"), function(result){
    $("#interest_jobs_list").html(result);
  });
select_resume(".titspan","150px");
function select_resume(menuId,width){
	$(menuId).click(function(){
		var menuList = $(this).next(".menu");
		$(menuList).css("width",width);
		$(menuList).slideDown('fast');
		//���ɱ���
		$(menuId).parent("div").before("<div class=\"menu_bg_layer\"></div>");
		$(".menu_bg_layer").height($(document).height());
		$(".menu_bg_layer").css({ width: $(document).width(), position: "absolute", left: "0", top: "0" , "z-index": "0", "background-color": "#ffffff"});
		$(".menu_bg_layer").css("opacity","0");
		$(".menu_bg_layer").click(function(){
			$(".menu_bg_layer").remove();
			$(menuList).slideUp("fast");
			$(menuId).parent("div").css("position","");
		});
	});

	$(".menu li").click(function(){
		var id = $(this).attr("id");
		var title = $(this).attr("title");
		$(menuId).html(title);
		$(".menu").slideUp('fast');
		$(".menu_bg_layer").remove();
		$(".myresume").css("display","none");
		$("#resume_box_"+$(this).attr("id")).css("display","block");
		$.get("?act=ajax_get_interest_jobs&pid="+id, function(result){
		    $("#interest_jobs_list").html(result);
		  });
	});
}
$(".resume_privacy").click(function(){
	var pid = $(this).attr("pid");
	dialog("��˽����","url:personal_ajax.php?act=privacy&pid="+pid,"500px","auto","","");
});
$(".tpl").click(function(){
	var pid = $(this).attr("pid");
	dialog("����ģ��","url:personal_ajax.php?act=tpl&pid="+pid,"610px","auto","","");
});
$(".del_resume").click(function(){
	var pid = $(this).attr("pid");
	dialog("ɾ������","url:personal_ajax.php?act=del_resume&pid="+pid,"350px","auto","","");
});
$(".refresh_resume").click(function(){
	var pid = $(this).attr("pid");
	$.get("personal_ajax.php?act=refresh_resume&id="+pid,function(result){
		if(result=="1"){
			alert_dialog("success:ˢ�³ɹ�","","","","");
			location.reload();
		}else{
			alert_dialog("fail:"+result,"300px","","","");
		}
	});
});
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a></div>
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
		  <div class="pindex-info">
		  		<div class="leftbox">
				  <div class="">
				  	<?php if ($this->_vars['user']['avatars'] == ""): ?>
				  	<img name="" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/06.jpg" width="100" height="100" alt="" />
				  	<?php else: ?>
				  	<img name="" src="<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" width="100" height="100" alt="" />
				  	<?php endif; ?>
				  </div>
				  <a href="personal_user.php?act=avatars"  class="edit">�޸�ͷ��</a>
		  		</div>
				<div class="cbox">
				  	<div class="name  h1-title"><?php echo $this->_vars['user']['username']; ?>
<span>(uid:<?php echo $this->_vars['user']['uid']; ?>
)</span></div>
					<div class="txt">
					<?php if ($this->_vars['sms']['open'] == "1"): ?>
						<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
						<span class="m">�ֻ���֤��</span>&nbsp;&nbsp;<span style="color:#009900">����֤</span>&nbsp;&nbsp;&nbsp;<?php else: ?><span class="m n">�ֻ���֤��</span>&nbsp;&nbsp;<a href="personal_user.php?act=authenticate"><span style="color:#FF0000">δ��֤</span></a>&nbsp;&nbsp;&nbsp;
						<?php endif;  echo $this->_vars['user']['mobile']; ?>
<br />
					<?php endif; ?>
					<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
					<span class="e">������֤��</span>&nbsp;&nbsp;<span style="color:#009900">����֤</span>&nbsp;&nbsp;&nbsp;<?php else: ?><span class="e n">������֤��</span>&nbsp;&nbsp;<a href="personal_user.php?act=authenticate"><span style="color:#FF0000">δ��֤</span></a>&nbsp;&nbsp;&nbsp;<?php endif;  echo $this->_vars['user']['email']; ?>
<br />
 					ϵͳ��Ϣ�� δ�鿴 <?php if ($this->_vars['msg_total1'] > 0): ?><span><a style="color:#FF0000" href="personal_user.php?act=pm&msgtype=1">(<?php echo $this->_vars['msg_total1']; ?>
)</a></span><?php else: ?><a href="personal_user.php?act=pm&msgtype=1">(0)</a><?php endif; ?>&nbsp;&nbsp;�Ѳ鿴 <?php if ($this->_vars['msg_total2'] > 0): ?><span><a style="color:#FF0000" href="personal_user.php?act=pm&msgtype=1">(<?php echo $this->_vars['msg_total2']; ?>
)</a></span><?php else: ?><a href="personal_user.php?act=pm&msgtype=1">(0)</a><?php endif; ?><br />
					<a href="personal_user.php?act=userprofile"  class="edit">�༭��������</a>
					</div>
				</div>
				<div class="rbox">
				  <div class="mli">
				  	<div class="imgbox" mark="apply_jobs">
					  <div class="count"><?php echo $this->_vars['count_apply']; ?>
</div>
					  <div class="txt">������ְλ</div>
					</div>
				  </div>
				  <div class="mli">
				  	<div class="imgbox" mark="interview">
					  <div class="count"><?php echo $this->_vars['count_interview']; ?>
</div>
					  <div class="txt">��������</div>
					</div>
				  </div>
				  <div class="clear"></div>
				</div>
				<div class="clear"></div>
	</div>
	<?php if ($this->_vars['my_resume']): ?>
	<?php if (isset($this->_sections['list'])) unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($this->_vars['my_resume']) ? count($this->_vars['my_resume']) : max(0, (int)$this->_vars['my_resume']);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
	$this->_sections['list']['total'] = $this->_sections['list']['loop'];
	if ($this->_sections['list']['total'] == 0)
		$this->_sections['list']['show'] = false;
} else
	$this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

		for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
			 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
			 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']	  = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']	   = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
  <div class="myresume" pid="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
" id="resume_box_<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
" <?php if ($this->_sections['list']['index'] > 0): ?>style="display:none"<?php endif; ?>>
  	<div class="lbox">
  		<div style="position:relateve;">
     	 	<span class="titspan h1-title" style="cursor:pointer;"><?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['title']; ?>
</span>
     	 	<div class="menu" id="menu<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
">
          		<ul>
          			<?php if (count((array)$this->_vars['my_resume'])): foreach ((array)$this->_vars['my_resume'] as $this->_vars['li']): ?>
          			<li id="<?php echo $this->_vars['li']['id']; ?>
" title="<?php echo $this->_vars['li']['title']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</li>
          			<?php endforeach; endif; ?>
          		</ul>
          	</div>
        </div>
	<div class="txt">
	��ʵ������<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['fullname']; ?>
<br />
	  ����ʱ�䣺<?php echo $this->_run_modifier($this->_vars['my_resume'][$this->_sections['list']['index']]['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
<br />
	  ���״̬��<?php if ($this->_vars['my_resume'][$this->_sections['list']['index']]['audit'] == "1"): ?><span style="color:#009900">���ͨ��</span><?php elseif ($this->_vars['my_resume'][$this->_sections['list']['index']]['audit'] == "2"): ?><span style="color:#FF0000">�����</span><?php else: ?><span style="color:#FF0000">���δͨ��</span><?php endif; ?><br />
	  �����<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['click']; ?>
��
	  </div>
	</div>
	<div class="cbox">
		<div class="imgbox1-<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['complete_percent']; ?>
"></div><!--imgbox1-40 ��40%   imgbox1-55��55%-->	
	    <div class="imgboxtit">���������ȣ�<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['complete_percent']; ?>
%</div>
	</div>
	<div class="cbox">
		<div class="imgbox2-<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['level']; ?>
"></div><!--imgbox2-1 �ǲ�   imgbox2-2 ��  imgbox2-3 ��-->		
	    <div class="imgboxtit">��������</div>
	</div>
	<div class="rbox">
		<div class="but">
			<a class="refresh_resume" pid="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
" href="javascript:void(0);">ˢ�¼���</a>
			<a href="personal_resume.php?act=edit_resume&pid=<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
">�޸ļ���</a>
			<a target="_blank" href="<?php echo $this->_run_modifier("QS_jobslist,jobcategory:" . $this->_vars['my_resume'][$this->_sections['list']['index']]['interestjobs'] . "", 'qishi_url', 'plugin', 1); ?>
" class="o">ƥ��ְλ</a>
		</div>	
	    <div class="bottomlink link_lan"><a target="_blank" href="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['resume_url']; ?>
">Ԥ������</a><a class="resume_privacy" pid="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
" href="javascript:void(0);">��˽����</a><a class="tpl" pid="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
" href="javascript:void(0);">����ģ��</a><a href="javascript:void(0);" class="del_resume" pid="<?php echo $this->_vars['my_resume'][$this->_sections['list']['index']]['id']; ?>
">ɾ������</a></div>
	</div>
	<div class="clear"></div>
</div>
<?php endfor; endif; ?>
<?php else: ?>
<div class="emptytip">����û�д�����������ȥ���������ɣ�</div>
<?php endif; ?>

 	<div class="myrec link_lan">
	  <div class="tit h1-title">Ϊ���Ƽ���ְλ</div>
	  <div class="more"><a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
"  target="_blank">����ְλ</a></div>
	  <div class="clear"></div>	 
	   
	   
	  <div class="listtit">
	  <div class="listt1"><strong>ְλ����</strong></div>
	  <div class="listt2"><strong>��˾����</strong></div>
	  <div class="listt3"><strong>�����ص�</strong></div>
	  <div class="listt4"><strong>����</strong></div>
	  <div class="listt5"><strong>��������</strong></div>
	  <div class="clear"></div>
	  </div>
	  <div id="interest_jobs_list"></div>
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
