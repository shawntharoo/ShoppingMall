<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Accesories Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	<style>
	
 /*   body {
        padding-top: 70px;
		background: url(images/images.jpg) no-repeat center center fixed; 

			background-size: cover;
      /*   Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }  */
    </style> 



</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php session_start(); echo "Hi Welcome ".$_SESSION['txtuname']; ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
					 <li>
                        <a href="register.html">Register</a>
                    </li>
					 <li>
                        <a href="login.html">Login</a>
                    </li>
					<li>
                        <a href="login.html">Contact</a>
                    </li>
                    <li>
                        <a href="login.html">Signout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	</br>
	</br>
	</br>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
              <!-- Page Content start -->
			  <h1>Registered users information.....</h1></br>

			  <table class="table table-bordered"; style="border-color:red">
			  <caption> <?php echo "".$_SESSION['txtuname']."'s"; ?> information</br></br></caption>
			  <thead>
			    <tr class="success">
				    <th>ID</th>
					<th>NAME</th>
					<th>BIRTHDAY</th>
					<th>ADDRESS</th>
					<th>TEL</th>
					<th>EMAIL</th>
					<th>USERNAME</th>
			
				</tr>
			   </thead>
               <tbody>				
			  
<?php
/* session_start(); */
	/*$_SESSION['txtuname']=$name;  */
	/* echo 'Hi welcome :' .$_SESSION['txtuname']; */
	/* echo '<br>';
	echo'<a href="signout.php">signout</a>'; */
$type=$_SESSION['txtuname']; 




        $con=mysqli_connect("localhost","cybermart","calm","php");
		//check connection
		if(mysqli_connect_errno())
        {
		echo "Failed To Connect To Mysql" . mysqli_connect_error();
		}
		
		$result=mysqli_query($con,"select * from register WHERE username='".$type."'");
		
		/* echo "<table border ='1'>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Birthday</th>
		<th>Address</th>
		<th>Tel</th>
		<th>Email</th>
		<th>Username</th>
		<th>Password</th>
		
		</tr>"; */
		
		while($row = mysqli_fetch_array($result))
		{
		echo "<tr>";
		echo "<td>" . $row ['id']. "</td>";
		echo "<td>" . $row ['name']. "</td>";
		echo "<td>" . $row ['birthday']. "</td>";
		echo "<td>" . $row ['address']. "</td>";
		echo "<td>" . $row ['tel']. "</td>";
		echo "<td>" . $row ['email']. "</td>";
		echo "<td>" . $row ['username']. "</td>";
		/* echo "<td>" . $row ['password']. "</td>"; */
		echo "</tr>";
		
	}
	
	echo "<table>";
	
	mysqli_close($con);
	
        
		

?>			  
			
			  
			  
			  
			  
			  
			  
			 <!-- Page Content end --> 
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	


</body>

</html>
