<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 20:24 中国标准时间 */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#add_form").click(function()
	{
	$("#html").append($("#html_tpl").html());
	});
	
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
点击“继续添加”按钮，可同时添加多个分类！<br />
</p>
</div>
<div class="toptit">在 <span style="color:#0066CC">[<?php echo $this->_vars['group']['g_name']; ?>
] </span>下新增分类</div>
<form id="form1" name="form1" method="post" action="?act=add_category_save">
<?php echo $this->_vars['inputtoken']; ?>

<div id="html_tpl">
<table width="100%" border="0" cellspacing="6" cellpadding="0" style="border-bottom:1px #96B7E2 dashed">
  <tr>
    <td width="120" align="right">名称:</td>
    <td><input name="c_name[]" type="text" class="input_text_200"  value="" /></td>
  </tr>
    <tr>
    <td width="120" align="right">排序:</td>
    <td>	
	<input name="c_order[]" type="text" class="input_text_200"  value="0" />
	<input name="c_alias[]" type="hidden" value="<?php echo $this->_vars['group']['g_alias']; ?>
" />
	<input name="c_parentid[]" type="hidden" value="0" />
	</td>
  </tr>
  <?php if ($this->_vars['group']['g_alias'] == "QS_officebuilding"): ?>
      <tr>
    <td width="120" align="right">说明:</td>
    <td>	
	<input name="c_note[]" type="text" class="input_text_200" maxlength="60" /> 
	<span class="admin_note">如：建设与东环路交叉口鼎元时代中心</span>
	</td>
  </tr>
  <?php endif; ?>
</table>
</div>
<div id="html"></div>
<table width="100%" border="0" cellspacing="6" cellpadding="0">
  <tr>
    <td width="120"> </td>
    <td>
	<input type="submit" name="addsave" value="保存" class="admin_submit" />
		  <input type="button" name="add_form" id="add_form" value="继续添加" class="admin_submit" />
		  <input name="submit22" type="button" class="admin_submit"    value="返 回" onclick="history.go(-1)"/>
	
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