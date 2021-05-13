<!DOCTYPE html>
<html lang="en">

<head>
    <title>VIT AP Hostel Management</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="Art Sign Up Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates,
		Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>


<body style="background-color: #730f17;">
    <img width="200px" height="120px" src="https://vitap.ac.in/wp-content/themes/vit/assets/images/formlogo.png" alt="" style="width: 225px !important; height: 100px !important; padding-left: 605px !important;" >
    <h1 style="padding-top: 15px !important;">Hostel Room Allocation</h1>
    <div class=" w3l-login-form">
        <h2>Student Login</h2>
        <form action="includes/login.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student Roll No:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
            <!--<div class="forgot">
                <a href="#">Forgot Password?</a>
                <p><input type="checkbox">Remember Me</p>
            </div>-->
            <button type="submit" name="login-submit">Login</button>
        </form>

        <p class=" w3l-register-p">Creat a new Account <a href="signup.php" class="register"> Sign up</a></p>
    </div>
    <footer style="padding-bottom: 0px !important;">
        <p class="copyright-agileinfo"> &copy; 2021 DBMS Project.  Design by <a href="https://www.linkedin.com/in/gauravreddy08/">Gaurav Reddy</a></p>
    </footer>

</body>

</html>
