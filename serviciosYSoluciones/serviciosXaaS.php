<?php 
    $titulo = "Servicios XaaS - SMART";
    include_once "../plantillas/documento-apertura.inc.php";
    include_once "../plantillas/documento-encabezado.inc.php";
    include_once "../plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Servicios XaaS</h1>
</div>
<div class="container">
    <div align="center">
        <p style="font-size: 17px;">En esta sección podrá encontrar los servicios que apoyarán a su empresa en el proceso de transformación digital.</p><br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="BaaS.php" target="_blank"><img src="../img/BaaS.png" width="100%"></a><br><br>    
                <a href="DRaaS.php" target="_blank"><img src="../img/DRaaS.png" width="100%"></a><br><br>  
                <a href="IaaS.php" target="_blank"><img src="../img/IaaS.png" width="100%"></a><br><br>    
                <a href="MaaS.php" target="_blank"><img src="../img/MaaS.png" width="100%"></a><br><br>  
            </div> 
            <div class="col-md-4"></div>             
        </div>
    </div>
</div>  
    
<?php
    include_once "../plantillas/documento-contacto.inc.php";
    include_once "../plantillas/documento-cierre.inc.php";
?>