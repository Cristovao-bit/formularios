<?php
    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formúlario com três passos</title>
        <link rel="stylesheet" href="css/boot.css"/>
    </head>
    <body>
        <div class="resp"></div>
        
        <form class="form" method="post" enctype="multipart/form-data" name="formulario">
            <ul class="progress">
                <li class="active">Configurações</li>
                <li>Perfil Pessoal</li>
                <li>Detalhes</li>
            </ul>

            <fieldset>
                <h2>Configurações da conta</h2>
                <h3>Algumas configurações</h3>

                <input type="text" name="email" placeholder="Informe seu email"/>
                <input type="password" name="senha" placeholder="Informe sua senha"/>
                <input type="password" name="csenha" placeholder="Confirme sua senha"/>
                <input type="button" name="next1" class="btn btn-black btn-next" value="Próximo"/>
            </fieldset>

            <fieldset>
                <h2>Perfil Pessoal</h2>
                <h3>Redes Sociais</h3>

                <input type="text" name="facebook" placeholder="Informe seu Facebook"/>
                <input type="text" name="google+" placeholder="Informe seu Google+"/>
                <input type="text" name="twitter" placeholder="Informe seu Twitter"/>
                <input type="button" name="prev" class="btn btn-black btn-prev" value="Anterior"/>
                <input type="button" name="next2" class="btn btn-black btn-next" value="Próximo"/>
            </fieldset>

            <fieldset>
                <h2>Detalhes Pessoais</h2>
                <h3>Informe-nos alguns detalhes</h3>

                <input type="text" name="nome" placeholder="Informe seu Primeiro Nome"/>
                <input type="text" name="sobrenome" placeholder="Informe seu Sobrenone"/>
                <input type="text" name="telefone" placeholder="(xx)xxxxx-xxxx"/>
                <input type="button" name="next" class="btn btn-black btn-prev active" value="Anterior"/>
                <input type="submit" name="next" class="btn btn-black active" value="Enviar"/>
            </fieldset>
        </form>

        <script src="js/jquery.js"></script>
        <script src="js/function.js"></script>
    </body>
</html>
