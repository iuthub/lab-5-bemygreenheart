<!DOCTYPE html>
<html>
<head>
	<title>Form Handler</title>
	<link rel="stylesheet" type="text/css" href="buyagrade.css">
</head>
<body>

<?php 
if ($_SERVER['REQUEST_METHOD']=="POST") {
 ?>

 <?php if(isset($_POST['name'])&&isset($_POST['section'])&&isset($_POST['credit_card'])&&isset($_POST['cardType'])&& !empty($_POST['name'])&& !empty($_POST['section'])&& !empty($_POST['credit_card'])&& !empty($_POST['cardType'])) {?>
 	<h1>Thanks, Sucker</h1>
 	<p>Your information has been collected:</p>
 	<p> Name: <?php echo $_POST['name'] ?></p>
 	<p> Section: <?php echo $_POST['section'] ?></p>
 	<p> Name: <?php echo $_POST['credit_card'] ?></p>

 	<?php 
 	$file="C:\\xampp\htdocs\lab-5-bemygreenheart\webpage\suckers.txt";
 	$data=$_POST['name']. ";". $_POST['credit_card']. ";". $_POST['section']. ";". $_POST['cardType']. ";\n";
 	if(file_get_contents($file)==''){
 	file_put_contents($file, $data);
 }
     else{
     	$current=file_get_contents($file);
     	$current=$current. $data;
     	file_put_contents($file, $current);
     }
     echo "<pre>$current</pre>";
 	 ?>

 <?php }else{ ?>
 	<h1>Sorry</h1>
 	<p>you didn't filled the form completely, please <a href="buyagrade.html">try again</a></p>
 <?php } ?>
  <?php } ?>
</body>
</html>