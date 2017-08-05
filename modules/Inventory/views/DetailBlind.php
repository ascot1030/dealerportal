<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Inventory_DetailBlind_View extends Vtiger_Popup_View {

	/**
	 * Function returns module name for which Popup will be initialized
	 * @param type $request
	 */
	function getModule($request) {
		return 'Products';
	}

	public function initializeProductPopup(Vtiger_Request $request, Vtiger_Viewer $viewer) {
        $db = PearDatabase::getInstance();
        $query = "SELECT * FROM product_field WHERE product_field.tablename=? AND product_field.displaytype!=0 Order by product_field.sequence asc";
        $tablename = "singleroller";
        $params = array($tablename);
        $result = $db->pquery($query, $params);
        $noOfRows = $db->num_rows($result);

        $value = array();
        $pick_value = array();
		for($i=0; $i<$noOfRows; ++$i) {
			$row = $db->query_result_rowdata($result, $i);
			$fieldname = $row['fieldname'];
			$fieldlabel = $row['fieldlabel'];
			if(strcmp($row['uitype'],"1")==0) {
			    $row['uitype'] = "uitypes/BlindString.tpl";
			} else {
//                $pick_query = "SELECT * FROM ? where `Product Group Code`!='DELETED' order by Description ASC";
                $pick_tablename = "product_field_".$fieldname;
                $pick_query = "SELECT * FROM ".$pick_tablename;
                if(strcmp($fieldname,"fabric")==0) {
                    $pick_query .= " WHERE `groupcode`='ROL_FAB' order by `fabric` ASC";
                    $pick_params = array();
                    $pick_key = "fabricid";
                } else {
                    $pick_params = array();
                    $pick_key = $fieldname."id";
                }

                $pick_result = $db->pquery($pick_query, $pick_params);
                $pick_noOfRows = $db->num_rows($pick_result);
                $pick_v = array();
                for($j=0; $j<$pick_noOfRows; ++$j) {
                    $pick_row = $db->query_result_rowdata($pick_result, $j);
                    $pick_v[$pick_row[$pick_key]] = $pick_row;
                }
                $pick_value[$fieldname] = $pick_v;

                $row['uitype'] = "uitypes/BlindPicklist.tpl";
//                $row['uitype'] = "uitypes/BlindString.tpl";
			}
			$value[$fieldname] = $row;

		}

		$viewer->assign('PICK_VALUE', $pick_value);
        $viewer->assign('PRODUCT_VALUE',$value);
	}

	function showLineItemDetails(Vtiger_Request $request, Vtiger_Viewer $viewer) {
		$record = $request->get('record');
		$id = $request->get('id');
		$moduleName = $request->getModule();

		$recordModel = Inventory_Record_Model::getInstanceById($record);
		$relatedProducts = $recordModel->getProducts();
		$product = $relatedProducts[$id];
		$product['quantity'.$id] = $product['qty'.$id];

//		echo "Jin<pre>";
//		var_dump($product);
//		echo "</pre>";

        $viewer->assign('RECORDID', $id);
		$viewer->assign('PRODUCT', $product);

	}

	function process (Vtiger_Request $request) {
		$viewer = $this->getViewer ($request);
		$companyDetails = Vtiger_CompanyDetails_Model::getInstanceById();
		$companyLogo = $companyDetails->getLogo();

        $this->initializeProductPopup($request, $viewer);
        $this->showLineItemDetails($request, $viewer);

		$viewer->assign('COMPANY_LOGO',$companyLogo);
		$moduleName = 'Inventory';
		$viewer->assign('MODULE_NAME',$moduleName);
		$viewer->assign('MODULE', $moduleName);

		$viewer->view('DetailBlindPopup.tpl', $moduleName);
	}


}