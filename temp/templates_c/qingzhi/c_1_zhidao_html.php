<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:42 �й���׼ʱ�� */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>ָ������ | ��ְ��</title>
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
<p id="back-to-top"><a href="#top"><span></span>���ض���</a></p>
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
    <h1 class="p_zd_tit">��������</h1>
  </div>
  <div class="p_main_zd">
    <div class="p_main_m fl">
      <div class="zd_m1">
        <h2><a href="news/news-list.php?id=14" title="����">ְ���²�</a></h2>
        <ul>
          <?php echo tpl_function_qishi_news_list(array('set' => "�б���:list,��ʾ��Ŀ:5,��ѶС��:14,���ⳤ��15,��ַ�:...,����:addtime"), $this);?> 
          <!--   ����Ϊѭ����ȡ --> 
          <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
          <li><a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a><span>�����ˣ�<?php echo $this->_vars['li']['author']; ?>
</span><em><?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</em></li>
          <?php endforeach; endif; ?> 
          <!-- ѭ������ -->
        </ul>
      </div>
      <div class="zd_m2">
        <h2><a href="news/news-list.php?id=15" title="����">��ְ�������Ͽ�</a></h2>
        <ul>
          <?php echo tpl_function_qishi_news_list(array('set' => "�б���:list,��ʾ��Ŀ:5,��Ѷ����:15,���ⳤ��10,��ַ�:...,����:addtime"), $this);?> 
          <!--   ����Ϊѭ����ȡ --> 
          <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
          <li><a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a><span>�鿴��<?php echo $this->_vars['li']['click']; ?>
</span><em><?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</em></li>
          <?php endforeach; endif; ?> 
          <!-- ѭ������ -->
        </ul>
      </div>
    </div>
    <div class="p_main_s fr">
      <div class="zd_s1"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/personal/personal_tucao.php?act=make"></a></div>
      <div class="zd_s2">
        <h2><a href="news/news-list.php?id=16" title="����">���߷���</a></h2>
        <ul>
          <?php echo tpl_function_qishi_news_list(array('set' => "�б���:list,��ʾ��Ŀ:5,��Ѷ����:16,���ⳤ��10,��ַ�:...,����:addtime"), $this);?> 
          <!--   ����Ϊѭ����ȡ --> 
          <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
          <li><a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a></li>
          <?php endforeach; endif; ?> 
          <!-- ѭ������ -->
        </ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <script type="text/javascript">
$(".zd_m1 li:eq(1)").addClass("libg");
$(".zd_m1 li:eq(3)").addClass("libg");
$(".zd_m2 li:eq(1)").addClass("libg");
$(".zd_m2 li:eq(3)").addClass("libg");
$(".zd_s2 li:eq(1)").addClass("libg");
$(".zd_s2 li:eq(3)").addClass("libg");
</script> 
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>