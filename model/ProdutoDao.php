<?php
require_once 'conexao.php';


class ProdutoDao{

public function create_prod(Produto $produto){

    //tabela marca

    $sql2 = "INSERT INTO marca(nome) values (?);";

    $inserirMarca = Conexao::getInstance()->prepare($sql2);
    $inserirMarca ->bindValue(1, $produto->getNomeMarca());
    $inserirMarca->execute();

    $id1 = Conexao::getInstance()->lastInsertId();

    //tabela categoria

    $sql3 = "INSERT INTO categoria(tipo) values (?);";

    $inserirCate = Conexao::getInstance()->prepare($sql3);
    $inserirCate ->bindValue(1, $produto->getTipo());
    $inserirCate->execute();

    $id2 = Conexao::getInstance()->lastInsertId();

    //tabela produto

    $sql = "INSERT INTO produto(cod_marca, cod_categoria,nome, preco, tamanho, quantidade) values (?, ?, ?, ?, ?, ?);";

    $inserir = Conexao::getInstance()->prepare($sql);
    $inserir->bindValue(1, $id1);
    $inserir->bindValue(2, $id2);
    $inserir->bindValue(3, $produto->getNomeProd());
    $inserir->bindValue(4, $produto->getPreco());
    $inserir->bindValue(5, $produto->getTamanho());
    $inserir->bindValue(6, $produto->getQuantidade());
    $inserir->execute();

    $id = Conexao::getInstance()->lastInsertId();


}

public function read_prod($id){
    $sql = "SELECT nome as 'Nome do Produto', preco as 'Preço', tamanho as 'Tamanho', quantidade as 'Quantidade' FROM produto WHERE cod_prod = ?";

    $lerInfoProd = Conexao::getInstance()->prepare($sql);
    $lerInfoProd-> bindValue(1, $id);
    $lerInfoProd->execute();

    if($lerInfoProd->rowCount() > 0){
        $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }else{
        return NULL;
    }
}
}
?>