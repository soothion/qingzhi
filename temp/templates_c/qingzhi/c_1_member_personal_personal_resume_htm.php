<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:03 �й���׼ʱ�� */ ?>
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
<script type="text/javascript">
$(document).ready(function()
{
	$("#tabshow li:nth-child(2)>a").addClass("selected");
});
</script>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
  <div class="page_location link_bk"> ��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;�༭���� </div>
  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
    <tr>
      <td width="183" valign="top" class="link_bk"> <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> </td>
      <td valign="top"><div class="user_right_box">
          <div class="user_right_top_tit_bg">
            <h1>Ԥ������ - <span style="color:#FF6600"><?php echo $this->_vars['resume_basic']['title']; ?>
</span></h1>
          </div>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>��������</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="link_lan" style="margin:0 auto;">
                  <tr>
                    <td height="32" class="link_lan">�������ƣ�<?php echo $this->_vars['resume_basic']['title']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[������˽]</a></td>
                    <td class="link_lan">����������
                      <?php if ($this->_vars['resume_basic']['display'] == "1"): ?>
                      ����&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[�޸�]</a> <?php else: ?>
                      �빫��&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[�޸�]</a> <?php endif; ?></td>
                  </tr>
                  <tr>
                    <td height="32" class="link_lan">������
                      <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?>
                      <?php echo $this->_vars['resume_basic']['number']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[������ʾ��ʽ]</a> <?php elseif ($this->_vars['resume_basic']['display_name'] == "3"): ?>
                      <?php echo $this->_vars['resume_basic']['lastname']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[������ʾ��ʽ]</a> <?php else: ?>
                      <?php echo $this->_vars['resume_basic']['fullname']; ?>
&nbsp;&nbsp;&nbsp; <a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[������ʾ��ʽ]</a> <?php endif; ?> </td>
                    <td> �������״̬��
                      <?php if ($this->_vars['resume_basic']['audit'] == "1"): ?>��ͨ�����<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['audit'] == "2"): ?>���������<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['audit'] == "3"): ?>���δͨ��,���޸�<?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" > ���������ȣ�<?php echo $this->_vars['resume_basic']['complete_percent']; ?>
% <span style="color: #999999">(����ָ��С��60%�ļ���ϵͳ����Ϊ��Ч����)</span></td>
                    <td>��Ƭ���״̬��
                      <?php if ($this->_vars['resume_basic']['photo_img'] <> ""): ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "1"): ?>��ͨ�����<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "2"): ?>���������<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "3"): ?>���δͨ�������޸�<?php endif; ?>
                      <?php else: ?>
                      δ�ϴ���Ƭ
                      <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" class="link_lan"> ����ʱ�䣺<?php echo $this->_run_modifier($this->_vars['resume_basic']['addtime'], 'date_format', 'plugin', 1, "%Y.%m.%d"); ?>
</td>
                    <td>��Ƭ����״̬��
                      <?php if ($this->_vars['resume_basic']['photo_img'] <> ""): ?>
                      <?php if ($this->_vars['resume_basic']['photo_display'] == "1"): ?>
                      ����&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[����]</a> <?php else: ?>
                      ������&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[����]</a> <?php endif; ?>
                      <?php else: ?>
                      δ�ϴ���Ƭ
                      <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" > ˢ��ʱ�䣺<?php echo $this->_run_modifier($this->_vars['resume_basic']['refreshtime'], 'date_format', 'plugin', 1, "%Y.%m.%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;<a href="?act=refresh" >[ˢ��]</a> &nbsp;&nbsp;&nbsp;<span style="color: #999999">(ˢ�¿���������������)</span></td>
                    <td><!--�����ȼ���
                      <?php if ($this->_vars['resume_basic']['talent'] == "2"): ?> <span style="color:#FF6600">�߼�</span> <?php else: ?>
                      ��ͨ&nbsp;&nbsp;&nbsp;<a href="?act=talent" >[����]</a> <?php endif; ?> --></td>
                  </tr>
                  <tr>
                    <td height="32" > ���������<?php echo $this->_vars['resume_basic']['click']; ?>
�� </td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>������Ϣ</strong></span></td>
            </tr>
            <tr>
              <td height="22" style="border-bottom:1px #C9D9E7 solid;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
                  <tr>
                    <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="8" style="margin:0 auto;">
                        <tr>
                          <td class="link_lan">������
                            <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?>
                            <?php echo $this->_vars['resume_basic']['number']; ?>

                            <?php else: ?>
                            <?php echo $this->_vars['resume_basic']['fullname']; ?>

                            <?php endif; ?> </td>
                          <td class="link_lan">�Ա�<?php echo $this->_vars['resume_basic']['sex_cn']; ?>
</td>
                        </tr>
                        <tr>
                          <td>���䣺<?php echo $this->_vars['resume_basic']['age']; ?>
 ��</td>
                          <td>��ߣ�
                            <?php if ($this->_vars['resume_basic']['height'] == "0"): ?>
                            <span style="color:#f00">δ��д</span>
                            <?php else: ?>
                            <?php echo $this->_vars['resume_basic']['height']; ?>
 CM
                            <?php endif; ?> </td>
                        </tr>
                        <tr>
                          <td>ѧ����<?php echo $this->_vars['resume_basic']['education_cn']; ?>
</td>
                          <td>����״����<?php if ($this->_vars['resume_basic']['marriage'] == 1): ?>δ��<?php endif;  if ($this->_vars['resume_basic']['marriage'] == 2): ?>�ѻ�<?php endif;  if ($this->_vars['resume_basic']['marriage'] == 3): ?>����<?php endif; ?></td>
                        </tr>
                        <tr>
                          <td>�������飺<?php echo $this->_vars['resume_basic']['experience_cn']; ?>
</td>
                          <td>�������ڵأ�<?php echo $this->_vars['resume_basic']['householdaddress']; ?>
</td>
                        </tr>
                        <tr>
                          <td>��ϵ�绰��<?php echo $this->_vars['resume_basic']['telephone']; ?>
</td>
                          <td>�������䣺
                            <?php echo $this->_vars['user']['email']; ?>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if ($this->_vars['user']['email_audit'] == "1"): ?> <a href="personal_user.php?act=user_email" style="color:#009900"> [����֤]</a> <?php else: ?> <a href="personal_user.php?act=user_email"> [�����֤]</a> <?php endif; ?> </td>
                        </tr>
                        <tr>
                          <td>ͨѶ Q Q��<?php if ($this->_vars['resume_basic']['qq']):  echo $this->_vars['resume_basic']['qq'];  else: ?><span style="color:#f00">δ��д</span><?php endif; ?></td>
                          <td>ͨѶ��ַ��<?php echo $this->_vars['resume_basic']['address']; ?>
</td>
                        </tr>
                        <tr>
                          <td colspan="2">�س���ǩ��<?php if ($this->_vars['resume_basic']['tagcn']):  echo $this->_vars['resume_basic']['tagcn'];  else: ?><span style="color:#f00">δ��д</span><?php endif; ?></td>
                        </tr>
                        <tr>
                          <td colspan="2">������ҳ/���ͣ�<?php if ($this->_vars['resume_basic']['website']):  echo $this->_vars['resume_basic']['website'];  else: ?><span style="color:#f00">δ��д</span><?php endif; ?></td>
                        </tr>
                      </table></td>
                    <td width="150" valign="top" ><div style="position:relative">
                        <div style="position:absolute; right:10px; top:10px;">
                          <table border="0" align="center" cellpadding="0" cellspacing="1" style="line-height:180%" >
                            <tr>
                              <td><table border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC" class="link_lan">
                                  <tr>
                                    <td bgcolor="#FFFFFF"><?php if ($this->_vars['resume_basic']['photo_img'] <> ""): ?> <img src="<?php echo $this->_vars['QISHI']['resume_photo_dir_thumb'];  echo $this->_vars['resume_basic']['photo_img']; ?>
?wd=<?php echo $this->_vars['random']; ?>
" /><?php else: ?><img src="<?php echo $this->_vars['QISHI']['resume_photo_dir_thumb']; ?>
no_photo.gif" /><?php endif; ?></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td height="35" align="center" class="link_lan"><a href="?act=photo_cutting&show=ok&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
">�޸���Ƭ</a></td>
                            </tr>
                          </table>
                        </div>
                      </div></td>
                  </tr>
                </table>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make1&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>��ְ����</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"> <?php if ($this->_vars['resume_basic']['intention_jobs']): ?>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="10" style="margin:0 auto;">
                  <tr>
                    <td>�����������ְλ��<?php if ($this->_vars['resume_basic']['recentjobs']):  echo $this->_vars['resume_basic']['recentjobs'];  else: ?>����<?php endif; ?></td>
                  </tr>
                  <tr>
                    <td>������λ���ʣ�<?php echo $this->_vars['resume_basic']['nature_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td >���������أ�<?php echo $this->_vars['resume_basic']['district_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td>������н��<?php echo $this->_vars['resume_basic']['wage_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td>�������µĸ�λ��<?php echo $this->_vars['resume_basic']['intention_jobs']; ?>
</td>
                  </tr>
                  <tr>
                    <td>�������µ���ҵ��<?php echo $this->_vars['resume_basic']['trade_cn']; ?>
</td>
                  </tr>
                </table>
                <?php else: ?>
                <div style="height:40px;line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��û����д��ְ����</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make2&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>����ָ��</strong></span></td>
            </tr>
            <tr>
              <td   style="border-bottom:1px #C9D9E7 solid;"> <?php if ($this->_vars['resume_basic']['specialty']): ?>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="10" style="margin:0 auto;">
                  <tr>
                    <td style="line-height:180%">
                    <ul class="skills">
						<?php if (count((array)$this->_run_modifier("|", 'explode', 'PHP', 1, $this->_vars['resume_basic']['specialty']))): foreach ((array)$this->_run_modifier("|", 'explode', 'PHP', 1, $this->_vars['resume_basic']['specialty']) as $this->_vars['key'] => $this->_vars['tags']): ?>
            			<li>
            				<?php if (count((array)$this->_run_modifier(",", 'explode', 'PHP', 1, $this->_vars['tags']))): foreach ((array)$this->_run_modifier(",", 'explode', 'PHP', 1, $this->_vars['tags']) as $this->_vars['tagkey'] => $this->_vars['tag']):  if ($this->_vars['tagkey'] == 0): ?>
              				<b><?php echo $this->_vars['tag']; ?>
</b>
            				<?php endif; ?>
            				<?php if ($this->_vars['tagkey'] == 1): ?>
              				<span class="star<?php echo $this->_vars['tag']; ?>
"></span>
            				<?php endif; ?>
            				<?php endforeach; endif; ?>
            			</li>
          			<?php endforeach; endif; ?>
                    </ul>
                	<div class="clear"></div>
                    </td>
                  </tr>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��û����д����ָ����</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make3&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>��������</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"> <?php if ($this->_vars['resume_education']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">��ֹ����</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">ѧУ����</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">רҵ����</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">ѧ��</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">�༭</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_education'])): foreach ((array)$this->_vars['resume_education'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
��<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['school']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['speciality']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['education_cn']; ?>
</td>
                    <td align="center"><a href="?act=edit_education&id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">�޸�</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_education&id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">ɾ��</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��û����д����������</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make4&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>��������</strong></span></td>
            </tr>
            <tr>
              <td  style="border-bottom:1px #C9D9E7 solid;"><?php if ($this->_vars['resume_work']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">��ֹ����</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">��˾����</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">ְλ����</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">�༭</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_work'])): foreach ((array)$this->_vars['resume_work'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
��<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['companyname']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['jobs']; ?>
</td>
                    <td align="center"><a href="?act=edit_work&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">�޸�</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_work&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">ɾ��</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��û����д����������</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make5&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>��ѵ����</strong></span></td>
            </tr>
            <tr>
              <td height="35"><?php if ($this->_vars['resume_training']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">��ֹ����</td>
                    <td align="center"style=" border-bottom:1px #CCCCCC dashed; color:#003399;">��������</td>
                    <td align="center"style=" border-bottom:1px #CCCCCC dashed; color:#003399;">��ѵ�γ�</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">�༭</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_training'])): foreach ((array)$this->_vars['resume_training'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
��<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['agency']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['course']; ?>
</td>
                    <td align="center"><a href="?act=edit_training&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">�޸�</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_training&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">ɾ��</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��û����д��ѵ������</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="�޸�" class="but80"  onclick="window.location='?act=make6&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
          </table>
        </div></td>
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
