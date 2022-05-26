const divMecanicos = document.getElementById('mecanico');
const select = document.getElementById('select');

select.addEventListener('change', function(e) {
    console.log(e.target.value);
    if(e.target.value == '1'){
        divMecanicos.style['content-visibility'] = 'hidden';
    }
    else
    if (e.target.value == '2'){
        divMecanicos.style['content-visibility'] = 'visible';
    }

})

