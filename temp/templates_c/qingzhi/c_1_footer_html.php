<?php require_once('E:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-03 09:30 ?D1��������?����?? */ ?>
<div class="qz_footer">
  <div class="footer_c">
    <div class="fl"><a href="<?php echo $this->_run_modifier("QZ_index", 'qishi_url', 'plugin', 1); ?>
">��ְ��</a> | <?php echo $this->_vars['QISHI']['bottom_other']; ?>
 | <?php echo $this->_vars['QISHI']['icp']; ?>
</div>
    <div class="fr"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
news/news-show.php?id=34">����</a> | <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
news/news-show.php?id=35">��ϵ</a> | <a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
">��Ƹ</a> | <a href="<?php echo $this->_run_modifier("QZ_jianxi", 'qishi_url', 'plugin', 1); ?>
">��ϰ</a> | <a href="<?php echo $this->_run_modifier("QZ_jianzhi", 'qishi_url', 'plugin', 1); ?>
">��ְ</a> | <a href="<?php echo $this->_run_modifier("QZ_index", 'qishi_url', 'plugin', 1); ?>
user/personal/personal_user.php?act=feedback">�������</a> | <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
news/news-show.php?id=36">����������</a> </div>
  </div>
</div>