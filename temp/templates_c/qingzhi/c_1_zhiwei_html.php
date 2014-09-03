<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 09:32 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>职位信息 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
    <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
    <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.jobs-list.js" type='text/javascript' ></script>
<script type="text/javascript">
function set(name,value){
	$("input[name="+name+"]").val(value);		
	$('#form').submit();
	}	
</script>
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
<!--职位列表 --> 
<?php echo tpl_function_qishi_jobs_list(array('set' => "分页显示:1,列表名:jobslist,显示数目:GET[pagesize],填补字符:...,职位名长度:13,推荐:GET[recommend],紧急招聘:GET[emergency],企业名长度:19,描述长度:135,关键字:GET[keyword],工资:GET[wage],职位性质:62,排序:GET[sort]"), $this);?>
<div class="p_banner" style="background:#16b8e0;">
  <div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_zy.jpg" width="1004" height="123" /></div>
</div>
<div class="p_main">
  <div class="p_tit">
    <h1 class="p_zw_tit fl">职位信息</h1>
    <div class="p_search_this fr">
      <div class="name fl">高级搜索</div>
      <div class="top_search fl">
        <form action="" method="get" id="form" name="form">
          <input type="hidden" name="sort" value="<?php echo $_GET['sort']; ?>
"/>
          <input type="hidden" name="pagesize" value="<?php echo $_GET['pagesize']; ?>
"/>
          <input type="hidden" name="recommend" value="<?php echo $_GET['recommend']; ?>
"/>
          <input type="hidden" name="emergency" value="<?php echo $_GET['emergency']; ?>
"/>
		  </form>
		  <form action="search.php#here" method="get" id="searchForm1" name="searchForm">
          <input type="text"   name="key" class="search">
        <a href="javascript:$('#searchForm1').submit()"></a></form></div>
    </div>
  </div>
  <div class="p_main_c fl">
    <div class="p_tit_tab"> <a href="javascript:set('recommend',null);set('emergency',null)" class="<?php if ($_GET['recommend'] == "" && $_GET['emergency'] == ""): ?> on <?php endif; ?>">所有职位</a><a href="javascript:set('recommend',1);set('emergency',null)" class="<?php if ($_GET['recommend'] == "1"): ?> on <?php endif; ?>">推荐职位</a><a href="javascript:set('recommend',null);set('emergency',1)" class="<?php if ($_GET['emergency'] == "1"): ?> on <?php endif; ?>">紧急职位</a><a href="search.php" target="_blank">搜索职位</a> </div>
    <div class="p_list_zw">
      <div class="p_order">
        <div class="fl"> 排序：<a href="javascript:set('sort','stickrtime')" class="w30 <?php if ($_GET['sort'] == "stickrtime" || $_GET['sort'] == ""): ?> on <?php endif; ?>">默认</a> <span>|</span> <a href="javascript:set('sort','rtime')" class="w60 <?php if ($_GET['sort'] == "rtime"): ?> on <?php endif; ?>">更新时间</a> <span>|</span> <a href="javascript:set('sort','hot')" class="w30 <?php if ($_GET['sort'] == "hot"): ?> on <?php endif; ?>">热度</a> <span>|</span> <a href="javascript:set('sort','wage')" class="w30 <?php if ($_GET['sort'] == "wage"): ?> on <?php endif; ?>">工资</a> </div>
        <div class="fr"> 每页显示：<a href="javascript:set('pagesize','10')" class="w25 <?php if ($_GET['pagesize'] == "10" || $_GET['pagesize'] == ""): ?> on <?php endif; ?>">10</a> <a href="javascript:set('pagesize','20')" class="w25 <?php if ($_GET['pagesize'] == "20"): ?> on <?php endif; ?>">20</a> <a href="javascript:set('pagesize','30')" class="w25 <?php if ($_GET['pagesize'] == "30"): ?> on <?php endif; ?>">30</a> </div>
        <div class="clear"></div>
      </div>
      <ul>
      <?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
        <li>
          <div class="a1">
            <div class="a1b1"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a><?php if ($this->_vars['list']['recommend']): ?><span class="nice"><?php endif; ?></span><?php if ($this->_vars['list']['emergency']): ?><span class="worry"></span><?php endif; ?></div>
            <div class="a1b2"><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></div>
            <div class="a1b3"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</div>
            <div class="clear"></div>
          </div>
          <div class="a2">
            <p> <span>工作地点：<?php echo $this->_run_modifier($this->_run_modifier($this->_vars['list']['district_cn'], 'strrchr', 'PHP', 1, "/"), 'substr', 'PHP', 1, 1); ?>
</span> <span>职位类别：<?php echo $this->_vars['list']['category_cn']; ?>
</span> <span>每月薪水：<?php echo $this->_vars['list']['wage_cn']; ?>
</span> <span>学历要求：<?php echo $this->_vars['list']['education_cn']; ?>
</span> <span>招聘人数：<?php echo $this->_vars['list']['amount']; ?>
</span> </p>
            <p>福利待遇：<?php if (count((array)$this->_vars['list']['tag'])): foreach ((array)$this->_vars['list']['tag'] as $this->_vars['tag']):  echo $this->_vars['tag']['1']; ?>
 <?php endforeach; endif; ?></p>
            <p>岗位职责：<?php echo $this->_vars['list']['contents']; ?>
</p>
          </div>
          <div class="a3">
		  【<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" class="cf98a1c">查看</a>】
          【<a href="javascript:void(0);" class="c78af34 add_favorites" id="<?php echo $this->_vars['list']['id']; ?>
">收藏</a>】
          【<a href="javascript:;" class="cf0418f">分享给好友</a>】
          【<a href="javascript:void(0);" class="c37c8f7 app_jobs" id="<?php echo $this->_vars['list']['id']; ?>
">投递意向</a>】</div>
        </li>
        <?php endforeach; endif; ?>
      </ul>
      <div class="p_page"> <?php if (! $this->_vars['jobslist']): ?> 抱歉，没有符合此条件的信息。<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?></div>
    </div>
  </div>
  <div class="p_side fr">
    <div class="p_side_zw_nav">
      <div class="tit"></div>
      <ul>
      <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_company_type,显示数目:9"), $this);?>
<!-- 以下为循环数组category内容  -->
<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
 <li><a href="search.php?companytype=<?php echo $this->_vars['list']['id']; ?>
#here"><?php echo $this->_vars['list']['categoryname']; ?>
</a><span><?php echo $this->_run_modifier($this->_vars['list']['stat_jobs'], 'default', 'plugin', 1, "0"); ?>
 条信息</span></li>
<?php endforeach; endif; ?>
<!-- 循环结束  -->
      </ul>
    </div>
    <div class="p_side_will"><a href="user/personal/personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_will_btn.gif" width="241" height="134" /></a></div>
    <div class="p_side_help">
      <h3>青职相关</h3>
      <div class="con">
        <p>新手上路：<a href="news/news-show.php?id=17" target="_blank">教你如何快速找到工作</a></p>
        <p>关注青职：<a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina" target="_blank"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a>
		<!--<a href="#" class="douban"></a>--></p>
        <p>服务热线：<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
</p>
        <div class="side_book"><a href="user/personal/personal_user.php?act=feedback" target="_blank"></a></div>
      </div>
    </div>
  </div>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> 
</body>
</html>