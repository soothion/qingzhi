<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 15:21 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"><?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("users/admin_users_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="seltpye_x">
		<div class="left">��¼״̬</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("log_type:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("log_type:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "1"): ?>class="select"<?php endif; ?>>��¼�ɹ�</a>
		<a href="<?php echo $this->_run_modifier("log_type:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['log_type'] == "2"): ?>class="select"<?php endif; ?>>��¼ʧ��</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td   class="admin_list_tit admin_list_first">�û���</td>
      <td   class="admin_list_tit">��¼״̬</td>
	  <td  class="admin_list_tit">˵��</td>
      <td width="15%"  class="admin_list_tit"> ��¼ʱ�� </td>
      <td width="15%" class="admin_list_tit">��¼IP</td>
      
    </tr>
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
    <tr>
      <td class="admin_list admin_list_first"> <?php echo $this->_vars['li']['admin_name']; ?>
	</td>
      <td class="admin_list">
	  <?php if ($this->_vars['li']['log_type'] == "1"): ?>
	  ��¼�ɹ�
	  <?php else: ?>
	  <span style="color:#FF0000">��¼ʧ��</span>
	  <?php endif; ?>
	  </td>
	  <td class="admin_list"><?php echo $this->_vars['li']['log_value']; ?>
</td>
      <td class="admin_list"> <?php echo $this->_run_modifier($this->_vars['li']['add_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
 </td>
      <td class="admin_list"><?php echo $this->_vars['li']['log_ip']; ?>
</td>
      
    </tr>
	 <?php endforeach; endif; ?>
  </table>
    
	<?php if (! $this->_vars['list']): ?>
<div class="admin_list_no_info">û���κ���Ϣ��</div>
<?php endif; ?>
<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
<input type="button" class="admin_submit" id="ButAudit" value="����"  onclick="window.location='?'"/>
		</td>
        <td width="305" align="right"> 
		
	    </td>
      </tr>
  </table>
 <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>