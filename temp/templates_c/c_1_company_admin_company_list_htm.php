<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:51 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript" src="js/jquery.userinfotip-min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#ButAudit").QSdialog({
	DialogTitle:"��ѡ��",
	DialogContent:"#OpAuditLayer",
	DialogContentType:"id",
	DialogAddObj:"#OpAudit",	
	DialogAddType:"html"	
	});
	$("#ButDel").QSdialog({
	DialogTitle:"��ѡ��",
	DialogContent:"#OpDelLayer",
	DialogContentType:"id",
	DialogAddObj:"#OpDel",	
	DialogAddType:"html"	
	});
	$("#Butrefresh").QSdialog({
	DialogTitle:"��ѡ��",
	DialogContent:"#OprefreshLayer",
	DialogContentType:"id",
	DialogAddObj:"#Oprefresh",	
	DialogAddType:"html"	
	});
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
<div class="seltpye_x">
		<div class="left">��֤״̬</div>	
		<div class="right">
			<a href="<?php echo $this->_run_modifier("audit:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == ""): ?> class="select"<?php endif; ?>>����</a>
			<a href="<?php echo $this->_run_modifier("audit:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "1"): ?>class="select"<?php endif; ?>>��֤ͨ��</a>
			<a href="<?php echo $this->_run_modifier("audit:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "2"): ?>class="select"<?php endif; ?>>�ȴ���֤</a>
			<a href="<?php echo $this->_run_modifier("audit:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "3"): ?>class="select"<?php endif; ?>>��֤δͨ��</a>
			<a href="<?php echo $this->_run_modifier("audit:0", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "0"): ?>class="select"<?php endif; ?>>δ��֤</a>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <div class="seltpye_x">
		<div class="left">���ʱ��</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("settr:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("settr:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("settr:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("settr:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("settr:180", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "180"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("settr:360", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "360"): ?>class="select"<?php endif; ?>>һ����</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
  <div class="seltpye_x">
		<div class="left">��ҵ��ҳ</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("yellowpages:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['yellowpages'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("yellowpages:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['yellowpages'] == "1"): ?>class="select"<?php endif; ?>>�Ѽ���</a>
		<a href="<?php echo $this->_run_modifier("yellowpages:0", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['yellowpages'] == "0"): ?>class="select"<?php endif; ?>>δ����</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
  <form id="form1" name="form1" method="post" action="?act=company_perform">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  class="admin_list_tit admin_list_first">
      <label id="chkAll"><input type="checkbox" name=" " title="ȫѡ/��ѡ" id="chk"/>��˾����</label>
	  </td>
	 
	  
      
	  <td    class="admin_list_tit">������Ա</td> 
	  <td  width="12%" class="admin_list_tit">Ӫҵִ��</td>  
      <td width="10%" align="center" class="admin_list_tit">��֤״̬</td>
	     
      <td width="10%" align="center" class="admin_list_tit">����ʱ��</td>
	   <td width="10%" align="center" class="admin_list_tit">ˢ��ʱ��</td>
	  <td width="10%" align="center" class="admin_list_tit">��ӷ�ʽ</td>
      <td width="8%" align="center" class="admin_list_tit">����</td>
    </tr>
	<?php if (count((array)$this->_vars['clist'])): foreach ((array)$this->_vars['clist'] as $this->_vars['list']): ?>
      <tr >
      <td class="admin_list admin_list_first" >
        <input name="y_id[]" type="checkbox" id="y_id" value="<?php echo $this->_vars['list']['uid']; ?>
" />
		<a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a>
		<?php if ($this->_vars['list']['yellowpages'] == '1'): ?><span style="color:#FF6600" class="vtip" title='�Ѽ�����ҵ��ҳ'>[��]</span><?php endif; ?>
		</td>
		
		<td  class="admin_list">
		<?php echo $this->_vars['list']['username']; ?>

		</td>
        <td class="admin_list">
		<?php if ($this->_vars['list']['license']): ?>
			<?php if ($this->_vars['list']['certificate_img']): ?>
			<a href="<?php echo $this->_vars['certificate_dir'];  echo $this->_vars['list']['certificate_img']; ?>
" target="_blank" title="����鿴"><?php echo $this->_vars['list']['license']; ?>
</a>&nbsp;
			<?php else: ?>
			<?php echo $this->_vars['list']['license']; ?>

			<?php endif; ?>
		<?php else: ?>
		<span  style="color: #999999">δ�ϴ�</span>
		<?php endif; ?>	
		</td>
		
        <td align="center" class="admin_list">
		<?php if ($this->_vars['list']['audit'] == "0"): ?>δ��֤<?php endif; ?>
		<?php if ($this->_vars['list']['audit'] == "1"): ?><span style="color: #009900">��֤ͨ��</span><?php endif; ?>
		<?php if ($this->_vars['list']['audit'] == "2"): ?><span style="color:#FF3300">�ȴ���֤</span><?php endif; ?>
		<?php if ($this->_vars['list']['audit'] == "3"): ?>��֤δͨ��<?php endif; ?>
		</td>
     
		      
        <td align="center" class="admin_list">
		<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		</td>
		<td align="center" class="admin_list">
		<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		</td>
		<td align="center" class="admin_list">
		<?php if ($this->_vars['list']['robot'] == "0"): ?>�˹�<?php endif; ?>
		<?php if ($this->_vars['list']['robot'] == "1"): ?>�ɼ�<?php endif; ?>		</td>
        <td width="8%" align="center" class="admin_list">
		<a href="?act=edit_company_profile&id=<?php echo $this->_vars['list']['id']; ?>
">�޸�</a>
		&nbsp;
		<a href="?act=management&id=<?php echo $this->_vars['list']['uid']; ?>
"  target="_blank"  class="userinfo"  id="<?php echo $this->_vars['list']['uid']; ?>
">����</a>
		</td>
      </tr>
      <?php endforeach; endif; ?>
    </table>
<span id="OpAudit"></span>
<span id="OpDel"></span>
<span id="Oprefresh"></span>
  </form>
	<?php if (! $this->_vars['clist']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>
  
	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
        <input type="button" name="" value="��֤��ҵ" class="admin_submit"  id="ButAudit" />
		<input type="button" name="" value="ˢ��" class="admin_submit"  id="Butrefresh" />
		<input type="button" name="" value="ɾ��" class="admin_submit"   id="ButDel"/>
		  
		</td>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "��˾��"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="��˾��">��˾��</li>
														<li id="2" title="��Աid">��˾id</li>
														<li id="3" title="��Ա��">��Ա��</li>
														<li id="4" title="��Աid">��Աid</li>														
														<li id="5" title="��ַ">��ַ</li>
														<li id="6" title="�绰">�绰</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
				<input name="act" type="hidden" value="company_list" />
				<input type="submit" name="" class="sbt" id="sbt" value="����"/>
				</div>
				<div class="clear"></div>
		  </div>
		  </form>
		  <script type="text/javascript">$(document).ready(function(){showmenu("#key_type_cn","#sehmenu","#key_type");});	</script>
	    </td>
      </tr>
  </table>
<div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div>
</div>
<div style="display:none" id="OpDelLayer">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td height="30" colspan="2"><strong  style="color:#0066CC; font-size:14px;">��ȷ��Ҫɾ����</strong></td>
      </tr>
    <tr>
      <td width="20" height="25">&nbsp;</td>
      <td><label>
        <input name="delete_company" type="checkbox" id="delete_company" value="yes" checked="checked" />
        ɾ����ҵ����</label></td>
    </tr>
	<tr>
      <td height="25">&nbsp;</td>
      <td><label>
        <input name="delete_jobs" type="checkbox" id="delete_jobs" value="yes" checked="checked"/>
        ɾ������ҵ��������Ƹ��Ϣ</label></td>
    </tr>
	<tr>
	  <td height="25">&nbsp;</td>
	  <td><input type="submit" name="delete" value="ȷ��" class="admin_submit"    /></td>
	  </tr>
  </table>
</div>
<!-- -->
<div style="display:none" id="OprefreshLayer">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td height="30" colspan="2"><strong  style="color:#0066CC; font-size:14px;">ˢ�¸���ҵ��ְλ��</strong></td>
      </tr>
    <tr>
      <td width="20" height="25">&nbsp;</td>
      <td><label>
        <input name="refresh_jobs" type="checkbox" id="refresh_jobs" value="yes" />
        ͬʱˢ����ѡ��ҵ��ְλ</label></td>
    </tr>
	 <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="set_refresh" value="ȷ��" class="admin_submit"    /></td>
    </tr>
  </table>
</div>
<!-- -->
<div style="display:none" id="OpAuditLayer">
 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">����ѡ��ҵ����Ϊ��</strong></td>
    </tr>
	      <tr>
      <td height="25">&nbsp;</td>
      <td>
	  <label >
                      <input name="audit" type="radio" value="1" checked="checked"  />
                      ��֤ͨ�� </label>	  </td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><label >
                      <input type="radio" name="audit" value="3"  />
        ��֤δͨ��</label></td>
    </tr>
	 <tr>
      <td height="25">&nbsp;</td>
      <td>
	  <label >
	  <input type="radio" name="audit" value="2"  />      
	  �ȴ���֤
	  </label>	</td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="set_audit" value="ȷ��" class="admin_submit"    /></td>
    </tr>		  
  </table>
</div>
<!-- -->
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>