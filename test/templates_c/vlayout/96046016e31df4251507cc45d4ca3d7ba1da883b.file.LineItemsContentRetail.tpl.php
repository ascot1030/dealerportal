<?php /* Smarty version Smarty-3.1.7, created on 2015-05-15 04:48:24
         compiled from "C:\work\Dropbox\dealerportal\includes\runtime/../../layouts/vlayout\modules\Inventory\LineItemsContentRetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200825547359c1a1dd5-66728283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96046016e31df4251507cc45d4ca3d7ba1da883b' => 
    array (
      0 => 'C:\\work\\Dropbox\\dealerportal\\includes\\runtime/../../layouts/vlayout\\modules\\Inventory\\LineItemsContentRetail.tpl',
      1 => 1431598531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200825547359c1a1dd5-66728283',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_554735a012ba3',
  'variables' => 
  array (
    'row_no' => 0,
    'controltype' => 0,
    'data' => 0,
    'rolldirection' => 0,
    'bottomrail' => 0,
    'railcolour' => 0,
    'controlside' => 0,
    'controlcolour' => 0,
    'chaincolour' => 0,
    'chainlength' => 0,
    'springassist' => 0,
    'bracketcovers' => 0,
    'railroad' => 0,
    'comments' => 0,
    'entityIdentifier' => 0,
    'RELATED_PRODUCTS' => 0,
    'hdnProductId' => 0,
    'MODULE' => 0,
    'tax_row_no' => 0,
    'productName' => 0,
    'RECORD_ID' => 0,
    'location' => 0,
    'qty' => 0,
    'productwidth' => 0,
    'productdrop' => 0,
    'fabric' => 0,
    'entityType' => 0,
    'productDeleted' => 0,
    'PRODUCT_ACTIVE' => 0,
    'SERVICE_ACTIVE' => 0,
    'subproduct_ids' => 0,
    'subprod_names' => 0,
    'comment' => 0,
    'qtyInStock' => 0,
    'fabric_description' => 0,
    'listPrice' => 0,
    'PRICEBOOK_MODULE_MODEL' => 0,
    'discount_type' => 0,
    'DISCOUNT_TYPE' => 0,
    'productTotal' => 0,
    'checked_discount_zero' => 0,
    'checked_discount_percent' => 0,
    'discount_percent' => 0,
    'checked_discount_amount' => 0,
    'discount_amount' => 0,
    'LAYOUT' => 0,
    'IS_GROUP_TAX_TYPE' => 0,
    'totalAfterDiscount' => 0,
    'tax_data' => 0,
    'taxname' => 0,
    'popup_tax_rowname' => 0,
    'discountTotal' => 0,
    'taxTotal' => 0,
    'netPrice' => 0,
    'wholesalePrice' => 0,
    'retail_listPrice' => 0,
    'retail_discount_type' => 0,
    'RETAIL_DISCOUNT_TYPE' => 0,
    'retail_productTotal' => 0,
    'retail_checked_discount_zero' => 0,
    'retail_checked_discount_percent' => 0,
    'retail_discount_percent' => 0,
    'retail_checked_discount_amount' => 0,
    'retail_discount_amount' => 0,
    'retail_totalAfterDiscount' => 0,
    'retail_discountTotal' => 0,
    'retail_taxTotal' => 0,
    'retail_netPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554735a012ba3')) {function content_554735a012ba3($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['LAYOUT'] = new Smarty_variable(0, null, 0);?><?php $_smarty_tpl->tpl_vars["deleted"] = new Smarty_variable(("deleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["hdnProductId"] = new Smarty_variable(("hdnProductId").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productName"] = new Smarty_variable(("productName").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["comment"] = new Smarty_variable(("comment").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productwidth"] = new Smarty_variable(("productwidth").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productdrop"] = new Smarty_variable(("productdrop").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["fabric"] = new Smarty_variable(("fabric").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["fabric_description"] = new Smarty_variable(("fabric_description").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["location"] = new Smarty_variable(("location").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["controltype"] = new Smarty_variable(("controltype").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["rolldirection"] = new Smarty_variable(("rolldirection").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["bottomrail"] = new Smarty_variable(("bottomrail").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["railcolour"] = new Smarty_variable(("railcolour").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["controlside"] = new Smarty_variable(("controlside").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["controlcolour"] = new Smarty_variable(("controlcolour").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["chaincolour"] = new Smarty_variable(("chaincolour").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["chainlength"] = new Smarty_variable(("chainlength").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["springassist"] = new Smarty_variable(("springassist").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["bracketcovers"] = new Smarty_variable(("bracketcovers").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["railroad"] = new Smarty_variable(("railroad").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["comments"] = new Smarty_variable(("comments").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><input type="hidden" id="controltype<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="controltype<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controltype']->value];?>
" class="controltype"/><input type="hidden" id="rolldirection<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="rolldirection<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['rolldirection']->value];?>
" class="rolldirection"/><input type="hidden" id="bottomrail<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="bottomrail<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bottomrail']->value];?>
" class="bottomrail"/><input type="hidden" id="railcolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="railcolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railcolour']->value];?>
" class="railcolour"/><input type="hidden" id="controlside<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="controlside<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlside']->value];?>
" class="controlside"/><input type="hidden" id="controlcolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="controlcolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlcolour']->value];?>
" class="controlcolour"/><input type="hidden" id="chaincolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="chaincolour<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chaincolour']->value];?>
" class="chaincolour"/><input type="hidden" id="chainlength<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="chainlength<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chainlength']->value];?>
" class="chainlength"/><input type="hidden" id="springassist<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="springassist<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['springassist']->value];?>
" class="springassist"/><input type="hidden" id="bracketcovers<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="bracketcovers<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bracketcovers']->value];?>
" class="bracketcovers"/><input type="hidden" id="railroad<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="railroad<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railroad']->value];?>
" class="railroad"/><input type="hidden" id="comments<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="comments<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comments']->value];?>
" class="comments"/><?php $_smarty_tpl->tpl_vars["productDescription"] = new Smarty_variable(("productDescription").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qtyInStock"] = new Smarty_variable(("qtyInStock").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable(("qty").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["listPrice"] = new Smarty_variable(("listPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productTotal"] = new Smarty_variable(("productTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subproduct_ids"] = new Smarty_variable(("subproduct_ids").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["subprod_names"] = new Smarty_variable(("subprod_names").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityIdentifier"] = new Smarty_variable(("entityType").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["entityType"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['entityIdentifier']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["discount_type"] = new Smarty_variable(("discount_type").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_percent"] = new Smarty_variable(("discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_percent"] = new Smarty_variable(("checked_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_percent"] = new Smarty_variable(("style_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discount_amount"] = new Smarty_variable(("discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_amount"] = new Smarty_variable(("checked_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["style_discount_amount"] = new Smarty_variable(("style_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["checked_discount_zero"] = new Smarty_variable(("checked_discount_zero").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["discountTotal"] = new Smarty_variable(("discountTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["totalAfterDiscount"] = new Smarty_variable(("totalAfterDiscount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxTotal"] = new Smarty_variable(("taxTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["netPrice"] = new Smarty_variable(("netPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["FINAL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?><?php $_smarty_tpl->tpl_vars["productDeleted"] = new Smarty_variable(("productDeleted").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["productId"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value], null, 0);?><?php $_smarty_tpl->tpl_vars["wholesalePrice"] = new Smarty_variable(("wholesalePrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_listPrice"] = new Smarty_variable(("retail_listPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_productTotal"] = new Smarty_variable(("retail_productTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_discount_type"] = new Smarty_variable(("retail_discount_type").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_discount_percent"] = new Smarty_variable(("retail_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_checked_discount_percent"] = new Smarty_variable(("retail_checked_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_style_discount_percent"] = new Smarty_variable(("retail_style_discount_percent").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_discount_amount"] = new Smarty_variable(("retail_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_checked_discount_amount"] = new Smarty_variable(("retail_checked_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_style_discount_amount"] = new Smarty_variable(("retail_style_discount_amount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_checked_discount_zero"] = new Smarty_variable(("retail_checked_discount_zero").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_discountTotal"] = new Smarty_variable(("retail_discountTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_totalAfterDiscount"] = new Smarty_variable(("retail_totalAfterDiscount").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_taxTotal"] = new Smarty_variable(("retail_taxTotal").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["retail_netPrice"] = new Smarty_variable(("retail_netPrice").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><td><i class="icon-trash deleteRow cursorPointer" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;<a><img src="<?php echo vimage_path('drag.png');?>
" border="0" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/></a><input type="hidden" class="rowNumber" value="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" /></td><td><!-- Product Re-Ordering Feature Code Addition Starts --><input type="hidden" name="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" id="hidtax_row_no<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax_row_no']->value;?>
"/><!-- Product Re-Ordering Feature Code Addition ends --><div><input type="text" id="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['productName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?> data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" <?php }?>data-location="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
"data-quantity="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
"data-productwidth="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
"data-productdrop="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
"data-controltype="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controltype']->value];?>
"data-fabric="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric']->value];?>
"data-rolldirection="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['rolldirection']->value];?>
"data-bottomrail="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bottomrail']->value];?>
"data-railcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railcolour']->value];?>
"data-controlside="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlside']->value];?>
"data-controlcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlcolour']->value];?>
"data-chaincolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chaincolour']->value];?>
"data-chainlength="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chainlength']->value];?>
"data-springassist="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['springassist']->value];?>
"data-bracketcovers="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bracketcovers']->value];?>
"data-railroad="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railroad']->value];?>
"data-comments="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comments']->value];?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" data-popup="ProductsPopup" class="productName <?php if ($_smarty_tpl->tpl_vars['row_no']->value!=0){?> autoComplete <?php }?> input-medium" placeholder="Name" data-validation-engine="validate[required]" readonly/><input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['hdnProductId']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['hdnProductId']->value];?>
" class="selectedModuleId"/><input type="hidden" id="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="lineItemType<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
" class="lineItemType"/><?php if ($_smarty_tpl->tpl_vars['row_no']->value==0){?><img class="lineItemPopup cursorPointer alignMiddle" data-popup="ServicesPopup" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Services" data-field-name="serviceid" src="<?php echo vimage_path('Services.png');?>
"/><img class="lineItemPopup cursorPointer alignMiddle" data-popup="ProductsPopup" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-module-name="Products"data-location="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
"data-quantity="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
"data-productwidth="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
"data-productdrop="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
"data-controltype="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controltype']->value];?>
"data-fabric="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric']->value];?>
"data-rolldirection="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['rolldirection']->value];?>
"data-bottomrail="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bottomrail']->value];?>
"data-railcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railcolour']->value];?>
"data-controlside="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlside']->value];?>
"data-controlcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlcolour']->value];?>
"data-chaincolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chaincolour']->value];?>
"data-chainlength="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chainlength']->value];?>
"data-springassist="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['springassist']->value];?>
"data-bracketcovers="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bracketcovers']->value];?>
"data-railroad="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railroad']->value];?>
"data-comments="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comments']->value];?>
"data-field-name="productid" src="<?php echo vimage_path('Products.png');?>
"/>&nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="vertical-align:middle"></i--><?php }else{ ?><?php if (!$_smarty_tpl->tpl_vars['RECORD_ID']->value){?><?php if (($_smarty_tpl->tpl_vars['entityType']->value=='Services')&&(!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])||$_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value!='true'){?><img class="lineItemPopup cursorPointer alignMiddle" data-popup="ServicesPopup" data-module-name="Services" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-field-name="serviceid" src="<?php echo vimage_path('Services.png');?>
"/>&nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="vertical-align:middle"></i--><?php }elseif((!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])){?><img class="lineItemPopup cursorPointer alignMiddle"data-location="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
"data-quantity="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
"data-productwidth="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
"data-productdrop="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
"data-controltype="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controltype']->value];?>
"data-fabric="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric']->value];?>
"data-rolldirection="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['rolldirection']->value];?>
"data-bottomrail="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bottomrail']->value];?>
"data-railcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railcolour']->value];?>
"data-controlside="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlside']->value];?>
"data-controlcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlcolour']->value];?>
"data-chaincolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chaincolour']->value];?>
"data-chainlength="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chainlength']->value];?>
"data-springassist="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['springassist']->value];?>
"data-bracketcovers="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bracketcovers']->value];?>
"data-railroad="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railroad']->value];?>
"data-comments="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comments']->value];?>
"data-popup="ProductsPopup" data-module-name="Products" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-field-name="productid" src="<?php echo vimage_path('Products.png');?>
"/>&nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="vertical-align:middle"></i--><?php }?><?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['entityType']->value=='Services')&&(!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])){?><img class="<?php if ($_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value){?>lineItemPopup<?php }?> cursorPointer alignMiddle" data-popup="ServicesPopup" data-module-name="Services" title="<?php echo vtranslate('Services',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-field-name="serviceid" src="<?php echo vimage_path('Services.png');?>
"/>&nbsp;<!--i class="icon-remove-sign <?php if ($_smarty_tpl->tpl_vars['SERVICE_ACTIVE']->value){?>clearLineItem<?php }?> cursorPointer" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="vertical-align:middle"></i--><?php }elseif((!$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value])){?><img class="<?php if ($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value){?>lineItemPopup<?php }?> cursorPointer alignMiddle" data-record="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"data-location="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
"data-quantity="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
"data-productwidth="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
"data-productdrop="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
"data-controltype="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controltype']->value];?>
"data-fabric="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric']->value];?>
"data-rolldirection="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['rolldirection']->value];?>
"data-bottomrail="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bottomrail']->value];?>
"data-railcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railcolour']->value];?>
"data-controlside="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlside']->value];?>
"data-controlcolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['controlcolour']->value];?>
"data-chaincolour="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chaincolour']->value];?>
"data-chainlength="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['chainlength']->value];?>
"data-springassist="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['springassist']->value];?>
"data-bracketcovers="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['bracketcovers']->value];?>
"data-railroad="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['railroad']->value];?>
"data-comments="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comments']->value];?>
"data-popup="ProductsPopup" data-module-name="Products" title="<?php echo vtranslate('Products',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-field-name="productid" src="<?php echo vimage_path('Products.png');?>
"/>&nbsp;<!--i class="icon-remove-sign <?php if ($_smarty_tpl->tpl_vars['PRODUCT_ACTIVE']->value){?>clearLineItem<?php }?> cursorPointer" title="<?php echo vtranslate('LBL_CLEAR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="vertical-align:middle"></i--><?php }?><?php }?><?php }?></div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['subproduct_ids']->value];?>
" id="<?php echo $_smarty_tpl->tpl_vars['subproduct_ids']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['subproduct_ids']->value;?>
" class="subProductIds" /><div id="<?php echo $_smarty_tpl->tpl_vars['subprod_names']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['subprod_names']->value;?>
" class="subInformation"><span class="subProductsContainer"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['subprod_names']->value];?>
</span></div><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productDeleted']->value]){?><div class="row-fluid deletedItem redColor"><?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productName']->value])){?><?php echo vtranslate('LBL_THIS_LINE_ITEM_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_THIS_LINE_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_THIS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['entityType']->value;?>
 <?php echo vtranslate('LBL_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_OR_REPLACE_THIS_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div><?php }else{ ?><div><br><!--textarea id="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
" class="lineItemCommentBox"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['comment']->value];?>
</textarea--><?php }?></td><td><input id="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['qty']->value;?>
" type="text" class="qty smallInputBox" data-validation-engine="validate[required,funcCall[Vtiger_GreaterThanZero_Validator_Js.invokeValidation]]" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value];?>
<?php }else{ ?>1<?php }?>"/><?php if ($_smarty_tpl->tpl_vars['MODULE']->value!='PurchaseOrder'){?><br><span class="stockAlert redColor <?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qty']->value]<=$_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qtyInStock']->value]){?>hide<?php }?>" ><?php echo vtranslate('LBL_STOCK_NOT_ENOUGH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br><?php echo vtranslate('LBL_MAX_QTY_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="maxQuantity"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['qtyInStock']->value];?>
</span></span><?php }?></td><td><span id="productwidth<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right productwidth"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
</span><!--input id="productwidth<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="productwidth<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="productwidth smallInputBox" disabled="disabled"/--><input type="hidden" id="productwidth<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="productwidth<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productwidth']->value];?>
" class="productwidth"/></td><td><span id="productdrop<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right productdrop"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
</span><!--input id="productdrop<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="productdrop<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="productdrop smallInputBox" disabled="disabled"/--><input type="hidden" id="productdrop<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="productdrop<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productdrop']->value];?>
" class="productdrop"/></td><td><span id="fabric_description<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right fabric_description"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric_description']->value];?>
</span><!--input type="text" id="fabric<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="fabric<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric_description']->value];?>
" class="fabric_description input-medium" disabled="disabled"/--><input type="hidden" id="fabric<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="fabric<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['fabric']->value];?>
" class="fabric"/></td><td><span id="location<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right location"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
</span><!--input type="text" id="location<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="location<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
" class="location smallInputBox" disabled="disabled"/--><input type="hidden" id="location<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="location<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['location']->value];?>
" class="location"/></td><td class="hide"><div><input id="<?php echo $_smarty_tpl->tpl_vars['listPrice']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['listPrice']->value;?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['listPrice']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['listPrice']->value];?>
<?php }else{ ?>0<?php }?>" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="listPrice smallInputBox"/>&nbsp;<?php $_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('PriceBooks'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL']->value->isPermitted('DetailView')){?><!--img src="<?php echo vimage_path('PriceBooks.png');?>
" class="cursorPointer alignMiddle priceBookPopup" data-popup="Popup" data-module-name="PriceBooks" title="<?php echo vtranslate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/--><?php }?></div><div><span>(-)&nbsp; <b><a href="javascript:void(0)" class="individualDiscount"><?php echo vtranslate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> : </b></span></div><div class="discountUI validCheck hide" id="discount_div<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><?php $_smarty_tpl->tpl_vars["DISCOUNT_TYPE"] = new Smarty_variable("zero", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_type']->value])){?><?php $_smarty_tpl->tpl_vars["DISCOUNT_TYPE"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_type']->value], null, 0);?><?php }?><input type="hidden" id="discount_type<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="discount_type<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['DISCOUNT_TYPE']->value;?>
" class="discount_type" /><table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable"><tr><!-- TODO : CLEAN : should not append product total it should added in the js because product total can change at any point of time --><th id="discount_div_title<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" nowrap><b><?php echo vtranslate('LBL_SET_DISCOUNT_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productTotal']->value];?>
</b></th><th><button type="button" class="close closeDiv">x</button></th></tr><!-- TODO : discount price and amount are hide by default we need to check id they are already selected if so we should not hide them  --><tr><td><input type="radio" name="discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['checked_discount_zero']->value];?>
 <?php if (empty($_smarty_tpl->tpl_vars['data']->value)){?>checked<?php }?> class="discounts" data-discount-type="zero" />&nbsp;<?php echo vtranslate('LBL_ZERO_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><!-- Make the discount value as zero --><input type="hidden" class="discountVal" value="0" /></td></tr><tr><td><input type="radio" name="discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['checked_discount_percent']->value];?>
 class="discounts" data-discount-type="percentage" />&nbsp; %<?php echo vtranslate('LBL_OF_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><span class="pull-right">&nbsp;%</span><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="discount_percentage<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="discount_percentage<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_percent']->value];?>
" class="discount_percentage smallInputBox pull-right discountVal <?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['checked_discount_percent']->value])){?>hide<?php }?>" /></td></tr><tr><td class="LineItemDirectPriceReduction"><input type="radio" name="discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['checked_discount_amount']->value];?>
 class="discounts" data-discount-type="amount" />&nbsp;<?php echo vtranslate('LBL_DIRECT_PRICE_REDUCTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="discount_amount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="discount_amount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_amount']->value];?>
" class="smallInputBox pull-right discount_amount discountVal <?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['checked_discount_amount']->value])){?>hide<?php }?>"/></td></tr></table><div class="modal-footer lineItemPopupModalFooter modal-footer-padding"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success discountSave" type="button" name="lineItemActionSave"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value){?><div><b><?php echo vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :</b></div><?php }?><div class="individualTaxContainer <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_TAX_TYPE']->value){?>hide<?php }?>">(+)&nbsp;<b><a href="javascript:void(0)" class="individualTax"><?php echo vtranslate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </a> : </b></div><span class="taxDivContainer"><div class="taxUI hide" id="tax_div<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><!-- we will form the table with all taxes --><table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable" id="tax_table<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><tr><th id="tax_div_title<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" nowrap align="left" ><b><?php echo vtranslate('LBL_SET_TAX_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['totalAfterDiscount']->value];?>
</b></th><th colspan="2"><button type="button" class="close closeDiv">x</button></th></tr><?php  $_smarty_tpl->tpl_vars['tax_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tax_row_no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_data']->key => $_smarty_tpl->tpl_vars['tax_data']->value){
$_smarty_tpl->tpl_vars['tax_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tax_row_no']->value = $_smarty_tpl->tpl_vars['tax_data']->key;
?><?php $_smarty_tpl->tpl_vars["taxname"] = new Smarty_variable((($_smarty_tpl->tpl_vars['tax_data']->value['taxname']).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["tax_id_name"] = new Smarty_variable(("hidden_tax").($_smarty_tpl->tpl_vars['tax_row_no']->value)+((1).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxlabel"] = new Smarty_variable((($_smarty_tpl->tpl_vars['tax_data']->value['taxlabel']).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["popup_tax_rowname"] = new Smarty_variable(("popup_tax_row").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><tr><td><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" name="<?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax_data']->value['percentage'];?>
" class="smallInputBox taxPercentage" />&nbsp;%</td><td><div class="textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['tax_data']->value['taxlabel'];?>
</div></td><td><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['popup_tax_rowname']->value;?>
" class="cursorPointer smallInputBox taxTotal" value="<?php echo $_smarty_tpl->tpl_vars['tax_data']->value['amount'];?>
" readonly /></td></tr><?php } ?></table><div class="modal-footer lineItemPopupModalFooter modal-footer-padding"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success taxSave" type="button" name="lineItemActionSave"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></span></td><td class="hide"><div id="productTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="productTotal hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['productTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="discountTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="discountTotal hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discountTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discountTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="showDiscountTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="showDiscountTotal"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_type']->value]=="percentage"){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discount_percent']->value];?>
%<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discountTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['discountTotal']->value];?>
<?php }else{ ?>0.00<?php }?><?php }?></div><div id="totalAfterDiscount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="totalAfterDiscount hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['totalAfterDiscount']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['totalAfterDiscount']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="taxTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="productTaxTotal <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_TAX_TYPE']->value){?>hide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['taxTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['taxTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div></td><td class="hide"><span id="netPrice<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right netPrice"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['netPrice']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['netPrice']->value];?>
<?php }else{ ?>0.00<?php }?></span></td><td><span id="wholesalePrice<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right wholesalePrice"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['wholesalePrice']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['wholesalePrice']->value];?>
<?php }else{ ?>0.00<?php }?></span><input type="hidden" id="wholesalePrice<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="wholesalePrice<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right wholesalePrice" value="<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['wholesalePrice']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['wholesalePrice']->value];?>
<?php }else{ ?>0.00<?php }?>"/></td><td><div><input id="<?php echo $_smarty_tpl->tpl_vars['retail_listPrice']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['retail_listPrice']->value;?>
" value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_listPrice']->value])){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_listPrice']->value];?>
<?php }else{ ?>0<?php }?>" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="retail_listPrice smallInputBox"/>&nbsp;<?php $_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('PriceBooks'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['PRICEBOOK_MODULE_MODEL']->value->isPermitted('DetailView')){?><!--img src="<?php echo vimage_path('PriceBooks.png');?>
" class="cursorPointer alignMiddle priceBookPopup" data-popup="Popup" data-module-name="PriceBooks" title="<?php echo vtranslate('PriceBooks',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/--><?php }?></div><div><span>(-)&nbsp; <b><a href="javascript:void(0)" class="retail_individualDiscount"><?php echo vtranslate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a> : </b></span></div><div class="retail_discountUI validCheck hide" id="retail_discount_div<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><?php $_smarty_tpl->tpl_vars["RETAIL_DISCOUNT_TYPE"] = new Smarty_variable("zero", null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_type']->value])){?><?php $_smarty_tpl->tpl_vars["RETAIL_DISCOUNT_TYPE"] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_type']->value], null, 0);?><?php }?><input type="hidden" id="retail_discount_type<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="retail_discount_type<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['RETAIL_DISCOUNT_TYPE']->value;?>
" class="retail_discount_type" /><table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered retailpopupTable"><tr><!-- TODO : CLEAN : should not append product total it should added in the js because product total can change at any point of time --><th id="retail_discount_div_title<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" nowrap><b><?php echo vtranslate('LBL_SET_DISCOUNT_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_productTotal']->value];?>
</b></th><th><button type="button" class="close closeDiv">x</button></th></tr><!-- TODO : discount price and amount are hide by default we need to check id they are already selected if so we should not hide them  --><tr><td><input type="radio" name="retail_discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_checked_discount_zero']->value];?>
 <?php if (empty($_smarty_tpl->tpl_vars['data']->value)){?>checked<?php }?> class="retail_discounts" data-discount-type="zero" />&nbsp;<?php echo vtranslate('LBL_ZERO_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><!-- Make the discount value as zero --><input type="hidden" class="retail_discountVal" value="0" /></td></tr><tr><td><input type="radio" name="retail_discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_checked_discount_percent']->value];?>
 class="retail_discounts" data-discount-type="percentage" />&nbsp; %<?php echo vtranslate('LBL_OF_PRICE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><span class="pull-right">&nbsp;%</span><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="retail_discount_percentage<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="retail_discount_percentage<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_percent']->value];?>
" class="retail_discount_percentage smallInputBox pull-right retail_discountVal <?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_checked_discount_percent']->value])){?>hide<?php }?>" /></td></tr><tr><td class="LineItemDirectPriceReduction"><input type="radio" name="retail_discount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_checked_discount_amount']->value];?>
 class="retail_discounts" data-discount-type="amount" />&nbsp;<?php echo vtranslate('LBL_DIRECT_PRICE_REDUCTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="retail_discount_amount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" name="retail_discount_amount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_amount']->value];?>
" class="smallInputBox pull-right retail_discount_amount retail_discountVal <?php if (empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_checked_discount_amount']->value])){?>hide<?php }?>"/></td></tr></table><div class="modal-footer lineItemPopupModalFooter modal-footer-padding"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success retail_discountSave" type="button" name="lineItemActionSave"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><?php if ($_smarty_tpl->tpl_vars['LAYOUT']->value){?><div><b><?php echo vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 :</b></div><?php }?><div class="retail_individualTaxContainer <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_TAX_TYPE']->value){?>hide<?php }?>">(+)&nbsp;<b><a href="javascript:void(0)" class="individualTax"><?php echo vtranslate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </a> : </b></div><span class="taxDivContainer"><div class="retail_taxUI hide" id="retail_tax_div<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><!-- we will form the table with all taxes --><table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable" id="retail_tax_table<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
"><tr><th id="retail_tax_div_title<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" nowrap align="left" ><b><?php echo vtranslate('LBL_SET_TAX_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_totalAfterDiscount']->value];?>
</b></th><th colspan="2"><button type="button" class="close closeDiv">x</button></th></tr><?php  $_smarty_tpl->tpl_vars['tax_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tax_data']->_loop = false;
 $_smarty_tpl->tpl_vars['tax_row_no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['taxes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tax_data']->key => $_smarty_tpl->tpl_vars['tax_data']->value){
$_smarty_tpl->tpl_vars['tax_data']->_loop = true;
 $_smarty_tpl->tpl_vars['tax_row_no']->value = $_smarty_tpl->tpl_vars['tax_data']->key;
?><?php $_smarty_tpl->tpl_vars["taxname"] = new Smarty_variable((($_smarty_tpl->tpl_vars['tax_data']->value['taxname']).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["tax_id_name"] = new Smarty_variable(("hidden_tax").($_smarty_tpl->tpl_vars['tax_row_no']->value)+((1).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["taxlabel"] = new Smarty_variable((($_smarty_tpl->tpl_vars['tax_data']->value['taxlabel']).("_percentage")).($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><?php $_smarty_tpl->tpl_vars["popup_tax_rowname"] = new Smarty_variable(("popup_tax_row").($_smarty_tpl->tpl_vars['row_no']->value), null, 0);?><tr><td><input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" name="<?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['tax_data']->value['percentage'];?>
" class="smallInputBox taxPercentage" />&nbsp;%</td><td><div class="textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['tax_data']->value['taxlabel'];?>
</div></td><td><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['popup_tax_rowname']->value;?>
" class="cursorPointer smallInputBox taxTotal" value="<?php echo $_smarty_tpl->tpl_vars['tax_data']->value['amount'];?>
" readonly /></td></tr><?php } ?></table><div class="modal-footer lineItemPopupModalFooter modal-footer-padding"><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button class="btn btn-success taxSave" type="button" name="lineItemActionSave"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></span></td><td><div id="retail_productTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="retail_productTotal hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_productTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_productTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="retail_discountTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="retail_discountTotal hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discountTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discountTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="retail_showDiscountTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="retail_showDiscountTotal"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_type']->value]=="percentage"){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discount_percent']->value];?>
%<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discountTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_discountTotal']->value];?>
<?php }else{ ?>0.00<?php }?><?php }?></div><div id="retail_totalAfterDiscount<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="retail_totalAfterDiscount hide"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_totalAfterDiscount']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_totalAfterDiscount']->value];?>
<?php }else{ ?>0.00<?php }?></div><div id="retail_taxTotal<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" align="right" class="retail_productTaxTotal <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_TAX_TYPE']->value){?>hide<?php }?>"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_taxTotal']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_taxTotal']->value];?>
<?php }else{ ?>0.00<?php }?></div></td><td><span id="retail_netPrice<?php echo $_smarty_tpl->tpl_vars['row_no']->value;?>
" class="pull-right retail_netPrice"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_netPrice']->value]){?><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['retail_netPrice']->value];?>
<?php }else{ ?>0.00<?php }?></span></td><?php }} ?>