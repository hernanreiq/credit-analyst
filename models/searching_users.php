<?php
    if(isset($_GET['search'])){
        require_once 'connect_database.php';
        $objetivo_buscar = mysqli_real_escape_string($connect_db, $_GET['search']);
        $consulta = mysqli_query($connect_db, "SELECT * FROM usuarios WHERE Nombres LIKE '$objetivo_buscar%' OR Apellidos LIKE '$objetivo_buscar%' OR Email LIKE '$objetivo_buscar%' OR ID_Usuario LIKE '$objetivo_buscar%'");
 
        if(mysqli_num_rows($consulta) >= 1){ //COMPROBAR QUE EXISTA UN RESULTADO ANTES DE IMPRIMIRLO
            while($resultados_consulta = mysqli_fetch_array($consulta)){  
                echo '<tr>';
                    echo '<th scope="row">'.$resultados_consulta[0].'</th>';
                    echo '<td>'.$resultados_consulta[4].'</td>';
                    echo '<td>'.$resultados_consulta[5].'</td>';
                    echo '<td>'.$resultados_consulta[2].'</td>';
                    echo '<td><a href="?view-user-id='.$resultados_consulta[0].'" class="btn btn-info">Ver <i class="far fa-eye"></i></a></td>';
                echo '</tr>';   
            }
        } else {
            echo 'No';
        }
    }
?>