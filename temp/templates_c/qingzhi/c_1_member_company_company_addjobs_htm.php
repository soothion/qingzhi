<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:25 中国标准时间 */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="青职网" />
<meta name="copyright" content="qingzhi.org" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.user.selectlayer.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/cache_classify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//范例展开
	$("#model").click(function(){	$("#cp").toggle()});
	//菜单层
	showmenulayer("#category_cn","#menu1","#category","#subclass",QS_jobs);
	showmenulayer("#district_cn","#menu3","#district","#sdistrict",QS_city);
	showmenu("#education_cn","#menu4","#education","","");
	showmenu("#experience_cn","#menu5","#experience","","");	
	showmenu("#wage_cn","#menu6","#wage","#Form1","#wage");
	showtaglayer("#tag_cn","#menutag","#tag_cn","#tag",16,'');
	//性别中文字段复制
	$("input[name='sex']").click(function(){
	$("#sex_cn").val($(this).attr("title"));
	});
	//职位性质中文字段复制
	$("#nature_cn").val($("input[name='nature']").attr("title"));
	$("input[name='nature']").click(function(){
	$("#nature_cn").val($(this).attr("title"));
	});
	//判断可否接收通知
	$("input[name='notify']").click(function(){
	var  email_audit="<?php echo $this->_vars['user']['email_audit']; ?>
";
		if (email_audit=="0" && $("input[name='notify'][checked=true]").val()=="1")
		{		
		$("input[name='notify'][value=0]").attr("checked",true);
		alert("您的邮箱未通过验证，不能接收通知。");
		}
	});
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   jobs_name:{
    required: true,
	minlength:2,
    maxlength:30
   },
   amount: {
	range:[0,9999]
   },
   days: {
	min:<?php echo $this->_vars['QISHI']['company_add_days_min']; ?>

   },
   category: "required",
   district: "required",
   wage: "required",
   contents:{
   required: true,
	minlength:30,
    maxlength:1000
   },
   contact:{
   required: true
   },
    qq:{
	digits:true 
	},
	 telephone: "required",
	  address: "required",
	   <?php if ($this->_vars['verify_addjob'] == "1"): ?>
		postcaptcha:{
		IScaptchastr: true,
		required: true,
		remote:{     
		url:"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php",     
		type:"post",    
		data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
		}
	   },
	   <?php endif; ?>  
	   email: {
	   required:true,
	   email:true
	   }
	},
    messages: {
    jobs_name: {
    required: "请输入职位名称",
    minlength: jQuery.format("职位名称不能小于{0}个字符"),
	maxlength: jQuery.format("职位名称不能大于{0}个字符")
   },
   amount: {
    range: jQuery.format("请输入一个介于 {0} 和 {1} 之间的值")
   },
   days: {
    min: jQuery.format("有效天数不能小于{0}天")
   },
    category: {
    required: jQuery.format("请选择所属职位，精确选择职位类别可以有效提高招聘效果")
   },
    district: {
    required: jQuery.format("请选择工作地区")
   },
   wage: {
    required: jQuery.format("请选择月薪范围")
   },
   contents: {
    required: jQuery.format("请填写职位描述"),
	minlength: jQuery.format("职位描述内容不能小于{0}个字符"),
	maxlength: jQuery.format("职位描述内容不能大于{0}个字符")
   },
   contact: {
    required: jQuery.format("请填写联系人")
   },
    qq: {
    digits: jQuery.format("请正确填写qq号码")
   },
   telephone: {
    required: jQuery.format("请填写联系电话")
   },
   address: {
    required: jQuery.format("请填写联系地址")
   },
   <?php if ($this->_vars['verify_addjob'] == "1"): ?>
    postcaptcha: {
    required: "请填写验证码",
	remote: jQuery.format("验证码错误")	
   },
    <?php endif; ?>
   email: {
    required: jQuery.format("请填写电子邮箱"),
	email: jQuery.format("请正确填写电子邮箱")
   } 
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="点击获取验证码";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "请填写验证码");
	/////验证码部分
<?php if ($this->_vars['verify_addjob'] == "1"): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="点击获取验证码")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//设置验证码DIV
		$(imgdiv).css({ position: "absolute", left:  $(inputID).width(), "bottom": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"看不请验证码？点击更换一张\"  border=\"0\"/>");
		}
		$(imgdiv+" img").click(function()
		{
			$(imgdiv+" img").attr("src",$(imgdiv+" img").attr("src")+"1");
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
		});
		$(document).unbind().click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
			$(document).unbind();
			}			
		});
	});
}
imgcaptcha("#postcaptcha","#imgdiv");
//验证码结束
<?php endif; ?>
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
<div class="page_location link_bk">

当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> &nbsp;>&nbsp;<a href="company_jobs.php?act=jobs">职位管理</a>&nbsp;>&nbsp;发布职位
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk" >
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_company/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
		<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>发布职位</h1>
		</div>
		<form id="Form1" name="Form1" method="post" action="?act=addjobs_save" >
		<table width="100%" border="0" cellpadding="4" cellspacing="0"  style="margin-top:8px;" >
        <tr>
          <td width="120" height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 职位名称：</td>
          <td  ><input name="jobs_name" type="text" class="input_text_200" id="jobs_name" maxlength="30" style=" width:350px;" /></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 性别要求：</td>
          <td  >
		   <label><input name="sex"  type="radio" value="3" checked="checked" title="不限"/>不限</label>&nbsp;&nbsp;&nbsp;
		   <label><input name="sex"  type="radio" value="1" title="男"/>男</label>&nbsp;&nbsp;&nbsp;
		   <label><input name="sex"  type="radio" value="2" title="女"/>女</label>&nbsp;&nbsp;&nbsp;
		   <input name="sex_cn" type="hidden"  id="sex_cn" value="不限" />
		   </td>
        </tr>
        <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 职位性质：</td>
          <td  >
		  <?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_jobs_nature,列表名:c_nature"), $this); if (count((array)$this->_vars['c_nature'])): foreach ((array)$this->_vars['c_nature'] as $this->_vars['list']): ?>
		   <label><input name="nature"  type="radio" value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $this->_vars['c_nature']['0']['id']): ?>checked="checked"<?php endif; ?>  title="<?php echo $this->_vars['list']['categoryname']; ?>
"/>
		  <?php echo $this->_vars['list']['categoryname']; ?>
</label>&nbsp;&nbsp;&nbsp;&nbsp;
		  <?php endforeach; endif; ?>
		  <input name="nature_cn" type="hidden" id="nature_cn" value="" />
		   </td>
        </tr>
		<tr>
          <td height="35" align="right"  >
		<span style="color:#FF3300; font-weight:bold">*</span> 应届生应聘：</td>
          <td  >	
          <label><input type="radio" name="graduate" value="1" checked="checked" /> 允许</label>&nbsp;&nbsp;&nbsp;&nbsp;
		  <label><input name="graduate" type="radio" value="0" /> 不允许</label>
		  </td>
        </tr>
        <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold;">*</span> 招聘人数：</td>
          <td  ><input name="amount" type="text" class="input_text_200" id="amount" value="5" maxlength="4" /> 人
		   <span style="color: #666666"> &nbsp;(0 表示若干)</span>
		  </td>
        </tr>
        <tr>
          <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span> 有效时间：</td>
          <td  ><input name="days" type="text"  class="input_text_200" id="days"  value="<?php echo $this->_vars['QISHI']['company_add_days']; ?>
" maxlength="3" /> 
          天  <span style="color: #0099FF" id="days_info"></span></td>
        </tr>
        <tr>
          <td height="35" align="right"   ><span style="color:#FF3300; font-weight:bold">*</span> 职位类别：</td>
          <td  >
		<div>
		<input type="text" value="请选择职位分类"  readonly="readonly" name="category_cn" id="category_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="category" id="category" type="hidden" value="" />
		<input name="subclass" id="subclass" type="hidden" value="" />
		<div id="menu1" class="dmenu shadow" >
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "列表名:c_jobs,类型:QS_jobs"), $this); if (count((array)$this->_vars['c_jobs'])): foreach ((array)$this->_vars['c_jobs'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		<div id="menu1_s" class="dmenu shadow" style="display:none"></div>
		  </div>
		  
		  </td>
        </tr>
        <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 工作地区：</td>
          <td  >
		   <div>
		<input type="text" value="请选择工作地区"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="district" id="district" type="hidden" value="" />
		<input name="sdistrict" id="sdistrict" type="hidden" value="" />
		<div id="menu3" class="dmenu shadow">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_district,id:0,列表名:c_province"), $this); if (count((array)$this->_vars['c_province'])): foreach ((array)$this->_vars['c_province'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		<div id="menu3_s" class="dmenu shadow" style="display:none"></div>
		  </div></td>
        </tr>
		   <tr>
          <td height="35" align="right"  > 学历要求：</td>
          <td  >
		   <div>
		<input type="text" value="不限制"  readonly="readonly" name="education_cn" id="education_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="education" id="education" type="hidden" value="" />
		<div id="menu4" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_education,列表名:c_education"), $this); if (count((array)$this->_vars['c_education'])): foreach ((array)$this->_vars['c_education'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>		  </td>
          </tr>
				<tr>
          <td height="35" align="right"  >工作经验：</td>
          <td  >		  
		  <div>
		<input type="text" value="不限制"  readonly="readonly" name="experience_cn" id="experience_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="experience" id="experience" type="hidden" value="" />
		<div id="menu5" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_experience"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['ex']): ?>
			<li id="<?php echo $this->_vars['ex']['id']; ?>
" title="<?php echo $this->_vars['ex']['categoryname']; ?>
"><?php echo $this->_vars['ex']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>		   </td>
		        </tr>
       
		
		<tr>
          <td height="35" align="right"  > 职位标签：</td>
		  <td  >
		  
		  
		<div>
		<input type="text" value="请选择职位标签"  readonly="readonly" name="tag_cn" id="tag_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="tag" id="tag" type="hidden" value="" />
		<div id="menutag" class="tagmenu shadow">
		  <div class="tit">精准的选择标签可有效提高招聘效果，可多选，最多可以选择5项</div>
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_jobtag,列表名:list"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
			<li ><label><input type="checkbox" name="checkbox" value="<?php echo $this->_vars['list']['id']; ?>
,<?php echo $this->_vars['list']['categoryname']; ?>
" id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
" /><?php echo $this->_vars['list']['categoryname']; ?>
</label></li>
			<?php endforeach; endif; ?>			
			</ul>
			<div class="clear"></div>
			<div align="center"><br /><input type="button"  class="but80 Set" value="确定" /></div>
		</div>
		 </div>
		 </td>
        </tr>
		
		 <tr>
          <td height="35" align="right"  >
		  <span style="color:#FF3300; font-weight:bold">*</span> 工资范围：</td>
          <td  >
		  <div>
		<input type="text" value="请选择月薪范围"  readonly="readonly" name="wage_cn" id="wage_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="wage" id="wage" type="hidden" value="" />
		<div id="menu6" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_wage,列表名:c_wage"), $this); if (count((array)$this->_vars['c_wage'])): foreach ((array)$this->_vars['c_wage'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>
		  </td>
        </tr>
		
		
        <tr>
          <td align="right" valign="top"  >
		  <span style="color:#FF3300; font-weight:bold">*</span> 职位描述：</td>
          <td  >
		  <div><textarea name="contents" class="input_text_200_textarea" id="contents" style="width:450px; height:150px;" ></textarea><br />
</div>
            <div style="line-height:30px; height:30px;"><span style="color: #0033CC; cursor:pointer" id="model">[查看范例]</span>&nbsp;&nbsp;&nbsp;说明：请详细描述该职位，内容可包括：职位要求，岗位职责等。</div>			</td>
        </tr>
		<tr id="cp" style="display:none">
          <td align="right" valign="top"  style=" border-bottom:1px #CCCCCC dashed; color:#FF0000"><strong>范例：</strong></td>
          <td   style=" border-bottom:1px #CCCCCC dashed;"><strong>岗位职责：</strong> </strong><br /> 
      1、负责公司系统经营结构调整、新增投资与合作项目策划、现有投资项目调整以及投资管理等工作； <br /> 
      2、主持制定公司投资项目总体发展规划，系统分析投资项目内外部经营风险，指导风险防范体系的建立。 
      <br />      <strong>任职要求： </strong><br />
      1、经济管理、投资管理、工商管理及技术经济等专业硕士及以上学历； <br />
      2、熟悉相关法律法规及投资项目实施、资产重组和处置过程的评估方法； <br />
      3、具有较强的沟通及组织协调能力、学习能力及较强的团队合作精神； <br />
      4、5 年及以上大型企业投资管理经验，熟悉资本运作； <br />
    5、英语听说读写熟练。</td>
        </tr>
		
		 
		<tr>
          <td height="35" align="center" bgcolor="F9F9F9" ><strong>邮件通知</strong></td>
          <td bgcolor="F9F9F9" >(接收邮箱为用户注册邮箱)</td>
        </tr>
		<tr>
          <td height="35" align="right"  >邮件通知：</td>
          <td  >
		  <label><input name="notify" type="radio" value="1" <?php if ($this->_vars['user']['email_audit'] == "1"): ?>checked="checked"<?php endif; ?>/>接收</label>
			&nbsp;&nbsp;&nbsp;          
            <label>
            <input type="radio" name="notify" value="0" <?php if ($this->_vars['user']['email_audit'] == "0"): ?>checked="checked"<?php endif; ?>/>不接收</label> 
            <span style="color: #666666"> &nbsp;&nbsp;&nbsp;(有用户申请此职位时，系统会发一份邮件提醒您查看)</span></td>
        </tr>
		<tr>
          <td height="35" align="right"  >接收邮箱：</td>
          <td ><strong><?php echo $this->_vars['user']['email']; ?>
</strong>&nbsp;&nbsp;&nbsp;
		  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="company_user.php?act=user_email" style="color:#009900"> [已认证]</a>
			<?php else: ?>
			<span style="color:#FF0000"> 您的邮箱未认证，不能接收邮件通知，<a href="company_user.php?act=user_email" style="color: #009900">[点击认证]</a></span>
			<?php endif; ?>
		  </td>
        </tr>
		<tr>
          <td height="35" align="center" bgcolor="F9F9F9" ><strong>联系方式</strong></td>
          <td bgcolor="F9F9F9" >(默认为企业联系方式)</td>
        </tr>
		
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 联 系 人：</td>
          <td  ><input name="contact" type="text" class="input_text_200" id="contact" value="<?php echo $this->_vars['company_profile']['contact']; ?>
" maxlength="20" /></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>联系邮箱：</td>
          <td  ><label>
          <input name="email" type="text" class="input_text_200" id="email" maxlength="80"  value="<?php echo $this->_vars['company_profile']['email']; ?>
"/>
          </label></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold"> </span>联系人QQ号：</td>
          <td  ><input name="qq" type="text" class="input_text_200" id="qq" maxlength="50" />
           </td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 联系电话：</td>
          <td  ><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="35" value="<?php echo $this->_vars['company_profile']['telephone']; ?>
" /></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 联系地址：</td>
          <td  ><input name="address" type="text" class="input_text_200" id="address" maxlength="100"  value="<?php echo $this->_vars['company_profile']['address']; ?>
"/></td>
        </tr>
		
		<?php if ($this->_vars['verify_addjob'] == "1"): ?>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span> 验证码：</td>
          <td  >
          
		  <div>
	<div id="imgdiv"></div>
	<input  class="input_text_200"    name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/>
 
	
			</div>
		  
		  
          </td>
        </tr>
		<?php endif; ?>
      </table>
	  <div style="position:relative;">
	  <table width="100%" border="0" cellpadding="20" cellspacing="0" class="link_lan" bgcolor="F9F9F9" style="margin-top:10px; padding-bottom:10px;">
            <tr>               
              <td align="center" >
			  <?php if ($this->_vars['add_mode'] == "2"): ?>
			  <!--套餐模式 -->
			   <input name="add_mode" type="hidden" id="add_mode" value="2" />
			 <table width="100%" border="0" cellspacing="6" cellpadding="5">
		  <tr>
			<td width="180" align="right" ><input name="" type="submit" value="确定发布" class="but100"/></td>
			<td align="left"><a style="color:#0066CC" href="Javascript:window.history.go(-1)" >[返回上一页]</a>
			   </td>
		  </tr>
		</table>
		  <?php else: ?>
<!--积分模式 -->
<script type="text/javascript">
$(document).ready(function()
{
				//积分默认
				check_day();
				total();				
				$("#days").keyup(function(){
				check_day();
				total()
				});
	
				//计算发布天数对应的积分
				function check_day()
				{
					var jobs_daily = <?php echo $this->_vars['points']['jobs_daily']['value']; ?>
;
					if (jobs_daily>0)
					{
						var count_days_pon= $("#days").val()*jobs_daily;
						if ($("#days").val()<<?php echo $this->_vars['QISHI']['company_add_days_min']; ?>
)
						{
							$("#days_info").html("");
							$("#release_daysa").html(" ");
						}
						else
						{
						$("#days_info").html("设置有效时间&nbsp;"+$("#days").val()+"&nbsp;天，发布后将扣除&nbsp;<strong><span style=\"color:#FF3300\">"+count_days_pon+"</span></strong>&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
");
							$("#release_daysa").html(" ☉ 您设置的有效时间&nbsp;&nbsp;"+$("#days").val()+"&nbsp;&nbsp;天，发布后将扣除&nbsp;&nbsp;<strong>"+count_days_pon+"</strong>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
<br />");
						}	
					}
				}
				//计算总计积分
				function total()
				{
							var points = <?php echo $this->_vars['points_total']; ?>
;
							var jobs_add = <?php echo $this->_vars['points']['jobs_add']['value']; ?>
;
							var jobs_daily = <?php echo $this->_vars['points']['jobs_daily']['value']; ?>
;
							var input_days=$("#days").val();
							var day_pointst=input_days*jobs_daily;
							var totals=day_pointst+jobs_add;
						if (jobs_add>0)
						{
						$("#release_jobs_add").html(" ☉ 发布本条信息将扣除&nbsp;&nbsp;<strong>"+jobs_add+"</strong>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
<br/>");
						}				
						$("#total").html("发布本条信息总计扣除&nbsp;<span style=\"font-size:20px; color: #FF0000\" >"+totals+"</span>&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
，你目前共有<strong style=\"color:#0033FF\"> <?php echo $this->_vars['points_total']; ?>
  </strong><?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
；<br />");
						$("#totals").val(<?php echo $this->_vars['points_total']; ?>
-totals);	
				}				
				$("#addsubmit").click(function()
				{
					if ($("#totals").val()<0)
					{
						<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
						alert("您的积分不足，请申请新的服务或者充值积分！");
						<?php else: ?>
						alert("您的积分不足，请充值后再发布！");
						<?php endif; ?>
					}
					else
					{
					$("form[name=Form1]").submit();
					}
				});
				
				
				
});
</script>
		    <input name="add_mode" type="hidden" id="add_mode" value="1" />
		   <table width="90%" border="0" cellpadding="10" cellspacing="0" class="link_lan"  style="line-height:200%;">
            <tr>
              <td width="360" align="left" >
			  
			<div id="release_jobs_add"></div>
            <div id="release_info"></div>
			<div id="release_daysa"></div>
			<div id="total"></div>
			
                <a href="company_service.php?act=points_report" target="_blank">[积分消费明细]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="company_service.php?act=points_rule" target="_blank">[积分消费规则]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="company_service.php?act=order_add">[充值积分]</a>
				
				</td>
				 <td>
			 				 <input name="totals" id="totals" type="hidden" value="0" />
						  <table width="100%" border="0" cellspacing="6" cellpadding="5">
						  <tr>
							<td width="30%" ><input name="" type="button" value="确定发布" class="but100" id="addsubmit"/></td>
							<td align="left"><a style="color:#0066CC" href="Javascript:window.history.go(-1)" >[返回上一页]</a>
						    </td>
						  </tr>
						</table>
			  </td>
            </tr>
          </table>
		  <?php endif; ?>
			  </td>
            </tr>
          </table>
		  </div>
	  </form>
	</div>
    </td>
  </tr>
</table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>