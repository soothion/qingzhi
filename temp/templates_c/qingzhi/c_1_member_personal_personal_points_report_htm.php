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
当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a>&nbsp;>&nbsp;服务中心&nbsp;>&nbsp;<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费明细
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1><?php echo $this->_vars['QISHI']['points_byname']; ?>
消费明细</h1>
		</div>
		 <div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&settr=" <?php if ($_GET['settr'] == ""): ?>class="select"<?php endif; ?>>所有的</a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=3" <?php if ($_GET['settr'] == "3"): ?>class="select"<?php endif; ?>>最近3天</a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=7" <?php if ($_GET['settr'] == "7"): ?>class="select"<?php endif; ?>>最近7天</a>
			  <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=30" <?php if ($_GET['settr'] == "30"): ?>class="select"<?php endif; ?>>最近1月</a>
			  <a href="?act=<?php echo $this->_vars['act']; ?>
&settr=90" <?php if ($_GET['settr'] == "90"): ?>class="select"<?php endif; ?>>最近3月</a>
			  <div class="clear"></div>
		</div>		
			  <div class="us_list_tip link_lan">您目前共有 <span><?php echo $this->_vars['points']; ?>
</span> <?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="?act=order_add">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
充值]</a>&nbsp;&nbsp;&nbsp;<a href="?act=points_rule">[<?php echo $this->_vars['QISHI']['points_byname']; ?>
消费规则]</a></div>
			  <table width="97%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center" id="list">
              <tr>
                <td width="180" height="26" class="us_list_title">
				&nbsp;&nbsp;创建时间
				</td>
                <td   class="us_list_title">描述</td>
              </tr>
			    <?php if (count((array)$this->_vars['report'])): foreach ((array)$this->_vars['report'] as $this->_vars['list']): ?>
              <tr>
      <td   height="35" class="us_list" style="color: #FF6600">
	 &nbsp;&nbsp;<?php echo $this->_run_modifier($this->_vars['list']['log_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
	  </td>
      <td class="us_list"><?php echo $this->_vars['list']['log_value']; ?>
</td>
              </tr>
   <?php endforeach; endif; ?>
            </table>
			 <?php if (! $this->_vars['report']): ?>
			<div class="us_list_no_content">没有您要找的信息</div>

		  <?php endif; ?>
			<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
              <tr>
                <td height="80" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
              </tr>
            </table>
	  </div>        
            </td>
        </tr>
      </table>
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
