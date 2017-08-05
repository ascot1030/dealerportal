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
{assign var="FIELD_NAME" value=$FIELD_MODEL['fieldname']}

<input type="hidden" name="{$FIELD_NAME}" value=0 />
<input class="{$FIELD_NAME}" id="{$FIELD_NAME}" type="checkbox" name="{$FIELD_NAME}" data-validation-engine="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
{if $FIELD_MODEL['defaultvalue'] eq 'Yes'} checked {/if} {if $NOEDIT eq 'yes'}disabled{/if}/>
{/strip}