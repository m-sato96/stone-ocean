//ハンバーガーメニュー
const hamburgerMenu = document.querySelector('#hamburger-menu');
const spMenu = document.querySelector('#sp-menu');
const Main = document.querySelector('main');
hamburgerMenu.addEventListener('click',function() {
    hamburgerMenu.classList.toggle('open');
    spMenu.classList.toggle('open');
    Main.classList.toggle('open')
})
Main.addEventListener('click', function() {
    hamburgerMenu.classList.remove('open');
    spMenu.classList.remove('open');
    Main.classList.remove('open');
})
spMenu.addEventListener('click',function() {
    hamburgerMenu.classList.remove('open');
    spMenu.classList.remove('open');
    Main.classList.remove('open');
})

//newsアコーディオン
const newsItems = document.querySelectorAll('.news-item');
for(let i = 0; i < newsItems.length; i++) {
    newsItems[i].addEventListener('click',function() {
        newsItems[i].classList.toggle('open');
    })
}

//スライダー
document.addEventListener('DOMContentLoaded', function() {
    const hero = new HeroSlider();
})

class HeroSlider {
    constructor() {
        this.swiper = new Swiper('.swiper', {
            loop: true,
            grabCursor: true,
            effect: 'coverflow',
            centeredSlides: true,
            slidesPerView: 1,
            speed: 1000,
            breakpoints: {
                1024: {
                    slidesPerView: 2
                }
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false
            }
          });
    }
}

//スクロール監視
const els = document.querySelectorAll('.img-wrap');
const fadeItems = document.querySelectorAll('.fade-text');
const slideTexts = document.querySelectorAll('h2');

const cb = function(entries, observer) {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('inview');
            observer.unobserve(entry.target);
        } else {
            entry.target.classList.remove('inview');
        }
    })
}
const option = {
    root: null,
    rootMargin: "-100px 0px",
    threshold: 0
};
const io = new IntersectionObserver(cb, option);

//テキストアニメーション
for(let i = 0; i < slideTexts.length; i++) {
    const str= slideTexts[i].innerHTML.trim();
    let concatStr = '';
    for(let c of str) {
        concatStr += `<span class="char">${c}</span>`;
    }
    slideTexts[i].innerHTML = concatStr;
}

els.forEach(el => io.observe(el));
fadeItems.forEach(fadeItem => io.observe(fadeItem));
slideTexts.forEach(slideText => io.observe(slideText));


