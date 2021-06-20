<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESS</title>
</head>

<style>
body {
  background-color: white;
  font-family: sans-serif;
    font-weight: 300;
    font-size: 10px;
    line-height: 1.45;
    color: black;
}
  
  h1 {
    font-size: 4em;
    text-transform: uppercase;
    margin: 0;
}

  h2 {
    font-size: 3.5em;
    text-transform: uppercase;
    margin: 0;
}
 h3 {
    font-size: 3em;
    text-transform: uppercase;
    margin: 0;
}

h4 {
    font-size: 2.4em;
    font-weight: 300;
    line-height: 1.5;
}

h5 {
    font-size: 1.8em;
    font-weight: 200;
     line-height: 0;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 15%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #white;
}

</style>

<body> 
<center>
      <h1>
          E-SHOPPING SISTEM (ESS)
        </h1>
        
        <h3>LOGIN</h3>
         
      <form name="login" action="" method="post">

<h5>Username: <input type="text"  name="username" placeholder = "Username"/></h5>
<h5>Password : <input type="text" name="pass" placeholder = "Password"/></h5>

<h5><input type="submit" name="submit" value="Login"/></h5>
      
      
      <hr style="width:100%;text-align:center;">
      <h1>
          PENGGUNA
        </h1>
      
      <h4>
          <a href="admin">
       1. ADMIN (AFIFAH)</a>
        <br>-Menguruskan senarai katalog
        <br>-Melihat senarai pelanggan</br></h4>
    
       <h4>
           <a href="senarai.php">
       2. STAFF (FAHMIDAH)</a>
        <br>-Menguruskan senarai pelanggan
       <br>-Melihat senarai pesanan pelanggan</br></h4>
       
       
        <a href="customer">
       <h4>3. CUSTOMER (HANIS)</a>
       <br>-Menguruskan senarai pesanan</br></h4>
       
       <hr style="width:auto;text-align:center;">
       
       <h2>
          DATABASE: ESS
        </h2>
        
        <h4>Table 1: customer
       <br> -idcustomer, username, address, phoneno, email, customerpass</br>
       
        <br> Table 2: orders
       <br> -idorder, idcustomer, date</br>
       
       <br> Table 3: orderdetails
       <br> -idorderdetail, idorder, idcatalog, quantity</br>
       
       <br> Table 4: catalog
       <br> -idcatalog, catalogname, picture, price</br>
       
       <br> Table 5: admin
        <br> -adminpass</br>
        
        <br> Table 6: staff
       <br> -staffpass</br>
       </h4>
       
       
       <h5> TABLE : CUSTOMER </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idcustomer</td>
    <td>int</td>
    <td>PK,A_I</td>
  </tr>
  <tr>
    <td>username</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
  <tr>
    <td>address</td>
    <td>varchar(50)</td>
    <td></td>
  </tr>
  <tr>
    <td>phoneno</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>email</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
  <tr>
    <td>customerpass</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
</table>
<h5> TABLE :ORDERS </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idorders</td>
    <td>int</td>
    <td>PK,A_I</td>
  </tr>
  <tr>
    <td>idcustomer</td>
    <td>int</td>
    <td>FK</td>
  </tr>
  <tr>
    <td>date</td>
    <td>date</td>
    <td></td>
  </tr>
  <br>
  </table>
  <h5> TABLE : ORDERDETAILS </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idorderdetail</td>
    <td>int</td>
    <td>PK,A_I</td>
  </tr>
  <tr>
    <td>idorders</td>
    <td>int</td>
    <td>FK</td>
  </tr>
  <tr>
    <td>idcatalog</td>
    <td>int</td>
    <td>FK</td>
  </tr>
  <tr>
    <td>quantity</td>
    <td>int</td>
    <td></td>
  </tr>
</table>
<h5> TABLE : CATALOG </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idcatalog</td>
    <td>int</td>
    <td>PK,A_I</td>
  </tr>
  <tr>
    <td>catalogname</td>
    <td>varchar(50)</td>
    <td></td>
  </tr>
  <tr>
    <td>picture</td>
    <td>blob</td>
    <td></td>
  </tr>
  <tr>
    <td>price</td>
    <td>int</td>
    <td></td>
  </tr>
</table>

<h5> TABLE : ADMIN </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>adminpass</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
  </table>
  
 <h5> TABLE : STAFF </h5>
<table>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>staffpass</td>
    <td>varchar(20)</td>
    <td></td>
  </tr>
</table>
       
   </center>  
</body>
</html>