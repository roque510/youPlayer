$('.btnP').click(function() {
    
    $("#musiconPlayer").jPlayer("setMedia", { // Set the media
      m4a: $(this).attr('href'),
      title: $(this).attr('data-Nombre')
    }).jPlayer("play");
});

$(document).ready(function() {

    $("#musiconPlayer").jPlayer({
        ready: function(event) {
            $(this).jPlayer("setMedia", {
				title: "The Beatles",
				m4a: "http://listen.radionomy.com/liverpool-revolution-live"
				
            });
        },
        
        swfPath: "http://jplayer.org/latest/dist/jplayer",
        supplied: "m4a",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
    });
});   