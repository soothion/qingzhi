<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-12-23 17:45 �й���׼ʱ�� */ ?>
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
css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
//��֤
$(document).ready(function() {
 $("#Form1").validate({
//debug: true,
// onsubmit:false,
//onfocusout :true,
submitHandler:function(form){
if($("#agreement").attr("checked")==false)
{
alert("������ͬ��[ע��Э��]���ܼ�����һ��");
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
			alert("ע��ʧ��");
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
    required: "����д�û���",
	remote: jQuery.format("�û����Ѿ����ڻ��߲��Ϸ�")	
   },
    email: {
    required: "����д��������",
	email: jQuery.format("���������ʽ����"),
	remote: jQuery.format("email�Ѿ�����")	
   },
    <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha: {
    required: "����д��֤��",
	remote: jQuery.format("��֤�����")	
   },
    <?php endif; ?>
   password: {
    required: "����д����",
    minlength: jQuery.format("��д����С��{0}���ַ�"),
	maxlength: jQuery.format("��д���ܴ���{0}���ַ�")
   },
   password2: {
   required: "����д����",
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
	 //�����������ֽ�
	jQuery.validator.addMethod("byteRangeLength", function(value, element,	param) {
	var length = value.length;
	for (var i = 0; i < value.length; i++) {
			if (value.charCodeAt(i) > 127) {
			length++;
			}
		}
	return this.optional(element)	|| (length >= param[0] && length <= param[1]);
	}, "ȷ����ֵ��3-18���ֽ�֮��(1����������2���ֽ�)");
	 //�ַ���֤
	jQuery.validator.addMethod("userName", function(value, element) {
	return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
	}, "�û���ֻ�ܰ������ġ�Ӣ����ĸ�����ֺ��»���");
	jQuery.validator.addMethod("nomobile", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/;
	var $cstr= true;
	if (tel.test(value)) $cstr= false;
	return $cstr || this.optional(element); 
}, "�û����������ֻ���");
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="�����ȡ��֤��";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "����д��֤��");
/////��֤�벿��
<?php if ($this->_vars['verify_userreg'] == "1"): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="�����ȡ��֤��")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//������֤��DIV
		$(imgdiv).css({ position: "absolute", left:  $(inputID).width(), "bottom": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"��������֤�룿�������һ��\"  border=\"0\"/>");
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
//��֤�����
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
   <div class="tit_com"><strong>��ҵ��Աע��</strong><span>�л��� <a href="?act=form&type=2">���˻�Ա</a> ע��</span></div>
   <?php endif; ?>
   <?php if ($this->_vars['type'] == "2"): ?>
   <div class="tit_per"><strong>���˻�Աע��</strong><span>�л��� <a href="?act=form&type=1">��ҵ��Ա</a> ע��</span></div>
   <?php endif; ?>
   </div>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin:30px 0 50px 10px;">
  <tr>
    <td width="480" style=" border-right:1px #e8e8e8 solid">
	<form id="Form1" name="Form1" method="post" action="?sd">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
    <td width="130" height="40" align="right">�û�����</td>
    <td><input name="username" type="text"  class="reg_input" id="username"  maxlength="25" /></td>
    </tr>
    <tr>
    <td height="40" align="right">���õ������䣺</td>
    <td><input name="email" type="text"  class="reg_input" id="email"    maxlength="60"/></td>
    </tr>
  <tr>
    <td height="40" align="right">���õ�¼���룺</td>
    <td><input name="password" type="password"  class="reg_input" id="password"  maxlength="18"/></td>
    </tr>
  <tr>
    <td height="40" align="right">ȷ�ϵ�¼���룺</td>
    <td><input name="password2" type="password"  class="reg_input" id="password2"  maxlength="18"  /></td>
    </tr>
	<?php if ($this->_vars['verify_userreg'] == "1"): ?>
	<tr>
    <td height="40" align="right">������֤�룺</td>
    <td>
	<div>
	<div id="imgdiv"></div>
	<input  class="reg_input" name="postcaptcha" id="postcaptcha" type="text" value="�����ȡ��֤��" style="color:#999999"/></div>
	</td>
    </tr>
	<?php endif; ?>
  <tr>
    <td>
      <input name="member_type" type="hidden" id="member_type" value="<?php echo $this->_vars['type']; ?>
" /></td>
    <td class="link_lan"><input name="agreement" id="agreement" type="checkbox" value="1" checked="checked" />
      �����Ķ���ͬ�� <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
agreement/" target="_blank">[ע��Э��]</a></td>
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
	<input id="waiting" type="button" value="����ע��" style="display:none;"   class="but100"  disabled="disabled"/>
	   </div>
	   </td>
    </tr>
</table>
</form>
	</td>
    <td valign="top" ><table width="220" border="0" align="center" cellpadding="0" cellspacing="10" style="line-height:180%; margin-left:120px;"">
      <tr>
        <td style="font-size:14px;"><strong>�Ѿ����ʺţ�</strong></td>
      </tr>
      <tr>
        <td><input name="reg2" type="submit" class="but_login2" id="" value=""  onclick="window.location='<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
'" /></td>
      </tr>
      <tr>
        <td><strong style="color:#4bb500">��ҵ��Ա</strong> <br />
            ������Ƹ��Ϣ���鿴�˲ż���������������������������...</td>
      </tr>
      <tr>
        <td><strong style="color:#44b5df"> ���˻�Ա </strong> <br />
��д���˼���������Ͷ�ݼ�������������ְλ������ְλ... </td>
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
