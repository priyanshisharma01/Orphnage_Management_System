<?php
    require_once('connection_contact.php');
    if(isset($_POST['contact']))
    {
        $name=mysqli_real_escape_string($con1,$_POST['name']);
        $mobile=mysqli_real_escape_string($con1,$_POST['mobile']);
        $email=mysqli_real_escape_string($con1,$_POST['email']);
        $message=mysqli_real_escape_string($con1,$_POST['message']);
        
        $sql = "INSERT INTO demo_contact (name,mobile,email,message) VALUES ('$name','$mobile','$email','$message')";
        $result = mysqli_query($con1, $sql);

    if($result)
    {
        echo 'Your record is saved';
    }
    else
    {
        echo 'Your record is not saved';
    }
        
    }


?>
