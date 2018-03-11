<?php

session_start();
// For local hosting
require('db_conn.php');

if(!$conn)
{
	$result1 = 500;
	header("Location: result.php?err=$result1"); 
}
else
{
	$sql1 = "Select * from blogs order by blog_timestamp desc";
	$result1 = mysqli_query($conn,$sql1);
	if(!$result1)
	{
		$result1 = 500;
		header("Location: result.php?err=$result1"); 
	}
	else
	{
		if(mysqli_num_rows($result1)==0)
		{
			echo("No Blogs Have been Added Yet.");
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>CC : Profile</title>
	
	<meta charset="utf-8">

<!--  mobile specific metas-->
<!-- ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="">
<!-- CSS
================================================== -->

	<link rel="stylesheet" type="text/css" href="styles/bootstrap/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link href="styles/css/index.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="styles/css/normalize.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="blogs.css">
									
<!-- CSS
================================================== -->

	<script src="styles/jquery.js"></script>
	<script src="blogs.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light navbar-light">
		<a class="navbar-brand" href="index">Coders' Club</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" style="box-shadow: 0px 3px 5px">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="project_request">Project Request</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blogs">Blogs</a>
				</li> 
				<li class="nav-item">
					<a class="nav-link" href="find_resources">Resources</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about_us">About Us</a>
				</li>  
			</ul>
			<?php
				if(isset($_SESSION['rn']))
				{
					print(" <ul class='navbar-nav'>
										<li class='nav-item'>
											<a class='nav-link' href='profile'>Profile</a>
										</li>
										<li class='nav-item'>
											<a class='nav-link' href='logout'>Logout</a>
										</li>
									</ul>");
					$u_roll = $_SESSION["rn"];
				    //creating session on client side for js
				    echo "<script>sessionStorage.setItem('status','loggedIn');</script>";
                }
                else{
                    //clearing the session storage on the client side.
                    echo "<script>sessionStorage.clear();</script>";
                }
			?>
		</div>  
	</nav>
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8" id="blogs_area">

			<?php
				if(mysqli_num_rows($result1)>0)
				{
				$i=1;
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
					
					?>	

					<div class="card mb-3" id="<?php echo $blog_id ?>">
						<div class="card-body">
							<h4 style="margin:0" class="card-title font-weight-bold"><?php echo $title ?></h4>
							<p style="margin:0"><em>by:<?php echo $author ?></em></p>
							<p><span class="badge badge-pill badge-secondary"><?php echo $category ?></span><p>
							<p class="card-text blog_content"><?php echo $content ?></p>
						</div>
						<div class="card-footer">
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
							

							<i id="save_<?php echo $blog_id; ?>" class="save icon-bookmark-empty icon-large"></i>&nbsp;

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
							}      	        		
						}


						if(isset($_SESSION['rn']))
					{
						echo("<div class='row'>
								<div class='col-md-4'>
								</div>
								<div class='col-md-4'>
								<form action='add_blogs.php' name='add_blogs_redirect' method='post'>
											<input id='blue-btn' type='submit' name='add_blogs' value='Add New Blog'>
										</form>
										</div>
										<div class='col-md-4'>
										</div>
									</div>");
					}
					?>




			</div>
		</div>
	</div>

	<!--===========FOOTER======================-->
							<div id="footer">
								<div class="col-md-12" id="other_links">
										<div class="row">
												<div class="col-sm-6">
														<h3 style="margin-bottom:3%">Other Links</h3>
														<div class="row">
																<div class="col-sm-6">
																		<ul id="others">
																				<li class="other_links"><a href="support_us" style="text-decoration: none;color: white">Support Us</a></li>
																				<li class="other_links"><a href="leaderboard" style="text-decoration: none;color: white">Leaderboard</a></li>
																		</ul>
																</div>
																<div class='col-sm-6'>
																		<ul id="others">
																				<li class="other_links"><a href="report_bugs" style="text-decoration: none;color: white">Report a Bug</a></li>
																				<li class="other_links"><a href="faqs" style="text-decoration: none;color: white">FAQs</a></li>
																		</ul>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class='col-md-12' id="social-networks">
										<a href="https://twitter.com/FCRITcodersclub" style="text-decoration: none">
												<div id="twitter" class="social-sprites"></div>
										</a>
										<a href="#" style="text-decoration: none">
												<div id="facebook" class="social-sprites"></div>
										</a>
										<a href="https://plus.google.com/u/2/110531617173128497831" style="text-decoration: none">
												<div id="google" class="social-sprites"></div>
										</a>
										<a href="#" style="text-decoration: none">
												<div id="linkedin" class="social-sprites"></div>
										</a>
								</div>
								<div class="col-md-12" id="make">
										<small>&lt;Made by Coders' Club&copy;,FCRIT/&gt;</small></i>
								</div>
						</div>
		<!--===========END OF FOOTER======================-->


				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
				<script src="styles/bootstrap/js/bootstrap.min.js"></script>



</body>
</html>
