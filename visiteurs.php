<?php
$fichier = fopen("pays.txt", "r" );
echo "<pre>";
while(!feof($fichier))
{
    $ligne = fgets($fichier);
    echo "<p>$ligne</p>";
}
echo "</pre>";
fclose($fichier);
?>
