<?php
 /*
 * 74cms ������ϸҳ��
 * ============================================================================
 * ��Ȩ����: ��ʿ���磬����������Ȩ����
 * ��վ��ַ: http://www.74cms.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ��������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã��������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
$alias="QS_resumeshow";
require_once(dirname(__FILE__).'/../include/common.inc.php');
require_once(dirname(__FILE__).'/../include/mysql.class.php');
$db = new mysql($dbhost,$dbuser,$dbpass,$dbname);
$wheresql=" WHERE  id=".$_GET['id']."";
$val=$db->getone("select * from ".table('resume').$wheresql." LIMIT  1");
if(!($_COOKIE['QS']['uid']==$val['uid']&&$_COOKIE['QS']['utype']==1))
showmsg('��ʹ����ҵ�˻���¼��',1);
if($mypage['caching']>0){
        $smarty->cache =true;
		$smarty->cache_lifetime=$mypage['caching'];
	}else{
		$smarty->cache = false;
	}
$cached_id=$_CFG['subsite_id']."|".$alias.(isset($_GET['id'])?"|".(intval($_GET['id'])%100).'|'.intval($_GET['id']):'').(isset($_GET['page'])?"|p".intval($_GET['page'])%100:'');
unset($dbhost,$dbuser,$dbpass,$dbname);
//$mypage['tpl']=get_tpl("resume",$_GET['id']).$mypage['tpl'];
$smarty->display($mypage['tpl'],$cached_id);
$db->close();
unset($smarty);
?>