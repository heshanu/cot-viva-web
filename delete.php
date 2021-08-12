

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
<body style="background-color: yellow">  
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
                <h1>Delete User Details</h1>
                <label   for="exampleInputPassword1">username here</label>
                <input name="username"  type="username" class="form-control" id="exampleInputPassword1" placeholder="username here">
                <button name="delete" style="border-radius: 20px;size: 100px;font-size: 25px;border-top: 50px">delete</button>
    </form>

    <form method="POST"  style="margin-left: 100px;width: 500px" >
         <h1>Delete User Feedback</h1>
                <label   for="exampleInputPassword1">email here</label>
                <input name="email1"  type="email" class="form-control" id="exampleInputPassword1" placeholder="email here">
                <button name="delete1" style="border-radius: 20px;size: 100px;font-size: 25px;border-top: 100px">delete</button>
    </form>
<br>
     


<div style="width: 1000px">
       
        <div  style="width: 500px">
                 <table class="table table-bordered" style="background-color: yellow;width: 500px;float: left;margin-left: 100px" border="20" >
                    <h2 style="margin-left: 50px">User Details Table</h2>
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


    <div  style="width: 500px">
                 <table  class="table table-bordered" style="background-color: yellow;width: 450px;float: right;margin-right:50px" border="20" >
                    <h2 style="margin-left:   50px">User Feedback Table</h2>
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
            $username=$_POST['username'];
            $c="delete from user where username='".$username."'";           
            $q=mysqli_query($con,$c);
            if($q){
              echo "sucessfull";
            }
            else{
                echo('faild to delte');
            }
        }

        
        if(isset($_POST['delete1'])){
            $username=$_POST['email1'];
            $c="delete from user where name1='".$username."'";           
            $q=mysqli_query($con,$c);
            if($q){
              echo "sucessfull";
            }
            else{
                echo('faild to delte');
            }
        }        
                                    
?>

