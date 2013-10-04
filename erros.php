
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
                            <h3>Banco de erros</h3><br>
                            <?php
                            //Conexão e consulta ao Mysql
                            mysql_connect('localhost', 'root', '') or die(mysql_error());
                            mysql_select_db('painelderede') or die(mysql_error());
                            $qry = mysql_query("select cod_erro, nome, descricao,solucao from erros");

                            //Pegando os nomes dos campos

                            $num_fields = mysql_num_fields($qry); //Obtém o número de campos do resultado

                            for ($i = 0; $i < $num_fields; $i++) {//Pega o nome dos campos
                                $fields[] = mysql_field_name($qry, $i);
                            }

                            //Montando o cabeçalho da tabela
                            $table = '<table border="1"><tr>';

                            for ($i = 0; $i < $num_fields; $i++) {
                                $table .= '<th>' . $fields[$i] . '</th>';
                            }

                            //Montando o corpo da tabela
                            $table .= '<tbody>';
                            while ($r = mysql_fetch_array($qry)) {
                                $table .= '<tr>';
                                for ($i = 0; $i < $num_fields; $i++) {
                                    $table .= '<td>' . $r[$fields[$i]] . '</td>';
                                }
                                $table .= '</tr>';
                            }

                            //Finalizando a tabela
                            $table .= '</tbody></table>';

                            //Imprimindo a tabela
                            echo $table;
                            echo '<br>';
                            echo '<a href="erros_cadastrar.php">Cadastrar novo erro</a>';
                            ?>
                        </div>
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>