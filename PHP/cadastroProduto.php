<?php
include_once 'controller/ProdutoController.php';
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
                                <input class="form-control" type="text" name="nomeProduto">
                                <label>Valor compra</label>
                                <input class="form-control" type="text" name="vlrcompra">
                                <label>Valor de venda</label>
                                <input class="form-control" type="texte" name="vlrvenda">
                                <label>Quantidade no estoque</label>
                                <input class="form-control" type="number" name="qtdEstoque">
                                <input type="submit" name="cadastrarproduto" class="btn btn-success btInput" value="Enviar">
                                &nbsp;&nbsp;
                                <input type="reset" class="btn btn-light btInput" value="Limpar">
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead class="thead-dark bg-dark text-white">
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Compra (R$)</th>
                            <th scope="col">Venda (R$)</th>
                            <th scope="col">Estoque</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       $pcTable = new ProdutoController();
                       $listaProdutos = $pcTable->listarProdutos();

                       foreach ($listaProdutos as $lp) {
                      


                       /* print_r("<tr><td>" . $lp->getIdProduto() . "</td>");
                        print_r("<td>" . $lp->getNomeProduto() . "</td>");
                        print_r("<td>" . $lp->getVlrCompra(). "</td>");
                        print_r("<td>" . $lp->getVlrVenda() . "</td>");
                        print_r("<td>" . $lp->getQtdEstoque() . "</td></tr>");
                    }
                    ?>
                        print_r("<td>" . $lp->getQtdEstoque() . "</td></tr>");*/


                        ?>  
                        <tr>
                            <td><?php print_r($lp->getIdproduto());?></td>
                            <td><?php print_r($lp->getNomeProduto());?></td>
                            <td><?php print_r($lp->getVlrCompra());?></td>
                            <td><?php print_r($lp->getVlrVenda());?></td>
                            <td><?php print_r($lp->getQtdEstoque());?></td>
                            <td><a class="btn btn-outline-dark" href="#">Editar</a>
                            <a class="btn btn-outline-danger" href="#">Excluir</a>
                            </td>
                        </tr>    

                        <?php    
                     } 

                    ?>          
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>