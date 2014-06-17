<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:42 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>见习中心 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jq_scroll.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        $("#scrollDiv").Scroll({line:1,speed:1000,timer:2000,up:"but_up",down:"but_down"});
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
<?php echo tpl_function_qishi_jobs_list(array('set' => "分页显示:1,列表名:jobslist,职位性质:64,填补字符:...,职位名长度:13,关键字:GET[key],企业名长度:19,描述长度:135"), $this);?>
<?php echo tpl_function_qishi_jobs_list(array('set' => "列表名:reclist,职位性质:64,推荐:1,填补字符:...,职位名长度:13,企业名长度:19,描述长度:135"), $this);?>
<div class="p_banner" style="background:#78af34;">
	<div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_jx.jpg" width="1004" height="123" /></div>
</div>
<div class="p_main">
		<div class="p_tit">
    		<h1 class="p_jx_tit fl">见习中心</h1>
        	<div class="p_search_this fr">
        		<div class="name fl">搜本类</div>
            	<div class="top_search fl"><form id="Form1" action="" method="get"><input name="key" class=""><a href="javascript:$('#Form1').submit();"></a></form></div>
       		</div>
        	<div class="clear"></div>
        </div>
        <div class="p_main_c p_main_c_jx fl">
            <div class="p_list_jx">
                <ul>
 					<?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>               
                	<li>
                        <div class="li_info fl">
                    		<div class="a1">
                        		<div class="a1b1"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a><?php if ($this->_vars['list']['recommend']): ?><span class="nice"><?php endif; ?></span><?php if ($this->_vars['list']['emergency']): ?><span class="worry"></span><?php endif; ?></div>
                            	<div class="a1b2"><a href="<?php echo $this->_vars['list']['company_url']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></div>
                           	 	<div class="a1b3"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</div>
                            	<div class="clear"></div>
                        	</div>
                        	<div class="a2">
                        	<p>
                            	<span>工作地点：<?php echo $this->_vars['list']['district_cn']; ?>
</span>
                                <span>职位类别：<?php echo $this->_vars['list']['category_cn']; ?>
</span>
                                <span>每月薪水：<?php echo $this->_vars['list']['wage_cn']; ?>
</span>
                                <span>学历要求：<?php echo $this->_vars['list']['education_cn']; ?>
</span>
                            </p>
                            <p>
                            	<span>行业类别：<?php echo $this->_vars['list']['trade_cn']; ?>
</span>
                                <span>招聘人数：<?php echo $this->_vars['list']['amount']; ?>
</span>
                            </p>
                            <div class="a2b1">
                        	【<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" class="cf98a1c">查看</a>】
                        【<a href="javascript:void(0);" class="c78af34 add_favorites"  id="<?php echo $this->_vars['list']['id']; ?>
">收藏</a>】
                        【<a href="javascript:void(0);" class="cf0418f">分享给好友</a>】
                        【<a href="javascript:void(0);" class="c37c8f7 app_jobs" id="<?php echo $this->_vars['list']['id']; ?>
">投递意向</a>】
                        	</div>
                        	</div>
                        </div>
                        <div class="clear"></div>
                    </li>
                    <?php endforeach; endif; ?>       
                </ul>
                <div class="p_page">
						<?php if (! $this->_vars['jobslist']): ?> 抱歉，没有符合此条件的信息。<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?>
               </div> 
            </div>
        </div>
        <div class="p_side fr">
            <div class="p_side_jx_nice">
            	<div id="scrollDiv">
                        <ul>
                            <?php if (count((array)$this->_vars['reclist'])): foreach ((array)$this->_vars['reclist'] as $this->_vars['list']): ?> 
                            <li>
                                <div class="info">
                                	<p class="tit"><a href="<?php echo $this->_vars['list']['company_url']; ?>
}"><?php echo $this->_vars['list']['companyname']; ?>
</a></p>
                                    <p><?php echo $this->_vars['list']['jobs_name']; ?>
</p>
                                </div>
                            </li>
                            <?php endforeach; endif; ?>
                        </ul>
                </div>
            </div>
            <div class="p_side_will"><a href="user/personal/personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_jx_will.gif" width="241" height="134" /></a></div>
     <div class="p_side_help">
      <h3>青职相关</h3>
      <div class="con">
        <p>新手上路：<a href="news/news-show.php?id=17">教你如何快速找到工作</a></p>
        <p>关注青职：<a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a><a href="#" class="douban"></a></p>
        <p>服务热线：<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
</p>
        <div class="side_book"><a href="user/personal/personal_user.php?act=feedback"></a></div>
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