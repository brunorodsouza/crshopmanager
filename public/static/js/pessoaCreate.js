/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/pessoaCreate.js ***!
  \**************************************/
//create
var divMecanicos = document.getElementById('mecanico');
var select = document.getElementById('select');
var data_admissao = document.getElementById('data_admissao');
var salario = document.getElementById('salario');
select.addEventListener('change', function (e) {
  if (e.target.value == '1') {
    console.log('entrou na cliente');
    divMecanicos.style['content-visibility'] = 'hidden';
    salario.required = false;
    data_admissao.required = false;
  } else if (e.target.value == '2') {
    console.log('entrou no mecanico');
    divMecanicos.style['content-visibility'] = 'visible';
    salario.required = true;
    data_admissao.required = true;
  }
});
/******/ })()
;