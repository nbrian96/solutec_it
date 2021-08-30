<?php 
    include_once "app/config.inc.php";
    $titulo = "Administración de Telecomunicaciones - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Administración de Telecomunicaciones</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p>                     
                Muchas organizaciones necesitan contar con una infraestructura de red sólida y precisa ante la creciente ola de amenazas como los spyware, cookies y demás agentes nocivos. Controles Empresariales le garantiza total administración, soporte y seguridad de sus redes LAN, WAN y de telefonía para que usted obtenga total disponibilidad y seguridad de sus recursos de red.
            </p><br>            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Diagnóstico de recursos operativos.</li><br>
                <li>Análisis exponencial de vulnerabilidades.</li><br>
                <li>Constante monitoreo y actualización de sistemas operativos (parches de seguridad).</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>