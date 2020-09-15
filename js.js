const play = document.querySelector(".btn");

play.addEventListener("click",() => {
  const game = new Game();
  document.querySelector(".letout").classList.add("none");
  document.querySelector(".resultat").classList.remove("none")
  
  
  
   var nom = document.getElementById("nom").value;
  document.getElementById("joueur").innerHTML=nom;
})

const rejouer = document.querySelector(".rejouer");
rejouer.addEventListener("click",() => {
  document.querySelector(".resultat").classList.add("none");
  document.querySelector(".letout").classList.remove("none");
})



class Game{
  constructor(){
    this.mainTab = [
      ["✊","✋","✌️"],
      ["✊🏻","✋🏻","✌🏻"],
      ["✊🏽","✋🏽","✌🏽"],
      ["✊🏿","✋🏿","✌🏿"],
    ];
    
    this.choixJoueur();
    this.afficherChoixOpposant();
    this.resultatGame();
  }
  choixJoueur(){
    const RpS = document.getElementById("choix");
    const indexRpS = RpS.selectedIndex;
    const choixPeau = document.querySelector('[name = peau]:checked').value;
    const actionJoueur = this.mainTab[choixPeau][indexRpS];
    
    const resultatJoueur = document.getElementById("cJoueur");

     resultatJoueur.innerHTML =`<span>${actionJoueur}</span>`;
  }
  
   afficherChoixOpposant() {
    const cAleatoire = Math.round(Math.random() * 3);
    const cOrdi = this.mainTab[cAleatoire];
    
    this.actionRandom = Math.round(Math.random() * 2);
    const mouvOrdi = cOrdi[this.actionRandom];
    

    const resultatOrdi = document.querySelector(".cOrdi");
    resultatOrdi.innerHTML = `<span>${mouvOrdi}</span>`;
}
  
  resultatGame() {
    const coJoueur = document.querySelector('.player');
    const coOrdi = document.querySelector('.player2');
    const annonce = document.querySelector('.annonce');
    
   
    
    const  RpS = document.getElementById("choix");
    const indexRpS = RpS.selectedIndex;
    
    
    if(indexRpS == this.actionRandom){
      coJoueur.style.setProperty('background-color', "#3F88C5");
      coOrdi.style.setProperty('background-color', "#3F88C5");
      annonce.innerHTML = "<span>ÉGALITÉ!</span>"; 
    }

    else if(
      indexRpS == 0 && this.actionRandom == 1 ||
      indexRpS == 1 && this.actionRandom == 2 ||
      indexRpS == 2 && this.actionRandom == 0 ){
        coJoueur.style.setProperty('background-color', "#D16D82");
        coOrdi.style.setProperty('background-color', "#7FD8BE");
        annonce.innerHTML = `<span>DÉFAITE!</span>`;
      }
    
    else{
      coJoueur.style.setProperty('background-color', "#7FD8BE");
        coOrdi.style.setProperty('background-color', "#D16D82");
        annonce.innerHTML = `<span>VICTOIRE!</span>`;
    }
  
}
  }