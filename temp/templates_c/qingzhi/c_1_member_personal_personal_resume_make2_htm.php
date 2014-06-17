<?php require_once('D:\PHPnow\htdocs\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  require_once('D:\PHPnow\htdocs\include\template_lite\plugins\function.qishi_get_classify.php'); $this->register_function("qishi_get_classify", "tpl_function_qishi_get_classify",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2013-08-26 21:02 �й���׼ʱ�� */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
favicon.ico" />
<meta name="author" content="��ְ��" />
<meta name="copyright" content="qingzhi.org" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/global.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.idTabs.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.user.selectlayer.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_dir']; ?>
data/cache_classify.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
$(document).ready(function()
{
	$("#tabshow li:nth-child(2)>a").addClass("selected");
	//�˵���
	showmenulayer("#district_cn","#menu2","#district","#sdistrict",QS_city);
	showmenu("#wage_cn","#menu1","#wage","#Form1","#wage");	
	//���������ֶθ���
	$("#nature_cn").val($(":radio[name='nature'][checked]").attr("title"));
	$("input[name='nature']").click(function(){
	$("#nature_cn").val($(this).attr("title"));
	// alert ($("#nature_cn").val())
	});
//��ҵѡ��
OpentradeLayer("#showtrade","#trade","#trade_cn","#trade_txt","#sel_trade",80);
//���������ݻָ���ҵѡ��
var get_trade="<?php echo $this->_vars['resume_basic']['trade']; ?>
";
if (get_trade!="")
{
	get_trade=get_trade.split(",");
	for( var i=0;i<get_trade.length;++i)
	{
		$("#sel_trade :checkbox").each(function(index)
			{
				if ($(this).val()==get_trade[i]) $(this).attr("checked",true)
		
			});
	}
	$("#sel_trade  :checkbox").parent().css("color","");
	$("#sel_trade  :checkbox[checked]").parent().css("color","#009900");
}
OpenCategoryLayer("#showjobs","#sel_category","#intention_jobs_id","#intention_jobs","#jobs_txt",QS_jobs,80);
//���������ݻָ�ְλѡ��
var jobcategory="<?php echo $this->_vars['resume_jobs_id']; ?>
";
if (jobcategory)
{	
	jobcategory=jobcategory.split("-");
	for( var i=0;i<jobcategory.length;++i)
	{
		var catid=jobcategory[i].split(".");
	 	var jscat=QS_jobs[catid[0]];
		if(catid[1]!=="0"){
			var html=MakeLi(jscat,catid[0]);
				if ($("#sel_category .item[id='"+catid[0]+"'] .sitem").html()=="")
				{
					var html=MakeLi(jscat,catid[0]);
					$("#sel_category .item[id='"+catid[0]+"'] .sitem").html(html);
				}
		}

		if (catid[1]=="0")
		{
		$("#sel_category  :checkbox[value="+catid[0]+"]").attr("checked",true);
		$("#sel_category .item[id='"+catid[0]+"'] .sitem :checkbox").attr("checked",true);
		}
		else
		{
		$("#sel_category  .sitem :checkbox[value='"+catid[1]+"']").attr("checked",true);
		}
	}
					$("#sel_category .OpenFloatBox .item label :checkbox").parent().css("color","");
					$("#sel_category .OpenFloatBox .item label :checkbox[checked]").parent().css("color","#FF6600");
					$("#sel_category .OpenFloatBox .sitem :checkbox[checked]").each(function(index){
					 	$(this).parent().parent().prev().css("color","#FF6600");
					});
					CopyItem("#sel_category");
}
//�ύ����
	$("#submitsave").click(function(){
	$('#Form1').submit();
	})
});
//��֤
$(document).ready(function() {
$("#Form1").validate({
// debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   nature:{
   required: true
   },
   district: {
	min:1
   },
   wage: {
	min:1
   },
   intention_jobs:"required",
   trade_cn:"required"
	},
    messages: {
    nature: {
    required: "��ѡ������ְλ����"
   },
    district: {
    min: jQuery.format("��ѡ������������")
   },
   wage: {
    min: "��ѡ��������н"
   },
   intention_jobs:"��ѡ������ְλ",
   trade_cn:"��ѡ��������ҵ"
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
});
function getjobshtml(val)
{
	if (val=="")return false;
    arr=val.split("|");
	var htmlstr='<ul>';
	for (x in arr)
	{
	 var v=arr[x].split(",");
	htmlstr+="<li><label><input name=\"jobs\" type=\"checkbox\" value=\""+v[0]+"\" title=\""+v[1]+"\"/>"+v[1]+"</label></li>";
	}
	htmlstr+="</ul>";
	htmlstr+="<div class=\"clear\"></div>";
	return htmlstr; 
}
function setcheckbox(){
		//����·���ѡ��Ȼ�󿽱�
		$("#s_jobsemenu :checkbox").click(function(){
			if ($("#s_jobsemenu :checkbox[checked]").length>5)
			{
				alert("���ܳ���5��ѡ��");
				$(this).attr("checked",false);
			}
			else
			{
				$("#s_jobsemenu :checkbox").parent().css("color","");
				$("#s_jobsemenu :checkbox[checked]").parent().css("color","#FF0000");
				//��¡
				copyjobshtml();								
			}	
		});
	}
function copyjobshtml()
{
	var a_job_id=new Array();
				var htmlstr='<ul>';
				$("#s_jobsemenu :checkbox[checked]").each(function(index){
				htmlstr+="<li><label><input name=\"jobsid\" type=\"checkbox\" value=\""+$(this).attr("value")+"\" title=\""+$(this).attr("title")+"\" checked/>"+$(this).attr("title")+"</label></li>";
				})
				htmlstr+="</ul>";
				htmlstr+="<div class=\"clear\"></div>";
				$("#menu4 .sel").html(htmlstr);	
	//��ѡ��Ŀ��click
	$(".sel :checkbox").click(function(){
	var selval=$(this).val();
	//alert(selval);
	//ȡ���·���Ӧ�ĸ�ѡ
		$("#s_jobsemenu :checkbox[checked]").each(function(){
			if ($(this).val()==selval)
			{
				$(this).attr("checked",false)
				//���¿�¡
				copyjobshtml();
				$("#s_jobsemenu :checkbox").parent().css("color","");
				$("#s_jobsemenu :checkbox[checked]").parent().css("color","#FF0000");
			}	
		})
	});
}
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("header.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div style="width:1004px;margin:10px auto 50px; min-height:500px;">
<div class="page_location link_bk">
��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['site_dir']; ?>
">��ҳ</a>&nbsp;>&nbsp;<a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a>&nbsp;>&nbsp;��������&nbsp;>&nbsp;�ڶ��� - ��ְ����
</div>
<table width="1004" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top:8px;" >
  <tr>
    <td width="183" valign="top" class="link_bk">
	<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
	</td>
    <td valign="top">
	<div class="user_right_box">
		<div class="user_right_top_tit_bg">		
		  <h1>�ҵļ���</h1>
		</div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" >
        <tr>
          <td height="22">
		  <form id="Form1" name="Form1" method="post" action="?act=make2_save" >
		  <table width="100%" border="0" cellspacing="0" cellpadding="4" o >
            <tr>
              <td height="50" colspan="2" bgcolor="#F5FAFC" style=" border-bottom:1px #CCCCCC dashed; color:#003399">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px;  ">�ڶ��� - ��ְ����</span> <span style="color:#999999">(��<strong  style="color:#FF0000">*</strong>��Ϊ����)</span></td>
              </tr>
			    <tr>
              <td width="100" height="10"></td>
              <td></td>
            </tr>
            <tr>
              <td width="160" height="33" align="right">�����������ְλ��</td>
              <td><input name="recentjobs" type="text" class="input_text_200" id="recentjobs" maxlength="40" style="width:280px;" value="<?php echo $this->_vars['resume_basic']['recentjobs']; ?>
"/><span style="color:#999999"> (�޹��������߿ɺ���)</span></td>
            </tr>
            <tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>������λ���ʣ�</td>
              <td>		  
			  <?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_jobs_nature,�б���:c_nature"), $this);?>
<?php if (count((array)$this->_vars['c_nature'])): foreach ((array)$this->_vars['c_nature'] as $this->_vars['list']): ?>
		   <label><input name="nature"  type="radio" value="<?php echo $this->_vars['list']['id']; ?>
"   <?php if ($this->_vars['resume_basic']['nature'] == $this->_vars['list']['id']): ?> checked="checked"<?php endif; ?>/ title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</label>  &nbsp;&nbsp;&nbsp;&nbsp;
		 <?php endforeach; endif; ?>
		 <input name="nature_cn" id="nature_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['nature_cn']; ?>
" />
		  </td>
            </tr>
			<tr>
              <td height="33" align="right"><strong  style="color:#FF0000">*</strong>��������������</td>
              <td>
			  <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['district_cn'], 'default', 'plugin', 1, "������������"); ?>
"  readonly="readonly" name="district_cn" id="district_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="district" id="district" type="hidden" value="<?php echo $this->_vars['resume_basic']['district']; ?>
" />
		<input name="sdistrict" id="sdistrict" type="hidden" value="<?php echo $this->_vars['resume_basic']['sdistrict']; ?>
" />
		<div id="menu2" class="dmenu shadow">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_district,id:0,�б���:c_province"), $this); if (count((array)$this->_vars['c_province'])): foreach ((array)$this->_vars['c_province'] as $this->_vars['list']): ?>
			<li id="<?php echo $this->_vars['list']['id']; ?>
" title="<?php echo $this->_vars['list']['categoryname']; ?>
"><?php echo $this->_vars['list']['categoryname']; ?>
</li>
			<?php endforeach; endif; ?>
			</ul>
		</div>
		<div id="menu2_s" class="dmenu shadow" style="display:none"></div>
		  </div>
			</td>
            </tr>
			<tr>
              <td height="40" align="right"><strong  style="color:#FF0000">*</strong>������н��</td>
              <td>
			  <div>
		<input type="text" value="<?php echo $this->_run_modifier($this->_vars['resume_basic']['wage_cn'], 'default', 'plugin', 1, "��ѡ��������н"); ?>
"  readonly="readonly" name="wage_cn" id="wage_cn" class="input_text_200 input_text_200_selsect"/>
		<input name="wage" id="wage" type="hidden" value="<?php echo $this->_vars['resume_basic']['wage']; ?>
" />
		<div id="menu1" class="menu">
			<ul>
			<?php echo tpl_function_qishi_get_classify(array('set' => "����:QS_wage,�б���:c_wage"), $this); if (count((array)$this->_vars['c_wage'])): foreach ((array)$this->_vars['c_wage'] as $this->_vars['list']): ?>
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
              <td height="40" align="right" valign="top"><strong  style="color:#FF0000">*</strong>�������µĸ�λ��</td>
              <td>
<div>
			  <input type="button" name="Submit22" value="ѡ�� / �޸�" class="user_submit"  id="showjobs" />
			   <div id="jobs_txt" style="color: #006699; line-height:30px;"><?php echo $this->_run_modifier($this->_vars['resume_basic']['intention_jobs'], 'default', 'plugin', 1, "��ѡ���������µĸ�λ"); ?>
</div>
			   <input name="intention_jobs" id="intention_jobs" type="hidden" value="<?php echo $this->_vars['resume_basic']['intention_jobs']; ?>
" />
			   <input name="intention_jobs_id" id="intention_jobs_id"  type="hidden" value="<?php echo $this->_vars['resume_jobs_id']; ?>
" />
			    <div  style="display:none" id="sel_category">
					<div class="OpenFloatBoxBg" ></div>
					<div class="OpenFloatBox">
							<div class="title"><h4>��ѡ��ְλ���</h4><div class="DialogClose" title="�ر�"></div></div>
							<div class="tip">�ɶ�ѡ�����ѡ��5��</div>
							<div class="content link_lan">					
										<div class="txt">							
												<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_jobs,����:QS_jobs"), $this);?>
												<?php if (count((array)$this->_vars['c_jobs'])): foreach ((array)$this->_vars['c_jobs'] as $this->_vars['list']): ?>
												<div class="item" id="<?php echo $this->_vars['list']['id']; ?>
">
														<label title="<?php echo $this->_vars['list']['categoryname']; ?>
" class="titem" >
														<input  type="checkbox" value="<?php echo $this->_vars['list']['id']; ?>
"  title="<?php echo $this->_vars['list']['categoryname']; ?>
" class="b" /><?php echo $this->_vars['list']['categoryname']; ?>

														</label>
														<div class="sitem"></div>
												</div>
												<?php endforeach; endif; ?>
												<div class="clear"></div>
										</div>
										<div class="txt"><div class="selecteditem"></div></div>							
										<div class="txt">
										<div align="center"><input type="button"  class="but80 Set" value="ȷ��" /></div>
										</div>			
							</div>
					</div>
			  </div>
</td>
            </tr><tr>
              <td height="40" align="right" valign="top"><strong  style="color:#FF0000">*</strong>�������µ���ҵ��</td>
              <td>	
			   <input type="button" name="Submit23" value="ѡ�� / �޸�" class="user_submit"  id="showtrade"/>
			   <div id="trade_txt" style="color: #006699; line-height:30px;"><?php echo $this->_run_modifier($this->_vars['resume_basic']['trade_cn'], 'default', 'plugin', 1, "��ѡ���������µ���ҵ"); ?>
</div>
			   <input name="trade_cn" id="trade_cn" type="hidden" value="<?php echo $this->_vars['resume_basic']['trade_cn']; ?>
" />
			   <input name="trade" id="trade" type="hidden" value="<?php echo $this->_vars['resume_basic']['trade']; ?>
" />
			   
			   
							   <div  style="display:none" id="sel_trade">
							<div class="OpenFloatBoxBg" ></div>
							<div class="OpenFloatBox">
									<div class="title"><h4>��ѡ����ҵ</h4><div class="DialogClose" title="�ر�"></div></div>
									<div class="tip">�ɶ�ѡ�����ѡ��5��</div>
									<div class="content link_lan">					
												<div class="txt">							
														<?php echo tpl_function_qishi_get_classify(array('set' => "�б���:c_trade,����:QS_trade"), $this); if (count((array)$this->_vars['c_trade'])): foreach ((array)$this->_vars['c_trade'] as $this->_vars['list']): ?>
														<div class="item" id="<?php echo $this->_vars['list']['id']; ?>
">
																<label title="<?php echo $this->_vars['list']['categoryname']; ?>
" class="titem" >
																<input  type="checkbox" value="<?php echo $this->_vars['list']['id']; ?>
"  title="<?php echo $this->_vars['list']['categoryname']; ?>
" class="b" /><?php echo $this->_vars['list']['categoryname']; ?>

																</label>
														</div>
														<?php endforeach; endif; ?>
														<div class="clear"></div>
												</div>						
												<div class="txt">
												<div align="center"><input type="button"  class="but80 Set" value="ȷ��" /></div>
												</div>			
									</div>
							</div>
					  </div>
			  </td>
         </tr>
          </table>
		  <input name="pid" type="hidden" id="pid" value="<?php echo $this->_vars['pid']; ?>
" />
		   <input name="go_resume_show" type="hidden"  value="<?php echo $this->_vars['go_resume_show']; ?>
" />
		  </form>
		  <table width="100%" border="0" cellspacing="0" cellpadding="4" >
   
              <td width="160" height="33" align="right"></td>
              <td height="60">
			   <?php if ($this->_vars['go_resume_show']): ?>
			   <input type="submit" name="submitsave" id="submitsave" value="����" class="user_submit"/>&nbsp;&nbsp;
			    &nbsp;&nbsp;
			   <input type="button" name="next" value="����"  class="user_submit" onclick="window.location='?act=resume_show&pid=<?php echo $this->_vars['pid']; ?>
'"/>
			
			    <?php else: ?>
			<input type="submit" name="submitsave" id="submitsave" value="���沢������һ��" class="user_long_submit"/>&nbsp;&nbsp;
                  <input type="button" name="next" value="������һ��"  class="user_submit" onclick="window.location='?act=make1&pid=<?php echo $this->_vars['pid']; ?>
'" />
			  <?php endif; ?>
			   
			  </td>
            </tr>
</table>
		  </td>
          <td width="150" valign="top" class="resume_right_box" >
		 <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/personal_right.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?> 
		  </td>
        </tr>
      </table>
	  </div>
    </td>
  </tr>
</table>
</div>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("footer.html", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>