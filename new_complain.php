<?php
    require_once('connection_complain.php');
    if(isset($_POST['complain']))
    {
        $name=mysqli_real_escape_string($con1,$_POST['name']);
        $mobile=mysqli_real_escape_string($con1,$_POST['mobile']);
        $orphnage	=mysqli_real_escape_string($con1,$_POST['orphnage']);
        $com=mysqli_real_escape_string($con1,$_POST['com']);
        
        $sql = "INSERT INTO demo_complain (name,mobile,orphnage,com) VALUES ('$name','$mobile','$orphnage','$com')";
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
