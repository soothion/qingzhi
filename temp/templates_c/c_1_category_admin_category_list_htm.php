<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 20:21 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	//�������ȡ��	
	$("#ButDel").click(function(){
		if (confirm('��ȷ��Ҫɾ����'))
		{
			$("form[name=form1]").attr("action","?act=del_category");
			$("form[name=form1]").submit()
		}
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
	<h2>��ʾ��</h2>
	<p>
��ʽ��Ӫ��ɾ������ᵼ����˷����������Ϣ���ʧ���޸Ĳ�����Ӱ�졣
</p>
</div>
  <form id="form1" name="form1" method="post" action="?act=category_save">
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan"  >
    <tr>
      <td height="26" class="admin_list_tit admin_list_first">
      <label id="chkAll">
	  <input type="checkbox" name=" " title="ȫѡ/��ѡ" id="chk"/><?php echo $this->_vars['group']['g_name']; ?>

	<span style="color: #999999; font-size:11px;">(<?php echo $this->_vars['group']['g_alias']; ?>
)</span> 
	  </label>
	  </td>
	  <td width="30%"   align="center"  class="admin_list_tit">����</td>
      <td width="30%"   class="admin_list_tit">����</td>
    </tr>
<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['li']): ?>
     <tr>
      <td   class="admin_list admin_list_first" >
      <input type="checkbox" name="id[]" value="<?php echo $this->_vars['li']['c_id']; ?>
"   />
	  <input name="c_id[]" type="hidden" value="<?php echo $this->_vars['li']['c_id']; ?>
" />
	  <input name="c_name[]" type="text"  value="<?php echo $this->_vars['li']['c_name']; ?>
" class="input_text_200"/>
	  <span style="color:#CCCCCC">(id:<?php echo $this->_vars['li']['c_id']; ?>
)</span>
	  </td>
	   <td align="center"  class="admin_list">	   
		 <input name="c_order[]" type="text"  value="<?php echo $this->_vars['li']['c_order']; ?>
" class="input_text_50"/>
			 </td>
      <td class="admin_list">
	 <a href="?act=edit_category&id=<?php echo $this->_vars['li']['c_id']; ?>
">�޸�</a>
	 &nbsp;&nbsp;
	 <a onclick="return confirm('ɾ�����޷��ָ�����ȷ��Ҫɾ����')" href="?act=del_category&id=<?php echo $this->_vars['li']['c_id']; ?>
&<?php echo $this->_vars['urltoken']; ?>
">ɾ��</a>
		</td>
    </tr>
	<?php endforeach; endif; ?>
	</table>
	<?php if (! $this->_vars['category']): ?>
<div class="admin_list_no_info">��������»�û�з��࣬����ӡ�</div>
<?php endif; ?>
	<table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
		<?php if ($this->_vars['category']): ?>
		<input name="ButSave" type="submit" class="admin_submit" id="ButSave" value="�����޸�"/>
		<?php endif; ?>
        <input name="ButADD" type="button" class="admin_submit" id="ButADD" value="��ӷ���"  onclick="window.location='?act=add_category&alias=<?php echo $this->_vars['group']['g_alias']; ?>
'"/>
		<input name="ButDel" type="button" class="admin_submit" id="ButDel"  value="ɾ����ѡ" />
		<input name="location" type="button" class="admin_submit"   value="���ط�����" onclick="window.location='?act=grouplist'" />
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