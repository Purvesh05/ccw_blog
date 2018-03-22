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
     
		
     <div class="container-fluid">
     	<h1 class="display-2 text-center">Leaderboard</h1>
     	<table class="table  table-bordered table-hover">
     	<thead>
     		<th>#</th>
     		<th>Username</th>
     		<th>Points</th>
     	</thead>
     	<tbody>
     	
     	                	<?php
	
			
			session_start();
			// For local hosting
			require('db_conn.php');

			if(!$conn)
			{
				$result = 500;
				header("Location: result.php?err=$result"); 
			}
			else
			{
				$sql = "Select * from profiles order by points desc";
				$result = mysqli_query($conn,$sql);
				$count=1;
				if(!$result)
				{
					$result = 500;
					header("Location: result.php?err=$result"); 
				}
				else
				{
					if(mysqli_num_rows($result)==0)
					{
						echo("No Blogs Have been Added Yet.");
					}
					else
					{
						{
      				while($data = mysqli_fetch_array($result))
					{	
						
						$roll_no = $data['roll_no'];
						$first_name = $data['first_name'];
						$last_name = $data['last_name'];
						$points = $data['points']
						
					
					?>
		
     	
     	
     	
     		<tr>
     			<td><?php echo $count; ?></td>
     			<td><?php echo $first_name ." ". $last_name; ?></td>
     			<td><?php echo $points ?></td>
     		</tr>
     		
     		<?php 
					$count=$count+1;
					} } } }}
	?>
     	</tbody>
     </table>
     </div>
     
     
     
     
     
     
     
     
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