<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-13 00:04 �й���׼ʱ�� */ ?>
<div class="show_top">
	<div class="show_top_c">
    	<div class="logo"><a href="#"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/rs_logo.gif" width="141" height="48" /></a></div>
        <div class="menu"><a href="<?php echo $this->_run_modifier("QS_index", 'qishi_url', 'plugin', 1); ?>
">��ҳ</a><em></em><a href="<?php echo $this->_run_modifier("QZ_zhiwei", 'qishi_url', 'plugin', 1); ?>
">ְλ��Ϣ</a><em></em><a href="<?php echo $this->_run_modifier("QZ_rencai", 'qishi_url', 'plugin', 1); ?>
">�˲���Ϣ</a><em></em><a href="<?php echo $this->_run_modifier("QZ_jianxi", 'qishi_url', 'plugin', 1); ?>
">��ϰ����</a><em></em><a href="<?php echo $this->_run_modifier("QZ_jianzhi", 'qishi_url', 'plugin', 1); ?>
">��ְ��Ϣ</a><em></em><a href="<?php echo $this->_run_modifier("QZ_mianshi", 'qishi_url', 'plugin', 1); ?>
">��������</a><em></em><a href="<?php echo $this->_run_modifier("QZ_zhidao", 'qishi_url', 'plugin', 1); ?>
">ָ������</a></div>
        <div class="top_side fr">
            	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("top-nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
        </div>
        <div class="clear"></div>
  </div>
</div>

