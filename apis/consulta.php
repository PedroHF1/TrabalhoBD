<?php
    require_once '../util/config.php';
$metodo = $_SERVER['REQUEST_METHOD'];

switch ($metodo) {
    case 'POST':
        $id = $_POST['id'];
        $data = $_POST['data'];
        $plano = $_POST['plano'];
        $diagnostico = $_POST['diagnostico'];

        $result = adicionarConsulta($id, $data, $plano, $diagnostico);
        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
        header('Content-type: application/json');
    break;
    case 'GET':
        $result = listarConsulta();
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($result);
    break;
    case 'DELETE':
        $id = $_GET['id'];
        $result = deletarConsulta($id);

        if ($result) {
            http_response_code(200);
        } else {
            http_response_code(500);
        }
    break;
    case 'PUT':
        $result = json_decode(file_get_contents("php://input"), true);
        $id = $_GET['id'];
        $data = $_GET['data'];
        $plano = $_GET['plano'];
        $diagnostico = $_GET['diagnostico'];

        $result = editarConsulta($id, $data, $plano, $diagnostico);
        
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
