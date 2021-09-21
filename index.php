<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="style.css">
    <title>Pizzéria | Rendelés</title>
</head>

<body>

<div class="hero-image">

  <div class="hero-text">

    <h1 style="font-size:50px">Petrik Pizzéria</h1>

    <p style = "font-weight: bold">0 - 24 házhozszállítás</p>

    <a href="index.php"><button>Rendelés leadása</button></a>

  </div>

</div>

    <?php

    $KijelzonForm = TRUE;

    if (empty($_GET['nev']) || empty($_GET['cim'])|| empty($_GET['email'])|| empty($_GET['telefon'])|| !isset($_GET['meret'])) {

        echo "<p id='hiba'>Töltsd ki az összes mezőt!</p>";

    }

    else{

        echo "<p id ='siker'>Rendelését sikeresen rögzítettük!</p>";

    }

    if (!empty($_GET['nev']) && !empty($_GET['cim'])&& !empty($_GET['email'])&& !empty($_GET['telefon'])&& isset($_GET['meret'])) {

        $KijelzonForm = FALSE;
        $nev=$_GET['nev'];
        $cim=$_GET['cim'];
        $email=$_GET['email'];
        $telefon=$_GET['telefon'];
        $pizza=$_GET['pizzak'];
        $meret=$_GET['meret'];

        echo "<table id = 'reszletek'>
        <tr>
            <th>Név</th>
            <td>$nev</td>
        </tr>

        <tr>
            <th>Cím</th>
            <td>$cim</td>
        </tr>

        <tr>
            <th>E-mail</th>
            <td>$email</td>
        </tr>

        <tr>
            <th>Telefonszám</th>
            <td>$telefon</td>
        </tr>

        <tr>
            <th>Pizza</th>
            <td>$pizza,$meret</td>
        </tr>
        </table>";

    }
    else{

        echo "";

    }

    if ($KijelzonForm){

        ?>

        <form id="adatok" action="index.php">

            <h1>Üdvözöljük a Petrik Pizzeria weboldalán, adja le rendelését!</h1>

            <h2>Töltse ki az alábbi mezőket!</h2>

        <div>
            <input type="text" name="nev" placeholder="*Név:">
        </div>

        <div>
            <input type="text" name="cim" placeholder="*Cím:">
        </div>

        <div>
            <input type="email" name="email" placeholder="*E-mail cím:">
        </div>

        <div>
            <input type="tel" name="telefon" placeholder="*Telefonszám:">
        </div>

        <div>

            <h3>Válasszon az alábbi pizzáink közül!</h3>

            <select name="pizzak" id="pizzak">
                <option value="Margarita">Margarita</option>
                <option value="Songoku" selected>Son-Go-Ku</option>
                <option value="Húsimádó" selected>Húsimádó</option>
                <option value="Hawaii" selected>Hawaii</option>
                <option value="Magyaros" selected>Magyaros</option>
            </select>

        </div>

        <div>

            <h3>*Válasszon méretet!</h3>

            <input type="radio" id="35" name="meret" value="35 cm">
            <label for="35">35 cm</label>

            <input type="radio" id="42" name="meret" value="42 cm">
            <label for="42">42 cm</label>

            <input type="radio" id="60" name="meret" value="60 cm">
            <label for="60">60 cm</label>

        </div>
        
        <div>

            <h3>Speciális feltét:</h3>

            <input type="checkbox" id="laktozmentes" value="Laktózmentes feltét">

            <label for="laktozmentes">Laktózmentes feltét</label>

        </div>

        <div>

            <input type="submit" value="Küldés" >

        </div>

    </form>

    <?php   

    }
    ?>

</body>

</html>