<?php  
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Registration</title>
</head>
<body onload="reposition()" onresize="reposition()">
  <h3 class="animated bounceInUp" id="rText">Registrazione</h3>
  <div class="animated bounceInUp" id="container" onresize="reposition()">
    <form id="formRegistration" action="<?php echo ("validation.php")?>" method="POST">
      <table>
        <tr>
          <th>
            <p>Nome:*</p>
            <input id="name" onkeyup="checkName(this)" type="text" name="name" placeholder="  Nome..." value='<?php echo $_POST["name"]?>' >
          </th>
          <th> 
            <p>Cognome:*</p>
            <input id="surname" onkeyup="checkName(this)" type="text" name="surname" placeholder="  Cognome..." value='<?php echo $_POST["surname"]?>'>
          </th>
        </tr>
        <tr>
            <th>
              <p>Data Di Nascita:*</p>
              <input id="birthday" onchange="checkData(this)" type="date" name="date" value='<?php echo $_POST["date"]?>'>
            </th>
            <th>
                <p>Città:*</p>
                <input id="city" onkeyup="checkName(this)" type="text" name="city" placeholder="  Città..." value='<?php echo $_POST["city"]?>'>
            </th>
        </tr>
        <tr>
        	<th>
              <p>Via:*</p>
                <input id="via" onkeyup="checkName(this)" type="text" name="via" placeholder="  Via..." value='<?php echo $_POST["via"]?>'>
            </th>
            <th>
                <p>Numero civico:*</p>
                <input id="ncivico" onkeyup='checkHouseNumber(this)' type="text" name="ncivico" placeholder="  N. Civico..." value='<?php echo $_POST["ncivico"]?>'>
            </th>
        </tr>
        <tr>
            <th>
                <p>Nap:*</p>
                <input id="nap" onkeyup='checkNap(this)' type="number" name="nap" placeholder="  Nap..." value='<?php echo $_POST["nap"]?>'>
            </th>
            <th>
                <p>Email:*</p>
                <input id="email" onkeyup="checkEmail(this)" type="email" name="email" placeholder="  Email..." value='<?php echo $_POST["email"]?>'>
            </th>
        </tr>
        <tr>
            <th>
                <p>Sesso:*</p>
                <input type="radio" name="gender" value="Maschio" <?php echo($_POST["gender"] == "Maschio"? "checked" : ($_POST["gender"] == "female"? "" : "checked"))?> > Maschio
                <input type="radio" name="gender" value="Femmina" <?php echo($_POST["gender"] == "Femmina"?  "checked" :  "")?>> Femmina
            </th>
            <th>
                <p>Numero di telefono:*</p>
                <input id="ntelefono" onkeyup="checkNumber(this)" type="type" name="ntelefono" placeholder="  N. Telefono..." value=<?php echo $_POST["ntelefono"]?>>
            </th>
        </tr>
        <tr>
            <th>
                <p>Hobby:</p>
                <textarea onkeyup="checkBox(this)" name="hobby" id="hobby"><?php echo htmlspecialchars($_POST["hobby"])?></textarea>
            </th>
            <th>
                <p>Professione</p>
                <textarea onkeyup="checkBox(this)" name="professione" id="professione"><?php echo htmlspecialchars($_POST["professione"])?></textarea>
            </th>
        </tr>       
      </table>
    </form>
  </div>
  <div id="buttonGo" class="animated bounceInUp" onclick="checkAll()">
      <p>Partecipa ora!</p>
  </div>
  <div id="buttonReset" class="animated bounceInUp" onclick="cleanAll()">
      <p>Cancella!</p>
  </div>
  <script src="js/validation.js"></script>
</body>
</html>