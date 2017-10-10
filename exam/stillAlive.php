<?php
  require "../db/dbconn.php";
  if(1){
    $getTime = "SELECT time_total FROM test WHERE id = '1'";
    $run = mysqli_query($dbcon, $getTime);
    $row = mysqli_fetch_array($run);
    $time = $row[0];
    $time = $time+6;
    $update = "UPDATE TEST SET TIME_TOTAL = $time WHERE ID = '1'";
    if($run = mysqli_query($dbcon, $update)){
      echo "sucess";
    }
    else{
      echo "Query fail";
    }
  }
  else {
    echo "Fail";
  }
?>