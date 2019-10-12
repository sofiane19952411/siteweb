<!DOCTYPE html>
<html>

<head>
    <script src="js/ballons_color.js"></script>
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <link href="css/style_main.css" rel="stylesheet" type="text/css">

    <head>

        <body onload="start()">

            <div class="game-container">
                <h1 id="nive">Selectionnez <br>le niveau <br>de jeu !</h1>
                <img src="pic/min.png" id="plus" />
                <div id="div_N1" class="div_n">
                    <h1 id="trV1" class="tr">Tres facile</h1>
                    <a href="addN1/add_h.php" class="grid-cell" onmouseover="function1()" onmouseout="f1()" id="p0"></a>
                </div>
                <div id="div_N3" class="div_n">
                    <h1 id="trV3" class="tr">difficile</h1>
                    <a href="addN3/add_h.php" class="grid-cell" onmouseover="function3()" onmouseout="f1()" id="p1"></a>
                </div>
                <div id="div_N2" class="div_n">
                    <h1 id="trV2" class="tr">facile</h1>
                    <a href="addN2/add_h.php" onmouseover="function2()" onmouseout="f1()" class="grid-cell" id="p2"></a>
                </div>
                <div id="div_N4" class="div_n">
                    <h1 id="trV4" class="tr">Tres difficile</h1>
                    <a href="addN4/add_h.php" onmouseover="function4()" onmouseout="f1()" class="grid-cell" id="p3"></a>
                </div>
            </div>
            <div align="center">
                <canvas id="canvas" onclick="reset()">
			</canvas>
            </div>
            <script src="js/js_main.js"></script>
        </body>

</html>