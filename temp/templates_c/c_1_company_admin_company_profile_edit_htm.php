<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-12-01 11:31 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/cache_classify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	showmenu("#nature_cn","#menu1","#nature");
	showmenu("#trade_cn","#menu2","#trade");
	showmenulayer("#district_cn","#menu3","#district","#sdistrict",QS_city);
	showmenu("#scale_cn","#menu4","#scale");	
});
</script>
<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
  <div class="clear"></div>
</div>
<div class="toptit">�޸���ҵ���� - <span style="color:#0066CC"><?php echo $this->_vars['company_profile']['companyname']; ?>
</span></div>
<form id="Form1" name="Form1" method="post" action="?act=company_profile_save" >
<?php echo $this->_vars['inputtoken']; ?>

<table width="100%" border="0" cellpadding="4" cellspacing="0"   >
<tr>
          <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">������Ա��</td>
          <td  style=" border-bottom:1px #CCCCCC dashed">
<?php echo $this->_vars['company_profile']['user']['username']; ?>

		 </td>
      </tr>
	  <tr>
          <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">���ʱ�䣺</td>
          <td  style=" border-bottom:1px #CCCCCC dashed">
		  <?php echo $this->_run_modifier($this->_vars['company_profile']['addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>

		 </td>
        </tr>
		<tr>
          <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">��ӷ�ʽ��</td>
          <td  style=" border-bottom:1px #CCCCCC dashed">
		  <?php if ($this->_vars['company_profile']['robot'] == "0"): ?>�˹�<?php endif; ?>
		<?php if ($this->_vars['company_profile']['robot'] == "1"): ?>�ɼ�<?php endif; ?>
		 </td>
        </tr>
		<tr>
          <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed">Ӫҵִ�գ�</td>
          <td  style=" border-bottom:1px #CCCCCC dashed" class="link_lan">
		  <?php if ($this->_vars['company_profile']['license']): ?>
		  <a href="<?php echo $this->_vars['certificate_dir'];  echo $this->_vars['company_profile']['certificate_img']; ?>
" target="_blank" title="����鿴"> <?php echo $this->_vars['company_profile']['license']; ?>
</a>		 
		  <?php else: ?>
		  δ�ϴ�
		  <?php endif; ?>
		 </td>
        </tr>
        <tr>
          <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"> ��֤״̬��</td>
          <td  style=" border-bottom:1px #CCCCCC dashed">
		  <label><input name="audit"  type="radio" value="1" <?php if ($this->_vars['company_profile']['audit'] == "1"): ?>checked="checked"<?php endif; ?> />��֤ͨ��</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <label><input name="audit"  type="radio" value="2" <?php if ($this->_vars['company_profile']['audit'] == "2"): ?>checked="checked"<?php endif; ?> />�ȴ���֤</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  <label><input name="audit"  type="radio" value="3" <?php if ($this->_vars['company_profile']['audit'] == "3"): ?>checked="checked"<?php endif; ?> />��֤δͨ��</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <label><input name="audit"  type="radio" value="0" <?php if ($this->_vars['company_profile']['audit'] == "0"): ?>checked="checked"<?php endif; ?> />δ��֤</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 </td>
        </tr>
		
  <tr>
    <td width="110" height="30" align="right"   style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>��˾���ƣ�</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="companyname" type="text" class="input_text_200" id="companyname" maxlength="30"  style="width:350px;" value="<?php echo $this->_vars['company_profile']['companyname']; ?>
" /></td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>��ҵ���ʣ�</td>
    <td  style=" border-bottom:1px #CCCCCC dashed">
	<div>
	<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_company_type,�б���:li"), $this);?>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['nature_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
"  readonly="readonly" name="nature_cn" id="nature_cn" class="input_text_200 input_text_selsect"/>
		<input name="nature" id="nature" type="hidden" value="<?php echo $this->_vars['company_profile']['nature']; ?>
" />
		<div id="menu1" class="menu">
			<ul>
			<?php if (count((array)$this->_vars['li'])): foreach ((array)$this->_vars['li'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>
		  
		 </td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold;">*</span>������ҵ��</td>
    <td  style=" border-bottom:1px #CCCCCC dashed">
	<div>
	<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_trade,�б���:li"), $this);?>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['trade_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
"  readonly="readonly" name="trade_cn" id="trade_cn" class="input_text_200 input_text_selsect"/>
		<input name="trade" id="trade" type="hidden" value="<?php echo $this->_vars['company_profile']['trade']; ?>
" />
		<div id="menu2" class="dmenu shadow">
			<ul>
			<?php if (count((array)$this->_vars['li'])): foreach ((array)$this->_vars['li'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>
	
	 </td>
  </tr>
  <tr>
    <td height="30" align="right" style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>���ڵ�����</td>
    <td  style=" border-bottom:1px #CCCCCC dashed">
	<div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['district_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_selsect"/>
		<input name="district" id="district" type="hidden" value="<?php echo $this->_vars['company_profile']['district']; ?>
" />
		<input name="sdistrict" id="sdistrict" type="hidden" value="<?php echo $this->_vars['company_profile']['sdistrict']; ?>
" />
		<div id="menu3" class="dmenu shadow">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_province,����:QS_district,id:0"), $this);?>
			<?php if (count((array)$this->_vars['c_province'])): foreach ((array)$this->_vars['c_province'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		<div id="menu3_s" class="dmenu shadow" style="display:none"></div>
		  </div>
 
	</td>
  </tr>
  <tr>
    <td height="30" align="right" style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>��˾��ģ��</td>
    <td  style=" border-bottom:1px #CCCCCC dashed">
	<div>
	<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_scale,�б���:li"), $this);?>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['company_profile']['scale_cn'], 'default', 'plugin', 1, "��ѡ��"); ?>
"  readonly="readonly" name="scale_cn" id="scale_cn" class="input_text_200 input_text_selsect"/>
		<input name="scale" id="scale" type="hidden" value="<?php echo $this->_vars['company_profile']['scale']; ?>
" />
		<div id="menu4" class="menu">
			<ul>
			<?php if (count((array)$this->_vars['li'])): foreach ((array)$this->_vars['li'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		  </div>
	 </td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>ע���ʽ�</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="registered" type="text" class="input_text_200" id="registered" maxlength="20" value="<?php echo $this->_vars['company_profile']['registered']; ?>
" style="width:80px;"/>
      ��
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>
        <input name="currency" type="radio" value="�����"  <?php if ($this->_vars['company_profile']['currency'] == "" || $this->_vars['company_profile']['currency'] == "�����"): ?> checked="checked"<?php endif; ?> />
        �����</label>
      &nbsp;&nbsp;&nbsp;
      <label>
        <input type="radio" name="currency" value="��Ԫ" <?php if ($this->_vars['company_profile']['currency'] == "��Ԫ"): ?> checked="checked"<?php endif; ?>/>
        ��Ԫ</label>    </td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>�� ϵ �ˣ�</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="contact" type="text" class="input_text_200" id="contact" maxlength="25" value="<?php echo $this->_vars['company_profile']['contact']; ?>
"/></td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>��ϵ�绰��</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="telephone" type="text" class="input_text_200" id="telephone" maxlength="25" value="<?php echo $this->_vars['company_profile']['telephone']; ?>
"/></td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>��ϵ���䣺</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="email" type="text" class="input_text_200" id="email" maxlength="25" value="<?php echo $this->_vars['company_profile']['email']; ?>
"/></td>
  </tr>
  <tr>
    <td height="30" align="right" style=" border-bottom:1px #CCCCCC dashed">��˾��ַ��</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="website" type="text" class="input_text_200" id="website" maxlength="80" value="<?php echo $this->_vars['company_profile']['website']; ?>
"/></td>
  </tr>
  <tr>
    <td height="30" align="right"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span>ͨѶ��ַ��</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><input name="address" type="text" class="input_text_200" id="address" maxlength="80"  style="width:447px;" value="<?php echo $this->_vars['company_profile']['address']; ?>
"/></td>
  </tr>
  <tr>
    <td align="right" valign="top"  style=" border-bottom:1px #CCCCCC dashed"><span style="color:#FF3300; font-weight:bold">*</span> ��˾���ܣ�</td>
    <td  style=" border-bottom:1px #CCCCCC dashed"><textarea name="contents" class="company_mb_textarea" id="introduction" style="width:450px; height:150px;"onpropertychange="if(this.value.length&gt;2000){this.value=this.value.slice(0,2000)}"><?php echo $this->_vars['company_profile']['contents']; ?>
</textarea>
        <br />
        <div style="line-height:30px; height:30px;"> <span style="color:#333333">�뽫����������2000�����ڽ�����д</span></div></td>
  </tr>
  
  <tr>
          <td align="right" valign="top" >&nbsp;</td>
          <td   > 
           <label><input name="yellowpages"  type="checkbox" value="1" <?php if ($this->_vars['company_profile']['yellowpages'] == '1'): ?>checked="checked"<?php endif; ?> />
           ��˾��Ϣ����վ��ҳ����ʾ</label>
		   </td>
        </tr>
  <tr>
            <td height="30" align="right"   >&nbsp;</td>
            <td height="120"   >
              <input type="hidden" name="id"  value="<?php echo $this->_vars['company_profile']['id']; ?>
" />
			  <input type="hidden" name="cuid"  value="<?php echo $this->_vars['company_profile']['uid']; ?>
" />
			  <input type="hidden" name="url"  value="<?php echo $this->_vars['url']; ?>
" />
              <input name="submit3" type="submit" class="admin_submit"    value="�����޸�"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input name="submit22" type="button" class="admin_submit"    value="�� ��" onclick="window.location.href='<?php echo $this->_vars['url']; ?>
'"/>
            </span></td>
          </tr>
  </table>
  </form>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>