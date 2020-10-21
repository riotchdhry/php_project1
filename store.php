<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}
td{
    font-style: italic;
}

tr:hover {background-color:#f5f5f5;}
th {
  background-color: dimgrey;
  color: white;
}

    </style>
    
<body>
    <?php
    
    require('nav.php');
    
    require('mysqlConn.php'); // including connection
    session_start();

   
    
    $sql = "SELECT * FROM `bookinventory`"; // display all data
    $result = $dbc->query($sql);
    echo '<table width="60%">';
    echo "<th>Book Name</th>";
    echo "<th>Price</th>";
    echo "<th>Image</th>";
    echo "<th>Checkout</th>";

    if ($result->num_rows > 0) { // checks count of records
        
            while($row = $result->fetch_assoc()){ // fetch all the data
                echo "<tr><td>". $row["Book_name"]. "</td><td>" . $row["Price"] . " </td><td><img src= 'images/".$row["Image"]."
                'width='150' height='150'></img></td> 
                <td> <a href = 'checkout.php?Book_id=".$row["Book_id"]."'>"."<button>Buy Now</button>"."</a></td></tr>";
            }
        } else { // if no data found
        echo 'No books found';
        }

        echo '</table>';

 
    
    ?>
</body>
</html>