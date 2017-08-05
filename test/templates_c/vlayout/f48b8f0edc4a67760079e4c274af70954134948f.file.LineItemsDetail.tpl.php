<?php /* Smarty version Smarty-3.1.7, created on 2015-05-14 15:51:27
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Inventory\LineItemsDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9996552b3388231cb0-35809831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f48b8f0edc4a67760079e4c274af70954134948f' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Inventory\\LineItemsDetail.tpl',
      1 => 1431607628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9996552b3388231cb0-35809831',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_552b33893928d',
  'variables' => 
  array (
    'RELATED_PRODUCTS' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'CURRENCY_INFO' => 0,
    'FINAL_DETAILS' => 0,
    'MODULE' => 0,
    'RECORDID' => 0,
    'INDEX' => 0,
    'LINE_ITEM_DETAIL' => 0,
    'SUB_PRODUCT_NAME' => 0,
    'LAYOUT' => 0,
    'DISCOUNT_INFO' => 0,
    'tax_details' => 0,
    'INDIVIDUAL_TAX_INFO' => 0,
    'FINAL_DISCOUNT_INFO' => 0,
    'GROUP_TAX_INFO' => 0,
    'SHIPPING_HANDLING_TAX_INFO' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b33893928d')) {function content_552b33893928d($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['FINAL_DETAILS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['LAYOUT'] = new Smarty_variable(0, null, 0);?>
<table class="table table-bordered mergeTables">
    <thead>
    <?php if (1){?>
    <th colspan="10" class="detailViewBlockHeader">
    <?php echo vtranslate('LBL_ITEM_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

    </th>
    <?php }else{ ?>
    <th colspan="2" class="detailViewBlockHeader">
	<?php echo vtranslate('LBL_ITEM_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

    </th>
    <th colspan="3" class="detailViewBlockHeader">
	<?php $_smarty_tpl->tpl_vars['CURRENCY_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getCurrencyInfo(), null, 0);?>
	<?php echo vtranslate('LBL_CURRENCY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 : <?php echo vtranslate($_smarty_tpl->tpl_vars['CURRENCY_INFO']->value['currency_name'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['CURRENCY_INFO']->value['currency_symbol'];?>
)
    </th>
    <th colspan="5" class="detailViewBlockHeader">
	<?php echo vtranslate('LBL_TAX_MODE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 : <?php echo vtranslate($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['taxtype'],$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>

    </th>
    <?php }?>
	</thead>
	<tbody>
    <tr>
	<td>
	    <span class="redColor">*</span><b><?php echo vtranslate('LBL_ITEM_NAME',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_QTY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_WIDTH',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_DROP',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_FABRIC',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_LOCATION',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_LIST_PRICE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b><?php echo vtranslate('LBL_ITEM_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b class="pull-right"><?php echo vtranslate('LBL_NET_PRICE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	</td>
        <td>
	    <b class="pull-right"><?php echo vtranslate('LBL_WHL_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b>
	</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key => $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value){
$_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key;
?>
	<tr class="listViewBlinds" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['INDEX']->value;?>
">
	    <td>
		<div class="row-fluid">
		    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productName".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productDeleted".($_smarty_tpl->tpl_vars['INDEX']->value)]){?>
			<div class="row-fluid redColor deletedItem">
				<?php if (empty($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productName".($_smarty_tpl->tpl_vars['INDEX']->value)])){?>
					<?php echo vtranslate('LBL_THIS_LINE_ITEM_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_THIS_LINE_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				<?php }else{ ?>
					<?php echo vtranslate('LBL_THIS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["entityType".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
 <?php echo vtranslate('LBL_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_OR_REPLACE_THIS_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>

				<?php }?>
			</div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["subProductArray".($_smarty_tpl->tpl_vars['INDEX']->value)])){?>
		    <div>
			<?php  $_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["subProductArray".($_smarty_tpl->tpl_vars['INDEX']->value)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->key => $_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->value){
$_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->_loop = true;
?>
			    <div>
				<?php if (!empty($_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->value)){?>
					- &nbsp; <em><?php echo $_smarty_tpl->tpl_vars['SUB_PRODUCT_NAME']->value;?>
</em>
				<?php }?>
			    </div>
			<?php } ?>
		    </div>
		<?php }?>
		<?php if (!empty($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productName".($_smarty_tpl->tpl_vars['INDEX']->value)])){?>
			<div>
				<?php echo nl2br($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["comment".($_smarty_tpl->tpl_vars['INDEX']->value)]);?>

			</div>
		<?php }?>
	    </td>
	    <td>
		<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["qty".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

	    </td>
	    <td>
	    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productwidth".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

	    </td>
	    <td>
	    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productdrop".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

	    </td>
	    <td>
	    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["fabric_description".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

	    </td>
	    <td>
	    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["location".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

	    </td>
	    <td>
		<div>
		    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["listPrice".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value){?>
		<div>
		    <?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discount_type".($_smarty_tpl->tpl_vars['INDEX']->value)]=='amount'){?><?php echo " ";?><?php echo vtranslate('LBL_DIRECT_AMOUNT_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php echo " = ";?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discountTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?><?php echo "
		    ";?><?php }elseif($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discount_type".($_smarty_tpl->tpl_vars['INDEX']->value)]=='percentage'){?><?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discount_percent".($_smarty_tpl->tpl_vars['INDEX']->value)];?><?php echo " % ";?><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?><?php echo " = ";?><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discountTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?><?php echo "
			";?><?php }?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['DISCOUNT_INFO'] = new Smarty_variable($_tmp1, null, 0);?>
			(-)&nbsp; <b><a href="javascript:void(0)" class="individualDiscount inventoryLineItemDetails" data-info='<?php echo $_smarty_tpl->tpl_vars['DISCOUNT_INFO']->value;?>
'><?php echo vtranslate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a> : </b>
		    </div>
		    <div>
			<b><?php echo vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 :</b>
		    </div>
		    <?php if ($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['taxtype']!='group'){?>
			<div class="individualTaxContainer">
			    <?php ob_start();?><?php echo vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php  $_smarty_tpl->tpl_vars['tax_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["taxes"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_details']->key => $_smarty_tpl->tpl_vars['tax_details']->value){
$_smarty_tpl->tpl_vars['tax_details']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["taxlabel"];?><?php echo " : ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["percentage"];?><?php echo " % = ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["amount"];?><?php echo "\r\n";?><?php } ?><?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_TOTAL_TAX_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['INDIVIDUAL_TAX_INFO'] = new Smarty_variable($_tmp2." = ".($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["totalAfterDiscount".($_smarty_tpl->tpl_vars['INDEX']->value)])."\r\n".$_tmp3."\r\n".$_tmp4." = ".($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["taxTotal".($_smarty_tpl->tpl_vars['INDEX']->value)]), null, 0);?>
			    (+)&nbsp;<b><a href="javascript:void(0)" class="individualTax inventoryLineItemDetails" data-info='<?php echo $_smarty_tpl->tpl_vars['INDIVIDUAL_TAX_INFO']->value;?>
'><?php echo vtranslate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </a> : </b>
			</div>
		    <?php }?>
		<?php }?>
		</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value){?>
		    <div>
			<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		    </div>
		    <div>
			<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discountTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		    </div>
		    <div>
			<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["totalAfterDiscount".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		    </div>
		    <?php if ($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['taxtype']!='group'){?>
			<div>
			    <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["taxTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

			</div>
		    <?php }?>
		<?php }else{ ?>
            <div>
            <?php if ($_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discount_type".($_smarty_tpl->tpl_vars['INDEX']->value)]=="percentage"){?>
            <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discount_percent".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
%
            <?php }else{ ?>
            <?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["discountTotal".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

            <?php }?>
            </div>
		<?php }?>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["netPrice".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["wholesalePrice".($_smarty_tpl->tpl_vars['INDEX']->value)];?>

		    </span>
		</td>
	</tr>
	<?php } ?>
	<tr>
	    <td>
	        <b><?php echo vtranslate('LBL_TOTAL_QTY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
	    </td>
	    <td>
            <b><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["totalqty"];?>
</b>
	    </td>
	    <td colspan="6">
	    </td>
	    <td>
            <span class="pull-right">
			<b><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["hdnSubTotal"];?>
</b>
		    </span>
	    </td>
	    <td>
	    </td>
	</tr>
	<tr>
	    <td colspan="8">
            <span class="pull-right">
            <?php ob_start();?><?php echo vtranslate('LBL_FINAL_DISCOUNT_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discount_type_final']=='percentage'){?><?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discount_percentage_final'];?><?php echo " % ";?><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['hdnSubTotal'];?><?php echo " = ";?><?php }?><?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FINAL_DISCOUNT_INFO'] = new Smarty_variable($_tmp5." = ".$_tmp6.($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discountTotal_final']), null, 0);?>
            (-)&nbsp;<b><!--a class="inventoryLineItemDetails" href="javascript:void(0)" id="finalDiscount" data-info="<?php echo $_smarty_tpl->tpl_vars['FINAL_DISCOUNT_INFO']->value;?>
"--><?php echo vtranslate('LBL_INVOICE_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<!--/a--></b>
            </span>
	    </td>
	    <td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discountTotal_final'];?>

		    </span>
	    </td>
	    <td>
	    </td>
	</tr>
	<tr>
	    <td colspan="8">
		    <span class="pull-right">
			(+)&nbsp;<b><?php echo vtranslate('LBL_SHIPPING_AND_HANDLING_CHARGES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["shipping_handling_charge"];?>

		    </span>
		</td>
		<td>
		</td>
	</tr>
    <tr>
		<td colspan="8">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_PRE_TAX_TOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["preTaxTotal"];?>

		    </span>
		</td>
		<td>
		</td>
    </tr>
    <tr>
        <td colspan="2">
            <b><?php echo vtranslate('LBL_TAX_RATE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
        </td>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"][0]["percentage"]*1000/1000;?>
%
        </td>
		<td colspan="5">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_GST',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['tax_totalamount'];?>

		    </span>
		</td>
		<td>
		</td>
    </tr>
    <tr>
		<td colspan="8">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_GRAND_TOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
		    </span>
		</td>
		<td>
		    <b><span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["grandTotal"];?>

		    </span></b>
		</td>
		<td>
		</td>
    </tr>
	</tbody>
	</table>

	<table class="table table-bordered hide">
	    <tr>
		<td width="83%">
		    <div class="pull-right">
			<b><?php echo vtranslate('LBL_ITEMS_TOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
		    </div>
		</td>
		<td>
		    <span class="pull-right">
			<b><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["hdnSubTotal"];?>
</b>
		    </span>
		</td>
	    </tr>
	    <tr>
		<td width="83%">
		    <span class="pull-right">
			<?php ob_start();?><?php echo vtranslate('LBL_FINAL_DISCOUNT_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discount_type_final']=='percentage'){?><?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discount_percentage_final'];?><?php echo " % ";?><?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php echo " ";?><?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['hdnSubTotal'];?><?php echo " = ";?><?php }?><?php $_tmp8=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FINAL_DISCOUNT_INFO'] = new Smarty_variable($_tmp7." = ".$_tmp8.($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discountTotal_final']), null, 0);?>
			(-)&nbsp;<b><a class="inventoryLineItemDetails" href="javascript:void(0)" id="finalDiscount" data-info="<?php echo $_smarty_tpl->tpl_vars['FINAL_DISCOUNT_INFO']->value;?>
"><?php echo vtranslate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['discountTotal_final'];?>

		    </span>
		</td>
	    </tr>
		<tr>
		<td width="83%">
		    <span class="pull-right">
			(+)&nbsp;<b><?php echo vtranslate('LBL_SHIPPING_AND_HANDLING_CHARGES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["shipping_handling_charge"];?>

		    </span>
		</td>
	    </tr>
		<tr>
		<td width="83%">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_PRE_TAX_TOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["preTaxTotal"];?>

		    </span>
		</td>
	    </tr>
	    <tr>
	    <?php if ($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['taxtype']=='group'){?>
		<tr>
		    <td width="83%">
			<span class="pull-right">
			    <?php ob_start();?><?php echo vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php  $_smarty_tpl->tpl_vars['tax_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["taxes"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_details']->key => $_smarty_tpl->tpl_vars['tax_details']->value){
$_smarty_tpl->tpl_vars['tax_details']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["taxlabel"];?><?php echo " : ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["percentage"];?><?php echo " % = ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["amount"];?><?php echo "\r\n";?><?php } ?><?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_TOTAL_TAX_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp11=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['GROUP_TAX_INFO'] = new Smarty_variable($_tmp9." = ".($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["totalAfterDiscount"])."\r\n".$_tmp10."\r\n".$_tmp11." = ".($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['tax_totalamount']), null, 0);?>
			    (+)&nbsp;<b><a class="inventoryLineItemDetails" href="javascript:void(0)" id="finalTax"
					   data-info='<?php echo $_smarty_tpl->tpl_vars['GROUP_TAX_INFO']->value;?>
'><?php echo vtranslate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></b>
			</span>
		    </td>
		    <td>
			<span class="pull-right">
			    <?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['tax_totalamount'];?>

			</span>
		    </td>
		</tr>
	    <?php }?>
		<td width="83%">
		    <span class="pull-right">
			<?php ob_start();?><?php echo vtranslate('LBL_SHIPPING_AND_HANDLING_CHARGES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php  $_smarty_tpl->tpl_vars['tax_details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_details']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["sh_taxes"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_details']->key => $_smarty_tpl->tpl_vars['tax_details']->value){
$_smarty_tpl->tpl_vars['tax_details']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["taxlabel"];?><?php echo " : ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["percentage"];?><?php echo " % = ";?><?php echo $_smarty_tpl->tpl_vars['tax_details']->value["amount"];?><?php echo "\r\n";?><?php } ?><?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo vtranslate('LBL_TOTAL_TAX_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp14=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_INFO'] = new Smarty_variable($_tmp12." = ".($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["shipping_handling_charge"])."\r\n".$_tmp13."\r\n".$_tmp14." = ".($_smarty_tpl->tpl_vars['FINAL_DETAILS']->value['shtax_totalamount']), null, 0);?>
			(+)&nbsp;<b><a class="inventoryLineItemDetails" href="javascript:void(0)" id="shippingHandlingTax"
				       data-info='<?php echo $_smarty_tpl->tpl_vars['SHIPPING_HANDLING_TAX_INFO']->value;?>
'>
				<?php echo vtranslate('LBL_TAX_FOR_SHIPPING_AND_HANDLING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 </a></b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["shtax_totalamount"];?>

		    </span>
		</td>
	    </tr>
	    <tr class="hide">
		<td width="83%">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_ADJUSTMENT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
		    </span>
		</td>
		<td>
		    <span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["adjustment"];?>

		    </span>
		</td>
	    </tr>
	    <tr>
		<td width="83%">
		    <span class="pull-right">
			<b><?php echo vtranslate('LBL_GRAND_TOTAL',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
		    </span>
		</td>
		<td>
		    <b><span class="pull-right">
			<?php echo $_smarty_tpl->tpl_vars['FINAL_DETAILS']->value["grandTotal"];?>

		    </span></br>
		</td>
	    </tr>
		<?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Invoice'||$_smarty_tpl->tpl_vars['MODULE_NAME']->value=='PurchaseOrder'){?>
        <tr>
            <td width="83%">
                <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Invoice'){?>
                    <span class="pull-right">
                        <b><?php echo vtranslate('LBL_RECEIVED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
                    </span>
                <?php }else{ ?>
                    <span class="pull-right">
                        <b><?php echo vtranslate('LBL_PAID',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
                    </span>
                <?php }?>
            </td>

            <td>
                <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Invoice'){?>
                    <span class="pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('received')){?>
							<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('received');?>

                        <?php }else{ ?>
                            0.00
                        <?php }?>
                    </span>
                <?php }else{ ?>
                    <span class="pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('paid')){?>
							<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('paid');?>

                        <?php }else{ ?>
                            0.00
                        <?php }?>
                    </span>
                <?php }?>
            </td>
        </tr>
        <tr>
            <td width="83%">
                <span class="pull-right">
                    <b><?php echo vtranslate('LBL_BALANCE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
                </span>
            </td>
            <td>
                <span class="pull-right">
                    <?php if ($_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('balance')){?>
						<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('balance');?>

                    <?php }else{ ?>0.00
                    <?php }?>
                </span>
            </td>
        </tr>
        <?php }?>
	</table><?php }} ?>