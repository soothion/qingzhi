<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /><?php echo tpl_function_qishi_pageinfo(array('set' => "列表名:page,调用:QS_login"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
">
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
<script type="text/javascript">
$(document).ready(function()
{
//
$("#username").focus(function(){
	if ($("#username").val()=="用户名/邮箱/手机号")
	{
	$("#username").val('');
	$("#username").css("color","");
	}  
});
//
$(".but80").hover(function(){$(this).addClass("but80_hover")},function(){$(this).removeClass("but80_hover")});
//验证
$("form[id=Formlogin]").submit(function(e) {
e.preventDefault();
	if ($("#username").val()=="" || $("#username").val()=="用户名/邮箱/手机号")
	{			
		$(".login_err").html("请填写：用户名 / 邮箱 / 手机号");	
		$(".login_err").show();
	}
	else if($("#password").val()=="")
	{	
	$(".login_err").html("请填写密码！");
	$(".login_err").show();
	}
	<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
	else if($("#postcaptcha").val()=="" || $("#postcaptcha").val()=="点击获取验证码")
	{	
	$(".login_err").html("请填写验证码！");
	$(".login_err").show();
	}
	<?php endif; ?>
	else
	{
		$("#login").val("");
		$("#login").attr("disabled","disabled");
		 if($("#expire").attr("checked")==true)
		 {
		 var expire=$("#expire").val();
		 }
		 else
		 {
		 var expire="";
		 }
		$.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_user.php", {"username": $("#username").val(),"password": $("#password").val(),"expire":expire,"url":"<?php echo $_GET['url']; ?>
","postcaptcha":$("#postcaptcha").val(),"time": new Date().getTime(),"act":"do_login"},
	 	function (data,textStatus)
	 	 {
			if (data=="err" || data=="errcaptcha")
			{			
				$("#login").val("");
				$("#login").attr("disabled","");
				$("#password").attr("value","");
				$(".login_err").show();	
				if (data=="err")
				{
				errinfo="帐号或者密码错误";
				}
				else if(data=="errcaptcha")
				{
				$("#imgdiv img").attr("src",$("#imgdiv img").attr("src")+"1");
				errinfo="验证码错误";
				}
				$(".login_err").html(errinfo);
			}
			else
			{
				$("body").append(data);
			}
	 	 })		
	}
	return false;
});
//
//验证码部分
<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="点击获取验证码")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//设置验证码DIV
		$(imgdiv).css({ position: "absolute", left:  $(inputID).width(), "bottom": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"看不请验证码？点击更换一张\"  border=\"0\"/>");
		}
		$(imgdiv+" img").click(function()
		{
			$(imgdiv+" img").attr("src",$(imgdiv+" img").attr("src")+"1");
		});
		$(document).unbind().click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
			$(document).unbind();
			}			
		});
	});
}
imgcaptcha("#postcaptcha","#imgdiv");
//验证码结束
<?php endif; ?>
//
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="login_bg" style="padding:25px 0 60px 0;margin-top:15px;">
	<div class="login_box">
		<div class="login_boxin">
			<form id="Formlogin" name="Formlogin" method="post">
			<div class="tit">会员登录</div>
			<div class="login_err"></div>
			<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="table_login">
				<tr>
					<td width="55" align="right" id="account">帐号：</td>
					<td><input name="username" type="text"  class="login_input" id="username"   maxlength="30" value="用户名/邮箱/手机号" style="color:#999999"/></td>
				</tr>
				<tr>
					<td align="right">密码：</td>
					<td> <input name="password" type="password"  class="login_input" id="password"  maxlength="20"/>    </td>
				</tr>
		  <?php if ($this->_vars['verify_userlogin'] == "1"): ?>
				<tr>
					<td align="right">验证码：</td>
					<td>
					<div>
						<div id="imgdiv"></div>
						<input  class="login_input" name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/>
					</div>
					</td>
					</tr>
		  <?php endif; ?>
		  <tr>
			<td align="right">&nbsp;</td>
			<td><div style="position:relative;"><label><input type="checkbox" name="expire" id="expire" value="7" />
			  一周内自动登录</label></div></td>
		  </tr>
		  </table>
		  <?php if ($_GET['url']): ?>
		  <div class="login_tip">您所访问的页面需要登录后才能访问！</div>
		  <?php endif; ?>
		  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >  
		  <tr>
			<td align="right" width="50">&nbsp;</td>
			<td height="40" valign="top">
			<div style="position:relative;">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="90">
				<input type="submit" name="submitlogin"  id="login" class="but_login1" value="" />
				</td>
				<td class="link_bk"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_getpass.php">忘记密码？</a></td>
			  </tr>
			</table>
			</div>
			</td>
			</tr>
		  <tr>
			<td align="right" style="border-top:1px #E8E8E8 solid">&nbsp;</td>
			<td height="30" class="link_lan" style="border-top:1px #E8E8E8 solid">还没有账号？<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_reg.php">免费注册</a></td>
		  </tr>
		  <?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
		  <tr>
		    <td align="right" height="26">&nbsp;</td>
		    <td  class="link_lan">或者你也可以用以下网站帐号登录</td>
		    </tr>
		  <tr>
		    <td align="right">&nbsp;</td>
		    <td height="20" valign="middle"  class="link_lan"  >
			<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
			<div class="login_connectbox">
			<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>" ><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/75.gif" align="absmiddle" title="用qq帐号登录"  border="0"/></a>
			</div>
			<?php endif; ?>
			<?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
			<div class="login_connectbox">
			<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_sina.php" ><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/97.gif" align="absmiddle" title="新浪微博帐号登录"  border="0"/></a>
			</div>
			<?php endif; ?>
			<?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
			<div class="login_connectbox">
			<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_taobao.php" ><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/98.gif" align="absmiddle" title="淘宝帐号登录"  border="0"/></a>
			</div>
			<?php endif; ?>
			<div class="clear"></div>
			</td>
		    </tr>
			<?php endif; ?>
		</table>
		</form>
		</div>
  </div>
  <div class="clear"></div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
