const play = document.querySelector(".btn");

play.addEventListener("click",() => {
  document.querySelector(".letout").classList.add("none");
  document.querySelector(".resultat").classList.remove("none")
  
   const nom = document.querySelector(".nom").value
  const player = document.querySelector(".player")
  player.innerHTML=nom;
  
  
  const rad0 = document.getElementsByName('peau');
  const rad1 = document.getElementById('jaune');
  const rad2 = document.getElementById('blanc');
  const rad3 = document.getElementById('mulate');
  const rad4 = document.getElementById('noir');
  

const choixir = document.querySelector(".choix");
  console.log(choix)
if (rad1.checked && choixir.value == 0) {
      document.getElementId("joueur").innerHTML ="✊";
  
    }
   
  
 
  
  
})

const rejouer = document.querySelector(".rejouer");
rejouer.addEventListener("click",() => {
  document.querySelector(".resultat").classList.add("none");
  document.querySelector(".letout").classList.remove("none");
})
