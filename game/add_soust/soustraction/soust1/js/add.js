
var arry=[];
function ary() 
  {
      var arr = [];
     for (var i = 0; i< 30; i++) 
     {
       arr[i]=Math.floor(Math.random() * 16); 
     }
     return arr;
  }

function charge() {

   document.getElementById('game-message').style.display='none';
   posiT();



  setTimeout(function() { document.getElementById("game").style.backgroundImage='url(../../anm/'+Math.floor(Math.random() * 20)+'.jpg)'; },4500);
  arry= ary();
  for (var ii = 0; ii < 30; ii++) {
     document.getElementById("p"+ii).innerHTML = arry[ii]; 

   }
      document.getElementById('h_scour').innerHTML=scour+"/15";
      document.getElementById('fn_scour').innerHTML=scour+"/15";

    document.getElementById("game").style.backgroundImage='url(../../anm/f.jpg)';
   sous=som_value_2button();
   document.getElementById("x").innerHTML="| A<sup>?</sup>- B<sup>?</sup>|="+sous;
   index_v=0;
   document.getElementById("game_container").style.backgroundColor='#3a4640';


}

var y=0;
function som_value_2button()
{try {

    var som;
    var i_b1=Math.floor(Math.random() * 29);
    var i_b2=Math.floor(Math.random() * 29);

    while((arry[i_b1]==null)||(arry[i_b2]==null)||(arry[i_b2]==arry[i_b1]))
    {
      i_b1=Math.floor(Math.random() * 29);
      i_b2=Math.floor(Math.random() * 29);
      y=y+1;
    }
      som=Math.abs( arry[i_b1]-arry[i_b2])
      return som;
 
}catch(err) {
   alert(err.name + "\dddd/" + err.message) ;
  
}
}


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
{        

 if(n_click)
  {
   b1_id=id_button;
   n_click=false;
  
   document.getElementById('p'+b1_id).style.backgroundColor='#006010';
   value_b1= arry[b1_id];
     document.getElementById('p'+b1_id).style.margin="10px 0px 0px 0px;";
   // alert(value_b1);
  }else if(!n_click)
  {
    b2_id=id_button;
    n_click=true;
    
   value_b2=arry[b2_id];
   
   var return_som=  som;

   som_value=Math.abs( value_b1-value_b2);
      document.getElementById('p'+b1_id).style.marginTop=""
   if(som_value==return_som)
   {  
      document.getElementById('p'+b1_id).style.backgroundColor='transparent';
      document.getElementById('p'+b2_id).style.backgroundColor='transparent ';
      document.getElementById('p'+b1_id).innerHTML="";
      document.getElementById('p'+b2_id).innerHTML="";
       arry[b1_id]=null;
       arry[b2_id]=null;
       move();
     var b=plo_top();

        document.getElementById(b).style.width="0px";
      
   if(index_v<14)
   {
        index_v =index_v + 1;
   sous=som_value_2button();
   document.getElementById("x").innerHTML="| A<sup>?</sup>- B<sup>?</sup>|="+sous;
        document.getElementById('x1').innerHTML = "Bravo !";
        setTimeout(function() {document.getElementById('x1').innerHTML = "";},1000);
   }
   else
   {
       fin();
   }
  
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
    var width = 1;
    var scour=0;
function move() {
    var elem = document.getElementById("myBar"); 
      var el_scour = document.getElementById("h_scour"); 
      width=width+7; 
      elem.style.width = width + '%'; 
      scour=scour+1;
      if(scour<5)
      {
        elem.style.backgroundColor="red";
      el_scour.style.color="red";
      }else{
        elem.style.backgroundColor="#4CAF50";
        el_scour.style.color="#4CAF50";
      }
    document.getElementById('h_scour').innerHTML=scour+"/15";
    document.getElementById('fn_scour').innerHTML=scour+"/15";
}
function move_faux() {
  var elem = document.getElementById("myBar"); 
  var el_scour = document.getElementById("h_scour");  
      width=width-5; 
      elem.style.width = width + '%'; 
     
      scour=scour-1;
      if(scour<5)
      {
        elem.style.backgroundColor="red";
        el_scour.style.color="red";
      }else{
      elem.style.backgroundColor="#4CAF50";
       el_scour.style.color="#4CAF50";
      }
      document.getElementById('h_scour').innerHTML=scour+"/15";
      document.getElementById('fn_scour').innerHTML=scour+"/15";
}
 

/*function f()
{
    for (var ii = 0; ii < 30; ii++) {
    
    document.getElementById('d').innerHTML =document.getElementById('d').textContent +"<br>"+ii+"="+arry[ii]+"\||/";
   }
   document.getElementById('d').innerHTML =document.getElementById('d').textContent +"<br>"+y;
}*/

function close1() {
 document.getElementById('game-message').style.display='none';

}

//file palon
var ary_palo=[];
var ary_pl_top=[];
var Nb=0; 
var gg=0;
var nn=0;
 var Nbptop=0;
 var u=0;
 var kl=0;
var lm=0;
function myMove(id_pal) {
/*setTimeout(function() {
       // alert( ary_pl_top[gg]+"ttt"+gg); 
   Nbptop++;
}, 15000);*/

  var elem = document.getElementById(id_pal);   
  var pos =-200;
  var id = setInterval(frame, 5);
  function frame() { 
    if (pos == -1100) {
       
        document.getElementById(id_pal).style.width="0px";

    ary_pl_top[id_pal]=null;

        document.getElementById(id_pal).style.height="0px";
     if ((id_pal==14)&&(lm==0)) {
       lm=1;
       fin();
     }
      clearInterval(id);
    
    } else {

      pos=pos-1; 
      
      elem.style.top = pos + 'px'; 
    //  elem.style.left = pos + 'px'; 
    }
  }

}

function posiT() {
     for (var i = 0; i< 15; i++) 
     {
             ary_palo[i]=i;
             ary_pl_top[i]=i;
     }
   var posi_left=Math.floor(Math.random() * 40)*20;


  var id = setInterval(Npla, 8000);
  function Npla() {

   if (Nb<15) {
      var posi_left=Math.floor(Math.random() * 32)*20; 
       var id_palo=ary_palo[Nb];
             Nb=Nb+1;        
   }else {
     clearInterval(id);}
        
      document.getElementById(id_palo).style.display="block";
      document.getElementById(id_palo).style.left=posi_left+"px";

      document.getElementById(id_palo).style.backgroundImage="url(../../ballon/"+Math.floor(Math.random() * 21)+".gif)";
   
      myMove(id_palo);
 
  }
  }

 var gdd=[];
 var ip=0;
 var al=[];


var io=0;
function plo_top() {
   if (io<14) {
while (ary_pl_top[Nbptop]==null) {
        Nbptop=Nbptop+1;
      }
      var vv=ary_pl_top[Nbptop];
      ary_pl_top[Nbptop]=null;
      Nbptop=Nbptop+1;
  io++;
 return  vv;
  
   }
}

function fin() {


      
         document.getElementById('fg').style.display="none";
       document.getElementById('x1').innerHTML="you win!!";
        document.getElementById("x").innerHTML ="thank you ☺ ";
        document.getElementById("game").style.width="1970px";
        document.getElementById("game").style.height="920px";
        document.getElementById("game").style.backgroundSize="100% 100%";
        document.getElementById("game").style.margin="-50px -550px";
       
        document.getElementById('game-message').style.display='block'; 
        document.getElementById("x").style.marginTop ="-25px "; 
        document.getElementById('x1').style.marginTop ="-25px;";
        document.getElementById('x1').style.transform =" rotate(-15deg);";
        document.getElementById('div_cent').style.backgroundColor =" rgba(20, 20, 20, 0.8);";
        document.getElementById('p_cent').style.backgroundColor =" rgba(20, 20, 20, 0.8);";


       
      document.getElementById('div_left').style.backgroundImage='url(../ballon/de.gif);';
      document.getElementById('div_left').style.marginTop='-1000px';
  
      document.getElementById('div_left').style.width='16%';
      document.getElementById('div_left').style.height='700px';

            document.getElementById('div_right').style.backgroundImage='url(../ballon/dcd.gif);';
      document.getElementById('div_right').style.marginTop='-1000px';
      document.getElementById('div_right').style.marginRight='-100px';
      document.getElementById('div_right').style.width='19%';
      document.getElementById('div_right').style.height='700px';

}