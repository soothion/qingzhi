<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-11-24 11:30 �й���׼ʱ�� */ ?>
<script type="text/javascript" src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.vtip-min.js"></script>
<table width="142" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="35" align="center"  style="color: #006600">�������״̬</td>
  </tr>
</table>
   <table width="130" border="0" cellpadding="0" cellspacing="5" align="center">
              <tr>
                <td height="25" align="center" background="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/46.gif" class="user_right_box">
				<table width="100" border="0"  cellpadding="0" cellspacing="3" style="cursor:help"   class="vtip"  title="��������ָ��Ϊ��<span style=color:#FF0000><strong><?php if ($this->_vars['resume_basic']['complete_percent'] == ""): ?>0<?php else:  echo $this->_vars['resume_basic']['complete_percent'];  endif; ?></strong> %</span><br />����ָ��С��<strong>60%</strong>��Ϊ��Ч������<br />��������ָ��Խ�ߣ�����Խ��ǰ">
     <tr>
                      <td width="70"  align="left" >
					  <div style="border:1px #006600 solid; width:70px; height:8px;">
					  <div style="width:<?php if ($this->_vars['resume_basic']['complete_percent'] == ""): ?>0<?php else:  echo $this->_vars['resume_basic']['complete_percent'];  endif; ?>%;background-color:#99CC00; height:8px;">
					  </div>
					  </div>
					  </td>
                      <td style="color: #009900; font-size:12px; "><?php if ($this->_vars['resume_basic']['complete_percent'] == ""): ?>0<?php else:  echo $this->_vars['resume_basic']['complete_percent'];  endif; ?>%</td>
     </tr>
</table>
				
				</td>
              </tr>
</table>
     <table width="130" border="0" align="center" cellpadding="0" cellspacing="5"  class="link_bk" style="margin-bottom:10px;" >
              <tr>
                <td height="28" align="center" background="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/46.gif" class="user_right_box"><a href="?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
" style="color:#006600">��ʾ������������</a></td>
              </tr>
</table>
  <table width="142" border="0" cellspacing="0" cellpadding="0"  class="link_bk">
			  <?php if ($this->_vars['act'] == "make1"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;������Ϣ
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			  <?php if ($this->_vars['resume_basic']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make1&pid=<?php echo $this->_vars['pid']; ?>
">������Ϣ</a>
			  </td>
            </tr>
			<?php endif; ?>
           	<?php if ($this->_vars['act'] == "make2"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;��ְ����
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_basic']['intention_jobs']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make2&pid=<?php echo $this->_vars['pid']; ?>
">��ְ����</a>
			  </td>
            </tr>
			<?php endif; ?>
           	<?php if ($this->_vars['act'] == "make3"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;����ָ��
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_basic']['specialty']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make3&pid=<?php echo $this->_vars['pid']; ?>
">����ָ��</a>
			  </td>
            </tr>
			<?php endif; ?> 
     	<?php if ($this->_vars['act'] == "make4" || $this->_vars['act'] == "edit_education"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;��������
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_education']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make4&pid=<?php echo $this->_vars['pid']; ?>
">��������</a>
			  </td>
            </tr>
			<?php endif; ?> 
     	<?php if ($this->_vars['act'] == "make5" || $this->_vars['act'] == "edit_work"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;��������
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_work']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make5&pid=<?php echo $this->_vars['pid']; ?>
">��������</a>
			  </td>
            </tr>
			<?php endif; ?> 
		<?php if ($this->_vars['act'] == "make6" || $this->_vars['act'] == "edit_training"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;��ѵ����
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_training']): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make6&pid=<?php echo $this->_vars['pid']; ?>
">��ѵ����</a>
			  </td>
            </tr>
			<?php endif; ?>
		<?php if ($this->_vars['act'] == "make7" || $this->_vars['act'] == "photo_cutting"): ?>
            <tr>
              <td height="32" align="center"  class="resume_right_on">
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/50.png" align="absmiddle" />&nbsp;&nbsp;����ͷ��
			  </td>
            </tr>
			<?php else: ?>
			<tr>
              <td height="32" align="center">
			    <?php if ($this->_vars['resume_basic']['photo'] == ""): ?>
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/48.png" align="absmiddle" />
			  <?php else: ?>			  
			  <img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/49.png" align="absmiddle" />
			  <?php endif; ?>
			  &nbsp;&nbsp;<a href="?act=make7&pid=<?php echo $this->_vars['pid']; ?>
">����ͷ��</a>
			  </td>
            </tr>
			<?php endif; ?>         
</table>