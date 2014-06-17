<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 18:31 中国标准时间 */ ?>
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
css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type="text/javascript" ></script>
<script type="text/javascript">
$(document).ready(function()
{
	$('#resumeselect').change(function(){ 
	var p1=$(this).children('option:selected').val();
	window.location.href="?act=<?php echo $this->_vars['act']; ?>
&resume_id="+p1;
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
">会员中心</a>&nbsp;>&nbsp;求职管理&nbsp;>&nbsp;职位申请记录
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
		  <h1>已投递的简历</h1>
		</div>
		<div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook=" <?php if ($_GET['aetlook'] == ""): ?>class="select"<?php endif; ?>>所有的<span>(<?php echo $this->_vars['count']['2']; ?>
)</span></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook=2" <?php if ($_GET['aetlook'] == "2"): ?>class="select"<?php endif; ?>>对方已看<span>(<?php echo $this->_vars['count']['1']; ?>
)</span></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&aetlook=1" <?php if ($_GET['aetlook'] == "1"): ?>class="select"<?php endif; ?>>对方未看<span>(<?php echo $this->_vars['count']['0']; ?>
)</span></a>
			    <div style="padding-right:10px; text-align:right; float:right" >
			  按简历查看：			 
			  <select name="resumeelect" id="resumeselect" style="font-size:12px;">
			   <option value="">所有简历</option>
			  <?php if (count((array)$this->_vars['resume_list'])): foreach ((array)$this->_vars['resume_list'] as $this->_vars['li']): ?>
			    <option value="<?php echo $this->_vars['li']['id']; ?>
" <?php if ($this->_vars['li']['id'] == $_GET['resume_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_vars['li']['title']; ?>
</option>
					<?php endforeach; endif; ?>
			  </select>
		</div>	
			  <div class="clear"></div>
			  </div>
			  <div class="us_list_tip link_lan">您每天可以投递<span><?php echo $this->_vars['count_apply']['0']; ?>
</span>次简历，今天已经投递了<span><?php echo $this->_vars['count_apply']['1']; ?>
</span>次，还可以投递<span><?php echo $this->_vars['count_apply']['2']; ?>
</span>次</div>
				<form id="form1" name="form1" method="post" action="?act=del_jobs_apply" >
				<table width="98%" border="0" cellpadding="0" cellspacing="0"  align="center" class="link_lan" style="margin:0 auto;">
              <tr>
                <td height="26 " class="us_list_title">
				<label id="chkAll">
				<input type="checkbox" name="chkAll"  id="chk" title="全选/反选" /> 职位名称
				</label>
				</td>
                <td class="us_list_title">公司名称</td>                
                <td width="140" align="center" class="us_list_title">投递的简历</td>
                <td width="100" align="center" class="us_list_title">对方查看</td>
                <td width="80" align="center" class="us_list_title">其他说明</td>
              </tr>
			   <?php if (count((array)$this->_vars['jobs_apply'])): foreach ((array)$this->_vars['jobs_apply'] as $this->_vars['list']): ?>
			   <?php if ($this->_vars['list']['district_cn']): ?>
              <tr>
                <td height="30" >				
				<input name="y_id[]" type="checkbox" id="y_id" value="<?php echo $this->_vars['list']['did']; ?>
"/>
				<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a>
				
				</td>
                <td  >			
				<a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['company_name']; ?>
 </a>	
				</td>
                
                <td align="center" ><a href="personal_resume.php?act=resume_show&pid=<?php echo $this->_vars['list']['resume_id']; ?>
" target="_blank"><?php echo $this->_vars['list']['resume_name']; ?>
</a></td>

                <td align="center">
				<?php if ($this->_vars['list']['personal_look'] == '2'): ?><span style="color: #999999">对方已看</span><?php else: ?><span style="color: #FF6600">对方未看</span><?php endif; ?>				</td>
                <td align="center" >
				<?php if ($this->_vars['list']['notes']): ?>
				<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/32.gif"  border="0"  style="cursor:pointer" title="<?php echo $this->_run_modifier($this->_vars['list']['notes'], 'nl2br', 'PHP', 1); ?>
" class="vtip"/>	
				<?php endif; ?>	&nbsp;			</td>
              </tr>
              <tr>
                <td height="21" colspan="5" valign="top" class="us_list">
				 <div style="padding-left:22px; color:#999999">			
				申请时间：<?php echo $this->_run_modifier($this->_vars['list']['apply_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
				工作地区：<?php echo $this->_vars['list']['district_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
				刷新时间：<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
				到期时间：<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
				点击：<?php echo $this->_vars['list']['click']; ?>
次
				</div>
				</td>
              </tr>
			  <?php else: ?>
			        <tr>
                <td height="35" colspan="5"  class="us_list">
				 <input name="y_id[]" type="checkbox" id="y_id"   value="<?php echo $this->_vars['list']['did']; ?>
"/>
				<strong><?php echo $this->_vars['list']['jobs_name']; ?>
</strong> 可能已经被删除，您可以删除本条信息。
				</td>
              </tr>
			  <?php endif; ?>
			  <?php endforeach; endif; ?>
            </table>
			  <?php if ($this->_vars['jobs_apply']): ?>
            <table width="100%" border="0" cellspacing="8" cellpadding="0">
              <tr>
                <td><input type="submit" name="delete" value="删除所选"  class="user_submit" onClick="return confirm('删除后招聘单位将无法通过职位申请栏目找到您，您确定删除吗?')"/>
                </td>
              </tr>
            </table>
			<?php else: ?>
			<div class="us_list_no_content">没有您要找的信息</div>
			<?php endif; ?>
            <table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk" style="margin:0 auto;">
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
