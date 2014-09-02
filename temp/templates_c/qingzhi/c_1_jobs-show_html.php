<?php require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_show.php'); $this->register_function("qishi_jobs_show", "tpl_function_qishi_jobs_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-02 21:15 ?D1ú±ê×?ê±?? */  echo tpl_function_qishi_jobs_show(array('set' => "列表名:job,职位ID:GET[id]"), $this);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title><?php echo $this->_vars['job']['jobs_name']; ?>
 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/show_top.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/info.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
    <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
    <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.jobs-list.js" type='text/javascript' ></script>
<script type="text/javascript"> 
$(document).ready(function()
{
    jobslist();
    jobscontrast("<?php echo $this->_vars['QISHI']['site_dir']; ?>
");
    apply_jobs("<?php echo $this->_vars['QISHI']['site_dir']; ?>
");
    favorites("<?php echo $this->_vars['QISHI']['site_dir']; ?>
");
    //recommend_jobs("<?php echo $this->_vars['QISHI']['site_dir']; ?>
");

});
</script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="<?php echo $this->_vars['job']['id']; ?>
";
		var company_id="<?php echo $this->_vars['job']['company_id']; ?>
";
		var tsTimeStamp= new Date().getTime();
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"jobs_click"},
			function (data,textStatus)
			 {			
				$(".click").html(data);
			 }
		);
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_contact.php", { "id": id,"time":tsTimeStamp,"act":"jobs_contact"},
			function (data,textStatus)
			 {			
				$("#jobs_contact").html(data);
			 }
		);
		//申请职位
		$(".app_jobs").click(function(){
		dialog("申请职位","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_apply_jobs.php?id="+id+"&act=app","500px","auto","");
		});	
		//单个添加收藏
		$(".add_favorites").click(function(){
		dialog("加入收藏","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_favorites_job.php?id="+id+"&act=add","500px","auto","");
		});
		
		$("#newbuddy").click(function(){
		dialog("加为好友","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_buddy.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
","350px","auto","");
		});
		$("#addpms").click(function(){
		var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
";
		dialog("发送短消息","url:get?"+url,"400px","auto","");
		});
});
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/lrtk.css">
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/scripts.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/ibanner/custom.js"></script>
</head>
<body id="top">
<p id="back-to-top"><a href="#top"><span></span>返回顶部</a></p>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("nav.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="info_main">
	<div class="position">
    	当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a> > <a href="<?php echo $this->_run_modifier("QZ_search", 'qishi_url', 'plugin', 1); ?>
">职位信息</a> > <a href="<?php echo $this->_vars['job']['company_url']; ?>
"><?php echo $this->_vars['job']['companyname']; ?>
</a> > <?php echo $this->_vars['job']['jobs_name']; ?>

    </div>
    <div class="info_main_l fl">
    	<div class="part">
    		<h2><?php echo $this->_vars['job']['jobs_name'];  if ($this->_vars['job']['emergency'] == "1"): ?><span class="worry"></span><?php endif;  if ($this->_vars['job']['recommend'] == "1"): ?><span class="nice"></span><?php endif; ?>
            <?php if ($this->_vars['job']['nature_cn'] == "全职"): ?><span class="nature1"></span><?php endif;  if ($this->_vars['job']['nature_cn'] == "见习"): ?><span class="nature2"></span><?php endif;  if ($this->_vars['job']['nature_cn'] == "兼职"): ?><span class="nature3"></span><?php endif; ?>
    </h2>
            <div class="company">
            	<h3><a href="<?php echo $this->_vars['job']['company_url']; ?>
"><?php echo $this->_vars['job']['companyname']; ?>
</a></h3>
                <span>发布于：<?php echo $this->_run_modifier($this->_vars['job']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span>
                <div class="clear"></div>
            </div>
            <div class="other">
                <span class="icon1"><b><?php echo $this->_run_modifier($this->_vars['job']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</b></br>更新时间</span>
                <span class="icon2"><b><?php echo $this->_vars['job']['click']; ?>
</b></br>浏览次数</span>
				 <span class="icon4"><b><?php echo $this->_vars['job']['favorites']; ?>
</b></br>收藏次数</span>
                <span class="icon3"><b><?php echo $this->_vars['job']['countresume']; ?>
</b></br>简历投递量</span>
                <span class="icon5"><b><?php if ($this->_vars['show']['company']['audit'] == "1"): ?>已验证<?php else: ?>未认证<?php endif; ?></b></br>营业执照</span>
           </div>
           
           <div class="tip">
			<?php if ($this->_vars['job']['deadline'] > time()): ?><span style="color:#4BB500">
			招聘进行中，欢迎投递简历，截止日期为：<?php echo $this->_run_modifier($this->_vars['job']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span>
			<?php else: ?>
			<span style="color:#FF0000">此信息已经到期！</span>
			<?php endif; ?>
			</div>
           
           <div class="part_con">
           <div class="list">
                <ul class="need">
					<li>职位性质：<b><?php echo $this->_vars['job']['company']['nature_cn']; ?>
</b></li>
                    <li>工作地点：<b><?php if ($this->_run_modifier($this->_vars['job']['district_cn'], 'strpos', 'PHP', 1, "/")):  echo $this->_run_modifier($this->_run_modifier($this->_vars['job']['district_cn'], 'strrchr', 'PHP', 1, "/"), 'substr', 'PHP', 1, 1);  else:  echo $this->_vars['job']['district_cn'];  endif; ?></b></li>
					<li>每月薪水：<b><?php echo $this->_vars['job']['wage']; ?>
</b></li>
                    <li>招聘人数：<b><?php echo $this->_vars['job']['amount']; ?>
人</b></li>
                </ul>
                <ul class="attr">
                    <li>所属行业：<b><?php echo $this->_vars['job']['company']['trade_cn']; ?>
</b></li>
                    <li>职位类别：<b><?php echo $this->_vars['job']['category_cn']; ?>
</b></li>
                    <li>公司规模：<b><?php echo $this->_vars['job']['company']['scale_cn']; ?>
</b></li>
					<li>截止日期：<b><?php echo $this->_run_modifier($this->_vars['job']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</b></li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="welfare">
                <p>岗位名称：<b><?php echo $this->_vars['job']['jobs_name']; ?>
</b></p>
                <p>性别要求：<b><?php echo $this->_vars['job']['sex_cn']; ?>
</b></p>
                <p>学历要求：<b><?php echo $this->_vars['job']['education_cn']; ?>
</b></p>
                <p>福利待遇：<b><?php if (count((array)$this->_vars['job']['tag'])): foreach ((array)$this->_vars['job']['tag'] as $this->_vars['tag']):  echo $this->_vars['tag']['1']; ?>
 <?php endforeach; endif; ?></b></p>
            </div>
            <div class="con">
    			<p><?php echo $this->_vars['job']['contents']; ?>
</p>
            </div>
            <div class="submit">
            	<a href="javascript:void(0);" class="btn app_jobs" id="<?php echo $this->_vars['job']['id']; ?>
"></a>
                <a href="#" class="fen">分享</a>
                <a href="javascript:void(0);" class="love add_favorites" id="<?php echo $this->_vars['job']['id']; ?>
">收藏</a>
            </div>
            </div>
        </div>
    </div>
    
    <div class="info_main_r fr">
    	<div class="a1">
            	<div class="tit"></div>
                	<ul>
      <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_company_type,显示数目:9"), $this);?>
<!-- 以下为循环数组category内容  -->
<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
 <li><a href="<?php echo $this->_run_modifier("QZ_search", 'qishi_url', 'plugin', 1); ?>
?companytype=<?php echo $this->_vars['list']['id']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</a><span><?php echo $this->_run_modifier($this->_vars['list']['stat_jobs'], 'default', 'plugin', 1, "0"); ?>
条信息</span></li>
<?php endforeach; endif; ?>
<!-- 循环结束  -->
                    </ul>
        </div>
        <div class="a2"><a href="<?php echo $this->_run_modifier("QZ_index", 'qishi_url', 'plugin', 1); ?>
user/personal/personal_resume.php?act=make1"></a></div>   
        <div class="a3">
            <h3>青职相关</h3>
                <div class="con">
                	 <p>新手上路：<a href="news/news-show.php?id=17">教你如何快速找到工作</a></p>
        <p>关注青职：<a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a><a href="#" class="douban"></a></p>
        <p>服务热线：<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
</p>
        <div class="side_book"><a href="personal_user.php?act=feedback"></a></div>
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