<?php /* Smarty version Smarty-3.1.7, created on 2015-04-13 01:34:53
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\BlindPicklist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7330552b1d3ddb1865-35067815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0933320f8c3baa8eb1052ce1199ba2e9585519f7' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\BlindPicklist.tpl',
      1 => 1428716201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7330552b1d3ddb1865-35067815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_NAME' => 0,
    'PICK_VALUE' => 0,
    'OCCUPY_COMPLETE_WIDTH' => 0,
    'FIELD_MODEL' => 0,
    'NOEDIT' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_NAME' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_552b1d3df3207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b1d3df3207')) {function content_552b1d3df3207($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['PICK_VALUE']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value], null, 0);?><select id=<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
 class="chzn-select <?php if ($_smarty_tpl->tpl_vars['OCCUPY_COMPLETE_WIDTH']->value){?> row-fluid <?php }?>" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value['fieldname'];?>
" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if ($_smarty_tpl->tpl_vars['NOEDIT']->value=='yes'){?>disabled<?php }?>><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value['defaultvalue']==$_smarty_tpl->tpl_vars['PICKLIST_NAME']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value[$_smarty_tpl->tpl_vars['FIELD_NAME']->value];?>
</option><?php } ?></select><?php }} ?>