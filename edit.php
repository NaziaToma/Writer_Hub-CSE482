
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <script src="https://kit.fontawesome.com/a690a1cf62.js" crossorigin="anonymous"></script>
      
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Josefin+Sans:wght@500&family=Lora:wght@400;600;700&display=swap" rel="stylesheet">
  
  
  
  
          <link rel="stylesheet" href="css/dashboard.css">
          <title>Admin Dashboard</title>
      </head>
  
    <body>
      <!--header menu starts-->
      <header>
        <div class="logo">
          <h1 class="logo-text">
            <span><i class="fa fa-pen"></i></span> Writers'<span>Hub</span></h1>
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
              <li><a href="create_post.html">Dashboard</a></li>
                  <li><a href="home1.html" class="logout">Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </header>



           <!--wrapper start-->
           <div class="wrapper">
            <!--Sidebar starts-->
            <div class="sidebar">
                <div class="sidebar-menu">
                
                  <li class="item">
                    
                      <a href="manage_user.php" class="menu-btn"></i>Manage User</a>
                      
                      <a href="manage_post.html" class="menu-btn"></i>Manage Post</a>
                      
                  </li>
               
                 
                </div>
            </div>
            <!--sidebar end-->


            <!--main container start-->
    <div class="main-container">
      <div class="admin-content clearfix">
          <div class="admin-content clearfix">
  
            <h2>Edit User</h2>

            <?php 
    include 'dbcon.php';

    $id=$_GET['id'];
    $showquery = "select * from registration where id= {$id}";
    $showdata= mysqli_query($con,$showquery);

    $arrdata = mysqli_fetch_array($showdata);

    if(isset($_POST['save_post'])){
        $idupdate=$_GET['id'];
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        

        $query = "update registration set id=$id, username='$username' where id=$idupdate";

        
        $iquery = mysqli_query($con, $insertquery);
    }

?>

            
  
            <div class="input-group">
              <label class="lable">ID</label>
              <input type="text-input" name="id" value="<?php echo $arrdata['id']; ?>" class="text-title">
            </div>

            <div class="input-group">
              <label class="lable">Username</label>
              <input type="text-input" name="username" value="<?php echo $arrdata['username']; ?>" class="text-title">
            </div>
            <div class="input-group">
              <label class="lable">Email</label>
              <input type="text-input" name="email" value="<?php echo $arrdata['email']; ?>" class="text-title">
            </div>


            <div class="input-group" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              <label class="lable">Role</label>
              <select class="text-topic" name="role">
                <option> Writer</option>
                <option> Admin</option>
                
              </select>
             
              <button type="submit" name="save_post" class="btn">Save</button>
            </div>
            <!--</form>-->
  
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

