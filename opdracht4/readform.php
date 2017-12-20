<?php
$name = $_POST['name'];
$food = $_POST['food'];
$age = $_POST['age'];

echo 'Hey, hoe gaat het ' . $name . '. Ik zie dat je  ' . $food . ' lekker vind.' . '<br>' ;

switch ($food) {
    case "pizza":
        echo "Pizza is lekkerder met ketchup erop" . '<br>';
        break;
    case "appels":
        echo "Dat is een simpel antwoord?" . '<br>';
        break;
    case "lucht":
        echo "Ik adem ook, dat is geen eten." . '<br>';
        break;
    case "patat":
        echo "Dat is ook wel lekker ja." . '<br>';
        break;
    case "maceroni":
        echo "Vind ik zelf niet lekker, maar oké." . '<br>';
        break;
    default:
        echo "Dat is op zich ook wel lekker." . '<br>';
}

switch ($age) {
    case 18;
        echo 'En je bent ' . $age . ' jaar oud. Je bent oud genoeg om een biertje te pakken bij je ' . $food . '<br>';
        break;
    case 0;
        echo 'En je bent ' . $age . ' jaar oud. Hoe gebruik je een computer? ' . '<br>';
        break;
    case 60;
        echo 'En je bent ' . $age . ' jaar oud. Dan ben je best wel oud' . '<br>';
        break;
    case 17;
        echo 'En je bent ' . $age . ' jaar oud. Je bent niet oud genoeg om een biertje te pakken bij je ' . $food . '<br>';
        break;
    case 100;
        echo 'En je bent ' . $age . ' jaar oud. Je bent bijna dood.' . '<br>';
        break;
    default:
        echo 'En je bent ' . $age . ' jaar oud.' . '<br>';

}

switch ($name) {
    case "Frank":
        echo "De maker van deze pagina heeft dit ingevuld" . '<br>';
        break;
    case "Joey":
        echo "Een geweldige docent heeft dit formulier ingevuld." . '<br>';
        break;
    case "Nick":
        echo "Ja Nick, het werkt." . '<br>';
        break;
    case "Harun":
        echo "Ja Harun, het werkt." . '<br>';
        break;
    case "Maurice":
        echo "Ja Maurice, het werkt." . '<br>';
        break;
    default:
        echo "Bedankt voor het invullen!" . '<br>';
}
?>