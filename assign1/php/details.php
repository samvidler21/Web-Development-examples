<!DOCTYPE HTML>
<html>
<head>
	<title>Details Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<section>
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
$badgesId=$_GET['id'];
$stmt = $conn->prepare("SELECT scouts.First_Name,scouts.Last_Name,badges.Name FROM badges
INNER JOIN scout_badge
ON badges.id=scout_badge.badge_id
INNER JOIN scouts
ON scouts.id=scout_badge.scout_id
WHERE badges.id=:id");
$stmt->bindValue(':id',$badgesId);
$stmt->execute();
while($badges=$stmt->fetch()){
echo"<ul> First Name ".$badges['First_Name']."</ul>";
echo"<ul> Last Name ".$badges['Last_Name']."</ul>";
echo"<ul> Badge Name ".$badges['Name']."</ul>";
}
?>
</section>
</body>
<button onclick="goBack()">Go back to search page</button>
<script>
function goBack() {
    window.history.back();
}
</script>
</html>