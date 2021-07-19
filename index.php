<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Início | SEVERIANO & BATTISTI Advogados</title>
    <meta name="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="mystyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <script src="https://cdn.jsdelivr.net/npm/tween.js@16.3.4"></script>

</head>
<body>
    <nav style="background-color: black" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav mr-auto">
            <div>
                <li class="nav-item">
                    <a id="navbar-brand" href="#" style="text-align: center;">
                        <img src="logo.jpg" style="margin-right: 10px;">
                        <span>SEVERIANO E BATTISTI SOCIEDADE DE ADVOGADOS</span>
                    </a>
                </li>
            </div>
            <div class="collapse navbar-collapse" style="margin-left: 10px;">
                <li>
                    <a id="link-header" href="#serv-group"><i class="far fa-calendar-alt"></i>Agende Online |</a>
                    <a id="link-header" href="mailto:recepcao.sbadvogados@gmail.com"><i class="fas fa-inbox"></i>recepcao.sbadvogados@gmail.com |</a>
                    <a id="link-header" href="tel:51-3902-5445"><i class="fas fa-phone"></i>(51)3902-5445 |</a>
                    <a id="link-header" href=""><i class="fab fa-facebook"></i></a>
                </li>
            </div>
            <div class="topnav">
                <div id="myLinks">
                    <li id=liLinks>
                        <a id="link-mobile" href="#serv-group"><i class="far fa-calendar-alt"></i>Agende Online</a>
                        <a id="link-mobile" href="mailto:recepcao.sbadvogados@gmail.com"><i class="fas fa-inbox"></i>e-mail</a>
                        <a id="link-mobile" href="tel:51-3902-5445"><i class="fas fa-phone"></i>(51)3902-5445</a>
                        <a id="link-mobile" href=""><i class="fab fa-facebook fa-lg"></i></a>
                    </li>
                </div>
                <button href="javascript:void(0);" class="navbar-toggler" onclick="myFunction()" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </ul>
    </nav>
    <main>
        <div class="parallax"></div>
        <div id="main-content">
            <div id="main-content-group">
                <div id="main-content-title">
                    <div style="margin-right: 20px"><img style="height: 20vw; width: 20vw;" src="logoMain.jpeg"></div>
                    <div>ADVOGADOS</div>
                </div>
                <div id="main-content-text">
                    <p>Experiência. Respeito. Resultados.</p>
                </div>
            </div>
            <div class="parallax">
                <div id="div-main">
                    <div id="frame-div-location">
                        <div id="location-legend">
                            ONDE ESTAMOS
                        </div>
                        <div class="container">
                            <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13859.94365300349!2d-52.4300308!3d-29.7201673!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1fc13e6613e4ba06!2sSB%20Advogados%20-%20M%C3%A1ria%20Severiano%20e%20William%20Battisti!5e0!3m2!1spt-BR!2sbr!4v1621885796257!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div id="frame-div-video" style="margin-top: 4.5vw;">
                        <iframe id="div-video" src="https://www.youtube.com/embed/z-JNA18CKck" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p id="location-legend" style="margin-left: 0px; text-align: center;">APOSENTADORIA RURAL DESDE OS OITO ANOS DE IDADE</p>
                    </div>
                </div>
                <div id="serv-group">
                    <div id="s1" class="service-adv">
                        <img class="imgservice" src="service1.jpg" alt="">
                        <h1 class="txt-org">DIREITO PREVIDENCIÁRIO</h1>
                        <div id="serv-div_">
                            <p class="txt-org" style="padding-right: 30px;">Nosso escritório é especilizado em direito previdenciário.</p>
                            <p class="txt-org">30 Min.</p>
                        </div>
                        <div class="booking-option">
                            <button id="agbtn-1" class="btn btn-primary btnAgendar" onclick="showDiv1()">
                                AGENDE JÁ!
                            </button>
                            <button id="back-1" style="display:none" class="btn btn-primary btnAgendar" onclick="showDiv1()">
                                VOLTAR
                            </button>
                        </div>
                    </div>
                    <div id="direito-previdenciario"  style="display:none;">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                                                    <div class="tour-booking-form">
                                                        <form method="post" action="sendEmail()">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                                    <h4 class="tour-form-title">Agendamento</h4>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label required" for="select">Advogado(a)</label>
                                                                        <div class="select">
                                                                            <select id="selAdv" class="form-control">
                                                                                <option value="">Selecione...</option>
                                                                                <option value="w">William Battisti</option>
                                                                                <option value="m">Maria Severiano</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="datepicker">Dia</label>
                                                                        <div class="input-group">
                                                                            <input id="datepicker" type="datetime" placeholder="Date" class="form-control" required>
                                                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label required" for="select">Número de pessoas que participarão <br> (Máx. 3 pessoas por consulta)</label>
                                                                        <div class="select">
                                                                            <select id="selClients" class="form-control">
                                                                                <option value="">Selecione...</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                                                    <h4 class="tour-form-title">Seus dados para contato</h4>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="name">Nome</label>
                                                                        <input id="name" type="text" placeholder="Digite aqui..." class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="email"> Email</label>
                                                                        <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="phone"> Telefone/Celular</label>
                                                                        <input id="phone" type="text" placeholder="(51) 99999-9999" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                                    <div class="form-group">
                                                                        <label class="control-label" for="city">Cidade onde mora</label>
                                                                        <input id="city" type="text" placeholder="Cidade" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">
                                                                    <button type="submit" class="btn btn-primary" onclick="sendEmail()" value="send An Email">ENVIAR</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="s2" class="service-adv">
                        <img class="imgservice" src="service2.jpg" alt="">
                        <h1 class="txt-org">DIREITO DO TRABALHO</h1>
                        <div id="serv-div">
                            <p class="txt-org" style="padding-right: 30px;">Atuação em prol dos empregados.</p>
                            <p class="txt-org">30 Min.</p>
                        </div>
                        <div class="booking-option">
                            <button id="agbtn-2" class="btn btn-primary btnAgendar" onclick="showDiv2()">
                                AGENDE JÁ!
                            </button>
                            <button id="back-2" style="display:none" class="btn btn-primary btnAgendar" onclick="showDiv2()">
                                VOLTAR
                            </button>
                        </div>
                    </div>
                    <div id="direito-trabalho"  style="display:none;">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                                        <div class="tour-booking-form">
                                            <form method="post" name="myemailform" action="sendEmail()">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <h4 class="tour-form-title">Agendamento</h4>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label required" for="select">Advogado(a)</label>
                                                            <div class="select">
                                                                <select id="selAdv" class="form-control">
                                                                    <option value="">Selecione...</option>
                                                                    <option value="w">William Battisti</option>
                                                                    <option value="m">Maria Severiano</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="datepicker">Dia</label>
                                                            <div class="input-group">
                                                                <input id="datepicker" type="datetime" placeholder="Date" class="form-control" required>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label required" for="select">Número de pessoas que participarão <br> (Máx. 3 pessoas por consulta)</label>
                                                            <div class="select">
                                                                <select id="selclients" class="form-control">
                                                                    <option value="">Selecione...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                                        <h4 class="tour-form-title">Seus dados para contato</h4>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="name">Nome</label>
                                                            <input id="name" type="text" placeholder="Digite aqui..." class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email"> Email</label>
                                                            <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone"> Telefone/Celular</label>
                                                            <input id="phone" type="text" placeholder="(51) 99999-9999" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="city">Cidade onde mora</label>
                                                            <input id="city" type="text" placeholder="Santa Cruz do Sul" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">
                                                        <button type="submit" class="btn btn-primary" onclick="sendEmail()" value="send An Email">ENVIAR</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="s3" class="service-adv">
                        <img class="imgservice" src="service3.jpg" alt="">
                        <h1 class="txt-org">DIREITO BANCÁRIO</h1>
                        <div id="serv-div">
                            <p class="txt-org" style="padding-right: 30px;">Revisão de contratos bancários.</p>
                            <p class="txt-org">30 Min.</p>
                        </div>
                        <div class="booking-option">
                            <button id="agbtn-3" class="btn btn-primary btnAgendar" onclick="showDiv3()">
                                AGENDE JÁ!
                            </button>
                            <button id="back-3" style="display:none" class="btn btn-primary btnAgendar" onclick="showDiv3()">
                                VOLTAR
                            </button>
                        </div>
                    </div>
                    <div id="direito-bancario"  style="display:none;">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
                                        <div class="tour-booking-form">
                                            <form method="post" name="direitobancario" action="sendEmail()">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <h4 class="tour-form-title">Agendamento</h4>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label required" for="select">Advogado(a)</label>
                                                            <div class="select">
                                                                <select id="selAdv" class="form-control">
                                                                    <option value="">Selecione...</option>
                                                                    <option value="w">William Battisti</option>
                                                                    <option value="m">Maria Severiano</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="datepicker">Dia</label>
                                                            <div class="input-group">
                                                                <input id="datepicker" type="datetime" placeholder="Date" class="form-control" required>
                                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label required" for="select">Número de pessoas que participarão <br> (Máx. 3 pessoas por consulta)</label>
                                                            <div class="select">
                                                                <select id="selclients" class="form-control">
                                                                    <option value="">Selecione...</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                                                        <h4 class="tour-form-title">Seus dados para contato</h4>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="name">Nome</label>
                                                            <input id="name" type="text" placeholder="Digite aqui..." class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email"> Email</label>
                                                            <input id="email" type="text" placeholder="xxxx@xxxx.xxx" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone"> Telefone/Celular</label>
                                                            <input id="phone" type="text" placeholder="(51) 99999-9999" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="city">Cidade onde mora</label>
                                                            <input id="city" type="text" placeholder="Santa Cruz do Sul" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px;">
                                                        <button type="submit" class="btn btn-primary" onclick="sendEmail()" value="send An Email">ENVIAR</button>
                                                    </div>
                                            </form id="myForm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="contact-group">
            <div id="contact">
                <div id="contact-title">
                    <h1 style="font-family: serif; color: white;">ENTRE EM CONTATO</h1>
                    <p style="color: white;">Rua Fernando Abott, 520, Centro, Santa Cruz do Sul/RS</p>
                    <div id="serv-div">
                        <a href="mailto:recepcao.sbadvogados@gmail.com" style="color: white;">recepcao.sbadvogados@gmail.com</a>
                        <a href="tel:51-3902-5445" style="color: white;">(51)3902-5445</a>
                    </div>
                    <div style="display: flex; justify-content:space-evenly; margin-top: 30px;">
                        <a href="" style="color: white;"><i class="fab fa-youtube fa-5x"></i></a>
                        <a href="" style="color: white;"><i class="fab fa-facebook fa-5x"></i></a>
                    </div>
                </div>
                <div id="contact-form">
                    <div id="serv-div">
                        <label for="">Nome:</label>
                        <input type="text" id="nclient" name="nclient" placeholder="Seu nome..">
                    </div>
                    <small class="form-text">Não vamos compartilhar seus dados com ninguém.</small>
                    <div id="serv-div">
                        <label for="">E-mail:</label>
                        <input type="text" id="mail" name="email" placeholder="Seu e-mail..">
                    </div>
                    <div id="serv-div">
                        <label for="">Telefone:</label>
                        <input type="text" id="phone" name="telephone" placeholder="Seu telefone..">
                    </div>
                    <div id="serv-div">
                        <label for="">Endereço:</label>
                        <input type="text" id="addr" name="address" placeholder="Seu endereço..">
                    </div>
                    <div id="serv-div">
                        <label for="">Assunto:</label>
                        <textarea type="text" id="sub" name="subject" style="border-radius: 3px;" placeholder="Digite a sua mensagem aqui.."></textarea>
                    </div>
                    <div style="text-align: right; margin-top: 10px;">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
            function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }

    function showDiv1() {
        if(document.getElementById('direito-previdenciario').style.display === "none"){
            document.getElementById('direito-previdenciario').style.display = "flex";
            document.getElementById('s2').style.display = "none";
            document.getElementById('s3').style.display = "none";
            document.getElementById('agbtn-1').style.display = "none";
            document.getElementById('back-1').style.display = "flex";
        }else{
            document.getElementById('direito-previdenciario').style.display = "none";
            document.getElementById('s2').style.display = "flex";
            document.getElementById('s3').style.display = "flex";
            document.getElementById('agbtn-1').style.display = "flex";
            document.getElementById('back-1').style.display = "none";
        }
    }

        function showDiv2() {
            if(document.getElementById('direito-trabalho').style.display === "none"){
                document.getElementById('direito-trabalho').style.display = "flex";
                document.getElementById('s1').style.display = "none";
                document.getElementById('s3').style.display = "none";
                document.getElementById('agbtn-2').style.display = "none";
                document.getElementById('back-2').style.display = "flex";
        }else{
                document.getElementById('direito-trabalho').style.display = "none";
                document.getElementById('s1').style.display = "flex";
                document.getElementById('s3').style.display = "flex";
                document.getElementById('agbtn-2').style.display = "flex";
                document.getElementById('back-2').style.display = "none";
        }
    }

        function showDiv3() {
            if(document.getElementById('direito-bancario').style.display === "none"){
                document.getElementById('direito-bancario').style.display = "flex";
                document.getElementById('s1').style.display = "none";
                document.getElementById('s2').style.display = "none";
                document.getElementById('agbtn-3').style.display = "none";
                document.getElementById('back-3').style.display = "flex";
        }else{
                document.getElementById('direito-bancario').style.display = "none";
                document.getElementById('s1').style.display = "flex";
                document.getElementById('s2').style.display = "flex";
                document.getElementById('agbtn-3').style.display = "flex";
                document.getElementById('back-3').style.display = "none";
        }
    }

    function focusOnElement(element_id) {
        $(element_id).goTo();
    }

    var min = '2021-06-21T00:00';
var max = '2021-12-21T00:00';

mobiscroll.datepicker('#demo-booking-single', {
    controls: ['calendar'],
    min: min,
    max: max,
    onPageLoading: function (event, inst) {
        getPrices(event.firstDay, function callback(bookings) {
            inst.setOptions({
                labels: bookings.labels,
                invalid: bookings.invalid
            });
        });
    }
});
                                  
function getPrices(d, callback) {
    var invalid = [],
        labels = [];

    mobiscroll.util.http.getJson('//trial.mobiscroll.com/getprices/?year=' + d.getFullYear() + '&month=' + d.getMonth(), function (bookings) {
        for (var i = 0; i < bookings.length; ++i) {
            var booking = bookings[i],
                d = new Date(booking.d);

            if (booking.price > 0) {
                labels.push({
                    start: d,
                    title: '$' + booking.price,
                    textColor: '#e1528f'
                });
            } else {
                invalid.push(d);
            }
        }
        callback({ labels: labels, invalid: invalid });
    }, 'jsonp');
}
        
 function sendEmail() {
    var lawyer = $("#selAdv");
    var date = $('#datePicker');
    var clientes = $("#selclients");
    var name = $("#name");
    var email = $("#email");
    var tel = $("#phone");
    var city = "";
    isNotEmpty($("#city")) ? city = $("#city") : city = "Santa Cruz do Sul";
    var subject = $("#subject");
    var body = $("#body");
     
    if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
        $.ajax({
           url: 'mailLawyer.php',
           method: 'POST',
           dataType: 'json',
           data: {
               lawyer: lawyer.val(),
               date: date.val(),
               clientes: clientes.val(),
               name: name.val(),
               email: email.val(),
               tel: tel.val(),
               city: city.val(),
               subject: subject.val(),
               body: body.val()
           }, success: function (response) {
                $('#myForm')[0].reset();
                $('.sent-notification').text("Solicitação Enviada. Aguarde a resposta de confirmação.");
           }
        });
    }
}

function isNotEmpty(caller) {
    if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
    } else
        caller.css('border', '');

    return true;
    }

    </script>

</body>
</html> 