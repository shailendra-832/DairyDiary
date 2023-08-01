 <?php
        if( isset($_COOKIE["username"]))
          header("location: milk.php");
  ?>
<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html  style="background-color: rgb(240,240,255);">
<head>
  <title>DairyDiary - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">

                <form action="login-user.php" method="POST" autocomplete="">
                     <div class="logo">
                <center><img src="s.png" alt="Dairy" style="width:300px"></center>
            </div>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <br>
                    <div class="form-group">
                        <input class="form-control" type="text" name="user" placeholder="Username" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                   <div class="OR">
                <div class="line"></div>
                <center><p>-----------------OR-------------------</p></center>
                <div class="line"></div>
            </div>
            <div class="dif">
                <div class="link forget-pass text-left"><center><a href="forgot-password.php">Forgot password?</a></center></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                   <div class="link login-link text-center">Don't have an account? <a href="signup-user.php">Create One</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>