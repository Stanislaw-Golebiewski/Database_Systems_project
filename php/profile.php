<?php
session_start();
if($_SESSION["user_role"] == "PACKER"){
	header("location: ../pages/packer_shipments.php");
}
if($_SESSION["user_role"] == "MANAGER"){
	include("get_warehouse_id_for_session.php");
	header("location: ../pages/manager_packers.php");
}
if($_SESSION["user_role"] == "DRIVER"){
	header("location: ../pages/driver_shipments.php");
}
?>
<!DOCTYPE HTML>
<html>
<body>

<h1><?php echo "ID: ".$_SESSION["user_id"]."<br>Redirect to: ".$_SESSION["user_role"]?></h1>

</body>
</html>
