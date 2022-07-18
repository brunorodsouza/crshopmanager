//edit
const divMecanicosEdit = document.getElementById('mecanicoedit');
const selectEdit = document.getElementById('selectedit');

selectEdit.addEventListener('change', function(e) {
    console.log('entrou no mecanico');
    if(e.target.value == '1'){
        console.log('entrou na cliente');
        divMecanicosEdit.style['content-visibility'] = 'hidden';
    }
    else
    if (e.target.value == '2'){
        console.log('entrou no mecanico');
        divMecanicosEdit.style['content-visibility'] = 'visible';
    }
})
