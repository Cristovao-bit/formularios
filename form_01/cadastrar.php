<?php

sleep(2);
include_once 'config.php';
if (isset($_POST['cadastrar']) && $_POST['cadastrar'] == 'sim'):
    $novos_campos = array();
    $campos_post = $_POST['campos'];
    $respostas = array();

    foreach ($campos_post as $indice => $valor):
        $novos_campos[$valor['name']] = $valor['value'];
    endforeach;

    if (!strstr($novos_campos['email'], '@')):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Email Inválido:</b> Preencha com um email válido!';
    elseif ($novos_campos['senha'] != $novos_campos['csenha']):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Senha Inválida:</b> As senhas informadas não correspondem!';
    elseif (!strstr($novos_campos['facebook'], 'http://')):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Facebook Inválido:</b> O endereço de facebook informado, não é válido!';
    elseif (!strstr($novos_campos['google+'], 'http://')):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Google+ Inválido:</b> O endereço de google+ informado, não é válido!';
    elseif (!strstr($novos_campos['twitter'], 'http://')):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Twitter Inválido:</b> O endereço de twitter informado, não é válido!';
    elseif (strlen($novos_campos['telefone']) <> 11):
        $respostas['error'] = 'sim';
        $respostas['getError'] = '<b>Telefone Inválido:</b> O número de telefone não é válido!';
    else:
        $insert_banco = $pdo->prepare("INSERT TO 'cadastro_usuario' VALUES 'user_nome' = ?, 'user_sobrenome' = ?, 'user_mail' = ?, 'user_senha' = ?, 'user_senhac' = ?, 'user_facebook' = ?, 'user_google' = ?, 'user_twitter' = ?, 'user_fone' = ?");
        $array_sql = array(
            $novos_campos['nome'],
            $novos_campos['sobrenome'],
            $novos_campos['email'],
            $novos_campos['senha'],
            $novos_campos['csenha'],
            $novos_campos['facebook'],
            $novos_campos['google+'],
            $novos_campos['twitter'],
            $novos_campos['telefone']
        );
        if ($insert_banco->execute($array_sql)):
            $respostas['error'] = 'não';
            $respostas['getSuccess'] = 'Cadastro realizado com sucesso!';
        else:
            $respostas['error'] = 'sim';
            $respostas['getError'] = 'Não foi possível finalizar o cadastro com exceto, por favor tente novamente!';
        endif;
    endif;

    echo json_encode($respostas);
endif;
?>