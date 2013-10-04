
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Monitoramento de sites</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />

        <!-- JQUERY --> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script> 
        <!-- TWITTER BOOTSTRAP CSS --> 
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" /> 
        <!-- TWITTER BOOTSTRAP JS --> <script src="bootstrap/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                   <!-- <strong>&laquo; Previous Demo: </strong>Responsive Content Navigator-->
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                       <!--  <strong>Back to the Codrops Article</strong>-->
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Sistema para <span>monitoramento de sites</span></h1>
                <a href="painel.php">Página Inicial</a> -
                <a href="erros_cadastrar.php">Cadastrar Erro</a> -
                <a href="erros.php">Banco de Erros</a>


            </header>
            <section>				
                <div id="container_demo" >

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <?php
//PREENCHA OS DADOS DE CONEXÃO A SEGUIR:
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
                            $cod_erro = $_POST ["cod_erro"]; //atribuição do campo "nome" vindo do formulário para variavel	
                            $nome = $_POST ["nome"]; //atribuição do campo "email" vindo do formulário para variavel
                            $descricao = $_POST ["descricao"]; //atribuição do campo "ddd" vindo do formulário para variavel
                            $solucao = $_POST ["solucao"]; //atribuição do campo "telefone" vindo do formulário para variavel
//conexão com o servidor
                            $conect = mysql_connect("localhost", "root", "");

// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
                            if (!$conect)
                                die("<h1>Falha na coneco com o Banco de Dados!</h1>");

// Caso a conexão seja aprovada, então conecta o Banco de Dados.	
                            $db = mysql_select_db("painelderede");


                            $query = "INSERT INTO `erros` ( `cod_erro` , `nome` , `descricao` , `solucao`) 
VALUES ('$cod_erro', '$nome', '$descricao', '$solucao')";

                            mysql_query($query, $conect);

                            echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
                            ?> 
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>