<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html><head><meta charset="utf-8" /><link rel="stylesheet" type="text/css" href="../Public/style/login.css" /><script type="text/javascript" src="__JS__/jQuery/jquery.js"></script><script type="text/javascript">			$(function(){
				$('#account').focus();
				var $bgs = Array();
				$bgs[0] = '../Public/images/bg/1.jpg';
				$bgs[1] = '../Public/images/bg/2.jpg';
				$bgs[2] = '../Public/images/bg/3.jpg';
				$bgs[3] = '../Public/images/bg/4.jpg';
				var i = parseInt( Math.random() * ($bgs.length) );
				$('#login').css('background','url("'+$bgs[i]+'") center top');
				$('#login_button').click(function(){
					var _this = $(this);
					var account = $.trim( $('#account').val() );
					var password = $.trim( $('#password').val() );
					var verify = $.trim( $('#verify').val() );
					$.ajax({
						url : '<?php echo U("checklogin");?>',
						success : function( _return ){
							if ( _return.status == 0 ){
								$('#'+_return.url)
									.css('border-color','#cd9c9c')
									.focus()
									.next('span')
									.addClass('error')
									.css('color','#c20000')
									.text(_return.info);
							}else{
								_this.attr('disabled','disabled').val('登录中...');
								window.location.href = _return.url;
							}
						},
						cache : false,
						data : {
							'account' : account,
							'password' : password,
							'verify' : verify,
							'reuri' : '<?php echo ($_GET["reuri"]); ?>'
						},
						dataType : 'json',
						type : 'POST'
					});
				});
				$('.t_input').bind({
					blur : function(){
						var _this = $(this);
						var _type = _this.attr('title');
						var _error = _this.next('.error');
						if ( _error ){
							_this.removeAttr('style').next('span').removeClass('error').removeAttr('style').text(_type);
						}
					}
				});
			});
		</script></head><body><div id="login"><div class="login_title"></div><ul class="login_form"><li><input type="text" name="account" id="account" class="t_input" title="*请填写用户名" /><span class="alert">*请填写用户名</span></li><li><input type="password" name="password" id="password" class="t_input" title="*请输入密码" /><span class="alert">*请输入密码</span></li><li><input type="text" name="verify" id="verify" class="t_input" title="*请输入验证码" /><span class="alert">*请输入验证码</span><span class="pic"><img id="verifyImg" SRC="<?php echo U('verify');?>" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span></li><li><input type="submit" class="s_input" value="登录" id="login_button" /><input type="button" class="s_input" value="返回首页" onclick="window.location.href='/';" style="margin-left:25px;" /></li></ul></div></body></html>