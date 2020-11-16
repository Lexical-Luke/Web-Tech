<?php

$message ="";
if (isset($_SERVER["SERVER_NAME"])){
$servernm = $_SERVER["SERVER_NAME"];
}
else
{
	$servernm = "the Server"; 	
}

if (isset($_POST['hiddenData'])){
	if ((int)($_POST['hiddenData'])>0){
	$message ="A big thank you from" . $servernm .". Pls continue to visit us!";		
	}
}
?>

<html>
<head>

<script>
	document.addEventListener('DOMContentLoaded', () => {
		let counter = 0;
		if ((!localStorage.getItem('noOfVisits'))  || (localStorage.getItem('noOfVisits') == 0))  {    
			localStorage.setItem('noOfVisits', 1);
	}
	else
		{			
			counter = localStorage.getItem('noOfVisits');						
				if (counter++ <= 5) 
					localStorage.setItem('noOfVisits', counter);					
				else	
				{
					alert("On behalf of the Server thank you for being a fan of our page");
					localStorage.setItem('noOfVisits', 0);
					document.getElementById('hidef').innerHTML=5
			} 
			
		}	
		});
</script>

</head>
<body>
<form method="post">
<input type="text" name="name"/> <br />
<input type="hidden" id="hidef" name="hiddenData" value="0"/> <br />
<input type="submit" value="Submit">
</form>


</body>
</html>