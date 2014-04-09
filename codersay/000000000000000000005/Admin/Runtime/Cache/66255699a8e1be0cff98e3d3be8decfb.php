<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>菜单</title>
</head>
<style type="text/css">
td {font-size: 12px;}
</style>
 <link rel="stylesheet" href="__PUBLIC__/admin/menu.css" type="text/css" />   
<title>层的折叠，层展开</title>
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.min.js"></script>
<script>
$(function(){
$(".title").click(function(){
$(this).next().slideToggle(100).end().siblings(".title").next().slideUp();
})
})
</script>

</head>
<body>
<div class="title" ><dt><b>常用操作</b></div>
<div id="te01"class="item1">
<li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/News/index"  target="main" title="文章管理">文章管理</a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Blog/index" target="main" title="博客管理">博客管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Download/index" target="main" title="下载管理">下载管理</a></div>								
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Columns/index" target="main" title="单页附件">栏目管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Tag/index" target="main" title="单页附件">标签管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Page/index" target="main" title="单页管理">单页管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Attach/index" target="main" title="单页附件">附件管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Tpl/index" target="main" title="模板管理">模板管理</a></div>								        
              </div>
            </li>
            <div class="line10"></div>
</div>
<div class="title"><dt><b>模块管理</b></dt></div>
<div id="te02" class="item1" style="display:none;">
<li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Guestbook/index"  target="main" title="留言管理">留言管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Comment/index"  target="main" title="评论管理">评论管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Widget/index"  target="main" title="Widget工具">Widget工具</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Link/index" target="main" title="友情链接">友情链接</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Announce/index"  target="main" title="公告管理">公告管理</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Banner/index" target="main" title="广告管理">广告管理</a></div>								        
              </div>
            </li>
            <div class="line10"></div>
</div>
<div class="title"><dt><b>系统管理</b></dt></div>
<div id="te03" class="item" style="display:none;">
<li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Databakup/index" target="main" title="文档文件">数据备份</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Public/main" target="main" title="系统信息">系统信息</a></div>								        
              </div>
            </li>
             <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Config/config" target="main" title="基本设置">基本设置</a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Clear/index" target="main" title="缓存管理">缓存管理</a></div>								        
              </div>
            </li> 
            <div class="line10"></div>
</div>
<div class="title"><dt><b>用户管理</b></div>
<div id="te04" class="item2" style="display:none;">
 <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Public/password"  target="main" title="修改密码">修改密码</a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/User"  target="main" title="会员管理"><font color=red>用户列表</font></a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/User/insert"  target="main" title="添加会员">添加用户</a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Node/index"  target="main" title="节点管理">节点管理</a></div>								        
              </div>
            </li>
            <li>
              <div class="items">
                <div class="fllct"><a href="__GROUP__/Role/index"  target="main" title="角色管理">角色管理</a></div>								        
              </div>
            </li>
            <div class="line10"></div>
</div>
</body>
</html>