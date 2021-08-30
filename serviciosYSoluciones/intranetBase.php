<?php 
    include_once "app/config.inc.php";
    $titulo = "Intranet Base - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div class="jumbotron container-fluid" id="Jumbotron">
    <h1>Intranet Base</h1>
</div>
<div class="container">

    <div class="row">
        <div class="col-md-7">
            <p id="textoJustificado" style="font-size: 1.2em;">                    
                El producto <b>COEM Intranet Base</b> aprovecha las herramientas, funcionalidades y servicios de SharePoint Online (incluido en los licenciamientos de Office 365), para crear un portal corporativo con las funcionalidades más importantes. Está diseñado para ser el punto de partida de un portal robusto, que puede integrarse con otras herramientas de Microsoft, para la colaboración, divulgación de información clave y flujos de trabajo, todo con los más altos estándares de seguridad. Cuenta además con los beneficios de la computación en la nube: movilidad, escalabilidad y seguridad. 
            </p><br>
        </div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>INTRANET_BASE.jpg" width="100%" height="50%">
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 16px;">
                <li>Sitios dinámicos y seguros.</li><br>
                <li>Permite compartir información de forma ordenada con los colaboradores de su empresa.</li><br>
                <li>Plataforma ideal para realizar comunicaciones corporativas.</li><br>
                <li>Documentos accesibles desde cualquier parte.</li><br>
                <li>Promueve la colaboración y la productividad en su empresa.</li><br>
                <li>Posibilidad ilimitada de crecimiento.</li><br>
                <li>Adaptable a necesidades de su empresa.</li><br>
            </ul>            
        </div>
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Características</h2>
            <ul id="textoJustificado" style="list-style-type: circle; font-size: 16px;">
                <li><b>Intranet Base</b> está montada sobre SharePoint online, integrada con todas las herramientas de Office 365.</li><br>
                <li>Su implementación se realiza en un periodo de once días hábiles.</li><br>
                <li>Posterior a la entrega del portal se lleva lleva a cabo una sesión de capacitación que costa de cuatro horas.</li><br>
            </ul>            
        </div>
    </div>
</div>
    
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>