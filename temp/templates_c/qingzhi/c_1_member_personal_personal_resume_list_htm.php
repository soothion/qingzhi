<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:05 中国标准时间 */ ?>
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
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js"></script>
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
">会员中心</a>&nbsp;>&nbsp;简历列表
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
		  <h1>我创建的简历</h1>
		</div>
		 <div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&amp;tabletype=" <?php if ($_GET['tabletype'] == ""): ?>class="select"<?php endif; ?>>所有简历<?php if ($this->_vars['total']['2'] > 0): ?><span>(<?php echo $this->_vars['total']['2']; ?>
)</span><?php endif; ?></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&amp;tabletype=1" <?php if ($_GET['tabletype'] == "1"): ?>class="select"<?php endif; ?>>有效简历<?php if ($this->_vars['total']['0'] > 0): ?><span>(<?php echo $this->_vars['total']['0']; ?>
)</span><?php endif; ?></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&amp;tabletype=2" <?php if ($_GET['tabletype'] == "2"): ?>class="select"<?php endif; ?>>无效简历<?php if ($this->_vars['total']['1'] > 0): ?><span>(<?php echo $this->_vars['total']['1']; ?>
)</span><?php endif; ?></a>
			  <div class="clear"></div>
			  </div>
	<form id="form1" name="form1" method="post" action="?act=del_resume" >
	  <table width="97%" border="0" cellpadding="4" cellspacing="0" style="margin:0 auto;">
        <tr>
          <td valign="top" bgcolor="#FFFFFF">
		  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="link_lan"   align="center">
              <tr>
                <td height="35" class="us_list_title"><label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="全选/反选" /> 简历名称</label>                </td>
                <td width="60" align="center" class="us_list_title">审核状态</td>
                <td width="160" align="center" class="us_list_title">刷新时间</td>
                <td width="85" class="us_list_title" align="center">完整指数</td>
                <td width="10" class="us_list_title"></td>
                <!--<td width="60" align="center" class="us_list_title">等级</td>-->
	
                <td width="150" align="center" class="us_list_title">操作</td>
              </tr>
			   <?php if (count((array)$this->_vars['resume_list'])): foreach ((array)$this->_vars['resume_list'] as $this->_vars['list']): ?>
              <tr>
                <td height="35" >
				<input name="y_id[]" type="checkbox" id="y_id"   value="<?php echo $this->_vars['list']['id']; ?>
"/> 
			<a href="<?php if ($this->_vars['list']['complete_percent'] < 60): ?>javascript:void(0);<?php else:  echo $this->_vars['list']['resume_url'];  endif; ?>" <?php if ($this->_vars['list']['complete_percent'] < 60): ?> style="color:#666666"  class="vtip" title="完整指数小于 60%，系统将视为无效简历"<?php else: ?>  target="_blank"<?php endif; ?>>
			<?php echo $this->_vars['list']['title']; ?>

			</a>
			 <?php if ($this->_vars['list']['display'] == "2"): ?><span style="color:#999999" class="vtip" title="半公开简历是指企业搜不到到简历，但是您可以主动给职位投递简历，建议设置为全公开">[半公开]</span><?php endif; ?>			</td>
                <td align="center" >
				 <?php if ($this->_vars['list']['audit'] == "1"): ?>审核通过<?php endif; ?>
			<?php if ($this->_vars['list']['audit'] == "2"): ?>审核中<?php endif; ?>
			<?php if ($this->_vars['list']['audit'] == "3"): ?>审核未通过<?php endif; ?>				</td>
                <td align="center"  style="color:#FF6600"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
</td>
                
                <td width="60" class="vtip"   style=" cursor:help" title="简历完整指数为：<span style=color:#FF0000><strong><?php echo $this->_vars['list']['complete_percent']; ?>
</strong> %</span><br />如完整指数小于<strong>60%</strong>，则系统视为无效简历。<br />简历完整指数越高，排名越靠前">
				<div style="border:1px #006600 solid; width:80px; height:8px; font-size:0px">
					  <div style="width:<?php echo $this->_vars['list']['complete_percent']; ?>
%;background-color:#99CC00; height:8px;font-size:0px"> </div>
					  </div>				</td>
                <td align="left" ><?php echo $this->_vars['list']['complete_percent']; ?>
%</td>
                <!--<td align="center" >
				 <?php if ($this->_vars['list']['talent'] == "2"): ?>
				  <span style="color:#FF6600">高级</span>
				  <?php else: ?>
				  普通
				  <?php endif; ?>				</td>-->
        
                <td align="center" >
				<a href="?act=resume_show&pid=<?php echo $this->_vars['list']['id']; ?>
" >修改</a>&nbsp;&nbsp;
				<a href="?act=resume_privacy&pid=<?php echo $this->_vars['list']['id']; ?>
" >隐私</a>&nbsp;&nbsp;
				<a href="?act=del_resume&y_id=<?php echo $this->_vars['list']['id']; ?>
"  onclick="return confirm('您确定删除吗?')">删除</a>				</td>
              </tr>
              <tr>
                <td height="35" colspan="7" class="us_list link_bk">
				<div style="padding-left:20px;">
				真实姓名： <?php if ($this->_vars['list']['display_name'] == "2"):  echo $this->_vars['list']['number']; ?>
[已屏蔽真实姓名]<?php else:  echo $this->_vars['list']['fullname'];  endif; ?>&nbsp;&nbsp;|&nbsp;&nbsp;添加时间：<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;|&nbsp;&nbsp;浏览：<?php echo $this->_vars['list']['click']; ?>
次&nbsp;&nbsp;|&nbsp;&nbsp;收到面试邀请<a href="personal_apply.php?act=interview&resume_id=<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['countjobs'] > 0): ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['list']['countjobs']; ?>
)</a>
&nbsp;&nbsp;|&nbsp;&nbsp;简历被下载<a href="personal_apply.php?act=down&resume_id=<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['countdown'] > 0): ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['list']['countdown']; ?>
)</a>				
				</div>								</td>
                </tr>
			  <?php endforeach; endif; ?>
            </table>
			 <?php if ($this->_vars['resume_list']): ?>
			  <table width="100%" border="0" cellspacing="8" cellpadding="0"  style="margin-bottom:15px;">
                <tr>
                  <td>
				   <input type="button" name="add" value="创建一份简历"   class="user_submit" onclick="javascript:location.href='?act=make1' " />
                    &nbsp;&nbsp;&nbsp;&nbsp;
				  <input type="button" name="refresh" value="刷新简历"   class="user_submit vtip" onclick="javascript:location.href='?act=refresh' "  title="刷新可提高简历排名！"/>
                    &nbsp;&nbsp;&nbsp;&nbsp;                   
                    <input type="submit" name="delete" value="删除简历"   class="user_submit"  onclick="return confirm('您确定删除吗?')"/></td>
                </tr>
              </table>
			  <?php else: ?>
			<div class="us_list_no_content">没有您要找的简历</div>
			<table width="100%" border="0" cellspacing="8" cellpadding="0">
                <tr>
                  <td>
				   <input type="button" name="add" value="创建一份简历"   class="user_submit" onclick="javascript:location.href='?act=make1' " />
					</td>
                </tr>
              </table>
		  <?php endif; ?>		   </td>
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