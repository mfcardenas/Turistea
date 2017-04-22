<!DOCTYPE html>
<html lang="es">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="sstylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg320mUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Bootstrap core CSS-->
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link href="css/carousel.css" rel="stylesheet">

        <link href="css/estilo.css" rel="stylesheet" type="text/css">

        <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Turistea | ¿Qué es Turistea?</title>
        
    </head> 
    <body> 
        <?php 
            include("navbar.html");
        ?>
        <div class="container">
            <div class="contenido">      
                <h1 class="text-center">¿Qué es Turistea?</h1>
                <br>
                <table border=8>
                    <tr>
                        <td> <h3>Introducción</h3> </td>
                        <td>
                            <ul>
                                <li><p>Permite a los usuarios disponer de un acceso rápido a los distintos "monumentos" de Madrid.</p></li>
                                <li><p>Nuestra página proporciona información general acerca de: museos, teatros, estadios deportivos, parques temáticos... De todos estos se puede conocer: su horario de apertura, localización, precio de entrada, teléfono, e-mail... así como una breve descripción del mismo.</p></li>
                                <li><p>Todos los usuarios registrados tienen la posibilidad de generar contenido en nuestra aplicación web, mientras que aquellos que no estén registrados están limitados a mínimas condiciones.</p></li>
                                <li><p>Disponemos de una tienda, en la que los usuarios registrados dispondrán de una serie de puntos, los cuales irán incrementando a medida que se realicen compras en la misma. En función al número de puntos, recibirán mayores descuentos. Cualquier tipo de usuario puede acceder a la tienda, sin embargo, solo usuarios registrados tendrán la posibilidad de finalizar las respectivas compras.</p></li>
                                <li><p>En función del rol asignado a cada usuario estos dispondrán de diferentes perspectivas.</p></li>
                                <li><p>Existirán una serie de rutas para intervalos de tiempo determinados.</p></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td> <h3>Tipos de usuarios</h3> </td>
                        <td>
                            <ul>
                                <li><div class="apartados"> Administrador:</div> &nbsp&nbsp&nbsp -Seremos cada uno de los componentes del grupo, quienes nos dedicaremos a la creación y modelación de la página.</li>
                                <li><div class="apartados"> Usuario registrado:</div> &nbsp&nbsp&nbsp -Todos y cada uno de los usuarios que se den de alta en nuestra página.</li>
                                    <ol>
                                        <li><div class="apartados"> Residente:</div> &nbsp&nbsp&nbsp -Serán usuarios registrados que vivan en la ciudad de Madrid. Tendrán la opción de proporcionar contenido y dar sugerencias, las cuales se quedarán pendientes de aprobación por alguno de los administradores.</li>
                                        <li><div class="apartados"> Visitante:</div> &nbsp&nbsp&nbsp -Seran usuarios registrados que no vivan en la ciudad de Madrid, es decir, que vengan de visita para un tiempo concreto.</li>
                                    </ol>
                                <li><div class="apartados"> Usuario anónimo:</div> &nbsp&nbsp&nbsp -Este tipo de usuario tiene la posibilidad de acceder a la tienda y visitar su contenido. Sin embargo, no podrá realizar ninguna compra de los articulos propuestos en la misma. Para ello deberá registrarse.</li>
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