<?php

   include_once ("../controler/CTurma.php");
   $l_turma = trazTurma();
   

?>




<link rel="stylesheet" href="css/bootstrap.min.css">
 <div class="container">
 <div class="row mt-5">
       <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
       <div class="col-md-12 text-center">
                <h3>Lista de Turmas</h3>
            </div>       
       </div>
 </div>

  <div class="row mt-2">
   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
   
   <table class="table table-borderless table-data3">
  <thead class="">
   <tr>
    <th scope="col">id</th>
    <th scope="col">turma</th>
    <th scope="col">acção</th>
   </tr>
  </thead>
  <tbody>
       <?php
        
        $i = 1;
        foreach($l_turma as $linha){
            
       
 
       ?>
      
   <tr>
    <th scope="row"><?php echo $i ?></th>
    <td><?php echo $linha['descricao'] ?></td>
    <td>
    <a href="?pagina=l_turma" class="btn btn-primary btn-sm btn-danger">apagar</a>
    </a>     
    <a href="?pagina=l_turma" class="btn btn-primary btn-sm ">editar </a>
   </tr>
   <?php
      $i++;
    }
   
   ?>
  </tbody>
 </table>
 
 
 <a href="?pagina=f_turma" class="btn btn-success btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Adicionar
                </a>
   </div>
  </div>

 </div>