
/**************************************************************
 * NAVIGATEUR section page account
**************************************************************/
let secConnexion = document.querySelector('#secLog')
let secHistory = document.getElementById('secHistory')
let secFavorie = document.getElementById('secFav')
let secModify = document.getElementById('secModify')

/**************************************************************
 * NAVIGATEUR lien de navigation vers les sections
**************************************************************/
let profil = document.querySelector('#profil')
let history = document.getElementById('history')
let modify = document.getElementById('modify')

/************************************************/
profil.addEventListener("click", function(){
    if(secConnexion.style.display === "none") {
        secConnexion.style.display = "flex"
        secHistory.style.display = "none"
        secModify.style.display = "none"
    } else {
        secHistory.style.display = "none"
        secModify.style.display = "none"
        
    }
})

history.addEventListener("click", function(){
    if(secHistory.style.display === "flex") {
        secHistory.style.display = "none"
        secConnexion.style.display = "flex"
    } else {
        secConnexion.style.display = "none"
        secHistory.style.display = "flex"
        secModify.style.display = "none"
    }
})


modify.addEventListener("click", function(){
    if(secModify.style.display === "flex") {
        secModify.style.display = "none"
        secConnexion.style.display = "flex"
    } else {
        secConnexion.style.display = "none"
        secHistory.style.display = "none"
        secModify.style.display = "flex"
    }
})

function hideAll() {
    secConnexion.style.display = "none"
    secHistory.style.display = "none"
    secModify.style.display = "none"
}