
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
        <div>
          <form action="" method="post">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="Nome">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="E-mail">
            <input type="text" name="" id="" class="fale-com-vendedor-input" placeholder="Telefone">
           <textarea name="" id="" cols="50"  rows="7" placeholder="Digite sua mensagem"></textarea>
           <input type="submit" class="fale-com-vendedor-submit" value="Enviar">
          </form>
        </div>
      

      </section>
            
      </main>

      <div>
        <?php include 'rodape.php'?>
      </div>
      
      

      


    
</body>
</html>