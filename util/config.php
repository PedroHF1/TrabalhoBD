<?php

    function obterConexao() {
        return mysqli_connect("localhost", "root", "", "clinica_ortodontica", 3306);
    }

    function adicionarPaciente($id, $nome, $data_nasc, $endereco) {
        $conexao = obterConexao();

        $sql = "INSERT INTO paciente VALUES ('$id', '$nome', '$data_nasc', '$endereco')";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function listarPaciente() {
        $conexao = obterConexao();

        $sql = "SELECT * FROM paciente";
        $res = mysqli_query($conexao, $sql);
        $pacientes = [];

        while ($row = mysqli_fetch_assoc($res)) {
            $pacientes[] = $row;
        }
        return $pacientes;
    }

    function editarPaciente($id, $nome, $data_nasc, $endereco) {
        $conexao = obterConexao();

        $sql = "UPDATE paciente SET nome='$nome', data_nasc='$data_nasc', endereco='$endereco' WHERE id=$id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function deletarPaciente($id) {
        $conexao = obterConexao();

        $sql = "DELETE FROM paciente WHERE id = $id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    /*--------------------------------------------------------------------*/

    function adicionarFuncionario($id, $nome, $funcao, $telefone) {
        $conexao = obterConexao();

        $sql = "INSERT INTO funcionario VALUES ('$id', '$nome', '$funcao', '$telefone')";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function listarFuncionario() {
        $conexao = obterConexao();

        $sql = "SELECT * FROM funcionario";
        $res = mysqli_query($conexao, $sql);
        $funcionarios = [];

        while ($row = mysqli_fetch_assoc($res)) {
            $funcionarios[] = $row;
        }
        return $funcionarios;
    }

    function editarFuncionario($id, $nome, $funcao, $telefone) {
        $conexao = obterConexao();

        $sql = "UPDATE funcionario SET nome='$nome', funcao='$funcao', telefone='$telefone' WHERE id=$id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function deletarFuncionario($id) {
        $conexao = obterConexao();

        $sql = "DELETE FROM funcionario WHERE id = $id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    /*---------------------------------------------------------------------*/

    function adicionarConsulta($id, $data, $plano, $diagnostico) {
        $conexao = obterConexao();

        $sql = "INSERT INTO consulta VALUES ('$id', '$data', '$plano', '$diagnostico')";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function listarConsulta() {
        $conexao = obterConexao();

        $sql = "SELECT * FROM consulta";
        $res = mysqli_query($conexao, $sql);
        $consultas = [];

        while ($row = mysqli_fetch_assoc($res)) {
            $consultas[] = $row;
        }
        return $consultas;
    }

    function editarConsulta($id, $data, $plano, $diagnostico) {
        $conexao = obterConexao();

        $sql = "UPDATE consulta SET data='$data', plano='$plano', diagnostico='$diagnostico' WHERE id=$id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

    function deletarConsulta($id) {
        $conexao = obterConexao();

        $sql = "DELETE FROM consulta WHERE id = $id";
        $res = mysqli_query($conexao, $sql);
        return $res;
    }

?>