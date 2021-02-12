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




        <link rel="stylesheet" href="css/delete.css">
        <title>Writers Hub</title>
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
            <li><a href="#">Dashboard</a></li>
                <li><a href="home1.html" class="logout">Logout</a></li>
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
                    <a href="manage_user.php" class="menu-btn"></i>Manage User</a>
                    
                    <a href="manage_post.php" class="menu-btn"></i>Manage Post</a>
                    
                </li>
             
            </div>
        </div>
        <!--sidebar end-->

        <!--main container start-->
        <div class="main-container">

          <div class="admin-content clearfix">

            <div class="">
            
                  <h2 class="header_position">Users</h2>
                  <table>
                    
                    <thead>
                      <th>Number</th>
                      <th>Username</th>
                      <th>Role</th>
                      <th colspan="2" style="text-align: center"> Action</th>
                    </thead>

                    <tbody>
                    <?php
    
                        include 'connection.php';
                            $selectquery = "select * from registration";
                            $query = mysqli_query($conn, $selectquery);

                            $nums = mysqli_num_rows($query);

                            while($res = mysqli_fetch_array($query)){
                            ?>

                            <tr class="rec">
                                
                                <td> <?php echo $res['ID']; ?> </td>     
                                <td> <?php echo $res['username']; ?> </td>   
                                <td>Role</td>                                    
                                <td style="text-align: center"><a href="edit.php?id=<?php echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa fa-edit" aria-hidden="true"></i> </a> </td> 
                                <td style="text-align: center"><a href="delete.php?id=<?php echo $res['ID']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"> <i class="fa fa-trash" aria-hidden="true"></i> </a> </td>                          
                            </tr>

                            <?php
                            }

                            ?> 
                             
                    </tbody>
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