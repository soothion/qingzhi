<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-05-04 10:23 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("safety/admin_safety_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
	��֤����Ա������ע�ἰ���ⷢ����������֤���ʹ�ò��ֲ�����÷�����������ڱ���ʱ��
<br />
ʹ�� TTF ������Ϊ��֤�����֣������ص� TTF Ӣ�������ļ��ϴ��� data/font/en Ŀ¼�£�ϵͳ�����ʹ������������ļ���Ϊ��֤�������
<br />
ʹ������ͼƬ��֤��ǰ����Ҫ�Ѱ����������ĺ��ֵ� TTF ���������ļ��ϴ��� data/font/cn Ŀ¼�£�ϵͳ�����ʹ������������ļ���Ϊ��֤�������
<br />

</p>
</div>

<div class="toptit">������֤��</div>
<script type="text/javascript" src="js/jquery.iColorPicker.js"></script>
<form action="?act=captcha_save" method="post"  name="form1" id="form1">
<?php echo $this->_vars['inputtoken']; ?>

	  <table width="90%" border="0" cellspacing="0" cellpadding="4"  >
        <tr>
          <td width="120" align="right">��Աע�᣺</td>
          <td width="210">
		  <label> <input name="verify_userreg" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_userreg'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_userreg" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_userreg'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
		  
		  </td>
          <td rowspan="4" valign="top">
		  <span class="admin_note">��֤����Ա������ע�ἰ���ⷢ����������֤���ʹ�ò��ֲ�����÷�����������ڱ���ʱ��</span><br />
		  <img src='../include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
' name="getcode" align="absmiddle"  style='cursor:pointer; margin:8px;' title="��������֤�룿�������һ��" onclick="this.src='../include/imagecaptcha.php?t='+(new Date().getTime());" border="0"/>		  </td>
        </tr>
		<tr>
          <td align="right">��Ա��¼��</td>
          <td>
		  
		  <label> <input name="verify_userlogin" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_userlogin'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_userlogin" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_userlogin'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
		 
		 </td>
        </tr>
			<tr>
          <td align="right">������Ƹ��</td>
          <td>
		  
		   <label> <input name="verify_addjob" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_addjob'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_addjob" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_addjob'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>
		
		<?php if ($this->_vars['captcha']['verify_gifts'] <> ""): ?>
		<!--<tr>
          <td align="right">��Ʒ����ֵ��</td>
          <td>
		  
		   <label> <input name="verify_gifts" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_gifts'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_gifts" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_gifts'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>-->
		<?php endif; ?>
		
			<tr>
          <td align="right">����������</td>
          <td>
		  
		   <label> <input name="verify_resume" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_resume'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_resume" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_resume'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>
			<!--<tr>
          <td align="right">����΢��Ƹ��</td>
          <td>
		  
		   <label> <input name="verify_simple" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_simple'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_simple" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_simple'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>-->
		<tr>
          <td align="right">�����������ӣ�</td>
          <td>
		  
		   <label> <input name="verify_link" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_link'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_link" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_link'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>
		<tr>
          <td align="right">�һ����룺</td>
          <td>
		  
		   <label> <input name="verify_getpwd" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_getpwd'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_getpwd" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_getpwd'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
	 </td>
        </tr>
	
		<tr>
          <td align="right">��̨��¼��</td>
          <td>
		  
		    <label> <input name="verify_adminlogin" type="radio" value="1" <?php if ($this->_vars['captcha']['verify_adminlogin'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="verify_adminlogin" type="radio" value="0" <?php if ($this->_vars['captcha']['verify_adminlogin'] == "0"): ?>checked="checked"<?php endif; ?>/>�ر�</label>
		  
		 
		   </td>
        </tr>
	
        <tr>
          <td align="right">&nbsp;</td>
          <td height="50" colspan="2"> 
            <input name="submit" type="submit" class="admin_submit"    value="����"/>         </td>
        </tr>
    </table>
  </form>
<div class="toptit">��֤������</div>
  

    <form id="form2" name="form2" method="post"   action="?act=captcha_save" >
	<?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="4" cellspacing="0"   >
    <tr>
      <td width="120" height="30" align="right"  >��֤���ȣ�</td>
      <td  ><input name="captcha_width" type="text" class="input_text_200"   maxlength="3" value="<?php echo $this->_vars['captcha']['captcha_width']; ?>
"/>
	  <span class="admin_note">��֤��ͼƬ��ȣ������� 60 - 180 ��Χ��ȡֵ��0Ϊ����Ӧ</span>
       </td>
    </tr>
	   <tr>
      <td width="120" height="30" align="right"  >��֤��߶ȣ�</td>
      <td  ><input name="captcha_height" type="text" class="input_text_200"   maxlength="3" value="<?php echo $this->_vars['captcha']['captcha_height']; ?>
"/>
	  <span class="admin_note">��֤��ͼƬ�߶ȣ������� 20 - 50 ��Χ��ȡֵ��0Ϊ����Ӧ</span>
       </td>
    </tr> 
	    <tr>
      <td height="30" align="right"  >������ɫ��</td>
      <td   >
	  
	  <table width="100%"   border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="245" >
	<input name="captcha_textcolor"  id="captcha_textcolor" type="text" class="iColorPicker input_text_200"  onclick="iColorShow('captcha_textcolor','icp_captcha_textcolor')"  maxlength="7" value="<?php echo $this->_vars['captcha']['captcha_textcolor']; ?>
"/></td>
    <td><span class="admin_note" style="float:left">��֤��������ɫ���� Ϊ���</span></td>
  </tr>
</table>

	 
	  
       </td>
    </tr>
	 <tr>
      <td height="30" align="right"  >���ִ�С��</td>
      <td   ><input name="captcha_textfontsize" type="text" class="input_text_200"   maxlength="3" value="<?php echo $this->_vars['captcha']['captcha_textfontsize']; ?>
"/>
	  <span class="admin_note">��֤�����ִ�С�������� 12 - 50 ��Χ��ȡֵ</span>
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >�ַ�������</td>
      <td   ><input name="captcha_textlength" type="text" class="input_text_200"   maxlength="2" value="<?php echo $this->_vars['captcha']['captcha_textlength']; ?>
"/>
	   <span class="admin_note">��֤���ַ������������� 2 - 6 ��Χ��ȡֵ��0 Ϊ���</span>
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >�������ͣ�</td>
      <td   >
	  
	 <label> <input name="captcha_lang" type="radio" value="en" <?php if ($this->_vars['captcha']['captcha_lang'] == "en"): ?>checked="checked"<?php endif; ?>/>
	 Ӣ��</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="captcha_lang" type="radio" value="cn" <?php if ($this->_vars['captcha']['captcha_lang'] == "cn"): ?>checked="checked"<?php endif; ?>/>����</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <span class="admin_note">ʹ��������֤����Ҫ�����ĺ��ֵ�TTF�ļ��ϴ��� data/font/cn Ŀ¼�£�ϵͳ�����ʹ������������ļ���Ϊ��֤�������</span>
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >������ɫ��</td>
      <td   >
	  
	   <table width="100%"   border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="245" >
	<input name="captcha_bgcolor"  id="captcha_bgcolor" type="text" class="iColorPicker input_text_200"  onclick="iColorShow('captcha_bgcolor','icp_captcha_bgcolor')"  maxlength="7" value="<?php echo $this->_vars['captcha']['captcha_bgcolor']; ?>
"/></td>
    <td><span class="admin_note" style="float:left">��֤�뱳����ɫ���� Ϊ���</span></td>
  </tr>
</table>
	  
	 
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >���ŵ�������</td>
      <td   ><input name="captcha_noisepoint" type="text" class="input_text_200"   maxlength="7" value="<?php echo $this->_vars['captcha']['captcha_noisepoint']; ?>
"/>
	   <span class="admin_note">��֤����ŵ������������� 0 - 1000 ��Χ��ȡֵ </span>
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >������������</td>
      <td   ><input name="captcha_noiseline" type="text" class="input_text_200"   maxlength="7" value="<?php echo $this->_vars['captcha']['captcha_noiseline']; ?>
"/>
	  <span class="admin_note">��֤������������������� 0 - 10 ��Χ��ȡֵ </span>
       </td>
    </tr>
	<tr>
      <td height="30" align="right"  >�Ƿ�Ť���ַ���</td>
      <td   >
	  <label> <input name="captcha_distortion" type="radio" value="1" <?php if ($this->_vars['captcha']['captcha_distortion'] == "1"): ?>checked="checked"<?php endif; ?>/>
	 ��</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <label> <input name="captcha_distortion" type="radio" value="0" <?php if ($this->_vars['captcha']['captcha_distortion'] == "0"): ?>checked="checked"<?php endif; ?>/>��</label>&nbsp;&nbsp;&nbsp;&nbsp;
	 <span class="admin_note">��֤���ַ�����Ť��Ч��</span>
       </td>
    </tr>
    <tr>
      <td height="30" align="right"  >&nbsp;</td>
      <td height="50"  > 
            <input name="submit3" type="submit" class="admin_submit"    value="����"/>
    
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