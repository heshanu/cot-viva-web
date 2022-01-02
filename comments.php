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
        td:active{
            background-color: red
        }
        td:hover{
            background-color: red
        }
        th{
            background-color: orange;
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
                                   
                                    <li><a href="event.php">Events</a></li>
                                    <li><a href="blog.php">News</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="profile.php">profile</a></li>
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

    <section class="hero-area">

        <div class="hero-slides owl-carousel">

            <div class="single-hero-slide d-flex align-items-center justify-content-center">
          
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
               
                 <table class="table table-bordered">
                            <tr>
                                <th> name </th>
                                <th> email </th>
                                <th> password</th>
                                <th >type</th>
                                <th >action</th>
                       
 
                                <?php
                                    include 'connection.php';
                                    $r="select * from comments";
                                    $result=mysqli_query($con,$r);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $name1 = $row['name1'];
                                        $email1 = $row['email1'];
                                        $subject1 = $row['subject1'];
                                        $message1 = $row['message1'];
                                
                                    //    $UserAge = $row['User_Age'];
                                ?>
                             <tr>
                                        <td><?php echo $name1?></td>
                                        <td><?php echo $email1?></td>
                                        <td><?php echo $subject1?></td>
                                        <td><?php echo $message1?></td>

                                        <td><a href="delete.php">delete</a></td>


                
                            </tr>        
                            
                                <?php
                                }
                                
                                   
                                ?>
    

                                   
                                                                                         
                                  
     
    </table>
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

    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <script src="js/bootstrap/popper.min.js"></script>

    <script src="js/bootstrap/bootstrap.min.js"></script>
   
    <script src="js/plugins/plugins.js"></script>

    <script src="js/active.js"></script>

    
</body>

</html>
