<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/Tpl/default/Admin/css/common.css" type="text/css" />
<title>管理导航区域</title>
</head>
<script  type="text/javascript">
var preClassName = "man_nav_1";
function list_sub_nav(Id,sortname){
   if(preClassName != ""){
      getObject(preClassName).className="bg_image";
   }
   if(getObject(Id).className == "bg_image"){
      getObject(Id).className="bg_image_onclick";
      preClassName = Id;
	  showInnerText(Id);
	  window.top.frames['leftFrame'].outlookbar.getbytitle(sortname);
	  window.top.frames['leftFrame'].outlookbar.getdefaultnav(sortname);
   }
}

function showInnerText(Id){
    var switchId = parseInt(Id.substring(8));
	var showText = "对不起没有信息！";
	switch(switchId){
	    case 1:
		   showText =  "系统设置";
		   break;
	    case 2:
		   showText =  "文章管理。包括日志类别添加，修改删除和日志的添加，修改，删除操作。";
		   break;
	    case 3:
			   showText =  "SEO管理。包括友情链接管理，日志标题格式设置等。";
			   break;
	}
	getObject('show_text').innerHTML = showText;
}
 //获取对象属性兼容方法
 function getObject(objectId) {
    if(document.getElementById && document.getElementById(objectId)) {
	// W3C DOM
	return document.getElementById(objectId);
    } else if (document.all && document.all(objectId)) {
	// MSIE 4 DOM
	return document.all(objectId);
    } else if (document.layers && document.layers[objectId]) {
	// NN 4 DOM.. note: this won't find nested layers
	return document.layers[objectId];
    } else {
	return false;
    }
}
</script>
<body>
<div id="nav">
    <ul><li id="man_nav_1" onclick="list_sub_nav(id,'系统设置')"  class="bg_image_onclick">系统设置</li><li id="man_nav_2" onclick="list_sub_nav(id,'日志管理')"  class="bg_image">日志管理</li><li id="man_nav_3" onclick="list_sub_nav(id,'SEO管理')"  class="bg_image">SEO管理</li></ul>
</div>
<div id="sub_info">&nbsp;&nbsp;<img src="/Tpl/default/Admin/images/hi.gif" />&nbsp;<span id="show_text">欢迎登录后台管理系统!</span></div>
</body>
</html>