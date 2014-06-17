<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-12-23 17:45 中国标准时间 */ ?>
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
css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
//验证
$(document).ready(function() {
 $("#Form1").validate({
//debug: true,
// onsubmit:false,
//onfocusout :true,
submitHandler:function(form){
if($("#agreement").attr("checked")==false)
{
alert("您必须同意[注册协议]才能继续下一步");
return false;
}
		$("#reg").hide();
		$("#waiting").show();
		var tsTimeStamp= new Date().getTime();
		$.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_user.php", { "username": $("#username").val(),"password": $("#password").val(),"member_type": $("#member_type").val(),"email":$("#email").val(),"postcaptcha": $("#postcaptcha").val(),"time":tsTimeStamp,"act":"do_reg"},
	 	function (data,textStatus)
	 	 {
			if (data=="err")
			{
			$("#waiting").hide();
			$("#reg").show();
			$("#username").attr("value","");
			$("#email").attr("value","");
			alert("注册失败");
			}
			else
			{
				$("body").append(data);
			}
	 	 })
//$(form).ajaxSubmit();
},
success: function(label) {
				label.text(" ").addClass("success");
			},
   rules:{
   username:{
    required: true,
	userName : true,
	nomobile : true,
	byteRangeLength : [3, 18],
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"usname":function (){return $("#username").val()},"act":"check_usname","time":function (){return new Date().getTime()}}     
		}
   },
   email:{
    required: true,
	email:true,
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"email":function (){return $("#email").val()},"act":"check_email","time": new Date().getTime()}     
		}
   },
   <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha:{
	IScaptchastr:true,
    required: true,
	remote:{     
	url:"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php",     
	type:"post",    
	data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
	}
   },
   <?php endif; ?>
   password:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password2:{
   required: true,
	 equalTo:"#password"
   }
	},
    messages: {
    username: {
    required: "请填写用户名",
	remote: jQuery.format("用户名已经存在或者不合法")	
   },
    email: {
    required: "请填写电子邮箱",
	email: jQuery.format("电子邮箱格式错误"),
	remote: jQuery.format("email已经存在")	
   },
    <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha: {
    required: "请填写验证码",
	remote: jQuery.format("验证码错误")	
   },
    <?php endif; ?>
   password: {
    required: "请填写密码",
    minlength: jQuery.format("填写不能小于{0}个字符"),
	maxlength: jQuery.format("填写不能大于{0}个字符")
   },
   password2: {
   required: "请填写密码",
    equalTo: "两次输入的密码不同"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
	 //中文字两个字节
	jQuery.validator.addMethod("byteRangeLength", function(value, element,	param) {
	var length = value.length;
	for (var i = 0; i < value.length; i++) {
			if (value.charCodeAt(i) > 127) {
			length++;
			}
		}
	return this.optional(element)	|| (length >= param[0] && length <= param[1]);
	}, "确保的值在3-18个字节之间(1个中文字算2个字节)");
	 //字符验证
	jQuery.validator.addMethod("userName", function(value, element) {
	return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
	}, "用户名只能包括中文、英文字母、数字和下划线");
	jQuery.validator.addMethod("nomobile", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/;
	var $cstr= true;
	if (tel.test(value)) $cstr= false;
	return $cstr || this.optional(element); 
}, "用户名不能是手机号");
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="点击获取验证码";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "请填写验证码");
/////验证码部分
<?php if ($this->_vars['verify_userreg'] == "1"): ?>
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
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
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
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
 <div class="reg_box">
   <div class="reg_box_tit">
   <?php if ($this->_vars['type'] == "1"): ?>
   <div class="tit_com"><strong>企业会员注册</strong><span>切换至 <a href="?act=form&type=2">个人会员</a> 注册</span></div>
   <?php endif; ?>
   <?php if ($this->_vars['type'] == "2"): ?>
   <div class="tit_per"><strong>个人会员注册</strong><span>切换至 <a href="?act=form&type=1">企业会员</a> 注册</span></div>
   <?php endif; ?>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:30px 0 50px 10px;">
  <tr>
    <td width="480" style=" border-right:1px #e8e8e8 solid">
	<form id="Form1" name="Form1" method="post" action="?sd">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="130" height="40" align="right">用户名：</td>
    <td><input name="username" type="text"  class="reg_input" id="username"  maxlength="25" /></td>
    </tr>
    <tr>
    <td height="40" align="right">常用电子邮箱：</td>
    <td><input name="email" type="text"  class="reg_input" id="email"    maxlength="60"/></td>
    </tr>
  <tr>
    <td height="40" align="right">设置登录密码：</td>
    <td><input name="password" type="password"  class="reg_input" id="password"  maxlength="18"/></td>
    </tr>
  <tr>
    <td height="40" align="right">确认登录密码：</td>
    <td><input name="password2" type="password"  class="reg_input" id="password2"  maxlength="18"  /></td>
    </tr>
	<?php if ($this->_vars['verify_userreg'] == "1"): ?>
	<tr>
    <td height="40" align="right">输入验证码：</td>
    <td>
	<div>
	<div id="imgdiv"></div>
	<input  class="reg_input" name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/></div>
	</td>
    </tr>
	<?php endif; ?>
  <tr>
    <td>
      <input name="member_type" type="hidden" id="member_type" value="<?php echo $this->_vars['type']; ?>
" /></td>
    <td class="link_lan"><input name="agreement" id="agreement" type="checkbox" value="1" checked="checked" />
      我已阅读并同意 <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
agreement/" target="_blank">[注册协议]</a></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td height="60">
	<div style="position:relative;">
	<?php if ($this->_vars['type'] == "1"): ?>
	<input name="reg" type="submit" id="reg" class="but_com2" value="" />
   <?php endif; ?>
   <?php if ($this->_vars['type'] == "2"): ?>
    <input name="reg" type="submit" id="reg" class="but_per2" value="" />
   <?php endif; ?>
	<input id="waiting" type="button" value="正在注册" style="display:none;"   class="but100"  disabled="disabled"/>
	   </div>
	   </td>
    </tr>
</table>
</form>
	</td>
    <td valign="top" ><table width="220" border="0" align="center" cellpadding="0" cellspacing="10" style="line-height:180%; margin-left:120px;"">
      <tr>
        <td style="font-size:14px;"><strong>已经有帐号？</strong></td>
      </tr>
      <tr>
        <td><input name="reg2" type="submit" class="but_login2" id="" value=""  onclick="window.location='<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
'" /></td>
      </tr>
      <tr>
        <td><strong style="color:#4bb500">企业会员</strong> <br />
            发布招聘信息，查看人才简历，搜索简历，在线邀请面试...</td>
      </tr>
      <tr>
        <td><strong style="color:#44b5df"> 个人会员 </strong> <br />
填写个人简历，在线投递简历，在线申请职位，搜索职位... </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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
