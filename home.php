<?php include_once('connection.php');
	
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
    <link rel="stylesheet" type=text/css href="css/stylehome1.css">

    <title>Homepage</title>
</head>

<body>
    <header>
        <div class="logo">
            <h1 class="logo-text">
                <span><i class="fa fa-pen"></i></span> Writers'<span>Hub</span>
            </h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
           
            <li><a href="home.php">Home</a></li>
            
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                </a>
                <ul>
                    <li><a href="Writer Profile.html">Profile</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="logout.php" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    

        <!--Page Wrapper -->
        <div class="page-wrapper">


            <!-- Content -->
            <div class="content clearfix">
                <div>
                    <!-- Main Content -->
                    <div class="main-content">
                        <h1 class="recent-post-title">Recent Posts</h1>
                        <?php include('connection.php');

?>
                        <?php 
    //show from database raw
    $sql= " SELECT * FROM post;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);

if($resultcheck > 0){

while ($show_post = mysqli_fetch_assoc($result)){
    ?>

                        <div class="post">
                            <img src="<?php echo 'images/' . $show_post['featured_image']; ?>" alt=""
                                class="post-image">
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









                    </div>
                </div>


            </div>
            <!-- Content -->

        </div>
        <!-- // Page Wrapper -->

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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
    </script>

    <!-- Custom Script -->
    <script src="js/script.js"></script>
</body>

</html>