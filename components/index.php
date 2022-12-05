<?php 
include("./header.php");
?>

<link rel="stylesheet" href="../css/index.css">
<script src="../js/index.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col">
        <div class = "domus">
            <h1 class="domusTitulo">DOMUS</h1>
            <h5 class="descripDomus">Propiedad exclusiva, asesoramiento personal</h5>
            <button class="btn btn-primary" onclick="funcion()">INGRESAR</button>
        </div>
           
    </div>
    <div class="col" >
        <div class="image" id="demo">
            
        </div>
        <div class = "verd" id ="ver">
            <div>
                <h2 class = "oficinaVirtual">Oficina Virtual</h2>

                <form name="form_pwd" method="POST" action="./redir_session.php">
                    <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Usuario</label>
                        <input type="email" class="form-control form-control-lg" name="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-2">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control form-control-lg" name="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary iniciarSesion" > 
                        INICIAR SESIÓN
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>   
</body>
</html>