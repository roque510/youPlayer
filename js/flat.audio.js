jQuery(document).ready(function($) {
	$("#musiconPlayer").jPlayer({
		ready: function(event) {
			$(this).jPlayer("setMedia", {
				title: "The Beatles",
				m4a: "http://listen.radionomy.com/liverpool-revolution-live"
			});
		},
		play: function() { // Avoid multiple jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		timeFormat: {
			padMin: false
		},
		swfPath: "js",
		supplied: "m4a",
		cssSelectorAncestor: "#jp_container_audio_1",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		remainingDuration: true,
		keyEnabled: true,
		keyBindings: {
			// Disable some of the default key controls
			loop: null,
			muted: null,
			volumeUp: null,
			volumeDown: null
		},
		wmode: "window"
	});
});
