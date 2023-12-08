<?php
    require_once '../util/config.php';
$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'POST':
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $funcao = $_POST['funcao'];
        $telefone = $_POST['telefone'];

        $result = adicionarFuncionario($id, $nome, $funcao, $telefone);
        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
        header('Content-type: application/json');
    break;
    case 'GET':
        $result = listarFuncionario();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    break;
    case 'DELETE':
        $id = $_GET['id'];
        $result = deletarFuncionario($id);

        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
    break;
    case 'PUT':
        $result = json_decode(file_get_contents("php://input"), true);
        $id = $_GET['id'];
        $nome = $_GET['nome'];
        $funcao = $_GET['funcao'];
        $telefone = $_GET['telefone'];

        $result = editarFuncionario($id, $nome, $funcao, $telefone);
        
        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }   
        header('Conten-type: application/json');
        echo json_encode($result);
    break;
}
?>
