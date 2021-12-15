<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVASCRIPT FORM</title>
    <link rel="stylesheet" type="text/css" href="adopt_form.css">
    <script>
        function validateForm(){
    var name=document.forms["regform"]["name"].value;
    var child_name=document.forms["regform"]["child_name"].value;
    var orphnage=document.forms["regform"]["orphnage"];
    var gender=document.forms["regform"]["gender"];
    var mobile=document.forms["regform"]["mobile"].value;
    var email=document.forms["regform"]["email"].value;
    var address=document.forms["regform"]["address"].value;

    if(name==null||name==""){
        alert("First name cannot be blank");
        return false;

    }
    else if(child_name==null||child_name==""){
        alert("child name cannot be blank");
        return false;

    }
    else if((gender[0].checked==false)&&(gender[1].checked==false)){
        alert("Please enter your gender");
        return false;

    }
    }


    </script>
    
</head>
<body>
    <div id="particles-js">
        <section>
            <div id="text">
                <h1>
                    “Family is not defined by our genes, it is built and maintained through love.”
                </h1>
                
            </div>
        </section>
        
            
        <div id="form" >
        <h2>FILL THE FORM TO ADOPT A CHILD</h2>
        
            
        <form action= "new_adopt.php" name="regform" method="post" autocomplete="off" onsubmit="validateForm()">
            
        <label for="name">YOUR NAME</label>
        <input type="text" id="name" name="name" placeholder="Enter Your Name">
            
        
        <label for="child_name">CHILD NAME</label>
        <input type="text" id="child_name" name="child_name" ><br>
            
        <label for="orphnage">Orphanage</label>    
        <input type="text" id="orphnage" name="orphnage" >
        
            
        <label>GENDER</label><br/><br>
        <input type="radio" id="male" value="male" name="gender" size="10">
        <label for="male">Male</label>
        <input type="radio" id="female" value="female" name="gender" size="10">
        <label for="female">Female</label><br><br>
            
        <label for="reason">Why you want to adopt a child?</label><br>
        <input type="text" id="reason" name="reason" placeholder="Give us reason">
            
        <label for="mobile">Mobile No.</label>
        <input type="text" id="mobile" name="mobile" placeholder="Enter Phone Number">
            
        <label for="email">Email id</label>
        <input type="text" id="email" name="email" placeholder="xyz@abc.com">
        
        <label for="address">Address</label>
        <input type="text" id="address" name="address" placeholder="Your Address">
            
        <input type="submit" name="adopt" value="Submit">
        


        </form>
    </div>
            
        
</div>

<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
    
</body>

</html>