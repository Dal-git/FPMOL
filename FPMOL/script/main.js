let mainActif = "index";
let list = [];

function newGame(toMain) {
    document.getElementById(mainActif).hidden = true;
    document.getElementById(toMain).hidden = false;
    mainActif = toMain;
}