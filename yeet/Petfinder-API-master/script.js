var apiKey = 'DCvN4VnCtzLaCzo9S96TxUIM5gMhzZam24UBFQ4f0SiO3xynSk'; 

document.addEventListener('DOMContentLoaded', bindButtons);

function bindButtons(){
	document.getElementById('submitZip').addEventListener('click', function(event){
		event.preventDefault();
		var zip = document.getElementById('zip').value; 
		//var gender = document.getElementById('gend').value;
		var url = 'https://cors.io/?https://api.petfinder.com/pet.getRandom';
		
		$.ajax({
			url: url,
			jsonp: "callback",
			//type: 'GET',
			dataType: "jsonp",
			contentType: "application/json; charset=utf-8",
			data: {
				key: apiKey,
				'sex':'F',
				animal: 'dog',
				'location': zip,
				output: 'basic',
				format: 'json'
			},
			
			// Here is where we handle the response we got back from Petfinder
			success: function( response ) {
				
				console.log(response); // debugging
				var dogName = response.petfinder.pet.name.$t;
				var img = response.petfinder.pet.media.photos.photo[0].$t;
				var id = response.petfinder.pet.id.$t;

				var newName = document.createElement('a');
				var newDiv = document.createElement('div');
				newName.textContent = dogName;
				newName.href = 'https://www.petfinder.com/petdetail/' + id;

				var newImg = document.createElement('img');
				newImg.src = img;
				
				var list = document.createElement("ul");
				list.setAttribute("id", "List");
				document.body.appendChild(list);

				newDiv.appendChild(newName);
				list.appendChild(newDiv);
				list.appendChild(newImg);
			}
		});
		})

}

