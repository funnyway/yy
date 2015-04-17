<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_link.php'); $this->register_function("qishi_link", "tpl_function_qishi_link",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_ad.php'); $this->register_function("qishi_ad", "tpl_function_qishi_ad",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 12:32 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><?php echo tpl_function_qishi_pageinfo(array('set' => "列表名:page,调用:QS_jobs"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
">
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/jobs.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' ></script>
<script src="<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/cache_classify.js" type='text/javascript' charset="utf-8"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.jobs-list.js" type='text/javascript'></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.jobs-search.js" type='text/javascript'></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.hoverDelay.js" type='text/javascript'></script>
<script type="text/javascript">
	$(document).ready(function() {
		allaround('<?php echo $this->_vars['QISHI']['website_dir']; ?>
',"");
		// 显示行业
 		$("#jobsTrad").hoverDelay({
		    hoverEvent: function(){
		        $("#divTradCate").show();
		    },
		    outEvent: function(){
                $("#divTradCate").hide();
            }
		});
 		// 显示职位
 		$("#jobsSort").hoverDelay({
		    hoverEvent: function(){
		        $("#divJobCate").show();
		        var dx = $("#divJobCate").offset().left; // 获取弹出框的x坐标
		        var dy = $("#divJobCate").offset().top; // 获取弹出框的y坐标
		        var dwidth = $("#divJobCate").outerWidth(true); // 获取弹出框的宽度
		        var dheight = $("#divJobCate").outerHeight(true); // 获取弹出框的高度
		        var lastx = dx + dwidth; // 加上弹出框的宽度获取弹出框最右边的x坐标
		        var lasty = dy + dheight; // 加上弹出框的高度获取弹出框最下边的y坐标
	 			$("#divJobCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // 获取当前li的x坐标
	 				var sy = that.offset().top; // 获取当前li的y坐标
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					var swidth = tharsub.outerWidth(true); // 获取三级弹出框的宽度
			 					var sheight = tharsub.outerHeight(true); // 获取三级弹出框的高度
			 					if((lastx - sx) < swidth && (lasty - sy) > sheight) { 
			 						thap.css("border-bottom",0);
			 						tharsub.css("left",-265);
			 					}
			 					if((lastx - sx) > swidth && (lasty - sy) > sheight) { 
			 						thap.css("border-bottom",0);
			 						tharsub.css("left",0); 
			 					}
			 					if((lastx - sx) < swidth && (lasty - sy) < sheight) { 
				 					thap.css({
				 						"border-top": '0px',
				 						"border-bottom": ''
				 					});
			 						tharsub.css("left",-265); 
				 					tharsub.css("top",-(sheight - 2));
			 					}
			 					if((lastx - sx) > swidth && (lasty - sy) < sheight) { 
				 					thap.css({
				 						"border-top": '0px',
				 						"border-bottom": ''
				 					});
			 						tharsub.css("left",0); 
				 					tharsub.css("top",-(sheight - 2));
			 					}
			 					tharsub.show();
			 				} else {
			 					that.find('a').css("color","#f77d40");
			 				}
					    },
					    outEvent: function(){
			                if(that.find('.subcate').length > 0) {
				 				that.removeClass('selected');
				 				that.find('.subcate').hide();
			 				} else {
			 					that.find('a').css("color","#0180cf");
			 				}    
			            }
					});
	 			});
		    },
		    outEvent: function(){
                $("#divJobCate").hide(); 
            }
		});
 		// 显示地区
 		$("#jobsCity").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCate").show();
		        var dx = $("#divCityCate").offset().left; // 获取弹出框的x坐标
		        var dwidth = $("#divCityCate").outerWidth(true); // 获取弹出框的宽度
		        var lastx = dx + dwidth; // 加上弹出框的宽度获取弹出框最右边的x坐标
	 			$("#divCityCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // 获取当前li的x坐标
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // 获取三级弹出框的宽度
			 					if((lastx - sx) < swidth) { // 判断li与弹出框最右边的距离是否大于三级弹出框的宽度
			 						tharsub.css("left",-265); // 如果小于就改变三级弹出框x方向的位置
			 					}
			 					tharsub.show();
			 				} else {
			 					that.find('a').css("color","#f77d40");
			 				}
					    },
					    outEvent: function(){
			                if(that.find('.subcate').length > 0) {
				 				that.removeClass('selected');
				 				that.find('.subcate').hide();
			 				} else {
			 					that.find('a').css("color","#0180cf");
			 				}    
			            }
					});
	 			});
		    },
		    outEvent: function(){
                $("#divCityCate").hide(); 
            }
		});
	});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="page_location link_bk">
当前位置：<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_run_modifier("QS_jobs", 'qishi_url', 'plugin', 1); ?>
">招聘信息</a>
</div>
<div class="jobsearch">
	 <div class="jobnav">
	 	<span>搜索方式 : </span>
	 	<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" class="select">全能搜索</a>
		<a href="<?php echo $this->_run_modifier("QS_street", 'qishi_url', 'plugin', 1); ?>
">按道路搜索</a>
		<a href="<?php echo $this->_run_modifier("QS_jobtag", 'qishi_url', 'plugin', 1); ?>
" >按标签搜索</a>
	 </div>
	 <div class="jobmain" id="searckeybox">
	 	<div class="box" id="jobsSort">
	 		<div class="itemT">
	 			<span id="jobText">请选择职位类别</span><i></i>
	 		</div>
	 		<div style="display:none;" id="divJobCate" class="divJobCate">
	 			<table class="jobcatebox">
	 				<div class="acquired">
		 				<div class="l">已选</div>
		 				<div class="c" id="jobAcq"></div>
		 				<div class="r">
		 					<div class="empty" id="jobEmpty"></div>
		 					<div class="sure" id="jobSure">确定</div>
		 					<div class="container" id="jobdropcontent">
								<div class="content">您的选择已达上限（5项）<br>请点击“确定”，或移除部分选项</div>
								<s><e></e></s>
							</div>
		 				</div>
		 			</div>
	 				<tbody></tbody>
	 			</table>
	 		</div>
	 		<input name="jobs_cn" id="jobs_cn" type="hidden" value="" />
			<input name="jobs_id" id="jobs_id" type="hidden" value="" />
	 	</div>
	 	<div class="box" id="jobsTrad">
	 		<div class="itemT">
	 			<span id="tradText">请选择行业类别</span><i></i>
	 		</div>
	 		<div id="divTradCate" class="infoList divIndCate" style="display:none">
	 			<div class="acquired">
	 				<div class="l">已选</div>
	 				<div class="c" id="tradAcq"></div>
	 				<div class="r">
	 					<div class="empty" id="tradEmpty"></div>
	 					<div class="sure" id="tradSure">确定</div>
	 					<div class="container" id="tradropcontent">
							<div class="content">您的选择已达上限（5项）<br>请点击“确定”，或移除部分选项</div>
							<s><e></e></s>
						</div>
	 				</div>
	 			</div>
	 			<ul class="indcatelist" id="tradList"></ul>
	 		</div>
	 		<input name="trade_cn" id="trade_cn" type="hidden" value="" />
			<input name="trade_id" id="trade_id" type="hidden" value="" />
	 	</div>
	 	<div class="box" id="jobsCity">
	 		<div class="itemT">
	 			<span id="cityText">请选择地区分类</span><i></i>
	 		</div>
	 		<div style="display:none;left:-544px;" id="divCityCate" class="divJobCate">
	 			<table class="jobcatebox">
	 				<div class="acquired">
		 				<div class="l">已选</div>
		 				<div class="c" id="cityAcq"></div>
		 				<div class="r">
		 					<div class="empty" id="cityEmpty"></div>
		 					<div class="sure" id="citySure">确定</div>
		 					<div class="container" id="citydropcontent">
								<div class="content">您的选择已达上限（5项）<br>请点击“确定”，或移除部分选项</div>
								<s><e></e></s>
							</div>
		 				</div>
		 			</div>
	 				<tbody></tbody>
	 			</table>
	 		</div>
            <input id="district_id" type="hidden" value="" name="district_id">
            <input id="district_cn" type="hidden" value="" name="district_cn"/>
	 	</div>
	 	<div class="keybox">
	 		<input type="text" id="searckey" name="key" value="请输入关键字" />
	 		<input type="hidden" value="" name="wage">
	 		<input type="hidden" value="" name="education">
	 		<input type="hidden" value="" name="experience">
	 		<input type="hidden" value="" name="nature">
	 		<input type="hidden" value="" name="settr">
	 		<input type="hidden" value="" name="sort">
	 		<input type="hidden" value="1" name="page">
	 	</div>
	 	<div class="btnsearch" id="btnsearch">搜 索</div>
	 	<a class="more" id="showmoreoption" href="javascript:;"><span>更多条件</span><i></i></a>
	 	<div class="clear"></div>
	 </div>
</div>
<div class="searoptions" id="searoptions">
	<div class="list"><div class="tit">职位月薪：</div><div class="option" id="jobswage"></div></div>
	<div class="list"><div class="tit">学历要求：</div><div class="option" id="jobseducation"></div></div>
	<div class="list"><div class="tit">工作经验：</div><div class="option" id="jobsexperience"></div></div>
	<div class="list"><div class="tit">工作性质：</div><div class="option" id="jobsnature"></div></div>
	<div class="list">
		<div class="tit">更新时间：</div>
		<div class="option" id="jobsuptime">
			<a href="javascript:void(0);" class="opt" id="settr-3">3天内</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">7天内</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">15天内</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">30天内</a>
		</div>
	</div>
</div>
<?php echo tpl_function_qishi_ad(array('set' => "显示数目:6,调用名称:jobsbanner,列表名:ad,文字长度:10"), $this);?>
<?php if ($this->_vars['ad']): ?>
<?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
<div class="jobsad_1000">
<a target="_blank" href="<?php echo $this->_vars['list']['img_url']; ?>
"><img src="<?php echo $this->_vars['list']['img_path']; ?>
" width="1000" height="80"  border="0"></a>
</div>
<?php endforeach; endif; ?>
<?php endif; ?>
<div class="jobsmix" id="jobsmix">
	<div class="tit">
		<span class="slect">推荐职位</span><span>紧急招聘</span><span>最新职位</span>
		<div class="more">
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank">更多推荐职位>></a>
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank" style="display:none">更多紧急职位>></a>
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank" style="display:none">更多最新职位>></a>
		</div>
		<div class="clear"></div>
	</div>
	<!-- 推荐职位 -->
	<div class="info">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:jobslist,显示数目:30,填补字符:...,职位名长度:6,企业名长度:16,推荐:1,排序:rtime>desc"), $this);?>
		<?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
		<div class="list">
			<div class="jobname"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank" style="color:#0D69CB;font-size:14px;"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></div>
			<div class="clear"></div>
			<div class="cominfo">
				<span class="comname"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></span>
				<span class="retime time"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, '%m-%d'); ?>
</span>
			</div>
		</div>
		<?php endforeach; endif; ?>
		<?php if ($this->_vars['jobslist']): ?>
		<div class="list more"><a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank"><font style="color:#0D69CB;">+more</font><br>查看更多</a></div>
		<?php endif; ?>
	</div>
	<!-- 紧急招聘 -->
	<div class="info" style="display:none">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:jobslist,显示数目:30,填补字符:...,职位名长度:6,企业名长度:16,紧急招聘:1,排序:rtime>desc"), $this);?>
		<?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
		<div class="list">
			<div class="jobname"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank" style="color:#0D69CB;font-size:14px;"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></div>
			<div class="clear"></div>
			<div class="cominfo">
				<span class="comname"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></span>
				<span class="retime time"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, '%m-%d'); ?>
</span>
			</div>
		</div>
		<?php endforeach; endif; ?>
		<?php if ($this->_vars['jobslist']): ?>
		<div class="list more"><a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank"><font style="color:#0D69CB;">+more</font><br>查看更多</a></div>
		<?php endif; ?>
	</div>
	<!-- 最新职位 -->
	<div class="info" style="display:none">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:jobslist,显示数目:30,填补字符:...,职位名长度:6,企业名长度:16,排序:rtime>desc"), $this);?>
		<?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
		<div class="list">
			<div class="jobname"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank" style="color:#0D69CB;font-size:14px;"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></div>
			<?php if ($this->_vars['list']['recommend'] == 1): ?>
			<div class="jobtypejian"></div>
			<?php endif; ?>
			<?php if ($this->_vars['list']['emergency'] == 1): ?>
			<div class="jobtypeji"></div>
			<?php endif; ?>
			<div class="clear"></div>
			<div class="cominfo">
				<span class="comname"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></span>
				<span class="retime time"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, '%m-%d'); ?>
</span>
			</div>
		</div>
		<?php endforeach; endif; ?>
		<?php if ($this->_vars['jobslist']): ?>
		<div class="list more"><a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank"><font style="color:#0D69CB;">+more</font><br>查看更多</a></div>
		<?php endif; ?>
	</div>
</div>
	<div class="f_link" style="_width:1000px;">
		<div class="job_box">
				<div class="box_tit">
					<div class="tit">友情链接</div> <div class="more link_bk"><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
link/add_link.php" target="_blank">申请>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<?php echo tpl_function_qishi_link(array('set' => "列表名:link,显示数目:100,调用名称:QS_jobs,类型:1"), $this);?>
					<div class="link_name link_bk">
							<?php if (count((array)$this->_vars['link'])): foreach ((array)$this->_vars['link'] as $this->_vars['list']): ?>
							<a style="word_link" href="<?php echo $this->_vars['list']['link_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a>
							<?php endforeach; endif; ?>
							<?php echo tpl_function_qishi_link(array('set' => "列表名:imglink,显示数目:14,调用名称:QS_jobs,类型:2"), $this);?>
							<?php if ($this->_vars['imglink']): ?>
							<div class="link_img">
								<?php if (count((array)$this->_vars['imglink'])): foreach ((array)$this->_vars['imglink'] as $this->_vars['list']): ?>
								<div class="l_img"><a href="<?php echo $this->_vars['list']['link_url']; ?>
" target="_blank"><img src="<?php echo $this->_vars['list']['link_logo']; ?>
" alt="<?php echo $this->_vars['list']['title']; ?>
" border="0" width="120" height="40" /></a> </div>
								<?php endforeach; endif; ?>
								<div class="clear"></div>
							</div>
							<?php endif; ?>
					</div>
				</div>
			</div>
	</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
