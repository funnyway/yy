<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 15:35 ?D1ú±ê×?ê±?? */ ?>
<script type="text/javascript">
$(document).ready(function()
{
//会员中心顶部搜索职位简历切换 
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
//会员中心顶部搜索职位简历切换 点击选择触发事件
$("#usertopselectbox .selmenu").click(function(){

		var txt=$(this).text();
		
		if (txt=="简历")
		{
		$("#topsotype").val('2');
		$("#seltxt").text('简历');
		$("#selmenu").text('职位');
		$("#selmenu").hide();
		}
		else
		{
		$("#topsotype").val('1');
		$("#seltxt").text('职位');
		$("#selmenu").text('简历');
		$("#selmenu").hide();
		}
});
//所有提交按钮效果
$("input[type='submit'],input[type='button']").hover(
  function () {
    $(this).addClass("hover");
  },
  function () {
    $(this).removeClass("hover");
  }
);
//所有多选按钮效果
$(".input_checkbox,.input_checkbox_add").hover(
  function () {
    $(this).addClass("h");
  },
  function () {
    $(this).removeClass("h");
  }
);
//多选
$('#chk').click(function(){
	$(this).parents("form").find("input[type=checkbox]").attr('checked',$("#chk").attr('checked'))
});
//信息列表背景变色
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
		  <div class="tit"><div class="t i1">我的大赛</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "baoming"): ?> class="h"<?php endif; ?>><a href="dasai.php?act=baoming">我要报名</a></li>
				<li<?php if ($_GET['act'] == "photo"): ?> class="h"<?php endif; ?>><a href="dasai.php?act=photo">上传照片</a></li>
				<li<?php if ($_GET['act'] == "dasaixinxi"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=resume_list">大赛信息</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox">
		  <div class="tit"><div class="t i1">简历管理</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "make1"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=make1">创建简历</a></li>
				<li<?php if ($_GET['act'] == "resume_list"): ?> class="h"<?php endif; ?>><a href="personal_resume.php?act=resume_list">我的简历</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox">
		  <div class="tit"><div class="t i2">求职管理</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "interview"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=interview">面试邀请</a></li>
				<li<?php if ($_GET['act'] == "favorites"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=favorites">收藏夹</a></li>
				<li<?php if ($_GET['act'] == "apply_jobs"): ?> class="h"<?php endif; ?>><a href="personal_apply.php?act=apply_jobs">已申请的职位</a></li>
				</ul>
			</div>
		</div>
		<div class="meunbox last">
		  <div class="tit"><div class="t i3">账号管理</div></div>
		  	<div class="linktxt">
				<ul>
				<li<?php if ($_GET['act'] == "userprofile"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=userprofile">基本资料</a></li>
				<li<?php if ($_GET['act'] == "password_edit"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=password_edit">密码修改</a></li>
				<li<?php if ($_GET['act'] == "authenticate"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=authenticate">安全认证</a></li>
				<li<?php if ($_GET['act'] == "pm"): ?> class="h"<?php endif; ?>><a href="personal_user.php?act=pm">我的消息</a></li>
				<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">安全退出</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>