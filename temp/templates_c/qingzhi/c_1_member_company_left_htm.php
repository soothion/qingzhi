<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:15 ?D1��������?����?? */ ?>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<?php if ($this->_vars['handsel_userlogin']): ?>
<script type="text/javascript">
$(document).ready(function()
{
		dialog("ϵͳ��ʾ","text:<div style=\"padding:10px; height:150px; font-size:14px;line-height:400%;text-align:center\"><strong>����������һ�ε�¼��<?php echo $this->_vars['QISHI']['points_byname']; ?>
 <strong style=\"color:#FF0000\"><?php echo $this->_vars['handsel_userlogin']; ?>
</strong></strong><br/><a href=\"company_service.php?act=points_report\">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
������ϸ]</a>&nbsp;&nbsp;&nbsp;<a href=\"company_service.php?act=points_rule\" >[<?php echo $this->_vars['QISHI']['points_byname']; ?>
���ѹ���]</div>","400px","auto","");
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
" style="color:#990000">������ҳ</a>
<?php if ($this->_vars['company_url']): ?>
<a href="<?php echo $this->_vars['company_url']; ?>
" style="color:#990000" target="_blank">Ԥ����ҵ</a>
<?php else: ?>
<a href="company_info.php?act=company_profile" style="color:#990000"  onClick="return confirm('�޷�Ԥ������Ϊ��û����д��ҵ��Ϣ������ȥ��д��')">Ԥ����ҵ</a>
<?php endif; ?>
</div>
<div class="left_menu_box" id="index">
	<div class="left_menu_bg">
		<div class="left_menu_tit">ְλ����</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<li><a href="company_jobs.php?act=addjobs" >����ְλ</a></li>
			<li><a href="company_jobs.php?act=jobs">ְλ����</a></li>	
			<div class="clear"></div>		
	  </ul>
	</div>
</div>



<div class="left_menu_box" id="recruitment">
<div class="left_menu_bg">
	<div class="left_menu_tit">��Ƹ����</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
<ul>
		<li><a href="<?php echo $this->_run_modifier("QS_resumelist", 'qishi_url', 'plugin', 1); ?>
"  target="_blank">�����˲�</a></li>
		<li><a href="company_recruitment.php?act=down_resume_lsit">�����ؼ���</a></li>
		<li><a href="company_recruitment.php?act=apply_jobs">�յ��ļ���</a></li>		
		<li><a href="company_recruitment.php?act=interview_lsit">��������</a> </li>
		<li><a href="company_recruitment.php?act=favorites_list">��&nbsp;&nbsp;��&nbsp;&nbsp;��</a> </li>
		<div class="clear"></div>
	</ul>
</div>
</div>


 


<div class="left_menu_box" id="promotion">
	<div class="left_menu_bg">
		<div class="left_menu_tit">��ҵ�ƹ�<div class="hot"></div></div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop">
	<ul>
			<!--<li><a href="company_promotion.php?act=tpl">ѡ��ģ��</a></li>-->
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
	<div class="left_menu_tit">��������</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="company_service.php?act=order_add"><?php echo $this->_vars['QISHI']['points_byname']; ?>
��ֵ</a></li>
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="company_service.php?act=setmeal_list">�������</a></li>		
		<?php endif; ?>	
		<li><a href="company_service.php?act=order_list">��������</a></li>
		<li><a href="company_service.php?act=points_report"><?php echo $this->_vars['QISHI']['points_byname']; ?>
��ϸ</a></li>
		<li><a href="company_service.php?act=points_rule"><?php echo $this->_vars['QISHI']['points_byname']; ?>
����</a></li>		
		<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
		<li><a href="company_service.php?act=setmeal_report">������ϸ</a></li>
		<?php endif; ?>
		<li><a href="company_service.php?act=feedback">�������</a></li>
		<div class="clear"></div>
		</ul>
</div>
</div>
<div class="left_menu_box" id="info">
<div class="left_menu_bg">
	<div class="left_menu_tit">��˾��Ϣ</div>
	<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
	<div class="clear"></div>
</div>
<div class="left_menu_btop">
		<ul>
		<li><a href="company_info.php?act=company_profile">������Ϣ</a></li>
		<li><a href="company_info.php?act=company_logo">��ҵͷ��</a></li>
        <li><a href="company_info.php?act=company_auth">Ӫҵִ��</a></li>
		<!--<li><a href="company_info.php?act=company_map">���ӵ�ͼ</a></li>-->
		<div class="clear"></div>
		</ul>
</div>
</div>	
<div class="left_menu_box" id="user" style="border-bottom:1px;">
	<div class="left_menu_bg">
		<div class="left_menu_tit">�˻�����</div>
		<div class="left_menu_img"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/07.gif"  border="0" /></div>
		<div class="clear"></div>
	</div>
	<div class="left_menu_btop" style="border-bottom:1px;">
		<ul>
		<li><a href="company_user.php?act=userprofile">��������</a></li>
		<!--<li><a href="company_user.php?act=buddy">�����б�</a></li>-->
		<li><a href="company_user.php?act=pm&new=1">��Ϣ����</a></li>
		<li><a href="company_user.php?act=user_email">������֤</a></li>
		<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
		<li><a href="company_user.php?act=user_mobile">�ֻ���֤</a></li>
		<?php endif; ?>-->
		<li><a href="company_user.php?act=user_status">�˻�״̬</a></li>
		<li><a href="company_user.php?act=password_edit">�����޸�</a></li>
		<li><a href="<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
?act=logout">��ȫ�˳�</a></li>
		<div class="clear"></div>
		</ul>
	</div>
</div>