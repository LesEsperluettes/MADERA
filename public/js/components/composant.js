// Affiche le contenu de la div Lisse
function displayLisseContent(){
    //Liste actif
    document.getElementById("listContreFortId").className = "list-group-item";
    document.getElementById("listSupportSolId").className = "list-group-item";
    document.getElementById("listMontantId").className = "list-group-item";
    document.getElementById("listSabotId").className = "list-group-item";

    //Content
    document.getElementById("no-click").className = "d-none";
    document.getElementById("lisseContent").className = "d-none";
    document.getElementById("supportsolContent").className = "d-none";
    document.getElementById("montantContent").className = "d-none";
    document.getElementById("sabotsContent").className = "d-none";

    document.getElementById("listLisseId").className = "list-group-item active";
    document.getElementById("lisseContent").className = "form-group";
}
// Affiche le contenu de la div Contrefort
function displayContrefortsContent() {
    //Liste actif
    document.getElementById("listLisseId").className = "list-group-item";
    document.getElementById("listSupportSolId").className = "list-group-item";
    document.getElementById("listMontantId").className = "list-group-item";
    document.getElementById("listSabotId").className = "list-group-item";

    document.getElementById("no-click").className = "d-none";
    document.getElementById("lisseContent").className = "d-none";
    document.getElementById("contrefortContent").className = "d-none";
    document.getElementById("montantContent").className = "d-none";
    document.getElementById("sabotsContent").className = "d-none";

    document.getElementById("listContreFortId").className = "list-group-item active";
    document.getElementById("contrefortContent").className = "form-group";
}
// Affiche le contenu de la div SupportSol
function displaySupportSolContent() {
    //Liste actif
    document.getElementById("listLisseId").className = "list-group-item";
    document.getElementById("listContreFortId").className = "list-group-item";
    document.getElementById("listMontantId").className = "list-group-item";
    document.getElementById("listSabotId").className = "list-group-item";


    document.getElementById("no-click").className = "d-none";
    document.getElementById("lisseContent").className = "d-none";
    document.getElementById("supportsolContent").className = "d-none";
    document.getElementById("contrefortContent").className = "d-none";
    document.getElementById("sabotsContent").className = "d-none";

    document.getElementById("listSupportSolId").className = "list-group-item active";
    document.getElementById("supportsolContent").className = "form-group";
}

// Affiche le contenu de la div Montant
function displayMontantContent() {
    //Liste actif
    document.getElementById("listLisseId").className = "list-group-item";
    document.getElementById("listSupportSolId").className = "list-group-item";
    document.getElementById("listContreFortId").className = "list-group-item";
    document.getElementById("listSabotId").className = "list-group-item";

    document.getElementById("no-click").className = "d-none";
    document.getElementById("lisseContent").className = "d-none";
    document.getElementById("supportsolContent").className = "d-none";
    document.getElementById("contrefortContent").className = "d-none";
    document.getElementById("sabotsContent").className = "d-none";

    document.getElementById("listMontantId").className = "list-group-item active";
    document.getElementById("montantContent").className = "form-group";
}

// Affiche le contenu de la div Sabot
function displaySabotsContent(){
    //Liste actif
    document.getElementById("listLisseId").className = "list-group-item";
    document.getElementById("listSupportSolId").className = "list-group-item";
    document.getElementById("listContreFortId").className = "list-group-item";
    document.getElementById("listMontantId").className = "list-group-item";

    document.getElementById("no-click").className = "d-none";
    document.getElementById("lisseContent").className = "d-none";
    document.getElementById("supportsolContent").className = "d-none";
    document.getElementById("contrefortContent").className = "d-none";

    document.getElementById("listSabotId").className = "list-group-item active";
    document.getElementById("sabotsContent").className = "form-group";
}
