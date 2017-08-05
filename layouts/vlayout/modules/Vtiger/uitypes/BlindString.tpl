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
<input id="{$FIELD_NAME}" type="text" class="input-large" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="{$FIELD_NAME}" value="{$FIELD_MODEL['defaultvalue']}" {if $NOEDIT eq 'yes'}disabled{/if}/>
{* TODO - Handler Ticker Symbol field *}
{/strip}