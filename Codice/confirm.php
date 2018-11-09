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
		
	
	$page = "
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<link rel='stylesheet' href='css/animate.css'>
	<link rel='stylesheet' href='css/confirm.css'>
</head>
<body  onresize='reposition()' onload='reposition()'>
		<table id='container' style='position: absolute'>
		  <tr id='top'>
		    <td><b>Campo</b></td>
		    <td><b>Dato</b></td>
		  </tr>
		  <tr>
		    <td>Nome</td>
		    <td class='dato'>".$_POST['name']."</td>
		  </tr>
		  <tr>
		    <td>Cognome</td>
		    <td class='dato'>".$_POST['surname']."</td>
		  </tr>
		  <tr>
		    <td>Data di nascita</td>
		    <td class='dato'>".$_POST['date']."</td>
			</tr>
			<tr>
		    <td>Via</td>
		    <td class='dato'>".$_POST['via']."</td>
		  </tr>
		  <tr>
		    <td>No. civico</td>
		    <td class='dato'>".$_POST['ncivico']."</td>
		  </tr>
		  <tr>
		    <td>Città</td>
		    <td class='dato'>".$_POST['city']."</td>
		  </tr>
		  <tr>
		    <td>Nap</td>
		    <td class='dato'>".$_POST['nap']."</td>
		  </tr>
		  <tr>
		    <td>No. telfono</td>
		    <td class='dato'>".$_POST['ntelefono']."</td>
		  </tr>
		  <tr>
		    <td>Email</td>
		    <td class='dato'>".$_POST['email']."</td>
		  </tr>
		  <tr>
		    <td>Sesso</td>
		    <td class='dato'>".$_POST['gender']."</td>
		  </tr>
		  <tr>
		    <td colspan='2' ><center>Hobby</center></td>
			</tr>
			<tr>
				<td colspan='2' class='dato'><center>".htmlspecialchars($_POST['hobby'])."</center></td>
			</tr>
		  <tr>
		    <td colspan='2' ><center>Professione</center></td>
			</tr>
			<tr>
				<td colspan='2' class='dato'><center>".htmlspecialchars($_POST['professione'])."</center></td>
			</tr>
		</table>
		<center>
		<form action='register.php' method='POST'>
			<input type='hidden' name=name value='".$_POST['name']."'>
			<input type='hidden' name=surname value='".$_POST['surname']."'>
			<input type='hidden' name=date value='".$_POST['date']."'>
			<input type='hidden' name=ncivico value='".$_POST['ncivico']."'>
			<input type='hidden' name=city value='".$_POST['city']."'>
			<input type='hidden' name=nap value='".$_POST['nap']."'>
			<input type='hidden' name=ntelefono value='".$_POST['ntelefono']."'>
			<input type='hidden' name=email value='".$_POST['email']."'>
			<input type='hidden' name=gender value='".$_POST['gender']."'>
			<input type='hidden' name=hobby value=\"".htmlspecialchars($_POST['hobby'])."\">
			<input type='hidden' name=professione value=\"".htmlspecialchars($_POST['professione'])."\">
			<input type='hidden' name=via value='".$_POST['via']."'>
			<input type='submit' name='correggi' value='Correggi' id='correggi'>
		</form>
		<br>
		<form action='csvWriter.php' method='POST'>
			<input type='hidden' name=name value='".$_POST['name']."'>
			<input type='hidden' name=surname value='".$_POST['surname']."'>
			<input type='hidden' name=date value='".$_POST['date']."'>
			<input type='hidden' name=ncivico value='".$_POST['ncivico']."'>
			<input type='hidden' name=city value='".$_POST['city']."'>
			<input type='hidden' name=nap value='".$_POST['nap']."'>
			<input type='hidden' name=ntelefono value='".$_POST['ntelefono']."'>
			<input type='hidden' name=email value='".$_POST['email']."'>
			<input type='hidden' name=gender value='".$_POST['gender']."'>
			<input type='hidden' name=hobby value=\"".htmlspecialchars($_POST['hobby'])."\">
			<input type='hidden' name=professione value=\"".htmlspecialchars($_POST['professione'])."\">
			<input type='hidden' name=via value='".$_POST['via']."'>
			<input type='submit' name='avanti' value='Avanti' id='avanti'>
		</form>
		
		</center>
	<script type='text/javascript'>
		var container = document.getElementById('container');
		var correggi = document.getElementById('correggi');
		var avanti = document.getElementById('avanti');
	   	var containerHeight = container.offsetHeight;
	    var containerWidth = container.offsetWidth;
	    function reposition(){
	    	container.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2)) + 'px';
	        container.style.marginLeft = (window.innerWidth / 2) - (containerWidth/2) + 'px'; 
	        correggi.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2) + containerHeight + 5)  + 'px';
	   	}
	</script>
</body>
</html>";
echo $page;
?>