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
                    <form action='/action_page.php'>
                        <div class='input-container'>
                            <i class='fa fa-user icon'></i>
                            <input class='input-field' type='text' placeholder='Username' name='username'>
                        </div>
                        <div class='input-container'>
                           <i class='fa fa-lock icon'></i>
                            <input class='input-field' type='password' placeholder='Password' name='password'>
                        </div>
                      
                        <div>
                        <label>
                               
                        Forgot password?
                        
                        </label>
                        <button  type='submit' class='btn'>
                           SIGN IN
                        </button>
                        </div>


                        </form>
                        </div>
                  <div class='line'>
                    </div>   
                    <div class='col'>
                      
                    <div class='logo'>
                    LOGO
                    </div>

                    </div>
                </div>
           </section>
     </div>      
     ";
    ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script></script>
</body>
</html>



