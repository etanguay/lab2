
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

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) { echo "<script> alert(\"Tu as encore Internet Explorer. C'est decevant\"); </script>";}
?>