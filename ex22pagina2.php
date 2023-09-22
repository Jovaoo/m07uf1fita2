<?php
    $quantitat = $_POST["quantitat"];

    for ($i = 1; $i <= $quantitat; $i++) {
        echo "<a href=\"ex22pagina3.php?quantitat=$i\"> Comanda".$i."</a><br>";
    }
?>