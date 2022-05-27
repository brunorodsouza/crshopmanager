/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/pessoa.js ***!
  \********************************/
var divMecanicos = document.getElementById('mecanico');
var select = document.getElementById('select');
select.addEventListener('change', function (e) {
  if (e.target.value == '1') {
    divMecanicos.style['content-visibility'] = 'hidden';
  } else if (e.target.value == '2') {
    divMecanicos.style['content-visibility'] = 'visible';
  }
});
/******/ })()
;