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
	<style type="text/css">
    .noselect {
      -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
         -khtml-user-select: none; /* Konqueror HTML */
           -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
                user-select: none; /* Non-prefixed version, currently
                                      supported by Chrome and Opera */
    }
		
		input {
		  width: 100%;
		  border-color: 1px solid black !important;
		}

		.button {
		  width: 100%;
		}

		h2{
		  font-weight: 800;
		  padding-top : 5px;
		}
		h3 {
		  text-align: center;
		  padding-top: 5%;
		}

		#logout {
		  right: 0;
		}

		#blue-btn{
		  background: none repeat scroll 0 0 #0cbbfc;
		  border:1px solid #0cbbfc;
		  border-radius:5px;
		  color: white;
		  font-weight: 400;
		  padding: 0.8em 0.9em;
		  display: block;
		  margin:0.8em 0em;
		}
		#find_us{
		  padding-left:40px;
		}
		.other_links{
		  padding: 1px;
		}
		#others{
		  padding-left: 20%;
		}
		small{
		  color:white;
		}
		#blogs_area{
		  background-color: #dee2e6;
		  padding: 5%;
		}
		select{
		  width:100%;
		  padding:5px;
		}

		img{
		  justify-content: center;
		}
		#dp{
		  justify-content: center;
		  padding:10px;
		}          
		        
		.blog_content .more_text{
			display: none;
		}

		.read_more{
			color:blue;
		}
		.read_more:hover{
		  cursor: pointer;
		}

		#info{
		  padding:5px;
		}

		.likes_link{
		  margin:0;
		  padding-top:3px;
		  width: max-content;
		}	
		.card {
		  	-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin-bottom: 20px;
			}
		 .fa-arrow-down{
			margin-left: 5px;
		}
			
	</style>	
	
		

</head>
<body>
<br>
<br>
<br>

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
    	

			<?php
				include("db_conn.php");
				$sql1 = "Select * from blogs b,blog_likes bl where b.roll_no = bl.user_id group by blog_timestamp desc";
				$result1 = mysqli_query($conn,$sql1);
					while($data = mysqli_fetch_array($result1))
					{	
						$blog_id=$data['blog_id'];
						$title = $data['blog_title'];
						$roll_no = $data['roll_no'];
						$author = $data['blog_author'];
						$category = $data['blog_category'];
						$date = $data['blog_timestamp'];
						$content = $data['blog_content'];

						//Get all who have liked this blog
						$query2="select roll_no,first_name,last_name from profiles where roll_no in (select user_id from blog_likes where blog_id=$blog_id);";
						$result2=mysqli_query($conn,$query2);

						//check if user has liked the blog
						if(isset($_SESSION['rn'])){
							$query3="select blog_id from blog_likes where blog_id=$blog_id and user_id=$u_roll;";
							$result3=mysqli_query($conn,$query3);
							if(mysqli_num_rows($result3)>0)
							{
								$liked=1;
							}
							else
							{
								$liked=0;
							}							
						}
						else{
							$liked=0;													
						}

						$query4="select count(*) from blog_likes where blog_id=$blog_id;";
						$likes=mysqli_fetch_array(mysqli_query($conn,$query4));

						//check if user has saved the blog
						if(isset($_SESSION['rn'])){
							$query5="select blog_id from blog_saves where blog_id=$blog_id and user_id=$u_roll;";
							$result5=mysqli_query($conn,$query5);
							if(mysqli_num_rows($result5)>0)
							{
								$saved=1;
							}
							else
							{
								$saved=0;
							}							
						}
						else{
							$saved=0;													
						}

					
					?>	

					<div class="card" id="<?php echo $blog_id ?>">
						<div class="card-body">
							<h4 style="margin:0" class="card-title font-weight-bold"><?php echo $title ?></h4>
							<p style="margin:0"><a href="#"><em>by:<?php echo $author ?></em></a></p>
							<p><span class="badge badge-pill badge-secondary"><a href="blogs.php?category=<?php echo $category ?>"><?php echo $category ?></a></span><p>
							<p class="card-text blog_content"><?php echo $content ?></p>
						</div>
						<div class="card-footer noselect">
							<?php
							if($liked==1)
							{
								echo '<i id="unlike_'.$blog_id.'" class="like icon-heart icon-large"></i>&nbsp;';  
							}
							else
							{
								echo '<i id="like_'.$blog_id.'" class="like icon-heart-empty icon-large"></i>&nbsp;';  
							}
							?>
							
							<?php
							if($saved==1)
							{
								echo '<i id="remove_'.$blog_id.'" class="save icon-bookmark icon-large"></i>&nbsp;';  
							}
							else
							{
								echo '<i id="save_'.$blog_id.'" class="save icon-bookmark-empty icon-large"></i>&nbsp;';  
							}
							?>

							<i class="share icon-share-alt icon-large"></i>&nbsp;										
							<div class="dropdown" style="display:inline;float:right">
								<button style="padding:0px" class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-flag"></i>
								</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
							<p id="likes_<?php echo $blog_id ?>" class="likes_link small font-weight-bold" data-toggle="modal" data-target="#likesModal_<?php echo $blog_id; ?>">
								<?php echo $likes[0] ?> likes
							</p>
							<p class="card-text"><small class="text-muted"><?php echo $date ?></small></p>
						</div>
					</div>
					<!-- Likes Modal -->
					<div id="likesModal_<?php echo $blog_id; ?>" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Liked By:</h4>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								<div class="modal-body">
									<?php
										if(mysqli_num_rows($result2)>0)
										{
											while($data2 = mysqli_fetch_array($result2))
											{
												$liked_by = $data2['first_name']." ".$data2['last_name']." (".$data2['roll_no'].")";
												echo "<p>".$liked_by."</p>";
											}
										}
										else{
											echo "No likes";
										}
									?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
					<?php	
							     	        		
						}?>
    		   
    		   

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