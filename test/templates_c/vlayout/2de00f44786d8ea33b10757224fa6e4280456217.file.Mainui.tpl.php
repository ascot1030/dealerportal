<?php /* Smarty version Smarty-3.1.7, created on 2015-04-20 01:27:53
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\MailManager\Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1409955345619a5fd37-64490040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2de00f44786d8ea33b10757224fa6e4280456217' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\MailManager\\Mainui.tpl',
      1 => 1426177556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409955345619a5fd37-64490040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_55345619b50ec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55345619b50ec')) {function content_55345619b50ec($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>