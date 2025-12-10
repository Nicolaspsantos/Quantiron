<?php
$redirect_url = 'index.php';

$servername = "localhost"; 
$dbname = "SEU_NOME"; 
$username = "SEU_USARNAME"; 
$password = "SUA_SENHA"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    $error_msg = urlencode("Falha crítica de conexão. Tente redefinir a senha do MySQL.");
    header("Location: $redirect_url?status=erro&msg=$error_msg");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $tipo_projeto = filter_input(INPUT_POST, 'tipo_projeto', FILTER_SANITIZE_SPECIAL_CHARS);
    $detalhes = filter_input(INPUT_POST, 'detalhes', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nome) || empty($email) || empty($tipo_projeto) || empty($detalhes)) {
        $error_msg = urlencode("Por favor, preencha todos os campos obrigatórios.");
        header("Location: $redirect_url?status=erro&msg=$error_msg");
        exit();
    }

    // Com aspas de citação no nome da tabela: `orcamento`
    try {
        $stmt = $conn->prepare("INSERT INTO `orcamento` (nome, email, telefone, tipo_projeto, detalhes) 
                                VALUES (:nome, :email, :telefone, :tipo_projeto, :detalhes)");

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':tipo_projeto', $tipo_projeto);
        $stmt->bindParam(':detalhes', $detalhes);

        $stmt->execute();

        header("Location: $redirect_url?status=sucesso");
        exit();

    } catch(PDOException $e) {
        $error_msg = urlencode("Erro de Inserção SQL. Contate o suporte técnico.");
        header("Location: $redirect_url?status=erro&msg=$error_msg");
        exit();
    }

} else {
    header("Location: $redirect_url");
    exit();
}
?>
