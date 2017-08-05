<?php /* Smarty version Smarty-3.1.7, created on 2015-04-13 01:34:53
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Vtiger\JinPopupContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10349552b1d3d9f38f8-00495060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17887fb7781ebefb738b677f756dcdf5769cd69d' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\JinPopupContents.tpl',
      1 => 1428708275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10349552b1d3d9f38f8-00495060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NOEDIT' => 0,
    'PRODUCT_VALUE' => 0,
    'COUNTER' => 0,
    'WIDTHTYPE' => 0,
    'FIELD_MODEL' => 0,
    'BLOCK_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_552b1d3dd7cc4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b1d3dd7cc4')) {function content_552b1d3dd7cc4($_smarty_tpl) {?>
<div class="contentHeader row-fluid"><div class="span6"><h3>Single Roller Blind</h3></div><div class="span6"><div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['NOEDIT']->value!='yes'){?><button class="btn btn-success addblind" type="submit"><strong>Save</strong></button><?php }?><a class="cancelLink" type="reset" onclick="javascript:window.close();">Cancel</a></div></div></div><table class="table table-bordered blockContainer showInlineTable equalSplit"><thead><tr><th class="blockHeader" colspan="4">Information</th></tr></thead><tbody><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PRODUCT_VALUE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['COUNTER']->value==2){?></tr><tr><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable(1, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNTER'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNTER']->value+1, null, 0);?><?php }?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="muted pull-right marginRight10px"><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value['fieldlabel'];?>
</label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="row-fluid"><span class="span10"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value['uitype']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></td><?php } ?><?php if (end($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)==true&&count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value)!=1&&$_smarty_tpl->tpl_vars['COUNTER']->value==1){?><td class="fieldLabel <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><?php }?></tr></tbody></table>
<?php }} ?>