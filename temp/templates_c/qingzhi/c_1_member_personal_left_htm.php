<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1��������?����?? */ ?>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<?php if ($this->_vars['handsel_userlogin']): ?>
<script type="text/javascript">
$(document).ready(function()
{
		dialog("ϵͳ��ʾ","text:<div style=\"padding:10px; height:150px; font-size:14px;line-height:400%;text-align:center\"><strong>����������һ�ε�¼��<?php echo $this->_vars['QISHI']['points_byname']; ?>
 <strong style=\"color:#FF0000\"><?php echo $this->_vars['handsel_userlogin']; ?>
</strong></strong><br/><a href=\"personal_service.php?act=points_report\">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
������ϸ]</a>&nbsp;&nbsp;&nbsp;<a href=\"personal_service.php?act=points_rule\" >[<?php echo $this->_vars['QISHI']['points_byname']; ?>
���ѹ���]</div>","400px","auto","");
});
</script>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(function()
{
//
$('#chk').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").attr('checked'))});
$("#preview").click(function(){
	dialog("��ѡ��ҪԤ���ļ���","id:previewbox","400px","auto","");
});
$(".left_menu_bg").click(function(){
		var tb=$(this).next();
		var tb_display=tb.css("display");
		if (tb_display=="block")
		{
		tb.css("display","none");
		$(this).find("img").attr("src","<?php echo $this->_vars['QISHI']['site_template']; ?>
images/06.gif");
		}
		else
		{
		tb.css("display","block");
		$(this).find("img").attr("src","<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif");
		}
	});
});
</script>
<div class="left_menu_home"><a href="<?php echo $this->_vars['userindexurl']; ?>
" style="color:#990000">������ҳ</a>
<?php if ($this->_vars['auditresume']): ?>
<a href="javascript:void(0);" style="color:#990000"  id="preview">Ԥ������</a>
<?php else: ?>
<a href="personal_resume.php?act=make1" style="color:#990000"  onClick="return confirm('�޷�Ԥ������Ϊ��û�д�������������ȥ������')">Ԥ������</a>
<?php endif; ?>
</div>
<div id="previewbox" style="display:none">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td bgcolor="#F3F7FC"><strong>��������</strong></td>
    <td width="130" align="center" bgcolor="#F3F7FC"><strong>ˢ��ʱ��</strong></td>
    <td width="50" bgcolor="#F3F7FC"><strong>���</strong></td>
  </tr>
<?php if (count((array)$this->_vars['auditresume'])): foreach ((array)$this->_vars['auditresume'] as $this->_vars['list']): ?>
  <tr>
    <td class="us_list"><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a></td>
    <td align="center" class="us_list"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%m/%d %H:%M"); ?>
</td>
    <td class="us_list"><?php echo $this->_vars['list']['click']; ?>
��</td>
  </tr>
  <?php endforeach; endif; ?>
</table>
</div>
<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">��������</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_resume.php?act=make1">�����¼���</a></li>
			<li><a href="personal_resume.php?act=resume_list">��������</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>
<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">��ְ����</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
" target="_blank">����ְλ</a></li>
			<li><a href="personal_apply.php?act=down">��������</a></li>
			<li><a href="personal_apply.php?act=interview">����֪ͨ</a></li>
			<li><a href="personal_apply.php?act=apply_jobs">��Ͷ����</a></li>
			<li><a href="personal_apply.php?act=favorites">ְλ�ղؼ�</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>

<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">�²۹���</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_tucao.php?act=make">��Ҫ�²�</a></li>
			<li><a href="personal_tucao.php?act=tucao_list">�²۹���</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>


<div class="left_menu_box" id="service">
<div class="left_menu_bg">
	<div class="left_menu_tit">��������</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="personal_service.php?act=order_add"><?php echo $this->_vars['QISHI']['points_byname']; ?>
��ֵ</a></li>
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="personal_service.php?act=setmeal_list">�������</a></li>		
		<?php endif; ?>	
		<li><a href="personal_service.php?act=order_list">��������</a></li>
		<li><a href="personal_service.php?act=points_report"><?php echo $this->_vars['QISHI']['points_byname']; ?>
��ϸ</a></li>
		<li><a href="personal_service.php?act=points_rule"><?php echo $this->_vars['QISHI']['points_byname']; ?>
����</a></li>		
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="personal_service.php?act=setmeal_report">������ϸ</a></li>
		<?php endif; ?>
		
		<div class="clear"></div>
		</ul>
</div>
</div>



<div class="left_menu_box" style="border-bottom:1px #D8D8D8 solid;">
	<div class="left_menu_bg">
		<div class="left_menu_tit">�˻�����</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_user.php?act=userprofile">��������</a></li>
			<li><a href="personal_user.php?act=pm&new=1">��Ϣ����</a></li>
			<li><a href="personal_user.php?act=user_email">������֤</a></li>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<li><a href="personal_user.php?act=user_mobile">�ֻ���֤</a></li>
			<?php endif; ?>-->
			<li><a href="personal_user.php?act=user_status">�ʺ�״̬</a></li>
			<li><a href="personal_user.php?act=password_edit">�����޸�</a></li>
			<li><a  href="personal_user.php?act=feedback">�������</a></li>
			<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">��ȫ�˳�</a></li>
		<div class="clear"></div>
	  </ul>
	</div>
</div>