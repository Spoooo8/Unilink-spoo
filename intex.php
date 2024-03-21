<!DOCTYPE html>
<?php
require_once('connection.php');
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport", content="width=device-width, initial-scale=1.0">
        <title>Home | Unilink</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </head>

    <body>
         <!-- header section starts  -->
        <header>
            <div class="headerleft">
                <div class="logo"><img id="logo" src="img\logo.png"></div>
                <div class="headernav hmargin">
                    <nav>
                        <ul>
                             <li><a href="intex.php" class="h_anchor">Home</a></li>
                             <li><a href="#email" class="h_anchor">Projects</a></li>
                             <li><a href="#email" class="h_anchor">Collaborate</a></li>
                             <li><a href="#email" class="h_anchor">Host</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="headerright hmargin">
                <div>
                    <input type="search" name="" placeholder="Search here..." id="searchbox">
                </div>
         
                 <div><a href="register.php"><button id="register" class="hbutton register">Register</button></a></div>
            </div>
        </header>
         <!-- header section ends  -->

         <!-- login section starts-->   
         <main>
        <section>
             <div class="lpara"  id="home">
                 <div class="paraimage">
                         <div class="paras">
                            <h1>Collaborate to unleash the<br> power of collective inteligence</h1>
                            <h5>Join over 10M users to connect and tranform your ideas into reality</h5>
                            <div class="email">
                                <form class="" method="post" autocomplete="off">
                                <div><label for="email" class="lemail">EMAIL / USERNAME<input id="email" name="email" type="email" placeholder="Enter your email" required/></label></div>
                                <div><label for="password" class="lpassword">PASSWORD<input id="password" name="password" type="password" placeholder="Enter your password"  required/></label></div>
                                <div><button type="submit" name="login" class="registerlogin btn-primary">Log in</button></div>
                                </form>
                       
                                <?php
                                    if(isset($_POST['login'])){
                                        session_start();
                                        $email=$_POST['email'];
                                        $password=$_POST['password'];

                                        $select = mysqli_query($con,"select * from userdetail where email ='$email' and password ='$password'");
                                        $row = mysqli_fetch_array($select);

                                        if(is_array($row)){
                                            $_SESSION['email'] = $row['email'];
                                            $_SESSION['password'] = $row['password'];
                                        }  else{
                                            echo '<script type="text/javascript">';
                                            echo 'alert(Invalid Email or Password)';
                                            echo 'window.locatin.href="intex.php"';
                                            echo '</script>';
                                        }
                                    }
                                    if(isset($_SESSION["email"])){
                                        header("Location:home1.php");
                                    }
                                ?>
                             </div>
                         </div>
                         <div><img src="img\home.jpeg" alt="collab" class="limage"></div>
                </div> 
             </div>
        </section>
        <!-- login section ends-->

        <!-- project section starts-->
       
        </main>
    </body>
</html>