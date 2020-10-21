<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('mysqlConn.php');
           
        
        $firstn = $lastn = $method = '';
        $firstn = $_POST['firstn']; 
        $lastn = $_POST['lastn'];
        $method = $_POST['method'];
       
        
        if(empty($firstn)){  // if firstname is empty
            $error[] = "Enter First Name"; 
        }
       
        if(empty($lastn)){ // if Lasttname is empty
            $error[] = "Enter Last Name"; 
        }

        // if everthing is correct
        if(empty($error)){
             
            $_SESSION['Book_id']=$id; // stroing session id into variable

            //  inserting data in a database
            $q =  "INSERT INTO `orders`(`first_name`, `last_name`, `method_of_pay`, `Book_id`) VALUES ('$firstn','$lastn','$method','$id')";

            if ($dbc->query($q) === TRUE) {
                echo 'Your order has been confirmed';
            }else{
                echo "Error: " . $sql . "<br>" ;
            }

            // updating the quantity of the books in the database
            $sql1 = "SELECT Quantity FROM bookinventory WHERE Book_id = $id";
            $result = $dbc->query($sql1);
            $row = $result->fetch_assoc();
            $quantity = intval($row['Quantity'])-1;
            
            // for setting the quantity in the books table
            $a ="UPDATE bookinventory SET Quantity = '$quantity' WHERE bookinventory.Book_id = '$id'";
            $dbc->query($a);
        }
}
    
?>
</body>
</html>