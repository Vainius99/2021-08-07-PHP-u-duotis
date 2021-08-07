<?php

// 1. Sukurti ir sustilizuotį tokią lentelę pagal pavyzdį:
// https://codepen.io/motiejus1/pen/rNyWPey
// 2. Sukurti dvimatį masyvą, kuriame būtų informacija apie knygos kategoriją, bei knygos priklausančios kategorijai.
// Masyvo struktūrą sugalvoti patiems. Testavimui sukurti bent 5 kategorijas, kurios turi nuo 5 iki 15 knygų.
// Pavyzdinė informacija apie knygą: pavadinimas, autorius, puslapių skaičius, kategorija
// 3. Virš sukurtos lentelės atvaizduoti tiek mygtukų, kiek yra kategorijų masyve, mygtuko pavadinimas - kategorijos pavadinimas. Mygtukai turi būti atvaizduoti su PHP pagal masyvą. Taip pat sukurti mygtuką "Rodyti visas knygas".
// 4. Masyvo informaciją atvaizduoti lentelėje.
// 5. Sukurti mygtukai turi išfiltruoti knygas. T.y. paspaudus kategorijos mygtuką, lentelėje turi būti rodomos tik tos knygos, kurios priklauso tai kategorijai. Paspaudus mygtuką "Rodyti visas knygas", atvaizduojamos visos knygos.  

function kategorizavimas($PerGet) {

$kategorija1 = array (
        array(
            "autorius" => "autorius1",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius1",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius1",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius1",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
        ),           
        array(            
            "autorius" => "autorius1",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",        
        ),
    );

    $kategorija2= array (
        array(
            "autorius" => "autorius2",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius2",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius2",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius2",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius2",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
    );

    $kategorija3= array (
        array(
            "autorius" => "autorius3",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius3",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius3",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius3",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",            
        ),
        array(
            "autorius" => "autorius3",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
    );

    $kategorija4= array (
        array(
            "autorius" => "autorius4",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius4",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius4",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius4",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius4",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
    );

    $kategorija5 = array (
        array(
            "autorius" => "autorius5",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius5",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius5",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius5",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
        array(
            "autorius" => "autorius5",
            "pavadinimas" => "pavadinimas".rand(1000,9999),
            "psl_skaicius" => rand(100,999)." psl.",
            ),
    );

            if($PerGet == "1") {
                $kategorija = $kategorija1;
            } else if ($PerGet  == "2") {
                $kategorija = $kategorija2;
            } else if ($PerGet  == "3") {
                $kategorija = $kategorija2;
            } else if ($PerGet  == "4") {
                $kategorija = $kategorija4;
            } else if ($PerGet  == "5") {
                $kategorija = $kategorija5;
            } else if ($PerGet  == "6") {
                $kategorija = array_merge($kategorija1,$kategorija2,$kategorija3,$kategorija4,$kategorija5);
            }

            foreach ($kategorija as $eilute) 
            {
            echo "<tr>";
                foreach ($eilute as $stulpelis) {
                    echo "<td>";
                    echo $stulpelis;
                    echo "</td>";
                    }
            echo "</tr>";
            }    
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  background-color: #fff;
  /* padding: 20px; */
}
td {
    font-size: 25x;

}

.top-information,
.bottom-information {
  padding: 0 20px;
}

table tbody tr:hover,
table tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.05);
}
    </style>
</head>
<body>
<div>
    <form action="" method="get">
        <button type="submit" name="kategorija1">kategorija1</button>
        <button type="submit" name="kategorija2">kategorija2</button>
        <button type="submit" name="kategorija3">kategorija3</button>
        <button type="submit" name="kategorija4">kategorija4</button>
        <button type="submit" name="kategorija5">kategorija5</button>
        <button type="submit" name="visi">Visi</button>
    </form>
</div>
<table id="hoverable-data-table" class="table hover nowrap" style="width:100%">
<tbody>
    <tr>
        <td><h3>Aurotius</h3></td>
        <td><h3>Pavadinimas</h3></td>
        <td><h3>Puslapiu Skaicius</h3></td>
    </tr>
<?php 
if(isset($_GET["kategorija1"])) {
    $PerGet = 1;
    kategorizavimas($PerGet);
} 
else if(isset($_GET["kategorija2"])) {
    $PerGet = 2;
    kategorizavimas($PerGet);
} 
else if(isset($_GET["kategorija3"])) {
    $PerGet = 3;
    kategorizavimas($PerGet);
} 
else if(isset($_GET["kategorija4"])) {
    $PerGet = 4;
    kategorizavimas($PerGet);
} 
else if(isset($_GET["kategorija5"])) {
    $PerGet = 5;
    kategorizavimas($PerGet);
} 
else if(isset($_GET["visi"])) {
    $PerGet = 6;
    kategorizavimas($PerGet);
} else {
    $PerGet = 6;
    kategorizavimas($PerGet);
}
?>
    </tbody>
</table>    
</body>
</html>