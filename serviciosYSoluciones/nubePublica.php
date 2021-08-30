<?php 
    include_once "app/config.inc.php";
    $titulo = "Nube Pública - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Nube Pública</h1>
</div>
<div class="container">
  
    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.3em;">             ​​
                Nosotros trabajamos con socios en la Nube Pública tales como Amazon (AWS), Microsoft (Azure), IBM Cloud, Oracle Cloud y otros, para proporcionar soluciones que les brinden a las empresas las capacidades de ahorro en costos de operación y de mantenimiento de TI.
            </p>
            <br>
            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 16px;">
                <li>Ten​emos la capacidad de ampliar la infraestructura de TI actual para hacer frente a las diferentes demandas provenientes del negocio. Las capacidades y soluciones basadas en la infraestructura de la Nube Pública desarrolladas por Controles Empresariales, son soportados por servicios de extremo a extremo garantizándole a su empresa los beneficios que las Nubes Públicas pueden brindar.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
