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
  <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("openconnect/admin_openconnect_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip link_lan"  >
	<h2>��ʾ��</h2>
	<p>
��վ����QQ��¼���û�ֻ��Ҫʹ��QQ�˺�����Ϳɵ�¼�����û�ע�����̣�����Ч�ʵ����ת���û�������
<br />
����QQ��¼ǰ����վ�����Ƚ������룬��ö�Ӧ��appid��appkey���Ա�֤���������п���ȷ����վ���û�������֤����Ȩ�� 
���ھ�ȥ<a href="http://connect.opensns.qq.com/apply" target="_blank">����</a></p>
</div>

<div class="toptit">QQ������</div>
 
    <form action="?act=set_qq_save" method="post" name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table width="700" border="0" cellspacing="6" cellpadding="1" style=" margin-bottom:3px;">
	<tr>
      <td width="150" align="right">����QQ��¼��</td>
      <td  >
	  <label>
        <input name="qq_apiopen" type="radio"  value="1"  <?php if ($this->_vars['config']['qq_apiopen'] == "1"): ?>checked=checked <?php endif; ?>/>����</label>
&nbsp;&nbsp;
<label>
        <input name="qq_apiopen" type="radio"  value="0"  <?php if ($this->_vars['config']['qq_apiopen'] == "0"): ?>checked=checked <?php endif; ?>/>�ر�</label>
		&nbsp;&nbsp;
</td>
    </tr>
	<tr>
      <td width="150" align="right">��֤��ʽ��</td>
      <td  >
	  <label>
        <input name="qq_logintype" type="radio"  value="1"  <?php if ($this->_vars['config']['qq_logintype'] == "1"): ?>checked=checked <?php endif; ?>/>client-sideģʽ
</label>
&nbsp;&nbsp;
<label>
        <input name="qq_logintype" type="radio"  value="2"  <?php if ($this->_vars['config']['qq_logintype'] == "2"): ?>checked=checked <?php endif; ?>/>server-sideģʽ
</label>
		&nbsp;&nbsp;
</td>
    </tr>
	<tr>
      <td width="150" align="right">appid��</td>
      <td  >
	 <input name="qq_appid" type="text"  class="input_text_400"  value="<?php echo $this->_vars['config']['qq_appid']; ?>
"  />
</td>
    </tr>
	<tr>
      <td width="150" align="right">appkey��</td>
      <td  >
	 <input name="qq_appkey" type="text"  class="input_text_400"  value="<?php echo $this->_vars['config']['qq_appkey']; ?>
"  />
</td>
    </tr>
	<tr>
	  <td align="right" valign="top">&nbsp;</td>
	  <td> 
	    <input name="submit" type="submit" class="admin_submit"    value="����"/>
	  </td>
	  </tr>
  </table>
    <br />
    <br />
    <br />
    <br />
    <br />
    </form>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>