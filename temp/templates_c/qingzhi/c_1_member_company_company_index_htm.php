<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.cat.php'); $this->register_modifier("cat", "tpl_modifier_cat",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_resume_list.php'); $this->register_function("qishi_resume_list", "tpl_function_qishi_resume_list",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:25 �й���׼ʱ�� */ ?>
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
<script type="text/javascript">
$(document).ready(function()
{
	//ͷ��
	$("#show_avatars_url").mouseover(function() {
		$(".avatars_edit").show();
		$(".avatars_edit").css("opacity", 0.2);
		$("#show_avatars_url").mouseout(function() {
		$(".avatars_edit").hide();
		});	
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
">��Ա����</a> 
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
    <td valign="top" class="link_lan">
	<?php if ($this->_vars['points'] <= $this->_vars['QISHI']['points_min_remind']): ?>
		 <div class="remind link_lan" >
		��ܰ���ѣ������˻�<?php echo $this->_vars['QISHI']['points_byname']; ?>
��ʣ��<span><?php echo $this->_vars['points']; ?>
</span><?php echo $this->_vars['QISHI']['points_quantifier']; ?>
������������<a href="company_service.php?act=order_add">[��ֵ]</a> ��
		</div>
		<?php endif; ?>
		
		<?php if ($this->_vars['QISHI']['operation_mode'] == '2'): ?>
			<?php if ($this->_vars['meal_min_remind'] == "�Ѿ�����"): ?>
			<div class="remind link_lan" >
			��ܰ���ѣ����ĵķ����Ѿ����ڣ�����������<a href="company_service.php?act=setmeal_list">[�������ײ�]</a> ��
			</div>
			<?php else: ?>
			<div class="remind link_lan" >
			��ܰ���ѣ����ĵķ�����<span><?php echo $this->_vars['meal_min_remind']; ?>
</span>�쵽�ڣ�����������<a href="company_service.php?act=setmeal_list">[�������ײ�]</a> ��
			</div>
			<?php endif; ?>
		<?php endif; ?>
<div class="com_user_box">
  <div class="titbox">
  	<div class="lefttit"><u>��ӭ��<?php echo $this->_vars['user']['username']; ?>
</u>(uid:<?php echo $this->_vars['user']['uid']; ?>
)&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="company_user.php?act=userprofile">��Ա����</a></div>
	<div class="rightip">�ϴε�¼ʱ�䣺<?php echo $this->_run_modifier($this->_vars['user']['last_login_time'], 'date_format', 'plugin', 1, "%Y-%m-%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�ϴε�¼IP��<?php echo $this->_vars['user']['last_login_ip']; ?>
</div>
	<div class="clear"></div>
  </div>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="5" >
            <tr>
              <td width="120">
			  <table border="0" cellpadding="0" cellspacing="1" bgcolor="#CDE6F3" style="margin:3px; padding:3px;" >
                <tr>
                  <td bgcolor="#FFFFFF"  >
				  <div style=" position:relative"  id="show_avatars_url">
				  <a href="company_user.php?act=avatars">
				  <?php if ($this->_vars['user']['avatars'] == ""): ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/no_photo.gif" border="0"  width="100" height="100" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/avatar/100/<?php echo $this->_vars['user']['avatars']; ?>
?rand=<?php echo $this->_vars['rand']; ?>
" border="0"   width="100" height="100"  /><?php endif; ?></a>
				  <div class="avatars_edit">�޸�ͷ��</div>
				  </div>				  </td>
                </tr>
              </table>			  </td>
              <td valign="top">
			  
			  <table width="100%" border="0" cellspacing="0" cellpadding="0"  style="color:#666666">
                <tr>
                  <td style=" padding-top:12px;">&nbsp;�˻�<?php echo $this->_vars['QISHI']['points_byname']; ?>
��&nbsp;<span style="color: #FF6600; font-size:30px; font-family:Arial, Helvetica, sans-serif"><?php echo $this->_vars['points']; ?>
</span>&nbsp;&nbsp;<?php echo $this->_vars['QISHI']['points_quantifier']; ?>

				    <a href="company_service.php?act=order_add"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/15.gif" alt="���ϳ�ֵ" width="55" height="26" border="0" align="absmiddle" style="margin-left:40px;" /></a>
				  </td>
                </tr>
                <tr>
                  <td  style=" padding-top:12px;" class="butimglink">
				  &nbsp;��֤״̬��&nbsp;
				  <?php if ($this->_vars['company']['audit'] == "1"): ?>
				  <a href="company_info.php?act=company_auth" class="vtip" title="Ӫҵִ������֤��ִ�ձ�ţ�<?php echo $this->_vars['company']['license']; ?>
">Ӫҵִ������֤</a>
					<?php else: ?>
					 <a href="company_info.php?act=company_auth" class="vtip" title="Ӫҵִ��δ��֤<br/>��֤���������Ϣ�Ŀ��Ŷȣ������ܶ������ͻ���Ŷ��" style=" background-position: 0px -16px; color: #999999">Ӫҵִ��δ��֤</a>
					<?php endif; ?>
					<?php if ($this->_vars['sms']['open'] == "1"): ?>			
						<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
						<a href="company_user.php?act=user_mobile" class="vtip" title="�ֻ�����֤���ֻ��ţ�<?php echo $this->_vars['user']['mobile']; ?>
" style=" background-position: 0px -33px;">�ֻ�����֤</a>
						<?php else: ?>
						<a href="company_user.php?act=user_mobile" class="vtip" title="�ֻ�δ��֤<br/>��֤ͨ������ʹ���ֻ��ŵ�¼��վ�����ܽ��ո������֪ͨ��"  style=" background-position: 0px -55px;color: #999999">�ֻ�δ��֤</a>
						<?php endif; ?>	
					<?php endif; ?>				
					<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
					<a href="company_user.php?act=user_email" class="vtip" title="��������֤�����䣺<?php echo $this->_vars['user']['email']; ?>
" style=" background-position: 0px -74px;">��������֤</a>
					<?php else: ?>
					<a href="company_user.php?act=user_email" class="vtip" title="����δ��֤<br/>��֤ͨ������ʹ������ŵ�¼��վ�����ܽ��ո����ʼ�֪ͨ��" style=" background-position: 0px -93px;color: #999999">����δ��֤</a>
					<?php endif; ?>
				  </td>
                </tr>
                <tr>
                  <td style=" padding-top:12px;">&nbsp;��Ϣ���ѣ�&nbsp;ϵͳ��Ϣ
				  <?php if ($this->_vars['msg_total1'] > 0): ?>
				  <a href="company_user.php?act=pm&msgtype=1" style="color:#FF0000">(<?php echo $this->_vars['msg_total1']; ?>
)</a>
				  <?php else: ?>
				  <a href="company_user.php?act=pm&msgtype=1" style="color:#666666">(0)</a>
				  <?php endif; ?>				  
				  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;˽����Ϣ
				   <?php if ($this->_vars['msg_total2'] > 0): ?>
				   <a href="company_user.php?act=pm&msgtype=2" style="color:#FF0000">(<?php echo $this->_vars['msg_total2']; ?>
)</a>
				  <?php else: ?>
				 <a href="company_user.php?act=pm&msgtype=2" style="color:#666666">(0)</a>
				  <?php endif; ?>				  </td>
                </tr>
              </table></td>
              <td width="180" valign="top"><table width="100%" border="0" cellspacing="16" cellpadding="0">
                <tr>
                  <td><a href="company_jobs.php?act=addjobs"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/71.gif" alt="����ְλ"  border="0"  /></a></td>
                </tr>
                <tr>
                  <td><a href="company_jobs.php?act=jobs"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/81.gif" alt="����ְλ"  border="0"  /></a></td>
                </tr>
              </table></td>
          </tr>
      </table>	
</div>

	<?php if ($this->_vars['QISHI']['operation_mode'] == "2"): ?>
	<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit"><u>�ҵķ���</u></div>
	<div class="rightip"><a href="company_service.php?act=setmeal_list" >�������</a></div>
	<div class="clear"></div>
  </div>
 <table width="98%" border="0" align="center" cellpadding="0" cellspacing="9">
      <tr>
        <td colspan="4">
		<span style="color:#FF6600">ʣ��ʱ�䣺<?php if ($this->_vars['setmeal']['endtime'] == "0"): ?>������<?php else:  echo $this->_vars['setmeal_endtime_days'];  endif; ?></span>
		<span style="color:#999999">
		(��ͨʱ�䣺<?php echo $this->_run_modifier($this->_vars['setmeal']['starttime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
������ʱ��<?php if ($this->_vars['setmeal']['endtime'] == "0"): ?>������<?php else:  echo $this->_run_modifier($this->_vars['setmeal']['endtime'], 'date_format', 'plugin', 1, "%Y-%m-%d");  endif; ?>)
		</span>
		</td>
        </tr>
      <tr>
        <td>�������ƣ�<span><?php echo $this->_vars['setmeal']['setmeal_name']; ?>
</span>
		<?php if ($this->_vars['setmeal']['setmeal_id'] > 1): ?><a href="company_service.php?act=setmeal_list" ><img src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/setmealimg/<?php echo $this->_vars['setmeal']['setmeal_id']; ?>
.gif" border="0" align="absmiddle"  title="<?php echo $this->_vars['setmeal']['setmeal_name']; ?>
" class="vtip"/></a><?php endif; ?>
		</td>
        <td>�ɷ�����ͨ��Ƹʣ�ࣺ<span><?php echo $this->_vars['setmeal']['jobs_ordinary']; ?>
</span></td>
        <td>��������ͨ����ʣ�ࣺ<span><?php echo $this->_vars['setmeal']['download_resume_ordinary']; ?>
</span></td>
        <td>�����ظ߼�����ʣ�ࣺ<span><?php echo $this->_vars['setmeal']['download_resume_senior']; ?>
</span></td>
      </tr>
      <tr>
        <td>��������ͨ�˲�����ʣ�ࣺ<span><?php echo $this->_vars['setmeal']['interview_ordinary']; ?>
</span></td>
        <td>������߼��˲�����ʣ�ࣺ<span><?php echo $this->_vars['setmeal']['interview_senior']; ?>
</span></td>
        <td>�˲ſ�����ʣ�ࣺ<span><?php echo $this->_vars['setmeal']['talent_pool']; ?>
</span></td>
        <td></td>
      </tr>
    </table>
</div>
<?php endif; ?>
<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit" ><u>��ҵ��Ϣ</u></div>
	<div class="rightip" ><a href="company_info.php?act=company_profile">�޸�</a></div>
	<div class="clear"></div>
  </div>
  <?php if ($this->_vars['company']['companyname']): ?>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="9">
      <tr>
        <td>��˾���ƣ�<?php echo $this->_vars['company']['companyname']; ?>
</td>
        <td>��ҵ���ʣ�<?php echo $this->_vars['company']['nature_cn']; ?>
</td>
        <td>������ҵ��<?php echo $this->_vars['company']['trade_cn']; ?>
</td>
      </tr>
      <tr>
        <td>�� ϵ �ˣ�<?php echo $this->_vars['company']['contact']; ?>
</td>
        <td>��ϵ�绰��<?php echo $this->_vars['company']['telephone']; ?>
</td>
        <td>��ϵ���䣺<?php echo $this->_vars['company']['email']; ?>
</td>
      </tr>
		<tr>
        <td>���ڵ�����<?php echo $this->_vars['company']['district_cn']; ?>
</td>
        <td colspan="2">ͨѶ��ַ��<?php echo $this->_vars['company']['address']; ?>
</td>
        </tr>
		<tr>
        <td><!--���ӵ�ͼ��<a href="company_info.php?act=company_map_set"><?php if ($this->_vars['company']['map_x'] && $this->_vars['company']['map_y']): ?>�Ѿ���ע<?php else: ?>δ��ע<?php endif; ?></a>-->��ҵLOGO��<a href="company_info.php?act=company_logo"><?php if ($this->_vars['company']['logo'] == ""): ?>δ�ϴ�<?php else: ?>�Ѿ��ϴ�<?php endif; ?></a></td>
        <td></td>
        <td>&nbsp;</td>
		</tr>
    </table>
  <?php else: ?>
  <div  style=" height:50px; line-height:50px; text-align:center">��û����д��ҵ���ϣ�<a href="company_info.php?act=company_profile">������д</a></div>
  <?php endif; ?>
</div>
 


<div class="com_user_box" style="margin-top:10px;">
  <div class="titbox">
  	<div class="lefttit"><u>�����ܸ���Ȥ���˲�</u></div>
	<div class="rightip"><a href="<?php echo $this->_run_modifier("QS_resumelist", 'qishi_url', 'plugin', 1); ?>
"  target="_blank">����</a></div>
	<div class="clear"></div>
  </div>
  <?php echo tpl_function_qishi_resume_list(array('set' => $this->_run_modifier("�б���:resumelist,��ʾ��Ŀ:6,����ְλ����:30,��ַ�:...,����:rtime>desc,ְλ����:", 'cat', 'plugin', 1, $this->_vars['concern_id'])), $this);?>
  <?php if (! $this->_vars['resumelist']): ?>
  <?php echo tpl_function_qishi_resume_list(array('set' => "�б���:resumelist,��ʾ��Ŀ:6,����ְλ����:30,��ַ�:...,����:rtime>desc"), $this);?>
  <?php endif; ?>
					  <?php if ($this->_vars['resumelist']): ?>
					  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="link_lan">
                        <tr>
                          <td width="150" height="28" class="us_list_title" style="padding-left:10px;">����</td>

                          <td class="us_list_title">����ְλ</td>
                        </tr>
<?php if (count((array)$this->_vars['resumelist'])): foreach ((array)$this->_vars['resumelist'] as $this->_vars['list']): ?>
                        <tr>
                          <td height="30" style="padding-left:10px;"><a href="<?php echo $this->_vars['list']['resume_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['fullname']; ?>
</a> (<?php echo $this->_vars['list']['sex_cn']; ?>
)</td>
    
                          <td  ><?php echo $this->_vars['list']['intention_jobs']; ?>
</td>
                        </tr>
                        <tr>
                          <td height="22" colspan="2" valign="top" class="us_list" style="padding-left:10px; color:#999999">
						
						  ���䣺<?php echo $this->_vars['list']['age']; ?>
��&nbsp;&nbsp;|&nbsp;&nbsp;
						  ѧ����<?php echo $this->_vars['list']['education_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  �������飺<?php echo $this->_vars['list']['experience_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  ������н��<?php echo $this->_vars['list']['wage_cn']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  ���������<?php echo $this->_vars['list']['click']; ?>
&nbsp;&nbsp;|&nbsp;&nbsp;
						  �������ڣ�<?php echo $this->_run_modifier($this->_vars['list']['refreshtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

						  </td>
                        </tr>
						<?php endforeach; endif; ?>
        </table>
					   <?php else: ?>
			<div class="us_list_no_content">û��ƥ�����Ϣ</div><br />
		  <?php endif; ?>
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
