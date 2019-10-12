
var arry=[];
var arry2=[];

function ary() 
  { 
      
     for (var i = 0; i< 30; i++) 
     {var ty=Math.floor(Math.random() * 16); 
       arry[i]= ty;
       arry2[i]= ty;
     }

  }
 var RR1=[];
function charge() {
     document.getElementById('game-message').style.display='none';
  //   movefin()
  posiT()
      
  setTimeout(function() { document.getElementById("game").style.backgroundImage='url(../../anm/'+Math.floor(Math.random() * 20)+'.jpg)'; },4500);
  ary();
  RR1= return_v1();
 
   
  for (var ii = 0; ii < 30; ii++) {
     document.getElementById("p"+ii).innerHTML = arry2[ii]; 

   }
      document.getElementById('h_score').innerHTML=score+"/30";
      document.getElementById('fn_score').innerHTML=score+"/30";

   document.getElementById("game").style.backgroundImage='url(../../anm/f.jpg)';
 wissam();
   document.getElementById("x").innerHTML=RR1[0]+"-"+RR1[1]+"=...?";
   index_v=0; 
  document.getElementById("game_container").style.backgroundColor='#3a4640;';
  




}


function return_v1()
{ var rand=Math.floor(Math.random()*31);
while (arry2[rand]==null) {
  rand=Math.floor(Math.random()*31);
}
  var v2=Math.floor(Math.random()*arry2[rand]);
 var v1 =arry2[rand]+v2;

 var du_vl=[];
 du_vl[0]=v1;
 du_vl[1]=v2;

//alert("v="+v1+" v="+v2+" tb="+arry2[rand]);
return du_vl;
}
var scor_som;
var str="Faux !";
var res=str.fontcolor("red");
 var index_v=0;
function selected_oncick(id_button)
{ 
   var b_id=id_button;
   som_value=RR1[0]-RR1[1];
   var som=document.getElementById("p"+b_id).textContent;
   if (som!="") {
   if(som_value==som)
   {  arry2[b_id]=null;
      scor_som=som;
      document.getElementById('p'+b_id).style.backgroundColor='transparent';
      document.getElementById('p'+b_id).innerHTML="";
          move(); move18();
     b0 =00;
   if(index_v<29)
   {
        index_v =index_v + 1;
        RR1=return_v1();
        document.getElementById("x").innerHTML=RR1[0]+"-"+RR1[1]+"=?";
        document.getElementById('x1').innerHTML = "Bravo !";
        setTimeout(function() {document.getElementById('x1').innerHTML = "";},1000);

   }
   else{
   movefin();
   }
   
   }else
   { 
 	     document.getElementById('x1').innerHTML = res;
	     setTimeout(function() {
        document.getElementById('x1').innerHTML = "";},1000);
         document.getElementById('p'+b_id).style.backgroundColor='';
            move_faux()  
   }

  } }
  

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
      document.getElementById('h_score').innerHTML=score+"/30";
      document.getElementById('fn_score').innerHTML=score+"/30";
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
              document.getElementById("b"+i).style.backgroundImage="url(../../ballon/0.gif)";
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
if(imbest >0)
{
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
}else
document.getElementById('wissam').hidden=true;
}