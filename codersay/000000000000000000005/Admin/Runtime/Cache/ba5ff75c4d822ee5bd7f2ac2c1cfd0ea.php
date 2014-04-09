<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加附件</title>
<link href="__PUBLIC__/admin/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/Js/jquery-1.4.3.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#getAtr").click(function(){             
         $str='';  
         $str+="<tr>";          
         $str+="<td width='400' align='center'><input type='file' name='img[]' /></td>";  
         $str+="<td align='center' ><input type='text' name='alt[]' /></td>";   
		  $str+="<td align='left' onClick='getDel(this)'><a href='#'><img src='__PUBLIC__/admin/images/gtk-del.png' alt='清空回收站'/></a></td>";      
         $str+="</tr>";  
         $("#addTr").append($str);      
    });  
});
function getDel(k){  
     $(k).parent().remove();       
 } 

</script>
<style>
.fu_list {
	width:800px;
	background:#ebebeb;
	font-size:12px;
	margin:0 auto;  
}
.fu_list td {
	padding:5px;
	line-height:20px;
	background-color:#fff;
}
.fu_list table {
	width:100%;
	border:1px solid #ebebeb;
}
.fu_list thead td {
	background-color:#f4f4f4;
}
.fu_list b {
	font-size:14px;
}
a.files input {
	margin-left:-350px;
	font-size:30px;
	cursor:pointer;
	filter:alpha(opacity=0);
	opacity:0;
}
/*取消点击时的虚线框*/
a.files, a.files input {
	outline:none;/*ff*/
	hide-focus:expression(this.hideFocus=true);/*ie*/
}
</style>
<body>
<div class="location">
   <span>当前位置:常用操作&nbsp;>&nbsp;
    <?php if($module == 'News'): ?><a href="__APP__/<?php echo ($module); ?>/index">文章管理</a>>>上传图片
   <?php elseif($module == 'Download'): ?><a href="__APP__/<?php echo ($module); ?>/index">下载管理</a>>>上传附件
   <?php elseif($module == 'Page'): ?><a href="__APP__/<?php echo ($module); ?>/index">单页管理</a>&nbsp;>>&nbsp;添加附件
    <?php else: ?>
    上传附件<?php endif; ?> 
   </span>
 </div>
<div class="main">
 <div class="tags">

   <a href="#" target="main" title="添加图片" class="main_select"><span>
   <?php if($module == 'News'): ?>添加图片
            <?php elseif($module == 'Download'): ?>添加附件
            <?php elseif($module == 'Page'): ?>添加单页附件<?php endif; ?>
   </span></a>
   <div class="line"/></div>
</div>
<div class="table-list">
   <form action="__URL__/upload" method="post" enctype="multipart/form-data">

 <table border="0" cellspacing="1" class="fu_list">
    <thead>
      <tr>
        <td colspan="2"><b>上传文件</b></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td align="right" width="15%" style="line-height:35px;">添加文件：</td>
        <td><a href="javascript:void(0);" class="files" id="getAtr"></a> <img id="idProcess" style="display:none;" src="img/loading.gif" /></td>
      </tr>
      <tr>
        <td colspan="2"><table border="0" cellspacing="0">
            <thead>
              <tr>
                <td>文件路径</td>
                <td width="60">添加描述</td>
                <td></td>
              </tr>
            </thead>
           <tbody id="addTr">
            <tr>
            <td width="400" align="center"><input  type="file" name="file[]" /></td>
            <td align="center"> <input type='text' name='alt[]'  size='20'></td>
            <td></td>	         
            </tr> 
       </tbody>
          </table></td>
      </tr>
      <tr>
        <td colspan="2" style="color:gray">温馨提示：只允许上传 <b id="idExt"><?php echo (C("allowexts")); ?></b> 文件，允许上传的最大文件为<b id="idExt"><?php echo (C("maxsize")); ?>MB</b></td>
      </tr>
      <tr>
        <td colspan="2" align="center" id="idMsg">
         <input type="hidden" name="module" value="<?php echo ($module); ?>">
         <input type="hidden" name="recordId" value="<?php echo ($recordId); ?>">
          <input type="submit" value="开始上传" id="send" class="button" style="margin-left: 100px;">&nbsp;&nbsp;
       
          &nbsp;&nbsp;&nbsp;
          <input type="button" value="全部取消" onClick="history.back()" class="button" />
        </td>
      </tr>
    </tbody>
  </table>
	<div class="btn" style="font-size:12px;">  </div>                           
</form>
</div>
</div>
</body>
</html>