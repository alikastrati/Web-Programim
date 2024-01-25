<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">



    <!-- FONTSs -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>



    <a href="/Web-Programim/src/index.php" style="margin-top: -550px;margin-right: -60px; text-decoration: none; color: #FFF;"><p style="width: 80px;">< Home</p></a>
    <div class="wrapper">
        <form action="/Web-Programim/phpDatabase/process_login.php" method="post">

            <div class="page-buttons">
                <button type="submit"><a href="/Web-Programim/register-login/LoginForm.php">LOG IN</a></button>
                <button type="submit" id="registerButton"><a href="/Web-Programim/register-login/RegistationForm.php">REGISTER</a></button>
            </div>

            <div class="container">
                <div class="left-section">
                    <div class="log-in">
                        <h1 id="header-login" style="margin-bottom: -5px;">
                            <span style="color: #FFF;font-size: 30px;">LOG</span>
                          <span style="color: #A98F76; margin-left:-10px ; font-size: 30px;">IN</span>
                        </h1>
                    </div>
                    
        
        
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Email" required>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="password" placeholder="Password" required>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="submit-section">
                        <input type="checkbox"><span style="color: #FFF; margin-left: 15px;">I agree to the terms and conditions</span>
                        <div class="button">
                            <button type="submit" class="btn" id="loginButton">Login</button>
                        </div>
                    </div>
                    
                </div>

                
                <div class="right-section">
                    <div class="social-icons">
                        <h2>Get Connected With</h2>
                        <a href="https://mail.google.com/" target="_blank"><img src="/register-login/imgs-loginform/gmail.png" alt="gmail"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="/register-login/imgs-loginform/fb.png" alt="facebook"></a>
                        <a href="https://twitter.com/" target="_blank"></a>
                        <img src="/register-login/imgs-loginform/x.png" alt="x">
                    </div>
                </div>
            </div>
           

           
           
        </form>
    </div>
</body>
</html>