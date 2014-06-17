<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-10-21 16:37 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>面试中心 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
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
<?php echo tpl_function_qishi_news_list(array('set' => "分页显示:1,列表名:mianshilist,显示数目:10,资讯大类:20,标题长度10,填补字符:..."), $this);?>
<div class="p_banner" style="background:#6cc02d;">
	<div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_ms.jpg" width="1004" height="123" /></div>
</div>

<div class="p_main">
		<div class="ms_tit">
    		<h1 class="p_ms_tit">面试中心</h1>
        </div>
        <div class="p_main_ms">
        	<ul>
            <?php if (count((array)$this->_vars['mianshilist'])): foreach ((array)$this->_vars['mianshilist'] as $this->_vars['list']): ?>
            	<li>
                	<div class="ms_calendar">
                    	<p class="a1">星期<?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%w"); ?>
</p>
                        <p class="a2"><?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%d"); ?>
</p>
                        <p class="a3"><?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y年%m月"); ?>
</p>
                    </div>
                    <div class="ms_info">
                    	<!--0925 改动和新增-->
                    	<h2><?php echo $this->_vars['list']['title']; ?>
</h2>
                    	<p><span class="b">报名电话：</span><?php echo $this->_vars['list']['tel']; ?>
</p>
                        <p><span class="b">面试地点：</span><?php echo $this->_vars['list']['address']; ?>
</p>
                        <p><span class="b">乘车路线：</span><?php echo $this->_vars['list']['bus']; ?>
</p>
                        <p class="phide"><span class="b">主题介绍：</span><?php echo $this->_vars['list']['theme']; ?>
</p>
                        <div class="ms_more_box">
                        	
                        		<h2>参会企业：</h2>
                                <p><?php echo $this->_vars['list']['member']; ?>
</p>
                                <p><?php echo $this->_vars['list']['content']; ?>
</p>
                                <div class="msclose">↑ 收 回 ↑</div>
                        </div>
                        <!--0925end-->
                    </div>
                    <div class="ms_btn">
                    	<a href="javascript:;" class="ms_more">查看详情</a>
                    </div>
                    <div class="clear"></div>
                </li>
               <?php endforeach; endif; ?> 
          
            </ul>
            <div class="p_page">
						<?php if (! $this->_vars['mianshilist']): ?> 抱歉，没有符合此条件的信息。<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?>
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