<?php
    require_once('connection_donate.php');
    if(isset($_POST['donatee']))
    {
        $fname=mysqli_real_escape_string($con1,$_POST['fname']);
        $lname=mysqli_real_escape_string($con1,$_POST['lname']);
        $donate=mysqli_real_escape_string($con1,$_POST['donate']);
        $mobile=mysqli_real_escape_string($con1,$_POST['mobile']);
        $email=mysqli_real_escape_string($con1,$_POST['email']);
        
        
        $sql = "INSERT INTO demo_donate (fname,lname,donate,mobile,email) VALUES ('$fname','$lname','$donate','$mobile','$email')";
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
