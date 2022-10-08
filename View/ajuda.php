<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda </title>
    <!-- CSS only -->
   
     <link rel="stylesheet" type="text/css" href="../css/ajuda.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

    <header>
    <?php include 'menu.php'; ?>
    </header>
<body>
   
        <main>
            <section>
                <form action="">
                    <input type="text" name=""  placeholder="Qual sua dúvida?" style="padding-left: 30px; font-size: 30px; " class="duvida" >
                        
    
                </form>
            </section>


            <section class="container">
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Comprar</h3>
           
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Alugar</h3>
            
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Cadastro</h3>
          
          </div>
        </div>

      </div>
      <div class="col col-pagamento">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pagamento</h3>
          
          </div>
        </div>
    </div>
            </section>



            <section >
            <h3>Não encontrou o que precisava?</h3>
                <div class="esta-em-duvida">
                <p>
                    <div><img src="../img/ajuda.png" alt=""></div>
                    Digite sua dúvida, entraremos em contato!
                </p>
           
                </div>
               
      
        <div class="input-group area-duvida">
       
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        </div></div>

      </div>
            </section>


            
        </main>
   





   


    <div>
        <?php include 'rodape.php'?>
    </div>
      


    

    
</body>
</html>