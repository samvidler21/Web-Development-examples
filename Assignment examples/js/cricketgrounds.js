
var cricketgroundsArray;
// var cricketgrounds;
var xmlhttp = new XMLHttpRequest();


//ajax function
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	     var myObject = JSON.parse(this.responseText);
       console.log(myObject.grounds.details);
	     cricketgroundsArray = myObject.grounds.details

      const cricketList =document.querySelector("#cricketList");
      const nameElem = document.querySelector("#name");
const locationElem = document.querySelector("#location");
      const capacityElem = document.querySelector("#capacity");
      const first_match_played_hereElem = document.querySelector("#first_match_played_here");
      const other_informationElem = document.querySelector("#other_information");
      const backBtn = document.querySelector("#backBtn");

      const txtBox=document.querySelector("#search");
      txtBox.focus();

function doSearch()
{
    const ulElem = document.querySelector("#cricketList");
    const searchTerm = search.value.toLowerCase();

    while(ulElem.firstChild){
    ulElem.removeChild(ulElem.firstChild);
	}
	function showcricketground(evnt){
		let link = evnt.target;
		let id = link.getAttribute("details-id");
		nameElem.textContent = cricketgroundsArray[id].name;
		locationElem.textContent = cricketgroundsArray[id].location;
		capacityElem.textContent = cricketgroundsArray[id].capacity;
		first_match_played_hereElem.textContent = cricketgroundsArray[id].first_match_played_here;
    other_informationElem.textContent = cricketgroundsArray[id].other_information;
		cricketList.classList.add("hide");
	}

	if (searchTerm.length>0) {
	    cricketgroundsArray.forEach(function(cricketground){
	    	if (cricketground.name.toLowerCase().search(searchTerm)> - 1){
					const link = document.createElement("a");
	    		const liElem = document.createElement("li");
	    		const txt = document.createTextNode(cricketground.name);

				link.setAttribute("details-id",cricketground.id);
				link.addEventListener("click", showcricketground, false);
	    		link.appendChild(txt);
				liElem.appendChild(link);
	    		ulElem.appendChild(liElem);
	    	}
	    });
	}
}
let findBtn=document.querySelector("#findBtn");
findBtn.addEventListener("click", doSearch, false);
search.addEventListener("keyup", doSearch, false);
}
};
xmlhttp.open("GET", "data/cricketgrounds.json", true);
xmlhttp.send();
