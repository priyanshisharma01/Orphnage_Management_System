
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Complain Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="complain.css"> 
    <script>
    function validateForm(){
    
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile= document.getElementById("mobile").value;
    var com = document.getElementById("com").value;
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
         
      <h2>COMPLAIN FORM</h2>
      <form action="new_complain.php" name="regform" method="POST" autofill="off" autocomplete="off"  onsubmit="validateForm()" class="login-email">
        
        <div class="name">
          <input id="name" type="text" name="name" required="required">
          <span>Name</span> 
        </div>
        <div class="mobile">
          <input id="mobile" type="text" required="required" name="mobile" maxlength="10" minlength="10">
          <span>Mobile Number</span>
          
        </div>
          <div class="orphnage">
          <input id="orphnage" type="text" required="required" name="orphnage" maxlength="10" minlength="10">
          <span>Orphnage name</span>
          
        </div>
        
        <div class="email">
          <input id="email" type="email" name="email" required="required">
          <span>Email </span>
          
        </div>

        <div class="message">
          <input id="com" type="text" name="com" required="required">
          <span>Write Your Complain </span>
          
        </div>

        <div class="inputBx">
          <input type="submit" name="complain" value="Submit"> 
        </div>
      </form><br>
      <h2>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email</h2>
        
      <p>James Church, New Church Rd&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orphnage@gmail.com </p>
         <p>Opp. St, Kashmere Gate</p>
         <p>New Delhi, Delhi 110006</p><br>
         
      <h1>Go Back To Home  <a href="index.php">Home</a></h1>
    </div>
  </div>
    
  </div>
</section>

<!---JS CDN Link---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Custom JS File-->

</body>
</html>