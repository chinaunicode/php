<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="/www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__PUBLIC__/admin/style/base.css" type="text/css" />
</head>
<body background='__PUBLIC__/admin/images/allbg.gif' leftmargin='8' topmargin='8'>
<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6" align="center">
  <form name="form1">
    <tr> 
      <td height="20" colspan="2" background='__PUBLIC__/admin/images/tbg.gif'>
       <table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><b>更新前台缓存</b> </td> 
        </tr>
      </table>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空所有缓存</td>
      <td width="30%"><a href='__URL__/clear/type/1' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空所有缓存' title='清空所有缓存'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空数据缓存</td>
      <td width="30%"><a href='__URL__/clear/type/2' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空数据缓存' title='清空数据缓存'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空数据目录</td>
      <td width="30%"><a href='__URL__/clear/type/3' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空数据目录' title='清空数据目录'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空模版缓存</td>
      <td width="30%"><a href='__URL__/clear/type/4' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空模版缓存' title='清空模版缓存'/></a></td>
    </tr>
  </form>
</table>

<table width="98%" border="0" cellpadding="3" cellspacing="1" bgcolor="#D6D6D6" align="center" style="margin-top:10px;">
  <form name="form2">
    <tr> 
      <td height="20" colspan="2" background='__PUBLIC__/admin/images/tbg.gif'>
       <table width="96%" border="0" cellspacing="1" cellpadding="1">
        <tr> 
          <td width="24%" style="padding-left:10px;"><b>更新后台缓存</b> </td> 
        </tr>
      </table>
      </td>
    </tr>
    <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空所有缓存</td>
      <td width="30%"><a href='__URL__/clear/type/5' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空所有缓存' title='清空所有缓存'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空数据缓存</td>
      <td width="30%"><a href='__URL__/clear/type/6' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空数据缓存' title='清空数据缓存'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空数据目录</td>
      <td width="30%"><a href='__URL__/clear/type/7' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空数据目录' title='清空数据目录'/></a></td>
    </tr>
     <tr bgcolor="#FFFFFF" align="center" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';"> 
      <td width="70%" height="18">清空模版缓存</td>
      <td width="30%"><a href='__URL__/clear/type/8' ><img src='__PUBLIC__/admin/images/refresh.png' alt='清空模版缓存' title='清空模版缓存s'/></a></td>
    </tr>
  </form>
</table>
</body>
</html>