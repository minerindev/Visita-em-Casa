<?php

include '../header.php';

?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<script>
        Swal.fire({
          icon: 'warning',
          title: 'Cadastre-se',
          text: 'Você precisa se cadastrar para agendar uma visita.',
          showCancelButton: true,
          confirmButtonText: 'Sim, continuar',
          cancelButtonText: 'Cancelar',
          customClass: {
            confirmButton: 'btn-confirm-class'  // Classe CSS personalizada para o botão de confirmação
          }
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = '../cadastro/cadastro.php';
          }
        });

        // Aplicar a cor ao botão de confirmação
        document.querySelector('.btn-confirm-class').style.backgroundColor = '#289548';
    </script>";
}
?>

<!-- Banner Principal -->
<img class="shadow" style="width: 100%;" src="imagens/banner.png" alt="Banner Vacinação">

<h1>O que está procurando?</h1>


<!-- Procura -->
<div class="makeupTab">
    <div>
        <a href="https://www.gov.br/saude/pt-br/vacinacao"><img src="imagens/vacinas.png" alt="vacinas"></a>
        <a href="https://www.gov.br/saude/pt-br/vacinacao">
            <p>Vacinação</p>
        </a>
    </div>
    <div>
        <img src="imagens/visitas.png" alt="skin">
        <p>Visitas</p>
    </div>
    <div>
        <a href="https://www.gov.br/saude/pt-br/assuntos/covid-19"><img src="imagens/Covid.png" alt="covid 19"></a>
        <a href="https://www.gov.br/saude/pt-br/assuntos/covid-19">
            <p>Covid-19</p>
        </a>
    </div>
    <div>
        <a href="https://www.gov.br/saude/pt-br/assuntos/noticias"><img src="imagens/noticias.png" alt="news"></a>
        <a href="https://www.gov.br/saude/pt-br/assuntos/noticias">
            <p>Notícias</p>
        </a>
    </div>
</div>

<!-- Banner 2 + Btn de agendamento -->
<div class="banner-container">
    <img class="banner-image" src="imagens/banner-agenda.jpg" alt="">
    <form method="POST" action="">
        <a href="../cadastro/cadastro.php"><button class="centered-button">Agendar uma visita</button></a>
    </form>
</div>

<!-- Conheça nosso Trabalho -->
<h2 class="h2perso">Concheça mais sobre nosso trabalho!</h2>

<div class="content-wrapper">
    <div class="content">

        <img src="imagens/" alt="">
        <h2>Visitas de Agentes de Saúde</h2>

        <p class="p_visitas">As visitas de agentes de saúde nas casas de idosos são uma prática essencial para garantir a saúde e o bem-estar dessa população vulnerável. Esses profissionais desempenham um papel crucial na prestação de cuidados de saúde preventivos e curativos, proporcionando uma série de serviços e apoio direto aos idosos em suas residências.</p>

        <br>

        <h3>Como são realizadas as visitas</h3>
        <ul>
            <li><span class="list-item-title">Agendamento e Planejamento:</span> As visitas geralmente são agendadas com antecedência, permitindo que os idosos e suas famílias se preparem para a chegada do agente de saúde. O planejamento envolve a identificação das necessidades específicas de cada idoso, levando em consideração suas condições médicas e sociais.</li>
            <li><span class="list-item-title">Avaliação Inicial:</span> Na primeira visita, o agente de saúde realiza uma avaliação abrangente do estado de saúde do idoso. Isso inclui verificar sinais vitais, avaliar condições crônicas, revisar medicamentos e identificar quaisquer necessidades de cuidados adicionais.</li>
            <li><span class="list-item-title">Monitoramento Contínuo:</span> Visitas subsequentes são usadas para monitorar a saúde do idoso, ajustar tratamentos conforme necessário, administrar vacinas, e realizar exames de rotina. O agente de saúde também fornece educação sobre gestão de doenças crônicas e hábitos de vida saudáveis.</li>
            <li><span class="list-item-title">Coordenação de Cuidados:</span> Os agentes de saúde atuam como um elo de ligação entre o idoso e outros serviços de saúde. Eles podem coordenar consultas médicas, encaminhar para especialistas e assegurar que o idoso tenha acesso aos recursos necessários, como equipamentos médicos e serviços de reabilitação.</li>
            <li><span class="list-item-title">Apoio Emocional e Social:</span> Além dos cuidados médicos, os agentes de saúde oferecem apoio emocional e social, ajudando a combater a solidão e o isolamento social, que são comuns entre idosos. Eles podem organizar grupos de apoio e atividades comunitárias para promover a interação social.</li>
        </ul>

        <br>

        <h3>Importância das Visitas</h3>
        <ul>
            <li><span class="list-item-title">Prevenção de Doenças:</span> As visitas domiciliares permitem a detecção precoce de problemas de saúde e a intervenção rápida, prevenindo complicações e hospitalizações. A administração de vacinas e a promoção de hábitos saudáveis são cruciais para manter os idosos saudáveis.</li>
            <li><span class="list-item-title">Gerenciamento de Condições Crônicas:</span> Muitos idosos sofrem de doenças crônicas, como diabetes, hipertensão e artrite. O monitoramento contínuo e a educação fornecida pelos agentes de saúde ajudam a manter essas condições sob controle, melhorando a qualidade de vida dos idosos.</li>
            <li><span class="list-item-title">Redução de Custos de Saúde:</span> Ao prevenir complicações e hospitalizações desnecessárias, as visitas domiciliares reduzem os custos gerais de saúde. Manter os idosos em casa, com suporte adequado, é mais econômico do que cuidados em instituições de longa permanência.</li>
            <li><span class="list-item-title">Apoio a Famílias e Cuidadores:</span> As visitas também beneficiam as famílias e cuidadores dos idosos, fornecendo orientação, apoio e alívio temporário do cuidado diário. Isso é vital para a saúde mental e física dos cuidadores.</li>
            <li><span class="list-item-title">Promoção da Autonomia:</span> A assistência domiciliar permite que os idosos mantenham sua independência e permaneçam em um ambiente familiar e confortável. Isso é fundamental para seu bem-estar psicológico e emocional.</li>
        </ul>
    </div>
</div>

<br>

<!-- Notícias Gov -->
<h2 class="saiba">Saiba o que está acontecendo!</h2>
<div id="container1">
    <div>
        <img src="imagens/noticia 1.png" alt="Nykaa-1">
        <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/estao-abertas-as-adesoes-a-rede-nacional-de-transparencia-e-acesso-a-informacao-para-as-controladorias-gerais-dos-estados-distrito-federal-e-capitais"><strong>Estão abertas as adesões à Rede Nacional de Transparência e Acesso à Informação para as Controladorias-Gerais dos Estados, Distrito Federal e capitais</strong></a>
        <p class="noticia">Iniciativa visa à participação social, à ampliação da cidadania e ao fortalecimento da democracia</p>
    </div>
    <div>
        <img src="imagens/noticia 2.jpeg" alt="Nykaa2">
        <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/ministro-da-cgu-destaca-avancos-da-transparencia-e-da-lei-de-acesso-a-informacao-na-camara-dos-deputados"><strong>Ministro da CGU destaca avanços da transparência e da Lei de Acesso à Informação na Câmara dos Deputados</strong></a>
        <p>Vinícius de Carvalho apresentou conquistas e desafios na implementação da LAI e respondeu questionamentos sobre sigilos de 100 anos</p>
    </div>
    <div>
        <img src="imagens/noticia 3.png" alt="Nykaa-3">
        <a href="https://www.gov.br/acessoainformacao/pt-br/noticias-1/cgu-participa-da-xv-conferencia-internacional-de-comissarios-de-informacao-na-albania"><strong>Estão abertas as adesões à Rede Nacional de Transparência e Acesso à Informação para as Controladorias-Gerais dos Estados, Distrito Federal e capitais</strong></a>
        <p>Evento reúne representantes de diversas nações com o objetivo de aprimorar a transparência e o acesso à informação em nível mundial</p>
    </div>
</div>

<?php

include '../footer.php';

?>