<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:30 �й���׼ʱ�� */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="��ְ��" />
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
	//�˵���
	showmenu("#education_cn","#menu3","#education","#Form1","#education");
	showmenu("#experience_cn","#menu1","#experience","#Form1","#experience");
	showtaglayer("#tag_cn","#menutag","#tag_cn","#tag",16,'<?php echo $this->_vars['resume_basic']['tag']; ?>
');
	//�Ա������ֶθ���
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
	//�ύ����
	$("#submitsave").click(function(){
	$('#Form1').submit();
	});
	//�жϿɷ����֪ͨ
	$("input[name='email_notify']").click(function(){
	var  email_audit="<?php echo $this->_vars['user']['email_audit']; ?>
";
		if (email_audit=="0" && $("input[name='email_notify'][checked=true]").val()=="1")
		{		
		$("input[name='email_notify'][value=0]").attr("checked",true);
		alert("��������δͨ����֤�����ܽ���֪ͨ��");
		}
	});
});
//��֤
$(document).ready(function() {
$("#aboutme").focus(function(){
	if ($("#aboutme").val()=="����д���ҽ��ܣ��ҵļ�飬ְҵԸ��������...")
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
    required: "�������������"
   },
    fullname: {
    required: jQuery.format("��������ʵ����")
   },
    birthdate: {
	required: "����д����",
    digits: jQuery.format("����������"),
	min: jQuery.format("������ݲ���С��{0}"),
	max: jQuery.format("������ݲ��ܴ���{0}")
   },
   height: {
    digits: jQuery.format("����������"),
	min: jQuery.format("����ȷ��д"),
	max: jQuery.format("����ȷ��д")
   },
   experience: {
    required: jQuery.format("��ѡ��������")
   },
   householdaddress: {
    required: jQuery.format("����д�������ڵ�")
   },
   education: {
    required: jQuery.format("��ѡ�����ѧ��")
   },
   telephone: {
    required: jQuery.format("����д��ϵ�绰")
   },
   address: {
    required: jQuery.format("����д��ϵ��ַ")
   },
   <?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
    postcaptcha: {
    required: "����д��֤��",
	remote: jQuery.format("��֤�����")	
   },
    <?php endif; ?>
    qq: {
    digits: jQuery.format("����ȷ��дqq����")
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
	var str="�����ȡ��֤��";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "����д��֤��");
		/////��֤�벿��
<?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="�����ȡ��֤��")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//������֤��DIV
		$(imgdiv).css({ position: "absolute", left:  $(inputID).width(), "bottom": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"��������֤�룿�������һ��\"  border=\"0\"/>");
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
//��֤�����
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
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;��������&nbsp;>&nbsp;��һ�� - ����������Ϣ
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
		  <h1>�ҵļ���</h1>
		</div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="22">
		  <form id="Form1" name="Form1" method="post" action="?act=make1_save" >
		  <table width="100%" border="0" cellspacing="0" cellpadding="4">
            <tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;">��һ�� - ����������Ϣ</span> <span style="color:#999999">(��<strong  style="color:#FF0000">*</strong>��Ϊ����)</span></td>
              </tr>
              <div class="us_list_tip link_lan" style="margin-top:6px;">��ʾ���������Դ���<span> <?php echo $this->_vars['resume_max']; ?>
 </span>�ݲ�ͬ�ļ�����</div>
			  <tr>
              <td width="100" height="10"></td>
              <td></td>
            </tr>
			<tr>
              <td width="100" height="33" align="right" valign="top" style="padding-top:10px;"><strong  style="color:#FF0000">*</strong>�������ƣ�</td>
              <td><input name="title" type="text" class="input_text_200" id="title" maxlength="80"   value="<?php echo $this->_vars['resume_basic']['title']; ?>
"/>&nbsp;&nbsp;�������Ʋ�����վ��ʾ���������ֶ������<br />
</td>
            </tr>
            <tr>
              <td width="100" height="33" align="right"><strong  style="color:#FF0000">*</strong>��ʵ������</td>
              <td><input name="fullname" type="text" class="input_text_200" id="fullname" maxlength="6"   value="<?php echo $this->_vars['resume_basic']['fullname']; ?>
" /></td>
            </tr>
            <tr>
              <td height="33" align="right">�Ա�</td>
              <td>
			  <label>
                <input name="sex" type="radio" value="1" <?php if ($this->_vars['resume_basic']['sex'] == '1' || $this->_vars['resume_basic']['sex'] == ""): ?> checked="checked"<?php endif; ?> title="��"/>
                ��</label>&nbsp;&nbsp;&nbsp;&nbsp;
               <label> <input type="radio" name="sex" value="2" <?php if ($this->_vars['resume_basic']['sex'] == 2): ?> checked="checked"<?php endif; ?> title="Ů"/>
                Ů</label>
				<input name="sex_cn" id="sex_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['sex_cn']; ?>
" />
			  </td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>������ݣ�</td>
              <td><input name="birthdate" type="text" class="input_text_200" id="birthdate" maxlength="4"  style="width:60px;" value="<?php echo $this->_vars['resume_basic']['birthdate']; ?>
" />�磺1990</td>
            </tr>
			<tr>
              <td height="33" align="right">��ߣ�</td>
              <td><input name="height" type="text" class="input_text_200" id="height" maxlength="3"  style="width:60px;" value="<?php if ($this->_vars['resume_basic']['height'] > 0):  echo $this->_vars['resume_basic']['height'];  endif; ?>"  />
                CM</td>
            </tr>
            <tr>
              <td height="33" align="right">����״����</td>
              <td>                
				 <label><input name="marriage" type="radio" value="1" <?php if ($this->_vars['resume_basic']['marriage'] == 1 || $this->_vars['resume_basic']['marriage'] == ""): ?> checked="checked"<?php endif; ?> title="δ��"/>
                δ��</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="marriage" value="2"  <?php if ($this->_vars['resume_basic']['marriage'] == 2): ?> checked="checked"<?php endif; ?> title="�ѻ�"/>
                �ѻ�</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label><input type="radio" name="marriage" value="3" <?php if ($this->_vars['resume_basic']['marriage'] == 3): ?> checked="checked"<?php endif; ?> title="����"/>
                ����</label>
				<input name="marriage_cn" id="marriage_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['marriage_cn']; ?>
" />
				</td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>�������飺</td>
              <td>
			<div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['experience_cn'], 'default', 'plugin', 1, "��ѡ��������"); ?>
"  readonly="readonly" name="experience_cn" id="experience_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="experience" id="experience" type="hidden" value="<?php echo $this->_vars['resume_basic']['experience']; ?>
" />
		<div id="menu1" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_experience,�б���:c_experience"), $this); if (count((array)$this->_vars['c_experience'])): foreach ((array)$this->_vars['c_experience'] as $this->_vars['list']): ?>
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
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>�������ڣ�</td>
              <td><input name="householdaddress" type="text" class="input_text_200" id="householdaddress" maxlength="60"  value="<?php echo $this->_vars['resume_basic']['householdaddress']; ?>
"/></td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>���ѧ����</td>
              <td>
			 <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['education_cn'], 'default', 'plugin', 1, "��ѡ��ѧ��"); ?>
"  readonly="readonly" name="education_cn" id="education_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="education" id="education" type="hidden" value="<?php echo $this->_vars['resume_basic']['education']; ?>
" />
		<div id="menu3" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_education,�б���:c_education"), $this); if (count((array)$this->_vars['c_education'])): foreach ((array)$this->_vars['c_education'] as $this->_vars['list']): ?>
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
              <td height="33" align="right">���˱�ǩ��</td>
              <td>
				<div>
				<input type="text" value="��ѡ����˱�ǩ"  readonly="readonly" name="tag_cn" id="tag_cn" class="input_text_200 input_text_200_selsect"/>
				<input name="tag" id="tag" type="hidden" value="<?php echo $this->_vars['resume_basic']['tag']; ?>
" />
				<div id="menutag" class="tagmenu shadow">
				  <div class="tit">��׼��ѡ���ǩ����Ч�����ְЧ�����ɶ�ѡ��������ѡ��5��</div>
					<ul>
					<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_resumetag,�б���:list"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
					<li ><label><input type="checkbox" name="checkbox" value="<?php echo $this->_vars['list']['id']; ?>
,<?php echo $this->_vars['list']['categoryname']; ?>
" id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
" /><?php echo $this->_vars['list']['categoryname']; ?>
</label></li>
					<?php endforeach; endif; ?>			
					</ul>
					<div class="clear"></div>
					<div align="center"><br /><input type="button"  class="but80 Set" value="ȷ��" /></div>
				</div>
				 </div>
			</td>
            </tr>    
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>��ϵ�绰��</td>
              <td><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="60" value="<?php echo $this->_vars['resume_basic']['telephone']; ?>
"/>
              <span style="color:#0066FF">�ǳ���Ҫ����Ƹ����ͨ���˵绰������ϵ��</span><br /></td>
            </tr>
			<tr>
              <td height="33" align="right">�������䣺</td>
              <td>
			  <?php echo $this->_vars['user']['email']; ?>

			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="personal_user.php?act=user_email" style="color:#009900"> [�޸�]</a>
			<?php else: ?>
			<a href="personal_user.php?act=user_email" style="color:#FF3300"> [�����֤]</a>
			<?php endif; ?>	
			</td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>��ϵ��ַ��</td>
              <td><input name="address" type="text" class="input_text_200" id="address" maxlength="60"  value="<?php echo $this->_vars['resume_basic']['address']; ?>
"/></td>
            </tr>
			<tr>
              <td height="33" align="right">��ϵ Q Q��</td>
              <td><input name="qq" type="text" class="input_text_200" id="qq" maxlength="20"   value="<?php echo $this->_vars['resume_basic']['qq']; ?>
"  /></td>
            </tr>
            <tr>
              <td height="33" align="right">������ַ��</td>
              <td><input name="website" type="text" class="input_text_200" id="website" maxlength="80"   value="<?php echo $this->_vars['resume_basic']['website']; ?>
" />&nbsp;&nbsp;������������վ�����͡�΢�����ռ�ȣ�������http://��ͷ��</td>
            </tr>
            <tr>
              <td height="33" align="right">�����ң�</td>
              <td><textarea style="width:380px; height:100px; padding:4px;margin-top:5px; border-top:1px solid #666; border-bottom:1px solid #ccc; border-left:1px solid #666; border-right:1px solid #ccc; color:#666;" name="aboutme" id="aboutme"><?php echo $this->_run_modifier($this->_vars['resume_basic']['aboutme'], 'default', 'plugin', 1, "����д���ҽ��ܣ��ҵļ�飬ְҵԸ��������..."); ?>
</textarea></td>
            </tr>
		<tr>
          <td height="33" align="right"  >�ʼ�����֪ͨ��</td>
          <td  >
		  <label><input name="email_notify" type="radio" value="1" <?php if ($this->_vars['resume_basic']['email_notify'] == "1" || $this->_vars['resume_basic']['email_notify'] == ""): ?>checked="checked"<?php endif; ?> />����</label>
			&nbsp;&nbsp;&nbsp;          
            <label>
            <input type="radio" name="email_notify" value="0" <?php if ($this->_vars['resume_basic']['email_notify'] == "0" || $this->_vars['user']['email_audit'] == "0"): ?>checked="checked"<?php endif; ?> />������</label> 
            <span style="color: #666666"> &nbsp;&nbsp;&nbsp;(����ҵ���������������룬ϵͳ�ᷢһ���ʼ��������鿴)</span></td>
        </tr>
		<tr>
          <td height="33" align="right"  >�������䣺</td>
          <td ><strong><?php echo $this->_vars['user']['email']; ?>
</strong>&nbsp;&nbsp;&nbsp;
		  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<span style="color:#009900"> [��������֤]</span>
			<?php else: ?>
			<span style="color:#FF0000"> [����δ��֤]</span>
			<?php endif; ?>
		  </td>
        </tr>
			<?php if ($this->_vars['verify_resume'] == "1" && $this->_vars['resume_basic']['fullname'] == ""): ?>
			<tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>��֤�룺</td>
              <td>
			  
			    <div>
	<div id="imgdiv"></div>
	<input  class="input_text_200" name="postcaptcha" id="postcaptcha" type="text" value="�����ȡ��֤��" style="color:#999999"/>
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
			 
			  <input type="submit" name="submitsave" id="submitsave" value="����"  class="user_submit"/>
			   &nbsp;&nbsp;
			   <input type="button" name="next" value="����"  class="user_submit" onclick="window.location='?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
'"/>
			  <?php else: ?>
			  <input type="submit" name="submitsave" id="submitsave" value="���沢������һ��"  class="user_long_submit"/>
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