<?php
class conexionBD {

public static function execute($scriptSQL) {
    try {
        // Cadena Conexion a la BD
        $conexion = mysqli_connect(
            'localhost',
            'root',
            '',
            'databasecasetwo'
        ) or die('No se puede conectar a la BD');

        // Ejecución de Scripts a la BD
        $instruccionSQL = mysqli_query($conexion, $scriptSQL);
        $resultado = array(
            "exito" => $instruccionSQL,
            "error" => mysqli_error($conexion),
            "conexion" => $conexion
        );

        return $resultado;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
}

public static function getData($scriptSQL) {
    try {
        $resultado = self::execute($scriptSQL);
        $registros = array();

        if ($resultado['exito']) {
            while ($fila = mysqli_fetch_array($resultado['exito'], MYSQLI_ASSOC)) {
                $registros[] = $fila;
            }

            self::desconectar($resultado['conexion'], $resultado['exito']);
        }

        return $registros;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}


static function desconectar($conexion, $resultado) {
    try {
        if ($resultado instanceof mysqli_result) {
            mysqli_free_result($resultado);
        }
        mysqli_close($conexion);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
