<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1ú±ê×?ê±?? */ ?>
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
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{

	$("#tabshow li:nth-child(1)>a").addClass("selected");
	
	$("#show_avatars_url").mouseover(function() {
		$(".avatars_edit").show();
		$("#show_avatars_url").mouseout(function() {
		$(".avatars_edit").hide();
		});	
	});
<?php if ($this->_vars['count_resume'] == "0"): ?>
dialog("系统提示","text:<div style=\" height:150px; font-size:14px;line-height:400%;font-weight:bold;text-align:center\">您还没有创建简历，建议您立即创建简历，让好工作找上门！<br/><a href=\"personal_resume.php?act=make1\"><img src=\"<?php echo $this->_vars['QISHI']['site_template']; ?>
images/83.gif\" alt=\"创建简历\"  border=\"0\"  /></a></div>","500px","auto","");
<?php endif; ?>

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
  <div class="page_location link_bk"> 当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> </div>
  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
    <tr>
      <td width="183" valign="top" class="link_bk"> <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> </td>
      <td valign="top" class="link_lan"><div class="com_user_box">
          <div class="titbox">
            <div class="lefttit"><u>欢迎：<?php echo $this->_vars['user']['username']; ?>
</u>(uid:<?php echo $this->_vars['user']['uid']; ?>
)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="personal_user.php?act=userprofile">会员资料</a></div>
            <div class="rightip">上次登录时间：<?php echo $this->_run_modifier($this->_vars['user']['last_login_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;上次登录IP：<?php echo $this->_vars['user']['last_login_ip']; ?>
</div>
            <div class="clear"></div>
          </div>
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="5" >
            <tr>
              <td width="120"><table border="0" cellpadding="0" cellspacing="1" bgcolor="#CDE6F3" style="margin:3px; padding:3px;" >
                  <tr>
                    <td bgcolor="#FFFFFF"  ><div style=" position:relative"  id="show_avatars_url"> <a href="personal_user.php?act=avatars"> <?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/no_photo.gif" border="0"  width="100" height="100" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0"   width="100" height="100"  /><?php endif; ?></a>
                        <div class="avatars_edit">修改头像</div>
                      </div></td>
                  </tr>
                </table></td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"  style="color:#666666">
                  <tr>
                    <td  style=" padding-top:22px;" class="butimglink"> 认证状态：&nbsp;
                      <!--<?php if ($this->_vars['sms']['open'] == "1"): ?>			
                      <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?> <a href="personal_user.php?act=user_mobile" class="vtip" title="手机已认证，手机号：<?php echo $this->_vars['user']['mobile']; ?>
" style=" background-position: 0px -33px;">手机已认证</a> <?php else: ?> <a href="personal_user.php?act=user_mobile" class="vtip" title="手机未认证<br/>认证通过可以使用手机号登录本站，还能接收各类短信通知！" style=" background-position: 0px -55px;color: #999999">手机未认证</a> <?php endif; ?>	
                      <?php endif; ?>-->				
                      <?php if ($this->_vars['user']['email_audit'] == "1"): ?> <a href="personal_user.php?act=user_email" class="vtip" title="邮箱已认证，邮箱：<?php echo $this->_vars['user']['email']; ?>
" style=" background-position: 0px -74px;">邮箱已认证</a> <?php else: ?> <a href="personal_user.php?act=user_email" class="vtip" title="邮箱未认证<br/>认证通过可以使用邮箱号登录本站，还能接收各类邮件通知！" style=" background-position: 0px -93px;color: #999999">邮箱未认证</a> <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td style=" padding-top:12px;">信息统计：
                      我的简历：<a href="personal_resume.php?act=resume_list" <?php if ($this->_vars['count_resume'] == "0"): ?>style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_resume']; ?>
)</a>&nbsp;&nbsp;&nbsp;
                      面试邀请：<a href="personal_apply.php?act=interview" <?php if ($this->_vars['count_interview'] == "0"): ?>style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_interview']; ?>
)</a>&nbsp;&nbsp;&nbsp;
                      简历被下载：<a href="personal_apply.php?act=down" <?php if ($this->_vars['count_apply'] == "0"): ?> style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_apply']; ?>
)</a></td>
                  </tr>
                  <tr>
                    <td style=" padding-top:12px;">&nbsp;消息提醒：&nbsp;系统消息
                      <?php if ($this->_vars['msg_total1'] > 0): ?> <a href="personal_user.php?act=pm&msgtype=1" style="color:#FF0000">(<?php echo $this->_vars['msg_total1']; ?>
)</a> <?php else: ?> <a href="personal_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a> <?php endif; ?>				  
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;私人消息
                      <?php if ($this->_vars['msg_total2'] > 0): ?> <a href="personal_user.php?act=pm&msgtype=2" style="color:#FF0000">(<?php echo $this->_vars['msg_total2']; ?>
)</a> <?php else: ?> <a href="personal_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a> <?php endif; ?> </td>
                  </tr>
                </table></td>
              <td width="150" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td  style="padding-top:15px;"><a href="personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/83.gif" alt="创建简历"  border="0"  /></a></td>
                  </tr>
                  <tr>
                    <td style="padding-top:15px;"><a href="personal_resume.php?act=resume_list"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/82.gif" alt="管理简历"  border="0"  /></a></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
        <div class="com_user_box" style="margin-top:10px;">
          <div class="titbox">
            <div class="lefttit"><u>您可能感兴趣的职位</u></div>
            <div class="rightip"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
search.php"  target="_blank">更多</a></div>
            <div class="clear"></div>
          </div>
          <?php echo tpl_function_qishi_jobs_list(array('set' => $this->_run_modifier("列表名:jobs,显示数目:5,填补字符:...,职位名长度:8,排序:rtime>desc,职位大类:", 'cat', 'plugin', 1, $this->_vars['interest_id'])), $this);?>
          <?php if (! $this->_vars['jobs']): ?>
          <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:jobs,显示数目:5,填补字符:...,职位名长度:8,排序:rtime>desc"), $this);?>
          <?php endif; ?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td width="150" height="40" class="us_list_title" style="padding-left:10px;">职位名称</td>
              <td class="us_list_title">公司名称</td>
              <td width="120" align="center" class="us_list_title">薪资</td>
              <td width="120" align="center" class="us_list_title">更新日期</td>
            </tr>
          </table>
          <?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td width="150" height="35" style="padding-left:10px;"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></td>
              <td ><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></td>
              <td width="120" align="center" ><?php echo $this->_vars['list']['wage_cn']; ?>
</td>
              <td width="120" align="center"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</td>
            </tr>
          </table>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td height="30" colspan="4" valign="top" class="us_list" style="padding-left:10px;"> 工作地区：<?php echo $this->_vars['list']['district_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
                学历要求：<?php echo $this->_vars['list']['education_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
                点击：<?php echo $this->_vars['list']['click']; ?>
次&nbsp;&nbsp;|&nbsp;&nbsp;
                招聘截至：<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
 </td>
            </tr>
          </table>
          <?php endforeach; endif; ?>
          <?php if (! $this->_vars['jobs']): ?>
          <div class="us_list_no_content">没有匹配的信息</div>
          <br />
          <?php endif; ?></div></td>
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