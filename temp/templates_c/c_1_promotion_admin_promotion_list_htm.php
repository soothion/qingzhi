<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-25 09:38 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript" src="js/jquery.userinfotip-min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//�������ȡ��	
	$("#ButDel").click(function(){
		
		if (confirm('��ȷ��Ҫȡ���ƹ���'))
		{
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
echo $this->_fetch_compile_include("promotion/admin_promotion_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
ϵͳ���Զ�ȡ�����ڵ���ҵ�ƹ㡣<br />
���б���ʾ���ڡ�ֹͣ��δͨ����˵�ְλ���ƹ���Ϣ��<br />
</p>
</div>
<div class="seltpye_x">
		<div class="left">����ʱ��</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("settr:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("settr:0", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "0"): ?>class="select"<?php endif; ?>>�Ѿ�����</a>
		<a href="<?php echo $this->_run_modifier("settr:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "3"): ?>class="select"<?php endif; ?>>�����ڵ���</a>
		<a href="<?php echo $this->_run_modifier("settr:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "7"): ?>class="select"<?php endif; ?>>һ���ڵ���</a>
		<a href="<?php echo $this->_run_modifier("settr:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "30"): ?>class="select"<?php endif; ?>>һ���ڵ���</a>
		<a href="<?php echo $this->_run_modifier("settr:90", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "90"): ?>class="select"<?php endif; ?>>�����ڵ���</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
<div class="seltpye_x">
		<div class="left">�ƹ㷽��</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("promotionid:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['promotionid'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<?php if (count((array)$this->_vars['cat'])): foreach ((array)$this->_vars['cat'] as $this->_vars['li']): ?>
		<a href="<?php echo $this->_run_modifier($this->_run_modifier("promotionid:", 'cat', 'plugin', 1, $this->_vars['li']['cat_id']), 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['promotionid'] == $this->_vars['li']['cat_id']): ?>class="select"<?php endif; ?>><?php echo $this->_vars['li']['cat_name']; ?>
</a>
		<?php endforeach; endif; ?>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
   <form id="form1" name="form1" method="post" action="?act=promotion_del">
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  width="30%" class="admin_list_tit admin_list_first">
     <label id="chkAll"><input type="checkbox" name="" title="ȫѡ/��ѡ" id="chk"/>�ƹ�ְλ</label>	 </td>
	  <td  width="20%" class="admin_list_tit">������˾</td>
	  <td  align="center"  class="admin_list_tit">��ԱID</td>
      <td align="center"  class="admin_list_tit">��ʼʱ��</td>
      <td  align="center"  class="admin_list_tit">����ʱ��</td>	  
      <td width="10%" align="center"  class="admin_list_tit">����</td>
    </tr>
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
	 <tr>
      <td   class="admin_list admin_list_first">
     <input type="checkbox" name="id[]"  value="<?php echo $this->_vars['list']['cp_id']; ?>
"/>
	 <a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank" ><?php echo $this->_vars['list']['jobs_name']; ?>
</a>	&nbsp;&nbsp;	
	 <span style="color:
	 <?php if ($this->_vars['list']['cp_promotionid'] == "1"): ?>
	  #FF6600
	  <?php elseif ($this->_vars['list']['cp_promotionid'] == "2"): ?>
	  #009900
	  <?php elseif ($this->_vars['list']['cp_promotionid'] == "3"): ?>
	  #6600CC
	   <?php elseif ($this->_vars['list']['cp_promotionid'] == "4"): ?>
	   #FF33CC 
	   <?php else: ?>
	   #0099FF 
	  <?php endif; ?>
	 ">[<?php echo $this->_vars['list']['cat_name']; ?>
]</span>
	 </td>
	  <td  class="admin_list">
	  <a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank" ><?php echo $this->_vars['list']['companyname']; ?>
</a>
	  </td>
	  <td align="center"  class="admin_list">
	  <?php echo $this->_vars['list']['cp_uid']; ?>
	   </td>
      <td align="center"  class="admin_list">
	  <?php if ($this->_vars['list']['cp_starttime'] == "0"): ?>
		������
		<?php else: ?>
		<?php echo $this->_run_modifier($this->_vars['list']['cp_starttime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		<?php endif; ?>	  </td>
      <td align="center"  class="admin_list">
	  <?php if ($this->_vars['list']['cp_endtime'] == "0"): ?>
		������
		<?php else: ?>
					<?php if ($this->_vars['list']['cp_endtime'] < time()): ?>
					<span style="color:#FF6600">�Ѿ�����</span>
					<?php else: ?>
					<?php echo $this->_run_modifier($this->_vars['list']['cp_endtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

					<?php endif; ?>
		<?php endif; ?>	  </td>	  
      <td align="center"  class="admin_list">
	  <a href="?act=promotion_edit&id=<?php echo $this->_vars['list']['cp_id']; ?>
">�޸�</a>
	  &nbsp;
	<a href="admin_company.php?act=management&id=<?php echo $this->_vars['list']['cp_uid']; ?>
"  target="_blank" class="userinfo"  id="<?php echo $this->_vars['list']['cp_uid']; ?>
">����</a>

    </tr>
	<?php endforeach; endif; ?>
  </table>
  
	<?php if (! $this->_vars['list']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>
  </form>
	
   <table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
	<tr>
      <td>
       <input type="button" name="Submit22" value="����ƹ�" class="admin_submit"    onclick="window.location='?act=promotion_add'"/>
	   
		<input type="button" name="ButDel" id="ButDel" value="ȡ���ƹ�" class="admin_submit" />
	  </td>
      <td width="305">
	  
	   
	   
	      
	   	<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "ְλ��"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="ְλ��">ְλ��</li>
														<li id="2" title="��˾��">��˾��</li>
														<li id="3" title="ְλID">ְλID</li>
														<li id="4" title="��˾ID">��˾ID</li>
														<li id="5" title="��ԱID">��ԱID</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
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
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>