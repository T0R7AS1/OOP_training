<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "#1 Uzduotis <br>";
    include ("./Kibiras.php");
    $kibiras = new Kibiras;
    $kibiras->prideti1Akmeni();
    $kibiras->prideti1Akmeni();
    $kibiras->pridetiDaugAkmenu(100);
    $kibiras->pridetiDaugAkmenu(20);
    $kibiras->kiekPririnktaAkmenu();

    echo "<br><br><br>";
    echo "#2 Uzduotis <br>";
    include ("./Wallet.php");
    $pinigine = new Wallet();
    $pinigine->ideti(10);
    $pinigine->ideti(1);
    $pinigine->ideti(1);
    $pinigine->ideti(1);
    $pinigine->skaiciuoti();
    $pinigine->popieriniai();
    $pinigine->monetos();


    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";
    include ("./Stikline.php");
    $stikline = new Stikline();
    $stikline->setTuris(1000);
    $stikline2 = new Stikline();
    $stikline2->setTuris(1000);
    $stikline3 = new Stikline();
    $stikline3->setTuris(2);

    $stikline->ipilti($stikline->getTuris());
    echo 'pirmos stiklines kiekis: '.$stikline->getKiekis();
    echo'<br>';
    $skaiciavimas = $stikline->getKiekis() - $stikline2->getTuris();
    if ($skaiciavimas < 0) {
        $skaiciavimas = 0;
    }
    $stikline2->ipilti($stikline->getKiekis());
    echo 'perpilem is pirmos i antra <br>';
    $skaiciavimas1 = $stikline2->getKiekis() - $stikline3->getTuris();
    if ($skaiciavimas1 < 0) {
        $skaiciavimas1 = 0;
    }
    echo 'antros stiklines kiekis: '.$stikline2->getKiekis();
    $stikline->setKiekis($skaiciavimas);
    echo'<br>';
    echo 'pirmos stiklines kiekis: '. $stikline->getKiekis();
    $stikline3->ipilti($stikline2->getKiekis());
    echo ' <br>perpilem is antros i trecia ';
    echo'<br>';
    echo 'trecios stiklines kiekis: '. $stikline3->getKiekis();
    $stikline2->setKiekis($skaiciavimas1);
    echo'<br>';
    echo 'antros stiklines kiekis: '. $stikline2->getKiekis();
    echo '<br>';
    echo 'Po visu perpilimu gavosi:';
    echo'<br>';
    echo 'pirmos stiklines kiekis: '. $stikline->getKiekis() . ' o jos turis: ' . $stikline->getTuris();
    echo'<br>';
    echo 'antros stiklines kiekis: '. $stikline2->getKiekis() . ' o jos turis: ' . $stikline2->getTuris();;
    echo'<br>';
    echo 'trecios stiklines kiekis: '. $stikline3->getKiekis() . ' o jos turis: ' . $stikline3->getTuris();;
    

    echo "<br><br><br>";
    echo "#4 Uzduotis <br>";

    include ('./Krepsys.php');

    $grybauti = new Krepsys(500);

    $grybauti->eitiGrybauti();

    ?>
</body>
</html>