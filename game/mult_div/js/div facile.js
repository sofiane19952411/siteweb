document.getElementById("v").value = v;

function myMove2() {
    var bee = document.getElementById("a0");
    var pos2 = 0;
    var id2 = setInterval(frame2, 5);

    function frame2() {
        if (pos2 > 224) {

            bee.style.backgroundImage = 'url("css/ballon/bee1.gif")';
            clearInterval(id2);
        } else {
            pos2 = pos2 + g2;

            bee.style.left = pos2 + '%';
        }
    }

}
myMove2();

function myMove3() {
    var bee = document.getElementById("a0");
    var pos3 = 224;
    var id3 = setInterval(frame3, 5);
    bee.style.backgroundImage = 'url("css/ballon/bee3.gif")';

    function frame3() {
        if (pos3 < -10) {
            document.getElementById("a0").style.display = "none";

            clearInterval(id3);
        } else {
            pos3 = pos3 - 0.15;

            bee.style.left = pos3 + '%';
        }
    }

}

function myMove() {
    /*setTimeout(function() {
           // alert( ary_pl_top[gg]+"ttt"+gg); 
       Nbptop++;
    }, 15000);*/

    var elem = document.getElementById("0");
    var pos = 0;
    var id = setInterval(frame, 70);



    function frame() {

        if (pos < -820) {
            myMove3();

            clearInterval(id);
            if (scour < 5) {
                document.getElementById("x").innerHTML = " Game Over ";
                document.getElementById("x1").innerHTML = lose;

                document.getElementById("game-container").style.backgroundImage = 'url("pic/lose.jpg")';
                document.getElementById("grid-container").hidden = true;
                document.getElementById("0").style.display = "none";
            } else {
                document.getElementById("x1").innerHTML = "Not Bad";
                document.getElementById("x").innerHTML = " Be Faster ";
                document.getElementById("grid-container").hidden = true;
                document.getElementById("0").style.display = "none";
            }
        } else {


            pos = pos - g1;

            elem.style.top = pos + 'px';
            //  elem.style.left = pos + 'px'; 
        }


    }

}

//file ballon
var ballon = Math.floor(Math.random() * 5);
document.getElementById("0").style.backgroundImage = "url(css/ballon/" + ballon + ".gif)";
document.getElementById("0").style.display = "block";
document.getElementById("a0").style.display = "block";
document.getElementById("score_po").style.display = "block";

var bee = document.getElementById("a0");




document.getElementById("0").style.backgroundImage = "url(css/ballon/" + ballon + ".gif)";

myMove();



var width = 0;
var scour = 0;
var scour2 = 0;

function move() {
    var elem = document.getElementById("myBar");
    var el_scour = document.getElementById("h_scour");
    width = width + 10;
    elem.style.width = width + '%';
    scour = scour + 1;
    scour2 = scour2 + 1;
    if (scour < 5) {

        el_scour.style.color = "rgba(255, 50, 50, 1)";
    } else {

        el_scour.style.color = "rgba(100, 255, 100, 1)";
    }

    document.getElementById('h_scour').innerHTML = scour + "/10";
    document.getElementById('himgscore').innerHTML = scour2 * 25;
    document.getElementById("scoref").value = scour2 * 25;
}


function move_faux() {
    var elem = document.getElementById("myBar");
    var el_scour = document.getElementById("h_scour");
    width = width - 10;
    elem.style.width = width + '%';

    scour = scour - 1;
    if (scour < 5) {

        el_scour.style.color = "darkred";
    } else {

        el_scour.style.color = "darkgreen";
    }

    document.getElementById('h_scour').innerHTML = scour + "/10";

}
document.getElementById('h_scour').innerHTML = scour + "/10";






var x, points, i, A = [];
Array.range = function(a, b, step) {

    if (typeof a == 'number') {
        A[0] = a;
        step = step || 1;
        while (a + step <= b) {
            A[A.length] = a += step;
        }
    }


    return A;
}

// ran variable pour charger le tableau

var ran = 10 * v;

{
    x = Array.range(0, ran, v);
    x.sort(function(a, b) { return 0.5 - Math.random() });
    i = 0;
    document.getElementById("x").innerHTML = x[i] + "÷" + v + "=";

} {
    points = [];
    for (var y = 0; y < 12; y++) {
        points.push(y);
    }
    for (var y1 = 0; y1 < 13; y1++) {
        points.push(y1);
    }
    points.sort(function(a, b) { return 0.5 - Math.random() });
    for (var ii = 0; ii < 25; ii++) {
        document.getElementById("p" + ii).innerHTML = points[ii];
        document.getElementById("p" + ii).value = points[ii];
    }


    var str = "Faux !";
    var res = str.fontcolor("red");
    var los = "You Lose!!"
    var lose = los.fontcolor("darkred");

    function myFunction(elmnt, clr) {
        if (x[i] / v == elmnt && i < 9) {
            i = i + 1;
            document.getElementById("x").innerHTML = x[i] + "÷" + v + "=";
            //clr.hidden = true;
            clr.innerHTML = null;
            clr.value = null;
            clr.style.backgroundColor = 'transparent';
            clr.innerHTML = "";


            document.getElementById('x1').innerHTML = "Bravo !";
            setTimeout(function() {
                document.getElementById('x1').innerHTML = "";
            }, 1000);
            move18();
            move();

        } else if (x[i] / v == elmnt && i >= 9) {
            move18();
            myMove3();
            g1 = 0;
            document.getElementById("grid-container").hidden = true;
            if (scour < 4) { document.getElementById("game-container").style.backgroundImage = 'url("pic/lose.jpg")'; }
            setTimeout(function() {
                if (scour < 5) {
                    document.getElementById('x1').innerHTML = lose;
                    document.getElementById("x").innerHTML = " Game Over ";
                } else if (scour >= 5) {

                    document.getElementById('x1').innerHTML = " great!!";
                }
            }, 900);


            document.getElementById("x").innerHTML = " Good Game ☺ ";

            move();
        } else if (elmnt != null) {
            g2 = g2 + 0.05;
            g1 = g1 + 0.2;
            document.getElementById('x1').innerHTML = res;

            setTimeout(function() {
                document.getElementById('x1').innerHTML = "";
            }, 1000);
            move_faux()
        }
    }
}

function move18() {
    var elem1 = document.getElementById("hscore18");
    elem1.style.opacity = "1";
    var mtp = 0;
    var id = setInterval(frame, 3);

    function frame() {
        if (mtp == 120) {
            clearInterval(id);
        } else {
            mtp = mtp + 1;
            elem1.style.marginTop = -mtp + "px";
            elem1.style.opacity = 1 - mtp / 120;
        }
    }
}