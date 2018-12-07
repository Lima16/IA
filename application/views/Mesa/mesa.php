 <div class="site-overlay"></div>

        <!-- Your Content -->
        <div id="container">
           
            <div class="jumbotron jumbotron-fluid" style="background-image: url('<?=base_url()?>assets/img/mesa01.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center"> <!-- style="background-color: #e9ecef;" -->

            <div class="container">
              <div class="container">


               <h1 class="display-4" style="text-shadow: 2px 5px 5px gray; color: black"><b>Mesa</b></h1>
               <p class="lead" style="color: black;"></p>


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
                          <th scope="col">Mesa</th>
                          <th scope="col">Pedidos</th>
                          <th scope="col">Valor total</th>
                          <th scope="col">Opções</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php foreach ($pedidos as $pedido): ?>                
                        <tr>
                           
                              
                           
                          <th scope="row">  </th>
                          <td> <?php echo($pedido['mesa_idmesa']); ?> </td>
                          <td> <?php echo($pedido['idpedidos']);  ?></td>

                  <!--     <?php 

                          $xbebida;
                          $xsobremesa = $sobremesas[''];
                          $xentrada = $entradas[''];
                          $xrefeicao = $refeicoes[''];
                          $total = 0;



                          if ($pedido['bebidas_idbebidas'] != null): ?>

                            <?php foreach ($bebidas as $bebida): ?>
                              
                                <?php 
                                    if ($bebida['idbebida'] == $pedido['bebidas_idbebidas']) {
                                     
                                      $xbebida = $bebida['nome'];

                                    }

                                ?>


                              <?php endforeach; ?>                           

                          <?php endif; ?>
                            
                           -->


                          

                          <td> <!--<?php echo($pedido['']); ?> --></td>




                          <td> 
                            <img src="<?=base_url()?>assets/img/Cancelar.png" alt="bullet"
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
                Deseja cancelar este pedido?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: red">Cancelar</button>
                <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>
</div>
