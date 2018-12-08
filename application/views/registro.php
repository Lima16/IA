<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Registro</title>
</head>
<body style="background-color: darkslategray;">
<!-- lightseagreen -->
  <br>
  <br>
  <br>
  <br>
  
    <div class="container">

      <div class="container">
        <div class="row">
          <div class="col-sm">

          </div>
          <div class="col-sm" style="
           background-color: white;
           box-shadow: 10px 10px 20px 1px black;
           border-radius: 6px 6px 6px 6px;
           padding: 50px;

          ">


            <form class="form-signin" action="<?=base_url()?>index.php/registrar" method="post">
              <h1 class="h3 mb-3 font-weight-normal" style="color: darkslategray; text-shadow: 2px 2px 3px gray;"><b>Registro</b></h1>
              
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">

              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" id="email" name="email" class="form-control" style="margin-top: 10px;" placeholder="Email" required autofocus>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" id="senha" name="senha" style="margin-top: 10px;" class="form-control" placeholder="Senha" required>
              <div class="checkbox mb-3">
              </div>
              <div  style="text-align: right;">
                <button type="submit" class="btn btn-primary">Concluir</button>
              </div>
              
              
              <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p> -->
            </form>


          </div>
          <div class="col-sm">

          </div>
        </div>
      </div>
    </div>

</body>
</html>

