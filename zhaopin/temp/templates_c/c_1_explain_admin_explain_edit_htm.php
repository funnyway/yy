<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:55 ?D1ú±ê×?ê±?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>


<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("explain/admin_explain_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptit">修改说明页</div>
  <form action="?act=editsave" method="post" enctype="multipart/form-data" name="FormData" id="FormData"  >
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="admin_table">
      <tr>
        <td width="67" align="right"  style=" border:0px">页面名称：</td>
        <td width="400"style=" border:0px" > 
		<input name="title" type="text"  class="input_text_400" value="<?php echo $this->_vars['edit_article']['title']; ?>
" maxlength="45"/>		</td>
        <td style=" border:0px">
		<input type="text" name="tit_color" id="tit_color"  style=" display:none">
		<div class="color_layer">	
		<div id="color_box" onclick="color_box_display()" ></div>
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_select_color.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
		</div>
		</td>
      </tr>
      <tr>
        <td align="right" >所属分类：</td>
        <td colspan="2" ><select name="type_id" id="type_id">
          <option value="">请选择所属分类：</option>
		  <?php if (count((array)$this->_vars['get_explain_category'])): foreach ((array)$this->_vars['get_explain_category'] as $this->_vars['list']): ?>
          <option value="<?php echo $this->_vars['list']['id']; ?>
"  <?php if ($this->_vars['list']['id'] == $this->_vars['edit_article']['type_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
<?php endforeach; endif; ?>        
        </select></td>
      </tr>
    </table>
    <table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100" ><textarea  id="content" name="content" style="width:700px;height:300px;visibility:hidden;"><?php echo $this->_vars['edit_article']['content']; ?>
</textarea>
           <script>
      var editor;
      KindEditor.ready(function(K) {
        editor = K.create('textarea[name="content"]', {
          allowFileManager : true
        });
        K('input[name=Submit2]').click(function(e) {
          editor.html('');
        });
      });
    </script></td>
      </tr>
      <tr>
        <td height="50" align="center" ><input type="submit" name="Submit" value="确定提交" class="admin_submit"   />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" name="Submit2" value="重置表单" class="admin_submit"   /></td>
      </tr>
    </table>
    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="admin_table">
      <tr>
        <td width="120" height="30" align="right" >是否显示：</td>
        <td width="180" ><input name="is_display" type="radio" value="1"  <?php if ($this->_vars['edit_article']['is_display'] == 1): ?> checked="checked"<?php endif; ?> />
显示
<input type="radio" name="is_display" value="0" <?php if ($this->_vars['edit_article']['is_display'] == 0): ?> checked="checked"<?php endif; ?> /> 
不显示</td>
        <td width="120" align="right" >文章排序：</td>
        <td ><input name="show_order" type="text"  class="input_text_150" id="show_order" style="width:50px;" onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" value="<?php echo $this->_vars['edit_article']['show_order']; ?>
" maxlength="8"onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;数字越大越靠前</span></td>
      </tr>
      <tr>
        <td height="30" align="right" >外部链接：</td>
        <td ><input name="is_url" type="text" class="input_text_150" id="is_url" value="<?php echo $this->_vars['edit_article']['is_url']; ?>
" maxlength="100"/></td>
        <td align="right" >标题加粗：</td>
        <td ><input name="tit_b" type="checkbox" id="tit_b" value="1"  <?php if ($this->_vars['edit_article']['tit_b'] == 1): ?> checked="checked"<?php endif; ?> />
        加粗</td>
      </tr>
	  
	  <tr>
	  </tr>
      <tr>
        <td height="30" align="right" >keywords：</td>
        <td colspan="3" ><input name="seo_keywords" type="text" class="input_text_400" id="keywords"  maxlength="30"    value="<?php echo $this->_vars['edit_article']['seo_keywords']; ?>
"/></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" >description：</td>
        <td colspan="3" ><textarea name="seo_description" class="input_textarea_400" id="description"><?php echo $this->_vars['edit_article']['seo_description']; ?>
</textarea>
<input name="id" type="hidden" id="id" value="<?php echo $this->_vars['edit_article']['id']; ?>
" /></td>
      </tr>
    </table>
  </form>
</div>
<?php if ($this->_vars['edit_article']['tit_color']): ?>
<script type="text/javascript" >
var rgb="<?php echo $this->_vars['edit_article']['tit_color']; ?>
";
document.FormData.tit_color.value= rgb;
document.getElementById('tit_color').style.background=rgb;
document.getElementById('color_box').style.background=rgb;
</script>
<?php endif; ?>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>