<!DOCTYPE html>
<html>
<head>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>PRUEBA5</title>
	<link href="prueba5.css" rel="stylesheet" type="text/css">
	<link href="librerias/bootstrap4/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
</head>
<body>
	<div id="main">
		<div class="panel-superior">
			<header>
				<button class="btn-menum"></button>
				<div class="logo-panel-izq-movil1"></div>
				<ul class="panel1m" id="panel1id">
					<li>
						<a class="btn1m" href="#inicio" target=""><i><img alt="" class="iconosm" src="img/home.png"></i> <span>Inicio</span><br>
						<br></a>
					</li>
					<li>
						<a class="btn1m" href="#sobre-nosotros" target=""><i><img alt="" class="iconosm" src="img/nosotros.png"></i> <span>Nosotros</span><br>
						<br></a>
					</li>
					<li>
						<a class="btn1m" href="#perfil" target=""><i></i><img alt="" class="iconosm" src="img/Perfil.png"> <span>Perfil</span><br>
						<br></a>
					</li>
					<li>
						<a class="btn1m" href="#portafolio" target=""><i class=""><img alt="" class="iconosm" src="img/porfolio2.png"></i> <span>Portafolio</span><br>
						<br></a>
					</li>
					<li>
						<a class="btn1m" href="#certificados" target="_blank"><i><img alt="" class="iconosm" src="img/CERTIFICADO.png"></i> <span>Certificados</span><br>
						<br></a>
					</li>
					<li>
						<a class="btn1m" href="#contacto" target=""><i><img alt="" class="iconosm" src="img/TEL.png"></i> <span>Contacto</span><br>
						<br></a>
					</li>
				</ul>
				<link href="prueba5.js" rel="stylesheet" type="text/js">
			</header>
		</div>
		<div class="contenido">
			<div class="panel-izquierdo">
				<div id="logo-panel-izq"></div>
				<div id="menu-izq">
					<ul id="panel1">
						<li>
							<a class="btn1" href="#inicio" target=""><i><img alt="" class="iconos" src="img/home.png"></i><br>
							<span>Inicio</span><br>
							<br></a>
						</li>
						<li>
							<a class="btn1" href="#sobre-nosotros" target=""><i><img alt="" class="iconos" src="img/nosotros.png"></i><br>
							<span>Nosotros</span><br>
							<br></a>
						</li>
						<li>
							<a data-target="#contactomodal" data-toggle="modal" class="btn1" href=""><i><img alt="" class="iconos" src="img/TEL.png"></i><br>
						<span>Contacto</span><br>
						<br></a>
						</li>

						
						<li>
							<a class="btn1" href="#perfil" target=""><i></i><img alt="" class="iconos" src="img/Perfil.png"><br>
							<span>Perfil</span><br>
							<br></a>
						</li>
						<li>
							<a class="btn1" href="#portafolio" target=""><i class=""><img alt="" class="iconos" src="img/porfolio2.png"></i><br>
							<span>Portafolio</span><br>
							<br></a>
						</li>
						<li>
							<a class="btn1" href="#certificados" target="_blank"><i><img alt="" class="iconos" src="img/CERTIFICADO.png"></i><br>
							<span>Certificados</span><br>
							<br></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="panel-interior">
				<!-- SECCION 1 INICIO -->
				<a id="inicio" name="sobre-nosotros"></a>
				<div id="seccion1">
					<div id="cont-seccion1">
						<div class="sildes">
							<div class="panel-novedades"></div>
							<div class="panel-novedades-slide">
								<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
									<ol class="carousel-indicators">
										<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
										<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
										<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
										<li data-slide-to="3" data-target="#carouselExampleIndicators"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img alt="First slide" class="slides-img" src="img/proyectosimg/proyecto2.5.jpg">
											<div class="carousel-caption d-none d-md-block"></div><a href="/paginas/libros.php">
											<h1 class="ex2">Software 1</h1></a>
										</div>
										<div class="carousel-item">
											<img alt="Second slide" class="slides-img" src="img/proyectosimg/proyectoweb6.jpg">
											<div class="carousel-caption d-none d-md-block"></div><a href="/paginas/libros.php">
											<h1 class="ex2">Control Estudiantil YC</h1></a>
										</div>
										<div class="carousel-item">
											<img alt="Third slide" class="slides-img" src="img/proyectosimg/proyectoweb4.jpg">
											<div class="carousel-caption d-none d-md-block"></div><a href="/paginas/autores.php">
											<h1 class="ex2">Gestor de Empleados YC</h1></a>
										</div>
										<div class="carousel-item">
											<img alt="Second slide" class="slides-img" src="img/proyectosimg/proyecto3.1.jpg">
											<div class="carousel-caption d-none d-md-block">
												<p class=""></p>
											</div><a href="/paginas/libros.php">
											<h1 class="ex2">Sistema de Ventas YC</h1></a>
										</div>
									</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Anterior</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Siguiente</span></a>
								</div>
							</div>
							<div class="panel-novedades-info">
								<h3>NOVEDADES</h3>
								<hr>
								<p class="ex3"><b>Sistema ventas:</b></p>
								<ul>
									<li class="ex4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </li>
									<li class="ex4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </li>
									<li class="ex4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</li>
								</ul>
							</div>
							<div class="slides-frases">
								<div class="">
									<div class="row">
										<div class="col-lg-12">
											<div class="intro-message">
												<div class="contenedor">
													<div class="slider-contenedor">
														<section class="contenido-slider">
															<div>
																<p class="p1">"El ordenador nació para resolver problemas que antes no existían"</p>
																<p>-- Bill Gates --</p>
															</div>
														</section>
														<section class="contenido-slider">
															<div>
																<p class="p1">"La imaginación es más importante que el conocimiento. El conocimiento es limitado, mientras que la imaginación no"</p>
																<p>-- Albert Einstein --</p>
															</div>
														</section>
														<section class="contenido-slider">
															<div>
																<p class="p1">"La simplicidad llevada al extremo se convierte en elegancia"</p>
																<p>-- Jon Franklin --</p>
															</div>
														</section>
														<section class="contenido-slider">
															<div>
																<p class="p1">"La mejor forma de predecir el futuro es implementarlo"</p>
																<p>-- David Heinemeier Hansson --</p>
															</div>
														</section>
													</div>
												</div><br>
												<br>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- SECCION 1 FIN -->
				<hr class="intro-divider">
				<!-- SECCION 2  INICIO-->
				<a id="sobre-nosotros" name="sobre-nosotros"></a>
				<div id="seccion2">
					<div class="cont-seccion2">
						<div class="cont-row">
							<div class="row3">
								<h1 class="title">QUIENES SOMOS?</h1>
								<p class="ex1"></p>
								<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
							</div>
							<div class="row3">
								<h1 class="title">DESARROLLO DE SOFTWARE</h1>
								<p class="ex1"></p>
								<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
							</div>
						</div>
						<div class="cont-row"></div>
						<div class="cont-row">
							<div class="row3">
								<h1 class="title">HISTORIA</h1>
								<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
							</div>
						</div>
					</div><!-- SECCION 2 FIN -->	
				</div>
				<hr class="intro-divider">
				<!-- SECCION 3 INICIO -->
					<a id="sobre-nosotros" name="sobre-nosotros"></a>
					<div id="seccion3">
						<div class="cont-seccion3">
							<br>
							<div class="cont-row-seccion3">
								<p class="title-row"><b>NUESTRA FILOSOFÍA</b></p>
							</div>
							<div class="cont-row-seccion3">
								<div class="row4">
									<img class="img-row-seccion3-mision" src="img/mision.jpg">
									<h1 class="title">MISION</h1>
									<p class="ex1"></p>
									<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								</div>
								<div class="row4">
									<img class="img-row-seccion3-vision" src="img/vision.jpg">
									<h1 class="title">VISION</h1>
									<p></p>
									<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								</div>
								<div class="row4">
									<img class="img-row-seccion3-valores" src="img/valores.jpg">
									<h1 class="title">VALORES</h1>
									<p class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
								</div>
							</div>
						</div><!-- SECCION 3 FIN-->
						
					</div><!-- SECCION 3 FIN-->
					<hr class="intro-divider">
					<!-- seccion 4 inicio-->
					<a id="perfil" name="perfil"></a>
					<div id="seccion4">
						<div class="cont-seccion4">
							<!-- contenido de la seccion 4 inicio-->
							<div class="curriculum-panel1">
								<img class="img-row-seccion4-curriculum" src="img/1.1.jpg">
								<p class="curriculum-nombre"><b>YOLDANY CONTRERAS</b></p>
								<table class="curriculum-tabla">
									<tr>
										<td><b>Edad</b></td>
										<td>:</td>
										<td>20</td>
									</tr>
									<tr>
										<td><b>Ocupación</b></td>
										<td>:</td>
										<td>Estudiante</td>
									</tr>
									<tr>
										<td><b>Estado Civil</b></td>
										<td>:</td>
										<td>Soltero</td>
									</tr>
									<tr>
										<td><b>Celular</b></td>
										<td>:</td>
										<td>(809) 451-7400</td>
									</tr>
									<tr>
										<td><b>Cedula</b></td>
										<td>:</td>
										<td>402-1946509-9</td>
									</tr>
								</table>
							</div><br>
							<div class="cont-curriculum-panel2">
								<div class="tab">
									<!--<button class="tablinks"  onclick="openCity(event, 'sobremi')">Sobre mi:</button>--> <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'estudios')"><b>Estudios:</b></button> <button class="tablinks" onclick="openCity(event, 'habilidades')"><b>Habilidades:</b></button> <button class="tablinks" onclick="openCity(event, 'experiencia')"><b>Experiencia:</b></button>
								</div><!-- Tab content -->
								<div class="cont-curriculum-panel3">
									<!--
									<div class="tabcontent" id="sobremi">
										<h3>Quien soy:</h3>
										<p>Me considero un joven emprendedor muy entusiasta de la informatica, sobre todo de la programacion, mis primeras experiencias con la programacion empiezan desde modificar codigos de algunos video juegos, crear fragmentos de video juegos con herramientas que facilitan el proceso y modificar fragmentos de otras personas, todo esto a la edad de 12 años y sin saber que existia una profesion que se dedicara a esto en particular...</p>

										<p>A la edad de 16 años inicio con mi educacion media de nivel tecnico profesional, donde descubro que en esta categoria de tecnico en informatica enseñan lo que es programacion en diferentes aspectos, en esa institucion tuve mi primer encuentro con HTMl, CSS, Js, VB, C#, PsInt, DreamWeaver y Flash...</p>
										<p>Debido a la emocion e inspiracion por querer dominar estas herramientas y lenguajes logre obtener buenos resultados en todas mis practicas y relizando los proyectos de forma muy creativa, cree paginas de descarga de rooms y videojuegos .exe, paginas para tener acceso a contenido multimedia, etc. eso con Html, Css y Js, con Vb y C# realice simples proyectos escolares como hacer una calculadora, programas que calculaban ciertas funciones o problemas matematicos simples. a Flash le tuve un enorme interes, me di cuenta de era especialmente bueno en las animaciones, realize una animacion de un faro moviendose y la replica del videojuego de pacman, cree un video juego de un tiburon en el fondo del mar, e incluso entregue como proyecto final lo que debia ser un simple portal web en html como un sitio web completo construido con flash utilizando action scrip en la programacion y con los fotogramas haciendo los desplazamientos entre paginas.</p>

										<p>No solo aprendi programacion basica, adquiri tambien una buena base de diseño grafico digital, redes y soporte tecnico, incluyendo reparacion, ensamblado de pc e instalacion de So. Gracias a estos conocimientos y experiencia laboral que venia obteniendo de trabajo extra, consegui iniciar un negocio donde realizaba  .</p>
									</div>
									-->

									<div class="tabcontent" id="estudios">
										<br>
										<table class="curriculum-tabla2">
											<tr>
												<td class="cabeza-style" width="100px"><b></b></td>
												<td class="cabeza-style" width="100px"><b>INSTITUCION</b></td>
												<td class="cabeza-style"><b>CARRERA / CURSO</b></td>
											</tr>
											<tr>
												<td class=""><b>Superior</b></td><!--nivel-->
												<td class=""><abbr title="Instituto Técnico Superior Comunitario">ITSC</abbr></td>
												<td class=""><abbr title="Técnico">Tec.</abbr> <abbr title="Superior">Sup.</abbr>. en Desarrollo de Software</td><!--carrera-->
											</tr>
											<tr>
												<!--institucion-->
												<td class="cabeza-style"><b>Profesional</b></td>
												<td class="cabeza-style"><abbr title="Instituto Tecnologico PRof. Simon Orozco">ITSO</abbr></td>
												<td class="cabeza-style"><abbr title="Técnico">Tec.</abbr> Profesional en Informatica</td><!--carrera-->
											</tr>
											<tr>
												<!--curso-->
												<td class=""><b>Técnico</b></td>
												<td class=""><abbr title="Centro de Tecnología Universal">CENTU</abbr></td>
												<td class=""><abbr title="Técnico">Tec.</abbr> en Programacion .NET</td>
											</tr>
											<tr>
												<!--curso-->
												<td class=""><b></b></td>
												<td class=""><abbr title=" Instituto Nacional de Formación Técnico Profesional">INFOTEP</abbr></td>
												<td class=""><abbr title="Técnico">Tec.</abbr> en Contabilidad</td>
											</tr>
											<tr>
												<!--curso-->
												<td class=""><b></b></td>
												<td class=""><abbr title=" Instituto Nacional de Formación Técnico Profesional">INFOTEP</abbr></td>
												<td class=""><abbr title="Técnico">Tec.</abbr> en Electronica</td>
											</tr>
											<tr>
												<!--curso-->
												<td class="cabeza-style"><b>Certificado</b></td>
												<td class="cabeza-style"><abbr title="Instituto Tecnologico de Las Americas">ITLA</abbr></td>
												<td class="cabeza-style">Fundamento de Computacion</td>
											</tr>
											<tr>
												<td><b>Digitales</b></td><!--nivel-->
												<td>UDEMY</td>
												<td>Fundamentos de C#</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>UDEMY</td>
												<td>Visual Basic 2012</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>UDEMY</td>
												<td>Xamarin Forms basic</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>UDEMY</td>
												<td>PHP y MySQL principiantes</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>UDEMY</td>
												<td>Prototipos Adobe XD</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>UDEMY</td>
												<td>Photoshop CC Basic</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>Aprende.org</td>
												<td>Creador de Web Responsive</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>Aprende.org</td>
												<td>Programador(POO)</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>Tutellus</td>
												<td>Programacion Web: HTML5, CCS3, JS</td>
											</tr>
											<tr>
												<td><b></b></td><!--nivel-->
												<td>Tutellus</td>
												<td>Juegos y Apps - Action Script 3.0</td>
											</tr>
										</table>
									</div>
									<div class="tabcontent" id="habilidades">
										<table class="curriculum-tabla2">
											<tr>
												<td class="cabeza-style"><b>LENGUAJES</b></td>
												<td class="cabeza-style"><b>NIVEL</b></td>
												<td class="cabeza-style"><b>HERRAMIENTAS</b></td>
												<td class="cabeza-style"><b>NIVEL</b></td>
											</tr>
											<tr>
												<td class="">HTML5</td>
												<td class="">Alto</td>
												<td class="">Adobe XD</td>
												<td class="">Alto</td>
											</tr>
											<tr>
												<td class="">CSS3</td>
												<td class="">Alto</td>
												<td class="">Animate CC</td>
												<td class="">Alto</td>
											</tr>
											<tr>
												<td class="">C++</td>
												<td class="">Medio-Alto</td>
												<td class="">Sql Server/MySql</td>
												<td class="">Medio</td>
											</tr>
											<tr>
												<td class="">C#</td>
												<td class="">Medio-Alto</td>
												<td class="">Adobe Dreamweaver</td>
												<td class="">Medio</td>
											</tr>
											<tr>
												<td class="">JS</td>
												<td class="">Medio</td>
												<td class="">Photoshop</td>
												<td class="">Medio</td>
											</tr>
											<tr>
												<td class="">VB</td>
												<td class="">Bajo</td>
												<td class="">Xamarin</td>
												<td class="">Bajo-Medio</td>
											</tr>
											<tr>
												<td class="">SQL</td>
												<td class="">Bajo-Medio</td>
												<td class="">MySQL</td>
												<td class="">Bajo-Medio</td>
											</tr>
											<tr>
												<td class="">PHP</td>
												<td class="">Bajo-Medio</td>
												<td class="">Illustrator</td>
												<td class="">Bajo-Medio</td>
											</tr>
											<tr>
												<td class="">ASP.NET</td>
												<td class="">Bajo-Medio</td>
												<td class="">GitHub</td>
												<td class="">Bajo-Medio</td>
											</tr>
										</table><br>
									</div>
									<div class="tabcontent" id="experiencia">
										<table class="curriculum-tabla2">
											<tr>
												<td class="cabeza-style" colspan="4">
													<b></b>
													<center>
														<b>EMPRESAS CON RNC</b>
													</center>
												</td>
											</tr>
											<tr>
												<td class=""><b>EMPRESA/NEGOCIO</b></td>
												<td class="" width="20px"><b>PUESTO</b></td>
												<td class=""><b>TIEMPO</b></td>
												<td class=""><b>CONTACTO</b></td>
											</tr>
											<tr>
												<td class="">EJJ Services</td>
												<td class="">Digitador</td>
												<td class="">1 Año</td>
												<td class="">---</td>
											</tr>
											<tr>
												<td class="">Oficentro Oriental</td>
												<td class="">Digitador</td>
												<td class="">1 Año</td>
												<td class="">849-295-0007</td>
											</tr>
											<tr>
												<td class="">Jireh Compu Servi</td>
												<td class="">Digitador</td>
												<td class="">1 Año</td>
												<td class="">849-295-0007</td>
											</tr>
											<tr>
												<td class="cabeza-style" colspan="4">
													<b></b>
													<center>
														<b>Experiencias Freelancer</b>
													</center>
												</td>
											</tr>
											<tr>
												<td class=""><b>AREA</b></td>
												<td class="" colspan="3"><b>TRABAJO/PROYECTO</b></td>
											</tr>
											<tr>
												<td class="">Diseño Grafico</td>
												<td class="" colspan="3">Cartas, Publicidad, Diseños variados.</td>
											</tr>
											<tr>
												<td class="">Redes</td>
												<td class="" colspan="3">Instalacion de red en colegio.</td>
											</tr>
											<tr>
												<td class="">Administracion</td>
												<td class="" colspan="3">Negocio de diseño grafico y soporte técnico.</td>
											</tr>
											<tr>
												<td class="">Soporte Tenico</td>
												<td class="" colspan="3">Reparacion, ensamblado y venta de pc.</td>
											</tr>
											<tr>
												<td class="">Programación</td>
												<td class="" colspan="3">Control de Estudiantes (colegio).</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<hr class="intro-divider">
						</div><!-- contenido de la seccion 4 fin-->
					</div><!-- seccion 4 fin-->
					<hr class="intro-divider">
					<!-- SECCION 5 INICIO-->
					<a id="portafolio"></a>
					<section class="bg-light-gray bounds" id="portfolio">
						<div id="seccion5">
							<!-- seccion 4 inicio-->
							<div class="cont-seccion5">
								<!-- contenido de la seccion 4 inicio-->
								<br>
								<div class="">
									<div class="tab2">
										<button class="portafoliolink" id="portfoliodefaultOpen" onclick="navporfolio(event, 'escritorio')"><b>ESCRITORIO</b></button> <button class="portafoliolink" onclick="navporfolio(event, 'web')"><b>WEB</b></button> <button class="portafoliolink" onclick="navporfolio(event, 'movil')"><b>MOVIL</b></button> <button class="portafoliolink" onclick="navporfolio(event, 'prototipos')"><b>PROTOTIPOS</b></button><button class="portafoliolink" onclick="navporfolio(event, 'disenos')"><b>DISEÑOS</b></button>
									</div><!-- Tab content -->

									<!--CONTENEDOR DE LOS PROYECTOS-->
									<div class="cont-proyectos-seccion5">
										
										<div class="tabcontent2" id="escritorio">
										<!--INICIO CONT-ROW-SECCION5-->
										<div class="cont-row-seccion5">
											<div class="row5">
												<img class="img-row-seccion5" src="img/proyectosimg/gintd.jpg" data-target="#proyecto1" data-toggle="modal"> <!-- Trigger/Open The Modal -->
												 <!-- The Modal -->
												<div class="portfolio-caption">
													<h4 data-target="#proyecto1" data-toggle="modal">GINTD</h4>
													<p class="text-muted" id="small-text">C++</p>
												</div>
											</div>
											<div class="row5">
												<img class="img-row-seccion5" src="img/proyectosimg/puntoventa.jpeg" data-target="#proyecto2" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyecto2" data-toggle="modal">Punto de Venta</h4>
													<p class="text-muted" id="small-text">C#, Sql Server, Report viewer</p>
												</div>
											</div>
											<div class="row5">
												<img class="img-row-seccion5" src="img/proyectosimg/registroest.png" data-target="#proyecto3" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyecto3" data-toggle="modal">Control Estudiantil</h4>
													<p class="text-muted" id="small-text">C#, Sql Server</p>
												</div>
											</div>
										</div>
										<!--FIN CONT-ROW-SECCION5-->
										
										</div>

									<div class="tabcontent2" id="web">
										
										
										<!--INICIO CONT-ROW-SECCION5-->
										<div class="cont-row-seccion5">
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/mp3.png" data-target="#proyectoweb1" data-toggle="modal"> <!-- Trigger/Open The Modal -->
												 <!-- The Modal -->
												<div class="portfolio-caption">
													<h4 data-target="#proyectoweb1" data-toggle="modal">Comparativa MP3</h4>
													<p class="text-muted" id="small-text">HTML, CSS, Estatica</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/precio.png" data-target="#proyectoweb2" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb2" data-toggle="modal">Productos Precio</h4>
													<p class="text-muted" id="small-text">HTML, CSS, Estatica</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/portfolio.jpg" data-target="#proyectoweb3" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb3" data-toggle="modal">Portfolio simple</h4>
													<p class="text-muted" id="small-text">HTML, CSS, Estatica</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/libreria.jpg" data-target="#proyectoweb4" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb4" data-toggle="modal">Portal de Libros</h4>
													<p class="text-muted" id="small-text">PHP, CSS, JS, MySql</p>
												</div>
											</div>

										</div>
										<!--FIN CONT-ROW-SECCION5-->

										<!--INICIO CONT-ROW-SECCION5 2-->
										<div class="cont-row-seccion5">
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/upload.png" data-target="#proyectoweb5" data-toggle="modal"> <!-- Trigger/Open The Modal -->
												 <!-- The Modal -->
												<div class="portfolio-caption">
													<h4 data-target="#proyectoweb5" data-toggle="modal">Upload Imagenes</h4>
													<p class="text-muted" id="small-text">HTML, CSS</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/registro.png" data-target="#proyectoweb6" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb6" data-toggle="modal">Registro Estudiantil</h4>
													<p class="text-muted" id="small-text">HTML, CSS, Estatica</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/js.jpg" data-target="#proyectoweb7" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb7" data-toggle="modal">Animacion Scroll</h4>
													<p class="text-muted" id="small-text">C#, Sql Server</p>
												</div>
											</div>
											<div class="row6">
												<img class="img-row-seccion5" src="img/proyectosimg/maquetacion.png" data-target="#proyectoweb8" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoweb8" data-toggle="modal">Seccion Activa</h4>
													<p class="text-muted" id="small-text">C#, Sql Server</p>
												</div>
											</div>

										</div>
										<!--FIN CONT-ROW-SECCION5 2-->

										

									</div>
									<div class="tabcontent2" id="movil">
									<h3>MANTENIMIENTO</h3>
									<p>...</p>
								</div>
								<div class="tabcontent2" id="prototipos">
									<!--INICIO CONT-ROW-SECCION5-->
										<div class="cont-row-seccion5">
											<div class="row5">
												<img class="img-row-seccion5" src="img/proyectosimg/cafeteria.jpg" data-target="#proyectoprototipo1" data-toggle="modal"> <!-- Trigger/Open The Modal -->
												 <!-- The Modal -->
												<div class="portfolio-caption">
													<h4 data-target="#proyectoprototipo1" data-toggle="modal">Cafeteria ITSC</h4>
													<p class="text-muted" id="small-text">C++</p>
												</div>
											</div>
											<div class="row5">
												<img class="img-row-seccion5" src="img/proyectosimg/alarma.png" data-target="#proyectoprototipo2" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoprototipo2" data-toggle="modal">YC-Alarma</h4>
													<p class="text-muted" id="small-text">C#, Sql Server, Report viewer</p>
												</div>
											</div>
											<div class="row5">
												<img class="img-row-seccion5" src="img/foto6.jpg" data-target="#proyectoprototipo3" data-toggle="modal">
												<div class="portfolio-caption" id="">
													<h4 data-target="#proyectoprototipo3" data-toggle="modal">Control Estudiantil</h4>
													<p class="text-muted" id="small-text">C#, Sql Server</p>
												</div>
											</div>
										</div>
										<!--FIN CONT-ROW-SECCION5-->
								</div>
								<div class="tabcontent2" id="disenos">
									<h3>MANTENIMIENTO</h3>
									<p>...</p>
								</div>
								</div>
								



									</div>

									
							</div>
						</div><!-- contenido de la seccion 3 fin-->
					</section>
				</div><!-- seccion 5 fin-->
		</div>
	</div>

	<!--MODALS LLAMADOS CON BOOTSTRAP-->
	<!-- INICIO MODAL PROYECTO 1 -->
	<div class="modal fade" id="proyecto1" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyecto1">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyecto1"></li>
							<li data-slide-to="1" data-target="#slidesproyecto1"></li>
							<li data-slide-to="2" data-target="#slidesproyecto1"></li>
							<li data-slide-to="3" data-target="#slidesproyecto1"></li>
							<li data-slide-to="4" data-target="#slidesproyecto1"></li>
							<li data-slide-to="5" data-target="#slidesproyecto1"></li>
							<li data-slide-to="6" data-target="#slidesproyecto1"></li>
							<li data-slide-to="7" data-target="#slidesproyecto1"></li>
							<li data-slide-to="8" data-target="#slidesproyecto1"></li>
							<li data-slide-to="9" data-target="#slidesproyecto1"></li>
							<li data-slide-to="10" data-target="#slidesproyecto1"></li>
							<li data-slide-to="11" data-target="#slidesproyecto1"></li>
							<li data-slide-to="12" data-target="#slidesproyecto1"></li>
							<li data-slide-to="13" data-target="#slidesproyecto1"></li>
							<li data-slide-to="14" data-target="#slidesproyecto1"></li>
						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active"><img alt="First slide" class="d-md-block w-100" src="img/proyectosimg/proyecto1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="First slide" class="d-block" src="img/proyectosimg/proyecto1.2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.3.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="First slide" class="d-block" src="img/proyectosimg/proyecto1.4.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.5.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="First slide" class="d-block" src="img/proyectosimg/proyecto1.6.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.7.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="First slide" class="d-block" src="img/proyectosimg/proyecto1.8.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.3.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.4.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto1.9.5.jpg"></div>
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyecto1" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyecto1" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO 1-->

	
	<!-- INICIO MODAL PROYECTO 2 -->
	<div class="modal fade" id="proyecto2" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyecto2">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyecto2"></li>
							<li data-slide-to="1" data-target="#slidesproyecto2"></li>
							<li data-slide-to="2" data-target="#slidesproyecto2"></li>
							<li data-slide-to="3" data-target="#slidesproyecto2"></li>
							<li data-slide-to="4" data-target="#slidesproyecto2"></li>
							<li data-slide-to="5" data-target="#slidesproyecto2"></li>
							<li data-slide-to="6" data-target="#slidesproyecto2"></li>
							<li data-slide-to="7" data-target="#slidesproyecto2"></li>
							<li data-slide-to="8" data-target="#slidesproyecto2"></li>

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block w-100" src="img/proyectosimg/proyecto2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.3.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.4.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.5.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.6.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.7.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.8.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.9.jpg"></div>
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyecto2" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyecto2" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO 2-->

	<!-- INICIO MODAL PROYECTO 3 -->
	<div class="modal fade" id="proyecto3" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyecto3">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyecto3"></li>
							<li data-slide-to="1" data-target="#slidesproyecto3"></li>
							<li data-slide-to="2" data-target="#slidesproyecto3"></li>
							<li data-slide-to="3" data-target="#slidesproyecto3"></li>
							<li data-slide-to="4" data-target="#slidesproyecto3"></li>
							<li data-slide-to="5" data-target="#slidesproyecto3"></li>
							<li data-slide-to="6" data-target="#slidesproyecto3"></li>
							<li data-slide-to="7" data-target="#slidesproyecto3"></li>
							<li data-slide-to="8" data-target="#slidesproyecto3"></li>

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block w-100" src="img/proyectosimg/proyecto3.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto3.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto3.2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.4.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.5.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.6.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.7.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.8.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyecto2.9.jpg"></div>
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyecto3" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyecto3" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO 3-->


	<!-- INICIO MODAL PROYECTO WEB 1 -->
	<div class="modal fade" id="proyectoweb1" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="https://practica-lab-03.yoldany.repl.co/EJERCICIO3/ejercicio3.html">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://practica-lab-03.yoldany.repl.co/EJERCICIO3/ejercicio3.html"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 1-->


	<!-- INICIO MODAL PROYECTO WEB 2 -->
	<div class="modal fade" id="proyectoweb2" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="https://practica-lab-03.yoldany.repl.co/EJERCICIO2/ejercicio2.html">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://practica-lab-03.yoldany.repl.co/EJERCICIO2/ejercicio2.html"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 2-->

	<!-- INICIO MODAL PROYECTO WEB 3 -->
	<div class="modal fade" id="proyectoweb3" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="https://practica-2da-semana.yoldany.repl.co/EJERCICIO4/ejercicio4.html">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://practica-2da-semana.yoldany.repl.co/EJERCICIO4/ejercicio4.html"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 3-->

	<!-- INICIO MODAL PROYECTO 4 -->
	<div class="modal fade" id="proyectoweb4" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyectoweb4">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyectoweb4"></li>
							<li data-slide-to="1" data-target="#slidesproyectoweb4"></li>
							<li data-slide-to="2" data-target="#slidesproyectoweb4"></li>
							<li data-slide-to="3" data-target="#slidesproyectoweb4"></li>
							

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block w-100" src="img/proyectosimg/proyectoweb4.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb4.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb4.2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb4.3.jpg"></div>
							
							
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyectoweb4" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyectoweb4" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO 4-->


	<!-- INICIO MODAL PROYECTO WEB 5 -->
	<div class="modal fade" id="proyectoweb5" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="https://subir-imagenes.yoldany.repl.co/">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://subir-imagenes.yoldany.repl.co/"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 5-->


	<!-- INICIO MODAL PROYECTO 6 -->
	<div class="modal fade" id="proyectoweb6" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyectoweb6">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyectoweb6"></li>
							<li data-slide-to="1" data-target="#slidesproyectoweb6"></li>
							<li data-slide-to="2" data-target="#slidesproyectoweb6"></li>
							<li data-slide-to="3" data-target="#slidesproyectoweb6"></li>
							

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block w-100" src="img/proyectosimg/proyectoweb6.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb6.1.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb6.2.jpg"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block" src="img/proyectosimg/proyectoweb6.3.jpg"></div>
							
							
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyectoweb6" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyectoweb6" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO 6-->


	<!-- INICIO MODAL PROYECTO WEB 7 -->
	<div class="modal fade" id="proyectoweb7" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="prueba.php">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://practica-lab-03.yoldany.repl.co/EJERCICIO2/ejercicio2.html"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 7-->


	<!-- INICIO MODAL PROYECTO WEB 6 -->
	<div class="modal fade" id="proyectoweb8" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					
					<iframe class="iframestyle1" src="prueba2.php">Texto para cuando el navegador no conoce la etiqueta iframe</iframe>

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>Html, Css</td>
						</tr>
						<tr>
							<td><b>Librerias/</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b>Frameworks</b></td>
							
						</tr>
						<tr>
							<td><b>Plus</b></td>
							<td>:</td>
							<td>n/a</td>
						</tr>
						<tr>
							<td><b><a>Link</a></b></td>
							<td>:</td>
							<td><a href="https://practica-lab-03.yoldany.repl.co/EJERCICIO2/ejercicio2.html"><p class="ex6">Acceder</p></a></td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL PROYECTO WEB 6-->

	<!-- INICIO MODAL proyectoprototipo 1 -->
	<div class="modal fade" id="proyectoprototipo1" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyectoprototipo1">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="1" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="2" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="3" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="4" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="5" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="6" data-target="#slidesproyectoprototipo1"></li>
							<li data-slide-to="7" data-target="#slidesproyectoprototipo1"></li>
							
							

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block imglimit1" src="img/proyectosimg/proyectoprototipo1.1.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.2.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.4.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.5.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.6.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.7.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo1.8.png"></div>
							
							
							
							
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyectoprototipo1" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyectoprototipo1" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL proyectoprototipo 1-->

	<!-- INICIO MODAL proyectoprototipo 2 -->
	<div class="modal fade" id="proyectoprototipo2" role="dialog">
		<div class="modal-dialog">
			<!-- Contenido del modal -->
			<div class="modal-content">
				<div class="cont-proyectos">
					<!-- INICIO SLIDES -->
					<div class="carousel slide" data-ride="carousel" id="slidesproyectoprototipo2">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="1" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="2" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="3" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="4" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="5" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="6" data-target="#slidesproyectoprototipo2"></li>
							<li data-slide-to="7" data-target="#slidesproyectoprototipo2"></li>
							
							

						</ol>
						<div class="carousel-inner imglimit1">
							<div class="carousel-item active imglimit1"><img alt="First slide" class="d-md-block imglimit1" src="img/proyectosimg/proyectoprototipo2.1.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo2.2.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo2.3.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo2.4.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo2.5.png"></div>
							<div class="carousel-item imglimit1"><img alt="Second slide" class="d-block imglimit1" src="img/proyectosimg/proyectoprototipo2.png"></div>
							
							
							
							
							
							
						</div><a class="carousel-control-prev" data-slide="prev" href="#slidesproyectoprototipo2" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#slidesproyectoprototipo2" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div><!-- FINAL SLIDES -->

					<!-- DATOS INFO -->
				<div class="proyectosinfo">
					<table class="">
						<tr>
							<td><b>Ambientes</b></td>
							<td>:</td>
							<td>Escritorio</td>
						</tr>
						<tr>
							<td><b>Interaccion</b></td>
							<td>:</td>
							<td>Contextual</td>
						</tr>
						<tr>
							<td><b>Lenguajes</b></td>
							<td>:</td>
							<td>C++</td>
						</tr>
						<tr>
							<td><b><a>Demo</a></b></td>
							<td>:</td>
							<td>N/A</td>
						</tr>
						<tr>
							<td><b>Descripcion</b></td>
							<td>:</td>
							<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</td>
						</tr>
					</table>
				</div><!-- FIN DATOS INFO -->
				</div>
			</div>
			<div class="modal-body">
				
			</div>
		</div>
	</div><!--FIN MODAL proyectoprototipo 2-->
		

		<!--INICIO MODAL CONTACTO-->
		<div class="modal fade" id="contactomodal" role="dialog">
		<div class="modal-dialog modal-sm modal-dialog-centered">
			<!-- Contenido del modal -->
			<div class="modal-content ">

				<div class="cont-contacto">
					<!-- Modal content formulario contacto -->
								<div style="margin: 20px;">
											<form >
												
										<h1>Formulario De Contacto</h1><b>Enviar un correo electronico. Todos los campos con asterisco ("*") son obligatorios.</b>
												<div class="row">
													<div class="col-4">
														<div class="form-group">
															<label for="name">Nombre<span class="text-danger">*</span></label> <input aria-describedby="emailHelp" class="form-control" id="name" maxlength="20" required="" type="text">
														</div>
													</div>
													<div class="col-4">
														<div class="form-group">
															<label for="email">Correo Electronico<span class="text-danger">*</span></label> <input aria-describedby="emailHelp" class="form-control" id="email" required="" type="email">
														</div>
													</div>
													<div class="col-4">
														<div class="form-group">
															<label for="issue">Asunto<span class="text-danger">*</span></label> <input aria-describedby="emailHelp" class="form-control" id="issue" maxlength="50" required="" type="text">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="message">Mensaje<span class="text-danger">*</span></label> 
													<textarea class="form-control" id="message" required="" rows="5"></textarea>
												</div><button class="btn btn-primary" type="submit">Enviar</button>
											</form>
										</div>
					<!-- fin Modal content formulario contacto -->
				</div>
			</div>
			<div class="modal-body">
				<div class="container-fluid">

				</div>
			</div>
		</div>
	</div><!--FIN MODAL CONTACTO-->
	









		<div class="panel-inferior"></div>
		<script src="prueba5.js">
		</script> 
		<script src="bootstrap.min.js">
		</script> 
	</div>
</body>
</html>