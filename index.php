<?php
// Usamos getenv() que es el método más seguro en Railway
$host = getenv('MYSQLHOST');
$port = getenv('MYSQLPORT');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQL_DATABASE');

$conexion = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<?php

// Punto 2. Query RP
$query = "SELECT * FROM CBTis165PFI";
$resultado = mysqli_query($conexion, $query); 

// Security verification
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!-- Document type -->
<!DOCTYPE html>
<html lang = "es">
    <head>
		<meta charset="utf-8">
		<meta name= "viewport" content= "width-device-width, initial-scale=1">
        <link rel="icon" type="img/png" href="RBtis.jpg">
        <link rel = "stylesheet" type = "text/css" href = "estililloo.css">
    </head>
    <body>

        <!-- Header -->
        <div class = "aparece">
        <header class = "header">
        <div class = "logo">
            <h1>CBTis 165 | </h1>
            <img src="RBtis.jpg" alt="CBTis 165" class = "Primera"> <!--Image-->
        </div>

            <nav class = "a">
                <ul>
                    <li><a href = "#Init">Historia </a></li>
                    <li><a href = "#Programas">Programas </a></li>
                    <li><a href = "#Apoyoa">Apoyo Académico </a></li>
                    <li><a href = "#Bienestarys">Bienestar y Salud </a></li>
                    <li><a href = "#Desarrolloi">Desarrollo Integral </a></li>
                    <li><a href = "#Emprendimientoyt">Emprendimiento y talento</a></li>
                </ul>
            </nav>
        </header>
        </div>

        <div class = "aparece">

        <center><h2>Programas de Formación Integral</h2></center>
        </div>
        
    <!-- Main content -->

    <main>
    <section id = "Init" class = "aparece">
        <h2>Historia de la institución</h2>
        <p>El CBTis (Centro de Bachillerato Tecnológico Industrial y de Servicios) nació en 1971 como parte de la estrategia de la SEP para ampliar la educación media superior en México, ofreciendo no solo el bachillerato general, sino también formación técnica profesional. Hoy es uno de los subsistemas más grandes del país, con cientos de planteles que preparan a jóvenes para la universidad y para el mundo laboral.</p>

    <hr>

        <p>Actualmente existen 288 CBTis en todo el país, además de CETis y CECyTEs, consolidando a la DGETI como la institución de educación media superior tecnológica más grande de México.</p>
        <p>Dentro de cada uno de esos planteles, se les inculca a los jóvenes a la:</p>
        <ul>
            <li>Formación técnica: Brinda conocimientos prácticos en áreas industriales, administrativas y de servicios.</li>
            <hr>
            <li>Acceso a educación superior: Sus egresados pueden continuar estudios universitarios.</li>
            <hr>
            <li>Cobertura nacional: Presente en múltiples estados, incluyendo Veracruz, Yucatán, Nuevo León y más.</li>
            <hr>
            <li>Inclusión educativa: Ofrece educación gratuita, laica e incluyente.</li>
        </ul>
    </section>


        <section id = "Programas" class = "aparece">
            <h2>Iniciativas de programas impulsados por la comunidad DGETI</h2>
                <table class = "CSSPHP">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Programa</th>
                            <th>Descripion</th>
                            <th>Impactos</th>
                            <th>Participacion</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        // Punto 3: Automatically generation of while cicle
                        while ($row = mysqli_fetch_array($resultado)) {
                            echo "<tr class = 'aparece'>"; //Animated rows class
                            echo "<td><em>" . $row['ID'] . "</em></td>";
                            echo "<td><em>" . $row['Programa'] . "</em></td>";
                            echo "<td><em>" . $row['Descripcion'] . "</em></td>";
                            echo "<td><em>" . $row['Impactos'] . "</em></td>";
                            echo "<td><em>" . $row['Participacion'] . "</em></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
        </section>

        <hr>

    <!-- Independent boxes -->

        <div class = "aparece">
        <section id = "Apoyoa" class = "caja1"> <!-- Otorga la animación insertada en CSS para la vista usuario -->
            <h3>SINATA</h3><br>
            <p>Sistema Nacional de Tutorias</p><br>
            <p>Se concibe al SiNaTA, como un mecanismo estratégico para la planeación, organización y operación de acciones de apoyo académico, tiene como objetivo coadyuvar en la formación integral de los estudiantes atendiendo sus necesidades e interés, así como aquellos factores internos y externos que inciden de forma directa o indirecta en el proceso de aprendizaje y desempeño académico.</p>
        <div class = "Image1">
            <img src = "SINATA.jpg" alt = "Sistema Nacional de Tutorías">
        </div>

        <hr>

            <h3>PRONAFOLE</h3><br>
            <p>Programa Nacional de Fomento a la Lectura</p><br>
            <p>El Programa Nacional de Fomento a la Lectura en México, impulsado por la Dirección General de Educación Tecnológica Industrial y de Servicios (DGETI). Su objetivo es acercar a los estudiantes de educación media superior al hábito lector mediante actividades creativas, concursos y clubes de lectura.</p>
        <div class = "Image2">
            <img src = "PRONAFOLE.jpg" alt = "Programa Nacional de Fomento a la Lectura">
        </div>
        </section>
        </div>

        <hr>

        <div class = "aparece">
        <section id = "Bienestarys" class = "caja2"> <!-- Otorga la animación insertada en CSS para la vista usuario -->
            <h3>FOMALASA</h3><br>
            <p>Fomento A La Salud</p><br>
            <p>Propicia en los jóvenes factores de protección que los induzcan a estilos de vida saludables y los aproxime a los más altos niveles de bienestar, a fin de que culminen la Educación Media Superior, así como actualiza a los responsables del programa en los planteles. Involucra al alumnado, a los docentes y a los padres de familia en el desarrollo biopsicosocial de los estudiantes. Realiza un trabajo interinstitucional y cumple y gestiona convenios de colaboración.</p>
        <div class = "Image3">
            <img src = "FOMALASA.jpg" alt = "Fomento A La Salud">
        </div>

        <hr>

            <h3>Sexual-Mente Responsable</h3>
            <p>Proyecto Aula Escuela Comunidad</p>
            <p>Busca promover la salud sexual y reproductiva entre adolescentes en planteles de educación tecnológica, ofreciendo orientación, consejería y servicios amigables para prevenir embarazos no deseados, infecciones de transmisión sexual y fomentar relaciones basadas en respeto y consentimiento.</p>
        <div class = "Image4">
            <img src = "SX.jpg" alt = "Sexual - Mente Responsable">
        </div>
        </section>
        </div>

        <hr>

        <div class = "aparece">
        <section id = "Desarrolloi" class = "caja3"> <!-- Otorga la animación insertada en CSS para la vista usuario -->
            <h3>ECALE</h3><br>
            <p>El Cine A la Escuela</p><br>
            <p>iniciativa educativa en México que lleva el cine nacional a los bachilleratos públicos, usando películas como herramienta didáctica para fomentar el análisis crítico, la reflexión y la formación de públicos. Está respaldado por la Secretaría de Educación Pública y se desarrolla en todo el país, incluyendo Veracruz.</p>
        <div class = "Image5">
            <img src = "ECALE.jpg" alt = "El Cine A La Escuela">
        </div>

        <hr>

            <h3>AMA DGETI</h3><br>
            <p>Acciones por el Medio Ambiante de la DGETI</p><br>
            <p>Significa Acciones por el Medio Ambiente de la DGETI. Es un programa nacional de la Dirección General de Educación Tecnológica Industrial y de Servicios (DGETI) que busca formar conciencia ambiental en estudiantes de bachillerato, promoviendo actividades de reciclaje, reforestación, ahorro de agua y energía, y hábitos sustentables.</p>
        <div class = "Image6">
            <img src = "AMADGETI.png" alt = "Acciones por el Medio Ambiente DGETI">
        </div>
        </section>
        </div>

        <hr>

        <div class = "aparece">
        <section id = "Emprendimientoyt" class = "caja4"> <!-- Otorga la animación insertada en CSS para la vista usuario -->
            <h3>MEEMS</h3><br>
            <p>Modelo de Emprendedores para la Educacion Media Superior</p><br>
            <p>Significa Modelo de Emprendedores para la Educación Media Superior. Es un programa de la Secretaría de Educación Pública (SEP) y la DGETI que busca formar competencias emprendedoras en estudiantes de bachillerato, preparándolos para crear proyectos propios, generar autoempleo y vincularse con el ecosistema emprendedor nacional.</p>
        <div class = "Image7">
            <img src = "MEEMS.jpg" alt = "Modelo de Emprendedores para la Educacion Media Superior">
        </div>
        <hr>

            <h3>Clubes</h3><br>
            <p>Deportivos, Cientificos y Culturales</p><br>
            <p>Espacios extracurriculares en los planteles de la Dirección General de Educación Tecnológica Industrial y de Servicios (CBTis y CETis) que buscan desarrollar habilidades artísticas, deportivas, científicas y cívicas en los estudiantes de educación media superior. Funcionan como comunidades de aprendizaje y convivencia, fortaleciendo la formación integral más allá de las materias académicas.</p>
        <div class = "Image8">
            <img src = "Clubes.jpeg" alt = "Clubes">
        </div>
        </section>
        </div>

		<form method="POST">
                <div class = "input-box">
                <label>¿Fué de tu agrado la página?</label><br>
				<p>¡Escríbenos!</p>
                    <input type = "text" name = "opinion" placeholder = "Tu opinión..."><br><br>
				</div

    <footer class = "aparece">
        <p><strong>CBTis 165 "Leona Vicario"</strong></p>
        <p>Ubicación: Carretera Antigua Xalapa - Coatepec Km 8.5, Consolapa. Coatepec, Veracruz.</p>
        <p><strong>Desarrollador: </strong><em>José Pablo López Donjuan</em></p>

        <!-- Social media in a single line-->

        <div style = "display: flex; gap: 20px; align-items: center;">
        <a href = "https://wa.me/522281196948" target = "_blank" style = "text-decoration: none; color: inherit;">
            <img src = "W.png" alt = "WhatsApp" width = "20" height = "20">
            228 212 0924
        </a>
        <a href = "https://instagram.com/elcampos0.0" target = "_blank" style = "text-decoration: none; color: inherit;">
            <img src = "IG.png" alt = "Instagram" width = "20" height = "20">
            @elcampos0.0
        </a>
        </div>
        <p>2026 &copy; All rights reserved</p>
    </footer>

    <!-- Button -->
    <button id="btnArriba">
        <img src = "scrolltop.png" width = "24" height = "24">
    </button>

    <style>
    /* Button's style */
    #btnArriba {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none; /* Hidden at beginning */
        background-color: #333;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        transition: opacity 0.3s;
    }

    #btnArriba:hover {
        background-color: #555;
    }
    </style>

    <script>
    const btnArriba = document.getElementById("btnArriba");

    // Mostrar el botón cuando se hace scroll hacia abajo
    window.addEventListener("scroll", () => {
        if (window.scrollY > 300) {
            btnArriba.style.display = "block";
        } else {
            btnArriba.style.display = "none";
        }
    });

    // Al hacer clic, subir suavemente
    btnArriba.addEventListener("click", () => {
        window.scrollTo({
        top: 0,
        behavior: "smooth"
        });
    });
    </script>

</body>
</main>
</html>
