<?php
    if($_SESSION['usuario-online'][1] == 'Usuario'){
        $id_usuario = $_SESSION['usuario-online'][0];
    }
    $buscar_recargas = mysqli_query($connect_db, "SELECT * FROM recargas WHERE ID_Usuario = '$id_usuario'");
    if(mysqli_num_rows($buscar_recargas) == 0){
        echo '<div class="card-body"><h3 class="text-center">Este usuario aún no ha recargado saldo en su cuenta.</h3>';
    } else {
        echo '<div class="card-body p-0"><table class="table text-center table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Monto recargado</th>
                        <th scope="col">Deuda pagada</th>
                        <th scope="col">Fecha de la recarga</th>
                    </tr>
                </thead>
            <tbody>';
            while($resultados_recargas = mysqli_fetch_array($buscar_recargas)){
                echo '<tr>';
                    echo '<td><span class="badge badge-success">RD$ '.number_format($resultados_recargas[2], 0, '.', ',').'</span></td>';
                    echo '<td><span class="badge badge-danger">RD$ '.number_format($resultados_recargas[3], 0, '.', ',').'</span></td>';
                    echo '<td>'.$resultados_recargas[4].'</td>';
                echo '</tr>';
            }
        echo '</tbody>
            </table>';
    }
?>