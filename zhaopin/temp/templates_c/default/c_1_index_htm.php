<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_link.php'); $this->register_function("qishi_link", "tpl_function_qishi_link",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_news_category.php'); $this->register_function("qishi_news_category", "tpl_function_qishi_news_category",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_help_list.php'); $this->register_function("qishi_help_list", "tpl_function_qishi_help_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_notice_list.php'); $this->register_function("qishi_notice_list", "tpl_function_qishi_notice_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_hotword.php'); $this->register_function("qishi_hotword", "tpl_function_qishi_hotword",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_ad.php'); $this->register_function("qishi_ad", "tpl_function_qishi_ad",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 19:17 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><?php echo tpl_function_qishi_pageinfo(array('set' => "�б���:page,����:QS_index"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
">
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/index.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.lazyload.js" type="text/javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/cache_classify.js" type='text/javascript' charset="utf-8"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.KinSlideshow.min.js" type="text/javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.comtip-min.js" type="text/javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.index.js" type='text/javascript' ></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type='text/javascript' ></script>
<script>
$(document).ready(function()
{
	index("<?php echo $this->_vars['QISHI']['website_dir']; ?>
","<?php echo $this->_vars['QISHI']['site_template']; ?>
");
	get_right_menu(QS_jobs);
});
$(function(){
	$(".ad_box .ad_img:eq(3)").css("margin-right", 0);
	$(".leftMenu li,.leftmenu_box").hover(function(){
		$(this).addClass("hover");
		$(this).find(".category").stop().animate({
			"position":"relative",
			"left":10
		},200);
		$(".leftMenu li").siblings("li").css("border-right-color","#0180CF");
		
	},function(){
		$(this).removeClass("hover");
		$(this).find(".category").stop().animate({
			"position":"relative",
			"left":0
		},200);
		$(".leftMenu li").siblings("li").css("border-right-color","#CCC");
	});
	
})
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	<!-- �������� -->
	<div class="container link_bk">
		<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:12,��������:QS_indextopimg,�б���:ad,���ֳ���:12"), $this);?>
		<?php if ($this->_vars['ad']): ?>
		<?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
		<div class="ad_1000">
			<a target="_blank" href="<?php echo $this->_vars['list']['img_url']; ?>
"><img width="1000" height="60" src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
" /></a>
		</div>
		<?php endforeach; endif; ?>
		<?php endif; ?>
		<!-- ���� -->
		<div class="top">
		<div class="left">
			<div class="category_wrap leftMenu" id="topWrap">
				<div class="h3">ȫ��ְλ����</div>
				<ul>
					<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:category,����:QS_jobs,��ʾ��Ŀ:10"), $this);?>
					<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>	
					<li class="clearfix" id="<?php echo $this->_vars['list']['id']; ?>
">
						<div class="category">
							<p><a href="javascript:void(0);"><?php echo $this->_vars['list']['categoryname']; ?>
</a></p>
							<div class="icon_right">
								<span class="angle_right"></span>
							</div>
						</div>
						<div class="sub_category"></div>
					</li>
					<?php endforeach; endif; ?>
				</ul>
				
			</div>
			<div class="leftmenu_box">
					<div class="show">
					</div>
				</div>
		</div>

		<div class="right">
			<div class="search_main">
				<div class="search_box">
					<div class="lbox">
						<div class="selectbox" id="selectbox">
							<div class="seletxt">ְλ</div>
							<div class="selemenu">����</div>
							<input name="topsotype" id="topsotype" type="hidden" value="1" />
						</div>
						<input type="text" class="search_input" id="index-search-key" name="key" maxlength="25" value="������ؼ���..."  style="color: #CCCCCC" />
					</div>
					<div class="rbox">
						<input type="button" value="" id="index-search-button" class="search_but" />
					</div>
					<div class="clear"></div>
					
					<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.autocomplete.js" type="text/javascript"></script>
					<script language="javascript" type="text/javascript">
					 $(document).ready(function()
					{
						  var a = $('#index-search-key').autocomplete({ 
							serviceUrl:'<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_common.php?act=hotword',
							minChars:1, 
							maxHeight:400,
							width:360,
							zIndex: 1,
							deferRequestBy: 0 
						  });
					
					});
					  </script>
				</div>
				<div class="key_word">
					<p>���Źؼ��֣�
						<?php echo tpl_function_qishi_hotword(array('set' => "��ʾ��Ŀ:8,�б���:list"), $this);?>
						<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
						<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_jobslist,key:", 'cat', 'plugin', 1, $this->_vars['li']['w_word_code']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['li']['w_word']; ?>
</a>
						<?php endforeach; endif; ?>
					</p>
					<p>���ŵ�����
						<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:list,����:QS_district,id:0,��ʾ��Ŀ:10"), $this);?>
						<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
						<a href="<?php echo $this->_run_modifier($this->_run_modifier($this->_run_modifier("QS_jobslist,citycategory:", 'cat', 'plugin', 1, $this->_vars['li']['id']), 'cat', 'plugin', 1, ".0.0"), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['li']['categoryname']; ?>
</a>
						<?php endforeach; endif; ?>
					</p>
				</div>
				<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:4,��������:QS_indexrecommend,�б���:ad"), $this);?>
				<?php if ($this->_vars['ad']): ?>
				<div class="ad_box">
					<?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
					<div class="ad_img">
					<a href="<?php echo $this->_vars['list']['img_url']; ?>
"><img src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
"></a>
					</div>
					<?php endforeach; endif; ?>
					<div class="clear"></div>
				</div>
				<?php endif; ?>
				<div class="jobs_list">
					<div class="list_nav">
						<ul>
							<li listname="newjobs" class="active topjobs">����ְλ</li>
							<li listname="recommendjobs" class="topjobs">�Ƽ�ְλ</li>
							<li listname="emergencyjobs" class="topjobs">������Ƹ</li>
							<li listname="hotjobs" class="topjobs">�����ȵ�</li>
							<li class="last"><a href="<?php echo $this->_run_modifier("QS_jobslist", 'qishi_url', 'plugin', 1); ?>
">���� >></a></li>
							<div class="clear"></div>
						</ul>
						<div class="clear"></div>
					</div>
					<div class="list_content">
						<ul class="newjobs">
							<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobs,��ʾ��Ŀ:6,ְλ������:12,��ҵ������:12,����:rtime>desc"), $this);?>
							<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
							<li>
								<p class="job"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" title="<?php echo $this->_vars['list']['jobs_name_']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></p>
								<p class="company"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" title="<?php echo $this->_vars['list']['companyname_']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></p>
								<p class="date"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</p>
							</li>
							<?php endforeach; endif; ?>
						</ul>
						<ul class="recommendjobs" style="display:none;">
							<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobs,��ʾ��Ŀ:6,ְλ������:12,��ҵ������:12,�Ƽ�:1,����:refreshtime>desc"), $this);?>
							<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
							<li>
								<p class="job"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" title="<?php echo $this->_vars['list']['jobs_name_']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></p>
								<p class="company"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" title="<?php echo $this->_vars['list']['companyname_']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></p>
								<p class="date"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</p>
							</li>
							<?php endforeach; endif; ?>
						</ul>
						<ul class="emergencyjobs" style="display:none;">
							<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobs,��ʾ��Ŀ:6,ְλ������:12,��ҵ������:12,������Ƹ:1,����:refreshtime>desc"), $this);?>
							<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
							<li>
								<p class="job"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" title="<?php echo $this->_vars['list']['jobs_name_']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></p>
								<p class="company"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" title="<?php echo $this->_vars['list']['companyname_']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></p>
								<p class="date"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</p>
							</li>
							<?php endforeach; endif; ?>
						</ul>
						<ul class="hotjobs" style="display:none;">
							<?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobs,��ʾ��Ŀ:6,ְλ������:12,��ҵ������:12,���ڷ�Χ:7,����:hot>desc"), $this);?>
							<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
							<li>
								<p class="job"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" title="<?php echo $this->_vars['list']['jobs_name_']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></p>
								<p class="company"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" title="<?php echo $this->_vars['list']['companyname_']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></p>
								<p class="date"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</p>
							</li>
							<?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="resume_main">
				<div class="but_box">
					<input type="button" value="" class="add_job" onclick="javascript:window.open('<?php echo $this->_run_modifier("QS_user,1", 'qishi_url', 'plugin', 1); ?>
company_jobs.php?act=addjobs');"/>
					<input type="button" value="" class="w_resume" onclick="javascript:window.open('<?php echo $this->_run_modifier("QS_user,2", 'qishi_url', 'plugin', 1); ?>
personal_resume.php?act=resume_list');"/>
				</div>
				<div class="bulletin">
					<div class="bulletin_nav">
						<ul class="nav_item">
							<li class="active">����</li>
							<li class="last">����</li>
							<div class="clear"></div>
						</ul>
					</div>
					<div class="bull_content">
						<ul>
						<?php echo tpl_function_qishi_notice_list(array('set' => "�б���:notice,��ʾ��Ŀ:7,���ⳤ��:12,����:1,��ַ�:..."), $this);?>
							<?php if (count((array)$this->_vars['notice'])): foreach ((array)$this->_vars['notice'] as $this->_vars['list']): ?>
							<li><a href="<?php echo $this->_vars['list']['url']; ?>
" target="_blank" title="<?php echo $this->_vars['list']['title_']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
							<?php endforeach; endif; ?>
						</ul>
					</div>
					<div class="bull_content" style="display:none;">
						<ul>
							<?php echo tpl_function_qishi_help_list(array('set' => "�б���:help,��ʾ��Ŀ:7,���ⳤ��:12,��ַ�:..."), $this);?>
							<?php if (count((array)$this->_vars['help'])): foreach ((array)$this->_vars['help'] as $this->_vars['list']): ?>
							<li><a href="<?php echo $this->_vars['list']['url']; ?>
" target="_blank" title="<?php echo $this->_vars['list']['title_']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
							<?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
				<div class="ad_194_150">
					<div class="banner" style="visibility:hidden;">
					<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:6,��������:QS_indexfocus,�б���:ad"), $this); if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
					<a href="<?php echo $this->_vars['list']['img_url']; ?>
" target="_blank"><img src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
" border="0" width="194" height="150"/></a>
					<?php endforeach; endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</div>
<!-- �в���沿�� -->
		<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:12,��������:QS_indexcentreimg,�б���:ad,���ֳ���:12"), $this);?>
		<?php if ($this->_vars['ad']): ?>
		<div class="mid_ad lazyload">
			<?php if (isset($this->_sections['list'])) unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($this->_vars['ad']) ? count($this->_vars['ad']) : max(0, (int)$this->_vars['ad']);
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
			<div onmouseover="showDiv(this)" onmouseout="showDiv(this)" imguid="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['img_uid']; ?>
" data="" class="ad_327_60 <?php if (( $this->_sections['list']['index'] + 1 ) % 3 == '0'): ?>last<?php endif; ?>">
				<a class="on" target="_blank" href="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['img_url']; ?>
"><img width="327" height="60" original="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['img_path']; ?>
" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/index/84.gif"></a>
				<div class="shade" style="height: 146px;"></div>
				<div class="showad">
					<div class="area">
						<div class="leftad">
							<ul>
								<?php if (count((array)$this->_vars['ad'][$this->_sections['list']['index']]['jobs'])): foreach ((array)$this->_vars['ad'][$this->_sections['list']['index']]['jobs'] as $this->_vars['jobslist']): ?>
								<li>��&nbsp;&nbsp;<a target="_blank" href="<?php echo $this->_vars['jobslist']['jobs_url']; ?>
"><?php echo $this->_vars['jobslist']['jobs_name']; ?>
</a></li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
						<div class="rightad">
							<h3><a href="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['company_url']; ?>
"><?php echo $this->_vars['ad'][$this->_sections['list']['index']]['companyname']; ?>
</a></h3>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['briefly']; ?>
</p>
						</div>
					</div>
				</div>
			</div>
			<?php endfor; endif; ?>
		</div>
		<?php endif; ?>
		<div class="clear"></div>
		<script type="text/javascript">
			function showDiv(obj){
				if($(obj).attr("imguid") > 0) {
					if($(obj).attr("data")=="current1"){
						$(obj).removeClass("current1");
						$(obj).attr("data","");
					}
					else{
						$(obj).addClass("current1");
						$(obj).attr("data","current1");
						$(obj).find(".shade").height($(obj).find(".area").height()+80)
					}
				}
			}
		</script>
		<!-- �в���沿�� ���� -->
	<!-- ��ҵְλ -->
	<div class="jobs_area" style="margin-top:10px;margin-bottom:10px;">
		<div class="left">
			<div class="category_wrap">
				<div class="h3">ȫ��ְλ����</div>
				<ul>
					<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:category,����:QS_jobs,��ʾ��Ŀ:10"), $this);?>
					<?php if (isset($this->_sections['list'])) unset($this->_sections['list']);
$this->_sections['list']['loop'] = is_array($this->_vars['category']) ? count($this->_vars['category']) : max(0, (int)$this->_vars['category']);
$this->_sections['list']['name'] = 'list';
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
					<li id="<?php echo $this->_vars['category'][$this->_sections['list']['index']]['id']; ?>
" <?php if ($this->_sections['list']['index'] == 0): ?> class="select"<?php endif; ?> style="cursor:pointer;">
						<div class="category">
							<p><?php echo $this->_vars['category'][$this->_sections['list']['index']]['categoryname']; ?>
</p>
							<div class="icon_right">
								<span class="angle_right"></span>
							</div>
						</div>
						<div class="sub_category"></div>
					</li>
					<?php endfor; endif; ?>
				</ul>
			</div>
		</div>
		<div class="jobs_content">
			<ul></ul>
		</div>
		<div class="clear"></div>
	</div>
	<!-- ��ҵְλ ���� -->
	<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:1,��������:QS_indexcenter,�б���:ad"), $this);?>
	<?php if ($this->_vars['ad']): ?>
	<div class="ad_1000">
		<?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
		<a target="_blank" href="<?php echo $this->_vars['list']['img_url']; ?>
"><img width="1000" height="60" src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
"></a>
		<?php endforeach; endif; ?>
	</div>
	<?php endif; ?>
	<!-- ������� -->
	<div class="about_resume">
		<div class="left">
			<div class="job_box">
				<div class="box_tit">
					<div class="tit">���ż�����ǩ</div> <div class="more"><a href="<?php echo $this->_run_modifier("QS_resumetag", 'qishi_url', 'plugin', 1); ?>
" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<div class="tag">
						<p>
							<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:cat,����:QS_resumetag,��ʾ��Ŀ:8"), $this); if (count((array)$this->_vars['cat'])): foreach ((array)$this->_vars['cat'] as $this->_vars['list']): ?>
							<a href="<?php echo $this->_run_modifier($this->_run_modifier("QS_resumetag,resumetag:", 'cat', 'plugin', 1, $this->_vars['list']['id']), 'qishi_url', 'plugin', 1); ?>
" target="_blank"><?php echo $this->_vars['list']['categoryname']; ?>
</a>
							 <?php endforeach; endif; ?>
						</p>
					</div>
					
				</div>
			</div>
			<div class="job_box" style="height:305px;">
				<div class="box_tit">
					<div class="tit">��Ƭ����</div> <div class="more"><a href="<?php echo $this->_run_modifier("QS_resumelist,photo:1", 'qishi_url', 'plugin', 1); ?>
" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content" style="padding:20px 20px 0px 20px;">
					<div class="photo">
						<ul>
							<?php echo tpl_function_qishi_resume_list(array('set' => "�б���:resume,��ʾ��Ŀ:3,��Ƭ:1,����ְλ����:14,��ַ�:...,����:rtime>desc"), $this);?>
							<?php if (count((array)$this->_vars['resume'])): foreach ((array)$this->_vars['resume'] as $this->_vars['list']): ?>
							<?php if ($this->_vars['list']['photo_display'] == '1'): ?>
							<li>
								<div class="photo_box">
									<a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><img src="<?php echo $this->_vars['list']['photosrc']; ?>
"  width="54" height="60" border="0"/></a>
								</div>
								<div class="photo_t">
									<p><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['fullname']; ?>
</a><span><?php echo $this->_vars['list']['sex_cn']; ?>
</span><span><?php echo $this->_vars['list']['age']; ?>
��</span></p>
									<p>ѧ����<?php echo $this->_vars['list']['education_cn']; ?>
</p>
									<p>���飺<?php echo $this->_vars['list']['experience_cn']; ?>
</p>
								</div>
								<div class="clear"></div>
							</li>
							<?php endif; ?>
							<?php endforeach; endif; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="right">
		<div class="job_box right_box" style="min-height:469px;">
			<div class="box_tit">
				<div class="tit">���¼���</div> <div class="more"><a href="<?php echo $this->_run_modifier("QS_resumelist", 'qishi_url', 'plugin', 1); ?>
">����>></a></div>
				<div class="clear"></div>
			</div>
			<div class="box_content">
				<table class="new_resume">
					<tbody>
						<tr>
							<td width="85">����</td>
							<td width="69">�Ա�</td>
							<td width="87">ѧ��</td>
							<td width="97">��������</td>
							<td width="187">��ְ��λ</td>
							<td width="100">������н</td>
							<?php if ($this->_vars['QISHI']['closetime'] == "1"): ?>
							<td width="110">����</td>
							<?php else: ?>
							<td width="110">ˢ��ʱ��</td>
							<?php endif; ?>
						</tr>
						<?php echo tpl_function_qishi_resume_list(array('set' => "�б���:resume,��ʾ��Ŀ:9,����ְλ����:25,��ַ�:...,����:rtime>desc"), $this);?>
						<?php if (count((array)$this->_vars['resume'])): foreach ((array)$this->_vars['resume'] as $this->_vars['list']): ?>
						<tr>
							<td width="85"><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank" title="<?php echo $this->_vars['list']['fullname_']; ?>
"><?php echo $this->_vars['list']['fullname']; ?>
</a></td>
							<td width="69"><?php echo $this->_vars['list']['sex_cn']; ?>
</td>
							<td width="87"><?php echo $this->_vars['list']['education_cn']; ?>
</td>
							<td width="97"><?php echo $this->_vars['list']['experience_cn']; ?>
</td>
							<td width="187"><div class="injobs"><?php echo $this->_vars['list']['intention_jobs']; ?>
</div></td>
							<td width="100"><div class="inwage"><?php echo $this->_vars['list']['wage_cn']; ?>
</div></td>
							<?php if ($this->_vars['QISHI']['closetime'] == "1"): ?>
							<td width="110"><?php echo $this->_vars['list']['age']; ?>
 ��</td>
							<?php else: ?>
							<td width="110"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</td>
							<?php endif; ?>
						</tr>
						<?php endforeach; endif; ?>
					</tbody>
				</table>
			</div>
		</div>
		</div>
		<div class="clear"></div>
	</div>
	
	
	<!-- ������� ���� -->
	<!--��ҳ�·����ӹ�� -->
	<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:12,��������:QS_indexfootimg ,�б���:ad,���ֳ���:12"), $this);?>
	<?php if ($this->_vars['ad']): ?>
	<div class="mid_ad lazyload" style="margin-top: 0px;">
		<?php if (isset($this->_sections['list'])) unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($this->_vars['ad']) ? count($this->_vars['ad']) : max(0, (int)$this->_vars['ad']);
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
		<div class="ad_327_60 <?php if (( $this->_sections['list']['index'] + 1 ) % 3 == '0'): ?>last<?php endif; ?>"><a target="_blank" href="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['img_url']; ?>
"><img width="327" height="60" original="<?php echo $this->_vars['ad'][$this->_sections['list']['index']]['img_path']; ?>
" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/index/84.gif"></a></div>
		<?php endfor; endif; ?>
	</div>
	<?php endif; ?>
	<div class="clear"></div>
	<!-- ��ҳ�·����ӹ�� ���� -->
	<!-- ��Ѷ -->
	<div class="information_bbox" id="information_bbox" style="margin-top:0px;">
		<?php echo tpl_function_qishi_news_category(array('set' => "�б���:newscategory,��Ѷ����:1,��ʾ��Ŀ:3"), $this);?>
		<?php if (isset($this->_sections['nclist'])) unset($this->_sections['nclist']);
$this->_sections['nclist']['loop'] = is_array($this->_vars['newscategory']) ? count($this->_vars['newscategory']) : max(0, (int)$this->_vars['newscategory']);
$this->_sections['nclist']['name'] = 'nclist';
$this->_sections['nclist']['show'] = true;
$this->_sections['nclist']['max'] = $this->_sections['nclist']['loop'];
$this->_sections['nclist']['step'] = 1;
$this->_sections['nclist']['start'] = $this->_sections['nclist']['step'] > 0 ? 0 : $this->_sections['nclist']['loop']-1;
if ($this->_sections['nclist']['show']) {
	$this->_sections['nclist']['total'] = $this->_sections['nclist']['loop'];
	if ($this->_sections['nclist']['total'] == 0)
		$this->_sections['nclist']['show'] = false;
} else
	$this->_sections['nclist']['total'] = 0;
if ($this->_sections['nclist']['show']):

		for ($this->_sections['nclist']['index'] = $this->_sections['nclist']['start'], $this->_sections['nclist']['iteration'] = 1;
			 $this->_sections['nclist']['iteration'] <= $this->_sections['nclist']['total'];
			 $this->_sections['nclist']['index'] += $this->_sections['nclist']['step'], $this->_sections['nclist']['iteration']++):
$this->_sections['nclist']['rownum'] = $this->_sections['nclist']['iteration'];
$this->_sections['nclist']['index_prev'] = $this->_sections['nclist']['index'] - $this->_sections['nclist']['step'];
$this->_sections['nclist']['index_next'] = $this->_sections['nclist']['index'] + $this->_sections['nclist']['step'];
$this->_sections['nclist']['first']	  = ($this->_sections['nclist']['iteration'] == 1);
$this->_sections['nclist']['last']	   = ($this->_sections['nclist']['iteration'] == $this->_sections['nclist']['total']);
?>
		<?php if ($this->_sections['nclist']['index'] == 2): ?>
		<div class="information_box" style="width:332px;">
			<div class="job_box" style="border-right:0px;">
				<div class="box_tit">
					<div class="tit"><?php echo $this->_vars['newscategory'][$this->_sections['nclist']['index']]['title']; ?>
</div> <div class="more"><a href="<?php echo $this->_vars['newscategory'][$this->_sections['nclist']['index']]['url']; ?>
" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<div class="info_box">
						<div class="img_box">
							<a href="javascript:void(0);"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/index/<?php if ($this->_sections['nclist']['index'] == 0): ?>14<?php elseif ($this->_sections['nclist']['index'] == 1): ?>15<?php else: ?>16<?php endif; ?>.jpg" alt="" /></a>
						</div>
						<div class="info_content">
							<?php echo tpl_function_qishi_news_list(array('set' => "�б���:topnews,��ʾ��Ŀ:1,���ⳤ��:15,��ѶС��:" . $this->_vars['newscategory'][$this->_sections['nclist']['index']]['id'] . ",ժҪ����:36,��ַ�:...,����:article_order>desc"), $this);?>
							<?php if (count((array)$this->_vars['topnews'])): foreach ((array)$this->_vars['topnews'] as $this->_vars['toplist']): ?>
							<a target="_blank" href="<?php echo $this->_vars['toplist']['url']; ?>
" title="<?php echo $this->_vars['toplist']['title_']; ?>
"><h5><?php echo $this->_vars['toplist']['title']; ?>
</h5></a>
							<p><?php echo $this->_vars['toplist']['briefly']; ?>
<a target="_blank" href="<?php echo $this->_vars['toplist']['url']; ?>
">�Ķ�ȫ��>></a></p>
							<?php endforeach; endif; ?>
						</div>
						<div class="clear"></div>
						<div class="info_list">
							<ul>
								<?php echo tpl_function_qishi_news_list(array('set' => "�б���:news,��ʾ��Ŀ:3,��ʼλ��:1,���ⳤ��:20,��ѶС��:" . $this->_vars['newscategory'][$this->_sections['nclist']['index']]['id'] . ",��ַ�:...,����:article_order>desc"), $this);?>
								<?php if (count((array)$this->_vars['news'])): foreach ((array)$this->_vars['news'] as $this->_vars['list']): ?>
								<li><a target="_blank" href="<?php echo $this->_vars['list']['url']; ?>
" title="<?php echo $this->_vars['list']['title_']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="information_box">
			<div class="job_box">
				<div class="box_tit">
					<div class="tit"><?php echo $this->_vars['newscategory'][$this->_sections['nclist']['index']]['title']; ?>
</div> <div class="more"><a href="<?php echo $this->_vars['newscategory'][$this->_sections['nclist']['index']]['url']; ?>
" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<div class="info_box">
						<div class="img_box">
							<a href="javascript:void(0);"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/index/<?php if ($this->_sections['nclist']['index'] == 0): ?>14<?php elseif ($this->_sections['nclist']['index'] == 1): ?>15<?php else: ?>16<?php endif; ?>.jpg" alt="" /></a>
						</div>
						<div class="info_content">
							<?php echo tpl_function_qishi_news_list(array('set' => "�б���:topnews,��ʾ��Ŀ:1,���ⳤ��:15,��ѶС��:" . $this->_vars['newscategory'][$this->_sections['nclist']['index']]['id'] . ",ժҪ����:36,��ַ�:...,����:article_order>desc"), $this);?>
							<?php if (count((array)$this->_vars['topnews'])): foreach ((array)$this->_vars['topnews'] as $this->_vars['toplist']): ?>
							<a target="_blank" href="<?php echo $this->_vars['toplist']['url']; ?>
" title="<?php echo $this->_vars['toplist']['title_']; ?>
"><h5><?php echo $this->_vars['toplist']['title']; ?>
</h5></a>
							<p><?php echo $this->_vars['toplist']['briefly']; ?>
<a target="_blank" href="<?php echo $this->_vars['toplist']['url']; ?>
">�Ķ�ȫ��>></a></p>
							<?php endforeach; endif; ?>
						</div>
						<div class="clear"></div>
						<div class="info_list">
							<ul>
								<?php echo tpl_function_qishi_news_list(array('set' => "�б���:news,��ʾ��Ŀ:3,��ʼλ��:1,���ⳤ��:20,��ѶС��:" . $this->_vars['newscategory'][$this->_sections['nclist']['index']]['id'] . ",��ַ�:...,����:article_order>desc"), $this);?>
								<?php if (count((array)$this->_vars['news'])): foreach ((array)$this->_vars['news'] as $this->_vars['list']): ?>
								<li><a target="_blank" href="<?php echo $this->_vars['list']['url']; ?>
" title="<?php echo $this->_vars['list']['title_']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
								<?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php endfor; endif; ?>
		<div class="clear"></div>
	</div>
	<!-- ��ҳ�ײ������� -->
	<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:1,��������:QS_indexfootbanner,�б���:ad"), $this);?>
	<?php if ($this->_vars['ad']): ?>
	<div class="ad_1000">
		<?php if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['list']): ?>
		<a target="_blank" href="<?php echo $this->_vars['list']['img_url']; ?>
"><img width="1000" height="60" src="<?php echo $this->_vars['list']['img_path']; ?>
" alt="<?php echo $this->_vars['list']['img_explain']; ?>
"></a>
		<?php endforeach; endif; ?>
	</div>
	<?php endif; ?>
	<!-- ��ҳ�ײ������� End-->
	<div class="f_link" style="_width:1000px;">
		<div class="job_box">
				<div class="box_tit">
					<div class="tit">��������</div> <div class="more"><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
link/add_link.php" target="_blank">����>></a></div>
					<div class="clear"></div>
				</div>
				<div class="box_content">
					<?php echo tpl_function_qishi_link(array('set' => "�б���:link,��ʾ��Ŀ:100,��������:QS_index,����:1"), $this);?>
					<div class="link_name">
							<?php if (count((array)$this->_vars['link'])): foreach ((array)$this->_vars['link'] as $this->_vars['list']): ?>
							<a style="word_link" href="<?php echo $this->_vars['list']['link_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a>
							<?php endforeach; endif; ?>
							<?php echo tpl_function_qishi_link(array('set' => "�б���:imglink,��ʾ��Ŀ:14,��������:QS_index,����:2"), $this);?>
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
	<!-- ��Ѷ ���� -->

	</div>
	<!-- �������� ���� -->
<div class="release">
		<div class="container">
			<div class="release_box">
				<div class="release_txt"></div>
				<div class="release_but">
					<input type="button" value="��������" class="but180cheng" onclick="javascript:window.open('<?php echo $this->_run_modifier("QS_user,1", 'qishi_url', 'plugin', 1); ?>
company_jobs.php?act=addjobs');"/>
				</div>
			</div>
			
		</div>
	</div>	
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<!-- ��ҳ�������  -->
<?php echo tpl_function_qishi_ad(array('set' => "��ʾ��Ŀ:10,��������:QS_indexfloat,�б���:ad"), $this); if (count((array)$this->_vars['ad'])): foreach ((array)$this->_vars['ad'] as $this->_vars['float']):  echo $this->_vars['float'];  endforeach; endif; ?>
<!-- ��ҳ������� End -->
</body>
</html>