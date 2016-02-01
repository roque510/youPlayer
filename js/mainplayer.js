function setMedia(URL,NAME){
    
     $('#musiconPlayer').jPlayer('setMedia', {
     title:NAME,
      m4a: URL
   });
     $('#musiconPlayer').jPlayer("play"); 
}

$('.btnP').click(function() {
    
    $("#musiconPlayer").jPlayer("setMedia", { // Set the media
      m4a: $(this).attr('href'),
      title: $(this).attr('data-Nombre')
    }).jPlayer("play");
});


(function localFileVideoPlayerInit(win) {
    
    var URL = win.URL || win.webkitURL,
        displayMessage = (function displayMessageInit() {
            var node = document.getElementById('message');
            
            return function displayMessage(message, isError) {
                node.innerHTML = message;
                node.className = isError ? 'error' : 'info';
            };
        }()),
        playSelectedFile = function playSelectedFileInit(event) {
          
            var file = this.files[0];

            var type = file.type;

            var name = file.name;

            

            var videoNode = document.querySelector('audio');

            var canPlay = videoNode.canPlayType(type);

            canPlay = (canPlay === '' ? 'no' : canPlay);

            var message = 'Can play type "' + type + '": ' + canPlay;

            var isError = canPlay === 'no';

            displayMessage(message, isError);

            if (isError) {
                return;
            }

            var fileURL = URL.createObjectURL(file);

            setMedia(fileURL,name);

            //videoNode.src = fileURL;
        },
        inputNode = document.getElementById('input');                                        
    if (!URL) {
        displayMessage('Your browser is not ' + 
           '<a href="http://caniuse.com/bloburls">supported</a>!', true);
        
        return;
    }
    
    inputNode.addEventListener('change', playSelectedFile, false);
}(window));     