<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1ú±ê×?ê±?? */ ?>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<?php if ($this->_vars['handsel_userlogin']): ?>
<script type="text/javascript">
$(document).ready(function()
{
		dialog("系统提示","text:<div style=\"padding:10px; height:150px; font-size:14px;line-height:400%;text-align:center\"><strong>今天是您第一次登录，<?php echo $this->_vars['QISHI']['points_byname']; ?>
 <strong style=\"color:#FF0000\"><?php echo $this->_vars['handsel_userlogin']; ?>
</strong></strong><br/><a href=\"personal_service.php?act=points_report\">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费明细]</a>&nbsp;&nbsp;&nbsp;<a href=\"personal_service.php?act=points_rule\" >[<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费规则]</div>","400px","auto","");
});
</script>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(function()
{
//
$('#chk').click(function(){$("#form1 :checkbox").attr('checked',$("#chk").attr('checked'))});
$("#preview").click(function(){
	dialog("请选择要预览的简历","id:previewbox","400px","auto","");
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
" style="color:#990000">中心首页</a>
<?php if ($this->_vars['auditresume']): ?>
<a href="javascript:void(0);" style="color:#990000"  id="preview">预览简历</a>
<?php else: ?>
<a href="personal_resume.php?act=make1" style="color:#990000"  onClick="return confirm('无法预览，因为还没有创建简历，现在去创建吗？')">预览简历</a>
<?php endif; ?>
</div>
<div id="previewbox" style="display:none">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
<tr>
    <td bgcolor="#F3F7FC"><strong>简历名称</strong></td>
    <td width="130" align="center" bgcolor="#F3F7FC"><strong>刷新时间</strong></td>
    <td width="50" bgcolor="#F3F7FC"><strong>点击</strong></td>
  </tr>
<?php if (count((array)$this->_vars['auditresume'])): foreach ((array)$this->_vars['auditresume'] as $this->_vars['list']): ?>
  <tr>
    <td class="us_list"><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['title']; ?>
</a></td>
    <td align="center" class="us_list"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%m/%d %H:%M"); ?>
</td>
    <td class="us_list"><?php echo $this->_vars['list']['click']; ?>
次</td>
  </tr>
  <?php endforeach; endif; ?>
</table>
</div>
<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">简历管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_resume.php?act=make1">创建新简历</a></li>
			<li><a href="personal_resume.php?act=resume_list">简历管理</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>
<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">求职管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
" target="_blank">搜索职位</a></li>
			<li><a href="personal_apply.php?act=down">简历下载</a></li>
			<li><a href="personal_apply.php?act=interview">面试通知</a></li>
			<li><a href="personal_apply.php?act=apply_jobs">已投简历</a></li>
			<li><a href="personal_apply.php?act=favorites">职位收藏夹</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>

<div class="left_menu_box">
	<div class="left_menu_bg">
		<div class="left_menu_tit">吐槽管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_tucao.php?act=make">我要吐槽</a></li>
			<li><a href="personal_tucao.php?act=tucao_list">吐槽管理</a></li>
			<div class="clear"></div>
	  </ul>
	</div>
</div>


<div class="left_menu_box" id="service">
<div class="left_menu_bg">
	<div class="left_menu_tit">服务中心</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="personal_service.php?act=order_add"><?php echo $this->_vars['QISHI']['points_byname']; ?>
充值</a></li>
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="personal_service.php?act=setmeal_list">申请服务</a></li>		
		<?php endif; ?>	
		<li><a href="personal_service.php?act=order_list">订单管理</a></li>
		<li><a href="personal_service.php?act=points_report"><?php echo $this->_vars['QISHI']['points_byname']; ?>
明细</a></li>
		<li><a href="personal_service.php?act=points_rule"><?php echo $this->_vars['QISHI']['points_byname']; ?>
规则</a></li>		
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="personal_service.php?act=setmeal_report">消费明细</a></li>
		<?php endif; ?>
		
		<div class="clear"></div>
		</ul>
</div>
</div>



<div class="left_menu_box" style="border-bottom:1px #D8D8D8 solid;">
	<div class="left_menu_bg">
		<div class="left_menu_tit">账户管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="personal_user.php?act=userprofile">个人资料</a></li>
			<li><a href="personal_user.php?act=pm&new=1">消息管理</a></li>
			<li><a href="personal_user.php?act=user_email">邮箱认证</a></li>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<li><a href="personal_user.php?act=user_mobile">手机认证</a></li>
			<?php endif; ?>-->
			<li><a href="personal_user.php?act=user_status">帐号状态</a></li>
			<li><a href="personal_user.php?act=password_edit">密码修改</a></li>
			<li><a  href="personal_user.php?act=feedback">意见建议</a></li>
			<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">安全退出</a></li>
		<div class="clear"></div>
	  </ul>
	</div>
</div>