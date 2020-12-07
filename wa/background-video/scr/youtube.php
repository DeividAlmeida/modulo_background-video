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
<div class="youtube-background" >
<iframe class="youtube-iframe" frameborder="0" allow="autoplay; mute" src="https://www.youtube.com/embed/<?php echo $id;?>?enablejsapi=1&amp;disablekb=1&amp;controls=0&amp;rel=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;playsinline=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;origin=https://www.jqueryscript.net&amp;mute=1&amp;autoplay=1&amp;loop=1">
</iframe>
</div>
