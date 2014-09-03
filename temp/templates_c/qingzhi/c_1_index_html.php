<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_ad.php'); $this->register_function("qishi_ad", "tpl_function_qishi_ad",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 09:30 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>首页 | 青职网</title>
<link rel="shortcut icon" href="/favicon.ico" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/index.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.jobs-list.js" type='text/javascript' ></script>
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
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="i_banner">
  <div class="i_banner_c">
    <div class="i_banner_con">
  <!--<a href="<?php echo $this->_vars['li']['img_url']; ?>
"><img src="<?php echo $this->_vars['li']['img_path']; ?>
" width="994" height="359" /></a>-->
  <!-- 代码 开始 -->
<div id="slider-bg">
    <div class="full-width-wrapper" id="slider-frame">
        <div class="fixed-width-wrapper maxx-theme" id="slider-wrapper">
            <div id="slider" class="nivoSlider">
			 <?php echo tpl_function_qishi_ad(array('set' => "调用名称:QS_indexfocus ,列表名:list,显示数目:5"), $this);?>
  <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
            <a href="<?php echo $this->_vars['li']['img_url']; ?>
" target="_blank"><img src="<?php echo $this->_vars['li']['img_path']; ?>
" width="994" height="360"></a>
			  <?php endforeach; endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- 代码 结束 -->
    </div>
  </div>
</div>
<div class="i_jx">
  <div class="i_jx_c">
    <div class="i_jx_more"><a href="<?php echo $this->_run_modifier("QZ_jianxi", 'qishi_url', 'plugin', 1); ?>
" title="进入见习中心">见习中心</a></div>
    <div class="clear"></div>
    <div class="i_jx_con">
      <ul>
        <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:list,职位性质:64,显示数目:4"), $this);?> 
        <!--   以下为循环读取 --> 
        <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
        <li><a  href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a><span><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank">[报名中]</a></span></li>
        <?php endforeach; endif; ?>
      </ul>
      <ul>
        <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:list,职位性质:64,显示数目:4,开始位置:4"), $this);?> 
        <!--   以下为循环读取 --> 
        <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
        <li><a  href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a><span><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank">[报名中]</a></span></li>
        <?php endforeach; endif; ?>
      </ul>
      <ul>
        <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:list,职位性质:64,显示数目:4,开始位置:8"), $this);?> 
        <!--   以下为循环读取 --> 
        <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
        <li><a  href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a><span><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank">[报名中]</a></span></li>
        <?php endforeach; endif; ?>
      </ul>
    </div>
  </div>
</div>
<div class="i_other">
  <div class="i_zw fl">
    <div class="i_zw_more"><a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
" title="进入职位信息">职位信息</a></div>
    <div class="clear"></div>
    <ul>
     <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:list,职位性质:62,显示数目:4"), $this);?> 
      <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
      <li>
        <div class="tit"><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a></div>
        <div class="name"><a href="<?php echo $this->_vars['li']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['companyname']; ?>
</a></div>
        <div class="info">工作地点：<?php echo $this->_run_modifier($this->_run_modifier($this->_vars['li']['district_cn'], 'strrchr', 'PHP', 1, "/"), 'substr', 'PHP', 1, 1); ?>
  每月薪水：<?php echo $this->_vars['li']['wage_cn']; ?>
</div>
      </li>
      <?php endforeach; endif; ?>
    </ul>
  </div>
  <div class="i_rc fl">
    <div class="i_rc_more"><a href="<?php echo $this->_run_modifier("QZ_rencai", 'qishi_url', 'plugin', 1); ?>
" title="进入人才中心">人才中心</a></div>
    <div class="clear"></div>
    <ul id="libg">
    <?php echo tpl_function_qishi_resume_list(array('set' => "列表名:list,显示数目:3"), $this);?>
<!--   以下为循环读取 -->
	<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
	  <li> <a href="<?php echo $this->_vars['li']['resume_url']; ?>
" target="_blank"><img src="<?php echo $this->_vars['li']['photosrc']; ?>
" width="32" height="32" /></a>
        <p><a href="<?php echo $this->_vars['li']['resume_url']; ?>
" class="name" target="_blank"><?php echo $this->_vars['li']['fullname']; ?>
</a><a href="<?php echo $this->_vars['li']['resume_url']; ?>
" class="school" target="_blank"><?php echo $this->_vars['li']['education_cn']; ?>
</a><?php echo $this->_vars['li']['refreshtime_cn']; ?>
</p>
        <p><a href="<?php echo $this->_vars['li']['resume_url']; ?>
" class="will" target="_blank"><?php echo $this->_vars['li']['intention_jobs']; ?>
</a></p>
      </li>
	<?php endforeach; endif; ?>
 <!-- 循环结束 -->
    </ul>
  </div>
  <div class="i_jz fl">
    <div class="i_jz_more"><a href="<?php echo $this->_run_modifier("QZ_jianzhi", 'qishi_url', 'plugin', 1); ?>
" title="进入兼职中心">兼职中心</a></div>
    <div class="clear"></div>
    <ul class="i_other_last">
      <?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:list,职位性质:63,显示数目:4"), $this);?> 
      <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>          
      <li>
        <div class="tit"><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['li']['jobs_name']; ?>
</a></div>
        <div class="bm"><a href="<?php echo $this->_vars['li']['jobs_url']; ?>
" target="_blank">[招聘<?php echo $this->_vars['li']['amount']; ?>
人]</a><span></span></div>
      </li>
      <?php endforeach; endif; ?>
    </ul>
  </div>
</div>
<script type="text/javascript">
jQuery(".i_zw li:last").addClass("no");
jQuery(".i_rc li:last").addClass("no");
</script> 
<script type="text/javascript">
var lilen=$("#libg li").length;
var part=Math.ceil(lilen/1);
for(var i=1;i<=part;i++){
if(i%2 == 0){
for(var n=i-1;n<i;n++){
n<=3*i-1
$("#libg li").eq(n).addClass("libg");
}
}
}
</script>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>