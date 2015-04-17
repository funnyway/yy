<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:51 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript'  language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/ajaxfileupload.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.Jcrop.min.js" type='text/javascript' language="javascript"></script>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/jquery.Jcrop.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 头像</div>
<!-- 进度条 -->
<div class="photoTrad" id="photoTrad">正在上传，请稍后！</div>
<!-- 进度条 End-->
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
	
	<div class="avatar link_bk">
			
 	    	<div class="topnav">
			  
			<div class="titleH1">
				<div class="h1-title">上传照片</div>
			</div>
	  	</div>

	  	<div class="main">
	  		<div class="tip">温馨提示：上传图片大小不能超过500KB，允许的格式为:jpg/gif/png。</div>
			
	  		<div class="up">
			  <form action="?act=photo_save" method="post">
			  <div class="l"><input name="photo" type="file" id="photo"  class="input_text_200"  style=" width:260px;"/></div>
			  <div class="r"><input name="" type="submit" class="but100lan" value="上传" />
			  	<input type="hidden" id="img" name="img" />
				<input type="hidden" id="x" name="x" />
				<input type="hidden" id="y" name="y" />
				<input type="hidden" id="w" name="w" />
				<input type="hidden" id="h" name="h" />
			  </div>
			 </form>
			  <div class="clear"></div>
			</div>
	  		<div class="photobox">
			  <div class="l">
		  		<div class="bg" id="imgbg"></div>
			  </div>
			  <script type="text/javascript">
			  		$("#photo").bind('change',function() {
			  			photoCut();
					}).live('change', function() {
						photoCut();
					});
					function photoCut(){
						$("#photoTrad").before("<div class=\"menu_bg_layer\"></div>");
						$(".menu_bg_layer").height($(document).height());
						$(".menu_bg_layer").css({ width: $(document).width(), position: "absolute",left:"0", top:"0","z-index":"99","background-color":"#73848C"});
						$(".menu_bg_layer").css("opacity",0.3);
						$('#photoTrad').css({
							position:'absolute',
							left: ($(window).width() - $('#photoTrad').outerWidth())/2,
							top: $("#photo").offset().top
						});
						$("#photoTrad").show();
						$.ajaxFileUpload ({
							url:'?act=photo_ready',
							secureuri :false,
							fileElementId :'photo',
							dataType : 'string',
							success : function (data, status){
								switch(data){
										case "-1":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：上传目录不存在!");return false;break;
										case "-2":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：上传目录无法写入!");return false;break;
										case "-3":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：你选择的文件无法上传");return false;break;
										case "-4":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：文件大小超过限制");return false;break;
										case "-5":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：文件类型错误！");return false;break;
										case "-6":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("上传图片失败：文件上传出错！");return false;break;
										default:$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();break;
									}
								var src = '/dasai/photo/thumb/' + data;
								console.log(src);
								$("#imgbg").html('<img style="" src="'+src+'" id="target" border="0" />');
								$("#preview").attr('src',src);
								$("#preview1").html('<img src="'+src+'" border="0" />');
								    $(function(){ 
								        var jcrop_api, boundx, boundy;  
								        $('#target').Jcrop({  
								            onChange: updatePreview,
								            onSelect: updatePreview,
								            onSelect: updateCoords,
								            aspectRatio: 1  
								        },function(){  
								            // Use the API to get the real image size  
								            var bounds = this.getBounds();  
								            boundx = bounds[0];  
								            boundy = bounds[1];  
								            // Store the API in the jcrop_api variable  
								            jcrop_api = this;  
								        });   
								        function updateCoords(c)
										{
											$('#x').val(c.x);
											$('#y').val(c.y);
											$('#w').val(c.w);
											$('#h').val(c.h);
										};
								        function updatePreview(c){  
								            if (parseInt(c.w) > 0){    
								                $('#preview').css({  
								                    width: Math.round(235/ c.w * boundx) + 'px',     
								                    height: Math.round(166 / c.h * boundy) + 'px',  
								                    marginLeft: '-' + Math.round(235 / c.w * c.x) + 'px',  
								                    marginTop: '-' + Math.round(166 / c.h * c.y) + 'px'  
								                }); 
								                $('#preview1 img').css({  
								                    width: Math.round(100 / c.w * boundx) + 'px',     
								                    height: Math.round(71 / c.h * boundy) + 'px',  
								                    marginLeft: '-' + Math.round(100 / c.w * c.x) + 'px',  
								                    marginTop: '-' + Math.round(71 / c.h * c.y) + 'px'  
								                });
								            }  
								          };  
								    });  
							}
							})
				}
				</script>
			  <div class="r">
			  	<div class="tit">效果预览</div>
				<p>您上传的图片会自动生成如下尺寸，请注意上传后是否清晰。</p>
			    <div class="img100">
				  <?php if ($this->_vars['user']['photo'] == ""): ?>
				  <div class="limg2"><img id="preview" name="" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/06.jpg" /></div>
				  <?php else: ?>
				  <div class="limg2"><img id="preview" name="" src="/dasai/photo/166/<?php echo $this->_vars['user']['photo']; ?>
" /></div>
				  <?php endif; ?>
				  <div class="rt">166*235像素</div>
				  <div class="clear"></div>
				</div>
				  <div class="clear"></div>
				</div>
				
			  </div>
			  <div class="clear"></div>
			</div>
			
			 
	  		 
	  	</div>
	</div>
	</div>
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