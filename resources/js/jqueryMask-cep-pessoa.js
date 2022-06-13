//Máscaras dos campos de cadastro de Pessoas
$('.FLDSTRREQ_cpf').mask('000.000.000-00');
$('.FLDSTRREQ_matricula').mask('0000000000000000');
$('.FLDSTRREQ_telefone').mask('(00) 0000-0000');
$('.FLDSTRREQ_celular').mask('(00) 0000-0000');
$('.FLDSTROPT_cep').mask('00000-000');

//Completar endereço através do cep
$(document).on('blur', '#cep', function(){
    const cep = $(this).val();

    $.ajax({
        url: 'https://viacep.com.br/ws/'+cep+'/json/',
        method: 'GET',
        dataType: 'json',
        success: function(dados){
            CompletarEndereço(dados);
        }
    });
});

function CompletarEndereço(dados){
    if(dados.erro){
        alert('CEP não encontrado');
    }

    $('#uf').val(dados.uf);
    $('#cidade').val(dados.localidade);
    $('#bairro').val(dados.bairro);
    $('#logradouro').val(dados.logradouro);

};
