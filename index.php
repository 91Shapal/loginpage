<!DOCTYPE html>    
<html>    
<head>    
    <title>Login </title>    
    <link rel="stylesheet" type="text/css" href="css/style.css">    
</head> 
<center>
<body>    
    <h2>Login </h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="fname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" id = 'password'name="Pass"  placeholder="Password">    
        <br><br>    
        <input type="button" onClick="checkValid();" name="log" id="user" value="Log In Here">       
         <input type="button" name="log" id="pass" value="Forgot?">       
        <br><br>    
     
  
        
   
    </form>     
</div>  
    <script>function checkValid() {
             let name = document.getElementById('fname');
             var password = document.getElementById('password');
             if(name.value == 'aidin' && password.value == '123')
             {
                pageRedirect();
             }else{
                 alert('Incorrect login or password');
             }
            }
            function pageRedirect() {
                window.location.href = 'https://shapal77.herokuapp.com/';
            }</script>
</body>    
</center>
</html>
