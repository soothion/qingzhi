<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 09:32 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="x-ua-compatible" content="ie=7" />
<title>ְλ��Ϣ | ��ְ��</title>
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
<p id="back-to-top"><a href="#top"><span></span>���ض���</a></p>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> 
<!--ְλ�б� --> 
<?php echo tpl_function_qishi_jobs_list(array('set' => "��ҳ��ʾ:1,�б���:jobslist,��ʾ��Ŀ:GET[pagesize],��ַ�:...,ְλ������:13,�Ƽ�:GET[recommend],������Ƹ:GET[emergency],��ҵ������:19,��������:135,�ؼ���:GET[keyword],����:GET[wage],ְλ����:62,����:GET[sort]"), $this);?>
<div class="p_banner" style="background:#16b8e0;">
  <div class="p_banner_c"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_zy.jpg" width="1004" height="123" /></div>
</div>
<div class="p_main">
  <div class="p_tit">
    <h1 class="p_zw_tit fl">ְλ��Ϣ</h1>
    <div class="p_search_this fr">
      <div class="name fl">�߼�����</div>
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
    <div class="p_tit_tab"> <a href="javascript:set('recommend',null);set('emergency',null)" class="<?php if ($_GET['recommend'] == "" && $_GET['emergency'] == ""): ?> on <?php endif; ?>">����ְλ</a><a href="javascript:set('recommend',1);set('emergency',null)" class="<?php if ($_GET['recommend'] == "1"): ?> on <?php endif; ?>">�Ƽ�ְλ</a><a href="javascript:set('recommend',null);set('emergency',1)" class="<?php if ($_GET['emergency'] == "1"): ?> on <?php endif; ?>">����ְλ</a><a href="search.php" target="_blank">����ְλ</a> </div>
    <div class="p_list_zw">
      <div class="p_order">
        <div class="fl"> ����<a href="javascript:set('sort','stickrtime')" class="w30 <?php if ($_GET['sort'] == "stickrtime" || $_GET['sort'] == ""): ?> on <?php endif; ?>">Ĭ��</a> <span>|</span> <a href="javascript:set('sort','rtime')" class="w60 <?php if ($_GET['sort'] == "rtime"): ?> on <?php endif; ?>">����ʱ��</a> <span>|</span> <a href="javascript:set('sort','hot')" class="w30 <?php if ($_GET['sort'] == "hot"): ?> on <?php endif; ?>">�ȶ�</a> <span>|</span> <a href="javascript:set('sort','wage')" class="w30 <?php if ($_GET['sort'] == "wage"): ?> on <?php endif; ?>">����</a> </div>
        <div class="fr"> ÿҳ��ʾ��<a href="javascript:set('pagesize','10')" class="w25 <?php if ($_GET['pagesize'] == "10" || $_GET['pagesize'] == ""): ?> on <?php endif; ?>">10</a> <a href="javascript:set('pagesize','20')" class="w25 <?php if ($_GET['pagesize'] == "20"): ?> on <?php endif; ?>">20</a> <a href="javascript:set('pagesize','30')" class="w25 <?php if ($_GET['pagesize'] == "30"): ?> on <?php endif; ?>">30</a> </div>
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
            <p> <span>�����ص㣺<?php echo $this->_run_modifier($this->_run_modifier($this->_vars['list']['district_cn'], 'strrchr', 'PHP', 1, "/"), 'substr', 'PHP', 1, 1); ?>
</span> <span>ְλ���<?php echo $this->_vars['list']['category_cn']; ?>
</span> <span>ÿ��нˮ��<?php echo $this->_vars['list']['wage_cn']; ?>
</span> <span>ѧ��Ҫ��<?php echo $this->_vars['list']['education_cn']; ?>
</span> <span>��Ƹ������<?php echo $this->_vars['list']['amount']; ?>
</span> </p>
            <p>����������<?php if (count((array)$this->_vars['list']['tag'])): foreach ((array)$this->_vars['list']['tag'] as $this->_vars['tag']):  echo $this->_vars['tag']['1']; ?>
 <?php endforeach; endif; ?></p>
            <p>��λְ��<?php echo $this->_vars['list']['contents']; ?>
</p>
          </div>
          <div class="a3">
		  ��<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" class="cf98a1c">�鿴</a>��
          ��<a href="javascript:void(0);" class="c78af34 add_favorites" id="<?php echo $this->_vars['list']['id']; ?>
">�ղ�</a>��
          ��<a href="javascript:;" class="cf0418f">���������</a>��
          ��<a href="javascript:void(0);" class="c37c8f7 app_jobs" id="<?php echo $this->_vars['list']['id']; ?>
">Ͷ������</a>��</div>
        </li>
        <?php endforeach; endif; ?>
      </ul>
      <div class="p_page"> <?php if (! $this->_vars['jobslist']): ?> ��Ǹ��û�з��ϴ���������Ϣ��<?php endif;  if ($this->_vars['page']):  echo $this->_vars['page'];  endif; ?></div>
    </div>
  </div>
  <div class="p_side fr">
    <div class="p_side_zw_nav">
      <div class="tit"></div>
      <ul>
      <?php echo tpl_function_qishi_get_classify(array('set' => "�б���:category,����:QS_company_type,��ʾ��Ŀ:9"), $this);?>
<!-- ����Ϊѭ������category����  -->
<?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
 <li><a href="search.php?companytype=<?php echo $this->_vars['list']['id']; ?>
#here"><?php echo $this->_vars['list']['categoryname']; ?>
</a><span><?php echo $this->_run_modifier($this->_vars['list']['stat_jobs'], 'default', 'plugin', 1, "0"); ?>
 ����Ϣ</span></li>
<?php endforeach; endif; ?>
<!-- ѭ������  -->
      </ul>
    </div>
    <div class="p_side_will"><a href="user/personal/personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_will_btn.gif" width="241" height="134" /></a></div>
    <div class="p_side_help">
      <h3>��ְ���</h3>
      <div class="con">
        <p>������·��<a href="news/news-show.php?id=17" target="_blank">������ο����ҵ�����</a></p>
        <p>��ע��ְ��<a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina" target="_blank"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a>
		<!--<a href="#" class="douban"></a>--></p>
        <p>�������ߣ�<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
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