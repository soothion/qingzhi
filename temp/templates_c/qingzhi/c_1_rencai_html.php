<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-14 16:42 �й���׼ʱ�� */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="x-ua-compatible" content="ie=7" />
  <title>�˲����� | ��ְ��</title>
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
      if(key) str+='<a href="javascript:void(0);" value="key" title="ɾ����ѡ��" class="option">�ؼ���:'+key+'</a>';
      if(category) str+='<a href="javascript:void(0);" value="category" title="ɾ����ѡ��" class="option">ְλ����:'+$("select[name='category'] option[selected]").text()+'</a>';
      if(education) str+='<a href="javascript:void(0);" value="education" title="ɾ����ѡ��" class="option">���ѧ��:'+$("select[name='education'] option[selected]").text()+'</a>';
      if(experience) str+='<a href="javascript:void(0);" value="experience" title="ɾ����ѡ��" class="option">��������:'+$("select[name='experience'] option[selected]").text()+'</a>';
      if(sex) str+='<a href="javascript:void(0);" value="sex" title="ɾ����ѡ��" class="option">�Ա�:'+$("select[name='sex'] option[selected]").text()+'</a>';
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
        //���ؼ���
        $("#download").click(function(){
        var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_download_resume.php?id="+id+"&act=download&t="+tsTimeStamp;
        dialog("���ؼ���","url:get?"+url,"500px","auto","");
        }); 
        //��������
        $("#invited").click(function(){
        var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_invited.php?id="+id+"&act=invited&t="+tsTimeStamp;
        dialog("��������","url:get?"+url,"500px","auto","");
        }); 

       }
    );
    //��Ӷ��˲ſ�
    $(".add_resume_pool").click(function(){
    var id=$(this).attr("value");
    var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_favorites_resume.php?id="+id+"&act=add&t="+tsTimeStamp;
    dialog("��ӵ��˲ſ�","url:get?"+url,"500px","auto","");        
    }); 

  $("#newbuddy").click(function(){
  dialog("��Ϊ����","url:get?<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_buddy.php?tuid=<?php echo $this->_vars['show']['uid']; ?>
","350px","auto","");
  });
  $(".addpms").click(function(){
  var id=$(this).attr("value");
  var url="<?php echo $this->_vars['QISHI']['site_dir']; ?>
user/user_pms.php?tuid="+id+"";
  dialog("���Ͷ���Ϣ","url:get?"+url,"400px","auto","");
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
<p id="back-to-top"><a href="#top"><span></span>���ض���</a></p>
  <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<?php echo tpl_function_qishi_resume_list(array('set' => "�б���:resume_list,��ҳ��ʾ:1,��ʾ��Ŀ:GET[inforow],�س���������:130,��ַ�:...,�ؼ���:GET[key],ְλ����:GET[jobcategory],ְλ����:GET[category],ְλС��:GET[subclass],ѧ��:GET[education],��������:GET[experience],�Ա�:GET[sex],��������:GET[citycategory],��������:GET[district],����С��:GET[sdistrict],��Ƭ:GET[photo],,�ȼ�:GET[talent],����:rtime>desc"), $this);?>
  <div class="p_banner" style="background:#eccf97;">
    <div class="p_banner_c">
      <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_rc.jpg" width="1004" height="123" />
    </div>
  </div>
  <div class="p_rc">
    <div class="p_rc_c">
      <h1>�˲�����</h1>
      <div class="p_rc_con">
        <form id="Form1" action="" method="get">
          <div class="s1">
            <div class="tit">�ؼ��֣�</div>
            <div class="input">
              <input name="key" value="<?php echo $_GET['key']; ?>
" class="">
              <a href="javascript:$('#Form1').submit();"></a>
            </div>
            <div class="clear"></div>
          </div>
          <div class="s2">
            <div class="tit">ְλ����</div>
            <select class="select"  name="category"  onchange="javascript:$('#Form1').submit();" />

            <option value="">��ѡ��</option>
            <?php echo tpl_function_qishi_get_classify(array('set' => "�б���:category,����:QS_trade"), $this);?>
          <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['category']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
            <?php endforeach; endif; ?>
          </select>
          <div class="clear"></div>
        </div>
        <div class="s2">
          <div class="tit">���ѧ����</div>
          <select class="select"  name="education"  onchange="javascript:$('#Form1').submit();"/>

          <option value="">��ѡ��</option>
          <?php echo tpl_function_qishi_get_classify(array('set' => "�б���:education,����:QS_education"), $this);?>
          <?php if (count((array)$this->_vars['education'])): foreach ((array)$this->_vars['education'] as $this->_vars['list']): ?>
          <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['education']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
          <?php endforeach; endif; ?>
        </select>
        <div class="clear"></div>
      </div>
      <div class="s2">
        <div class="tit">�������飺</div>
        <select class="select" name="experience"  onchange="javascript:$('#Form1').submit();"/>

        <option value="">��ѡ��</option>
        <?php echo tpl_function_qishi_get_classify(array('set' => "�б���:experience,����:QS_experience"), $this);?>
          <?php if (count((array)$this->_vars['experience'])): foreach ((array)$this->_vars['experience'] as $this->_vars['list']): ?>
        <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['experience']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
        <?php endforeach; endif; ?>
      </select>
      <div class="clear"></div>
    </div>
    <div class="s2">
      <div class="tit">�Ա�</div>
      <select class="select"  name="sex"  onchange="javascript:$('#Form1').submit();"/>

      <option value="" <?php if (0 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>��ѡ��</option>
      <option value="1" <?php if (1 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>��</option>
      <option value="2" <?php if (2 == $_GET['sex']): ?> selected="selected"<?php endif; ?>>Ů</option>
    </select>
    <div class="clear"></div>
  </div>
  <div class="s3">
    <!--Ĭ�����div�����صģ�����ѡ������ʱ�����div����������֡�style="display:none;"-->
    <div class="searchdel fl">
      <div class="tit">��ѡ������</div>
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
            ���䣺<?php echo $this->_vars['li']['age']; ?>
 | �������飺<?php echo $this->_vars['li']['experience_cn']; ?>
 | ����ְλ��<?php echo $this->_vars['li']['intention_jobs']; ?>

          </p>
          <p>����״����<?php echo $this->_vars['li']['marriage_cn']; ?>
 | ѧ����<?php echo $this->_vars['li']['education_cn']; ?>
 | ������λ���ʣ�<?php echo $this->_vars['li']['nature_cn']; ?>
</p>
          <div class="tool">
            <a href="javascript:void(0);" class="pm addpms" title="����˽��" value="<?php echo $this->_vars['li']['id']; ?>
"></a>
            <a href="javascript:void(0);" class="add add_resume_pool" title="�����˲ſ�"  id="<?php echo $this->_vars['li']['id']; ?>
" value="<?php echo $this->_vars['li']['id']; ?>
"></a>
            <a href="<?php echo $this->_vars['li']['resume_url']; ?>
" class="view" title="�鿴"></a>
            
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
  <h3>��Ƹ�</h3>
  <div class="con">
    <a href="news/news-list.php?id=23">
      <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_huodong.jpg" width="263" height="174" />
    </a>
    <ul>
      <?php echo tpl_function_qishi_news_list(array('set' => "�б���:list,��ʾ��Ŀ:3,��ѶС��:23,���ⳤ��10,��ַ�:..."), $this);?>
      <!--   ����Ϊѭ����ȡ -->
      <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
      <li>
        <a href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a>
        <span><?php echo $this->_run_modifier($this->_vars['li']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</span>
      </li>
      <?php endforeach; endif; ?>
      <!-- ѭ������ --> </ul>
  </div>
</div>
<div class="p_side_ad">
  <a href="news/news-list.php?id=23">
    <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_ad.jpg" width="263" height="176" />
  </a>
</div>
<div class="p_side_help">
  <h3>��ְ���</h3>
  <div class="con">
    <p>
      ������·��
      <a href="news/news-show.php?id=17">������ο����ҵ�����</a>
    </p>
    <p>
      ��ע��ְ��
      <a href="<?php echo $this->_vars['QISHI']['weibo']; ?>
" class="sina" target="_blank"><?php echo $this->_vars['QISHI']['weibo']; ?>
</a>
      <!--<a href="#" class="douban"></a>-->
    </p>
    <p>�������ߣ�<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
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