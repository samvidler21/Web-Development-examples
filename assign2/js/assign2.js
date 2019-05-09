
function login(){
var emailAddressCtrl=document.getElementById("emailAddress");
var msgDiv=document.getElementById("msgDiv");
var msg;
var emailAddress=emailAddressCtrl.value;
if(emailAddress==="")
{
    msg="Try Again";
}
    else
    {
    msg="Welcome";
    }
    msgDiv.removeChild(msgDiv.firstChild);
    msgDiv.appendChild(document.createTextNode(msg));
};
var btn=document.getElementById("loginBtn")
btn.addEventListener("click",login,false);

function hotel(Name, Stars, Distance, Wifi, Pets, SwimmingPool, PriceperNight, BreakfastPrice)
{
	var newhotel={
		Name : Name,
		Stars : Stars,
		Distance : Distance,
        Wifi : Wifi,
        Pets : Pets,
        SwimmingPool : SwimmingPool,
        PricePerNight : PriceperNight,
        BreakfastPrice : BreakfastPrice
	}
	return newhotel;
}
var divElem = document.getElementById("content");

var hotels=[];
hotels.push( hotel("The Grand", "5 ", "0.5 miles", "Yes", "No", "No", "190", "25") );
hotels.push( hotel("The Plaza", "4", "1 mile", "Yes", "No", "Yes", "70", "8") );
hotels.push( hotel("The Lord Milburn", "4", "5 miles", "Yes", "Yes", "No", "65", "5") );
hotels.push( hotel("The Grange", "3", "1 mile", "Yes", "No", "No", "57", "0") );
hotels.push( hotel("The Windmill", "1", "10 miles", "No", "No", "No", "5", "2") );
hotels.push( hotel("The Excel", "3", "0.5 miles", "Yes", "Yes", "No", "56", "6") );
hotels.push( hotel("The Ritz", "2", "5 miles", "Yes", "No", "No", "14", "5") );
hotels.push( hotel("The Victoria", "4", "0.5 miles", "Yes", "No", "No", "80", "7") );
hotels.push( hotel("Phoenix House", "4", "1 mile", "Yes", "No", "No", "72", "8") );
hotels.push( hotel("The Lodge", "2", "1 mile", "No", "No", "No", "25", "5") );
hotels.push( hotel("The Sanctum", "5", "2 miles", "Yes", "No", "Yes", "180", "40") );


function priceperNight(){
var WifiFormCtrl=document.getElementById("Yes");
var WifiFormCtrl=document.getElementById("No")
    var messageDiv=document.getElementById("messageDiv");
    var message;
    var WifiForm=WifiFormCtrl.value;
    
var PetsFormCtrl=document.getElementById("Yes");
var PetsFormCtrl=document.getElementById("No");
    var messageDiv=document.getElementById("messageDiv");
    var message;
    var PetsForm=PetsFormCtrl.value;
    
var SwimmingPoolFormCtrl=document.getElementById("Yes");
var SwimmingPoolFormCtrl=document.getElementById("No");
    var messageDiv=document.getElementById("messageDiv");
    var message;
    var SwimmingPoolForm=SwimmingPoolFormCtrl.value;
    
var starRatingCtrl=document.getElementById("starRating");
var starRatingCtrl=document.getElementById("starRating");
var messageDiv=document.getElementById("messageDiv");
var message;
var starRating=starRatingCtrl.value;
    
var DistanceCtrl=document.getElementById("Distance");
var messageDiv=document.getElementById("messageDiv");
var message;
var Distance=DistanceCtrl.value;
    
var breakfastPriceCtrl=document.getElementById("breakfastPrice");
var messageDiv=document.getElementById("messageDiv");
var message;
var breakfastPrice=breakfastPriceCtrl.value;

var priceperNightCtrl=document.getElementById("priceperNight");
var messageDiv=document.getElementById("messageDiv");
var message;
var priceperNight=priceperNightCtrl.value;

if (WifiForm==="Yes")
{
    message="The Grand, The Plaza, The Lord Milburn, The Grange, The Excel, The Ritz, The Victoria, Phoenix House, The Sanctum";
}
if (PetsForm==="Yes")
{
    message="The Lord Milburn and The Excel";
}
if (SwimmingPoolForm==="Yes")
{
    message="The Plaza and The Sanctum";
}
if (starRating==="1")
{
    message="The Windmill";
}
if (starRating==="2")
{
    message="The Ritz and The Lodge";
}
if (starRating==="3")
{
    message="The Grange and The Excel";
}
if (starRating==="4")
{
    message="The Victoria, Phoenix House, The Plaza, The Lord Milburn";
}
if (starRating==="5")
{
    message="The Grand and The Sanctum";
}
if (Distance==="0.5 miles")
{
    message="The Grand, The Excel, The Victoria";
}
if (Distance==="1 mile")
{
    message="The Plaza, The Grange, Phoenix House, The Lodge";
}
if (Distance==="2 miles")
{
    message="The Sanctum";
}
if (Distance==="5 miles")
{
    message="The Lord Milburn and The Ritz";
}
if (Distance==="10 miles")
{
    message="The Windmill";
}
if (breakfastPrice==="0")
{
    message="The Grange";
}
if (breakfastPrice==="0")
{
    message="The Grange";
}
if (breakfastPrice==="2")
{
    message="The Windmill";
}
if (breakfastPrice==="5")
{
    message="The Lord Milburn, The Ritz, The Lodge";
}
if (breakfastPrice==="6")
{
    message="The Excel";
}
if (breakfastPrice==="7")
{
    message="The Victoria";
}
if (breakfastPrice==="8")
{
    message="The Plaza and Phoenix House";
}
if (breakfastPrice==="25")
{
    message="The Grand";
}
if (breakfastPrice==="40")
{
    message="The Sanctum";
}
if (priceperNight==="5")
{
    message="The Windmill";
}
if (priceperNight==="14")
{
    message="The Ritz";
}
if (priceperNight==="25")
{
    message="The Lodge";
}
if (priceperNight==="56")
{
    message="The Excel";
}
if (priceperNight==="57")
{
    message="The Grange";
}
if (priceperNight==="65")
{
    message="The Lord Milburn";
}
if (priceperNight==="70")
{
    message="The Plaza";
}
if (priceperNight==="72")
{
    message="Phoenix House";
}
if (priceperNight==="80")
{
    message="The Victoria";
}
if (priceperNight==="180")
{
    message="The Sanctum";
}
if (priceperNight==="190")
{
    message="The Grand";
}
    messageDiv.removeChild(messageDiv.firstChild);
    messageDiv.appendChild(document.createTextNode(message));
};

varBtn=document.getElementById("priceperNight")
GoBtn.addEventListener("click",priceperNight,false);
