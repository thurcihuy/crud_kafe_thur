
// Menu Drop down
let menu = document.querySelector('.menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('move');
    navbar.classList.toggle('open-menu');
};
// close menu onscroll
window.onscroll = () => {
    menu.classList.remove('move');
    navbar.classList.remove('open-menu');
};
//ScrolRevell
const animate = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: '2500',
    delay: '400',
});

animate.reveal('.nav');
animate.reveal('.home-text',{ origin: 'left'});
animate.reveal('.home-img', { origin: 'bottom'});
animate.reveal('.ser-box, .product-box, .book-data', { intervel: 100 });
