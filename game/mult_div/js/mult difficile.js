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
            if (scour < 13) {
                document.getElementById("x").innerHTML = "Game Over";
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
    width = width + 4;
    elem.style.width = width + '%';
    scour = scour + 1;
    scour2 = scour2 + plus;
    if (scour < 13) {

        el_scour.style.color = "rgba(255, 50, 50, 1)";
    } else {

        el_scour.style.color = "rgba(100, 255, 100, 1)";
    }

    document.getElementById('h_scour').innerHTML = scour + "/25";
    document.getElementById('himgscore').innerHTML = scour2;
    document.getElementById("scored").value = scour2;
}


function move_faux() {
    var elem = document.getElementById("myBar");
    var el_scour = document.getElementById("h_scour");
    width = width - 4;
    elem.style.width = width + '%';

    scour = scour - 1;
    if (scour < 13) {

        el_scour.style.color = "darkred";
    } else {

        el_scour.style.color = "darkgreen";
    }

    document.getElementById('h_scour').innerHTML = scour + "/25";

}
document.getElementById('h_scour').innerHTML = scour + "/25";



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

{
    x = [];
    for (var y = 0; y < 25; y++) {
        x.push(y);
    }
    x.sort(function(a, b) { return 0.5 - Math.random() });
    i = 0;
    document.getElementById("x").innerHTML = v + "×" + x[i] + " =";

}
// ran variable pour charger le tableau
var ran = 24 * v; {
    points = Array.range(0, ran, v);
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
        if (x[i] * v == elmnt && i < 24) {
            plus = elmnt;
            i = i + 1;
            document.getElementById("x").innerHTML = v + "×" + x[i] + " =";
            // clr.hidden = true;
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

        } else if (i >= 24) {
            plus = elmnt;
            move18();
            myMove3();
            g1 = 0;
            clr.hidden = true;
            if (scour < 12) { document.getElementById("game-container").style.backgroundImage = 'url("pic/lose.jpg")'; }
            setTimeout(function() {
                if (scour < 13) {
                    document.getElementById('x1').innerHTML = lose;
                    document.getElementById("x").innerHTML = " Game Over ";
                } else if (scour >= 13) {

                    document.getElementById('x1').innerHTML = " great!!";
                }
            }, 900);

            document.getElementById("x").innerHTML = "Good Game ☺ ";
            move();
        } else if (elmnt != null) {
            g2 = g2 + 0.05;
            g1 = g1 + 0.1;
            document.getElementById('x1').innerHTML = res;

            setTimeout(function() {
                document.getElementById('x1').innerHTML = "";
            }, 1000);
            move_faux()
        }
    }
}

function move18() {
    document.getElementById('hscore18').innerHTML = "+" + plus;
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