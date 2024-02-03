<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Log In</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">



    <!-- FONTSs -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jolly-Lodger">
</head>
<body>



    <a href="/Web-Programim/src/index.php" style="margin-top: -700px;margin-right: -60px; text-decoration: none; color: #FFF; font-weight:600;"><p style="width: 80px;">< Home</p></a>
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
                            <span style="color: #FFF;font-size: 30px;">SIGN</span>
                          <span style="color: #A98F76; margin-left:-10px ; font-size: 30px;">IN</span>
                        </h1>
                    </div>
                    
        
                    <div class="input-box">
                        <div class="input-field">
                            <input type="text" name="email" placeholder="Email" required>
                        </div>
                        <div class="input-field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <?php
                            if (isset($_SESSION['login_error'])) {
                                echo '<p class="error-message" style="color: red;">' . $_SESSION['login_error'] . '</p>';
                            }
                        ?>
                    </div>
                 
                    <div class="submit-section">
                        <div class="checkbox-div">
                            <input type="checkbox" required>
                            <label for="">I Agree!</label>
                        </div>
                       
                        <div class="button">
                            <button type="submit" class="btn" id="loginButton">Login</button>
                        </div>
                    </div>
                    
                </div>

                
                <div class="right-section">
                    <div class="social-icons">
                        <h2>Get Connected With</h2>
                        <a href="https://mail.google.com/" target="_blank"><img src="/Web-Programim/register-login/imgs-loginform/gmail.png" alt="gmail"></a>
                        <a href="https://www.facebook.com/" target="_blank"><img src="/Web-Programim/register-login/imgs-loginform/fb.png" alt="facebook"></a>
                        <a href="https://twitter.com/" target="_blank"><img src="/Web-Programim/register-login/imgs-loginform/x.png" alt="x"></a>
                        
                    </div>
                </div>
            </div>
           

           
           
        </form>
    </div>
</body>
</html>