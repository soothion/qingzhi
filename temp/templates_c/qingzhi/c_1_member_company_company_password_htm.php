<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 20:46 �й���׼ʱ�� */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="��ְ��" />
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
//��֤
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
    required: "�����������",
    minlength: jQuery.format("�����벻��С��{0}���ַ�"),
	maxlength: jQuery.format("�����벻�ܴ���{0}���ַ�")
   },
   password: {
    required: "������������",
    minlength: jQuery.format("�����벻��С��{0}���ַ�"),
	maxlength: jQuery.format("�����벻�ܴ���{0}���ַ�")
   },
   password1: {
    equalTo: "������������벻ͬ"
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
}, "�����벻���Ժ;�������ͬ");
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

��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;<a href="?act=userprofile" >�˻�����</a> &nbsp;>&nbsp;�޸�����
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
		  <h1>�޸�����</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" >��������</a>
			<a href="?act=user_email"  >��֤����</a>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile" >��֤�ֻ�</a>
			<?php endif; ?>-->
              <a href="?act=avatars" >�ҵ�ͷ��</a>
              <a href="?act=password_edit" class="select">�����޸�</a>
			  <div class="clear"></div>
			  </div>
	<form id="Form1" name="Form1" method="post" action="?act=save_password" >
	<table width="100%" border="0" cellpadding="4" cellspacing="0" style="margin-top:20px; margin-bottom:20px;" >
 
        <td width="150" height="35" align="right" bgcolor="#FFFFFF"  ><span style="color:#FF3300; font-weight:bold">*</span>�����룺</td>
        <td  ><input name="oldpassword" type="password"  class="input_text_200" id="oldpassword" maxlength="20" /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span>�����룺</td>
        <td   ><input name="password" type="password" class="input_text_200" id="password" maxlength="18"  /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span>�ٴ����������룺 </td>
        <td  ><input name="password1" type="password" class="input_text_200" id="password1" maxlength="18"  /></td>
      </tr>
      <tr>
        <td height="35" align="right" bgcolor="#FFFFFF"  >&nbsp;</td>
        <td ><input type="submit" name="Submit" value="ȷ���޸�"  class="user_submit" /></td>
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
