<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_category.php'); $this->register_function("qishi_news_category", "tpl_function_qishi_news_category",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_show.php'); $this->register_function("qishi_news_show", "tpl_function_qishi_news_show",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-13 19:07 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title><?php echo $this->_vars['show']['title']; ?>
 | 青职网</title>
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
<script type="text/javascript">   
    function doPrint() {    
        bdhtml=window.document.body.innerHTML;    
        sprnstr="<!--startprint-->";    
        eprnstr="<!--endprint-->";    
        prnhtml=bdhtml.substr(bdhtml.indexOf(sprnstr)+17);    
        prnhtml=prnhtml.substring(0,prnhtml.indexOf(eprnstr));    
        window.document.body.innerHTML=prnhtml; 
        window.print();    
		location.reload();
}    
</script>
<script type="text/javascript">
$(document).ready(function()
{
		var id="<?php echo $_GET['id']; ?>
";
		var tsTimeStamp= new Date().getTime();
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"news_click"},
			function (data,textStatus)
			 {			
				$("#click").html(data);
			 }
		);
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
<?php echo tpl_function_qishi_news_show(array('set' => "列表名:show,资讯ID:GET[id]"), $this);?>
<div class="p_banner" style="background:#fefdfe;">
  <div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_zd.jpg" width="1004" height="123" /></div>
</div>
<div class="p_main">
  <div class="zd_tit">
    <h1>指导中心</h1>
    <span><?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:pcat,名称长度:10,资讯小类:", 'cat', 'plugin', 1, $this->_vars['show']['parentid'])), $this);?>
    <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:scat,名称长度:10,资讯小类:", 'cat', 'plugin', 1, $this->_vars['show']['type_id'])), $this);?>
    当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a> > <a href="<?php echo $this->_run_modifier("QZ_zhidao", 'qishi_url', 'plugin', 1); ?>
">指导中心</a><?php if ($this->_vars['pcat']): ?>><a href="<?php echo $this->_vars['pcat']['url']; ?>
"><?php echo $this->_vars['pcat']['title_']; ?>
</a><?php endif; ?>
     > <a href="<?php echo $this->_vars['scat']['url']; ?>
"><?php echo $this->_vars['scat']['title_']; ?>
</a> > 正文</span>
    <div class="clear"></div>
  </div>
  <div class="p_main_art">
    <div class="p_art_show fl">
      <div class="p_art_show_con">
        <div class="tit">
          <h1><?php echo $this->_vars['show']['title']; ?>
</h1>
          <p>发布时间：<?php echo $this->_run_modifier($this->_vars['show']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
　　查看次数：<?php echo $this->_vars['show']['click']; ?>
　　<a href="javascript:doPrint();" target="_blank">打印</a>　　<a href="javascript:;" onclick="window.external.addFavorite(parent.location.href,document.title);">收藏</a>　　<a href="javascript:;" onClick="javascript:history.back(-1);">返回</a></p>
        </div>
        <div class="con"><!--startprint--> <?php echo $this->_vars['show']['content']; ?>
<!--endprint--> </div>
      </div>
    </div>
    <div class="p_art_list_side fr"> <?php echo tpl_function_qishi_news_category(array('set' => $this->_run_modifier("列表名:category,名称长度:10,资讯大类:", 'cat', 'plugin', 1, $this->_vars['show']['parentid'])), $this);?>
	<?php if ($this->_vars['pcat']): ?>
      <div class="art_s1">
        <div class="tit"> <a href="<?php echo $this->_vars['pcat']['url']; ?>
"><?php echo $this->_vars['pcat']['title_']; ?>
</a></div>
        <ul>
          <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
          <li><a href="<?php echo $this->_vars['list']['url']; ?>
"><?php echo $this->_vars['list']['title']; ?>
</a></li>
          <?php endforeach; endif; ?>
        </ul>
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
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>