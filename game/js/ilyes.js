var v1 = "Addition";
var green = v1.fontcolor("#5EEF54");

var v3 = "Division";
var red = v3.fontcolor("red");
var v2 = "Soustraction";
var bleu = v2.fontcolor("#140BC7");

var v3 = "Division";
var red = v3.fontcolor("red");

var v4 = "Multiplication";
var yellow = v4.fontcolor("#D5DC06  ");

function function1() {
    // document.getElementById('op1').innerHTML = "";
    document.getElementById('op').innerHTML = "";
    document.getElementById('x').innerHTML = green;
}

function function2() {
    // document.getElementById('op1').innerHTML = "";
    document.getElementById('op').innerHTML = "";
    document.getElementById('x').innerHTML = bleu;
}

function function3() {
    // document.getElementById('op1').innerHTML = "";
    document.getElementById('op').innerHTML = "";
    document.getElementById('x').innerHTML = red;
}

function function4() {
    // document.getElementById('op1').innerHTML = "";
    document.getElementById('op').innerHTML = "";
    document.getElementById('x').innerHTML = yellow;
}

function f1() {
    //document.getElementById('op1').innerHTML = " للعب يرجى&nbsp&nbsp &nbsp&nbspاختيار العملية ";
    document.getElementById('x').innerHTML = "";
    document.getElementById('op').innerHTML = "Pour jouer &nbsp&nbspchoisir l'opération";
}