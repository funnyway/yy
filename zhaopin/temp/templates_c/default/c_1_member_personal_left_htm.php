<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 15:35 ?D1��������?����?? */ ?>
<script type="text/javascript">
$(document).ready(function()
{
//��Ա���Ķ�������ְλ�����л� 
$("#usertopselectbox").hover(
  function () {
  $(this).find(".#selmenu").show();
  },
  function () {
    $(this).find("#selmenu").hide();
  }
);
$(".leftmenu .meunbox li[class!='h']").hover(
  function () {
      $(this).css("background-color","#F5F5F5");
  },
  function () {
     $(this).css("background-color","#FFFFFF");
  }
);
//��Ա���Ķ�������ְλ�����л� ���ѡ�񴥷��¼�
$("#usertopselectbox .selmenu").click(function(){

		var txt=$(this).text();
		
		if (txt=="����")
		{
		$("#topsotype").val('2');
		$("#seltxt").text('����');
		$("#selmenu").text('ְλ');
		$("#selmenu").hide();
		}
		else
		{
		$("#topsotype").val('1');
		$("#seltxt").text('ְλ');
		$("#selmenu").text('����');
		$("#selmenu").hide();
		}
});
//�����ύ��ťЧ��
$("input[type='submit'],input[type='button']").hover(
  function () {
    $(this).addClass("hover");
  },
  function () {
    $(this).removeClass("hover");
  }
);
//���ж�ѡ��ťЧ��
$(".input_checkbox,.input_checkbox_add").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
//��ѡ
$('#chk').click(function(){
	$(this).parents("form").find("input[type=checkbox]").attr('checked',$("#chk").attr('checked'))
});
//��Ϣ�б�����ɫ
$(".userliststyle").hover(
  function () {
    $(this).css('background-color','#FCFCFC');
  },
  function () {
    $(this).css('background-color','#FFFFFF');
  }
);
});
</script>

<div class="meun1">
  	<div class="meun2">
		<div class="meunbox">
		  <div class="tit"><div class="t i1">�ҵĴ���</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "baoming"): ?> class="h"<?php endif; ?>><a href="dasai.php?act=baoming">��Ҫ����</a></li>
				<li<?php if ($_GET['act'] == "photo"): ?> class="h"<?php endif; ?>><a href="dasai.php?act=photo">�ϴ���Ƭ</a></li>
				<li<?php if ($_GET['act'] == "dasaixinxi"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=resume_list">������Ϣ</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox">
		  <div class="tit"><div class="t i1">��������</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "make1"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=make1">��������</a></li>
				<li<?php if ($_GET['act'] == "resume_list"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=resume_list">�ҵļ���</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox">
		  <div class="tit"><div class="t i2">��ְ����</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "interview"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=interview">��������</a></li>
				<li<?php if ($_GET['act'] == "favorites"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=favorites">�ղؼ�</a></li>
				<li<?php if ($_GET['act'] == "apply_jobs"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=apply_jobs">�������ְλ</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox last">
		  <div class="tit"><div class="t i3">�˺Ź���</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "userprofile"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=userprofile">��������</a></li>
				<li<?php if ($_GET['act'] == "password_edit"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=password_edit">�����޸�</a></li>
				<li<?php if ($_GET['act'] == "authenticate"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=authenticate">��ȫ��֤</a></li>
				<li<?php if ($_GET['act'] == "pm"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=pm">�ҵ���Ϣ</a></li>
				<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">��ȫ�˳�</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>