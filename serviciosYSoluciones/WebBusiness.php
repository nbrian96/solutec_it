<?php 
    include_once "app/config.inc.php";
    $titulo = "Tienda Web - SMART";
    include_once "plantillas/documento-apertura.inc.php";
    include_once "plantillas/documento-encabezado.inc.php";
    include_once "plantillas/documento-navegador.inc.php";
?>

<div class="container-fluid" id="Jumbotron">
    <h1>Web Business</h1>
    <div class="container">
        <i> <font size=5>
        ¿Necesita adaptarse a la nueva normalidad?  ¿Busca que su negocio transmita una imagen profesional?
        <br>
        ¿Genere confianza y seguridad?  ¿Sea encontrado fácilmente por potenciales clientes en internet?
        </font>
        </i>

        <p id="textoJustificado"><i> <font size=5>
        <br>
        Nuestro Web Business Le permitirá tener su propia pagina web completa para proyectar su negocio
        de forma virtual sin tener que encargarse del mantenimiento de esta.
        Tener su Página de Internet le ayudará a transmitir una imagen más profesional y
        moderna, generará confianza y promoverá su negocio en Internet para
        atraer más clientes. En estos tiempos donde es necesario adaptarse a la nueva normalidad es escencial contar con una plataforma donde 24/7 se puedan mostrar sus productos y servicios y se pueda realizar una compra inmediata.
        </font> 
        </i></p>             
    </div>       
</div>

<div class="container" style="text-align: justify;">
    <div class="row">
        <div class="col-md-6">            
            <h3 style="text-align: left;"><b>Características y beneficios del servicio</b></h3>
            <p>
            Su empresa tendrá dirección de internet con el nombre y logo de su negocio, nos encargamos del contenido de su sitio cuando usted lo necesite; 
            tendrá un sitio web móvil que podrá mostrar la ubicación exacta de su negocio de esta forma clientes potenciales podrán contactarlo vía 
            correo electrónico, WhatsApp o número de línea, de igual forma podrá tener un catálogo de productos en línea y linkeamos MercadoPago, Instagram Shopping y Tienda en Facebook para permitir el pago directo desde la tienda sin pago de comisiones (solo las correspondientes a la plataforma de pago como mercadopago)..
            Nuestro servicio incluye la gestión de Dominio - dns – Web hosting puedes olvidarte de cualquier gestión de panel técnico, esas tareas 
            las realiza nuestro equipo técnico. El diseño de la página Web la realiza nuestro equipo técnico.
            </p>           
        </div><br>
        <div class="col-md-6">
            <img id="imagen6" src="<?php echo RUTA_IMG ?>tiendaweb.jpg" width="100%" height="50%">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            <h3><b>Servicio de Web Business</b></h3>
            <p>
                Este servicio cuenta con una página web básica para su negocio, preparada para mostrar las cualidades de su negocio, sus productos y servicios, formas de contacto y además web hosting, una ventaja para usted ya que nuestro equipo técnico se hará cargo de la gestión de panel técnico.
            </p>
             <h3><i style="color:#FF0000">$20.000</i></h3>
            <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
            data-preference-id="345262450-2126274b-48f9-4c5b-9a4f-fadda80ebb30">
            </script>
        </div>
        <div class="col-md-6">
            <h3><b>Servicio de Web Business plus (+)</b></h3>
            <p>
            Este servicio cuenta con una página web básica para su negocio, preparada para mostrar las cualidades de su negocio, sus productos y servicios, formas de contacto y además web hosting, una ventaja para usted ya que nuestro equipo técnico se hará cargo de la gestión de panel técnico, además va a contar con el servicio de correo electrónico, un beneficio extra para mejorar su negocio.
            </p>
            <h3><i style="color:#FF0000">$25.000</i></h3>
            <script src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
            data-preference-id="345262450-73703ac8-9abd-4810-894d-cdebaa4a0fc6">
            </script>            
        </div>
    </div>
</div>

<br>

<?php
    include_once "plantillas/documento-pie-pagina.inc.php";
    include_once "plantillas/documento-cierre.inc.php";
?>
