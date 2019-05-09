
<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div>
	<h1>Search Page</h1>
    <div id="nav">
    <nav>
	<ul>
		<li><a href="./php/design.php">Database Design and Implementation</a></li>
		<li><a href="index.php">Search</a></li> 
	</ul>
    </nav>
    </div>
    <section>
        <form action="index.php" method="POST">
        <label for="search">Enter a badge name</label> 
        <input type="text" name="search" id="search"> 
        <input name="submit" type="submit" value="Search">
	</form>
<?php 
$msg="";
$userAns="";
if(isset($_POST["submit"]))
{
    $userAns=$_POST["search"];
    if($userAns===""){
        $msg = "You need to enter a badge name";
        echo "<p3>".$msg."</p3>";
    }    
try{
    $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$searchTerm=$_POST['search'];
$stmt = $conn->prepare("SELECT * FROM badges WHERE Name LIKE :searchTerm");
$stmt->bindValue(':searchTerm','%'.$searchTerm.'%');
$stmt->execute();
		
while ($badges = $stmt->fetch())
{
    echo "<ul>";
    echo "<a href='php/details.php?id=" . $badges["id"] . "'>";
    echo $badges["Name"];
    echo "</a>";
    echo "</ul>";
}
}
	
$conn=NULL;
?>
</section>
</div>
</body>
</html>