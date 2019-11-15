<?php
class Database{
    public function create($nome, $endereco, $cidade, $estado, $tipo_cargo, $area_interesse, $curriculo){
        $query = 'INSERT INTO cadastro VALUES (DEFAULT, '.$nome.', '.$endereco.', '.$cidade.', '.$estado.', '.$tipo_cargo.', '.$area_interesse.', '.$curriculo.')';
        $itil = mysqli_query(mysqli_connect('localhost', 'root', '', 'banco'), $query);
        if ($itil) {
            echo '<script>alert("Dados cadastrados")</script>';
        } else {
            echo '<script>alert("Dados não cadastrados")</script>';
        }
    }
    public function read(){}
    public function update(){}
    public function delete(){}
}