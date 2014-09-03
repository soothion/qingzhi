<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:15 ?D1ú±ê×?ê±?? */ ?>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<?php if ($this->_vars['handsel_userlogin']): ?>
<script type="text/javascript">
$(document).ready(function()
{
		dialog("系统提示","text:<div style=\"padding:10px; height:150px; font-size:14px;line-height:400%;text-align:center\"><strong>今天是您第一次登录，<?php echo $this->_vars['QISHI']['points_byname']; ?>
 <strong style=\"color:#FF0000\"><?php echo $this->_vars['handsel_userlogin']; ?>
</strong></strong><br/><a href=\"company_service.php?act=points_report\">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费明细]</a>&nbsp;&nbsp;&nbsp;<a href=\"company_service.php?act=points_rule\" >[<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费规则]</div>","400px","auto","");
});
</script>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(function()
{
//
/*
	$(".left_menu_btop li").hover(
		function()
		{
			$(this).css("background-color","#E9FBFE");
			},
			function()
			{
			$(this).css("background-color","");
			}
		);
		*/
	$(".left_menu_btop").css("display","block");
	//$("#<?php echo $this->_vars['leftmenu']; ?>
 .left_menu_btop").css("display","block");
	//$("#<?php echo $this->_vars['leftmenu']; ?>
 .left_menu_img img").attr("src","<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif");
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
<?php if ($this->_vars['company_url']): ?>
<a href="<?php echo $this->_vars['company_url']; ?>
" style="color:#990000" target="_blank">预览企业</a>
<?php else: ?>
<a href="company_info.php?act=company_profile" style="color:#990000"  onClick="return confirm('无法预览，因为还没有填写企业信息，现在去填写吗？')">预览企业</a>
<?php endif; ?>
</div>
<div class="left_menu_box" id="index">
	<div class="left_menu_bg">
		<div class="left_menu_tit">职位管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="company_jobs.php?act=addjobs" >发布职位</a></li>
			<li><a href="company_jobs.php?act=jobs">职位管理</a></li>	
			<div class="clear"></div>		
	  </ul>
	</div>
</div>



<div class="left_menu_box" id="recruitment">
<div class="left_menu_bg">
	<div class="left_menu_tit">招聘管理</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
<ul>
		<li><a href="<?php echo $this->_run_modifier("QS_resumelist", 'qishi_url', 'plugin', 1); ?>
"  target="_blank">搜索人才</a></li>
		<li><a href="company_recruitment.php?act=down_resume_lsit">已下载简历</a></li>
		<li><a href="company_recruitment.php?act=apply_jobs">收到的简历</a></li>		
		<li><a href="company_recruitment.php?act=interview_lsit">面试邀请</a> </li>
		<li><a href="company_recruitment.php?act=favorites_list">人&nbsp;&nbsp;才&nbsp;&nbsp;库</a> </li>
		<div class="clear"></div>
	</ul>
</div>
</div>


 


<div class="left_menu_box" id="promotion">
	<div class="left_menu_bg">
		<div class="left_menu_tit">企业推广<div class="hot"></div></div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<!--<li><a href="company_promotion.php?act=tpl">选择模版</a></li>-->
			<?php if (count((array)$this->_vars['promotion_category'])): foreach ((array)$this->_vars['promotion_category'] as $this->_vars['list']): ?>
			<li><a href="company_promotion.php?act=promotion&promotionid=<?php echo $this->_vars['list']['cat_id']; ?>
"><?php echo $this->_vars['list']['cat_name']; ?>
</a></li>
			<?php endforeach; endif; ?>
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
		<li><a href="company_service.php?act=order_add"><?php echo $this->_vars['QISHI']['points_byname']; ?>
充值</a></li>
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="company_service.php?act=setmeal_list">申请服务</a></li>		
		<?php endif; ?>	
		<li><a href="company_service.php?act=order_list">订单管理</a></li>
		<li><a href="company_service.php?act=points_report"><?php echo $this->_vars['QISHI']['points_byname']; ?>
明细</a></li>
		<li><a href="company_service.php?act=points_rule"><?php echo $this->_vars['QISHI']['points_byname']; ?>
规则</a></li>		
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="company_service.php?act=setmeal_report">消费明细</a></li>
		<?php endif; ?>
		<li><a href="company_service.php?act=feedback">意见建议</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
<div class="left_menu_box" id="info">
<div class="left_menu_bg">
	<div class="left_menu_tit">公司信息</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="company_info.php?act=company_profile">基本信息</a></li>
		<li><a href="company_info.php?act=company_logo">企业头像</a></li>
        <li><a href="company_info.php?act=company_auth">营业执照</a></li>
		<!--<li><a href="company_info.php?act=company_map">电子地图</a></li>-->
		<div class="clear"></div>
		</ul>
</div>
</div>	
<div class="left_menu_box" id="user" style="border-bottom:1px;">
	<div class="left_menu_bg">
		<div class="left_menu_tit">账户管理</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop" style="border-bottom:1px;">
		<ul>
		<li><a href="company_user.php?act=userprofile">个人资料</a></li>
		<!--<li><a href="company_user.php?act=buddy">好友列表</a></li>-->
		<li><a href="company_user.php?act=pm&new=1">消息管理</a></li>
		<li><a href="company_user.php?act=user_email">邮箱认证</a></li>
		<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
		<li><a href="company_user.php?act=user_mobile">手机认证</a></li>
		<?php endif; ?>-->
		<li><a href="company_user.php?act=user_status">账户状态</a></li>
		<li><a href="company_user.php?act=password_edit">密码修改</a></li>
		<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">安全退出</a></li>
		<div class="clear"></div>
		</ul>
	</div>
</div>