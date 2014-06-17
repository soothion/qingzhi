<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:24 中国标准时间 */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="admin_main_nr_dbox">
<script type="text/javascript">
$(document).ready(function()
{
	$(":radio[name='regpoints']").click(function(){
	ck_regpoints()
	});	
	ck_regpoints();
	function ck_regpoints()
	{
		if ($(":radio[name='regpoints'][checked]").val()=="y")
		{
		$("#regpointsshow").show();
		}
		else
		{
		$("#regpointsshow").hide();
		}
	}
});
</script>
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
<div class="toptit">添加企业会员</div>
  <form id="form1" name="form1" method="post" action="?act=members_add_save">
  <?php echo $this->_vars['inputtoken']; ?>

  <table width="100%" border="0" cellpadding="4" cellspacing="0"   >
    <tr>
      <td width="120" height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">用户名：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed"> <input name="username" type="text" class="input_text_200" id="username" maxlength="25" value=""/> </td>
    </tr>
    <tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">邮箱地址：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><input name="email" type="text" class="input_text_200" id="email" maxlength="25" value=""/></td>
    </tr>
    <tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">登陆密码：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><input name="password" type="password" class="input_text_200" id="password" maxlength="25" value=""/></td>
    </tr>
	
    <tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">再次输入密码：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><input name="password1" type="password" class="input_text_200" id="password1" maxlength="25" value=""/></td>
    </tr>
	    <tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">是否赠送积分：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed"  ><label>
        <input name="regpoints" type="radio" value="y" checked="checked" />
        赠送</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>
        <input type="radio" name="regpoints" value="n"   />
        不赠送</label></td>
	    </tr>
		
		<tr id="regpointsshow">
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">赠送数量：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" ><input name="regpoints_num" type="text" class="input_text_200" id="regpoints_num" maxlength="25" value="<?php echo $this->_vars['points']['reg_points']['value']; ?>
" onkeyup="if(event.keyCode !=37 && event.keyCode != 39) value=value.replace(/\D/g,'');" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/\D/g,''))"/></td>
    </tr>
	<?php if ($this->_vars['QISHI']['operation_mode'] == '2'): ?>  
	<tr>
      <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">赠送服务套餐：</td>
      <td  style=" border-bottom:1px #CCCCCC dashed" >
          <label>
          <input type="radio" name="reg_service" value="0" <?php if ($this->_vars['QISHI']['reg_service'] == '0'): ?>checked="checked"<?php endif; ?>/>
          不赠送</label>
          <?php if (count((array)$this->_vars['givesetmeal'])): foreach ((array)$this->_vars['givesetmeal'] as $this->_vars['list']): ?>
		    &nbsp;&nbsp;
		    <label>
          <input type="radio" name="reg_service" value="<?php echo $this->_vars['list']['id']; ?>
"   <?php if ($this->_vars['QISHI']['reg_service'] == $this->_vars['list']['id']): ?>checked="checked"<?php endif; ?>/>
          <?php echo $this->_vars['list']['setmeal_name']; ?>
</label>
		   <?php endforeach; endif; ?>	    
	  </td>
	    </tr>
		<?php endif; ?>
    <tr>
      <td height="30" align="right"  >&nbsp;</td>
      <td height="60"  ><span style="font-size:14px;">
        <input type="hidden" name="member_type"  value="1" />
        <input name="submit3" type="submit" class="admin_submit"    value="添加"/>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input name="submit22" type="button" class="admin_submit"    value="返 回" onclick="window.location.href='?act=members_list'"/>
      </span></td>
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