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
{assign var=PICKLIST_VALUES value=$PICK_VALUE[$FIELD_NAME]}
<select id={$FIELD_NAME} class="chzn-select {if $OCCUPY_COMPLETE_WIDTH} row-fluid {/if}" name="{$FIELD_MODEL['fieldname']}" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" {if $NOEDIT eq 'yes'}disabled{/if}>
    <option value="">{vtranslate('LBL_SELECT_OPTION','Vtiger')}</option>
	{foreach item=PICKLIST_VALUE key=PICKLIST_NAME from=$PICKLIST_VALUES}
        <option value="{Vtiger_Util_Helper::toSafeHTML($PICKLIST_NAME)}" {if $FIELD_MODEL['defaultvalue'] eq $PICKLIST_NAME} selected {/if}>{$PICKLIST_VALUE[$FIELD_NAME]}</option>
    {/foreach}
</select>
{/strip}