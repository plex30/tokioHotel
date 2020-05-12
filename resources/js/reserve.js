window.onload = function () {
 
    document.getElementById('toggle').addEventListener('click', changeMenu)
    document.getElementById('close-btn').addEventListener('click', changeMenu)
    
    const link = document.getElementById('resize').querySelectorAll('a')
    link.forEach(function (e) {
      e.addEventListener('click', changeMenu)
    })
  
    function changeMenu () {
      this.classList.toggle('on');
      document.getElementById('resize').classList.toggle('active')
    }
   

}