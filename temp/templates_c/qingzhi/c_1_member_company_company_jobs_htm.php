<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:18 ?D1ú±ê×?ê±?? */ ?>
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
js/jquery.vtip-min.js" type='text/javascript' language="javascript"></script>
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
">会员中心</a> &nbsp;>&nbsp;<a href="company_jobs.php?act=jobs">职位管理</a>&nbsp;>&nbsp;已发布的职位
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_company/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>已发布的职位</h1>
		</div>
		<?php if ($this->_vars['jobs']): ?>
	 <div class="us_list_tip link_lan"  style="margin-top:13px;">
		您可以通过企业推广来提高招聘效果。
		</div>
		<?php endif; ?>
	   <div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&jobtype=" <?php if ($_GET['jobtype'] == ""): ?>class="select"<?php endif; ?>>所有职位<?php if ($this->_vars['total']['2'] > 0): ?><span>(<?php echo $this->_vars['total']['2']; ?>
)</span><?php endif; ?></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&jobtype=1" <?php if ($_GET['jobtype'] == "1"): ?>class="select"<?php endif; ?>>显示中<?php if ($this->_vars['total']['0'] > 0): ?><span>(<?php echo $this->_vars['total']['0']; ?>
)</span><?php endif; ?></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&jobtype=2" <?php if ($_GET['jobtype'] == "2"): ?>class="select"<?php endif; ?>>不显示<?php if ($this->_vars['total']['1'] > 0): ?><span>(<?php echo $this->_vars['total']['1']; ?>
)</span><?php endif; ?></a><div style="padding-right:10px; text-align:right; float:right" ><a href="<?php echo $this->_run_modifier("QS_helplist,id:9", 'qishi_url', 'plugin', 1); ?>
" target="_blank" style="width: auto; border:0px; background-color: #FFFFFF; color:#FF0000; text-align:right">为什么审核未通过?</a></div>
			  <div class="clear"></div>
			  </div>
	    <form id="form1" name="form1" method="post" action="?act=jobs_perform">
    <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="link_lan" style="margin:0 auto;">
              <tr>
                <td height="26" width="30%" class="us_list_title"><label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="全选/反选" />职位名称</label></td>
                <td width="15%" align="center" class="us_list_title">审核状态</td>
 
                <td width="15%" align="center" class="us_list_title">刷新时间</td>
                <td width="20%" align="center" class="us_list_title" >匹配/编辑</td>
				<td width="25%" align="center" class="us_list_title" >职位推广</td>
              </tr>
			  <?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['li']): ?>
              <tr>
                <td height="32" >
				<input name="y_id[]" type="checkbox" id="y_id"  value="<?php echo $this->_vars['li']['id']; ?>
"/>&nbsp;<a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a>
				 <?php if ($this->_vars['li']['stick'] == "1"): ?><span style="color: #FF9900"  title="职位已置顶" class="vtip">[顶]</span><?php endif; ?>
				<?php if ($this->_vars['li']['emergency'] == "1"): ?><span style="color: #FF0000" title="紧急招聘" class="vtip">[急]</span><?php endif; ?>
				<?php if ($this->_vars['li']['recommend'] == "1"): ?><span style="color: #009900" title="职位已推荐" class="vtip">[荐]</span><?php endif; ?>
				<?php if ($this->_vars['li']['highlight']): ?><span style="color: <?php echo $this->_vars['li']['highlight']; ?>
" title="职位已变色" class="vtip">[变]</span><?php endif; ?>
				<?php if ($this->_vars['li']['display'] == "2"): ?><span style="color: #FF3300">[已暂停]</span><?php endif; ?>
				
				</td>
                <td align="center"  >
				<?php if ($this->_vars['li']['audit'] == 1): ?>
				审核通过
				<?php elseif ($this->_vars['li']['audit'] == 2): ?>
				<span style="color: #FF6600">审核中</span>
				<?php else: ?>
				<span style="color: #FF0000">审核未通过</span>
				<?php endif; ?>				</td>
        
                <td align="center">				
				<?php echo $this->_run_modifier($this->_vars['li']['refreshtime'], 'date_format', 'plugin', 1, "%m-%d %H:%M"); ?>

				</td>
           
                <td align="center"  >
				<a href="<?php echo $this->_run_modifier($this->_run_modifier($this->_run_modifier($this->_run_modifier("QS_resumelist,category:", 'cat', 'plugin', 1, $this->_vars['li']['category']), 'cat', 'plugin', 1, "-subclass:"), 'cat', 'plugin', 1, $this->_vars['li']['subclass']), 'qishi_url', 'plugin', 1); ?>
"  target="_blank">匹配简历</a>&nbsp;
				<a href="?act=editjobs&id=<?php echo $this->_vars['li']['id']; ?>
">修改</a>&nbsp;
				<a href="?act=jobs_perform&delete=1&y_id=<?php echo $this->_vars['li']['id']; ?>
" onclick="return confirm('您确定删除吗?')">删除</a>
				</td>
			     <td align="center"  >
				<a href="?act=jobs_perform&refresh=1&y_id=<?php echo $this->_vars['li']['id']; ?>
" <?php if ($this->_vars['points_rule']['jobs_refresh']['value'] > 0): ?> onclick="return confirm('刷新职位可提高职位排名，每次消耗 <?php echo $this->_vars['points_rule']['jobs_refresh']['value']; ?>
 <?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
，确定刷新吗？')"<?php endif; ?>>刷新</a>&nbsp;
				<?php if ($this->_vars['li']['stick'] == "1"): ?>
				<a href="javascript:void(0);" title="此职位已置顶，正在推广中..." class="vtip" style="color:#999999">置顶</a>&nbsp;
				<?php else: ?>
				<a href="company_promotion.php?act=promotion_add&promotionid=3&jobsid=<?php echo $this->_vars['li']['id']; ?>
&jobsname=<?php echo $this->_vars['li']['jobs_name_']; ?>
&golist=1" title="推广后将会置顶职位，可有效提高招聘效果" class="vtip">置顶</a>&nbsp;
				<?php endif; ?>
				
				<?php if ($this->_vars['li']['recommend'] == "1"): ?>
				<a href="javascript:void(0);" title="此职位已推荐，正在推广中..." class="vtip" style="color:#999999">推荐</a>&nbsp;
				<?php else: ?>
				<a href="company_promotion.php?act=promotion_add&promotionid=1&jobsid=<?php echo $this->_vars['li']['id']; ?>
&jobsname=<?php echo $this->_vars['li']['jobs_name_']; ?>
&golist=1" title="推广后将会显示推荐字样，使职位更加醒目" class="vtip">推荐</a>&nbsp;
				<?php endif; ?>
				<?php if ($this->_vars['li']['highlight']): ?>
				<a href="javascript:void(0);" title="此职位已变色，正在推广中..." class="vtip" style="color:#999999">变色</a>&nbsp;
				<?php else: ?>
				<a href="company_promotion.php?act=promotion_add&promotionid=4&jobsid=<?php echo $this->_vars['li']['id']; ?>
&jobsname=<?php echo $this->_vars['li']['jobs_name_']; ?>
&golist=1" title="推广后职位名称会变色，使职位更加醒目" class="vtip">变色</a>&nbsp;
				<?php endif; ?>
				
				
				
				<?php if ($this->_vars['li']['emergency'] == "1"): ?>
				<a href="javascript:void(0);" title="此职位已紧急，正在推广中..." class="vtip" style="color:#999999">紧急</a>&nbsp;
				<?php else: ?>
				<a href="company_promotion.php?act=promotion_add&promotionid=2&jobsid=<?php echo $this->_vars['li']['id']; ?>
&jobsname=<?php echo $this->_vars['li']['jobs_name_']; ?>
&golist=1" title="推广后将会显示紧急字样，使职位更加醒目" class="vtip">紧急</a>&nbsp;
				<?php endif; ?>
				
				</td>
              </tr>
			  
			  
			  
			  <tr>
                <td height="23" colspan="5" valign="top" class="us_list link_bk" style="color:#999999; padding-left:23px;"> 
				
			 添加时间：<?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
&nbsp;&nbsp;|&nbsp;&nbsp;通过消耗<?php if ($this->_vars['li']['add_mode'] == "1"):  echo $this->_vars['QISHI']['points_byname'];  else: ?>服务内容<?php endif; ?>添加	&nbsp;&nbsp;|&nbsp;&nbsp;浏览：<?php echo $this->_vars['li']['click']; ?>
次&nbsp;&nbsp;|&nbsp;&nbsp;到期时间：<?php if ($this->_vars['li']['deadline'] < time()): ?>
				<span style="color: #FF0000">已经到期</span>
				<?php else: ?>
				<?php echo $this->_run_modifier($this->_vars['li']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

				<?php endif; ?>
				&nbsp;&nbsp;|&nbsp;&nbsp;应聘简历<a href="company_recruitment.php?act=apply_jobs&jobsid=<?php echo $this->_vars['li']['id']; ?>
" <?php if ($this->_vars['li']['countresume'] > 0): ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['li']['countresume']; ?>
)</a>
				&nbsp;&nbsp;|&nbsp;&nbsp;评论<a href="company_comment.php?act=comment_list&jobsid=<?php echo $this->_vars['li']['id']; ?>
" <?php if ($this->_vars['li']['comment'] > 0): ?>style="color:#FF0000"<?php endif; ?>  target="_blank">(<?php echo $this->_vars['li']['comment']; ?>
)</a>
				
				</td>
              </tr>
			 <?php endforeach; endif; ?>
          </table>
			<?php if ($this->_vars['jobs']): ?>
            <table width="100%" border="0" cellspacing="10" cellpadding="0">
              <tr>
                <td>
				<input type="button" name="next" value="发布职位"  class="user_submit" onclick="window.location='?act=addjobs'"/>
				  &nbsp;
				<input type="submit" name="refresh" value="刷新职位"   class="user_submit"  <?php if ($this->_vars['points_rule']['jobs_refresh']['value'] > 0): ?> onclick="return confirm('刷新职位可提高职位排名，每次消耗 <?php echo $this->_vars['points_rule']['jobs_refresh']['value']; ?>
 <?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
，确定刷新吗？')"<?php endif; ?>/>
               &nbsp;
                  <input name="display1" type="submit"  class="user_submit" value="设为开始" />
           &nbsp;
                  <input type="submit" name="display2" value="设为暂停" class="user_submit"  />
            &nbsp;
                  <input type="submit" name="delete" value="删除职位" class="user_submit"  onclick="return confirm('您确定删除吗?')"/></td>
              </tr>
          </table>
		   <table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
              <tr>
                <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
              </tr>
          </table>
            <?php else: ?>
			<?php if ($_GET['jobtype'] == "2"): ?>
			<div class="us_list_no_content link_lan">没有你要找的信息！</div>
			<?php else: ?>
			<div class="us_list_no_content link_lan">您没有发布职位！<a href="company_jobs.php?act=addjobs">立即发布</a></div>
			<?php endif; ?>
			
			<br />
		  <?php endif; ?>
         
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