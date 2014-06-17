<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-17 18:33 中国标准时间 */ ?>
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
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//计算获得积分数量
	$("#amount").keyup(function(){	
		if((/^(\+|-)?\d+$/.test($(this).val())) && $(this).val()>=<?php echo $this->_vars['QISHI']['payment_min']; ?>
)
		{
		$("#count").css("display","");	
		$("#show_val").html("充值金额为<strong style=\"color:#003399\">&nbsp;&nbsp;"+$(this).val()+"&nbsp;&nbsp;</strong>元，可获得：&nbsp;&nbsp;<span style=\"color: #009900; font-size:22px; font-style:italic\">"+$(this).val()*<?php echo $this->_vars['QISHI']['payment_rate']; ?>
+"</span>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
");   
		}
		else
		{
		$("#count").css("display","none");	
		}	
	});	
})
//验证
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   amount:{
    required: true,
	digits:true,
	min:<?php echo $this->_vars['QISHI']['payment_min']; ?>

   },
   payment_name:{
    required: true
   }
	},
    messages: {
    amount: {
    required: "请输入充值金额",
	digits: "金额必须是整数",
    min: jQuery.format("单笔金额不能低于{0}元")
   },
   payment_name:{
    required: "请选择支付方式"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( $("#pay_er"));
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
">会员中心</a>&nbsp;>&nbsp;服务中心&nbsp;>&nbsp;充值
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="173" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>充值</h1>
		</div>
		<div class="us_list_tip link_lan"  style="margin-top:15px;">
		您目前还有 <span><?php echo $this->_vars['points']; ?>
</span> <?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>

		</div>
	<form id="Form1" name="Form1" method="post" action="?act=order_add_save"  >
      <table width="97%" border="0" cellpadding="4" cellspacing="0"  style="margin-top:5px;" >
        <tr>
          <td width="18%" height="30" align="right" bgcolor="#FFFFFF" style="border-bottom:1px  #93C4DB dashed">充值金额：</td>
          <td   bgcolor="#FFFFFF" style="border-bottom:1px  #93C4DB dashed">
		  <input name="amount" type="text"  id="amount" maxlength="8"   class="input_text_200"/>
            元
            (单笔金额不能低于<?php echo $this->_vars['QISHI']['payment_min']; ?>
 元)&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0033FF"><strong>1</strong>&nbsp;元&nbsp;=&nbsp;<strong><?php echo $this->_vars['QISHI']['payment_rate']; ?>
</strong>&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier'];  echo $this->_vars['QISHI']['points_byname']; ?>
</span> </td>
        </tr>
        <tr id="count" style="display:none;">
          <td height="30" align="right" bgcolor="#FFFFFF" style="border-bottom:1px  #93C4DB dashed">&nbsp;</td>
          <td bgcolor="#FFFFFF" style="border-bottom:1px  #93C4DB dashed">
		  <span id="show_val"></span>
		  &nbsp;</td>
        </tr>
		        <tr>
          <td  align="right" bgcolor="f9f9f9"  >选择支付方式：</td>
          <td bgcolor="f9f9f9" id="pay_er" >&nbsp;</td>
        </tr>
        <tr>
          <td height="30" colspan="2" valign="top" bgcolor="f9f9f9" style="border-bottom:1px  #93C4DB dashed;padding-left:125px;">
		  <?php if (isset($this->_sections['payment'])) unset($this->_sections['payment']);
$this->_sections['payment']['name'] = 'payment';
$this->_sections['payment']['loop'] = is_array($this->_vars['payment']) ? count($this->_vars['payment']) : max(0, (int)$this->_vars['payment']);
$this->_sections['payment']['show'] = true;
$this->_sections['payment']['max'] = $this->_sections['payment']['loop'];
$this->_sections['payment']['step'] = 1;
$this->_sections['payment']['start'] = $this->_sections['payment']['step'] > 0 ? 0 : $this->_sections['payment']['loop']-1;
if ($this->_sections['payment']['show']) {
	$this->_sections['payment']['total'] = $this->_sections['payment']['loop'];
	if ($this->_sections['payment']['total'] == 0)
		$this->_sections['payment']['show'] = false;
} else
	$this->_sections['payment']['total'] = 0;
if ($this->_sections['payment']['show']):

		for ($this->_sections['payment']['index'] = $this->_sections['payment']['start'], $this->_sections['payment']['iteration'] = 1;
			 $this->_sections['payment']['iteration'] <= $this->_sections['payment']['total'];
			 $this->_sections['payment']['index'] += $this->_sections['payment']['step'], $this->_sections['payment']['iteration']++):
$this->_sections['payment']['rownum'] = $this->_sections['payment']['iteration'];
$this->_sections['payment']['index_prev'] = $this->_sections['payment']['index'] - $this->_sections['payment']['step'];
$this->_sections['payment']['index_next'] = $this->_sections['payment']['index'] + $this->_sections['payment']['step'];
$this->_sections['payment']['first']	  = ($this->_sections['payment']['iteration'] == 1);
$this->_sections['payment']['last']	   = ($this->_sections['payment']['iteration'] == $this->_sections['payment']['total']);
?>
		    <div style=" margin-bottom:10px; margin-top:2px;color: #666666" onmousemove="this.style.color='#FF0000'" onmouseout="this.style.color='#666666'">
		      <label>
		        <input type="radio" name="payment_name" value="<?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['typename']; ?>
" id="payment_name"/>
		        <img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
include/payment/logo/<?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['typename']; ?>
.gif" width="85" height="30" align="absmiddle" /> (<?php echo $this->_vars['payment'][$this->_sections['payment']['index']]['p_introduction']; ?>
)</label>
		        </div>
		    <?php endfor; endif; ?></td>
          </tr>
        <tr>
          <td  >
           </td>
          <td height="50"  bgcolor="#FFFFFF" ><input type="image" name="imageField" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/15.gif" />
</td>
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
