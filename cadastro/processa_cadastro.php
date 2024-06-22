<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome do campo 'name' do formulário
    $name = $_POST['name'];
    
    // Remove espaços em branco no início e no final do nome
    $name = trim($name);

    // Verifica se o nome contém apenas letras e espaços
    if (preg_match('/^[a-zA-Z\s]+$/', $name)) {
        // O nome é válido
        echo "Nome válido: " . $name;
    } else {
        // O nome contém caracteres inválidos
        echo "Por favor, digite um nome válido (apenas letras e espaços).";
    }
}
?>
