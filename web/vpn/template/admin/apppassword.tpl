<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
<head>
<title>{{$title}}</title>
<meta name="generator" content="editplus">
<meta name="author" content="nuttycoder">
<link href="{{$template_root}}/all_purpose_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{{$template_root}}/cssjs/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="{{$template_root}}/cssjs/launchprogram.js"></script>
</head>
<script>
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
	{{if  $logintype eq 'apppub' or $logintype eq '_apppub'}}
		tid = document.getElementById('appserverip');
		form.action += "&appserverip=" + tid.options[tid.options.selectedIndex].value;
		form.action += "&appname=" + document.getElementById('appname').value;
	{{/if}}
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
		if(data.substring(0,{{if $smarty.session.urlprotocol eq 1}}11{{else}}10{{/if}})=='{{if $smarty.session.urlprotocol eq 1}}baoleiji{{else}}freesvr{{/if}}://'){
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
</script>
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
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=main">系统密码</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_a"><img src="{{$template_root}}/images/an1.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=apppassword">应用密码</a><img src="{{$template_root}}/images/an3.jpg" align="absmiddle"/></li>
{{if $smarty.session.ADMIN_LEVEL eq 10}}
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordedit">修改密码</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>

<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=password_cron">定时任务</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_backup&action=backup_setting_forpassword">自动备份</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_index&action=passdown">密码文件下载</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
<li class="me_b"><img src="{{$template_root}}/images/an11.jpg" align="absmiddle"/><a href="admin.php?controller=admin_pro&action=passwordcheck">密码校验</a><img src="{{$template_root}}/images/an33.jpg" align="absmiddle"/></li>
{{/if}}
</ul>
</div></td></tr>

	
{{if $smarty.session.ADMIN_LEVEL ne 0 && $smarty.session.ADMIN_LEVEL ne 10 && $smarty.session.ADMIN_LEVEL ne 101}}
  <tr>
    <td  class="hui_bj">{{$title}}</td>
          
          
          <td width="2"><img src="{{$template_root}}/images/main_right.gif" width="2" height="31"></td>
        </tr>

      </table></td>
  </tr>
  {{/if}}
   <tr>
    <td class="main_content">
<form  name="f1" action="{{$curr_url}}" method="post" name="report" onsubmit="return search();" >
用户名：<input type="text" class="wbk" id="username" name="username" value="{{$username}}" style="width:80px;">&nbsp;
IP：<input type="text" class="wbk" id="sip" name="sip" value="{{$sip}}" style="width:80px;">&nbsp;主机名：<input type="text" class="wbk" id="hostname" name="hostname" value="{{$hostname}}" style="width:80px;">
{{if $admin_level == 0}}
{{if  $logintype eq 'apppub' or $logintype eq '_apppub'}}
&nbsp;应用发布服务器：<select  class="wbk"  id="appserverip" name="appserverip" style="width:80px;">
  <option value="">未指定</option>
{{section name=l loop=$appservers}}
<option value="{{$appservers[l].appserverip}}">{{$appservers[l].appserverip}}</option>
{{/section}}
</select>&nbsp;应用名称:<input type="text" class="wbk" id="appname" name="appname" value="{{$appname}}" style="width:80px;">
{{else}}
 &nbsp;负载均衡：<select  class="wbk"  id="lb" name="lb" style="width:80px;">
  <option value="">未指定</option>
<option value="{{$localip}}">{{$localip}}</option>
{{section name=l loop=$lb}}
<option value="{{$lb[l].ip}}">{{$lb[l].ip}}</option>
{{/section}}
</select>&nbsp;
{{/if}}
{{/if}}&nbsp;<input type="submit" height="35" align="middle" value=" 确定 " border="0" class="bnnew2"/>
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
<th class="list_bg"  width="8%" ><a href='admin.php?controller=admin_index&action=main&orderby1=id&orderby2={{$orderby2}}' >ID</a></th>
<th class="list_bg"  width="12%" ><a href='admin.php?controller=admin_index&action=main&orderby1=device_ip&orderby2={{$orderby2}}' >服务器IP</a></th>
<th class="list_bg"  width="10%" ><a href='admin.php?controller=admin_index&action=main&orderby1=hostname&orderby2={{$orderby2}}' >主机名</a></th>
<th class="list_bg"  width="12%" ><a href='admin.php?controller=admin_index&action=main&orderby1=appserverip&orderby2={{$orderby2}}' >应用发布IP</a></th>
<th class="list_bg"  width="9%"><a href='admin.php?controller=admin_index&action=main&orderby1=desc&orderby2={{$orderby2}}' >主机信息</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2={{$orderby2}}' >应用名称</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2={{$orderby2}}' >程序名称</a></th>
<th class="list_bg"  width="9%" ><a href='admin.php?controller=admin_index&action=main&orderby1=name&orderby2={{$orderby2}}' >用户名</a></th>
<th class="list_bg"  width="24%" >{{$language.Operate}}{{$language.Link}}</th>
</tr>
{{assign var="i" value=1}}
{{section name=tt loop=$appmember}}
<tr {{if $i % 2 == 0}}bgcolor="f7f7f7"{{/if}} onmouseover="changeStyle(this,'o');" onmouseout="changeStyle(this,'{{if $i++ % 2 == 0}}f7f7f7{{/if}}');">
<td>{{$appmember[tt].appdeviceid}}</td>
<td>{{$appmember[tt].device_ip|addslashes}}</td>
<td>{{$appmember[tt].hostname|addslashes}}</td>
<td >{{$appmember[tt].appserverip|addslashes}}</td>
<td align="center"><a href='#' onclick='loadurl("admin.php?controller=admin_pro&action=showdesc&appdeviceid={{$appmember[tt].appdeviceid}}");return false;' target="hide"><img src='{{$template_root}}/images/1-1.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'>{{$appmember[tt].desc|truncate_cn:15:"...":""}}</a></td>
<td>{{$appmember[tt].name|addslashes}}</td>
<td>{{$appmember[tt].appprogramname|addslashes}}</td>
<td>{{if $appmember[tt].username eq ''}}空用户{{else}}{{$appmember[tt].username}}{{/if}}</td>
<td><img src='{{$template_root}}/images/down.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='#' onclick='loadurl("admin.php?controller=admin_pro&action=showpwddownauth&apppub=1");return false;'>下载密码</a>
					| <img src='{{$template_root}}/images/list_ico2.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='admin.php?controller=admin_pro&action=dev_checkpass&id={{$appmember[tt].appdeviceid}}&apppub=1'>查看密码</a>
					| <img src='{{$template_root}}/images/edit_ico.gif' width=16 height='16' hspace='5' border='0' align='absmiddle'><a href='admin.php?controller=admin_config&action=apppub_edit&id={{$appmember[tt].appdeviceid}}&appserverip={{$appmember[tt].appserverip}}&from=passview'>修改</a>
			</td>
			</tr>
			{{/section}}

                <tr>
	           <td colspan="10" align="right">
		   			{{if $smarty.session.ADMIN_LEVEL eq 10}}<input type="button"  value="密码打印" onClick="alert('未发现可驱动的密码打印机');" class="an_06">{{/if}}&nbsp;&nbsp;&nbsp;共{{$total}}个记录  {{$page_list}}  页次：{{$curr_page}}/{{$total_page}}页  {{if $logintype ne 'apppub'}}{{$items_per_page}}个记录/页{{/if}}  转到第<input name="pagenum" type="text" class="wbk" size="2" onKeyPress="if(event.keyCode==13) {window.location='{{$curr_url}}&page='+this.value;return false;}">页
		   </td>
		</tr>
		</TBODY>
              </TABLE>
	</td>
  </tr>
  </form>
</table>

<script language="javascript">


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

</script>
<style>
.hide_box{width:350;color:#fff;color:#444;background:#fff;box-shadow:1px 2px 2px #555;display:none;}
.hide_box h4{height:26px;line-height:26px;overflow:hidden;background:#0884C4;color:#fff;padding:0 10px;border:1px solid #0884C4;font-size:14px;border-bottom:1px solid #0884C4;}
.hide_box h4 a{width:14px;line-height:13px;_line-height:15px;height:13px;font-family:arial;overflow:hidden;display:block;background:#fff;color:#c77405;float:right;text-align:center;text-decoration:none;margin-top:7px;font-size:14px;font-weight:normal;border-radius:2px;_font-size:12px;}
.hide_box p{font-size:13px;border:1px solid #ccc;}
</style>
<script type="text/javascript" src="{{$template_root}}/cssjs/jquery-1.7.2.min.js"></script>

</body>
<iframe id="hide" name="hide" height="0"  frameborder="0" scrolling="no"></iframe>
<input style="width:0;height:0;display:none" id="protocol" value="" />
</html>



