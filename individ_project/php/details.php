<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Details</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>
  <?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
if(!isset($_GET['id']))
{
	echo "You shouldn't have got to this page";
	echo "</body>";
	echo "</html>";
	exit;
}
?>
<h1>Car Details page</h1>
<section>
<button onclick="goBack()">Go back to search page</button>
<script>
function goBack() {
    window.history.back();
}
</script>
<p>Click on the payment link at the bottom to continue if you would like to buy a car. Or if you would like to search for a different car make then click the back button above.</p>
<?php
$makeId=$_GET['id'];
$stmt = $conn->prepare("SELECT model.Name,model.Mileage,model.Location,model.Price FROM make
INNER JOIN make_model
ON make.id=make_model.make_id
INNER JOIN model
ON model.id=make_model.model_id
WHERE make.id=:id");
$stmt->bindValue(':id',$makeId);
$stmt->execute();
while($make=$stmt->fetch()){
echo"<ul> Name ".$make['Name']."</ul>";
echo"<ul1> Mileage ".$make['Mileage']."</ul1>";
echo"<ul1> Location ".$make['Location']."</ul1>";
echo"<ul1> Price ".$make['Price']."</ul1>";
}
?>
<br>
<br>
<br>
<a href="payment.php">Payment</a>
</section>
</body>


</html>