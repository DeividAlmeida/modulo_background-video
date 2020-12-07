<style>
.embed-container {
      --video--width:<?php echo $largura?>;
      --video--height: <?php echo $altura?>;;
      position: absolute;
      padding-bottom: calc(var(--video--height) / var(--video--width) * 100%); /* 41.66666667% */
      overflow: hidden !important;
      width: 100%;
	  left: 0px;
	  top: 0px;
	  z-index:-99999999999999999;
    }
    .embed-container iframe,
    .embed-container object,
    .embed-container embed {
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      height: 100%;
    }
</style>
<div class='embed-container'>
<iframe src='https://player.vimeo.com/video/<?php echo $id;?>?autoplay=1&loop=1&background=1' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
