<?php 
   
    include('createcookie.php')
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a690a1cf62.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Josefin+Sans:wght@500&family=Lora:wght@400;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/stylehome1.css">

    <script src="script1.js"></script>

    <title>Homepage</title>
</head>

<body>

    <?php
    
    include 'connection.php';

	if(isset($_POST['submit'])){
		$username =mysqli_real_escape_string($conn, $_POST['username']);
		$email =mysqli_real_escape_string($conn, $_POST['email']);
		$password =mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword =mysqli_real_escape_string($conn, $_POST['cpassword']);
		
		//password encryption 
        $pass = password_hash($password, PASSWORD_BCRYPT);
		$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
		

        $emaiquery = "select * from registration where email= '$email' ";
        $query = mysqli_query($conn, $emaiquery);

        $emailcount= mysqli_num_rows($query);

        if($emailcount>0){
            echo "Email already exists";
        }else{
            if($password === $cpassword){

                $insertquery = "insert into registration (username, email, password, cpassword) values('$username','$email','$pass','$cpass')";

				$iquery = mysqli_query($conn, $insertquery);
				
				if($iquery){
                         ?>
    <script>
    alert("Connection Successful");
    </script>


    <?php
                    }else{
                        ?>
    <script>
    alert("NO connection");
    </script>
    <?php
                }
				
				}else{
					echo "passwords are not matching";
				}
			}
			
        }

	

	if(isset($_POST['submit1'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$email_search = "select * from registration where email = '$email'";
			$query = mysqli_query($conn, $email_search);

			$email_count = mysqli_num_rows($query);

			if($email_count){
				$email_pass = mysqli_fetch_assoc($query);

				$db_pass = $email_pass['password'];

				$_SESSION['username'] = $email_pass['username'];

				$pass_decode = password_verify($password, $db_pass);

				if($pass_decode){
					echo "login successful";
					?>
    <script>
    location.replace("home.php");
    </script>
    <?php
				}else{
					echo "passwords incorrect";
				}
			}else{
				echo"Invalid email";
			}
		}

		?>



    <header>
        <div class="logo">
            <h1 class="logo-text">
                <span><i class="fa fa-pen"></i></span> Writers'<span>Hub</span>
            </h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-search"></i>
                </a>

                <div class="section search">
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

            </li>
            <li><a href="#">About</a></li>
            <li><a href="#" id="button" class="button">Log in</a></li>
            <li><a href="#" id="button1" class="button1">Sign up</a></li>

        </ul>


    </header>

    <div class="banner">
        <div class="ban">
            <img src="images/b2.png" width="100%" height="600px">
        </div>

        <!--Page Wrapper -->
        <div class="page-wrapper">


            <!-- // Post Slider -->

            <!-- Content -->
            <div class="content clearfix">

                <!-- Main Content -->
                <div class="main-content">
                    <h1 class="recent-post-title">Recent Posts</h1>
                    <?php 
    //show from database raw
    $sql= " SELECT * FROM post;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0){

while ($show_post = mysqli_fetch_assoc($result)){
    ?>

                    <div class="post">
                        <img src="<?php echo 'images/' . $show_post['featured_image']; ?>" alt="" class="post-image">
                        <div class="post-preview">



                            <h2>

                                <?php 
                            if($show_post['checkbox']==1){ ?>
                                <a
                                    href="Writershub_payment.php?id=<?php echo $show_post['ID']; ?>"><?php echo $show_post['title'];?></a>
                                <a href="articles_view.php?id=<?php echo $show_post['ID']; ?>"></a>
                                <?php
                            } else { 
                                ?>
                                <a
                                    href="articles_view.php?id=<?php echo $show_post['ID']; ?>"><?php echo $show_post['title'];?></a>
                                <?php
                             }
                                ?>

                            </h2>





                            <i class="far fa-user"><?php echo $show_post['name'];?></i>
                            &nbsp;
                            <i
                                class="far fa-calendar "><?php echo date("F j, Y ", strtotime($show_post["created_at"])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($show_post['body'],0,150)) ;?>
                            </p>
                        </div>
                    </div>
                    <?php
}
}
?>

                </div>

                <div class="sidebar">

                    <div class="section search">
                        <h4 class="section-title">Search</h4>
                        <form action="index.html" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Search...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h3 class="section-title">Discover</h3>
                        <ul>
                            <li><a href="#">Poem</a></li>
                            <li><a href="#">Story</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Philosophy</a></li>
                            <li><a href="#">Self</a></li>
                            <li><a href="#">Time</a></li>
                        </ul>
                    </div>

                </div>

            </div>
            <!-- Content -->

        </div>
        <!--google api-->
        <?php


include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="google btn" > <i class="fa fa-google fa-fw" ></i> Signup with Google+ </a>';
}

?>

        <div class="bg-model">
            <div class="model-content">

                <div class="container">
                    <div class="close">+</div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row">
                            <h2 style="text-align:center">Login with Social Media or Manually</h2>


                            <div class="col">
                                <a href="#" class="fb btn">
                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                </a>
                                <a href="#" class="twitter btn">
                                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                </a>
                                <?php
							if($login_button == '')
							{
								echo "<script> window.location.assign('home.php'); </script>";
								echo '<h3><a href="logout.php">Logout</h3></div>';
							}
							else
							{
								echo '<div align="center">'.$login_button . '</div>';
							}
							?>
                            </div>

                            <div class="col">
                                <div class="hide-md-lg">
                                    <p>Or sign in manually:</p>
                                </div>

                                <input type="Email" name="email" placeholder="Email" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <input type="submit" name="submit1" value="Login">


                                <a href="#">Forget password?</a>
                            </div>



                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>


    </div>
    </div>

    <div class="bg-model2">
        <div class="model-content2">

            <div class="container">
                <div class="close2">+</div>

                <!-- Signup-->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row">
                        <h2 style="text-align:center">SignUp with Social Media or Manually</h2>


                        <div class="col">
                            <a href="#" class="fb btn">
                                <i class="fa fa-facebook fa-fw"></i> Signup with Facebook
                            </a>
                            <a href="#" class="twitter btn">
                                <i class="fa fa-twitter fa-fw"></i> Signup with Twitter
                            </a>
                            <a href="#" class="google btn">
                                <i class="fa fa-google fa-fw"></i> Signup with Google+
                            </a>
                        </div>

                        <div class="col">
                            <div class="hide-md-lg">
                                <p>Or sign in manually:</p>
                            </div>

                            <input type="text" name="username" placeholder="Username" required>
                            <input type="Email" name="email" placeholder="Email" required>
                            <input type="password" name="password" placeholder="Password" required>
                            <input type="password" name="cpassword" placeholder="Confirm Password" required>
                            <input type="submit" name="submit" value="Signup">
                        </div>

                    </div>
                </form>
            </div>


        </div>
    </div>


    </div>
    </div>




    <!-- Footer -->
    <footer>
        <div class="footer">

            <div class="quick-links">


                <ul>

                    <li class="quick-items"><a href="#">Help</a></li>
                    <li class="quick-items"><a href="#">About</a></li>
                    <li class="quick-items"><a href="#">Privacy&Terms</a></li>
                    <li class="quick-items"><a href="#">Contact</a></li>

                </ul>

            </div>

            <div class="footer-bottom">
                &copy; project | CSE482 Lab Project
            </div>

        </div>
    </footer>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/script1.js"></script>

</body>

</html>