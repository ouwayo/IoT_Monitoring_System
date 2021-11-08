<?php

declare(strict_types = 1);

namespace App\Charts;
use DB; 

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request; 
class UserChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    
    public function handler(Request $request): Chartisan
    {
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
// For temperature
$sql1 = "SELECT * FROM temperature";
$result1 = mysqli_query($conn, $sql1);
// $temp=array();
$tme=array(); 
if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {
    // $temp[]= ($row["temperature"])." ";
    $tme[]=($row["created_at"])." ";
     }
    } else {
    echo "0 results";
  }

  // all tables: 
  $sql = "SELECT temperature,humidity,methane FROM temperature t1 
  INNER JOIN humidity t2 ON t1.created_at = t2.created_at 
  INNER JOIN methane t3 on t2.created_at=t3.created_at"; 
  // $sql_hum = "SELECT humidity FROM humidity";
  $result = mysqli_query($conn, $sql);
  // $try=array(); 
  $temp=array();
  $hum=array();
  $meth=array(); 
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row= mysqli_fetch_assoc($result)) { 
      $humi[]= ($row["humidity"])."";
      $temp[]= ($row["temperature"])."";
      $meth[]= ($row["methane"])."";
    }
  } else {
    echo "0 results";
  }

mysqli_close($conn);
        
        return Chartisan::build()
            ->labels($tme)
            // ->labels(['January', 'February', 'March', 'April','May','June','July','August','September','November','December'])
            //  ->dataset('Sample', [9,3,3,]);
            // ->dataset('Temperature', $meth);
            ->dataset('Methane', $meth)
            ->dataset('Humidity', $humi)
            ->dataset('Temperature', $temp);
    }
}