window.onload = function () {

    document.getElementById('toggle').addEventListener('click', changeMenu)
    document.getElementById('close-btn').addEventListener('click', changeMenu)
    
    const link = document.getElementById('resize').querySelectorAll('a')
    link.forEach(function (e) {
      e.addEventListener('click', changeMenu)
    })
  
    function changeMenu () {
      this.classList.toggle('on');
      document.getElementById('resize').classList.toggle('active');
    }
    

    leInitWrapper();      

}

function leInitWrapper(){
      var slide = document.querySelector(".cont-slide");
    var lk = document.querySelectorAll(".prevnext > a");
    var selectedLink = 0;
      var sliHeight = window.innerHeight;
      var conHeight = sliHeight * 2;

       if(window.innerWidth < 1024){
            for (let i = 0; i < slide.children.length; i++) {
                 slide.children[i].style.backgroundSize = "auto";
            }
      }else{
        for (let i = 0; i < slide.children.length; i++) {
              slide.children[i].style.backgroundSize = "100%";
         } 
      } 
      
      slide.style.top = Math.floor(conHeight / 4 * -1).toString() + "px";
      
      for (let i = 0; i < lk.length; i++) {
            lk[i].setAttribute("page-value", i.toString());
            console.log('c')
            lk[i].addEventListener("click", function(evt){
                  console.log('c')
                  evt.preventDefault();
            });
            
      }


}

