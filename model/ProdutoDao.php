<?php
require_once 'conexao.php';
require_once 'Cliente.php';


class ProdutoDao{

public function create_prod(Produto $produto, $id){

    //tabela marca

    $sql = "INSERT INTO marca(nome) values (?);";

    $inserirMarca = Conexao::getInstance()->prepare($sql);
    $inserirMarca ->bindValue(1, $produto->getNomeMarca());
    $inserirMarca->execute();

    $idMarca = Conexao::getInstance()->lastInsertId();

    //tabela produto

    $sql2 = "INSERT INTO lote(cod_marca, cod_categoria, cod_cli, produto, preco_lote, quantidade_itens_lote, tamanho_do_item, lotes_disponiveis, descricao, imagem) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $inserir = Conexao::getInstance()->prepare($sql2);
    $inserir->bindValue(1, $idMarca);
    $inserir->bindValue(2, $produto->getCategoria());
    $inserir->bindValue(3, $id);
    $inserir->bindValue(4, $produto->getProduto());
    $inserir->bindValue(5, $produto->getPrecoLote());
    $inserir->bindValue(6, $produto->getQil());
    $inserir->bindValue(7, $produto->getTamanho());
    $inserir->bindValue(8, $produto->getLotesDisponiveis());
    $inserir->bindValue(9, $produto->getDescricao());
    $inserir->execute();

}

public function read_prod()
{
    $sql = "SELECT * FROM lote";

    $lerInfoProd = Conexao::getInstance()->prepare($sql);

    $lerInfoProd->execute();

    if($lerInfoProd->rowCount() > 0)
        {
            $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
    else
        {
            return NULL;
        }
}

public function read_prod_id($id)
{
    $sql = "SELECT nome as 'Nome do Produto', preco as 'Preco', tamanho as 'Tamanho', quantidade as 'Quantidade' FROM produto WHERE cod_prod = ?";

    $lerInfoProd = Conexao::getInstance()->prepare($sql);
    $lerInfoProd-> bindValue(1, $id);
    $lerInfoProd->execute();

    if($lerInfoProd->rowCount() > 0)
        {
            $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
    else
        {
            return NULL;
        }
    }
}
?>