<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 12:56 �й���׼ʱ�� */ ?>
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
	//����չ��
	$("#model").click(function(){	$("#cp").toggle()});
	//�˵���
	showmenulayer("#category_cn","#menu1","#category","#subclass",QS_jobs);
	showmenulayer("#district_cn","#menu3","#district","#sdistrict",QS_city);
	showmenu("#education_cn","#menu4","#education","","");
	showmenu("#experience_cn","#menu5","#experience","","");	
	showmenu("#wage_cn","#menu6","#wage","#Form1","#wage");
	showtaglayer("#tag_cn","#menutag","#tag_cn","#tag",16,'<?php echo $this->_vars['jobs']['tag']; ?>
');
	//�Ա������ֶθ���
	$("#sex_cn").val($(":radio[name='sex'][checked]").attr("title"));
	$("input[name='sex']").click(function(){
	$("#sex_cn").val($(this).attr("title"));
	});
	//ְλ���������ֶθ���
	$("#nature_cn").val($(":radio[name='nature'][checked]").attr("title"));
	$("input[name='nature']").click(function(){
	$("#nature_cn").val($(this).attr("title"));
	});
	//�жϿɷ����֪ͨ
	$("input[name='notify']").click(function(){
	var  email_audit="<?php echo $this->_vars['user']['email_audit']; ?>
";
		if (email_audit=="0" && $("input[name='notify'][checked=true]").val()=="1")
		{		
		$("input[name='notify'][value=0]").attr("checked",true);
		alert("��������δͨ����֤�����ܽ���֪ͨ��");
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
	digits:true
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
	   email: {
	   required:true,
	   email:true
	   }
	},
    messages: {
    jobs_name: {
    required: "������ְλ����",
    minlength: jQuery.format("ְλ���Ʋ���С��{0}���ַ�"),
	maxlength: jQuery.format("ְλ���Ʋ��ܴ���{0}���ַ�")
   },
   amount: {
    range: jQuery.format("������һ������ {0} �� {1} ֮���ֵ")
   },
   days: {
    digits: jQuery.format("����������")
   },
    category: {
    required: jQuery.format("��ѡ������ְλ����ȷѡ��ְλ��������Ч�����ƸЧ��")
   },
    district: {
    required: jQuery.format("��ѡ��������")
   },
   wage: {
    required: jQuery.format("��ѡ����н��Χ")
   },
   contents: {
    required: jQuery.format("����дְλ����"),
	minlength: jQuery.format("ְλ�������ݲ���С��{0}���ַ�"),
	maxlength: jQuery.format("ְλ�������ݲ��ܴ���{0}���ַ�")
   },
   contact: {
    required: jQuery.format("����д��ϵ��")
   },
    qq: {
    digits: jQuery.format("����ȷ��дqq����")
   },
   telephone: {
    required: jQuery.format("����д��ϵ�绰")
   },
   address: {
    required: jQuery.format("����д��ϵ��ַ")
   },
   email: {
    required: jQuery.format("����д��������"),
	email: jQuery.format("����ȷ��д��������")
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
">��Ա����</a>&nbsp;>&nbsp;<a href="company_jobs.php?act=jobs">ְλ����</a>&nbsp;>&nbsp;�޸�ְλ��<?php echo $this->_vars['jobs']['jobs_name']; ?>

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
		  <h1>�޸�ְλ</h1>
		</div><form id="Form1" name="Form1" method="post" action="?act=editjobs_save" >
		<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF" style="margin-top:8px;" >
        <tr>
          <td width="120" height="35" align="right" bgcolor="#FFFFFF"  ><span style="color:#FF3300; font-weight:bold">*</span> ְλ���ƣ�</td>
          <td  ><input name="jobs_name" type="text" class="input_text_200" id="jobs_name" maxlength="30" style=" width:350px;"  value="<?php echo $this->_vars['jobs']['jobs_name']; ?>
"/></td>
        </tr>
		
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> �Ա�Ҫ��</td>
          <td bgcolor="#FFFFFF" >
		   <label><input name="sex"  type="radio" value="3" <?php if ($this->_vars['jobs']['sex'] == "3"): ?>checked="checked"<?php endif; ?> title="����"/>����</label>&nbsp;&nbsp;&nbsp;
		   <label><input name="sex"  type="radio" value="1" <?php if ($this->_vars['jobs']['sex'] == "1"): ?>checked="checked"<?php endif; ?> title="��"/>��</label>&nbsp;&nbsp;&nbsp;
		   <label><input name="sex"  type="radio" value="2" <?php if ($this->_vars['jobs']['sex'] == "2"): ?>checked="checked"<?php endif; ?> title="Ů"/>Ů</label>&nbsp;&nbsp;&nbsp;
		   <input name="sex_cn"  id="sex_cn" type="hidden" value="<?php echo $this->_vars['jobs']['sex_cn']; ?>
" />
		   </td>
        </tr>
        <tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ְλ���ʣ�</td>
          <td bgcolor="#FFFFFF" >
		  <?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_jobs_nature,�б���:c_nature"), $this); if (count((array)$this->_vars['c_nature'])): foreach ((array)$this->_vars['c_nature'] as $this->_vars['list']): ?>
		   <label><input name="nature"  type="radio" value="<?php echo $this->_vars['list']['id']; ?>
" <?php if ($this->_vars['list']['id'] == $this->_vars['jobs']['nature']): ?>checked="checked"<?php endif; ?>  title="<?php echo $this->_vars['list']['categoryname']; ?>
"/>
		  <?php echo $this->_vars['list']['categoryname']; ?>
</label>  &nbsp;&nbsp;&nbsp;&nbsp;
		  <?php endforeach; endif; ?>
		  <input name="nature_cn"  id="nature_cn" type="hidden" value="<?php echo $this->_vars['jobs']['nature_cn']; ?>
" />
		   </td>
        </tr>
				<tr>
          <td height="35" align="right"  >
		<span style="color:#FF3300; font-weight:bold">*</span> Ӧ����ӦƸ��</td>
          <td  >	 
		  <label><input name="graduate" type="radio" value="0"  <?php if ($this->_vars['jobs']['graduate'] == "0"): ?>checked="checked"<?php endif; ?> />������</label>
		   <label><input type="radio" name="graduate" value="1"  <?php if ($this->_vars['jobs']['graduate'] == "1"): ?>checked="checked"<?php endif; ?> />����</label>
		  </td>
        </tr>
        <tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold;">*</span> ��Ƹ������</td>
          <td bgcolor="#FFFFFF" ><input name="amount" type="text" class="input_text_200" id="amount"   maxlength="4" value="<?php echo $this->_vars['jobs']['amount']; ?>
"/> ��
		   <span style="color: #666666"> &nbsp;(0 ��ʾ����)</span>
		  </td>
        </tr>
        <tr>
          <td height="35" align="right" bgcolor="#FFFFFF">��Чʱ�䣺</td>
          <td bgcolor="#FFFFFF" ><?php echo $this->_vars['jobs']['deadline_days']; ?>
��<span style="color: #999999">(�������ڣ�<?php echo $this->_run_modifier($this->_vars['jobs']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
����ֹ���ڣ�<?php echo $this->_run_modifier($this->_vars['jobs']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
)</span><input name="olddeadline" type="hidden" value="<?php echo $this->_vars['jobs']['deadline']; ?>
" /></td>
        </tr>
		 <tr>
          <td height="35" align="right" bgcolor="#FFFFFF">������Чʱ�䣺</td>
          <td bgcolor="#FFFFFF" ><input name="days" type="text"  class="input_text_200" id="days"  value="0" maxlength="3" style="width:50px;"/> ��&nbsp;&nbsp;(0��ʾ���ӳ�)
		  <span style="color: #0099FF" id="days_info"></span>
		  </td>
        </tr>
        <tr>
          <td height="35" align="right"  bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ְλ���</td>
          <td bgcolor="#FFFFFF" >
		<div>
		<input type="text" value="<?php echo $this->_vars['jobs']['category_cn']; ?>
"  readonly="readonly" name="category_cn" id="category_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="category" id="category" type="hidden" value="<?php echo $this->_vars['jobs']['category']; ?>
" />
		<input name="subclass" id="subclass" type="hidden" value="<?php echo $this->_vars['jobs']['subclass']; ?>
" />
		<div id="menu1" class="dmenu shadow" >
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_jobs,����:QS_jobs"), $this); if (count((array)$this->_vars['c_jobs'])): foreach ((array)$this->_vars['c_jobs'] as $this->_vars['list']): ?>
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
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ����������</td>
          <td bgcolor="#FFFFFF" >
		   <div>
		<input type="text" value="<?php echo $this->_vars['jobs']['district_cn']; ?>
"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="district" id="district" type="hidden" value="<?php echo $this->_vars['jobs']['district']; ?>
" />
		<input name="sdistrict" id="sdistrict" type="hidden" value="<?php echo $this->_vars['jobs']['sdistrict']; ?>
" />
		<div id="menu3" class="dmenu shadow">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_district,id:0,�б���:c_province"), $this); if (count((array)$this->_vars['c_province'])): foreach ((array)$this->_vars['c_province'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		<div id="menu3_s" class="dmenu shadow" style="display:none"></div>
		  </div>		  </td>
        </tr>
		   <tr>
          <td height="35" align="right" bgcolor="#FFFFFF" > ѧ��Ҫ��</td>
          <td bgcolor="#FFFFFF" >
		   <div>
		<input type="text" value="<?php echo $this->_vars['jobs']['education_cn']; ?>
"  readonly="readonly" name="education_cn" id="education_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="education" id="education" type="hidden" value="<?php echo $this->_vars['jobs']['education']; ?>
" />
		<div id="menu4" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_education,����:QS_education"), $this); if (count((array)$this->_vars['c_education'])): foreach ((array)$this->_vars['c_education'] as $this->_vars['list']): ?>
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
          <td height="35" align="right" bgcolor="#FFFFFF" >�������飺</td>
          <td bgcolor="#FFFFFF" >		  
		  <div>
		<input type="text" value="<?php echo $this->_vars['jobs']['experience_cn']; ?>
"  readonly="readonly" name="experience_cn" id="experience_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="experience" id="experience" type="hidden" value="<?php echo $this->_vars['jobs']['experience']; ?>
" />
		<div id="menu5" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_experience,�б���:c_experience"), $this); if (count((array)$this->_vars['c_experience'])): foreach ((array)$this->_vars['c_experience'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>		   </td>
		        </tr>
				
				
					<tr>
          <td height="35" align="right"  > ְλ��ǩ��</td>
		  <td  >
		  
		  
		<div>
		<input type="text" value="��ѡ��ְλ��ǩ"  readonly="readonly" name="tag_cn" id="tag_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="tag" id="tag" type="hidden" value="<?php echo $this->_vars['jobs']['tag']; ?>
" />
		<div id="menutag" class="tagmenu shadow">
		  <div class="tit">��׼��ѡ���ǩ����Ч�����ƸЧ�����ɶ�ѡ��������ѡ��5��</div>
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_jobtag,�б���:list"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
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
          <td height="35" align="right" bgcolor="#FFFFFF" >
		  <span style="color:#FF3300; font-weight:bold">*</span> ���ʷ�Χ��</td>
          <td bgcolor="#FFFFFF" >
		  <div>
		<input type="text" value="<?php echo $this->_vars['jobs']['wage_cn']; ?>
"  readonly="readonly" name="wage_cn" id="wage_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="wage" id="wage" type="hidden" value="<?php echo $this->_vars['jobs']['wage']; ?>
" />
		<div id="menu6" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_wage,�б���:c_wage"), $this); if (count((array)$this->_vars['c_wage'])): foreach ((array)$this->_vars['c_wage'] as $this->_vars['list']): ?>
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
          <td align="right" valign="top" bgcolor="#FFFFFF" >
		  <span style="color:#FF3300; font-weight:bold">*</span> ְλ������</td>
          <td bgcolor="#FFFFFF" >
		  <div><textarea name="contents" class="input_text_200_textarea" id="contents" style="width:450px; height:150px;" ><?php echo $this->_vars['jobs']['contents']; ?>
</textarea><br />
</div>
            <div style="line-height:30px; height:30px;"><span style="color: #0033CC; cursor:pointer" id="model">[�鿴����]</span>&nbsp;&nbsp;&nbsp;˵��������ϸ������ְλ�����ݿɰ�����ְλҪ�󣬸�λְ��ȡ�</div>			</td>
        </tr>
		<tr id="cp" style="display:none">
          <td align="right" valign="top" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; color:#FF0000"><strong>������</strong></td>
          <td bgcolor="#FFFFFF" ><strong>��λְ��</strong> </strong><br /> 
      1������˾ϵͳ��Ӫ�ṹ����������Ͷ���������Ŀ�߻�������Ͷ����Ŀ�����Լ�Ͷ�ʹ����ȹ����� <br /> 
      2�������ƶ���˾Ͷ����Ŀ���巢չ�滮��ϵͳ����Ͷ����Ŀ���ⲿ��Ӫ���գ�ָ�����շ�����ϵ�Ľ����� 
      <br />      <strong>��ְҪ�� </strong><br />
      1�����ù�����Ͷ�ʹ��������̹������������õ�רҵ˶ʿ������ѧ���� <br />
      2����Ϥ��ط��ɷ��漰Ͷ����Ŀʵʩ���ʲ�����ʹ��ù��̵����������� <br />
      3�����н�ǿ�Ĺ�ͨ����֯Э��������ѧϰ��������ǿ���ŶӺ������� <br />
      4��5 �꼰���ϴ�����ҵͶ�ʹ������飬��Ϥ�ʱ������� <br />
    5��Ӣ����˵��д������</td>
        </tr>
	
		
		<tr>
          <td height="35" align="center" bgcolor="#F9F9F9" ><strong>�ʼ�֪ͨ</strong></td>
          <td bgcolor="#F9F9F9" >(��������Ϊ�û�ע������)</td>
        </tr>
		<tr>
          <td height="35" align="right"  >�ʼ�֪ͨ��</td>
          <td  >
		  <label><input name="notify" type="radio" value="1" <?php if ($this->_vars['jobs']['contact']['notify'] == "1"): ?>checked="checked"<?php endif; ?> />����</label>
			&nbsp;&nbsp;&nbsp;          
            <label>
            <input type="radio" name="notify" value="0" <?php if ($this->_vars['jobs']['contact']['notify'] == "0"): ?>checked="checked"<?php endif; ?> />������</label> 
            <span style="color: #666666"> &nbsp;&nbsp;&nbsp;(���û������ְλʱ��ϵͳ�ᷢһ���ʼ��������鿴)</span></td>
        </tr>
		<tr>
          <td height="35" align="right"  >�������䣺</td>
          <td ><strong><?php echo $this->_vars['user']['email']; ?>
</strong>&nbsp;&nbsp;&nbsp;
		  <?php if ($this->_vars['user']['email_audit'] == "1"): ?>
			<a href="company_user.php?act=user_email" style="color:#009900"> [����֤]</a>
			<?php else: ?>
			<span style="color:#FF0000"> ��������δ��֤�����ܽ����ʼ�֪ͨ��<a href="company_user.php?act=user_email" style="color: #009900">[�����֤]</a></span>
			<?php endif; ?>
		  </td>
        </tr>
		<tr>
          <td height="35" align="center" bgcolor="#F9F9F9"><strong>��ϵ��ʽ</strong></td>
          <td bgcolor="#F9F9F9" >(Ĭ��Ϊ��ҵ��ϵ��ʽ)</td>
        </tr>
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> �� ϵ �ˣ�</td>
          <td bgcolor="#FFFFFF" ><input name="contact" type="text" class="input_text_200" id="contact" value="<?php echo $this->_vars['jobs']['contact']['contact']; ?>
" maxlength="20" /></td>
        </tr>
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold"> </span>��ϵ��QQ�ţ�</td>
          <td bgcolor="#FFFFFF" ><input name="qq" type="text" class="input_text_200" id="qq" maxlength="50"  value="<?php echo $this->_vars['jobs']['contact']['qq']; ?>
"/>
            <label></label></td>
        </tr>
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ��ϵ�绰��</td>
          <td bgcolor="#FFFFFF" ><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="35" value="<?php echo $this->_vars['jobs']['contact']['telephone']; ?>
" /></td>
        </tr>
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ��ϵ��ַ��</td>
          <td bgcolor="#FFFFFF" ><input name="address" type="text" class="input_text_200" id="address" maxlength="100"  value="<?php echo $this->_vars['jobs']['contact']['address']; ?>
"/></td>
        </tr>
		<tr>
          <td height="35" align="right" bgcolor="#FFFFFF" ><span style="color:#FF3300; font-weight:bold">*</span> ��ϵ���䣺</td>
          <td bgcolor="#FFFFFF" ><label>
          <input name="email" type="text" class="input_text_200" id="email" maxlength="80"  value="<?php echo $this->_vars['jobs']['contact']['email']; ?>
"/>
          </label></td>
       
      </table>
		 	 <input name="audit" type="hidden" value="<?php echo $this->_vars['jobs']['audit']; ?>
" />
			  <input name="id" type="hidden" value="<?php echo $this->_vars['jobs']['id']; ?>
" />
		   <?php if ($this->_vars['jobs']['add_mode'] == "2"): ?>
			  <!--�ײ�ģʽ -->
			   <input name="add_mode" type="hidden" id="add_mode" value="2" />
		<table width="100%" border="0" cellspacing="6" cellpadding="5" bgcolor="#F9F9F9" style="margin-top:10px; padding-bottom:10px;">
		  <tr>
			<td width="180" align="right" ><input name="" type="submit" value="ȷ���޸�" class="but100"/></td>
			<td align="left"><a style="color:#0066CC" href="Javascript:window.history.go(-1)" >[������һҳ]</a>
		      </td>
		  </tr>
		</table>
<?php else: ?>
<!--����ģʽ -->
<script type="text/javascript">
$(document).ready(function()
{
				//����Ĭ��
				check_day();
				total();
				
				$("#days").keyup(function(){
				check_day();
				total()
				});
	
				//���㷢��������Ӧ�Ļ���
				function check_day()
				{
					var jobs_daily = <?php echo $this->_vars['points']['jobs_daily']['value']; ?>
;
					if (jobs_daily>0)
					{
						var count_days_pon= $("#days").val()*jobs_daily;
						if ($("#days").val()==0)
						{
							$("#days_info").html("");
							$("#release_daysa").html(" ");
						}
						else
						{
						$("#days_info").html("�ӳ���Чʱ��&nbsp;"+$("#days").val()+"&nbsp;�죬�޸ĺ󽫿۳�&nbsp;<strong><span style=\"color:#FF3300\">"+count_days_pon+"</span></strong>&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
");
							$("#release_daysa").html(" �� �ӳ���Чʱ��&nbsp;&nbsp;"+$("#days").val()+"&nbsp;&nbsp;�죬�޸ĺ󽫿۳�&nbsp;&nbsp;<strong>"+count_days_pon+"</strong>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
<br />");
						}	
					}
				}
				//�����ܼƻ���
				function total()
				{
							var points = <?php echo $this->_vars['points_total']; ?>
;
							var jobs_edit = <?php echo $this->_vars['points']['jobs_edit']['value']; ?>
;
							var jobs_daily = <?php echo $this->_vars['points']['jobs_daily']['value']; ?>
;
							var input_days=$("#days").val();
							var day_pointst=input_days*jobs_daily;
							var totals=day_pointst+jobs_edit;
						if (jobs_edit>0)
						{
						$("#release_jobs_edit").html(" �� �޸ı�����Ϣ���۳�&nbsp;&nbsp;<strong>"+jobs_edit+"</strong>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
<br/>");
						}				
						$("#total").html("�޸ı�����Ϣ�ܼƿ۳�&nbsp;<span style=\"font-size:20px; color: #FF0000\" >"+totals+"</span>&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
����Ŀǰ����<strong style=\"color:#0033FF\"> <?php echo $this->_vars['points_total']; ?>
  </strong><?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
��<br />");
						$("#totals").val(<?php echo $this->_vars['points_total']; ?>
-totals);	
				}				
				$("#editsubmit").click(function()
				{
					if ($("#totals").val()<0)
					{
						<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
						alert("���Ļ��ֲ��㣬�������µķ�����߳�ֵ���֣�");
						<?php else: ?>
						alert("���Ļ��ֲ��㣬���ֵ���ٷ�����");
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
		   <table width="100%" border="0" cellpadding="10" cellspacing="0" class="link_lan" style="margin-top:10px; padding:0 0 10px 30px;" bgcolor="#F9F9F9">
            <tr>
              <td width="360" align="left" >
			  
			<div id="release_jobs_edit"></div>
            <div id="release_info"></div>
			<div id="release_daysa"></div>
			<div id="total"></div>
			
                <a href="company_service.php?act=points_report" target="_blank">[����������ϸ]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="company_service.php?act=points_rule" target="_blank">[�������ѹ���]</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="company_service.php?act=order_add">[���ֳ�ֵ]</a>
				
			  </td>
				 <td>
			 				 <input name="totals" id="totals" type="hidden" value="0" />
						  <table width="100%" border="0" cellspacing="6" cellpadding="5">
						  <tr>
							<td width="30%" ><input name="" type="button" value="ȷ���޸�" class="but100" id="editsubmit"/></td>
							<td align="left"><a style="color:#0066CC" href="Javascript:window.history.go(-1)" >[������һҳ]</a>
						    </td>
						  </tr>
						</table>
			  </td>
            </tr>
          </table>
		  <?php endif; ?>
		  
		  
		  
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