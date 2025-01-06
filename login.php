<?php 
    include("connect.php");
    include("logincode.php")
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGINt</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/loginStyles.css">
</head>
<body>
    <div class="container-fluid bg-image">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-1 col-xs-12"></div>
            <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                <!--form start-->
                  <form class="form-container" name="form" action="logincode.php" onsubmit="return isvalid()" method="POST">
                    <div class="form-group">
                        <lable for="InputEmail"><a class="remi"> Username </a></lable>
                        <input type="text" class="form-control" id="username" name="username" placeholder="INPUT YOUR USERNAME">
                    </div>
                    <br>
                    <div class="form-group">
                        <lable for="InputPassword"><a class="remi"> password </a></lable>
                        <input type="password" class="form-control" id="password" name="password" value="login" placeholder="INPUT YOUR PASSWORD">
                    </div>
                    <br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> <a class="rem"> Remember Me </a>
                        </label>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                    <br><br>
                    <h6 >Creat a Account<a href="signin.php"> Signin<a></h2>
                  </form>
                <!--form end-->
<br><br>

            </div>
           
        </div>
    </div>
    <script>
            function isvalid(){
                var username = document.form.username.value;
                var password = document.form.password.value;
                if(username.length=="" && password.length==""){
                    alert(" Username and password field is empty!!!");
                    return false;
                }
                else if(username.length==""){
                    alert(" Username field is empty!!!");
                    return false;
                }
                else if(password.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }
                
            }
        </script>
</body>
</html>