<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:03 �й���׼ʱ�� */ ?>
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
<script type="text/javascript">
$(document).ready(function()
{
	$("#tabshow li:nth-child(2)>a").addClass("selected");
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
">��Ա����</a>&nbsp;>&nbsp;��������&nbsp;>&nbsp;��˽����
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="183" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>��˽����</h1>
		</div>
	<form id="Form1" name="Form1" method="post" action="?act=save_resume_privacy">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" >
        
		<tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;">���ã�<?php echo $this->_vars['resume_basic']['title']; ?>
</span> </span></td>
              </tr>
			  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>��������״̬</strong></td>
          </tr>
        <tr>
          <td height="35"  style=" padding-left:40px;"><label><input name="display" type="radio" value="1" <?php if ($this->_vars['resume_basic']['display'] == "1"): ?>checked="checked"<?php endif; ?> />
            ��ȫ����</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666">(��ҵ�������������ļ���)</span>&nbsp;&nbsp;<span style="color:#FF6600"> <strong>�Ƽ�ѡ���</strong></span></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display" value="2" <?php if ($this->_vars['resume_basic']['display'] <> "1"): ?> checked="checked" <?php endif; ?>/>
            �� �� ��</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#666666">(��ҵ�Ѳ���������������������������ְλͶ�ݼ���)</span></td>
          </tr>
		   <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>��ʵ����</strong></td>
          </tr>
		   <tr>
          <td height="35"  style=" padding-left:40px;"><label><input name="display_name" type="radio" value="1" <?php if ($this->_vars['resume_basic']['display_name'] == "1"): ?>checked="checked"<?php endif; ?> />
            ��ʾ��ʵ������<?php echo $this->_vars['resume_basic']['fullname']; ?>
</label></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display_name" value="2" <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?> checked="checked" <?php endif; ?>/>
            ����ʾ��ʵ��������ʾΪ��ţ�<?php echo $this->_vars['resume_basic']['number']; ?>
</label></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display_name" value="3" <?php if ($this->_vars['resume_basic']['display_name'] == "3"): ?> checked="checked" <?php endif; ?>/>
            ����ʾ���ϣ�<?php echo $this->_vars['resume_basic']['lastname']; ?>
</label></td>
          </tr>
		  <?php if ($this->_vars['resume_basic']['photo'] <> ""): ?>
		     <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>��������ʾ��Ƭ</strong></td>
          </tr>
		   <tr>
          <td height="35"  style="padding-left:40px;"><label><input name="photo_display" type="radio" value="1" <?php if ($this->_vars['resume_basic']['photo_display'] == "1"): ?>checked="checked"<?php endif; ?> />
            ��ʾ��Ƭ</label> &nbsp;&nbsp;<span style="color:#FF6600"> <strong>�Ƽ�ѡ���</strong></span></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="photo_display" value="2" <?php if ($this->_vars['resume_basic']['photo_display'] == "2"): ?> checked="checked" <?php endif; ?>/>
           ����ʾ��Ƭ</label></td>
          </tr>
		  <?php endif; ?>
		  <tr>
          <td height="40"  style=" padding-left:60px;" >
            <input type="submit" name="Submit" value="��������"   class="user_submit"/>
			&nbsp;&nbsp;&nbsp;
                  <input type="button" name="next" value="Ԥ������"   class="user_submit" onclick="window.location='?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
'"/>
			 &nbsp;&nbsp;&nbsp;
                  <input type="button" name="next" value="���ؼ�������"  class="user_long_submit" onclick="window.location='?act=resume_list'"/>
			</td>
          </tr>
		  <tr>
		    <td height="240"  ><input name="pid" type="hidden" value="<?php echo $this->_vars['pid']; ?>
" />&nbsp;</td>
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
