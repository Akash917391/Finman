<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finman</title>
    <link rel="stylesheet" href="login.css">
</head>

<body class="login1">
    
    <div class="logo">
    <img src="./img/logo.png" alt="logo" width="30px" height="30px">
    <h2 class="head-name">FINMAN</h2>
  </div>
    <div class="login-container">
        <div class="login-content">
            <div class="login">
                <h2 class="log">LOGIN</h2>
            </div>
            <div class="form-detail">
                <form action="login.php" method="post" class="form-login">
                    <div class="email-id">
                        <label for="email" class="email-txt">Email:</label>
                        <input type="email" class="email-input" name="email" placeholder="Enter Email" id="email" required>
                    </div>
                    <div class="password">
                        <label for="password" class="password-txt">Password:</label>
                        <input type="password" class="password-input"placeholder="Enter Password" name="password" id="password" required>
                    </div>
                    <div class="submit-button">
                    <button class="submit-btn">Submit</button>
                    </div>
                    <div class="redirect-login">
                        <a href="register.html" class="create-acc">
                            Create An Account
                        </a>
                        <a href="#forgot" class="forgot-pass">
                            Forgot Password
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
