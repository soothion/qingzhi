<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_company_show.php'); $this->register_function("qishi_company_show", "tpl_function_qishi_company_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-13 00:04 中国标准时间 */  echo tpl_function_qishi_company_show(array('set' => "列表名:company,企业ID:GET[id]"), $this);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>公司主页 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/show_top.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/company.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-show.js"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{
		var company_id="<?php echo $this->_vars['company']['id']; ?>
";
		var tsTimeStamp= new Date().getTime();
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_contact.php", { "id": company_id,"time":tsTimeStamp,"act":"company_contact"},
			function (data,textStatus)
			 {			
				$("#company_contact").html(data);
			 }
		);
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": company_id,"time":tsTimeStamp,"act":"company_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
	$(".app_jobs").click(function(){
	dialog("投简历","url:get?"+"<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_apply_jobs.php?id="+$(this).attr("id")+"&act=app","500px","auto","");
	});
	$("#newbuddy").click(function(){
	dialog("加为好友","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_buddy.php?tuid=<?php echo $this->_vars['company']['uid']; ?>
","350px","auto","");
	});
	$(".addpms").click(function(){
	var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php?tuid=<?php echo $this->_vars['company']['uid']; ?>
";
	dialog("发送短消息","url:get?"+url,"400px","auto","");
	});
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("nav.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="com_main">
	<div class="position">
    	当前位置：<a href="#">首页</a> > <a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
">职位信息</a> > <?php echo $this->_vars['company']['companyname']; ?>

    </div>
    
    <div class="com_main_l fl">
    	<div class="a1">
        	<div class="a1b1"><img src="<?php echo $this->_vars['company']['logo']; ?>
" width="248" height="248" /></div>
            <div class="a1b2">
            	<div class="name"><?php echo $this->_vars['company']['companyname']; ?>
</div>
            </div>
        </div>
        
        <div class="a2" id="tab">
        	<a href="javascript:;" class="nav_about_on" title="公司简介"></a>
            <a href="javascript:;" class="nav_info" title="招聘职位"></a>
            <a href="javascript:;" class="nav_contact" title="联系方式"></a>
        </div>

    </div>
    
    <div class="com_main_r fr">
    	<div class="tabcon">
    	<div class="part">
    		<h2>/ 公司简介</h2>
            <div class="part_con part_minh">
    			<p> <?php echo $this->_run_modifier($this->_vars['company']['contents'], 'nl2br', 'PHP', 1); ?>
</p>
        		<ul class="about">
       		    <li><b>行业：</b><?php echo $this->_vars['company']['trade_cn']; ?>
</li>
                	<li><b>性质：</b><?php echo $this->_vars['company']['nature_cn']; ?>
</li>
                	<li><b>地区：</b><?php echo $this->_vars['company']['district_cn']; ?>
</li>
                	<li><b>规模：</b><?php echo $this->_vars['company']['scale_cn']; ?>
</li>
                	<li class="w500"><b>网址：</b><?php echo $this->_vars['company']['website']; ?>
</li>
                    <div class="clear"></div>
        		</ul>
            	
            </div>
        </div>
      </div>
        
       <div class="tabcon" style="display:none;">
        	<div class="part">
    			<h2>/ 招聘职位</h2>
    			<ul class="info">
                <?php echo tpl_function_qishi_jobs_list(array('set' => $this->_run_modifier("列表名:jobs,填补字符:...,职位名长度:14,显示数目:10,会员UID:", 'cat', 'plugin', 1, $this->_vars['company']['uid'])), $this);?>
				    <li class="tit">
                       	<span class="w150">招聘职位</span>
                        <span class="w70">招聘人数</span>
                        <span>工作地点</span>
                        <span>刷新日期</span>
                        <span>截止日期</span>
                        <span>投简历</span>
                    </li>
			  <?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?> 
                    <li>
                       	<span class="w150"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></span>
                        <span class="w70"><?php echo $this->_vars['list']['amount']; ?>
人</span>
                        <span><?php echo $this->_vars['list']['district_cn']; ?>
</span>
                        <span><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</span>
                        <span><?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span>
                        <span><a class="app_jobs btn" href="javascript:viod(0);" id="<?php echo $this->_vars['list']['id']; ?>
"></a></span>
                    </li>
			<?php endforeach; endif; ?>	
                </ul>
        	</div>
        </div> 
        
        <div class="tabcon" style="display:none;">
		
        	<div class="part">
			<?php if ($this->_vars['username'] == ''): ?><h2>请登录后查看！</h2><?php else: ?>
    		<h2>/ 联系方式</h2>
            <div class="part_con part_contact">
            	<p><b>联系人：</b><?php echo $this->_vars['company']['contact']; ?>
</p>
    			<p><b>联系电话：</b><?php echo $this->_vars['company']['telephone']; ?>
</p>
                <p><b>联系地址：</b><?php echo $this->_vars['company']['address']; ?>
</p>
                <p><b>Email：</b><?php echo $this->_vars['company']['email']; ?>
</p>
                <p><b>公司网址：</b><?php echo $this->_vars['company']['website']; ?>
</p>
            </div>
			
        </div>
        <div class="part" id="pm">
            <div class="part_con pm">
                <p><input name="" id="submit" class="addpms" type="button" value="" /></p>
            </div>
        </div>
		<?php endif; ?>
        </div>      
    </div>
	</div>
   <div class="clear"></div> 
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
