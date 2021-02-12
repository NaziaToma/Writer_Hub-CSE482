<!-- Database connection of database: blog table: post-->
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



    <link rel="stylesheet" href="css/dashboard.css">
    <title>Show post</title>
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
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li>
                </ul>
            </li>

        </ul>
    </header>
    <!--header menu end-->


    <!--wrapper start-->
    <div class="wrapper">
        <!--Sidebar starts-->
        <div class="sidebar">
            <div class="sidebar-menu">

                <li class="item">
                    <a href="dashboard.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Show Post</a>
                    <a href="create_post.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Create Post</a>
                    <a href="delete.php" class="menu-btn"></i><i class="fa fa-trash"></i>Delete Post</a>
                </li>

            </div>
        </div>
        <!--sidebar end-->

        <!--main container start-->
        <div class="main-container">

            <div class="admin-content clearfix">

                <div class="">

                    <h2 class="header_position">Posts</h2>
                    <table>

                        <thead>

                            <th>Title</th>
                            <th colspan="3">Posted On</th>
                        </thead>


                        <?php 

//show from database raw
$sql= " SELECT * FROM post;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0){

while ($row = mysqli_fetch_assoc($result)){
    ?>

                        <tr>
                            <td><?php echo $row['title'];?></td>
                            <td><i
                                    class="far fa-calendar "><?php echo date("F j, Y ", strtotime($row["created_at"])); ?></i>
                            </td>
                        </tr>
                        <?php
}
}
 // Delete post code

?>

                    </table>
                </div>
            </div>

        </div>

        <!--main container end-->
    </div>
    <!--wrapper end-->







    <!-- Footer starts -->
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
    <!-- Footer ends-->



</body>

</html>