 <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
           
            <div class="jumbotron jumbotron-fluid" style="background-image: url('<?=base_url()?>assets/img/sobremesas01.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center"> <!-- style="background-color: #e9ecef;" -->

            <div class="container">
              <div class="container">


               <h1 class="display-4" style="text-shadow: 2px 5px 5px black; color: white"><b>Sobremesas</b></h1>
               <p class="lead" style="color: white;"></p>


           </div>
           
       </div>
   </div>



            <br>

            <!-- Tabela -->
                <div class="container">

                <div class="row">
                 
                  <div class="col-sm">

                    <table class="table table-striped table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Opções</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php foreach ($sobremesas as $sobremesa): ?>                
                        <tr>
                           
                              
                           
                          <th scope="row">  </th>
                          <td> <?php echo($sobremesa['nome'])  ?></td>
                          <td> <?php echo($sobremesa['valor'])  ?></td>
                          <td> 
                            <img src="<?=base_url()?>assets/img/compra.png" alt="bullet"
                            data-toggle="modal" data-target="#exampleModal"/> 
                            
                              
                           
                            </td>
                           
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>

                </div>
               
              </div>


            </div>
        
            
            
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pedido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    
                  </button>
              </div>
              <div class="modal-body">
                Deseja adicionar pedido a mesa?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: red">Cancelar</button>
                <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>

</div>
