<?php require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_hotword.php'); $this->register_function("qishi_hotword", "tpl_function_qishi_hotword",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_nav.php'); $this->register_function("qishi_nav", "tpl_function_qishi_nav",false);  require_once('D:\wamp\www\qingzhi\include\template_lite\plugins\function.qishi_news_list.php'); $this->register_function("qishi_news_list", "tpl_function_qishi_news_list",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-09-02 21:07 ?D1��������?����?? */ ?>
<div class="header">
	<div class="top">
    	<div class="top_con">
        	<div class="fl">
            	<ul id="twitter">
                    <?php echo tpl_function_qishi_news_list(array('set' => "�б���:list,��ʾ��Ŀ:10,��Ѷ����:12,���ⳤ��10,��ַ�:..."), $this);?>
                    <!--   ����Ϊѭ����ȡ -->
                        <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
                        <li><a   href="<?php echo $this->_vars['li']['url']; ?>
"><?php echo $this->_vars['li']['title']; ?>
</a>
                        </li>
                        <?php endforeach; endif; ?>
                     <!-- ѭ������ -->
				</ul>
            </div>
            <div class="fr top_side">
		<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("top-nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
            </div>
        </div>
    </div>
    <div class="con">
    	<div class="con_c">
    		<div class="logo fl"><a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/logo.gif" width="293" height="30" /></a></div>
            <div class="qz_menu fr">
		<?php echo tpl_function_qishi_nav(array('set' => "��������:QS_top,�б���:list"), $this);?>
		<?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['list']): ?>
		<a href="<?php echo $this->_vars['list']['url']; ?>
" target="<?php echo $this->_vars['list']['target']; ?>
" <?php if ($this->_vars['list']['tag'] == $this->_vars['page_select'] && $this->_vars['list']['tag'] != ""): ?>class="on"<?php endif; ?>><?php echo $this->_vars['list']['title']; ?>
</a>
		<?php endforeach; endif; ?>
            </div>	
        </div>
    </div>
    <div class="search">
    	<div class="search_c">
        	<div class="fl search_hot">���Źؼ��ʣ�
        <?php echo tpl_function_qishi_hotword(array('set' => "��ʾ��Ŀ:5,�б���:list"), $this);?>
          <!--   ����Ϊѭ����ȡ -->
            <?php if (count((array)$this->_vars['list'])): foreach ((array)$this->_vars['list'] as $this->_vars['li']): ?>
            <a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
search.php?key=<?php echo $this->_vars['li']['w_word']; ?>
"><?php echo $this->_vars['li']['w_word']; ?>
</a>
            <?php endforeach; endif; ?>
         <!-- ѭ������ -->
 </div>
            <div class="fl search_input"><form id="searchForm" method="get" action="<?php echo $this->_run_modifier("QZ_search", 'qishi_url', 'plugin', 1); ?>
"><input name="key"></form><a href="javascript:$('#searchForm').submit();"></a></div>
        </div>
    </div>  
</div>