<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-14 18:46 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <meta http-equiv="x-ua-compatible" content="ie=7" />
    <title>职位搜索 | 青职网</title>
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
    $('#Form1').submit();
    }   

function resetForm(){
    $("input[name='key']").val('');
    $("select").each(function(){
        $(this).val('');
    })
    $('.searchdel').html('').hide();
    $('#Form1').submit();
    }

function option(){
    var key='<?php echo $_GET['key']; ?>
';
	var companytype='<?php echo $_GET['companytype']; ?>
';
    var trade='<?php echo $_GET['trade']; ?>
';
    var jobs='<?php echo $_GET['jobs']; ?>
';
    var wage='<?php echo $_GET['wage']; ?>
';
    var education='<?php echo $_GET['education']; ?>
';
    var experience='<?php echo $_GET['experience']; ?>
';
    var nature='<?php echo $_GET['nature']; ?>
';
    var str='';
    if(key||trade||jobs||wage||education||experience||nature||companytype){
      if(key) str+='<a href="javascript:void(0);" value="key" title="删除该选择" class="option">关键字:'+key+'</a>';
	   if(companytype) str+='<a href="javascript:void(0);" value="companytype" title="删除该选择" class="option">企业类型:'+$("select[name='companytype'] option[selected]").text()+'</a>';
      if(trade) str+='<a href="javascript:void(0);" value="trade" title="删除该选择" class="option">行业类别:'+$("select[name='trade'] option[selected]").text()+'</a>';
      if(jobs) str+='<a href="javascript:void(0);" value="jobs" title="删除该选择" class="option">职位类别:'+$("select[name='jobs'] option[selected]").text()+'</a>';
      if(wage) str+='<a href="javascript:void(0);" value="wage" title="删除该选择" class="option">每月薪水:'+$("select[name='wage'] option[selected]").text()+'</a>';
      if(education) str+='<a href="javascript:void(0);" value="education" title="删除该选择" class="option">学历要求:'+$("select[name='education'] option[selected]").text()+'</a>';
      if(experience) str+='<a href="javascript:void(0);" value="experience" title="删除该选择" class="option">工作经验:'+$("select[name='experience'] option[selected]").text()+'</a>';
       if(nature) str+='<a href="javascript:void(0);" value="nature" title="删除该选择" class="option">工作性质:'+$("select[name='nature'] option[selected]").text()+'</a>';
      $('.searchdel .con').html(str);
      
    }
    else{
        $('.searchdel').hide();
        $('.reset').hide();
    }

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
	//全选反选
	$("input[name='selectall']").unbind().click(function(){if($(this).attr('checked')) $("#formjobslist :checkbox").attr('checked','checked');else $("#formjobslist :checkbox").attr('checked',false)});
     option();
  $('.option').click(function(){
    var name=$(this).attr('value');
    if(name=='key')
       $("input[name="+name+"]").val('');
     else
    $("select[name="+name+"]").val('');
  $('#Form1').submit();
  });
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
    <?php echo tpl_function_qishi_jobs_list(array('set' => "分页显示:1,列表名:jobslist,显示数目:GET[pagesize],填补字符:...,职位名长度:13,企业名长度:19,描述长度:135,关键字:GET[key],职位大类:GET[jobs],职位小类:GET[subclass],地区分类:GET[citycategory],地区大类:GET[district],地区小类:GET[sdistrict],道路:GET[streetid],写字楼:GET[officebuildingid],行业:GET[trade],日期范围:GET[settr],学历:GET[education],工作经验:GET[experience],工资:GET[wage],职位性质:GET[nature],公司规模:GET[scale],企业类型:GET[companytype],排序:GET[sort]"), $this);?>
    <div class="p_banner" style="background:#16b8e0;">
        <div class="p_banner_c">
            <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/p_banner_zy.jpg" width="1004" height="123" />
        </div>
    </div>
	<a name="here" id="here"></a>
    <div class="p_search">
        <div class="p_search_c">
            <h1>职位搜索</h1>
            <div class="p_search_con">
                <form id="Form1" method="get">
				<input type="hidden" name="sort" value="<?php echo $_GET['sort']; ?>
"/>
					 <input type="hidden" name="companytype" value="<?php echo $_GET['companytype']; ?>
"/>
                    <input type="hidden" name="pagesize" value="<?php echo $_GET['pagesize']; ?>
"/>
                    <input type="hidden" name="recommend" value="<?php echo $_GET['recommend']; ?>
"/>
                    <input type="hidden" name="emergency" value="<?php echo $_GET['emergency']; ?>
"/>
                    <div class="s1">
                        <div class="tit">关键字：</div>
                        <div class="input">
                            <input name="key" value="<?php echo $_GET['key']; ?>
">
                            <a href="javascript:$('#Form1').submit();"></a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="s2">
                        <div class="tit">企业类型：</div>
                        <select name="companytype"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_company_type"), $this);?>
                      <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['companytype']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="s2">
                        <div class="tit">行业类别：</div>
                        <select name="trade"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_trade"), $this);?>
                      <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['trade']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="s2">
                        <div class="tit">职位类别：</div>
                        <select name="jobs"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_jobs"), $this);?>
                      <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['jobs']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                        <div class=
                <div class="clear"></div>
                    </div>
                    <div class="s2">
                        <div class="tit">每月薪水：</div>
                        <select name="wage"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:wage,类型:QS_wage"), $this);?>
                      <?php if (count((array)$this->_vars['wage'])): foreach ((array)$this->_vars['wage'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['wage']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="s2">
                        <div class="tit">学历要求：</div>
                        <select name="education"  onchange="javascript:$('#Form1').submit();"  class="select">
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
                        <div class="tit">工作经验</div>
                        <select name="experience"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_experience"), $this);?>
                      <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['experience']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                    </div>
                    <div class="s2">
                        <div class="tit">工作性质：</div>
                        <select name="nature"  onchange="javascript:$('#Form1').submit();"  class="select">
                            <option value="">请选择</option>
                            <?php echo tpl_function_qishi_get_classify(array('set' => "列表名:category,类型:QS_jobs_nature"), $this);?>
                      <?php if (count((array)$this->_vars['category'])): foreach ((array)$this->_vars['category'] as $this->_vars['list']): ?>
                            <option value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $_GET['nature']): ?> selected="selected"<?php endif; ?>><?php echo $this->_vars['list']['categoryname']; ?>
</option>
                            <?php endforeach; endif; ?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="s3">
                        <div class="searchdel fl">
                            <div class="tit">已选条件：</div>
                            <div class="con"></div>
                        </div>
                        <div class="reset fr">
                            <a href="javascript:resetForm(); "></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="p_main">
        <div class="p_main_c fl">
            <div class="p_result_tool">
                <div class="input">
                    <input type="checkbox" id="" value="" name="selectall" id="selectall">全选</div>
                <div class="btn">
                    <a href="javascript:void(0);" class="btn1 deliver" title="批量投递简历"></a>
                    <a href="javascript:void(0);" class="btn2 collect" title="收藏所选职位"></a>
                    <a href="javascript:void(0);" class="btn3 contrast" title="对比所选职位"></a>
                </div>
            </div>
            <div class="p_search_zw">
                <div class="p_order">
                    <div class="fl">
                        排序：
                        <a href="javascript:set('sort','stickrtime')" class="w30 <?php if ($_GET['sort'] == "stickrtime" || $_GET['sort'] == ""): ?> on <?php endif; ?>">默认</a>
                        <span>|</span>
                        <a href="javascript:set('sort','rtime')" class="w60 <?php if ($_GET['sort'] == "rtime"): ?> on <?php endif; ?>">更新时间</a>
                        <span>|</span>
                        <a href="javascript:set('sort','hot')" class="w30 <?php if ($_GET['sort'] == "hot"): ?> on <?php endif; ?>">热度</a>
                        <span>|</span>
                        <a href="javascript:set('sort','wage')" class="w30 <?php if ($_GET['sort'] == "wage"): ?> on <?php endif; ?>">工资</a>
                    </div>
                    <div class="fr">
                        每页显示：
                        <a href="javascript:set('pagesize','10')" class="w25 <?php if ($_GET['pagesize'] == "10" || $_GET['pagesize'] == ""): ?> on <?php endif; ?>">10</a>
                        <a href="javascript:set('pagesize','20')" class="w25 <?php if ($_GET['pagesize'] == "20"): ?> on <?php endif; ?>">20</a>
                        <a href="javascript:set('pagesize','30')" class="w25 <?php if ($_GET['pagesize'] == "30"): ?> on <?php endif; ?>">30</a>
                    </div>
                    <div class="clear"></div>
                </div>

                <ul id="formjobslist">
                    <?php if (count((array)$this->_vars['jobslist'])): foreach ((array)$this->_vars['jobslist'] as $this->_vars['list']): ?>
                    <li class="list">
                        <div class="a0">
                            <input type="checkbox" id="<?php echo $this->_vars['list']['id']; ?>
" value="<?php echo $this->_vars['list']['id']; ?>
" ></div>
                        <div class="a1">
                            <div class="a1b1">
                                <a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name_']; ?>
</a>
                                <?php if ($this->_vars['list']['recommend']): ?>
                                <span class="nice"></span><?php endif; ?>
                                <?php if ($this->_vars['list']['emergency']): ?>
                                <span class="worry"></span>
                                <?php endif; ?>
                            </div>

                            <div class="a1b2">
                                <a href="#"><?php echo $this->_vars['list']['companyname']; ?>
</a>
                            </div>
                            <div class="a1b3"><?php echo $this->_run_modifier($this->_vars['list']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</div>
                            <div class="clear"></div>
                        </div>
                        <div class="a2">
                            <p>
                                <span>工作地点：<?php echo $this->_vars['list']['district_cn']; ?>
</span>
                                <span>职位类别：<?php echo $this->_vars['list']['category_cn']; ?>
</span>
                                <span>每月薪水：<?php echo $this->_vars['list']['wage']; ?>
</span>
                                <span>学历要求：<?php echo $this->_vars['list']['education_cn']; ?>
</span>
                                <span>招聘人数：<?php echo $this->_vars['list']['amount']; ?>
</span>
                            </p>
                            <p>
                                福利待遇：<?php if (count((array)$this->_vars['list']['tag'])): foreach ((array)$this->_vars['list']['tag'] as $this->_vars['tag']):  echo $this->_vars['tag']['1']; ?>
 <?php endforeach; endif; ?>
                            </p>
                            <p>岗位职责：<?php echo $this->_vars['list']['contents']; ?>
</p>
                        </div>
                        <div class="a3">
                            【<a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" class="cf98a1c" target="_blank">查看</a>】
                            【<a href="javascript:void(0);" class="c78af34 add_favorites"  id="<?php echo $this->_vars['list']['id']; ?>
">收藏</a>】
                            【<a href="javascript:;" class="cf0418f">分享给好友</a>】
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
<!-- 循环结束  --></ul>
            </div>
            <div class="p_side_will">
                <a href="user/personal/personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/side_will_btn.gif" width="241" height="134" /> </a>
            </div>
            <div class="p_side_help">
                <h3>青职相关</h3>
                <div class="con">
                    <p>
                        新手上路：
                        <a href="news/news-show.php?id=17" target="_blank">教你如何快速找到工作</a>
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