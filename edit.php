<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['email']=$_POST['email'];
    $_SESSION['password']=$_POST['password'];    
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
   

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <header class="header-area">
  
        <div class="oneMusic-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                 
                    <nav class="classy-navbar justify-content-between" id="oneMusicNav">


                        <h1>MUSIC APP</h1>

                      
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        
                        <div class="classy-menu">

                
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="albums-store.php">Albums</a></li>
                                  
                                    <li><a href="event.php">Events</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                          
                                </ul>

                    
                                <div class="login-register-cart-button d-flex align-items-center">
                                   
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Login / Register</a>
                                    </div>

                                 
                                 
                                </div>
                            </div>
                          

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>Update </h2>
        </div>
    </section>

    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Update DB HERE</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="POST">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label   for="exampleInputPassword1">Password</label>
                                    <input name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Type</label>
                                    <input name="type1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>

        
                                <button name="submit" type="submit" class="btn oneMusic-btn mt-30">Update</button>
                              

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <p class="copywrite-text"><a href="#">
Copyright &copy;<script>document.write(new Date().getFullYear());</script>

                </div>

               
            </div>
        </div>
    </footer>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    
    <script src="js/bootstrap/popper.min.js"></script>
       <script src="js/bootstrap/bootstrap.min.js"></script>
    
    <script src="js/plugins/plugins.js"></script>
      <script src="js/active.js"></script>
</body>
</html>



<?php
  // ob_start();
   include ('./connection.php');
   if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $type1=$_POST['type1'];
   
        $sq="UPDATE user set username='$username',password='$password',type1='$type1' where email='$email'";

        $r=mysqli_query($con,$sq);
        if($r){
          //  echo "sucessfully updated"; 
            echo "<script>alert('sucessfully Updated')</script>";
            //header("Location:profile.php");         
        //header("location:profile.php");
        }
        else{
                echo "<h1>please check your update</h1>";
            }
   }
mysqli_close($con);
?>


 
      

