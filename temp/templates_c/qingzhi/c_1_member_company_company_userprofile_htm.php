<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-26 16:43 �й���׼ʱ�� */ ?>
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
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
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
    required: "��������ʵ����",
	minlength: jQuery.format("����ȷ����������{0}���ַ�����"),
	maxlength: jQuery.format("����ȷ����������{0}���ַ�����")
   },
   birthday: {
    minlength: jQuery.format("����ȷ��������")
   },
   addresses: {
    required: "��������ϵ��ַ",
	minlength: jQuery.format("����ϸ�����ַ")
   },
    phone: {
	minlength: jQuery.format("����ȷ����绰����")
   },
    qq: {
    digits: jQuery.format("����ȷ��дqq����"),
	minlength: jQuery.format("qq�Ų���С��{0}λ")
   },
    profile: {
    maxlength: jQuery.format("���˼�鲻�ܳ���{0}���ַ�")
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
}, "��������ȷ���ֻ�����");
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
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;<a href="?act=userprofile" >�˻�����</a> &nbsp;>&nbsp;��������
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
		  <h1>��������</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" class="select">��������</a>
			<a href="?act=user_email" >��֤����</a>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile"  >��֤�ֻ�</a>
			<?php endif; ?>-->
              <a href="?act=avatars" >�ҵ�ͷ��</a>
              <a href="?act=password_edit" >�����޸�</a>
			  <div class="clear"></div>
			  </div>
			  <form id="Form1" name="Form1" method="post" action="?act=userprofile_save">
		<table width="100%" border="0" cellpadding="4" cellspacing="0"  style="margin-top:10px;"  class="link_lan">
          <tr>
            <td width="150" height="35" align="right"   >�û�����</td>
            <td  ><?php echo $this->_vars['user']['username']; ?>
</td>
          </tr>
		   <?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['qq_openid']): ?>
			  <tr>
				<td height="35" align="right"   >QQ�ʺŰ󶨵�¼��</td>
				<td  >�Ѱ� <a href="?act=del_qq_binding" onclick="return confirm('��ȷ��ȡ������?')">[ȡ����]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >QQ�ʺŰ󶨵�¼��</td>
				<td  >δ�� <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>?act=binding">[������]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		  <?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['sina_access_token']): ?>
			  <tr>
				<td height="35" align="right"   >����΢���󶨵�¼��</td>
				<td  >�Ѱ� <a href="?act=del_sina_binding" onclick="return confirm('��ȷ��ȡ������?')">[ȡ����]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >����΢���󶨵�¼��</td>
				<td  >δ�� <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_sina.php">[������]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		   <?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
				 <?php if ($this->_vars['user']['taobao_access_token']): ?>
			  <tr>
				<td height="35" align="right"   >�Ա��ʺŰ󶨵�¼��</td>
				<td  >�Ѱ� <a href="?act=del_taobao_binding" onclick="return confirm('��ȷ��ȡ������?')">[ȡ����]</a></td>
			  </tr>
			  <?php else: ?>
			   <tr>
				<td height="35" align="right"   >�Ա��ʺŰ󶨵�¼��</td>
				<td  >δ�� <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/connect_taobao.php">[������]</a></td>
			  </tr>
			  <?php endif; ?>
		  <?php endif; ?>
		  <tr>
            <td height="35" align="right" >ע�����䣺</td>
            <td  >
			<?php echo $this->_vars['user']['email']; ?>

			&nbsp;&nbsp;
			<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="?act=user_email" style="color:#009900"> [����֤]</a>
			<?php else: ?>
			<a href="?act=user_email"> [�����֤]</a>
			<?php endif; ?>
			</td>
          </tr>
		  <?php if ($this->_vars['sms']['open'] == "1"): ?>
		  <tr>
		     <td height="35" align="right" >�ֻ����룺</td>
		     <td  >
			  <?php if ($this->_vars['user']['mobile']): ?>
			 <?php echo $this->_vars['user']['mobile']; ?>

			<?php else: ?>
			δ��д
			<?php endif; ?>
			 &nbsp;&nbsp;
			 <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
			<a href="?act=user_mobile" style="color:#009900"> [����֤]</a>
			<?php else: ?>
			<a href="?act=user_mobile"> [�����֤]</a>
			<?php endif; ?>
			 </td>
	      </tr>
		  <?php endif; ?>
		  <tr>
            <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>��ʵ������</td>
            <td  ><input name="realname" type="text" class="input_text_200" id="realname" maxlength="10"  value="<?php echo $this->_vars['userprofile']['realname']; ?>
" /></td>
          </tr>
		   <tr>
            <td height="35" align="right" >�Ա�</td>
            <td  >
              <label><input name="sex" type="radio" value="��"  <?php if ($this->_vars['userprofile']['sex'] == "��" || $this->_vars['userprofile']['sex'] == ""): ?>checked="checked"<?php endif; ?>/>
              ��</label>&nbsp;&nbsp;
			  <label><input type="radio" name="sex" value="Ů" <?php if ($this->_vars['userprofile']['sex'] == "Ů"): ?>checked="checked"<?php endif; ?>/>Ů</label>&nbsp;&nbsp;        
            </td>
		   </tr>
		   <tr>
		     <td height="35" align="right" >���գ�</td>
		     <td  ><input name="birthday" type="text" class="input_text_200" id="birthday" maxlength="50"  value="<?php echo $this->_vars['userprofile']['birthday']; ?>
" /></td>
	      </tr>
		   <tr>
		     <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>ͨѶ��ַ��</td>
		     <td  ><input name="addresses" type="text" class="input_text_200" id="addresses" maxlength="150"  value="<?php echo $this->_vars['userprofile']['addresses']; ?>
" /></td>
	      </tr>
		   
		   <tr>
		     <td  align="right" >�̶��绰��</td>
		     <td  ><input name="phone" type="text" class="input_text_200" id="phone" maxlength="60"  value="<?php echo $this->_vars['userprofile']['phone']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >QQ��</td>
		     <td  ><input name="qq" type="text" class="input_text_200" id="qq" maxlength="30"  value="<?php echo $this->_vars['userprofile']['qq']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >MSN��</td>
		     <td  ><input name="msn" type="text" class="input_text_200" id="msn" maxlength="30"  value="<?php echo $this->_vars['userprofile']['msn']; ?>
" /></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >���˼�飺</td>
		     <td  ><textarea name="profile" cols="" rows=""  class="input_text_200_textarea"><?php echo $this->_vars['userprofile']['profile']; ?>
</textarea></td>
	      </tr>
		  <tr>
		     <td height="35" align="right" >&nbsp;</td>
		     <td  ><input type="submit" name="Submit" value="����"  class="user_submit" /></td>
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