<style>
    .youtube-background{
        height: 100%; 
        width: 100%; 
        z-index: -9999999999999999999; 
        position: absolute; 
        overflow: hidden; 
        inset: 0px; 
        pointer-events: none;          
        background-size: cover; 
        background-repeat: no-repeat; 
        background-position: center center;
    }
    .youtube-iframe{
        top: 50%; 
        left: 50%; 
        transform: translateX(-50%) translateY(-50%); 
        position: absolute; 
        opacity: 1; 
        width: <?php echo $largura?>px; 
        height: <?php echo $altura?>px;
    }
</style>

<video class="youtube-background" autoplay muted loop id="myVideo">
  <source class="youtube-iframe" src="3.mp4" type="video/mp4">
</video>
