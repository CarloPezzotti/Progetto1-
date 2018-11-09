var container = document.getElementById('container');
      var text = document.getElementById('rText');
      var goButton = document.getElementById('buttonGo');
      var resetButton = document.getElementById('buttonReset');
      var containerHeight = container.offsetHeight;
      var containerWidth = container.offsetWidth;
      function reposition(){
          container.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2))-25 + "px";
          container.style.marginLeft = (window.innerWidth / 2) - (containerWidth/2) + "px"; 
          text.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2 + 30))-25 + "px";
          text.style.marginLeft = (window.innerWidth / 2) - (containerWidth/2) + "px";
          goButton.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2) + containerHeight + 5)-25  + "px";
          goButton.style.marginLeft = ((window.innerWidth / 2) - (containerWidth/2)) + containerWidth - goButton.offsetWidth + "px"; 
          resetButton.style.marginTop = ((window.innerHeight / 2) - (containerHeight/2) + containerHeight + 5)-25  + "px";
          resetButton.style.marginLeft = (window.innerWidth / 2) - (containerWidth/2) + "px";
        }

      function checkName(object){
        var regex = /^[a-zA-Zàáâäãåąčćèéìíńòóùú ,.'-]+$/u;
        if(object.value.match(regex)){
          object.style.backgroundColor = "#33ff33";
          return true;
        }
        else
          object.style.backgroundColor = "#cc0000";
        return false;
      }
      function checkData(object){
        var birthdayDate = new Date(object.value);
        var age = getAge(birthdayDate);
        if(age>5 && age<100){
          object.style.backgroundColor = "#33ff33";
          return true;
        }
        else
          object.style.backgroundColor = "#cc0000";
        return false;
      }
      function getAge(DOB) {
        var today = new Date();
        var birthDate = new Date(DOB);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }    
        return age;
      }
      function checkNumber(object){
        object.value = object.value.replace(/ /g, "");
        object.value = object.value.replace(/-/g, "");
        var regexNumber = /^[\+]?[0-9-]{10,14}$/;
        if(object.value.match(regexNumber)){
          object.style.backgroundColor = "#33ff33";
          return true;
        }
        else
          object.style.backgroundColor = "#cc0000";
        return false;
      }
      function checkEmail(object){
        var email = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(object.value.match(email)){
            object.style.backgroundColor = "#33ff33";
            return true;
        }
        else
            object.style.backgroundColor = "#cc0000";
        return false;
      }

      function checkNap(object){
        var napRegex = /^\d+$/;
        if(object.value.match(napRegex) && (object.value.length >= 4 && object.value.length <= 5)){
            object.style.backgroundColor = "#33ff33";
            return true;
        }
        else
            object.style.backgroundColor = "#cc0000";
        return false;
      }

      function checkHouseNumber(object){
        var houseRegexWithText = /^\d{1,4}[A-z]{1,1}$/;
        var houseRegexOnlyNumber = /^\d{1,4}$/;
        if(object.value.match(houseRegexWithText) || object.value.match(houseRegexOnlyNumber)){
            object.style.backgroundColor = "#33ff33";
            return true;
        }
        else
            object.style.backgroundColor = "#cc0000";
        return false;
      }

      function checkBox(object){
        if(object.value.length <= 500 && !object.value.includes(";")){
            object.style.backgroundColor = "#33ff33";
            return true;
        }
        else
            object.style.backgroundColor = "#cc0000";
        return false;
      }

      function checkAll(){
        if(	!checkName(document.getElementById('name')) || 
        	!checkName(document.getElementById('surname')) ||
        	!checkData(document.getElementById('birthday')) ||
        	!checkName(document.getElementById('city')) ||
        	!checkHouseNumber(document.getElementById('ncivico')) ||
        	!checkName(document.getElementById('via')) ||
        	!checkNap(document.getElementById('nap')) ||
        	!checkEmail(document.getElementById('email')) ||
        	!checkNumber(document.getElementById('ntelefono')) ||
        	!checkBox(document.getElementById('hobby')) ||
        	!checkBox(document.getElementById('professione'))
       	)
          alert("Alcuni dati non sono corretti");
        else{
          document.getElementById("formRegistration").submit();
        }
      }

      function cleanAll(){
        var values = ["name","surname","birthday","ncivico","city","nap","ntelefono","email","hobby","professione","via"];
        for(var i = 0; i < values.length; i++){
          document.getElementById(values[i]).value = null;
        }
      }