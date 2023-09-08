<?php 
$phrase="I love PHP programming";

if(strpos($phrase,"PHP") !== false) {

    echo "The phrase containes 'PHP'.";


}

else {

    echo "The phrase does not contain 'PHP'.";
}


echo "<br>";

$filename = "document.jpg";


if(substr($filename, -4) === ".pdf"){


    echo " $filename is a PDF file.";
}

else {

    echo " $filename is not a PDF file.";
}

?>