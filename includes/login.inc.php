<?php
    include_once 'dbh.inc.php';

    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        
        $sql = "select user_email, user_pwd from users";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        
        if($resultCheck > 0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                if($email == $row['user_email'] && $pwd == $row['user_pwd'])
                {
                    header("Location: ../index.html");
                }
                else
                {
                    header("Location: https://www.facebook.com/");
                }
            }
        }
    }
?>