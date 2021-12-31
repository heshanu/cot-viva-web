

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <title>delete</title>
    <link rel="icon" href="img/core-img/favicon.ico">    
    <link rel="stylesheet" href="style.css">

   
     
</head>
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
<body style="background-image: url(img/core-img/2.jpg);background-repeat: no-repeat;background-size: cover;"> 
 
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
                   
                                    

                                  
                                    <div class="cart-btn">
                                       
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </nav>
                </div> 
            </div>
        </div>
    </header>

<body style="background-color:green">  
    <div stye="">
        <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            
        </div>
    </div> 
   
   
<br>
        <form method="POST" style="margin-left: 100px;width: 500px;margin-top: 50px;margin-bottom: 100px" >
                <h1 style="background-color: yellow">Delete User Details</h1>
                <label   for="exampleInputPassword1">email here</label>
                <input name="email"  type="email" class="form-control" id="exampleInputPassword1" placeholder="email here">
                <button name="delete"  style="border-radius: 20px;size: 100px;font-size: 25px;border-top: 50px">delete</button>
    </form>

    <form method="POST"  style="margin-left: 100px;width: 500px" >
        <h1 style="background-color:yellow">User FeedBack</h1>
                <label   for="exampleInputPassword1">email here</label>
                <input name="email1"  type="email" class="form-control" id="exampleInputPassword1" placeholder="email here" style="font-size: 40px">
                <button name="delete1" style="border-radius: 20px;size: 100px;font-size: 25px;border-top: 100px">delete</button>
    </form>
<br>
     


<div style="width: 1000px">
       
        <div  style="width: 500px">
                 <table class="table table-bordered" style="background-color: yellow;width: 500px;margin-left:500px"  border="20" >
                    <h2 style="margin-left: 200px">User Details Table</h2>
                            <tr>
                                <th> name </th>
                                <th> email </th>
                                <th> password</th>
                                <th >type</th>
                         
                       
 
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
                
                            </tr>        
                            
                                <?php
                                }
                                
                                   
                                ?>
    

                            
        </table>           
    </div>


    <div  style="width: 500px" align="right">
                 <table  class="table table-bordered" style="background-color: yellow;width: 450px;margin-left:500px" border="20"  >
                    <h2 style="margin-left:   200px">User Feedback Table</h2>
                            <tr>
                                <th> name </th>
                                <th> email </th>
                                <th> password</th>
                                <th >type</th>
                         
                       
 
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
                
                            </tr>        
                            
                                <?php
                                }                                   
                                ?>
    

                            
                </table>           
        </div>
</div>

    
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


<!-->
    <footer class="footer-area" style="margin-bottom: 500px">


                    <div class="footer-nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="albumu.php">Albums</a></li>
                            <li><a href="event.php">Events</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
          

    </footer>
<-->

    

</body>

</html>

<?php
        require_once("connection.php ");
 
        if(isset($_POST['delete'])){
            $email=$_POST['email'];
            $c="delete from user where email='".$email."'";           
            $q=mysqli_query($con,$c);
            if($q){
              echo "sucessfull";
            }
            else{
                echo('faild to delte');
            }
        }

        
        if(isset($_POST['delete1'])){
            $email1=$_POST['email1'];
            $c1="delete from comments where email1='".$email1."'";           
            $q1=mysqli_query($con,$c1);
            if($q1){
              echo "sucessfull";
            }
            else{
                echo('faild to delte');
            }
        }        
                                    
?>

