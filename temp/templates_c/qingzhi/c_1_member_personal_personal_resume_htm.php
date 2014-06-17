<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:03 中国标准时间 */ ?>
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
  <div class="page_location link_bk"> 当前位置：<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">首页</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a>&nbsp;>&nbsp;编辑简历 </div>
  <table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
    <tr>
      <td width="183" valign="top" class="link_bk"> <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> </td>
      <td valign="top"><div class="user_right_box">
          <div class="user_right_top_tit_bg">
            <h1>预览简历 - <span style="color:#FF6600"><?php echo $this->_vars['resume_basic']['title']; ?>
</span></h1>
          </div>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>基本设置</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="link_lan" style="margin:0 auto;">
                  <tr>
                    <td height="32" class="link_lan">简历名称：<?php echo $this->_vars['resume_basic']['title']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[设置隐私]</a></td>
                    <td class="link_lan">简历公开：
                      <?php if ($this->_vars['resume_basic']['display'] == "1"): ?>
                      公开&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[修改]</a> <?php else: ?>
                      半公开&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[修改]</a> <?php endif; ?></td>
                  </tr>
                  <tr>
                    <td height="32" class="link_lan">姓名：
                      <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?>
                      <?php echo $this->_vars['resume_basic']['number']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[姓名显示方式]</a> <?php elseif ($this->_vars['resume_basic']['display_name'] == "3"): ?>
                      <?php echo $this->_vars['resume_basic']['lastname']; ?>
&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[姓名显示方式]</a> <?php else: ?>
                      <?php echo $this->_vars['resume_basic']['fullname']; ?>
&nbsp;&nbsp;&nbsp; <a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
"  >[姓名显示方式]</a> <?php endif; ?> </td>
                    <td> 简历审核状态：
                      <?php if ($this->_vars['resume_basic']['audit'] == "1"): ?>已通过审核<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['audit'] == "2"): ?>正在审核中<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['audit'] == "3"): ?>审核未通过,请修改<?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" > 简历完整度：<?php echo $this->_vars['resume_basic']['complete_percent']; ?>
% <span style="color: #999999">(完整指数小于60%的简历系统将视为无效简历)</span></td>
                    <td>照片审核状态：
                      <?php if ($this->_vars['resume_basic']['photo_img'] <> ""): ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "1"): ?>已通过审核<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "2"): ?>正在审核中<?php endif; ?>
                      <?php if ($this->_vars['resume_basic']['photo_audit'] == "3"): ?>审核未通过，请修改<?php endif; ?>
                      <?php else: ?>
                      未上传照片
                      <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" class="link_lan"> 创建时间：<?php echo $this->_run_modifier($this->_vars['resume_basic']['addtime'], 'date_format', 'plugin', 1, "%Y.%m.%d"); ?>
</td>
                    <td>照片公开状态：
                      <?php if ($this->_vars['resume_basic']['photo_img'] <> ""): ?>
                      <?php if ($this->_vars['resume_basic']['photo_display'] == "1"): ?>
                      公开&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[设置]</a> <?php else: ?>
                      不公开&nbsp;&nbsp;&nbsp;<a href="?act=resume_privacy&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
" >[设置]</a> <?php endif; ?>
                      <?php else: ?>
                      未上传照片
                      <?php endif; ?> </td>
                  </tr>
                  <tr>
                    <td height="32" > 刷新时间：<?php echo $this->_run_modifier($this->_vars['resume_basic']['refreshtime'], 'date_format', 'plugin', 1, "%Y.%m.%d %H:%M"); ?>
&nbsp;&nbsp;&nbsp;<a href="?act=refresh" >[刷新]</a> &nbsp;&nbsp;&nbsp;<span style="color: #999999">(刷新可以提升简历排名)</span></td>
                    <td><!--简历等级：
                      <?php if ($this->_vars['resume_basic']['talent'] == "2"): ?> <span style="color:#FF6600">高级</span> <?php else: ?>
                      普通&nbsp;&nbsp;&nbsp;<a href="?act=talent" >[升级]</a> <?php endif; ?> --></td>
                  </tr>
                  <tr>
                    <td height="32" > 浏览次数：<?php echo $this->_vars['resume_basic']['click']; ?>
次 </td>
                    <td></td>
                  </tr>
                </table></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>基本信息</strong></span></td>
            </tr>
            <tr>
              <td height="22" style="border-bottom:1px #C9D9E7 solid;"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="3">
                  <tr>
                    <td valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="8" style="margin:0 auto;">
                        <tr>
                          <td class="link_lan">姓名：
                            <?php if ($this->_vars['resume_basic']['display_name'] == "2"): ?>
                            <?php echo $this->_vars['resume_basic']['number']; ?>

                            <?php else: ?>
                            <?php echo $this->_vars['resume_basic']['fullname']; ?>

                            <?php endif; ?> </td>
                          <td class="link_lan">性别：<?php echo $this->_vars['resume_basic']['sex_cn']; ?>
</td>
                        </tr>
                        <tr>
                          <td>年龄：<?php echo $this->_vars['resume_basic']['age']; ?>
 岁</td>
                          <td>身高：
                            <?php if ($this->_vars['resume_basic']['height'] == "0"): ?>
                            <span style="color:#f00">未填写</span>
                            <?php else: ?>
                            <?php echo $this->_vars['resume_basic']['height']; ?>
 CM
                            <?php endif; ?> </td>
                        </tr>
                        <tr>
                          <td>学历：<?php echo $this->_vars['resume_basic']['education_cn']; ?>
</td>
                          <td>婚姻状况：<?php if ($this->_vars['resume_basic']['marriage'] == 1): ?>未婚<?php endif;  if ($this->_vars['resume_basic']['marriage'] == 2): ?>已婚<?php endif;  if ($this->_vars['resume_basic']['marriage'] == 3): ?>保密<?php endif; ?></td>
                        </tr>
                        <tr>
                          <td>工作经验：<?php echo $this->_vars['resume_basic']['experience_cn']; ?>
</td>
                          <td>户口所在地：<?php echo $this->_vars['resume_basic']['householdaddress']; ?>
</td>
                        </tr>
                        <tr>
                          <td>联系电话：<?php echo $this->_vars['resume_basic']['telephone']; ?>
</td>
                          <td>电子邮箱：
                            <?php echo $this->_vars['user']['email']; ?>

                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php if ($this->_vars['user']['email_audit'] == "1"): ?> <a href="personal_user.php?act=user_email" style="color:#009900"> [已认证]</a> <?php else: ?> <a href="personal_user.php?act=user_email"> [点击认证]</a> <?php endif; ?> </td>
                        </tr>
                        <tr>
                          <td>通讯 Q Q：<?php if ($this->_vars['resume_basic']['qq']):  echo $this->_vars['resume_basic']['qq'];  else: ?><span style="color:#f00">未填写</span><?php endif; ?></td>
                          <td>通讯地址：<?php echo $this->_vars['resume_basic']['address']; ?>
</td>
                        </tr>
                        <tr>
                          <td colspan="2">特长标签：<?php if ($this->_vars['resume_basic']['tagcn']):  echo $this->_vars['resume_basic']['tagcn'];  else: ?><span style="color:#f00">未填写</span><?php endif; ?></td>
                        </tr>
                        <tr>
                          <td colspan="2">个人主页/博客：<?php if ($this->_vars['resume_basic']['website']):  echo $this->_vars['resume_basic']['website'];  else: ?><span style="color:#f00">未填写</span><?php endif; ?></td>
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
">修改照片</a></td>
                            </tr>
                          </table>
                        </div>
                      </div></td>
                  </tr>
                </table>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make1&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>求职意向</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"> <?php if ($this->_vars['resume_basic']['intention_jobs']): ?>
                <table width="98%" border="0" align="center" cellpadding="0" cellspacing="10" style="margin:0 auto;">
                  <tr>
                    <td>最近工作过的职位：<?php if ($this->_vars['resume_basic']['recentjobs']):  echo $this->_vars['resume_basic']['recentjobs'];  else: ?>暂无<?php endif; ?></td>
                  </tr>
                  <tr>
                    <td>期望岗位性质：<?php echo $this->_vars['resume_basic']['nature_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td >期望工作地：<?php echo $this->_vars['resume_basic']['district_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td>期望月薪：<?php echo $this->_vars['resume_basic']['wage_cn']; ?>
</td>
                  </tr>
                  <tr>
                    <td>期望从事的岗位：<?php echo $this->_vars['resume_basic']['intention_jobs']; ?>
</td>
                  </tr>
                  <tr>
                    <td>期望从事的行业：<?php echo $this->_vars['resume_basic']['trade_cn']; ?>
</td>
                  </tr>
                </table>
                <?php else: ?>
                <div style="height:40px;line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您没有填写求职意向。</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make2&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>技能指数</strong></span></td>
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
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您没有填写技能指数。</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make3&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>教育经历</strong></span></td>
            </tr>
            <tr>
              <td style="border-bottom:1px #C9D9E7 solid;"> <?php if ($this->_vars['resume_education']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">起止年月</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">学校名称</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">专业名称</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">学历</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">编辑</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_education'])): foreach ((array)$this->_vars['resume_education'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
至<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['school']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['speciality']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['education_cn']; ?>
</td>
                    <td align="center"><a href="?act=edit_education&id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_education&id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">删除</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您没有填写教育经历。</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make4&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>工作经历</strong></span></td>
            </tr>
            <tr>
              <td  style="border-bottom:1px #C9D9E7 solid;"><?php if ($this->_vars['resume_work']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">起止年月</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">公司名称</td>
                    <td align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">职位名称</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">编辑</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_work'])): foreach ((array)$this->_vars['resume_work'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
至<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['companyname']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['jobs']; ?>
</td>
                    <td align="center"><a href="?act=edit_work&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_work&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">删除</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您没有填写工作经历。</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make5&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
&go_resume_show=1'" />
                </div></td>
            </tr>
            <tr>
              <td height="32" bgcolor="#F5FAFC"  style="border-bottom:1px #C9D9E7 solid;"><span style="color:#0066CC; padding-left:20px;"><strong>培训经历</strong></span></td>
            </tr>
            <tr>
              <td height="35"><?php if ($this->_vars['resume_training']): ?>
                <table width="100%" border="0" cellspacing="1" cellpadding="5"  class="link_lan">
                  <tr>
                    <td width="180" height="35" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399; ">起止年月</td>
                    <td align="center"style=" border-bottom:1px #CCCCCC dashed; color:#003399;">机构名称</td>
                    <td align="center"style=" border-bottom:1px #CCCCCC dashed; color:#003399;">培训课程</td>
                    <td width="120" align="center" style=" border-bottom:1px #CCCCCC dashed; color:#003399;">编辑</td>
                  </tr>
                  <?php if (count((array)$this->_vars['resume_training'])): foreach ((array)$this->_vars['resume_training'] as $this->_vars['list']): ?>
                  <tr>
                    <td height="33" align="center"><?php echo $this->_vars['list']['start']; ?>
至<?php echo $this->_vars['list']['endtime']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['agency']; ?>
</td>
                    <td align="center"><?php echo $this->_vars['list']['course']; ?>
</td>
                    <td align="center"><a href="?act=edit_training&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?act=del_training&amp;id=<?php echo $this->_vars['list']['id']; ?>
&pid=<?php echo $this->_vars['list']['pid']; ?>
&go_resume_show=1">删除</a></td>
                  </tr>
                  <?php endforeach; endif; ?>
                </table>
                <?php else: ?>
                <div style="height:40px; line-height:40px;color:#f00;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;您没有填写培训经历。</div>
                <?php endif; ?>
                <div style="padding:6px 15px 15px;text-align:center;">
                  <input name="" type="button" value="修改" class="but80"  onclick="window.location='?act=make6&pid=<?php echo $this->_vars['resume_basic']['id']; ?>
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
