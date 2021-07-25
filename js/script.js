var playBtn = null, pauseBtn = null, stopBtn = null, volume = null, volumeLabel = null;

//----------------------------------------------
//------- Se encarga de pausar, iniciar , aumentar y disminuir el volumen
//----------------------------------------------

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
//-------------------    e[i].style.fontFamily="Arial";
//-------------------    e[i].style.color="#ff0000";
//------------------- se encarga de alterar el tamaño fuente de la pagina
//--------------------------------------------------------------------

function CambioTexto(){
    var e=document.getElementsByTagName("body","div","p","i");
    var x=document.getElementById("valor");
    for (var i = 0; i < e.length; i++){
    if (x.options[x.selectedIndex].text=="elige"){return false}
    e[i].style.fontSize=x.options[x.selectedIndex].text+"px";

    }
    }