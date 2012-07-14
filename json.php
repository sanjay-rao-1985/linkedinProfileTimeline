<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 'On');
   //echo $_POST['json'];
   //echo "Hello World !";
   $json = $_POST['json'];
   echo $json;
   if ($json != null) { /* sanity check */
     $file = fopen('data.json','w+');
     fwrite($file, $json);
     fclose($file);
   } else {
     // handle error 
   }

?>
