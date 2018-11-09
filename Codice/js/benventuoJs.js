var container = document.getElementById('container');
      var button = document.getElementById('button');
      var containerHeight = container.offsetHeight;
      var containerWidth = container.offsetWidth;
      function reposition(){
          container.style.marginTop = (window.innerHeight / 2) - (containerHeight/2) + "px";
          container.style.marginLeft = (window.innerWidth / 2) - (containerWidth/2) + "px"; 
      }
      function goRegister(){
        window.location.replace("register.php");
      }