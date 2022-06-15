/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/pessoa.js ***!
  \********************************/
// funciona no create
var divMecanicos = document.getElementById('mecanico');
var select = document.getElementById('select');
select.addEventListener('change', function (e) {
  if (e.target.value == '1') {
    console.log('entrou na cliente');
    divMecanicos.style['content-visibility'] = 'hidden';
  } else if (e.target.value == '2') {
    console.log('entrou no mecanico');
    divMecanicos.style['content-visibility'] = 'visible';
  }
});
/******/ })()
;