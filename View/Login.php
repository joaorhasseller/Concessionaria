<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">

    <title>Login</title>
</head>
<body>

    <?php include 'menu.php'; ?>

    <div class="container" id="box">
      <div class="row align-items-center box-row">
      <main class="form-signin w-25 m-auto" id="formulario">
        <form>
         
          <h1  class="h3 mb-3 fw-normal p-cadastro">Please sign in</h1>
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
          <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
          
        </form>
      </main>

      </div>
    </div>
   
      <?php include 'rodape.php'?>
</body>
</html>