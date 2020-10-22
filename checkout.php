<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</head>
<style>

    
    
form{
    text-align :center;
}

.panel-title {display: inline;font-weight: bold;}
.panel-default { margin-left: auto;}
    

</style>
<?php
        require('nav.php');
        session_start();
        
        $id = $_REQUEST['Book_id']; // geting id
        $_SESSION["Book_id"] = $id;
        require('payment.php');
        // getting access of that file
    ?>

    <!-- making a form -->
    <br>
    <br>
    
        <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Payment Details
                    </h3>
                </div>
                <div class="panel-body">
                    <form  class="form" action="" method="POST"> <!-- creating form -->
                <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="firstn">FirstName: </label>
     <input type="text" name="firstn" ><br><br>
                                    </div>
                                <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="lastn">LastName: </label>
     <input type="text" name="lastn" ><br><br>
                                    </div>
                            </div>                        
                        </div>
    </div>
                        
                        
                <input type="radio" name="method" <?php if (isset($method) && $method=="Cash On Delivery") echo "checked";?> value="Cash On Delivery">Cash On Delivery<br>
                <input type="radio" name="method" <?php if (isset($method) && $method=="Debit Card") echo "checked";?> value="Debit Card">Debit Card<br>
                <input type="radio" name="method" <?php if (isset($method) && $method=="Credit Card") echo "checked";?> value="Credit Card">Credit Card<br>
        
                <input type="radio" name="method" <?php if (isset($method) && $method=="Master Card") echo "checked";?> value="Master Card">Master Card
                <br><br>
        <input class="button" type="submit" name="submit" value="Checkout">
    </form>
   
</body>
</html>