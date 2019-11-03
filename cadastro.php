<?php
    function cadastrarProduto($id, $nomeProduto, $descProduto, $estoqueProduto, $precoProduto, $imgProduto){
        $nomeArquivo = 'produtos.json';

        if(file_exists($nomeArquivo)){
            $arquivo = file_get_contents($nomeArquivo);
            $produtos = json_decode($arquivo, true);

            $produtos[] = ['nome' =>$nomeProduto, 'desc' =>$descProduto, 'estoque' =>$estoqueProduto, 'preco' =>$precoProduto, 'img' =>$imgProduto];
            $json = json_encode($produtos);
            $deuCerto = file_put_contents($nomeArquivo, $json);

            if($deuCerto){
                return 'Produto cadastrado!';
            }else {
                return 'Falha no processo, produto não cadastrado!';
            }

            var_dump($produtos);
        }else {
            $produtos = [];
            $produtos[] = ['nome' =>$nomeProduto, 'desc' =>$descProduto, 'estoque' =>$estoqueProduto, 'preco' =>$precoProduto, 'img' =>$imgProduto];
            $json = json_encode($produtos);
            $deuCerto = file_put_contents($nomeArquivo, $json);

            if($deuCerto){
                return 'Produto cadastrado!';
            }else {
                return 'Falha no processo, produto não cadastrado!';
            }
        }
    }

    if($_POST){
        $nomeImg = $_FILES['imgProduto']['name'];
        $localTmp = $_FILES['imgProduto']['tmp_name'];
        $dataAtual = date('d-m-y');
        $caminhoSalvo = 'img/'.$dataAtual.$nomeImg;
        $deuCerto = move_uploaded_file($localTmp, $caminhoSalvo);
        echo cadastrarProduto($_POST['nomeProduto'], $_POST['descProduto'], $_POST['estoqueProduto'], $_POST['precoProduto'], $caminhoSalvo);
    };
?>


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
    <main class = 'p-3'>
        <div class = 'row card-body'>
            <div id = 'rebeberInformações' class = 'w-50'>
                <table class = 'table'>
                    <thead class = ''>
                        <th scope = 'col'>ID</th>
                        <th scope = 'col'>Nome do produto</th>
                        <th scope = 'col'>Estoque</th>
                        <th scope = 'col'>Preço</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope = 'row'>1</th>
                            <td>Camisa</td>
                            <td>2234</td>
                            <td>22.10</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class ='w-50 contaniner'>    
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
                        <input type="number" class = 'form-control' name = 'precoProduto' placeholder = 'Preço do produto'> 
                    </div>

                    <div class = 'form-group'>
                        <input type="file" class = 'form-control' name = 'imgProduto' placeholder = 'Imagem do produto'> 
                    </div>
                    <button type = 'submit' class = 'btn btn-success'> Cadastrar </button>
                </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>