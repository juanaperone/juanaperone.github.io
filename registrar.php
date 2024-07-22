<?php
include('con_db.php');  // Incluir el archivo de conexión a la base de datos

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1) {
        $name = $_POST['name'];
        
        // Definir $fechareg (por ejemplo, la fecha actual)
        $fechareg = date('Y-m-d');  // Esto establece $fechareg como la fecha actual en formato YYYY-MM-DD
        
        $consulta = "INSERT INTO `tesis` (nombre, fecha_reg) VALUES ('$name', '$fechareg')";
        $resultado = mysqli_query($conex, $consulta);
        
        if ($resultado) {
            // Mostrar un mensaje de éxito si la inserción fue exitosa
            echo '<h3 class="ok">¡Gracias por tu respuesta!</h3>';
        } else {
            // Mostrar un mensaje de error si hubo un problema con la consulta SQL
            echo '<h3 class="error">Error al registrar la respuesta.</h3>';
        }
    } else {
        // Mostrar un mensaje si $_POST['name'] está vacío
        echo '<h3 class="error">Por favor, ingresa tu respuesta.</h3>';
    }
}
?>

