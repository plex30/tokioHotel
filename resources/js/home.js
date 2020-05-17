
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

  

  TweenMax.from('#brand', 1, {
    delay: 0.8,
    y: 10,
    opacity: 0,
    ease: Expo.easeInDut
  })

  TweenMax.staggerFrom(
    '#menu li a',
    1,
    {
      delay: 0.8,
      opacity: 0,
      ease: Expo.easeInDut
    },
    0.1
  )


  const parrallax = document.querySelector('.hero')

  function Scroll () {
    const scrollTop = document.documentElement.scrollTop
    parrallax.style.transform = 'translateY(' + scrollTop * -0.9 + 'px)'
  }

  window.addEventListener('scroll', Scroll)
}
