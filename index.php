<!-- Yesabel Margarita Tenorio García -->
<!-- Proyecto de página para una organización -->
<!--Modificación del proyecto en html5, css, php y js -->
<!-- Pseudo-clases y pseudo-elementos -->
<!-- Galería de fotos -->
<!-- formulario en php y bd -->
<!--Fecha de proyecto final 26/05/21 -->

    <?php session_start(); ?>  <!-- registro de sesion en php -->
    
       <?php
       if (!isset($_SESSION['contador'])) { 
        echo "<p>Bienvenido a nuestra pagina</p>"; //mensaje que se muestra cuando de visita la pagina por primera vez
        $_SESSION['contador']=1;
    }
    ?>
    <?php 
  // Borra todas las variables de sesión 
    $_SESSION = array(); 
  // Borra la cookie que almacena la sesión 
  if(isset($_COOKIE[session_name()])) {  //cookie para inicio de sesion
    setcookie(session_name(), '', time() - 42000, '/'); 
  } 
  // Finalmente, destruye la sesión 
  session_destroy(); 
?> 


<!DOCTYPE HTML> <!-- Declaración de tipo de documento -->
<html lang="es"> <!-- Inicio -->

    <head>
        <title>Corporativo Internacional Universitario</title> <!-- Título de la página -->
        <meta charset="UTF-8">
        <meta name="title" content="Corporativo Internacional Universitario"> <!-- titulo de la pagina -->
        
        <meta name="description" content="La pagina muestra informacion de una institucion educativa privada"> <!-- descripcion de la pagina -->
        
        <link href="CSS/estilos proy.css" rel="stylesheet" type="text/css"/> <!-- estilo adjunto -->
        <script language="JavaScript"> 
            window.onbeforeunload = preguntarAntesDeSalir; //funcion para preguntar antes de salir del sitio con js
            function preguntarAntesDeSalir(){
                return "¿Seguro que quieres salir?";
            }
        </script>
    </head>

    <header class="contenedor"> <!-- para definir contenido de la pagina -->
    <h1>Corporativo Internacional Universitario</h1>
    
    </header>

    <body>
        <section>
         <article>
            <img src= "imagenes/logo.png" alt="logo de la institución"> <!-- Imagen del logo de la institución con alt para describir la imagen si no aparece-->
            <h2>Nos especializamos en tí!</h2>
            <hr>
            <nav> <!-- menu -->
            <a href="paginas/proyecto oferta.html">Ver oferta educativa</a>
            <a href="paginas/galeriaproy.html">Ver galería de fotos</a> <!-- Link hacia otra pagina que muestra una tabla con oferta educativa -->
            
            </nav>
            
            <br>
            
            <br>
            <h4>Misión</h4> <!-- Encabezado más pequeño -->
        
            <div id="destacado" class="solid"> 
            Somos una institución Educativa orientada a difundir y preservar conocimiento de manera integral, en los niveles de educación media superior, superior y posgrado, a través de ofertas académicas de calidad adaptadas a modalidades y horarios flexibles, contamos con una sólida plantilla de docentes, enfocados a fomentar la ética profesional docente y los valores, así como la cultura y el espíritu emprendedor. <br>

            <ul> <!-- Lista dentro del parrafo -->
        
            <li>Respetar al alumno como individuo, trabajando en sus fortalezas para convertirlas en competencias para su vida futura</li>
            <li>Capacitar al docente para que su trabajo diario sea más significativo</li>
            <li>El trabajo colegiado será el eje metodológico para trabajos futuros ya que solo así se logran los </li>
            <li>Evaluaciones formativas de los docentes, administrativos y directivos creando un compromiso educativo didáctico y pedagógico</li>
            <li>Involucrando a los padres de familia en el proceso de enseñanza-aprendizaje de sus hijos a través de conferencias especializadas</li>
            <li>La libertad de pensamiento y expresión será el eje para alcanzar un aprendizaje de calidad</li>
            </ul>
            </div>
            <br> <!-- Etiqueta para separacion  -->
    
            <h4>Visión</h4><!-- Encabezado más pequeño -->
            <div id="destacado" class="solid">
            Ser la mejor institución Educativa de la región, a través de la mejora continua en las áreas de educación, ciencia y cultura, construir una escuela de calidad, donde el trabajo colaborativo y comprometido, maestros fomente a todos los alumnos los valores de responsabilidad, respeto, solidaridad, formando así, personas competentes para desempeñarse con éxito en los distintos ámbitos de la vida, de manera positiva, eficiente y comprometida con su actuar. <!-- Parrafo de vision -->
       
            </div>
            <br><!-- Etiqueta para separacion  -->

            <h4>Objetivos</h4><!-- Encabezado más pequeño -->
            <div id="destacado" class="solid">
            Satisfacer los requerimientos y expectativas de nuestros alumnos, a base de promover licenciaturas y posgrados que favorezcan el bienestar de los alumnos y que desarrollen mejores estrategias para su futuro, buscamos brincar un excelente servicio honesto y profesional, respeto mutuo entre docente y alumnos, tratando de mejorar cada día para que la escuela obtenga mejores experiencias y buscar que los alumnos se sientan satisfechos superando sus expectativas. <!-- Parrafo de los objetivos -->
            </div>
            <hr> <!-- Etiqueta para que aparezca una línea de separación -->

          </article>
        </section>
        <article>
           <h3>Te invitamos a ver esta entrevista</h3>
           <pre> <div class="video-responsive"> <!-- Para insertar video -->
        
            <iframe src="https://www.youtube.com/embed/6IffnhZKuE4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <!-- codigo iframe del video -->
            
            </div>
            </pre> 
            
            <pre>&quotEl Director del Corporativo Internacional Universitario, Lic. Ramiro Alejandro Tenorio Vílchis, nos explica las características que tiene esta institución educativa cuyos objetivos están definidos por las nuevas tendencias de profesionalización en el país.&quot</pre><!-- Caracter especial de comillas  -->
       
            <pre>&copy; Copyright 2019. Desde Cero. Todos los derechos reservados</pre><!-- Caracter especial de copyright-->
            <hr>
      </article>

       <aside>
            <h3>Consulta nuestras promociones</h3>
            <br>
            <img src="imagenes/prom.jpg" alt="Imagen de la promocion" > <!-- imagen de promocion   -->
            <pre class="elemento">Esta promoción es válida mientras estudies con nosotros</pre> <!--texto con pseudo elemento  -->

            <br><!-- Etiqueta para separacion  -->
            <img src="imagenes/prom2.jpg" alt="Imagen de la promocion" > <!-- imagen de promocion   -->
            <pre class="elemento">Esta promoción es válida mientras estudies con nosotros</pre> <!--texto con pseudo elemento  -->
            
       </aside>
             <hr>
            <h3> Formulario de información</h3><br> <!-- Formulario para mas informacion -->
            <p> Llene este formulario para obtener más información</p> <br>

       <aside>
         <form action="php/registrar.php" method="post" >

            <p> <label> Nombre Completo: <!-- pide nombre -->
            
            <input name="nombre" type="text" id="nombre" maxlength="30" autofocus required> <!-- con autofocus para que aparezca el cursor en el espacio del formulario para rellenar y required para campo obligatorio para poder enviar formulario -->
            
            </label>
            </p><br>

            <p> <label for= "email"> Correo Electrónico: <!-- pide email -->
            
            <input type="email" id="email" placeholder="fulanito@ejemplo.com" name="email" type="text"  maxlength="30"> <!-- con placeholder para tener un ejemplo de email y required para campo obligatorio para poder enviar formulario-->
            
            </label>
            </p><br>

            <p> <label> Número Telefónico: <!-- pide telefono y required para campo obligatorio para poder enviar formulario-->
            
            <input name="numero" type="text" id="numero" maxlength="30">
            </label>
            </p><br>

            <br><p> Elija la/las licenciaturas que desea más información </p> <!-- pide a elegir opciones de relleno -->
            
            <label> Psicología
            <input name=" lic" type="checkbox" value="psicologia" id="lic">
            </label>

            <label> Administración
            <input name="lic" type="checkbox" value="Administracion" id="lic">
            </label>

            <label> Pedagogía
            <input name="lic" type="checkbox" value="Pedagogia" id="lic">
            </label>

            <label> Derecho
            <input name="lic" type="checkbox" value="derecho" id="lic">
            </label>

            <label> Contaduría
            <input name="lic" type="checkbox" value="contaduria" id="lic">
            </label> <br>


            <br><p> Elija un campus</p> <!-- pide a elegir un campus  -->
            
            <label> Maravatío
            <input name="camp" type="radio" value="maravatio" id="camp"> 
            
            </label>

            <label> Atlacomulco
            <input name="camp" type="radio" value="atlacomulco" id="camp">
            </label>

            <label> Tenancingo
            <input name="camp" type="radio" value="tenancingo" id="camp" >
            </label>

            <label> San Juan del Río
            <input name="camp" type="radio" value="san juan del rio" id="camp" >
            </label>

            <label> Acambay
            <input name="camp" type="radio" value="acambay" id="camp" >
            </label>
            </p> <br>

    <p>
        <input type="submit" value="Enviar" name="Enviar" class="boton_personalizado"> <!-- boton de enviar -->
        
        <input type="reset" value="Borrar" name="Borrar"> <!-- boton de borrar -->
        
    </p>
    <br>
 


</form>
</aside>
        
      <footer class="foot">
       <h5>Redes sociales</h5> <!-- Liga para ir a las redes sociales de la institucion -->
       
       <a href="https://www.facebook.com/CIUCAMPUSATLACOMULCO/">Facebook institucional</a>
       </footer>




      
    
        
    
    
    </body>
</html> <!-- Cierre -->
