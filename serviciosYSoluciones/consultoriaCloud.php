<?php 
    include_once "app/config.inc.php";
    $titulo = "Consultoría Cloud - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Consultoría Cloud</h1>
</div>
<div class="container">
    <div align="center">
        <p style="font-size: 17px;">En esta sección podrá encontrar los servicios que apoyarán a su empresa en el proceso de transformación digital.</p><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a href="<?php echo RUTA_CLOUD_JOURNEY ?>" target="_blank"><img src="<?php echo RUTA_IMG ?>cloud-journey.png" width="100%"></a><br>                
            </div> 
            <div class="col-md-4"></div>             
        </div>
    </div>
</div>
<br><br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>