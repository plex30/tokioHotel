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
    var slide = document.querySelector(".slide");
    var content = document.querySelector(".card-content")
    var lk = document.querySelectorAll(".i > a");
    var selectedLink = 0;
    
    leInitWrapper();

    

    function leInitWrapper(){
          var sliHeight = window.innerHeight;
          var conHeight = sliHeight * 2;

          if(window.innerWidth < 1024){
                for (let i = 0; i < slide.children.length; i++) {
                     slide.children[i].style.backgroundSize = "auto";
                     content.children[i].style.backgroundSize = "auto";
                }
          }else{
            for (let i = 0; i < slide.children.length; i++) {
                  slide.children[i].style.backgroundSize = "100%";
                  content.children[i].style.backgroundSize = "100%";
             }
          }

          content.style.top = Math.floor(conHeight / 4 * -1).toString() + "px";

          for (let i = 0; i < link.length; i++) {
                link[i].setAttribute("page-value", i.toString());
                link[i].addEventListener("click", function(e){
                      e.preventDefault();
                })
                
          }


    }

      
            
      

}


