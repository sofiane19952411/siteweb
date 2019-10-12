document.getElementById("fd").innerHTML = "Difficile";
// v variable pour prendre valeur de multiple or division
var v, g1, g2;
//function for include the Javascript
function includeJs(jsFilePath) {
    var js = document.createElement("script");
    js.type = "text/javascript";
    js.src = jsFilePath;
    document.body.appendChild(js);
}

for (var z = 1; z < 10; z++) { document.getElementById("a" + z).value = z; }

function mult(u) {
    includeJs("js/mult difficile.js");
    v = u;
    document.getElementById("container2").hidden = true;
    document.getElementById("container").hidden = false;
    document.getElementById("restart2").hidden = true;
    document.getElementById("restart").hidden = false;
    if (v == 1) {
        g1 = 1;
        g2 = 0.2;
        document.getElementById("body").style.backgroundImage = 'url("bg/bg1.jpg")';
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#4CAF50';
            document.getElementById("p" + y).style.color = 'white';
        }
    } else if (v == 2) {
        g1 = 0.6;
        g2 = 0.1;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg2.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#FFA07A';
            document.getElementById("p" + y).style.color = 'white';
        }
    } else if (v == 3) {
        g1 = 0.5;
        g2 = 0.1;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg3.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#E6E6FA';
            document.getElementById("p" + y).style.color = 'red';
        }
    } else if (v == 4) {
        g1 = 0.5;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg4.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#ADD8E6';
            document.getElementById("p" + y).style.color = 'red';
        }
    } else if (v == 5) {
        g1 = 0.5;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg5.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#FFB6C1';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 6) {
        g1 = 0.4;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg6.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#D3D3D3';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 7) {
        g1 = 0.4;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg7.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#F0E68C';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 8) {
        g1 = 0.3;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg8.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#7FFFD4';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 9) {
        g1 = 0.3;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg9.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#DDA0DD';
            document.getElementById("p" + y).style.color = 'white';
        }
    }

}

function div(u) {
    includeJs("js/div difficile.js");
    v = u;
    document.getElementById("container2").hidden = true;
    document.getElementById("container").hidden = false;
    document.getElementById("restart2").hidden = true;
    document.getElementById("restart").hidden = false;

    if (v == 1) {
        g1 = 1;
        g2 = 0.1;
        document.getElementById("body").style.backgroundImage = 'url("bg/bg1.jpg")';
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#4CAF50';
            document.getElementById("p" + y).style.color = 'white';
        }
    } else if (v == 2) {
        g1 = 0.6;
        g2 = 0.1;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg2.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#FFA07A';
            document.getElementById("p" + y).style.color = 'white';
        }
    } else if (v == 3) {
        g1 = 0.5;
        g2 = 0.1;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg3.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#E6E6FA';
            document.getElementById("p" + y).style.color = 'red';
        }
    } else if (v == 4) {
        g1 = 0.5;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg4.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#ADD8E6';
            document.getElementById("p" + y).style.color = 'red';
        }
    } else if (v == 5) {
        g1 = 0.5;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg5.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#FFB6C1';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 6) {
        g1 = 0.4;
        g2 = 0.08;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg6.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#D3D3D3';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 7) {
        g1 = 0.4;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg7.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#F0E68C';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 8) {
        g1 = 0.3;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg8.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#7FFFD4';
            document.getElementById("p" + y).style.color = 'black';
        }
    } else if (v == 9) {
        g1 = 0.3;
        g2 = 0.05;
        document.getElementById("game-container").style.backgroundImage = 'url(pic/' + Math.floor(Math.random() * 17) + '.jpg)';
        document.getElementById("body").style.backgroundImage = 'url("bg/bg9.jpg")';
        for (var y = 0; y < 25; y++) {
            document.getElementById("p" + y).style.backgroundColor = '#DDA0DD';
            document.getElementById("p" + y).style.color = 'white';
        }
    }

}