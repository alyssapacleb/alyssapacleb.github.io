var xhr;
if (window.ActiveXObject){
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
else if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
}
                
function callServer() {
        var un = document.getElementById("user").value;

        var url ="/cs329e-mitra/apacleb/hwk17/dataExtract.php?username=" + escape(un);
	
        var params = "userName=user";
        
        xhr.open("POST", url, true);
        
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = updatePage;
        
        xhr.send(params);

}

function updatePage() {
        if (xhr.readyState === 4) {
                if (xhr.status === 200) { 
                        var username_used = xhr.responseText; 
			console.log(username_used);
			if (username_used === "true") {
                                window.alert("Username already used");
                	}
        	}
	}
}



