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
">会员中心</a>&nbsp;>&nbsp;服务中心&nbsp;>&nbsp;订单管理
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
		  <h1>订单管理</h1>
		</div>
	   <div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&amp;is_paid=" <?php if ($_GET['is_paid'] == ""): ?>class="select"<?php endif; ?>>所有订单</a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&amp;is_paid=1" <?php if ($_GET['is_paid'] == "1"): ?>class="select"<?php endif; ?>>待付款的</a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&amp;is_paid=2" <?php if ($_GET['is_paid'] == "2"): ?>class="select"<?php endif; ?>>已完成的</a>
			  <div class="clear"></div>
			  </div>
			     <table width="97%" border="0" cellpadding="0" cellspacing="0" align="center" id="list" class="link_lan" >
              <tr>
			  <td width="80" class="us_list_title" align="center" >状态</td>
                <td width="90" height="26" class="us_list_title">创建时间</td>
                <td width="100"   class="us_list_title">充值金额</td>
				<td width="90"  class="us_list_title">支付方式</td>
				<td  width="180" class="us_list_title">单号</td> 
                <td class="us_list_title" >说明</td>
                <td width="70" align="center"  class="us_list_title">操作</td>
              </tr>
              <?php if (isset($this->_sections['payment'])) unset($this->_sections['payment']);
$this->_sections['payment']['name'] = 'payment';
$this->_sections['payment']['loop'] = is_array($this->_vars['payment']) ? count($this->_vars['payment']) : max(0, (int)$this->_vars['payment']);
$this->_sections['payment']['show'] = true;
$this->_sections['payment']['max'] = $this->_sections['payment']['loop'];
$this->_sections['payment']['step'] = 1;
$this->_sections['payment']['start'] = $this->_sections['payment']['step'] > 0 ? 0 : $this->_sections['payment']['loop']-1;
if ($this->_sections['payment']['show']) {
	$this->_sections['payment']['total'] = $this->_sections['payment']['loop'];
	if ($this->_sections['payment']['total'] == 0)
		$this->_sections['payment']['show'] = false;
} else
	$this->_sections['payment']['total'] = 0;
if ($this->_sections['payment']['show']):

		for ($this->_sections['payment']['index'] = $this->_sections['payment']['start'], $this->_sections['payment']['iteration'] = 1;
			 $this->_sections['payment']['iteration'] <= $this->_sections['payment']['total'];
			 $this->_sections['payment']['index'] += $this->_sections['payment']['step'], $this->_sections['payment']['iteration']++):
$this->_sections['payment']['rownum'] = $this->_sections['payment']['iteration'];
$this->_sections['payment']['index_prev'] = $this->_sections['payment']['index'] - $this->_sections['payment']['step'];
$this->_sections['payment']['index_next'] = $this->_sections['payment']['index'] + $this->_sections['payment']['step'];
$this->_sections['payment']['first']	  = ($this->_sections['payment']['iteration'] == 1);
$this->_sections['payment']['last']	   = ($this->_sections['payment']['iteration'] == $this->_sections['payment']['total']);
?>
              <tr>
			    <td   height="32" class="us_list" align="center" >
				<?php if ($this->_vars['payment'][$this->_sections['payment']['index']]['is_paid'] == 1): ?><span style="color: #FF6600">待付款</span><?php endif; ?>
				<?php if ($this->_vars['payment'][$this->_sections['payment']['index']]['is_paid'] == 2): ?><span style="color: #009900">已完成</span><?php endif; ?>
				</td>
      <td   class="us_list">
	  <?php echo $this->_run_modifier($this->_vars['payment'][$this->_sections['payment']['index']]['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

	  </td>
      <td class="us_list">
	  ￥<span style="color: #FF6600"><?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['amount']; ?>
</span> 元
	  </td>
	  <td   class="us_list"><?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['payment_name']; ?>
</td>
                <td  class="us_list"><span style=" color: #666666"><?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['oid']; ?>
</span></td>
				<td   class="us_list"><?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['description']; ?>
</td>              
                <td   class="us_list"  align="center" >
				<?php if ($this->_vars['payment'][$this->_sections['payment']['index']]['is_paid'] == 1): ?><a href="?act=payment&order_id=<?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['id']; ?>
">付款</a>&nbsp;&nbsp;&nbsp;
				<a href="?act=order_del&id=<?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['id']; ?>
" onclick="return confirm('你确定要取消吗？')">取消</a><?php endif; ?>&nbsp;
				</td>
              </tr>
              <?php endfor; endif; ?>
            </table>
			<?php if ($this->_vars['payment']): ?>
            <table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
              <tr>
                <td height="60" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
              </tr>
            </table>
			<?php else: ?>
			<div class="us_list_no_content">没有您要找的信息</div>
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
