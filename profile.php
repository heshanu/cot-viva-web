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
            background-color: gray;
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
                                                    <li><a href="https://www.youtube.com/results?search_query=tomorrowland">tommorowland</a></li>
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
               
                 <table class="table table-bordered" style="background-color: gray">
                            <tr>
                                <th> username </th>
                                <th> email </th>
                                <th> password</th>
                                <th >type1</th>
                       
 
                                <?php
                                    include 'connection.php';
                                    $r="select * from user";
                                    $result=mysqli_query($con,$r);
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $username = $row['username'];
                                        $email = $row['email'];
                                        $password = $row['password'];
                                        $type1 = $row['type1'];
                                
                                    //    $UserAge = $row['User_Age'];
                                ?>
                             <tr>
                                        <td><?php echo $username?></td>
                                        <td><?php echo $email?></td>
                                        <td><?php echo $password?></td>
                                        <td><?php echo $type1?></td>
                                       
                                        <td><a href="edit.php">edit</a></td>
                                        <td><a href="delete.php">delete</a></td>


                                        </td>

 

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