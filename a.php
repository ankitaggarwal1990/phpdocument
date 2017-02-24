<?php

include 'documentdb-for-php.php';
$host = 'https://trackandtracerescuieda5a28.documents.azure.com:443/'; // see (1) in the screenshots bellow
$master_key = 'CfSDcA4As7qzpjyA1eeK1SFTIuXvQSyHfZC63g8aMDDcXHaDCeyC6fcW4E1qxm0ztz7LI3vT7gxgWbRZDCULiQ=='; // see (2) in the screenshots bellow
$db = 'DevMgmtDB'; // see (3) in the screenshots bellow (optional)
$db_rid = 'thedbresourceid=='; // see (4) in the screenshots bellow
$coll = 'DevMgmtCollection'; // see (5) in the screenshots bellow (optional)
$coll_rid = 'yourcollectionresourceid='; // see (6) in the screenshots bellow
$query = "Select * from DevMgmtCollection"; // This is your SQL or LINQ code
querycoll($host, $db_rid, $coll_rid, $query,$apptype,$useragent,$cachecontrol,$da_date,$api_version,$master,$token,$master_key,$da_date); //The function that does the magic. All variables are defined above and in the functions file
?>
