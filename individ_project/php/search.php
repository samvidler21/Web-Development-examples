<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Search</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>
   <h1>Search Page</h1>
  <div id="nav">
      <nav>
      <ul>
        <li><a href="../index.php">Index</a></li>
        <li><a href="search.php">Search</a></li>
        </ul>
      </nav>      
  </div>
<section>
        <form action="search.php" method="POST">
        <label for="search">Enter a car make</label> 
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
        $msg = "You need to enter a car make";
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
$stmt = $conn->prepare("SELECT * FROM make WHERE Name LIKE :searchTerm");
$stmt->bindValue(':searchTerm','%'.$searchTerm.'%');
$stmt->execute();
while ($car_make = $stmt->fetch())
{
    echo "<ul>";
    echo "<a href='details.php?id=" . $car_make["id"] . "'>";
    echo $car_make["Name"];
    echo "</a>";
    echo "</ul>";
}
}
	
$conn=NULL;
?>
<footer>Car Search finder copyright 2017</footer>
</section>
  </body>
</html>