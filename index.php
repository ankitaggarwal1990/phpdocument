<?php
echo "asadAD";
$con = mysqli_connect('127.0.0.1:49646','azure','6#vWHD_$','localdb');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
else{
	echo "connect";
}


?>
