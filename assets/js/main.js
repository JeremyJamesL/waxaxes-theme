// Custom video controls (delete if not needed)

const video = document.getElementById( "video" );
const playPause = document.getElementById( "play-pause" );

playPause.addEventListener("click", function() {
    if(video.paused == true) {
        video.play();
    } else { 
        video.pause();
    }
});





