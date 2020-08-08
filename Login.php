<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="login/style.css" type="text/css">
    </head>
    <body>
    <div class="Sign In" >
      <form id="Login" action="validation.php" method="POST">
        <h1><bl>Student Login</bl></h1>
                <div class="textbox" >
      <input type="num" name="id" id="uid" placeholder="ID" required> <br><br>
        </div>
                                    <div class="textbox" >

        <input type="password" name="password" id="password" placeholder="Password" required> <br><br>
                                              
        </div>
           
                  
        <input type="submit" value="Sign In"> 
        <br><br>
        <div id="container">
            Don't have account?<a href="signup.php" >&nbsp;Sign UP</a> 
        
        </div>
</form>
        </div>
    </body>
</html>
       
       
       
       
       
       
       