<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-01-03 13:33 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
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
	<h2>��ʾ��</h2>
	<p>
�������ڻָ��������ݵ�ͬʱ����ȫ������ԭ�����ݣ���ȷ���ָ�ǰ�ѽ���վ�رգ��ָ�ȫ����ɺ���Խ���վ���¿��š�<br />
        ���ݻָ�����ֻ�ָܻ��ɵ�ǰϵͳ �����������ļ����������������ʽ�����޷�ʶ��
</p>
</div>
 <form id="form1" name="form1" method="post" action="?act=del">
 <?php echo $this->_vars['inputtoken']; ?>

<table width="100%" border="0" cellpadding="0" cellspacing="0"  style="color: #333333" id="list" class="link_lan">
  <tr>
    <td width="40%"   class="admin_list_tit admin_list_first">
	 <label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="ȫѡ/��ѡ" />�����ļ���</label>	</td>
    <td align="center"  class="admin_list_tit">�汾</td>
    <td align="center"   class="admin_list_tit">MySQL�汾</td>
    <td align="center"   class="admin_list_tit">ʱ��</td>
    <td align="center"    class="admin_list_tit">�ߴ�</td>
    <td align="center"    class="admin_list_tit" >����</td>
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
" onclick="return confirm('��ԭ�������������ݣ���ȷ��Ҫ��ô����')">��ԭ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del&file_name=<?php echo $this->_vars['li']['file_name']; ?>
&<?php echo $this->_vars['urltoken']; ?>
"  onclick="return confirm('��ȷ��Ҫɾ����')">ɾ��</a>	</td>
  </tr>
	 <?php endforeach; endif; ?>
</table>
   <?php if (! $this->_vars['list']): ?>
<div class="admin_list_no_info">û���κ���Ϣ��</div>
<?php endif; ?>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
<input name="�ύ" type="submit" class="admin_submit" id="ButDel" value="ɾ����ѡ"/>
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