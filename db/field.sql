SELECT * FROM vtigertest.vtiger_field where tabid=20;

INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','productwidth','vtiger_inventoryproductrel','1','2','productwidth','Width (mm)','0','2','I~M','','100','10','116','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','productdrop','vtiger_inventoryproductrel','1','2','productdrop','Drop (mm)','0','2','I~M','','100','11','116','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','location','vtiger_inventoryproductrel','1','16','location','Location','0','2','V~M','','100','12','116','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','fabric','vtiger_inventoryproductrel','1','16','fabric','Fabric','0','2','V~M','','100','13','116','5','BAS','');

//new for retail
********quotes***************
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_subtotal','vtiger_quotes','1','72','retail_hdnSubTotal','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_margin','vtiger_quotes','1','72','retail_margin','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');

INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_discount_percent','vtiger_quotes','1','1','retail_hdnDiscountPercent','Retail Discount Percent','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_discount_amount','vtiger_quotes','1','72','retail_hdnDiscountAmount','Retail Discount Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_s_h_amount','vtiger_quotes','1','72','retail_hdnS_H_Amount','Retail S&H Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_adjustment','vtiger_quotes','1','72','retail_txtAdjustment','Retail Adjustment','0','2','NN~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_total','vtiger_quotes','1','72','retail_hdnGrandTotal','Retail Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_pre_tax_total','vtiger_quotes','1','72','retail_pre_tax_total','Retail Pre Tax Total','0','2','N~O','','100','99','49','5','BAS','');

INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_actual_margin','vtiger_quotes','1','72','retail_actual_margin','Retail Actual Margin','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('20','retail_actual_discount','vtiger_quotes','1','72','retail_actual_discount','Retail Actual Discount','0','2','N~O','','100','99','49','5','BAS','');

********salesorder***************
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_subtotal','vtiger_salesorder','1','72','retail_hdnSubTotal','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_margin','vtiger_salesorder','1','72','retail_margin','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_discount_percent','vtiger_salesorder','1','1','retail_hdnDiscountPercent','Retail Discount Percent','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_discount_amount','vtiger_salesorder','1','72','retail_hdnDiscountAmount','Retail Discount Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_s_h_amount','vtiger_salesorder','1','72','retail_hdnS_H_Amount','Retail S&H Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_adjustment','vtiger_salesorder','1','72','retail_txtAdjustment','Retail Adjustment','0','2','NN~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_total','vtiger_salesorder','1','72','retail_hdnGrandTotal','Retail Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_pre_tax_total','vtiger_salesorder','1','72','retail_pre_tax_total','Retail Pre Tax Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_actual_margin','vtiger_salesorder','1','72','retail_actual_margin','Retail Actual Margin','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('22','retail_actual_discount','vtiger_salesorder','1','72','retail_actual_discount','Retail Actual Discount','0','2','N~O','','100','99','49','5','BAS','');


********Invoice***************
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_subtotal','vtiger_invoice','1','72','retail_hdnSubTotal','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_margin','vtiger_invoice','1','72','retail_margin','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_discount_percent','vtiger_invoice','1','1','retail_hdnDiscountPercent','Retail Discount Percent','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_discount_amount','vtiger_invoice','1','72','retail_hdnDiscountAmount','Retail Discount Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_s_h_amount','vvtiger_invoice','1','72','retail_hdnS_H_Amount','Retail S&H Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_adjustment','vtiger_invoice','1','72','retail_txtAdjustment','Retail Adjustment','0','2','NN~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_total','vtiger_invoice','1','72','retail_hdnGrandTotal','Retail Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_pre_tax_total','vtiger_invoice','1','72','retail_pre_tax_total','Retail Pre Tax Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_actual_margin','vtiger_invoice','1','72','retail_actual_margin','Retail Actual Margin','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('23','retail_actual_discount','vtiger_invoice','1','72','retail_actual_discount','Retail Actual Discount','0','2','N~O','','100','99','49','5','BAS','');

********purchaseorder***************
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_subtotal','vtiger_purchaseorder','1','72','retail_hdnSubTotal','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_margin','vtiger_purchaseorder','1','72','retail_margin','Retail Sub Total','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_discount_percent','vtiger_purchaseorder','1','1','retail_hdnDiscountPercent','Retail Discount Percent','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_discount_amount','vtiger_purchaseorder','1','72','retail_hdnDiscountAmount','Retail Discount Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_s_h_amount','vtiger_purchaseorder','1','72','retail_hdnS_H_Amount','Retail S&H Amount','0','2','V~M','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_adjustment','vtiger_purchaseorder','1','72','retail_txtAdjustment','Retail Adjustment','0','2','NN~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_total','vtiger_purchaseorder','1','72','retail_hdnGrandTotal','Retail Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_pre_tax_total','vtiger_purchaseorder','1','72','retail_pre_tax_total','Retail Pre Tax Total','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_actual_margin','vtiger_purchaseorder','1','72','retail_actual_margin','Retail Actual Margin','0','2','N~O','','100','99','49','5','BAS','');
INSERT `vtiger_field` (`tabid`,`columnname`,`tablename`,`generatedtype`,`uitype`,`fieldname`,`fieldlabel`,`readonly`,`presence`,`typeofdata`,`defaultvalue`,`maximumlength`,`sequence`,`block`,`displaytype`,`info_type`,`helpinfo`) 
VALUES ('21','retail_actual_discount','vtiger_purchaseorder','1','72','retail_actual_discount','Retail Actual Discount','0','2','N~O','','100','99','49','5','BAS','');



