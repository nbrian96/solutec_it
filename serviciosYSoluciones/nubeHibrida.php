<?php 
    include_once "app/config.inc.php";
    $titulo = "Nube Híbrida - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Nube Híbrida</h1>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.2em;">    
                Le ofrecemos arquitecturas de nube híbrida altamente escalables, al tiempo que mantiene el rendimiento, la disponibilidad y la seguridad requeridos en los entornos empresariales locales. La nube híbrida permite a las empresas extender sus centros de datos de forma fluida y virtual sin la necesidad de comprar e implementar ninguna infraestructura adicional.​​
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
                <li>Características escalables y rentables de una nube pública y combinados con la seguridad y control de una nube privada para permitir que la empresa obtenga los beneficios esperados.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>

