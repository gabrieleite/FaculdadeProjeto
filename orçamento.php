<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Orçamento</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>


    <body class="orc">


    <button type="submit" class="botaovoltar"><a href="index.html" role="button"><b>VOLTAR</b></a></button>
    
    
    <br>
    <br>

    <h1 class="titulo">ORÇAMENTO</h1>

    <div class="row">
    <div class="col-lg-4"></div>


    <div class="col-lg-4">
        <!-- Form --> 
        <form method="POST" action="orcamento.php">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            
            <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label"  for="NomeCompleto">Nome Completo:</label>
                <input type="text" name="NomeCompleto" id="NomeCompleto" class="form-control"/>
                </div>
            </div>
            </div>
        
            <!-- Text input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="NomeEmpresa">Nome da Empresa:</label>
            <input type="text" name="NomeEmpresa" id="NomeEmpresa" class="form-control" />
           
            </div>
        
            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="Email">E-mail:</label>
            <input type="email" name="Email" id="Email" class="form-control" />
            </div>
        
            <!-- Number input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="Telefone">Telefone:</label>
            <input type="number" name="Telefone" id="Telefone" class="form-control" />
            </div>
        
            <!-- Message input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="Descricao">Descrição do pedido:</label>
            <textarea class="form-control" name="Descricao" id="Descricao" rows="4"></textarea>
            </div>

        
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Solicitar orçamento</button>
        </form>
    </div>


    <div class="col-lg-4"></div>
</div>    

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Universitários Uninove 2021</div>
                </div>
            </div>
        </footer>
    </body>
</html>