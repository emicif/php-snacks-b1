<?php

//phpinfo();

?>

<!-- 
    - Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, 
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
   
 -->


 <!-- 
    array_key_exists(key, array) - restituisce true se esiste la chiave nell'array, altrimenti false
    in_array(value, array) - restituisce true se il valore è presente nell’array, altrimenti false
    array_keys(array) - restituisce tutte le chiavi dell’array
    array_merge(array1, array2 ...) - unisce due o più array
    array_search(value, array) - cerca il valore all’interno di un array e restituisce la chiave
    della prima occorrenza trovata; se il valore non è presente restituisce false
  -->
<h1>Snack n. 1</h1>

<h3>Basket</h3>

<?php

    $basket = [
        ['squadraCasa' => 'Timberwolves', 'squadraOspiti' => 'Grizzlies', 'puntiCasa' => "119", 'puntiOspiti' => '118'],
        ['squadraCasa' => 'Bulls', 'squadraOspiti' => 'Bucks', 'puntiCasa' => "95", 'puntiOspiti' => '119'],
        ['squadraCasa' => 'Hawks', 'squadraOspiti' => 'Heat', 'puntiCasa' => "86", 'puntiOspiti' => '110'],
        ['squadraCasa' => 'Pelicans', 'squadraOspiti' => 'Suns', 'puntiCasa' => "118", 'puntiOspiti' => '103'],
       
    ];

  

    for ($i = 0; $i < count($basket); $i++){
        echo('<h3>' . 'Giornata n.' . $i . '</h3>');
        echo($basket[$i]['squadraCasa'] . ' - ' . $basket[$i]['squadraOspiti'] . ' | ' . $basket[$i]['puntiCasa'] . ' - ' . $basket[$i]['puntiOspiti']);
    }
    


?>