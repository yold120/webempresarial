//FUNCION CLICK MENU EN MOVIL

// Get the modal

// When the user clicks on <span> (x), close the modal


window.onscroll = function() {scrollFunction()};


function openCity(evt, cityName) {
  // Declare all variables
  let i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";


};

document.getElementById("defaultOpen").click();

/*
abrirmodal1();

function abrirmodal1(){

let modal1 = document.getElementById("modal1");// Get the button that opens the modal

let btn = document.getElementById("openmodal1");// Get the <span> element that closes the modal
let span = document.getElementsByClassName("close")[0];// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal1.style.display = "block";

}
span.onclick = function() {// When the user clicks on <span> (x), close the modal
  modal1.style.display = "none";
}
window.onclick = function(event) {// When the user clicks anywhere outside of the modal, close it
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}


}
*/











function navporfolio(evt, seccionportfolio) {
  // Declare all variables
  let icont, tabcontent2, portafoliolink;

  // Get all elements with class="tabcontent" and hide them
  tabcontent2 = document.getElementsByClassName("tabcontent2");
  for (icont = 0; icont < tabcontent2.length; icont++) {
    tabcontent2[icont].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  portafoliolink = document.getElementsByClassName("portafoliolink");
  for (icont = 0; icont < portafoliolink.length; icont++) {
    portafoliolink[icont].className = portafoliolink[icont].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(seccionportfolio).style.display = "block";
  evt.currentTarget.className += " active";


};

document.getElementById("portfoliodefaultOpen").click();








$(document).ready(function(){

	let cont = 1;

  $(".btn-menum").click(function(){

  	if(cont == 1){

			document.getElementById("panel1id").style.display = "block";

			cont = 0;
		} else {
			cont = 1;
			document.getElementById("panel1id").style.display = "none";
		}

    
  });
});

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);



function slides(){

let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5000;

    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform 2.8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform 0s";
            contador=1;
        },5000)
    }
}





function scrollFunction() {

  //rueda del mouse atras
  let pagina1 = document.getElementById("seccion1");
  let pagina2 = document.getElementById("seccion2");

  let logo1 = document.getElementById("logo-panel-izq");

  let panel1 = document.getElementById("menu-izq");
  let slides1 = document.getElementsByClassName("");


  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
  	//logo1.style.height = "0%";
  	panel1.style.transition = "1s";
  	panel1.style.marginTop = "0%";


    //rueda del mouse adelante
  } 

  else{
  	panel1.style.marginTop = "70%";

  	
  	/*
  	panel1.style.transition = "1s";
  	logo1.style.display = "flex";
  	panel1.style.paddingTop = "12%";


  	pagina1.style.zIndex = "2";
    pagina2.style.transition = "1s";
    */

    

  }


  
}

           








