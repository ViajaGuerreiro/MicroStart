<?php

require_once 'conexao.php';

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

        $id = Conexao::getInstance()->lastInsertId();

    //Tabela Telefone

        $sql2 = "INSERT INTO telefone_cli(cod_cli, telefone, ddd) values (?,?,?)";

        $cadastrarTel = Conexao::getInstance()->prepare($sql2);
        $cadastrarTel->bindValue(1, $id);
        $cadastrarTel->bindValue(2, $cliente->getTelefone1());
        $cadastrarTel->bindValue(3, $cliente->getDDD1());
        $cadastrarTel->execute();
        $cadastrarTel->bindValue(1, $id);
        $cadastrarTel->bindValue(2, $cliente->getTelefone2());
        $cadastrarTel->bindValue(3, $cliente->getDDD2());
        $cadastrarTel->execute();

        //tabela Endereco

        $sql3 = "INSERT INTO endereco(cep) values (?)";

        $cadastrarEnd = Conexao::getInstance()->prepare($sql3);

        $cadastrarEnd -> bindValue(1, $cliente -> getCep());
        $cadastrarEnd -> execute();

        $idEnd = Conexao::getInstance()->lastInsertId();

        // tabela con_Endereco

        $sql4 = "INSERT INTO con_end(cod_cli, cod_end, num_casa, complemento_casa) values (?,?,?,?)";

        $cadastrarEnd2 = Conexao::getInstance()->prepare($sql4);

        $cadastrarEnd2->bindValue(1, $id);
        $cadastrarEnd2->bindValue(2, $idEnd);
        $cadastrarEnd2->bindValue(3, $cliente->getNumero());
        $cadastrarEnd2->bindValue(4, $cliente->getComplemento());
        $cadastrarEnd2->execute();
    }

    public function read($id)
    {
        $sql = "SELECT nome AS 'nome_cli', sobrenome AS 'sobrenome_cli', DATE_FORMAT(data_nasc, '%d/%m/%Y') AS 'nascimento_cli', cnpj AS 'cnpj_cli', email AS 'email_cli', plano AS 'plano_atual' FROM cliente WHERE cod_cli = ?";

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
        $sql = 'SELECT telefone, ddd FROM telefone_cli WHERE telefone = ? AND ddd = ?';

        $verificarTel = Conexao::getInstance()->prepare($sql);
        $verificarTel->bindValue(1, $cliente->getTelefone1());
        $verificarTel->bindValue(2, $cliente->getDDD1());
        $verificarTel->execute();

        $sql2 = 'SELECT telefone, ddd FROM telefone_cli WHERE telefone = ? AND ddd = ?';

        $verificarTel2 = Conexao::getInstance()->prepare($sql2);
        $verificarTel2->bindValue(1, $cliente->getTelefone2());
        $verificarTel2->bindValue(2, $cliente->getDDD2());
        $verificarTel2->execute();

        if($verificarTel->rowCount() > 0 || $verificarTel2->rowCount() > 0) {
            echo " <script>
                        alert('Telefone já cadastrado');

                        window.location.href = '../view/cadastrarCli.php';
                    </script>";
        } else {
            return 'certo';
        }
    }

}
