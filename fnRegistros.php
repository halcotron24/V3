<?php
 include('../administrador/muchosRegistros.php');
 

$cmpoOpc = "";
$cmpoOpc = $_POST['cmposGenRg'];


if($_POST){
     (isset($_POST['cmposGenRg'])) ? $_POST['cmposGenRg'] : "";
    //cuantificarRegistros();
    

//function cuantificarRegistros(){



    //$cmpoOpc="";
    //include('administrador/muchosRegistros.php');

    switch ($cmpoOpc) {
        case  'quinRegys':
            gen500RegsAleat();
            $cuantify_Now = "SELECT COUNT(*) FROM alumnos";
            $actual_quantify = mysqli_query($conexion,$cuantify_Now);
                 echo "Actualmente tienes: <br>", $actual_quantify,"Registros";

            
            break;

        case 'milRgys':
            gen1000RegsAleat();
            $cuantify_Now = "SELECT COUNT(*) FROM alumnos";
            $actual_quantify = mysqli_query($conexion,$cuantify_Now);
                echo "Actualmente tienes: <br>", $actual_quantify,"Registros";

            
            break;

        case  'mil500Regys':
            genMil500RegsAleat();
            $cuantify_Now = "SELECT COUNT(*) FROM alumnos";
            $actual_quantify = mysqli_query($conexion,$cuantify_Now);
              echo "Actualmente tienes: <br>", $actual_quantify,"Registros";

            
            break;

    }


function gen500RegsAleat(){

    $conexion = mysqli_connect("localhost", "root", "", "control_escolar_guide");
    echo "<h3>Generando 500 registros aleatorios</h3>";

    set_time_limit(0);
    $ar_nombre[0] = 'Armando';
    $ar_nombre[1] = 'Andres';
    $ar_nombre[2] = 'Bere Anel';
    $ar_nombre[3] = 'Camila';
    $ar_nombre[4] = 'Esmeralda';
    $ar_nombre[5] = 'Florenz';
    $ar_nombre[6] = 'Gabriela';
    $ar_nombre[7] = 'Hernán';
    $ar_nombre[8] = 'Israel';
    $ar_nombre[9] = 'Jaime';
    $ar_nombre[10] = 'Karla';
    $ar_nombre[11] = 'Lemus';
    $ar_nombre[12] = 'Martha';
    $ar_nombre[13] = 'Nadia';
    $ar_nombre[14] = 'Omar';
    $ar_nombre[16] = 'Perla';
    $ar_nombre[17] = 'Quevin';
    $ar_nombre[18] = 'Regina';
    $ar_nombre[19] = 'Ramón';
    $ar_nombre[20] = 'Rosa Isela';
    $ar_nombre[21] = 'Rosalia';
    $ar_nombre[22] = 'Roxana';
    $ar_nombre[23] = 'Sandra';
    $ar_nombre[24] = 'Samuel';
    $ar_nombre[25] = 'Sofia';
    $ar_nombre[27] = 'Tamara';
    $ar_nombre[28] = 'Tania';
    $ar_nombre[29] = 'Uriel';
    $ar_nombre[30] = 'Wendy';
    $ar_nombre[31] = 'Wilfrido';
    $ar_nombre[32] = 'Wiliam';
    $ar_nombre[33] = 'Xavier';
    $ar_nombre[34] = 'Ximena';
    $ar_nombre[35] = 'Zara';
    $ar_nombre[36] = 'Zamuel';
    $ar_nombre[37] = 'Zarahin';

    $ar_apellido[0] = 'Arzate';
    $ar_apellido[1] = 'Bartolo';
    $ar_apellido[2] = 'Carrillo';
    $ar_apellido[3] = 'Dimas';
    $ar_apellido[4] = 'Euclides';
    $ar_apellido[5] = 'Flores';
    $ar_apellido[6] = 'Gibrán';
    $ar_apellido[7] = 'Gómez';
    $ar_apellido[8] = 'Garcia';
    $ar_apellido[9] = 'Hernandez';
    $ar_apellido[10] = 'Ibañes';
    $ar_apellido[11] = 'Jaramillo';
    $ar_apellido[12] = 'Jimes';
    $ar_apellido[13] = 'Keuler';
    $ar_apellido[14] = 'López';
    $ar_apellido[15] = 'Montiel';
    $ar_apellido[16] = 'Martínez';
    $ar_apellido[17] = 'Maldonado';
    $ar_apellido[18] = 'Navarro';
    $ar_apellido[19] = 'Orduña';
    $ar_apellido[20] = 'Peralta';
    $ar_apellido[21] = 'Peña';
    $ar_apellido[22] = 'Quiroz';
    $ar_apellido[23] = 'Ríos';
    $ar_apellido[24] = 'Ramirez';
    $ar_apellido[25] = 'Solano';
    $ar_apellido[26] = 'Samano';
    $ar_apellido[27] = 'Tapia';
    $ar_apellido[28] = 'Ubeiga';
    $ar_apellido[29] = 'Villegas';
    $ar_apellido[30] = 'Waldos';
    $ar_apellido[31] = 'Wilson';
    $ar_apellido[32] = 'Winther';
    $ar_apellido[33] = 'Xocoyotzin';
    $ar_apellido[34] = 'Xoloitzcuincle';
    $ar_apellido[35] = 'Zamora';
    $ar_apellido[36] = 'Zariñana';
    $ar_apellido[37] = 'Zaldivar';


    for ($i = 0; $i < 500; $i++) {
        $nm_aleatorio = rand(0, 450);
        $nm_cuenta = $nm_aleatorio;
        $nm_aleatorio = rand(0, 37);
        $nm_Alumno = "'" . $ar_nombre[$nm_aleatorio] . "'";
        $nm_aleatorio2 = rand(0, 37);
        $ap_Paterno = "'" . $ar_apellido[$nm_aleatorio2] . "'";
        $nm_aleatorio3 = rand(0, 37);
        $ap_Materno = "'" . $ar_apellido[$nm_aleatorio3] . "'";

        $sql = "INSERT INTO alumno VALUES (NULL,$nm_cuenta,$ap_Paterno,$ap_Materno,$nm_Alumno)";

        $resultado = mysqli_query($conexion, $sql);
    }
}

function gen1000RegsAleat(){

    $conexion = mysqli_connect("localhost", "root", "", "control_escolar_guide");
    echo "<h3>Generando 1000 registros aleatorios</h3>";

    set_time_limit(0);
    $ar_nombre[0] = 'Armando';
    $ar_nombre[1] = 'Andres';
    $ar_nombre[2] = 'Bere Anel';
    $ar_nombre[3] = 'Camila';
    $ar_nombre[4] = 'Esmeralda';
    $ar_nombre[5] = 'Florenz';
    $ar_nombre[6] = 'Gabriela';
    $ar_nombre[7] = 'Hernán';
    $ar_nombre[8] = 'Israel';
    $ar_nombre[9] = 'Jaime';
    $ar_nombre[10] = 'Karla';
    $ar_nombre[11] = 'Lemus';
    $ar_nombre[12] = 'Martha';
    $ar_nombre[13] = 'Nadia';
    $ar_nombre[14] = 'Omar';
    $ar_nombre[16] = 'Perla';
    $ar_nombre[17] = 'Quevin';
    $ar_nombre[18] = 'Regina';
    $ar_nombre[19] = 'Ramón';
    $ar_nombre[20] = 'Rosa Isela';
    $ar_nombre[21] = 'Rosalia';
    $ar_nombre[22] = 'Roxana';
    $ar_nombre[23] = 'Sandra';
    $ar_nombre[24] = 'Samuel';
    $ar_nombre[25] = 'Sofia';
    $ar_nombre[27] = 'Tamara';
    $ar_nombre[28] = 'Tania';
    $ar_nombre[29] = 'Uriel';
    $ar_nombre[30] = 'Wendy';
    $ar_nombre[31] = 'Wilfrido';
    $ar_nombre[32] = 'Wiliam';
    $ar_nombre[33] = 'Xavier';
    $ar_nombre[34] = 'Ximena';
    $ar_nombre[35] = 'Zara';
    $ar_nombre[36] = 'Zamuel';
    $ar_nombre[37] = 'Zarahin';

    $ar_apellido[0] = 'Arzate';
    $ar_apellido[1] = 'Bartolo';
    $ar_apellido[2] = 'Carrillo';
    $ar_apellido[3] = 'Dimas';
    $ar_apellido[4] = 'Euclides';
    $ar_apellido[5] = 'Flores';
    $ar_apellido[6] = 'Gibrán';
    $ar_apellido[7] = 'Gómez';
    $ar_apellido[8] = 'Garcia';
    $ar_apellido[9] = 'Hernandez';
    $ar_apellido[10] = 'Ibañes';
    $ar_apellido[11] = 'Jaramillo';
    $ar_apellido[12] = 'Jimes';
    $ar_apellido[13] = 'Keuler';
    $ar_apellido[14] = 'López';
    $ar_apellido[15] = 'Montiel';
    $ar_apellido[16] = 'Martínez';
    $ar_apellido[17] = 'Maldonado';
    $ar_apellido[18] = 'Navarro';
    $ar_apellido[19] = 'Orduña';
    $ar_apellido[20] = 'Peralta';
    $ar_apellido[21] = 'Peña';
    $ar_apellido[22] = 'Quiroz';
    $ar_apellido[23] = 'Ríos';
    $ar_apellido[24] = 'Ramirez';
    $ar_apellido[25] = 'Solano';
    $ar_apellido[26] = 'Samano';
    $ar_apellido[27] = 'Tapia';
    $ar_apellido[28] = 'Ubeiga';
    $ar_apellido[29] = 'Villegas';
    $ar_apellido[30] = 'Waldos';
    $ar_apellido[31] = 'Wilson';
    $ar_apellido[32] = 'Winther';
    $ar_apellido[33] = 'Xocoyotzin';
    $ar_apellido[34] = 'Xoloitzcuincle';
    $ar_apellido[35] = 'Zamora';
    $ar_apellido[36] = 'Zariñana';
    $ar_apellido[37] = 'Zaldivar';


    for ($i = 0; $i <1000; $i++) {
        $nm_aleatorio = rand(0, 1000);
        $nm_cuenta = $nm_aleatorio;
        $nm_aleatorio = rand(0, 100);
        $nm_Alumno = "'" . $ar_nombre[$nm_aleatorio] . "'";
        $nm_aleatorio2 = rand(0, 37);
        $ap_Paterno = "'" . $ar_apellido[$nm_aleatorio2] . "'";
        $nm_aleatorio3 = rand(0, 37);
        $ap_Materno = "'" . $ar_apellido[$nm_aleatorio3] . "'";

        $sql = "INSERT INTO alumno VALUES (NULL,$nm_cuenta,$ap_Paterno,$ap_Materno,$nm_Alumno)";

        $resultado = mysqli_query($conexion, $sql);
    }
}

function genMil500RegsAleat(){

    $conexion = mysqli_connect("localhost", "root", "", "control_escolar_guide");
    echo "<h3>Generando 1500 registros aleatorios</h3>";

    set_time_limit(0);
    $ar_nombre[0] = 'Armando';
    $ar_nombre[1] = 'Andres';
    $ar_nombre[2] = 'Bere Anel';
    $ar_nombre[3] = 'Camila';
    $ar_nombre[4] = 'Esmeralda';
    $ar_nombre[5] = 'Florenz';
    $ar_nombre[6] = 'Gabriela';
    $ar_nombre[7] = 'Hernán';
    $ar_nombre[8] = 'Israel';
    $ar_nombre[9] = 'Jaime';
    $ar_nombre[10] = 'Karla';
    $ar_nombre[11] = 'Lemus';
    $ar_nombre[12] = 'Martha';
    $ar_nombre[13] = 'Nadia';
    $ar_nombre[14] = 'Omar';
    $ar_nombre[16] = 'Perla';
    $ar_nombre[17] = 'Quevin';
    $ar_nombre[18] = 'Regina';
    $ar_nombre[19] = 'Ramón';
    $ar_nombre[20] = 'Rosa Isela';
    $ar_nombre[21] = 'Rosalia';
    $ar_nombre[22] = 'Roxana';
    $ar_nombre[23] = 'Sandra';
    $ar_nombre[24] = 'Samuel';
    $ar_nombre[25] = 'Sofia';
    $ar_nombre[27] = 'Tamara';
    $ar_nombre[28] = 'Tania';
    $ar_nombre[29] = 'Uriel';
    $ar_nombre[30] = 'Wendy';
    $ar_nombre[31] = 'Wilfrido';
    $ar_nombre[32] = 'Wiliam';
    $ar_nombre[33] = 'Xavier';
    $ar_nombre[34] = 'Ximena';
    $ar_nombre[35] = 'Zara';
    $ar_nombre[36] = 'Zamuel';
    $ar_nombre[37] = 'Zarahin';

    $ar_apellido[0] = 'Arzate';
    $ar_apellido[1] = 'Bartolo';
    $ar_apellido[2] = 'Carrillo';
    $ar_apellido[3] = 'Dimas';
    $ar_apellido[4] = 'Euclides';
    $ar_apellido[5] = 'Flores';
    $ar_apellido[6] = 'Gibrán';
    $ar_apellido[7] = 'Gómez';
    $ar_apellido[8] = 'Garcia';
    $ar_apellido[9] = 'Hernandez';
    $ar_apellido[10] = 'Ibañes';
    $ar_apellido[11] = 'Jaramillo';
    $ar_apellido[12] = 'Jimes';
    $ar_apellido[13] = 'Keuler';
    $ar_apellido[14] = 'López';
    $ar_apellido[15] = 'Montiel';
    $ar_apellido[16] = 'Martínez';
    $ar_apellido[17] = 'Maldonado';
    $ar_apellido[18] = 'Navarro';
    $ar_apellido[19] = 'Orduña';
    $ar_apellido[20] = 'Peralta';
    $ar_apellido[21] = 'Peña';
    $ar_apellido[22] = 'Quiroz';
    $ar_apellido[23] = 'Ríos';
    $ar_apellido[24] = 'Ramirez';
    $ar_apellido[25] = 'Solano';
    $ar_apellido[26] = 'Samano';
    $ar_apellido[27] = 'Tapia';
    $ar_apellido[28] = 'Ubeiga';
    $ar_apellido[29] = 'Villegas';
    $ar_apellido[30] = 'Waldos';
    $ar_apellido[31] = 'Wilson';
    $ar_apellido[32] = 'Winther';
    $ar_apellido[33] = 'Xocoyotzin';
    $ar_apellido[34] = 'Xoloitzcuincle';
    $ar_apellido[35] = 'Zamora';
    $ar_apellido[36] = 'Zariñana';
    $ar_apellido[37] = 'Zaldivar';


    for ($i = 0; $i < 1500; $i++) {
        $nm_aleatorio = rand(0, 1000);
        $nm_cuenta = $nm_aleatorio;
        $nm_aleatorio = rand(0, 37);
        $nm_Alumno = "'" . $ar_nombre[$nm_aleatorio] . "'";
        $nm_aleatorio2 = rand(0, 37);
        $ap_Paterno = "'" . $ar_apellido[$nm_aleatorio2] . "'";
        $nm_aleatorio3 = rand(0, 37);
        $ap_Materno = "'" . $ar_apellido[$nm_aleatorio3] . "'";

        $sql = "INSERT INTO alumno VALUES (NULL,$nm_cuenta,$ap_Paterno,$ap_Materno,$nm_Alumno)";

        $resultado = mysqli_query($conexion, $sql);
    }
}
}

//}
?>