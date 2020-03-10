<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        $nivelAcesso = mt_rand(0,1);

        // para cada item encontrado dentro do array $filmes
        // pegue a posição que é a $key e o índice atribuído a essa posição que é o $value
        
        // $key = 0,1,2
        // $values = "imagem", "titulo", "sinopse"

        // parecido com o for, e exibe um item a cada volta do loop que ele faz. 

        $filmes = [
            "0" => [
                "imagem" => "assets/img/la-casa-de-papel.jpg",
                "titulo" => "La Casa de Papel",
                "sinopse" => "Assalto planejado ao Banco Central"
            ],
            "1" => [
                "imagem" => "assets/img/stranger-things.jpg",
                "titulo" => "Stranger Things",
                "sinopse" => "Crianças com super poder"
            ],
            "2" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural"
            ],
            "3" => [
                "imagem" => "assets/img/brooklyn-99.jpeg",
                "titulo" => "Brooklyn Nine Nine",
                "sinopse" => "Grupo de policiais que resolvem casos bizarros"
            ],
            "4" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural"
            ],
            "5" => [
                "imagem" => "assets/img/brooklyn-99.jpeg",
                "titulo" => "Brooklyn Nine Nine",
                "sinopse" => "Grupo de policiais que resolvem casos bizarros"
            ],
            "6" => [
                "imagem" => "assets/img/la-casa-de-papel.jpg",
                "titulo" => "La Casa de Papel",
                "sinopse" => "Assalto planejado ao Banco Central"
            ],
            "7" => [
                "imagem" => "assets/img/stranger-things.jpg",
                "titulo" => "Stranger Things",
                "sinopse" => "Crianças com super poder"
            ],
            "8" => [
                "imagem" => "assets/img/supernatural.jpg",
                "titulo" => "Supernatural",
                "sinopse" => "Algo sobrenatural"
            ]
        ];
    ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if($nivelAcesso == 1){ ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Olá, logado</a>
                        </li>
                    <?php } ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 img-fluid" src="assets/img/la-casa-de-papel.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/stranger-things.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 img-fluid" src="assets/img/supernatural.jpg" alt="Terceiro Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <section class="mt-5 container">
        <h1>Encontre os melhores filmes da nossa loja</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit soluta odio expedita, facilis ab eum enim magnam ratione in vel omnis eaque hic repellat quae doloremque id sapiente consequuntur beatae?</p>
        <div class="row">
            <?php foreach($filmes as $key => $value): ?>
                <div class="border mb-5 col-12 col-md-6 col-lg-4">
                    <img class="card-img-top" src="<?php echo $value["imagem"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <?php echo "chave => " . $key ?>
                        <h5 class="card-title"><?php echo $value["titulo"]; ?></h5>
                        <p class="card-text"><?php echo $value["sinopse"]; ?></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                    <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="<?php echo '#'.str_replace(' ','',$value["titulo"]); ?>">
                        Comprar
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="<?php echo str_replace(' ','',$value["titulo"]); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...  segunda-feira 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">Salvar mudanças</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>