<!-- 
    - Snack 4
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    
 -->

<h1>Snack n. 4</h1>



 <?php

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$paragrafi = explode('.', $text);
echo('<pre>');
//var_dump($paragrafo);


for ($i = 0; $i < count($paragrafi); $i++) {
    $paragrafo = trim($paragrafi[$i]);
    if (strlen($paragrafo)>0){
        echo($paragrafo . '.<br>');
    }
}




echo('</pre>');

 ?>