<?php
/*********************************************
*��ʿְλ�б�
* *******************************************/
function tpl_function_qishi_mianshi_list($params, &$smarty)
{
global $db,$_CFG;
$arrset=explode(',',$params['set']);
foreach($arrset as $str)
{
$a=explode(':',$str);
	switch ($a[0])
	{
	case "�б���":
		$aset['listname'] = $a[1];
		break;
	case "��ʾ��Ŀ":
		$aset['row'] = $a[1];
		break;
	case "��ʼλ��":
		$aset['start'] = $a[1];
		break;
	case "��ҳ��ʾ":
		$aset['page'] = $a[1];
		break;	
	case "�б�ҳ":
		$aset['listpage'] = $a[1];
		break;	
	}
}
$aset=array_map("get_smarty_request",$aset);
$aset['listname']=isset($aset['listname'])?$aset['listname']:"list";
$aset['listpage']=isset($aset['listpage'])?$aset['listpage']:"QS_mianshilist";
$aset['row']=intval($aset['row'])>0?intval($aset['row']):10;
if ($aset['row']>30)$aset['row']=30;
$aset['start']=isset($aset['start'])?intval($aset['start']):0;
$openorderby=false;

if (isset($aset['page']))
{
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$total_sql="SELECT COUNT(*) AS num FROM ".table('mianshi').$wheresql;
	//echo $total_sql;
	$total_count=$db->get_total($total_sql);	
	$page = new page(array('total'=>$total_count, 'perpage'=>$aset['row'],'alias'=>$aset['listpage'],'getarray'=>$_GET));
	$currenpage=$page->nowindex;
	$aset['start']=abs($currenpage-1)*$aset['row'];
	if ($total_count>$aset['row'])
	{
	$smarty->assign('page',$page->show(3));
	$smarty->assign('pagemin',$page->show(4));
	}
	$smarty->assign('total',$total_count);
}
	$limit=" LIMIT {$aset['start']} , {$aset['row']}";
	$list = $id = array();
	$idresult = $db->query("SELECT id FROM ".table('mianshi').$wheresql.$orderbysql.$limit);
	//echo "SELECT id FROM {$jobstable} ".$wheresql.$orderbysql.$limit;
	while($row = $db->fetch_array($idresult))
	{
	$id[]=$row['id'];
	}
	if (!empty($id))
	{
	$wheresql=" WHERE id IN (".implode(',',$id).") ";
	$result = $db->query("SELECT * FROM ".table('mianshi').$wheresql.$orderbysql);	
	//echo "SELECT * FROM ".table('jobs')." ".$wheresql.$orderbysql;
		while($row = $db->fetch_array($result))
		{
		
		$list[] = $row;
		}
	}
	else
	{
	$list=array();
	}
	$smarty->assign($aset['listname'],$list);
}
?>