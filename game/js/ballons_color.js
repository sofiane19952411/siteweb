var ctx;
var clock;
var balls = new Array;
var n = 10; //Number of balls per click
var m = 0; //Number of balls
var g = 0.3; //Gravity
var friction = [0.005,0.05]; //Per tick, per bounce
var r = 20; //Ball radius


function start(){
    window.addEventListener("resize", getSize(), false);
    getSize();
    ctx.clearRect(0, 0, width, height);
    reset();
    moveOP();
 //  alert("Tap to spawn more balls!");
}

function reset(){
    clearInterval(clock);
    clock = setInterval(main, 30);
    for(var i=0;i<n;i++){
        balls.push({ //pos = position, v = velocity
            x: {
                pos: randomNum(00,0),
                v: randomNum(-20,40),
                move: true
            },
            y: {
                pos: randomNum(100,height-r),
                v: randomNum(-20,20),
                move: true
            },
            colors: ["hsl("+Math.floor(randomNum(0,360))+",100%,50%)","hsl("+Math.floor(randomNum(0,360))+",100%,30%)"]
        });
    }
    m+=n;
    if(m==5*n){
      //  alert("Please leave a like if you enjoy it!");
    }

}

function main(){
    //move
    for(var i=0;i<balls.length;i++){
        move(balls[i].x,width);
        move(balls[i].y,height);
        balls[i].y.v -= g;
    }
    //draw
    ctx.clearRect(0,0,width,height);
    for(i=0;i<balls.length;i++){
        drawCircle(balls[i].x.pos,balls[i].y.pos,r,balls[i].colors);
    }
}

function getSize(){
    height = window.innerHeight;
    width = window.innerWidth;
    var canvas = document.getElementById('canvas');
    canvas.width = width;
    canvas.height = height;
    ctx = canvas.getContext('2d');
}

function randomNum(min,max){
    return min+Math.random()*(max-min);
}

function move(d,size){//d = dimension
    if(d.move){
        d.pos += d.v;//move
        d.v /= 1+friction[0];
        if(d.pos<r){//Bounce left/bottom
            d.pos = r+((r-d.pos)/(1+friction[1]));
            d.v *= -1;
            d.v /= 1+friction[1];
            if(d.v<g*2){
                d.move = false;
            }
        }
        if(d.pos>size-r){//Bounce right/top
            d.pos = (size-r)-((d.pos-(size-r))/(1+friction[1]));
            d.v *= -1;
            d.v /= 1+friction[1];
        }
    }
}

function drawCircle(x,y,radius,colors){
    ctx.beginPath();
    ctx.arc(x, height-y, 45, 0, 2* Math.PI, false);
    var grd=ctx.createRadialGradient(x,height-y,0,x,height-y,r);
    grd.addColorStop(0,colors[0]);
    grd.addColorStop(1,colors[1]);
    ctx.fillStyle=grd;
    ctx.fill();
}







/*var n=1;
function moveOP() {
  var elem = document.getElementById("p0");   
  var pos =00;
  var id = setInterval(frame, 10);
  function frame() { 
    if (pos ==500) {
       
      clearInterval(id);

    } else {
          n++;
      pos=pos+1; 
      elem.style.marginTop = pos + 'px'; 
   
    }
  }


}
*/




