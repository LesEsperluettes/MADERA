
// Affiche le contenu de la div Mur Exterieur
function displayMurExtContent() {
    document.getElementById("no-click").className = "d-none";
    document.getElementById("contructIntContent").className = "d-none";
    document.getElementById("murIntContent").className = "d-none";
    document.getElementById("contructToitContent").className = "d-none";

    document.getElementById("murExtContent").className = "visible";
}
// Affiche le contenu de la div Mur Interieur
function displayMurIntContent(){
    document.getElementById("no-click").className = "d-none";
    document.getElementById("murExtContent").className = "d-none";
    document.getElementById("contructIntContent").className = "d-none";
    document.getElementById("contructToitContent").className = "d-none";
    
    document.getElementById("murIntContent").className = "visible";
}
// Affiche le contenu de la div Construction Interne
function displayConstructIntContent() {
    document.getElementById("no-click").className = "d-none";
    document.getElementById("murExtContent").className = "d-none";
    document.getElementById("murIntContent").className = "d-none";
    document.getElementById("contructToitContent").className = "d-none";

    document.getElementById("contructIntContent").className = "visible";
}
// Affiche le contenu de la div Contruction Toit
function displayConstructToitContent() {
    document.getElementById("no-click").className = "d-none";
    document.getElementById("murExtContent").className = "d-none";
    document.getElementById("contructIntContent").className = "d-none";
    document.getElementById("murIntContent").className = "d-none";

    document.getElementById("contructToitContent").className = "visible";
}