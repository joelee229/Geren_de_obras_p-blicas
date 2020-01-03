<?php
        $dbconn = pg_connect("host=localhost port=5432 dbname=Banco_Gerenciamento_Obras_Publicas user=postgres password=admin") or 
        die ("Não foi possível conectar ao servidor PostGreSQL");
        //connect to a database named "postgres" on the host "host" with a username and password
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento</title>
    <link href="../_css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../_css/styleNavBar.css"/>
    <link rel="stylesheet" href="../_css/footerStyle.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
</head>
<body>
    <div id="navbar">
        <a href="#default" id="logo"><img id="img" src="../_images/logo3-2.0.png"></a>
        <div id="navbar-right">
            <a class="active" href="index2.php"><i class="fa fa-home"></i>Home</a>
            <a href="about.html"><i class="fa fa-address-card"></i>About</a>
        </div>
    </div>
    
    <section class="header-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" >
                        <h1 class="text-center">Resultados para <?php echo $_POST['data'] ?> / <?php  echo $_POST['atua'] ?> </h1>
                        <p class="lead text-center">Deslize para baixo e veja o(s) resultado(s)</p>   
                </div>
            </div>
        </div>
    </section>

    <section class="content-site">
        <div class="container">
            <div class="row" >
                <div class="col-sm-12" >
                    <h1 class="text-center">Monitoramento de Obras Públicas</h1>
                    <p class="text-center">Procure por obras públicas financiadas pelo governo para saber seus status.</p>
                </div>
            </div>
            <div class="row">
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/mid1.jpg">
                                <div class="caption text-center">
                                    <h3> Saiba de tudo</h3>
                                    <p>Tudo em primeira mão</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/mid2.jpg">
                                <div class="caption text-center">
                                    <h3> A respeito</h3>
                                    <p>Perto de você</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/mid3.jpg">
                                <div class="caption text-center">
                                    <h3> Das grandes</h3>
                                    <p>Só aqui</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/Obrinha05.jpeg">
                                <div class="caption text-center">
                                    <h3>Obras públicas</h3>
                                    <p>Informações oficiais</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/build-builder.jpg">
                                <div class="caption text-center">
                                    <h3>Implementadas</h3>
                                    <p>Nas obras públicas</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="../_images/Obrinha06.jpeg">
                                <div class="caption text-center">
                                    <h3>Pelo Governo</h3>
                                    <p>E de graça</p>
                                </div>
                            </div>
                        </div>   
                </div>
            </div>
        </section>

    <div class = 'card-area'>
        <h1 style="font-weight:bold; margin: 10px;">Dados correspondentes</h1>
        <ul id="lista">
                <?php
                        //$atuacao = $_POST['atua'];
                        //and Area_De_Atuacao = '$atuacao'
                        $data =  $_POST['data'];
                        $atua = $_POST['atua'];
                        $getdatas = "SELECT * FROM Tabela_De_Dados WHERE Data_De_Inicio = '$data' and Area_De_Atuacao='$atua'  LIMIT 6";
                        $getdatasquery = pg_query($getdatas) or die (pg_error()); //******** */
                        $row = pg_num_rows($getdatasquery);
                        if($row > 0){
                            while($getdatasline = pg_fetch_array($getdatasquery)){
                                $datat = $getdatasline[1];
                                $org_Supt = $getdatasline[2];
                                $ent_Vint = $getdatasline[3]; //'Ent_Vinc'
                                $uni_Gest = $getdatasline[4];  //'Uni_Gest'
                                $area_De_Atuacaot = $getdatasline[5]; //'Area_De_Atuacao'
                                $prog_Gov = $getdatasline[6];    //'Prog_Gov'
                                $valor_Emp = $getdatasline[7];  //'Valor_Emp'
                                $valor_liqui = $getdatasline[8];
                                $valor_Pago = $getdatasline[9];
                                echo "
                                   <li> <div class='card'>
                                        <p>Data de início:</p>$datat
                                        <p>Órgão superior:</p>$org_Supt
                                        <p>Entidade vinculada:</p>$ent_Vint
                                        <p>Unidade gestora:</p>$uni_Gest
                                        <p>Area de atuação:</p>$area_De_Atuacaot
                                        <p>Programa governamental:</p>$prog_Gov
                                        <p>Valor empenhado:</p>R$ $valor_Emp 
                                        <p>Valor líquido:</p>R$ $valor_liqui 
                                        <p>Valor pago:</p>R$ $valor_Pago 
 
                                    </div></li>";
                            }
                        }else {
                            echo "<center><b>Nenhum resultado encontrado com estes critérios</b></center>";
                        }
                ?>
                </ul>
                <p class="text-center" style="margin-left:87px;">
                         <a href="index2.php" class="btn btn-danger">Voltar</a>
                </p>
    </div>
    </section>
    
    <section class="img-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                        <h1 class="text-center">MUITO OBRIGADO</h1>
                        <p class="lead text-center">Volte sempre</p>
                </div>
            </div>
        </div>
    </section>

    <footer id="rodape">
        <div id="rodape-down">
            <p>&copyCopyright 2019 - by Die Techniker</p>
            <p><a href="http://facebook.com" target="_blank">Facebook</a> | <a href="http://twitter.com" target="_blank">Twitter</a></p>
        </div>
    </footer>
    

    <script src="../js/navAnimation.js"></script>
    <script src="../js/bootstrap.min.js"></script>

   
</body>
</html>