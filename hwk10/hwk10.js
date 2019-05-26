/*
Define variables for the values computed by the grabber event
handler but needed by mover event handler
*/
var diffX, diffY, theElement;
var started = false;

function startTimer() {
    timeStart = new Date().getTime();
    tInterval = setInterval(displayTime, 1000);
    started = true;
    return(started)

}

// The event handler function for grabbing the word
function grabber(event) {

    // Set the global variable for the element to be moved

    theElement = event.currentTarget;

    // Determine the position of the word to be grabbed,
    //  first removing the units from left and top

    var posX = parseInt(theElement.style.left);
    var posY = parseInt(theElement.style.top);

    // Compute the difference between where it is and
    // where the mouse click occurred

    diffX = event.clientX - posX;
    diffY = event.clientY - posY;

    // Now register the event handlers for moving and
    // dropping the word
    if (started === true) {
        document.addEventListener("mousemove", mover, true);
        document.addEventListener("mouseup", dropper, true);
    }

    // Stop propagation of the event and stop any default
    // browser action

    event.stopPropagation();
    event.preventDefault();

}  //** end of grabber

// *******************************************************

// The event handler function for moving the word

function mover(event) {
    // Compute the new position, add the units, and move the word

    var myX = event.clientX - diffX;
    var myY = event.clientY - diffY;
    var modX = myX % 100;
    var modY = myY % 100;

    theElement.style.left = myX + "px";
    theElement.style.top = myY + "px";
    // Prevent propagation of the event

    event.stopPropagation();

    //make it snap if the element is close to it's correct space in the grid.

    // ELEMENT 1
    if (theElement.id === "1") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 400 && myX < 410) {
            if (myY > 100 && myY < 110) {
                myX -= myX - 400;
                myY -= myY - 100;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (390 < myX && myX < 400) {
            if (90 < myY && myY < 100) {
                console.log("bottom right");
                myX += 400 - myX;
                myY += 100 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (390 < myX && myX < 400) {
            if (myY > 100 && myY < 110) {
                console.log("top right");
                myX += 400 - myX;
                myY -= myY - 100;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 400 && myX < 410) {
            if (90 < myY && myY < 100) {
                console.log("bottom left");
                myX -= myX - 400;
                myY += 100 - myY;
            }
        }
    }

    // ELEMENT 2
    if (theElement.id === "2") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 500 && myX < 510) {
            if (myY > 100 && myY < 110) {
                myX -= myX - 500;
                myY -= myY - 100;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (490 < myX && myX < 500) {
            if (90 < myY && myY < 100) {
                console.log("bottom right");
                myX += 500 - myX;
                myY += 100 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (490 < myX && myX < 500) {
            if (myY > 100 && myY < 110) {
                console.log("top right");
                myX += 500 - myX;
                myY -= myY - 100;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 500 && myX < 510) {
            if (90 < myY && myY < 100) {
                console.log("bottom left");
                myX -= myX - 500;
                myY += 100 - myY;
            }
        }
    }

    // ELEMENT 3
    if (theElement.id === "3") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 600 && myX < 610) {
            if (myY > 100 && myY < 110) {
                myX -= myX - 600;
                myY -= myY - 100;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (590 < myX && myX < 600) {
            if (90 < myY && myY < 100) {
                console.log("bottom right");
                myX += 600 - myX;
                myY += 100 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (590 < myX && myX < 600) {
            if (myY > 100 && myY < 110) {
                console.log("top right");
                myX += 600 - myX;
                myY -= myY - 100;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 600 && myX < 610) {
            if (90 < myY && myY < 100) {
                console.log("bottom left");
                myX -= myX - 600;
                myY += 100 - myY;
            }
        }
    }

    // ELEMENT 4
    if (theElement.id === "4") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 700 && myX < 710) {
            if (myY > 100 && myY < 110) {
                myX -= myX - 700;
                myY -= myY - 100;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (690 < myX && myX < 700) {
            if (90 < myY && myY < 100) {
                console.log("bottom right");
                myX += 700 - myX;
                myY += 100 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (690 < myX && myX < 700) {
            if (myY > 100 && myY < 110) {
                console.log("top right");
                myX += 700 - myX;
                myY -= myY - 100;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 700 && myX < 710) {
            if (90 < myY && myY < 100) {
                console.log("bottom left");
                myX -= myX - 700;
                myY += 100 - myY;
            }
        }
    }

    // ELEMENT 5
    if (theElement.id === "5") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 400 && myX < 410) {
            if (myY > 200 && myY < 210) {
                myX -= myX - 400;
                myY -= myY - 200;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (390 < myX && myX < 400) {
            if (190 < myY && myY < 200) {
                console.log("bottom right");
                myX += 400 - myX;
                myY += 200 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (390 < myX && myX < 400) {
            if (myY > 200 && myY < 210) {
                console.log("top right");
                myX += 400 - myX;
                myY -= myY - 200;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 400 && myX < 410) {
            if (190 < myY && myY < 200) {
                console.log("bottom left");
                myX -= myX - 400;
                myY += 200 - myY;
            }
        }
    }

    // ELEMENT 6
    if (theElement.id === "6") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 500 && myX < 510) {
            if (myY > 200 && myY < 210) {
                myX -= myX - 500;
                myY -= myY - 200;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (490 < myX && myX < 500) {
            if (190 < myY && myY < 200) {
                console.log("bottom right");
                myX += 500 - myX;
                myY += 200 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (490 < myX && myX < 500) {
            if (myY > 200 && myY < 210) {
                console.log("top right");
                myX += 500 - myX;
                myY -= myY - 200;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 500 && myX < 510) {
            if (190 < myY && myY < 200) {
                console.log("bottom left");
                myX -= myX - 500;
                myY += 200 - myY;
            }
        }
    }

    // ELEMENT 7
    if (theElement.id === "7") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 600 && myX < 610) {
            if (myY > 200 && myY < 210) {
                myX -= myX - 600;
                myY -= myY - 200;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (590 < myX && myX < 600) {
            if (190 < myY && myY < 200) {
                console.log("bottom right");
                myX += 600 - myX;
                myY += 200 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (590 < myX && myX < 600) {
            if (myY > 200 && myY < 210) {
                console.log("top right");
                myX += 600 - myX;
                myY -= myY - 200;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 600 && myX < 610) {
            if (190 < myY && myY < 200) {
                console.log("bottom left");
                myX -= myX - 600;
                myY += 200 - myY;
            }
        }
    }

    // ELEMENT 8
    if (theElement.id === "8") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 700 && myX < 710) {
            if (myY > 200 && myY < 210) {
                myX -= myX - 700;
                myY -= myY - 200;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (690 < myX && myX < 700) {
            if (190 < myY && myY < 200) {
                console.log("bottom right");
                myX += 700 - myX;
                myY += 200 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (690 < myX && myX < 700) {
            if (myY > 200 && myY < 210) {
                console.log("top right");
                myX += 700 - myX;
                myY -= myY - 200;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 700 && myX < 710) {
            if (190 < myY && myY < 200) {
                console.log("bottom left");
                myX -= myX - 700;
                myY += 200 - myY;
            }
        }
    }

    // ELEMENT 9
    if (theElement.id === "9") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 400 && myX < 410) {
            if (myY > 300 && myY < 310) {
                myX -= myX - 400;
                myY -= myY - 300;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (390 < myX && myX < 400) {
            if (290 < myY && myY < 300) {
                console.log("bottom right");
                myX += 400 - myX;
                myY += 300 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (390 < myX && myX < 400) {
            if (myY > 300 && myY < 310) {
                console.log("top right");
                myX += 400 - myX;
                myY -= myY - 300;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 400 && myX < 410) {
            if (290 < myY && myY < 300) {
                console.log("bottom left");
                myX -= myX - 400;
                myY += 300 - myY;
            }
        }
    }

    // ELEMENT 10
    if (theElement.id === "10") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 500 && myX < 510) {
            if (myY > 300 && myY < 310) {
                myX -= myX - 500;
                myY -= myY - 300;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (490 < myX && myX < 500) {
            if (290 < myY && myY < 300) {
                console.log("bottom right");
                myX += 500 - myX;
                myY += 300 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (490 < myX && myX < 500) {
            if (myY > 300 && myY < 310) {
                console.log("top right");
                myX += 500 - myX;
                myY -= myY - 300;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 500 && myX < 510) {
            if (290 < myY && myY < 300) {
                console.log("bottom left");
                myX -= myX - 500;
                myY += 300 - myY;
            }
        }
    }

    // ELEMENT 11
    if (theElement.id === "11") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 600 && myX < 610) {
            if (myY > 300 && myY < 310) {
                myX -= myX - 600;
                myY -= myY - 300;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (590 < myX && myX < 600) {
            if (290 < myY && myY < 300) {
                console.log("bottom right");
                myX += 600 - myX;
                myY += 300 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (590 < myX && myX < 600) {
            if (myY > 300 && myY < 310) {
                console.log("top right");
                myX += 600 - myX;
                myY -= myY - 300;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 600 && myX < 610) {
            if (290 < myY && myY < 300) {
                console.log("bottom left");
                myX -= myX - 600;
                myY += 300 - myY;
            }
        }
    }

    // ELEMENT 12
    if (theElement.id === "12") {
        // TOP LEFT CORNER SNAPS 1
        if (myX > 700 && myX < 710) {
            if (myY > 300 && myY < 310) {
                myX -= myX - 700;
                myY -= myY - 300;
            }
        }
        // BOTTOM RIGHT CORNER SNAPS 2
        if (690 < myX && myX < 700) {
            if (290 < myY && myY < 300) {
                console.log("bottom right");
                myX += 700 - myX;
                myY += 300 - myY;
            }
        }
        // TOP RIGHT CORNER SNAPS 3
        if (690 < myX && myX < 700) {
            if (myY > 300 && myY < 310) {
                console.log("top right");
                myX += 700 - myX;
                myY -= myY - 300;
            }
        }
        //BOTTOM LEFT CORNER SNAPS 4
        if (myX > 700 && myX < 710) {
            if (290 < myY && myY < 300) {
                console.log("bottom left");
                myX -= myX - 700;
                myY += 300 - myY;
            }
        }
    }







    /*
    // TOP LEFT CORNER SNAPS 1
    if (modX <= 10 && modY <= 10) {
        myX -= modX;
        myY -= modY;
    }

    // BOTTOM RIGHT CORNER SNAPS 2
    if (modX >= 90 && modY >= 90) {
        myX += 100-modX;
        myY += 100-modY;
    }

    // TOP RIGHT CORNER SNAPS 3
    if (modX >= 90 && modY <= 10) {
        myX += 100-modX;
        myY -= modY;
    }

    //BOTTOM LEFT CORNER SNAPS 4
    if (modX <= 10 && modY >= 90) {
        myX -= modX;
        myY += 100-modY;
    }*/

    theElement.style.left = myX + "px";
    theElement.style.top = myY + "px";

}  //** end of mover

// *********************************************************
// The event handler function for dropping the word

function dropper(event) {

    // Unregister the event handlers for mouseup and mousemove

    document.removeEventListener("mouseup", dropper, true);
    document.removeEventListener("mousemove", mover, true);

    // Prevent propagation of the event

    event.stopPropagation();
}  //** end of dropper


var seconds = 0;
var minutes = 0;
var hours = 0;

function randomSetGenerator() {
    var randomSet = Math.floor(Math.random() * 3) + 1;
    var source = "images"+randomSet+"/";
    //"images1/1.jpg"

    for (i = 1; i <13;i++) {
        document.getElementById(i).innerHTML = '<img src="' + source + i + '.jpg" alt = "jigsaw piece"/>';
    }
    return source

}


function displayTime() {
    updatedTime = new Date().getTime();
    difference = updatedTime - timeStart;
    seconds = Math.floor((difference % (1000 * 60)) / 1000);
    minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    if (seconds < 10) {
        seconds = "0"+seconds;
    }
    if (minutes < 10) {
        minutes = "0"+minutes;
    }
    if (hours < 10) {
        hours = "0"+hours;
    }
    document.getElementById("timer").innerHTML = hours + ":" + minutes + ":" + seconds
}


function stopAndCheck() {
    var ok1 = 0;
    var ok2 = 0;
    var ok3= 0;
    var ok4= 0;
    var ok5= 0;
    var ok6= 0;
    var ok7= 0;
    var ok8= 0;
    var ok9= 0;
    var ok10= 0;
    var ok11= 0;
    var ok12= 0;

    clearInterval(tInterval);
    document.getElementById("results").innerHTML = "Time taken: " + hours + ":" + minutes + ":" + seconds;
    if (document.getElementById(1).style.left === "400px" && document.getElementById(1).style.top === "100px") {
        ok1 = 1;
        console.log("1 is ok");
    }
    if (document.getElementById(2).style.left === "500px" && document.getElementById(2).style.top === "100px") {
        ok2 = 1;
        console.log("2 is ok");
    }
    if (document.getElementById(3).style.left === "600px" && document.getElementById(3).style.top === "100px") {
        ok3 = 1;
        console.log("3 is ok");
    }
    if (document.getElementById(4).style.left === "700px" && document.getElementById(4).style.top === "100px") {
        ok4 = 1;
        console.log("4 is ok");
    }
    if (document.getElementById(5).style.left === "400px" && document.getElementById(5).style.top === "200px") {
        ok5 = 1;
        console.log("5 is ok");
    }
    if (document.getElementById(6).style.left === "500px" && document.getElementById(6).style.top === "200px") {
        ok6 = 1;
        console.log("6 is ok");
    }
    if (document.getElementById(7).style.left === "600px" && document.getElementById(7).style.top === "200px") {
        ok7 = 1;
        console.log("7 is ok");
    }
    if (document.getElementById(8).style.left === "700px" && document.getElementById(8).style.top === "200px") {
        ok8 = 1;
        console.log("8 is ok");
    }
    if (document.getElementById(9).style.left === "400px" && document.getElementById(9).style.top === "300px") {
        ok9 = 1;
        console.log("9 is ok");
    }
    if (document.getElementById(10).style.left === "500px" && document.getElementById(10).style.top === "300px") {
        ok10 = 1;
        console.log("10 is ok");
    }
    if (document.getElementById(11).style.left === "600px" && document.getElementById(11).style.top === "300px") {
        ok11 = 1;
        console.log("11 is ok");
    }
    if (document.getElementById(12).style.left === "700px" && document.getElementById(12).style.top === "300px") {
        ok12 = 1;
        console.log("12 is ok");
    }
    var validate = ok1 + ok2 + ok3 + ok4 + ok5 + ok6 + ok7 + ok8 + ok9 + ok10 + ok11 + ok12;
    if ( validate === 12) {
        document.getElementById("completed").style.border = "5px solid green";
        document.getElementById("completed").innerHTML = "Congratulations! You got it"
    } else {
        document.getElementById("completed").style.border = "5px solid red";
        document.getElementById("completed").innerHTML = "Better luck next time"
    }
}