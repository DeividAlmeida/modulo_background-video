function BackgroundVideo(a){
    $.ajax({
      type:    "GET",
      cache:   false,
      url:     UrlPainel+'wa/background_video/?id='+a,
      success: function (data) {
        jQuery('#BackgroundVideo'+a).html(data);
      },
      error: function (data) {
        setTimeout(function(){ BackgroundVideo(); }, 5000);
      },
    });
  }