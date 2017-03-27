function rozwin1(){
var block=document.createElement('div');
block.id='workimage1';
var image=document.createElement('img');
image.src='img/PF01.jpg';
image.style.padding="15px";
image.style.width="40%";
var image1=document.createElement('img');
image1.src='img/PF02.jpg';
image1.style.padding="15px";
image1.style.width="40%";
block.appendChild(image);
block.appendChild(image1);
var obj=document.getElementById('img_container1');
obj.appendChild(block);
document.getElementById("psycisk1").style.display="none";
document.getElementById("psycisk2").style.display="block";
}
function zwin1(){
var Element = document.getElementById("workimage1");
Element.parentNode.removeChild(Element);
document.getElementById("psycisk1").style.display="block";
document.getElementById("psycisk2").style.display="none";
}

function rozwin2(){
var block=document.createElement('div');
block.id='workimage1';
var image=document.createElement('img');
image.src='img/S01.jpg';
image.style.padding="15px";
image.style.width="40%";
var image1=document.createElement('img');
image1.src='img/S02.jpg';
image1.style.padding="15px";
image1.style.width="40%";
block.appendChild(image);
block.appendChild(image1);
var obj=document.getElementById('img_container2');
obj.appendChild(block);
document.getElementById("psycisk3").style.display="none";
document.getElementById("psycisk4").style.display="block";
}
function zwin2(){
var Element = document.getElementById("workimage1");
Element.parentNode.removeChild(Element);
document.getElementById("psycisk3").style.display="block";
document.getElementById("psycisk4").style.display="none";
}



function rozwin3(){
var block=document.createElement('div');
block.id='workimage1';
var image=document.createElement('img');
image.src='img/PK01.jpg';
image.style.padding="15px";
image.style.width="40%";
var image1=document.createElement('img');
image1.src='img/PK02.jpg';
image1.style.padding="15px";
image1.style.width="40%";
block.appendChild(image);
block.appendChild(image1);
var obj=document.getElementById('img_container3');
obj.appendChild(block);
document.getElementById("psycisk5").style.display="none";
document.getElementById("psycisk6").style.display="block";
}
function zwin3(){
var Element = document.getElementById("workimage1");
Element.parentNode.removeChild(Element);
document.getElementById("psycisk5").style.display="block";
document.getElementById("psycisk6").style.display="none";
}




function zmienstyl1(){
document.body.style.backgroundColor = "white";
document.getElementById("psycisk_czcionka1").style.display="none";
document.getElementById("psycisk_czcionka2").style.display="block";
}
function zmienstyl2(){
document.body.style.backgroundColor = "#CFCBC6";
document.getElementById("psycisk_czcionka1").style.display="block";
document.getElementById("psycisk_czcionka2").style.display="none";
}



		var i=0;
		var m=0;
		var h=0;
function odliczanie()
{
if(isNaN(sessionStorage.sec&&sessionStorage.min&&sessionStorage.god)){
i= i;
   if(i==60)
   {
   i=0;
   m=m+1;
     if(m==60)
    {m=0; h=h+1;}
}
}
else{
	i= +sessionStorage.sec;
	m=+sessionStorage.min; 
	h=+sessionStorage.god;i= i+1;
		if(i==60)
		{i=0;m=m+1;
	       if(m==60)
		   {m=0;h=h+1;}
		}
		}
sessionStorage.sec=+i;
sessionStorage.min=+m;
sessionStorage.god=+h;
document.getElementById("timer").innerHTML =m+":"+i;
setTimeout("odliczanie()",1000);
}



function data1()
	{
	if(isNaN(localStorage.dz)===false){
     dzien=localStorage.dz;
	 miesiac=localStorage.me;
	 rok=localStorage.ro;
	 godzina=localStorage.go;
	 minuta=localStorage.mi;
	 sekunda=localStorage.sek;
	document.getElementById("data").innerHTML = dzien+"/"+miesiac+"/"+rok+" | "+godzina+":"+minuta+":"+sekunda;
	}
		var dzisiaj = new Date();
		var dzien = dzisiaj.getDate();
		localStorage.dz=dzien;
		var miesiac = dzisiaj.getMonth()+1;
		localStorage.me=miesiac;
		var rok = dzisiaj.getFullYear();
		localStorage.ro=rok;
		var godzina = dzisiaj.getHours();
		if (godzina<10) godzina = "0"+godzina;
		localStorage.go=godzina;
		var minuta = dzisiaj.getMinutes();
		if (minuta<10) minuta = "0"+minuta;
		localStorage.mi=minuta;
		var sekunda = dzisiaj.getSeconds();
		if (sekunda<10) sekunda = "0"+sekunda;
		localStorage.sek=sekunda;
	}		 




