<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pastelería Dulce Mocca</title>
        <link rel="stylesheet" href="../Css/style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- fuente general -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
        <!-- fuente lobster two pal titulo dulce mocca -->
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!-- fuente Signika pa los textosParrafos-->
        <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300..700&display=swap" rel="stylesheet">
        <!-- fuente agbalumo pa los titulos y subtitulos-->
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Signika:wght@300..700&display=swap" rel="stylesheet">
        <!-- enlaces a los iconos de felcha del carrusel -->
        <script src="https://kit.fontawesome.com/887a835504.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/737c899a18.js" crossorigin="anonymous"></script>
        
    </head>

    <body>

         <header>
            <div class="logo">
                <img src="../Images/logo.png" alt="Logo Dulce Mocca">
            </div>
       
            <nav>
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                </ul>
            </nav>
        </header>


            <section class="producto1">
                <div class="texto-producto1">
                    <h1>NUESTROS PRODUCTOS</h1>
                    <p>
                        En Dulce Mocca, creemos que cada dulce tiene una historia que contar.
                        Nuestros productos no solo están hechos con los mejores ingredientes,
                        sino también con el cariño y la pasión que nos inspiran cada día.
                        Cada torta, cada galleta y cada postre reflejan el amor por lo artesanal
                        y la búsqueda de ese sabor que despierta recuerdos, sonrisas y momentos especiales.
                    </p>
                    <p>
                        Aquí descubrirás creaciones únicas, pensadas para endulzar tus celebraciones
                        y acompañarte en los instantes más importantes de tu vida. Porque en Dulce Mocca,
                        no solo horneamos postres, sino pequeños detalles llenos de amor que transforman
                        lo cotidiano en algo verdaderamente especial.
                    </p>
                </div>
            </section>



        <!-- SECCION DE PRODUCTOS -->
        <section id="productos" class="productos">
                <h2 id="texto">¡¡Ingresa al apartado que desees para ver todos los productos!!</h2>
            <div class="producto-lista">

            
                <a href="../Html/producto_clasificado/tortas.html" class="producto">
                    <img src="../Images/4_ponqueOreo_10personas.jpg" alt="Torta">
                    <h3>TORTAS</h3>
                    <p>Vainillas</p>
                    <p>Tres leches</p>
                    <p>Personalizados</p>
                </a>

                    <a href="../Html/producto_clasificado/postres.html" class="producto">
                    <img src="../Images/15_flanAgraz.jpg" alt="Postres">
                    <h3>POSTRES</h3>
                    <p>Horneados</p>
                    <p>A base de cremas</p>
                    <p>Gelatinosos</p>
                </a>

                <a href="../Html/producto_clasificado/acompañantes.html" class="producto">
                    <img src="../Images/croissant_chocolate.jpg" alt="Acompañantes">
                    <h3>ACOMPAÑANTES</h3>
                    <p>Muffins</p>
                    <p>Galletas</p>
                    <p>Repollas</p>
                </a>

                <a href="../Html/producto_clasificado/bebidas.html" class="producto">
                    <img src="../Images/bebidas5.jpg" alt="Bebidas">
                    <h3>BEBIDAS</h3>
                    <p>Frías</p>
                    <p>Calientes</p>
                </a>

                <a href="../Html/producto_clasificado/decoraciones.html" class="producto">
                    <img src="../Images/vela_numero.PNG" alt="Decoraciones">
                    <h3>DECORACIONES</h3>
                    <p>Velas</p>
                    <p>Accesorios</p>
                </a>
            </div>
        </section>


        <!--SECCION DE LOS TESTIMONIOS-->
        <p class="intro-testimonios">
        <b>Tu opinión hace que Dulce Mocca siga creciendo.  
        Cuéntanos tu experiencia y ayúdanos a endulzar más sonrisas.</b>
        </p>

        <section id="testimonios" class="testimonios">
            <h2>Testimonios de Nuestros Clientes</h2>

            <!--aqui se muestran testimonios desde la base de datos -->
            <div class="testimonios-container" id="lista-testimonios"></div>
            <!--boton para abrir el formulario-->
            <button class="btn-testimonio" onclick="mostrarFormulario()">Deja tu testimonio</button>



            <!--formulario emergente-->
            <div id="formTestimonio" class="form-popup">
                <form class="form-container" action="../Php/guardar_testimonio.php" method="POST">
                    <h3>Comparte tu experiencia</h3>
                    <input type="text" name="nombre" placeholder="Tu nombre" required minlength="3" maxlength="100">
                    <input type="email" name="correo" placeholder="Tu correo (opcional)" maxlength="100">
                    <textarea name="comentario" placeholder="Escribe tu testimonio..." required minlength="5" maxlength="500"></textarea>
      
                    <label>Calificación:</label>
                    <select name="calificacion" required>
                        <option value="5">⭐⭐⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="1">⭐</option>
                    </select>

                    <button type="submit" class="btn-enviar">Enviar</button>
                    <button type="button" class="btn-cerrar" onclick="cerrarFormulario()">Cerrar</button>
                </form>
            </div>


            <div class="testimonios-container">
                <?php include("../Php/mostrar_testimonios.php"); ?>
            </div>



        </section>

        
        <footer class="footer">
            <div class="footer-container">
                <div class="footer-section">
                <h3>Contacto</h3>
                <p>Email: pasteleriadulcemocca@gmail.com</p>
                <p>Tel: 3229349911</p>
                </div>

                <div class="footer-section">
                <h3>Dirección</h3>
                <p>Calle 71 p sur # 27 m-04(Barrio Paraìso)</p>
                <p>Bogotá, Colombia</p>
                </div>

                <div class="footer-section">
                <h3>Página Web</h3>
                <p><a href=>www.dulcemocca.com</a></p>
                </div>
            </div>
        </footer>

        <script src="../Js/script.js"></script>

    </body>
</html>