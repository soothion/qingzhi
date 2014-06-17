<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 22:21 中国标准时间 */ ?>
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
	//范例展开
	$("#model1").click(function(){	$("#ex1").toggle()});
	$("#model2").click(function(){	$("#ex2").toggle()});
	//提交表单】
	$("#submitsave").click(function(){
	$('#Form1').submit();
	})
});
//验证
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
    required: "请输入吐槽标题",
	minlength: jQuery.format("输入字符不能小于{0}个字符"),
	maxlength: jQuery.format("输入字符不能大于{0}个字符")
   	},
    content: {
    required: "请输入吐槽内容",
	minlength: jQuery.format("输入字符不能小于{0}个字符")
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
当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a>&nbsp;>&nbsp;吐槽管理&nbsp;>&nbsp;我要吐槽
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
		  <h1>我要吐槽</h1>
		</div>
	
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="22" valign="top">
		  <form id="Form1" name="Form1" method="post" action="?act=make_save"  >
		  <table width="100%" border="0" cellspacing="0" cellpadding="4" style=" line-height:180%;">
            <tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;"><?php echo $this->_vars['action']; ?>
吐槽</span> <span style="color:#999999">(带<strong  style="color:#FF0000">*</strong>的为必填)</span></td>
              </tr>
			  <tr>
              <td width="100" height="10"></td>
              <td></td>
            </tr>
            <tr>
              <td width="100" height="40" align="right" valign="top"><strong  style="color:#FF0000">*</strong>吐槽标题：</td>
              <td><input name="title" class="input_text_200" id="specialty" style="width:320px;" value="<?php echo $this->_vars['tucao']['title']; ?>
"><br />
</td>
            </tr>
            <tr>
              <td width="100" height="40" align="right" valign="top"><strong style="color:#FF0000">*</strong>吐槽内容：</td>
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
              <td width="100" height="23" align="right" valign="top"><strong style="color:#FF0000">*</strong>分享人：</td>
              <td><?php echo $this->_vars['user']['username']; ?>
&nbsp <input name="niming" type="checkbox" value="1" <?php if ($this->_vars['tucao']['username'] == '匿名'): ?>checked="checked"<?php endif; ?>>&nbsp &nbsp匿名<br />
</td>
            </tr>
			<tr>
              <td width="100" height="23" align="right">&nbsp;</td>
              <td>请说出您心中的不快！<br />
			    <span style="color:#0066CC; cursor:pointer" id="model1" >范例 ①</span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0066CC;cursor:pointer"  id="model2">范例 ②</span></td>
            </tr>
			<tr id="ex1" style=" display:none">
              <td width="100" height="23" align="right" valign="top" bgcolor="#F5FAFC" style="color:#FF0000;border-top:1px #ACC9D0 dashed" >范例①：</td>
              <td bgcolor="#F5FAFC" style="border-top:1px #ACC9D0 dashed;">老板是个SB，光会说不会做；<br />
                拖欠员工工资，没有假期<br />
                加工不给加班费啊有木有....</td>
            </tr>
			<tr id="ex2" style=" display:none">
              <td width="100" height="23" align="right" valign="top" bgcolor="#F5FAFC" style="color:#FF0000;border-top:1px #ACC9D0 dashed">范例②：</td>
              <td bgcolor="#F5FAFC" style="border-top:1px #ACC9D0 dashed;">老子不信这个SB公司会发展下去，明天就关门倒闭。<br />
               全是他老板的亲属当高管，普通员工靠边站吧！<br />
                恶心的晋升制度！！！！！</td>
            </tr>
			<input name="id" type="hidden" id="tid" value="<?php echo $this->_vars['tucao']['id']; ?>
" />
			 </table>
			  </form>
			<table width="100%" border="0" cellspacing="0" cellpadding="4" style="margin-bottom:150px; line-height:180%;" >
            <tr>
              <td height="60" align="center" style="border-top:1px #ACC9D0 dashed;">

			  <input type="submit" name="submitsave" id="submitsave" value="保存"  class="user_submit"/>
			   &nbsp;&nbsp;
			   <input type="button" name="next" value="返回"  class="user_submit" onclick="history.back()"/>
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