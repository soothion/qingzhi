<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_hotword.php'); $this->register_function("qishi_hotword", "tpl_function_qishi_hotword",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-16 05:23 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>兼职信息 | 青职网</title>
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
function rec(){
	$("input[name=recommend]").val(1);	
	$("input[name=emergency]").val(0);	
	$('#form').submit();
}
function eme(){
	$("input[name=recommend]").val(0);	
	$("input[name=emergency]").val(1);	
	$('#form').submit();
}
function zer(){
	$("input[name=recommend]").val(0);	
	$("input[name=emergency]").val(0);	
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
<?php echo tpl_function_qishi_jobs_list(array('set' => "分页显示:1,紧急招聘:GET[emergency],推荐:GET[recommend],列表名:jobslist,填补字符:...,职位名长度:13,职位性质:63,关键字:GET[key],企业名长度:19,描述长度:135,排序:refreshtime>desc"), $this);?>
<div class="p_banner" style="background:#c70031;">
	<div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_jz.jpg" width="1004" height="123" /></div>
</div>

<div class="p_main">
		<div class="p_tit">
    		<h1 class="p_jz_tit fl">兼职信息</h1>
        	<div class="p_search_this fr">
        		<div class="name fl">搜本类</div>
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
          <input type="text"   name="key" class="search">
        <a href="javascript:$('#form').submit()"></a></form></div>
    </div>
  </div>
        
        <div class="p_main_jz fl">
    <div class="p_tit_tab"> <a href="javascript:zer();" class="<?php if ($_GET['recommend'] == 0 && $_GET['emergency'] == 0): ?> on <?php endif; ?>">所有职位</a><a href="javascript:rec();" class="<?php if ($_GET['recommend'] == "1"): ?> on <?php endif; ?>">推荐职位</a><a href="javascript:eme();" class="<?php if ($_GET['emergency'] == "1"): ?> on <?php endif; ?>">紧急职位</a> </div>
            <div class="p_list_jz">
            	<ul>
                   <?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
                	<li>
                    	<div class="a1">
                        	<div class="a1b1"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
"><?php echo $this->_vars['list']['jobs_name']; ?>
</a><?php if ($this->_vars['list']['recommend']): ?><span class="nice"><?php endif; ?></span><?php if ($this->_vars['list']['emergency']): ?><span class="worry"></span><?php endif; ?></div>
                            <div class="a1b2"><?php echo $this->_vars['list']['refreshtime_cn']; ?>
</div>
                            <div class="clear"></div>
                        </div>
                        <div class="a2">
                        	<p>
                            	<span>工作地点：<?php echo $this->_run_modifier($this->_run_modifier($this->_vars['list']['district_cn'], 'strrchr', 'PHP', 1, "/"), 'substr', 'PHP', 1, 1); ?>
</span>
                                <span>招聘人数：<?php echo $this->_vars['list']['amount']; ?>
</span>
                                <span>薪酬：<?php echo $this->_vars['list']['wage_cn']; ?>
</span>
                                <span>截止日期：<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%d-%d"); ?>
</span>
                            </p>
                            <p>具体要求：<?php echo $this->_vars['list']['contents']; ?>
</p>
                        </div>
                        <div class="a3">
                        【<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" class="cf98a1c">查看</a>】
                        【<a href="javascript:void(0);" class="c78af34 add_favorites"  id="<?php echo $this->_vars['list']['id']; ?>
">收藏</a>】
                        【<a href="javascript:void(0);" class="cf0418f">分享给好友</a>】
                        【<a href="javascript:void(0);" class="c37c8f7 app_jobs" id="<?php echo $this->_vars['list']['id']; ?>
">投递意向</a>】
                        </div>
                    </li>
                    <?php endforeach; endif; ?>
                </ul>
                <div class="p_page">
						<?php if (! $this->_vars['jobslist']): ?> 抱歉，没有符合此条件的信息。<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?>
               </div> 
            </div>
        </div>
        <div class="p_side fr">
        	<div class="p_side_jz_tags">
            	<div class="tit"></div>
                <div class="con">
                	<!--这个标签导航后台要加个排序，因为名称文字超过5个，就会单独占一行了（两个标签并排，一行最多允许8个文字）。通过排序来进行人工处理排列问题。-->
                	<?php echo tpl_function_qishi_hotword(array('set' => "显示数目:3,列表名:list"), $this);?>
                      <!--   以下为循环读取 -->
                        <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
                    <div class="special_label">
                    <a href="search.php?key=<?php echo $this->_vars['li']['w_word']; ?>
">
                        <span class="l"></span>
                        <span class="c">
                            <b><?php echo $this->_vars['li']['w_word']; ?>
</b>
                            <i><?php echo $this->_vars['li']['w_hot']; ?>
</i>
                        </span>
                        <span class="r"></span>
                      </a>
                    </div>
                        <?php endforeach; endif; ?>
                     <!-- 循环结束 -->
                </div>
            </div>
<!--<script type="text/javascript">
jQuery(document).ready(function(){
    $('.special_label').each(function(){
		var width1=  $(this).find(".l").width();
		var widthc=  $(this).find(".c").width();
		var widthr=  $(this).find(".r").width();
        var width = width1 + widthc + widthr;
        $(this).css('width',width+'px'); 
		alert(width);
    });
});
</script>-->

            
            
            
            <div class="p_side_will"><a href="user/personal/personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_jz_will.gif" width="241" height="134" /></a></div>
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