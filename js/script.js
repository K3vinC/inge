var playBtn = null, pauseBtn = null, stopBtn = null, volume = null, volumeLabel = null;

window.onload = function () {
    playBtn = document.getElementById("play");
    pauseBtn = document.getElementById("pause");
    stopBtn = document.getElementById("stop");
    volume = document.getElementById("volume");
    volumeLabel = document.getElementById("volumeLabel");
    sound = document.getElementById("sound");

    playBtn.addEventListener("click", function (e) {
        sound.play();
    });

    pauseBtn.addEventListener("click", function (e) {
        sound.pause();
    });

    stopBtn.addEventListener("click", function (e) {
        sound.pause();
        sound.currentTime = 0;
    });

    volume.addEventListener("change", function (e) {
        volumeLabel.innerHTML = volume.value + "%";
        sound.volume = volume.value / 100;
    });
}

//--------------------------------------------------------------------
//------------------- en proceso ajuste de tamaño --------------------
//--------------------------------------------------------------------

