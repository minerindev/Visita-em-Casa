<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="agendamento.css">
    <title>Agendamento</title>
  </head>
  <body>

    <div class="container">
        <h1 class="text-center">Agendamento de Consultas</h1>
        <div class="table-container">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome do Agente de Saúde</th>
                        <th>Dia</th>
                        <th>Horário de Disponibilidade</th>
                        <th>Vacina</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Agente 1</td>
                        <td>Segunda-feira</td>
                        <td>10:00 - 11:00</td>
                        <td>
                            <select class="form-control">
                                <option value="vacina1">Vacina 1</option>
                                <option value="vacina2">Vacina 2</option>
                                <option value="vacina3">Vacina 3</option>
                            </select>
                        </td>
                        <td><button class="btn btn-primary">Agendar</button></td>
                    </tr>
                    <tr>
                        <td>Agente 2</td>
                        <td>Terça-feira</td>
                        <td>11:00 - 12:00</td>
                        <td>
                            <select class="form-control">
                                <option value="vacina1">Vacina 1</option>
                                <option value="vacina2">Vacina 2</option>
                                <option value="vacina3">Vacina 3</option>
                            </select>
                        </td>
                        <td><button class="btn btn-primary">Agendar</button></td>
                    </tr>
                    <tr>
                        <td>Agente 3</td>
                        <td>Quarta-feira</td>
                        <td>12:00 - 13:00</td>
                        <td>
                            <select class="form-control">
                                <option value="vacina1">Vacina 1</option>
                                <option value="vacina2">Vacina 2</option>
                                <option value="vacina3">Vacina 3</option>
                            </select>
                        </td>
                        <td><button class="btn btn-primary">Agendar</button></td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>