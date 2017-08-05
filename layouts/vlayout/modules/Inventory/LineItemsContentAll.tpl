{*<!--
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
  *
 ********************************************************************************/
-->*}
{strip}
    {assign var=LAYOUT value=0}
	{assign var="deleted" value="deleted"|cat:$row_no}
    {assign var="hdnProductId" value="hdnProductId"|cat:$row_no}
    {assign var="productName" value="productName"|cat:$row_no}
    {assign var="comment" value="comment"|cat:$row_no}
    {assign var="productwidth" value="productwidth"|cat:$row_no}
    {assign var="productdrop" value="productdrop"|cat:$row_no}
    {assign var="fabric" value="fabric"|cat:$row_no}
    {assign var="fabric_description" value="fabric_description"|cat:$row_no}
    {assign var="location" value="location"|cat:$row_no}
    {assign var="controltype" value="controltype"|cat:$row_no}
    {assign var="rolldirection" value="rolldirection"|cat:$row_no}
    {assign var="bottomrail" value="bottomrail"|cat:$row_no}
    {assign var="railcolour" value="railcolour"|cat:$row_no}
    {assign var="controlside" value="controlside"|cat:$row_no}
    {assign var="controlcolour" value="controlcolour"|cat:$row_no}
    {assign var="chaincolour" value="chaincolour"|cat:$row_no}
    {assign var="chainlength" value="chainlength"|cat:$row_no}
    {assign var="springassist" value="springassist"|cat:$row_no}
    {assign var="bracketcovers" value="bracketcovers"|cat:$row_no}
    {assign var="railroad" value="railroad"|cat:$row_no}
    {assign var="comments" value="comments"|cat:$row_no}

    <input type="hidden" id="controltype{$row_no}" name="controltype{$row_no}" value="{$data.$controltype}" class="controltype"/>
    <input type="hidden" id="rolldirection{$row_no}" name="rolldirection{$row_no}" value="{$data.$rolldirection}" class="rolldirection"/>
    <input type="hidden" id="bottomrail{$row_no}" name="bottomrail{$row_no}" value="{$data.$bottomrail}" class="bottomrail"/>
    <input type="hidden" id="railcolour{$row_no}" name="railcolour{$row_no}" value="{$data.$railcolour}" class="railcolour"/>
    <input type="hidden" id="controlside{$row_no}" name="controlside{$row_no}" value="{$data.$controlside}" class="controlside"/>
    <input type="hidden" id="controlcolour{$row_no}" name="controlcolour{$row_no}" value="{$data.$controlcolour}" class="controlcolour"/>
    <input type="hidden" id="chaincolour{$row_no}" name="chaincolour{$row_no}" value="{$data.$chaincolour}" class="chaincolour"/>
    <input type="hidden" id="chainlength{$row_no}" name="chainlength{$row_no}" value="{$data.$chainlength}" class="chainlength"/>
    <input type="hidden" id="springassist{$row_no}" name="springassist{$row_no}" value="{$data.$springassist}" class="springassist"/>
    <input type="hidden" id="bracketcovers{$row_no}" name="bracketcovers{$row_no}" value="{$data.$bracketcovers}" class="bracketcovers"/>
    <input type="hidden" id="railroad{$row_no}" name="railroad{$row_no}" value="{$data.$railroad}" class="railroad"/>
    <input type="hidden" id="comments{$row_no}" name="comments{$row_no}" value="{$data.$comments}" class="comments"/>

    {assign var="productDescription" value="productDescription"|cat:$row_no}
    {assign var="qtyInStock" value="qtyInStock"|cat:$row_no}
    {assign var="qty" value="qty"|cat:$row_no}
    {assign var="listPrice" value="listPrice"|cat:$row_no}
    {assign var="productTotal" value="productTotal"|cat:$row_no}
    {assign var="subproduct_ids" value="subproduct_ids"|cat:$row_no}
    {assign var="subprod_names" value="subprod_names"|cat:$row_no}
    {assign var="entityIdentifier" value="entityType"|cat:$row_no}
    {assign var="entityType" value=$data.$entityIdentifier}

    {assign var="discount_type" value="discount_type"|cat:$row_no}
    {assign var="discount_percent" value="discount_percent"|cat:$row_no}
    {assign var="checked_discount_percent" value="checked_discount_percent"|cat:$row_no}
    {assign var="style_discount_percent" value="style_discount_percent"|cat:$row_no}
    {assign var="discount_amount" value="discount_amount"|cat:$row_no}
    {assign var="checked_discount_amount" value="checked_discount_amount"|cat:$row_no}
    {assign var="style_discount_amount" value="style_discount_amount"|cat:$row_no}
    {assign var="checked_discount_zero" value="checked_discount_zero"|cat:$row_no}

    {assign var="discountTotal" value="discountTotal"|cat:$row_no}
    {assign var="totalAfterDiscount" value="totalAfterDiscount"|cat:$row_no}
    {assign var="taxTotal" value="taxTotal"|cat:$row_no}
    {assign var="netPrice" value="netPrice"|cat:$row_no}
    {assign var="FINAL" value=$RELATED_PRODUCTS.1.final_details}
	
	{assign var="productDeleted" value="productDeleted"|cat:$row_no}
        {assign var="productId" value=$data[$hdnProductId]}


    {assign var="wholesalePrice" value="wholesalePrice"|cat:$row_no}
    {assign var="retail_listPrice" value="retail_listPrice"|cat:$row_no}
    {assign var="retail_productTotal" value="retail_productTotal"|cat:$row_no}
    {assign var="retail_discount_type" value="retail_discount_type"|cat:$row_no}
    {assign var="retail_discount_percent" value="retail_discount_percent"|cat:$row_no}
    {assign var="retail_checked_discount_percent" value="retail_checked_discount_percent"|cat:$row_no}
    {assign var="retail_style_discount_percent" value="retail_style_discount_percent"|cat:$row_no}
    {assign var="retail_discount_amount" value="retail_discount_amount"|cat:$row_no}
    {assign var="retail_checked_discount_amount" value="retail_checked_discount_amount"|cat:$row_no}
    {assign var="retail_style_discount_amount" value="retail_style_discount_amount"|cat:$row_no}
    {assign var="retail_checked_discount_zero" value="retail_checked_discount_zero"|cat:$row_no}

    {assign var="retail_discountTotal" value="retail_discountTotal"|cat:$row_no}
    {assign var="retail_totalAfterDiscount" value="retail_totalAfterDiscount"|cat:$row_no}
    {assign var="retail_taxTotal" value="retail_taxTotal"|cat:$row_no}
    {assign var="retail_netPrice" value="retail_netPrice"|cat:$row_no}

	<td>
		<i class="icon-trash deleteRow cursorPointer" title="{vtranslate('LBL_DELETE',$MODULE)}"></i>
		&nbsp;<a><img src="{vimage_path('drag.png')}" border="0" title="{vtranslate('LBL_DRAG',$MODULE)}"/></a>
		<input type="hidden" class="rowNumber" value="{$row_no}" />
	</td>
	<td>
		<!-- Product Re-Ordering Feature Code Addition Starts -->
		<input type="hidden" name="hidtax_row_no{$row_no}" id="hidtax_row_no{$row_no}" value="{$tax_row_no}"/>
		<!-- Product Re-Ordering Feature Code Addition ends -->
		<div>
			<input type="text" id="{$productName}" name="{$productName}" value="{$data.$productName}" {if $RECORD_ID} data-record="{$RECORD_ID}" {/if}
			data-location="{$data.$location}"
			data-quantity="{$data.$qty}"
			data-productwidth="{$data.$productwidth}"
			data-productdrop="{$data.$productdrop}"
			data-controltype="{$data.$controltype}"
			data-fabric="{$data.$fabric}"
			data-rolldirection="{$data.$rolldirection}"
			data-bottomrail="{$data.$bottomrail}"
			data-railcolour="{$data.$railcolour}"
			data-controlside="{$data.$controlside}"
			data-controlcolour="{$data.$controlcolour}"
			data-chaincolour="{$data.$chaincolour}"
			data-chainlength="{$data.$chainlength}"
			data-springassist="{$data.$springassist}"
			data-bracketcovers="{$data.$bracketcovers}"
			data-railroad="{$data.$railroad}"
			data-comments="{$data.$comments}"
			data-id="{$row_no}" data-popup="ProductsPopup" class="productName {if $row_no neq 0} autoComplete {/if} input-medium" placeholder="Name" data-validation-engine="validate[required]" readonly/>
			<input type="hidden" id="{$hdnProductId}" name="{$hdnProductId}" value="{$data.$hdnProductId}" class="selectedModuleId"/>
			<input type="hidden" id="lineItemType{$row_no}" name="lineItemType{$row_no}" value="{$entityType}" class="lineItemType"/>
			{if $row_no eq 0}
				<img class="lineItemPopup cursorPointer alignMiddle" data-popup="ServicesPopup" title="{vtranslate('Services',$MODULE)}" data-module-name="Services" data-field-name="serviceid" src="{vimage_path('Services.png')}"/>
				<img class="lineItemPopup cursorPointer alignMiddle" data-popup="ProductsPopup" title="{vtranslate('Products',$MODULE)}" data-module-name="Products"
							data-location="{$data.$location}"
                			data-quantity="{$data.$qty}"
                			data-productwidth="{$data.$productwidth}"
                			data-productdrop="{$data.$productdrop}"
                			data-controltype="{$data.$controltype}"
                			data-fabric="{$data.$fabric}"
                			data-rolldirection="{$data.$rolldirection}"
                			data-bottomrail="{$data.$bottomrail}"
                			data-railcolour="{$data.$railcolour}"
                			data-controlside="{$data.$controlside}"
                			data-controlcolour="{$data.$controlcolour}"
                			data-chaincolour="{$data.$chaincolour}"
                			data-chainlength="{$data.$chainlength}"
                			data-springassist="{$data.$springassist}"
                			data-bracketcovers="{$data.$bracketcovers}"
                			data-railroad="{$data.$railroad}"
                			data-comments="{$data.$comments}"
				data-field-name="productid" src="{vimage_path('Products.png')}"/>
				&nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="{vtranslate('LBL_CLEAR',$MODULE)}" style="vertical-align:middle"></i-->
			{else}
				{if !$RECORD_ID} 
                                    {if ($entityType eq 'Services') and (!$data.$productDeleted) or $PRODUCT_ACTIVE neq 'true'} 
					<img class="lineItemPopup cursorPointer alignMiddle" data-popup="ServicesPopup" data-module-name="Services" title="{vtranslate('Services',$MODULE)}" data-field-name="serviceid" src="{vimage_path('Services.png')}"/>
					&nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="{vtranslate('LBL_CLEAR',$MODULE)}" style="vertical-align:middle"></i-->
                                    {elseif (!$data.$productDeleted)}
                                            <img class="lineItemPopup cursorPointer alignMiddle"
                                            			data-location="{$data.$location}"
                                            			data-quantity="{$data.$qty}"
                                            			data-productwidth="{$data.$productwidth}"
                                            			data-productdrop="{$data.$productdrop}"
                                            			data-controltype="{$data.$controltype}"
                                            			data-fabric="{$data.$fabric}"
                                            			data-rolldirection="{$data.$rolldirection}"
                                            			data-bottomrail="{$data.$bottomrail}"
                                            			data-railcolour="{$data.$railcolour}"
                                            			data-controlside="{$data.$controlside}"
                                            			data-controlcolour="{$data.$controlcolour}"
                                            			data-chaincolour="{$data.$chaincolour}"
                                            			data-chainlength="{$data.$chainlength}"
                                            			data-springassist="{$data.$springassist}"
                                            			data-bracketcovers="{$data.$bracketcovers}"
                                            			data-railroad="{$data.$railroad}"
                                            			data-comments="{$data.$comments}"
                                            data-popup="ProductsPopup" data-module-name="Products" title="{vtranslate('Products',$MODULE)}" data-field-name="productid" src="{vimage_path('Products.png')}"/>
                                            &nbsp;<!--i class="icon-remove-sign clearLineItem cursorPointer" title="{vtranslate('LBL_CLEAR',$MODULE)}" style="vertical-align:middle"></i-->
                                    {/if}   
                                {else} 
                                    {if ($entityType eq 'Services') and (!$data.$productDeleted)} 
                                            <img class="{if $SERVICE_ACTIVE}lineItemPopup{/if} cursorPointer alignMiddle" data-popup="ServicesPopup" data-module-name="Services" title="{vtranslate('Services',$MODULE)}" data-field-name="serviceid" src="{vimage_path('Services.png')}"/> 
                                            &nbsp;<!--i class="icon-remove-sign {if $SERVICE_ACTIVE}clearLineItem{/if} cursorPointer" title="{vtranslate('LBL_CLEAR',$MODULE)}" style="vertical-align:middle"></i-->
                                    {elseif (!$data.$productDeleted)} 
                                            <img class="{if $PRODUCT_ACTIVE}lineItemPopup{/if} cursorPointer alignMiddle" data-record="{$RECORD_ID}" data-id="{$row_no}"
                                            			data-location="{$data.$location}"
                                            			data-quantity="{$data.$qty}"
                                            			data-productwidth="{$data.$productwidth}"
                                            			data-productdrop="{$data.$productdrop}"
                                            			data-controltype="{$data.$controltype}"
                                            			data-fabric="{$data.$fabric}"
                                            			data-rolldirection="{$data.$rolldirection}"
                                            			data-bottomrail="{$data.$bottomrail}"
                                            			data-railcolour="{$data.$railcolour}"
                                            			data-controlside="{$data.$controlside}"
                                            			data-controlcolour="{$data.$controlcolour}"
                                            			data-chaincolour="{$data.$chaincolour}"
                                            			data-chainlength="{$data.$chainlength}"
                                            			data-springassist="{$data.$springassist}"
                                            			data-bracketcovers="{$data.$bracketcovers}"
                                            			data-railroad="{$data.$railroad}"
                                            			data-comments="{$data.$comments}"
                                            data-popup="ProductsPopup" data-module-name="Products" title="{vtranslate('Products',$MODULE)}" data-field-name="productid" src="{vimage_path('Products.png')}"/>
                                        &nbsp;<!--i class="icon-remove-sign {if $PRODUCT_ACTIVE}clearLineItem{/if} cursorPointer" title="{vtranslate('LBL_CLEAR',$MODULE)}" style="vertical-align:middle"></i-->
                                    {/if}   
                                {/if} 
			{/if}
		</div>
		<input type="hidden" value="{$data.$subproduct_ids}" id="{$subproduct_ids}" name="{$subproduct_ids}" class="subProductIds" />
		<div id="{$subprod_names}" name="{$subprod_names}" class="subInformation"><span class="subProductsContainer">{$data.$subprod_names}</span></div>
		{if $data.$productDeleted}
			<div class="row-fluid deletedItem redColor">
				{if empty($data.$productName)}
					{vtranslate('LBL_THIS_LINE_ITEM_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_THIS_LINE_ITEM',$MODULE)}
				{else}
					{vtranslate('LBL_THIS',$MODULE)} {$entityType} {vtranslate('LBL_IS_DELETED_FROM_THE_SYSTEM_PLEASE_REMOVE_OR_REPLACE_THIS_ITEM',$MODULE)}
				{/if}
			</div>
		{else}
			<div><br><!--textarea id="{$comment}" name="{$comment}" class="lineItemCommentBox">{$data.$comment}</textarea-->
		{/if}
	</td>
	<td>
		<input id="{$qty}" name="{$qty}" type="text" class="qty smallInputBox" data-validation-engine="validate[required,funcCall[Vtiger_GreaterThanZero_Validator_Js.invokeValidation]]" value="{if !empty($data.$qty)}{$data.$qty}{else}1{/if}"/>
		{if $MODULE neq 'PurchaseOrder'}
		<br>
		<span class="stockAlert redColor {if $data.$qty <= $data.$qtyInStock}hide{/if}" >
			{vtranslate('LBL_STOCK_NOT_ENOUGH',$MODULE)}
			<br>
			{vtranslate('LBL_MAX_QTY_SELECT',$MODULE)}&nbsp;<span class="maxQuantity">{$data.$qtyInStock}</span>
		</span>
		{/if}
	</td>
	<td>
	    <span id="productwidth{$row_no}" class="pull-right productwidth">{$data.$productwidth}</span>
	    <!--input id="productwidth{$row_no}" name="productwidth{$row_no}" value="{$data.$productwidth}" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="productwidth smallInputBox" disabled="disabled"/-->
    	<input type="hidden" id="productwidth{$row_no}" name="productwidth{$row_no}" value="{$data.$productwidth}" class="productwidth"/>

	</td>
	<td>
	    <span id="productdrop{$row_no}" class="pull-right productdrop">{$data.$productdrop}</span>
	    <!--input id="productdrop{$row_no}" name="productdrop{$row_no}" value="{$data.$productdrop}" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="productdrop smallInputBox" disabled="disabled"/-->
	    <input type="hidden" id="productdrop{$row_no}" name="productdrop{$row_no}" value="{$data.$productdrop}" class="productdrop"/>
	</td>
	<td>
	    <span id="fabric_description{$row_no}" class="pull-right fabric_description">{$data.$fabric_description}</span>
	    <!--input type="text" id="fabric{$row_no}" name="fabric{$row_no}" value="{$data.$fabric_description}" class="fabric_description input-medium" disabled="disabled"/-->
	    <input type="hidden" id="fabric{$row_no}" name="fabric{$row_no}" value="{$data.$fabric}" class="fabric"/>
	</td>
	<td>
	    <span id="location{$row_no}" class="pull-right location">{$data.$location}</span>
	    <!--input type="text" id="location{$row_no}" name="location{$row_no}" value="{$data.$location}" class="location smallInputBox" disabled="disabled"/-->
	    <input type="hidden" id="location{$row_no}" name="location{$row_no}" value="{$data.$location}" class="location"/>
	</td>
	<td>
		<div>
			<input id="{$listPrice}" name="{$listPrice}" value="{if !empty($data.$listPrice)}{$data.$listPrice}{else}0{/if}" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="listPrice smallInputBox"/>
			&nbsp;
			{assign var=PRICEBOOK_MODULE_MODEL value=Vtiger_Module_Model::getInstance('PriceBooks')}
			{if $PRICEBOOK_MODULE_MODEL->isPermitted('DetailView')}
				<!--img src="{vimage_path('PriceBooks.png')}" class="cursorPointer alignMiddle priceBookPopup" data-popup="Popup" data-module-name="PriceBooks" title="{vtranslate('PriceBooks',$MODULE)}"/-->
			{/if}
		</div>
		<div>
			<span>
				(-)&nbsp; <b><a href="javascript:void(0)" class="individualDiscount">{vtranslate('LBL_DISCOUNT',$MODULE)}</a> : </b>
			</span>
		</div>
		<div class="discountUI validCheck hide" id="discount_div{$row_no}">
		{assign var="DISCOUNT_TYPE" value="zero"}
		{if !empty($data.$discount_type)}
			{assign var="DISCOUNT_TYPE" value=$data.$discount_type}
		{/if}
			<input type="hidden" id="discount_type{$row_no}" name="discount_type{$row_no}" value="{$DISCOUNT_TYPE}" class="discount_type" />
			<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable">
			   <tr>
				   <!-- TODO : CLEAN : should not append product total it should added in the js because product total can change at any point of time -->
					<th id="discount_div_title{$row_no}" nowrap><b>{vtranslate('LBL_SET_DISCOUNT_FOR',$MODULE)} : {$data.$productTotal}</b></th>
					<th>
						<button type="button" class="close closeDiv">x</button>
					</th>
			   </tr>
			   <!-- TODO : discount price and amount are hide by default we need to check id they are already selected if so we should not hide them  -->
			   <tr>
					<td>
						<input type="radio" name="discount{$row_no}" {$data.$checked_discount_zero} {if empty($data)}checked{/if} class="discounts" data-discount-type="zero" />
						&nbsp;
						{vtranslate('LBL_ZERO_DISCOUNT',$MODULE)}
					</td>
					<td>
						<!-- Make the discount value as zero -->
						<input type="hidden" class="discountVal" value="0" />
					</td>
			   </tr>
			   <tr>
					<td>
						<input type="radio" name="discount{$row_no}" {$data.$checked_discount_percent} class="discounts" data-discount-type="percentage" />
						&nbsp; %
						{vtranslate('LBL_OF_PRICE',$MODULE)}
					</td>
					<td>
						<span class="pull-right">&nbsp;%</span>
						<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="discount_percentage{$row_no}" name="discount_percentage{$row_no}" value="{$data.$discount_percent}" class="discount_percentage smallInputBox pull-right discountVal {if empty($data.$checked_discount_percent)}hide{/if}" />
					</td>
			   </tr>
			   <tr>
					<td class="LineItemDirectPriceReduction">
						<input type="radio" name="discount{$row_no}" {$data.$checked_discount_amount} class="discounts" data-discount-type="amount" />
						&nbsp;
						{vtranslate('LBL_DIRECT_PRICE_REDUCTION',$MODULE)}
					</td>
					<td>
						<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="discount_amount{$row_no}" name="discount_amount{$row_no}" value="{$data.$discount_amount}" class="smallInputBox pull-right discount_amount discountVal {if empty($data.$checked_discount_amount)}hide{/if}"/>
					</td>
			   </tr>
			</table>
			<div class="modal-footer lineItemPopupModalFooter modal-footer-padding">
				<div class=" pull-right cancelLinkContainer">
					<a class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
				</div>
				<button class="btn btn-success discountSave" type="button" name="lineItemActionSave"><strong>{vtranslate('LBL_SAVE', $MODULE)}</strong></button>
			</div>
		</div>
		{if $LAYOUT}
		<div>
			<b>{vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$MODULE)} :</b>
		</div>
		{/if}
		<div class="individualTaxContainer {if $IS_GROUP_TAX_TYPE}hide{/if}">
			(+)&nbsp;<b><a href="javascript:void(0)" class="individualTax">{vtranslate('LBL_TAX',$MODULE)} </a> : </b>
		</div>
		<span class="taxDivContainer">
			<div class="taxUI hide" id="tax_div{$row_no}">
			<!-- we will form the table with all taxes -->
			<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable" id="tax_table{$row_no}">
			   <tr>
					<th id="tax_div_title{$row_no}" nowrap align="left" ><b>{vtranslate('LBL_SET_TAX_FOR',$MODULE)} : {$data.$totalAfterDiscount}</b></th>
					<th colspan="2">
						<button type="button" class="close closeDiv">x</button>
					</th>
			   </tr>

			{foreach key=tax_row_no item=tax_data from=$data.taxes}
			   {assign var="taxname" value=$tax_data.taxname|cat:"_percentage"|cat:$row_no}
			   {assign var="tax_id_name" value="hidden_tax"|cat:$tax_row_no+1|cat:"_percentage"|cat:$row_no}
			   {assign var="taxlabel" value=$tax_data.taxlabel|cat:"_percentage"|cat:$row_no}
			   {assign var="popup_tax_rowname" value="popup_tax_row"|cat:$row_no}
			   <tr>
				<td>
					<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" name="{$taxname}" id="{$taxname}" value="{$tax_data.percentage}" class="smallInputBox taxPercentage" />&nbsp;%
				</td>
				<td><div class="textOverflowEllipsis">{$tax_data.taxlabel}</div></td>
				<td>
					<input type="text" name="{$popup_tax_rowname}" class="cursorPointer smallInputBox taxTotal" value="{$tax_data.amount}" readonly />
				</td>
			   </tr>
			{/foreach}
			</table>
			<div class="modal-footer lineItemPopupModalFooter modal-footer-padding">
				<div class=" pull-right cancelLinkContainer">
					<a class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
				</div>
				<button class="btn btn-success taxSave" type="button" name="lineItemActionSave"><strong>{vtranslate('LBL_SAVE', $MODULE)}</strong></button>
			</div>
			</div>
		</span>
	</td>
	<td>
		<div id="productTotal{$row_no}" align="right" class="productTotal hide">{if $data.$productTotal}{$data.$productTotal}{else}0.00{/if}</div>
		<div id="discountTotal{$row_no}" align="right" class="discountTotal hide">{if $data.$discountTotal}{$data.$discountTotal}{else}0.00{/if}</div>
		<div id="showDiscountTotal{$row_no}" align="right" class="showDiscountTotal">
		{if $data.$discount_type eq "percentage"}
		    {$data.$discount_percent}%
		{else}
		    {if $data.$discountTotal}{$data.$discountTotal}{else}0.00{/if}
		{/if}
		</div>
		<div id="totalAfterDiscount{$row_no}" align="right" class="totalAfterDiscount hide">{if $data.$totalAfterDiscount}{$data.$totalAfterDiscount}{else}0.00{/if}</div>
		<div id="taxTotal{$row_no}" align="right" class="productTaxTotal {if $IS_GROUP_TAX_TYPE}hide{/if}">{if $data.$taxTotal}{$data.$taxTotal}{else}0.00{/if}</div>
	</td>
	<td>
		<span id="netPrice{$row_no}" class="pull-right netPrice">{if $data.$netPrice}{$data.$netPrice}{else}0.00{/if}</span>
	</td>
	<td>
		<span id="wholesalePrice{$row_no}" class="pull-right wholesalePrice">{if $data.$wholesalePrice}{$data.$wholesalePrice}{else}0.00{/if}</span>
		<input type="hidden" id="wholesalePrice{$row_no}" name="wholesalePrice{$row_no}" class="pull-right wholesalePrice" value="{if $data.$wholesalePrice}{$data.$wholesalePrice}{else}0.00{/if}"/>
	</td>
    <td>
		<div>
			<input id="{$retail_listPrice}" name="{$retail_listPrice}" value="{if !empty($data.$retail_listPrice)}{$data.$retail_listPrice}{else}0{/if}" type="text" data-validation-engine="validate[required,funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" class="retail_listPrice smallInputBox"/>
			&nbsp;
			{assign var=PRICEBOOK_MODULE_MODEL value=Vtiger_Module_Model::getInstance('PriceBooks')}
			{if $PRICEBOOK_MODULE_MODEL->isPermitted('DetailView')}
				<!--img src="{vimage_path('PriceBooks.png')}" class="cursorPointer alignMiddle priceBookPopup" data-popup="Popup" data-module-name="PriceBooks" title="{vtranslate('PriceBooks',$MODULE)}"/-->
			{/if}
		</div>
		<div>
			<span>
				(-)&nbsp; <b><a href="javascript:void(0)" class="retail_individualDiscount">{vtranslate('LBL_DISCOUNT',$MODULE)}</a> : </b>
			</span>
		</div>
		<div class="retail_discountUI validCheck hide" id="retail_discount_div{$row_no}">
		{assign var="RETAIL_DISCOUNT_TYPE" value="zero"}
		{if !empty($data.$retail_discount_type)}
			{assign var="RETAIL_DISCOUNT_TYPE" value=$data.$retail_discount_type}
		{/if}
			<input type="hidden" id="retail_discount_type{$row_no}" name="retail_discount_type{$row_no}" value="{$RETAIL_DISCOUNT_TYPE}" class="retail_discount_type" />
			<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered retailpopupTable">
			   <tr>
				   <!-- TODO : CLEAN : should not append product total it should added in the js because product total can change at any point of time -->
					<th id="retail_discount_div_title{$row_no}" nowrap><b>{vtranslate('LBL_SET_DISCOUNT_FOR',$MODULE)} : {$data.$retail_productTotal}</b></th>
					<th>
						<button type="button" class="close closeDiv">x</button>
					</th>
			   </tr>
			   <!-- TODO : discount price and amount are hide by default we need to check id they are already selected if so we should not hide them  -->
			   <tr>
					<td>
						<input type="radio" name="retail_discount{$row_no}" {$data.$retail_checked_discount_zero} {if empty($data)}checked{/if} class="retail_discounts" data-discount-type="zero" />
						&nbsp;
						{vtranslate('LBL_ZERO_DISCOUNT',$MODULE)}
					</td>
					<td>
						<!-- Make the discount value as zero -->
						<input type="hidden" class="retail_discountVal" value="0" />
					</td>
			   </tr>
			   <tr>
					<td>
						<input type="radio" name="retail_discount{$row_no}" {$data.$retail_checked_discount_percent} class="retail_discounts" data-discount-type="percentage" />
						&nbsp; %
						{vtranslate('LBL_OF_PRICE',$MODULE)}
					</td>
					<td>
						<span class="pull-right">&nbsp;%</span>
						<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="retail_discount_percentage{$row_no}" name="retail_discount_percentage{$row_no}" value="{$data.$retail_discount_percent}" class="retail_discount_percentage smallInputBox pull-right retail_discountVal {if empty($data.$retail_checked_discount_percent)}hide{/if}" />
					</td>
			   </tr>
			   <tr>
					<td class="LineItemDirectPriceReduction">
						<input type="radio" name="retail_discount{$row_no}" {$data.$retail_checked_discount_amount} class="retail_discounts" data-discount-type="amount" />
						&nbsp;
						{vtranslate('LBL_DIRECT_PRICE_REDUCTION',$MODULE)}
					</td>
					<td>
						<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" id="retail_discount_amount{$row_no}" name="retail_discount_amount{$row_no}" value="{$data.$retail_discount_amount}" class="smallInputBox pull-right retail_discount_amount retail_discountVal {if empty($data.$retail_checked_discount_amount)}hide{/if}"/>
					</td>
			   </tr>
			</table>
			<div class="modal-footer lineItemPopupModalFooter modal-footer-padding">
				<div class=" pull-right cancelLinkContainer">
					<a class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
				</div>
				<button class="btn btn-success retail_discountSave" type="button" name="lineItemActionSave"><strong>{vtranslate('LBL_SAVE', $MODULE)}</strong></button>
			</div>
		</div>
		{if $LAYOUT}
		<div>
			<b>{vtranslate('LBL_TOTAL_AFTER_DISCOUNT',$MODULE)} :</b>
		</div>
		{/if}
		<div class="retail_individualTaxContainer {if $IS_GROUP_TAX_TYPE}hide{/if}">
			(+)&nbsp;<b><a href="javascript:void(0)" class="individualTax">{vtranslate('LBL_TAX',$MODULE)} </a> : </b>
		</div>
		<span class="taxDivContainer">
			<div class="retail_taxUI hide" id="retail_tax_div{$row_no}">
			<!-- we will form the table with all taxes -->
			<table width="100%" border="0" cellpadding="5" cellspacing="0" class="table table-nobordered popupTable" id="retail_tax_table{$row_no}">
			   <tr>
					<th id="retail_tax_div_title{$row_no}" nowrap align="left" ><b>{vtranslate('LBL_SET_TAX_FOR',$MODULE)} : {$data.$retail_totalAfterDiscount}</b></th>
					<th colspan="2">
						<button type="button" class="close closeDiv">x</button>
					</th>
			   </tr>

			{foreach key=tax_row_no item=tax_data from=$data.taxes}
			   {assign var="taxname" value=$tax_data.taxname|cat:"_percentage"|cat:$row_no}
			   {assign var="tax_id_name" value="hidden_tax"|cat:$tax_row_no+1|cat:"_percentage"|cat:$row_no}
			   {assign var="taxlabel" value=$tax_data.taxlabel|cat:"_percentage"|cat:$row_no}
			   {assign var="popup_tax_rowname" value="popup_tax_row"|cat:$row_no}
			   <tr>
				<td>
					<input type="text" data-validation-engine="validate[funcCall[Vtiger_PositiveNumber_Validator_Js.invokeValidation]]" name="{$taxname}" id="{$taxname}" value="{$tax_data.percentage}" class="smallInputBox taxPercentage" />&nbsp;%
				</td>
				<td><div class="textOverflowEllipsis">{$tax_data.taxlabel}</div></td>
				<td>
					<input type="text" name="{$popup_tax_rowname}" class="cursorPointer smallInputBox taxTotal" value="{$tax_data.amount}" readonly />
				</td>
			   </tr>
			{/foreach}
			</table>
			<div class="modal-footer lineItemPopupModalFooter modal-footer-padding">
				<div class=" pull-right cancelLinkContainer">
					<a class="cancelLink" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
				</div>
				<button class="btn btn-success taxSave" type="button" name="lineItemActionSave"><strong>{vtranslate('LBL_SAVE', $MODULE)}</strong></button>
			</div>
			</div>
		</span>
	</td>
	<td>
		<div id="retail_productTotal{$row_no}" align="right" class="retail_productTotal hide">{if $data.$retail_productTotal}{$data.$retail_productTotal}{else}0.00{/if}</div>
		<div id="retail_discountTotal{$row_no}" align="right" class="retail_discountTotal hide">{if $data.$retail_discountTotal}{$data.$retail_discountTotal}{else}0.00{/if}</div>
		<div id="retail_showDiscountTotal{$row_no}" align="right" class="retail_showDiscountTotal">
		{if $data.$retail_discount_type eq "percentage"}
		    {$data.$retail_discount_percent}%
		{else}
		    {if $data.$retail_discountTotal}{$data.$retail_discountTotal}{else}0.00{/if}
		{/if}
		</div>
		<div id="retail_totalAfterDiscount{$row_no}" align="right" class="retail_totalAfterDiscount hide">{if $data.$retail_totalAfterDiscount}{$data.$retail_totalAfterDiscount}{else}0.00{/if}</div>
		<div id="retail_taxTotal{$row_no}" align="right" class="retail_productTaxTotal {if $IS_GROUP_TAX_TYPE}hide{/if}">{if $data.$retail_taxTotal}{$data.$retail_taxTotal}{else}0.00{/if}</div>
	</td>
	<td>
		<span id="retail_netPrice{$row_no}" class="pull-right retail_netPrice">{if $data.$retail_netPrice}{$data.$retail_netPrice}{else}0.00{/if}</span>
	</td>