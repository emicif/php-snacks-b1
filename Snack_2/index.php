<?php

//phpinfo();

?>

<!-- 
    - Snack 2
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
        che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
   
 -->


 <!-- 
    array_key_exists(key, array) - restituisce true se esiste la chiave nell'array, altrimenti false
    in_array(value, array) - restituisce true se il valore è presente nell’array, altrimenti false
    array_keys(array) - restituisce tutte le chiavi dell’array
    array_merge(array1, array2 ...) - unisce due o più array
    array_search(value, array) - cerca il valore all’interno di un array e restituisce la chiave
    della prima occorrenza trovata; se il valore non è presente restituisce false
  -->
<h1>Snack n. 2</h1>


<?php

//$bannedWord = $_GET ['word'];


//name

    if(isset($_GET['name'])) {
        $name = $_GET['name'];
        if(strlen($name) >= 3) {
            echo('<pre>');
            echo('Name valido');
            echo('</pre>');
        }else {
            echo('<pre>');
            echo('Name non valido, inserire tre caratteri');
            echo('</pre>');
        }
        
    }




//mail
    if(isset($_GET['mail'])) {
        $email = $_GET['mail'];
        if(strpos($email, '@')==false || strpos($email, '.')==false){
            echo('Indirizzo email non valido, manca la @ o il .');
        }else{
            echo('<pre>');
            echo('E-mail valida');
            echo('</pre>');
        }
    }
 


//age
if(isset($_GET['age'])) {
    $age = $_GET['age'];
    if(is_numeric($age)) {
        echo('<pre>');
        echo('Age valido');
        echo('</pre>');
    }else {
        echo('<pre>');
        echo('Age non valido, inserire un numero');
        echo('</pre>');
    }
    
}


?>

<p>Il tuo nome è <?php echo($name)?></p>
<p>Il tuo nome è <?php echo($email)?></p>
<p>Il tuo nome è <?php echo($age)?></p>
