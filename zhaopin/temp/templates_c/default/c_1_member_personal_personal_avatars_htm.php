<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:39 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
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

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > ͷ��</div>
<!-- ������ -->
<div class="photoTrad" id="photoTrad">�����ϴ������Ժ�</div>
<!-- ������ End-->
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
				<div class="h1-title">�˻�����</div>
			</div>
					
			<div class="navs link_bk">
				<a href="?act=userprofile">��������</a>
				  <a href="?act=password_edit">�����޸�</a>
				  <a href="?act=authenticate">��ȫ��֤</a>
				  <a href="?act=avatars" class="se">ͷ��</a>
				  <a href="?act=pm">��Ϣ<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">��½��־</a>
				   <a href="?act=binding">�˺Ű�</a>
				  <div class="clear"></div>
			</div>
	  	</div>

	  	<div class="main">
	  		<div class="tip">��ܰ��ʾ���ϴ�ͼƬ��С���ܳ���500KB�������ĸ�ʽΪ:jpg/gif/png��</div>
			
	  		<div class="up">
			  <form action="?act=avatars_save" method="post">
			  <div class="l"><input name="avatars" type="file" id="avatars"  class="input_text_200"  style=" width:260px;"/></div>
			  <div class="r"><input name="" type="submit" class="but100lan" value="�ϴ�" />
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
			  		$("#avatars").bind('change',function() {
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
							top: $("#avatars").offset().top
						});
						$("#photoTrad").show();
						$.ajaxFileUpload ({
							url:'?act=avatars_ready',
							secureuri :false,
							fileElementId :'avatars',
							dataType : 'string',
							success : function (data, status){
								switch(data){
										case "-1":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ��ϴ�Ŀ¼������!");return false;break;
										case "-2":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ��ϴ�Ŀ¼�޷�д��!");return false;break;
										case "-3":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ���ѡ����ļ��޷��ϴ�");return false;break;
										case "-4":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ��ļ���С��������");return false;break;
										case "-5":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ��ļ����ʹ���");return false;break;
										case "-6":$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();alert("�ϴ�ͼƬʧ�ܣ��ļ��ϴ�������");return false;break;
										default:$("#photoTrad").hide();$(".menu_bg_layer").hide().remove();break;
									}
								var src = '<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/avatar/thumb/' + data;
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
								                    width: Math.round(100 / c.w * boundx) + 'px',     
								                    height: Math.round(100 / c.h * boundy) + 'px',  
								                    marginLeft: '-' + Math.round(100 / c.w * c.x) + 'px',  
								                    marginTop: '-' + Math.round(100 / c.h * c.y) + 'px'  
								                }); 
								                $('#preview1 img').css({  
								                    width: Math.round(48 / c.w * boundx) + 'px',     
								                    height: Math.round(48 / c.h * boundy) + 'px',  
								                    marginLeft: '-' + Math.round(48 / c.w * c.x) + 'px',  
								                    marginTop: '-' + Math.round(48 / c.h * c.y) + 'px'  
								                });
								            }  
								          };  
								    });  
							}
							})
				}
				</script>
			  <div class="r">
			  	<div class="tit">Ч��Ԥ��</div>
				<p>���ϴ���ͼƬ���Զ��������ֳߴ磬��ע���ϴ����Ƿ�������</p>
			    <div class="img100">
				  <?php if ($this->_vars['user']['avatars'] == ""): ?>
				  <div class="limg"><img id="preview" name="" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/06.jpg" /></div>
				  <?php else: ?>
				  <div class="limg"><img id="preview" name="" src="<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
" /></div>
				  <?php endif; ?>
				  <div class="rt">100*100����</div>
				  <div class="clear"></div>
				</div>
				  <div class="img48">
				  <?php if ($this->_vars['user']['avatars'] == ""): ?>
				  <div class="limg" id="preview1"><img name="" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/06.jpg" width="48" height="48" /></div>
				   <?php else: ?>
				   <div class="limg" id="preview1"><img name="" src="<?php echo $this->_vars['QISHI']['main_domain']; ?>
data/avatar/48/<?php echo $this->_vars['user']['avatars']; ?>
" width="48" height="48" /></div>
				   <?php endif; ?>
				  <div class="rt">48*48����</div>
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