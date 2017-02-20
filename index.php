<?php
echo "asadAD12123221";
$con = mysqli_connect('trident1.database.windows.net,1433','trident','password@123','database_azure');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
	echo "connect";
}
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:trident1.database.windows.net,1433; Database = database_azure", "trident", "password@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "trident@trident1", "pwd" => "password@123", "Database" => "database_azure", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:trident1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


if (!$conn) {
    die('Could not connect11111 ');
}
else{
	echo "connect11111";
}

?>
