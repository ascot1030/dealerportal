<?php /* Smarty version Smarty-3.1.7, created on 2015-04-13 01:34:54
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\BlindBoolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18672552b1d3e1f0273-44072590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '989a320d570c5d7263abaa75293f59eb5517c087' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\BlindBoolean.tpl',
      1 => 1428708972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18672552b1d3e1f0273-44072590',
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
  'unifunc' => 'content_552b1d3e2d134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b1d3e2d134')) {function content_552b1d3e2d134($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["FIELD_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value['fieldname'], null, 0);?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" value=0 /><input class="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-validation-engine="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value['defaultvalue']=='Yes'){?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['NOEDIT']->value=='yes'){?>disabled<?php }?>/><?php }} ?>