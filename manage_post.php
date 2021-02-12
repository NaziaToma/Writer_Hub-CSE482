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

    <!--js file-->
    <script type="text/javascript" src="assets/js/confermation_box.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a690a1cf62.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Josefin+Sans:wght@500&family=Lora:wght@400;600;700&display=swap"
        rel="stylesheet">




    <link rel="stylesheet" href="css/delete_post.css">
    <title>Delete Post</title>
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
                    <li><a href="home1.php" class="logout">Logout</a></li>
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
                    <a href="manage_user.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Manage User</a>

                    <a href="manage_post.php" class="menu-btn"></i><i class="fa fa-plus-square"></i>Manage Post</a>
                   
                </li>

            </div>
        </div>
        <!--sidebar end-->

        <!--main container start-->
        <div class="main-container">

            <div class="admin-content clearfix">

                <div class="">

                    <h2 class="header_position">Manage Posts</h2>
                    <table>

                        <thead>
                            <th>Number</th>
                            <th>Title</th>
                            <th colspan="3">Delete</th>
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
                            <td><?php echo $row['ID'];?></td>
                            <td><?php echo $row['title'];?></td>
                            <td style="text-align: center"><a href="delete.php?id=<?php echo $row['ID']; ?>"
                                    data-toggle="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash"
                                        aria-hidden="true"></i> </a> </td>
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