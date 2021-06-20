<?php 
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang ="en">
  <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>ESS</title>
        
</head>
<body>
    <div class="topnav">

     <a href="senarai.php">Catalog Details</a>
    
     <a class="active" href="senarai-order.php">Order Details</a>
    
     <a href="senarai-cust.php">Customer Details</a>
    
     <a href="index.php">Logout</a>
    
    </div>
    
    <?php include "indexstaff.php"; ?>
    
    <h1>Order Details</h1>
        <table border="1">
            <tr>
                <th>Bil</th>
                <th>ID Order Details</th>
                <th>ID Order</th>
                <th>ID Catalog</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php
            $bil = 1;
            $sql = "SELECT * FROM orderdetails ORDER BY idorderdetail";
            $result = $conn->query($sql);
            while ($row = $result->fetch_object()) {
                ?>
                <tr>
                    <td><?php echo $bil++; ?></td>
                    <td><?php echo $row->idorderdetail; ?></td>
                    <td><?php echo $row->idorders; ?></td>
                    <td><?php echo $row->idcatalog; ?></td>
                    <td><?php echo $row->quantity; ?></td>
                    <td>                |
                        <a href="editorder.php?idorderdetail=edit&idcatalogr=<?php echo $row->idorderdetail; ?>">Edit</a>
                        |
                        <a href="deleteorder.php?idorderdetail=<?php echo $row->idorderdetail; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>


    <footer style="background-color: #d99393"></footer>
  </body>
</html>