<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-25 10:00 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#selectAll").click(function()
	{	
		$("form :checkbox").attr("checked",true);
		setbg();
	});
	$("#uncheckAll").click(function()
	{	
		$("form :checkbox").attr("checked",false);
		setbg();
	});
	$("#opposite").click(function()
	{	
		$("form :checkbox").each(function()
		{
		$(this).attr("checked")?$(this).attr("checked",false):$(this).attr("checked",true);
		});
		setbg();
	});	
});
</script>
<?php if ($this->_vars['admin_purview'] <> "all"): ?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#form1 :checkbox").attr("disabled","false");
});
</script>
<?php endif; ?>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"><?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("users/admin_users_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip">
<h2>��ʾ��</h2>
<p>
ͨ������Ա���ã������Խ��б༭����Ա���ϡ�Ȩ�ޡ������Լ�ɾ������Ա�Ȳ�����
</p>
</div> 
<div class="toptit">����ԱȨ��
<span style="color: #FF3300">(<?php echo $this->_vars['account']['admin_name']; ?>
)</span>
	  <?php if ($this->_vars['admin_purview'] == "all"): ?>
	  &nbsp;&nbsp;&nbsp;
	  <span id="selectAll" style="color:#0066CC; cursor:pointer">[ȫѡ]</span>
	  &nbsp;&nbsp;&nbsp;
	  <span id="uncheckAll" style="color:#0066CC; cursor:pointer">[ȫ��ѡ]</span>
	  &nbsp;&nbsp;&nbsp;
	  <span id="opposite" style="color:#0066CC; cursor:pointer">[��ѡ]</span>
	  <?php endif; ?>
</div>
  <?php if ($this->_vars['account']['purview'] == "all"): ?>
  <div  style="color:#009900; padding:24px;">ϵͳ��������ԱȨ�޲������޸ģ�</div>
    <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
    <tr>
      <td bgcolor="#FFFFFF"  style="padding-left:24px;" > 
      <input name="submit22" type="button" class="admin_submit"    value="������һ��" onclick="Javascript:window.history.go(-1)"/></td>
    </tr>
  </table>
  <?php else: ?>
    <form id="form1" name="form1" method="post" action="?act=users_set_save">
	<?php echo $this->_vars['inputtoken']; ?>

	  <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>ְλ����</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobs_show" <?php if ($this->_run_modifier("jobs_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴ְλ 
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobs_edit" <?php if ($this->_run_modifier("jobs_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸�ְλ

</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobs_del" <?php if ($this->_run_modifier("jobs_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ��ְλ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobs_audit" <?php if ($this->_run_modifier("jobs_audit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ְλ
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_comment" <?php if ($this->_run_modifier("com_comment", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ְλ����
</label>
</li>

<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>
	  <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��ҵ����</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_show" <?php if ($this->_run_modifier("com_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴��ҵ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_edit" <?php if ($this->_run_modifier("com_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸���ҵ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_del" <?php if ($this->_run_modifier("com_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ����ҵ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_audit" <?php if ($this->_run_modifier("com_audit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��֤��ҵ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_promotion" <?php if ($this->_run_modifier("com_promotion", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ҵ�ƹ�
</label>
</li>
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>
 
 
 
 <!--<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��Ƹ�᣺</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  

<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobfair" <?php if ($this->_run_modifier("jobfair", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��Ƹ��
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="jobfair_exhibitors" <?php if ($this->_run_modifier("jobfair_exhibitors", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�λ���ҵ
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>-->
 
	 
 <!--<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>΢��Ƹ��</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  

<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_list" <?php if ($this->_run_modifier("simple_list", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴΢��Ƹ
</label>
</li>

 <li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_add" <?php if ($this->_run_modifier("simple_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���΢��Ƹ
</label>
</li>

 <li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_edit" <?php if ($this->_run_modifier("simple_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�༭΢��Ƹ
</label>
</li>


 <li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_audit" <?php if ($this->_run_modifier("simple_audit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���΢��Ƹ
</label>
</li>
 <li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_refresh" <?php if ($this->_run_modifier("simple_refresh", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ˢ��΢��Ƹ
</label>
</li>
 <li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="simple_del" <?php if ($this->_run_modifier("simple_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ��΢��Ƹ
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>-->
	    
	  <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��Ա���ã�</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_user_show" <?php if ($this->_run_modifier("com_user_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴��ҵ��Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_user_add" <?php if ($this->_run_modifier("com_user_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�����ҵ��Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_user_edit" <?php if ($this->_run_modifier("com_user_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸���ҵ��Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="com_user_del" <?php if ($this->_run_modifier("com_user_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ����ҵ��Ա
</label>
</li>
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
		        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="per_user_show" <?php if ($this->_run_modifier("per_user_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴���˻�Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="per_user_add" <?php if ($this->_run_modifier("per_user_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��Ӹ��˻�Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="per_user_edit" <?php if ($this->_run_modifier("per_user_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸ĸ��˻�Ա
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="per_user_del" <?php if ($this->_run_modifier("per_user_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ�����˻�Ա
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>
	  	  <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��������</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ord_show" <?php if ($this->_run_modifier("ord_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ord_set" <?php if ($this->_run_modifier("ord_set", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ö���
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ord_del" <?php if ($this->_run_modifier("ord_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ȡ������
</label>
</li>
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>
	   <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��������</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="resume_show" <?php if ($this->_run_modifier("resume_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="resume_audit" <?php if ($this->_run_modifier("resume_audit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��˼���
</label>
</li>
<!-- -->
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="resume_talent" <?php if ($this->_run_modifier("resume_talent", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ü����ȼ�
</label>
</li>-->
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="resume_photo_audit" <?php if ($this->_run_modifier("resume_photo_audit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��˼�����Ƭ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="resume_del" <?php if ($this->_run_modifier("resume_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ������
</label>
</li>
</li>
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
		  </td>
        </tr>
      </table>
	  	   <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>���ݹ���</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_show" <?php if ($this->_run_modifier("article_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴��Ѷ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_add" <?php if ($this->_run_modifier("article_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�����Ѷ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_edit" <?php if ($this->_run_modifier("article_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸���Ѷ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_del" <?php if ($this->_run_modifier("article_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ����Ѷ
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_property" <?php if ($this->_run_modifier("article_property", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />������Ѷ����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="article_category" <?php if ($this->_run_modifier("article_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />������Ѷ����
</label>
</li>
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="hrtools" <?php if ($this->_run_modifier("hrtools", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />HR������
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="help" <?php if ($this->_run_modifier("help", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />����
</label>
</li>-->
<!-- -->
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
  <!--<tr>
<td  bgcolor="#FFFFFF" style="  padding-left:14px;">
 <ul style="margin:0px; padding:3px; list-style:none">	
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="explain_show" <?php if ($this->_run_modifier("explain_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴˵��ҳ
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="explain_add" <?php if ($this->_run_modifier("explain_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���˵��ҳ
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="explain_edit" <?php if ($this->_run_modifier("explain_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸�˵��ҳ
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="explain_del" <?php if ($this->_run_modifier("explain_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ��˵��ҳ
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="explain_category" <?php if ($this->_run_modifier("explain_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />����˵��ҳ����
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
	    </td>
        </tr>-->
		<!--<tr>
<td  bgcolor="#FFFFFF" style="  padding-left:14px;">
 <ul style="margin:0px; padding:3px; list-style:none">	
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="notice_show" <?php if ($this->_run_modifier("notice_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴����
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="notice_add" <?php if ($this->_run_modifier("notice_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ӹ���
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="notice_edit" <?php if ($this->_run_modifier("notice_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸Ĺ���
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="notice_del" <?php if ($this->_run_modifier("notice_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ������
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="notice_category" <?php if ($this->_run_modifier("notice_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ù������
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
	    </td>
        </tr>-->
      </table>
	    <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>������</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ad_show" <?php if ($this->_run_modifier("ad_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴���
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ad_add" <?php if ($this->_run_modifier("ad_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ӹ��
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ad_edit" <?php if ($this->_run_modifier("ad_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸Ĺ��
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ad_del" <?php if ($this->_run_modifier("ad_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ�����
</label>
</li>
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="ad_category" <?php if ($this->_run_modifier("ad_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���λ����
</label>
</li>-->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>
	  	    <!--<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>�������ӹ���</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_show" <?php if ($this->_run_modifier("link_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴����
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_add" <?php if ($this->_run_modifier("link_add", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�������
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_edit" <?php if ($this->_run_modifier("link_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�޸�����
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_del" <?php if ($this->_run_modifier("link_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ������
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_category" <?php if ($this->_run_modifier("link_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ӷ���
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="link_set" <?php if ($this->_run_modifier("link_set", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />������������
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>-->
	  	  	    <!--<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>ģ�����</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="tpl_show" <?php if ($this->_run_modifier("tpl_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴ģ��
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="tpl_edit" <?php if ($this->_run_modifier("tpl_edit", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�༭ģ��
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="tpl_backup" <?php if ($this->_run_modifier("tpl_backup", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />����ģ��
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="tpl_company" <?php if ($this->_run_modifier("tpl_company", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ҵģ��
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="tpl_resume" <?php if ($this->_run_modifier("tpl_resume", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />����ģ��
</label>
</li>
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>-->
	  	  	  	    <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>������Ϣ��</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">		  
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="report_show" <?php if ($this->_run_modifier("report_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴�ٱ�
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="report_del" <?php if ($this->_run_modifier("report_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ���ٱ�
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="suggest_show" <?php if ($this->_run_modifier("suggest_show", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�鿴����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="suggest_reply" <?php if ($this->_run_modifier("suggest_reply", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�ظ�����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="suggest_del" <?php if ($this->_run_modifier("suggest_del", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ɾ������
</label>
</li>
<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>
	  		<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>���߲����</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">	 
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="database" <?php if ($this->_run_modifier("database", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���ݿ�
</label>
</li>
<!--
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="locoyspider" <?php if ($this->_run_modifier("locoyspider", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ͷ�ɼ�
</label>
</li>-->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_payment" <?php if ($this->_run_modifier("site_payment", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />֧����ʽ 
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_qqconnect" <?php if ($this->_run_modifier("set_qqconnect", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />QQ����  
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_sinaconnect" <?php if ($this->_run_modifier("set_sinaconnect", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />����΢����¼ 
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_taobaoconnect" <?php if ($this->_run_modifier("set_taobaoconnect", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�Ա��ʺŵ�¼ 
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="mailqueue" <?php if ($this->_run_modifier("mailqueue", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�ʼ�Ⱥ��  
</label>
</li>
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="gifts" <?php if ($this->_run_modifier("gifts", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��Ʒ��  
</label>
</li>-->

<!-- -->
<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>
	  	<table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >
        <tr>
          <td height="25" bgcolor="#FFFFFF" style=" border-bottom:1px #CCCCCC dashed; padding-left:20px;"><strong>��վ���ã�</strong></td>
        </tr>
        <tr>
          <td  bgcolor="#FFFFFF" style="  padding-left:14px;">
		  <ul style="margin:0px; padding:3px; list-style:none">
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_set" <?php if ($this->_run_modifier("site_set", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��վ���� 
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_com" <?php if ($this->_run_modifier("set_com", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ҵ���� 
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_per" <?php if ($this->_run_modifier("set_per", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�������� 
</label>
</li>
<!-- -->
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_simple" <?php if ($this->_run_modifier("set_simple", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />΢��Ƹ���� 
</label>
</li>-->
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_search" <?php if ($this->_run_modifier("set_search", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�������� 
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_filter" <?php if ($this->_run_modifier("site_filter", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��Ϣ����
</label>
</li>

<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_mail" <?php if ($this->_run_modifier("site_mail", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�ʼ�����
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_sms" <?php if ($this->_run_modifier("set_sms", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��������
</label>
</li>
<!-- -->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="set_safety" <?php if ($this->_run_modifier("set_safety", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��ȫ����
</label>
</li>


<!-- -->
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_page" <?php if ($this->_run_modifier("site_page", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ҳ�����
</label>
</li>-->
<!-- -->
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_navigation" <?php if ($this->_run_modifier("site_navigation", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�������� 
</label>
</li>-->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="site_category" <?php if ($this->_run_modifier("site_category", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ϵͳ��������  
</label>
</li>
<!--<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="subsite" <?php if ($this->_run_modifier("subsite", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��վ����  
</label>
</li>-->
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="hotword" <?php if ($this->_run_modifier("hotword", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />���Źؼ���  
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="syslog" <?php if ($this->_run_modifier("syslog", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />ϵͳ��־  
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="crons" <?php if ($this->_run_modifier("crons", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />�ƻ�����  
</label>
</li>
<li  class="user_box_li">
<label>
<input name="purview[]" type="checkbox"  value="memberslog" <?php if ($this->_run_modifier("memberslog", 'in_array', 'PHP', 1, $this->_vars['admin_set'])): ?>checked="checked"<?php endif; ?> />��Ա��־  
</label>
</li>

<li class="clear" style="list-style:none; display:none"></li>
</ul>	
</td>
  </tr>
      </table>

	                    <table width="100%" border="0" cellpadding="4" cellspacing="0" bgcolor="#FFFFFF"  >

                          <tr>
                            <td height="50" bgcolor="#FFFFFF" style=" border-top:1px #CCCCCC dashed; padding-left:20px;">
							<?php if ($this->_vars['admin_purview'] == "all"): ?>
							<input name="id" type="hidden" value="<?php echo $this->_vars['account']['admin_id']; ?>
" />
                              <input name="submit3" type="submit" class="admin_submit"    value="�޸�"/>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <?php endif; ?>
                              <input name="submit222" type="button" class="admin_submit"    value="����" onclick="Javascript:window.history.go(-1)"/>
                                   </td>
                          </tr>
                        </table>
    </form>
  <?php endif; ?> 
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>