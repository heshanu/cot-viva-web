
<?php
session_start();
if(isset($_POST['submit'])){
    $_SESSION['username']=$_POST['username'];
$_SESSION['type1']=$_POST['type1'];    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title> Music</title>

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
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                    <li><a href="#">Even Dropdown</a>
                                                        <ul class="dropdown">
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                            <li><a href="#">Deeply Dropdown</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Even Dropdown</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="event.php">Events</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
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

    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>See what’s new</p>
            <h2>REGISTER</h2>
        </div>
    </section>

    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome Back</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">username</label>
                                    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">email</label>
                                    <input name="email"  type="email" class="form-control" id="exampleInputPassword1" placeholder="email">
                                </div>

                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" class="form-control" type="password"  id="exampleInputPassword1" placeholder="Password">
                                </div>

                                 <div class="form-group">
                                    <label   for="exampleInputPassword1">user type</label>
                                    <select  name="type1" class="type1" class="form-control">
                                        <option  value="admin" >admin</option>
                                        <option  value="customer">customer</option>
                                    </select>
                                </div>

                                <button name="submit" type="submit" class="btn oneMusic-btn mt-30">Register</button>

<?php   
    include ('connection.php');
//   echo"hi";
    if(isset($_POST['submit'])){
        if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])){
            echo "please fill all fields";
        }

        else{
            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $type1=$_POST['type1'];

          //  $s="select username from music where username='".$username."'  ";
          //  $q=mysqli_query($con,$s);
 
          
            $sq="INSERT INTO user(username,email,password,type1) VALUES ('$username','$email','$password','$type1')";
            $result=mysqli_query($con,$sq);

            if($result){
                echo "<h1>sucessfull</h1>";
            }
            else{
                echo "<h1> flaid to connect!</h1> ";
            }
            
        }           
    } 
       
?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
   
    <h3 style="text-align: center;">already a member <a href="login.php">click here</a></h3>

    <footer class="footer-area">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                
                    <p class="copywrite-text"></script>

                </div>

                <div class="col-12 col-md-6">
                   
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


