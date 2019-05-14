<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Payment</title>
  <link rel="stylesheet" href="../css/style.css" type="text/css">
  </head>
  <body>
  <div id="nav">
      <nav>
      <ul>
        <li><a href="../index.php">Index</a></li>
        <li><a href="search.php">Search</a></li>
        </ul>
      </nav>
    <br>
    <br>
    <br>
    <section>
    <h1>Payment page</h1>
      <p>Select a car from the drop down list and then proceed to filling in your payment details in the boxes provided below.</p>
      
<h1>Car make selection</h1>
<select>
<option value="Vauxhall">Vauxhall</option>
<option value="Citroen">Citroen</option>
<option value="Ford">Ford</option>
<option value="Nissan">Nissan</option>
<option value="Jaguar">Jaguar</option>
<option value="Seat">Seat</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Peugeot">Peugeot</option>
</select>
<h2>Car model selction</h2>
<select>
<option value="Vauxhall Astra">Vauxhall Astra</option>
<option value="Vauxhall Corsa">Vauxhall Corsa</option>
<option value="Vauxhall Zafira">Vauxhall Zafira</option>
<option value="Citroen C3">Citroen C3</option>
<option value="Citroen C5">Citroen C5</option>
<option value="Citroen C8">Citroen C8</option>
<option value="Ford Focus">Ford Focus</option>
<option value="Ford Fiesta">Ford Fiesta</option>
<option value="Ford Kuga">Ford Kuga</option>
<option value="Nissan Pulsar">Nissan Pulsar</option>
<option value="Nissan Juke">Nissan Juke</option>
<option value="Nissan Qashqai">Nissan Qashqai</option>
<option value="Jaguar XE">Jaguar XE</option>
<option value="Jaguar XF">Jaguar XF</option>
<option value="Jaguar F Pace">Jaguar F Pace</option>
<option value="Seat Ibeza SC">Seat Ibeza SC</option>
<option value="Seat Toledo">Seat Toledo</option>
<option value="Seat Leon ST">Seat Leon ST</option>
<option value="Volkswagen Polo">Volkswagen Polo</option>
<option value="Volkswagen New Golf">Volkswagen New Golf</option>
<option value="Volkswagen Tiguan">Volkswagen Tiguan</option>
<option value="Peugeot 107">Peugeot 107</option>
<option value="Peugeot 5008">Peugeot 5008</option>
<option value="Peugeot Partner">Peugeot Partner</option>
</select>
      <h3>Payment</h3>
    <fieldset>
<legend>Select Payment Option</legend>
<label for="MasterCard">MasterCard</label>
<input type="radio" name="Payment" id="MasterCard">
<label for="DebitCard">DebitCard</label>
<input type="radio" name="Payment" id="DebitCard">
<label for="Paypal">Paypal</label>
<input type="radio" name="Payment" id="Paypal">
</fieldset>
<br>
<div id="FirstName">
<label for="firstname">FirstName</label>
<br>
<input type="text" name="fname" id="firstname">
</div>
<div id="SurName">    
<label for="lastname">LastName</label>
<br>
<input type="text" name="lname" id="lastname">
</div>
<div id="Place">    
<label for="address">Address</label>
<br>
<input type="text" name="adress" id="address">
</div>
<div id="Location">    
<label for="postcode">Postcode</label>
<br>
<input type="text" name="post" id="postcode">
</div>
<div id="Card">    
<label for="cardnumber">CardNumber</label>
<br>
<input type="text" name="cardnum"  id="cardnumber">
</div>    
 <div id="Security">    
<label for="securitynumber">SecurityNumber</label>
<br>
<input type="text" name="securnum"  id="securitynumber">
</div>
<br>
<input type="button" value="Buy">
<p>Once you have bought the car you like you can close the page down.</p>
</section>
  </div>
  </body>
</html>