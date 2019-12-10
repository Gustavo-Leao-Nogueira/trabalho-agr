<?php 
    require_once '../includes/Config.inc.php'; 
    setTitulo('Início');
    require_once '../includes/Header.inc.php';  
    require_once '../includes/Nav.inc.php'; 
?>
    
    <main>
    <div class="jumbotron hero-header text-white jumbotron-fluid">

        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="text-hero-box px-3">
                        <h1 class="h2 text-capitalize">pesquisa de livros</h1>
                        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
                    </div>
                </div>
                </div>
            <div class="w-100"></div>
            
            <DIV class="ROW">
                <div class="col">
                <form>
                    
                    <!-- <div class="row"> -->
                        <div class="d-flex pesquisa-box">
                        <div class="input-group pesquisa-grupo w-100 mb-3">
                            <input type="text" class="form-control" placeholder="Nome do livro" aria-label="pesquisa" aria-describedby="button-addon2">
                            <div class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fas fa-search"></i>Buscar</button>
                            </div>
                        </div>
                        </div>
                        <!-- </div> -->
                    
                    <div class="w-100"></div>
                    <!-- <div class="row"> -->
                        <div class=""></div>
                        <button class="btn btn-primary busca-avancada" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Busca Avançada
                        </button> 
                    <!-- </div> -->
                    </div>
                    <div class="w-100"></div>
                    <div class="text-dark mt-3">
                        <div class="collapse form-inline" id="collapseExample">
                            <div class="card p-2 ml-3 form-inline">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="mais" id="nome" value="op1" checked>
                                    <label class="form-check-label mr-4" for="nome">
                                        Nome
                                    </label>
                                    <input class="form-check-input" type="radio" name="mais" id="autor" value="op2">
                                    <label class="form-check-label mr-4" for="autor">
                                        Autor
                                    </label>
                                    <input class="form-check-input" type="radio" name="mais" id="editora" value="op3">
                                    <label class="form-check-label" for="editora">
                                        Editora
                                    </label>
                                </div>                                      
                            </div>
                        </div>
                    <!-- </div>                           -->
                    
                </form>   
            </DIV>   
            </div>                
        </div>  <!-- container -->               
    </div> <!-- jumbotron -->
</main>

    <?php require_once '../includes/Footer.inc.php'; ?>