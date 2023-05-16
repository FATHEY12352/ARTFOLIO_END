<?php
   
session_start();
if(isset($_SESSION["user"])){
  header("Location: dashboard");
}

if(isset($_post["submit"])){
  //================
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  //$con=mysqli_connect("localhost","root","root","auth");

  // make tow string for tests\
  // and add your users
  // see datebase cots

  $sql="INSERT INTO users(name,password) VALUES('$user','$pass')";

   

  mysqli_query($con,$sql);
  mysqli_close($con);
  header("Location: index.php");
}

$user=$_POST['user'];
$pass=$_POST['pass'];
$emp_a="enter name and password";
$emp_u="plase neter your NAME";
$emp_p="plase neter your Password";

if($user==="fathey"&&$pass==="123654"){
        header("Location: protofly_user_f.html");
    }

    elseif($user==="ahmed"&&$pass==="123654"){
        header("Location: protofly_user_a.html");
    }

    elseif($user==="bassem"&&$pass==="123654"){
        header("Location: protofly_user_b.html");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="pro/css/signin-signup/styles.css">
    <title>signin-signup</title>
</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <form action="sign.php" method="post" class="sign-in-form">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" name="user">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="pass">
                </div>

                <?php
                if(empty($user) && empty($pass)){
                    echo$emp_a;}
                else
                {
                    if(empty($user)){
                        echo $emp_u;
                    }elseif(empty($pass)){
                        echo $emp_p;
                    }  
                }

                // $error= mysqli_connect_error();
                // if(!$con){
                //     echo "error".$error;
                // }

                ?>


                <input type="submit" value="Login" class="btn" >

                



                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Don't have an account? <a href="#" id="sign-up-btn2">Sign up</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Sign up</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p class="social-text">Or Sign in with social platform</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Already have an account? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Member of Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="img/signin-signup/signin.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>New to Brand?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque accusantium dolor, eos incidunt minima iure?</p>
                    <button class="btn" id="sign-up-btn">Sign up</button>
                </div>
                <img src="img/signin-signup/signup.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="pro/js/signin-signup/app.js"></script>
</body>

</html>