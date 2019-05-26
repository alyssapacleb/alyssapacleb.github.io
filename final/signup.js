document.getElementById("textForm").onsubmit = validate;
function validate ()
{
    var ok = false;
    var elt = document.getElementById("textForm");
    var letNum = /^[0-9a-zA-Z]+$/;
    var passexp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])/
    var num = /^[0-9]/;
    var user = elt.userName.value;
    var pass = elt.password.value;
    var repPass = elt.repeatPassword.value;

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 1
    // CHECK IF USERNAME IS BETWEEN 6 AND 10 CHARACTERS

    // TEST 1 FAILED
    if (user === "") {
        ok = false;
        //window.alert ("Enter name");
        // TEST 1 FAILED
    } else if (user.length < 6 || user.length > 10) {
        ok = false;
        //window.alert ("Name must be between 6 and 10 characters");
        // TEST 1 PASSED
    } else {
        // The username is between 6 and 10 characters
        ok = true;
        //window.alert("all good 1 " + ok);

    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 2
    // TEST IF USERNAME IS ONLY LETTERS AND NUMBERS

    // TEST 2 PASSED
    if (user.match(letNum)) {
        // if TEST 1 was not valid, make sure that TEST 2 is still is not valid.
        if (ok === false) {
            ok = false;
        }
        // but if TEST 1 was valid, you can set TEST 2 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 2 " + ok);
        // if TEST 2 FAILED
    } else {
        // if it passed TEST 1 and failed TEST 2, fail it all
        if (ok === true) {
            ok = false;
        } else {
            ok = false;
        }
        //window.alert("Username must only have letters and numbers");
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 3
    // TEST IF FIRST CHARACTER OF USERNAME IS A DIGIT.

    // TEST 3 FAILED
    if (user.match(num)) {
        // if it passed TEST 1 and TEST 2 but failed TEST 3, fail it all
        if (ok === true) {
            ok = false; //fail it all
        } else {
            ok = false;
        }
        //window.alert("First must not be digit");

        // TEST 3 PASSED
    } else {
        // if TEST 1 or TEST 2 was not valid, make sure that TEST 3 is still is not valid.
        if (ok === false) {
            ok = false;
        }
        // but if TEST 1 and TEST 2 were valid, you can set TEST 3 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 3 " + ok);

    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 4
    // TEST IF PASSWORD AND REPEAT PASSWORD MATCH

    // TEST 4 PASSED
    if (pass === repPass) {
        // if TEST 1, 2 or 3 were not valid, make sure that TEST 4 is still is not valid.
        if (ok === false) {
            ok = false;
        }
        // but if TEST 1, 2, or 3 were valid, you can set TEST 4 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 4 " + ok);
    }

    // TEST 4 FAILED
    else {
        // if it passed TEST 1, 2, and 3 but failed TEST 4, fail it all
        if (ok === true) {
            ok = false; //fail it all
        } else {
            ok = false;
        }
        //window.alert("Passwords do not match");
    }



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 5
    // PASSWORD MUST BE BETWEEN 6 AND 10 CHARACTERS

    // TEST 5 FAILED
    if (pass === "") {
        if (ok === true) {
            ok = false; //fail it all
        } else {
            ok = false;
        }
        //window.alert ("Enter password");

        // TEST 5 FAILED
    } else if (user.length < 6 || user.length > 10) {
        if (ok === true) {
            ok = false; //fail it all
        } else {
            ok = false;
        }
        //window.alert ("Password must be between 6 and 10 characters");

        // TEST 5 PASSED
    } else {
        // The username is between 6 and 10 characters
        if (ok === false) {
            ok = false;
        }
        // but if TESTS were valid, you can set TEST 6 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 5 " + ok);
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 6
    // PASSWORD MUST ONLY BE LETTERS AND DIGITS

    // TEST 6 PASSED
    if (pass.match(letNum)) {
        // if TESTS were not valid, make sure that TEST 6 is still is not valid.
        if (ok == false) {
            ok = false;
        }
        // but if TESTS were valid, you can set TEST 6 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 6 " + ok);

        // TEST 6 FAILED
    } else {
        // if it passed TESTS but failed TEST 6, fail it all
        if (ok === true) {
            ok = false;
        } else {
            ok = false;
        }
        //window.alert("Password must only have letters and numbers");
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // TEST 7
    // PASSWORD MUST HAVE AT LEAST ONE LOWER CASE LETTER
    // PASSWORD MUST HAVE AT LEAST ONE UPPERCASE LETTER
    // PASSWORD MUST HAVE ONE DIGIT

    // TEST 7 PASSED
    if (pass.match(passexp)) {
        // if TEST were not valid, make sure that TEST 7 is still not valid.
        if (ok == false) {
            ok = false;
        }
        // but if TESTS were valid, you can set TEST 7 to valid as well.
        else {
            ok = true;
        }
        //window.alert("all good 7 " + ok);
    }

    // TEST 7 FAILED
    else {
        // if it passed TESTS but failed TEST 7, fail it all
        if (ok === true) {
            ok = false;
        } else {
            ok = false;
        }
        //window.alert("Password must have a number, a capital, and a lowercase letter");
    }



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    if (ok === false) {
        window.alert("Invalid Input")
    } else {
        window.alert("Passed validation")
    }
    return ok
}