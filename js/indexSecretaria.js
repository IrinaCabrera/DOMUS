//AGENDA

const btnAgendarCita = document.getElementById("btnAgendarCita");
const btnmostrarAgenda = document.getElementById("btnMostrarAgenda");
const citaClientesEleccion = document.getElementById("colClientesCita");
const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");
const mostrarTareas = document.getElementById("MostrarAgenda");
const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");
const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");

function clienteEmpresaCita(){
    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");

    citaClientesEleccion.style.display = "none";
    citaClienteEmpresa.style.display = "block";
}

function mostrarCitaClienteEmpresa(){
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");

    if(citaClienteEmpresa.style.display === "block"){
        citaClienteEmpresa.style.display = "none";
        agendarCitaClienteEmpresa.style.display = "block";

    }
    


}

function volver(){
    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");

    if(agendarCitaClienteEmpresa.style.display === "block"){

        agendarCitaClienteEmpresa.style.display = "none";
        citaClientesEleccion.style.display = "block";
    }
    if(citaClienteNuevo.style.display === "block"){
        citaClienteNuevo.style.display = "none";
        citaClientesEleccion.style.display = "block";
    }


}
function Agenda(){
    const btnAgendarCita = document.getElementById("btnAgendarCita");
    const btnmostrarAgenda = document.getElementById("btnMostrarAgenda");
    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");
    const mostrarTareas = document.getElementById("MostrarAgenda");
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");
    const mostrarSolicitudes = document.getElementById("mostrarSolicitudes");


    if(citaClientesEleccion.style.display === "block" || citaClienteNuevo.style.display === "block" || mostrarTareas.style.display === "block"){
        
        btnAgendarCita.style.display = "block";
        btnmostrarAgenda.style.display = "block";

        citaClientesEleccion.style.display = "none";
        citaClienteNuevo.style.display = "none";
        mostrarTareas.style.display = "none";

    }else if(citaClienteEmpresa.style.display ==="block" || agendarCitaClienteEmpresa.style.display === "block" || mostrarSolicitudes.style.display === "block"){
        citaClienteEmpresa.style.display = "none";
        agendarCitaClienteEmpresa.style.display = "none";
        mostrarSolicitudes.style.display = "none";
        btnAgendarCita.style.display = "block";
        btnmostrarAgenda.style.display = "block";

    }else{
        btnAgendarCita.style.display = "block";
        btnmostrarAgenda.style.display = "block";
    }
    
    
}

function opcionesClientes(){

    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");
    const mostrarTareas = document.getElementById("MostrarAgenda");
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");

    if(citaClienteNuevo.style.display === "block"){

        citaClienteNuevo.style.display = "none";
        citaClientesEleccion.style.display = "block";

    }else if(mostrarTareas.style.display === "block"){

        mostrarTareas.style.display = "none";
        citaClientesEleccion.style.display = "block";

    }
    else if(citaClienteEmpresa.style.display === "block"){

        citaClienteEmpresa.style.display = "none";
        citaClientesEleccion.style.display = "block";

    }
    else if(agendarCitaClienteEmpresa.style.display === "block"){

        agendarCitaClienteEmpresa.style.display = "none";
        citaClientesEleccion.style.display = "block";

    }else{
        citaClientesEleccion.style.display = "block";

    }

}


function clienteNuevo(){

    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");

    citaClientesEleccion.style.display = "none";
    citaClienteNuevo.style.display = "block";
}



function agendarCita(){
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");
    const citaClientesEleccion = document.getElementById("colClientesCita");

    if(citaClienteNuevo.style.display === "block"){

        citaClienteNuevo.style.display = "none";
        citaClientesEleccion.style.display = "block";

    }
}


function mostrarAgenda(){
    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo")
    const mostrarTareas = document.getElementById("MostrarAgenda");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");

    if(citaClientesEleccion.style.display === "block"){
        citaClientesEleccion.style.display = "none";
        mostrarTareas.style.display = "block";

    }else if (citaClienteNuevo.style.display === "block"){
        citaClienteNuevo.style.display = "none";
        mostrarTareas.style.display = "block";

    }else if (citaClienteEmpresa.style.display === "block"){
        citaClienteEmpresa.style.display = "none";
        mostrarTareas.style.display = "block";
    }
    else if (agendarCitaClienteEmpresa.style.display === "block"){
        agendarCitaClienteEmpresa.style.display = "none";
        mostrarTareas.style.display = "block";
    }else{
        mostrarTareas.style.display = "block";
    }  


}

//SOLICITUDES DE CITA CLIENTES

const mostrarSolicitudes = document.getElementById("mostrarSolicitudes");
function Solicitud(){
    const mostrarSolicitudes = document.getElementById("mostrarSolicitudes");
    const btnAgendarCita = document.getElementById("btnAgendarCita");
    const btnmostrarAgenda = document.getElementById("btnMostrarAgenda");

    const citaClientesEleccion = document.getElementById("colClientesCita");
    const citaClienteNuevo = document.getElementById("contenedorClienteNuevo");

    const mostrarTareas = document.getElementById("MostrarAgenda");
    const citaClienteEmpresa = document.getElementById("citaClienteEmpresa");
    const agendarCitaClienteEmpresa = document.getElementById("agendarCitaClienteEmpresa");
    

    if(btnAgendarCita.style.display === "block" || btnmostrarAgenda.style.display === "block" ||
    citaClientesEleccion.style.display === "block" || citaClienteNuevo.style.display === "block" ||
    mostrarTareas.style.display === "block" || citaClienteEmpresa.style.display === "block" || agendarCitaClienteEmpresa.style.display === "block"
    ){
        btnAgendarCita.style.display = "none";
        btnmostrarAgenda.style.display = "none";

        citaClientesEleccion.style.display = "none";
        citaClienteNuevo.style.display = "none";

        mostrarTareas.style.display = "none";
        citaClienteEmpresa.style.display = "none";
        agendarCitaClienteEmpresa.style.display = "none";

        mostrarSolicitudes.style.display = "block";

    }else{
        mostrarSolicitudes.style.display = "block";
    }
    
}

