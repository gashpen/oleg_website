const menuBtn = document.querySelector('.menu-btn');
const headerNavWrap = document.querySelector('.header_nav_contact-wrap');
const overlay = document.querySelector('.overlay');
let menuOpen = false;
menuBtn.addEventListener('click', ()=> {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen=true;
        headerNavWrap.style.left = '0';
        overlay.classList.add('overlay_active')
    }
    else {
        menuBtn.classList.remove('open');
        menuOpen=false;
        headerNavWrap.style.left = '-200%'
        overlay.classList.remove('overlay_active')
    }
})
