<style>
    .background{
        height: auto; 
        width: 100%; 
        z-index: -9999999999999999999; 
        position: absolute; 
        inset: 0px; 
        pointer-events: none;          
        background-size: cover; 
        background-position: center center;
        top: -<?php echo $altura ?>px;
    }
    .iframe{
        position: absolute; 
        opacity: 1; 
        width: 100%; 
        height: 100%; 
    }
</style>

<video class="background" controls="true" playsinline autoplay muted loop id="myVideo">
  <source class="iframe" src="<?php echo ConfigPainel('base_url').'wa/background_video/uploads/'.$id ?>" >
</video>
