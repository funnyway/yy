<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:36 ?D1��������?����?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sms/admin_sms_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
 <div class="toptip link_g">
	<h2>��ʾ��</h2>
		<p>
		����ģ�����շ�ģ�飬�����뿪ͨ�����ʹ�ã����� <a href="http://www.74cms.com/sms.php" target="_blank">����</a> ���뿪ͨ��
		<br />
		�ʷѱ�׼����ϵ��ʿ���ۻ�ȡ�������������� <a href="http://www.74cms.com" target="_blank">��ʿ�˲�ϵͳ�ٷ���վ</a></p>
  </div>
<div class="toptit">����</div>
<form action="?act=set_save" method="post"   name="form1" id="form1">
<?php echo $this->_vars['inputtoken']; ?>

<table width="700" border="0" cellspacing="8" cellpadding="1" style=" margin-bottom:3px; " id="method_sendmail">
         <tr>
            <td width="121" align="right">�������ŷ��ͣ�</td>
            <td width="560">
      <label><input name="open" type="radio" value="1"    <?php if ($this->_vars['sms']['open'] == "1"): ?>checked="checked"<?php endif; ?>/> ����</label>
      &nbsp;&nbsp;&nbsp;
      <label><input name="open" type="radio" value="0"    <?php if ($this->_vars['sms']['open'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>            </td>
          </tr>
      </table>
 <div class="toptit">��֤����<span class="admin_note" style="color: rgb(153, 153, 153);">���ڷ�����֤����Ķ��Žӿ�</span></div>
		<table width="700" border="0" cellspacing="8" cellpadding="1" style=" margin-bottom:3px; " id="method_sendmail">
          
          <tr>
            <td width="121" align="right">�ʻ�����</td>
            <td width="560"><input name="captcha_sms_name" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['captcha_sms_name']; ?>
"  /></td>
          </tr>
          <tr>
            <td align="right">��Կ��</td>
            <td><input name="captcha_sms_key" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['captcha_sms_key']; ?>
"  /></td>
          </tr>
      </table>
 <div class="toptit">֪ͨ��<span class="admin_note" style="color: rgb(153, 153, 153);">���ڷ���֪ͨ��Ķ��Žӿ�</span></div>
      <table width="700" border="0" cellspacing="8" cellpadding="1" style=" margin-bottom:3px; " id="method_sendmail">
          <tr>
            <td width="121" align="right">�ʻ�����</td>
            <td width="560"><input name="notice_sms_name" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['notice_sms_name']; ?>
"  /></td>
          </tr>
          <tr>
            <td align="right">��Կ��</td>
            <td><input name="notice_sms_key" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['notice_sms_key']; ?>
"  /></td>
          </tr>
      </table>
      <div class="toptit">������<span class="admin_note" style="color: rgb(153, 153, 153);">�������͵Ķ��Žӿ�</span></div>
      <table width="700" border="0" cellspacing="8" cellpadding="1" style=" margin-bottom:3px; " id="method_sendmail">
          <tr>
            <td width="121" align="right">�ʻ�����</td>
            <td width="560"><input name="free_sms_name" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['free_sms_name']; ?>
"  /></td>
          </tr>
          <tr>
            <td align="right">��Կ��</td>
            <td><input name="free_sms_key" type="text"  class="input_text_200"  value="<?php echo $this->_vars['sms']['free_sms_key']; ?>
"  /></td>
          </tr>
      </table>
	  <table width="700" border="0" cellspacing="8" cellpadding="1"  >
        
          <tr>
            <td width="120" align="right">&nbsp;</td>
            <td> 
              <input name="save" type="submit" class="admin_submit"    value="����"/>
            </td>
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