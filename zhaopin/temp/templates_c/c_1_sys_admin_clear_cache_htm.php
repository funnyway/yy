<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-13 13:36 ?D1��������?����?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
  <div class="toptip">
	<h2>��ʾ��</h2>
	<p>�����������ݻָ����������߹��������쳣��ʱ��������ʹ�ñ������������ɻ��档���»����ʱ�򣬿����÷������������ߣ��뾡���ܿ���Ա���ʵĸ߷�ʱ�� <br />
���ݻ��棺������վ���á����ֹ����ʼ����õȻ��� <br />
ģ�建�棺����ģ�塢���Ȼ����ļ��������޸���ģ����߷�񣬵���û��������Ч��ʱ��ʹ�� </p>
  </div>
<div class="toptit">����ѡ��</div>
  <form id="form1" name="form1" method="post" action="?act=clear_cache"> 
  <table width="100%" border="0" cellspacing="0" cellpadding="4">
      <td height="60" style=" line-height:220%; color:#666666;">
	  <table width="600" height="100" border="0" cellpadding="2" cellspacing="2" id="selecttplcache">
        <tr>
          <td height="45" align="center"><label ><input  type="checkbox" checked="checked" value="datacache" name="type[]" />
        ���ݻ���</label> <label >
        <input id="tplcache" type="checkbox"   value="tplcache" name="type[]" checked="checked"  />
       ģ�建��</label></td>
        </tr>
        <tr>
          <td height="45" align="center"><input name="submit" type="submit" class="admin_submit"    value="ȷ��" onclick="document.getElementById('selecttplcache').style.display='none';document.getElementById('hide').style.display='block';"/></td>
        </tr>
      </table>      
        <table width="600" height="100" border="0" cellpadding="5" cellspacing="0" id="hide" style="display:none">
          <tr>
            <td align="center" valign="bottom"><img src="images/ajax_loader.gif"  border="0" /></td>
          </tr>
          <tr>
            <td align="center" valign="top" style="color: #009900">���ڸ��»��棬���Ժ�......</td>
          </tr>
        </table></td>
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