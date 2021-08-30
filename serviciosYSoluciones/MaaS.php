<?php 
    include_once "app/config.inc.php";
    $titulo = "Monitoreo como Servicio (MaaS) - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron">
    <h1>Monitoreo como Servicio (MaaS)</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p>Nuestra solución ofrece el monitoreo de plataformas en tiempo real, combinado con detección de patrones, análisis, alertas y administración de respuestas. Esta herramienta le brinda capacidad de Advisor (Sugerencia de soluciones) en distintas tecnologías, así como la capacidad de responder rápidamente a escenarios de alta probabilidad de ocurrencia de falla. Así mismo, le permite tomar decisiones de una manera más eficiente y se logra una mayor agilidad en las operaciones garantizando los compromisos de disponibilidad establecidos.</p>
            <br>
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
                <li>Consolidar, correlacionar y entender datos de registro generados por los sistemas operativos y las aplicaciones dentro su infraestructura.</li><br>
                <li>Identificar y alertar en tiempo real posibles incidentes de seguridad por medio del reconocimiento automático de anomalías y el servicio de monitoreo permanente.</li><br>
                <li>Entender el comportamiento de los usuarios, detectando eventos atípicos y parametrizando procesos que aseguren disponibilidad.</li><br>
                <li>Documentar los patrones de disponibilidad, rendimiento y configuración para facilitar la solución de problemas y la restauración de sus servicios.</li><br>
            </ul>            
        </div>
    </div>
</div>     

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
