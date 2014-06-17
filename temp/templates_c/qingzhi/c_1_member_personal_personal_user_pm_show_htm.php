<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 18:33 中国标准时间 */ ?>
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
   replytext:{
    required: true,
	minlength:1,
    maxlength:150
   }
	},
    messages: {
    replytext: {
    required: "请输入内容",
    minlength: jQuery.format("内容不能小于{0}个字符"),
	maxlength: jQuery.format("内容不能大于{0}个字符")
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
});
})
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
<div class="page_location link_bk">
当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a>&nbsp;>&nbsp;账户管理 &nbsp;>&nbsp;消息管理
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
		  <h1>消息管理</h1>
		</div>
		<div class="us_tab">
			<a href="?act=pm&new=1" <?php if ($_GET['new'] == "1"): ?>class="select"<?php endif; ?>>未读<span>(<?php echo $this->_vars['total1']; ?>
)</span></a>
              <a href="?act=pm&msgtype=1" <?php if ($_GET['msgtype'] == "1"): ?>class="select"<?php endif; ?>>系统消息<span>(<?php echo $this->_vars['total2']; ?>
)</span></a>
              <a href="?act=pm&msgtype=2" <?php if ($_GET['msgtype'] == "2"): ?>class="select"<?php endif; ?>>私人消息<span>(<?php echo $this->_vars['total3']; ?>
)</span></a>
			  <div class="clear"></div>
	    </div>
	<table width="97%" border="0" align="center" cellpadding="8" cellspacing="0" bgcolor="#F6F6F6" class="link_lan" style=" margin:0 auto 10px;">
  <tr>
    <td width="80" height="35px;">
	  &nbsp;&nbsp;<a href="?act=pm&msgtype=<?php echo $_GET['msgtype']; ?>
&new=<?php echo $_GET['new']; ?>
">&lt;&lt;返回</a></td>
    <td >
	<?php if ($this->_vars['show']['msgtype'] == '1'): ?>
	<strong>系统消息</strong>  <span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['show']['dateline'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
	<?php else: ?>
	<strong><?php echo $this->_vars['show']['msgfrom']; ?>
</strong> 发送给 <strong><?php echo $this->_vars['show']['msgtoname']; ?>
</strong> 的消息 <span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['show']['dateline'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
	<?php endif; ?>

	 </td>
    <td width="50" align="center" ><a href="?act=pm_del&pmid=<?php echo $this->_vars['show']['pmid']; ?>
&msgtype=<?php echo $_GET['msgtype']; ?>
&new=<?php echo $_GET['new']; ?>
" onclick="return confirm('你确定要清空吗？')">清空</a></td>
  </tr>
</table> 
<?php if ($this->_vars['show']['msgtype'] == '1'): ?>
<table width="98%" border="0" align="center" cellpadding="10" cellspacing="0" style="line-height:180%;" class="link_lan">
  <tr>
    <td><?php echo $this->_run_modifier($this->_vars['show']['message'], 'nl2br', 'PHP', 1); ?>
</td>
    </tr>
</table>
<?php else: ?>
<div style="padding-bottom:15px;line-height:180%;">
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="80" height="49" align="center" valign="top">
	<?php if ($this->_vars['show']['avatars']): ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/48/<?php echo $this->_vars['show']['avatars']; ?>
" border="0" width="48" height="48"/>
	<?php else: ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/_no_photo.gif" border="0" />
	 <?php endif; ?>	</td>
    <td width="7" class="pmboxleft"></td>
    <td >
	
	<table border="0" cellspacing="0" cellpadding="0"  class="pmboxlefttext">
  <tr>
    <td>
	
	<strong><?php echo $this->_vars['show']['msgfrom']; ?>
</strong><span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['show']['replytime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
      <br />
      <?php echo $this->_run_modifier($this->_vars['show']['message'], 'nl2br', 'PHP', 1); ?>

	  </td>
  </tr>
</table>
 
 </td>
    
  </tr>
</table>
</div>

<?php if (count((array)$this->_vars['reply'])): foreach ((array)$this->_vars['reply'] as $this->_vars['list']): ?>
<div style="padding-bottom:15px;line-height:180%;">
<?php if ($this->_vars['show']['msgfromuid'] == $this->_vars['list']['replyuid']): ?>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="60" height="49" align="center" valign="top">
	<?php if ($this->_vars['list']['avatars']): ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/48/<?php echo $this->_vars['list']['avatars']; ?>
" border="0" width="48" height="48"/>
	<?php else: ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/_no_photo.gif" border="0" />
	 <?php endif; ?>	</td>
    <td width="7" class="pmboxleft"></td>
    <td >
	
	<table border="0" cellspacing="0" cellpadding="0"  class="pmboxlefttext">
  <tr>
    <td>
	
	<strong><?php echo $this->_vars['list']['replyusername']; ?>
</strong><span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['list']['replytime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
	<?php if ($this->_vars['list']['new'] == '1'): ?><span style="color: #FF6600; padding-left:15px;">[新]</span><?php endif; ?>
      <br />
      <?php echo $this->_run_modifier($this->_vars['list']['replytext'], 'nl2br', 'PHP', 1); ?>

	  </td>
  </tr>
</table>
 </td>
  </tr>
</table>
<?php else: ?>
<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" >
	
	<table border="0" cellspacing="0" cellpadding="0"  class="pmboxrighttext">
  <tr>
    <td>
	
	<strong><?php echo $this->_vars['list']['replyusername']; ?>
</strong><span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['list']['replytime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
	<?php if ($this->_vars['list']['new'] == '1'): ?><span style="color: #FF6600; padding-left:15px;">[新]</span><?php endif; ?>
      <br />
      <?php echo $this->_run_modifier($this->_vars['list']['replytext'], 'nl2br', 'PHP', 1); ?>

	  </td>
  </tr>
</table>
 </td>    
	 <td width="7" class="pmboxright"></td>
	<td width="60" height="49" align="center" valign="top">
	<?php if ($this->_vars['list']['avatars']): ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/48/<?php echo $this->_vars['list']['avatars']; ?>
" border="0" width="48" height="48"/>
	<?php else: ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/_no_photo.gif" border="0" />
	 <?php endif; ?>	</td>
   
  </tr>
</table>
<?php endif; ?>
</div>
	  <?php endforeach; endif; ?>
	  
	  <form action="?act=pm_reply_save" method="post" id="Form1" >
	   <table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#F7F7F7" style=" border-top:1px #E8E8E8 solid">
       <tr>
         <td width="50">&nbsp;</td>
         <td height="90" valign="bottom"><textarea name="replytext"  id="replytext" style="width:400px; height:60px; font-size:12px; line-height:180%; margin-bottom:6px;" ></textarea></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td height="45" valign="top"><input type="submit" name="Submit" value="回复"  class="user_submit" />
           <input name="pmid" type="hidden" value="<?php echo $this->_vars['show']['pmid']; ?>
" /></td>
       </tr>
     </table>  
	  </form>
	 <?php endif; ?> 
	 
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
