<?php

	// 與資料庫連線
	// mysql_connect(  hostname, database_user_name, user_password )
	mysql_connect( "localhost", "root", "clst2021" ) or die( "connect fail" );
	
	// 選擇撈取哪一個資料庫
	mysql_select_db( "cola project" ) or die( "choose db fail" );
	
	// 使用 utf8 的編碼與資料庫連線
	mysql_query( "SET NAMES utf8" );

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="reset.css" />
		<link rel="stylesheet" type="text/css" href="DB.css" />
		<title>region</title>
		
		<!--------- chart  set------------------------------------------------------------------------->
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
			
		<?php
			//該地區編碼
			$var_RegionCode = $_POST["region"];
		?>
		
		<!--------------------------------------------------------------------------------------------------------------------------------------------------------------->
		<!--   判斷年份   -->
		<?php  $var_Year = $_POST["year"];?>
		<?php switch($var_Year){
				case"2010":  ?>

		<!--  2010 1月profit平均 -->
		 <?php 
			/*$sql_JAN_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
				FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
				WHERE A3.Order_No = A4.Order_Number
				AND A1.Tour_Code = A4.Tour_CodeNo
				AND A1.Region_CodeNo = A2.Region_Code
				AND A4.Tour_Date BETWEEN  '2010-01-01 00:00:00' AND  '2010-01-31 00:00:00'
				AND Region_CodeNo LIKE  '$var_RegionCode%' 
				GROUP BY Region_CodeNo";
			$resource_JAN_AVG2010  = mysql_query($sql_JAN_AVG2010); 
			
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JAN_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JAN_AVG2010=$total / $count;
					//echo "<tr align='middle'><td>一月</td><td>".$JAN_AVG2010."</td></tr>";		  
		?>

		<!--  2010 2月profit平均 -->
		 <?php 
			$sql_FEB_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-02-01 00:00:00' AND  '2010-02-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_FEB_AVG2010  = mysql_query($sql_FEB_AVG2010); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_FEB_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $FEB_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>二月</td><td>".$FEB_AVG2010."</td></tr>";		  
		?>

		<!--  2010 3月profit平均 -->
		 <?php
			$sql_MAR_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-03-01 00:00:00' AND  '2010-03-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAR_AVG2010  = mysql_query($sql_MAR_AVG2010); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAR_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAR_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>三月</td><td>".$MAR_AVG2010."</td></tr>";		  
		?>

		<!--  2010 4月profit平均 -->
		 <?php
			$sql_APR_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-04-01 00:00:00' AND  '2010-04-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_APR_AVG2010  = mysql_query($sql_APR_AVG2010); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_APR_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $APR_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>四月</td><td>".$APR_AVG2010."</td></tr>";		  
		?>

		<!--  2010 5月profit平均 -->
		 <?php
			$sql_MAY_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-05-01 00:00:00' AND  '2010-05-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAY_AVG2010  = mysql_query($sql_MAY_AVG2010); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAY_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAY_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>五月</td><td>".$MAY_AVG2010."</td></tr>";		  
		?>

		<!--  2010 6月profit平均 -->
		 <?php
			$sql_JUN_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-06-01 00:00:00' AND  '2010-06-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUN_AVG2010  = mysql_query($sql_JUN_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUN_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUN_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>六月</td><td>".$JUN_AVG2010."</td></tr>";		  */
		?>

		<!--  2010 7月profit平均 -->
		 <?php
			$sql_JUL_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-07-01 00:00:00' AND  '2010-07-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUL_AVG2010  = mysql_query($sql_JUL_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUL_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUL_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>七月</td><td>".$JUL_AVG2010."</td></tr>";		  
		?>

		<!--  2010 8月profit平均 -->
		 <?php
			$sql_AUG_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-08-01 00:00:00' AND  '2010-08-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AUG_AVG2010  = mysql_query($sql_AUG_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AUG_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AUG_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>八月</td><td>".$AUG_AVG2010."</td></tr>";		  
		?>

		<!--  2010 9月profit平均 -->
		 <?php
			$sql_SEP_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-09-01 00:00:00' AND  '2010-09-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_SEP_AVG2010  = mysql_query($sql_SEP_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_SEP_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $SEP_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>九月</td><td>".$SEP_AVG2010."</td></tr>";		  
		?>

		<!--  2010 10月profit平均 -->
		 <?php
			$sql_OCT_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-10-01 00:00:00' AND  '2010-10-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_OCT_AVG2010  = mysql_query($sql_OCT_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_OCT_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $OCT_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>十月</td><td>".$OCT_AVG2010."</td></tr>";		  
		?>

		<!--  2010 11月profit平均 -->
		 <?php
			$sql_NOV_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-11-01 00:00:00' AND  '2010-11-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_NOV_AVG2010  = mysql_query($sql_NOV_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_NOV_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $NOV_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>十一月</td><td>".$NOV_AVG2010."</td></tr>";		  
		?>

		<!--  2010 12月profit平均 -->
		 <?php
			$sql_DEC_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-12-01 00:00:00' AND  '2010-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_DEC_AVG2010  = mysql_query($sql_DEC_AVG2010); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_DEC_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $DEC_AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>十二月</td><td>".$DEC_AVG2010."</td></tr>";		  
		?>

		<!--  2010 整年profit平均 -->
		 <?php
			$sql_AVG2010 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2010-07-01 00:00:00' AND  '2010-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AVG2010  = mysql_query($sql_AVG2010); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AVG2010) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AVG2010=$total / $count;
				//	echo "<tr align='middle'><td>整年</td><td>".$AVG2010."</td></tr>";		  
		?>	
				
		<!-- chart 2010-->
				<script type="text/javascript">
					google.load("visualization", "1", {packages:["corechart"]});
					google.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([

				['Month', 'Profit', '2010-Average'],
				['01',  <?php  echo $JAN_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				['02',  <?php  echo $FEB_AVG2010 ?>,      <?php  echo $AVG2010 ?>],
				['03',  <?php  echo $MAR_AVG2010 ?>,      <?php  echo $AVG2010 ?>],
				['04',  <?php  echo $APR_AVG2010 ?>,      <?php  echo $AVG2010 ?>],
				['05',  <?php  echo $MAY_AVG2010 ?>,      <?php  echo $AVG2010 ?>],
				['06', <?php  echo $JUN_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				['07', <?php  echo $JUL_AVG2010 ?>,    <?php  echo $AVG2010 ?>],
				['08',  <?php  echo $AUG_AVG2010 ?>,    <?php  echo $AVG2010 ?>],
				['09',  <?php  echo $SEP_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				['10',  <?php  echo $OCT_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				['11', <?php  echo $NOV_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				['12',  <?php  echo $DEC_AVG2010 ?>,     <?php  echo $AVG2010 ?>],
				]);

						var options = {
							title:	'2010'
						};
						var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
							chart.draw(data, options);
						}
				</script>	
				<?php break; ?>

<!------------case 2010-------------------------------------------------------------------------------------------------------------------------------->		
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->				


		<?php case"2011":  ?>
		<!--  2011 1月profit平均 -->
		 <?php 
			$sql_JAN_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
				FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
				WHERE A3.Order_No = A4.Order_Number
				AND A1.Tour_Code = A4.Tour_CodeNo
				AND A1.Region_CodeNo = A2.Region_Code
				AND A4.Tour_Date BETWEEN  '2011-01-01 00:00:00' AND  '2011-01-31 00:00:00'
				AND Region_CodeNo LIKE  '$var_RegionCode%' 
				GROUP BY Region_CodeNo";
			$resource_JAN_AVG2011  = mysql_query($sql_JAN_AVG2011); 
			
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JAN_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JAN_AVG2011=$total / $count;
					//echo "<tr align='middle'><td>一月</td><td>".$JAN_AVG2011."</td></tr>";		  
		?>

		<!--  2011 2月profit平均 -->
		 <?php 
			$sql_FEB_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-02-01 00:00:00' AND  '2011-02-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_FEB_AVG2011  = mysql_query($sql_FEB_AVG2011); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_FEB_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $FEB_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>二月</td><td>".$FEB_AVG2011."</td></tr>";		  
		?>

		<!--  2011 3月profit平均 -->
		 <?php
			$sql_MAR_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-03-01 00:00:00' AND  '2011-03-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAR_AVG2011  = mysql_query($sql_MAR_AVG2011); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAR_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAR_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>三月</td><td>".$MAR_AVG2011."</td></tr>";		  
		?>

		<!--  2011 4月profit平均 -->
		 <?php
			$sql_APR_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-04-01 00:00:00' AND  '2011-04-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_APR_AVG2011  = mysql_query($sql_APR_AVG2011); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_APR_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $APR_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>四月</td><td>".$APR_AVG2011."</td></tr>";		  
		?>

		<!--  2011 5月profit平均 -->
		 <?php
			$sql_MAY_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-05-01 00:00:00' AND  '2011-05-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAY_AVG2011  = mysql_query($sql_MAY_AVG2011); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAY_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAY_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>五月</td><td>".$MAY_AVG2011."</td></tr>";		  
		?>

		<!--  2011 6月profit平均 -->
		 <?php
			$sql_JUN_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-06-01 00:00:00' AND  '2011-06-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUN_AVG2011  = mysql_query($sql_JUN_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUN_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUN_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>六月</td><td>".$JUN_AVG2011."</td></tr>";		  
		?>

		<!--  2011 7月profit平均 -->
		 <?php
			$sql_JUL_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-07-01 00:00:00' AND  '2011-07-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUL_AVG2011  = mysql_query($sql_JUL_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUL_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUL_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>七月</td><td>".$JUL_AVG2011."</td></tr>";		  
		?>

		<!--  2011 8月profit平均 -->
		 <?php
			$sql_AUG_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-08-01 00:00:00' AND  '2011-08-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AUG_AVG2011  = mysql_query($sql_AUG_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AUG_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AUG_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>八月</td><td>".$AUG_AVG2011."</td></tr>";		  
		?>

		<!--  2011 9月profit平均 -->
		 <?php
			$sql_SEP_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-09-01 00:00:00' AND  '2011-09-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_SEP_AVG2011  = mysql_query($sql_SEP_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_SEP_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $SEP_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>九月</td><td>".$SEP_AVG2011."</td></tr>";		  
		?>

		<!--  2011 10月profit平均 -->
		 <?php
			$sql_OCT_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-10-01 00:00:00' AND  '2011-10-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_OCT_AVG2011  = mysql_query($sql_OCT_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_OCT_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $OCT_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>十月</td><td>".$OCT_AVG2011."</td></tr>";		  
		?>

		<!--  2011 11月profit平均 -->
		 <?php
			$sql_NOV_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-11-01 00:00:00' AND  '2011-11-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_NOV_AVG2011  = mysql_query($sql_NOV_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_NOV_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $NOV_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>十一月</td><td>".$NOV_AVG2011."</td></tr>";		  
		?>

		<!--  2011 12月profit平均 -->
		 <?php
			$sql_DEC_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-12-01 00:00:00' AND  '2011-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_DEC_AVG2011  = mysql_query($sql_DEC_AVG2011); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_DEC_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $DEC_AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>十二月</td><td>".$DEC_AVG2011."</td></tr>";		  
		?>

		<!--  2011 整年profit平均 -->
		 <?php
			$sql_AVG2011 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2011-01-01 00:00:00' AND  '2011-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AVG2011  = mysql_query($sql_AVG2011); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AVG2011) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AVG2011=$total / $count;
				//	echo "<tr align='middle'><td>整年</td><td>".$AVG2011."</td></tr>";		  
		?>			
				
		<!-- chart 2011-->
				<script type="text/javascript">
					google.load("visualization", "1", {packages:["corechart"]});
					google.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([

				['Month', 'Profit', '2011-Average'],
				['01',  <?php  echo $JAN_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				['02',  <?php  echo $FEB_AVG2011 ?>,      <?php  echo $AVG2011 ?>],
				['03',  <?php  echo $MAR_AVG2011 ?>,      <?php  echo $AVG2011 ?>],
				['04',  <?php  echo $APR_AVG2011 ?>,      <?php  echo $AVG2011 ?>],
				['05',  <?php  echo $MAY_AVG2011 ?>,      <?php  echo $AVG2011 ?>],
				['06', <?php  echo $JUN_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				['07', <?php  echo $JUL_AVG2011 ?>,    <?php  echo $AVG2011 ?>],
				['08',  <?php  echo $AUG_AVG2011 ?>,    <?php  echo $AVG2011 ?>],
				['09',  <?php  echo $SEP_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				['10',  <?php  echo $OCT_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				['11', <?php  echo $NOV_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				['12',  <?php  echo $DEC_AVG2011 ?>,     <?php  echo $AVG2011 ?>],
				]);

						var options = {
							title:	'2011'
						};
						var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
							chart.draw(data, options);
						}
				</script>	
				<?php break; ?>		
		
<!------------case 2011-------------------------------------------------------------------------------------------------------------------------------->		
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->				
		
	

		<?php case"2012":  ?>	
		<!--  2012 1月profit平均 -->
		 <?php 
			$sql_JAN_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
				FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
				WHERE A3.Order_No = A4.Order_Number
				AND A1.Tour_Code = A4.Tour_CodeNo
				AND A1.Region_CodeNo = A2.Region_Code
				AND A4.Tour_Date BETWEEN  '2012-01-01 00:00:00' AND  '2012-01-31 00:00:00'
				AND Region_CodeNo LIKE  '$var_RegionCode%' 
				GROUP BY Region_CodeNo";
			$resource_JAN_AVG2012  = mysql_query($sql_JAN_AVG2012); 
			
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JAN_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JAN_AVG2012=$total / $count;
					//echo "<tr align='middle'><td>一月</td><td>".$JAN_AVG2012."</td></tr>";		  
		?>

		<!--  2012 2月profit平均 -->
		 <?php 
			$sql_FEB_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-02-01 00:00:00' AND  '2012-02-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_FEB_AVG2012  = mysql_query($sql_FEB_AVG2012); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_FEB_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $FEB_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>二月</td><td>".$FEB_AVG2012."</td></tr>";		  
		?>

		<!--  2012 3月profit平均 -->
		 <?php
			$sql_MAR_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-03-01 00:00:00' AND  '2012-03-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAR_AVG2012  = mysql_query($sql_MAR_AVG2012); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAR_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAR_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>三月</td><td>".$MAR_AVG2012."</td></tr>";		  
		?>

		<!--  2012 4月profit平均 -->
		 <?php
			$sql_APR_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-04-01 00:00:00' AND  '2012-04-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_APR_AVG2012  = mysql_query($sql_APR_AVG2012); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_APR_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $APR_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>四月</td><td>".$APR_AVG2012."</td></tr>";		  
		?>

		<!--  2012 5月profit平均 -->
		 <?php
			$sql_MAY_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-05-01 00:00:00' AND  '2012-05-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAY_AVG2012  = mysql_query($sql_MAY_AVG2012); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAY_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAY_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>五月</td><td>".$MAY_AVG2012."</td></tr>";		  
		?>

		<!--  2012 6月profit平均 -->
		 <?php
			$sql_JUN_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-06-01 00:00:00' AND  '2012-06-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUN_AVG2012  = mysql_query($sql_JUN_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUN_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUN_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>六月</td><td>".$JUN_AVG2012."</td></tr>";		  
		?>

		<!--  2012 7月profit平均 -->
		 <?php
			$sql_JUL_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-07-01 00:00:00' AND  '2012-07-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUL_AVG2012  = mysql_query($sql_JUL_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUL_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUL_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>七月</td><td>".$JUL_AVG2012."</td></tr>";		  
		?>

		<!--  2012 8月profit平均 -->
		 <?php
			$sql_AUG_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-08-01 00:00:00' AND  '2012-08-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AUG_AVG2012  = mysql_query($sql_AUG_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AUG_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AUG_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>八月</td><td>".$AUG_AVG2012."</td></tr>";		  
		?>

		<!--  2012 9月profit平均 -->
		 <?php
			$sql_SEP_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-09-01 00:00:00' AND  '2012-09-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_SEP_AVG2012  = mysql_query($sql_SEP_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_SEP_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $SEP_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>九月</td><td>".$SEP_AVG2012."</td></tr>";		  
		?>

		<!--  2012 10月profit平均 -->
		 <?php
			$sql_OCT_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-10-01 00:00:00' AND  '2012-10-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_OCT_AVG2012  = mysql_query($sql_OCT_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_OCT_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $OCT_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>十月</td><td>".$OCT_AVG2012."</td></tr>";		  
		?>

		<!--  2012 12月profit平均 -->
		 <?php
			$sql_NOV_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-11-01 00:00:00' AND  '2012-11-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_NOV_AVG2012  = mysql_query($sql_NOV_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_NOV_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $NOV_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>十一月</td><td>".$NOV_AVG2012."</td></tr>";		  
		?>

		<!--  2012 12月profit平均 -->
		 <?php
			$sql_DEC_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-12-01 00:00:00' AND  '2012-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_DEC_AVG2012  = mysql_query($sql_DEC_AVG2012); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_DEC_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $DEC_AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>十二月</td><td>".$DEC_AVG2012."</td></tr>";		  
		?>

		<!--  2012 整年profit平均 -->
		 <?php
			$sql_AVG2012 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2012-01-01 00:00:00' AND  '2012-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AVG2012  = mysql_query($sql_AVG2012); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AVG2012) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AVG2012=$total / $count;
				//	echo "<tr align='middle'><td>整年</td><td>".$AVG2012."</td></tr>";		  
		?>			
				
		<!-- chart 2012-->
				<script type="text/javascript">
					google.load("visualization", "1", {packages:["corechart"]});
					google.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([

				['Month', 'Profit', '2012-Average'],
				['01',  <?php  echo $JAN_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				['02',  <?php  echo $FEB_AVG2012 ?>,      <?php  echo $AVG2012 ?>],
				['03',  <?php  echo $MAR_AVG2012 ?>,      <?php  echo $AVG2012 ?>],
				['04',  <?php  echo $APR_AVG2012 ?>,      <?php  echo $AVG2012 ?>],
				['05',  <?php  echo $MAY_AVG2012 ?>,      <?php  echo $AVG2012 ?>],
				['06', <?php  echo $JUN_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				['07', <?php  echo $JUL_AVG2012 ?>,    <?php  echo $AVG2012 ?>],
				['08',  <?php  echo $AUG_AVG2012 ?>,    <?php  echo $AVG2012 ?>],
				['09',  <?php  echo $SEP_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				['10',  <?php  echo $OCT_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				['11', <?php  echo $NOV_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				['12',  <?php  echo $DEC_AVG2012 ?>,     <?php  echo $AVG2012 ?>],
				]);

						var options = {
							title:	'2012'
						};
						var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
							chart.draw(data, options);
						}
				</script>	
				<?php break; ?>		
		
<!------------case 2012-------------------------------------------------------------------------------------------------------------------------------->		
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->				



		<?php case"2013":  ?>
		<!--  2013 1月profit平均 -->
		 <?php 
			$sql_JAN_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
				FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
				WHERE A3.Order_No = A4.Order_Number
				AND A1.Tour_Code = A4.Tour_CodeNo
				AND A1.Region_CodeNo = A2.Region_Code
				AND A4.Tour_Date BETWEEN  '2013-01-01 00:00:00' AND  '2013-01-31 00:00:00'
				AND Region_CodeNo LIKE  '$var_RegionCode%' 
				GROUP BY Region_CodeNo";
			$resource_JAN_AVG2013  = mysql_query($sql_JAN_AVG2013); 
			
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JAN_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JAN_AVG2013=$total / $count;
					//echo "<tr align='middle'><td>一月</td><td>".$JAN_AVG2013."</td></tr>";		  
		?>

		<!--  2013 2月profit平均 -->
		 <?php 
			$sql_FEB_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-02-01 00:00:00' AND  '2013-02-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_FEB_AVG2013  = mysql_query($sql_FEB_AVG2013); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_FEB_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $FEB_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>二月</td><td>".$FEB_AVG2013."</td></tr>";		  
		?>

		<!--  2013 3月profit平均 -->
		 <?php
			$sql_MAR_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-03-01 00:00:00' AND  '2013-03-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAR_AVG2013  = mysql_query($sql_MAR_AVG2013); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAR_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAR_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>三月</td><td>".$MAR_AVG2013."</td></tr>";		  
		?>

		<!--  2013 4月profit平均 -->
		 <?php
			$sql_APR_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-04-01 00:00:00' AND  '2013-04-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_APR_AVG2013  = mysql_query($sql_APR_AVG2013); 
		 
				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_APR_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $APR_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>四月</td><td>".$APR_AVG2013."</td></tr>";		  
		?>

		<!--  2013 5月profit平均 -->
		 <?php
			$sql_MAY_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-05-01 00:00:00' AND  '2013-05-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_MAY_AVG2013  = mysql_query($sql_MAY_AVG2013); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_MAY_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $MAY_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>五月</td><td>".$MAY_AVG2013."</td></tr>";		  
		?>

		<!--  2013 6月profit平均 -->
		 <?php
			$sql_JUN_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-06-01 00:00:00' AND  '2013-06-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUN_AVG2013  = mysql_query($sql_JUN_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUN_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUN_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>六月</td><td>".$JUN_AVG2013."</td></tr>";		  
		?>

		<!--  2013 7月profit平均 -->
		 <?php
		/*	$sql_JUL_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-07-01 00:00:00' AND  '2013-07-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_JUL_AVG2013  = mysql_query($sql_JUL_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_JUL_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $JUL_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>七月</td><td>".$JUL_AVG2013."</td></tr>";		  
		?>

		<!--  2013 8月profit平均 -->
		 <?php
			$sql_AUG_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-08-01 00:00:00' AND  '2013-08-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AUG_AVG2013  = mysql_query($sql_AUG_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AUG_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AUG_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>八月</td><td>".$AUG_AVG2013."</td></tr>";		  
		?>

		<!--  2013 9月profit平均 -->
		 <?php
			$sql_SEP_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-09-01 00:00:00' AND  '2013-09-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_SEP_AVG2013  = mysql_query($sql_SEP_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_SEP_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $SEP_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>九月</td><td>".$SEP_AVG2013."</td></tr>";		  
		?>

		<!--  2013 10月profit平均 -->
		 <?php
			$sql_OCT_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-10-01 00:00:00' AND  '2013-10-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_OCT_AVG2013  = mysql_query($sql_OCT_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_OCT_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $OCT_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>十月</td><td>".$OCT_AVG2013."</td></tr>";		  
		?>

		<!--  2013 11月profit平均 -->
		 <?php
			$sql_NOV_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-11-01 00:00:00' AND  '2013-11-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_NOV_AVG2013  = mysql_query($sql_NOV_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_NOV_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $NOV_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>十一月</td><td>".$NOV_AVG2013."</td></tr>";		  
		?>

		<!--  2013 12月profit平均 -->
		 <?php
			$sql_DEC_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-12-01 00:00:00' AND  '2013-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_DEC_AVG2013  = mysql_query($sql_DEC_AVG2013); 	

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_DEC_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $DEC_AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>十二月</td><td>".$DEC_AVG2013."</td></tr>";		  
		 */?> 

		<!--  2013 整年profit平均 -->
		 <?php
			$sql_AVG2013 = "SELECT AVG( Order_Profit ) AVG_Profit
					FROM a05b00_order A3, a05b01_tourorder A4, a03a3_group A1, a03a3_regioncode A2
					WHERE A3.Order_No = A4.Order_Number
					AND A1.Tour_Code = A4.Tour_CodeNo
					AND A1.Region_CodeNo = A2.Region_Code
					AND A4.Tour_Date BETWEEN  '2013-01-01 00:00:00' AND  '2013-12-31 00:00:00'
					AND Region_CodeNo LIKE  '$var_RegionCode%' 
					GROUP BY Region_CodeNo";
			$resource_AVG2013  = mysql_query($sql_AVG2013); 

				$total=0;
				$count=0;
				while( $row = mysql_fetch_array($resource_AVG2013) )
				{        
						  $total += $row['AVG_Profit'];
						  $count +=1 ;
				}
				   $AVG2013=$total / $count;
				//	echo "<tr align='middle'><td>整年</td><td>".$AVG2013."</td></tr>";		  
		?>	

		<!-- chart 2013-->
				<script type="text/javascript">
					google.load("visualization", "1", {packages:["corechart"]});
					google.setOnLoadCallback(drawChart);
					function drawChart() {
						var data = google.visualization.arrayToDataTable([

				['Month', 'Profit', '2013-Average'],
				['01',  <?php  echo $JAN_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				['02',  <?php  echo $FEB_AVG2013 ?>,      <?php  echo $AVG2013 ?>],
				['03',  <?php  echo $MAR_AVG2013 ?>,      <?php  echo $AVG2013 ?>],
				['04',  <?php  echo $APR_AVG2013 ?>,      <?php  echo $AVG2013 ?>],
				['05',  <?php  echo $MAY_AVG2013 ?>,      <?php  echo $AVG2013 ?>],
				['06', <?php  echo $JUN_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				['07', <?php  echo $JUL_AVG2013 ?>,    <?php  echo $AVG2013 ?>],
				['08',  <?php  echo $AUG_AVG2013 ?>,    <?php  echo $AVG2013 ?>],
				['09',  <?php  echo $SEP_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				['10',  <?php  echo $OCT_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				['11', <?php  echo $NOV_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				['12',  <?php  echo $DEC_AVG2013 ?>,     <?php  echo $AVG2013 ?>],
				]);

						var options = {
							title:	'2013'
						};
						var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
							chart.draw(data, options);
						}
				</script>	
				<?php break; ?>		
				
<!------------case 2013-------------------------------------------------------------------------------------------------------------------------------->		
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->		
 
 <?php default: ?>
		<?php break; ?>

<?php  }  ?>

</head>
	
	
<body>
		<!--nav bar-->		
		<div id="header-wrapper">
			<div id="block_FixNavBar">
				<div id="logo">
					<a href="DB.html"><img src="logo_white.png" alt="logo"></a>
				</div>		
				<div id="Right-nav">5-A 季節銷售分析查詢系統</div>
			</div>
		</div>
		<!--end of nav bar-->
	
	
	<div class="content_php">
		<div class="chart"  id="chart_div" style="width:700px; height: 400px;"></div>

		<div class="table">
		<!--  顯示地區名稱 -->
		 <?php 
			$RegionName;
			switch($var_RegionCode){
				case"A":
					$RegionName = "日本";
					break;
				case"B":
					$RegionName = "韓國";
					break;
				case"C":
					$RegionName = "泰國";
					break;
				case"D":
					$RegionName = "馬來西亞/新加坡";
					break;
				case"E":
					$RegionName = "印尼";
					break;
				case"F":
					$RegionName = "中南半島";
					break;
				case"G":
					$RegionName = "中國大陸";
					break;
				case"H":
					$RegionName = "港澳地區";
					break;
				case"I":
					$RegionName = "美加";
					break;
				case"J":
					$RegionName = "太平洋/印度洋島嶼";
					break;
				case"K":
					$RegionName = "紐澳";
					break;
				case"L":
					$RegionName = "歐洲";
					break;
				case"M":
					$RegionName = "中東/南亞/非洲";
					break;
				case"N":
					$RegionName = "全球遊輪";
					break;
				case"P":
					$RegionName = "菲律賓";
					break;
				default:
					break;
			}
			
			echo $RegionName;
		 ?> </br>
		 
		 <!-- 判斷年份 -->
		 <?php switch($var_Year){ 
					case"2010": ?> 
				<table class="table_region">
			<tr>
				<td>1月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>2月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>3月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>4月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>5月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>6月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>7月</td>
				<td><?php  echo $JUL_AVG2010 ?></td>			
			</tr>
			<tr>
				<td>8月</td>
				<td><?php  echo $AUG_AVG2010 ?></td>			
			</tr>
			<tr>
				<td>9月</td>
				<td><?php  echo $SEP_AVG2010 ?></td>			
			</tr>
			<tr>
				<td>10月</td>
				<td><?php  echo $OCT_AVG2010 ?></td>			
			</tr>
			<tr>
				<td>11月</td>
				<td><?php  echo $NOV_AVG2010 ?></td>			
			</tr>
			<tr>
				<td>12月</td>
				<td><?php  echo $DEC_AVG2010 ?></td>			
			</tr>
		</table>
				 <?break;?>
		
		<!--  2011表單 -->
		<?php case"2011":  ?>
			<table class="table_region">
			<tr>
				<td>1月</td>
				<td><?php  echo $JAN_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>2月</td>
				<td><?php  echo $FEB_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>3月</td>
				<td><?php  echo $MAR_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>4月</td>
				<td><?php  echo $APR_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>5月</td>
				<td><?php  echo $MAY_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>6月</td>
				<td><?php  echo $JUN_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>7月</td>
				<td><?php  echo $JUL_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>8月</td>
				<td><?php  echo $AUG_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>9月</td>
				<td><?php  echo $SEP_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>10月</td>
				<td><?php  echo $OCT_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>11月</td>
				<td><?php  echo $NOV_AVG2011 ?></td>			
			</tr>
			<tr>
				<td>12月</td>
				<td><?php  echo $DEC_AVG2011 ?></td>			
			</tr>
		</table>
			<?php break; ?>
			 
 		<!--  2012表單 -->
		<?php case"2012":  ?>
			<table class="table_region">
			<tr>
				<td>1月</td>
				<td><?php  echo $JAN_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>2月</td>
				<td><?php  echo $FEB_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>3月</td>
				<td><?php  echo $MAR_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>4月</td>
				<td><?php  echo $APR_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>5月</td>
				<td><?php  echo $MAY_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>6月</td>
				<td><?php  echo $JUN_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>7月</td>
				<td><?php  echo $JUL_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>8月</td>
				<td><?php  echo $AUG_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>9月</td>
				<td><?php  echo $SEP_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>10月</td>
				<td><?php  echo $OCT_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>11月</td>
				<td><?php  echo $NOV_AVG2012 ?></td>			
			</tr>
			<tr>
				<td>12月</td>
				<td><?php  echo $DEC_AVG2012 ?></td>			
			</tr>
		</table>
			<?php break; ?>	
 
   		<!--  2013表單 -->
		<?php case"2013":  ?>
			<table  class="table_region">
			<tr>
				<td>1月</td>
				<td><?php  echo $JAN_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>2月</td>
				<td><?php  echo $FEB_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>3月</td>
				<td><?php  echo $MAR_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>4月</td>
				<td><?php  echo $APR_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>5月</td>
				<td><?php  echo $MAY_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>6月</td>
				<td><?php  echo $JUN_AVG2013 ?></td>			
			</tr>
			<tr>
				<td>7月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>8月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>9月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>10月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>11月</td>
				<td>N/A</td>			
			</tr>
			<tr>
				<td>12月</td>
				<td>N/A</td>			
			</tr>
		</table>
			<?php break; ?>	
		
		<?php default: ?>
			<?php break; ?>
			
	<?php  }  ?>

	</div>
  </body>
</html>
