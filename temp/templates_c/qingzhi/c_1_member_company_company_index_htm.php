<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:25 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="青职网" />
<meta name="copyright" content="qingzhi.org" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//头像
	$("#show_avatars_url").mouseover(function() {
		$(".avatars_edit").show();
		$(".avatars_edit").css("opacity", 0.2);
		$("#show_avatars_url").mouseout(function() {
		$(".avatars_edit").hide();
		});	
	});
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
<div class="page_location link_bk">
当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> 
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_company/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top" class="link_lan">
	<?php if ($this->_vars['points'] <= $this->_vars['QISHI']['points_min_remind']): ?>
		 <div class="remind link_lan" >
		温馨提醒：您的账户<?php echo $this->_vars['QISHI']['points_byname']; ?>
仅剩余<span><?php echo $this->_vars['points']; ?>
</span><?php echo $this->_vars['QISHI']['points_quantifier']; ?>
，建议您尽快<a href="company_service.php?act=order_add">[充值]</a> 。
		</div>
		<?php endif; ?>
		
		<?php if ($this->_vars['QISHI']['operation_mode'] == '2'): ?>
			<?php if ($this->_vars['meal_min_remind'] == "已经到期"): ?>
			<div class="remind link_lan" >
			温馨提醒：您的的服务已经到期，建议您尽快<a href="company_service.php?act=setmeal_list">[购买新套餐]</a> 。
			</div>
			<?php else: ?>
			<div class="remind link_lan" >
			温馨提醒：您的的服务还有<span><?php echo $this->_vars['meal_min_remind']; ?>
</span>天到期，建议您尽快<a href="company_service.php?act=setmeal_list">[购买新套餐]</a> 。
			</div>
			<?php endif; ?>
		<?php endif; ?>
<div class="com_user_box">
  <div class="titbox">
  	<div class="lefttit"><u>欢迎：<?php echo $this->_vars['user']['username']; ?>
</u>(uid:<?php echo $this->_vars['user']['uid']; ?>
)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="company_user.php?act=userprofile">会员资料</a></div>
	<div class="rightip">上次登录时间：<?php echo $this->_run_modifier($this->_vars['user']['last_login_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：<?php echo $this->_vars['user']['last_login_ip']; ?>
</div>
	<div class="clear"></div>
  </div>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="5" >
            <tr>
              <td width="120">
			  <table border="0" cellpadding="0" cellspacing="1" bgcolor="#CDE6F3" style="margin:3px; padding:3px;" >
                <tr>
                  <td bgcolor="#FFFFFF"  >
				  <div style=" position:relative"  id="show_avatars_url">
				  <a href="company_user.php?act=avatars">
				  <?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/no_photo.gif" border="0"  width="100" height="100" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0"   width="100" height="100"  /><?php endif; ?></a>
				  <div class="avatars_edit">修改头像</div>
				  </div>				  </td>
                </tr>
              </table>			  </td>
              <td valign="top">
			  
			  <table width="100%" border="0" cellspacing="0" cellpadding="0"  style="color:#666666">
                <tr>
                  <td style=" padding-top:12px;">&nbsp;账户<?php echo $this->_vars['QISHI']['points_byname']; ?>
：&nbsp;<span style="color: #FF6600; font-size:30px; font-family:Arial, Helvetica, sans-serif"><?php echo $this->_vars['points']; ?>
</span>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier']; ?>

				    <a href="company_service.php?act=order_add"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/15.gif" alt="马上充值" width="55" height="26" border="0" align="absmiddle" style="margin-left:40px;" /></a>
				  </td>
                </tr>
                <tr>
                  <td  style=" padding-top:12px;" class="butimglink">
				  &nbsp;认证状态：&nbsp;
				  <?php if ($this->_vars['company']['audit'] == "1"): ?>
				  <a href="company_info.php?act=company_auth" class="vtip" title="营业执照已认证，执照编号：<?php echo $this->_vars['company']['license']; ?>
">营业执照已认证</a>
					<?php else: ?>
					 <a href="company_info.php?act=company_auth" class="vtip" title="营业执照未认证<br/>认证后可增加信息的可信度，还可能额外赠送积分哦！" style=" background-position: 0px -16px; color: #999999">营业执照未认证</a>
					<?php endif; ?>
					<?php if ($this->_vars['sms']['open'] == "1"): ?>			
						<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
						<a href="company_user.php?act=user_mobile" class="vtip" title="手机已认证，手机号：<?php echo $this->_vars['user']['mobile']; ?>
" style=" background-position: 0px -33px;">手机已认证</a>
						<?php else: ?>
						<a href="company_user.php?act=user_mobile" class="vtip" title="手机未认证<br/>认证通过可以使用手机号登录本站，还能接收各类短信通知！"  style=" background-position: 0px -55px;color: #999999">手机未认证</a>
						<?php endif; ?>	
					<?php endif; ?>				
					<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
					<a href="company_user.php?act=user_email" class="vtip" title="邮箱已认证，邮箱：<?php echo $this->_vars['user']['email']; ?>
" style=" background-position: 0px -74px;">邮箱已认证</a>
					<?php else: ?>
					<a href="company_user.php?act=user_email" class="vtip" title="邮箱未认证<br/>认证通过可以使用邮箱号登录本站，还能接收各类邮件通知！" style=" background-position: 0px -93px;color: #999999">邮箱未认证</a>
					<?php endif; ?>
				  </td>
                </tr>
                <tr>
                  <td style=" padding-top:12px;">&nbsp;消息提醒：&nbsp;系统消息
				  <?php if ($this->_vars['msg_total1'] > 0): ?>
				  <a href="company_user.php?act=pm&msgtype=1" style="color:#FF0000">(<?php echo $this->_vars['msg_total1']; ?>
)</a>
				  <?php else: ?>
				  <a href="company_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a>
				  <?php endif; ?>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;私人消息
				   <?php if ($this->_vars['msg_total2'] > 0): ?>
				   <a href="company_user.php?act=pm&msgtype=2" style="color:#FF0000">(<?php echo $this->_vars['msg_total2']; ?>
)</a>
				  <?php else: ?>
				 <a href="company_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a>
				  <?php endif; ?>				  </td>
                </tr>
              </table></td>
              <td width="180" valign="top"><table width="100%" border="0" cellspacing="16" cellpadding="0">
                <tr>
                  <td><a href="company_jobs.php?act=addjobs"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/71.gif" alt="发布职位"  border="0"  /></a></td>
                </tr>
                <tr>
                  <td><a href="company_jobs.php?act=jobs"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/81.gif" alt="管理职位"  border="0"  /></a></td>
                </tr>
              </table></td>
          </tr>
      </table>	
</div>

	<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
	<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit"><u>我的服务</u></div>
	<div class="rightip"><a href="company_service.php?act=setmeal_list" >申请服务</a></div>
	<div class="clear"></div>
  </div>
 <table width="98%" border="0" align="center" cellpadding="0" cellspacing="9">
      <tr>
        <td colspan="4">
		<span style="color:#FF6600">剩余时间：<?php if ($this->_vars['setmeal']['endtime'] == "0"): ?>不限制<?php else:  echo $this->_vars['setmeal_endtime_days'];  endif; ?></span>
		<span style="color:#999999">
		(开通时间：<?php echo $this->_run_modifier($this->_vars['setmeal']['starttime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
，结束时间<?php if ($this->_vars['setmeal']['endtime'] == "0"): ?>不限制<?php else:  echo $this->_run_modifier($this->_vars['setmeal']['endtime'], 'date_format', 'plugin', 1, "%Y-%m-%d");  endif; ?>)
		</span>
		</td>
        </tr>
      <tr>
        <td>服务名称：<span><?php echo $this->_vars['setmeal']['setmeal_name']; ?>
</span>
		<?php if ($this->_vars['setmeal']['setmeal_id'] > 1): ?><a href="company_service.php?act=setmeal_list" ><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/setmealimg/<?php echo $this->_vars['setmeal']['setmeal_id']; ?>
.gif" border="0" align="absmiddle"  title="<?php echo $this->_vars['setmeal']['setmeal_name']; ?>
" class="vtip"/></a><?php endif; ?>
		</td>
        <td>可发布普通招聘剩余：<span><?php echo $this->_vars['setmeal']['jobs_ordinary']; ?>
</span></td>
        <td>可下载普通简历剩余：<span><?php echo $this->_vars['setmeal']['download_resume_ordinary']; ?>
</span></td>
        <td>可下载高级简历剩余：<span><?php echo $this->_vars['setmeal']['download_resume_senior']; ?>
</span></td>
      </tr>
      <tr>
        <td>可邀请普通人才面试剩余：<span><?php echo $this->_vars['setmeal']['interview_ordinary']; ?>
</span></td>
        <td>可邀请高级人才面试剩余：<span><?php echo $this->_vars['setmeal']['interview_senior']; ?>
</span></td>
        <td>人才库容量剩余：<span><?php echo $this->_vars['setmeal']['talent_pool']; ?>
</span></td>
        <td></td>
      </tr>
    </table>
</div>
<?php endif; ?>
<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit" ><u>企业信息</u></div>
	<div class="rightip" ><a href="company_info.php?act=company_profile">修改</a></div>
	<div class="clear"></div>
  </div>
  <?php if ($this->_vars['company']['companyname']): ?>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="9">
      <tr>
        <td>公司名称：<?php echo $this->_vars['company']['companyname']; ?>
</td>
        <td>企业性质：<?php echo $this->_vars['company']['nature_cn']; ?>
</td>
        <td>所属行业：<?php echo $this->_vars['company']['trade_cn']; ?>
</td>
      </tr>
      <tr>
        <td>联 系 人：<?php echo $this->_vars['company']['contact']; ?>
</td>
        <td>联系电话：<?php echo $this->_vars['company']['telephone']; ?>
</td>
        <td>联系邮箱：<?php echo $this->_vars['company']['email']; ?>
</td>
      </tr>
		<tr>
        <td>所在地区：<?php echo $this->_vars['company']['district_cn']; ?>
</td>
        <td colspan="2">通讯地址：<?php echo $this->_vars['company']['address']; ?>
</td>
        </tr>
		<tr>
        <td><!--电子地图：<a href="company_info.php?act=company_map_set"><?php if ($this->_vars['company']['map_x'] && $this->_vars['company']['map_y']): ?>已经标注<?php else: ?>未标注<?php endif; ?></a>-->企业LOGO：<a href="company_info.php?act=company_logo"><?php if ($this->_vars['company']['logo'] == ""): ?>未上传<?php else: ?>已经上传<?php endif; ?></a></td>
        <td></td>
        <td>&nbsp;</td>
		</tr>
    </table>
  <?php else: ?>
  <div  style=" height:50px; line-height:50px; text-align:center">您没有填写企业资料，<a href="company_info.php?act=company_profile">立即填写</a></div>
  <?php endif; ?>
</div>
 


<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit"><u>您可能感兴趣的人才</u></div>
	<div class="rightip"><a href="<?php echo $this->_run_modifier("QS_resumelist", 'qishi_url', 'plugin', 1); ?>
"  target="_blank">更多</a></div>
	<div class="clear"></div>
  </div>
  <?php echo tpl_function_qishi_resume_list(array('set' => $this->_run_modifier("列表名:resumelist,显示数目:6,意向职位长度:30,填补字符:...,排序:rtime>desc,职位大类:", 'cat', 'plugin', 1, $this->_vars['concern_id'])), $this);?>
  <?php if (! $this->_vars['resumelist']): ?>
  <?php echo tpl_function_qishi_resume_list(array('set' => "列表名:resumelist,显示数目:6,意向职位长度:30,填补字符:...,排序:rtime>desc"), $this);?>
  <?php endif; ?>
					  <?php if ($this->_vars['resumelist']): ?>
					  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="link_lan">
                        <tr>
                          <td width="150" height="28" class="us_list_title" style="padding-left:10px;">姓名</td>

                          <td class="us_list_title">意向职位</td>
                        </tr>
<?php if (count((array)$this->_vars['resumelist'])): foreach ((array)$this->_vars['resumelist'] as $this->_vars['list']): ?>
                        <tr>
                          <td height="30" style="padding-left:10px;"><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['fullname']; ?>
</a> (<?php echo $this->_vars['list']['sex_cn']; ?>
)</td>
    
                          <td  ><?php echo $this->_vars['list']['intention_jobs']; ?>
</td>
                        </tr>
                        <tr>
                          <td height="22" colspan="2" valign="top" class="us_list" style="padding-left:10px; color:#999999">
						
						  年龄：<?php echo $this->_vars['list']['age']; ?>
岁&nbsp;&nbsp;|&nbsp;&nbsp;
						  学历：<?php echo $this->_vars['list']['education_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  工作经验：<?php echo $this->_vars['list']['experience_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  期望月薪：<?php echo $this->_vars['list']['wage_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  点击次数：<?php echo $this->_vars['list']['click']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  更新日期：<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

						  </td>
                        </tr>
						<?php endforeach; endif; ?>
        </table>
					   <?php else: ?>
			<div class="us_list_no_content">没有匹配的信息</div><br />
		  <?php endif; ?>
</div>
 </td>
      </tr>
    </table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
