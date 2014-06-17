<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 12:51 中国标准时间 */ ?>
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
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
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
">会员中心</a>&nbsp;>&nbsp;<a href="?act=userprofile" >账户管理</a> &nbsp;>&nbsp;邮箱认证
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
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>邮箱认证</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" >基本资料</a>
			<a href="?act=user_email" class="select">认证邮箱</a>
			<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile"  >认证手机</a>
			<?php endif; ?>
              <a href="?act=avatars" >我的头像</a>
              <a href="?act=password_edit" >密码修改</a>
			  <div class="clear"></div>
	    </div>
			  <?php if ($this->_vars['user']['email_audit'] != "1" || $this->_vars['re_audit']): ?>
			<div style=" font-size:12px; line-height:180%;  color:#999999; padding-left:15px; padding-bottom:15px;padding-top:5px;">
			     <div style=" font-size:14px;">邮箱认证成功后，您可以享有以下服务：</div>	
				<strong style="color: #666666">邮箱账户登录:</strong> 可直接使用邮箱登录到<?php echo $this->_vars['QISHI']['site_name']; ?>
。 <br />
				<strong style="color:#666666">重要事件提醒:</strong> 进行充值/投递简历等操作时，可及时收到邮箱提醒。 <br />
				<strong style="color:#666666">找回账号密码:</strong> 忘记密码时，可使用邮箱找回密码。 <br />
			 </div>
			<script type="text/javascript">
$(document).ready(function()
{
//发送验证
	$("#send").click(function()
	{
		var str =/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]w+)*$/; 
		if($("#email").val()=='')
		{
		alert('请填写邮箱号');
		}
		else if(!str.test($("#email").val()))
		{
		alert('邮箱填写错误');
		}
		else
		{
			 $("#send").val("正在发送...");
			 $("#sendcode input").attr("disabled","disabled");
			 $.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_email.php", {"email": $("#email").val(),"send_key": "<?php echo $this->_vars['send_key']; ?>
","time":new Date().getTime(),"act":"send_code"},
	 	function (data,textStatus)
	 	 {
			if (data=='success')
			{	
				$("#send").val("已成功发送");
				$("#sendtip").show();
				$("#sendcode").css({ "background-color": "#ffffff", "border-color": "#E0E0E0" });
				$("#sendcode .us_step").addClass("wait");
				$("#verifycode").css({ "background-color": "#F1FBFE", "border-color": "#C9D9E7" });
				$("#verifycode .us_step").removeClass("wait");
				$("#verifycode input").attr("disabled","");
				SysSecond =60;
				InterValObj = window.setInterval(SetRemainTime, 1000);
				 function SetRemainTime()
				 {
						  if (SysSecond > 0)
						  {
						   SysSecond --;
						   $("#remainTime").html(SysSecond);
						  } 
						  else 
						  {
						   window.clearInterval(InterValObj);
						   $("#sendcode input").attr("disabled","");
							$("#send").val("获取验证码");
							$("#sendtip").hide();
						  }
				 }
			}
			else
			{
				$("#sendcode input").attr("disabled","");
				$("#send").val("获取验证码");
				$("#sendtip").hide();
				alert(data);
			}
	 	 }
		 ,"text"
		 )				 
		}
	});
//发送验证完毕
//检测验证码
	$("#postverify").click(function()
	{
		if($("#thiscode").val()=='')
		{
			alert('请填写效验码');
		}
		else
		{
					$.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_email.php", {"verifycode": $("#thiscode").val(),"send_key": "<?php echo $this->_vars['send_key']; ?>
","time":new Date().getTime(),"act":"verify_code"},
				function (data,textStatus)
				 {
					if (data=="success")
					{	
						 window.location.href="?act=user_email";
					}
					else
					{
						alert("验证码填写错误"); 
					}
				 })		
		}
	});
});
</script>
			  <div style="width:740px; background-color:#F1FBFE; border:1px #C9D9E7 solid; margin:0 auto; padding:10px; " id="sendcode">
			    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                  <tr>
                    <td width="100" rowspan="2">
					  <div class="us_step">1</div>					</td>
                    <td width="150" align="right">请输入邮箱号：</td>
                    <td><input name="email" type="text" class="input_text_200" id="email"  value="<?php echo $this->_vars['user']['email']; ?>
"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  style="padding-top:6px;">
                  <input type="submit" name="Submit" value="获取验证码"  id="send"  class="user_submit"  />
				  <div style=" padding-top:10px; display:none" id="sendtip">效验码已经发出，请到邮箱查收，如果没有收到你在可以 <strong style="color:#FF0000" id="remainTime">60</strong> 秒后要求系统重发</div>				  </td>
                  </tr>
                </table>
			  </div>

			  <div style="width:740px; background-color: #FFFFFF; border:1px  #E0E0E0 solid; margin:0 auto; padding:10px; margin-top:10px;" id="verifycode">
			    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                  <tr>
                    <td width="100" rowspan="2">
					<div class="us_step wait">2</div>
					</td>
                    <td width="150" align="right">请输入邮箱效验码：</td>
                    <td><input name="thiscode" type="text" class="input_text_200" id="thiscode"  disabled="disabled" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  style="padding-top:6px;">
                  <input type="button" name="Submit" value="提交"   id="postverify" class="user_submit" disabled="disabled"/></td></tr>
                </table>
			  </div>
			  <br />
<br />
			  <?php else: ?>
			   <table width="100%" border="0" cellpadding="10" cellspacing="0"  style="margin-top:30px;  color: #666666" class="link_lan">
		  <tr>
            <td width="100" align="right" valign="top" ><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/13.gif" /></td>
            <td valign="top"  >
			<div style=" font-size:12px; line-height:200%">
			<strong style="font-size:14px; color:#000000;">您已经通过<?php echo $this->_vars['QISHI']['site_name']; ?>
邮箱认证！
			<?php if ($this->_vars['handsel_verifyemail']): ?>&nbsp;&nbsp;<span style="color:#FF0000"><?php echo $this->_vars['handsel_verifyemail']; ?>
</span><?php endif; ?>
			</strong><br />
			认证邮箱为：<strong style="color:#FF6600"><?php echo $this->_vars['user']['email']; ?>
</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?act=user_email&re_audit=1">[修改]</a>	
			
			<br />
			</div>
			<div style=" border-top:1px #CCCCCC dashed; font-size:12px; margin-top:10px; line-height:180%; padding-top:10px; margin-bottom:50px; color:#999999">
		

			<div style=" font-size:14px; padding-bottom:5px;">现在开始，您可以享有以下服务：</div>
	
			<strong style="color: #666666">邮箱账户登录:</strong> 可直接使用邮箱登录到<?php echo $this->_vars['QISHI']['site_name']; ?>
。 <br />

			<strong style="color:#666666">重要事件提醒:</strong> 进行充值/投递简历等操作时，可及时收到邮箱提醒。 <br />

			<strong style="color:#666666">找回账号密码:</strong> 忘记密码时，可使用邮箱找回密码。 <br />
			<a href="company_index.php">>>返回会员中心首页</a>			</div>
			

			</td>
          </tr>
        </table>
			  
		
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
