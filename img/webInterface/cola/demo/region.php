<?php

	// 與資料庫連線
	// mysql_connect(  hostname, database_user_name, user_password )
	mysql_connect( "localhost", "root", "clst2021" ) or die( "connect fail" );
	
	// 選擇撈取哪一個資料庫
	mysql_select_db( "cola project" ) or die( "choose db fail" );
	
	// 使用 utf8 的編碼與資料庫連線
	mysql_query( "SET NAMES utf8" );

?>


<?php

	//取出地區
	$sql_region = "SELECT Region_Code, Region_Name
		FROM a03a3_regioncode
		WHERE Code_Type = 1";
	$resource_region = mysql_query( $sql_region );
	$region = mysql_fetch_array($resource_region );

	//該地區旅遊團編碼
	$var_RegionCode;
	$sql_TourCode = "SELECT Tour_Code
		FROM a03a3_regioncode, a03a3_group
		WHERE a03a3_regioncode.Region_Code = a03a3_group. Region_Code
		AND a03a3_regioncode.Region_Code LIKE '$var_RegionCode%' ";
	$resource_TourCode = mysql_query($sql_TourCode);
	$TourCode = mysql_fetch_array($resource_TourCode);
	
	//該團旅遊天數
	$var_TourCode;
	$sql_TourDays = "SELECT Tour_Days 
		FROM a03a3_group
		WHERE Tour_Code = '$var_TourCode' ";
	$resource_TourDays = mysql_query($sql_TourDays);
	$TourDays = mysql_fetch_array($resource_TourDays);

	//該團訂單編號
	$var_TourCode;
	$sql_OrderNo = "SELECT Order_No
		FROM a05b01_tourorder, a03a3_group
		WHERE a03a3_group.Tour_Code = a05b01_tourorder.Tour_Code
		AND a05b01_tourorder.Tour_Code = '$var_TourCode' ";
	$resource_OrderNo= mysql_query($sql_OrderNo);
	$OrderNo = mysql_fetch_array($resource_OrderNo);
	
	//該團詳細資訊
	$var_OrderNo;
	$sql_TourData = "SELECT Product_Type, Departure_Date, Order_Profit
		FROM a05b00_order
		WHERE Order_No = '$var_OrderNo' ";
	$resource_TourData= mysql_query($sql_TourData);
	$TourData = mysql_fetch_array($resource_TourData);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>select with region</title>
</head>

<body>
	



</body>

SELECT Tour_Code, Tour_Days, Product_Type, Order_Profit  
		FROM a03a3_regioncode, a03a3_group, a05b00_order, a05b01_tourorder
		WHERE a03a3_regioncode.Region_Code = a03a3_group. Region_Code
                AND a03a3_group.Tour_Code = a05b01_tourorder.Tour_Code
                AND a05b00_order.Order_No = a05b01_tourorder.Order_No
		AND a03a3_regioncode.Region_Code = "A" 














