<?php /* Smarty version Smarty-3.1.7, created on 2015-03-12 18:10:49
         compiled from "C:\wamp\www\dealerportal\includes\runtime/../../layouts/vlayout\modules\Users\Login.Default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:234435501be43c484e2-08623596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fd305837aea40910576eacf02014ee5c09ad51' => 
    array (
      0 => 'C:\\wamp\\www\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\Login.Default.tpl',
      1 => 1425985039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234435501be43c484e2-08623596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5501be43eac88',
  'variables' => 
  array (
    'COMPANY_DETAILSCOMPANY_DETAILS' => 0,
    'COMPANY_DETAILS' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501be43eac88')) {function content_5501be43eac88($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title>Vtiger login page</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- for Login page we are added --><link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"><link href="libraries/bootstrap/css/jqueryBxslider.css" rel="stylesheet" /><script src="libraries/jquery/jquery.min.js"></script><script src="libraries/jquery/boxslider/jqueryBxslider.js"></script><script src="libraries/jquery/boxslider/respond.min.js"></script><script>jQuery(document).ready(function(){scrollx = jQuery(window).outerWidth();window.scrollTo(scrollx,0);slider = jQuery('.bxslider').bxSlider({auto: true,pause: 4000,randomStart : true,autoHover: true});jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });});</script></head><body><div class="container-fluid login-container"><div class="row-fluid"><div class="span3"><div class="logo"><img src="layouts/vlayout/skins/images/logo.png"><br /><a target="_blank" href="http://<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILSCOMPANY_DETAILS']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['name'];?>
</a></div></div><!--div class="span9"><div class="helpLinks"><a href="https://www.suntex.com.au">Website</a> |<a href="https://www.suntex.com.au">Website</a> |<a href="https://www.suntex.com.au">Website</a> |<a href="https://www.suntex.com.au">Website</a></div></div--></div><div class="row-fluid"><div class="span12"><div class="content-wrapper"><div class="container-fluid"><div class="row-fluid"><div class="span6"><div class="carousal-container"><div><h2> A Visible Difference </h2></div><ul class="bxslider"><li><div id="slide01" class="slide"><img class="pull-left" src="<?php echo vimage_path('product1.jpg');?>
"></div></li><li><div id="slide02" class="slide"><img class="pull-left" src="<?php echo vimage_path('product2.jpg');?>
"/></div></li><li><div id="slide03" class="slide"><img class="pull-left" src="<?php echo vimage_path('product3.jpg');?>
"/></div></li><li><div id="slide04" class="slide"><img class="pull-left" src="<?php echo vimage_path('product4.jpg');?>
"/></div></li><li><div id="slide05" class="slide"><img class="pull-left" src="<?php echo vimage_path('product5.jpg');?>
"/></div></li><li><div id="slide06" class="slide"><img class="pull-left" src="<?php echo vimage_path('product6.jpg');?>
"/></div></li><li><div id="slide07" class="slide"><img class="pull-left" src="<?php echo vimage_path('product7.jpg');?>
"/></div></li><li><div id="slide08" class="slide"><img class="pull-left" src="<?php echo vimage_path('product8.jpg');?>
"/></div></li></ul></div></div><div class="span6"><div class="login-area"><div class="login-box" id="loginDiv"><div class=""><h3 class="login-header">Login to DealerPortal</h3></div><form class="form-horizontal login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST"><?php if (isset($_REQUEST['error'])){?><div class="alert alert-error"><p>Invalid username or password.</p></div><?php }?><?php if (isset($_REQUEST['fpError'])){?><div class="alert alert-error"><p>Invalid Username or Email address.</p></div><?php }?><?php if (isset($_REQUEST['status'])){?><div class="alert alert-success"><p>Mail has been sent to your inbox, please check your e-mail.</p></div><?php }?><?php if (isset($_REQUEST['statusError'])){?><div class="alert alert-error"><p>Outgoing mail server was not configured.</p></div><?php }?><div class="control-group"><label class="control-label" for="username"><b>User name</b></label><div class="controls"><input type="text" id="username" name="username" placeholder="Username" value="admin"></div></div><div class="control-group"><label class="control-label" for="password"><b>Password</b></label><div class="controls"><input type="password" id="password" name="password" placeholder="Password" value="admin"></div></div><div class="control-group signin-button"><div class="controls" id="forgotPassword"><button type="submit" class="btn btn-primary sbutton">Sign in</button>&nbsp;&nbsp;&nbsp;<a>Forgot Password ?</a></div></div></form><div class="login-subscript"><small> </small></div></div><div class="login-box hide" id="forgotPasswordDiv"><form class="form-horizontal login-form" style="margin:0;" action="forgotPassword.php" method="POST"><div class=""><h3 class="login-header">Forgot Password</h3></div><div class="control-group"><label class="control-label" for="user_name"><b>User name</b></label><div class="controls"><input type="text" id="user_name" name="user_name" placeholder="Username"></div></div><div class="control-group"><label class="control-label" for="email"><b>Email</b></label><div class="controls"><input type="text" id="emailId" name="emailId"  placeholder="Email"></div></div><div class="control-group signin-button"><div class="controls" id="backButton"><input type="submit" class="btn btn-primary sbutton" value="Submit" name="retrievePassword">&nbsp;&nbsp;&nbsp;<a>Back</a></div></div></form></div></div></div></div></div></div></div></div></div><div class="navbar navbar-fixed-bottom"><div class="navbar-inner"><div class="container-fluid"><div class="row-fluid"><div class="span6 pull-left" ><div class="footer-content"><small>&#169 2014-<?php echo date('Y');?>
&nbsp;Suntex Pty Ltd. All rights reserved.</small></div></div><div class="span6 pull-right" ><div class="pull-right footer-icons"><small><?php echo vtranslate('LBL_CONNECT_WITH_US',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</small><a href="https://www.facebook.com/SuntexAustralia"><img src="layouts/vlayout/skins/images/facebook.png"></a>&nbsp;<a href="https://twitter.com/suntex"><img src="layouts/vlayout/skins/images/twitter.png"></a>&nbsp;<a href="https://www.linkedin.com/company/suntex-pty-ltd"><img src="layouts/vlayout/skins/images/linkedin.png"></a>&nbsp;<a href="http://www.youtube.com/user/suntex"><img src="layouts/vlayout/skins/images/youtube.png"></a></div></div></div></div></div></div></body><script>jQuery(document).ready(function(){jQuery("#forgotPassword a").click(function() {jQuery("#loginDiv").hide();jQuery("#forgotPasswordDiv").show();});jQuery("#backButton a").click(function() {jQuery("#loginDiv").show();jQuery("#forgotPasswordDiv").hide();});jQuery("input[name='retrievePassword']").click(function (){var username = jQuery('#user_name').val();var email = jQuery('#emailId').val();var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;if(username == ''){alert('Please enter valid username');return false;} else if(!emailFilter.test(email1) || email == ''){alert('Please enater valid email address');return false;} else if(email.match(illegalChars)){alert( "The email address contains illegal characters.");return false;} else {return true;}});});</script></html>
<?php }} ?>