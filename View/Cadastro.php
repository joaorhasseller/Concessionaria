




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro Cliente</title>
</head>
<body>

        
  
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="../img/android-chrome-192x192.png" alt="" width="72" height="57">
            <h2>Cadastro</h2>
            <p class="lead"></p>
          </div>





    <main class="container" id="cadastro">
      <form action="Cadastro.php" method="post">
        <div class="row g-3">
            <div class="col-sm-6">
              <label for="Nome" class="form-label">Nome</label>
              <input type="text"  class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-sm-6">
                <label for="lastName" class="form-label">CPF</label>
                <input type="text" class="form-control" id="lastName" placeholder="000-000-000-00" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">RG</label>
                <input type="text" class="form-control" id="lastName" placeholder="00000000-0" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Telefone<span class="text-muted">(Opicional)</span></label>
                <input type="text" class="form-control" id="lastName" placeholder="(41) 0000-0000" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Celular</label>
                <input type="text" class="form-control" id="lastName" placeholder="(41) 90000-0000" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>


           

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

           
            <input class="w-100 btn btn-warning btn-lg" type="submit" value="Cadastrar" id="enviar">



       

          </div>
          </form>
    </main>

    <div>
        <?php include 'rodape.php'?>
      </div>

    
</body>
</html>