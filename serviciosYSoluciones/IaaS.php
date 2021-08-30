<?php 
    include_once "app/config.inc.php";
    $titulo = "Monitor 360 (Infraestructura como servicio) IaaS - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron">
    <h1>Monitor 360 (Infraestructura como servicio) IaaS</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p>Nuestra herramienta brinda monitoreo integral que le permitirá saber qué sucede en su infraestructura local y en la nube. Así mismo, podrá consolidar de manera segura y oportuna todos los datos que le son difíciles de descifrar día a día. Esta herramienta le permitirá parametrizar tareas como alertas, entregará mitigaciones de seguridad y cambios de configuración cuando usted los necesite permitiendo el desarrollo de una estrategia de Inteligencia Operativa.</p>
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
                <li>Consolidar, correlacionar y entender datos de registro generados por los sistemas operativos y las aplicaciones dentro de su infraestructura.</li><br>
                <li>Identificar y alertar a tiempo posibles incidentes de seguridad.</li><br>
                <li>Entender el comportamiento de los usuarios, detectando eventos atípicos.</li><br>
                <li>Documentar los patrones de disponibilidad, rendimiento y configuración para facilitar la solución de problemas y la restauración de sus servicios.</li><br>
                <li>Permite tener total control sobre sus activos desde cualquier dispositivo gracias a la nube.</li><br>
                <li>Hacer más liviana su administración, apalancándose en los servicios profesionales de tecnología que le ofrece Controles Empresariales.</li><br>
            </ul>            
        </div>
    </div>
</div>     

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
