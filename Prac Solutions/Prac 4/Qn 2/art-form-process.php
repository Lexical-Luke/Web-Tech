<?php
// initialize data
$first = '';
$last = '';
$email = '';
$privacy = 'No';


// retrieve form data 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if ( isset($_POST['first']) ) {
      $first = $_POST['first'];
   }
   if ( isset($_POST['last']) ) {
      $last = $_POST['last'];
   }
   if ( isset($_POST['email']) ) {
      $email = $_POST['email'];
   }
   if ( isset($_POST['privacy']) ) {
      $privacy = 'Yes';
   }   
}   

// create array for menu
$menu = ["Login","Register","Password Recovery","My Account","Returns","Order History"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS -->
 <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="chapter09-project01.css" rel="stylesheet">

 <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
 <![endif]-->
</head>

<body>



<?php include 'art-header.inc.php' ?>

<div class="container">


   
   <div class="row">
      <div class="col-md-3">
      
         <div class="panel panel-default">
           <div class="panel-heading">Account</div>
           <div class="panel-body">

           <ul class="nav nav-pills nav-stacked">
           <?php
            foreach ($menu as $item) {
               if ($item == 'Register') 
                  echo '<li class="active">';
               else
                  echo '<li>';
               echo '<a href="#">';
               echo $item;
               echo '</a></li>';
            }
           ?>
         </ul>  
           
           
           </div>
         </div>      

      </div>
      <div class="col-md-9">
      
         <div class="page-header">
            <h2>My Account</h2>
            <p>Welcome <?php echo $first . ' ' . $last; ?>.</p>   
         </div>
         
         <div class="well">
            <p>Email: <strong><?php echo $email; ?></strong></p>
            <p>First Name: <strong><?php echo $first; ?></strong></p>
            <p>Last Name: <strong><?php echo $last; ?></strong></p>       
            <p>Agreed to privacy policy? <strong><?php echo $privacy; ?></strong></p>     
         </div>
      </div>  
   </div> 
      

   


</div>  <!-- end container -->

<?php include 'art-footer.inc.php' ?>

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
