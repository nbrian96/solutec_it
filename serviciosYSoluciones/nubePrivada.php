<?php 
    include_once "app/config.inc.php";
    $titulo = "Nube Privada - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Nube Privada</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.2em;">                ​​
                Contamos con una amplia experiencia en consolidación de centros de datos y tenemos un amplio historial en ayudar a los clientes a comprender rápidamente los servicios que ofrecen a los usuarios. Nuestro enfoque comprobado de la evaluación de los servicios, la comprensión de la infraestructura asociada y la entrega de las mejores arquitecturas nos permiten migrar estos servicios de un modelo tradicional a uno de Nube Privada.
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
                <li>Brinda las características de autoservicio, escalabilidad y elasticidad.</li><br>
                <li>Control la personalización requerida utilizando recursos a través de una infraestructura informática hospedada en el entorno empresarial.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>

