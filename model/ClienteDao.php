<?php

require_once 'Conexao.php';

class ClienteDao
{
    //tabela cliente
    public function create(Cliente $cliente)
    {
        $sql = "INSERT INTO cliente(nome, sobrenome, data_nasc, cnpj, email, senha ) VALUES(?,?,?,?,?,?)";

        $cadastrar = Conexao::getInstance()->prepare($sql);
        $cadastrar->bindValue(1, $cliente->getNome());
        $cadastrar->bindValue(2, $cliente->getSobrenome());
        $cadastrar->bindValue(3, $cliente->getDataNasc());
        $cadastrar->bindValue(4, $cliente->getCnpj());
        $cadastrar->bindValue(5, $cliente->getEmail());
        $cadastrar->bindValue(6, $cliente->getSenha());
        $cadastrar->execute();
    }

    //tabela telefone
    public function createTel(Cliente $cliente){
        $sql = "INSERT INTO telefone_cli(cod_cli, telefone, ddd) values (?,?,?);";

        $cadastrar = Conexao::getInstance()->prepare($sql);
        $cadastrar -> bindValue(1, $cliente->getCod());
        $cadastrar -> bindValue(2, $cliente->getTelefone1());
        $cadastrar -> bindValue(3, $cliente->getDDD1());
        $cadastrar->execute();
        $cadastrar -> bindValue(1, $cliente->getCod());
        $cadastrar -> bindValue(2, $cliente->getTelefone2());
        $cadastrar -> bindValue(3, $cliente->getDDD2());
        $cadastrar->execute();

    }

    //tabela Endereco
    public function createEnd(Cliente $cliente){
        $sql = "INSERT INTO endereco(rua, cidade, uf, pais, bairro, cep) values (?, ?, ?, ?, ?, ?);";

        $add = Conexao::getInstance()->prepare($sql);
        $add -> bindValue(1, $cliente -> getRua());
        $add -> bindValue(2, $cliente -> getCidade());
        $add -> bindValue(3, $cliente -> getUF());
        $add -> bindValue(4, $cliente -> getPais());
        $add -> bindValue(5, $cliente -> getBairro());
        $add -> bindValue(6, $cliente -> getCep());
        $add -> execute();

    }

    public function read($id)
    {
        $sql = "SELECT nome AS 'nome_cli', sobrenome AS 'sobrenome_cli', DATE_FORMAT(data_nasc, '%d/%m/%Y') AS 'nascimento_cli', cnpj AS 'cnpj_cli', email AS 'email_cli' FROM cliente WHERE cod_cli = ?";

        $lerDados = Conexao::getInstance()->prepare($sql);
        $lerDados->bindValue(1, $id);
        $lerDados->execute();

        if($lerDados->rowCount() > 0) {
            $resultado = $lerDados->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }
        else {
            return NULL;
        }
    }

    public function update(Cliente $cliente)
    {
        $sql ="UPDATE cliente SET nome = ?, sobrenome = ?, data_nasc = ?, cnpj = ?, email = ?, senha = ? WHERE cod_cli = ? ";

        $alterar = Conexao::getInstance()->prepare($sql);
        $alterar->bindValue(1, $cliente->getNome());
        $alterar->bindValue(2, $cliente->getSobrenome());
        $alterar->bindValue(3, $cliente->getDataNasc());
        $alterar->bindValue(4, $cliente->getCnpj());
        $alterar->bindValue(5, $cliente->getEmail());
        $alterar->bindValue(6, $cliente->getSenha());
        $alterar->bindValue(7, $cliente->getCod());

        $alterar->execute();
    }

    public function delete($cod)
    {
        $sql = "DELETE FROM cliente WHERE cod_cli = ?";
        
        $deletar = Conexao::getInstance()->prepare($sql);
        $deletar->bindValue(1, $cod);

        $deletar->execute();
    }

    public function login($email, $senha) {
        $sql = "SELECT * FROM cliente WHERE email = ?";

        $loginEmail = Conexao::getInstance()->prepare($sql);
        $loginEmail->bindValue(1, $email);

        $loginEmail->execute();
        
        if($loginEmail->rowCount() > 0) {
            $dado = $loginEmail->fetch();

            if(password_verify($senha, $dado['senha'])) {
                $_SESSION['id'] = $dado['cod_cli'];
                echo " <script>
                    alert('Usuario Logado');

                    window.location.href = '../index.php';
                </script>";
                exit();
            }
            else {
                echo " <script>
                        alert('Usuario ou Senha Incorreto ');

                         window.location.href = '../View/loginCli.php';
                        </script>";
                exit();
            }
        }
        else {
            echo " <script>
                        alert('Usuario não autenticado');

                         window.location.href = '../view/loginCli.php';
                    </script>";
            exit();
        }
        exit();
    }

    public function verificarEmailCnpj(Cliente $cliente) {
        $sql = 'SELECT cnpj, email FROM cliente WHERE cnpj = ? OR email = ?';

        $verificar = Conexao::getInstance()->prepare($sql);
        $verificar->bindValue(1, $cliente->getCnpj());
        $verificar->bindValue(2, $cliente->getEmail());
        $verificar->execute();

        if($verificar->rowCount() > 0) {
            echo " <script>
                        alert('Email ou CNPJ já cadastrados');

                        window.location.href = '../view/cadastrarCli.php';
                    </script>";
        } else {
            return 'certo';
        }
    }

    public function verificarTel(Cliente $cliente) {
        $sql = 'SELECT telefone FROM telefone_cli WHERE telefone = ?';

        $verificarTel = Conexao::getInstance()->prepare($sql);
        $verificarTel->bindValue(1, $cliente->getTelefone1());
        $verificarTel->execute();

        if($verificarTel->rowCount() > 0) {
            return 'erro';
            echo " <script>
                        alert('Telefone já cadastrado');

                        window.location.href = '../view/cadastrarCli.php';
                    </script>";
        }
    }

}
