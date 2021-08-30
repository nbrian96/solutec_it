<?php 
    include_once "app/config.inc.php";
    $titulo = "Cloud Journey - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>
<div id="Jumbotron" class="jumbotron container-fluid">
    <h1>Cloud Journey</h1>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <p id="textoJustificado" style="font-size: 1.3em;"><b>Cloud Journey</b> lo ayuda a seleccionar el mejor modelo de adopción de nube para las necesidades 
                de su negocio y lo acompaña durante el proceso. Apoyamos a su organización en la adopción de los servicios 
                de nube de manera correcta, adecuada y alineada a su visión y objetivos. Independiente de la etapa del proceso 
                de adopción de nube en la que se encuentren, todas las empresas pueden beneficiarse del Cloud Journey.</p><br>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>CLOUD-JOURNEY-2.png" width="100%" height="50%">
        </div>
    </div>
    <br>
    <div class="row" id="textoJustificado" style="font-size: 1.25em;">
        <div class="col-md-6">
            <h2 style="color: #b61e6a;">Beneficios</h2>
            <ul style="list-style-type: circle; font-size: 16px;">
                <li>Mayor productividad.</li><br>
                <li>Disponibilidad remota de la información.</li><br>
                <li>Información segura y confiable.</li><br>
                <li>Optimización de Costos y ROI.</li><br>
                <li>Minimizar impacto y tiempo de migración.</li><br>
                <li>Alineación de la estrategia Cloud con los objetivos del negocio.</li><br>
                <li>Enfoque estratégico del área de TI.</li><br>
                <li>Centralización de servicios de soporte de los servicios Cloud.</li><br>
            </ul>
            
        </div>
        <div class="col-md-6" >
            <h2 style="color: #b61e6a;">Características</h2>
            <div>
                <p><b>1. Consultoría: Cloud Journey Envisioning</b></p>
                <p>Nuestro modelo de consultoría evalúa su negocio, sus objetivos y preparación para ir a la nube, para luego evaluar los 
                    diferentes proveedores y modelos de nube para definir la estrategia de nube y la hoja de ruta para subir a la nube.</p>
            </div><br><br>
            <div>
                <p><b>2. Servicios de Implementación: Cloud Journey Provisioning</b></p>
                <p>Antes de iniciar la migración generamos un plan de implementación, para garantizar tiempos y 
                    minimizar los incidentes que puedan presentarse durante el proceso.</p>
            </div><br><br>
            <div>
                <p><b>3. Modernización o Híbrido: Cloud Journey Hybrid</b></p>
                <p>Con Cloud Journey no sólo trabajamos sobre la nube. Si durante nuestro análisis definimos que se requiere modernizar 
                    su Data Center y/o generar un esquema híbrido, lo apoyamos en este proceso.</p>
            </div><br><br>
            <div>
                <p><b>4. Consumo y Gestión: COEM Connect</b></p>
                <p>En Controles Empresariales entendemos que adoptar la nube no es el fin del proceso. La gestión y optimización de la 
                    nube representa una gran carga de trabajo. Nuestro modelo de gestión se encarga del monitoreo continuo del servicio, 
                    y le presenta las oportunidades de mejora su retorno.</p>
            </div>
        </div>
        
    </div>
    
</div>
<br>
<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
