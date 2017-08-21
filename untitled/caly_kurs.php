<?php
// filmik_189

//echo "Hi there: ".$_GET['name']."!";

//print_r($_GET);

if (is_numeric($_GET['number']) && $_GET['number'] > 0 && $_GET['number'] == round($_GET['number'], 0)) {

    $i = 2;

    $isPrime = true;

    while ($i < $_GET['number']) {

        if ($_GET['number'] % $i == 0) {

            $isPrime = false;

        }

        $i++;

    }

    if ($isPrime) {

        echo "<p>" . $i . " jest liczbą pierwszą!</p>";

    } else {

        echo "<p>" . $i . " nie jest liczbą pierwszą!</p>";

    }

} else if ($_GET) {

    echo "Wpisz liczbę całkowitą!";

}

// filmik_191

//print_r($_POST);

if ($_POST) {

    $family = array("Rob", "Kirsten", "Tommy", "Lee", "John");

    $isKnown = false;

    foreach ($family as $value) {

        if ($value == $_POST['name']) {

            $isKnown = true;

        }

    }

    if ($isKnown) {

        echo "Hi there " . $_POST['name'] . "!";

    } else {

        echo "I don't know you!";

    }
}

/*filmik_193

$emailTo = "przem11122@o2.pl";

$subject = "WYSYLKA PIERWSZEGO E-MAILA";

$body = "I think you're great";

$headers = "From: rob@robpercival.co.uk";

if (mail($emailTo, $subject, $body, $headers)) {

    echo "The mail was sent success!";

} else {

    echo "E-mail nie został wysłany";

}
*/

//filmik_195



?>

//filmik_189

<p>Please enter a whole number</p>

<form>

    <input type="text" name="number">

    <input type="submit" value="GO!">

</form>

//filmik_191

<p>Please enter a whole number</p>

<form method="post">

    <input type="text" name="number">

    <input type="submit" value="GO!">

</form>

<form method="post">

    <p>What is your name?</p>

    <p><input type="text" name="name"></p>

    <p><input type="submit" value="Submit"></p>

</form>

//filmik_195

