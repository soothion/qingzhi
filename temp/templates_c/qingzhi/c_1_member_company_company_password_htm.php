<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 20:46 中国标准时间 */ ?>
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
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
//验证
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   oldpassword:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password:{
    required: true,
	minlength:6,
    maxlength:18,
	NOequalTo:"#oldpassword"
   },
   password1:{
	 equalTo:"#password"
   }
	},
    messages: {
    oldpassword: {
    required: "请输入旧密码",
    minlength: jQuery.format("旧密码不能小于{0}个字符"),
	maxlength: jQuery.format("旧密码不能大于{0}个字符")
   },
   password: {
    required: "请输入新密码",
    minlength: jQuery.format("新密码不能小于{0}个字符"),
	maxlength: jQuery.format("新密码不能大于{0}个字符")
   },
   password1: {
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
	jQuery.validator.addMethod("NOequalTo", function(value, element,param) {
	var toval=$(param).val();
    return this.optional(element) || (toval!=value);
}, "新密码不可以和旧密码相同");
});
})
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
">会员中心</a>&nbsp;>&nbsp;<a href="?act=userprofile" >账户管理</a> &nbsp;>&nbsp;修改密码
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
		  <h1>修改密码</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" >基本资料</a>
			<a href="?act=user_email"  >认证邮箱</a>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile" >认证手机</a>
			<?php endif; ?>-->
              <a href="?act=avatars" >我的头像</a>
              <a href="?act=password_edit" class="select">密码修改</a>
			  <div class="clear"></div>
			  </div>
	<form id="Form1" name="Form1" method="post" action="?act=save_password" >
	<table width="100%" border="0" cellpadding="4" cellspacing="0" style="margin-top:20px; margin-bottom:20px;" >
 
        <td width="150" height="35" align="right" bgcolor="#FFFFFF"  ><span style="color:#FF3300; font-weight:bold">*</span>旧密码：</td>
        <td  ><input name="oldpassword" type="password"  class="input_text_200" id="oldpassword" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span>新密码：</td>
        <td   ><input name="password" type="password" class="input_text_200" id="password" maxlength="18"  /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span>再次输入新密码： </td>
        <td  ><input name="password1" type="password" class="input_text_200" id="password1" maxlength="18"  /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF"  >&nbsp;</td>
        <td ><input type="submit" name="Submit" value="确定修改"  class="user_submit" /></td>
      </tr>     
    </table>
	</form>
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
