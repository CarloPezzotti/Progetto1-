<?php
    $values = array("name","surname","date","ncivico","city","nap","ntelefono","email","gender","hobby","professione","via");
    $okWrite = true;
    for($i = 0; $i < sizeof($values);$i++){
        if(!isset($_POST[$values[$i]])){
            $okWrite = false;
        }
    }
    if(!$okWrite)
        header("Location: register.php");
    $line = "[".date("Y-m-d H:i:s")."]".";".$_POST["name"]. ";". $_POST["surname"]. ";".$_POST["date"]. ";".$_POST["ncivico"]. ";".$_POST["city"]. ";".$_POST["via"]. ";".$_POST["nap"]. ";".$_POST["ntelefono"]. ";".$_POST["email"]. ";".$_POST["gender"]. ";".$_POST["hobby"]. ";".$_POST["professione"];

    $fileTutteName = "registrazioni/Registrazioni_tutte.csv";
    $fileGiornaglieroName = "registrazioni/Registrazione_".date("Y").date("m").date("d").".csv";
    writeCsv($line,$fileTutteName);
    writeCsv($line,$fileGiornaglieroName);
    header("Location: ringraziamento.php");

    function writeCsv($text,$destination){
        if(!file_exists($destination)){
            $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        }
        $myfile = fopen($destination, "a+") or die("Unable to open file!");
        file_put_contents($destination,$text."\r",FILE_APPEND);
        fclose($myfile);
    }
?>