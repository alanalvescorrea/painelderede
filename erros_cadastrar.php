
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

        <script type="text/javascript">
            function validaCampo()
            {
                if (document.cadastro.cod_erro.value == "")
                {
                    alert("O Campo código erro Ã© obrigatÃ³rio!");
                    return false;
                }
                else
                if (document.cadastro.nome.value == "")
                {
                    alert("O Campo nome Ã© obrigatÃ³rio!");
                    return false;
                }
                else
                if (document.cadastro.descricao.value == "")
                {
                    alert("O Campo descrição Ã© obrigatÃ³rio!");
                    return false;
                }
                else
                if (document.cadastro.solucao.value == "")
                {
                    alert("O Campo Solução Ã© obrigatÃ³rio!");
                    return false;
                }
                else
                    return true;
            }
<!-- Fim do JavaScript que validarÃ¡ os campos obrigatÃ³rios! -->
        </script>
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
                            <h3>Cadastro de erros</h3><br>
                            <form id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo();
                return false;">
                                <table width="400" border="0">
                                    <tr>
                                        <td width="69">* Codigo erro:</td>
                                        <td width="100"><input name="cod_erro" type="text" id="cod_erro" class="span4" required="" />

                                    </tr>
                                    <tr>
                                        <td>* Nome erro:</td>
                                        <td><input name="nome" type="text" id="nome" required="" />

                                    </tr>
                                    <tr>
                                        <td>* Descri&ccedil;ao:</td>
                                        <td><textarea  name="descricao" required=""></textarea>

                                    </tr>
                                    <tr>
                                        <td>* Solução:</td>
                                        <td><textarea  name="solucao" required=""></textarea>

                                    </tr>




                                    <tr>
                                        <td colspan="2"><p>
                                                <input name="cadastrar" type="submit" id="cadastrar" value="Concluir meu Cadastro!" /> 
                                                <br />
                                                <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />
                                                <br />
                                                <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
                                            <p>&nbsp; </p></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>