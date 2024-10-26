<?php
$con=mysqli_connect("mysql -u sgroot -p -P 3306 -h SG-neat-lupin-5378johan-10644-mysql-master.servers.mongodirector.com --ssl-mode=VERIFY_CA --ssl_ca=<Path to ca.pem file>");//connection 
if(mysqli_connect_errno())
{
	echo "error occured".mysqli_connect_errno();
}

?>
