<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_category.php'); $this->register_function("qishi_news_category", "tpl_function_qishi_news_category",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 22:21 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>指导中心 | 青职网</title>
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
<div class="p_banner" style="background:#fefdfe;">
  <div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_zd.jpg" width="1004" height="123" /></div>
</div>
<div class="p_main">
  <div class="zd_tit">
    <h1>指导中心</h1>
    <span><?php echo tpl_function_qishi_news_category(array('set' => "列表名:category,资讯小类:GET[id]"), $this);?>
    <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:pcat,资讯小类:", 'cat', 'plugin', 1, $this->_vars['category']['parentid'])), $this);?>
    当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_run_modifier("QZ_zhidao", 'qishi_url', 'plugin', 1); ?>
">指导中心</a>&nbsp;<?php if ($this->_vars['pcat']): ?>>&nbsp;<a href="<?php echo $this->_vars['pcat']['url']; ?>
"><?php echo $this->_vars['pcat']['title']; ?>
</a>&nbsp;<?php endif; ?>>&nbsp;<a href="<?php echo $this->_vars['category']['url']; ?>
"><?php echo $this->_vars['category']['title_']; ?>
</a></span>
    <div class="clear"></div>
  </div>
  <div class="p_main_art">
    <div class="p_art_list fl">
      <div class="p_art_list_con">
        <h1><?php echo $this->_vars['category']['title_']; ?>
</h1>
        <ul>
        <?php if ($this->_vars['pcat'] || $_GET['id'] == 14): ?>
          <?php echo tpl_function_qishi_news_list(array('set' => "列表名:list,分页显示:1,资讯小类:GET[id],填补字符:..."), $this);?> 
        <?php else: ?>
       <?php echo tpl_function_qishi_news_list(array('set' => "列表名:list,分页显示:1,资讯大类:GET[id],填补字符:..."), $this);?> 
        <?php endif; ?>  
          <!--   以下为循环读取 --> 
          <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
          <li><a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a><em></em><span><?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span></li>
          <?php endforeach; endif; ?> 
          <!-- 循环结束 -->
          
        </ul>
        <div class="p_page"> <?php if (! $this->_vars['list']): ?> 抱歉，没有符合此条件的信息。<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?> </div>
      </div>
    </div>
    <div class="p_art_list_side fr">
	<?php if ($_GET['id'] != 14): ?>
      <div class="art_s1">
      <?php if ($this->_vars['pcat']): ?>
      <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:scat,资讯大类:", 'cat', 'plugin', 1, $this->_vars['category']['parentid'])), $this);?>
        <div class="tit"><a href="<?php echo $this->_vars['pcat']['url']; ?>
"><?php echo $this->_vars['pcat']['title']; ?>
</a></div>
        <ul>
          <?php if (count((array)$this->_vars['scat'])): foreach ((array)$this->_vars['scat'] as $this->_vars['list']): ?>
          <li><a href="<?php echo $this->_vars['list']['url']; ?>
" <?php if ($_GET['id'] == $this->_vars['list']['id']): ?>class="on"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</a></li>
          <?php endforeach; endif; ?>
        </ul>
      <?php else: ?>
      <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:scat,名称长度:20,资讯小类:", 'cat', 'plugin', 1, $this->_vars['category']['id'])), $this);?>
        <div class="tit"><a href="<?php echo $this->_vars['scat']['url']; ?>
"><?php echo $this->_vars['scat']['categoryname']; ?>
</a></div>
        <ul>
         <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:slist,资讯大类:", 'cat', 'plugin', 1, $this->_vars['category']['id'])), $this);?>
          <?php if (count((array)$this->_vars['slist'])): foreach ((array)$this->_vars['slist'] as $this->_vars['list']): ?>
          <li><a href="<?php echo $this->_vars['list']['url']; ?>
" <?php if ($_GET['id'] == $this->_vars['list']['id']): ?>class="on"<?php endif; ?>><?php echo $this->_vars['list']['title']; ?>
</a></li>
          <?php endforeach; endif; ?>
        </ul>
      <?php endif; ?>
      </div>
	  <?php endif; ?>
      <div class="art_s2"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/personal/personal_tucao.php?act=make"></a></div>
      <div class="art_s3"><a href="#"></a></div>
      <div class="art_s4">
        <h3>青职相关</h3>
        <div class="con">
          <p>新手上路：<a href="#">教你如何快速找到工作</a></p>
          <p>关注青职：<a href="#" class="sina"></a><a href="#" class="douban"></a></p>
          <p>服务热线：0898-88888888</p>
          <div class="side_book"><a href="#"></a></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <script type="text/javascript">
$(".p_art_list_con li:even").addClass("libg");
$(".art_s1 li:last").css("border","none");
</script> 
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>