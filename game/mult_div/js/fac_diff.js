function includeJs(jsFilePath) {
    var js = document.createElement("script");
    js.type = "text/javascript";
    js.src = jsFilePath;
    document.body.appendChild(js);
}
document.getElementById('body').style.backgroundImage = 'url("")';

//premier page
function function1()
{
    
       document.getElementById('t1').style.opacity="1";
}
function f1()
{
    
       document.getElementById('t1').style.opacity="0";
          document.getElementById('t2').style.opacity="0";
}
function function2()
{
    
       document.getElementById('t2').style.opacity="1";
}


var type= document.getElementById("type").value ;

if(type=="dificile")
{document.getElementById('body').style.backgroundImage = '';
includeJs("js/java difficile.js");}
if(type=="facile")
{document.getElementById('body').style.backgroundImage = '';
includeJs("js/java facile.js");}








