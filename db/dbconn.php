
<?php
    include "dbsettings.php";
    $dbcon=mysqli_connect($dbserver,$dbusername,"");  
    mysqli_select_db($dbcon,$dbname); 
?>
