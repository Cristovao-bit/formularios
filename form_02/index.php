<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Form Login and Register</title>
        <link rel="stylesheet" href="_css/boot.css"/>
        <link rel="stylesheet" href="_css/style.css"/>
    </head>
    <body>

        <div class="form">

            <ul class="tab-group">
                <li class="tab active"><a href="#!">Sign Up</a></li>
                <li class="tab"><a href="#!">Log In</a></li>
            </ul>

            <div class="tab-content">
                <div id="signup">
                    <h1>Sign Up For Free</h1>

                    <form method="post" action="">
                        <div class="top-row">
                            <div class="field-wrap">
                                <label>
                                    First Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off"/>
                            </div>

                            <div class="field-wrap">
                                <label>
                                    Last Name<span class="req">*</span>
                                </label>
                                <input type="text" required autocomplete="off"/>
                            </div>
                        </div> 

                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" required autocomplete="off"/>
                        </div>
                        
                        <div class="field-wrap">
                            <label>
                                Set a Password<span class="req">*</span>
                            </label>
                            <input type="password" required autocomplete="off"/>
                        </div>
                        
                        <button type="submit" class="button button-block">Get Started</button>
                    </form>
                </div>
                
                <div id="login">
                    <h1>Welcome Back!</h1>
                    
                    <form method="post" action="">
                        <div class="field-wrap">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <input type="email" required autocomplete="off"/>
                        </div>
                        
                        <div class="field-wrap">
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <input type="password" required autocomplete="off"/>
                        </div>
                        
                        <p class="forgot"><a href="#!">Forgot Password?</a></p>
                        
                        <button type="submit" class="button button-block">Log In</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="_js/jquery.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
