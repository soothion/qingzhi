<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:51 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<link href="css/date_input.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.date_input.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
//����
	$(function() { 
	$(".date_input").date_input(); 
	}); 
}); 
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
<div class="toptit">�༭��Ա <span style="color:#0066CC">(<?php echo $this->_vars['company_user']['username']; ?>
)</span> </div>
  <table width="100%" border="0" cellpadding="4" cellspacing="0"   >
    <tr>
      <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">ע��ʱ�䣺</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><?php echo $this->_run_modifier($this->_vars['company_user']['reg_time'], 'date_format', 'plugin', 1, "%Y-%m-%d   %H:%M"); ?>
&nbsp;</td>
      <td width="120" align="right"  style=" border-bottom:1px #CCCCCC dashed" >����½ʱ�䣺</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><?php echo $this->_run_modifier($this->_vars['company_user']['last_login_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
</td>
    </tr>
    <tr>
      <td height="30" align="right"   >ע��IP��</td>
      <td   ><?php if ($this->_vars['company_user']['reg_ip']):  echo $this->_vars['company_user']['reg_ip'];  else: ?>- - - -<?php endif; ?></td>
      <td align="right"  >����½IP��</td>
      <td   ><?php if ($this->_vars['company_user']['last_login_ip']):  echo $this->_vars['company_user']['last_login_ip'];  else: ?>- - - -<?php endif; ?></td>
    </tr>
  </table>
  <div class="toptit">������Ϣ</div>
  <form id="form4" name="form4" method="post" action="?act=set_account_save">
	<?php echo $this->_vars['inputtoken']; ?>

	<table width="700" border="0" cellpadding="4" cellspacing="0"   >
      <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�û�����</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="username" type="text" class="input_text_200"   maxlength="50" value="<?php echo $this->_vars['company_user']['username']; ?>
"  >
          	</td>
      </tr>
	  <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">���䣺</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="email" type="text" class="input_text_200"   maxlength="50" value="<?php echo $this->_vars['company_user']['email']; ?>
"  >
		  
		  &nbsp;&nbsp;&nbsp;
		  <label>
          <input name="email_audit" type="checkbox" value="1" <?php if ($this->_vars['company_user']['email_audit'] == "1"): ?>checked="checked"<?php endif; ?> />
          ����֤</label>	
		</td>
      </tr>
	  <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�ֻ���</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="mobile" type="text" class="input_text_200"   maxlength="50" value="<?php echo $this->_vars['company_user']['mobile']; ?>
"  >
		  
		  &nbsp;&nbsp;&nbsp;
		  <label>
          <input type="checkbox" name="mobile_audit" value="1"  <?php if ($this->_vars['company_user']['mobile_audit'] == "1"): ?>checked="checked"<?php endif; ?> />
          ����֤</label>	
		</td>
      </tr>
	   <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">QQ�󶨣�</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
         <?php if ($this->_vars['company_user']['qq_openid']): ?>
		 �Ѱ�QQ�˺� 
		  &nbsp;&nbsp;&nbsp; 
		 <label>
          <input type="checkbox" name="qq_openid" value="1"  />
          ȡ����</label>
		 <?php else: ?>
		 δ��QQ�ʺ�
		 <?php endif; ?>
		 	
		</td>
		<tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">չʾģ�棺</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="tpl" type="text" class="input_text_200"   maxlength="50" value="<?php echo $this->_vars['company_user']['tpl']; ?>
"  >
		</td>
      </tr>
      </tr>
      <tr>
        <td height="30" align="right"  >&nbsp;</td>
        <td height="50"  >
		<input type="hidden" name="company_uid"  value="<?php echo $this->_vars['company_user']['uid']; ?>
" />
            <input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
            <input name="submit32" type="submit" class="admin_submit"    value="ȷ��"/>
          <input name="submit222" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/>        </td>
      </tr>
    </table>
  </form>
  <div class="toptit">�޸�����</div>
	<form id="form6" name="form6" method="post" action="?act=userpass_edit">
	<?php echo $this->_vars['inputtoken']; ?>

	<table width="100%" border="0" cellpadding="4" cellspacing="0"   >		 
	<tr>
      <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�����룺</td>
      <td  style=" border-bottom:1px #CCCCCC dashed;" >
        <input name="password" type="password" class="input_text_200" id="password" maxlength="50" value=""  />        </td>
    </tr>
	    <tr>
      <td height="30" align="right"   >&nbsp;</td>
      <td height="60"   ><span style="font-size:14px;">
        <input type="hidden" name="username"  value="<?php echo $this->_vars['company_user']['username']; ?>
" />
		<input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
        <input name="submit3" type="submit" class="admin_submit"    value="ȷ��"/>
        <input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/>
      </span></td>
    </tr>
	</table>
	</form>
	<div class="toptit">�û�״̬</div>
	 <form id="form9" name="form9" method="post" action="?act=userstatus_edit">
	 <?php echo $this->_vars['inputtoken']; ?>

	<table width="100%" border="0" cellpadding="4" cellspacing="0"   >	
	

		<tr>
      <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�ʺ�״̬��</td>
      <td  style=" border-bottom:1px #CCCCCC dashed;" >
	    <label>
	    <input name="status" type="radio" value="1"  <?php if ($this->_vars['company_user']['status'] == "1"): ?>checked="checked"<?php endif; ?>/>
	    ����</label> 
		<label>&nbsp;&nbsp;&nbsp;&nbsp;
	    <input type="radio" name="status" value="2"  <?php if ($this->_vars['company_user']['status'] == "2"): ?>checked="checked"<?php endif; ?>/>
	    ��ͣ</label>
		</td>
    </tr>
	    <tr>
      <td height="30" align="right"   >&nbsp;</td>
      <td height="60"   ><span style="font-size:14px;">
        <input type="hidden" name="userstatus_uid"  value="<?php echo $this->_vars['company_user']['uid']; ?>
" />
		<input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
        <input name="submit3" type="submit" class="admin_submit"    value="ȷ��"/>
        <input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/>
      </span></td>
    </tr>	
  </table>
  </form>
 <div class="toptit">��Ա��������</div>
 <form id="form1" name="form1" method="post" action="?act=userpoints_edit">
 <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="4" cellspacing="0"   >
		 
		 <tr>
      <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">��Ա���֣�</td>
      <td  style=" border-bottom:1px #CCCCCC dashed; color: #FF6600; font-size:16px;" ><?php echo $this->_vars['userpoints']; ?>
&nbsp;</td>
    </tr>
	<tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�������֣�</td>
      <td  style=" border-bottom:1px #CCCCCC dashed;" >
	  <label><input name="points_type" type="radio" value="1" checked="checked" />����</label>
	  &nbsp;&nbsp;&nbsp;
	  <label><input name="points_type" type="radio" value="2" />����</label>
	  </td>
    </tr>
			<tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�������֣�</td>
      <td  style=" border-bottom:1px #CCCCCC dashed;" >
	   <input name="points" type="text"  id="points" maxlength="5" value="0"  class="input_text_50"  />
	  ��        </td>
    </tr>
	<tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">����˵����</td>
      <td  style=" border-bottom:1px #CCCCCC dashed;" >
        <input name="points_notes" type="text" class="input_text_200" id="points_notes" maxlength="60" value="" style="width:450px;"/>        </td>
    </tr>
    <tr>
      <td height="30" align="right"  >&nbsp;</td>
      <td height="35"   ><span style="font-size:14px;">
        <input type="hidden" name="company_uid"  value="<?php echo $this->_vars['company_user']['uid']; ?>
" />
		<input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
        <input name="submit3" type="submit" class="admin_submit"    value="ȷ��"/>
        <input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/>
      </span></td>
    </tr> 
	</table>
  </form>
<?php if ($this->_vars['QISHI']['operation_mode'] == '2'): ?>  
  
  
	<?php if ($this->_vars['setmeal']): ?>
	<div class="toptit">��Ա�����ײ�- �޸�</div>
	<form id="form2" name="form2" method="post" action="?act=edit_setmeal_save">
	<?php echo $this->_vars['inputtoken']; ?>

	<table width="100%" border="0" cellpadding="4" cellspacing="0" >
	  <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">
		�����ײ����ƣ�		</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
<?php echo $this->_vars['setmeal']['setmeal_name']; ?>
		</td>
      </tr>
      <tr>
        <td   height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">����ʱ�䣺</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
		��ʼʱ�䣺<?php echo $this->_run_modifier($this->_vars['setmeal']['starttime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		����ʱ�䣺<?php if ($this->_vars['setmeal']['endtime'] == "0"): ?>
		������
		<?php else: ?>
		<?php echo $this->_run_modifier($this->_vars['setmeal']['endtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		<?php endif; ?>
		 <input type="hidden" name="oldendtime"  value="<?php echo $this->_vars['setmeal']['endtime']; ?>
" />		</td>
      </tr>
	  <tr>
        <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">����ʱ�䣺</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" ><input name="setendtime" type="text" class="input_text_200 date_input" id="setendtime" maxlength="10" value="<?php if ($this->_vars['setmeal']['endtime'] == "0"):  else:  echo $this->_run_modifier($this->_vars['setmeal']['endtime'], 'date_format', 'plugin', 1, "%Y-%m-%d");  endif; ?>"  >
		<span class="admin_note">���õ���ʱ�䣬��ʽ yyyy-mm-dd������Ϊ������</span>
          </td>
      </tr>
	      <tr>
        <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">����������</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="days" type="text" class="input_text_200" id="days" maxlength="50" value="" style="width:60px;">
          �� <span class="admin_note">(Ĭ��Ϊ�ձ�ʾ�����޸ģ���0Ϊ������,����д��3�����ӳ�3�죬-3 �����3��)</span></td>
      </tr>
	  <!-- -->
	  <tr>
        <td  height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">������ͨ��Ƹʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="jobs_ordinary" type="text" class="input_text_200" id="jobs_ordinary" maxlength="50" value="<?php echo $this->_vars['setmeal']['jobs_ordinary']; ?>
"  >
          ��</td>
      </tr>
	 
	 	  <!-- -->
	  	  
	   <!-- -->
 
	  	  
	  <!-- -->
	   	  <!-- -->
	  <tr>
        <td   height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">������ͨ����ʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="download_resume_ordinary" type="text" class="input_text_200" id="download_resume_ordinary" maxlength="50" value="<?php echo $this->_vars['setmeal']['download_resume_ordinary']; ?>
"  >
          ��</td>
      </tr>
	  	 
	  <!-- -->
	  	   	  <!-- -->
	  <tr>
        <td   height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">���ظ߼�����ʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="download_resume_senior" type="text" class="input_text_200" id="download_resume_senior" maxlength="50" value="<?php echo $this->_vars['setmeal']['download_resume_senior']; ?>
"  >
          ��</td>
      </tr>
	  	 
	  <!-- -->
	  	   	  <!-- -->
	  <tr>
        <td   height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">������ͨ����ʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="interview_ordinary" type="text" class="input_text_200" id="interview_ordinary" maxlength="50" value="<?php echo $this->_vars['setmeal']['interview_ordinary']; ?>
"  >
          ��</td>
      </tr>
	  
	  <!-- -->
	    	   	  <!-- -->
	  <tr>
        <td  height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">����߼�����ʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="interview_senior" type="text" class="input_text_200" id="interview_senior" maxlength="50" value="<?php echo $this->_vars['setmeal']['interview_senior']; ?>
"  >
          ��</td>
      </tr>
	   
	  <!-- -->
	    	   	  <!-- -->
	  <tr>
        <td   height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">�˲ſ�����ʣ�ࣺ</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <input name="talent_pool" type="text" class="input_text_200" id="talent_pool" maxlength="50" value="<?php echo $this->_vars['setmeal']['talent_pool']; ?>
"  >
          ��</td>
      </tr>
	  <!-- -->
	    	   	  <!-- -->
	  <!-- -->
	  	    	   	  <!-- -->
	  <!-- -->
	  <!-- -->
	  <tr>
        <td   height="30" align="right" valign="top"  style=" border-bottom:1px #CCCCCC dashed">����˵����</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <textarea name="added"   id="added" style="width:300px; height:60px;"><?php echo $this->_vars['setmeal']['added']; ?>
</textarea>        </td>
      </tr>
	  <!-- -->
	  <tr>
      <td width="120" height="30" align="right"   >&nbsp;</td>
      <td height="35"   > 
        <input type="hidden" name="company_uid"  value="<?php echo $this->_vars['company_user']['uid']; ?>
" />
		<input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
        <input name="submit3" type="submit" class="admin_submit"    value="ȷ��"/>
        <input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/> </td>
    </tr>
    </table>
	</form>
	<?php endif; ?>
	<div class="toptit">���¿�ͨ�����ײ�</div>
	<form id="form4" name="form4" method="post" action="?act=set_setmeal_save">
	<?php echo $this->_vars['inputtoken']; ?>

	<table width="700" border="0" cellpadding="4" cellspacing="0"   id="edit_setmeal2" >
      <tr>
        <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">ѡ���ײͣ�</td>
        <td  style=" border-bottom:1px #CCCCCC dashed;" >
          <?php if (count((array)$this->_vars['givesetmeal'])): foreach ((array)$this->_vars['givesetmeal'] as $this->_vars['list']): ?>		   
		    <label>
          <input type="radio" name="reg_service" value="<?php echo $this->_vars['list']['id']; ?>
"   <?php if ($this->_vars['QISHI']['reg_service'] == $this->_vars['list']['id']): ?>checked="checked"<?php endif; ?>/>
          <?php echo $this->_vars['list']['setmeal_name']; ?>

		  </label>
		  &nbsp;&nbsp;&nbsp;&nbsp;

		   <?php endforeach; endif; ?>
	
		</td>
      </tr>
      <tr>
        <td height="30" align="right"  >&nbsp;</td>
        <td height="35"  >
		<input type="hidden" name="company_uid"  value="<?php echo $this->_vars['company_user']['uid']; ?>
" />
            <input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
            <input name="submit32" type="submit" class="admin_submit"    value="ȷ��"/>
          <input name="submit222" type="button" class="admin_submit"    value="�� ��" onclick="Javascript:window.history.go(-1)"/>
        </td>
      </tr>
    </table>
	</form>	
	
	
	
	<?php endif; ?>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>