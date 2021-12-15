
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Registration Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="style_register.css"> 
    <script>
    function validateForm(){
    
    var pa = document.getElementById("password").value;
    var coPa = document.getElementById("password-con").value;
    if(pa != coPa){
        alert("Password did not match");
        return false;

    }
      }
    </script>
</head>
<body>

<section>
  
  <div class="box">
    
    <div class="square" style="--i:0;"></div>
    <div class="square" style="--i:1;"></div>
    <div class="square" style="--i:2;"></div>
    <div class="square" style="--i:3;"></div>
    <div class="square" style="--i:4;"></div>
    <div class="square" style="--i:5;"></div>
    
   <div class="container"> 
       
    <div class="form"> 
         
      <h2>REGISTRATION FORM</h2>
      <form action="new.php" name="regform" method="POST"  onsubmit="validateForm()" class="login-email">
        <div class="register_as">
          <span>Register As</span> <br>
         <select id="choose" name="selecta" required="required">
            
            <option value="Orphnage">Orphnage</option>
            <option value="Child">Child</option>
            <option value="Adopter">Adopter</option>
          </select>
          
        </div>
        <div class="name">
          <input id="name" type="text" name="Name" required="required">
          <span>Name</span> 
        </div>
        <div class="mobile">
          <input type="text" required="required" name="mobile" maxlength="10" minlength="10">
          <span>Mobile Number</span>
          
        </div>
        
        <div class="email">
          <input type="email" required="required">
          <span>Email </span>
          
        </div>

        <div class="address">
          <input type="text" required="required">
          <span>Address </span>
          
        </div>

        <div class="password" >
          <input id="password" type="text" name="password" required="required" maxlength="8" minlength="8">
          <span>Enter 8 Digit Password </span>
          
          
        </div>

        <div class="password-con" >
          <input id="password-con" type="password" required="required" maxlength="8" minlength="8">
          <span>Confirm Password</span>
          
          
        </div>

        


        <label class="remember"><input type="checkbox">
          Remember</label>
        <div class="inputBx">
          <input type="submit" name="register" value="Register"> 
        </div>
      </form>
      
      <p>Already have an account <a href="login.php">Login Here</a></p>
      <p>Go Back To Home  <a href="index.php">Home</a></p>
    </div>
  </div>
    
  </div>
</section>

<!---JS CDN Link---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Custom JS File-->

</body>
</html>