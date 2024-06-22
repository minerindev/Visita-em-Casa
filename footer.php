<footer class="custom-footer">

    <div class="footer-container">

        <div class="footer-logo">
            <img src="imagens/logo-footer.png" alt="Logo">
        </div>

        <ul class="footer-links">
            <li><a href="https://www.gov.br/pt-br/orgaos-do-governo"><strong>Órgãos do Governo</strong></a></li>
            <li><a href="https://www.gov.br/acessoainformacao/pt-br"><strong>Acesso à Informação</strong></a></li>
            <li><a href="https://www4.planalto.gov.br/legislacao"><strong>Legislação</strong></a></li>
            <li><a href="https://www.gov.br/governodigital/pt-br/acessibilidade-e-usuario/acessibilidade-digital"><strong>Acessibilidade</strong></a></li>
            <li><a href="sobre_nos.php"><strong>Sobre Nós</strong></a></li>
        </ul>

        <div class="footer-info">
            <p>Vacina em Casa</p>
            <p>Visitas de Agentes da Saúde | Vacinação em Idosos </p>
            <p>visitaemcasa@visita.com.br</p>
        </div>

    </div>
    
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>

<script>
    var Name = JSON.parse(localStorage.getItem("updateName")).Name;

    document.querySelector("#update").innerText = Name;
</script>