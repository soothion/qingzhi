<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:05 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
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
����ģʽ��ָ��Աÿ�η�����Ϣ���۳���Ӧ�Ļ��֣�ͨ����Ա��ֵ������ʵ����վӯ������ģʽ��������ʱ�����ơ�<br />
�����������⣬��ҵ�ƹ����ҵģ��ģ��Ҳ�漰���˻������á�<br />
</p>
</div>
<div class="toptit">��������</div>
 
	<form action="?act=set_points_config_save" method="post"  name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

	
    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">

      <tr>
        <td width="200" align="right">���ִ�������</td>
        <td><input name="points_byname" type="text"  class="input_text_150" id="points_byname" value="<?php echo $this->_vars['config']['points_byname']; ?>
" maxlength="10"/>
          &nbsp;&nbsp;&nbsp;<span  style="color:#666666">(�磺ͭ�塢Ԫ���ȣ�Ĭ��Ϊ�����֡�)</span></td>
      </tr>
      <tr>
        <td align="right">�������ʣ�</td>
        <td><input name="points_quantifier" type="text"  class="input_text_150" id="points_quantifier" value="<?php echo $this->_vars['config']['points_quantifier']; ?>
" maxlength="10"/>
          &nbsp;&nbsp;&nbsp;<span  style="color:#666666">(�磺����ֻ���ѵȣ�Ĭ��Ϊ���㡱)</span></td>
      </tr>
      <tr>
        <td align="right">��ֵ������<strong>1</strong>Ԫ���ڣ�</td>
        <td><input name="payment_rate" type="text"  class="input_text_150" id="payment_rate" value="<?php echo $this->_vars['config']['payment_rate']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
          ����� <span style="color:#666666">(��ֵ���������ֶһ�����)</span></td>
      </tr>
      <tr>
        <td align="right">��ֵ��Ͷ�ȣ�</td>
        <td><input name="payment_min" type="text"  class="input_text_150" id="payment_min" value="<?php echo $this->_vars['config']['payment_min']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
          Ԫ <span style="color:#666666">(��ֵ���ֵ��ʽ��ܵ���)</span></td>
      </tr>
<tr>
        <td align="right">���ֳ�ֵ���ѣ�</td>
        <td><input name="points_min_remind" type="text"  class="input_text_150" id="points_min_remind" value="<?php echo $this->_vars['config']['points_min_remind']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
           <span style="color:#666666">(0Ϊ�����ѣ�������Ϊ10���������10ʱ��Ա�������ѳ�ֵ)</span></td>
      </tr>
      <tr>
        <td align="right" valign="top">&nbsp;</td>
        <td height="55"><span style="font-size:14px;">
          <input name="submit2" type="submit" class="admin_submit"    value="�����޸�"/>
        </span></td>
      </tr>
    </table>
	</form>
    <form action="?act=set_points_save" method="post"  name="form1" id="form1">
	 <?php echo $this->_vars['inputtoken']; ?>

	<div class="toptit">��������</div>
 
    <table width="100%" border="0" cellspacing="5" cellpadding="1">
	  <?php if (count((array)$this->_vars['points'])): foreach ((array)$this->_vars['points'] as $this->_vars['points']): ?>
      <tr>
        <td width="200" align="right" ><?php echo $this->_vars['points']['title']; ?>
��</td>
        <td width="5" >

		  <select name="operation[]" style="font-size:12px;">
		    <option value="1"  <?php if ($this->_vars['points']['operation'] == "1"): ?>selected="selected"<?php endif; ?>>��</option>
		    <option value="2"  <?php if ($this->_vars['points']['operation'] == "2"): ?>selected="selected"<?php endif; ?>>��</option>
        </select>		</td>
        <td >
		<input name="id[]" type="hidden" value="<?php echo $this->_vars['points']['id']; ?>
" />
		<input name="value[]" type="text" class="input_text_50"   value="<?php echo $this->_vars['points']['value']; ?>
" maxlength="4"/>
����</td>
      </tr>
	  	  <?php endforeach; endif; ?>
      <tr>
        <td align="right"  >&nbsp;</td>
        <td height="50" colspan="2"  ><input name="submit" type="submit" class="admin_submit"    value="����"/></td>
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