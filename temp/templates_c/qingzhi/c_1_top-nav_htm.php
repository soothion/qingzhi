<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-10-12 16:03 �й���׼ʱ�� */ ?>

<script type="text/javascript">
//��������¼
$.get("<?php echo $this->_vars['QISHI']['site_dir']; ?>
plus/ajax_user.php", {"act":"top_loginform"},
function (data,textStatus)
{			
$(".top_side").html(data);
}
);
</script>