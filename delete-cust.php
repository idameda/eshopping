<?php
require 'conn.php';

$idcustomer = $_GET['idcustomer'];
$sql = "DELETE FROM customer WHERE idcustomer = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idcustomer);
$stmt->execute();
$stmt->close();

header('location: senarai-cust.php?menu=senarai');