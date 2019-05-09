<!DOCTYPE html>
<html>
<head>
	<title>Design Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>
<body>
<h1>Database Design and Implementation</h1>
<div id="nav">
<nav>
<ul>
	<li><a href="design.php">Database Design and Implementation</a></li>
	<li><a href="../index.php">Search</a></li>
</ul>
</nav>
</div>
    <section>
<h2>My Scenario description</h2>
<p1>My scenario is a search facility which allows people to view details of scouts who have completed a specific badge.</p1>
<h2>Class Diagram</h2>
<img src="../images/class%20diagram.jpg" alt="Class Diagram">
<h2>Physical Data Model</h2>
<img src="../images/data%20model.jpg" alt="Physical Data Model">
<h2>Database Tables</h2>
<h3>Badges</h3>
<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}        
$query = "SELECT * FROM badges";
$resultset = $conn->query($query);
echo "<table>";
echo "<tr><th>id</th><th>Name</th><th>Type</th><tr>";
while ($badges = $resultset->fetch()) 
{
echo"<tr>";
echo "<td>".$badges["id"]."</td>"; 
echo "<td>".$badges["Name"]."</td>"; 
echo "<td>".$badges["Type"]."</td>"; 
echo "</tr>";
}
echo "</table>";
$conn=NULL;
?>
<h3>Scouts</h3>
<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT * FROM scouts ";
$resultset = $conn->query($query);
echo "<table>";
echo "<tr><th>id</th><th>First_Name</th><th>Last_Name</th><th>Date_Of_Birth</th><th>Group_id</th><tr>";
while ($scouts = $resultset->fetch())
{
echo"<tr>";
echo "<td>".$scouts["id"]."</td>"; 
echo "<td>".$scouts["First_Name"]."</td>"; 
echo "<td>".$scouts["Last_Name"]."</td>"; 
echo "<td>".$scouts["Date_Of_Birth"]."</td>"; 
echo "<td>".$scouts["Group_id"]."</td>"; 
echo "</tr>";
}
echo "</table>";
$conn=NULL;
?>
<h3>Groups</h3>
<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT * FROM groups ";
$resultset = $conn->query($query);
echo "<table>";
echo "<tr><th>id</th><th>Name</th><th>Meeting_Night</th><tr>";
while ($groups = $resultset->fetch())
{
echo"<tr>";
echo "<td>".$groups["id"]."</td>"; 
echo "<td>".$groups["Name"]."</td>"; 
echo "<td>".$groups["Meeting_Night"]."</td>"; 
echo "</tr>";
}
echo "</table>";
$conn=NULL;
?>
<h3>Scout_badge</h3>
<?php
try{
       $conn = new PDO('mysql:host=localhost;dbname=u1563107', 'u1563107', '28may97');
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT * FROM scout_badge ";
$resultset = $conn->query($query);
echo "<table>";
echo "<tr><th>scout_id</th><th>badge_id</th><tr>";
while ($scout_badge = $resultset->fetch())
{
echo"<tr>";
echo "<td>".$scout_badge["scout_id"]."</td>"; 
echo "<td>".$scout_badge["badge_id"]."</td>"; 
echo "</tr>";
}
echo "</table>";
$conn=NULL;
?>
            <ul>
                <li>
                    <a href="#top">Top of the page</a>
                </li>
            </ul>
</section>
</body>
</html>