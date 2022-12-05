const catalogoPropiedades = document.getElementById("catalogoPropiedades");
const contenedorCarousel = document.getElementById("contenedorCarousel");
const formContacto = document.getElementById("formContacto");

function verCatalogo(){
    const catalogoPropiedades = document.getElementById("catalogoPropiedades");
    const contenedorCarousel = document.getElementById("contenedorCarousel");
    const formContacto = document.getElementById("formContacto");

    if(formContacto.style.display === "block"){
        formContacto.style.display ="none";
    }
    contenedorCarousel.style.display = "none";
    
    catalogoPropiedades.style.display = "block";
}

function verFormContacto(){

    const catalogoPropiedades = document.getElementById("catalogoPropiedades");
    const contenedorCarousel = document.getElementById("contenedorCarousel");
    const formContacto = document.getElementById("formContacto");
    
    catalogoPropiedades.style.display = "none";
    contenedorCarousel.style.display = "none";
    formContacto.style.display = "block";

}