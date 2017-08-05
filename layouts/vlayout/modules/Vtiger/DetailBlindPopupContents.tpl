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


<div class="contentHeader row-fluid">
<div class="span6">
<h3>Single Roller Blind</h3>
</div><div class="span6">
<div class="pull-right">
<!--button class="btn btn-success addblind" type="submit"><strong>Save</strong></button-->
<a class="cancelLink" type="reset" onclick="javascript:window.close();"><strong>Close</strong></a></div></div></div>

            <table class="table table-bordered blockContainer showInlineTable equalSplit">
                <thead>
                    <tr>
                        <th class="blockHeader" colspan="4">Information</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    {assign var=COUNTER value=0}
                    {foreach key=FIELD_NAME item=FIELD_MODEL from=$PRODUCT_VALUE name=blockfields}

                        {if $COUNTER eq 2}
                    </tr>
                    <tr>
                            {assign var=COUNTER value=1}
                        {else}
                            {assign var=COUNTER value=$COUNTER+1}
                        {/if}

                        <td class="fieldLabel {$WIDTHTYPE}">
                            <label class="muted pull-right marginRight10px">
                            {*if $FIELD_MODEL->isMandatory() eq true && $isReferenceField neq "reference"} <span class="redColor">*</span> {/if*}
                            {$FIELD_MODEL['fieldlabel']}
                            </label>
                        </td>
                        <td class="fieldValue {$WIDTHTYPE}">
                        <div class="row-fluid">
                        <span class="span10">
                            {*include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE) BLOCK_FIELDS=$BLOCK_FIELDS*}
                            {*include file=vtemplate_path($FIELD_MODEL['uitype'])*}
                            {assign var="fieldkey" value="$FIELD_NAME"|cat:$RECORDID}
                            <input id="{$FIELD_NAME}" type="text" class="input-large" name="{$FIELD_NAME}" value="{$PRODUCT.$fieldkey}" disabled="disabled"/>
                        </span>
                        </div>
                        </td>
                    {/foreach}

		            {* adding additional column for odd number of fields in a block *}
		            {if $BLOCK_FIELDS|@end eq true and $BLOCK_FIELDS|@count neq 1 and $COUNTER eq 1}
			            <td class="fieldLabel {$WIDTHTYPE}"></td><td class="{$WIDTHTYPE}"></td>
		            {/if}
                    </tr>
                </tbody>
            </table>


{/strip}
