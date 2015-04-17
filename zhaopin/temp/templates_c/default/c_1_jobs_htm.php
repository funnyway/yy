<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_link.php'); $this->register_function("qishi_link", "tpl_function_qishi_link",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_ad.php'); $this->register_function("qishi_ad", "tpl_function_qishi_ad",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 12:32 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><?php echo tpl_function_qishi_pageinfo(array('set' => "�б���:page,����:QS_jobs"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
">
<meta name="author" content="��ʿCMS" />
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
		// ��ʾ��ҵ
 		$("#jobsTrad").hoverDelay({
		    hoverEvent: function(){
		        $("#divTradCate").show();
		    },
		    outEvent: function(){
                $("#divTradCate").hide();
            }
		});
 		// ��ʾְλ
 		$("#jobsSort").hoverDelay({
		    hoverEvent: function(){
		        $("#divJobCate").show();
		        var dx = $("#divJobCate").offset().left; // ��ȡ�������x����
		        var dy = $("#divJobCate").offset().top; // ��ȡ�������y����
		        var dwidth = $("#divJobCate").outerWidth(true); // ��ȡ������Ŀ��
		        var dheight = $("#divJobCate").outerHeight(true); // ��ȡ������ĸ߶�
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
		        var lasty = dy + dheight; // ���ϵ�����ĸ߶Ȼ�ȡ���������±ߵ�y����
	 			$("#divJobCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				var sy = that.offset().top; // ��ȡ��ǰli��y����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					var sheight = tharsub.outerHeight(true); // ��ȡ����������ĸ߶�
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
 		// ��ʾ����
 		$("#jobsCity").hoverDelay({
		    hoverEvent: function(){
		        $("#divCityCate").show();
		        var dx = $("#divCityCate").offset().left; // ��ȡ�������x����
		        var dwidth = $("#divCityCate").outerWidth(true); // ��ȡ������Ŀ��
		        var lastx = dx + dwidth; // ���ϵ�����Ŀ�Ȼ�ȡ���������ұߵ�x����
	 			$("#divCityCate li").each(function(index, el) {
	 				var that = $(this);
	 				var sx = that.offset().left; // ��ȡ��ǰli��x����
	 				that.hoverDelay({
					    hoverEvent: function(){
					        if(that.find('.subcate').length > 0) {
			 					that.addClass('selected');
			 					var tharsub = that.find('.subcate');
			 					var thap = that.find('p');
			 					thap.css("border-bottom","0px");
			 					var swidth = tharsub.outerWidth(true); // ��ȡ����������Ŀ��
			 					if((lastx - sx) < swidth) { // �ж�li�뵯�������ұߵľ����Ƿ��������������Ŀ��
			 						tharsub.css("left",-265); // ���С�ھ͸ı�����������x�����λ��
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
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_run_modifier("QS_jobs", 'qishi_url', 'plugin', 1); ?>
">��Ƹ��Ϣ</a>
</div>
<div class="jobsearch">
	 <div class="jobnav">
	 	<span>������ʽ : </span>
	 	<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" class="select">ȫ������</a>
		<a href="<?php echo $this->_run_modifier("QS_street", 'qishi_url', 'plugin', 1); ?>
">����·����</a>
		<a href="<?php echo $this->_run_modifier("QS_jobtag", 'qishi_url', 'plugin', 1); ?>
" >����ǩ����</a>
	 </div>
	 <div class="jobmain" id="searckeybox">
	 	<div class="box" id="jobsSort">
	 		<div class="itemT">
	 			<span id="jobText">��ѡ��ְλ���</span><i></i>
	 		</div>
	 		<div style="display:none;" id="divJobCate" class="divJobCate">
	 			<table class="jobcatebox">
	 				<div class="acquired">
		 				<div class="l">��ѡ</div>
		 				<div class="c" id="jobAcq"></div>
		 				<div class="r">
		 					<div class="empty" id="jobEmpty"></div>
		 					<div class="sure" id="jobSure">ȷ��</div>
		 					<div class="container" id="jobdropcontent">
								<div class="content">����ѡ���Ѵ����ޣ�5�<br>������ȷ���������Ƴ�����ѡ��</div>
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
	 			<span id="tradText">��ѡ����ҵ���</span><i></i>
	 		</div>
	 		<div id="divTradCate" class="infoList divIndCate" style="display:none">
	 			<div class="acquired">
	 				<div class="l">��ѡ</div>
	 				<div class="c" id="tradAcq"></div>
	 				<div class="r">
	 					<div class="empty" id="tradEmpty"></div>
	 					<div class="sure" id="tradSure">ȷ��</div>
	 					<div class="container" id="tradropcontent">
							<div class="content">����ѡ���Ѵ����ޣ�5�<br>������ȷ���������Ƴ�����ѡ��</div>
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
	 			<span id="cityText">��ѡ���������</span><i></i>
	 		</div>
	 		<div style="display:none;left:-544px;" id="divCityCate" class="divJobCate">
	 			<table class="jobcatebox">
	 				<div class="acquired">
		 				<div class="l">��ѡ</div>
		 				<div class="c" id="cityAcq"></div>
		 				<div class="r">
		 					<div class="empty" id="cityEmpty"></div>
		 					<div class="sure" id="citySure">ȷ��</div>
		 					<div class="container" id="citydropcontent">
								<div class="content">����ѡ���Ѵ����ޣ�5�<br>������ȷ���������Ƴ�����ѡ��</div>
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
	 		<input type="text" id="searckey" name="key" value="������ؼ���" />
	 		<input type="hidden" value="" name="wage">
	 		<input type="hidden" value="" name="education">
	 		<input type="hidden" value="" name="experience">
	 		<input type="hidden" value="" name="nature">
	 		<input type="hidden" value="" name="settr">
	 		<input type="hidden" value="" name="sort">
	 		<input type="hidden" value="1" name="page">
	 	</div>
	 	<div class="btnsearch" id="btnsearch">�� ��</div>
	 	<a class="more" id="showmoreoption" href="javascript:;"><span>��������</span><i></i></a>
	 	<div class="clear"></div>
	 </div>
</div>
<div class="searoptions" id="searoptions">
	<div class="list"><div class="tit">ְλ��н��</div><div class="option" id="jobswage"></div></div>
	<div class="list"><div class="tit">ѧ��Ҫ��</div><div class="option" id="jobseducation"></div></div>
	<div class="list"><div class="tit">�������飺</div><div class="option" id="jobsexperience"></div></div>
	<div class="list"><div class="tit">�������ʣ�</div><div class="option" id="jobsnature"></div></div>
	<div class="list">
		<div class="tit">����ʱ�䣺</div>
		<div class="option" id="jobsuptime">
			<a href="javascript:void(0);" class="opt" id="settr-3">3����</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">7����</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">15����</a>
			<a href="javascript:void(0);" class="opt" id="settr-3">30����</a>
		</div>
	</div>
</div>
<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:6,��������:jobsbanner,�б���:ad,���ֳ���:10"), $this);?>
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
		<span class="slect">�Ƽ�ְλ</span><span>������Ƹ</span><span>����ְλ</span>
		<div class="more">
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank">�����Ƽ�ְλ>></a>
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank" style="display:none">�������ְλ>></a>
			<a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
" target="_blank" style="display:none">��������ְλ>></a>
		</div>
		<div class="clear"></div>
	</div>
	<!-- �Ƽ�ְλ -->
	<div class="info">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobslist,��ʾ��Ŀ:30,��ַ�:...,ְλ������:6,��ҵ������:16,�Ƽ�:1,����:rtime>desc"), $this);?>
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
" target="_blank"><font style="color:#0D69CB;">+more</font><br>�鿴����</a></div>
		<?php endif; ?>
	</div>
	<!-- ������Ƹ -->
	<div class="info" style="display:none">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobslist,��ʾ��Ŀ:30,��ַ�:...,ְλ������:6,��ҵ������:16,������Ƹ:1,����:rtime>desc"), $this);?>
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
" target="_blank"><font style="color:#0D69CB;">+more</font><br>�鿴����</a></div>
		<?php endif; ?>
	</div>
	<!-- ����ְλ -->
	<div class="info" style="display:none">
		<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobslist,��ʾ��Ŀ:30,��ַ�:...,ְλ������:6,��ҵ������:16,����:rtime>desc"), $this);?>
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
" target="_blank"><font style="color:#0D69CB;">+more</font><br>�鿴����</a></div>
		<?php endif; ?>
	</div>
</div>
	<div class="f_link" style="_width:1000px;">
		<div class="job_box">
				<div class="box_tit">
					<div class="tit">��������</div> <div class="more link_bk"><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
link/add_link.php" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<?php echo tpl_function_qishi_link(array('set' => "�б���:link,��ʾ��Ŀ:100,��������:QS_jobs,����:1"), $this);?>
					<div class="link_name link_bk">
							<?php if (count((array)$this->_vars['link'])): foreach ((array)$this->_vars['link'] as $this->_vars['list']): ?>
							<a style="word_link" href="<?php echo $this->_vars['list']['link_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a>
							<?php endforeach; endif; ?>
							<?php echo tpl_function_qishi_link(array('set' => "�б���:imglink,��ʾ��Ŀ:14,��������:QS_jobs,����:2"), $this);?>
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
