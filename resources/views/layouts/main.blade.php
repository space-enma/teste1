<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="shortcut icon" href="img/icospaceenma1.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>@yield('title')</title>
  </head>
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2V13S91VJF"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-2V13S91VJF');
    </script>
  <header>
    
    <div class="header">
        <div class="logo">
            <img  class="img-logo" src="/img/logo/logospace1.png" alt="">
        </div>
        <div class="menu">
            <div class="menu-toggle ">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a> </li>
                    <li><a  href="/servico">Serviços</a> </li>
                    <li><a href="/contats">Contato</a></li>
                    <li><a href="/equipe">Equipe</a></li>
                    <li><a href="/sobre">quem somos</a></li>
                </ul>
            </nav>
        </div>
    </div>
  </header> 
  <body>

    @yield('content')
    <footer>
      <div class="footer">
        <div>
            <div class="footer-logo">
                <h1><img class="footer-logo-img" src="/img/logo/logospace1.png" alt=""></h1>
            </div>

            <div class="footer-social">
                <div class="footer-social-titulo">
                    <h1>Redes social</h1>
                </div>

                <div class="footer-social-img">
                    <a target="_blank" href="https://www.instagram.com/space_enma/"><img  class="footer-img" src="/img/iconeredesocial/instagram1.png" alt=""></a>
                    <a target="_blank" href="https://www.youtube.com/@spaceenma3133"><img class="footer-img" src="/img/iconeredesocial/youtube1.png" alt=""></a>
                    <a target="_blank" href="https://www.linkedin.com/company/88687964/admin/"><img class="footer-img" src="/img/iconeredesocial/linkedin1.png" alt=""></a>
                    <a target="_blank" href="https://github.com/space-enma"><img class="footer-img" src="/img/iconeredesocial/github1.png" alt=""></a>         
                </div>
            </div>
        </div>
        <div class="footer-paginas">
            <div class="footer-pagina-titulo">
                <h1>Paginas</h1>
                
            </div>

            <div class="footer-paginas-pagina">
                <a target="_blank" href="/">Home</a>
                <a target="_blank" href="/servico">Serviços</a>
                <a target="_blank" href="/contats">Contato</a>
                <a target="_blank" href="/equipe">Equipe</a>
            </div>
        </div>   
        <div class="footer-paginas">
            <div class="footer-pagina-titulo">
                <h1>Dúvidas</h1>
                
            </div>

            <div class="footer-paginas-pagina">
                <a target="_blank" href="/politica">Política de Privacidade e  Segurança <br> de Dados</a>
               
            </div>
        </div>   
        <div class="footer-paginas">
            <div class="footer-pagina-titulo">
                <h1>Contato</h1>
                
            </div>

            <div class="footer-paginas-pagina">
                <a target="_blank" href="https://wa.me/31996822917">whatsapp</a>
                <p>spaceenma@spaceenma.com.br</p>
                <p>(31) 996822917</p>
                
            </div>
        </div>   
      </div>

      <div class="teste4"> 
            &#169; spaceenma.com.br - criaçao de sites, tecnicas de seo e suporte online ou precencial    
      </div>
    </footer>
  </body>

  <script src="/js/home.js"></script>
    <script src="/js/menu.js"></script>


</html>