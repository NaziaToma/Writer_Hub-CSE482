<?php
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

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




    <link rel="stylesheet" href="css/create_post.css">
    <title>Writers Hub</title>
</head>

<body>
    <!--header menu starts-->
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
            <li><a href="home.html">Home</a></li>
            <li><a href="#">About</a></li>

            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                </a>
                <ul>
                    <li><a href="Writer Profile.html" class="profile">Profile</a></li>
                    <li><a href="create_post.php">Dashboard</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li>
                </ul>
            </li>

        </ul>
    </header>



    <!--wrapper start-->
    <div class="wrapper">
        
        <div class="sidebar">
            <div class="sidebar-menu">

                <li class="item">
                    <a href="dashboard.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Show Post</a>
                    <a href="create_post.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Create Post</a>
                    <a href="delete_post.php" class="menu-btn"></i><i class="fa fa-trash"></i>Delete Post</a>
                </li>

            </div>
        </div>
       


        <!--main container start-->
        <div class="main-container">
            <div class="admin-content clearfix">
                <div class="admin-content clearfix">

                    <form method="post" enctype="multipart/form-data">
                        <h2>Create Post</h2>
                        <!--<form action="create.php" method="post">-->


                        <div class="input-group">
                            <label class="lable">Your Name</label>
                            <input type="text-input" name="name" class="text-title">
                        </div>

                        <div class="input-group">
                            <label class="lable">Title</label>
                            <input type="text-input" name="title" class="text-title">
                        </div>


                        <div class="input-group">
                            <label class="lable">Body</label>
                            <textarea class="text-body" name="body" id="body"></textarea>
                        </div>

                        <div class="input-group">
                            <label style="float: left; margin: 5px auto 5px;">Featured image</label>
                            <input type="file" name="featured_image"><br><br>
                        </div>

                        <div class="input-group">
                            <label class="lable">Want it to be paid ?</label>
                            <input type="checkbox" name="checkbox" value=1>
                        </div>

                        <div class="input-group">
                            <input type="submit" value="Post" name="Submit1"><br /><br />
                        </div>
                        <!--</form>-->



                        <?php
if(isset($_POST["Submit1"]))
{
    $title = $_POST['title'];
    $name = $_POST['name'];
    
    $body = $_POST['body'];
    $checkbox=$_POST['checkbox'];
    


    
    // Get image name
      $image = $_FILES['featured_image']['name'];
      // image file directory
      $target = "images/".basename($image);
    
    

if($title!= null){

    if($body!=null){

    $sql = "INSERT INTO post (name,checkbox, title, body,featured_image) values( '$name','$checkbox' ,'$title', '$body','$image')";
    
    $result= mysqli_query($conn,$sql);
    if (move_uploaded_file($_FILES['featured_image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}
    
    if($result){
        echo "<script> alart (' Saved !');</script>";
      }
      else{ echo " Error saving ";}

    }else{
        echo " Enter the writeup ";
    }
}else{
    echo "  Please enter a Title ";
}

}  
    

?>

                    </form>

                </div>
            </div>
        </div>
        <!--main container end-->


    </div>
    <!--wrapper end-->





    <!-- Footer starts
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
    Footer ends-->

</body>

</html>