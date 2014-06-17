<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 15:39 中国标准时间 */ ?>
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
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type="text/javascript" ></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#tabshow li:nth-child(4)>a").addClass("selected");
});
//验证
$(document).ready(function() {
 $("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
	   avatars: {
	   required:true,
	   accept:"jpg|gif|png|bmp"
	   }
	},
    messages: {
   avatars:{
    required:jQuery.format("请上传图片"),
	accept:jQuery.format("您上传的文件格式不正确")
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
	$("#up").click(function() {
	if ($("#Form1").valid())
	{
	$("#upform").hide();
	$("#upform_wait").show();
	}
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
">会员中心</a>&nbsp;>&nbsp;账户管理&nbsp;>&nbsp;我的头像
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
		  <h1>我的头像</h1>
		</div>
		<div class="us_tab">
			<a href="?act=userprofile">基本资料</a>
			<a href="?act=user_email">认证邮箱</a>
			<!--<?php if ($this->_vars['sms']['open'] == "1"): ?>
			<a href="?act=user_mobile"  >认证手机</a>
			<?php endif; ?>-->
              <a href="?act=avatars"  class="select">我的头像</a>
              <a href="?act=password_edit" >密码修改</a>
			  <div class="clear"></div>
	    </div>
			  <form action="?act=avatars_save" method="post" enctype="multipart/form-data" name="Form1" id="Form1">
		<table width="95%" border="0" align="center" cellpadding="4" cellspacing="0"  style="margin-top:10px;">
		 <tr>
            <td width="145" height="25" ><strong>当前头像</strong></td>
            <td width="55" >&nbsp;</td>
            <td ><strong>上传头像</strong></td>
          </tr>
		  <tr>
            <td height="30" valign="top" > 
			<div style="padding:3px; width:100px; height:100px;border:1px  #B9CBD9 solid">
				<?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/no_photo.gif" border="0" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0" width="100" height="100"/><?php endif; ?>
              </div>
			<div style="color:#999999; line-height:17px; padding:3px ;text-align:center; width:100px;">100×100</div>
			</td>
            <td width="100" height="30" valign="top" >
				<div style="padding:3px; width: 48px; height:48px;border:1px #B9CBD9 solid">
				<?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/_no_photo.gif" border="0" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/48/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0" width="48" height="48"/><?php endif; ?>
			
			</div>
			<div style="color:#999999; line-height:17px; padding:3px ;text-align:center; width:48px;">48×48</div>
			</td>
            <td height="30" valign="top" >
			<div id="upform">
			<input type="file" name="avatars"  id="avatars" style="height:24px; width:275px; font-size:12px; line-height:20px; border:1px  #CCCCCC solid"  onkeydown="alert('请点击右侧“浏览”选择您电脑上的图片！');return false"/>
<div style=" padding-top:5px; padding-bottom:5px;">允许格式：jpg/gif/bmp/png</div>
              <input type="submit" name="Submit" value="上传图片"   id="up" class="user_submit" /><br />
			  </div>
 <table border="0" cellspacing="0" cellpadding="0" style="line-height:180%; color:#009900; display:none" id="upform_wait">
  <tr>
    <td height="30"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/30.gif"  border="0"/></td>
    </tr>
  <tr>
    <td>正在上传，请稍后...</td>
    </tr>
</table></td>
		  </tr>
		  <tr>
		     <td height="30" align="right" >&nbsp;</td>
		     <td height="30" align="right" >&nbsp;</td>
		     <td  >&nbsp;</td>
	      </tr>
		  <tr>
		     <td height="30" align="right" >&nbsp;</td>
		     <td height="30" align="right" >&nbsp;</td>
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