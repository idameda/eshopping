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

     <a class="active" href="senarai.php">Catalog Details</a>
    
     <a href="senarai-order.php">Order Details</a>
    
     <a href="senarai-cust.php">Customer Details</a>
    
     <a href="index.php">Logout</a>
    
    </div>
    
    <?php include "indexstaff.php"; ?>
    
    <h1>Product Details</h1>
    <table border="1">
        <tr>
            <th>Bil</th>
            <th>ID Catalog</th>
            <th>Catalog Name</th>
            <th>Picture</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM catalog ORDER BY idcatalog";
        $result = $conn->query($sql);
        while ($row = $result->fetch_object()) {
            ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row->idcatalog; ?></td>
                <td><?php echo $row->catalogname; ?></td>
                <td><img src="<?php echo $row->picture; ?>" height="100" width="100" ></td>
                <td>RM<?php echo $row->price; ?></td>
                <td>                |
                    <a href="editstaff.php?idcatalog=edit&idcatalogr=<?php echo $row->idcatalog; ?>">Edit</a>
                    |
                    <a href="deletestaff.php?idcatalog=<?php echo $row->idcatalog; ?>">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>


    <footer style="background-color: #d99393"></footer>
  </body>
</html>