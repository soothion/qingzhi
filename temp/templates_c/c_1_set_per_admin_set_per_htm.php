<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-05-04 10:23 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script  charset="utf-8" src="kindeditor/kindeditor.js"></script>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<div class="topnav">
		<a href="?act=set_points" <?php if ($this->_vars['navlabel'] == 'set_points'): ?>class="select"<?php endif; ?>><u>���û���ģʽ</u></a>
		<div class="clear"></div>
	</div>
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

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">
	<tr>
      <td width="200" align="right">���˻�Ա������������</td>
      <td><input name="resume_max" type="text"  class="input_text_150" id="resume_max" value="<?php echo $this->_vars['config']['resume_max']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/> 
	  ��	   </td>
    </tr>
	<tr>
      <td align="right">ÿ����������ְλ��</td>
      <td><input name="apply_jobs_max" type="text"  class="input_text_150" id="apply_jobs_max" value="<?php echo $this->_vars['config']['apply_jobs_max']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/ > 
	  ��	  </td>
    </tr>
	<tr>
      <td align="right">�ϴ�������Ƭ��С���ܳ�����</td>
      <td><input name="resume_photo_max" type="text"  class="input_text_150" id="resume_photo_max" value="<?php echo $this->_vars['config']['resume_photo_max']; ?>
" maxlength="8"   onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/> KB</td>
    </tr>
		<tr>
		  <td align="right">�����б������Ϊ��</td>
		  <td><input name="resume_list_max" type="text"  class="input_text_150"   value="<?php echo $this->_vars['config']['resume_list_max']; ?>
" maxlength="10"  onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>        
			��
			<span class="admin_note">0Ϊ������</span>
		  </td>
		</tr>
		<tr>
      <td align="right">��������Ĭ����ʾ��ʽ��</td>
      <td><label>
        <input name="resume_privacy" type="radio"   value="1"  <?php if ($this->_vars['config']['resume_privacy'] == "1"): ?>checked=checked <?php endif; ?>/>��ʵ����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="resume_privacy" value="2" <?php if ($this->_vars['config']['resume_privacy'] == "2"): ?>checked=checked<?php endif; ?>/>�������</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="resume_privacy" value="3" <?php if ($this->_vars['config']['resume_privacy'] == "3"): ?>checked=checked<?php endif; ?>/>����</label>
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
	<div class="toptit">�������֤����</div>
 
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">	 
	<tr>
      <td width="200" align="right">�·�������Ĭ�����״̬��</td>
      <td>
	  <label>
        <input name="audit_resume" type="radio" id="audit_resume" value="1"  <?php if ($this->_vars['config']['audit_resume'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label>
        <input name="audit_resume" type="radio" id="audit_resume" value="2"  <?php if ($this->_vars['config']['audit_resume'] == "2"): ?>checked=checked <?php endif; ?>/>�����</label>
		&nbsp;&nbsp;&nbsp;&nbsp;
<label>
        <input name="audit_resume" type="radio" id="audit_resume" value="3"  <?php if ($this->_vars['config']['audit_resume'] == "3"): ?>checked=checked <?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
		<tr>
      <td align="right">�޸ļ��������״̬��Ϊ��</td>
      <td>
	  <label>
        <input name="audit_edit_resume" type="radio" id="audit_edit_resume" value="-1"  <?php if ($this->_vars['config']['audit_edit_resume'] == "-1"): ?>checked=checked <?php endif; ?>/>���ֲ���</label>
&nbsp;&nbsp;&nbsp;&nbsp;
	  <label>
        <input name="audit_edit_resume" type="radio" id="audit_edit_resume" value="1"  <?php if ($this->_vars['config']['audit_edit_resume'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label>
        <input name="audit_edit_resume" type="radio" id="audit_edit_resume" value="2"  <?php if ($this->_vars['config']['audit_edit_resume'] == "2"): ?>checked=checked <?php endif; ?>/>�����</label>
		&nbsp;&nbsp;&nbsp;&nbsp;
<label>
        <input name="audit_edit_resume" type="radio" id="audit_edit_resume" value="3"  <?php if ($this->_vars['config']['audit_edit_resume'] == "3"): ?>checked=checked <?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<tr>
      <td align="right">����������Ƭ����ƬĬ�����״̬��</td>
      <td><label>
        <input name="audit_resume_photo" type="radio" id="audit_resume_photo" value="1"  <?php if ($this->_vars['config']['audit_resume_photo'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_resume_photo" value="2" id="audit_resume_photo"  <?php if ($this->_vars['config']['audit_resume_photo'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_resume_photo" value="3" id="audit_resume_photo"  <?php if ($this->_vars['config']['audit_resume_photo'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
</td>
    </tr>
	<tr>
      <td align="right">�޸ļ�������Ƭ����Ƭ���״̬��</td>
      <td>
	  <label>
        <input name="audit_edit_photo" type="radio" id="audit_edit_photo" value="-1"  <?php if ($this->_vars['config']['audit_edit_photo'] == "-1"): ?>checked=checked <?php endif; ?>/>���ֲ���</label>
&nbsp;&nbsp;&nbsp;&nbsp;
	  <label>
        <input name="audit_edit_photo" type="radio" id="audit_edit_photo" value="1"  <?php if ($this->_vars['config']['audit_edit_photo'] == "1"): ?>checked=checked <?php endif; ?>/>���ͨ��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_edit_photo" value="2" id="audit_edit_photo"  <?php if ($this->_vars['config']['audit_edit_photo'] == "2"): ?>checked=checked<?php endif; ?>/>�����</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="audit_edit_photo" value="3" id="audit_edit_photo"  <?php if ($this->_vars['config']['audit_edit_photo'] == "3"): ?>checked=checked<?php endif; ?>/>���δͨ��</label>
	  </td>
    </tr>
	
 		
	<tr>
      <td align="right">ǿ�ƻ�Ա��֤�ֻ���</td>
      <td><label>
        <input name="login_per_audit_mobile" type="radio" id="login_per_audit_mobile" value="1"  <?php if ($this->_vars['config']['login_per_audit_mobile'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="login_per_audit_mobile" value="0" id="login_per_audit_mobile"  <?php if ($this->_vars['config']['login_per_audit_mobile'] == "0"): ?>checked=checked<?php endif; ?>/>��</label>
<span class="admin_note">��Ҫ��Ϊǿ����֤�ֻ��迪������ģ��</span>

</td>
	</tr>
	<tr>
      <td align="right">ǿ�ƻ�Ա��֤email��</td>
      <td><label>
        <input name="login_per_audit_email" type="radio" id="login_per_audit_email" value="1"  <?php if ($this->_vars['config']['login_per_audit_email'] == "1"): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="login_per_audit_email" value="0" id="login_per_audit_email"  <?php if ($this->_vars['config']['login_per_audit_email'] == "0"): ?>checked=checked<?php endif; ?>/>��</label></td>
	</tr>
		<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td> 
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
	  </table>
  </form>
	<div class="toptit">��ϵ��ʽ����</div>
 
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">	 
	<tr>
      <td width="200" align="right">������ϵ��ʽ��ʾ��ʽ��</td>
      <td><label>
        <input name="showresumecontact" type="radio" value="0"  <?php if ($this->_vars['config']['showresumecontact'] == "0"): ?>checked=checked <?php endif; ?>/>�οͿɼ�</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="showresumecontact" value="1"  <?php if ($this->_vars['config']['showresumecontact'] == "1"): ?>checked=checked<?php endif; ?>/>�ѵ�¼��Ա�ɼ�
 </label>
 &nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="showresumecontact" value="2"  <?php if ($this->_vars['config']['showresumecontact'] == "2"): ?>checked=checked<?php endif; ?>/>���غ�ɼ�
 </label>
 <span class="admin_note">(�����Ϊ���οͿɼ������ѵ�¼��Ա�ɼ�������վ����ʧȥ��ҪӮ����)</span></td>
    </tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td> 
	    <input name="submit" type="submit" class="admin_submit"    value="�����޸�"/>
	  </td>
	  </tr>
	  </table>
  </form>
  
  	<div class="toptit">��ϵ��ʽͼ�λ� <span class="admin_note">ͼ�λ���Ҫ�����������ļ��ϴ���data/contactimgfont/�������ļ�����Ϊ��cn.ttc��</span></div>
 
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">	 
	<tr>
      <td width="200" align="right">������ϵ��ʽ��</td>
      <td><label><input name="contact_img_resume" type="radio"   value="1"  <?php if ($this->_vars['config']['contact_img_resume'] == "1"): ?>checked=checked <?php endif; ?>/>����</label>
	  &nbsp;&nbsp;&nbsp;&nbsp;
 <label><input name="contact_img_resume" type="radio"   value="2"  <?php if ($this->_vars['config']['contact_img_resume'] == "2"): ?>checked=checked <?php endif; ?>/>ͼ�λ�</label>
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
  
  
  	<div class="toptit">������������</div>
 
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">	 
	<tr>
      <td width="200" align="right">��������Ҫ��</td>
      <td><label>
        <input name="down_resume_limit" type="radio" value="1"  <?php if ($this->_vars['config']['down_resume_limit'] == "1"): ?>checked=checked <?php endif; ?>/>�ѵ�¼���з���ְλ����ҵ������</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="down_resume_limit" value="2"  <?php if ($this->_vars['config']['down_resume_limit'] == "2"): ?>checked=checked<?php endif; ?>/>�ѵ�¼����ҵ������
 </label>
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
	<div class="toptit">�߼��˲�����</div>
 
    <form action="?act=set_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="95%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">	 
	<tr>
	<tr>
      <td align="right">����߼��˲ż�������ָ��Ҫ��</td>
      <td><label>
        <input name="elite_resume_complete_percent" type="radio"   value="60"  <?php if ($this->_vars['config']['elite_resume_complete_percent'] == "60"): ?>checked=checked <?php endif; ?>/>>=60%</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="elite_resume_complete_percent" value="73"    <?php if ($this->_vars['config']['elite_resume_complete_percent'] == "73"): ?>checked=checked<?php endif; ?>/>>=73%
</label>

&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="elite_resume_complete_percent" value="86"    <?php if ($this->_vars['config']['elite_resume_complete_percent'] == "86"): ?>checked=checked<?php endif; ?>/>>=86%
</label>

&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="elite_resume_complete_percent" value="100"    <?php if ($this->_vars['config']['elite_resume_complete_percent'] == "100"): ?>checked=checked<?php endif; ?>/>100%
</label>
</td>
	</tr>
      <td width="200" align="right" valign="top">����߼��˲�˵����</td>
      <td>
	  <textarea name="personal_talent_requirement" style="width:450px; height:160px; font-size:12px; line-height:180%"  id="personal_talent_requirement"><?php echo $this->_vars['text']['personal_talent_requirement']; ?>
</textarea>
	   <script>
 KE.show({
				id : 'personal_talent_requirement',
				resizeMode : 1,
				allowPreviewEmoticons : false,
				allowUpload : false,
				items : [
				'source','fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold', 'italic', 'underline',
				'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
				'insertunorderedlist', '|',  'link']
			});
		</script>	  </td>
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