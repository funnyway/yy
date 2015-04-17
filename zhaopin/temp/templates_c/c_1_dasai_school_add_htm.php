<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 11:03 ?D1ú±ê×?ê±?? */  $_templatelite_tpl_vars = $this->_vars;
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
echo $this->_fetch_compile_include("dasai/school_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptit">添加学校</div>
  <form action="?act=addsave" method="post" enctype="multipart/form-data" name="FormData" id="FormData" >
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="admin_table">
      <tr>
        <td width="67" align="right" style="border:0px" >学校名称：</td>
        <td width="400" style="border:0px">
		<input name="title" type="text"  class="input_text_400" maxlength="45"/>		</td>
        <td style="border:0px">
		<div class="color_layer">
		<input type="text" name="tit_color" id="tit_color"  style=" display:none">
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
        <td align="right" >学校简介：</td>
        <td colspan="2" ><select name="type_id" id="type_id"  >
          <option value="">请选择所属分类：</option>
		  <?php if (count((array)$this->_vars['get_explain_category'])): foreach ((array)$this->_vars['get_explain_category'] as $this->_vars['list']): ?>
          <option value="<?php echo $this->_vars['list']['id']; ?>
"  <?php if ($this->_vars['list']['id'] == $_GET['type_id']): ?> selected="selected" <?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
<?php endforeach; endif; ?>        
        </select> </td>
      </tr>
    </table>
    <table width="700" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100" ><textarea id="content" name="content" style="width:700px;height:300px;visibility:hidden;"></textarea>
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
    <table width="100%" border="0" cellpadding="3" cellspacing="0"  class="admin_table">
      <tr>
        <td width="120" height="30" align="right" >是否显示：</td>
        <td width="180" >
		
		<label><input name="is_display" type="radio" value="1" checked="checked" />

显示</label>
<label><input type="radio" name="is_display" value="0" /> 
不显示</label></td>
        <td width="120" align="right" >显示排序：</td>
        <td ><input name="show_order" type="text"  class="input_text_150" id="show_order" style="width:50px;" maxlength="8" onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');"onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
        <span>&nbsp;&nbsp;&nbsp;&nbsp;数字越大越靠前</span></td>
      </tr>
      <tr>
        <td height="30" align="right" >外部链接：</td>
        <td ><input name="is_url" type="text" class="input_text_150" id="is_url" value="" maxlength="100"/></td>
        <td align="right" >标题加粗：</td>
        <td ><input name="tit_b" type="checkbox" id="tit_b" value="1" />
        加粗</td>
      </tr>
	  
	  
      <tr>
        <td height="30" align="right" >keywords：</td>
        <td colspan="3" ><input name="seo_keywords" type="text" class="input_text_400" id="keywords" value="" maxlength="30"  /></td>
      </tr>
      <tr>
        <td height="30" align="right" valign="top" >description：</td>
        <td colspan="3" ><textarea name="seo_description" class="input_textarea_400" id="description"></textarea></td>
      </tr>
    </table>
  </form>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>