<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 12:30 ?D1��������?����?? */ ?>
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
//�����б�������չ��
$(".morebox").hover(
  function () {
    $(this).find(".morelist").slideDown("fast");
  },
  function () {
    $(this).find(".morelist").slideUp("fast");
  }
);
$(".resume_privacy").live("click",function(){
	var pid = $(this).attr("pid");
	dialog("��˽����","url:personal_ajax.php?act=privacy&pid="+pid,"500px","auto","","");
});
$(".shield_company").live("click",function(){
	var pid = $(this).attr("pid");
	dialog("������ҵ","url:personal_ajax.php?act=shield_company&pid="+pid,"500px","auto","","");
});
$(".tpl").live("click",function(){
	var pid = $(this).attr("pid");
	dialog("����ģ��","url:personal_ajax.php?act=tpl&pid="+pid,"610px","auto","","");
});
$(".del_resume").live("click",function(){
	var pid = $(this).attr("pid");
	dialog("ɾ������","url:personal_ajax.php?act=del_resume&pid="+pid,"350px","auto","","");
});
$(".refresh_resume").live("click",function(){
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
">��Ա����</a> > �ҵļ���</div>

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
	
	  <div class="resumelist">
				<div class="titleH1">
				  <div class="h1-title">�ҵļ���</div>
				</div>
			<?php if ($this->_vars['resume_list']): ?>
			<?php if (count((array)$this->_vars['resume_list'])): foreach ((array)$this->_vars['resume_list'] as $this->_vars['list']): ?>	
			<div class="relist">
				
			  <div class="toptitle">
					<div class="t"><span class="h2-title"><?php echo $this->_vars['list']['title']; ?>
</span><span class="date">ˢ��ʱ�䣺<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
</span></div>
			  </div>
				  
				  <div class="fbox">���״̬��<?php if ($this->_vars['list']['audit'] == "1"): ?><span style="color: #009900">���ͨ��</span><?php elseif ($this->_vars['list']['audit'] == "2"): ?><span style="color: #FF6600">�����</span><?php elseif ($this->_vars['list']['audit'] == "3"): ?><span style="color: #FF0000">���δͨ��</span><?php endif; ?><br />�����ȼ���<?php if ($this->_vars['list']['talent'] == "2"): ?><span style="color:#FF6600">�߼�</span><?php elseif ($this->_vars['list']['talent'] == "3"): ?>�߼�����<?php else: ?>��ͨ<?php endif; ?></div>
				  <div class="fbox">�����ȣ�<?php echo $this->_vars['list']['complete_percent']; ?>
%<span style="color:#FF0000">(<?php if ($this->_vars['list']['level'] == "1"): ?>��<?php elseif ($this->_vars['list']['level'] == "2"): ?>��<?php else: ?>��<?php endif; ?>)</span><br /> ����״̬��<span style="cursor:pointer;" class="resume_privacy" pid="<?php echo $this->_vars['list']['id']; ?>
" id="view_display_<?php echo $this->_vars['list']['id']; ?>
"><?php if ($this->_vars['list']['display'] == "1"): ?>����<?php elseif ($this->_vars['list']['display'] == "2"): ?>����<?php endif; ?></span></div>
				  <div class="fbox">����/���룺<a href="personal_apply.php?act=interview"><?php echo $this->_vars['list']['countinterview']; ?>
</a>/<a href="personal_apply.php?act=apply_jobs"><?php echo $this->_vars['list']['countapply']; ?>
</a><br />����/�����<a href="personal_apply.php?act=attention_me"><?php echo $this->_vars['list']['countdown']; ?>
</a>/<a href="personal_apply.php?act=attention_me"><?php echo $this->_vars['list']['click']; ?>
</a></div>
			  <div class="fbox last">					 	
				 	<div class="buts"><input type="button" class="refresh_resume but100_30lan" value="ˢ�¼���" pid="<?php echo $this->_vars['list']['id']; ?>
"/></div>			 	   
				   		<div class="buts"><input type="button"  class="but100_30hui" value="�޸ļ���" onclick="javascript:location.href='?act=edit_resume&pid=<?php echo $this->_vars['list']['id']; ?>
' "/></div>
						<div class="clear"></div>
					<div class="buts"><input type="button"  class="but100_30hui" value="Ԥ������" onclick="javascript:window.open('<?php echo $this->_vars['list']['resume_url']; ?>
')"/></div>
						<div class="buts">
								<div class="morebox" id="morebox">
									<div class="more">�������</div>						
										<div class="morelist link_bk">
												<div><?php if ($this->_vars['list']['talent'] == "1"): ?><a href="?act=talent_save&pid=<?php echo $this->_vars['list']['id']; ?>
">��������</a><?php endif; ?></div>
												<div><a class="tpl" pid="<?php echo $this->_vars['list']['id']; ?>
" href="javascript:void(0);">����ģ��</a></div>
												<div><a class="resume_privacy" pid="<?php echo $this->_vars['list']['id']; ?>
" href="javascript:void(0);">��˽����</a></div>
												<div><a class="del_resume" pid="<?php echo $this->_vars['list']['id']; ?>
" href="javascript:void(0);">ɾ������</a></div>
										</div>
								</div>
								<script>
									$(document).ready(function() {
										$(".morelist div").hover(function() {
											$(this).addClass('hover');
										}, function() {
											$(this).removeClass('hover');
										});
									});
								</script>
					</div>
						<div class="clear"></div>
			  </div>
				  <div class="clear"></div>
			  
			</div>
			<?php endforeach; endif; ?>
			<?php if ($this->_vars['page']): ?>
		<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
          <tr>
            <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
          </tr>
      </table>
      <?php endif; ?>
			<?php else: ?>
			<div class="emptytip">�Բ���û���ҵ���Ҫ����Ϣ��</div>
			<?php endif; ?>
			 <div class="addbut">
			 <input type="button" name="submitsave" id="submitsave" value="��������" onclick="javascript:location.href='personal_resume.php?act=make1'"  class="but100lan"/>
			 </div>
			 
	         <div class="bottomtip">
		 	   <div class="tp h2-title">С��ʿ</div>
			   ˢ�¼�����ˢ�¼�����ȫ��ѣ�ˢ�º�ʱ��������£���ҵ������������ʱ���������ʾ���ṩӦƸ���ᡣ<br />
��ҵ���Σ�������ļ������뱻ĳ����˾�����������ڸ�����������θù�˾��<br />
ί�м���������ί�к������������ǻ��������ʺ���ְλ�Ĺ�˾Ͷ�����ļ������������Ч����
			 </div> 
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
