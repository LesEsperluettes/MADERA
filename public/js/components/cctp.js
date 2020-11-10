
document.getElementById("plotBetonDisplay").style.display = "none";
document.getElementById("dalleBettonDisplay").style.display = "none";

function displayContent(){
    var dalleSelected = document.getElementById("dalleBeton");
    var plotSelected =  document.getElementById("plotBeton");

    var dalleDisplay = document.getElementById("plotBetonDisplay");
    var plotDisplay = document.getElementById("dalleBettonDisplay");

    if (dalleSelected.selected) {
        dalleDisplay.style.display = "block";
    }
    if(plotSelected.selected){
       plotDisplay.style.display = "block";
    }
}