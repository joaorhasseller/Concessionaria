
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="../css/sytles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    

    
    <title>Agora Vai</title>
</head>
<body>

   <?php include 'menu.php'; ?>

      <main class="principal">

      <div class="img_fundo">
        <img src="../img/principal-2.png" alt="" class="img-principal">
          <div class="box-img">
          </div>
      </div>
      <div class="borda"></div>


      <section class="fale-com-vendedor">
        <p>Fale com o vendedor</p>
        <div class="como-deseja-informacao">
          <legend>Forma de contato</legend>
          <form action="" method="post" class="como-deseja-forms">
            <input type="radio" name="whats"  id=""><label for="whats">WhatsApp</label><br>
            <input type="radio" name="email"  id=""><label for="email">Email</label>
        </form>
        </div>
        <div>
          <form action="" method="post">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="Nome">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="E-mail">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="Telefone">
           <textarea name="" id="" cols="50"  rows="7" placeholder="Digite sua mensagem" ></textarea>
           <input type="submit" class="fale-com-vendedor-submit btn btn-warning" value="Enviar">
          </form>
        </div>
      

      </section>
    
      <section class="container-fluid infos">
        <div class="row">
            <p class="col-12">VOKSWAGEM VOYAGE</p>
        </div>
       <div class="row informacoes-carro">
          <div class="col-3">
            <h5>Cidade</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Ano</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Km</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Câmbio</h5>
            <p>Texto</p>
          </div>
       </div>
       <div class="row informacoes-carro">
          <div class="col-3">
            <h5>Carroceria</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Combustível</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Final de Placa</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Cor</h5>
            <p>Texto</p>
          </div>
       </div>
       <div class="row informacoes-carro">
          <div class="col-3">
            <h5>Aceita aluguel?</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>IPVA Pago?</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Licenciado?</h5>
            <p>Texto</p>
          </div>
          <div class="col-3">
          <h5>Preço</h5>
            <p>Texto</p>
          </div>
       </div>
       
      </div>
      
      </section>
  
</main>

      </main>

      <div>
        <?php include 'rodape.php'?>
      </div>
      
      

      


    
</body>
</html>