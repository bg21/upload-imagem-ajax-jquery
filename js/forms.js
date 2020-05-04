$(function(){
    $('#inputcadastroUser').click(function(e){
        $('input#inputcadastroUser').val('Registrando..');
        $('input#inputcadastroUser').attr('disabled', true);
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);
        jQuery.ajax({
            url: 'ajax/forms.php',
            type: 'post',
            dataType: 'json',
            data: fd,
            contentType: false,
            processData: false,
            success: function(result){
                if(result.sucesso){
                    $('div.cadastro').prepend('<div class="alerta sucesso"><i class="fas fa-check-circle"></i>' +result.mensagem+ '</div>');
                    $('input#inputcadastroUser').val('Cadastre-se');
                }else{
                    $('div.cadastro').prepend('<div class="alerta erro"><i class="fas fa-check-circle"></i>' +result.mensagem+ '</div>');
                    $('input#inputcadastroUser').val('Cadastre-se');
                }
                $('form#cadastroUser')['0'].reset();
                $('input#inputcadastroUser').val('Cadastre-se');
                $('input#inputcadastroUser').attr('disabled', false);
            }
        });
        e.preventDefault();
    });
}); 
