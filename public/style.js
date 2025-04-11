const navClasse = document.querySelector(".nav")
const ul = document.querySelector("ul")
const aa = document.querySelectorAll("nav ul li a")
const titre = document.querySelector(".titre")
const titreAcceuil = document.querySelector(".nav .text")


if (document.title === "MonSite - Accueil" ) {
    titreAcceuil.style.display = "flex"
} else {
    navClasse.style.height = "50vh"; 
}

function mouve() {
    
}

window.addEventListener("scroll", (event) => {

    if (window.scrollY > 0) {

        ul.style.background = "#313B30";
        
        aa[0].style.color = "#FAA002";
        aa[0].style.background = "#313B30";
        aa[0].style.border = "1px solid #FAA002";
        aa[0].style.padding = "5px";
        aa[0].style.borderRadius = "10%";
        aa[1].style.color = "#FAA002";
        aa[1].style.background = "#313B30";
        aa[1].style.border = "1px solid #FAA002";
        aa[1].style.padding = "5px";
        aa[1].style.borderRadius = "10%";
        aa[2].style.color = "#FAA002";
        aa[2].style.background = "#313B30";
        aa[2].style.border = "1px solid #FAA002";
        aa[2].style.padding = "5px";
        aa[2].style.borderRadius = "10%";
        aa[3].style.color = "#FAA002";
        aa[3].style.background = "#313B30";
        aa[3].style.border = "1px solid #FAA002";
        aa[3].style.padding = "5px";
        aa[3].style.borderRadius = "10%";
        aa[4].style.color = "#FAA002";
        aa[4].style.background = "#313B30";
        aa[4].style.border = "1px solid #FAA002";
        aa[4].style.padding = "5px";
        aa[4].style.borderRadius = "10%";
        aa[5].style.color = "#FAA002";
        aa[5].style.background = "#313B30";
        aa[5].style.border = "1px solid #FAA002";
        aa[5].style.padding = "5px";
        aa[5].style.borderRadius = "10%";

        titre.style.position = "fixed"
        titre.style.top = "10vh"
        
    } else {

        ul.style.background = ""
        
        aa[0].style.color = "";
        aa[0].style.background = "";
        aa[0].style.border = "";
        aa[0].style.padding = "";
        aa[0].style.borderRadius = "";
        aa[1].style.color = "";
        aa[1].style.background = "";
        aa[1].style.border = "";
        aa[1].style.padding = "";
        aa[1].style.borderRadius = "";
        aa[2].style.color = "";
        aa[2].style.background = "";
        aa[2].style.border = "";
        aa[2].style.padding = "";
        aa[2].style.borderRadius = "";
        aa[3].style.color = "";
        aa[3].style.background = "";
        aa[3].style.border = "";
        aa[3].style.padding = "";
        aa[3].style.borderRadius = "";
        aa[4].style.color = "";
        aa[4].style.background = "";
        aa[4].style.border = "";
        aa[4].style.padding = "";
        aa[4].style.borderRadius = "";
        aa[5].style.color = "";
        aa[5].style.background = "";
        aa[5].style.border = "";
        aa[5].style.padding = "";
        aa[5].style.borderRadius = "";

        titre.style.position = ""
        titre.style.top = ""

    }
})

