<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:03 中国标准时间 */ ?>
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
当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a>&nbsp;>&nbsp;简历管理&nbsp;>&nbsp;隐私设置
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
		  <h1>隐私设置</h1>
		</div>
	<form id="Form1" name="Form1" method="post" action="?act=save_resume_privacy">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" >
        
		<tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;">设置：<?php echo $this->_vars['resume_basic']['title']; ?>
</span> </span></td>
              </tr>
			  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>简历公开状态</strong></td>
          </tr>
        <tr>
          <td height="35"  style=" padding-left:40px;"><label><input name="display" type="radio" value="1" <?php if ($this->_vars['resume_basic']['display'] == "1"): ?>checked="checked"<?php endif; ?> />
            完全公开</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666">(企业可以搜索到您的简历)</span>&nbsp;&nbsp;<span style="color:#FF6600"> <strong>推荐选此项！</strong></span></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display" value="2" <?php if ($this->_vars['resume_basic']['display'] <> "1"): ?> checked="checked" <?php endif; ?>/>
            半 公 开</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#666666">(企业搜不到到简历，但是您可以主动给职位投递简历)</span></td>
          </tr>
		   <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>真实姓名</strong></td>
          </tr>
		   <tr>
          <td height="35"  style=" padding-left:40px;"><label><input name="display_name" type="radio" value="1" <?php if ($this->_vars['resume_basic']['display_name'] == "1"): ?>checked="checked"<?php endif; ?> />
            显示真实姓名：<?php echo $this->_vars['resume_basic']['fullname']; ?>
</label></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display_name" value="2" <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?> checked="checked" <?php endif; ?>/>
            不显示真实姓名，显示为编号：<?php echo $this->_vars['resume_basic']['number']; ?>
</label></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="display_name" value="3" <?php if ($this->_vars['resume_basic']['display_name'] == "3"): ?> checked="checked" <?php endif; ?>/>
            仅显示姓氏：<?php echo $this->_vars['resume_basic']['lastname']; ?>
</label></td>
          </tr>
		  <?php if ($this->_vars['resume_basic']['photo'] <> ""): ?>
		     <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><strong>简历中显示照片</strong></td>
          </tr>
		   <tr>
          <td height="35"  style="padding-left:40px;"><label><input name="photo_display" type="radio" value="1" <?php if ($this->_vars['resume_basic']['photo_display'] == "1"): ?>checked="checked"<?php endif; ?> />
            显示照片</label> &nbsp;&nbsp;<span style="color:#FF6600"> <strong>推荐选此项！</strong></span></td>
          </tr>
		  <tr>
          <td height="35"  style="border-bottom:1px #C9D9E7 dashed; padding-left:40px;"><label><input type="radio" name="photo_display" value="2" <?php if ($this->_vars['resume_basic']['photo_display'] == "2"): ?> checked="checked" <?php endif; ?>/>
           不显示照片</label></td>
          </tr>
		  <?php endif; ?>
		  <tr>
          <td height="40"  style=" padding-left:60px;" >
            <input type="submit" name="Submit" value="保存设置"   class="user_submit"/>
			&nbsp;&nbsp;&nbsp;
                  <input type="button" name="next" value="预览简历"   class="user_submit" onclick="window.location='?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
'"/>
			 &nbsp;&nbsp;&nbsp;
                  <input type="button" name="next" value="返回简历管理"  class="user_long_submit" onclick="window.location='?act=resume_list'"/>
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
