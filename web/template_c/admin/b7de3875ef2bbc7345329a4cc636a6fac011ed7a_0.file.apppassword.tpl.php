<?php /* Smarty version 3.1.27, created on 2017-10-23 00:26:29
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/apppassword.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111175631259ecc6b5a36c08_46671021%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7de3875ef2bbc7345329a4cc636a6fac011ed7a' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/apppassword.tpl',
      1 => 1508689578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111175631259ecc6b5a36c08_46671021',
  'variables' => 
  array (
    'title' => 0,
    'template_root' => 0,
    'logintype' => 0,
    'curr_url' => 0,
    'username' => 0,
    'sip' => 0,
    'hostname' => 0,
    'admin_level' => 0,
    'appservers' => 0,
    'appname' => 0,
    'localip' => 0,
    'lb' => 0,
    'orderby2' => 0,
    'language' => 0,
    'appmember' => 0,
    'i' => 0,
    'total' => 0,
    'page_list' => 0,
    'curr_page' => 0,
    'total_page' => 0,
    'items_per_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ecc6b5b19f18_48219429',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ecc6b5b19f18_48219429')) {
function content_59ecc6b5b19f18_48219429 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate_cn')) require_once '/opt/freesvr/web/htdocs/freesvr/audit/smarty/plugins/modifier.truncate_cn.php';

$_smarty_tpl->properties['nocache_hash'] = '111175631259ecc6b5a36c08_46671021';
?>
<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/all_purpose_style.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/jquery-1.10.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/launchprogram.js"><?php echo '</script'; ?>
>
</head>
<?php echo '<script'; ?>
>
function webssh(t,title,url){
//document.write(url);
//return;
	if(t==1){
		window.parent.webssh(title,url);
	}else{
		window.open(url);
	}
}

function getSmsCode(){
	$.get('admin.php?controller=admin_pro&action=generate_sms_code', {"1":Math.round(new Date().getTime()/1000)}, function (data, textStatus){
		this; // 在这里this指向的是Ajax请求的选项配置信息，请参考下图
		//alert(data);
		alert(data);
	});
}

function userlogin(aid,tid){
	tid = document.getElementById(tid);
	aid = document.getElementById(aid);
	aid.href=aid.href + "&logintool=" + tid.options[tid.options.selectedIndex].value;
}

function search(){
	var form = document.f1;
	form.action += "&username="+form.username.value;
	form.action += "&sip="+form.sip.value;
	form.action += "&hostname=" + encodeURIComponent(form.hostname.value);
	<?php if ($_smarty_tpl->tpl_vars['logintype']->value == 'apppub' || $_smarty_tpl->tpl_vars['logintype']->value == '_apppub') {?>
		tid = document.getElementById('appserverip');
		form.action += "&appserverip=" + tid.options[tid.options.selectedIndex].value;
		form.action += "&appname=" + document.getElementById('appname').value;
	<?php }?>
	form.submit();
	return true;
}

function windows_version(){
	var pos = navigator.appVersion.indexOf("Windows NT");
	if(pos > 0){
		return parseFloat(navigator.appVersion.substring(pos+10, navigator.appVersion.indexOf(";",pos)));
	}
}

var OSVersion = windows_version();
function checkieNT52(obj){
	return true;
	if(OSVersion==5.2&&obj.checked){
		alert('Windows2003不支持剪切板');
		obj.checked=false;
	}
}

var isIe=(document.all)?true:false;

function closeWindow()
{
	if(document.getElementById('back')!=null)
	{
		document.getElementById('back').parentNode.removeChild(document.getElementById('back'));
	}
	if(document.getElementById('mesWindow')!=null)
	{
		document.getElementById('mesWindow').parentNode.removeChild(document.getElementById('mesWindow'));
	}
	document.getElementById('fade').style.display='none';
}

function submitcommit(){
	if(document.getElementById('prelogincommit').value.length<10){
		alert('请输入至少10个汉字');
		return false;
	}
	return true;
}

function showImg(wTitle, c)
{
	closeWindow();
	//var pos = mousePosition(ev);
	var wWidth=200;
	var wHeight=240;
	var bWidth=parseInt(w=window.innerWidth|| document.documentElement.clientWidth|| document.body.clientWidth);
	var bHeight=parseInt(window.innerHeight|| document.documentElement.clientHeight|| document.body.clientHeight)+20;
	bHeight=700+20;
	var back=document.createElement("div");
	back.id="back";
	var styleStr="top:0px;left:0px;position:absolute;width:"+bWidth+"px;height:"+bHeight+"px;z-index:1002;";
	//styleStr+=(isIe)?"filter:alpha(opacity=0);":"opacity:0;";
	back.style.cssText=styleStr;
	document.body.appendChild(back);
	var mesW=document.createElement("div");
	mesW.id="mesWindow";
	mesW.className="mesWindow";
	mesW.innerHTML='<div id="light" class="white_content" style="height:240px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td bgcolor="#eeeeee" align="right" height="25"><a href="javascript:void(0)" onclick="closeWindow()">关闭</a></td></tr></table>'+c+"</div>";
	//styleStr="left:"+(((pos.x-wWidth)>0)?(pos.x-wWidth):pos.x)+"px;top:"+(pos.y)+"px;position:absolute;width:"+wWidth+"px;";//鼠标点击位置
	//styleStr="left:"+(bWidth-wWidth)/2+"px;top:"+(bHeight-wHeight)/2+"px;position:absolute;width:"+wWidth+"px;";//屏幕中间
	mesW.style.cssText=styleStr;
	document.body.appendChild(mesW);
	//window.parent.document.getElementById("frame_content").height=pos.y+1000;
	//window.parent.parent.document.getElementById("main").height=bHeight+1000;	
	
	document.getElementById('fade').style.display='block'
	return false;
}
function changeuser(u){
	if(u==0){
		document.getElementById('passwordsave').value=-1;		
		document.getElementById('username').value='';
		document.getElementById('password').value='';

	}else if(u!=0){
		var u1 = u.substring(0, u.indexOf('_'));
		var u2 = u.substring(u.indexOf('_')+1);
		var username = u2.split('.,?');
		document.getElementById('passwordsave').value=u1;
		document.getElementById('username').value=username[0];
		document.getElementById('password').value=username[1];
	}
}

function loadurl(url){
	if(url=="") return ;
	$.get(url, {Action:"get",Name:"lulu","1":Math.round(new Date().getTime()/1000)}, function (data, textStatus){
		this; // 在这里this指向的是Ajax请求的选项配置信息，请参考下图
		//alert(data);
		if(data.substring(0,<?php if ($_SESSION['urlprotocol'] == 1) {?>11<?php } else { ?>10<?php }?>)=='<?php if ($_SESSION['urlprotocol'] == 1) {?>baoleiji<?php } else { ?>freesvr<?php }?>://'){
			launcher(data);
		}else if(data.substring(0,15)=='window.loadurl(' || data.substring(0,11)=='if(confirm('){
			eval(data);
		}else{
			showImg('',data);
		}
	});
}

function changeStyle(obj,c)
{
	if(c!='o'){
		obj.style.backgroundColor=c;
	}else{
		obj.style.backgroundColor="#FFCC80";
	}
}
<?php echo '</script'; ?>
>
<body>
<div id="fade" class="black_overlay"></div> 
<style type="text/css">
a {
    color: #003499;
    text-decoration: none;
} 
a:hover {
    color: #000000;
    text-decoration: underline;
}
</style>

<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=main">系统密码</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_a"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=apppassword">应用密码</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an3.jpg" align="absmiddle"/></li>
<?php if ($_SESSION['ADMIN_LEVEL'] == 10) {?>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordedit">修改密码</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>

<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=password_cron">定时任务</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup&action=backup_setting_forpassword">自动备份</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=passdown">密码文件下载</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordcheck">密码校验</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<?php }?>
</ul>
</div></td></tr>

	
<?php if ($_SESSION['ADMIN_LEVEL'] != 0 && $_SESSION['ADMIN_LEVEL'] != 10 && $_SESSION['ADMIN_LEVEL'] != 101) {?>
  <tr>
    <td  class="hui_bj"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
          
          
          <td width="2"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/main_right.gif" width="2" height="31"></td>
        </tr>

      </table></td>
  </tr>
  <?php }?>
   <tr>
    <td class="main_content">
<form  name="f1" action="<?php echo $_smarty_tpl->tpl_vars['curr_url']->value;?>
" method="post" name="report" onsubmit="return search();" >
用户名：<input type="text" class="wbk" id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" style="width:80px;">&nbsp;
IP：<input type="text" class="wbk" id="sip" name="sip" value="<?php echo $_smarty_tpl->tpl_vars['sip']->value;?>
" style="width:80px;">&nbsp;主机名：<input type="text" class="wbk" id="hostname" name="hostname" value="<?php echo $_smarty_tpl->tpl_vars['hostname']->value;?>
" style="width:80px;">
<?php if ($_smarty_tpl->tpl_vars['admin_level']->value == 0) {?>
<?php if ($_smarty_tpl->tpl_vars['logintype']->value == 'apppub' || $_smarty_tpl->tpl_vars['logintype']->value == '_apppub') {?>
&nbsp;应用发布服务器：<select  class="wbk"  id="appserverip" name="appserverip" style="width:80px;">
  <option value="">未指定</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['appservers']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['appservers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['appserverip'];?>
"><?php echo $_smarty_tpl->tpl_vars['appservers']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['appserverip'];?>
</option>
<?php endfor; endif; ?>
</select>&nbsp;应用名称:<input type="text" class="wbk" id="appname" name="appname" value="<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
" style="width:80px;">
<?php } else { ?>
 &nbsp;负载均衡：<select  class="wbk"  id="lb" name="lb" style="width:80px;">
  <option value="">未指定</option>
<option value="<?php echo $_smarty_tpl->tpl_vars['localip']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['localip']->value;?>
</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['name'] = 'l';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['lb']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l']['total']);
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['lb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ip'];?>
"><?php echo $_smarty_tpl->tpl_vars['lb']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l']['index']]['ip'];?>
</option>
<?php endfor; endif; ?>
</select>&nbsp;
<?php }?>
<?php }?>&nbsp;<input type="submit" height="35" align="middle" value=" 确定 " border="0" class="bnnew2"/>
</form>
	  </td>
  </tr>
  <tr>
	<td class="">
<TABLE border=0 cellSpacing=1 cellPadding=5 width="100%" bgColor=#ffffff valign="top" class="BBtable">
<form name='usrdev' >
<TBODY>
<style type="text/css">
<!--
#navi{width:auto;}
.ul {
 list-style-type: none;margin:0; padding:0
}
.li {
 float:left;width: 100px;
}
-->
</style>
<tr>
<th class="list_bg"  width="8%" ><a href='admin.php?controller=admin_index&action=main&orderby1=id&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >ID</a></th>
<th class="list_bg"  width="12%" ><a href='admin.php?controller=admin_index&action=main&orderby1=device_ip&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >服务器IP</a></th>
<th class="list_bg"  width="10%" ><a href='admin.php?controller=admin_index&action=main&orderby1=hostname&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >主机名</a></th>
<th class="list_bg"  width="12%" ><a href='admin.php?controller=admin_index&action=main&orderby1=appserverip&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >应用发布IP</a></th>
<th class="list_bg"  width="9%"><a href='admin.php?controller=admin_index&action=main&orderby1=desc&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >主机信息</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >应用名称</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >程序名称</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2=<?php echo $_smarty_tpl->tpl_vars['orderby2']->value;?>
' >用户名</a></th>
<th class="list_bg"  width="24%" ><?php echo $_smarty_tpl->tpl_vars['language']->value['Operate'];
echo $_smarty_tpl->tpl_vars['language']->value['Link'];?>
</th>
</tr>
<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable(1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['tt'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['name'] = 'tt';
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['appmember']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['tt']['total']);
?>
<tr <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 0) {?>bgcolor="f7f7f7"<?php }?> onmouseover="changeStyle(this,'o');" onmouseout="changeStyle(this,'<?php if ($_smarty_tpl->tpl_vars['i']->value++%2 == 0) {?>f7f7f7<?php }?>');">
<td><?php echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appdeviceid'];?>
</td>
<td><?php echo addslashes($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['device_ip']);?>
</td>
<td><?php echo addslashes($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['hostname']);?>
</td>
<td ><?php echo addslashes($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appserverip']);?>
</td>
<td align="center"><a href='#' onclick='loadurl("admin.php?controller=admin_pro&action=showdesc&appdeviceid=<?php echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appdeviceid'];?>
");return false;' target="hide"><img src='<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/1-1.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><?php echo smarty_modifier_truncate_cn($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['desc'],15,"...",'');?>
</a></td>
<td><?php echo addslashes($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['name']);?>
</td>
<td><?php echo addslashes($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appprogramname']);?>
</td>
<td><?php if ($_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['username'] == '') {?>空用户<?php } else {
echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['username'];
}?></td>
<td><img src='<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/down.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='#' onclick='loadurl("admin.php?controller=admin_pro&action=showpwddownauth&apppub=1");return false;'>下载密码</a>
					| <img src='<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/list_ico2.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='admin.php?controller=admin_pro&action=dev_checkpass&id=<?php echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appdeviceid'];?>
&apppub=1'>查看密码</a>
					| <img src='<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/edit_ico.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='admin.php?controller=admin_config&action=apppub_edit&id=<?php echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appdeviceid'];?>
&appserverip=<?php echo $_smarty_tpl->tpl_vars['appmember']->value[$_smarty_tpl->getVariable('smarty')->value['section']['tt']['index']]['appserverip'];?>
&from=passview'>修改</a>
			</td>
			</tr>
			<?php endfor; endif; ?>

                <tr>
	           <td colspan="10" align="right">
		   			<?php if ($_SESSION['ADMIN_LEVEL'] == 10) {?><input type="button"  value="密码打印" onClick="alert('未发现可驱动的密码打印机');" class="an_06"><?php }?>&nbsp;&nbsp;&nbsp;共<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
个记录  <?php echo $_smarty_tpl->tpl_vars['page_list']->value;?>
  页次：<?php echo $_smarty_tpl->tpl_vars['curr_page']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['total_page']->value;?>
页  <?php if ($_smarty_tpl->tpl_vars['logintype']->value != 'apppub') {
echo $_smarty_tpl->tpl_vars['items_per_page']->value;?>
个记录/页<?php }?>  转到第<input name="pagenum" type="text" class="wbk" size="2" onKeyPress="if(event.keyCode==13) {window.location='<?php echo $_smarty_tpl->tpl_vars['curr_url']->value;?>
&page='+this.value;return false;}">页
		   </td>
		</tr>
		</TBODY>
              </TABLE>
	</td>
  </tr>
  </form>
</table>

<?php echo '<script'; ?>
 language="javascript">


function my_confirm(str){
	if(!confirm(str + "？"))
	{
		window.event.returnValue = false;
	}
}

function mousePosition(ev){
    if(ev.pageX || ev.pageY){
        return {x:ev.pageX, y:ev.pageY};
    }
    return {
        x:ev.clientX + document.body.scrollLeft - document.body.clientLeft,
        y:ev.clientY + document.body.scrollTop  - document.body.clientTop
    };
}

function popit(id, program, path, appserverip, device_ip, url){
	//easyDialog.close();
	var e = window.event || arguments.callee.caller.arguments[0];
	var ev = mousePosition(e);
	document.getElementById('pop_programname').innerHTML=program;

	document.getElementById('pop_path').innerHTML=path;
	document.getElementById('pop_appserverip').innerHTML=appserverip;
	document.getElementById('pop_device_ip').innerHTML=device_ip;
	document.getElementById('pop_url').innerHTML=url;
	var classname='hide_box'
	pageWidth = document.documentElement.offsetWidth;
	pageHight = document.documentElement.offsetHeight;
	divWidth = jQuery("." + classname).width();
	divHight = jQuery("." + classname).height();
	if (ev.x + divWidth/2 < pageWidth) {
		pagex = ev.x-divWidth/2;
	} else {
		pagex = ev.x - divWidth;
	}
	pagey = ev.y ;
	//alert(document.getElementById('testBox').style.display);
	jQuery("." + classname).css("position", "absolute").css("top", pagey + "px").css("left", pagex + "px").show();

}

function closeit(){
	document.getElementById('testBox').style.display='none';
}

<?php echo '</script'; ?>
>
<style>
.hide_box{width:350;color:#fff;color:#444;background:#fff;box-shadow:1px 2px 2px #555;display:none;}
.hide_box h4{height:26px;line-height:26px;overflow:hidden;background:#0884C4;color:#fff;padding:0 10px;border:1px solid #0884C4;font-size:14px;border-bottom:1px solid #0884C4;}
.hide_box h4 a{width:14px;line-height:13px;_line-height:15px;height:13px;font-family:arial;overflow:hidden;display:block;background:#fff;color:#c77405;float:right;text-align:center;text-decoration:none;margin-top:7px;font-size:14px;font-weight:normal;border-radius:2px;_font-size:12px;}
.hide_box p{font-size:13px;border:1px solid #ccc;}
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/cssjs/jquery-1.7.2.min.js"><?php echo '</script'; ?>
>

</body>
<iframe id="hide" name="hide" height="0"  frameborder="0" scrolling="no"></iframe>
<input style="width:0;height:0;display:none" id="protocol" value="" />
</html>



<?php }
}
?>