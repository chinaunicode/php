<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><title><?php echo C('SITE_TITLE');?></title><meta charset="utf-8" /><script type="text/javascript"> var module = '<?php echo strtolower(MODULE_NAME); ?>'; var action = '<?php echo ACTION_NAME;?>'; var tag_id = '<?php echo ($_GET["tag"]); ?>'; var node = '<?php echo ($_GET["node"]); ?>'; </script><link rel="stylesheet" type="text/css" href="../Public/style/layout.css" /><script type="text/javascript" src="__JS__/jQuery/jquery.js"></script><script type="text/javascript" src="__JS__/jQuery/plugin/cookie.js"></script><script type="text/javascript" src="../Public/js/common.js"></script><script type="text/javascript">
			jQuery(document).ready(function($){
				
			});
		</script><style type="text/css" media="all"></style></head><body><div id="wrap"><div id="header"><ul class="nav"><li class="home" rel="index"><a href="__APP__">首页</a></li><?php if(is_array($root_node)): $i = 0; $__LIST__ = $root_node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$root): $mod = ($i % 2 );++$i; $action = $root['action']; if( empty( $root['action'] ) ){ $action = 'index'; } ?><li class="li <?php echo ($root["module"]); ?>" rel="<?php echo ($root["module"]); ?>"><a href="<?php echo U($root['module'].'/'.$action,array('node'=>$root['id']));?>"><?php echo ($root["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class="li logout" rel="logout"><a href="<?php echo U('public/logout');?>">注销</a></li></ul></div><div id="container"><div id="sidebar_switch"></div><div id="content"><div id="c_warp"><!--h2>数据库工具</h2><h2>运行SQL语句</h2><h2>数据备份</h2><h2>数据还原</h2><h2>缓存工具</h2><h2>清空所有缓存</h2><h2>清空前台缓存</h2><h2>清空后台缓存</h2><h2>统计站点数据</h2><h2>站点广告</h2><h2>自定义数据调用</h2--><table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_list"><tr><th align="center">文件名</th><th align="center">备份时间</th><th align="center">文件大小</th><th align="center">管理选项</th></tr><?php $FileArr = scanBackDir( $folder ); foreach ($FileArr as $i => $n){ if($n != 'PHPMyAdminInitialData.sql' && $i>1){ $FileTime = date('Y-m-d H:i:s',filemtime( $folder . $n ) ); $FileSize = filesize( $folder . $n ) / 1024; if ($FileSize < 1024){ $FileSize = number_format($FileSize,2) . ' KB'; } else { $FileSize = '<font color="#FF0000">' . number_format($FileSize/1024,2) . '</font> MB'; } $sAS = "<a href=\"" . U('download',array('file'=>$n)) . "\" target=\"_blank\">下载</a><span class=\"c_line\">|</span>"; $sAS .= "<a onClick=\"return confirm('确定将数据库还原到当前备份吗？');\" href=\"" . U('reduction',array('file'=>$n,'node'=>$_GET['node'])) . "\">还原</a><span class=\"c_line\">|</span>"; $sAS .= "<a onClick=\"return confirm('确定删除该备份文件吗？');\" href=\"" . U('del',array('file'=>$n,'node'=>$_GET['node'])) . "\">删除</a>"; echo "<tr class=\"row\"><td height=\"20\" align=\"center\">$n</td><td align=\"center\">$FileTime</td><td align=\"center\">$FileSize</td><td align=\"center\">$sAS</td></tr>"; unset($FileTime,$FileSize,$sAS); } } ?><tr class="row"><td colspan="4" height="40" align="center"><input type="button" value="备份数据库" class="submit" style="width:120px; height:28px;" onClick="javascript:location.href='<?php echo U('backup');?>'"></td></tr></table><br /><table width="100%" border="0" align="center" cellpadding="0" cellspacing="6"><tr class="row"><td style="color:#333333; line-height:20px;">
		                                        注：1、本操作只对数据库中当前网站数据(表前缀为 "<?php echo C('DB_PREFIX');?>" 的表)进行备份。如果您的数据库中有多个网站，其它站点不受影响。<br />
		                                        　　2、备份后的数据可以进行还原操作或通过 phpMyAdmin 导入。
		                                </td></tr></table></div></div><div id="sidebar"><div id="user_info"><div class="avatar"><img src="<?php echo (getuseravatar($_SESSION['AUTH']['id'])); ?>" width="45" /></div><dl class="info"><dt><?php echo ($_SESSION['AUTH']['nickname']); ?><dt><dd><?php echo ($_SESSION['AUTH']['remark']); ?></dd></dl><div class="clear"></div></div><?php if( $sidebar ){ ?><ol class="action_list"><?php if(is_array($sidebar)): $i = 0; $__LIST__ = $sidebar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sidebar): $mod = ($i % 2 );++$i; if ( !empty( $sidebar['type_name'] ) ){ $json = json_decode($sidebar['type_name'],true); }else{ $json = array(); } $node['node'] = $sidebar['pid']; $node['tag'] = $sidebar['id']; $param = array_merge( $json, $node ); ?><li rel="<?php echo ($sidebar["module"]); ?>_<?php echo ($sidebar["action"]); ?>" tag="<?php echo ($sidebar["id"]); ?>"><a href="<?php echo U($sidebar['module'].'/'.$sidebar['action'],$param);?>"><?php echo ($sidebar["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ol><?php }else{ ?><div id="a_list"></div><?php } ?></div></div></div></body></html>