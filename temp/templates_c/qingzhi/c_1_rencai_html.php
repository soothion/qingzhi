<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-14 16:42 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="x-ua-compatible" content="ie=7" />
  <title>人才中心 | 青职网</title>
  <link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" media="all" />
  <link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common_public.css" rel="stylesheet" media="all" />
    <link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/column.css" rel="stylesheet" media="all" />
  <script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery-index.js"></script>
 <script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
  <script type="text/javascript">
$(document).ready(function()
{
   option();
  $('.option').click(function(){
    var name=$(this).attr('value');
    if(name=='key')
       $("input[name="+name+"]").val('');
     else
    $("select[name="+name+"]").val('');
  $('#Form1').submit();
  });
 
  function option(){
    var key='<?php echo $_GET['key']; ?>
';
    var category='<?php echo $_GET['category']; ?>
';
    var education='<?php echo $_GET['education']; ?>
';
    var experience='<?php echo $_GET['experience']; ?>
';
    var sex='<?php echo $_GET['sex']; ?>
';
    var str='';
    if(key||category||education||experience||sex){
      if(key) str+='<a href="javascript:void(0);" value="key" title="删除该选择" class="option">关键字:'+key+'</a>';
      if(category) str+='<a href="javascript:void(0);" value="category" title="删除该选择" class="option">职位意向:'+$("select[name='category'] option[selected]").text()+'</a>';
      if(education) str+='<a href="javascript:void(0);" value="education" title="删除该选择" class="option">最高学历:'+$("select[name='education'] option[selected]").text()+'</a>';
      if(experience) str+='<a href="javascript:void(0);" value="experience" title="删除该选择" class="option">工作经验:'+$("select[name='experience'] option[selected]").text()+'</a>';
      if(sex) str+='<a href="javascript:void(0);" value="sex" title="删除该选择" class="option">性别:'+$("select[name='sex'] option[selected]").text()+'</a>';
      $('.searchdel .con').html(str);
      
    }
    else{
        $('.searchdel').hide();
        $('.reset').hide();
    }

  }

});
</script>
<script type="text/javascript">
$(document).ready(function()
{
    var id="<?php echo $this->_vars['show']['id']; ?>
";
    var tsTimeStamp= new Date().getTime();
    $.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_click.php", { "id": id,"time":tsTimeStamp,"act":"resume_click"},
      function (data,textStatus)
       {      
        $(".click").html(data);
       }
    );
    $.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_contact.php", { "id": id,"time":tsTimeStamp,"act":"resume_contact"},
      function (data,textStatus)
       {      
        $("#resume_contact").html(data);
        //下载简历
        $("#download").click(function(){
        var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_download_resume.php?id="+id+"&act=download&t="+tsTimeStamp;
        dialog("下载简历","url:get?"+url,"500px","auto","");
        }); 
        //邀请面试
        $("#invited").click(function(){
        var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;
        dialog("邀请面试","url:get?"+url,"500px","auto","");
        }); 

       }
    );
    //添加都人才库
    $(".add_resume_pool").click(function(){
    var id=$(this).attr("value");
    var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_favorites_resume.php?id="+id+"&act=add&t="+tsTimeStamp;
    dialog("添加到人才库","url:get?"+url,"500px","auto","");        
    }); 

  $("#newbuddy").click(function(){
  dialog("加为好友","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_buddy.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
","350px","auto","");
  });
  $(".addpms").click(function(){
  var id=$(this).attr("value");
  var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php?tuid="+id+"";
  dialog("发送短消息","url:get?"+url,"400px","auto","");
  });
});
</script>
  <style>
.selects {
  margin-left:100px;
  display:none;
  float:left;
  position:absolute;
  top:28px;
  padding:0;
}
.selects li {
  padding:0;
  margin:0;
  line-height:28px;
}
</style>
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
<?php echo tpl_function_qishi_resume_list(array('set' => "列表名:resume_list,分页显示:1,显示数目:GET[inforow],特长描述长度:130,填补字符:...,关键字:GET[key],职位分类:GET[jobcategory],职位大类:GET[category],职位小类:GET[subclass],学历:GET[education],工作经验:GET[experience],性别:GET[sex],地区分类:GET[citycategory],地区大类:GET[district],地区小类:GET[sdistrict],照片:GET[photo],,等级:GET[talent],排序:rtime>desc"), $this);?>
  <div class="p_banner" style="background:#eccf97;">
    <div class="p_banner_c">
      <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_rc.jpg" width="1004" height="123" />
    </div>
  </div>
  <div class="p_rc">
    <div class="p_rc_c">
      <h1>人才搜索</h1>
      <div class="p_rc_con">
        <form id="Form1" action="" method="get">
          <div class="s1">
            <div class="tit">关键字：</div>
            <div class="input">
              <input name="key" value="<?php echo $_GET['key']; ?>
" class="">
              <a href="javascript:$('#Form1').submit();"></a>
            </div>
            <div class="clear"></div>
          </div>
          <div class="s2">
            <div class="tit">职位意向：</div>
            <select class="select"  name="category"  onchange="javascript:$('#Form1').submit();" />

            <option value="">请选择</option>
            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_trade"), $this);?>
          <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['category']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
            <?php endforeach; endif; ?>
          </select>
          <div class="clear"></div>
        </div>
        <div class="s2">
          <div class="tit">最高学历：</div>
          <select class="select"  name="education"  onchange="javascript:$('#Form1').submit();"/>

          <option value="">请选择</option>
          <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:education,类型:QS_education"), $this);?>
          <?php if (count((array)$this->_vars['education'])): foreach ((array)$this->_vars['education'] as $this->_vars['list']): ?>
          <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['education']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
          <?php endforeach; endif; ?>
        </select>
        <div class="clear"></div>
      </div>
      <div class="s2">
        <div class="tit">工作经验：</div>
        <select class="select" name="experience"  onchange="javascript:$('#Form1').submit();"/>

        <option value="">请选择</option>
        <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:experience,类型:QS_experience"), $this);?>
          <?php if (count((array)$this->_vars['experience'])): foreach ((array)$this->_vars['experience'] as $this->_vars['list']): ?>
        <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['experience']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
        <?php endforeach; endif; ?>
      </select>
      <div class="clear"></div>
    </div>
    <div class="s2">
      <div class="tit">性别：</div>
      <select class="select"  name="sex"  onchange="javascript:$('#Form1').submit();"/>

      <option value="" <?php if (0 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>请选择</option>
      <option value="1" <?php if (1 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>男</option>
      <option value="2" <?php if (2 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>女</option>
    </select>
    <div class="clear"></div>
  </div>
  <div class="s3">
    <!--默认这个div是隐藏的，有已选条件的时候，这个div才在这里出现。style="display:none;"-->
    <div class="searchdel fl">
      <div class="tit">已选条件：</div>
      <div class="con">

      </div>
    </div>
    <div class="reset fr">
      <a href="javascript:$('#Form1').reset();"></a>
    </div>
  </div>
</form>
</div>
</div>
</div>
<div class="p_rc_wrap">
<div class="p_main">
<div class="p_main_c p_main_c_rc fl">
<div class="p_list_rc">
  <ul>
    <?php if (count((array)$this->_vars['resume_list'])): foreach ((array)$this->_vars['resume_list'] as $this->_vars['li']): ?>
    <li>
      <div class="a1">
        <div class="head">
          <a href="#">
            <img src="<?php echo $this->_vars['li']['photosrc']; ?>
" width="168" height="168" />
          </a>
        </div>
        <div class="info">
          <p class="name">
            <a href="<?php echo $this->_vars['li']['resume_url']; ?>
"><?php echo $this->_vars['li']['fullname']; ?>
</a>
          </p>
          <p>
            年龄：<?php echo $this->_vars['li']['age']; ?>
 | 工作经验：<?php echo $this->_vars['li']['experience_cn']; ?>
 | 意向职位：<?php echo $this->_vars['li']['intention_jobs']; ?>

          </p>
          <p>婚姻状况：<?php echo $this->_vars['li']['marriage_cn']; ?>
 | 学历：<?php echo $this->_vars['li']['education_cn']; ?>
 | 期望岗位性质：<?php echo $this->_vars['li']['nature_cn']; ?>
</p>
          <div class="tool">
            <a href="javascript:void(0);" class="pm addpms" title="发送私信" value="<?php echo $this->_vars['li']['id']; ?>
"></a>
            <a href="javascript:void(0);" class="add add_resume_pool" title="加入人才库"  id="<?php echo $this->_vars['li']['id']; ?>
" value="<?php echo $this->_vars['li']['id']; ?>
"></a>
            <a href="<?php echo $this->_vars['li']['resume_url']; ?>
" class="view" title="查看"></a>
            
          </div>
        </div>
      </div>
      <div class="a2"><?php echo $this->_vars['li']['aboutme']; ?>
</div>
    </li>
    <?php endforeach; endif; ?>
  </ul>
</div>
<div class="p_page">
  <?php if ($this->_vars['page']): ?>
        <?php echo $this->_vars['page']; ?>

        
        <?php endif; ?>
</div>
</div>
<script type="text/javascript">
jQuery(".p_list_rc").find("li").hover(
  function(){
    jQuery(this).find(".love").addClass("block");
  },
  function(){
    jQuery(this).find(".love").removeClass("block");
  }
)
</script>
<div class="p_side_rc fr">
<div class="p_side_news">
  <h3>招聘活动</h3>
  <div class="con">
    <a href="news/news-list.php?id=23">
      <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_huodong.jpg" width="263" height="174" />
    </a>
    <ul>
      <?php echo tpl_function_qishi_news_list(array('set' => "列表名:list,显示数目:3,资讯小类:23,标题长度10,填补字符:..."), $this);?>
      <!--   以下为循环读取 -->
      <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
      <li>
        <a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a>
        <span><?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span>
      </li>
      <?php endforeach; endif; ?>
      <!-- 循环结束 --> </ul>
  </div>
</div>
<div class="p_side_ad">
  <a href="news/news-list.php?id=23">
    <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_ad.jpg" width="263" height="176" />
  </a>
</div>
<div class="p_side_help">
  <h3>青职相关</h3>
  <div class="con">
    <p>
      新手上路：
      <a href="news/news-show.php?id=17">教你如何快速找到工作</a>
    </p>
    <p>
      关注青职：
      <a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina" target="_blank"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a>
      <!--<a href="#" class="douban"></a>-->
    </p>
    <p>服务热线：<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
</p>
    <div class="side_book">
      <a href="user/personal/personal_user.php?act=feedback" target="_blank"></a>
    </div>
  </div>
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