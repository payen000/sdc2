<!DOCTYPE html>
<html lang="en">
    <?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc2/include/head.php');
    ?>

    <body>       
        <?php
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc2/include/navbar.php');
        ?> 
        <div class="content">
            <div id='main-header' title="banner">
                <div class="container">
                    <div id="register" class='row register'>
                        <h1 class='title active-15' id="regtext">
                            2.° <strong>Simposio</strong> de <br>

                            <strong>Divulgación</strong> de la <strong>Ciencia</strong> 

                            <span class="header-space"></span>
                            <span class="header-space"></span> 

                            una <strong>emergencia </strong>

                            <br>
                            climática
                               
                            <span class="header-space"></span> 
                            <span class="header-space"></span>
                        </h1>
                        <h2>
                            <span id="date" class="active-25" title="fecha">
                                <strong>noviembre</strong> 16, 17 y 18
                            </span>
                        </h2>

                        <span class="header-space"></span>

                        <div id="regbutton" class='centered active-35' title="renglón de botón de registro">
                            <span title="botón de registro">
                                <a id="registry-button" class="btn btn-primary" href="https://es.wikipedia.org" target="_blank" role="button">Registro</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="introduccion" title="introducción">
                <hr class="separador">
                <div class="container">
                    <div class="row centered">
                        <h2 class='section'><span>Introducción</span></h2>
                    </div>

                    <div class="row justified">
                        <span class="date lead">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit tempus maecenas dapibus, lectus purus cursus praesent habitant proin rhoncus curabitur magnis, lacinia laoreet semper litora nisl duis sapien sagittis natoque. In suscipit maecenas nostra ultrices torquent primis scelerisque, penatibus quam tortor 
                        </span>
                    </div>
                </div>
            </div>

            <div id="objetivo" title="objetivo">
                <hr class="separador">
                <div class="container">
                    <div  class="row centered">
                        <h2 class='section'><span>Objetivo</span></h2>
                    </div>

                    <div class="row centered">
                        <span class="date lead">
                            Crear un espacio de intercambio de experiencias, metodologías, técnicas, ideas, reflexiones y resultados prácticos respecto a la divulgación de la ciencia y la tecnología, estableciendo un diálogo entre especialistas en cambio climático y divulgadores de la ciencia. 
                        </span>
                    </div>
                </div>
            </div>
            
            <div id="temas" title="temas">
                <hr class='separador'>
                <div class="container">
                    <div class="row centered">
                        <h2 class='section'><span>Temas</span></h2>
                    </div>
                    <div class="row centered">
                        <span class="date lead">
                            Divulgación
                        </span>
                        <span class="date lead">
                            Mitigación
                        </span>
                        <span class="date lead">
                            Adaptación
                        </span>
                    </div>
                </div>
            </div>

            <div id="calendario" title="calendario">
                <hr class='separador'>

                <div class="container">

                    <div  class="row centered">
                        <h2 class='section'><span>Calendario</span></h2>
                    </div>

                    <div class="row centered">
                        <span class="date lead">
                            Fecha límite para registrar trabajos al Simposio:<br> 
                            19 de septiembre de 2021
                        </span>

                        <span class="date lead">
                            Publicación de trabajos aceptados:<br>
                            3 de octubre de 2021
                        </span>
                        
                        <span class="date lead">
                            Fecha límite para retirar trabajos del Simposio: <br>
                            15 de octubre de 2021
                        </span>
                                
                        <span class="date lead">
                            Publicación del programa final:<br>
                            22 de octubre de 2021
                        </span>
                                
                        <span class="date lead"> 
                            Simposio:<br>
                            3, 4 y 5 de noviembre de 2021
                        </span>
                    </div>
                </div>
            </div>

            <?php
                require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc2/include/programa.php');
            ?>
           
            <div id="comite" title="comité">
                <hr class='separador'>

                <div class="container">

                    <div class="row centered">
                        <h2 class='section'><span>Comité Académico</span></h2><br>
                    </div>
                
                    <div class='row centered'>  
                        <span class="lead">
                            Dra. Lorena Arias Montaño
                        </span>
                        <span class="date lead">
                            Coordinadora Centro<br> Astronómico Clavius
                        </span>
                        <span class="lead">
                            Dra. Julia Carabias Lillo
                        </span>
                        <span class="lead">
                             El Colegio Nacional <br> - <br>Facultad de Ciencias
                        </span>
                        <span class="date lead"> 
                            UNAM
                        </span>
                        <span class="lead">
                            Dr. Ernesto Márquez Nerey
                        </span>
                        <span class="date lead">
                            Presidente de la Sociedad <br>Mexicana para la Divulgación <br> de la Ciencia y la Técnica <br>(SOMEDICYT)
                        </span>
                        <span class="date lead">
                            Dr. Juan Manuel Núñez Hernánde <br> CENTRUS
                        </span>
                    </div><br>

                    <div class="row centered">
                        <h2 class='section'><span>Comité Local</span></h2><br>
                    </div>
                
                    <div class='row centered'>
                        <span class="date lead">
                            Dra. Anabel Arrieta Ostos
                        </span>
                        <span class="date lead">
                            Dra. Dominique Brun Battistini <br>Directora del Departamento <br>de Física y Matemáticas
                        </span>
                        <span class="date lead">
                            Dr. José Alberto Lara Pulido
                        </span>
                        <span class="date lead">
                            Dr. Gerardo Martínez
                        </span>
                        <span class="date lead">
                            Ing. Agustín Payen Sandoval
                        </span>
                        <span class="date lead">
                            Mtra. María Zorrilla Ramos
                        </span>
                    </div>
                </div>
            </div>

            <div id="contacto" title="contacto">
                <hr class='separador'>

                <div class="container">
                    <div class="row centered">
                        <h2 class='section'>Contacto</h2>
                    </div>

                    <div class='row centered'>
                        <span class="date lead">
                            Anabel Arrieta<br>
                            anabel.arrieta@ibero.mx
                        </span>
                        <span class="date lead">
                            Facebook<br>
                            Divulgacion2021.ibero
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
            require_once ($_SERVER['DOCUMENT_ROOT'] . '/sdc2/include/footer.php');
        ?>
    
    </body>
</html>
