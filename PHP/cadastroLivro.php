<?php
 include_once ('controller/LivroController.php');
 include_once '../model/livro';
 $li = new Livro();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Teste</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        .espaco {
            padding: 24px;
        }

        .btInput {
            margin-top: 20px;
            padding-left: 10px;
            padding-right: 10px;
        }

        th,
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid ">
        <div class="row" style="margin-top: 45px;">
            <div class="col-8 offset-2">
                <div class="card-header bg-light text-center">
                    Cadastro de Livro
                </div>
                <div class="card-body border">
                <?php
                   
                   //envio dos dados para o banco
                   if (isset($_POST['cadastrarLivro'])) {
                       $titulo = trim($_POST['titulo']);
                      if($titulo !=""){
                       $autor = $_POST['autor'];
                       $editora = $_POST['editora'];
                       $qtdEstoque = $_POST['qtdEstoque'];

                       $pc = new LivroController();
                       unset ($_POST['cadastrarLivro']);
                       echo  $pc->inserirLivro(
                           $titulo,
                           $autor,
                           $editora,
                           $qtdEstoque
                       );
                       echo $pc->inserirLivro($titulo, $autor, $editora, $qtdEstoque);
                       echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"2;
                           URL='cadastroLivro.php'\">"; 
                   }
               }

               if(isset($_GET['limpar'])){
                   $pc2 = new LivroController();
                           $pr = $pc2->limpar();
                           unset($_POST['limpar']);
                           $_GET = null;
                           echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"0;
                                   URL='cadastroLivro.php'\">";
                       }
                       if (isset($_GET)) {
                           $id = $_REQUEST['idlivro'];
                           $pc = new LivroController();
                           $pr = $pc->pesquisarLivroId($id);
                   
               }
                   ?>
                    <form method="post" action="">
                        <div class="row g-3">
                            <div class="col-md-6 offset-md-3">
                                <label>Código</label><br>
                                <label>Titulo</label>
                                <input type="text" class="form-control" name="titulo" value="<?php echo $pr->getTitulo();?>">
                                <label>Autor</label>
                                <input type="text" class="form-control" name="autor" value="<?php echo $pr->getAutor();?>">
                                <label>Editora</label>
                                <input type="text" class="form-control" name="editora" value="<?php echo $pr->getEditora();?>">
                                <label>qtdEstoque</label>
                                <input type="number" class="form-control" name="qtdEstoque" value="<?php echo $pr->getQtdEstoque();?>">
                                <div class=" col-6 mx-auto">
                                    <input type="submit" name="cadastrarLivro" class="btn btn-success btInput" value="Enviar">
                                    &nbsp; &nbsp;
                                    <input type="reset" class="btn btn-danger btInput" value="Limpar">
                                </div>
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
                        $pcTable = new LivroController();
                        $listalivro = $pcTable->listarLivros();
                        $a = 0;
                        if ($listalivro != null) {
                            foreach ($listalivro as $lp) {
                                $a++;
                        ?>

                                <tr>
                                    <td><?php print_r($lp->getIdLivro()); ?></td>
                                    <td><?php print_r($lp->getTitulo()); ?></td>
                                    <td><?php print_r($lp->getAutor()); ?></td>
                                    <td><?php print_r($lp->getEditora()); ?></td>
                                    <td><?php print_r($lp->getQtdEstoque()); ?></td>
                                    <td><a class="btn btn-outline-dark" href="#">Editar</a>
                                    <td><a class="btn btn-light" href="#?id=<?php echo $lp->getIdLivro(); ?>">
                                        </a>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $a; ?>">
                                            excluir</button>
                                    </td>
                                </tr>
                                <!-- Modal -->

                             <div class="modal fade" id="exampleModal<?php echo $a;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Contexto....<?php echo $lp->getIdLivro(); ?>
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
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>