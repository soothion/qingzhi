<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:05 中国标准时间 */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<div class="topnav">
		<a href="?act=set_points" <?php if ($this->_vars['navlabel'] == 'set_points'): ?>class="select"<?php endif; ?>><u>配置积分模式</u></a>
		<div class="clear"></div>
	</div>
  <div class="clear"></div>
</div>
<div class="toptip">
	<h2>提示：</h2>
	<p>
积分模式是指会员每次发布信息都扣除相应的积分，通过会员充值积分来实现网站盈利，此模式简易灵活，无时间限制。<br />
除以下设置外，企业推广和企业模版模块也涉及到了积分设置。<br />
</p>
</div>
<div class="toptit">基本设置</div>
 
	<form action="?act=set_points_config_save" method="post"  name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

	
    <table width="100%" border="0" cellspacing="5" cellpadding="1" style=" margin-bottom:3px;">

      <tr>
        <td width="200" align="right">积分代替名：</td>
        <td><input name="points_byname" type="text"  class="input_text_150" id="points_byname" value="<?php echo $this->_vars['config']['points_byname']; ?>
" maxlength="10"/>
          &nbsp;&nbsp;&nbsp;<span  style="color:#666666">(如：铜板、元宝等，默认为“积分”)</span></td>
      </tr>
      <tr>
        <td align="right">积分量词：</td>
        <td><input name="points_quantifier" type="text"  class="input_text_150" id="points_quantifier" value="<?php echo $this->_vars['config']['points_quantifier']; ?>
" maxlength="10"/>
          &nbsp;&nbsp;&nbsp;<span  style="color:#666666">(如：个、只、把等，默认为“点”)</span></td>
      </tr>
      <tr>
        <td align="right">充值比例：<strong>1</strong>元等于：</td>
        <td><input name="payment_rate" type="text"  class="input_text_150" id="payment_rate" value="<?php echo $this->_vars['config']['payment_rate']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
          点积分 <span style="color:#666666">(充值人民币与积分兑换比例)</span></td>
      </tr>
      <tr>
        <td align="right">充值最低额度：</td>
        <td><input name="payment_min" type="text"  class="input_text_150" id="payment_min" value="<?php echo $this->_vars['config']['payment_min']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
          元 <span style="color:#666666">(充值积分单笔金额不能低于)</span></td>
      </tr>
<tr>
        <td align="right">积分充值提醒：</td>
        <td><input name="points_min_remind" type="text"  class="input_text_150" id="points_min_remind" value="<?php echo $this->_vars['config']['points_min_remind']; ?>
" maxlength="8"    onkeyup="if(event.keyCode !=37 &amp;&amp; event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/>
           <span style="color:#666666">(0为不提醒，如设置为10则积分少于10时会员中心提醒充值)</span></td>
      </tr>
      <tr>
        <td align="right" valign="top">&nbsp;</td>
        <td height="55"><span style="font-size:14px;">
          <input name="submit2" type="submit" class="admin_submit"    value="保存修改"/>
        </span></td>
      </tr>
    </table>
	</form>
    <form action="?act=set_points_save" method="post"  name="form1" id="form1">
	 <?php echo $this->_vars['inputtoken']; ?>

	<div class="toptit">基本设置</div>
 
    <table width="100%" border="0" cellspacing="5" cellpadding="1">
	  <?php if (count((array)$this->_vars['points'])): foreach ((array)$this->_vars['points'] as $this->_vars['points']): ?>
      <tr>
        <td width="200" align="right" ><?php echo $this->_vars['points']['title']; ?>
：</td>
        <td width="5" >

		  <select name="operation[]" style="font-size:12px;">
		    <option value="1"  <?php if ($this->_vars['points']['operation'] == "1"): ?>selected="selected"<?php endif; ?>>加</option>
		    <option value="2"  <?php if ($this->_vars['points']['operation'] == "2"): ?>selected="selected"<?php endif; ?>>减</option>
        </select>		</td>
        <td >
		<input name="id[]" type="hidden" value="<?php echo $this->_vars['points']['id']; ?>
" />
		<input name="value[]" type="text" class="input_text_50"   value="<?php echo $this->_vars['points']['value']; ?>
" maxlength="4"/>
积分</td>
      </tr>
	  	  <?php endforeach; endif; ?>
      <tr>
        <td align="right"  >&nbsp;</td>
        <td height="50" colspan="2"  ><input name="submit" type="submit" class="admin_submit"    value="保存"/></td>
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