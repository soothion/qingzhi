<?php
/*
 * 74cms ���˻�Ա����
 * ============================================================================
 * ��Ȩ����: ��ʿ���磬����������Ȩ����
 * ��վ��ַ: http://www.74cms.com��
 * ----------------------------------------------------------------------------
 * �ⲻ��һ�������������ֻ���ڲ�������ҵĿ�ĵ�ǰ���¶Գ����������޸ĺ�
 * ʹ�ã�������Գ���������κ���ʽ�κ�Ŀ�ĵ��ٷ�����
 * ============================================================================
*/
define('IN_QISHI', true);
require_once(dirname(__FILE__) . '/personal_common.php');
$smarty->assign('leftmenu',"resume");
if ($act=='make')
{
	$smarty->assign('user',$user);
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$wheresql=" WHERE id='".$id."'  AND type_id=17";
		$sql="SELECT * FROM ".table('article').$wheresql;
		$result =$db->getone($sql.$limit);
		$smarty->assign('action','�޸�');
		$smarty->assign('tucao',$result);
	}
	else $smarty->assign('action','���');
	$smarty->display('member_personal/personal_tucao_make.htm');
}
//�����²ۣ������²���Ϣ
elseif ($act=='make_save')
{
	$setsqlarr['type_id']=17;
	$setsqlarr['title']=trim($_POST['title'])?trim($_POST['title']):showmsg('����д�²۱��⣡',1);
	$setsqlarr['content']=trim($_POST['content'])?trim($_POST['content']):showmsg('����д�²����ݣ�',1);
	$setsqlarr['author']=$_POST['niming']?'����':$_SESSION['username'];
	$setsqlarr['addtime']=$timestamp;
	if (intval($_REQUEST['tid'])===0)
	{		
		$id=inserttable(table('article'),$setsqlarr,1);
		if (empty($id))showmsg("����ʧ�ܣ�",0);
		write_memberslog($_SESSION['uid'],2,1101,$_SESSION['username'],"������²�");
		$link[0]['text'] = "�ҵ��²�";
		$link[0]['href'] = "?act=tucao_list";
		$link[1]['text'] = "������һҳ";
		$link[1]['href'] = "?act=make_save";
		showmsg("��ӳɹ�",2,$link);
	}
	else
	{
		updatetable(table('article'),$setsqlarr," id='".intval($_REQUEST['id'])."'  AND author='{$setsqlarr['username']}'");
		write_memberslog($_SESSION['uid'],2,1105,$_SESSION['username'],"�޸����²�({$_POST['title']})");
		$link[0]['text'] = "�ҵ��²�";
		$link[0]['href'] = "?act=tucao_list";
		$link[1]['text'] = "������һҳ";
		$link[1]['href'] = "?act=make_save";
		showmsg("�޸ĳɹ���",2,$link);
	}		
}

//�²��б�
elseif ($act=='tucao_list')
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$wheresql=" WHERE author='".$_SESSION['username']."' AND type_id=17";
	$sql="SELECT * FROM ".table('article').$wheresql;
	$total=$db->get_total("SELECT COUNT(*) AS num FROM ".table('article').$wheresql);
	$perpage=10;
	$page = new page(array('total'=>$total, 'perpage'=>$perpage));
	$offset=($page->nowindex-1)*$perpage;
	if(isset($offset)&&!empty($perpage))
		{
		$limit=" LIMIT {$offset},{$perpage}";
		}
	$result = $db->query($sql.$limit);
	while($row = $db->fetch_array($result))
		{
		$list[] = $row;
		}
	$smarty->assign('title','�ҵ��²� - ���˻�Ա����');
	$smarty->assign('act',$act);
	$smarty->assign('total',$total);
	$smarty->assign('page',$page->show(3));
	$smarty->assign('tucao_list',$list);
	$smarty->display('member_personal/personal_tucao_list.htm');
}


//ɾ������
elseif ($act=='del_tucao')
{
	if (empty($_REQUEST['id']))
	{
	showmsg('��û��ѡ���²ۣ�',1);
	}
	else
	{
	$username=$_SESSION['username'];
	$sqlin=$_REQUEST['id'];
	$db->query("Delete from ".table('article')." WHERE id =$sqlin AND author='{$username}' ")?showmsg('ɾ���ɹ���',2):showmsg('ɾ��ʧ�ܣ�',0);
	}
}
unset($smarty);
?>