<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Login Form</title>
    <!----CSS link----->
    <link rel="stylesheet" href="style_login.css"> 
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
      <h2>LOGIN FORM</h2>
      <form action="">
        <div class="inputBx">
          <input type="text" required="required">
          <span>Mobile Number</span>
          
        </div>
        <div class="inputBx password">
          <input id="password-input" type="password" name="password" required="required">
          <span>Password</span>
          <a href="#" class="password-control" onclick="return show_hide_password(this);"></a>
          
        </div>
        <label class="remember"><input type="checkbox">
          Remember
        </label>
        <div class="inputBx">
          <input type="submit" value="Log in" disabled> 
        </div>
      </form>
      
      <p>Don't have an account <a href="register%20(2).php">Register Here</a></p>
      <p>Go Back To Home  <a href="index.php">Home</a></p>
    </div>
  </div>
    
  </div>
</section>

<!---JS CDN Link---->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Custom JS File-->
<script>
    function show_hide_password(target){
    var input = document.getElementById('password-input');
    if (input.getAttribute('type') == 'password') {
        target.classList.add('view');
        input.setAttribute('type', 'text');
    } else {
        target.classList.remove('view');
        input.setAttribute('type', 'password');
    }
    return false;
}
</script>

</body>
</html>