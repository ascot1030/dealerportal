/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Detail_Js("Inventory_Detail_Js",{
    sendEmailPDFClickHandler : function(url){
        var popupInstance = Vtiger_Popup_Js.getInstance();
        popupInstance.show(url,function(){}, app.vtranslate('JS_SEND_PDF_MAIL') );
    }

},{
    
    /**
	 * Function to register event for adding related record for module
	 */
	registerEventForAddingRelatedRecord : function(){
		var thisInstance = this;
		var detailContentsHolder = this.getContentHolder();
		detailContentsHolder.on('click','[name="addButton"]',function(e){
			var element = jQuery(e.currentTarget);
			var selectedTabElement = thisInstance.getSelectedTab();
			var relatedModuleName = thisInstance.getRelatedModuleName();
            var quickCreateNode = jQuery('#quickCreateModules').find('[data-name="'+ relatedModuleName +'"]');

			if(quickCreateNode.length <= 0 || selectedTabElement.data('labelKey') == 'Activities') {
                window.location.href = element.data('url');
                return;
            }

			var relatedController = new Vtiger_RelatedList_Js(thisInstance.getRecordId(), app.getModuleName(), selectedTabElement, relatedModuleName);
			relatedController.addRelatedRecord(element);
		})
	},
    /**
    * Function which will regiter all events for this page
    */
    registerEvents : function(){
		this._super();
        this.registerClickEvent();
    },

    showPopup : function(params) {
        var aDeferred = jQuery.Deferred();
        var popupInstance = Vtiger_Popup_Js.getInstance();
        popupInstance.show(params, function(data){
            aDeferred.resolve(data);
        });
        return aDeferred.promise();
    },

    getDetailBlind : function(e){
        var row  = jQuery(e.currentTarget);
        var recordData = row.data('id');
        var record = row.data('record');
        var aDeferred = jQuery.Deferred();
        var params = {};
//        params.view = 'DetailBlind';
        params.view = 'ProductsPopup';
        params.module = 'Inventory';
        params.record = record;
        params.id = recordData;
        params.noedit = 'yes';
        this.showPopup(params).then(function(data){
//            var responseData = JSON.parse(data);
//            var len = Object.keys(responseData).length;
//            if(len >1 ){
//                for(var i=0;i<len;i++){
//                    if(i == 0){
//                        thisInstance.mapResultsToFields(referenceModule,popupImageElement,responseData[i]);
//                    }else if(i >= 1 && (referenceModule == 'Products' || referenceModule == 'Services')){
//                        if(referenceModule == 'Products') {
//                            var row = jQuery('#addProduct').trigger('click');
//                        } else if(referenceModule == 'Services') {
//                            var row1 = jQuery('#addService').trigger('click');
//                        }
//                        //TODO : CLEAN :  we might synchronus invocation since following elements needs to executed once new row is created
//                        var newRow = jQuery('#lineItemTab > tbody > tr:last');
//                        var targetElem = jQuery('.lineItemPopup',newRow);
//                        thisInstance.mapResultsToFields(referenceModule,targetElem,responseData[i]);
//                        aDeferred.resolve();
//                    }
//                }
//            }else{
//                thisInstance.mapResultsToFields(referenceModule,popupImageElement,responseData);
//                aDeferred.resolve();
//            }
        })
        return aDeferred.promise();
    },

    /**
	 * Event handler which is invoked on click event happened on inventoryLineItemDetails
	 */
    registerClickEvent : function(){
        var thisInstance = this;
        this.getDetails().on('click','.inventoryLineItemDetails',function(e){
            alert(jQuery(e.currentTarget).data("info"));
        });
        this.getDetails().on('click','.listViewBlinds',function(e){
           thisInstance.getDetailBlind(e);
        });
    },

    /**
	 * This function will return the current page
	 */
    getDetails : function(){
        return jQuery('.details');
    }

});