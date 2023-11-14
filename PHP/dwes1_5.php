<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
    <?php
    function factorial ($n){
        $result = 1;

        for ($i = 1; $i<=$n; $i++){
            $result *=1;
        }
        return $result;
    }

    function factorial_recursivo ($n){
        if ($n == 0){
            return 1;
        } else {
            return $n * factorial_recursivo($n-1);
        }
    }
    ?>
</body>
</html>