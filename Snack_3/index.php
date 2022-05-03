<!-- 
    - Snack 3
        Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->


<h3>QUINDICI NUMERI CASUALI</h3>


 <?php


    for ( $i = 0; $i < 15; $i++){
        echo('<ul>');
        echo('<li>');
        $array_random = rand(1, 100);
        echo($array_random);
        
        echo('</li>');
        echo('</ul>');
    }

 ?>