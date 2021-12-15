<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVASCRIPT FORM</title>
    <link rel="stylesheet" type="text/css" href="donate_form.css">
    <script>
    function validateForm(){
    var fname=document.forms["regform"]["firstname"].value;
    var lname=document.forms["regform"]["lastname"].value;
    

    if(fname==null||fname==""){
        alert("First name cannot be blank");
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
                <button type="submit" value="Submit"  onclick="window.location.href='index_top.php'">View top orphnages</button>
                
            </div>
        </section>
        
            
        <div id="form" >
        <h2>FILL THE FORM TO DONATE</h2>
        
            
        <form action="new_donate.php" name="regform" method="post" autocomplete="off" onsubmit="validateForm()">
        <label for="fname">FIRST NAME</label>
        <input type="text" id="fname" name="fname" placeholder="Enter First Name">
        <label for="lname">LAST NAME</label>
        <input type="text" id="lname" name="lname" placeholder="Enter Last Name"><br>
        <label>GENDER</label><br/><br>
        <input type="radio" id="male" value="male" name="radio" size="10">
        <label for="male">Male</label>
        <input type="radio" id="female" value="female" name="radio" size="10">
        <label for="female">Female</label><br><br>
        <label for="donate">In what way you want to help?</label><br>
        <select id="donate" name="donate">
            <option value="default">Donate</option>
            <option value="Education">Education</option>
            <option value="Medical Aid">Medical Aid</option>
            <option value="Food">Food</option>
            <option value="Medication">Medication</option>
            <option value="Clothes">Clothes</option>
            
        </select>
        <label for="mobile">Mobile No.</label>
        <input type="text" id="mobile" name="mobile" placeholder="Enter Phone Number">
    
        
        <label for="email">Email id</label>
        <input type="text" id="email" name="email" placeholder="xyz@abc.com">
        <input type="submit" value="Submit" name="donatee">
        


        </form>
    </div>
            
        
</div>

<script type="text/javascript" src="js/particles.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
    
</body>

</html>