<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:36 ?D1ú±ê×?ê±?? */ ?>
<div class="topnav">
<a href="admin_category.php" <?php if ($this->_vars['navlabel'] == 'district'): ?>class="select"<?php endif; ?>><u>地区分类</u></a>
<a href="admin_category.php?act=jobs" <?php if ($this->_vars['navlabel'] == 'jobs'): ?>class="select"<?php endif; ?>><u>职位分类</u></a>
<?php if ($this->_vars['_PLUG']['hunter']['p_install'] == 2): ?>
<a href="admin_category.php?act=hunter_jobs" <?php if ($this->_vars['navlabel'] == 'hunter_jobs'): ?>class="select"<?php endif; ?>><u>高级职位分类</u></a>
<?php endif; ?>
<a href="admin_category.php?act=colorlist" <?php if ($this->_vars['navlabel'] == 'color'): ?>class="select"<?php endif; ?>><u>颜色分类</u></a>
<a href="admin_category.php?act=grouplist" <?php if ($this->_vars['navlabel'] == 'group'): ?>class="select"<?php endif; ?>><u>其他分类组</u></a>
<div class="clear"></div>
</div>