function exibeNumeroStep(novoValor) {
    document.getElementById("number-movedistance-configure-motor").innerHTML = novoValor;
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "http://localhost/controlMotor-ESP-Distance/controlMotor-ESP.php?move=d."+novoValor , true);
    ajax.send();
}

function exibeNumeroAngle(novoValor) {
    document.getElementById("number-moveangle-configure-motor").innerHTML = novoValor;
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "http://localhost/controlMotor-ESP-Distance/controlMotor-ESP.php?move=a."+novoValor , true);
    ajax.send();
}

function sendData(data)
{
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "http://localhost/controlMotor-ESP-Distance/controlMotor-ESP.php?move="+data.value , true);
    ajax.send();
}