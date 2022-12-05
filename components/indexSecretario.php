<?php 
include("./header.php");


?>
<link rel="stylesheet" href="../css/indexSecretaria.css">
<script src="../js/indexSecretaria.js"></script>

<script>
  const fecha = new Date();
  const hoy = fecha.getDate();
  const mesActual = fecha.getMonth() + 1; 
  const añoActual = fecha.getFullYear();
  function devolverFecha(){
    document.write(hoy.toString() +" / "+ mesActual.toString() +" / "+ añoActual.toString());
  }
</script>

</head>
<body>
<nav class="navbar ppal">
    <a class="navbar-brand" href="#">
      <img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top ">
      Oficina Virtual
    </a>
    <ul class="ulppal">
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top "></a></li>
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top "></a></li>
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top "></a></li>
        <li class="ppalli">
            <Button class="btn btn-primary salir">
                <a href="http://localhost/DOMUS/components" style="color:white;">SALIR</a> 
            </Button>
        </li>
    </ul>
</nav>

<nav class="navbar especial">
  <div class="container-fluid">
    
    <ul class="navEsp">
        <li class="navEspli"><a href="http://localhost/DOMUS/components/Show_customers.php">CLIENTES</a></li>
        <li class="navEspli"><button class="btn" onclick="Agenda()"><a href="#">AGENDA</a></button></li>
        <li class="navEspli"><button class="btn" onclick="Solicitud()"><a href="#">SOLICITUDES</a></button></li>
        
        <li class="hoy">
          <script>
          devolverFecha();
          </script>
        </li>
    </ul>
    </div>
</nav>

<div class="cotainer">
        <div class="row">
            <div class="col una">
            <ul class="ulNavBarVertical">
                <li class="liNabBarVertical">
                    <button class ="btn" onclick="opcionesClientes()">
                        <a class ="botoncito" id="btnAgendarCita"  
                        href="#">AGENDAR CITA</a>
                    </button>
                    <button class ="btn" onclick="mostrarAgenda()">
                        <a class ="botoncito" id="btnMostrarAgenda"  
                        href="#">MOSTRAR AGENDA</a>
                    </button>
                </li>
                
            </ul>
            </div>


            <!--/ AGENDAR CITA /-->
            <div class="col-10 dos " >
                <div class="container colClientesCita" id="colClientesCita">
                <div class="row ">
                        <div class="col" >
                            <div class="card" style="width: 18rem;">
                            <img src="https://www.pngkey.com/png/detail/50-507127_trump-has-selected-ajit-pai-an-incumbent-republican.png" class="card-img-top"
                            alt="Trump Has Selected Ajit Pai, An Incumbent Republican - User Icon White Transparent@pngkey.com">
                                <div class="card-body">
                                <h5 class="card-title">Cliente Nuevo </h5>
                                <p class="card-text">Crea una cita para un cliente que no está registrado en la empresa.</p>
                                <button onclick="clienteNuevo()" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">NUEVO</a> </button>
                                </div>
                            </div>
                        </div>
                         <div class="col" >
                            <div class="card" style="width: 18rem;">
                            <img src="https://www.pngkey.com/png/detail/153-1531332_city-buildings-png-transparent-images-clipart-icons-building.png" class="card-img-top"
                            alt="City Buildings Png Transparent Images Clipart Icons - Building Icon Grey Png@pngkey.com">
                                <div class="card-body">
                                <h5 class="card-title">Cliente de la empresa</h5>
                                <p class="card-text">Crea una cita para un cliente que está registrado en la empresa.</p>
                                <button class="btn btn-primary btnGeneral" onclick="clienteEmpresaCita()"> <a href="#" class="a-btnGeneral" >NUEVO</a> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--/ AGENDAR CITA CLIENTE NUEVO/-->
                <div class="container contenedorClienteNuevo" id="contenedorClienteNuevo">
                    <div class="col formularioCliente" >
                        <div class="container contenedorInternoCliente">
                            <h3 style="padding-bottom:2%;">Cita Nuevo Cliente</h3>
                    
                            <form method="POST" action="./Acciones_agenda/Agregar_cita.php">
                                <div class="container contenidoFormulario">
                                    <div class="row">
                                    <p>1. Complete los campos con los datos del cliente</p>
                                        <div class="col-sm-2">
                                                <input type="text" placeholder="Nombre" class="form-control form-control-sm" name="data_name">
                                                <label  class="form-label">Nombre de Usuario</label>
                                            </div>
                                        <div class="col-sm-2">
                                                <input type="" placeholder="Teléfono" class="form-control form-control-sm" name="data_phone">
                                                <label  class="form-label">Teléfono</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="email" placeholder="Email" class="form-control form-control-sm" name="data_email">
                                            <label  class="form-label">Correo electrónico</label>
                                                
                                        </div>
                                    </div>
                                    <p>2. Seleccione un dia y un horario para la cita.</p>
                                    <div class="row">
                                        <div class="col col-sm-2">
                                        <input type="date" id="start" name="trip-start"
                                            value="" class="form-control form-control-sm" >
                                            <label  class="form-label">Fecha</label>

                                        </div>
                                        

                                        <div class="col col-sm-2" style="margin-left:2%;">
                                        <input type="time" id="start" name="trip-start"
                                            value="" class="form-control form-control-sm">
                                            <label  class="form-label">Hora</label>
                                        </div>
                                    </div>


                                    <p>3. Seleccione un agente inmobiliario.</p>
                                        <div class="col col-sm-2"> 
                                        <label style="margin-bottom:6px;">Agente</label>
                                            <select class="form-control" name="exampleFormControlSelect1" style="margin-bottom:5px;">
                                            <option>Fulana</option>
                                            <option>SultanoEjemplo</option>
                                            <option>MasEjemplo</option>
                                            </select>
                                            
                                        </div>
                                    <p>4. Ingrese un código de propiedad.</p>
                                    <div class="col col-sm-2"> 
                                            <input type="text" placeholder="Propiedad" class="form-control form-control-sm" name="data_prop">
                                            <label  class="form-label" style="margin-bottom:30px;">Propiedad</label>
                                        </div>
                                </div>
                                <button type="submit" onclick="agendarCita()" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">AGENDAR CITA</a></button>
                                <button type="submit" onclick="volver()" class="btn btn-primary btnRosa"> <a href="#" class="a-btnGeneral">VOLVER</a></button>
                            </form>
                        </div>    
                    </div>
                </div> 
                    <!--FINAL -> AGENDAR CITA CLIENTE NUEVO-->


                    <!--BUSCAR CLIENTE DE LA EMPRESA PARA AGENDAR CITA-->
                <div class="container citaClienteEmpresa " id ="citaClienteEmpresa">
                    <div class = "row" style="height: 100%; width:100%;">
                        <div class="col" style=" height: 100%; width:100%;">
                            <div class="container">
                                <div class="row d-flex flex-row justify-content-center alig-items-center">
                                        <h1 style="margin-top:5%; margin-bottom:3%;" class="d-flex flex-row justify-content-center alig-items-center">Buscar Cliente</h1>
                                        
                                        <h5 style="margin-left:15%; margin-top:3%;">Busca por Nombre y Apellido</h5>

                                        <div class="col-3" style="margin-top:1%;">
                                            <input type="text" placeholder="Nombre" class="form-control form-control-sm" name="data_name">
                                            <label  class="form-label">Nombre</label>
                                        </div>
                                        <div class="col-3" style="margin-top:1%; margin-bottom:3%;">
                                            <input type="text" placeholder="Apellido" class="form-control form-control-sm" name="data_apellido">
                                            <label  class="form-label">Apellido</label>
                                        </div>
                                        <button style="width:10%; height: 3%; margin-top:1%; margin-left:1%;"  onclick="mostrarCitaClienteEmpresa()" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">BUSCAR</a></button>
                                    
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row d-flex flex-row justify-content-center alig-items-center">
                                        <h5 style="margin-left:15%; margin-top:3%;">Busca por DNI</h5>
                                        
                                        <div class="col-3" style="margin-top:1%;">
                                            <input type="" placeholder="DNI" class="form-control form-control-sm" name="data_dni">
                                            <label  class="form-label">DNI</label>
                                        </div>
                                        <button style="width:10%; height: 3%; margin-top:1%; margin-left:1%;" onclick="mostrarCitaClienteEmpresa()" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">BUSCAR</a></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <!--FINAL -> BUSCAR CLIENTE DE LA EMPRESA PARA AGENDAR CITA-->


                    <!--AGENDAR CITA CLIENTE DE LA EMPRESA-->
                <div class="container agendarCitaClienteEmpresa" id="agendarCitaClienteEmpresa">
                    <div class="col formularioCliente" >
                        <div class="container contenedorInternoCliente" >
                            <h3 style="padding-bottom:2%;">Cita Cliente Empresa</h3>
                    
                            <form method="POST" action="./Acciones_agenda/Agregar_cita.php">
                                <div class="container contenidoFormulario">
                                    <div class="row">
                                    <p>1. Complete los campos con los datos del cliente</p>
                                        <div class="col-sm-2">
                                                <input type="text" placeholder="Nombre" class="form-control form-control-sm" name="data_name">
                                                <label  class="form-label">Nombre de Usuario</label>
                                            </div>
                                        <div class="col-sm-2">
                                                <input type="" placeholder="Teléfono" class="form-control form-control-sm" name="data_phone">
                                                <label  class="form-label">Teléfono</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="email" placeholder="Email" class="form-control form-control-sm" name="data_email">
                                            <label  class="form-label">Correo electrónico</label>
                                                
                                        </div>
                                    </div>
                                    <p>2. Seleccione un dia y un horario para la cita.</p>
                                    <div class="row">
                                        <div class="col col-sm-2">
                                        <input type="date" id="start" name="date_start"
                                            value="" class="form-control form-control-sm" >
                                            <label  class="form-label">Fecha</label>

                                        </div>
                                        

                                        <div class="col col-sm-2" style="margin-left:2%;">
                                        <input type="time" id="start" name="time_start"
                                            value="" class="form-control form-control-sm">
                                            <label  class="form-label">Hora</label>
                                        </div>
                                    </div>


                                    <p>3. Seleccione un agente inmobiliario.</p>
                                        <div class="col col-sm-2"> 
                                        <label style="margin-bottom:6px;">Agente</label>
                                            <select class="form-control" name="exampleFormControlSelect1" style="margin-bottom:5px;">
                                            <option>Fulana</option>
                                            <option>SultanoEjemplo</option>
                                            <option>MasEjemplo</option>
                                            </select>
                                            
                                        </div>
                                    <p>4. Ingrese un código de propiedad.</p>
                                    <div class="col col-sm-2"> 
                                            <input type="text" placeholder="Propiedad" class="form-control form-control-sm" name="data_prop">
                                            <label  class="form-label" style="margin-bottom:30px;">Propiedad</label>
                                        </div>
                                </div>
                                <button type="submit" onclick="agendarCita()" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">AGENDAR CITA</a></button>
                                <button type="submit" onclick="volver()" class="btn btn-primary btnRosa"> <a href="#" class="a-btnGeneral">VOLVER</a></button>
                            </form>
                        </div>    
                    </div>
                </div> 
                    

                     


                    <!--FINAL -> AGENDAR CITA CLIENTE DE LA EMPRESA-->


                    <!-- MOSTRAR AGENDA -->
                    
                
                <div class="container contenedorFormulario colMostrarAgenda" id= "MostrarAgenda">
                    <div class="row expandido">
                        <div class="col expandido colContFormulario" >

                            <div class= "container expandido">
                                <div class="row expandido">
                                    <form method='GET' action="./Acciones_agenda/agenda.php">
                                        <div class="col-4 expandido">
                                            <h1 style="margin: 3%;"> Agenda</h1>
                                            <h5 style="magin-bottom: 2%; margin-top: 8%;">
                                                Actividades del día: <script>devolverFecha();</script></h5>
                                                
                                            <div>
                                                <input style="magin-bottom: 2%; margin-top: 5%; width:80%;" type="date" id="start" name="date_name"
                                                    value="" class="form-control form-control-sm" >
                                                <label  class="form-label">Fecha</label>
                                            </div>
                                            <div style="margin-top:3%;">
                                                <button class="btn btn-primary btnGeneral">Aceptar</button> 
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-8 expandido">
                                        
                                        <h5 style="magin-bottom: 1%; margin-top: 11.5%;">Programadas</h5>
                                        <div class="global" style="margin-top:2%;">
                                            <div class="mensajes">
                                                    <?php
                                                        require("./Acciones_agenda/agenda.php"); 
                                                    ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    
                </div>
                         <!--FINAL -> MOSTRAR AGENDA-->

                  <!-- LISTA DE SOLICITUDES -->
                        <div class="container mostrarSolicitudes" id="mostrarSolicitudes">
                            <div class="row" style="height:100%; width:100%;">
                                <div class = "col">
                                    <h1 style="margin:2%; padding-top:1%;">Solicitudes</h1>
                                    
                                    <div class="global">
                                        <div class="mensajes">
                                            <div class="texto">
                                                <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col-5">Asunto</th>
                                                    <th scope="col-3">DNI</th>
                                                    <th scope="col-2"></th>
                                                    <th scope="col-2"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        include("./Acciones_agenda/Show_requests.php");
                                                    ?>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                 <!--FIN -> LISTA DE SOLICITUDES-->
                       
                 <!-- REGISTRAR CLIENTES -->

                 <!--FIN -> REGISTRAR CLIENTES-->




                </div>
                        
            </div>
                
            </div>
               
        </div>
    </div>
</div>



</body>
</html>