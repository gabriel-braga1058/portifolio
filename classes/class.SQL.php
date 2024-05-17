<?php

require_once "class.Conexao.php";


class SQL

{
    public  $conexao_mysql;

    function __construct()
    {

        // echo 'depurar sql';exit;

        $oConexao = new conexao();



        $this->conexao_mysql = $oConexao->conexao;
    }



    function validaLogin($login, $senha)
    {
        $sql = "
        SELECT * FROM
        usuarios WHERE 
        email = '$login' AND
        senha = '$senha'";
    
        $res = mysqli_query($this->conexao_mysql, $sql);
    
        if ($res && mysqli_num_rows($res) > 0) {

            $usuario = mysqli_fetch_assoc($res);

            mysqli_free_result($res);

            return $usuario;
        } else {
            echo 'Erro ao executar a consulta';
            return false;
        }
    }
    


    function cadastrar($nome_completo, $email, $username, $senha)
    {
        $sql = "
        insert into usuarios 
        (        
                nome,
                email,
                senha,
                data_criacao) 

        VALUES ('$nome_completo', '$email','$username', '$senha')
        ";

        // echo $sql;
        $res = mysqli_query($this->conexao_mysql, $sql);


        return $res;
    }
}
