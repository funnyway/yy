<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-17 10:07 ?D1��������?����?? */ ?>
<div class="topnav">
<a href="admin_help.php?act=list" <?php if ($this->_vars['act'] == 'list'): ?>class="select"<?php endif; ?>><u>�����б�</u></a>
<a href="admin_help.php?act=add" <?php if ($this->_vars['act'] == 'add'): ?>class="select"<?php endif; ?>><u>���</u></a> 
<a href="?act=category" <?php if ($this->_vars['act'] == "category" || $this->_vars['act'] == "category_add" || $this->_vars['act'] == "edit_category"): ?>class="select"<?php endif; ?>><u>��������</u></a>
<div class="clear"></div>
</div>