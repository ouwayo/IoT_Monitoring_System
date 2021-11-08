<?php

declare(strict_types = 1);

namespace App\Charts;
use DB; 

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "capstonedata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//HUMIDITY: 


// $sql_hum = "SELECT humidity FROM humidity";
// $result_hum = mysqli_query($conn, $sql_hum);
// // $try=array(); 
// if (mysqli_num_rows($result_hum) > 0) {
//   // output data of each row
//   while($row_hum= mysqli_fetch_assoc($result_hum)) { 
//     $humi= ($row_hum["humidity"]).",";
//     // $try=implode(",",$try); 
//     echo $humi; 
//   }
// } else {
//   echo "0 results";
// }
//  echo $try; 



// METHANE
$sql_meth = "SELECT methane FROM methane";
$result_meth = mysqli_query($conn, $sql_meth);
// $try=array(); 
if (mysqli_num_rows($result_meth) > 0) {
  // output data of each row
  while($row_meth= mysqli_fetch_assoc($result_meth)) { 
    $meth= ($row_meth["methane"]).",";
    // $try=implode(",",$try); 
    echo $meth; 
  }
} else {
  echo "0 results";
}

//
$sql = "SELECT temperature,humidity,methane FROM temperature t1 
INNER JOIN humidity t2 ON t1.created_at = t2.created_at 
INNER JOIN methane t3 on t2.created_at=t3.created_at"; 
// $sql_hum = "SELECT humidity FROM humidity";
$result = mysqli_query($conn, $sql);
// $try=array(); 
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row= mysqli_fetch_assoc($result)) { 
    $humi= ($row["humidity"]).",";
    // $try=implode(",",$try); 
    echo $humi; 
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>