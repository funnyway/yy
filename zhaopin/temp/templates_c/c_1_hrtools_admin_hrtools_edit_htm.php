<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:08 ?D1��������?����?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	showmenu("#h_typeid_cn","#menu1","#h_typeid");
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("hrtools/admin_hrtools_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptit">�޸��ĵ�</div>
  <form action="?act=editsave" method="post" enctype="multipart/form-data" name="FormData" id="FormData" >
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="3" cellspacing="0" class="admin_table">
      <tr>
        <td width="120" align="right" style="border:0px" >�ĵ����ƣ�</td>
        <td style="border:0px">
		<input name="h_filename" type="text"  class="input_text_200" maxlength="45" value="<?php echo $this->_vars['show']['h_filename']; ?>
"/>		</td>
      </tr>
      <tr>
        <td align="right" >�������ࣺ</td>
        <td >
		
		<div>		
		<input type="text" value="<?php echo $this->_vars['show']['c_name']; ?>
"  readonly="readonly" name="h_typeid_cn" id="h_typeid_cn" class="input_text_200 input_text_selsect"/>
		<input name="h_typeid" id="h_typeid" type="hidden" value="<?php echo $this->_vars['show']['c_id']; ?>
" />
		<div id="menu1" class="menu">
			<ul>	
			<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>		
			<li id="<?php echo $this->_vars['list']['c_id']; ?>
" title="<?php echo $this->_vars['list']['c_name']; ?>
" ><?php echo $this->_vars['list']['c_name']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>		 </td>
      </tr>
      <tr>
        <td align="right" ><span style="border:0px">��ɫ��</span></td>
        <td > 
		  <script type="text/javascript" src="js/jquery.iColorPicker.js"></script>
          <input name="h_color"  id="h_color" type="text"  class="iColorPicker input_text_200" onclick="iColorShow('h_color','icp_h_color')"  value="<?php echo $this->_vars['show']['h_color']; ?>
"/>
		
        </td>
      </tr>
      <tr>
        <td align="right" >�Ӵ֣�</td>
        <td ><label>
          <input name="h_strong" type="checkbox" value="1" <?php if ($this->_vars['show']['h_strong'] == "1"): ?>checked="checked"<?php endif; ?> />
        </label></td>
      </tr>
      <tr>
        <td align="right" >�ϴ��ļ���</td>
        <td ><input type="file" name="upfile"    onkeydown="alert('�����Ҳࡰ�����ѡ���������ϵ��ļ���');return false"   style="height:21px; width:210px; border:1px #999999 solid" />
		<span class="admin_note">ֻ���ϴ�doc/ppt/xls/rtf�ļ�</span>
		</td>
      </tr>
      <tr>
        <td align="right" >����д�ļ�·����</td>
        <td > 
          <input name="url" type="text"  class="input_text_200" maxlength="200" value="<?php echo $this->_vars['show']['h_fileurl']; ?>
"/>
		  <span class="admin_note">��:http://www.123.com/abc/123.doc</span>
         </td>
      </tr>
	   <tr>
        <td align="right" >����</td>
        <td > 
          <input name="h_order" type="text"  class="input_text_200" maxlength="3" value="<?php echo $this->_vars['show']['h_order']; ?>
"/>
		  
		  <span class="admin_note">����Խ������Խ��ǰ</span>
         </td>
      </tr>
      <tr>
        <td align="right" >&nbsp;</td>
        <td height="50" >
		<input name="id" type="hidden" value="<?php echo $this->_vars['show']['h_id']; ?>
" />
		
		<input type="submit" name="Submit" value="����" class="admin_submit"   />&nbsp;</td>
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