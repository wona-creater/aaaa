// NAVBAR SCROLL
window.addEventListener('scroll',()=>{
    const dEm = document.documentElement.scrollTop;
    const navBar = document.querySelector('.navbar');
    if(dEm > 0) navBar.classList.add('scrolled');
    else  navBar.classList.remove('scrolled');
});

// PRELOADER
window.onload = () =>{
    document.querySelector("#preloader").style.opacity = 0;
    setTimeout((()=>{ document.querySelector("#preloader").style.display = 'none'; }), 500);
}

// AOS INIT
AOS.init();

// SWIPER INIT
var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });