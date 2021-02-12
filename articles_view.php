<!DOCTYPE>
<html>

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Writers' Hub</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <script src="https://kit.fontawesome.com/a690a1cf62.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Josefin+Sans:wght@500&family=Lora:wght@400;600;700&display=swap"
        rel="stylesheet">
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
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-bell"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Catagories</a>
                <ul>
                    <li><a href="#">Science</a></li>
                    <li><a href="#">Story</a></li>
                    <li><a href="#">Poem</a></li>
                    <li><a href="#">Fiction</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- end #header -->
    <div id="wrapper">
        <div id="page">
            <div id="content" style="padding-top: 10px; width: 100%;">


                <?php 
include('connection.php');
//show from database raw

 $ID=$_GET['id'];
$sql= " SELECT * FROM post WHERE ID='$ID' ;";
$result = mysqli_query($conn,$sql);



while ($show_post = mysqli_fetch_assoc($result)){
    ?>
                <div class="post">

                    <h2 class="title"><?php echo $show_post['title'];?></h2>
                    <p class="meta"><span class="date"><i
                                class="far fa-calendar "><?php echo date("F j, Y ", strtotime($show_post["created_at"])); ?></i></span><span
                            class="posted">Posted by <?php echo $show_post['name'];?></span></p>
                    <div style="clear: both;">&nbsp;</div>
                    <div class="entry">
                        <p><?php echo $show_post['body'];?></p>
                    </div>






                    <div class="block-border">
                        <div class="block-header">
                            <h1>Post Reviews</h1>
                        </div>
                        <form class="block-content form" action="" method="post">
                            <div class="_100">
                                <p><label for="textfield">Name </label><input id="textfield" name="comments_author_name"
                                        class="required" type="text" value="" /></p>
                                <input type="hidden" name="blog_id" value="">
                            </div>
                            <div class="_100">
                                <p><label for="textfield">Email </label><input id="textfield"
                                        name="comments_author_email" class="required" type="text" value="" /></p>
                            </div>
                            <div class="_100">
                                <p><label for="textarea"> Review </label><textarea id="textarea"
                                        name="comments_description" class="required" rows="5" cols="40"></textarea></p>
                            </div>
                            <div class="clear"></div>
                            <div class="block-actions">
                                <input type="submit" class="button" value="Submit Review">
                            </div>
                        </form>
                    </div>
                </div>

                <?php
}
?>




                <div style="clear: both;">&nbsp;</div>
            </div>
            <!-- end #content -->
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page -->
    </div>

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

    <!-- end #footer -->
</body>

</html>