<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:26 �й���׼ʱ�� */ ?>
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
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/cache_classify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//����չ��
	$("#model").click(function(){	$("#cp").toggle()});
	//�˵���
	showmenulayer("#district_cn","#menu3","#district","#sdistrict",QS_city);
	showmenu("#nature_cn","#menu1","#nature","#Form1","#nature");
	showmenu("#trade_cn","#menu2","#trade","#Form1","#trade");	
	showmenu("#scale_cn","#menu4","#scale","#Form1","#scale");
	showmenu("#street_cn","#menu_street","#street","#Form1","#street");
	showmenu("#officebuilding_cn","#menu_officebuilding","#officebuilding","#Form1","#officebuilding");	
	//��·
	$("#street_alphabet a").click(function()
	{
		$("#streetkey").val('');
		$("#street_alphabet a").removeClass("select");
		$(this).addClass("select");
		var x=$(this).attr('id');
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_street.php", {"act":"alphabet","x":x,"listtype":"li"},
			function (data,textStatus)
			{	
				$("#street_showtit").html("����ĸΪ��<b>"+x+"</b>");
				$("#street_showli").html(data);
				$("#street_showli >li").hover(
				function()
				{
				$(this).css("background-color","#DAECF5");
				},
				function()
				{
				$(this).css("background-color","");
				}
				);
			}
		);		
	});
	$("#streetkeyso").click(function()
	{
		var str=$("#streetkey").val();
		$("#street_alphabet a").removeClass("select");
			$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_street.php", {"act":"key","listtype":"li","key":str},
				function (data,textStatus)
				{	
					$("#street_showtit").html("���������");
					$("#street_showli").html(data);
					$("#street_showli >li").hover(
					function()
					{
					$(this).css("background-color","#DAECF5");
					},
					function()
					{
					$(this).css("background-color","");
					}
					);
				}
			);	
	});
	//д��¥
	$("#officebuilding_alphabet a").click(function()
	{
		$("#officebuildingkey").val('');
		$("#officebuilding_alphabet a").removeClass("select");
		$(this).addClass("select");
		var x=$(this).attr('id');
		$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_officebuilding.php", {"act":"alphabet","x":x,"listtype":"li"},
			function (data,textStatus)
			{	
				$("#officebuilding_showtit").html("����ĸΪ��<b>"+x+"</b>");
				$("#officebuilding_showli").html(data);
				$("#officebuilding_showli >li").hover(
				function()
				{
				$(this).css("background-color","#DAECF5");
				},
				function()
				{
				$(this).css("background-color","");
				}
				);
			}
		);		
	});
	$("#officebuildingkeyso").click(function()
	{
		var str=$("#officebuildingkey").val();
		$("#officebuilding_alphabet a").removeClass("select");
			$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_officebuilding.php", {"act":"key","listtype":"li","key":str},
				function (data,textStatus)
				{	
					$("#officebuilding_showtit").html("���������");
					$("#officebuilding_showli").html(data);
					$("#officebuilding_showli >li").hover(
					function()
					{
					$(this).css("background-color","#DAECF5");
					},
					function()
					{
					$(this).css("background-color","");
					}
					);
				}
			);	
	});
	
});
//��֤
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   companyname:{
    required: true,
	minlength:4
   },
   nature:"required",
   trade:"required",
   district:"required",
   scale: "required",
   contact:{
   required: true,
   minlength:2
    },
   telephone:{
   required: true,
	minlength:7
   },
	   email: {
	   required:true,
	   email:true
	   },
	   address: {
	   required:true,
	    minlength:8
	   },
	   contents: {
	   required:true,
	    minlength:30,
		maxlength:2000
	   }
	},
    messages: {
    companyname: {
    required: "�����빫˾����",
    minlength: jQuery.format("��˾���Ʋ���С��{0}���ַ�")
   },
   nature: {
    required: jQuery.format("��ѡ����ҵ����")
   },
   trade: {
    required: jQuery.format("��ѡ��������ҵ")
   },
   district: {
    required: jQuery.format("��ѡ�����ڵ���")
   },
    scale: {
    required: jQuery.format("��ѡ����ҵ��ģ")
   },
   contact:{
    required:jQuery.format("��������ϵ��"),
	minlength:jQuery.format("��ϵ�˲���С��{0}���ַ�")
   },
   telephone: {
    required: jQuery.format("����д��ϵ�绰"),
	minlength:jQuery.format("��ϵ�绰����С��{0}���ַ�")
   },
   email: {
    required: jQuery.format("����д��������"),
	email: jQuery.format("����ȷ��д��������")
   },
   address: {
    required: jQuery.format("����д��ϵ��ַ"),
	minlength: jQuery.format("����ϸ��д��ϵ��ַ")
   },
   contents: {
    required: jQuery.format("����д��˾���"),
	minlength: jQuery.format("����д��˾��飬����С��{0}���ַ�"),
	maxlength:jQuery.format("��˾��鲻�ܴ���{0}���ַ���ʡ��һ�°�")
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
">��Ա����</a>&nbsp;>&nbsp;��˾��Ϣ&nbsp;>>������Ϣ
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_company/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>��ҵ������Ϣ</h1>
		</div>
		<form id="Form1" name="Form1" method="post" action="?act=company_profile_save"  >
      <table width="97%" border="0" cellpadding="4" cellspacing="0" style="margin:10px auto 0;">
        <tr>
          <td width="120" height="35" align="right"   ><span style="color:#FF3300; font-weight:bold">*</span>��˾���ƣ�</td>
          <td  ><input name="companyname" type="text" class="input_text_200" id="companyname" maxlength="30"  style="width:350px;" value="<?php echo $this->_vars['company_profile']['companyname']; ?>
" /></td>
        </tr>
        <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>��ҵ���ʣ�</td>
          <td  >		  
		   <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['nature_cn'], 'default', 'plugin', 1, "��ѡ����ҵ����"); ?>
"  readonly="readonly" name="nature_cn" id="nature_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="nature" id="nature" type="hidden" value="<?php echo $this->_vars['company_profile']['nature']; ?>
" />
		<div id="menu1" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_nature,����:QS_company_type"), $this); if (count((array)$this->_vars['c_nature'])): foreach ((array)$this->_vars['c_nature'] as $this->_vars['list']): ?>
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
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold;">*</span>������ҵ��</td>
          <td  >
		  <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['trade_cn'], 'default', 'plugin', 1, "��ѡ��������ҵ"); ?>
"  readonly="readonly" name="trade_cn" id="trade_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="trade" id="trade" type="hidden" value="<?php echo $this->_vars['company_profile']['trade']; ?>
" />
		<div id="menu2" class="dmenu shadow">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_trade,�б���:c_trade"), $this); if (count((array)$this->_vars['c_trade'])): foreach ((array)$this->_vars['c_trade'] as $this->_vars['list']): ?>
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
          <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>���ڵ�����</td>
          <td  >
		   <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['district_cn'], 'default', 'plugin', 1, "��ѡ�����ڵ���"); ?>
"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="district" id="district" type="hidden" value="<?php echo $this->_vars['company_profile']['district']; ?>
" />
		<input name="sdistrict" id="sdistrict" type="hidden" value="<?php echo $this->_vars['company_profile']['sdistrict']; ?>
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
		  </div>
		  </td>
        </tr>
		<!--<tr>
          <td height="35" align="right"  >���ڵ�·��</td>
          <td  >
		  
		    <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['street_cn'], 'default', 'plugin', 1, "δ��ע��·"); ?>
"  readonly="readonly" name="street_cn" id="street_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="street" id="street" type="hidden" value="<?php echo $this->_vars['company_profile']['street']; ?>
" />
		<div id="menu_street" class="somenu shadow">
		  <div class="sobox">
		   <div class="tit">��ʾ��������˾���ڵĵ�·�޷����·��ҵ������Թ������������վ����Ա</div>		   
		   <div class="left">����ĸ������</div>
		   <div class="right link_bk" id="street_alphabet">
		   	  <a href="javascript:void(0);" id="a">A</a>
			  <a href="javascript:void(0);" id="b">B</a>
			  <a href="javascript:void(0);" id="c">C</a>
			  <a href="javascript:void(0);" id="d">D</a>
			  <a href="javascript:void(0);" id="e">E</a>
			  <a href="javascript:void(0);" id="f">F</a>
			  <a href="javascript:void(0);" id="g">G</a>
			  <a href="javascript:void(0);" id="h">H</a>
			  <a href="javascript:void(0);" id="j">J</a>
			  <a href="javascript:void(0);" id="k">K</a>
			  <a href="javascript:void(0);" id="l">L</a>
			  <a href="javascript:void(0);" id="m">M</a>
			  <a href="javascript:void(0);" id="n">N</a>
			  <a href="javascript:void(0);" id="o">O</a>
			  <a href="javascript:void(0);" id="p">P</a>
			  <a href="javascript:void(0);" id="q">Q</a>
			  <a href="javascript:void(0);" id="r">R</a>
			  <a href="javascript:void(0);" id="s">S</a>
			  <a href="javascript:void(0);" id="t">T</a>
			  <a href="javascript:void(0);" id="w">W</a>
			  <a href="javascript:void(0);" id="x">X</a>
			  <a href="javascript:void(0);" id="y">Y</a>
			  <a href="javascript:void(0);" id="z">Z</a>
			  <div class="clear"></div>
		   </div>
		   <div class="left"  style=" padding-top:16px;">���ؼ��ּ�����</div>
		    <div class="right">
		      <div class="inputbox"> <input name="key" id="streetkey"type="text" /></div>			  
		      <div class="inputsub"><a href="javascript:void(0);" id="streetkeyso">ȷ��</a></div>
			  <div class="clear"></div>
		    </div>
	 		<div class="clear"></div>
		  </div>
					<div class="showli">
						<div class="left" id="street_showtit">���ŵ�·��</div>
						<div class="right">
								<ul id="street_showli">
								<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_street,�б���:list,��ʾ��Ŀ:20"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
								<li id="<?php echo $this->_vars['list']['c_id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
								<?php endforeach; endif; ?>
								</ul>
						</div>
						<div class="clear"></div>
					</div>
		</div>
		  </div>
		  </td>
        </tr>-->
		<!--<tr>
          <td height="35" align="right"  >����д��¥��</td>
          <td  >
 
		      <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['officebuilding_cn'], 'default', 'plugin', 1, "δ��עд��¥"); ?>
"  readonly="readonly" name="officebuilding_cn" id="officebuilding_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="officebuilding" id="officebuilding" type="hidden" value="<?php echo $this->_vars['company_profile']['officebuilding']; ?>
" />
		<div id="menu_officebuilding" class="somenu shadow">
		  <div class="sobox">
		   <div class="tit">��ʾ��������˾���ڵ�д��¥�޷����·��ҵ������Թ������������վ����Ա</div>		   
		   <div class="left">����ĸ������</div>
		   <div class="right link_bk" id="officebuilding_alphabet">
		   	  <a href="javascript:void(0);" id="a">A</a>
			  <a href="javascript:void(0);" id="b">B</a>
			  <a href="javascript:void(0);" id="c">C</a>
			  <a href="javascript:void(0);" id="d">D</a>
			  <a href="javascript:void(0);" id="e">E</a>
			  <a href="javascript:void(0);" id="f">F</a>
			  <a href="javascript:void(0);" id="g">G</a>
			  <a href="javascript:void(0);" id="h">H</a>
			  <a href="javascript:void(0);" id="j">J</a>
			  <a href="javascript:void(0);" id="k">K</a>
			  <a href="javascript:void(0);" id="l">L</a>
			  <a href="javascript:void(0);" id="m">M</a>
			  <a href="javascript:void(0);" id="n">N</a>
			  <a href="javascript:void(0);" id="o">O</a>
			  <a href="javascript:void(0);" id="p">P</a>
			  <a href="javascript:void(0);" id="q">Q</a>
			  <a href="javascript:void(0);" id="r">R</a>
			  <a href="javascript:void(0);" id="s">S</a>
			  <a href="javascript:void(0);" id="t">T</a>
			  <a href="javascript:void(0);" id="w">W</a>
			  <a href="javascript:void(0);" id="x">X</a>
			  <a href="javascript:void(0);" id="y">Y</a>
			  <a href="javascript:void(0);" id="z">Z</a>
			  <div class="clear"></div>
		   </div>
		   <div class="left"  style=" padding-top:16px;">���ؼ��ּ�����</div>
		    <div class="right">
		      <div class="inputbox"> <input name="key" id="officebuildingkey"type="text" /></div>			  
		      <div class="inputsub"><a href="javascript:void(0);" id="officebuildingkeyso">ȷ��</a></div>
			  <div class="clear"></div>
		    </div>
	 		<div class="clear"></div>
		  </div>
					<div class="showli">
						<div class="left" id="officebuilding_showtit">����д��¥��</div>
						<div class="right">
								<ul id="officebuilding_showli">
								<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_officebuilding,�б���:list,��ʾ��Ŀ:20"), $this); if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
								<li id="<?php echo $this->_vars['list']['c_id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
								<?php endforeach; endif; ?>
								</ul>
						</div>
						<div class="clear"></div>
					</div>
		</div>
		  </div>
		  </td>
        </tr>-->
		<tr>
          <td height="35" align="right" ><span style="color:#FF3300; font-weight:bold">*</span>��˾��ģ��</td>
          <td  >
		  <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['scale_cn'], 'default', 'plugin', 1, "��ѡ��˾��ģ"); ?>
"  readonly="readonly" name="scale_cn" id="scale_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="scale" id="scale" type="hidden" value="<?php echo $this->_vars['company_profile']['scale']; ?>
" />
		<div id="menu4" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_scale,�б���:c_scale"), $this); if (count((array)$this->_vars['c_scale'])): foreach ((array)$this->_vars['c_scale'] as $this->_vars['list']): ?>
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
          <td height="35" align="right"  >ע���ʽ�</td>
          <td  ><input name="registered" type="text" class="input_text_200" id="registered" maxlength="20" value="<?php echo $this->_vars['company_profile']['registered']; ?>
" style="width:80px;"/> ��
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label><input name="currency" type="radio" value="�����"  <?php if ($this->_vars['company_profile']['currency'] == '' || $this->_vars['company_profile']['currency'] == "�����"): ?> checked="checked"<?php endif; ?> />�����</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="currency" value="��Ԫ" <?php if ($this->_vars['company_profile']['currency'] == "��Ԫ"): ?>s checked="checked"<?php endif; ?>/>��Ԫ</label>
</td>
        </tr>
        <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>�� ϵ �ˣ�</td>
          <td  ><input name="contact" type="text" class="input_text_200" id="contact" maxlength="30" value="<?php echo $this->_vars['company_profile']['contact']; ?>
"/></td>
        </tr>
		       <tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>��ϵ�绰��</td>
          <td  ><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="40" value="<?php echo $this->_vars['company_profile']['telephone']; ?>
"/></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>��ϵ���䣺</td>
          <td  ><input name="email" type="text" class="input_text_200" id="email" maxlength="80" value="<?php echo $this->_vars['company_profile']['email']; ?>
"/></td>
        </tr>
        <tr>
          <td height="35" align="right" >��˾��ַ��</td>
          <td  ><input name="website" type="text" class="input_text_200" id="website" maxlength="80" value="<?php echo $this->_vars['company_profile']['website']; ?>
"/></td>
        </tr>
		<tr>
          <td height="35" align="right"  ><span style="color:#FF3300; font-weight:bold">*</span>ͨѶ��ַ��</td>
          <td  ><input name="address" type="text" class="input_text_200" id="address" maxlength="80"  style="width:447px;" value="<?php echo $this->_vars['company_profile']['address']; ?>
"/></td>
        </tr>
        <tr>
          <td align="right" valign="top">
		  <span style="color:#FF3300; font-weight:bold">*</span> ��˾���ܣ�</td>
          <td  >
		  <textarea name="contents" class="input_text_200_textarea" id="contents" style="width:450px; height:150px; margin:6px 0;" ><?php echo $this->_vars['company_profile']['contents']; ?>
</textarea>
            <br />
            <span id="model" style="color: #0033CC; margin-right:200px; cursor:pointer;">[�鿴����]</span></td>
        </tr>
		<tr id="cp" style="display:none">
          <td align="right" valign="top" bgcolor="#E4F2F8" style="color:#FF0000">��˾��鷶����</td>
          <td height="160" valign="top" bgcolor="#E4F2F8" style="line-height:180%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XXX�������޹�˾������2000��,��XXXͶ�����޹�˾������XXX��˾�����˽������������ҵ,����������XXXר������,רҵ����XX�о�����������Ӧ��.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��˾2002�걻XX�϶�Ϊ���¼�����ҵ,��Ŀǰ����Ψһ��һ�Ҽ�����XXX������X����������,��Ҫ��Ʒ�и�XX,XX�в�ƷXXX��.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ŀǰ,XX��˾ӵ�����ʲ�X��Ԫ,�����ӹ�����ռ��XX��Ķ,����һ����XX����ֵ�XX��������,������Ӫ������Ȩ,��Ŀǰ�������ʵ��XX������Ӧ��֮һ.<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;���Ƚ�,����,���õļ�������XX��ҵ ,��X��˾����ҵ��ּ,��˾�������¼�����ͬʱ,���ϸ���XXXʵ�������Ӧ�÷�������о����ƹ�����XXX,����ȫ��,����������XX��˾�ķ�չĿ��,ĿǰXXX��˾�Ĳ�Ʒ����X����ʹ����,�Ѿ������˽���,�㽭,����,����,����,����,�Ĵ�,����,�㶫��ʮ���ʡ��,ͬʱ��˾������XXX�Ѿ���������,���ڶ���˹,������˹̹��ʼӦ��,�ѳɹ���������г�.</td>
        </tr>		
        <!--<tr>
          <td align="right" valign="top" >&nbsp;</td>
          <td> 
           <label><input name="yellowpages"  type="checkbox" value="1" <?php if ($this->_vars['company_profile']['yellowpages'] <> '0'): ?>checked="checked"<?php endif; ?> />
           ��˾��Ϣ����վ��ҳ����ʾ</label>
		   </td>
        </tr>-->
		<tr>
          <td align="right" valign="top" >&nbsp;</td>
          <td height="160" valign="top" ><br />
            <input type="submit" name="Submit" value="����"  class="user_submit" />            
          &nbsp;</td>
        </tr>
      </table>
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