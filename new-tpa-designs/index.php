<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Pro Academy | Home</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="./Assets/css/style.css">
    <link rel="stylesheet" href="./Assets/css/login.css">
    <link href="https://fonts.cdnfonts.com/css/amsterdam-2" rel="stylesheet">

    <!-- BOOTSTRAP CSS/JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="d-flex flex-column justify-content-between">
    
    <header>
        <div id="header">
            <div class="container  px-3 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="navbar-brand d-block d-lg-none" href="#">
                            <a href="#"><h2 class="logo center-logo"><img src="./assets/img/logo-removebg-preview.png" width="100px" alt="Brand Logo"></h2></a>
                    </div>
                    <button class="navbar-toggler navbar_toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faq.html">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="pages.html">Pages</a>
                            </li>
                        </ul>
                        <div class="navbar-brand d-none d-lg-block" href="./index.html">
                            <a href="#"><h2 class="logo center-logo"><img src="./assets/img/logo-removebg-preview.png" width="100px" alt="Brand Logo"></h2></a>
                        </div>
                        <ul class="navbar-nav navbar-nav-bottom">
                            <li class="nav-item d-flex align-items-center">
                                <a class="nav-link" href="./index.php">Login</a>
                            </li>
                            <li class="nav-item nav-item-btn">
                                <a class="nav-link custom-btn-white" href="./registration.php">create Account</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="px-3 px-lg-0">
        <section class="login-container py-5">
            <div class="container">
                <div class="row login-container-row">
                    <div class="col col-login-form">
                        <div class="login-form-box">
                            <div class="title-heading">
                                <h2>Welcome Back!</h2>
                                <h2>Please Login To Your Account</h2>
                            </div>
                            <div class="google-btn">
                                <button id="google-btn"><img src="https://img.icons8.com/color/48/null/google-logo.png" width="30px"/>Login With Google</button>
                            </div>
                            <form action="" method="post" class="login-form">
                                <div class="form-input-field">
                                    <label for="input-field">Email/Username</label>
                                    <input type="text" id="input-field">
                                </div>
                                <div class="form-input-field">
                                    <label for="input-field">Password</label>
                                    <input type="password" id="input-field">
                                </div>
                                <div class="form-wrap form-wrap-options">
                                    <a href="#" class="forgot-btn">Forgot Password?</a>
                                    <div class="form-checkbox">
                                        <input type="checkbox" id="rememberMe" name="rememberMe" value="true">
                                        <label for="rememberMe">Remember Me</label>
                                    </div>
                                </div>
                                <div class="form-login-btn">
                                    <button class="btn-login">Login</button>
                                    <button class="btn-signUp">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>  
                    <div class="col col-banner-img">
                        <div class="banner-box">
                            <h2 class="box-title-heading">Getting Started</h2>
                            <h2 class="box-title-heading">EXCEL IN YOUR</h2>
                            <h2 class="box-title-heading">CARRER</h2>
                            <div class="divider"></div>
                            <p class="box-sub-heading">CREATE YOUR OWN STUDY RESOURCES AND UTILIZE
                                OUR PERSONALIZED TOOLS TO HELP YOU LEARN!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-container">
            <p>© 2022 All Rights Reserved. Talent Pro Academy</p>
        </div>
    </footer>
</body>
</html>