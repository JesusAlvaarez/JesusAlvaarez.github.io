<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icons/star.ico">
    <link rel="stylesheet" href="estilos/principal.css">
    <link rel="stylesheet" href="estilos/marcos.css">
    <title>Sitio Personal</title>
</head>
<body>

    <body>
        <header>
            <h1>¡Bienvenido a mi sitio personal!</h1>
        </header>
        <nav id="menu">
            <ul>
                <li><a class="boton" target="recargable" href="recursosWeb/introduccion.html">Introducción</a></li>
                <li><a class="boton" target="recargable" href="recursosWeb/musica.html">Musica</a>
                    <ul>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosMusica/2018.html">Mi 2018</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosMusica/2019.html">Mi 2019</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosMusica/2020.html">Mi 2020</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosMusica/2021.html">Mi 2021</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosMusica/2022.html">Mi 2022</a></li>
                    </ul>
                </li>
                <li><a class="boton" target="recargable" href="recursosWeb/entretenimiento.html">Entretenimiento</a>
                    <ul>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosEntretenimiento/peliculas.php">Películas</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosEntretenimiento/series.php">Series</a></li>
                        <li><a class="boton" target="recargable" href="recursosWeb/subSitiosEntretenimiento/anime.php">Anime</a></li>
                    </ul>
                </li>

                <li><a class="boton" target="recargable" href="recursosWeb/comida.html">Comida</a></li>
                <li><a class="boton" target="recargable" href="recursosWeb/deportes.html">Deportes</a></li>
            </ul>
        </nav>
        <main>

            <section>
                <br>
                <div>
                    <iframe id="seccionIntroduccion" class="secciones"
                     name="recargable" src="recursosWeb/introduccion.html"
                      frameborder="0"></iframe>
                </div>
            </section>
        </main>    
</body>
<footer>
    <div class="pieDePagina">
        <h4>Sitio diseñado y desarrollado por: Jesus Alvarez Aguilar</h4>
        <h4>Creado con las tecnologías: </h4>
    <div class="primeraLista">
        <ul class="listaIzquierda">
            <li>
                <span id="txtHTML">
                    <img class="imagenIcono" src="images/icons/html.ico" alt="html">
                </span>
            </li>
            <li>
                <span id="txtCSS">
                    <img class="imagenIcono" src="images/icons/css3.ico" alt="html">
                </span>
            </li>
            <li>
                <span id="txtPHP">
                    <img class="imagenIcono" src="images/icons/php.ico" alt="html">
                </span>
            </li>
        </ul>
    </div>  
    <h4>Y herramientas como:</h4>
    <div class="primeraLista">
    <ul class="listaIzquierda">
        <li>
            <span id="txtLucid">
                <img class="imagenIcono" src="images/icons/drawing.ico" alt="html">
            </span>
        </li>
        <li>
            <span id="txtFigma">
                <img class="imagenIcono" src="images/icons/figma.ico" alt="html">
            </span>
        </li>
    </ul>
    </div>
</footer>
</html>