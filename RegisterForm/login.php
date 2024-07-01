<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>RentEase | Login Page</title>
</head>
<body>
    <div class="container">
        <div class="welcome image"></div>
        <div class="welcome">
            <form action="#" class="form">
                <div class="span">
                    <span>Welcome back &#9995;</span>
                
                </div>
                <h3>Login your account</h3>
               <div class="input-field">
                <label>Username</label>
                <input type="text" placeholder="Enter your firstname" name="firstname" required>
                
               </div>
               <div class="input-field">
                <label>Password</label>
                <input type="password" value=""  name="password" id="showpswd" required>
               </div>
              <div class="field">
                <input type="checkbox" onclick="showPass()"> 
                <p>Show password</p>
               
              </div>
              
                <input type="submit" value="Login" name="submit">
                <div class="input-field">
                    <a href="../RegisterForm/reg.php">Create Account</a>
                   </div>
            </form>
        </div>
        
    </div>
    
</body>
<script>
    const show = document.getElementById("showpswd");

    function showPass()
    {
        if(show.type === "password")
        {
            show.type = "text";
        }
        else
        {
            show.type = "password";
            
        }
    }
</script>
</html>