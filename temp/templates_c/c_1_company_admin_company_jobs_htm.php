<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_parse_url.php'); $this->register_modifier("qishi_parse_url", "tpl_modifier_qishi_parse_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 18:34 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
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
	DialogContent:"#AuditSet",
	DialogContentType:"id",
	DialogAddObj:"#OpAudit",	
	DialogAddType:"html"	
	});
	$("#Butdelay").QSdialog({
	DialogTitle:"ϵͳ��ʾ",
	DialogContent:"#delayset",
	DialogContentType:"id",
	DialogAddObj:"#Opdelay",	
	DialogAddType:"html"	
	});
	//�������ɾ��	
	$("#ButDlete").click(function(){
		if (confirm('��ȷ��Ҫɾ����'))
		{
			$("form[name=form1]").attr("action",$("form[name=form1]").attr("action")+"&delete=true");
			$("form[name=form1]").submit()
		}
	});
	//ˢ��
	$("#Butrefresh").click(function(){
			$("form[name=form1]").attr("action",$("form[name=form1]").attr("action")+"&refresh=ok");
			$("form[name=form1]").submit()
	});
	
	//�����б�����
	$(".listod .txt").each(function(i){
	var li=$(this).children(".select");
	var htm="<a href=\""+li.attr("href")+"\" class=\""+li.attr("class")+"\">"+li.text()+"</a>";
	li.detach();
	$(this).prepend(htm);
	});
		
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
��Чְλ��ָ�����ͨ��,��Ч��δ����,����δ����,������Ƹ��ְλ����֮Ϊ��Чְλ<br />
</p>
</div>


<div class="seltpye_y">

	<div class="tit link_lan">
	<strong>ְλ�б�</strong><span>(���ҵ�<?php echo $this->_vars['totaljob']; ?>
��)</span>
	<a href="?">[�ָ�Ĭ��]</a>
	<div class="pli link_bk"><u>ÿҳ��ʾ��</u>
	<a href="<?php echo $this->_run_modifier("perpage:10", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "10"): ?>class="select"<?php endif; ?>>10</a>
	<a href="<?php echo $this->_run_modifier("perpage:20", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "20"): ?>class="select"<?php endif; ?>>20</a>
	<a href="<?php echo $this->_run_modifier("perpage:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "30"): ?>class="select"<?php endif; ?>>30</a>
	<a href="<?php echo $this->_run_modifier("perpage:60", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['perpage'] == "60"): ?>class="select"<?php endif; ?>>60</a>
	<div class="clear"></div>
	</div>
	</div>	
    <div class="list">
	  <div class="t">��Ч״̬</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("jobtype:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['jobtype'] == "1"): ?>class="select"<?php endif; ?>>��Чְλ<span>(<?php echo $this->_vars['total']['0']; ?>
)</span></a>
		<a href="<?php echo $this->_run_modifier("jobtype:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['jobtype'] == "2"): ?>class="select"<?php endif; ?>>��Чְλ<span>(<?php echo $this->_vars['total']['1']; ?>
)</span></a>
	  </div>
    </div>
	  <?php if ($_GET['jobtype'] == "2"): ?>
	<div class="list">
	  <div class="t">���״̬</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("audit:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("audit:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "1"): ?>class="select"<?php endif; ?>>���ͨ��<span>(<?php echo $this->_vars['total']['2']; ?>
)</span></a>
		<a href="<?php echo $this->_run_modifier("audit:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "2"): ?>class="select"<?php endif; ?>>�ȴ����<span>(<?php echo $this->_vars['total']['3']; ?>
)</span></a>
		<a href="<?php echo $this->_run_modifier("audit:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['audit'] == "3"): ?>class="select"<?php endif; ?>>���δͨ��<span>(<?php echo $this->_vars['total']['4']; ?>
)</span></a>
	  </div>
    </div>
	  <?php endif; ?>
	
	
	<div class="list listod" >
	  <div class="t">����ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("deadline:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<?php if ($_GET['jobtype'] == "2"): ?>		
		<a href="<?php echo $this->_run_modifier("deadline:1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "1"): ?>class="select"<?php endif; ?>>�ѵ���</a>
		<a href="<?php echo $this->_run_modifier("deadline:2", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "2"): ?>class="select"<?php endif; ?>>δ����</a>
		<?php endif; ?>
		<a href="<?php echo $this->_run_modifier("deadline:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("deadline:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("deadline:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['deadline'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	<div class="list listod" >
	  <div class="t">�ƹ�����</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("promote:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['promote'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("promote:-1", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['promote'] == "-1"): ?>class="select"<?php endif; ?>>δ�ƹ�</a>
		<?php if (count((array)$this->_vars['cat'])): foreach ((array)$this->_vars['cat'] as $this->_vars['li']): ?>
		<a href="<?php echo $this->_run_modifier($this->_run_modifier("promote:", 'cat', 'plugin', 1, $this->_vars['li']['cat_id']), 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['promote'] == $this->_vars['li']['cat_id']): ?>class="select"<?php endif; ?>><?php echo $this->_vars['li']['cat_name']; ?>
</a>
		<?php endforeach; endif; ?>
	  </div>
    </div>
	
	 
	
	<div class="list" >
	  <div class="t">���ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("addsettr:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addsettr'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("addsettr:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addsettr'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("addsettr:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addsettr'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("addsettr:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['addsettr'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	<div class="list" >
	  <div class="t">ˢ��ʱ��</div>	  
	  <div class="txt link_lan">
	 	<a href="<?php echo $this->_run_modifier("settr:", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == ""): ?>class="select"<?php endif; ?>>����</a>
		<a href="<?php echo $this->_run_modifier("settr:3", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "3"): ?>class="select"<?php endif; ?>>������</a>
		<a href="<?php echo $this->_run_modifier("settr:7", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "7"): ?>class="select"<?php endif; ?>>һ����</a>
		<a href="<?php echo $this->_run_modifier("settr:30", 'qishi_parse_url', 'plugin', 1); ?>
" <?php if ($_GET['settr'] == "30"): ?>class="select"<?php endif; ?>>һ����</a>
	  </div>
    </div>
	
	
	
	<div class="clear"></div>
</div>



  
  <form id="form1" name="form1" method="post" action="?act=jobs_perform">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan">
    <tr>
      <td   class="admin_list_tit admin_list_first">
      <label id="chkAll"><input type="checkbox" name=" " title="ȫѡ/��ѡ" id="chk"/>ְλ����</label></td>
      <td  class="admin_list_tit"> ������˾ </td>
	  <td align="center"  width="10%" class="admin_list_tit">���״̬</td>
	  <td align="center" width="5%" class="admin_list_tit">��Դ</td>
	  <td align="center"  width="10%" class="admin_list_tit">���ʱ��</td>
      <td align="center" width="10%"  class="admin_list_tit">����ʱ��</td>
      <td align="center" width="10%"  class="admin_list_tit">ˢ��ʱ��</td>
	    <td align="center" width="5%" class="admin_list_tit">���</td>
      
      <td    width="100" align="center"  class="admin_list_tit">����</td>
	
    </tr>
	<?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
      <tr>
      <td  class="admin_list admin_list_first">
        <input name="y_id[]" type="checkbox" id="y_id" value="<?php echo $this->_vars['list']['id']; ?>
"  />		
		 <a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"<?php if ($this->_vars['list']['deadline'] < time() || $this->_vars['list']['display'] == "2"): ?>style="color:#999999"<?php endif; ?>  ><?php echo $this->_vars['list']['jobs_name']; ?>
</a>		 
		 <?php if ($this->_vars['list']['emergency'] == "1"): ?>&nbsp;<span style="color: #FF6600">[��Ƹ]</span><?php endif; ?>
		<?php if ($this->_vars['list']['recommend'] == "1"): ?>&nbsp;<span style="color: #339900">[�Ƽ�]</span><?php endif; ?>
		<?php if ($this->_vars['list']['stick'] == "1"): ?>&nbsp;<span style="color: #FF3399">[�ö�]</span><?php endif; ?>
		<?php if ($this->_vars['list']['highlight'] != ""): ?>&nbsp;<span style="color: #6633CC">[��ɫ]</span><?php endif; ?>
		<?php if ($this->_vars['list']['display'] == "2"): ?>&nbsp;<span style="color: #999999">[����ͣ]</span><?php endif; ?>		
	    </td>
        <td class="admin_list">
		<a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank" style="color: #000000" title="<?php echo $this->_vars['list']['companyname']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a>
		</td>
		 <td class="admin_list" align="center">
		<?php if ($this->_vars['list']['audit'] == "1"): ?>
		<span style="color: #009900">���ͨ��	</span>	
		<?php elseif ($this->_vars['list']['audit'] == "2"): ?>
		<span style="color:#FF0000">�ȴ����</span>
		<?php elseif ($this->_vars['list']['audit'] == "3"): ?>
		���δͨ��
		<?php endif; ?>
		</td>
		<td class="admin_list"align="center" >
				<?php if ($this->_vars['list']['robot'] == "0"): ?>�˹�<?php endif; ?>
		<?php if ($this->_vars['list']['robot'] == "1"): ?>�ɼ�<?php endif; ?>
		</td>
		<td class="admin_list" align="center" >
		<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		</td>
        <td class="admin_list" align="center" >
		<?php if ($this->_vars['list']['deadline'] > time()): ?>
		<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		<?php else: ?>
			<span style="color:#FF6600">�Ѿ�����</span>
		<?php endif; ?>
		</td>
       <td class="admin_list" align="center" >
		<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%m-%d %H:%M"); ?>

		</td>
		  <td class="admin_list" align="center" >
		<?php echo $this->_vars['list']['click']; ?>

		</td>
        
        <td class="admin_list" align="center" >		
		<a href="?act=edit_jobs&id=<?php echo $this->_vars['list']['id']; ?>
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
  <span id="Opdelay"></span>
  </form>
	<?php if (! $this->_vars['list']): ?>
	<div class="admin_list_no_info">û���κ���Ϣ��</div>
	<?php endif; ?>
	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
          <input name="ButAudit" type="button" class="admin_submit" id="ButAudit"    value="���"  />
		  <input type="button" name="Butrefresh"  id="Butrefresh" value="ˢ��" class="admin_submit"/>
		  <input type="button" name="Butdelay"  id="Butdelay" value="����" class="admin_submit"/>
		<input type="button" name="ButDlete"  id="ButDlete" value="ɾ��" class="admin_submit"/>
		</td>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?act=jobs">	
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
				<input name="act" type="hidden" value="jobs" />
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
<div style="display:none" id="AuditSet">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">����ѡְλ��Ϊ��</strong></td>
    </tr>
	      <tr>
      <td width="27" height="25">&nbsp;</td>
      <td>
                      <label><input name="audit" type="radio" value="1" checked="checked"  />
                      ���ͨ��</label></td>
    </tr>
    <tr>
      <td width="27" height="25">&nbsp;</td>
      <td>
                      <label><input type="radio" name="audit" value="3"  />
                       ���δͨ��</label></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td>
	  <input type="submit" name="set_audit" value="ȷ��" class="admin_submit"/>
 </td>
    </tr>
  </table>
  </div>
  
  
<div style="display:none" id="delayset">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="6">
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">�ӳ�ְλ��Ч�ڣ�</strong></td>
    </tr>
	      <tr>
      <td width="27" height="25">&nbsp;</td>
      <td>
        <input name="days" type="text" class="input_text_150" id="days" value="1" maxlength="3"/>&nbsp;��</td>
    </tr>
 
    <tr>
      <td height="25">&nbsp;</td>
      <td>
	  <input type="submit" name="set_delay" value="ȷ��" class="admin_submit"/>
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