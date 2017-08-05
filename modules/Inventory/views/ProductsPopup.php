<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/

class Inventory_ProductsPopup_View extends Vtiger_Popup_View {

	/**
	 * Function returns module name for which Popup will be initialized
	 * @param type $request
	 */
	function getModule($request) {
		return 'Products';
	}

	public function initializeProductPopup(Vtiger_Request $request, Vtiger_Viewer $viewer) {
        $record = $request->get('record');
        $id = $request->get('id');
        $noedit = $request->get('noedit');
        $moduleName = $request->getModule();
        if($record!="undefined") {

            $recordModel = Inventory_Record_Model::getInstanceById($record);
            $relatedProducts = $recordModel->getProducts();
            $product = $relatedProducts[$id];
            $product['quantity'.$id] = $product['qty'.$id];
        }

//		echo "<pre>";
//		var_dump($product);
//		echo "</pre>";

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
			}else if(strcmp($row['uitype'],"56")==0) {
			    $row['uitype'] = "uitypes/BlindBoolean.tpl";
			} else {
//                $pick_query = "SELECT * FROM ? where `Product Group Code`!='DELETED' order by Description ASC";
                $pick_tablename = "product_field_".$fieldname;
                $pick_query = "SELECT * FROM ".$pick_tablename;
                if(strcmp($fieldname,"fabric")==0) {
                    $pick_query .= " WHERE `groupcode`='ROL_FAB' order by `fabric` ASC";
                    $pick_params = array();
                    $pick_key = "fabricid";
                } else if(strcmp($fieldname,"controltype")==0) {
                    $pick_query .= " WHERE `active`='1'";
                    $pick_params = array();
                    $pick_key = $fieldname."id";
                } else {
                    $pick_query .= " WHERE `active`='1'";
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

            if($noedit=="yes") {
			    foreach($product as $pfieldname=>$pfieldvalue) {
			        if($pfieldname==($fieldname.$id)) {
			            $row['defaultvalue'] = $pfieldvalue;
			        }
			    }
			} else {
                if($request->get($fieldname)!="") {
                    $row['defaultvalue'] = $request->get($fieldname);
                }
            }

			$value[$fieldname] = $row;

		}
//		echo "<pre>";
//		var_dump($value);
//		echo "</pre>";

		$viewer->assign('PICK_VALUE', $pick_value);
        $viewer->assign('PRODUCT_VALUE',$value);
        $viewer->assign('NOEDIT',$noedit);
	}

    function showLineItemDetails(Vtiger_Request $request, Vtiger_Viewer $viewer) {
        $record = $request->get('record');
        $id = $request->get('id');
        $moduleName = $request->getModule();

        $recordModel = Inventory_Record_Model::getInstanceById($record);
        $relatedProducts = $recordModel->getProducts();
        $product = $relatedProducts[$id];
        $product['quantity'.$id] = $product['qty'.$id];


		echo "Jin<pre>";
		var_dump($product);
		echo "</pre>";

//        $viewer->assign('RECORDID', $id);
//        $viewer->assign('PRODUCT', $product);

    }

	function process (Vtiger_Request $request) {
		$viewer = $this->getViewer ($request);
		$companyDetails = Vtiger_CompanyDetails_Model::getInstanceById();
		$companyLogo = $companyDetails->getLogo();

        $this->initializeProductPopup($request, $viewer);
		$this->initializeListViewContents($request, $viewer);

		$viewer->assign('COMPANY_LOGO',$companyLogo);
		$moduleName = 'Inventory';
		$viewer->assign('MODULE_NAME',$moduleName);

        //jin
        $moduleName = 'Project';
        $recordModel = Vtiger_Record_Model::getCleanInstance($moduleName);
        $viewer->assign('MODE', '');

//        var_dump($recordModel);


		$moduleModel = $recordModel->getModule();
		$fieldList = $moduleModel->getFields();
		$requestFieldList = array_intersect_key($request->getAll(), $fieldList);

		foreach($requestFieldList as $fieldName=>$fieldValue){
			$fieldModel = $fieldList[$fieldName];
			$specialField = false;
			// We collate date and time part together in the EditView UI handling
			// so a bit of special treatment is required if we come from QuickCreate
			if ($moduleName == 'Calendar' && empty($record) && $fieldName == 'time_start' && !empty($fieldValue)) {
				$specialField = true;
				// Convert the incoming user-picked time to GMT time
				// which will get re-translated based on user-time zone on EditForm
				$fieldValue = DateTimeField::convertToDBTimeZone($fieldValue)->format("H:i");

			}

            if ($moduleName == 'Calendar' && empty($record) && $fieldName == 'date_start' && !empty($fieldValue)) {
                $startTime = Vtiger_Time_UIType::getTimeValueWithSeconds($requestFieldList['time_start']);
                $startDateTime = Vtiger_Datetime_UIType::getDBDateTimeValue($fieldValue." ".$startTime);
                list($startDate, $startTime) = explode(' ', $startDateTime);
                $fieldValue = Vtiger_Date_UIType::getDisplayDateValue($startDate);
            }
			if($fieldModel->isEditable() || $specialField) {
				$recordModel->set($fieldName, $fieldModel->getDBInsertValue($fieldValue));
			}
		}
		$recordStructureInstance = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_EDIT);
		$viewer->assign('RECORD_STRUCTURE_MODEL', $recordStructureInstance);


        $moduleName = 'Inventory';
		$viewer->view('JinPopup.tpl', $moduleName);
	}

	/*
	 * Function to initialize the required data in smarty to display the List View Contents
	 */
	public function initializeListViewContents(Vtiger_Request $request, Vtiger_Viewer $viewer) {
		//src_module value is added to just to stop showing inactive products
		$request->set('src_module', $request->getModule());

		$moduleName = $this->getModule($request);
		$cvId = $request->get('cvid');
		$pageNumber = $request->get('page');
		$orderBy = $request->get('orderby');
		$sortOrder = $request->get('sortorder');
		$sourceModule = $request->get('src_module');
		$sourceField = $request->get('src_field');
		$sourceRecord = $request->get('src_record');
		$searchKey = $request->get('search_key');
		$searchValue = $request->get('search_value');
		$currencyId = $request->get('currency_id');

		//To handle special operation when selecting record from Popup
		$getUrl = $request->get('get_url');

		//Check whether the request is in multi select mode
		$multiSelectMode = $request->get('multi_select');
		if(empty($multiSelectMode)) {
			$multiSelectMode = false;
		}

		if(empty($cvId)) {
			$cvId = '0';
		}
		if(empty ($pageNumber)) {
			$pageNumber = '1';
		}

		$pagingModel = new Vtiger_Paging_Model();
		$pagingModel->set('page', $pageNumber);

		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);
		$listViewModel = Vtiger_ListView_Model::getInstanceForPopup($moduleName);
//		$recordStructureInstance = Vtiger_RecordStructure_Model::getInstanceForModule($moduleModel);

		if(!empty($orderBy)) {
			$listViewModel->set('orderby', $orderBy);
			$listViewModel->set('sortorder', $sortOrder);
		}
		if(!empty($sourceModule)) {
			$listViewModel->set('src_module', $sourceModule);
			$listViewModel->set('src_field', $sourceField);
			$listViewModel->set('src_record', $sourceRecord);
		}
		if((!empty($searchKey)) && (!empty($searchValue))) {
			$listViewModel->set('search_key', $searchKey);
			$listViewModel->set('search_value', $searchValue);
		}
        
        $productModel = Vtiger_Module_Model::getInstance('Products');        
		if(!$this->listViewHeaders) {
			$this->listViewHeaders = $listViewModel->getListViewHeaders();
		}
        
		if(!$this->listViewEntries && $productModel->isActive()) {
			$this->listViewEntries = $listViewModel->getListViewEntries($pagingModel);
		}

        if(!$productModel->isActive()){
            $this->listViewEntries = array(); 
            $viewer->assign('LBL_MODULE_DISABLED', true);
        }
        
		foreach ($this->listViewEntries as $key => $listViewEntry) {
			$productId = $listViewEntry->getId();
			$subProducts = $listViewModel->getSubProducts($productId);
			if($subProducts) {
				$listViewEntry->set('subProducts', $subProducts);
			}
		}

		$noOfEntries = count($this->listViewEntries);

		if(empty($sortOrder)) {
			$sortOrder = "ASC";
		}
		if($sortOrder == "ASC") {
			$nextSortOrder = "DESC";
			$sortImage = "downArrowSmall.png";
		}else {
			$nextSortOrder = "ASC";
			$sortImage = "upArrowSmall.png";
		}
		$viewer->assign('MODULE', $moduleName);
        $viewer->assign('RELATED_MODULE', $moduleName); 
		$viewer->assign('SOURCE_MODULE', $sourceModule);
		$viewer->assign('SOURCE_FIELD', $sourceField);
		$viewer->assign('SOURCE_RECORD', $sourceRecord);

		$viewer->assign('SEARCH_KEY', $searchKey);
		$viewer->assign('SEARCH_VALUE', $searchValue);

		$viewer->assign('ORDER_BY',$orderBy);
		$viewer->assign('SORT_ORDER',$sortOrder);
		$viewer->assign('NEXT_SORT_ORDER',$nextSortOrder);
		$viewer->assign('SORT_IMAGE',$sortImage);
		$viewer->assign('GETURL', $getUrl);
		$viewer->assign('CURRENCY_ID', $currencyId);

//		$viewer->assign('RECORD_STRUCTURE_MODEL', $recordStructureInstance);
//		$viewer->assign('RECORD_STRUCTURE', $recordStructureInstance->getStructure());

		$viewer->assign('PAGING_MODEL', $pagingModel);
		$viewer->assign('PAGE_NUMBER',$pageNumber);

		$viewer->assign('LISTVIEW_ENTRIES_COUNT',$noOfEntries);
		$viewer->assign('LISTVIEW_HEADERS', $this->listViewHeaders);
		$viewer->assign('LISTVIEW_ENTRIES', $this->listViewEntries);
		
		if (PerformancePrefs::getBoolean('LISTVIEW_COMPUTE_PAGE_COUNT', false)) {
			if(!$this->listViewCount){
				$this->listViewCount = $listViewModel->getListViewCount();
			}
			$totalCount = $this->listViewCount;
			$pageLimit = $pagingModel->getPageLimit();
			$pageCount = ceil((int) $totalCount / (int) $pageLimit);

			if($pageCount == 0){
				$pageCount = 1;
			}
			$viewer->assign('PAGE_COUNT', $pageCount);
			$viewer->assign('LISTVIEW_COUNT', $totalCount);
		}

		$viewer->assign('MULTI_SELECT', $multiSelectMode);
		$viewer->assign('CURRENT_USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->assign('TARGET_MODULE', $moduleName);
		$viewer->assign('MODULE', $request->getModule());
		$viewer->assign('GETURL', 'getTaxesURL');
		$viewer->assign('VIEW', 'ProductsPopup');
	}

	 /**
	 * Function to get the list of Script models to be included
	 * @param Vtiger_Request $request
	 * @return <Array> - List of Vtiger_JsScript_Model instances
	 */
	function getHeaderScripts(Vtiger_Request $request) {
		$headerScriptInstances = parent::getHeaderScripts($request);

		$moduleName = $request->getModule();
		$modulePopUpFile = 'modules.'.$moduleName.'.resources.Popup';
		unset($headerScriptInstances[$modulePopUpFile]);

		$jsFileNames = array('modules.Inventory.resources.Popup');
		$jsFileNames[] = $modulePopUpFile;
		$jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
		$headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);

		return $headerScriptInstances;
	}

}