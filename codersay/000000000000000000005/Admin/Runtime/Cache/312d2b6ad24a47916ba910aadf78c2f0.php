<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加栏目</title>
<link href="__PUBLIC__/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.min.js"></script>
<script language="javascript" type="text/javascript" src="__PUBLIC__/Js/formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"标题不能为空",onfocus:"标题不能为空"}).inputValidator({min:1,max:50,onerror:"标题不能为空"});	
});
</script>
</head>
<body>
<div class="location">
   <span>当前位置:常用操作&nbsp;>&nbsp;栏目管理</span>
 </div>
<div class="main">
 <div class="tags">
    <a href="__URL__/index"  target="main" title="管理列表" >管理列表</a>|
   <a href="__URL__/insert" target="main" title="添加栏目" class="main_select"><span>添加栏目</span></a>
   <div class="line"/></div>
</div>

<div class="table-list">
     <form name="myform" action="__URL__/add" method="POST" id="myform" enctype="multipart/form-data">
    <table width="100%" cellspacing="0" style="font-size:12px;">
       <tbody>
            <tr>
            <td width="100" align="right">模型：</td>
            <td align="left">          
			  <input type="hidden" name="modelid" value="<?php echo ($vo['modelid']); ?>"><?php echo ($vo['model']); ?>    		           
            </td>	
            </tr>
            <tr>
            <td width="100" align="right">上级栏目：</td>
            <td align="left">
            <input type="hidden" name="colPid" value="<?php echo ($vo['colId']); ?>"><?php echo ($vo['colTitle']); ?>
            </td>	
            </tr>
            <tr>
            <td width="100" align="right">栏目名称：</td>
            <td align="left">
           <input type="text" name="colTitle" id="title" class="required">
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">缩略图：</td>
            <td align="left">
           <input  type="file" name="thumb" id="thumb"/>
            </td>	
            </tr>
             <tr>
            <td width="100" align="right">描述：</td>
            <td align="left">
           <textarea name="description" rows="3" cols="60"></textarea>
            </td>	
            </tr>
            <tr>
            <td width="100" align="center"></td>
            <td align="left">
            是否在导航显示：<input type="checkbox" name="asmenu" value="1">
            </td>	
            </tr>
       </tbody>
    
 </table>
	<div class="btn" style="font-size:12px;">
          <input type="submit" value="提交" id="send" class="button" style="margin-left: 450px;">&nbsp;&nbsp;
		 <input  type="button" onClick="history.back()" class="button" value="取 消" alt="取消" />
	   </div>
</form>
</div>
</div>
</div>
</body>
</html>