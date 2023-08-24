<?php

    include_once("controller/DataBaseController.php");
    //declaration of the object and array start with underline
    $_db = new DataBaseController;
   

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Câmara Municipal Belém do Piauí</title>
        <meta http-equiv="content-type" content="text/html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="expires" content="0" />
        <meta charset="utf-8">
        <meta property="og:title"  content="Câmara Municipal Belém do Piauí">
        <meta property="og:site_name" content="Câmara Municipal Belém do Piauí">
        <?
       
        ?>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        
        
        <!-- Icones FontAwesome -->
        <script src="https://use.fontawesome.com/bcd9de9bc8.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
        <!-- CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
        <!-- <link rel="stylesheet" href="/site/css/index.css" type="text/css"></link> -->
        <link rel="stylesheet" href="https://belemdopiaui.pi.leg.br/site/css/style.css" type="text/css"></link>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet">
        
    </head>
    <body>
        <div class='row row-pages'>
            <header class="topo" id ="inicio">
                <div class="img-logo">
                    <img src="https://belemdopiaui.pi.leg.br/site/img/brasao-cidade-web.png" alt="First slide"/>
                </div>
                <div class="redes-sociais">
                    <a href="https://www.facebook.com/cmvbelempi/" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com/cmbelempi?igshid=Y2I2MzMwZWM3ZA==" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
                <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <span>
                                <div class='lds-ring' style="background-color: #eeeeee"><div></div><div></div><div></div><div></div></div>
                            </span>
                            <span class="banner" style="display:none; display: flex; justify-content: center;">
                            </span>
                        </div>
                    </div>
                </div> -->
            </header>

                <nav class="navbar navbar-expand-lg navbar-light" id="nav">
                    <!-- <a class="navbar-brand" href="#">Belém do Piauí</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
            
                            <?php
                            if (@$_GET["pagina"]) {
                            ?>
                                <li class="nav-item">
                                    <a class='nav-link' href='/' data-icon='fa fa-home'><i class='fa fa-home'></i>Início</a>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/cidade" target=""><i class='fa fa-map'></i>Cidade</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/vereadores"target=""><i class='fa fa-users'></i>Vereadores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/noticias/" target=""><i class='fa fa-newspaper-o'></i>Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contato" target=""><i class='fa fa-comment'></i>Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://transparencia.belemdopiaui.pi.leg.br/esic" target="_blank"><i class='fa fa-comments'></i>Ouvidoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://transparencia.belemdopiaui.pi.leg.br/" target="_blank"><i class='fa fa-info-circle'></i>Transparência</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
                
           
            
            <div class='include-pages'>



                <div class="acessibilidade">
                    <div class="dark-mode">
                        <input type="checkbox" class="checkbox" id="chk">
                        <label class="label" for="chk" title="Contraste">
                            <i class="fa fa-moon-o" aria-hidden="true"></i>
                            <i class="fa fa-sun-o" aria-hidden="true"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
                    <form action="/busca" method="post">
                        <div class="box-search">
                            <input type="text" id="txtBusca" name="termo" placeholder="O que você procura?">
                            <a href="" title="Pesquisar">
                                <i class="fa fa-search icon"></i>
                            </a>
                        </div>
                    </form>
                    <div class="btn-mapa-site">
                        <a href="/mapa-site" title="Mapa do site">
                            <i class="fa fa-sitemap" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="btn-acessibilidade">
                        <a href="/acessibilidade" target="" title="Acessibilidade">
                            <i class="fa fa-wheelchair"></i>
                        </a>
                    </div>
                    <div class="btn-container">
                        <button name="increase-font" id="increase-font" title="Aumentar fonte">A +</button>
                        <button name="decrease-font" id="decrease-font" title="Diminuir fonte">A -</button>
                    </div>
                </div>



                <?php
				$page = @$_GET["pagina"]; 
				// verificar se é pagina home ou não 
                if($page){
                    include("pages/{$page}.php");
                }else{
                    include("pages/home.php");
                }

                // $endPoint = array("", "noticias", "cidade", "vereadores", "contato");
                // foreach ($endPoint as $now){
                //     if($page == $now){
                //         if($now == ""){
                //             $now = "home";
                //         }
                //         include("pages/{$now}.php");
                //     }
                // }


                ?>
            </div>
            
        </div>
        
        <div class='row-footer'>
            <div class='container' id="rodape">
            
            
          
                    
            
                <div class='row-icons'>
                    <div class="col">
                        <div class="img-footer">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <strong>Endereço:</strong>

                    </div>
                    <div class="col">
                        <div class="img-footer">
                            <i class="fa fa-phone"></i>
                        </div>
                        <strong>Telefones:</strong>
                        
                    </div>
                    <div class="col">
                        <div class="img-footer">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <strong>Horário de atendimento:</strong>
                      
                    </div>
                    <div class="col">
                        <div class="img-footer">
                            <i class="fa fa-at"></i>
                        </div>
                        <strong>Emails:</strong>
                       
                    </div>
                </div>
                <div class="row row-copy">
                    <div class="col">
                        <hr>
                        Câmara Municipal Belem do Piauí. CNPJ  Todos os direitos reservados. &copy; data dinanmica.
                    </div>
                </div>
                
                
            </div>
        </div>
		

    </body>
	<style>
		.cookie-disclaimer {
		  background: #000000;
		  color: #FFF;
		  opacity: 0.8;
		  width: 100%;
		  bottom: 0;
		  left: 0;
		  z-index: 1;
		  height: 150px;
		  position: fixed;
		}
		.cookie-disclaimer .container {
		  text-align: center;
		  padding-top: 20px;
		  padding-bottom: 20px;
		}

		.cookie-disclaimer .cookie-close{
		  float: right;
		  padding: 10px;
		  cursor: pointer;
}
	</style>
    <script>
	$(document).ready(function() { 
		var cookie = false;
		var cookieContent = $('.cookie-disclaimer');

		checkCookie();

		if (cookie === true) {
		  cookieContent.hide();
		}

		function setCookie(cname, cvalue, exdays) {
		  var d = new Date();
		  d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
		  var expires = "expires=" + d.toGMTString();
		  document.cookie = cname + "=" + cvalue + "; " + expires;
		}

		function getCookie(cname) {
		  var name = cname + "=";
		  var ca = document.cookie.split(';');
		  for (var i = 0; i < ca.length; i++) {
			var c = ca[i].trim();
			if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
		  }
		  return "";
		}

		function checkCookie() {
			console.log(document.cookie)
		  var check = getCookie("acookie");
		  if (check !== "") {
			return cookie = true;
		  } else {
			  return cookie = false; //setCookie("acookie", "accepted", 365);
		  }
		  
		}
		$('.accept-cookie').click(function () {
		  setCookie("acookie", "accepted", 365);
		  cookieContent.hide(500);
		});
	});
	// document.cookie.split(";").forEach(function(c) { document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); });
	
        $("h1").each( function(){
            icon = $(this).attr("data-icon");
            $(this).prepend("<i class='" + icon + "'></i> ");
        } );
        
        window.addEventListener("load", event => {
            var image = $('.banner');
            var load = image.complete;
            if(image.length == 0){
                console.log(image.length)
                // document.location.reload(true);
                setTimeout(() => {
                        console.log("aaaa")
                    $(".lds-ring").hide();
                    $(".banner").show();
                }, "1000");
            }
                $(".lds-ring").hide();
                $(".banner").show();
        
        });

        var $w = $(window);

        var $nav = $(".navbar");
        var $navTop = $nav.offset().top;

        $w.on("scroll", function () {
            if ($w.scrollTop() > $navTop) {
                $nav.addClass("fixed-in-top");
            } else {
                $nav.removeClass("fixed-in-top");
            }
        });


        // Aumentar font
        window.onload = function () {
            var elementBody = document.querySelector('body');
            var elementBtnIncreaseFont = document.getElementById('increase-font');
            var elementBtnDecreaseFont = document.getElementById('decrease-font');
            // Padrão de tamanho, equivale a 100% do valor definido no Body
            var fontSize = 100;
            // Valor de incremento ou decremento, equivale a 10% do valor do Body
            var increaseDecrease = 10;

            // Evento de click para aumentar a fonte
            elementBtnIncreaseFont.addEventListener('click', function (event) {
                if (fontSize <= 120) {
                    fontSize = fontSize + increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                }
            });

            // Evento de click para diminuir a fonte
            elementBtnDecreaseFont.addEventListener('click', function (event) {
                if (fontSize >= 90) {
                    fontSize = fontSize - increaseDecrease;
                    elementBody.style.fontSize = fontSize + '%';
                }
            });
        }

        // Evento de contraste
        const chk = document.getElementById('chk');
        var body = document.querySelector('body');

        // Buscando o contraste do localStorage
        let getMode = localStorage.getItem("mode");

        if(getMode && getMode === "dark"){
            $('#chk').prop('checked', true);
            $("body").toggleClass('dark');
            $("header").toggleClass('dark');
            $(".row-brasao").toggleClass('dark');
            $(".navbar").toggleClass('dark-nav');
            $(".menu-lateral ul li").toggleClass('dark-menu');
            $(".include-pages").toggleClass('dark');
            $(".include-pages p span").toggleClass('dark');
            $(".include-pages ul li span").toggleClass('dark');
            $(".include-pages .ul-noticias li a").toggleClass('dark');
            $(".include-pages .row .text-center a h1").toggleClass('dark');
            $(".home-noticias").toggleClass('dark');
            $(".card").toggleClass('dark-card');
            $(".card .card-body a").toggleClass('dark');
            $(".h1-titulo-sessao").toggleClass('dark');
            $(".carousel-caption a h5").toggleClass('dark-font-light');
            $("section ul li a").toggleClass('dark');
            $(".section-destaques .text-acessibilidade").toggleClass('dark-font-light');
            $(".section-destaques ul li a").toggleClass('dark-font-light');
            $(".section-destaques .fa-wheelchair").toggleClass('dark-font-light');
            $(".mapa-site li a").toggleClass('dark');
            $(".mapa-site ul li ul a").toggleClass('dark');
            $(".home-noticias ul li a").toggleClass('dark-font-light');
            $(".row-footer").toggleClass('dark');
        }

        // Evento do clique do botão para mudar contraste
        chk.addEventListener('change', () => {
            $("body").toggleClass('dark');
            $("header").toggleClass('dark');
            $(".row-brasao").toggleClass('dark');
            $(".navbar").toggleClass('dark-nav');
            $(".menu-lateral ul li").toggleClass('dark-menu');
            $(".include-pages").toggleClass('dark');
            $(".include-pages p span").toggleClass('dark');
            $(".include-pages ul li span").toggleClass('dark');
            $(".include-pages .ul-noticias li a").toggleClass('dark');
            $(".include-pages .row .text-center a h1").toggleClass('dark');
            $(".home-noticias").toggleClass('dark');
            $(".card").toggleClass('dark-card');
            $(".card .card-body a").toggleClass('dark');
            $(".h1-titulo-sessao").toggleClass('dark');
            $(".carousel-caption a h5").toggleClass('dark-font-light');
            $("section ul li a").toggleClass('dark');
            $(".section-destaques .text-acessibilidade").toggleClass('dark-font-light');
            $(".section-destaques ul li a").toggleClass('dark-font-light');
            $(".section-destaques .fa-wheelchair").toggleClass('dark-font-light');
            $(".mapa-site li a").toggleClass('dark');
            $(".mapa-site ul li ul a").toggleClass('dark');
            $(".home-noticias ul li a").toggleClass('dark-font-light');
            $(".row-footer").toggleClass('dark');

            // Salvando o contraste no localStorage
            if(!body.classList.contains("dark")){
                return localStorage.setItem("mode", "light");
                
            }
            return localStorage.setItem("mode", "dark");
        });


        // Evento para direcionar à parte especifica do site
        $(document).keydown(function(event) {
            if (event.altKey && event.which === 49){
                // alert('Alt + n pressed!');
                window.location.href = "#inicio"
                e.preventDefault();
            }else if (event.altKey && event.which === 50){
                // alert('Alt + n pressed!');
                window.location.href = "#nav"
                e.preventDefault();
            }else if (event.altKey && event.which === 51){
                // alert('Alt + n pressed!');
                window.location.href = "#main-page"
                e.preventDefault();
            }else if(event.altKey && event.which === 52){
                // alert('Alt + n pressed!');
                window.location.href = "#rodape"
                e.preventDefault();
            }
        });

        // Redirecionar para assunto selecionado
        var url_atual = window.location.href;
        result = url_atual.split("#");
        if(result[1] != undefined){
            window.location.href = "#" + result[1]
        }
        
        // window.addEventListener("load", event => {
        // });
        
        
        // $('meta[name=head]').attr("content","teste");
		// localStorage.clear();
		
    </script>

    
    
</html>