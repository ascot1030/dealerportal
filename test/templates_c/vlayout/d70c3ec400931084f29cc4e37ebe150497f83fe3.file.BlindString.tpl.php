<?php /* Smarty version Smarty-3.1.7, created on 2015-04-13 01:34:54
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\BlindString.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15667552b1d3e029079-98295424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70c3ec400931084f29cc4e37ebe150497f83fe3' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\BlindString.tpl',
      1 => 1428708982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15667552b1d3e029079-98295424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'NOEDIT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_552b1d3e0ce00',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b1d3e0ce00')) {function content_552b1d3e0ce00($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value['fieldname'], null, 0);?><input id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="input-large" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value['defaultvalue'];?>
" <?php if ($_smarty_tpl->tpl_vars['NOEDIT']->value=='yes'){?>disabled<?php }?>/><?php }} ?>