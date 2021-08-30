<?php 
    include_once "app/config.inc.php";
    $titulo = "Virtualización de Servidores - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron container-fluid">
    <h1>Virtualización de Servidores</h1>
</div>
<div class="container">   
    <div class="row">
        <div id="textoJustificado" class="col-md-5" style="font-size: 1.2em;">
            <p>
            Los años de experiencia en soluciones de virtualización de servidores y un servicio dedicado y exclusivo a todos nuestros clientes globales son nuestro 
            principal activo para usted. 
            </p>
            <p>
            Empiece la transición a la Cloud con una virtualización de servidores. A continuación, a su propio ritmo, evolucione hacia 
            una arquitectura de centro de datos definido por software totalmente virtualizado. Virtualice la red, el almacenamiento, los servidores y la seguridad 
            para crear centros de datos virtuales. 
            </p>
            <p>
            Nuestro equipo de trabajo cuenta con profesionales certificados <b>MCP</b> en <b>VMMARE</b>; están siempre dispuestos a ofrecer 
            las mejores soluciones para su operación y la incorporación de esas tecnologías en su empresa de manera fácil ágil y económica. Los servicios siempre 
            están en línea para cualquier consultoría, la podemos realizar en forma remota mediante acceso de nuestros especialistas para realizar el soporte en 
            línea para su requerimiento.
            </p><br>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-6">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>servicios-soluciones.png" width="100%" height="50%">
        </div>
    </div>
</div>
<br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>