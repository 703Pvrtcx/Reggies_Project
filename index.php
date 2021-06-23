<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Login form</title>
  <link href="style.css" rel="stylesheet"/>
</head>
<body>

<?php
     echo "
     <div id='login-container'> 
           <section>      
                <div class='row'>
                    <div class='col'>
                       <div class='input-container'>
                            <i class='fa fa-user icon'></i>
                            <input class='input-field' type='text' placeholder='Username' name='username'>
                        </div>
                        <div class='input-container'>
                           <i class='fa fa-lock icon'></i>
                            <input class='input-field' type='password' placeholder='Password' name='password'>
                        </div>
                    </div>
                    
                    <div class='col'>
                           
                    <div class='logo'>LOGO</div>
                    </div>
                </div>
           </section>
     </div>      
     ";
    ?>

<form action="/action_page.php">
  <h2>Register Form</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

  <button type="submit" class="btn">Register</button>
</form>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script></script>
</body>
</html>



