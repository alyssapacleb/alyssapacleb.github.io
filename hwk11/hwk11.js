function checkAnswers() {
    counter = 0;
    var radOne = document.getElementsByName('1');
    var radTwo = document.getElementsByName('2');
    var checkThree = document.getElementsByName('3');
    var checkFour = document.getElementsByName('4');
    var textFive = document.getElementById('5').value;
    var textSix = document.getElementById('6').value;


    // 1 =================================================================
    var oneArr = [];

    if (radOne[0].checked || radOne[1].checked) {
        for (var i = 0, length = radOne.length; i < length; i++) {
            if (radOne[i].checked) {
                if (radOne[i].value === "false") {
                    oneArr.push(radOne[i].value);
                    //alert("1 Correct");
                    counter += 1
                }
                break;
            }
        }
    }
    else {
        alert("Enter Answer for Question 1");
        return false;
    }

    //alert("1: Your grade is " +counter+ "/6");

    // 2 =================================================================
    var twoArr = [];
    if (radTwo[0].checked || radTwo[1].checked) {
        for (var i = 0, length = radTwo.length; i < length; i++) {
            if (radTwo[i].checked) {
                if (radTwo[i].value === "true") {
                    twoArr.push(radTwo[i].value);
                    //alert("2 Correct");
                    counter += 1
                }
                break;
            }
        }
    }
    else {
        alert("Enter Answer for Question 2");
        return false;
    }

    //alert("2: Your grade is " +counter+ "/6");

    // 3 =================================================================
    var threeArr = [];

    for (var i = 0, length = checkThree.length; i < length; i++) {
        if (checkThree[i].checked) {
            threeArr.push(checkThree[i].value);
        }
    }

    if (threeArr.length == 0){
        alert("Enter Answer for Question 3");
        return false;
    }

    if (threeArr.length === 1 && checkThree[1].checked){
        counter += 1;
        //alert("3 Correct")
    }

    //alert("3: Your grade is " +counter+ "/6");

    // 4 =================================================================
    var fourArr = [];

    for (var i = 0, length = checkFour.length; i < length; i++) {
        if (checkFour[i].checked) {
            fourArr.push(checkFour[i].value);
        }
    }

    if (fourArr.length == 0){
        alert("Enter Answer for Question 4");
        return false;
    }

    if (fourArr.length === 1 && checkFour[3].checked) {
        counter += 1;
        //alert("4 Correct")
    }

    //alert("4: Your grade is " +counter+ "/6");

    // 5 ================================================================= ok
    var ansFive = /galaxy/i;
    if (textFive == "") {
        alert("Enter Answer for Question 5");
        return false;
    }
    else {
        if (textFive.match(ansFive)) {
            //alert("5 Correct");
            counter += 1
        }
    }



    //alert("5: Your grade is " +counter+ "/6");

    // 6 ================================================================= ok

    var ansSix = /age/i;

    if (textSix == "") {
        alert("Enter Answer for Question 6");
        return false;
    }
    else {
        if (textSix.match(ansSix)) {
            //alert("6 Correct");
            counter += 1
        }
    }


    alert("6 Your grade is " +counter+ "/6");

    return true;
}

