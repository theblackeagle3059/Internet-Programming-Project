<?php
        include_once 'dbh.inc.php';

        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $mobile = $_POST['Mobile'];
        $NID = $_POST['NID'];
        $Address = $_POST['Address'];
        
        $sql = "insert into customer(Customer_NID, FirstName, Email, Address, Mobile Number, Password, LastName)
                values('$NID','$first','$email', '$Address', '$mobile', '$pwd', '$last')";
        mysqli_query($conn, $sql);

        header("Location: ../LoginSuccess.html?signup = success")
?>