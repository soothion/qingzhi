<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1��������?����?? */ ?>
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
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
 <div class="reg_box">
   <div class="reg_box_tit"><strong>��Ҫע���Ϊ���ֻ�Ա��</strong></div>
   <div class="item"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
         <td width="100" align="right"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/40.gif"  border="0"/></td>
         <td class="itemtit itemtit2">ע����˻�Ա</td>
       </tr>
       <tr>
         <td></td>
         <td  class="itemtxt">�ٴ�������<br />
           ������ְλ<br />
����������ְλ <br />
��ְλ�ղؼ�<br />......</td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td height="50"><input type="button" name="Submit"  id="login" class="but_per" value="" onclick="window.location='?act=form&type=2'"/></td>
       </tr>
     </table>
   </div>
   <div class="item" style="border-right:0px;">
     <table width="100%" border="0" cellspacing="10" cellpadding="0">
	<tr>
         <td width="100" align="right"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/39.gif"  border="0"/></td>
         <td class="itemtit itemtit1">ע����ҵ��Ա</td>
     </tr>
       <tr>
         <td></td>
         <td class="itemtxt">�ٷ�����Ƹ��Ϣ<br />
           �������˲� <br />
           �����ؼ��� <br />
           ����������<br />......
         </td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td height="50">
		 <input type="button" name="Submit"  id="login" class="but_com" value="" onclick="window.location='?act=form&type=1'"/></td>
      </tr>
     </table>
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