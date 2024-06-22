<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>Vacina em Casa!</title>
  </head>
  <body>
    <nav class="first_nav">
        <span style="font-size:20px; margin:auto;">Fique atento ao Calendário de Vacinação - log</span>
    </nav>
    <nav class="sec_nav">
        <img src="imagens/logo-nav.png" alt="Nykaa">
        <div>
            <p></p><a href="https://www.gov.br/pt-br/orgaos-do-governo"><strong>Órgãos do Governo</strong></a>
            <p></p><a href="https://www.gov.br/acessoainformacao/pt-br"><strong>Acesso à Informação</strong></a>
            <p></p><a href="https://www4.planalto.gov.br/legislacao"><strong>Legislação</strong></a>
            <p></p><a href="https://www.gov.br/governodigital/pt-br/acessibilidade-e-usuario/acessibilidade-digital"><strong>Acessibilidade</strong></a>
            <p></p><a href="sobre_nos.html"><strong>Sobre Nós</strong></a>
        </div>
        <div>
            <input style="height: 25px;" type="text" placeholder="O que procura?">
            <input style="height: 30px; padding: 0px;" type="image" src="https://cdn.iconscout.com/icon/free/png-64/search-1436-527970.png">
        </div>
        <div>
            <div class="d-grid gap-2 d-md-block">
                <a href="../index.php" class="btn btn-orange" role="button">Login</a>
                <a href="../edit.php" class="btn btn-orange" role="button">Cadastrar-se</a>
              </div>              
        </div>

    </nav> 

    <!-- images -->
    <img style="width: 100%;"
        src="imagens/banner-main.png"
        alt="Super SAver Days">
        <h1>O que está procurando?</h1>

    <!-- MakeTab -->
    <div class="makeupTab">
        <div>
            <img src="imagens/pelota.png"
                alt="makeup">
            <p>Vacinação</p>
        </div>
        <div>
            <img src="imagens/pelota.png"
                alt="skin">
            <p>Visitas</p>
        </div>
        <div>
            <img src="imagens/pelota.png"
                alt="Hair">
            <p>Covid-19</p>
        </div>
        <div>
            <img src="imagens/pelota.png"
                alt="luxe">
            <p>Notícias</p>
        </div>
    </div>

    <h2>Saiba o que está acontecendo!</h2>
    <div id="container1">
        <div>
            <img src="imagens/noticia 1.png"
                alt="Nykaa-1">
                <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/estao-abertas-as-adesoes-a-rede-nacional-de-transparencia-e-acesso-a-informacao-para-as-controladorias-gerais-dos-estados-distrito-federal-e-capitais"><strong>Estão abertas as adesões à Rede Nacional de Transparência e Acesso à Informação para as Controladorias-Gerais dos Estados, Distrito Federal e capitais</strong></a>
            <p class="noticia">Iniciativa visa à participação social, à ampliação da cidadania e ao fortalecimento da democracia</p>
        </div>
        <div>
            <img src="imagens/noticia 2.jpeg"
                alt="Nykaa2">
                <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/ministro-da-cgu-destaca-avancos-da-transparencia-e-da-lei-de-acesso-a-informacao-na-camara-dos-deputados"><strong>Ministro da CGU destaca avanços da transparência e da Lei de Acesso à Informação na Câmara dos Deputados</strong></a>
            <p>Vinícius de Carvalho apresentou conquistas e desafios na implementação da LAI e respondeu questionamentos sobre sigilos de 100 anos</p>
        </div>
        <div>
            <img src="imagens/noticia 3.png"
                alt="Nykaa-3">
                <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/cgu-participa-da-xv-conferencia-internacional-de-comissarios-de-informacao-na-albania"><strong>Estão abertas as adesões à Rede Nacional de Transparência e Acesso à Informação para as Controladorias-Gerais dos Estados, Distrito Federal e capitais</strong></a>
            <p>Evento reúne representantes de diversas nações com o objetivo de aprimorar a transparência e o acesso à informação em nível mundial</p>
        </div>
    </div>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    var Name = JSON.parse(localStorage.getItem("updateName")).Name ;

    document.querySelector("#update").innerText = Name ;
</script>