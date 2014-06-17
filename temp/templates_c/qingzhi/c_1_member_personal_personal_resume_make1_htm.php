<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:30 中国标准时间 */ ?>
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
	$("#tabshow li:nth-child(2)>a").addClass("selected");
	//菜单层
	showmenu("#education_cn","#menu3","#education","#Form1","#education");
	showmenu("#experience_cn","#menu1","#experience","#Form1","#experience");
	showtaglayer("#tag_cn","#menutag","#tag_cn","#tag",16,'<?php echo $this->_vars['resume_basic']['tag']; ?>
');
	//性别中文字段复制
	$("#sex_cn").val($(":radio[name='sex'][checked]").attr("title"));
	$("input[name='sex']").click(function(){
	$("#sex_cn").val($(this).attr("title"));
	 //alert ($("#sex_cn").val())
	});
	$("#marriage_cn").val($(":radio[name='marriage'][checked]").attr("title"));
	$("input[name='marriage']").click(function(){
	$("#marriage_cn").val($(this).attr("title"));
	//alert ($("#marriage_cn").val())
	});
	//提交表单】
	$("#submitsave").click(function(){
	$('#Form1').submit();
	});
	//判断可否接收通知
	$("input[name='email_notify']").click(function(){
	var  email_audit="<?php echo $this->_vars['user']['email_audit']; ?>
";
		if (email_audit=="0" && $("input[name='email_notify'][checked=true]").val()=="1")
		{		
		$("input[name='email_notify'][value=0]").attr("checked",true);
		alert("您的邮箱未通过验证，不能接收通知。");
		}
	});
});
//验证
$(document).ready(function() {
$("#aboutme").focus(function(){
	if ($("#aboutme").val()=="请填写自我介绍，我的简介，职业愿景等描述...")
	{
	$("#aboutme").val('');
	$("#aboutme").css("color","");
	}  
});

var myDate = new Date();W
var y=myDate.getFullYear();
 $("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   title:{
    required: true
   },
   fullname: "required",
   birthdate:{
   required:true,
   digits:true,
	min:y-70,
	max:y-15
   },
   height:{
   digits:true,
	min:130,
	max:250
   },   
   experience: "required",
   householdaddress: "required",
   education: "required",
	 telephone: "required",
	   address: "required",
	   <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
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
	 qq:{
	digits:true 
	}
	},
    messages: {
    title: {
    required: "请输入简历名称"
   },
    fullname: {
    required: jQuery.format("请输入真实姓名")
   },
    birthdate: {
	required: "请填写年龄",
    digits: jQuery.format("必须是整数"),
	min: jQuery.format("出生年份不能小于{0}"),
	max: jQuery.format("出生年份不能大于{0}")
   },
   height: {
    digits: jQuery.format("必须是整数"),
	min: jQuery.format("请正确填写"),
	max: jQuery.format("请正确填写")
   },
   experience: {
    required: jQuery.format("请选择工作经验")
   },
   householdaddress: {
    required: jQuery.format("请填写户口所在地")
   },
   education: {
    required: jQuery.format("请选择你的学历")
   },
   telephone: {
    required: jQuery.format("请填写联系电话")
   },
   address: {
    required: jQuery.format("请填写联系地址")
   },
   <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
    postcaptcha: {
    required: "请填写验证码",
	remote: jQuery.format("验证码错误")	
   },
    <?php endif; ?>
    qq: {
    digits: jQuery.format("请正确填写qq号码")
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
<?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
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
">会员中心</a>&nbsp;>&nbsp;创建简历&nbsp;>&nbsp;第一步 - 创建基本信息
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="183" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>我的简历</h1>
		</div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="22">
		  <form id="Form1" name="Form1" method="post" action="?act=make1_save" >
		  <table width="100%" border="0" cellspacing="0" cellpadding="4">
            <tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;">第一步 - 创建基本信息</span> <span style="color:#999999">(带<strong  style="color:#FF0000">*</strong>的为必填)</span></td>
              </tr>
              <div class="us_list_tip link_lan" style="margin-top:6px;">提示：您最多可以创建<span> <?php echo $this->_vars['resume_max']; ?>
 </span>份不同的简历。</div>
			  <tr>
              <td width="100" height="10"></td>
              <td></td>
            </tr>
			<tr>
              <td width="100" height="33" align="right" valign="top" style="padding-top:10px;"><strong  style="color:#FF0000">*</strong>简历名称：</td>
              <td><input name="title" type="text" class="input_text_200" id="title" maxlength="80"   value="<?php echo $this->_vars['resume_basic']['title']; ?>
"/>&nbsp;&nbsp;简历名称不在网站显示，用于区分多个简历<br />
</td>
            </tr>
            <tr>
              <td width="100" height="33" align="right"><strong  style="color:#FF0000">*</strong>真实姓名：</td>
              <td><input name="fullname" type="text" class="input_text_200" id="fullname" maxlength="6"   value="<?php echo $this->_vars['resume_basic']['fullname']; ?>
" /></td>
            </tr>
            <tr>
              <td height="33" align="right">性别：</td>
              <td>
			  <label>
                <input name="sex" type="radio" value="1" <?php if ($this->_vars['resume_basic']['sex'] == '1' || $this->_vars['resume_basic']['sex'] == ""): ?> checked="checked"<?php endif; ?> title="男"/>
                男</label>&nbsp;&nbsp;&nbsp;&nbsp;
               <label> <input type="radio" name="sex" value="2" <?php if ($this->_vars['resume_basic']['sex'] == 2): ?> checked="checked"<?php endif; ?> title="女"/>
                女</label>
				<input name="sex_cn" id="sex_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['sex_cn']; ?>
" />
			  </td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>出生年份：</td>
              <td><input name="birthdate" type="text" class="input_text_200" id="birthdate" maxlength="4"  style="width:60px;" value="<?php echo $this->_vars['resume_basic']['birthdate']; ?>
" />如：1990</td>
            </tr>
			<tr>
              <td height="33" align="right">身高：</td>
              <td><input name="height" type="text" class="input_text_200" id="height" maxlength="3"  style="width:60px;" value="<?php if ($this->_vars['resume_basic']['height'] > 0):  echo $this->_vars['resume_basic']['height'];  endif; ?>"  />
                CM</td>
            </tr>
            <tr>
              <td height="33" align="right">婚姻状况：</td>
              <td>                
				 <label><input name="marriage" type="radio" value="1" <?php if ($this->_vars['resume_basic']['marriage'] == 1 || $this->_vars['resume_basic']['marriage'] == ""): ?> checked="checked"<?php endif; ?> title="未婚"/>
                未婚</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="marriage" value="2"  <?php if ($this->_vars['resume_basic']['marriage'] == 2): ?> checked="checked"<?php endif; ?> title="已婚"/>
                已婚</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="marriage" value="3" <?php if ($this->_vars['resume_basic']['marriage'] == 3): ?> checked="checked"<?php endif; ?> title="保密"/>
                保密</label>
				<input name="marriage_cn" id="marriage_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['marriage_cn']; ?>
" />
				</td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>工作经验：</td>
              <td>
			<div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['experience_cn'], 'default', 'plugin', 1, "请选择工作经验"); ?>
"  readonly="readonly" name="experience_cn" id="experience_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="experience" id="experience" type="hidden" value="<?php echo $this->_vars['resume_basic']['experience']; ?>
" />
		<div id="menu1" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_experience,列表名:c_experience"), $this); if (count((array)$this->_vars['c_experience'])): foreach ((array)$this->_vars['c_experience'] as $this->_vars['list']): ?>
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
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>户籍所在：</td>
              <td><input name="householdaddress" type="text" class="input_text_200" id="householdaddress" maxlength="60"  value="<?php echo $this->_vars['resume_basic']['householdaddress']; ?>
"/></td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>最高学历：</td>
              <td>
			 <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['education_cn'], 'default', 'plugin', 1, "请选择学历"); ?>
"  readonly="readonly" name="education_cn" id="education_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="education" id="education" type="hidden" value="<?php echo $this->_vars['resume_basic']['education']; ?>
" />
		<div id="menu3" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_education,列表名:c_education"), $this); if (count((array)$this->_vars['c_education'])): foreach ((array)$this->_vars['c_education'] as $this->_vars['list']): ?>
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
              <td height="33" align="right">个人标签：</td>
              <td>
				<div>
				<input type="text" value="请选择个人标签"  readonly="readonly" name="tag_cn" id="tag_cn" class="input_text_200 input_text_200_selsect"/>
				<input name="tag" id="tag" type="hidden" value="<?php echo $this->_vars['resume_basic']['tag']; ?>
" />
				<div id="menutag" class="tagmenu shadow">
				  <div class="tit">精准的选择标签可有效提高求职效果，可多选，最多可以选择5项</div>
					<ul>
					<?php echo tpl_function_qishi_get_classify(array('set' => "类型:QS_resumetag,列表名:list"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
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
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>联系电话：</td>
              <td><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="60" value="<?php echo $this->_vars['resume_basic']['telephone']; ?>
"/>
              <span style="color:#0066FF">非常重要，招聘方会通过此电话与您联系！</span><br /></td>
            </tr>
			<tr>
              <td height="33" align="right">电子邮箱：</td>
              <td>
			  <?php echo $this->_vars['user']['email']; ?>

			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="personal_user.php?act=user_email" style="color:#009900"> [修改]</a>
			<?php else: ?>
			<a href="personal_user.php?act=user_email" style="color:#FF3300"> [点击认证]</a>
			<?php endif; ?>	
			</td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>联系地址：</td>
              <td><input name="address" type="text" class="input_text_200" id="address" maxlength="60"  value="<?php echo $this->_vars['resume_basic']['address']; ?>
"/></td>
            </tr>
			<tr>
              <td height="33" align="right">联系 Q Q：</td>
              <td><input name="qq" type="text" class="input_text_200" id="qq" maxlength="20"   value="<?php echo $this->_vars['resume_basic']['qq']; ?>
"  /></td>
            </tr>
            <tr>
              <td height="33" align="right">个人网址：</td>
              <td><input name="website" type="text" class="input_text_200" id="website" maxlength="80"   value="<?php echo $this->_vars['resume_basic']['website']; ?>
" />&nbsp;&nbsp;可以是您的网站、博客、微博、空间等，必须以http://开头。</td>
            </tr>
            <tr>
              <td height="33" align="right">关于我：</td>
              <td><textarea style="width:380px; height:100px; padding:4px;margin-top:5px; border-top:1px solid #666; border-bottom:1px solid #ccc; border-left:1px solid #666; border-right:1px solid #ccc; color:#666;" name="aboutme" id="aboutme"><?php echo $this->_run_modifier($this->_vars['resume_basic']['aboutme'], 'default', 'plugin', 1, "请填写自我介绍，我的简介，职业愿景等描述..."); ?>
</textarea></td>
            </tr>
		<tr>
          <td height="33" align="right"  >邮件接收通知：</td>
          <td  >
		  <label><input name="email_notify" type="radio" value="1" <?php if ($this->_vars['resume_basic']['email_notify'] == "1" || $this->_vars['resume_basic']['email_notify'] == ""): ?>checked="checked"<?php endif; ?> />接收</label>
			&nbsp;&nbsp;&nbsp;          
            <label>
            <input type="radio" name="email_notify" value="0" <?php if ($this->_vars['resume_basic']['email_notify'] == "0" || $this->_vars['user']['email_audit'] == "0"): ?>checked="checked"<?php endif; ?> />不接收</label> 
            <span style="color: #666666"> &nbsp;&nbsp;&nbsp;(当企业对您发起面试邀请，系统会发一份邮件提醒您查看)</span></td>
        </tr>
		<tr>
          <td height="33" align="right"  >接收邮箱：</td>
          <td ><strong><?php echo $this->_vars['user']['email']; ?>
</strong>&nbsp;&nbsp;&nbsp;
		  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<span style="color:#009900"> [邮箱已认证]</span>
			<?php else: ?>
			<span style="color:#FF0000"> [邮箱未认证]</span>
			<?php endif; ?>
		  </td>
        </tr>
			<?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
			<tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>验证码：</td>
              <td>
			  
			    <div>
	<div id="imgdiv"></div>
	<input  class="input_text_200" name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/>
			</div>
			  </td>
            </tr> 
			<?php endif; ?>
          </table>
		  <input name="pid" type="hidden" id="pid" value="<?php echo $this->_vars['pid']; ?>
" />
		   <input name="go_resume_show" type="hidden"  value="<?php echo $this->_vars['go_resume_show']; ?>
" />
		   </form>
		   <div style="position:relative;">
		  <table  width="100%" border="0" cellspacing="0" cellpadding="4" style="margin-bottom:150px;">
    <tr>
              <td width="100" height="33" align="right"></td>
              <td height="60">
			  <?php if ($this->_vars['go_resume_show']): ?>
			 
			  <input type="submit" name="submitsave" id="submitsave" value="保存"  class="user_submit"/>
			   &nbsp;&nbsp;
			   <input type="button" name="next" value="返回"  class="user_submit" onclick="window.location='?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
'"/>
			  <?php else: ?>
			  <input type="submit" name="submitsave" id="submitsave" value="保存并跳到下一步"  class="user_long_submit"/>
			  <?php endif; ?>
			  </td>
            </tr>
</table>	
</div>  
		  </td>
          <td width="150" valign="top" class="resume_right_box" >
		 <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/personal_right.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> 
		  </td>
        </tr>
      </table>
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