<?php 
    include_once "app/config.inc.php";
    $titulo = "Disaster recovery como servicio (DRaaS) - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron">
    <h1>Disaster recovery como servicio (DRaaS)</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p>Controles Empresariales brinda el servicio de Recuperación ante desastres en entornos Cloud, lo que permite a las organizaciones evitar pérdidas económicas y daños a su imagen por un posible daño en los sistemas críticos de información. Nuestras soluciones cuentan con una protección total hacia sus datos y servicios, además de reducir drásticamente el coste que representaría una ubicación alterna, al igual que los tiempos de recuperación funcionarían de una manera más eficiente.</p><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-7">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Evitar la pérdida de datos.</li><br>
                <li>Servicio flexible.</li><br>
                <li>Reducción de costes.</li><br>
                <li>No tiene necesidad de inversión en infraestructuras ni amortizaciones.</li><br>
                <li>Reducción del tiempo de inactividad.</li><br>
                <li>Automatización del proceso.</li><br>
                <li>Transparente a los cambios de IT.</li><br>
                <li>Soporta cualquier sistema y bases de datos.</li><br>
                <li>Gestión integral del servicio.</li><br>
            </ul>            
        </div>
    </div>
</div>     

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>