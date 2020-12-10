<style>
    .youtube-background{
        height: <?php echo $data['cumprimento'];?>px; 
        width: 100%; 
        z-index: -9999999999999999999; 
        position: absolute; 
        inset: 0px; 
        pointer-events: none;          
        background-size: cover; 
        background-position: center center;
        top: -<?php echo $altura;?>px;
    }
    .youtube-iframe{
        position: absolute; 
        opacity: 1; 
        width: 100%; 
        height: 100%;
    }
</style>
<div class="youtube-background" >
<iframe class="youtube-iframe" frameborder="0" allow="autoplay; mute" src="https://www.youtube.com/embed/<?php echo $id;?>?enablejsapi=1&amp;disablekb=1&amp;controls=0&amp;rel=0&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;playsinline=1&amp;showinfo=0&amp;modestbranding=1&amp;fs=0&amp;origin=<?php echo ConfigPainel('base_url'); ?>&amp;mute=1&amp;autoplay=1&amp;loop=1">
</iframe>
</div