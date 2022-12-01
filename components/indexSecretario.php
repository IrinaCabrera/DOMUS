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
                <a href="http://localhost/DOMUS/components">SALIR</a> 
            </Button>
        </li>
    </ul>
</nav>

<nav class="navbar especial">
  <div class="container-fluid">
    
    <ul class="navEsp">
        <li class="navEspli"><a href="http://localhost/DOMUS/components/Show_customers.php">CLIENTES</a></li>
        <li class="navEspli"><button class="btn" onclick="boton()"><a href="#">AGENDA</a></button></li>
        <li class="navEspli"><a href="./Acciones_agenda/Show_requests.php">SOLICITUDES</a></li>
        <li class="hoy">
          <script>
          devolverFecha();
          </script>
        </li>
    </ul>
    </div>
</nav>

<div class="cotainer " >
        <div class="row">
            <div class="col una">
            <ul class="ulNavBarVertical">
                <li class="liNabBarVertical">
                    <button class ="btn" onclick="opcionesClientes()">
                        <a class ="botoncito" id="btnAgendarCita"  
                        href="#">AGENDAR CITA</a>
                    </button>
                    <button class ="btn">
                        <a class ="botoncito" id="btnMostrarAgenda"  
                        href="./Acciones_agenda/agenda.php">MOSTRAR AGENDA</a>
                    </button>
                </li>
                
            </ul>
            </div>
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
                                <button class="btn btn-primary btnGeneral" onclick=""> <a href="#" class="a-btnGeneral" >NUEVO</a> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container contenedorClienteNuevo" id="contenedorClienteNuevo">
                <div class="col formularioCliente" >
                    <div class="container">
                        <h3>Cita Nuevo Cliente</h3>
                        
                                <form method="POST" action="./Acciones_agenda/Agregar_cita.php">
                                    <div class="container">
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
                                            <div class="col">

                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                        <p>3. Seleccione un agente inmobiliario.</p>
                                            <div class="col col-sm-2"> 
                                            <label >Agente</label>
                                                <select class="form-control" name="exampleFormControlSelect1">
                                                <option>Fulana</option>
                                                <option>SultanoEjemplo</option>
                                                <option>MasEjemplo</option>
                                                </select>
                                            </div>
                                        <p>4. Ingrese un código de propiedad.</p>
                                        <div class="col col-sm-2"> 
                                                <input type="text" placeholder="Propiedad" class="form-control form-control-sm" name="data_prop">
                                                <label  class="form-label">Propiedad</label>
                                            </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btnGeneral"> <a href="#" class="a-btnGeneral">AGENDAR CITA</a></button>
                                </form>
                            </div>    
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>