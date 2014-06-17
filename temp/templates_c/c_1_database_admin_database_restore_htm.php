<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-01-03 13:33 中国标准时间 */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("database/admin_database_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>提示：</h2>
	<p>
本功能在恢复备份数据的同时，将全部覆盖原有数据，请确定恢复前已将网站关闭，恢复全部完成后可以将网站重新开放。<br />
        数据恢复功能只能恢复由当前系统 导出的数据文件，其他软件导出格式可能无法识别。
</p>
</div>
 <form id="form1" name="form1" method="post" action="?act=del">
 <?php echo $this->_vars['inputtoken']; ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="color: #333333" id="list" class="link_lan">
  <tr>
    <td width="40%"   class="admin_list_tit admin_list_first">
	 <label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="全选/反选" />备份文件名</label>	</td>
    <td align="center"  class="admin_list_tit">版本</td>
    <td align="center"   class="admin_list_tit">MySQL版本</td>
    <td align="center"   class="admin_list_tit">时间</td>
    <td align="center"    class="admin_list_tit">尺寸</td>
    <td align="center"    class="admin_list_tit" >操作</td>
  </tr>
  <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
  <tr>
    <td  class="admin_list admin_list_first">
	 <input name="file_name[]" type="checkbox"  value="<?php echo $this->_vars['li']['file_name']; ?>
" />
	<?php echo $this->_vars['li']['file_name']; ?>
</td>
    <td align="center" class="admin_list" ><?php echo $this->_vars['li']['74cms_ver']; ?>
</td>
    <td align="center" class="admin_list"><?php echo $this->_vars['li']['mysql_ver']; ?>
</td>
    <td align="center" class="admin_list"><?php echo $this->_vars['li']['add_time']; ?>
</td>
    <td align="center" class="admin_list"><?php echo $this->_vars['li']['file_size']; ?>
 <em  style="font-size:10px;">MB</em></td>
    <td align="center" class="admin_list link_lan">
	<a href="?act=import&file_name=<?php echo $this->_vars['li']['file_name']; ?>
&<?php echo $this->_vars['urltoken']; ?>
" onclick="return confirm('还原将覆盖现有数据，你确定要这么做吗？')">还原</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del&file_name=<?php echo $this->_vars['li']['file_name']; ?>
&<?php echo $this->_vars['urltoken']; ?>
"  onclick="return confirm('你确定要删除吗？')">删除</a>	</td>
  </tr>
	 <?php endforeach; endif; ?>
</table>
   <?php if (! $this->_vars['list']): ?>
<div class="admin_list_no_info">没有任何信息！</div>
<?php endif; ?>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
<input name="提交" type="submit" class="admin_submit" id="ButDel" value="删除所选"/>
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