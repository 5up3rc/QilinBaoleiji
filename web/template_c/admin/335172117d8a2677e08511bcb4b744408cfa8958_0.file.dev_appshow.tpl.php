<?php /* Smarty version 3.1.27, created on 2017-10-22 23:49:55
         compiled from "/opt/freesvr/web/htdocs/freesvr/audit/template/admin/dev_appshow.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16778804159ecbe235c9482_57659223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335172117d8a2677e08511bcb4b744408cfa8958' => 
    array (
      0 => '/opt/freesvr/web/htdocs/freesvr/audit/template/admin/dev_appshow.tpl',
      1 => 1508687336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16778804159ecbe235c9482_57659223',
  'variables' => 
  array (
    'title' => 0,
    'template_root' => 0,
    'language' => 0,
    'IP' => 0,
    'hostname' => 0,
    'username' => 0,
    'appname' => 0,
    'appprogramname' => 0,
    'oldpass' => 0,
    'curpass' => 0,
    'update_time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59ecbe23630799_18775778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59ecbe23630799_18775778')) {
function content_59ecbe23630799_18775778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16778804159ecbe235c9482_57659223';
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
</head>

<body>
<td width="84%" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="middle" class="hui_bj"><div class="menu">
<ul>
<li class="me_a"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=main">密码查看</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an3.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordedit">修改密码</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
<?php if ($_SESSION['ADMIN_LEVEL'] == 10) {?>
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
<?php if ($_SESSION['ADMIN_LEVEL'] != 10 && $_SESSION['ADMIN_LEVEL'] != 101) {?>
    <li class="me_b"><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=dev_group">设备目录</a><img src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/an33.jpg" align="absmiddle"/></li>
	<?php }?>
</ul><span class="back_img"><A href="admin.php?controller=admin_index&action=main&back=1"><IMG src="<?php echo $_smarty_tpl->tpl_vars['template_root']->value;?>
/images/back1.png" 
      width="80" height="25" border="0"></A></span>
</div></td></tr>


 
  <tr><td>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td class="" align='center'>
	<table border=0 width=100% cellpadding=5 cellspacing=1 bgcolor="#FFFFFF" valign=top class="BBtable">

	<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		<?php echo $_smarty_tpl->tpl_vars['language']->value['IPAddress'];?>

		</td>
		<td width="67%">
		<?php echo $_smarty_tpl->tpl_vars['IP']->value;?>

	  </td>
	</tr>
		<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		<?php echo $_smarty_tpl->tpl_vars['language']->value['HostName'];?>

		</td>
		<td width="67%">
		<?php echo $_smarty_tpl->tpl_vars['hostname']->value;?>

	  </td>
			<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		<?php echo $_smarty_tpl->tpl_vars['language']->value['Username'];?>

		</td>
		<td width="67%">
		<?php echo $_smarty_tpl->tpl_vars['username']->value;?>

	  </td>
	</tr>
		<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		应用发布名称
		</td>
		<td width="67%">
		<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>

	  </td>
	</tr>
		<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		应用程序名称
		</td>
		<td width="67%">
		<?php echo $_smarty_tpl->tpl_vars['appprogramname']->value;?>

	  </td>
	</tr>

	<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		原始<?php echo $_smarty_tpl->tpl_vars['language']->value['Password'];?>

		</td>
		<td width="67%">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['oldpass']->value, ENT_QUOTES, 'UTF-8', true);?>

	  </td>
	</tr>
	<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		现<?php echo $_smarty_tpl->tpl_vars['language']->value['Password'];?>

		</td>
		<td width="67%">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['curpass']->value, ENT_QUOTES, 'UTF-8', true);?>

	  </td>
	</tr>
	<tr bgcolor="f7f7f7">
		<td width="33%" align=right>
		上次<?php echo $_smarty_tpl->tpl_vars['language']->value['ChangeTime'];?>

		</td>
		<td width="67%">
		<?php if ($_smarty_tpl->tpl_vars['update_time']->value == '0000-00-00 00:00:00') {?>尚未<?php echo $_smarty_tpl->tpl_vars['language']->value['Edit'];
} else {
echo $_smarty_tpl->tpl_vars['update_time']->value;
}?>
	  </td>
	</tr>
	</table>
<br>
</form>
	</td>
  </tr>
</table>
	</td>
  </tr>
</table>

<?php echo '<script'; ?>
 language="javascript">

function my_confirm(str){
	if(!confirm(str + "？"))
	{
		window.event.returnValue = false;
	}
}

<?php echo '</script'; ?>
>
</body>
<iframe name="hide" height="0" frameborder="0" scrolling="no"></iframe>
</html>


<?php }
}
?>