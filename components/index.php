<?php
include("./header.php");
?>

<link rel="stylesheet" href="../css/DomusInmobiliaria.css">
<script src="../js/DomusInmobiliaria.js"></script>

</head>
<body>
    
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg ppal">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Domus Inmobiliaria</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ulNav">
        <li class="nav-item ">
        <button class="btnGeneral" style="border-style:none;"><a class="nav-link navitemcenter" aria-current="page" href="http://localhost/DOMUS/components/index.php">INICIO</a></button>
        </li>
        <li class="nav-item ">
          <button class="btnGeneral" onclick=" verCatalogo()" style="border-style:none;"><a class="nav-link navitemcenter" aria-current="page" href="#">CATALOGO</a></button>
        </li>
        <li class="nav-item ">
        <button class="btnGeneral" onclick="verFormContacto()" style="border-style:none;"><a class="nav-link navitemcenter" aria-current="page" href="#">CONTACTO</a></button>
        </li>
      </ul>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ulNav">
        <li class="nav-item ">
            <a class="nav-link naviteminiciarsesion" href="http://localhost/DOMUS/components/indexSession.php">Iniciar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid expandido">
    <div class ="row expandido" >
        <div class ="col expandido" style="padding:0%;">

        <!-- CAROUSEL -->
        <div class = "contenedorCarousel" id="contenedorCarousel">  
            <div id="demo" class="carousel slide demo" data-bs-ride="carousel">
                <!-- botones -->
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                </div>

                <!--contenido del slide -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/casa1a.jpg" alt="" class="d-block w-100">
                </div>
                <div class="carousel-caption">
                    <h1 style="margin-bottom: 5%"> <b>DOMUS INMOBILIARIA</b> </h1>
                    <H3 style="margin-bottom: 2%"> <b>LA VIVIENDA NO ES SOLO UN BIEN INMOBILIARIO,</b> </H3>
                    <H3 style="margin-bottom: 25%"> <b>ES TAMBIÉN UNA FORMA DE CONSOLIDACION ESPIRITUAL</b> </H3>
                </div>
                <div class="carousel-item">
                    <img src="../img/casa1b.jpg" alt="" class="d-block w-100">
                    <div class="carousel-caption">
                    <h1 style="margin-bottom: 5%"> <b>EMPRESA LIDER EN COMPRA Y VENTA DE PROPIEDADES</b> </h1>
                    <H3 style="margin-bottom: 30%"> <b>CONTAMOS CON LAS MEJORES PROPIEDADES</b> </H3>
                </div>
                </div>
                </div>

                <!-- icono de boton -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
        <!-- FIN -> CAROUSEL -->

            

            <!--- VER CATALOGO -->
            <div class="catalogoPropiedades" id="catalogoPropiedades">
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
            </div>


            <!-- FIN -> VER CATALOGO -->


            <!--- CONTACTO -->
            <div class="container-fluid formContacto " id="formContacto">
                <div class="row expandido rounded ">
                    <div class ="col expandido" style="padding:0%;;">
                        <form method='POST' action="./Acciones_agenda/Create_request.php" >

                            <div class="container">
                                <div class="row d-flex flex-row justify-content-center alig-items-center bordeForm border border-1">
                                    
                                    <h2>Contactanos</h2>

                                    <div class="col-6" style="margin-top:2%;">
                                        <input type="text" placeholder="Nombre" class="form-control form-control-sm" name="FirstName">
                                        <label  class="form-label">Nombre</label>
                                    </div>
                                    <div class="col-6" style="margin-top:2%; margin-bottom:3%;">
                                        <input type="text" placeholder="Apellido" class="form-control form-control-sm" name="LastName">
                                        <label  class="form-label">Apellido</label>
                                    </div>
                                    <div class="col-6" style="margin-top:2%; margin-bottom:3%;">
                                        <input type="text" placeholder="Email" class="form-control form-control-sm" name="Email">
                                        <label  class="form-label">Email</label>
                                    </div>
                                    <div class="col-6" style="margin-top:2%; margin-bottom:3%;">
                                        <input type="text" placeholder="Teléfono" class="form-control form-control-sm" name="Phone">
                                        <label  class="form-label">Teléfono</label>
                                    </div>

                                    <div class="col-12" style="margin-top:2%; margin-bottom:3%;">
                                        <textarea style="height:200px" class="form-control textarea" id="exampleFormControlTextarea1" name="Asunto" rows="3" placeholder="Asunto"></textarea>
                                        <label  class="form-label">Asunto</label>
                                    </div>

                                    
                                    <button style="width:15%; height: 3%; margin-top:1%; margin-left:1%;"  class="btn btn-primary btnGeneral"> 
                                        <a href="#" class="a-btnGeneral">ENVIAR</a>
                                    </button>
                                    
                                </div>
                            </div>
                        </form>


                    </div>

                </div>


            </div>


            <!-- FIN -> VER CONTACTO -->



        </div>
    </div>
</div>




</body>
</html>