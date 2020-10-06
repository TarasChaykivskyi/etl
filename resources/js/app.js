require('./bootstrap');
require('vue');
// import HomeMainSlider from './slick-slider/HomeMainSlider'
// import myTest from './Test/MyTest'

// new Vue({
//     el: '#app',
//     data: {
//         msg: '2134fdsf'
//     },
//     components: {
//         myTest,
//         HomeMainSlider
//     }
// })

// new Vue({
//     el: '#app',
//     data: {
//         msg: '123'
//     }
// })

var kvSlider = function (slider) {

    var slides = document.querySelectorAll('#' + slider.id + ' .kv-slide'),
        btnSlider = document.querySelectorAll('#' + slider.id + ' button'),
        currentIndex = 0;

    btnSlider.forEach(function (item) {
        item.addEventListener('click', ()=> {
            currentIndex += Number(item.getAttribute('data-slider'));
            if(currentIndex < 0) {
                currentIndex = slides.length - 1;
            }
            if(currentIndex > slides.length - 1) {
                currentIndex = 0;
            }
            changeSlide();
        })
    })

   function changeSlide() {
       slides.forEach(function (item) {
           item.classList.remove('active');
       })

       slides[currentIndex].classList.add('active');
   }

   changeSlide();
}

new kvSlider(document.getElementById('home-main-slider'))






