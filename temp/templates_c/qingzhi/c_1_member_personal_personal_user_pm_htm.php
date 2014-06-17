<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 20:52 中国标准时间 */ ?>
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
$("#addpms").click(function(){
var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php";
dialog("发送短消息","url:get?"+url,"400px","auto","");
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
			  <div style="padding-right:10px; text-align:right; float:right; color:#3366CC; padding-top:5px;" >
		    <span> <strong style="cursor:pointer" title="发送短消息"  id="addpms">+ 发送短消息</strong></span>
			 </div>	
			  <div class="clear"></div>
	    </div>
		 
	<form id="form1" name="form1" method="post" action="?act=pm_del">
	<?php if ($this->_vars['pms']): ?>
	<table width="97%" border="0" cellspacing="0" cellpadding="10" class="link_lan" style="margin:0 auto;">
	 <?php if (count((array)$this->_vars['pms'])): foreach ((array)$this->_vars['pms'] as $this->_vars['list']): ?>
  <tr>
    <td width="80" align="center" class="us_list">
	<?php if ($this->_vars['list']['avatars'] && $this->_vars['list']['msgtype'] <> '1'): ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/48/<?php echo $this->_vars['list']['avatars']; ?>
" border="0" width="48" height="48"/>
	<?php else: ?>
	<img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/_no_photo.gif" border="0" />
	 <?php endif; ?>	</td>
    <td class="us_list">
	<div >
	<?php if ($this->_vars['list']['msgtype'] == '1'): ?><span style="color: #FF0000">系统消息</span>
	<?php else: ?><strong><?php echo $this->_vars['list']['msgfrom']; ?>
</strong><?php endif; ?><span style="color:#999999; padding-left:20px;"><?php echo $this->_run_modifier($this->_vars['list']['replytime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M:%S"); ?>
</span>
	<?php if ($this->_vars['list']['new'] == '1' && $this->_vars['list']['replyuid'] <> $this->_vars['uid']): ?><span style="color: #FF6600; padding-left:15px;">[新]</span><?php endif; ?>
	</div>
      <div style="padding-top:4px;">	  
	  <?php echo $this->_vars['list']['message']; ?>

	  </div>
     <div style="padding-top:4px;">
	 <a href="?act=pm_show&pmid=<?php echo $this->_vars['list']['pmid']; ?>
&msgtype=<?php echo $_GET['msgtype']; ?>
&new=<?php echo $_GET['new']; ?>
">查看消息>></a>
	 </div>
	 </td>
    <td width="50" class="us_list"><a href="?act=pm_del&pmid=<?php echo $this->_vars['list']['pmid']; ?>
&msgtype=<?php echo $_GET['msgtype']; ?>
&new=<?php echo $_GET['new']; ?>
" onclick="return confirm('你确定要删除吗？')">删除</a></td>
  </tr>
  <?php endforeach; endif; ?>
</table>
 			<?php else: ?>
			<div class="us_list_no_content">没有任何信息</div>
			<?php endif; ?>
            <table border="0" width="96%" style="margin:0 auto;" align="center" cellpadding="0" cellspacing="0" class="link_bk">
              <tr>
                <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
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
