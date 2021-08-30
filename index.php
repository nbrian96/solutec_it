<?php

//DOMINIO
//$componente_url = parse_url($_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]);

//LOCALHOST
$componente_url = parse_url($_SERVER["REQUEST_URI"]);

$ruta = $componente_url['path'];

$partes_ruta = explode("/", $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

//if ($partes_ruta[0] == 'solutec-it.com') {  // Dominio
if ($partes_ruta[0] == 'smart') {   // LOCALHOST
	if (count($partes_ruta) == 1) {
		$ruta_elegida = "vistas/home.php";
	} elseif (count($partes_ruta) == 2) {
		switch ($partes_ruta[1]) {
			case 'nosotros':
				$ruta_elegida = "vistas/nosotros.php";
				break;				
			case 'contacto':
				$ruta_elegida = "vistas/contacto.php";
				break;
		}
	} elseif (count($partes_ruta) == 3) {
		switch ($partes_ruta[1]) {
			case 'productos':
				switch ($partes_ruta[2]) {
					case 'impresoras-laser':
					$ruta_elegida = "productos/impresorasLaser.php";
					break;

					case 'impresoras-multifuncion':
					$ruta_elegida = "productos/impresorasMultifuncion.php";
					break;

					case 'suministros-de-tinta':
					$ruta_elegida = "productos/suministrosDeTinta.php";
					break;

					case 'escaneres':
					$ruta_elegida = "productos/escaneres.php";
					break;

					case 'auriculares-pc':
						$ruta_elegida = "productos/auricularesParaPC.php";
						break;

					case 'desktops':
						$ruta_elegida = "productos/desktops.php";
						break;

					case 'gamers':
						$ruta_elegida = "productos/gamers.php";
						break;					
				
					case 'licenciamiento-de-productividad':
						$ruta_elegida = "productos/licenciamientoDeProductividad.php";
						break;

					case 'licenciamiento-de-seguridad':
						$ruta_elegida = "productos/licenciamientoDeSeguridad.php";
						break;

					case 'mouses':
						$ruta_elegida = "productos/mouse.php";
						break;

					case 'portatiles':
						$ruta_elegida = "productos/portatiles.php";
						break;
					
					case 'tablets':
						$ruta_elegida = "productos/tabletas.php";
						break;

					case 'teclados':
						$ruta_elegida = "productos/teclado.php";
						break;
				}
				break;
			
			case 'servicios-y-soluciones':
				switch ($partes_ruta[2]) {
					case 'licenciamiento':
					$ruta_elegida = "serviciosYSoluciones/licenciamiento.php";
					break;

					case 'administracion-de-telecomunicaciones':
					$ruta_elegida = "serviciosYSoluciones/administracionDeTelecomunicaciones.php";
					break;

					case 'BaaS':
					$ruta_elegida = "serviciosYSoluciones/Baas.php";
					break;

					case 'backup360-infraestructura':
					$ruta_elegida = "serviciosYSoluciones/BackUp360Infraestructura.php";
					break;

					case 'backup360-productividad':
					$ruta_elegida = "serviciosYSoluciones/BackUp360Productividad.php";
					break;

					case 'cloud-journey':
					$ruta_elegida = "serviciosYSoluciones/cloudJourney.php";
					break;

					case 'comunicaciones-unificadas':
					$ruta_elegida = "serviciosYSoluciones/comunicacionesUnificadas.php";
					break;

					case 'connect-Mcloud':
					$ruta_elegida = "serviciosYSoluciones/connectM-cloud.php";
					break;

					case 'connect-office365':
					$ruta_elegida = "serviciosYSoluciones/connectOffice365.php";
					break;

					case 'consultoria-cloud':
					$ruta_elegida = "serviciosYSoluciones/consultoriaCloud.php";
					break;

					case 'DRaaS':
					$ruta_elegida = "serviciosYSoluciones/DRaaS.php";
					break;

					case 'herramientas-adecuadas':
					$ruta_elegida = "serviciosYSoluciones/herramientasAdecuadas.php";
					break;

					case 'IaaS':
					$ruta_elegida = "serviciosYSoluciones/IaaS.php";
					break;

					case 'inteligencia-de-negocios':
					$ruta_elegida = "serviciosYSoluciones/inteligenciaDeNegocios.php";
					break;

					case 'intranet-base':
					$ruta_elegida = "serviciosYSoluciones/intranetBase.php";
					break;

					case 'MaaS':
					$ruta_elegida = "serviciosYSoluciones/MaaS.php";
					break;

					case 'marcos-y-normativas':
					$ruta_elegida = "serviciosYSoluciones/marcosYNormativas.php";
					break;

					case 'nube-hibrida':
					$ruta_elegida = "serviciosYSoluciones/nubeHibrida.php";
					break;

					case 'nube-privada':
					$ruta_elegida = "serviciosYSoluciones/nubePrivada.php";
					break;

					case 'nube-publica':
					$ruta_elegida = "serviciosYSoluciones/nubePublica.php";
					break;

					case 'red-social-corporativa':
					$ruta_elegida = "serviciosYSoluciones/redSocialCorporativa.php";
					break;

					case 'seguridad':
					$ruta_elegida = "serviciosYSoluciones/seguridad.php";
					break;

					case 'servicios-de-gestion':
					$ruta_elegida = "serviciosYSoluciones/serviciosDeGestion.php";
					break;

					case 'servicios-de-infraestructura':
					$ruta_elegida = "serviciosYSoluciones/serviciosDeInfraestructura.php";
					break;

					case 'servicios-XaaS':
					$ruta_elegida = "serviciosYSoluciones/serviciosXaaS.php";
					break;

					case 'software-de-productividad':
					$ruta_elegida = "serviciosYSoluciones/softwareDeProductividad.php";
					break;

					case 'soporte-en-sitio':
					$ruta_elegida = "serviciosYSoluciones/soporteEnSitio.php";
					break;

					case 'teletrabajo':
					$ruta_elegida = "serviciosYSoluciones/teletrabajo.php";
					break;

					case 'virtualizacion-de-servidores':
					$ruta_elegida = "serviciosYSoluciones/virtualizacionDeServidores.php";
					break;

					case 'web-business':
					$ruta_elegida = "serviciosYSoluciones/WebBusiness.php";
					break;
				}
				break;

		}
	}

}

include_once $ruta_elegida;