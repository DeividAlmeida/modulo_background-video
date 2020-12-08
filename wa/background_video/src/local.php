<style>
    .youtube-background{
        width: <?php echo $largura?>px; 
        height: <?php echo $altura?>px;
        z-index: -9999999999999999999; 
        position: absolute; 
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
    }
</style>

<video class="youtube-background" autoplay muted loop id="myVideo">
  <source class="youtube-iframe" src="<?php echo ConfigPainel('base_url').'wa/background_video/uploads/'.$id ?>" >
</video>
