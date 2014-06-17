<?php
/*
 * 74cms 个人会员中心
 * ============================================================================
 * 版权所有: 骑士网络，并保留所有权利。
 * 网站地址: http://www.74cms.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
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
		$smarty->assign('action','修改');
		$smarty->assign('tucao',$result);
	}
	else $smarty->assign('action','添加');
	$smarty->display('member_personal/personal_tucao_make.htm');
}
//创建吐槽－保存吐槽信息
elseif ($act=='make_save')
{
	$setsqlarr['type_id']=17;
	$setsqlarr['title']=trim($_POST['title'])?trim($_POST['title']):showmsg('请填写吐槽标题！',1);
	$setsqlarr['content']=trim($_POST['content'])?trim($_POST['content']):showmsg('请填写吐槽内容！',1);
	$setsqlarr['author']=$_POST['niming']?'匿名':$_SESSION['username'];
	$setsqlarr['addtime']=$timestamp;
	if (intval($_REQUEST['tid'])===0)
	{		
		$id=inserttable(table('article'),$setsqlarr,1);
		if (empty($id))showmsg("保存失败！",0);
		write_memberslog($_SESSION['uid'],2,1101,$_SESSION['username'],"添加了吐槽");
		$link[0]['text'] = "我的吐槽";
		$link[0]['href'] = "?act=tucao_list";
		$link[1]['text'] = "返回上一页";
		$link[1]['href'] = "?act=make_save";
		showmsg("添加成功",2,$link);
	}
	else
	{
		updatetable(table('article'),$setsqlarr," id='".intval($_REQUEST['id'])."'  AND author='{$setsqlarr['username']}'");
		write_memberslog($_SESSION['uid'],2,1105,$_SESSION['username'],"修改了吐槽({$_POST['title']})");
		$link[0]['text'] = "我的吐槽";
		$link[0]['href'] = "?act=tucao_list";
		$link[1]['text'] = "返回上一页";
		$link[1]['href'] = "?act=make_save";
		showmsg("修改成功！",2,$link);
	}		
}

//吐槽列表
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
	$smarty->assign('title','我的吐槽 - 个人会员中心');
	$smarty->assign('act',$act);
	$smarty->assign('total',$total);
	$smarty->assign('page',$page->show(3));
	$smarty->assign('tucao_list',$list);
	$smarty->display('member_personal/personal_tucao_list.htm');
}


//删除简历
elseif ($act=='del_tucao')
{
	if (empty($_REQUEST['id']))
	{
	showmsg('您没有选择吐槽！',1);
	}
	else
	{
	$username=$_SESSION['username'];
	$sqlin=$_REQUEST['id'];
	$db->query("Delete from ".table('article')." WHERE id =$sqlin AND author='{$username}' ")?showmsg('删除成功！',2):showmsg('删除失败！',0);
	}
}
unset($smarty);
?>