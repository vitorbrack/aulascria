<?php
include_once 'controller/produtoController.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .btInput {
            padding: 10px 20px 10px 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown link
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row" style="margin-top: 30px;">
            <div class="col-8 offset-2">

                <div class="card-header bg-light text-center border" style="padding-bottom: 15px; padding-top: 15px;">
                    Cadastro Produto
                </div>
                <?php
                //envio dos dados para o BD
                if (isset($_POST['cadastrarproduto'])) {
                    $nomeProduto = $_POST['nomeProduto'];
                    $vlrcompra = $_POST['vlrcompra'];
                    $vlrvenda = $_POST['vlrvenda'];
                    $qtdEstoque = $_POST['qtdEstoque'];

                    $pc = new ProdutoController();
                    echo "<p>" . $pc->inserirProduto(
                        $nomeProduto,
                        $vlrcompra,
                        $vlrvenda,
                        $qtdEstoque

                    ) . "</p>";
                }
                ?>

                <div class="card-body border">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <label>Código</label> <br>
                                <label>Produto</label>
                                <input class="form-control" type="text" name="nomeProduto" value="">
                                <label>Valor compra</label>
                                <input class="form-control" type="text" name="vlrcompra">
                                <label>Valor de venda</label>
                                <input class="form-control" type="texte" name="vlrvenda">
                                <label>Quantidade no estoque</label>
                                <input class="form-control" type="number" name="qtdEstoque">
                                <div class="col-6 mx-auto">
                                    <input type="submit" name="cadastrarproduto" class="btn btn-success btInput" value="Enviar">
                                    &nbsp;&nbsp;
                                    <input type="reset" class="btn btn-light btInput" value="Limpar">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <table class="table table-striped table-responsive">
                        <thead class="table-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Compra (R$)</th>
                                <th>Venda (R$)</th>
                                <th>Estoque</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $pcTable = new ProdutoController();
                            $listaProdutos = $pcTable->listarProdutos();
                            $a = 0;
                            if ($listaProdutos != null) {
                                foreach ($listaProdutos as $lp) {
                                    $a++;
                            ?>
                                    <tr>
                                        <td><?php print_r($lp->getIdproduto()); ?></td>
                                        <td><?php print_r($lp->getNomeProduto()); ?></td>
                                        <td><?php print_r($lp->getVlrCompra()); ?></td>
                                        <td><?php print_r($lp->getVlrVenda()); ?></td>
                                        <td><?php print_r($lp->getQtdEstoque()); ?></td>
                                        <td><a class="btn btn-light" href="controller/editarProduto.php?id=<?php echo $lp->getIdproduto(); ?>">
                                                editar</a>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $a;?>" >
                        excluir
                    </button>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?php echo $a;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="get" action="controller/excluirproduto.php">
                                            <label><strong>Deseja excluir o produto <?php echo $lp->getNomeProduto(); ?>?</strong></label>
                                                <input type="hidden" name="ide"
                                                    value="<?php echo $lp->getIdproduto(); ?>">
                                                
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Sim</button>
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                            </div>
                                            </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>