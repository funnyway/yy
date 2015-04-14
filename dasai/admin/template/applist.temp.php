<?php
if($_SESSION['toprx_api_userid'] != 1 || $_SESSION['admin_login'] != '超级管理员'){
	echo '123';die;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>全部应用</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<link href="../css/page.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top">
<div class="right">
<div class="h6"><span class="zspan">应用列表</span><span class="mspan"></span></div>
<a href="admin.php?action=applist"><div class="<?php  if($action == 'applist' ) echo 'DivTab hover';else echo 'DivTab';?>" id="btn_applist" ><input type="hidden" value=1 /><span>应用列表</span></div></a>
<a href="admin.php?action=apilist"><div class="<?php  if($action == 'apilist' ) echo 'DivTab hover';else echo 'DivTab';?>" id="btn_apilist"><input type="hidden" value=2 /><span>接口列表</span></div></a>


<table width="100%" border="0" cellpadding="0" cellspacing="0" class="table01">
  <tr>
  <th width="261" class="th1">应用名称</th>
  <th width="261" class="th1">用户名</th>
  <th width="200" class="th1">应用状态</th>
  <th width="200" class="th1">API总使用量</th>
  <th width="400" class="th1">操作</th>
  </tr>
  <?php
  foreach($rs as $k=>$v) {
  ?>
  <tr>
    <td align="center"><?php echo $v['appname'];?></td>
    <td align="center"><?php echo $v['account'];?></td>
    <td align="center"><?php 
    	switch($v['status']) {
    		case 0:
    			echo '未审核（或暂停使用）';break;
	    			default:
	    				echo '正常使用';
    	}
    ?></td>
    <td align="center"><?php echo $v['callCount'];?></td>
    <td align="center">
	    <?php 
	    	if($v['status'] == 0) {
	    		echo '<a href="#" class="btn-pass" appid='.$v['appid'].'>审核通过</a>';
	    	}else {
	    		echo '<a href="#"  class="btn-stop" appid='.$v['appid'].'>暂停使用</a>';
	    	}
	    ?>
	   <a href="callhistory.php?appid=<?php echo $v['appid']?>"  target="_blank" class="btn-stop" appid='.$v['appid'].'>查看详细</a>
	    
    </td>
  </tr>
  <?php 
  	}
  ?>

</table>

	  </div>	</td>
  </tr>
</table>
<div id="pagediv">
<?php 
require('class/page.php');
$p = new Page($page, $count, $_SERVER['PHP_SELF'],$pageSize,'page-current');
$p->render();
?>
  <div>
<form action="appmanage.php" id="gomangeform" method="get">
	<input type="hidden" id="appid" name="appid" value="" />
</form>
<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
	
<script type="text/javascript">
	$(function() {
		/*********Tab标签切换样式*********/
	//	$('.DivTab').bind('click',function(){
			//	$(this).addClass('hover').siblings().removeClass('hover');
	//	})
		
		$('.btn-pass').click(function() {
			var id = $(this).attr('appid');
				$.post('ajax/changeappstatus.php',{id:id,status:1},function(data) {
					console.log(data);
					if(data.status == 1 ) {
						window.location.href = '/hi/admin.php';
					}else {
						alert(msg);
					}
				},'json')
		})
		$('.btn-stop').click(function() {
			var id = $(this).attr('appid');
				$.post('ajax/changeappstatus.php',{id:id,status:0},function(data) {
					if(data.status == 1 ) {
						window.location.href = '/hi/admin.php'
					}else {
						alert(msg);
					}	
				},'json')
		})
	})
</script>
</body>
</html>