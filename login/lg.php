<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>
<body>
    <!-- Form without bootstrap -->
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-action-left">
                <div class="auth-form-outer">
                    <h2 class="auth-form-title">
                        Login
                    </h2>
                    <div class="auth-external-container">
                        <div class="auth-external-list">
                            <ul>
                                <li><a href="https://accounts.google.com/"><i class="fa fa-google"></i></a></li>
                                <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <p class="auth-sgt">or sign in with:</p>
                    </div>
                    <form class="login-form" >
                        <input type="email" class="auth-form-input" placeholder="Email" required name="email">
                        <div class="input-icon">
                           <input type="password" class="auth-form-input" placeholder="Password" name="password" minlength="8" maxlength="15" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" required title="Password must contain at least 8 characters including 1 uppercase, lowercase and number!!!" />    
                           <i class="fa fa-eye show-password"></i>             
                        </div>
                        <label class="btn active">
                            <input type="checkbox" name='email1' checked>
                            <i class="fa fa-square-o"></i><i class="fa fa-check-square-o"></i> 
                            <span> Remember password.</span>
                        </label>
                        	 
                        <div class="footer-action">
                            <input type="submit" value="Login" class="auth-submit" >         
                            <a href="register.php" class="auth-btn-direct">Sign Up</a>
                          
                        </div>
                    </form>
                    <div class="auth-forgot-password">
                        <a href="#">Forfot Password</a>
                    </div>

                </div>
            </div>
            <div class="auth-action-right">
                <center>
                <div class="auth-image">
                    <img src="assets/vector.jpg" alt="login">

                </div>
</center>
            </div>
        </div>
    </div>
    <script src="js/common.js"></script>
</body>
</html>