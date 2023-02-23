//////////////////////////////////////////// Fonctions utilitaires ////////////////////////////////////////////

//Switch affichage de deux classes d'éléments
function display_switch(item1, item2) {
    for (i = 0; i < document.getElementsByClassName(item1).length; i++) {
        document.getElementsByClassName(item1)[i].style.display = "none";
    }
    for (i = 0; i < document.getElementsByClassName(item2).length; i++) {
        document.getElementsByClassName(item2)[i].style.display = "inline";
    }
}

//set multiples attributes en une ligne
function setAttributes(el, attrs) {
    for (var key in attrs) {
        el.setAttribute(key, attrs[key]);
    }
}

//ne pas submit avec la touche enter pour tout les exercices
// document.onkeydown = function () {
//     if (window.event.keyCode == '13') {
//         return false;
//     }
// }

///////////////////////////////////////////////////// Ex5 /////////////////////////////////////////////////////

//Formulaire Jarditou

//Event listener
evjs_jarditou_sb.addEventListener("click", function () { form_valid_jarditou(document.getElementById('evjs_ex5')) });

function tored(id) { document.getElementById(id).setAttribute('style', 'color:red') }

function togreen(id) { document.getElementById(id).setAttribute('style', 'color:green') }

function form_valid_jarditou(myForm) {

    regex_nom = /[a-zA-Z]/g;
    regex_prenom = regex_nom;
    regex_ddn = /^\d{4}\-(0[1-9]|1[012])\-(0[1-9]|[12][0-9]|3[01])$/;
    regex_cp = /^(?:0[1-9]|[1-8]\d|9[0-8])\d{3}$/ //Remplacé par un meilleur regex qui filtre uniquement les format code postaux valide en France (01 à 98)
    regex_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g;

    if (regex_nom.test(myForm.elements['nom'].value)) {
        document.getElementById('er_nom').innerHTML = "Le champ est valide";
        document.getElementById('er_nom').setAttribute("class", "text-success error");
    }
    else {
        document.getElementById('er_nom').innerHTML = "Veuillez entrer votre nom";
        document.getElementById('er_nom').setAttribute("class", "text-danger error");
    }

    if (regex_nom.test(myForm.elements['prenom'].value)) {
        document.getElementById('er_prenom').innerHTML = " Le champ est valide";
        document.getElementById('er_prenom').setAttribute("class", "text-success error");
    }
    else {
        document.getElementById('er_prenom').innerHTML = " Veuillez entrer votre prénom";
        document.getElementById('er_prenom').setAttribute("class", "text-danger error");
    }

    if (regex_ddn.test(myForm.elements['ddn'].value)) {
        document.getElementById('er_ddn').innerHTML = " Le champ est valide";
        document.getElementById('er_ddn').setAttribute("class", "text-success error");
    }
    else {
        document.getElementById('er_ddn').innerHTML = " Veuillez entrer une date de naissance valide";
        document.getElementById('er_ddn').setAttribute("class", "text-danger error");
    }
    //Contrôle si la date est supérieur à aujourd'hui pour erreur
    var startDate = Date.parse(document.getElementById('ddn').value);
    var today = new Date();
    if (!isNaN(startDate) && startDate > today.getTime()) {
        document.getElementById('er_ddn').innerHTML = " Veuillez entrer une date de naissance valide";
        document.getElementById('er_ddn').setAttribute("class", "text-danger error");
    }

    if (regex_cp.test(myForm.elements['cp'].value)) {
        document.getElementById('er_cp').innerHTML = " Le champ est valide";
        document.getElementById('er_cp').setAttribute("class", "text-success error");
    }
    else {
        document.getElementById('er_cp').innerHTML = " Veuillez entrer un code postal valide (Format 00000)";
        document.getElementById('er_cp').setAttribute("class", "text-danger error");
    }

    if (regex_email.test(myForm.elements['email'].value)) {
        document.getElementById('er_mail').innerHTML = " Le champ est valide";
        document.getElementById('er_mail').setAttribute("class", "text-success error");
    }
    else {
        document.getElementById('er_mail').innerHTML = " Veuillez entre une adresse mail valide (Format utilisateur@societe.dom)";
        document.getElementById('er_mail').setAttribute("class", "text-danger error");
    }

    if (document.getElementById('sujet').value == '') {
        document.getElementById('er_sujet').innerHTML = "Veuillez renseigner le sujet de votre demande";
        document.getElementById('er_sujet').setAttribute("class", "text-danger error");
    }
    else {
        document.getElementById('er_sujet').innerHTML = " Le champ est valide";
        document.getElementById('er_sujet').setAttribute("class", "text-success error");
    }

    if (document.getElementById('question').value == '') {
        document.getElementById('er_quest').innerHTML = "Veuillez saisir votre question";
        document.getElementById('er_quest').setAttribute("class", "text-danger error");
    }
    else {
        document.getElementById('er_quest').innerHTML = " Le champ est valide";
        document.getElementById('er_quest').setAttribute("class", "text-success error");
    }

    if (!myForm.accept.checked) {
        document.getElementById('er_accept').innerHTML = "Veuillez accepter le traitement informatique de ce formulaire";
        document.getElementById('er_accept').setAttribute("class", "text-danger error_left");
    }
    else {
        document.getElementById('er_accept').innerHTML = "Conditions d'utilisation acceptées";
        document.getElementById('er_accept').setAttribute("class", "text-success error_left");
    }
    // return false;
}