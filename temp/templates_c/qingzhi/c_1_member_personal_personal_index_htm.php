<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_jobs_list.php'); $this->register_function("qishi_jobs_list", "tpl_function_qishi_jobs_list",false);  require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 11:14 ?D1��������?����?? */ ?>
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
js/jquery.vtip-min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function()
{

	$("#tabshow li:nth-child(1)>a").addClass("selected");
	
	$("#show_avatars_url").mouseover(function() {
		$(".avatars_edit").show();
		$("#show_avatars_url").mouseout(function() {
		$(".avatars_edit").hide();
		});	
	});
<?php if ($this->_vars['count_resume'] == "0"): ?>
dialog("ϵͳ��ʾ","text:<div style=\" height:150px; font-size:14px;line-height:400%;font-weight:bold;text-align:center\">����û�д������������������������������úù��������ţ�<br/><a href=\"personal_resume.php?act=make1\"><img src=\"<?php echo $this->_vars['QISHI']['site_template']; ?>
images/83.gif\" alt=\"��������\"  border=\"0\"  /></a></div>","500px","auto","");
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
  <div class="page_location link_bk"> ��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> </div>
  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
    <tr>
      <td width="183" valign="top" class="link_bk"> <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> </td>
      <td valign="top" class="link_lan"><div class="com_user_box">
          <div class="titbox">
            <div class="lefttit"><u>��ӭ��<?php echo $this->_vars['user']['username']; ?>
</u>(uid:<?php echo $this->_vars['user']['uid']; ?>
)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="personal_user.php?act=userprofile">��Ա����</a></div>
            <div class="rightip">�ϴε�¼ʱ�䣺<?php echo $this->_run_modifier($this->_vars['user']['last_login_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ϴε�¼IP��<?php echo $this->_vars['user']['last_login_ip']; ?>
</div>
            <div class="clear"></div>
          </div>
          <table width="98%" border="0" align="center" cellpadding="0" cellspacing="5" >
            <tr>
              <td width="120"><table border="0" cellpadding="0" cellspacing="1" bgcolor="#CDE6F3" style="margin:3px; padding:3px;" >
                  <tr>
                    <td bgcolor="#FFFFFF"  ><div style=" position:relative"  id="show_avatars_url"> <a href="personal_user.php?act=avatars"> <?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/no_photo.gif" border="0"  width="100" height="100" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0"   width="100" height="100"  /><?php endif; ?></a>
                        <div class="avatars_edit">�޸�ͷ��</div>
                      </div></td>
                  </tr>
                </table></td>
              <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"  style="color:#666666">
                  <tr>
                    <td  style=" padding-top:22px;" class="butimglink"> ��֤״̬��&nbsp;
                      <!--<?php if ($this->_vars['sms']['open'] == "1"): ?>			
                      <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?> <a href="personal_user.php?act=user_mobile" class="vtip" title="�ֻ�����֤���ֻ��ţ�<?php echo $this->_vars['user']['mobile']; ?>
" style=" background-position: 0px -33px;">�ֻ�����֤</a> <?php else: ?> <a href="personal_user.php?act=user_mobile" class="vtip" title="�ֻ�δ��֤<br/>��֤ͨ������ʹ���ֻ��ŵ�¼��վ�����ܽ��ո������֪ͨ��" style=" background-position: 0px -55px;color: #999999">�ֻ�δ��֤</a> <?php endif; ?>	
                      <?php endif; ?>-->				
                      <?php if ($this->_vars['user']['email_audit'] == "1"): ?> <a href="personal_user.php?act=user_email" class="vtip" title="��������֤�����䣺<?php echo $this->_vars['user']['email']; ?>
" style=" background-position: 0px -74px;">��������֤</a> <?php else: ?> <a href="personal_user.php?act=user_email" class="vtip" title="����δ��֤<br/>��֤ͨ������ʹ������ŵ�¼��վ�����ܽ��ո����ʼ�֪ͨ��" style=" background-position: 0px -93px;color: #999999">����δ��֤</a> <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td style=" padding-top:12px;">��Ϣͳ�ƣ�
                      �ҵļ�����<a href="personal_resume.php?act=resume_list" <?php if ($this->_vars['count_resume'] == "0"): ?>style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_resume']; ?>
)</a>&nbsp;&nbsp;&nbsp;
                      �������룺<a href="personal_apply.php?act=interview" <?php if ($this->_vars['count_interview'] == "0"): ?>style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_interview']; ?>
)</a>&nbsp;&nbsp;&nbsp;
                      ���������أ�<a href="personal_apply.php?act=down" <?php if ($this->_vars['count_apply'] == "0"): ?> style="color:#666666"<?php else: ?>style="color:#FF0000"<?php endif; ?>>(<?php echo $this->_vars['count_apply']; ?>
)</a></td>
                  </tr>
                  <tr>
                    <td style=" padding-top:12px;">&nbsp;��Ϣ���ѣ�&nbsp;ϵͳ��Ϣ
                      <?php if ($this->_vars['msg_total1'] > 0): ?> <a href="personal_user.php?act=pm&msgtype=1" style="color:#FF0000">(<?php echo $this->_vars['msg_total1']; ?>
)</a> <?php else: ?> <a href="personal_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a> <?php endif; ?>				  
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;˽����Ϣ
                      <?php if ($this->_vars['msg_total2'] > 0): ?> <a href="personal_user.php?act=pm&msgtype=2" style="color:#FF0000">(<?php echo $this->_vars['msg_total2']; ?>
)</a> <?php else: ?> <a href="personal_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a> <?php endif; ?> </td>
                  </tr>
                </table></td>
              <td width="150" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td  style="padding-top:15px;"><a href="personal_resume.php?act=make1"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/83.gif" alt="��������"  border="0"  /></a></td>
                  </tr>
                  <tr>
                    <td style="padding-top:15px;"><a href="personal_resume.php?act=resume_list"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/82.gif" alt="�������"  border="0"  /></a></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
        <div class="com_user_box" style="margin-top:10px;">
          <div class="titbox">
            <div class="lefttit"><u>�����ܸ���Ȥ��ְλ</u></div>
            <div class="rightip"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
search.php"  target="_blank">����</a></div>
            <div class="clear"></div>
          </div>
          <?php echo tpl_function_qishi_jobs_list(array('set' => $this->_run_modifier("�б���:jobs,��ʾ��Ŀ:5,��ַ�:...,ְλ������:8,����:rtime>desc,ְλ����:", 'cat', 'plugin', 1, $this->_vars['interest_id'])), $this);?>
          <?php if (! $this->_vars['jobs']): ?>
          <?php echo tpl_function_qishi_jobs_list(array('set' => "�б���:jobs,��ʾ��Ŀ:5,��ַ�:...,ְλ������:8,����:rtime>desc"), $this);?>
          <?php endif; ?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td width="150" height="40" class="us_list_title" style="padding-left:10px;">ְλ����</td>
              <td class="us_list_title">��˾����</td>
              <td width="120" align="center" class="us_list_title">н��</td>
              <td width="120" align="center" class="us_list_title">��������</td>
            </tr>
          </table>
          <?php if (count((array)$this->_vars['jobs'])): foreach ((array)$this->_vars['jobs'] as $this->_vars['list']): ?>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td width="150" height="35" style="padding-left:10px;"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a></td>
              <td ><a href="<?php echo $this->_vars['list']['company_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['companyname']; ?>
</a></td>
              <td width="120" align="center" ><?php echo $this->_vars['list']['wage_cn']; ?>
</td>
              <td width="120" align="center"><?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</td>
            </tr>
          </table>
          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  class="link_lan">
            <tr>
              <td height="30" colspan="4" valign="top" class="us_list" style="padding-left:10px;"> ����������<?php echo $this->_vars['list']['district_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
                ѧ��Ҫ��<?php echo $this->_vars['list']['education_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
                �����<?php echo $this->_vars['list']['click']; ?>
��&nbsp;&nbsp;|&nbsp;&nbsp;
                ��Ƹ������<?php echo $this->_run_modifier($this->_vars['list']['deadline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
 </td>
            </tr>
          </table>
          <?php endforeach; endif; ?>
          <?php if (! $this->_vars['jobs']): ?>
          <div class="us_list_no_content">û��ƥ�����Ϣ</div>
          <br />
          <?php endif; ?></div></td>
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