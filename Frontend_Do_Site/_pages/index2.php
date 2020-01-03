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
            <a href="#areat"><i class="fa fa-search"></i>Search</a>
            <a href="about.html"><i class="fa fa-address-card"></i>About</a>
        </div>
    </div>
    
    <section class="header-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12" >
                        <h1 class="text-center">BEM-VINDO</h1>
                        <p class="lead text-center">Localize qualquer obra</p>
                        <p class="text-center">
                            <a href="#form" class="btn btn-danger">Começar</a>
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-site">

        <div class="row" >
            <div class="col-sm-12" >
                <h1 class="text-center">Monitoramento de Obras Públicas</h1>
                <p class="text-center">Procure por obras públicas financiadas pelo governo para saber seus status.</p>
            </div>
        </div>

        <div class="container">
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


    <section class="area" id= "areat">
        <form name="search_form" method="post" id="form" action="pagina.php">
            <h1>Filtro</h1>
            <div class="form-group">
                <select name="data">
                    <option value="">Data</option>
                    <option value="01/2019">01/2019</option>
                    <option value="02/2019">02/2019</option>
                    <option value="03/2019">03/2019</option>
                    <option value="04/2019">04/2019</option>
                    <option value="05/2019">05/2019</option>
                    <option value="06/2019">06/2019</option>
                    <option value="07/2019">07/2019</option>
                    <option value="08/2019">08/2019</option>
                    <option value="09/2019">09/2019</option>
                    <option value="10/2019">10/2019</option>
                    <?php
                    /*
                        echo "<option value='2019-01'>2019-01<option>";
                        echo "<option value>2019-02<option>";
                        echo "<option value>2019-03<option>";
                        echo "<option value>2019-04<option>";
                        echo "<option value>2019-05<option>";
                        echo "<option value>2019-06<option>";
                        echo "<option value>2019-07<option>";
                        echo "<option value>2019-08<option>";
                        echo "<option value>2019-09<option>";
                        echo "<option value>2019-10<option>";
                        echo "<option value>2019-11<option>";
                        echo "<option value>2019-12<option>";

                        $getdata="SELECT * FROM Tabela_De_Dados";
                        $getdataquery= pg_query($getdata) or die(pg_result_error(result));

                        while($getdataline=pg_fetch_array($getdataquery)){
                            $id = $getdataline[0];
                            $data = $getdataline[1];
                            echo "<option value='$id'>$data</option>";  
                        }*/
                    ?>
                </select>
                <br>
                <select name="atua">
                    <option value="">Área de atuação</option>
                    <option value="01 - Legislativa">01 - Legislativa <option>
                    <option value="02 - Judiciária">02 - Judiciária<option> 
                    <option value="03 - ">03 -  Não atribuido<option>
                    <option value="04 - Administração">04 - Administração <option>
                    <option value="05 - Defesa nacional">05 - Defesa nacional <option>
                    <option value="06 - Segurança pública">06 - Segurança pública<option>
                    <option value="07 - Relações exteriores">07 - Relações exteriores<option>
                    <option value="08 - Assistência social">08 - Assistência social<option> 
                    <option value="09 - Previdência social">09 - Previdência social<option>
                    <option value="10 - Saúde">10 - Saúde<option>
                    <option value="11 - ">11 - Não atribuido<option>
                    <option value="12 - Educação">12 - Educação <option>
                    <option value="13 - Cultura">13 - Cultura <option>
                    <option value="14 - Direitos da cidadania">14 - Direitos da cidadania<option>
                    <option value="15 - Urbanismo">15 - Urbanismo<option>
                    <option value="16 - ">16 - Não atribuido<option>
                    <option value="17 - ">17 - Não atribuido<option>
                    <option value="18 - Gestão ambiental">18 - Gestão ambiental<option>
                    <option value="19 - Ciência e Tecnologia">19 - Ciência e Tecnologia<option>
                    <option value="20 - Agricultura">20 - Agricultura<option>
                    <option value="21 - Organização agrária">21 - Organização agrária <option>
                    <option value="22 - Industria">22 - Industria<option>
                    <option value="23 - Comércio e serviços">23 - Comércio e serviços<option>
                    <option value="24 - Comunicações">24 - Comunicações<option>
                    <option value="25 - Energia">25 - Energia<option>
                    <option value="26 - Transporte">26 - Transporte<option>
                    <option value="27 - Desporto e lazer">27 - Desporto e lazer<option>
                    <option value="28 - Encargos especiais">28 - Encargos especiais<option>
                    <?php
                    /*
                        echo "<option value>01 - Legislativa <option>";
                        echo "<option value>02 - Judiciária<option>"; 
                        echo "<option value>03 - <option>";
                        echo "<option value>04 - Administração <option>";
                        echo "<option value>05 - Defesa nacional <option>";
                        echo "<option value>06 - Segurança pública<option>";
                        echo "<option value>07 - Relações exteriores<option>";
                        echo "<option value>08 - <option>"; 
                        echo "<option value>09 - Previdência social<option>";
                        echo "<option value>10 - Saúde<option>";
                        echo "<option value>11 - <option>";
                        echo "<option value>12 - Educação <option>";
                        echo "<option value>13 - Cultura <option>";
                        echo "<option value>14 - Direitos da cidadania<option>";
                        echo "<option value>15 - Urbanismo<option>";
                        echo "<option value>16 - <option>";
                        echo "<option value>17 - <option>";
                        echo "<option value>18 - Gestão ambiental<option>";
                        echo "<option value>19 - Ciência e Tecnologia<option>";
                        echo "<option value>20 - Agricultura<option>";
                        echo "<option value>21 - Organização agrária <option>";
                        echo "<option value>22 - Industria<option>";
                        echo "<option value>23 - Comércio e serviços<option>";
                        echo "<option value>24 - <option>";
                        echo "<option value>25 - Energia<option>";
                        echo "<option value>26 - Transporte<option>";
                        echo "<option value>27 - Desporto e lazer<option>";
                        echo "<option value>28 - Encargos especiais<option>";
                        $getatua = "SELECT * FROM Tabela_De_Dados";
                        $getatuaquery = pg_query($getatua) or die (pg_result_error(result));

                        while($getatualine=pg_fetch_array($getatuaquery)){
                            $id = $getatualine[0];
                            $area_De_Atuacao = $getatualine[4];
                            echo "<option value='$id'>$area_De_Atuacao<option>";
                        }*/
                    ?>    
                </select>
                        <br>
                <select name="org">
                    <option value="">Orgão superior</option>
                    <?php
                        $getsup = "SELECT * FROM Tabela_De_Dados";
                        $getsupquery = pg_query($getsup) or die (pg_result_error(result));

                        while($getsupline=pg_fetch_array($getsupquery)){
                            //$id = $getsupline[0];  ID
                            $org_Sup= $getsupline[2]; //'Org_Sup'
                            echo "<option value='$org_Sup'>$org_Sup<option>";
                        }
                    ?>    
                </select>
                
                <input id="botao" type="submit" name="submit" value="Pesquisar"/>
                
            </div>
        </form>
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