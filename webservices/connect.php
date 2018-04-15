<?php 
   define ('BASE_PATH', 'http://localhost/jobster/webservices');
   define ('DB_HOST', 'localhost');
   define ('DB_USER', 'root');
   define ('DB_PASSWORD', '');
   define ('DB_NAME', 'jobster');
   
   $dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
   or die("ERROR CONNECTING");
?>
