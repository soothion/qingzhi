<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-14 18:46 �й���׼ʱ�� */ ?>
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
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//����
	$("#tabshow li:nth-child(4)>a").addClass("selected");
})
//��֤
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   feedback:{
    required: true,
	minlength:10,
    maxlength:600
   }
	},
    messages: {
    feedback: {
    required: "�������������",
    minlength: jQuery.format("���ݲ���С��{0}���ַ�"),
	maxlength: jQuery.format("���ݲ��ܴ���{0}���ַ�")
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
<head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
  <div class="page_location link_bk"> ��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;�˻�����&nbsp;>&nbsp;������� </div>
  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
    <tr>
      <td width="183" valign="top" class="link_bk"> <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> </td>
      <td valign="top"><div class="user_right_box">
          <div class="user_right_top_tit_bg">
            <h1>�������</h1>
          </div>
          <form action="?act=feedback_save" method="post" id="Form1" >
            <table width="90%" border="0" align="center" cellpadding="3" cellspacing="3" style=" margin-bottom:30px;">
              <tr>
                <td width="100" height="50" align="right">�������ͣ�</td>
                <td  ><label>
                    <input name="infotype" type="radio" value="1" checked="checked" />
                    ���</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label>
                    <input type="radio" name="infotype" value="2" />
                    ����</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label>
                    <input type="radio" name="infotype" value="3" />
                    ����</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <label>
                    <input type="radio" name="infotype" value="4" />
                    Ͷ��</label></td>
              </tr>
              <tr>
                <td align="right" valign="top">�������ݣ�</td>
                <td><textarea name="feedback"  id="feedback" style="width:380px; height:100px; padding:4px;margin-top:5px; border-top:1px solid #666; border-bottom:1px solid #ccc; border-left:1px solid #666; border-right:1px solid #ccc; margin-bottom:6px;" ></textarea>
                  <br /></td>
              </tr>
              <tr>
                <td align="right" valign="top">&nbsp;</td>
                <td><input type="submit" name="Submit" value="�ύ"  class="user_submit" /></td>
              </tr>
            </table>
          </form>
          <?php if ($this->_vars['feedback']): ?>
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="link_lan">
            <tr>
              <td height="40" bgcolor="#DBF1F7" style=" border-bottom:1px #CCCCCC dashed;border-top:1px #CCCCCC dashed;padding-left:10px;">&nbsp;&nbsp;<strong>���ķ���</strong></td>
            </tr>
            <?php if (isset($this->_sections['feedback'])) unset($this->_sections['feedback']);
$this->_sections['feedback']['name'] = 'feedback';
$this->_sections['feedback']['loop'] = is_array($this->_vars['feedback']) ? count($this->_vars['feedback']) : max(0, (int)$this->_vars['feedback']);
$this->_sections['feedback']['show'] = true;
$this->_sections['feedback']['max'] = $this->_sections['feedback']['loop'];
$this->_sections['feedback']['step'] = 1;
$this->_sections['feedback']['start'] = $this->_sections['feedback']['step'] > 0 ? 0 : $this->_sections['feedback']['loop']-1;
if ($this->_sections['feedback']['show']) {
	$this->_sections['feedback']['total'] = $this->_sections['feedback']['loop'];
	if ($this->_sections['feedback']['total'] == 0)
		$this->_sections['feedback']['show'] = false;
} else
	$this->_sections['feedback']['total'] = 0;
if ($this->_sections['feedback']['show']):

		for ($this->_sections['feedback']['index'] = $this->_sections['feedback']['start'], $this->_sections['feedback']['iteration'] = 1;
			 $this->_sections['feedback']['iteration'] <= $this->_sections['feedback']['total'];
			 $this->_sections['feedback']['index'] += $this->_sections['feedback']['step'], $this->_sections['feedback']['iteration']++):
$this->_sections['feedback']['rownum'] = $this->_sections['feedback']['iteration'];
$this->_sections['feedback']['index_prev'] = $this->_sections['feedback']['index'] - $this->_sections['feedback']['step'];
$this->_sections['feedback']['index_next'] = $this->_sections['feedback']['index'] + $this->_sections['feedback']['step'];
$this->_sections['feedback']['first']	  = ($this->_sections['feedback']['iteration'] == 1);
$this->_sections['feedback']['last']	   = ($this->_sections['feedback']['iteration'] == $this->_sections['feedback']['total']);
?>
            <tr>
              <td height="35" style="padding-left:15px;">���ݣ�<?php echo $this->_vars['feedback'][$this->_sections['feedback']['index']]['feedback']; ?>
 <span style="color:#999999">(<?php echo $this->_run_modifier($this->_vars['feedback'][$this->_sections['feedback']['index']]['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
)</span> <a href="?act=del_feedback&id=<?php echo $this->_vars['feedback'][$this->_sections['feedback']['index']]['id']; ?>
">[ɾ��]</a></td>
            </tr>
            <tr>
              <td height="35" style=" border-bottom:1px #CCCCCC  solid; padding-left:15px;">����Ա�ظ���
                <?php if ($this->_vars['feedback'][$this->_sections['feedback']['index']]['reply']): ?>
                <span style="color:#f00"><?php echo $this->_vars['feedback'][$this->_sections['feedback']['index']]['reply']; ?>
</span> <span style="color:#999999">(<?php echo $this->_run_modifier($this->_vars['feedback'][$this->_sections['feedback']['index']]['feedbacktime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
)</span> <?php else: ?> <span style="color:#999999">����Աδ�ظ�</span> <?php endif; ?> </td>
            </tr>
            <?php endfor; endif; ?>
          </table>
          <?php endif; ?> </div></td>
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
