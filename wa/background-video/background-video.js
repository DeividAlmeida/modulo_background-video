function BackgroundVideo(){
    $.ajax({
      type:    "GET",
      cache:   false,
      url:     UrlPainel+'wa/background-video',
      success: function (data) {
        jQuery('#BackgroundVideo').html(data);
      },
      error: function (data) {
        setTimeout(function(){ BackgroundVideo(); }, 5000);
      },
    });
  }