<?php
require_once 'conexao.php';
require_once 'Cliente.php';
//Codigo tá doido: require_once 'Produto.php';

class ProdutoDao
{

    public function create_prod(Produto $produto, $id)
    {

        //tabela marca

        $sql = "INSERT INTO marca(nome) values (?);";

        $inserirMarca = Conexao::getInstance()->prepare($sql);
        $inserirMarca->bindValue(1, $produto->getNomeMarca());
        $inserirMarca->execute();

        $idMarca = Conexao::getInstance()->lastInsertId();

        //tabela categoria  

        $categoria = $_POST["categoria"];


        //tabela produto

        $sql2 = "INSERT INTO lote(cod_marca,cod_categoria,cod_cli, produto, preco_lote, quantidade_itens_lote, tamanho_do_item, lotes_disponiveis, descricao) values ( ?,?,?, ?, ?, ?, ?, ?, ?)";

        $inserir = Conexao::getInstance()->prepare($sql2);
        $inserir->bindValue(1, $idMarca);
        $inserir->bindValue(2, $categoria);

        $inserir->bindValue(3, $id);
        $inserir->bindValue(4, $produto->getProduto());
        $inserir->bindValue(5, $produto->getPrecoLote());
        $inserir->bindValue(6, $produto->getQil());
        $inserir->bindValue(7, $produto->getTamanho());
        $inserir->bindValue(8, $produto->getLotesDisponiveis());
        $inserir->bindValue(9, $produto->getDescricao());
        $inserir->execute();
    }

    public function read_prod($id)
    {
        $sql = "SELECT * FROM lote WHERE lotes_disponiveis > 0 and cod_cli != ?";

        $lerInfoProd = Conexao::getInstance()->prepare($sql);
        $lerInfoProd->bindValue(1, $id);
        $lerInfoProd->execute();

        if ($lerInfoProd->rowCount() > 0) {
            $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else {
            return NULL;
        }
    }

    public function read_prod_id($id)
    {
        $sql = "SELECT lote.cod_lote AS 'idProduto', lote.produto as 'Nome do Produto', lote.preco_lote as 'Preco', lote.tamanho_do_item  as 'Tamanho', lote.quantidade_itens_lote as 'Quantidade', lote.lotes_disponiveis as 'Disponivel', lote.descricao as 'Descricao', marca.nome as 'nomeMarca' FROM lote INNER JOIN marca on lote.cod_marca = marca.cod_marca WHERE cod_cli = ?";

        $lerInfoProd = Conexao::getInstance()->prepare($sql);
        $lerInfoProd->bindValue(1, $id);
        $lerInfoProd->execute();

        if ($lerInfoProd->rowCount() > 0) {
            $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else {
            return NULL;
        }
    }

    public function read_prod_nome($nome)
    {
        $sql = "SELECT cod_lote AS 'idProduto', produto as 'Nome do Produto',cod_cli AS 'idCliente', preco_lote as 'Preco', tamanho_do_item  as 'Tamanho', quantidade_itens_lote as 'Quantidade',lotes_disponiveis as 'Disponivel', descricao as 'Descricao' FROM lote WHERE produto = ?";

        $lerInfoProd = Conexao::getInstance()->prepare($sql);
        $lerInfoProd->bindValue(1, $nome);
        $lerInfoProd->execute();

        if ($lerInfoProd->rowCount() > 0) {
            $res = $lerInfoProd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        } else {
            return NULL;
        }
    }


    public function delete_prod(Produto $produto)
    {
        $sql = "DELETE FROM lote WHERE cod_lote = ?";

        $deletarprod = Conexao::getInstance()->prepare($sql);
        $deletarprod->bindValue(1, $produto->getIdProd());

        $deletarprod->execute();
    }

    public function update_prod(Produto $produto)
    {
        $sql = "UPDATE lote SET produto = ?, preco_lote = ?, quantidade_itens_lote = ?, tamanho_do_item = ?, lotes_disponiveis = ?, descricao = ? WHERE cod_lote = ? ";

        $alterar = Conexao::getInstance()->prepare($sql);
        $alterar->bindValue(1, $produto->getProduto());
        $alterar->bindValue(2, $produto->getPrecoLote());
        $alterar->bindValue(3, $produto->getQil());
        $alterar->bindValue(4, $produto->getTamanho());
        $alterar->bindValue(5, $produto->getLotesDisponiveis());
        $alterar->bindValue(6, $produto->getDescricao());
        $alterar->bindValue(7, $produto->getIdProd());

        $alterar->execute();
    }

    public function comprarProd($id_cli, Produto $produto)
    {
        //tabela registro_venda
        $sql = 'INSERT INTO registro_venda(cod_cli, cod_trans, cod_lote, quantidade_lotes, data_hora_venda, ref, preco, status_pag) VALUES (?,?,?,?,NOW(),?,?,?)';

        $registrarVenda = Conexao::getInstance()->prepare($sql);
        $registrarVenda->bindValue(1, $id_cli);
        $registrarVenda->bindValue(2, $produto->getIdTrans());
        $registrarVenda->bindValue(3, $produto->getIdProd());
        $registrarVenda->bindValue(4, $produto->getQtdComprar());
        $registrarVenda->bindValue(5,$produto->getRef());
        $registrarVenda->bindValue(6,$produto->getPrecoLote());
        $registrarVenda->bindValue(7,$produto->getStatusPag());

        $registrarVenda->execute();

    }
}
