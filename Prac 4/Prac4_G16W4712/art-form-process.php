

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Chapter 9</title>

 <!-- Bootstrap core CSS 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
    -->
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
               <!--<li>menu items here</li>-->
               <?php
                     $Labels = array("Login","Register","Password Recovery","My Account","Returns","Order History");
                     $Register = array_search("Register", $Labels);
                     foreach($Labels as $value){
                         if(array_search($value,$Labels)==1){
                           echo "<li class='active'><a href='#'>".$value."</a></li>";
                         }
                         else{
                           echo "<li><a href='#'>".$value."</li>";
                         }
                     }
               ?>
           </ul>  
           
           
           </div>
         </div>      

      </div>
      <div class="col-md-9">
      
         <div class="page-header">
            <h2>My Account</h2>
            <p>Welcome <?php echo "<b>".$_POST["first"]. " " .$_POST["last"] . "."?> </p>   
         </div>
         
         <div class="well">
            <!--<p>passed form data here</p>-->
            <?php
            echo "Email: <b>".$_POST["email"]."</b><br><br>";
            echo "First Name: <b>".$_POST["first"]."</b><br><br>";
            echo "Last Name: <b>".$_POST["last"]."</b><br><br>";
            if (isset($_POST["privacy"])){
              echo "Agreed to private policy? <b>Yes</b>";
            }
            else{
              echo "Agreed to private policy? <b>No</b>";
            }
            ?>         
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
 <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script> -->
</body>
</html>
