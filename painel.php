
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
        <META HTTP-EQUIV="Refresh" CONTENT="60">
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
               
                <a href="erros_cadastrar.php">Cadastrar Erro</a> -
                <a href="erros.php">Banco de Erros</a>

            </header>
            <section>				
                <div id="container_demo" >

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">

                            <div class="accordion" id="accordion2">
                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                            Status de sites
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="accordion-body collapse in">
                                        <div class="accordion-inner">
                                            <!--/* preg_match */-->
                                            <?php
                                            /* site 1 */
                                            echo '<h4>FACOS</h4>';
                                            $conectado = @ fsockopen('187.45.240.15', 80, $numeroDoErro, $stringDoErro, 10);
                                            if ($conectado) {
                                                print 'facos.edu.br <font color="blue"> Online</font><br>';
                                            } else {
                                                print 'facos.edu.br <font color="red"> Offline</font><br>';
                                            }

                                            /* site 2 */
                                            echo '<h4>ALAN CORREA</h4>';
                                            $conectado = @ fsockopen('31.170.166.223', 80, $numeroDoErro, $stringDoErro, 10);
                                            if ($conectado) {
                                                print 'alann.besaba.com <font color="blue"> Online</font><br>';
                                            } else {
                                                print 'alann.besaba.com <font color="red"> Offline</font><br>';
                                            }

                                            /* site 3 */
                                            echo '<h4>CLIENTE QUALQUER</h4>';
                                            $conectado = @ fsockopen('31.170', 80, $numeroDoErro, $stringDoErro, 10);
                                            if ($conectado) {
                                                print 'sitequalquer.com <font color="blue"> Online</font><br>';
                                            } else {
                                                print 'sitequalquer.com <font color="red"> Offline</font><br>';
                                                echo 'Código do erro: ' . $numeroDoErro . '<br>';
                                                echo 'Descrição do erro: ' . $stringDoErro . '<br>';
                                                echo '<a href="erros.php">Consultar possível solução!</a>';
                                            }
                                            /* site 3 */
                                            echo '<h4>ALAN WEB HOSTER</h4>';
                                            $conectado = @ fsockopen('www.alan2.webhoster.com.br/', 80, $numeroDoErro, $stringDoErro, 10);
                                            if ($conectado) {
                                                print 'alan2.webhoster.com.br/ <font color="blue"> Online</font><br>';
                                            } else {
                                                print 'alan2.webhoster.com.br/ <font color="red"> Offline</font><br>';
                                                echo 'Código do erro: ' . $numeroDoErro . '<br>';
                                                echo 'Descrição do erro: ' . $stringDoErro . '<br>';
                                                echo '<a href="erros.php">Consultar possível solução!</a>';
                                            }

                                            
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>