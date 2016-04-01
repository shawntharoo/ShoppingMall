<?php


$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';


$max_file_size = 3000000; // size in bytes

?>



<!DOCTYPE html>


<html lang="en">

<head>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Fashion Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

<script type="text/javascript">

function validateform(){

 if (document.test.name.value == "")
   {
      alert("Please enter the name");
      document.test.name.focus();
      return false;
   }
   if (document.test.birthday.value == "")
   {
      alert("Please enter the Birth Day");
      document.test.birthday.focus();
      return false;
   }
   if (document.test.address.value == "")
   {
      alert("Please enter the Address");
      document.test.address.focus();
      return false;
   }
   if (document.test.tel.value == "")
   {
      alert("Please enter the Tel No");
      document.test.tel.focus();
      return false;
   }
   if (document.test.email.value == "")
   {
      alert("Please enter the Email");
      document.test.email.focus();
      return false;
   }
   if (document.test.username.value == "")
   {
      alert("Please enter the User Name");
      document.test.username.focus();
      return false;
   }
   if (document.test.password.value == "")
   {
      alert("Please enter the Password");
      document.test.password.focus();
      return false;
   }
return true;

}
</script>


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
                <a class="navbar-brand" href="#">OnlineFashion.lk</a>
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
                        <a href="#">Register</a>
                    </li>
					 <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
              <!-- Page Content start -->
			 <center>
			 <form id="Upload" action="<?php echo $uploadHandler ?>" 
			 enctype="multipart/form-data" method="post">
	
			 
			 <div class="form-group">
 
			<!-- <label for="inputName" class="control-label col-xs-2">Name</label>
			 -->	

			<input type="text" name="code" class="form-control" style="width:75%" placeholder="Enter Your Product Code" />
			
			</div>
			
			 <div class="form-group">
 
			<!-- <label for="inputBirthDay" class="control-label col-xs-2">Birth Day</label>
			 -->	

			<input type="text" name="pname" class="form-control" style="width:75%" placeholder="Enter Product Name" />
			
			</div>
			 <div class="form-group">
 
			<!-- <label for="inputBirthDay" class="control-label col-xs-2">Birth Day</label>
			 -->	

			<input type="text" name="desc" class="form-control" style="width:75%" placeholder="Enter Product Description" />
			
			</div>
			
			
			<div class="form-group">
 
			<!-- <label for="inputBirthDay" class="control-label col-xs-2">Birth Day</label>
			 -->	

			<input id="file" type="file" name="file" class="form-control" style="width:75%" placeholder="Enter Product Description" />
			
			</div>
			 <div class="form-group">
 
			<!-- <label for="inputBirthDay" class="control-label col-xs-2">Birth Day</label>
			 -->	

			<input type="text" name="price" class="form-control" style="width:75%" placeholder="Enter Product Price" />
			
			</div>
			
			
			
			
			
			<div class="form-group">
			
			<!-- meka button ekata adala code eka -->
			
			<input id="submit" type="submit" name="submit" value="Submit!" class="btn btn-primary">
			
			</div>
			</form>
			  </center>
			  
			  
			  
			  
			  
			  
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
