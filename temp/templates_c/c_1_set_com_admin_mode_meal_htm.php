<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:05 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
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
�ײ�ģʽ��ָ��Ա���Թ���ͬ�ȼ���������ͨ��Ա��VIP��Ա�ȣ�ÿ���ȼ����в�ͬ��ʹ��Ȩ��
</p>
</div>
<div class="toptit">��ԱĬ���ײ�����</div>
 
	<form action="?act=reg_service_save" method="post"  name="form1" id="form1">
 <?php echo $this->_vars['inputtoken']; ?>

    <table border="0" cellspacing="0" cellpadding="1"  style="margin-top:20px; margin-bottom:20px;">
      <tr>
        <td width="240" height="30" align="right" >��ע���Ա���ͷ���</td>
        <td  >
		
          <label>
          <input type="radio" name="reg_service" value="0" <?php if ($this->_vars['QISHI']['reg_service'] == '0'): ?>checked="checked"<?php endif; ?>/>
          ������</label>
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
	  <tr>
        <td height="30" align="right" >�����ڻ򳬳��涨�������û������ѣ�</td>
        <td  >
		
          <label>
          <input type="radio" name="setmeal_to_points" value="1" <?php if ($this->_vars['QISHI']['setmeal_to_points'] == '1'): ?>checked="checked"<?php endif; ?>/>
          ��</label>
         
		    &nbsp;&nbsp;
			
			 <label>
          <input type="radio" name="setmeal_to_points" value="2" <?php if ($this->_vars['QISHI']['setmeal_to_points'] == '2'): ?>checked="checked"<?php endif; ?>/>
          ��</label>
		   
		</td>
      </tr>
	  <tr>
        <td height="30" align="right" >������ʱ����ǰ�������ѣ�</td>
        <td  >
		<input name="meal_min_remind" type="text" class="input_text_200" id="meal_min_remind" value="<?php echo $this->_vars['QISHI']['meal_min_remind']; ?>
"/>
		   <span class="admin_note">0Ϊ������</span> 
		</td>
      </tr>
      <tr>
        <td height="40"  > 
        </td>
        <td  ><input name="submit2" type="submit" class="admin_submit"    value="����"/></td>
      </tr>
    </table>
	</form>
	<div class="toptit">�����ײ��б�</div>
 	
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
        <tr>
          <td width="6%" height="26" class="admin_list_tit admin_list_first">��ʾ</td>
          <td  class="admin_list_tit ">����</td>
          <td width="10%"  class="admin_list_tit">��Ա����</td>
          <td width="10%"  class="admin_list_tit">�����</td>
          <td width="10%" align="center "class="admin_list_tit">����</td>
          <td width="8%" align="center"  class="admin_list_tit">����</td>
          <td width="15%" align="center"  class="admin_list_tit">����</td>
        </tr>
		<?php if (count((array)$this->_vars['setmeal'])): foreach ((array)$this->_vars['setmeal'] as $this->_vars['list']): ?>
        <tr>
          <td class="admin_list admin_list_first" >
		  <?php if ($this->_vars['list']['display'] == "1"): ?>��ʾ<?php else: ?><span style="color: #999999">����</span><?php endif; ?>		  </td>
          <td  class="admin_list" >
	
		  <?php echo $this->_vars['list']['setmeal_name']; ?>

		 <span style="color:#999999">(id:<?php echo $this->_vars['list']['id']; ?>
)</span>
	      </td>
          <td class="admin_list"  > <?php if ($this->_vars['list']['apply'] == "1"): ?>����<?php else: ?><span style="color: #999999">������</span><?php endif; ?></td>
          <td  class="admin_list" >
		  <?php if ($this->_vars['list']['expense'] == 0): ?>
		  ���
		  <?php else: ?>
		   <?php echo $this->_vars['list']['expense']; ?>
Ԫ
		  <?php endif; ?>		  </td>
          <td class="admin_list" >
		  <?php if ($this->_vars['list']['days'] == 0): ?>
		  ������
		  <?php else: ?>
		   <?php echo $this->_vars['list']['days']; ?>
��
		  <?php endif; ?>		  </td>
          <td align="center" class="admin_list" ><?php echo $this->_vars['list']['show_order']; ?>
</td>
          <td align="center"  class="admin_list" ><a href="?act=set_meal_edit&id=<?php echo $this->_vars['list']['id']; ?>
">����</a>&nbsp;&nbsp;&nbsp;<a href="?act=set_meal_del&id=<?php echo $this->_vars['list']['id']; ?>
&<?php echo $this->_vars['urltoken']; ?>
" onclick="return confirm('��ȷ��Ҫɾ����')">ɾ��</a></td>
        </tr>
		<?php endforeach; endif; ?>
  </table>
  <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
<input name="add" type="button" class="admin_submit" id="add"    value="����"  onclick="window.location='?act=set_meal_add'"/>
		</td>
        <td width="305" align="right">
		
	    </td>
      </tr>
  </table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>