<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2014-05-04 10:52 �й���׼ʱ�� */  $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<script src="http://api.map.baidu.com/api?v=1.2" type="text/javascript"></script>
<div class="admin_main_nr_dbox">
 <div class="pagetit">
	<div class="ptit"> <?php echo $this->_vars['pageheader']; ?>
</div>
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("set/admin_set_config_nav.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
  <div class="clear"></div>
</div>
<div class="toptip link_lan">
	<h2>��ʾ��</h2>
	<p>
���ӵ�ͼAPI�ķ�������<a href="http://openapi.baidu.com/map/index.html" target="_blank"><strong>�ٶ�</strong></a>�ṩ���κη�ӯ������վ����ʹ�á������<a href="http://openapi.baidu.com/map/terms.html" target="_blank"><strong>ʹ������</strong></a>�����ϸ��Ϣ��<br />
        ��������ҵ��;����Ҫͬ�ٶȵ�ͼ���д��Э����ðٶȵ�ͼ���������

</p>
</div>
<div class="toptit">���ӵ�ͼ����</div>
  <form action="admin_set.php?act=site_setsave" method="post"  name="form1" id="form1">
  <?php echo $this->_vars['inputtoken']; ?>

    <table width="100%" border="0" cellspacing="5" cellpadding="0">
    <tr>
      <td valign="top"  ><table width="100%" border="0" cellpadding="1" cellspacing="5"  class="link_lan" style=" margin-bottom:3px;">
        
		<!-- -->
        <tr>
          <td width="120" align="right">Ĭ�����ĵ�X���꣺</td>
          <td width="200" height="25"><input name="map_center_x" type="text" value="<?php echo $this->_vars['config']['map_center_x']; ?>
"  id="map_center_x"  class="input_text_200"  style="color:#009900; font-weight:bold"/></td>
          <td>�ƶ����ӵ�ͼ��ϵͳ���Զ���ȡ����</td>
        </tr>
        <tr>
          <td align="right">Ĭ�����ĵ�Y���꣺</td>
          <td height="25"><input name="map_center_y" type="text" value="<?php echo $this->_vars['config']['map_center_y']; ?>
"  id="map_center_y"  class="input_text_200" style="color:#009900; font-weight:bold"/></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">Ĭ�����ż���</td>
          <td height="25"><input name="map_zoom" type="text" value="<?php echo $this->_vars['config']['map_zoom']; ?>
" id="map_zoom"   class="input_text_200" style="color: #009900; font-weight:bold"/></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td height="25"><input name="submit" type="submit" class="admin_submit"    value="�����޸�"/></td>
          <td>&nbsp;</td>
        </tr>
        
      </table></td>
      </tr>
    <tr>
      <td valign="top">
	  <div style="width:600px;height:400px; border:1px #CCCCCC solid" id="container"></div></td>
      </tr>
  </table>
  </form>
</div>
<script type="text/javascript">
var map = new BMap.Map("container");       // ������ͼʵ��   
var point = new BMap.Point(<?php echo $this->_vars['config']['map_center_x']; ?>
,<?php echo $this->_vars['config']['map_center_y']; ?>
);  // ����������   
map.centerAndZoom(point, <?php echo $this->_vars['config']['map_zoom']; ?>
); 
map.addControl(new BMap.NavigationControl());   
map.addEventListener("moveend", function(){   
var center = map.getCenter();
document.getElementById("map_center_x").value=center.lng; 
document.getElementById("map_center_y").value= center.lat; 
document.getElementById("map_zoom").value=map.getZoom();
});   
</script>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("sys/admin_footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>