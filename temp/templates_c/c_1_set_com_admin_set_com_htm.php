<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:05 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script  charset="utf-8" src="kindeditor/kindeditor.js"></script>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("set_com/admin_set_com_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
��ͬ����Ӫ�׶�������ѡ��ͬ�����á�<br />

</p>
</div>

<div class="toptit">��������</div>
  <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
<tr>
      <td width="200" align="right">������ƸĬ����Ч�ڣ�</td>
      <td><input name="company_add_days" type="text"  class="input_text_150" id="company_add_days" value="<?php echo $this->_vars['config']['company_add_days']; ?>
" maxlength="3"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
      ��<span  style="color:#666666"></span></td>
    </tr>
	<tr>
      <td align="right">��Ƹ��Чʱ������Ϊ��</td>
      <td><input name="company_add_days_min" type="text"  class="input_text_150" id="company_add_days_min" value="<?php echo $this->_vars['config']['company_add_days_min']; ?>
" maxlength="3"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
      ��<span  style="color:#666666"></span></td>
    </tr>
	<tr>
      <td align="right">�ϴ�Ӫҵִ���ļ����ƣ�</td>
      <td><input name="certificate_max_size" type="text"  class="input_text_150" id="certificate_max_size" value="<?php echo $this->_vars['config']['certificate_max_size']; ?>
" maxlength="10"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>        
        kb</td>
    </tr>
		<tr>
      <td align="right">��ҵLOGO�ļ����ƣ�</td>
      <td><input name="logo_max_size" type="text"  class="input_text_150" id="logo_max_size" value="<?php echo $this->_vars['config']['logo_max_size']; ?>
" maxlength="10"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>        
        kb</td>
    </tr>
	<tr>
      <td align="right">ְλ�б������Ϊ��</td>
      <td><input name="jobs_list_max" type="text"  class="input_text_150"   value="<?php echo $this->_vars['config']['jobs_list_max']; ?>
" maxlength="10"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>        
        ��
		<span class="admin_note">0Ϊ������</span>
		</td>
    </tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
  </table>
    </form>
  <div class="toptit">�鿴��ϵ��ʽ����</div>
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
 
	<tr>
      <td align="right" width="200">����鿴ְλ����ҵ����ϵ��ʽ��</td>
      <td>
	  
	  <label><input name="showjobcontact" type="radio"   value="0"  <?php if ($this->_vars['config']['showjobcontact'] == "0"): ?>checked=checked <?php endif; ?>/>�ο�</label>
	  &nbsp;&nbsp;&nbsp;&nbsp;
 <label><input name="showjobcontact" type="radio"   value="1"  <?php if ($this->_vars['config']['showjobcontact'] == "1"): ?>checked=checked <?php endif; ?>/>�ѵ�¼��Ա</label>
   &nbsp;&nbsp;&nbsp;&nbsp;
 <label><input name="showjobcontact" type="radio"   value="2"  <?php if ($this->_vars['config']['showjobcontact'] == "2"): ?>checked=checked <?php endif; ?>/>�ѵ�¼�ҷ�������Ч����</label>

        </td>
    </tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
	  </table>
	  
	    </form>
		  <div class="toptit">��ϵ��ʽͼ�λ�<span class="admin_note">ͼ�λ���Ҫ�����������ļ��ϴ���data/contactimgfont/�������ļ�����Ϊ��cn.ttc��</span></div>
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
 
	<tr>
      <td align="right" width="200">��ҵ��ϵ��ʽ�� </td>
      <td>
	  
	  <label><input name="contact_img_com" type="radio"   value="1"  <?php if ($this->_vars['config']['contact_img_com'] == "1"): ?>checked=checked <?php endif; ?>/>����</label>
	  &nbsp;&nbsp;&nbsp;&nbsp;
 <label><input name="contact_img_com" type="radio"   value="2"  <?php if ($this->_vars['config']['contact_img_com'] == "2"): ?>checked=checked <?php endif; ?>/>ͼ�λ�</label>


        </td>
    </tr>
	<tr>
      <td align="right" width="200">ְλ��ϵ��ʽ��</td>
      <td>
	  
	  <label><input name="contact_img_job" type="radio"   value="1"  <?php if ($this->_vars['config']['contact_img_job'] == "1"): ?>checked=checked <?php endif; ?>/>����</label>
	  &nbsp;&nbsp;&nbsp;&nbsp;
 <label><input name="contact_img_job" type="radio"   value="2"  <?php if ($this->_vars['config']['contact_img_job'] == "2"): ?>checked=checked <?php endif; ?>/>ͼ�λ�</label>


        </td>
    </tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
	  </table>
	  
	    </form>
	 <div class="toptit">��֤�����״̬����</div>
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
	<tr>
	<tr>
      <td align="right"  width="200">��ҵ��֤״̬Ĭ�ϣ�</td>
      <td><label>
        <input name="audit_add_com" type="radio" id="audit_add_com" value="0"  <?php if ($this->_vars['config']['audit_add_com'] == "0"): ?>checked=checked <?php endif; ?>/>δ��֤</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_add_com" value="1" id="audit_add_com"  <?php if ($this->_vars['config']['audit_add_com'] == "1"): ?>checked=checked<?php endif; ?>/>��֤ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_add_com" value="2" id="audit_add_com"  <?php if ($this->_vars['config']['audit_add_com'] == "2"): ?>checked=checked<?php endif; ?>/>��֤��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_add_com" value="3" id="audit_add_com"  <?php if ($this->_vars['config']['audit_add_com'] == "3"): ?>checked=checked<?php endif; ?>/>��֤ʧ��</label>
</td>
    </tr>
	<tr>
      <td align="right">�޸���ҵ���Ϻ���֤״̬��</td>
      <td>
	  <label>
        <input name="audit_edit_com" type="radio" id="audit_edit_com" value="-1"  <?php if ($this->_vars['config']['audit_edit_com'] == "-1"): ?>checked=checked <?php endif; ?>/>���ֲ���</label>
&nbsp;&nbsp;&nbsp;&nbsp;
	  <label>
        <input name="audit_edit_com" type="radio" id="audit_edit_com" value="0"  <?php if ($this->_vars['config']['audit_edit_com'] == "0"): ?>checked=checked <?php endif; ?>/>δ��֤</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_edit_com" value="1" id="audit_edit_com"  <?php if ($this->_vars['config']['audit_edit_com'] == "1"): ?>checked=checked<?php endif; ?>/>��֤ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_edit_com" value="2" id="audit_edit_com"  <?php if ($this->_vars['config']['audit_edit_com'] == "2"): ?>checked=checked<?php endif; ?>/>��֤��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_add_com" value="3" id="audit_edit_com"  <?php if ($this->_vars['config']['audit_edit_com'] == "3"): ?>checked=checked<?php endif; ?>/>��֤ʧ��</label>
</td>
    </tr>
	<tr>
      <td align="right">����֤��ҵ����ְλ�����״̬��</td>
      <td><label>
        <input name="audit_verifycom_addjob" type="radio"   value="1"  <?php if ($this->_vars['config']['audit_verifycom_addjob'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_verifycom_addjob" value="2"   <?php if ($this->_vars['config']['audit_verifycom_addjob'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_verifycom_addjob" value="3"   <?php if ($this->_vars['config']['audit_verifycom_addjob'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<tr>
      <td align="right">����֤��ҵ�޸�ְλ�����״̬Ϊ��</td>
      <td>
	  <label>
        <input name="audit_verifycom_editjob" type="radio"   value="-1"  <?php if ($this->_vars['config']['audit_verifycom_editjob'] == "-1"): ?>checked=checked <?php endif; ?>/>���ֲ���
		</label>
&nbsp;&nbsp;&nbsp;&nbsp;
	  <label>
        <input name="audit_verifycom_editjob" type="radio"   value="1"  <?php if ($this->_vars['config']['audit_verifycom_editjob'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��
		</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_verifycom_editjob" value="2"   <?php if ($this->_vars['config']['audit_verifycom_editjob'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_verifycom_editjob" value="3"   <?php if ($this->_vars['config']['audit_verifycom_editjob'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<tr>
      <td align="right">δ��֤��ҵ����ְλ�����״̬Ϊ��</td>
      <td><label>
        <input name="audit_unexaminedcom_addjob" type="radio"   value="1"  <?php if ($this->_vars['config']['audit_unexaminedcom_addjob'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_unexaminedcom_addjob" value="2"   <?php if ($this->_vars['config']['audit_unexaminedcom_addjob'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_unexaminedcom_addjob" value="3"   <?php if ($this->_vars['config']['audit_unexaminedcom_addjob'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<tr>
      <td align="right">δ��֤��ҵ�޸�ְλ�����״̬Ϊ��</td>
      <td>
	  <label>
        <input name="audit_unexaminedcom_editjob" type="radio"   value="-1"  <?php if ($this->_vars['config']['audit_unexaminedcom_editjob'] == "-1"): ?>checked=checked <?php endif; ?>/>���ֲ���
		</label>
&nbsp;&nbsp;&nbsp;&nbsp;
	  <label>
        <input name="audit_unexaminedcom_editjob" type="radio"   value="1"  <?php if ($this->_vars['config']['audit_unexaminedcom_editjob'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��
		</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_unexaminedcom_editjob" value="2"   <?php if ($this->_vars['config']['audit_unexaminedcom_editjob'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_unexaminedcom_editjob" value="3"   <?php if ($this->_vars['config']['audit_unexaminedcom_editjob'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<!--<tr>
      <td align="right">ǿ�ƻ�Ա��֤�ֻ���</td>
      <td><label>
        <input name="login_com_audit_mobile" type="radio" id="login_com_audit_mobile" value="1"  <?php if ($this->_vars['config']['login_com_audit_mobile'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="login_com_audit_mobile" value="0" id="login_com_audit_mobile"  <?php if ($this->_vars['config']['login_com_audit_mobile'] == "0"): ?>checked=checked<?php endif; ?>/>��</label>

<span class="admin_note">��Ҫ��Ϊǿ����֤�ֻ��迪������ģ��</span>
</td>
	</tr>-->
	<tr>
      <td align="right">ǿ�ƻ�Ա��֤email��</td>
      <td><label>
        <input name="login_com_audit_email" type="radio" id="login_com_audit_email" value="1"  <?php if ($this->_vars['config']['login_com_audit_email'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="login_com_audit_email" value="0" id="login_com_audit_email"  <?php if ($this->_vars['config']['login_com_audit_email'] == "0"): ?>checked=checked<?php endif; ?>/>��</label></td>
	</tr>
	
	
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	 </td>
	  </tr>
		  </table>
	  
	    </form>
	 <div class="toptit">������Ϣ����</div>
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
	<tr>
      <td align="right" width="200">�Ƿ���ʾ������Ƹ��Ϣ��</td>
      <td><label>
        <input name="outdated_jobs" type="radio" id="outdated_jobs" value="1"  <?php if ($this->_vars['config']['outdated_jobs'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="outdated_jobs" value="0" id="outdated_jobs"  <?php if ($this->_vars['config']['outdated_jobs'] == "0"): ?>checked=checked<?php endif; ?>/>��</label>


  <span class="admin_note">ְλ������ְָλ��Ч�ڹ��ڻ������Ч�ڹ��ڣ��޸Ĵ�������·�����ְλ��Ч</span>
</td>
	</tr>
	
		<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
		  </table>
	  
	    </form>
		
		
		
	 <div class="toptit">��������</div>
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
	<tr>
      <td align="right" width="200">����˾�����ظ���</td>
      <td><label>
        <input name="company_repeat" type="radio" id="company_repeat" value="1"  <?php if ($this->_vars['config']['company_repeat'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="company_repeat" value="0" id="company_repeat"  <?php if ($this->_vars['config']['company_repeat'] == "0"): ?>checked=checked<?php endif; ?>/>��</label></td>
	</tr>
	
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td>
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
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