
<?php
//session_start();
session_start()
//echo $_SESSION['username'];

?>



 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <title>test site</title>
    <link rel="icon" href="img/core-img/favicon.ico">    
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        button{
            margin-left: 80px;
        }
    </style>
   
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
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="albums-store.php">Albums</a></li>
                                            <li><a href="event.php">Events</a></li>
                                            <li><a href="blog.php">News</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="elements.php">Elements</a></li>
                                            <li><a href="login.php">Login</a></li>
                                            <li><a href="#">edm festivals</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">tommorowland</a></li>
                                                    <li><a href="#">disney world</a></li>
                                                    <li><a href="#">candyland</a></li>
                                                    <li><a href="#">uitra</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">ultra mimai</a></li>
                                                            <li><a href="#">ultra sri lanka</a></li>
                                                            <li><a href="#">ultra aus</a></li>
                                                            <li><a href="#">utra dubai</a></li>
                                                        </ul>
                                                    </li>                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="event.php">Events</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="profile.php">profile</a></li>
                                </ul>

                                <div class="login-register-cart-button d-flex align-items-center">
                   
                                    <div class="login-register-btn mr-50">
                                        <a href="login.php" id="loginBtn">Login / Register</a>
                                    </div>

                                  
                                    <div class="cart-btn">
                                        <p><span class="icon-shopping-cart"></span> <span class="quantity">1</span></p>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </nav>
                </div> 
            </div>
        </div>
    </header>

    <section class="hero-area">

        <div class="hero-slides owl-carousel">

            <div class="single-hero-slide d-flex align-items-center justify-content-center">
          
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
               
                     <div class="login-form" style="background-color: yellow;border-radius: 20px">

                            <form action="#" method="POST" class="container">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">new username</label>
                                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    
                                </div>   

                                <div class="form-group">
                                    <label for="exampleInputEmail1">new Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail" required="">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>you must enter email address for update. We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label   for="exampleInputPassword1">new Password</label>
                                    <input name="password"  type="password" class="form-control" id="exampleInputPassword1" placeholder="password" >
                                </div>

                                <div class="form-group">
                                    <label   for="exampleInputPassword1">type</label>
                                    <input name="type1"  type="text" class="form-control" id="exampleInputPassword1" placeholder="type">
                                </div>
                                <button name="update" type="submit" class="btn oneMusic-btn mt-30">update</button>
                                
<?php
  // ob_start();
   include ('./connection.php');
   if(isset($_POST['update'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $type1=$_POST['type1'];
   
        $sq="UPDATE user set username='$username',password='$password',type1='$type1' where email='$email'";

        $r=mysqli_query($con,$sq);
        if($r){
           // echo "sucessfully updated"; 
            header("Location:profile.php");         
        // header("location:profile.php");
        }
        else{
                echo "<h1>please check your update</h1>";
            }
   }
mysqli_close($con);
?>

                            </form>
                        </div>
                                       

            </div>
        </div>
    </section>


    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                   

                </div>

                <div class="col-12 col-md-6">
                  
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>