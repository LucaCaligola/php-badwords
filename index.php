<?php

$variabile = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut nisi saepe sunt vero dolore nihil quisquam consequuntur cupiditate. Ipsam nisi, aut atque vel obcaecati nostrum iure laboriosam numquam autem. Eum?";

$badword = $_GET['badword'];

$censured = str_replace($badword, "***", $variabile);

?>


<h1>
    Testo:
</h1>


<p>
    <?php echo $variabile ?>
</p>

<h2> Lunghezza paragrafo: <?php echo strlen($variabile)?></h2>


<hr>


<h1>Testo Censurato</h1>

<p>
    <?php echo $censured ?>
</p>

<h2> Lunghezza paragrafo: <?php echo strlen($censured)?></h2>