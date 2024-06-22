<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

    <div class="register-container">
        <div class="imagem">
            <a href="../home/home.php"><img src="../home/imagens/Coração.png" alt=""></a>
        </div>

        <h2 class="text-center">Cadastro</h2>

        <form action="" method="post">
            
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome" required>
            </div>

            <div class="form-group">
                <label for="birthdate">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthdate" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="tel" class="form-control" id="phone" placeholder="Digite seu telefone" required>
            </div>

            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite seu CEP" required>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
            </div>

            <div class="form-group">
                <label for="state">Estado</label>
                <select class="form-control" id="state" required>
                    <option value="">Selecione o estado</option>
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AP">AP</option>
                    <option value="AM">AM</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MT">MT</option>
                    <option value="MS">MS</option>
                    <option value="MG">MG</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PR">PR</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RS">RS</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="SC">SC</option>
                    <option value="SP">SP</option>
                    <option value="SE">SE</option>
                    <option value="TO">TO</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
            </div>

            <div class="form-group">
                <label for="confirm-email">Confirme seu E-mail</label>
                <input type="email" class="form-control" id="confirm-email" placeholder="Confirme seu e-mail" required>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #289548; border: none;">Cadastrar-se</button>

        </form>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cep').keyup(function() {
                var cep = $(this).val().replace(/\D/g, '');
                if (cep.length == 8) {
                    $.getJSON(`https://viacep.com.br/ws/${cep}/json/`, function(data) {
                        if (!("erro" in data)) {
                            $('#cidade').val(data.localidade);
                            $('#state').val(data.uf);
                        } else {
                            alert('CEP não encontrado.');
                        }
                    }).fail(function() {
                        alert('Erro ao buscar CEP. Por favor, tente novamente mais tarde.');
                    });
                }
            });
        });
    </script>
</body>
</html>


