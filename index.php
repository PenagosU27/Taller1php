<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Trabajo</title>

    </head>
    <body>
        <h1>Primer ejercicio.</h1>
        <form name="form1" method="POST" action="index.php">
            Ingrese un numero : <input type="text" name="txtnumero1">
            <br>
            <br>
           <input type="submit" name="calcular" value="Calcular">   
         </form>
         <?php
         if(isset($_POST["calcular"])) {
             $num = $_POST["txtnumero1"];
             function factorial($num){
                 if($num <=1){
                     return 1;
                 }
                 return $num * factorial($num - 1);
             }
             echo  factorial($num);
         }
         echo "<br>"
         
         ?>
         
         <h2>Tercer ejercicio.</h2>
         <?php
           $array = array(3,4,6,8,5);
            $total = 0;
            foreach ($array as $value){
                $total += $value;
            }
            echo "El total es: " . $total;
         ?>
         <h3>Cuarto ejercicio.</h3>

            <?php
            $datos[0][0] = "45";
            $datos[0][1] = "4";
            $datos[0][2] = "6";
            $datos[0][3] = "7";
            $datos[1][0] = "23";
            $datos[1][1] = "45";
            $datos[1][2] = "67";
            $datos[1][3] = "1";
            $datos[2][0] = "3";
            $datos[2][1] = "4";
            $datos[2][2] = "7";
            $datos[2][3] = "9";
            $datos[3][0] = "5";
            $datos[3][1] = "4";
            $datos[3][2] = "3";
            $datos[3][3] = "2";
            $datos[4][0] = "1";
            $datos[4][1] = "2";
            $datos[4][2] = "1";
            $datos[4][3] = "4";

            $pares = array();
            $impares = array();
            for($i = 0 ; $i<5 ; $i++ ) {

                for ($j = 0 ; $j<4 ; $j++ ) {
                
                    if(($datos[$i][$j] % 2) == 0) {

                        $pares[] = $datos[$i][$j];   
                    }
                    else {            
                        $impares[] = $datos[$i][$j];        
                    }

                }
            }  

            foreach($pares as $valor) {
                Echo "los numeros pares son: ";
                echo $valor . "<br>"; 
            }

                foreach($impares as $valor2) {
                    Echo "los numeros impares son: ";
                    echo $valor2 . "<br>"; 
                }
            ?>
            
            
    </body>
</html>