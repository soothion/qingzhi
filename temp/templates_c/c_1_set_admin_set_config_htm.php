<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-10-06 16:16 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("set/admin_set_config_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>��ʾ��</h2>
	<p>
ҳ����������Լ��ؼ������õ�����ҳ����������á�<br />

��վ��������վ��װĿ¼��д����ɵ�����վ���ֹ��ܲ���ʹ�á�
</p>
</div>
<div class="toptit">��վ����</div>
  <form action="admin_set.php?act=site_setsave" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="120" align="right">��վ���ƣ�</td>
      <td><input name="site_name" type="text"  class="input_text_200" id="site_name" value="<?php echo $this->_vars['config']['site_name']; ?>
" maxlength="30"/></td>
    </tr>
    <tr>
      <td align="right">��վ������</td>
      <td><input name="site_domain" type="text"  class="input_text_200" id="site_domain" value="<?php echo $this->_vars['config']['site_domain']; ?>
" maxlength="100"/>
      ��β��Ҫ�� &quot; / &quot;</td>
    </tr>
    <tr>
      <td align="right">��װĿ¼��</td>
      <td><input name="site_dir" type="text"  class="input_text_200" id="site_dir" value="<?php echo $this->_vars['config']['site_dir']; ?>
" maxlength="40"/>
      ( �� &quot; / &quot; ��ͷ�ͽ�β, �����װ�ڸ�Ŀ¼����Ϊ&quot; / &quot;)      </td>
    </tr>
    <tr>
      <td align="right">��ϵ�绰(����)��</td>
      <td><input name="top_tel" type="text"  class="input_text_400" id="top_tel" value="<?php echo $this->_vars['config']['top_tel']; ?>
" maxlength="80"/></td>
    </tr>
    <tr>
      <td align="right">��ϵ�绰(�ײ�)��</td>
      <td><input name="bootom_tel" type="text"  class="input_text_400" id="bootom_tel" value="<?php echo $this->_vars['config']['bootom_tel']; ?>
" maxlength="80"/></td>
    </tr>
        <tr>
      <td align="right">΢����ַ��</td>
      <td><input name="weibo" type="text"  class="input_text_400" id="weibo" value="<?php echo $this->_vars['config']['weibo']; ?>
" maxlength="80"/></td>
    </tr>
            <tr>
      <td align="right">�õ�Ƭһ��</td>
      <td><input name="slide1_url" type="text"  class="input_text_400" value="<?php echo $this->_vars['config']['slide1_url']; ?>
" maxlength="80"/><input name="slide1_photo" type="file"  style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
    </tr>
                <tr>
      <td align="right">�õ�Ƭ����</td>
      <td><input name="slide2_url" type="text"  class="input_text_400"  value="<?php echo $this->_vars['config']['slide2_url']; ?>
" maxlength="80"/><input name="slide2_photo" type="file"  style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
    </tr>
                <tr>
      <td align="right">�õ�Ƭ����</td>
      <td><input name="slide3_url" type="text"  class="input_text_400"  value="<?php echo $this->_vars['config']['slide3_url']; ?>
" maxlength="80"/><input name="slide3_photo" type="file"  style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
    </tr>
                <tr>
      <td align="right">�õ�Ƭ�ģ�</td>
      <td><input name="slide4_url" type="text"  class="input_text_400"  value="<?php echo $this->_vars['config']['slide4_url']; ?>
" maxlength="80"/><input name="slide4_photo" type="file"  style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
    </tr>
                <tr>
      <td align="right">�õ�Ƭ�壺</td>
      <td><input name="slide5_url" type="text"  class="input_text_400" value="<?php echo $this->_vars['config']['slide5_url']; ?>
" maxlength="80"/><input name="slide5_photo" type="file"  style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/></td>
    </tr>

	<tr>
      <td align="right">��վ�ײ���ϵ��ַ��</td>
      <td><input name="address" type="text"  class="input_text_400" id="address" value="<?php echo $this->_vars['config']['address']; ?>
" maxlength="120"/></td>
    </tr>
	<tr>
      <td align="right">��վ�ײ�����˵����</td>
      <td><input name="bottom_other" type="text"  class="input_text_400" id="bottom_other" value="<?php echo $this->_vars['config']['bottom_other']; ?>
" maxlength="200"/></td>
    </tr>
    <tr>
      <td align="right">��վ������(ICP)��</td>
      <td><input name="icp" type="text"  class="input_text_400" id="icp" value="<?php echo $this->_vars['config']['icp']; ?>
" maxlength="30"  /></td>
    </tr>
    <tr>
      <td align="right">��վLogo�� </td>
      <td><input name="web_logo" type="file" id="web_logo" style="width:300px; font-size:12px; padding:3px;" onKeyDown="alert('�����Ҳࡰ�����ѡ���������ϵ�ͼƬ��');return false"/>&nbsp;&nbsp;&nbsp;<?php if ($this->_vars['config']['web_logo']): ?> <input type="button" name="Submit" value="�鿴Logo" class="vtip" title="<img src=<?php echo $this->_vars['upfiles_dir'];  echo $this->_vars['config']['web_logo']; ?>
?t=<?php echo $this->_vars['rand']; ?>
  border=0  align=absmiddle>"  style=" font-size:12px;"/><?php endif; ?>         </td>
    </tr>
    <tr>
      <td align="right">��ʱ�ر���վ��</td>
      <td>
	  <label><input name="isclose" type="radio" id="isclose" value="0"  <?php if ($this->_vars['config']['isclose'] == "0"): ?>checked="checked"<?php endif; ?>/>��</label>
       &nbsp;&nbsp;&nbsp;&nbsp; 
	   <label ><input type="radio" name="isclose" value="1" id="isclose1"  <?php if ($this->_vars['config']['isclose'] == "1"): ?>checked="checked"<?php endif; ?>/>��</label>
	   </td>
    </tr>
	
    <tr>
      <td align="right" valign="top">��ʱ�ر�ԭ��</td>
      <td><textarea name="close_reason" class="input_text_400" id="close_reason" style="height:60px;"><?php echo $this->_vars['config']['close_reason']; ?>
</textarea></td>
    </tr>
    <tr>
      <td align="right" valign="top">����������ͳ�ƴ��룺</td>
      <td><textarea name="statistics" class="input_text_400" id="statistics" style="height:60px;"><?php echo $this->_vars['config']['statistics']; ?>
</textarea></td>
    </tr>
    <tr>
      <td align="right">�رջ�Աע�᣺</td>
      <td>
	  <label>
        <input name="closereg" type="radio" id="closereg" value="0"  <?php if ($this->_vars['config']['closereg'] == 0): ?>checked=checked <?php endif; ?>/>��</label>
&nbsp;&nbsp;&nbsp;&nbsp;
<label >
<input type="radio" name="closereg" value="1"  <?php if ($this->_vars['config']['closereg'] == "1"): ?>checked=checked<?php endif; ?>/>��</label></td>
    </tr>
	 
	      
	       <tr>
	         <td align="right">&nbsp;</td>
	         <td height="50"> 
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