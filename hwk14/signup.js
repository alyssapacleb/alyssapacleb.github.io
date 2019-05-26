document.getElementById("textForm").onsubmit = validate;
function validate ()
{
    var ok = false;
    var elt = document.getElementById("textForm");
    var letNum = /^[0-9a-zA-Z]+$/;
    var passexp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/;
    var num = /^[0-9]/;
    var user = elt.userName.value;
    var pass = elt.password.value;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 1
    // CHECK IF USERNAME IS BETWEEN 6 AND 10 CHARACTERS

    // TEST 1 FAILED
    if (user === "" || pass === "") {
        ok = false;
        //window.alert ("Enter name");
        // TEST 1 FAILED
    } else {
        // The username is between 6 and 10 characters
        ok = true;
        //window.alert("all good 1 " + ok);
    }


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if (ok === false) {
        window.alert("Invalid Input")
    } else {
        window.alert("Passed validation")
	location.reload();
    }
    return ok
}


