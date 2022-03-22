<!DOCTYPE html>
<html lang="pr-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">    
    <title>Login</title>
</head>

<body>
    <div class="main-login"> <!--Campo de Login Geral-->
        <div class="left-login"> <!--Parte Esquerda-->                      
            <img src="main2.png" alt="">
        </div>    

        <div class="right-login"> <!--Parte Direita--> 
            <div class="card-login-direita"> <!--Card Login Principal-->

                    <h1 id="login2">LOGIN</h1>

                    <!--Usuário-->   
                    <form class="usuariocima" action="valida_login.php">                 
                    <div class="usuariocima"> <!--Div criada para o usuário ficar em cima da label-->
                        <label for="usuario">Usuário</label>
                        <input name="email" type="email" name="usuario" placeholder="Usuário">
                    </div> 

                    <!--Senha-->
                    <div class="usuariocima"> 
                        <label for="senha">Senha</label>
                        <input name="senha" type="password" name="senha" placeholder="Senha">

                        <!--mensagem de retorno com login invalido -->
                        <?php
                            if(isset($_GET['login'])){
                        ?>
                        <p>Usuario ou senha invalidos!</p>
                        <?php                        
                        }
                        ?>

                    </div> 
                    <button class="botao">Login</button>                    
                    </form>
            </div> 
        </div>
    </div>
    

</body>

</html>