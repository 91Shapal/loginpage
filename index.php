    <!DOCTYPE html>   
    <html>   
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Aidin</title>  

    </head>    
    <body>    
        <style>   
    body {  
      font-family: Calibri, Helvetica, sans-serif;  
      background-color: pink;  
    }  
    button {   
           background-color: #4CAF50;   
           width: 100%;  
            color: orange;   
            padding: 15px;   
            margin: 10px 0px;   
            border: none;   
            cursor: pointer;  
             font-size: 30px; 
             
             }   
     form {   
            border: 3px solid #f1f1f1;   
        }   
     input[type=text], input[type=password] {   
            width: 100%;   
            margin: 8px 0;  
            padding: 12px 20px;   
            display: inline-block;   
            border: 2px solid green;   
            box-sizing: border-box;   
        }  
     button:hover {   
            opacity: 0.7;   
        }   
      .cancelbtn {   
            width: auto;   
            padding: 10px 18px;  
            margin: 10px 5px;  
        }   
            
         
     .container {   
            padding: 25px;   
            background-color: lightblue;  
        }   
    </style>   

    <script>function checkValid() {
             let name = document.getElementById('fname');
             let password = document.getElementById('password');
             if(name.value == 'Aidin' && password.value == '123')
             {
                 window.location.href = "https://shapal77.herokuapp.com";
                pageRedirect();
             }else{
                 alert('Invalid');
             }
            }
            function pageRedirect() {
                window.location.href = "https://shapal77.herokuapp.com";
            }
        </script>
        <center> <h1> Student Login Form </h1> </center>   
        <form>  
            <div class="container">   
                <label>Username : </label>   
                <input type="text" placeholder="Enter Username" id = "fname" name="username" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" id ="'password" name="password" required>  
                <button type="submit" onClick='checkValid();'>Login</button>   
            </div>   
        </form>     
    </body>     
    </html>  
