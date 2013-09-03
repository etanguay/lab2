
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
function Iexplorer()
{

    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == FALSE)
        return false;

    else
    {
        echo "<script> alert(\"Tu as encore Internet Explorer. C'est decevant\"); </script>";
        return true;
    }
}

Iexplorer();

?>

<img src='http://lh5.ggpht.com/_LEDL5eT3epM/SvABDxOdcQI/AAAAAAAAAPc/YkihxiU5Pm8/img_4.jpg'>;