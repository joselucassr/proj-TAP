<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Nova Venda</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

    
<body>

    <nav class="customTop">
        <ul>
          <li class="d-inline">
              <span class="texto"><a  href="#">Nova Venda</a></span>
              <span class="icon"><a href="#"><i class="fas fa-cart-plus ativo"></i></a></span>
          </li>
          <li class="d-inline">
            <span class="texto"><a class="" href="#">Histórico</a></span>
            <span class="icon"><a href="#"><i class="fas fa-clipboard-list"></i></a></span>
          </li>
          <li class="d-inline">
            <span class="texto"><a class="" href="#">Análise dos Dados</a></span>
            <span class="icon"><a href="#"><i class="fas fa-chart-line"></i></a></span>
          </li>
          <li class="d-inline">
            <span class="texto"><a class="" href="#">Configurações</a></span>
            <span class="icon"><a href="#"><i class="fas fa-cog"></i></a></span>
          </li>
        </ul>
    </nav>
    <header>
      <h1 class="titulo">Nova Venda</h1>
    </header>
    <div class="container">
        <div class="corpo col-md-8 col-sm-10 mx-auto">
            <div class="col-12">
                <form action="index.php" method="post" class="form-group">

                    <label for="nome_tipo">Tipo</label>
                    <select id="nome_tipo" class="form-control" name="nome_tipo">
                        <option selected>Escolha um</option>

                        <?php
                        // Option Dinâmico no Drop-down

                        include '../banco/conexao.php';

                        $query_tipo = "SELECT id_tipo,nome_tipo  FROM tipo";
                        $result_tipo = mysqli_query($link, $query_tipo);
                        while ($row_tipo = mysqli_fetch_assoc($result_tipo)){
                            @$opt_tipo = "<option value = '{$row_tipo['id_tipo']}'>{$row_tipo['nome_tipo']}</option>";
                        }
                        echo $opt_tipo;
                        ?>
                    </select>


                    <label for="nome_sabor" style="padding-top: 5px;">Sabor</label>
                    <select id="nome_sabor" class="form-control" name="nome_sabor">
                        <option selected>Escolha um</option>
                        <?php
                        // Option Dinâmico no Drop-down

                        $query_sabor = "SELECT id_sabor,nome_sabor FROM sabor";
                        $result_sabor = mysqli_query($link, $query_sabor);
                        while ($row_sabor = mysqli_fetch_assoc($result_sabor)){
                            @$opt_sabor = "<option value = '{$row_sabor['id_sabor']}'>{$row_sabor['nome_sabor']}</option>";
                        }
                        echo $opt_sabor;
                        ?>
                    </select>

                    <div style="margin-top: 15px">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1" value="Dinheiro" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Dinheiro
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1" value="Cartão de Débito">
                            <label class="form-check-label" for="exampleRadios1">
                                Cartão de Débito
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1" value="Cartão de Crédito">
                            <label class="form-check-label" for="exampleRadios1">
                                Cartão de Crédito
                            </label>
                        </div>
                    </div>
                    <div class=" text-right" style="margin-top: 15px">
                        <button type="submit" class="link-hover btn" style="border: none; font-size: 30px"><i class="fas fa-check"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>