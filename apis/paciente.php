<?php
    require_once '../util/config.php';
$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'POST':
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $data_nasc = $_POST['data_nasc'];
        $endereco = $_POST['endereco'];

        $result = adicionarPaciente($id, $nome, $data_nasc, $endereco);
        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
        header('Content-type: application/json');
    break;
    case 'GET':
        $result = listarPaciente();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    break;
    case 'DELETE':
        $id = $_GET['id'];
        $result = deletarPaciente($id);

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
        $data_nasc = $_GET['data_nasc'];
        $endereco = $_GET['endereco'];

        $result = editarPaciente($id, $nome, $data_nasc, $endereco);
        
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
