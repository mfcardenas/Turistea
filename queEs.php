<!DOCTYPE html>
<html lang="es">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">

        <!-- Bootstrap core CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/carousel.css" rel="stylesheet">

        <link href="css/estilo.css" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | ¿Qué es Turistea?</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.php");
        ?>
        <div class="container">
            <div class="contenido"> 
                <h1 class="text-center">¿Qué es Turistea?</h1>
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">¿Qué es Turistea?</li>
                    </ol>   
                </div>
                <br>
                <table class="table-bordered">
                    <tr>
                        <td> <h3>Introducción</h3> </td>
                        <td>
                            <ul>
                                <li><p>Permite a los usuarios disponer de un acceso rápido a los distintos "monumentos" de Madrid, a través de la pagina visitas.</p></li>
                                <li><p>Nuestra página proporciona información general acerca de: museos, teatros, parques temáticos y cines (con la posibilidad de añadir más tipos de lugares fácilmente). De todos estos se puede conocer: su horario de apertura, localización, precio de entrada, teléfono... así como una breve descripción del mismo.</p></li>
                                <li><p>Todos los usuarios registrados tienen la posibilidad de generar contenido en nuestra aplicación web de tipo galería o experiencia (son lo mismo) donde podrán publicar una foto para contar sus experiencias; estas publicaciones solo se podrán ver desde otros usuarios autentificados. </p>
                                <li><p>Aquellos que no están regisrados tendrán un uso más limitado de la aplicación. No podrán enterarse de las últimas noticias ni visitar la galería, por lo que tampoco podrán publicar en esta.</p></li>
                                <li><p>Disponemos de una tienda. Cualquier tipo de usuario puede acceder a la tienda, sin embargo ninguno podrá comparar de verdad (los botones no hacen nada), debido a que es una actividad escolar y no verídica por lo que no tenemos realmente los productos a vender y esta página es sin ánimo de lucro.</p></li>
                                <li><p>Existirán una serie de rutas para intervalos de tiempo determinados, con descripciones detalladas de las mismas.</p></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td> <h3>Tipos de usuarios</h3> </td>
                        <td>
                            <ul>
                                <li><div class="negrita">Administrador:</div><p class="apartados"> Seremos cada uno de los componentes del grupo, quienes nos dedicaremos a la creación y modelación de la página. Son los únicos que pueden crear contenido de todos los tipos. Crearán contenido de:
                                    <ol>
                                        <li>Teatros</li>
                                        <li>Museos</li>
                                        <li>Parques</li>
                                        <li>Cines</li>
                                        <li>Visitas</li>
                                        <li>Gastronomía</li>
                                        <li>Rutas</li>
                                        <li>Noticias</li>
                                        <li>Productos de la tienda</li>
                                        <li>Galería</li>
                                    </ol>
                                </p></li>
                                <li><div class="negrita">Usuario registrado:</div> <p class="apartados">Todos y cada uno de los usuarios que se den de alta en nuestra página. Estos podrán crear contenido de tipo galería para compartir su experiencia con los demás turisteros, así como si funcionase, terminar sus compras en la tienda.</p></li>
                                    
                                <li><div class="negrita">Usuario anónimo:</div><p class="apartados"> Este tipo de usuario tiene la posibilidad de acceder a la tienda y visitar su contenido. Sin embargo, no podrá realizar ninguna compra de los articulos propuestos en la misma, ni crear ninguna clase de contenido. Para ello deberá registrarse.</p></li>
                            </ul>
                        </td>
                    </tr>
                </table>
                
                <hr class="featurette-divider">
                <!-- FOOTER -->
                <?php
                    include("footer.html");
                ?>
            </div>
        </div>
        
      <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!--<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>-->
        <script src="js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <!--<script src="../../assets/js/vendor/holder.min.js"></script>-->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>