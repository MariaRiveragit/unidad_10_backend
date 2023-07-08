   <?php
include "edad_exacta.html";
    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if ($edad_actual >= 18) {
            echo "<h2>Es mayor de edad</h2>";
        }
        else if (18 > $edad_actual && 0 < $edad_actual) {
            echo "<h2>Es menor de edad</h2>";   
        }
        echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;
       
    }
?>

   