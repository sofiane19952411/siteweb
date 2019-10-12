
var arry=[];
function ary() 
  {var arr = [];
     for (var i = 0; i< 30; i++) 
     {arr[i]=Math.floor(Math.random() * 70);  }
     return arr;
  }

function charge() {
     document.getElementById('game-message').style.display='none';
     
  posiT();
      
  setTimeout(function() { document.getElementById("game").style.backgroundImage='url(../../anm/'+Math.floor(Math.random() * 20)+'.jpg)'; },4500);
 arry= ary();
 
   
  for (var ii = 0; ii < 30; ii++) {document.getElementById("p"+ii).innerHTML = arry[ii]; }
      document.getElementById('h_score').innerHTML=score+"/15";
      document.getElementById('fn_score').innerHTML=score+"/15";
wissam();
   document.getElementById("game").style.backgroundImage='url(../../anm/f.jpg)';

  som=som_value_2button();
  document.getElementById("x").innerHTML="X<sup>?</sup>+ Y <sup>?</sup>="+som; index_v=0;
   document.getElementById("game_container").style.backgroundColor='#3a4640';



}


function som_value_2button()
{try {
    var som;
    var i_b1=Math.floor(Math.random() * 30);
    var i_b2=Math.floor(Math.random() * 30);
    while((arry[i_b1]==null)||(arry[i_b2]==null)||(arry[i_b2]==arry[i_b1]))
    { i_b1=Math.floor(Math.random() * 30);
      i_b2=Math.floor(Math.random() * 30);
     } som=arry[i_b1]+arry[i_b2]
      return som;
}catch(err) {alert(err.name  + err.message) ;}
}
var scor_som;
var str="Faux !";
var res=str.fontcolor("red");
var som;
 var n_click=true;
 var b1_id=0;
 var b2_id=0;
 var index_v=0;
 var som_value=0;
  var value_b2;
  var value_b1;
function selected_oncick(id_button)
{ var vl=arry[id_button];;
  if (vl !=null) {
  
   if(n_click)
  {
   b1_id=id_button;
   n_click=false;
   document.getElementById('p'+b1_id).style.backgroundColor='#006010';
   value_b1= arry[b1_id];
   document.getElementById('p'+b1_id).style.margin="10px 0px 0px 0px;";
  }else if(!n_click)
  {
    b2_id=id_button;
    n_click=true;
    value_b2=arry[b2_id];
   var return_som=  som;
   som_value=value_b1+value_b2;
      document.getElementById('p'+b1_id).style.marginTop="";
   if(som_value==return_som)
   {      scor_som=return_som;
      document.getElementById('p'+b1_id).style.backgroundColor='transparent';
      document.getElementById('p'+b2_id).style.backgroundColor='transparent ';
      document.getElementById('p'+b1_id).innerHTML="";
      document.getElementById('p'+b2_id).innerHTML="";
       arry[b1_id]=null;
       arry[b2_id]=null;
            move(); move18();
     b0 =00;
   if(index_v<14)
   {     index_v =index_v + 1;
        som=som_value_2button();
        document.getElementById("x").innerHTML="X<sup>?</sup>+ Y <sup>?</sup>="+som;
        document.getElementById('x1').innerHTML = "Bravo !";
        setTimeout(function() {document.getElementById('x1').innerHTML = "";},1000);
   }
   else {movefin();}
   }else
   { 
 	     document.getElementById('x1').innerHTML = res;
	     setTimeout(function() {
       document.getElementById('x1').innerHTML = "";},1000);
       document.getElementById('p'+b1_id).style.backgroundColor='';
            move_faux()  

   }

  }     
      
  }  
 }
  

 var width = 1;
    var score=0;
function move() {
    var elem = document.getElementById("myBar"); 
      var el_score = document.getElementById("h_score"); 
      width=width+3.2; 
      elem.style.width = width + '%'; 
      score=score+1;
      if(score<5)
      {
        elem.style.background="linear-gradient(to right, red , red);";
      el_score.style.color="red";
      }else{
        elem.style.background="linear-gradient(to right, red , green);";
        el_score.style.color="#4CAF50";
      }
    document.getElementById('h_score').innerHTML=score+"/30";
    document.getElementById('fn_score').innerHTML=score+"/30";
    var  vn=Math.floor( document.getElementById('himgscore').innerHTML);
    var bg=Math.floor(vn)+Math.floor(scor_som);
    document.getElementById('himgscore').innerHTML=bg;
         document.getElementById('my_score').innerHTML=bg;
}
function move_faux() {
  var elem = document.getElementById("myBar"); 
  var el_score = document.getElementById("h_score");  
      width=width-2; 
      elem.style.width = width + '%'; 
     
      score=score-1;
      if(score<5)
      {
        elem.style.background="linear-gradient(to right, red , red);";
        el_score.style.color="red";
      }else{
        elem.style.background="linear-gradient(to right, red , green);";
       el_score.style.color="#4CAF50";
      }
      document.getElementById('h_score').innerHTML=score+"/15";
      document.getElementById('fn_score').innerHTML=score+"/15";

}
 


function close1() {
 document.getElementById('game-message').style.display='none';

}

//file palon
var ary_palo=[];
var ary_pl_top=[];
var Nb=0; 
var lm=0;
var b0 =00;
function myMove(id_pal) {

 b0 =00;
  var elem = document.getElementById("b"+id_pal);   
  var id = setInterval(frame, 5);
  function frame() { 
    if (b0 == -800) {
        document.getElementById("b"+id_pal).style.width="0px";
        ary_pl_top[id_pal]=null;stopbll=0;
        document.getElementById("b"+id_pal).style.height="0px";

     if ((id_pal==3)&&(lm==0)) { lm=1; movefin(); }clearInterval(id);} else { b0=b0-1; elem.style.top = b0 + 'px'; } }
}
var stopbll=0;
function posiT() {
       for (var i = 0; i< 4; i++) 
     {
             ary_palo[i]=i;
             ary_pl_top[i]=i;
              document.getElementById("b"+i).style.backgroundImage="url(../../ballon/1.gif)";
     }
  var em=0;
  var id = setInterval(Npla, 8000);
  function Npla() {
  if (em == -10) {clearInterval(id);}
  else{
   em++; 
     if (Nb<4) { if(stopbll==0)  {   var id_palo=ary_palo[Nb];            
        if (id_palo==0) {
               document.getElementById("nh").style.marginLeft="530px";
             }else if (id_palo==1) {
               document.getElementById("nh").style.marginLeft="10px";
             }else if (id_palo==2) {
                document.getElementById("nh").style.marginLeft="130px";
             }else
               document.getElementById("nh").style.marginLeft="330px"; Nb=Nb+1;myMove(id_palo);stopbll=1;} }else{ em=-10; } 
     }
  } }

function fin() {
         
       document.getElementById('game-message').style.display='block'; 
         document.getElementById('fg').style.display="none";
       document.getElementById('x1').innerHTML="you win!!";
        document.getElementById("x").innerHTML ="thank you ☺ ";
        document.getElementById("game").style.width="200%";
        document.getElementById("game").style.height="870px";
        document.getElementById("game").style.backgroundSize="100% 100%";
        document.getElementById("game").style.marginTop="-50px";
        document.getElementById("game").style.marginLeft="-380px";


       
        document.getElementById("x").style.marginTop ="-25px "; 
        document.getElementById('x1').style.marginTop ="-25px;";
        document.getElementById('x1').style.transform =" rotate(-15deg);";
        document.getElementById('div_cent').style.backgroundColor =" rgba(20, 20, 20, 0.7);";
        document.getElementById('p_cent').style.backgroundColor =" rgba(20, 20, 20, 0.7);";


       
      document.getElementById('div_left').style.backgroundImage='url(../../ballon/ballon5.png);';
      document.getElementById('div_left').style.marginTop='-840px';
      document.getElementById('div_left').style.width='20%';
      document.getElementById('div_left').style.height='800px';

      document.getElementById('div_right').style.backgroundImage='url(../../ballon/ballon5.png);';
      document.getElementById('div_right').style.marginTop='-840px';
      document.getElementById('div_right').style.marginRight='-100px';
      document.getElementById('div_right').style.width='22%';
      document.getElementById('div_right').style.height='800px';
   for (var gh = 0; gh < 4; gh++) { document.getElementById("b"+gh).style.width="0px";}

var gfhe = document.getElementById('himgscore').innerHTML;
   document.getElementById('hidden').value=gfhe;

  var best=document.getElementById('imgbest').innerHTML;

    if(best>gfhe)
    {
     document.getElementById('bttsave').style.background="#555";
     document.getElementById('bttsave').disabled=true;
    }

}

function movefin() {
 /* 
  var elem = document.getElementById("game"); 
  
  elem.style  
  var pos =850;
  var  fhd=710;
  var  mlf=0;
  var  mlt=0;
    var  mlr=0;
  var id = setInterval(frame,30);
  function frame() { 
    if (pos == 1400) {
 
      clearInterval(id);
    
    } else {

      pos=pos+10; 
      fhd=fhd+3;
      mlf=mlf-5;
      mlt=mlt-1;
      mlr=mlr+3.2;
      elem.style.width = pos + 'px';
       elem.style.height = fhd + 'px';    
         elem.style.marginTop = mlt + 'px';
     elem.style.marginLeft = mlf + 'px';
     if (pos == 2500) {
    
     }
  //  elem.style.transform=" rotate("+mlr+"deg)";
    }
  }*/
  fin();
}
function move18() {
  
    var bg=Math.floor(scor_som);
    document.getElementById('hscore18').innerHTML="+"+bg;
    var elem = document.getElementById("hscore18");
    elem.style.opacity="1";
    var mtp=0;   
  var id = setInterval(frame, 3);
  function frame() { 
    if(mtp==120)
    {
      clearInterval(id);
    }else{
      mtp=mtp+1;
     elem.style.marginTop=-mtp+"px";
     elem.style.opacity=1-mtp/120;
    }
  }
}

function closes()
{
  
    document.getElementById('meill_score').hidden=true;
}

function wissam() {
  var hrr=document.getElementById('getmeill').textContent;
var imbest=document.getElementById('imgbest').textContent;
var tyer="score:"+imbest;

if(hrr==tyer)
{
document.getElementById('wissam').hidden=false;


   
    var elem = document.getElementById("wissam");

    var mtp=-100;   
  var id = setInterval(frame, 2);
  function frame() { 
    if(mtp==0)
    {
      clearInterval(id);
    }else{
      mtp=mtp+1;
     elem.style.marginTop=mtp+"px";
   
    }
  }
  }else
document.getElementById('wissam').hidden=true;
}