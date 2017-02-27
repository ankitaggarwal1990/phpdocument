<html>
  
  <body>
    
    sadsafsafasfsffgghjkfghjkxghj
  </body>
  
</html>




<?php

echo  "Amlo1";
include 'phpdocumentdb.php';

echo  "Amlo";

$host = 'https://trackandtracerescuieda5a28.documents.azure.com:443/';
$master_key = 'CfSDcA4As7qzpjyA1eeK1SFTIuXvQSyHfZC63g8aMDDcXHaDCeyC6fcW4E1qxm0ztz7LI3vT7gxgWbRZDCULiQ==';

// connect DocumentDB
$documentdb = new DocumentDB($host, $master_key);

// select Database or create
$db = $documentdb->selectDB("DevMgmtDB");

// select Collection or create
$col = $db->selectCollection("DevMgmtCollection");

// store JSON document ("id" needed)
//$data = '{"id":1234567890, "FirstName": "Paul","LastName": "Smith"}';
//$result = $col->createDocument($data);

// run query
$json = $col->query("SELECT * FROM DevMgmtCollection");

// Debug
$object = json_decode($json);
echo $object;
var_dump($object->Documents);


echo "123";





?>
