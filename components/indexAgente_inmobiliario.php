<?php
include("./header.php");
?>

<link rel="stylesheet" href="../css/indexAgente.css">
<script src="../js/indexAgente.js"></script>

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
      <img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top imgMaletin">
      Oficina Virtual
    </a>
    <ul class="ulppal">
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top imgMaletin" ></a></li>
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top imgMaletin" ></a></li>
        <li class="ppalli"><a href="#"><img src="../img/maletin.png" alt=""  class="d-inline-block align-text-top imgMaletin" ></a></li>
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
        <li class="navEspli"><button class="btn" onclick="mostrarBtnAgendaVertical()"><a href="#">AGENDA</a></button></li>
        <li class="navEspli"><button class="btn" onclick="verbtnPropiedadesVertical()"><a href="#">PROPIEDADES</a></button></li>
        
        <li class="hoy">
          <script>
          devolverFecha();
          </script>
        </li>
    </ul>
    </div>
</nav>


<div class="container-fluid expandido">
    <div class ="row expandido" >
        <div class ="col-2 expandido una">
            <div class="container-fluid expandido">
                <div class ="row expandido" >
                    <div class="col expandido" style="background-color:white;">


                    <ul class="ulNavBarVertical">
                        <li class="liNabBarVertical">
                            <button class ="btn" onclick="mostrarFormAgenda()">
                                <a class ="btnAgendaVertical" id="btnAgendaVertical"  
                                href="#">AGENDA</a>
                            </button>
                        </li>
                        <li class="liNabBarVertical">
                            <button class ="btn" onclick="mostrarCatalogo()">
                                <a class ="btnPropiedadesVertical" id="btnPropiedadesVertical"  
                                href="#">VER PROPIEDADES</a>
                            </button>
                        </li>
                    </ul>

                    </div>
                </div>
            </div>
        </div>
        <div class ="col-10 expandido">

        <!-- MOSTRAR AGENDA -->
            <div class="container contenedorFormulario contendorAgenda" id= "contendorAgenda">
                <div class="row expandido">
                    <div class="col expandido colContFormulario" >

                        <div class= "container expandido">
                            <div class="row expandido">
                                <div class="col-4 expandido">
                                    <h1 style="margin: 3%;"> Agenda</h1>
                                    <h5 style="magin-bottom: 2%; margin-top: 8%;">Actividades del día: <script>devolverFecha();</script></h5>
                                    
                                    <div>
                                        <input style="magin-bottom: 2%; margin-top: 5%; width:80%;" type="date" id="start" name="trip-start"
                                            value="" class="form-control form-control-sm" >
                                        <label  class="form-label">Fecha</label>
                                    </div>
                                    <div style="margin-top:3%;">
                                    <button class="btn btn-primary btnGeneral" ><a href="#" class="a-btnGeneral">Aceptar</a></button> 
                                    </div>
                                    
                                           

        
                                </div>
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
        <!-- FIN -> MOSTRAR AGENDA -->

        <!-- MOSTRAR CATALOGO -->
        <div class="container-fluid mostrarCatalogoPropiedad " id="mostrarCatalogoPropiedad" style="margin-top:5%;">
            <div class="px-lg-5">

                <div class="row">
                <?php
                include("Propiedades/Show_prop.php");
                ?>
                
                
            </div>
          </div>
        </div>
      </div>

               


        <!-- FIN -> MOSTRAR CATALOGO -->
        


        </div>
        
        

    </div>

</div>



</body>
<!-- 
    
<div class="container-fluid expandido">
    <div class ="row expandido" >
        <div class ="col-2 expandido una">
            <div class="container-fluid expandido">
                <div class ="row expandido" >
                    <div class="col expandido" style="background-color:white;">
                    </div>
                
                </div>
            </div>
        </div>
        <div class ="col-10 expandido">
            <div class="container contenedorFormulario contendorAgenda" id= "contendorAgenda">
                <div class="row expandido">
                    <div class="col expandido colContFormulario" >

                        <div class= "container expandido" style="background-color: blue;">
                            <div class="row expandido">
                                <div class="col-5 expandido" style="background-color: grey;">
        sassass
                                </div>
                                <div class="col-7 expandido" style="background-color: green;">
sasasasas
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>


        </div>

    </div>

</div>

-->
</html>