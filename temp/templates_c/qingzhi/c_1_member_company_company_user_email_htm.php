<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 12:51 �й���׼ʱ�� */ ?>
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
">��Ա����</a>&nbsp;>&nbsp;<a href="?act=userprofile" >�˻�����</a> &nbsp;>&nbsp;������֤
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
		  <h1>������֤</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile" >��������</a>
			<a href="?act=user_email" class="select">��֤����</a>
			<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile"  >��֤�ֻ�</a>
			<?php endif; ?>
              <a href="?act=avatars" >�ҵ�ͷ��</a>
              <a href="?act=password_edit" >�����޸�</a>
			  <div class="clear"></div>
	    </div>
			  <?php if ($this->_vars['user']['email_audit'] != "1" || $this->_vars['re_audit']): ?>
			<div style=" font-size:12px; line-height:180%;  color:#999999; padding-left:15px; padding-bottom:15px;padding-top:5px;">
			     <div style=" font-size:14px;">������֤�ɹ����������������·���</div>	
				<strong style="color: #666666">�����˻���¼:</strong> ��ֱ��ʹ�������¼��<?php echo $this->_vars['QISHI']['site_name']; ?>
�� <br />
				<strong style="color:#666666">��Ҫ�¼�����:</strong> ���г�ֵ/Ͷ�ݼ����Ȳ���ʱ���ɼ�ʱ�յ��������ѡ� <br />
				<strong style="color:#666666">�һ��˺�����:</strong> ��������ʱ����ʹ�������һ����롣 <br />
			 </div>
			<script type="text/javascript">
$(document).ready(function()
{
//������֤
	$("#send").click(function()
	{
		var str =/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]w+)*$/; 
		if($("#email").val()=='')
		{
		alert('����д�����');
		}
		else if(!str.test($("#email").val()))
		{
		alert('������д����');
		}
		else
		{
			 $("#send").val("���ڷ���...");
			 $("#sendcode input").attr("disabled","disabled");
			 $.post("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_verify_email.php", {"email": $("#email").val(),"send_key": "<?php echo $this->_vars['send_key']; ?>
","time":new Date().getTime(),"act":"send_code"},
	 	function (data,textStatus)
	 	 {
			if (data=='success')
			{	
				$("#send").val("�ѳɹ�����");
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
							$("#send").val("��ȡ��֤��");
							$("#sendtip").hide();
						  }
				 }
			}
			else
			{
				$("#sendcode input").attr("disabled","");
				$("#send").val("��ȡ��֤��");
				$("#sendtip").hide();
				alert(data);
			}
	 	 }
		 ,"text"
		 )				 
		}
	});
//������֤���
//�����֤��
	$("#postverify").click(function()
	{
		if($("#thiscode").val()=='')
		{
			alert('����дЧ����');
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
						alert("��֤����д����"); 
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
                    <td width="150" align="right">����������ţ�</td>
                    <td><input name="email" type="text" class="input_text_200" id="email"  value="<?php echo $this->_vars['user']['email']; ?>
"  /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  style="padding-top:6px;">
                  <input type="submit" name="Submit" value="��ȡ��֤��"  id="send"  class="user_submit"  />
				  <div style=" padding-top:10px; display:none" id="sendtip">Ч�����Ѿ��������뵽������գ����û���յ����ڿ��� <strong style="color:#FF0000" id="remainTime">60</strong> ���Ҫ��ϵͳ�ط�</div>				  </td>
                  </tr>
                </table>
			  </div>

			  <div style="width:740px; background-color: #FFFFFF; border:1px  #E0E0E0 solid; margin:0 auto; padding:10px; margin-top:10px;" id="verifycode">
			    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="5">
                  <tr>
                    <td width="100" rowspan="2">
					<div class="us_step wait">2</div>
					</td>
                    <td width="150" align="right">����������Ч���룺</td>
                    <td><input name="thiscode" type="text" class="input_text_200" id="thiscode"  disabled="disabled" /></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td  style="padding-top:6px;">
                  <input type="button" name="Submit" value="�ύ"   id="postverify" class="user_submit" disabled="disabled"/></td></tr>
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
			<strong style="font-size:14px; color:#000000;">���Ѿ�ͨ��<?php echo $this->_vars['QISHI']['site_name']; ?>
������֤��
			<?php if ($this->_vars['handsel_verifyemail']): ?>&nbsp;&nbsp;<span style="color:#FF0000"><?php echo $this->_vars['handsel_verifyemail']; ?>
</span><?php endif; ?>
			</strong><br />
			��֤����Ϊ��<strong style="color:#FF6600"><?php echo $this->_vars['user']['email']; ?>
</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?act=user_email&re_audit=1">[�޸�]</a>	
			
			<br />
			</div>
			<div style=" border-top:1px #CCCCCC dashed; font-size:12px; margin-top:10px; line-height:180%; padding-top:10px; margin-bottom:50px; color:#999999">
		

			<div style=" font-size:14px; padding-bottom:5px;">���ڿ�ʼ���������������·���</div>
	
			<strong style="color: #666666">�����˻���¼:</strong> ��ֱ��ʹ�������¼��<?php echo $this->_vars['QISHI']['site_name']; ?>
�� <br />

			<strong style="color:#666666">��Ҫ�¼�����:</strong> ���г�ֵ/Ͷ�ݼ����Ȳ���ʱ���ɼ�ʱ�յ��������ѡ� <br />

			<strong style="color:#666666">�һ��˺�����:</strong> ��������ʱ����ʹ�������һ����롣 <br />
			<a href="company_index.php">>>���ػ�Ա������ҳ</a>			</div>
			

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