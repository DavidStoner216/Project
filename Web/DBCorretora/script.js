
(function () {
    'use strict'
    document.querySelector('[data-toggle="offcanvas"]').addEventListener('click', function () {
        document.querySelector('.offcanvas-collapse').classList.toggle('open')
        document.getElementById('bar1').classList.toggle("change");
        document.getElementById('bar2').classList.toggle("change");
        document.getElementById('bar3').classList.toggle("change");
    })
})()
// document.addEventListener("scroll", function(){
//     document.querySelector("main").style.backgroundPositionY = ''+window.scrollY+'px';
//  });