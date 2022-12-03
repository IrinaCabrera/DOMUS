const btnAgendaVertical=document.getElementById("btnAgendaVertical");
const contendorAgenda=document.getElementById("contendorAgenda");

function mostrarBtnAgendaVertical(){
    const btnAgendaVertical=document.getElementById("btnAgendaVertical");
    const contendorAgenda=document.getElementById("contendorAgenda");
    
    if(contendorAgenda.style.display === "block"){
        contendorAgenda.style.display= "none";
        btnAgendaVertical.style.display = "block";
    }else{
        btnAgendaVertical.style.display = "block";
    }
    
    

}

function mostrarFormAgenda(){
    const contendorAgenda=document.getElementById("contendorAgenda");
    contendorAgenda.style.display= "block";


}