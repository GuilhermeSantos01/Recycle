function menuShow(){
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
menuMobile.classList.remove('open');
document.querySelector('.icon')
.src ="img/white-menu-icon-14.jpg"
    }else{				
     menuMobile.add('open');
document.querySelector('.icon') 
.src ="img/close_white_36dp.svg"


     }
} 
