<?php 
    include_once "app/config.inc.php";
    $titulo = "Soporte en Sitio - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Soporte en Sitio</h1>
</div>
<div class="container">    
    <div class="row">
        <div class="col-md-6">
            <p>                 
                Cuando las incidencias no logran ser resueltas de forma virtual por parte de nuestros colaboradores, Controles Empresariales, le brindará total cobertura e inmediata atención con un servicio de soporte en sitio. Con un equipo altamente capacitado, resolveremos cualquier inconveniente en problemáticas de TI.
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
                <li>Atendemos los requerimientos que la Mesa de Ayuda no puede resolver de forma remota.</li><br>
                <li>Modelo de servicio flexible, nos adaptamos a los requerimientos de nuestros clientes.</li><br>
                <li>Alta competitividad técnica.</li><br>
                <li>Tenemos ingenieros certificados en cada línea de producto y ubicados estratégicamente en nuestras regionales.</li><br>
            </ul>
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>