<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Coder's Club</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="assets/css/bs4cards.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img class="logo-custom" src="assets/img/logo180-50.png" alt=""  /></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">HOME</a></li>
                     <li><a href="project_request.php">PROJECT REQUEST</a></li>
                    <li><a href="blogs.php">BLOGS</a> </li>
                     <li><a href="find_resources.php">RESOURCES</a></li>
                   <!-- <li><a href="#faculty-sec">ABOUT US</a></li> -->
                    <li><a href="about_us.php">ABOUT US</a></li>
                     <li><a href="report_bugs.php">REPORT BUGS</a></li>
                    
                </ul>
            </div>
               <?php
            if(isset($_SESSION['rn']))
            {
                print("<ul class='navbar-nav'>
                            <li class='nav-item'>
                                <a class='nav-link' href='profile'>Profile</a>
                            </li>
                            <li class='nav-item'>
                                <a class='nav-link' href='logout'>Logout</a>
                            </li>
                        </ul>");
            }
        ?>
           
        </div>
    </div>
     
      
     
    <br>
	<br>
    <br>
<div class="container">
    	<div class="row no-gutters">
    		<div class="col-lg-3">
    			<img src="./images/profile.jpeg" alt="" class="img-thumbnail img-rounded">                
				 <div class="card1 bg-light">
   					<div class="card-header1">
   						<h3 class="text-center lead">PROGRAMMER</h3>
   						
   					</div>
    				<div class="card-body ">
    				  <ul class="nav nav-pills nav-stacked" role="tablist">
						<li><a href="profile1.php"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="project_request1.php"><i class="fa fa-file"></i> Project Request</a></li>
						
						
						 <li class="dropdown">
                    <a href="blog_bookmark.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comment"></i> Blog <i class="icon-chevron-sign-down" style="padding-left:140px; font-weight: 80;"></i></a>
                    <ul class="dropdown-menu">
						<li><a  href="blog_bookmark.php"  class="dropdown-item" ><i class="icon-bookmark"></i>  Bookmark</a></li> 	
						<li><a href="blog_like1.php" class="dropdown-item"><i class="icon-thumbs-up-alt"></i>  Like</a></li>
						
                    </ul>
                  </li>
						
						<li><a href="bugs.php"><i class="fa fa-bug"></i> <i class="fa fa-wrench"></i> Bug Report</a></li>        
				      </ul>
    				</div>
    			</div>
    		</div><!--col-lg-3-->
    		
    		<div class="col-lg-9">
    			<h2 class="text-center">Bugs Found by u</h2>
    			<div class="card">
    				<div class="card-body">
    						 <?php

session_start();

  // For local hosting
  require('db_conn.php');
/* 
    501550 = $_SESSION['rn'];
    $email = $_SESSION['eid'];*/

    $sql="SELECT  *  FROM  bug_reports  where name ='Purvesh' ";
    $result=mysqli_query($conn,$sql);
			
    while($row=mysqli_fetch_array($result)){
		$name = $row['name'];
		$email = $row['email'];
		$bug_info = $row['bug_info'];
	
    echo  ' <label id="attr" for="bugs"><h3>Bug Description: <b>'.$bug_info.'</b></h3></label>';
		
		echo "<br>";
?>
  <?php } ?>
   
    
      
      
    
    				</div>
    				
    			</div>
				
			</div><!--col-lg-9-->
			
			

			
			
		</div><!--row-->
	</div><!--Container-->
     
     
      <!--NAVBAR SECTION END-->
<!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>

</body>
</html>