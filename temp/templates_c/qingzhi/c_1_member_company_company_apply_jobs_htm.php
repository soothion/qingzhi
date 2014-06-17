<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 18:36 中国标准时间 */ ?>
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
<script type="text/javascript">
<!--
$(document).ready(function()
{
	$(".nolook").click(function(){
	var tsTimeStamp= new Date().getTime();
	var id=$(this).parent().parent().attr("id");
	$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_member.php", { "id": $(this).parent().parent().attr("id"),"time":tsTimeStamp,"act":"edit_apply"},
	 function (data,textStatus)
	  {
	  if (data=="ok")
	  {
	  $("#"+id+" td:first span").html("[已看]");
	  $("#"+id+" td:first span").css("color","#999999");
	  }
	  })
	});
	
	$('#jobselect').change(function(){ 
	var p1=$(this).children('option:selected').val();
	window.location.href="?act=apply_jobs&jobsid="+p1;
	});
	
	
});
//-->
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
">会员中心</a>&nbsp;>&nbsp;招聘管理 &nbsp;>&nbsp;收到的职位申请
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
		  <h1>我收到的简历</h1>
		</div>
		<div class="us_tab">
			<a href="?act=<?php echo $this->_vars['act']; ?>
&look=" <?php if ($_GET['look'] == ""): ?>class="select"<?php endif; ?>>所有的<span>(<?php echo $this->_vars['count']; ?>
)</span></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&look=1" <?php if ($_GET['look'] == "1"): ?>class="select"<?php endif; ?>>未查看的<span>(<?php echo $this->_vars['count1']; ?>
)</span></a>
              <a href="?act=<?php echo $this->_vars['act']; ?>
&look=2" <?php if ($_GET['look'] == "2"): ?>class="select"<?php endif; ?>>已查看的<span>(<?php echo $this->_vars['count2']; ?>
)</span></a>
			  <div style="padding-right:10px; text-align:right; float:right" >
			  按职位查看：			 
			  <select name="jobselect" id="jobselect" style="font-size:12px;">
			   <option value="">所有职位</option>
			  <?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['li']): ?>
			    <option value="<?php echo $this->_vars['li']['id']; ?>
" <?php if ($this->_vars['li']['id'] == $_GET['jobsid']): ?>selected="selected"<?php endif; ?>><?php echo $this->_vars['li']['jobs_name']; ?>
</option>
					<?php endforeach; endif; ?>
		      
			  </select>
		</div>	
			  <div class="clear"></div>
	    </div>
		 
	<form id="form1" name="form1" method="post" action="?act=set_apply_jobs">
		  <table width="96%" border="0" cellpadding="0" cellspacing="0"  align="center" style="margin:0 auto;" class="link_lan">
              <tr>
                <td width="130" height="32"  class="us_list_title">
				<label id="chkAll"><input type="checkbox" name="chkAll"  id="chk" title="全选/反选" /> 投递的简历</label>                 </td>
				  <td width="100"  class="us_list_title">
				  申请的职位				  </td>
                  <td  class="us_list_title">技能特长</td>
                  <td width="60" align="center"  class="us_list_title">其他</td>              
                <td width="80" align="center"   class="us_list_title">申请时间</td>
            </tr>
				 <?php if (count((array)$this->_vars['jobs_apply'])): foreach ((array)$this->_vars['jobs_apply'] as $this->_vars['list']): ?>
				
              <tr id="<?php echo $this->_vars['list']['did']; ?>
">
                <td height="32" >
				<input name="y_id[]" type="checkbox" id="y_id"   value="<?php echo $this->_vars['list']['did']; ?>
"/>
				 <?php if ($this->_vars['list']['sex_cn']): ?>
				<a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank" <?php if ($this->_vars['list']['personal_look'] == "1"): ?>class="nolook"<?php endif; ?>><?php echo $this->_vars['list']['resume_name']; ?>
</a>
				<?php else: ?>
				<?php echo $this->_vars['list']['resume_name']; ?>

				<?php endif; ?>
				 <?php if ($this->_vars['list']['personal_look'] == "1"): ?>
				   <span style="color: #FF6600">[未看]</span>
				   <?php else: ?>
				   <span style="color: #999999">[已看]</span>
				   <?php endif; ?>				</td>
                <td>
				<?php echo $this->_vars['list']['jobs_name']; ?>
</td>
                <td >
				<?php if ($this->_vars['list']['specialty_']): ?>
				<span title="<?php echo $this->_run_modifier($this->_vars['list']['specialty_'], 'nl2br', 'PHP', 1); ?>
<br />意向职位：<?php echo $this->_vars['list']['intention_jobs']; ?>
" class="vtip"><?php echo $this->_vars['list']['specialty']; ?>
</span>
				<?php else: ?>
				未知
				<?php endif; ?>				</td>
                <td align="center"  >
				<?php if ($this->_vars['list']['notes']): ?>
				<img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/32.gif"  border="0"  style="cursor:pointer" title="<?php echo $this->_run_modifier($this->_vars['list']['notes'], 'nl2br', 'PHP', 1); ?>
" class="vtip"/>
				<?php else: ?>
				无
				<?php endif; ?>				</td>
     
                <td align="center" >
				<?php echo $this->_run_modifier($this->_vars['list']['apply_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
				</td>
              </tr>
              <tr id="<?php echo $this->_vars['list']['did']; ?>
">
                <td height="23" colspan="5" valign="top" class="us_list">
				
				<div style="color:#999999; padding-left:20px;">
				<?php if ($this->_vars['list']['sex_cn']): ?>
				性别：<?php echo $this->_vars['list']['sex_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp
				工作经验：<?php echo $this->_vars['list']['experience_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp
				学历：<?php echo $this->_vars['list']['education_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp
				所在地区：<?php echo $this->_vars['list']['district_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp
				简历更新日期：<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

				<?php else: ?>
				<strong  style="color:#000000"><?php echo $this->_vars['list']['resume_name']; ?>
</strong> 的简历可能已被系统删除。
				<?php endif; ?>
				</div>
				</td>
              </tr>
			<?php endforeach; endif; ?>
          </table>
			<?php if ($this->_vars['jobs_apply']): ?>
            <table width="100%" border="0" cellspacing="8" cellpadding="0">
              <tr>
                <td><input type="submit" name="set" value="设为已查看"   class="user_submit"/>
                </td>
              </tr>
            </table>
			<?php else: ?>
			<div class="us_list_no_content">没有您要找的信息</div>
			<?php endif; ?>
            <table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
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
