$(function () {

    var atual_fs, prev_fs, next_fs;
    var formulario = $('form[name="formulario"]');

    function next(elem) {
        atual_fs = $(elem).parent();
        next_fs = $(elem).parent().next();

        $('.progress li').eq($('fieldset').index(next_fs)).addClass('active');
        atual_fs.hide(800);
        next_fs.show(800);
    }
    ;

    $('.btn-prev').click(function () {
        atual_fs = $(this).parent();
        prev_fs = $(this).parent().prev();

        $('.progress li').eq($('fieldset').index(atual_fs)).removeClass('active');
        atual_fs.hide(800);
        prev_fs.show(800);
    });

    $('input[name="next1"]').click(function () {
        var array = formulario.serializeArray();
        if (array[0].value == '' || array[1].value == '' || array[2].value == ''){
            $('.resp').html('<div class="trigger-error"><p>Preencha todos os campos para passar para próxima etapa!</p></div>');
        }else{
            $('.resp').html('');
            next($(this));  
        };
    });
    
    $('input[name="next2"]').click(function () {
        var array = formulario.serializeArray();
        if (array[3].value == '' || array[4].value == '' || array[5].value == ''){
            $('.resp').html('<div class="trigger-error"><p>Informe-nos seus perfies sociais para passar para próxima etapa!</p></div>');
        }else{
            $('.resp').html('');
            next($(this));  
        };
    });
    
    $('input[type="submit"]').click(function (evento) {
        var array = formulario.serializeArray();
        if (array[6].value == '' || array[7].value == '' || array[8].value == ''){
            $('.resp').html('<div class="trigger-error"><p>Informe mais detalhes para que possamos finalizar o cadastro com sucesso!</p></div>');
        }else{
            $.ajax({
                method: 'post',
                url: 'cadastrar.php',
                data: {cadastrar: 'sim', campos: array},
                dataType: 'json',
                beforeSend: function(){
                    $('.resp').html('<div class="trigger-error"><p>Aguarde enquanto processamos seus dados!</p></div>')
                },
                success: function(valor){
                    if(valor.error == 'sim'){
                        $('.resp').html('<div class="trigger-error"><p>' + valor.getError + '</p></div>');
                    }else{
                        $('.resp').html('<div class="trigger-success"><p>' + valor.getSuccess + '</p></div>');
                    }
                }
            });
        };
        evento.preventDefault();
    });

});