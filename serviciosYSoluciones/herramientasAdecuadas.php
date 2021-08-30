<?php 
    include_once "app/config.inc.php";
    $titulo = "Las Herramientas Adecuadas - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Las Herramientas Adecuadas</h1>
    <h3>VPN o escritorio remoto: configura de manera óptima tu oficina en el hogar</h3>
</div>
<div class="container">    
    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.2em;">                     
                Hay dos maneras en que los teletrabajadores pueden acceder al ordenador del trabajo desde casa: conectándose a la red corporativa a través de una VPN o usando una solución de escritorio remoto. Ambas variantes tienen el mismo propósito: brindarte acceso a todos los archivos y materiales digitales de tu empresa que necesitas para un día productivo de teletrabajo. Sin embargo, también difieren en algunos aspectos, por ejemplo, en cuestiones de equipo, funcionalidad y rendimiento. Ya sea para acceder al servidor, asistir a reuniones o colaborar de manera eficiente con tus compañeros de trabajo, con una solución de acceso remoto siempre estarás bien preparado para obtener los mejores resultados posibles desde tu oficina en casa o Home Office.
            </p><br>
            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>teletrabajo2.jpg" width="100%" height="50%">
        </div>
    </div>
    <br>
</div>    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>