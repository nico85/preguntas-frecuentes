<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Preguntas Frecuentes</title>

    <!-- Bootstrap 
		<link href="css/bootstrap.min.css" rel="stylesheet"> -->
		
		<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
                <link rel="stylesheet" href="http://udc.edu.ar/inscripciones/bootstrap/css/bootstrap.min.css" media="all">
                
		<!-- Optional theme -->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <?php    
	$tablet_browser = 0;
	$mobile_browser = 0;
	$body_class = 'desktop';
	 
	if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		$tablet_browser++;
		$body_class = "tablet";
	}
	 
	if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
		$mobile_browser++;
		$body_class = "mobile";
	}
	 
	if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) || ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
		$mobile_browser++;
		$body_class = "mobile";
	}
	 
	$mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
	$mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		'newt','noki','palm','pana','pant','phil','play','port','prox',
		'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		'wapr','webc','winw','winw','xda ','xda-');
	 
	if (in_array($mobile_ua,$mobile_agents)) {
		$mobile_browser++;
	}
	 
	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),'opera mini') > 0) {
		$mobile_browser++;
		//Check for tablets on opera mini alternative headers
		$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
		  $tablet_browser++;
		}
	}
  
	if (($tablet_browser > 0) || ($mobile_browser > 0)){
		echo "<div class='content' style='padding: 0% 0% 0% 0%'>";
	}
	else {
	   echo "<div class='content' style='padding: 0% 20% 0% 20%'>";
	} 
	
    ?>  
	
  
	  <div class="container-fluid">
		<div align="center">
			<h1>
				<a href="#" onClick="location.reload();" title="Cargar página nuevamete.">
					<img src="http://udc.edu.ar/wp-content/themes/udc/images/logo.png"></img>
				</a>
			</h1>
                    
                    <h2><strong>Preguntas Frecuentes</strong></h2>
		</div>
		<hr>
		<div>
			<!-- Inicio del collapse de ayuda completo -->
			<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
				<div class="panel panel-default" style="background-color: #A9D0F5"> <!-- Renglón 1 -->
					<div class="panel-heading" role="tab" id="head1"> <!-- HEAD del renglón 1 -->
						<h4 class="panel-title"> <!-- H4 del título del renglón 1 -->
							<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1" aria-expanded="true" aria-controls="collapse1" style="text-decoration: none;">
							  <i class="glyphicon glyphicon-tasks"></i>
							  &nbspSistema de Autogestión UDC <!-- Título del renglón 1 que colapsa -->
							</a> 
						</h4> <!-- Fin H4 renglón 1 -->
					</div> <!-- Fin HEAD renglón 1 -->
					<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1"> <!-- contenido del BODY del renglón 1 -->
						<div class="panel-body">
						  <div class="panel-group" id="accordion1-1" role="tablist" aria-multiselectable="true">
							<!-- ################################################ -->
							<div class="panel panel-default"> <!-- Renglón 1-1 -->
								<div class="panel-heading" role="tab" id="head1-1"> <!-- HEAD del renglón 1-1 -->
									<h4 class="panel-title"> <!-- H4 del título del renglón 1-1 -->
										<a role="button" data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-1" aria-expanded="true" aria-controls="collapse1-1">
										  ¿Cómo ingreso al Sistema de Autogestión UDC? <!-- Título del renglón 1-1 que colapsa -->
										</a> 
									</h4> <!-- Fin H4 rengón 1-1 -->
								</div> <!-- Fin HEAD renglón 1-1 -->
								<div id="collapse1-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-1"> <!-- contenido del BODY del renglón 1-1 -->
									<div class="panel-body">
										Para ingresar al Sistema de Autogestión UDC debés acceder a <a href="http://autogestion.udc.edu.ar/guarani/" target="_blank">http://autogestion.udc.edu.ar/guarani/</a> en tu navegador preferido, o también podés hacerlo desde nuestro <a href="http://www.udc.edu.ar" target="_blank">sitio web</a>.
									</div> <!-- FIN del contenido del BODY del renglón 1-1 -->
								</div> <!-- FIN del BODY del renglón 1-1 -->
							</div> <!-- Fin del renglón 1-1 -->
							<!-- FIN del Renglón 1-1 -->
							<!-- ################################################ -->
							<div class="panel panel-default"> <!-- Renglón 1-2 -->
								<div class="panel-heading" role="tab" id="head1-2"> <!-- HEAD del renglón 1-2 -->
									<h4 class="panel-title"> <!-- H4 del título del renglón 1-2 -->
										<a role="button" data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-2" aria-expanded="true" aria-controls="collapse1-2">
										  ¿Quiénes pueden utilizar Autogestión UDC? <!-- Título del renglón 1-2 que colapsa -->
										</a> 
									</h4> <!-- Fin H4 rengón 1-2 -->
								</div> <!-- Fin HEAD renglón 1-2 -->
								<div id="collapse1-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-2"> <!-- contenido del BODY del renglón 1-2 -->
									<div class="panel-body">
										Pueden acceder al sistema Autogestión UDC los alumnos, docentes, personal administrativo de la Universidad del Chubut que dispongan de una cuenta institucional (tu_usuario@udc.edu.ar).
									</div> <!-- FIN del contenido del BODY del renglón 1-2 -->
								</div> <!-- FIN del BODY del renglón 1-2 -->
							</div> <!-- Fin del renglón 1-2 -->
							<!-- FIN del Renglón 1-2 -->
							<!-- ################################################ -->
							<div class="panel panel-default"> <!-- Renglón 1-3 -->
								<div class="panel-heading" role="tab" id="head1-3"> <!-- HEAD del renglón 1-3 -->
									<h4 class="panel-title"> <!-- H4 del título del renglón 1-3 -->
										<a role="button" data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-3" aria-expanded="true" aria-controls="collapse1-3">
										  Soy nuevo en Autogestión UDC y quiero obtener mi usuario y clave <!-- Título del renglón 1-3 que colapsa -->
										</a> 
									</h4> <!-- Fin H4 rengón 1-3 -->
								</div> <!-- Fin HEAD renglón 1-3 -->
								<div id="collapse1-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-3"> <!-- contenido del BODY del renglón 1-3 -->
									<div class="panel-body">
										Tu usuario de Autogestión de la Universidad del Chubut es el mismo usuario de tu cuenta de correo institucional y está constituido de forma lógica en base a las iniciales de tu nombre seguido por tu apellido más la dirección institucional: por ejemplo, para Germán Horacio López, el correo sería ghlopez@udc.edu.ar y su usuario ghlopez. Para verificar tu nombre de usuario y obtener tu contraseña, seguí las instrucciones del siguiente <a href="http://udc.edu.ar/ayuda-autogestion/" target="_blank">Tutorial</a>.
									</div> <!-- FIN del contenido del BODY del renglón 1-3 -->
								</div> <!-- FIN del BODY del renglón 1-3 -->
							</div> <!-- Fin del renglón 1-3 -->
							<!-- FIN del Renglón 1-3 -->
							<!-- ################################################ -->
							<div class="panel panel-default"> <!-- Renglón 1-4 -->
								<div class="panel-heading" role="tab" id="head1-4"> <!-- HEAD del renglón 1-4 -->
									<h4 class="panel-title"> <!-- H4 del título del renglón 1-4 -->
										<a role="button" data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-4" aria-expanded="true" aria-controls="collapse1-4">
										  No recuerdo mi usuario / contraseña de Autogestión UDC <!-- Título del renglón 1-4 que colapsa -->
										</a> 
									</h4> <!-- Fin H4 rengón 1-4 -->
								</div> <!-- Fin HEAD renglón 1-4 -->
								<div id="collapse1-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-4"> <!-- contenido del BODY del renglón 1-4 -->
									<div class="panel-body">
										Si al intentar ingresar al sistema de Autogestión de la Universidad del Chubut no recordás tu usuario o contraseña, debés <a href="http://autogestion.udc.edu.ar/guarani/acceso/recuperar" target="_blank">resetear</a> dichos datos. Para realizar este proceso, podés guiarte con el siguiente <a href="http://udc.edu.ar/ayuda-autogestion/" target="_blank">Tutorial</a>.
									</div> <!-- FIN del contenido del BODY del renglón 1-4 -->
								</div> <!-- FIN del BODY del renglón 1-4 -->
							</div> <!-- Fin del renglón 1-4 -->
							<!-- FIN del Renglón 1-4 -->
							<!-- ################################################ -->
							<div class="panel panel-default"> <!-- Renglón 1-5 -->
								<div class="panel-heading" role="tab" id="head1-5"> <!-- HEAD del renglón 1-5 -->
									<h4 class="panel-title"> <!-- H4 del título del renglón 1-5 -->
										<a role="button" data-toggle="collapse" data-parent="#accordion1-1" href="#collapse1-5" aria-expanded="true" aria-controls="collapse1-5">
										  ¿Qué puedo hacer con Autogestión UDC? <!-- Título del renglón 1-5 que colapsa -->
										</a> 
									</h4> <!-- Fin H4 rengón 1-5 -->
								</div> <!-- Fin HEAD renglón 1-5 -->
								<div id="collapse1-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-5"> <!-- contenido del BODY del renglón 1-5 -->
									<div class="panel-body">
                                                                                <p>Con el sistema de autogestión UDC usted puede:</p>
										<ul>
											<li>Inscribirse a materias y exámenes.</li>
											<li>Consultar el plan de su carrera.</li>
											<li>Consultar su historia académica.</li>
											<li>Actualizar sus datos personales.</li>
											<li>Informarse sobre vencimiento de regularidad.</li>
											<li>Solicitar certificados.</li>
											<li>Actualizar datos personales.</li>
										</ul>
										<!-- Renglón 1, opción 5, sub pregunta 1 -->
										<div class="panel-group" id="accordion1-5-1" role="tablist" aria-multiselectable="true">
											<!-- ################################################ -->
											<div class="panel panel-default"> <!-- Renglón 1-5-1 -->
												<div class="panel-heading" role="tab" id="head1-5-1"> <!-- HEAD del renglón 1-5-1 -->
													<h4 class="panel-title"> <!-- H4 del título del renglón 1-5-1 -->
														<a role="button" data-toggle="collapse" data-parent="#accordion1-5-1" href="#collapse1-5-1" aria-expanded="true" aria-controls="collapse1-5-1">
														  ¿Puedo inscribirme a una carrera con Autogestión UDC? <!-- Título del renglón 1-4 que colapsa -->
														</a> 
													</h4> <!-- Fin H4 rengón 1-5-1 -->
												</div> <!-- Fin HEAD renglón 1-5-1 -->
												<div id="collapse1-5-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1-5-1"> <!-- contenido del BODY del renglón 1-5-1 -->
													<div class="panel-body">
														El Sistema está pensado para aquellas personas que ya son alumnos de alguna carrera que se dicta en la Universidad del Chubut. Para estar al tanto de nuevas inscripciones a las especialidades de la Universidad del Chubut, conviene suscribirse a nuestra FanPage en <a href="https://www.facebook.com/Universidad.del.Chubut" target="_blank">Facebook</a>, consultar periódicamente nuestro <a href="http://www.udc.edu.ar" target="_blank">sitio web</a>, o presentarse en nuestra sede administrativa de la calle Lewis Jones Nro. 248 de Rawson, de lunes a viernes entre las 8 y las 14 horas.
													</div> <!-- FIN del contenido del BODY del renglón 1-5-1 -->
												</div> <!-- FIN del BODY del renglón 1-5-1 -->
											</div> <!-- Fin del renglón 1-5-1 -->
											<!-- FIN del Renglón 1-5-1 -->
											<!-- ################################################ -->											
										</div>
									</div> <!-- FIN del contenido del BODY del renglón 1-5 -->
								</div> <!-- FIN del BODY del renglón 1-5 -->
							</div> <!-- Fin del renglón 1-5 -->
							<!-- FIN del Renglón 1-5 -->
							<!-- ################################################ -->
						</div> <!-- FIN del DIV accordion1-1 -->
					  </div> <!-- FIN del contenido del BODY del renglón 1 -->
					</div> <!-- FIN del BODY del renglón 1 -->
				</div> <!-- Fin del renglón 1 -->
		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
				<div class="panel panel-default" style="background-color: #F5DA81"> <!-- Renglón 2 -->
					<div class="panel-heading" role="tab" id="head2"> <!-- HEAD del renglón dos -->
						<h4 class="panel-title"> <!-- H4 del título del renglón -->
							<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse2" aria-expanded="true" aria-controls="collapse2" style="text-decoration: none;">
							  <i class="glyphicon glyphicon-book"></i>
							  &nbspPlataforma Educativa Classroom <!-- Título del renglón 2 que colapsa -->
							</a> 
						</h4> <!-- Fin H4 renglón 2 -->
					</div> <!-- Fin HEAD renglón 2 -->
						<div id="collapse2" class="panel-collapse collapse collapse" role="tabpanel" aria-labelledby="head2"> <!-- contenido del BODY del renglón uno -->
							<div class="panel-body">
								<div class="panel-group" id="accordion2-1" role="tablist" aria-multiselectable="true">
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-1 -->
									<div class="panel-heading" role="tab" id="head2-1"> <!-- HEAD del renglón 2-1 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-1 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-1" aria-expanded="true" aria-controls="collapse2-1">
											  ¿Cómo ingreso a Classroom? <!-- Título del renglón 2-1 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-1 -->
									</div> <!-- Fin HEAD renglón 2-1 -->
									<div id="collapse2-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-1"> <!-- contenido del BODY del renglón 2-1 -->
										<div class="panel-body">
											Ingresá a <a href="http://classroom.google.com" target="_blank">http://classroom.google.com</a> y accedé con los datos de tu cuenta institucional, por ejemplo tu_usuario@udc.edu.ar. Para más información podés ver el siguiente <a href="https://drive.google.com/open?id=0B0_8JzhZBtH-RFFPYnRWZ3VVenc" target="_blank">videotutorial</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-1 -->
									</div> <!-- FIN del BODY del renglón 2-1 -->
								</div> <!-- Fin del renglón 2-1 -->
								<!-- FIN del Renglón 2-1 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-2 -->
									<div class="panel-heading" role="tab" id="head2-2"> <!-- HEAD del renglón 2-2 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-2 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-2" aria-expanded="true" aria-controls="collapse2-2">
											  No recuerdo el usuario / clave de mi cuenta institucional <!-- Título del renglón 2-2 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-2 -->
									</div> <!-- Fin HEAD renglón 2-2 -->
									<div id="collapse2-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-2"> <!-- contenido del BODY del renglón 2-2 -->
										<div class="panel-body">
                                                                                    Accedé a <a href="http://classroom.google.com" target="_blank">https://classroom.google.com</a>, dale clic a <a href="https://www.google.com/accounts/recovery?hl=es" target="_blank">¿Necesitas ayuda?</a> y seguí los pasos que te indicará el sistema.<br> Si luego de realizar el paso anterior no puedes recuperar el usuario o la contraseña, por favor completa el siguiente <a href="http://goo.gl/forms/97Zo6srXlE" target="_blank">formulario</a>. En breve el administrador te informará el usuario y la contraseña a tu correo secundario.
										</div> <!-- FIN del contenido del BODY del renglón 2-2 -->
									</div> <!-- FIN del BODY del renglón 2-2 -->
								</div> <!-- Fin del renglón 2-2 -->
								<!-- FIN del Renglón 2-2 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-3 -->
									<div class="panel-heading" role="tab" id="head2-3"> <!-- HEAD del renglón 2-3 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-3 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-3" aria-expanded="true" aria-controls="collapse2-3">
											  No puedo acceder a Classroom <!-- Título del renglón 2-3 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-3 -->
									</div> <!-- Fin HEAD renglón 2-3 -->
									<div id="collapse2-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-3"> <!-- contenido del BODY del renglón 2-3 -->
										<div class="panel-body">
											Si cuando estás ingresando a <a href="http://classroom.google.com" target="_blank">https://classroom.google.com</a> el sistema muestra un mensaje de error como el siguiente:
											<strong>“Lo sentimos, actualmente Classroom solo está disponible para los usuarios de Google Apps for Education.”</strong> deberás salir de tu cuenta Gmail (@gmail.com) y entrar con tu cuenta institucional (@udc.edu.ar), o abrir una <a href="https://drive.google.com/open?id=0B0_8JzhZBtH-alItSGpmOVFsc0U" target="_blank">nueva ventana de incógnito</a> y acceder a <a href="http://classroom.google.com" target="_blank">https://classroom.google.com</a> para entrar con la cuenta institucional. Para más información podés ver el siguiente <a href="https://drive.google.com/open?id=0B0_8JzhZBtH-RFFPYnRWZ3VVenc" target="_blank">videotutorial</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-3 -->
									</div> <!-- FIN del BODY del renglón 2-3 -->
								</div> <!-- Fin del renglón 2-3 -->
								<!-- FIN del Renglón 2-3 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-4 -->
									<div class="panel-heading" role="tab" id="head2-4"> <!-- HEAD del renglón 2-4 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-4 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-4" aria-expanded="true" aria-controls="collapse2-4">
											  Hay funciones de Classroom que no operan correctamente <!-- Título del renglón 2-4 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-4 -->
									</div> <!-- Fin HEAD renglón 2-4 -->
									<div id="collapse2-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-4"> <!-- contenido del BODY del renglón 2-4 -->
										<div class="panel-body">
											Recomendamos que utilices el navegador web Google Chrome (totalmente gratuito) que se encuentra optimizado para el uso de Classroom. Podés instalarlo siguiendo este <a href="https://drive.google.com/open?id=0B0_8JzhZBtH-RFFPYnRWZ3VVenc" target="_blank">videotutorial</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-4 -->
									</div> <!-- FIN del BODY del renglón 2-4 -->
								</div> <!-- Fin del renglón 2-4 -->
								<!-- FIN del Renglón 2-4 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-5 -->
									<div class="panel-heading" role="tab" id="head2-5"> <!-- HEAD del renglón 2-5 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-5 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-5" aria-expanded="true" aria-controls="collapse2-5">
											  Tutorial Classroom <!-- Título del renglón 2-5 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-5 -->
									</div> <!-- Fin HEAD renglón 2-5 -->
									<div id="collapse2-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-5"> <!-- contenido del BODY del renglón 2-5 -->
										<div class="panel-body">
											Te invitamos a que explores el <a href="http://udc-cfb.wix.com/tutorial-classroom" target="_blank">tutorial de classroom realizado por la UDC</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-5 -->
									</div> <!-- FIN del BODY del renglón 2-5 -->
								</div> <!-- Fin del renglón 2-5 -->
								<!-- FIN del Renglón 2-5 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-6 -->
									<div class="panel-heading" role="tab" id="head2-6"> <!-- HEAD del renglón 2-6 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-6 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-6" aria-expanded="true" aria-controls="collapse2-6">
											  Más sobre google Classroom <!-- Título del renglón 2-6 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-6 -->
									</div> <!-- Fin HEAD renglón 2-6 -->
									<div id="collapse2-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-6"> <!-- contenido del BODY del renglón 2-6 -->
										<div class="panel-body">
											Te invitamos a que explores las <a href="https://support.google.com/edu/classroom/answer/6025224?hl=es&ref_topic=6020277" target="_blank">preguntas/respuestas de google classroom</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-6 -->
									</div> <!-- FIN del BODY del renglón 2-6 -->
								</div> <!-- Fin del renglón 2-6 -->
								<!-- FIN del Renglón 2-6 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 2-7 -->
									<div class="panel-heading" role="tab" id="head2-7"> <!-- HEAD del renglón 2-7 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 2-7 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion2-1" href="#collapse2-7" aria-expanded="true" aria-controls="collapse2-7">
											  ¿Existe alguna reglamentación para el uso de la plataforma educativa? <!-- Título del renglón 2-7 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 2-7 -->
									</div> <!-- Fin HEAD renglón 2-7 -->
									<div id="collapse2-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head2-7"> <!-- contenido del BODY del renglón 2-7 -->
										<div class="panel-body">
                                                                                    Existe una reglamentación para el uso de la plataforma educativa, puedes verla haciendo click en el siguiente enlace: <a href="https://docs.google.com/document/d/1fHgVTfsGRGPHzv9IZiKse8A5I1iUKUO6ElkArQwu5ZU/edit?usp=sharing" target="_blank">reglamento para el uso de la plataforma educativa</a>.
										</div> <!-- FIN del contenido del BODY del renglón 2-7 -->
									</div> <!-- FIN del BODY del renglón 2-7 -->
								</div> <!-- Fin del renglón 2-7 -->
								<!-- FIN del Renglón 2-7 -->
							</div> <!-- FIN del DIV accordion2-1 -->
						</div> <!-- FIN del contenido del BODY del renglón 2 -->
					</div> <!-- FIN del BODY del renglón 2 -->
				</div> <!-- Fin del renglón 2 -->
				<!-- FIN del Renglón 2 -->
		<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
				<div class="panel panel-default" style="background-color: #81F7BE"> <!-- Renglón Nro 03 - Ayuda cuenta institucional UDC -->
					<div class="panel-heading" role="tab" id="head3"> <!-- HEAD del renglón tres -->
						<h4 class="panel-title"> <!-- H4 del título del renglón -->
							<a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse3" aria-expanded="true" aria-controls="collapse3" style="text-decoration: none;">
							  <i class="glyphicon glyphicon-envelope"></i>
							  &nbspCuenta Institucional UDC <!-- Título del renglón que colapsa -->
							</a> 
						</h4> <!-- Fin H4 renglón 3 -->
					</div> <!-- Fin HEAD renglón 3 -->
					<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3"> <!-- contenido del BODY del renglón 3 -->
						<div class="panel-body">
							<div class="panel-group" id="accordion3-1" role="tablist" aria-multiselectable="true">
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-1 -->
									<div class="panel-heading" role="tab" id="head3-1"> <!-- HEAD del renglón 3-1 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-1 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-1" aria-expanded="true" aria-controls="collapse3-1">
											  ¿Qué es la Cuenta Institucional? <!-- Título del renglón 3-1 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-1 -->
									</div> <!-- Fin HEAD renglón 3-1 -->
									<div id="collapse3-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-1"> <!-- contenido del BODY del renglón 3-1 -->
										<div class="panel-body">
                                                                                    Una cuenta institucional no es más que una dirección de correo electrónico que lleva tu usuario seguido del nombre de dominio (udc.edu.ar); así por ejemplo: el alumno Pedro Gomez tendrá su cuenta <a href="mailto:pgomez@udc.edu.ar" target="_blank">pgomez@udc.edu.ar</a>.
										</div> <!-- FIN del contenido del BODY del renglón 3-1 -->
									</div> <!-- FIN del BODY del renglón 3-1 -->
								</div> <!-- Fin del renglón 3-1 -->
								<!-- FIN del Renglón 3-1 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-2 -->
									<div class="panel-heading" role="tab" id="head3-2"> <!-- HEAD del renglón 3-2 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-2 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-2" aria-expanded="true" aria-controls="collapse3-2">
											  ¿Porqué tengo una cuenta institucional? <!-- Título del renglón 3-2 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-2 -->
									</div> <!-- Fin HEAD renglón 3-2 -->
									<div id="collapse3-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-2"> <!-- contenido del BODY del renglón 3-2 -->
										<div class="panel-body">
                                                                                    Al ser alumno, docente o agente de la Universidad del Chubut, se te brinda una cuenta institucional para que utilices el entorno virtual de enseñanza aprendizaje y un conjunto de herramientas que proporciona <a href="https://www.google.com/edu/" target="_blank">google apps for education</a>.
										</div> <!-- FIN del contenido del BODY del renglón 3-2 -->
									</div> <!-- FIN del BODY del renglón 3-2 -->
								</div> <!-- Fin del renglón 3-2 -->
								<!-- FIN del Renglón 3-2 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-3 -->
									<div class="panel-heading" role="tab" id="head3-3"> <!-- HEAD del renglón 3-3 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-3 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-3" aria-expanded="true" aria-controls="collapse3-3">
											  ¿Cuál es mi cuenta institucional? <!-- Título del renglón 3-3 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-3 -->
									</div> <!-- Fin HEAD renglón 3-3 -->
									<div id="collapse3-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-3"> <!-- contenido del BODY del renglón 3-3 -->
										<div class="panel-body">
											El administrador de la plataforma te proporcionará tu usuario y contraseña si sos alumno, docente o agente de la universidad. Como estándar se define a los usuarios con la iniciales de los nombres seguido de los apellidos completos, seguido de @udc.edu.ar; por ejemplo, la persona Pedro Esteban Gómez Pérez tendrá su usuario pegomezperez@udc.edu.ar.
										</div> <!-- FIN del contenido del BODY del renglón 3-3 -->
									</div> <!-- FIN del BODY del renglón 3-3 -->
								</div> <!-- Fin del renglón 3-3 -->
								<!-- FIN del Renglón 3-3 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-4 -->
									<div class="panel-heading" role="tab" id="head3-4"> <!-- HEAD del renglón 3-4 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-4 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-4" aria-expanded="true" aria-controls="collapse3-4">
											  ¿Para que me sirve la cuenta institucional? <!-- Título del renglón 3-4 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-4 -->
									</div> <!-- Fin HEAD renglón 3-4 -->
									<div id="collapse3-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-4"> <!-- contenido del BODY del renglón 3-4 -->
										<div class="panel-body">
											Al tener cuenta institucional, formas parte de <a href="https://www.google.com/edu/" target="_blank">google apps for education</a>, lo cual te permite usar un gran número de herramientas como: correo electrónico, documentos colaborativos, almacenamiento en la nube, entorno virtual de enseñanza aprendizaje classroom, red social, calendario, traductor, videos on-line, blogs, entre otras herramientas.
										</div> <!-- FIN del contenido del BODY del renglón 3-4 -->
									</div> <!-- FIN del BODY del renglón 3-4 -->
								</div> <!-- Fin del renglón 3-4 -->
								<!-- FIN del Renglón 3-4 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-5 -->
									<div class="panel-heading" role="tab" id="head3-5"> <!-- HEAD del renglón 3-5 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-5 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-5" aria-expanded="true" aria-controls="collapse3-5">
											  ¿Cómo ingreso y salgo de mi cuenta institucional? <!-- Título del renglón 3-5 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-5 -->
									</div> <!-- Fin HEAD renglón 3-5 -->
									<div id="collapse3-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-5"> <!-- contenido del BODY del renglón 3-5 -->
										<div class="panel-body">
											Los usuarios pueden acceder a todas sus aplicaciones de Google Apps con solo iniciar sesión una vez. 
                                                                                        Para acceder a tu cuenta institucional, solo tienes que hacer clic en el botón Acceder en la esquina superior derecha de cualquier servicio de Google, por ejemplo el <a href="https://google.com.ar" target="_blank">buscador de Google</a>. Podrás revisar tus correos electrónicos de Gmail, subir un video a YouTube o, simplemente, obtener los resultados de búsqueda más relevantes, entre otras opciones.
                                                                                        Si usas computadoras públicas, como las que se encuentran en cibercafés y bibliotecas, recuerda que, luego de cerrar el navegador, es posible que continúes conectado a los servicios que usaste. Por lo tanto, cuando uses una computadora pública, asegúrate de salir de tu cuenta. Para ello, haz clic en la foto o dirección de correo electrónico de la cuenta en la esquina superior derecha y selecciona <strong>Salir</strong>.<br>
                                                                                        <br><p>Si quieres acceder a un servicio rápidamente haz clic en los siguientes enlaces:</p>
                                                                                        <p>Correo electrónico: <a href="http://mail.google.com">https://mail.google.com</a></p>
                                                                                        <p>Classroom: <a href="http://classroom.google.com">https://classroom.google.com</a></p>
                                                                                        <p>Espacio virtual en la nube: <a href="http://drive.google.com">https://drive.google.com</a></p>
                                                                                        <p>Red Social: <a href="http://plus.google.com">https://plus.google.com</a></p>
                                                                                        <p>Calendario: <a href="http://calendar.google.com">https://calendar.google.com</a></p>
                                                                                        <p>Traductor: <a href="http://translate.google.com">https://translate.google.com</a></p>
                                                                                        <p>Videos: <a href="http://www.youtube.com/">https://www.youtube.com/</a></p>
										</div> <!-- FIN del contenido del BODY del renglón 3-5 -->
									</div> <!-- FIN del BODY del renglón 3-5 -->
								</div> <!-- Fin del renglón 3-5 -->
								<!-- FIN del Renglón 3-5 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-6 -->
									<div class="panel-heading" role="tab" id="head3-6"> <!-- HEAD del renglón 3-6 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-6 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-6" aria-expanded="true" aria-controls="collapse3-6">
											  No recuerdo el usuario o la clave de mi cuenta institucional <!-- Título del renglón 3-6 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-6 -->
									</div> <!-- Fin HEAD renglón 3-6 -->
									<div id="collapse3-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-6"> <!-- contenido del BODY del renglón 3-6 -->
										<div class="panel-body">
                                                                                    Accedé a <a href="http://classroom.google.com/" target="_blank">https://mail.google.com/</a> , dale clic a <a href="https://www.google.com/accounts/recovery?hl=es" target="_blank">¿Necesitas ayuda?</a> y seguí los pasos que te indicará el sistema.
                                                                                        Si luego de realizar el paso anterior no puedes recuperar el usuario o la contraseña, por favor completa el siguiente <a href="http://goo.gl/forms/97Zo6srXlE" target="_blank">formulario</a>. En breve el administrador te informará el usuario y la contraseña a tu correo secundario.
										</div> <!-- FIN del contenido del BODY del renglón 3-6 -->
									</div> <!-- FIN del BODY del renglón 3-6 -->
								</div> <!-- Fin del renglón 3-6 -->
								<!-- FIN del Renglón 3-6 -->
								<!-- ################################################ -->
								<div class="panel panel-default"> <!-- Renglón 3-7 -->
									<div class="panel-heading" role="tab" id="head3-7"> <!-- HEAD del renglón 3-7 -->
										<h4 class="panel-title"> <!-- H4 del título del renglón 3-7 -->
											<a role="button" data-toggle="collapse" data-parent="#accordion3-1" href="#collapse3-7" aria-expanded="true" aria-controls="collapse3-7">
											  ¿Existe alguna reglamentación para el uso de correo electrónicos? <!-- Título del renglón 3-7 que colapsa -->
											</a> 
										</h4> <!-- Fin H4 rengón 3-7 -->
									</div> <!-- Fin HEAD renglón 3-7 -->
									<div id="collapse3-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3-7"> <!-- contenido del BODY del renglón 3-7 -->
										<div class="panel-body">
                                                                                    Existe una reglamentación para el uso del correo electrónico, puedes verla haciendo click en el siguiente enlace: <a href="https://docs.google.com/document/d/17xRTFxXfgjPw6HzaKDOS_vN1JW5BP43dxhsI_xL9yWI/edit?usp=sharing" target="_blank">Política, Procedimientos y Normas Sobre el Uso Adecuado del Sistema de Correo Electrónico</a>.
										</div> <!-- FIN del contenido del BODY del renglón 3-7 -->
									</div> <!-- FIN del BODY del renglón 3-7 -->
								</div> <!-- Fin del renglón 3-7 -->
								<!-- FIN del Renglón 3-7 -->
							</div> <!-- FIN del DIV accordion3-1 -->
						</div> <!-- FIN del contenido del BODY del renglón 3 -->
					</div> <!-- FIN del BODY del renglón 3 -->
				</div> <!-- Fin del renglón 3 -->
				<!-- FIN del Renglón 3 -->
			</div>	
			<!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
                        <script src="http://udc.edu.ar/inscripciones/js/jquery-2.1.1.min.js"></script>
			<!-- Include all compiled plugins (below), or include individual files as needed -->
			<!-- Latest compiled and minified JavaScript 
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
                        <script src="http://udc.edu.ar/inscripciones/bootstrap/js/bootstrap.min.js"></script>
		</div>
		<hr>
	  </div>
  </div>
  </body>
</html>
