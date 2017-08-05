<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Inventory_AddBlind_Action extends Vtiger_Action_Controller {

	function process(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$currencyId = $request->get('currency_id');
		$conversionRate = 1;

		$location = $request->get('location');
		$quantity = $request->get('quantity');
		$productwidth = $request->get('productwidth');
		$productdrop = $request->get('productdrop');
		$fabric = $request->get('fabric');
		$fabric_description = $request->get('fabric_description');
		$controltype = $request->get('controltype');
        $rolldirection = $request->get('rolldirection');
        $bottomrail = $request->get('bottomrail');
        $railcolour = $request->get('railcolour');
        $controlside = $request->get('controlside');
        $controlcolour = $request->get('controlcolour');
        $chaincolour = $request->get('chaincolour');
        $chainlength = $request->get('chainlength');
        $springassist = $request->get('springassist');
        $bracketcovers = $request->get('bracketcovers');
        $railroad = $request->get('railroad');
        $comments = $request->get('comments');


		$response = new Vtiger_Response();


        $recordModel = Vtiger_Record_Model::getInstanceById($recordId);
        $taxes = $recordModel->getTaxes();
        $listPriceValues = $recordModel->getListPriceValues($recordModel->getId());

        $priceDetails = $recordModel->getPriceDetails();
        foreach ($priceDetails as $currencyDetails) {
            if ($currencyId == $currencyDetails['curid']) {
                $conversionRate = $currencyDetails['conversionrate'];
            }
        }
        $listPrice = (float)$recordModel->get('unit_price') * (float)$conversionRate;
        $listPrice = 0.0;

        //*********Jin Price**********
/*
        $rollertype=$controltype;
        if($springassist=="Yes") {
            if($rollertype=="6") {
                $rollertype = "11";
            } else if($rollertype=="7") {
                $rollertype = "12";
            }
        }
        $frontFabCategory = "6";
        global $adb;
        $query = "SELECT `Dimension Value Code` as dimension FROM NAV_getDimensions WHERE `No_`=? and `Dimension Code`='ROL-CAT'";
        $res = $adb->pquery($query, array($fabric));
        $no_of_results = $adb->num_rows($res);
        if($no_of_results>0) {
            $row = $adb->query_result_rowdata($res, 0);
            $frontFabCategory=$row["dimension"];
        }

        $query = "SELECT MIN(price) as price FROM tblRollerPriceMatrix WHERE rollerType=? AND category=? AND width>? AND `drop`>?";
        $res = $adb->pquery($query, array($rollertype,$frontFabCategory,$productwidth,$productdrop));
        $no_of_results = $adb->num_rows($res);
        if($no_of_results>0) {
            $row = $adb->query_result_rowdata($res, 0);
            if($row["price"])
                $listPrice=(float)$row["price"];
        }

        $bottomRailCharge = 0.0;

        $query = "SELECT `Unit Price` as price from NAV_getOptionCharges where `No_`=?";
        $params = array();
        if($bottomrail=="3") {
            $params = array("Z.112");
        }else if($bottomrail=="4") {
            $params = array("Z.113");
        }else if($bottomrail=="5") {
            $params = array("Z.114");
        }else if($bottomrail=="7") {
            $params = array("Z.117");
        }
        $res = $adb->pquery($query, $params);
        $no_of_results = $adb->num_rows($res);
        if($no_of_results>0) {
            $row = $adb->query_result_rowdata($res, 0);
            $bottomRailCharge=(float)$row["price"] * ((float)$productwidth)/1000;
        }
        $listPrice = $listPrice + $bottomRailCharge;
*/

        $pricegroup = 1;

        global $adb;
        $query = "SELECT `pricegroup` FROM product_field_fabric WHERE `fabricid`=? and `groupcode`='ROL_FAB'";
        $res = $adb->pquery($query, array($fabric));
        $no_of_results = $adb->num_rows($res);
        if($no_of_results>0) {
            $row = $adb->query_result_rowdata($res, 0);
            $pricegroup=$row["pricegroup"];
        }

        $query = "SELECT MIN(`price`) as `price` FROM `product_roller_price` WHERE `pricegroup`=? AND `width`>=? AND `drop`>=?";
        $res = $adb->pquery($query, array($pricegroup,$productwidth,$productdrop));
        $no_of_results = $adb->num_rows($res);
        if($no_of_results>0) {
            $row = $adb->query_result_rowdata($res, 0);
            if($row["price"])
                $listPrice=(float)$row["price"];
        }

        if($chaincolour=="Metal SS 201") {
            $listPrice = $listPrice+1.0;
        }else if($chaincolour=="Metal SS 304") {
            $listPrice = $listPrice+2.0;
        }

        //****************************

        $response->setResult(array(
                                $recordId => array(
                                    'id'=>$recordId, 'name'=>decode_html($recordModel->getName()),
                                    'quantity'=>$quantity,'fabric'=>$fabric,'fabric_description'=>$fabric_description,'location'=>$location,
                                    'productwidth'=>$productwidth, 'productdrop'=>$productdrop,

                                    'rollertype'=>$rollertype, 'frontfabcategory'=>$frontFabCategory,
                                    'bottomRailCharge'=>$bottomRailCharge,

                                    'controltype'=>$controltype, 'rolldirection'=>$rolldirection,
                                    'bottomrail'=>$bottomrail, 'railcolour'=>$railcolour,
                                    'controlside'=>$controlside, 'controlcolour'=>$controlcolour,
                                    'chaincolour'=>$chaincolour, 'chainlength'=>$chainlength,
                                    'springassist'=>$springassist, 'bracketcovers'=>$bracketcovers,
                                    'railroad'=>$railroad, 'comments'=>$comments,
                                    'taxes'=>$taxes, 'listprice'=>$listPrice, 'listpricevalues'=>$listPriceValues,
                                    'description' => decode_html($recordModel->get('description')),
                                    'quantityInStock' => $recordModel->get('qtyinstock')
                                )));

		$response->emit();
	}
}
