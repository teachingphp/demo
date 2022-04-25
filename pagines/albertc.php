<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/albertc.css?v=<?php echo time(); ?>">
        <script src="https://kit.fontawesome.com/50e196cf93.js" crossorigin="anonymous"></script>
        <title>DibusAlbertLandia</title>
    </head>
    <body>
        <!--https://www.w3schools.com/tags/ 
    https://codepen.io/freeCodeCamp/pen/MWyBapv
    https://forum.freecodecamp.org/t/how-to-play-mp3-in-the-background-music-automatically/308554    
    -->  
        <h1>Benvinguts a DibusAlbertLandia</h1>
        <audio loop id = "audio4" controls autoplay>
  <source src="../recursos/Mario Party Miss Sound Effect.mp3" type="audio/mpeg">
</audio>
<div class="sticky"><button id="button">
  <i class="fas fa-volume-up"></i>
</button></div>
<div class="content-inner style=height:auto !important;">


</div>
<script type="text/javascript">
    document.getElementById("audio4").style.visibility="hidden";
    const button = document.querySelector("#button");
const icon = document.querySelector("#button > i");
const audio = document.querySelector("audio");

button.addEventListener("click", () => {
  if (audio.paused) {
    audio.volume = 0.2;
    audio.play();
    icon.classList.remove('fa-volume-up');
    icon.classList.add('fa-volume-mute');
    
  } else {
    audio.pause();
    icon.classList.remove('fa-volume-mute');
    icon.classList.add('fa-volume-up');
  }
  button.classList.add("fade");
});

</script>

    </body>
</html>

