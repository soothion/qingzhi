<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-05-04 10:23 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#ButSend").QSdialog({
	DialogTitle:"��ѡ��",
	DialogContent:"#SendDiv",
	DialogContentType:"id",
	DialogAddObj:"#OpSend",	
	DialogAddType:"html",
	DialogWidth:500	
	});
	$("#ButDel").QSdialog({
	DialogTitle:"��Ҫɾ����Щ��Ϣ?",
	DialogContent:"#DelDiv",
	DialogContentType:"id",
	DialogAddObj:"#OpDel",	
	DialogAddType:"html",
	DialogWidth:300	
	});
	//����
	$(".submitsend").click(function(){
			$("form[name=form1]").attr("action","?act=totalsend");
			$("form[name=form1]").submit()
	});	
	//ɾ��
	$(".submitdel").click(function(){
			$("form[name=form1]").attr("action","?act=del");
			$("form[name=form1]").submit()
	});
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("mailqueue/admin_mailqueue_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
�����ʼ���ȷ�������ʼ�������ȷ���������� ��ϵͳ > �ʼ����á������á�<br />
</p>
</div>
<div class="seltpye_x">
		<div class="left">ɸѡ����</div>	
		<div class="right">
		<a href="<?php echo $this->_run_modifier("m_type:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['m_type'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("m_type:0", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['m_type'] == "0"): ?>class="select"<?php endif; ?>>�ȴ�����</a>
		<a href="<?php echo $this->_run_modifier("m_type:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['m_type'] == "1"): ?>class="select"<?php endif; ?>>���ͳɹ�</a>
		<a href="<?php echo $this->_run_modifier("m_type:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['m_type'] == "2"): ?>class="select"<?php endif; ?>>����ʧ��</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
</div>
   <form id="form1" name="form1" method="post" action="?act=promotion_del">
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  width="120" class="admin_list_tit admin_list_first">
     <label id="chkAll"><input type="checkbox" name="" title="ȫѡ/��ѡ" id="chk"/>����</label>	 </td>
	  <td class="admin_list_tit" width="13%">�ռ���ַ</td>
	  <td  class="admin_list_tit">�ʼ�����</td>
      <td  class="admin_list_tit">�ʼ�����</td>
      <td width="110"  align="center"  class="admin_list_tit">���ʱ��</td>	  
      <td width="110"  align="center"  class="admin_list_tit">����ʱ��</td>
      <td width="10%" align="center"  class="admin_list_tit">����</td>
    </tr>
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
	 <tr>
      <td   class="admin_list admin_list_first">
     <input type="checkbox" name="id[]"  value="<?php echo $this->_vars['list']['m_id']; ?>
"/>
	 <?php if ($this->_vars['list']['m_type'] == "0"): ?><span style="color:#FF6600">�ȴ�����</span><?php endif; ?>
	 <?php if ($this->_vars['list']['m_type'] == "1"): ?><span style="color: #009900">���ͳɹ�</span><?php endif; ?>
	 <?php if ($this->_vars['list']['m_type'] == "2"): ?><span style="color: #666666">����ʧ��</span><?php endif; ?>
	  </td>
	  <td  class="admin_list">
	  <?php echo $this->_vars['list']['m_mail']; ?>

	  </td>
	  <td   class="admin_list vtip" title="<?php echo $this->_run_modifier($this->_vars['list']['m_subject'], 'nl2br', 'PHP', 1); ?>
" >
	  <?php echo $this->_vars['list']['m_subject_']; ?>

	  </td>
      <td   class="admin_list vtip" title="<?php echo $this->_run_modifier($this->_vars['list']['m_body'], 'nl2br', 'PHP', 1); ?>
" >
	   <?php echo $this->_vars['list']['m_body_']; ?>

	  </td>
      <td align="center"  class="admin_list">
	  <?php echo $this->_run_modifier($this->_vars['list']['m_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

	  
		
		</td>	  
      <td align="center"  class="admin_list">
	  
	  <?php if ($this->_vars['list']['m_sendtime'] == "0"): ?>
		----
		<?php else: ?>
	<?php echo $this->_run_modifier($this->_vars['list']['m_sendtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		<?php endif; ?>
	  </td>
      <td align="center"  class="admin_list">
	  <a href="?act=mailqueue_edit&id=<?php echo $this->_vars['list']['m_id']; ?>
">�޸�</a>
	 
	</td>
	</tr>
	<?php endforeach; endif; ?>
  </table>
  
	<?php if (! $this->_vars['list']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>
	
	<span id="OpDel">
	</span>
	<span id="OpSend">
	</span>
	
	
	
	
  </form>	
   <table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
	<tr>
      <td>
	  <input type="button" name="Submit22" value="����" class="admin_submit" id="ButSend"/>
       <input type="button" name="Submit22" value="�������" class="admin_submit"    onclick="window.location='?act=mailqueue_add'"/>
	   <input type="button" name="Submit22" value="�������" class="admin_submit"    onclick="window.location='?act=mailqueue_batchadd'"/>
		<input type="button" name="ButDel" id="ButDel" value="ɾ��" class="admin_submit" />
	  </td>
      <td width="305">
	  
	   
	   
	      
	   	<form id="formseh" name="formseh" method="get" action="?">	
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="<?php echo $_GET['key']; ?>
" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="<?php echo $this->_run_modifier($_GET['key_type_cn'], 'default', 'plugin', 1, "�ʼ�����"); ?>
" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="<?php echo $this->_run_modifier($_GET['key_type'], 'default', 'plugin', 1, "1"); ?>
" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="�ʼ�����">�ʼ�����</li>
														<li id="2" title="�ռ���ַ">�ռ���ַ</li>
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
	
	
	



<div style="display:none" id="SendDiv">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
 <tr>
      <td  width="100"  align="right">����ѡ��</td>
      <td>
      
	  <label><input name="sendtype" type="radio" value="1" checked="checked"  />      
	   ��ѡ��Ŀ
	   </label>
	   &nbsp;
	   &nbsp;
	   <label><input name="sendtype" type="radio" value="2"  />      
	   ���еȴ����͵�
	   </label>
	   &nbsp;
	   &nbsp;
	   <label><input name="sendtype" type="radio" value="3"   />      
	   ���з���ʧ�ܵ�
	   </label>
					  
	    </td>
    </tr>
	<tr>
      <td align="right">���ͼ��ʱ�䣺</td>
      <td>
	  <input name="intervaltime" type="text" class="input_text_150"  value="3" maxlength="3" /> 
	  ��
	  </td>
    </tr>
    <tr>
      <td align="right">�����������</td>
      <td>
	  <input name="sendmax" type="text" class="input_text_150"  value="500" maxlength="3" /> 
	  
	  0Ϊ������  
	  </td>
    </tr>
	 <tr>
      <td align="right">����ʧ��ʱ��</td>
      <td>
                      <label><input type="radio" name="senderr" value="1"  checked="checked" />
                       ��������</label>
					   <label><input type="radio" name="senderr" value="2"  />
                       ֹͣ����</label>
					   </td>
    </tr>
    <tr>
      <td height="70">&nbsp;</td>
      <td>
	  <input type="submit" name="submitdel"  value="ȷ��" class="admin_submit submitsend"/>
 </td>
    </tr>
  </table>
</div>









	
	
<div style="display:none" id="DelDiv">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
 <tr>
      <td  width="30">&nbsp;</td>
      <td>
                      <label><input name="deltype" type="radio" value="1" checked="checked"  />
                      ��ѡ��Ŀ</label></td>
    </tr>
    <tr>
      <td >&nbsp;</td>
      <td>
                      <label><input type="radio" name="deltype" value="2"  />
                       ���еȴ�������Ŀ</label></td>
    </tr>
	 <tr>
      <td >&nbsp;</td>
      <td>
                      <label><input type="radio" name="deltype" value="3"  />
                       ���з��ͳɹ���Ŀ</label></td>
    </tr>
	<tr>
      <td >&nbsp;</td>
      <td>
                      <label><input type="radio" name="deltype" value="4"  />
                       ���з���ʧ����Ŀ</label></td>
    </tr>
	
	<tr>
      <td  >&nbsp;</td>
      <td>
                      <label><input type="radio" name="deltype" value="5"  />
                       ��������ж�</label></td>
    </tr>
    <tr>
      <td height="70">&nbsp;</td>
      <td>
	  <input type="submit" name="submitdel"  value="ȷ��" class="admin_submit submitdel"/>
 </td>
    </tr>
  </table>
</div>
    
	
	
	
	
	
	
	
	
	
	   
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>