<?php
    $flag = false;
    if(checkAll()){
        $flag = true;
        $values = array("name","surname","date","ncivico","city","nap","ntelefono","email","gender","hobby","professione","via");
        echo "<form action='confirm.php' method='POST' id='hiddenForm'>";
        for($i = 0; $i < sizeof($values); $i++){
            echo "<input type='hidden' name=".$values[$i]." value=\"".htmlspecialchars($_POST[$values[$i]])."\">";
        }
        echo "</form>";
        echo "<script>document.getElementById('hiddenForm').submit()</script>";
    }else
        header("Location: register.php");

    function checkName($object){
        $regex = '/^[a-zA-Zàáâäãåąčćèéìíńòóùú ,.\'-]+$/u';
        if(preg_match($regex,$object)){
            return true;
        }
        return false;
    }
    function checkData($object){
        $tmpDate = explode("-",$object);
        $year = $tmpDate[0];
        $mount = $tmpDate[1];
        $day = $tmpDate[2];
        $birthdayDate = $mount."/".$day."/".$year;
        $age = getAge($birthdayDate);
        if($age>5 && $age<100){
          return true;
        }
        return false;
    }

    function getAge($date){
        $birthDate = "12/17/1983";
        $birthDate = explode("/", $birthDate);
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
        return $age;
    }

    function checkNumber($object){
        $object = trim($object," ");
        $object = trim($object,"-");
        $regex = '/^[\+]?[0-9-]{10,14}$/';
        if(preg_match($regex,$object)){
          return true;
        }
        return false;
    }

    function checkEmail($object){
        $regex = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        if(preg_match($regex,$object)){
            return true;
        }
        return false;
    }
    
    function checkNap($object){
        $regex = '/^\d+$/';
        if(preg_match($regex,$object) && (strlen($object) >= 4 && strlen($object) <= 5)){
            return true;
        }
        return false;
    }

    function checkHouseNumber($object){
        $houseRegexWithText = '/^\d{1,4}[A-z]{1,1}$/';
        $houseRegexOnlyNumber = '/^\d{1,4}$/';
        if(preg_match($houseRegexWithText,$object) || preg_match($houseRegexOnlyNumber,$object)){
            return true;
        }
        return false;
    }

    function checkBox($object){
        return (strlen($object) <= 500 && !strpos($object, ';'));
    }

    function checkGender($object){
        if($object == "male" || $object == "female")
            return true;
        return false;
    }

    function checkAll(){
        $values = array("name","surname","date","ncivico","city","nap","ntelefono","email","gender","hobby","professione","via");
        return (checkName($_POST["name"]) && checkName($_POST["surname"]) && checkName($_POST["via"]) && 
            checkData($_POST["date"]) && checkHouseNumber($_POST["ncivico"]) && checkName($_POST["city"]) &&
            checkNap($_POST["nap"]) && checkNumber($_POST["ntelefono"]) && checkEmail($_POST["email"]) &&
            checkGender($_POST["gender"] && checkBox($_POST["hobby"]) && checkBox($_POST["professione"]))
        );
    }

?>
</body>
</html>
