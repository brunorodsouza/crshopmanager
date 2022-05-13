/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/login.js ***!
  \*******************************/
var pass1 = document.getElementById('password1');
var pass2 = document.getElementById('password2');
var registrar = document.getElementById('registrar');
registrar.addEventListener('click', function (e) {
  if (pass1.value != pass2.value) {
    e.preventDefault();
    alert("As senhas estão diferentes");
    return false;
  }

  if (pass1.value.length < 6) {
    e.preventDefault();
    alert("A senha deve conter no mínimo 6 caracteres");
    return false;
  }

  if (pass2.value.length < 6) {
    e.preventDefault();
    alert("A senha deve conter no mínimo 6 caracteres");
    return false;
  }
});
/******/ })()
;