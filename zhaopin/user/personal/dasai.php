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
$smarty->assign('leftmenu',"user");
if ($act=='baoming')
{
	$uid = intval($_SESSION['uid']);
	$smarty->assign('total',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1'"));
	$smarty->assign('user',$user);
	$smarty->assign('title','�������� - ��Ա���� - '.$_CFG['site_name']);
	$userprofile = get_userprofile($uid);
	//print_r($userprofile);
	//echo '<hr>';
	
	$studentprofile = get_student_info($uid);
	//print_r($studentprofile);
	//die;
	$smarty->assign('userprofile',array_merge($studentprofile,$userprofile));	
	$smarty->display('member_personal/dasai_baoming.htm');
}
elseif ($act=='baoming_save')
{

	//print_r($_POST);DIE;
	$setsqlarr['uid']=intval($_SESSION['uid']);
	
	//ͬ����Ƹ��Ϣ
	$setsqlarr['realname']=trim($_POST['realname'])?trim($_POST['realname']):showmsg('����д��ʵ������',1);
	$setsqlarr['sex']=intval($_POST['sex'])?intval($_POST['sex']):showmsg('��ѡ���Ա�',1);
	$setsqlarr['sex_cn']=trim($_POST['sex_cn']);
	$setsqlarr['birthday']=intval($_POST['birthday'])?intval($_POST['birthday']):showmsg('��ѡ��������',1);
	$setsqlarr['residence']=trim($_POST['residence'])?trim($_POST['residence']):showmsg('��ѡ���־�ס�أ�',1);
	$setsqlarr['residence_cn']=trim($_POST['residence_cn']);
	$setsqlarr['education']=intval($_POST['education'])?intval($_POST['education']):showmsg('��ѡ��ѧ��',1);
	$setsqlarr['education_cn']=trim($_POST['education_cn']);
	$setsqlarr['experience']=intval($_POST['experience'])?intval($_POST['experience']):showmsg('��ѡ��������',1);
	$setsqlarr['experience_cn']=trim($_POST['experience_cn']);
	$setsqlarr['height']=intval($_POST['height']);
	$setsqlarr['householdaddress']=trim($_POST['householdaddress']);
	$setsqlarr['householdaddress_cn']=trim($_POST['householdaddress_cn']);	
	$setsqlarr['marriage']=intval($_POST['marriage']);
	$setsqlarr['marriage_cn']=trim($_POST['marriage_cn']);
	
	
	
	//����������Ϣ���
	$dasaisqlarr = array();
	$dasaisqlarr['realname']=trim($_POST['realname'])?trim($_POST['realname']):showmsg('����д��ʵ������',1);
	$dasaisqlarr['sex_cn']=trim($_POST['sex_cn']);
	$dasaisqlarr['birthday']=intval($_POST['birthday'])?intval($_POST['birthday']):showmsg('��ѡ��������',1);
	$dasaisqlarr['shenfenzhenghao']=trim($_POST['shenfenzhenghao'])?trim($_POST['shenfenzhenghao']):showmsg('����д���֤�ţ�',1);
	$dasaisqlarr['nation']=trim($_POST['nation'])?trim($_POST['nation']):showmsg('����д���壡',1);
	$dasaisqlarr['politics']=trim($_POST['politics'])?trim($_POST['politics']):showmsg('����д������ò��',1);
	$dasaisqlarr['school']=trim($_POST['school'])?trim($_POST['school']):showmsg('����д��ҵԺУ��',1);
	$dasaisqlarr['major']=trim($_POST['major'])?trim($_POST['major']):showmsg('����дרҵ��',1);
	$dasaisqlarr['target_job']=trim($_POST['target_job'])?trim($_POST['target_job']):showmsg('����д��ְ��λ��',1);
	$dasaisqlarr['mobile']=trim($_POST['mobile'])?trim($_POST['mobile']):showmsg('����д��ϵ�绰��',1);
	$dasaisqlarr['foreign_language_level']=trim($_POST['foreign_language_level'])?trim($_POST['foreign_language_level']):showmsg('����д����ˮƽ��',1);
	$dasaisqlarr['computer_level']=trim($_POST['computer_level'])?trim($_POST['computer_level']):showmsg('����д�����ˮƽ��',1);
	$dasaisqlarr['educations']=trim($_POST['educations'])?trim($_POST['educations']):showmsg('����д����������',1);
	$dasaisqlarr['sex_cn']=trim($_POST['sex_cn']);
	$dasaisqlarr['awards']=trim($_POST['awards']);
	$dasaisqlarr['social_practice']=trim($_POST['social_practice']);
	$dasaisqlarr['is_poor_student']=trim($_POST['is_poor_student']);
	$dasaisqlarr['school_opinion']=trim($_POST['school_opinion']);

// 	if (get_userprofile($_SESSION['uid']))
// 	{
// 		$wheresql=" uid='".intval($_SESSION['uid'])."'";
// 		write_memberslog($_SESSION['uid'],2,1005,$_SESSION['username'],"�޸��˸�������");
// 		updatetable(table('members_info'),$setsqlarr,$wheresql);
// 	}
// 	else
// 	{
// 		$setsqlarr['uid']=intval($_SESSION['uid']);
// 		write_memberslog($_SESSION['uid'],2,1005,$_SESSION['username'],"�޸��˸�������");
// 		inserttable(table('members_info'),$setsqlarr);
// 	}
	
	if (get_student_info($_SESSION['uid']))
	{
		$wheresql=" uid='".intval($_SESSION['uid'])."'";
		write_memberslog($_SESSION['uid'],2,1005,$_SESSION['username'],"�޸Ĵ���������Ϣ");
		!updatetable(table('dasai_student'),$dasaisqlarr,$wheresql)?showmsg("�޸ı�����Ϣʧ�ܣ�",0):showmsg("�޸ı�����Ϣ�ɹ���",2);
	}
	else
	{
		$dasaisqlarr['uid']=intval($_SESSION['uid']);
		write_memberslog($_SESSION['uid'],2,1005,$_SESSION['username'],"��д����������Ϣ");
		!inserttable(table('dasai_student'),$dasaisqlarr)?showmsg("����ʧ�ܣ�",0):showmsg("�����ɹ���",2);
	}
}
//��Ƭ
elseif ($act=='photo')
{
	$uid = intval($_SESSION['uid']);
	$smarty->assign('title','�ϴ���Ƭ - ��Ա���� - '.$_CFG['site_name']);
	$smarty->assign('user',get_student_info(intval($_SESSION['uid'])));
	$smarty->assign('rand',rand(1,100));
	$smarty->display('member_personal/dasai_photo.htm');
}
elseif ($act=='photo_ready')
{
	require_once(QISHI_ROOT_PATH.'include/cut_upload.php');
	!$_FILES['photo']['name']?showmsg('���ϴ�ͼƬ��',1):"";
	$up_dir_original="../../../dasai/photo/original/";
	$up_dir_166="../../../dasai/photo/166/";
	$up_dir_71="../../../dasai/photo/71/";
	$up_dir_thumb="../../../dasai/photo/thumb/";
	make_dir($up_dir_original);
	make_dir($up_dir_166);
	make_dir($up_dir_71);
	make_dir($up_dir_thumb);
	$setsqlarr['photo']=_asUpFiles($up_dir_original, "photo",500,'gif/jpg/bmp/png',true);
	$setsqlarr['photo']=$setsqlarr['photo'];
	if ($setsqlarr['photo'])
	{
	makethumb($up_dir_original.$setsqlarr['photo'],$up_dir_thumb,445,300);
	$wheresql=" uid='".$_SESSION['uid']."'";
	write_memberslog($_SESSION['uid'],2,1006 ,$_SESSION['username'],"�޸��˸�����Ƭ");
	updatetable(table('dasai_student'),$setsqlarr,$wheresql)?exit($setsqlarr['photo']):showmsg('����ʧ�ܣ�',1);
	}
	else
	{
	showmsg('����ʧ�ܣ�',1);
	}
}
elseif ($act=='photo_save')
{
	require_once(QISHI_ROOT_PATH.'include/cut_upload.php');
	require_once(QISHI_ROOT_PATH.'include/imageresize.class.php');
	$imgresize = new ImageResize();
	$userinfomation=get_student_info($_SESSION['uid']);
	if($userinfomation['photo']){	
		$up_dir_original="../../../dasai/photo/original/";
		$up_dir_166="../../../dasai/photo/166/";
		$up_dir_71="../../../dasai/photo/71/";
		$up_dir_thumb="../../../dasai/photo/thumb/";
		$imgresize->load($up_dir_thumb.$userinfomation['photo']);
		$imgresize->cut(intval($_POST['w']),intval($_POST['h']), intval($_POST['x']), intval($_POST['y']));
		$imgresize->save($up_dir_thumb.$userinfomation['photo']);
		
		makethumb($up_dir_thumb.$userinfomation['photo'],$up_dir_166,166,235);
		makethumb($up_dir_thumb.$userinfomation['photo'],$up_dir_71,71,100);

		@unlink($up_dir_original.$userinfomation['photo']);
		@unlink($up_dir_thumb.$userinfomation['photo']);

		$wheresql=" uid='".$_SESSION['uid']."'";
		write_memberslog($_SESSION['uid'],2,1006 ,$_SESSION['username'],"�޸��˸���ͷ��");
		showmsg('����ɹ���',2);
	}else{
		showmsg('���ϴ�ͼƬ��',1);
	}
}
//��Ա��¼��־
elseif ($act=='login_log')
{
	require_once(QISHI_ROOT_PATH.'include/fun_user.php');
	require_once(QISHI_ROOT_PATH.'include/page.class.php');
	$uid = intval($_SESSION['uid']);
	$smarty->assign('total',$db->get_total("SELECT COUNT(*) AS num FROM ".table('pms')." WHERE (msgfromuid='{$uid}' OR msgtouid='{$uid}') AND `new`='1'"));
	$wheresql=" WHERE log_uid='{$_SESSION['uid']}' AND log_type='1001' ";
	$perpage=15;
	$total_sql="SELECT COUNT(*) AS num FROM ".table('members_log').$wheresql;
	$total_val=$db->get_total($total_sql);
	$page = new page(array('total'=>$total_val, 'perpage'=>$perpage));
	$currenpage=$page->nowindex;
	$offset=($currenpage-1)*$perpage;
	$smarty->assign('loginlog',get_user_loginlog($offset, $perpage,$wheresql));
	$smarty->assign('page',$page->show(3));
	$smarty->assign('title','��Ա��¼��־ - ��ҵ��Ա���� - '.$_CFG['site_name']);
	$smarty->display('member_personal/personal_user_loginlog.htm');
}
unset($smarty);
?>