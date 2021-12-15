<?php
    require_once('connection.php');
    if(isset($_POST['register']))
    {
        $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $selecta=mysqli_real_escape_string($con,$_POST['selecta']);
        $sql = "INSERT INTO demo (mobile,password,selecta) VALUES ('$mobile','$password','$selecta')";
        $result = mysqli_query($con, $sql);

    if($result)
    {
        echo 'Your record is saved';
    }
    else
    {
        echo 'Your record is saved';
    }
        
    }


?>
