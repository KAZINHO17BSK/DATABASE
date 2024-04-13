<?php
// Configurações de conexão com o banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$dbname = "empresa"; // Nome do banco de dados que você deseja acessar

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}

// Verifica se os campos foram preenchidos
if(isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Aqui você pode realizar a lógica de autenticação, como verificar no banco de dados se o usuário existe, etc.
    // Vamos supor que você tenha recuperado o ID do departamento associado ao usuário autenticado

    // Vamos supor que você tenha recuperado o ID do departamento associado ao usuário autenticado do banco de dados
    $id_departamento = 1; // Substitua isso pelo ID real recuperado do banco de dados

    switch ($id_departamento) {
        case 1:
            header("Location: ./Vendas/vendas.php");
            break;
        case 2:
            header("Location: ./Marketing/marketing.php");
            break;
        case 3:
            header("Location: ./Tecnologia/tecnologia.php");
            break;
        default:
            header("Location: formulario_login.php");
            exit();
    }
} else {
    header("Location: formulario_login.php");
    exit();
}
?>
