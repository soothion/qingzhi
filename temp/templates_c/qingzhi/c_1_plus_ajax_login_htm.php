<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-12-09 13:16 中国标准时间 */ ?>
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
		$(".ajax_login_err").html("请填写：用户名 / 邮箱 / 手机号");	
		$(".ajax_login_err").show();
	}
	else if($("#password").val()=="")
	{	
	$(".ajax_login_err").html("请填写密码！");
	$(".ajax_login_err").show();
	}
	<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
	else if($("#postcaptcha").val()=="" || $("#postcaptcha").val()=="点击获取验证码")
	{	
	$(".ajax_login_err").html("请填写验证码！");
	$(".ajax_login_err").show();
	}
	<?php endif; ?>
	else
	{
		$("#login").val("正在登录");
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
plus/ajax_user.php", {"username": $("#username").val(),"password": $("#password").val(),"expire":expire,"url":window.location.href,"postcaptcha":$("#postcaptcha").val(),"time": new Date().getTime(),"act":"do_login"},
	 	function (data,textStatus)
	 	 {
			if (data=="err" || data=="errcaptcha")
			{			
				$("#login").val("登录");
				$("#login").attr("disabled","");
				$("#password").attr("value","");
				$(".ajax_login_err").show();
				if (data=="err")
				{
				errinfo="帐号或者密码错误";
				}
				else if(data=="errcaptcha")
				{
				$("#imgdiv img").attr("src",$("#imgdiv img").attr("src")+"1");
				errinfo="验证码错误";
				}
				$(".ajax_login_err").html(errinfo);
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
		$(document).click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
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
<div class="ajax_login_tit">快速登录</div>
<div class="ajax_login_err"></div>
<form id="Formlogin" name="Formlogin" method="post" action="">
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" >
    <tr><td width="50" height="33" align="right">用户名：</td>
    <td>
      <input name="username" type="text"  class="input_text_150" id="username"   maxlength="30"   value="用户名/邮箱/手机号" style="color:#999999"/></td>
  </tr>
  <tr>
    <td align="right" height="33">密&nbsp;&nbsp;码：</td>
    <td>
      <input name="password" type="password"  class="input_text_150" id="password"  maxlength="20"/></td>
  </tr>
   <?php if ($this->_vars['verify_userlogin'] == "1"): ?>
		  <tr>
			<td align="right" height="33">验证码：</td>
			<td>
			  
			  <div>
	<div id="imgdiv"></div>
	<input  class="input_text_150"    name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/>
			</div>			  </td>
		  </tr>
		  <?php endif; ?>
  <tr>
    <td align="right" height="33">&nbsp;</td>
    <td><label><input type="checkbox" name="expire" id="expire" value="7" />
      一周内自动登录</label></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>
    <td height="40" valign="top" ><input type="submit" name="Submit"  id="login" class="but80" value="登录" />
	&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_getpass.php">忘记密码？</a></td>
  </tr>
  <tr>
    <td align="right" style="border-top:1px  #E8E8E8 solid">&nbsp;</td>
    <td height="30" style="border-top:1px  #E8E8E8 solid">还没有账号？<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_reg.php">免费注册</a></td>
  </tr>
   <?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
		  <tr>
		    <td align="right"  >&nbsp;</td>
		    <td  class="link_lan"  >或者你也可以用以下网站帐号登录</td>
		    </tr>
		  <tr>
		    <td align="right"  >&nbsp;</td>
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