<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:36 ?D1ú±ê×?ê±?? */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	$(".leftimg").click(function()
	{
		$(".Sclass_"+$(this).attr("id")).toggle();
		SetCat($(this).attr("id"));
		if ($(".Sclass_"+$(this).attr("id")).css("display")=="none")
		{
		$(this).attr("src","images/left_e.gif");
		$(".Sclasst_"+$(this).attr("id")).hide();
		}
		else
		{
		$(this).attr("src","images/left_d.gif");
		$(".leftimg1").attr("src","images/left_e.gif");
		
		}
	});
	$(".leftimg1").live('click',function()
	{
		$(".Sclass1_"+$(this).attr("id")).toggle();
		SetCat1($(this).attr("id"),$(this).attr("parentid"));
		if ($(".Sclass1_"+$(this).attr("id")).css("display")=="none")
		{
		$(this).attr("src","images/left_e.gif");
		}
		else
		{
		$(this).attr("src","images/left_d.gif");
		}
	});
	
	//全选
	$('#categorychkAll').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").attr('checked'))});
	//点击大类，选择小类
	$(".Bcheck").click(function()
	{
		SetCat($(this).attr("id"));
		$(".Scheck_"+$(this).attr("id")).attr("checked",$(this).attr("checked"));
		$(".Scheck_"+$(".Scheck_"+$(this).attr("id")).val()).attr("checked",$(this).attr("checked"));
	});
	$(".mid").live('click', function()
	{
		SetCat($(this).attr("id"));
		$(".Scheck_"+$(this).val()).attr("checked",$(this).attr("checked"));
		$(".Scheck_"+$(this).val()).attr("checked",$(this).attr("checked"));
	});
	//点击子类 释放父级的勾选
	$(":checkbox[class^='Scheck_']").live('click', function()
	{
		if ($(this).attr("checked")==false)
		{
			var pid=$(this).attr("id");
			$(".Bcheck[id="+pid+"]").attr("checked","");
			$(".middle_"+pid).attr("checked","");
			$(".Bcheck[id="+$(".middle_"+pid).attr("id")+"]").attr("checked","");
		}
	});
	//添加子分类
	$('.AddCat').live('click', function()
	{
		var pid=$(this).attr("id");
		 var html="<tr class=\"Sclass_"+pid+"\"  >";
		html+="<td  class=\"admin_list\"  style=\"padding-left:53px; color:#FF6600\">";
		html+="<img src=\"images/cat_left1.gif\" border=\"0\" align=\"absmiddle\" />";
		html+=" <input type=\"checkbox\" name=\"add_id[]\" value=\"\" class=\"Scheck_"+pid+"\"/>";
		html+="<input name=\"add_pid[]\" type=\"hidden\" value="+pid+" />";
		html+=" <input name=\"add_categoryname[]\" type=\"text\"  value=\"\" class=\"input_text_150\"/>";
		html+="</td>";
		html+="<td align=\"center\"  class=\"admin_list\">";
		html+="<input name=\"add_category_order[]\" type=\"text\"  value=\"0\" class=\"input_text_50\"/>";
		html+="</td>";
		html+="<td class=\"admin_list\"  >";
		html+="&nbsp;";
		html+="</td>";				
		html+="</tr>";
		$(this).parent().parent().before(html);
		//$(this).parent("tr").before(html);		
	});	
		//添加顶层分类
	$(".AddCatPid").click(function()
	{
		 var html="<tr>";
		html+="<td  class=\"admin_list admin_list_first\">";
		html+=" <input type=\"checkbox\" name=\"add_id[]\" value=\"\" class=\"Bcheck\"/>  ";
		html+=" <img src=\"images/left_d.gif\" border=\"0\" align=\"absmiddle\"  /> ";
		html+=" <input name=\"add_pid[]\" type=\"hidden\" value\"0\" />";
		html+=" <input name=\"add_categoryname[]\" type=\"text\"  value=\"\" class=\"input_text_150\"/> ";
		html+="</td>";
		html+="<td align=\"center\"  class=\"admin_list\">";
		html+="<input name=\"add_category_order[]\" type=\"text\"  value=\"0\" class=\"input_text_50\"/>";
		html+="</td>";
		html+="<td class=\"admin_list\"  >";
		html+="&nbsp;";
		html+="</td>";				
		html+="</tr>";
		$(this).parent().parent().before(html);		
	});	
	//删除
	$("#ButDel").click(function(){
		var num=$(":checkbox[checked][id!='chk']").length;
		if (num==0)
		{
			alert("您没有选择项目");
			return false;
		}
		if (confirm("你选择了"+num+"个分类，删除顶级分类同时将删除其子类，确定都要删除吗？"))
		{
			$("form[name=form1]").attr("action","?act=del_district");
			$("form[name=form1]").submit()
		}
	});
	function SetCat(pid)
	{
		if ($(".Sclass_"+pid).length == 0)
		{
		MakeCat(pid);
		}
	}
	function SetCat1(pid,parentid)
	{
		if ($(".Sclass1_"+pid).length == 0)
		{
		MakeCat1(pid,parentid);
		}
	}
	function MakeCat1(pid,parentid)
	{
		var tsTimeStamp= new Date().getTime();
		$.get("admin_ajax.php", {"act":"get_cat_city","tstime":tsTimeStamp,"pid":pid},
			function (data,textStatus)
			 {	
			 	if (data)
				{
				 var str=data.split("|");
				 var i=1;
				 var html="";
				 	for (x in str)
					{
					var val=str[x].split(",");
					html+="<tr class=\"Sclass1_"+pid+" Sclasst_"+parentid+"\">";
			  		html+="<td  class=\"admin_list\"  style=\"padding-left:53px;\">";
			  		html+="<img src=\"images/cat_left1.gif\" border=\"0\" align=\"absmiddle\" />";
			  		html+="<img src=\"images/cat_left1.gif\" border=\"0\" align=\"absmiddle\" />";
			  		html+="<input type=\"checkbox\" name=\"id[]\" value=\""+val[0]+"\" class=\"Scheck_"+pid+"\" id=\""+pid+"\"/>";
					html+="<input name=\"save_id[]\" type=\"hidden\" value=\""+val[0]+"\" />";
			  		html+="<input name=\"categoryname[]\" type=\"text\"  value=\""+val[1]+"\" class=\"input_text_150\"/>";
			 		html+="<span style=\"color: #CCCCCC\">(id:"+val[0]+")</span></td>";
			   		html+="<td align=\"center\"  class=\"admin_list\">";
			  		html+="<input name=\"category_order[]\" type=\"text\"  value=\""+val[2]+"\" class=\"input_text_50\"/>";
			  		html+="</td>";
			  		html+="<td class=\"admin_list\" style=\"padding-left:85px;\">";			  
			 		html+="<a href=\"?act=edit_district&id="+val[0]+"\">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
					html+="<a onclick=\"return confirm('你确定要删除吗？')\" href=\"?act=del_district&id="+val[0]+"&<?php echo $this->_vars['urltoken']; ?>
\">删除</a>";
					html+="</td>";	
					html+="</tr>";
					i++;
					}
					// html+="<tr class=\"Sclass_"+pid+"\">";
					// html+="<td  class=\"admin_list\"  style=\"padding-left:53px; color:#FF6600\">";
					// html+="<img src=\"images/cat_left2.gif\" border=\"0\" align=\"absmiddle\" />";
					// html+="<img src=\"images/act_add.gif\" border=\"0\" align=\"absmiddle\"  style=\" margin:5px;\" />";
					// html+="<span class=\"AddCat\" id=\""+pid+"\" style=\" text-decoration:underline; cursor:pointer\">增加分类</span>";
					// html+="</td>";
					// html+="<td align=\"center\"  class=\"admin_list\">&nbsp;";					   
					// html+="</td>";
					// html+="<td class=\"admin_list\"  >&nbsp;";
					// html+="</td>	";					
					// html+="</tr>";
					$("#Sclass_"+pid).after(html);
					//如果大类已经选择，则小类也勾选
					if ($(".Bcheck[id="+pid+"]").attr("checked"))
					{
					$(".Scheck_"+pid).attr("checked","true");
					}
				}
			 }
		);
	}
	function MakeCat(pid)
	{
		var tsTimeStamp= new Date().getTime();
		$.get("admin_ajax.php", {"act":"get_cat_city","tstime":tsTimeStamp,"pid":pid},
			function (data,textStatus)
			 {	
			 	if (data)
				{
				 var str=data.split("|");
				 var i=1;
				 var html="";
				 	for (x in str)
					{
					var val=str[x].split(",");
					html+="<tr class=\"Sclass_"+pid+"\" id=\"Sclass_"+val[0]+"\">";
			  		html+="<td  class=\"admin_list\"  style=\"padding-left:53px;\">";
			  		html+="<img src=\"images/cat_left1.gif\" border=\"0\" align=\"absmiddle\" />";
			  		<!-- html+='<img src="images/left_e.gif" border="0" align="absmiddle" parentid="'+pid+'" id="'+val[0]+'" class="leftimg1 pointer" />'; -->
			  		html+="<input type=\"checkbox\" name=\"id[]\" value=\""+val[0]+"\" class=\"Scheck_"+pid+" middle_"+val[0]+" mid\" id=\""+pid+"\"/>";
					html+="<input name=\"save_id[]\" type=\"hidden\" value=\""+val[0]+"\" />";
			  		html+="<input name=\"categoryname[]\" type=\"text\"  value=\""+val[1]+"\" class=\"input_text_150\"/>";
			 		html+="<span style=\"color: #CCCCCC\">(id:"+val[0]+")</span></td>";
			   		html+="<td align=\"center\"  class=\"admin_list\">";
			  		html+="<input name=\"category_order[]\" type=\"text\"  value=\""+val[2]+"\" class=\"input_text_50\"/>";
			  		html+="</td>";
			  		html+="<td class=\"admin_list\">";			
			  		<!-- html+="<a href=\"?act=add_district&parentid="+val[0]+"\">此类下加子类</a>&nbsp;&nbsp;&nbsp;&nbsp;";	   -->
			 		html+="<a href=\"?act=edit_district&id="+val[0]+"\">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;";	
					html+="<a onclick=\"return confirm('你确定要删除吗？')\" href=\"?act=del_district&id="+val[0]+"&<?php echo $this->_vars['urltoken']; ?>
\">删除</a>";
					html+="</td>";	
					html+="</tr>";
					i++;
					}
					html+="<tr class=\"Sclass_"+pid+"\">";
					html+="<td  class=\"admin_list\"  style=\"padding-left:53px; color:#FF6600\">";
					html+="<img src=\"images/cat_left2.gif\" border=\"0\" align=\"absmiddle\" />";
					html+="<img src=\"images/act_add.gif\" border=\"0\" align=\"absmiddle\"  style=\" margin:5px;\" />";
					html+="<span class=\"AddCat\" id=\""+pid+"\" style=\" text-decoration:underline; cursor:pointer\">增加分类</span>";
					html+="</td>";
					html+="<td align=\"center\"  class=\"admin_list\">&nbsp;";					   
					html+="</td>";
					html+="<td class=\"admin_list\"  >&nbsp;";
					html+="</td>	";					
					html+="</tr>";
					$("#tr_"+pid).after(html);
					//如果大类已经选择，则小类也勾选
					if ($(".Bcheck[id="+pid+"]").attr("checked"))
					{
					$(".Scheck_"+pid).attr("checked","true");
					}
				}
			 }
		);
	}
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("category/admin_category_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>提示：</h2>
	<p>
正式使用后删除分类会导致与此分类关联的信息类别丢失，修改不会受影响。<br />
删除顶级级分类将会自动删除此分类下的子分类。<br />
</p>
</div>
  <form id="form1" name="form1" method="post" action="?act=district_all_save">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan"  >
    <tr>
      <td height="26" class="admin_list_tit admin_list_first" >
      <label id="categorychkAll"><input type="checkbox" name=" " title="全选/反选" id="chk" />
      地区分类</label>
	 
	  </td>
	  <td width="160"   align="center"  class="admin_list_tit">排序</td>
      <td width="260"   align="center" class="admin_list_tit">操作</td>
    </tr>
	  <?php if (count((array)$this->_vars['district'])): foreach ((array)$this->_vars['district'] as $this->_vars['list']): ?>
     <tr id="tr_<?php echo $this->_vars['list']['id']; ?>
">
      <td   class="admin_list admin_list_first" >
      <input type="checkbox" name="id[]" value="<?php echo $this->_vars['list']['id']; ?>
" id="<?php echo $this->_vars['list']['id']; ?>
"  class="Bcheck"/>
	  <input name="save_id[]" type="hidden" value="<?php echo $this->_vars['list']['id']; ?>
" />
      <img src="images/left_e.gif" border="0" align="absmiddle"  id="<?php echo $this->_vars['list']['id']; ?>
" class="leftimg pointer"/>
	  <input name="categoryname[]" type="text"  value="<?php echo $this->_vars['list']['categoryname']; ?>
" class="input_text_150" style="color:#0066CC;   "/>
	  <span style="color:#CCCCCC">(id:<?php echo $this->_vars['list']['id']; ?>
)</span>	  </td>
	   <td align="center"  class="admin_list">
	   <input name="category_order[]" type="text"  value="<?php echo $this->_vars['list']['category_order']; ?>
" class="input_text_50"/>
	  </td>
      <td class="admin_list">
	  <a href="?act=add_district&parentid=<?php echo $this->_vars['list']['id']; ?>
">此类下加子类</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?act=edit_district&id=<?php echo $this->_vars['list']['id']; ?>
">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;

			  <a onclick="return confirm('你确定要删除吗？')" href="?act=del_district&id=<?php echo $this->_vars['list']['id']; ?>
&<?php echo $this->_vars['urltoken']; ?>
">删除</a>
			 </td>
    </tr>
      <?php endforeach; endif; ?>
		  <tr >
			  <td  class="admin_list"  style="padding-left:10px; color:#FF6600">
			  <img src="images/act_add.gif" border="0" align="absmiddle"  style=" margin:5px;" />
			  <span class="AddCatPid"   style=" text-decoration:underline; cursor:pointer">增加顶级分类</span>
			  </td>
			   <td align="center"  class="admin_list">&nbsp;
			   
			  </td>
			  <td class="admin_list"  >&nbsp;
			  
			    </td>
				
			</tr>
    </table>
	<table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
		<input name="ButSave" type="submit" class="admin_submit" id="ButSave" value="保存分类"/>
        <input name="ButADD" type="button" class="admin_submit" id="ButADD" value="添加分类"  onclick="window.location='?act=add_district'"/>
		<input name="ButDel" type="button" class="admin_submit" id="ButDel"  value="删除所选" />
		</td>
        <td width="305" align="right">
	  
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