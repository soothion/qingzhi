<?php
 /*
 * 74cms ϵͳ����
 * ============================================================================
 * ��Ȩ����: ��ʿ���磬����������Ȩ����
 * ��վ��ַ: http://www.74cms.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ��������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã��������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__).'/../data/config.php');
require_once(dirname(__FILE__).'/include/admin_common.inc.php');
$act = !empty($_GET['act']) ? trim($_GET['act']) : 'set';
check_permissions($_SESSION['admin_purview'],"site_set");
$smarty->assign('pageheader',"��վ����");
if($act == 'set')
{	
	get_token();
	$smarty->assign('rand',rand(1,100));
	$smarty->assign('upfiles_dir',$upfiles_dir);	
	$smarty->assign('config',get_cache('config'));
	$smarty->assign('navlabel',"set");	
	$smarty->display('set/admin_set_config.htm');
}
elseif($act == 'site_setsave')
{
	check_token();
	require_once(ADMIN_ROOT_PATH.'include/upload.php');
		if($_FILES['web_logo']['name'])
		{
		$web_logo=_asUpFiles($upfiles_dir, "web_logo", 1024*2, 'jpg/gif/png',"logo");
		!$db->query("UPDATE ".table('config')." SET value='$web_logo' WHERE name='web_logo'")?adminmsg('����վ������ʧ��', 1):"";
		}
		if($_FILES['slide1_photo']['name'])
		{
		$slide1_photo=_asUpFiles($upfiles_dir, "slide1_photo", 1024*2, 'jpg/gif/png',"slide1_photo");
		!$db->query("UPDATE ".table('config')." SET value='$slide1_photo' WHERE name='slide1_photo'")?adminmsg('����վ������ʧ��', 1):"";
		}
		if($_FILES['slide2_photo']['name'])
		{
		$slide2_photo=_asUpFiles($upfiles_dir, "slide2_photo", 1024*2, 'jpg/gif/png',"slide2_photo");
		!$db->query("UPDATE ".table('config')." SET value='$slide2_photo' WHERE name='slide2_photo'")?adminmsg('����վ������ʧ��', 1):"";
		}
				if($_FILES['slide3_photo']['name'])
		{
		$slide3_photo=_asUpFiles($upfiles_dir, "slide3_photo", 1024*2, 'jpg/gif/png',"slide3_photo");
		!$db->query("UPDATE ".table('config')." SET value='$slide3_photo' WHERE name='slide3_photo'")?adminmsg('����վ������ʧ��', 1):"";
		}
				if($_FILES['slide4_photo']['name'])
		{
		$slide4_photo=_asUpFiles($upfiles_dir, "slide4_photo", 1024*2, 'jpg/gif/png',"slide4_photo");
		!$db->query("UPDATE ".table('config')." SET value='$slide4_photo' WHERE name='slide4_photo'")?adminmsg('����վ������ʧ��', 1):"";
		}
				if($_FILES['slide5_photo']['name'])
		{
		$slide5_photo=_asUpFiles($upfiles_dir, "slide5_photo", 1024*2, 'jpg/gif/png',"slide5_photo");
		!$db->query("UPDATE ".table('config')." SET value='$slide5_photo' WHERE name='slide5_photo'")?adminmsg('����վ������ʧ��', 1):"";
		}
		foreach($_POST as $k => $v)
		{
		!$db->query("UPDATE ".table('config')." SET value='{$v}' WHERE name='{$k}'")?adminmsg('����վ������ʧ��', 1):"";
		}
		refresh_cache('config');
		adminmsg("����ɹ���",2);
}
elseif($act == 'map')
{
	get_token();
	$smarty->assign('config',$_CFG);
	$smarty->assign('navlabel',"map");	
	$smarty->display('set/admin_set_map.htm');
}
elseif($act == 'agreement')
{
	get_token();
	$smarty->assign('config',$_CFG);
	$smarty->assign('text',get_cache('text'));
	$smarty->assign('navlabel',"agreement");	
	$smarty->display('set/admin_set_agreement.htm');
}
elseif($act == 'set_save')
{
	check_token();
	check_permissions($_SESSION['admin_purview'],"mb_set");
	foreach($_POST as $k => $v)
	{
	!$db->query("UPDATE ".table('config')." SET value='{$v}' WHERE name='{$k}'")?adminmsg('��������ʧ��', 1):"";
	}
	foreach($_POST as $k => $v)
	{
	!$db->query("UPDATE ".table('text')." SET value='{$v}' WHERE name='{$k}'")?adminmsg('��������ʧ��', 1):"";
	}
	refresh_cache('config');
	refresh_cache('text');
	adminmsg("����ɹ���",2);
}
elseif($act == 'search')
{
	get_token();
	$smarty->assign('pageheader',"��������");
	$smarty->assign('config',$_CFG);
	$smarty->display('set/admin_set_search.htm');
}
elseif($act == 'search_save')
{
	check_token();
	check_permissions($_SESSION['admin_purview'],"set_search");
	foreach($_POST as $k => $v)
	{
	!$db->query("UPDATE ".table('config')." SET value='{$v}' WHERE name='{$k}'")?adminmsg('��������ʧ��', 1):"";
	}
	refresh_cache('config');
	adminmsg("����ɹ���",2);
}
?>