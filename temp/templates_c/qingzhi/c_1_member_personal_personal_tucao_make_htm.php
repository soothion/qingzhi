<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 22:21 �й���׼ʱ�� */ ?>
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
<script  charset="utf-8" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/kindeditor/kindeditor.js"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#tabshow li:nth-child(2)>a").addClass("selected");
	//����չ��
	$("#model1").click(function(){	$("#ex1").toggle()});
	$("#model2").click(function(){	$("#ex2").toggle()});
	//�ύ����
	$("#submitsave").click(function(){
	$('#Form1').submit();
	})
});
//��֤
$(document).ready(function() {
 $("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   title:{
    required: true,
	minlength:2,
	maxlength:50
   },
    content:{
    required: true,
	minlength:10,
   }
	},
	
    messages: {
    title: {
    required: "�������²۱���",
	minlength: jQuery.format("�����ַ�����С��{0}���ַ�"),
	maxlength: jQuery.format("�����ַ����ܴ���{0}���ַ�")
   	},
    content: {
    required: "�������²�����",
	minlength: jQuery.format("�����ַ�����С��{0}���ַ�")
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
">��Ա����</a>&nbsp;>&nbsp;�²۹���&nbsp;>&nbsp;��Ҫ�²�
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
		  <h1>��Ҫ�²�</h1>
		</div>
	
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="22" valign="top">
		  <form id="Form1" name="Form1" method="post" action="?act=make_save"  >
		  <table width="100%" border="0" cellspacing="0" cellpadding="4" style=" line-height:180%;">
            <tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;"><?php echo $this->_vars['action']; ?>
�²�</span> <span style="color:#999999">(��<strong  style="color:#FF0000">*</strong>��Ϊ����)</span></td>
              </tr>
			  <tr>
              <td width="100" height="10"></td>
              <td></td>
            </tr>
            <tr>
              <td width="100" height="40" align="right" valign="top"><strong  style="color:#FF0000">*</strong>�²۱��⣺</td>
              <td><input name="title" class="input_text_200" id="specialty" style="width:320px;" value="<?php echo $this->_vars['tucao']['title']; ?>
"><br />
</td>
            </tr>
            <tr>
              <td width="100" height="40" align="right" valign="top"><strong style="color:#FF0000">*</strong>�²����ݣ�</td>
              <td><textarea name="content" id="content" cols="80" rows="25"><?php echo $this->_vars['tucao']['content']; ?>
</textarea><br />
			  		<script>
				KE.show({
				id: 'content',
				//skinType : 'tinymce',
				urlType : '',
				filterMode : true,
				//allowFileManager : true,
				afterCreate : function(id) {
					KE.event.add(KE.$('#Form1'), 'submit', function() {
						KE.util.setData(id);
					});
				}
			});
		</script>
</td>
            </tr>
            <tr>
              <td width="100" height="23" align="right" valign="top"><strong style="color:#FF0000">*</strong>�����ˣ�</td>
              <td><?php echo $this->_vars['user']['username']; ?>
&nbsp <input name="niming" type="checkbox" value="1" <?php if ($this->_vars['tucao']['username'] == '����'): ?>checked="checked"<?php endif; ?>>&nbsp &nbsp����<br />
</td>
            </tr>
			<tr>
              <td width="100" height="23" align="right">&nbsp;</td>
              <td>��˵�������еĲ��죡<br />
			    <span style="color:#0066CC; cursor:pointer" id="model1" >���� ��</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0066CC;cursor:pointer"  id="model2">���� ��</span></td>
            </tr>
			<tr id="ex1" style=" display:none">
              <td width="100" height="23" align="right" valign="top" bgcolor="#F5FAFC" style="color:#FF0000;border-top:1px #ACC9D0 dashed" >�����٣�</td>
              <td bgcolor="#F5FAFC" style="border-top:1px #ACC9D0 dashed;">�ϰ��Ǹ�SB�����˵��������<br />
                ��ǷԱ�����ʣ�û�м���<br />
                �ӹ������Ӱ�Ѱ���ľ��....</td>
            </tr>
			<tr id="ex2" style=" display:none">
              <td width="100" height="23" align="right" valign="top" bgcolor="#F5FAFC" style="color:#FF0000;border-top:1px #ACC9D0 dashed">�����ڣ�</td>
              <td bgcolor="#F5FAFC" style="border-top:1px #ACC9D0 dashed;">���Ӳ������SB��˾�ᷢչ��ȥ������͹��ŵ��ա�<br />
               ȫ�����ϰ���������߹ܣ���ͨԱ������վ�ɣ�<br />
                ���ĵĽ����ƶȣ���������</td>
            </tr>
			<input name="id" type="hidden" id="tid" value="<?php echo $this->_vars['tucao']['id']; ?>
" />
			 </table>
			  </form>
			<table width="100%" border="0" cellspacing="0" cellpadding="4" style="margin-bottom:150px; line-height:180%;" >
            <tr>
              <td height="60" align="center" style="border-top:1px #ACC9D0 dashed;">

			  <input type="submit" name="submitsave" id="submitsave" value="����"  class="user_submit"/>
			   &nbsp;&nbsp;
			   <input type="button" name="next" value="����"  class="user_submit" onclick="history.back()"/>
			  </td>
            </tr>
          </table>

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