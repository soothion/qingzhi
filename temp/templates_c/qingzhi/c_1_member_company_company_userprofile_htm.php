<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-26 16:43 中国标准时间 */ ?>
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
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
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
   realname:{
    required: true,
	minlength:2,
	maxlength:8
   },
   birthday: {
	minlength:6
   },
   addresses: {
   required: true,
   minlength:6
   },
   phone:{
	minlength:6
   },
	 qq: {
	   digits:true,
	   minlength:5
	   },
	 profile:{
	maxlength:150
	}
	},
    messages: {
    realname: {
    required: "请输入真实姓名",
	minlength: jQuery.format("请正确输入姓名，{0}个字符以上"),
	maxlength: jQuery.format("请正确输入姓名，{0}个字符以内")
   },
   birthday: {
    minlength: jQuery.format("请正确输入生日")
   },
   addresses: {
    required: "请输入联系地址",
	minlength: jQuery.format("请详细输入地址")
   },
    phone: {
	minlength: jQuery.format("请正确输入电话号码")
   },
    qq: {
    digits: jQuery.format("请正确填写qq号码"),
	minlength: jQuery.format("qq号不能小于{0}位")
   },
    profile: {
    maxlength: jQuery.format("个人简介不能超过{0}个字符")
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
	jQuery.validator.addMethod("telphoneValid", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/; 
    return tel.test(value) || this.optional(element); 
}, "请输入正确的手机号码");
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
">会员中心</a>&nbsp;>&nbsp;<a href="?act=userprofile" >账户管理</a> &nbsp;>&nbsp;个人资料
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
		  <h1>个人资料</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" class="select">基本资料</a>
			<a href="?act=user_email" >认证邮箱</a>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile"  >认证手机</a>
			<?php endif; ?>-->
              <a href="?act=avatars" >我的头像</a>
              <a href="?act=password_edit" >密码修改</a>
			  <div class="clear"></div>
			  </div>
			  <form id="Form1" name="Form1" method="post" action="?act=userprofile_save">
		<table width="100%" border="0" cellpadding="4" cellspacing="0"  style="margin-top:10px;"  class="link_lan">
          <tr>
            <td width="150" height="35" align="right"   >用户名：</td>
            <td  ><?php echo $this->_vars['user']['username']; ?>
</td>
          </tr>
		   <?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['qq_openid']): ?>
			  <tr>
				<td height="35" align="right"   >QQ帐号绑定登录：</td>
				<td  >已绑定 <a href="?act=del_qq_binding" onclick="return confirm('您确定取消绑定吗?')">[取消绑定]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >QQ帐号绑定登录：</td>
				<td  >未绑定 <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>?act=binding">[立即绑定]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		  <?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['sina_access_token']): ?>
			  <tr>
				<td height="35" align="right"   >新浪微博绑定登录：</td>
				<td  >已绑定 <a href="?act=del_sina_binding" onclick="return confirm('您确定取消绑定吗?')">[取消绑定]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >新浪微博绑定登录：</td>
				<td  >未绑定 <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_sina.php">[立即绑定]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		   <?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['taobao_access_token']): ?>
			  <tr>
				<td height="35" align="right"   >淘宝帐号绑定登录：</td>
				<td  >已绑定 <a href="?act=del_taobao_binding" onclick="return confirm('您确定取消绑定吗?')">[取消绑定]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >淘宝帐号绑定登录：</td>
				<td  >未绑定 <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_taobao.php">[立即绑定]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		  <tr>
            <td height="35" align="right" >注册邮箱：</td>
            <td  >
			<?php echo $this->_vars['user']['email']; ?>

			&nbsp;&nbsp;
			<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="?act=user_email" style="color:#009900"> [已认证]</a>
			<?php else: ?>
			<a href="?act=user_email"> [点击认证]</a>
			<?php endif; ?>
			</td>
          </tr>
		  <?php if ($this->_vars['sms']['open'] == "1"): ?>
		  <tr>
		     <td height="35" align="right" >手机号码：</td>
		     <td  >
			  <?php if ($this->_vars['user']['mobile']): ?>
			 <?php echo $this->_vars['user']['mobile']; ?>

			<?php else: ?>
			未填写
			<?php endif; ?>
			 &nbsp;&nbsp;
			 <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
			<a href="?act=user_mobile" style="color:#009900"> [已认证]</a>
			<?php else: ?>
			<a href="?act=user_mobile"> [点击认证]</a>
			<?php endif; ?>
			 </td>
	      </tr>
		  <?php endif; ?>
		  <tr>
            <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>真实姓名：</td>
            <td  ><input name="realname" type="text" class="input_text_200" id="realname" maxlength="10"  value="<?php echo $this->_vars['userprofile']['realname']; ?>
" /></td>
          </tr>
		   <tr>
            <td height="35" align="right" >性别：</td>
            <td  >
              <label><input name="sex" type="radio" value="男"  <?php if ($this->_vars['userprofile']['sex'] == "男" || $this->_vars['userprofile']['sex'] == ""): ?>checked="checked"<?php endif; ?>/>
              男</label>&nbsp;&nbsp;
			  <label><input type="radio" name="sex" value="女" <?php if ($this->_vars['userprofile']['sex'] == "女"): ?>checked="checked"<?php endif; ?>/>女</label>&nbsp;&nbsp;        
            </td>
		   </tr>
		   <tr>
		     <td height="35" align="right" >生日：</td>
		     <td  ><input name="birthday" type="text" class="input_text_200" id="birthday" maxlength="50"  value="<?php echo $this->_vars['userprofile']['birthday']; ?>
" /></td>
	      </tr>
		   <tr>
		     <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>通讯地址：</td>
		     <td  ><input name="addresses" type="text" class="input_text_200" id="addresses" maxlength="150"  value="<?php echo $this->_vars['userprofile']['addresses']; ?>
" /></td>
	      </tr>
		   
		   <tr>
		     <td  align="right" >固定电话：</td>
		     <td  ><input name="phone" type="text" class="input_text_200" id="phone" maxlength="60"  value="<?php echo $this->_vars['userprofile']['phone']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >QQ：</td>
		     <td  ><input name="qq" type="text" class="input_text_200" id="qq" maxlength="30"  value="<?php echo $this->_vars['userprofile']['qq']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >MSN：</td>
		     <td  ><input name="msn" type="text" class="input_text_200" id="msn" maxlength="30"  value="<?php echo $this->_vars['userprofile']['msn']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >个人简介：</td>
		     <td  ><textarea name="profile" cols="" rows=""  class="input_text_200_textarea"><?php echo $this->_vars['userprofile']['profile']; ?>
</textarea></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >&nbsp;</td>
		     <td  ><input type="submit" name="Submit" value="保存"  class="user_submit" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >&nbsp;</td>
		     <td  > </td>
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
