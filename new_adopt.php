<?php
    require_once('connection_adopt.php');
    if(isset($_POST['adopt']))
    {
        $name=mysqli_real_escape_string($con1,$_POST['name']);
        $child_name=mysqli_real_escape_string($con1,$_POST['child_name']);
        $orphnage=mysqli_real_escape_string($con1,$_POST['orphnage']);
        $gender=mysqli_real_escape_string($con1,$_POST['gender']);
        $mobile=mysqli_real_escape_string($con1,$_POST['mobile']);
        $email=mysqli_real_escape_string($con1,$_POST['email']);
        $address=mysqli_real_escape_string($con1,$_POST['address']);
        
        $sql = "INSERT INTO adopt_demo (name,child_name,orphnage,gender,mobile,email,address) VALUES ('$name','$child_name','$orphnage','$gender','$mobile','$email','$address')";
        $result = mysqli_query($con1, $sql);

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
