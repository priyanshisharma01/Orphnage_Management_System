
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Contact Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="style_contact.css"> 
    <script>
    function validateForm(){
    
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile= document.getElementById("mobile").value;
    var message = document.getElementById("message").value;
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
         
      <h2>CONTACT FORM</h2>
      <form action="new_contact.php" name="regform" method="POST"  onsubmit="validateForm()" class="login-email">
        
        <div class="name">
          <input id="name" type="text" name="name" required="required">
          <span>Name</span> 
        </div>
        <div class="mobile">
          <input id="mobile" type="text" required="required" name="mobile" maxlength="10" minlength="10">
          <span>Mobile Number</span>
          
        </div>
        
        <div class="email">
          <input id="email" type="email" name="email" required="required">
          <span>Email </span>
          
        </div>

        <div class="message">
          <input id="message" type="text" name="message" required="required">
          <span>Write Us Message </span>
          
        </div>

        <div class="inputBx">
          <input type="submit" name="contact" value="Submit"> 
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