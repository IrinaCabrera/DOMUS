const btnAgendaVertical=document.getElementById("btnAgendaVertical");
const contendorAgenda=document.getElementById("contendorAgenda");
const btnPropiedadesVertical = document.getElementById("btnPropiedadesVertical");
const mostrarCatalogoPropiedad = document.getElementById("mostrarCatalogoPropiedad");

function mostrarBtnAgendaVertical(){
    const btnAgendaVertical=document.getElementById("btnAgendaVertical");
    const contendorAgenda=document.getElementById("contendorAgenda");
    const btnPropiedadesVertical = document.getElementById("btnPropiedadesVertical");
    const mostrarCatalogoPropiedad = document.getElementById("mostrarCatalogoPropiedad");
    
    
    if(contendorAgenda.style.display === "block" || btnPropiedadesVertical.style.display === "block" || mostrarCatalogoPropiedad.style.display === "block"){
        
        contendorAgenda.style.display= "none";
        btnPropiedadesVertical.style.display = "none";
        mostrarCatalogoPropiedad.style.display = "none";
        btnAgendaVertical.style.display = "block";
    }else{
        btnAgendaVertical.style.display = "block";
    }
    
    

}

function mostrarFormAgenda(){
    const contendorAgenda=document.getElementById("contendorAgenda");
    contendorAgenda.style.display= "block";


}

function verbtnPropiedadesVertical(){
    const btnPropiedadesVertical = document.getElementById("btnPropiedadesVertical");
    const btnAgendaVertical=document.getElementById("btnAgendaVertical");
    const contendorAgenda=document.getElementById("contendorAgenda");
    const mostrarCatalogoPropiedad = document.getElementById("mostrarCatalogoPropiedad");

    if(btnAgendaVertical.style.display === "block" || contendorAgenda.style.display === "block" || mostrarCatalogoPropiedad.style.display === "block"){

        btnAgendaVertical.style.display = "none";
        contendorAgenda.style.display = "none";
        mostrarCatalogoPropiedad.style.display = "none";
        btnPropiedadesVertical.style.display = "block";
    }else{
        btnPropiedadesVertical.style.display = "block";
    }

}

function mostrarCatalogo(){
    const mostrarCatalogoPropiedad = document.getElementById("mostrarCatalogoPropiedad");
    
    mostrarCatalogoPropiedad.style.display = "block";
}