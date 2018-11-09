<!DOCTYPE html>
<html>
<head>
	<title>Iscrizioni</title>
	<link rel='stylesheet' href='css/animate.css'>
	<link rel='stylesheet' href='css/confirm.css'>
</head>
<body  onresize='reposition()' onload='reposition()'>
    <center>
    <?php
        $fileGiornaglieroName = "registrazioni/Registrazione_".date("Y").date("m").date("d").".csv";
        if(file_exists($fileGiornaglieroName)){
            $fileContent = file_get_contents($fileGiornaglieroName);
            $lines = explode("\r",$fileContent);
            echo "<h1>Iscrizioni giornaliere!</h1>";
            for($i = 0; $i < sizeof($lines)-1; $i++){   
                $line = explode(";",$lines[$i]);
                echo "<table id='container'>
                    <tr id='top'>
                        <td><b>Campo</b></td>
                        <td><b>Dato</b></td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td class='dato'>".$line[1]."</td>
                    </tr>
                    <tr>
                        <td>Cognome</td>
                        <td class='dato'>".$line[2]."</td>
                    </tr>
                    <tr>
                        <td>Data di nascita</td>
                        <td class='dato'>".$line[3]."</td>
                        </tr>
                        <tr>
                        <td>Via</td>
                        <td class='dato'>".$line[6]."</td>
                    </tr>
                    <tr>
                        <td>No. civico</td>
                        <td class='dato'>".$line[4]."</td>
                    </tr>
                    <tr>
                        <td>Città</td>
                        <td class='dato'>".$line[5]."</td>
                    </tr>
                    <tr>
                        <td>Nap</td>
                        <td class='dato'>".$line[7]."</td>
                    </tr>
                    <tr>
                        <td>No. telfono</td>
                        <td class='dato'>".$line[8]."</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td class='dato'>".$line[9]."</td>
                    </tr>
                    <tr>
                        <td>Sesso</td>
                        <td class='dato'>".$line[10]."</td>
                    </tr>
                    <tr>
                        <td colspan='2' ><center>Hobby</center></td>
                        </tr>
                        <tr>
                            <td colspan='2' class='dato'><center>".$line[11]."</center></td>
                        </tr>
                    <tr>
                        <td colspan='2' ><center>Professione</center></td>
                        </tr>
                        <tr>
                            <td colspan='2' class='dato'><center>".$line[12]."</center></td>
                        </tr>
                    </table>";
            }
        }else{
            echo "Nessuna iscrizione oggi";
        }
    ?>
    <br>
    <div id="buttonReturn" onclick="window.location.replace('index.html')">
      <p>Torna alla home!</p>
    </div>
    <br>
    </center>
</body>
</html>