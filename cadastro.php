<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cadastrar Produto</title>
</head>
<body>
    <main class = 'card w-40 p-3 align-items-end'>
        <div class = 'row card-body'>
            <div class = 'col-12 align-items-center'>
                <h1>Cadastrar produto</h1>
            </div>
            <div class = 'col-12'>
            <form action="" method = 'post' enctype = 'multipart/form-data'>
                
                <div class = 'form-group'>
                    <input type="text" class = 'form-control' name = 'nomeProduto' placeholder = 'Nome do produto'> 
                </div>

                <div class = 'form-group'>
                    <input type="text" class = 'form-control' name = 'descProduto' placeholder = 'Descrição do produto'> 
                </div>

                <div class = 'form-group'>
                    <input type="number" class = 'form-control' name = 'estoqueProduto' placeholder = 'Estoque do produto'> 
                </div>

                <div class = 'form-group'>
                    <input type="number" class = 'form-control' name = 'precoProduto' placeholder = 'Preçp do produto'> 
                </div>

                <div class = 'form-group'>
                    <input type="file" class = 'form-control' name = 'imgProduto' placeholder = 'Imagem do produto'> 
                </div>
                <button type = 'submit' class = 'btn btn-success'> Cadastrar </button>
            </form>
            </div>
        </div>
    </main>
</body>
</html>