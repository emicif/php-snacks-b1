<!-- 
    - Snack 3
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

<h1>Snack n. 3</h1>
<h3>QUINDICI NUMERI CASUALI</h3>


 <?php


$arrayRandom = [];

    while(count($arrayRandom) < 15 ) {
        $numeroRandom = rand(1, 100);

        if(!in_array($numeroRandom, $arrayRandom)){
            $arrayRandom[] = $numeroRandom;
        }

        
    }

    echo('<pre>');
    var_dump($arrayRandom);
    echo('</pre>');
  

 ?>