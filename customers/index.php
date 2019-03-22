<?php
 ini_set('default_charset','ISO-8859-1');
 mb_internal_encoding("UTF-8"); 
 mb_http_output( "iso-8859-1" );  
 ob_start("mb_output_handler");   
 header("Content-Type: text/html; charset=ISO-8859-1",true);
?>
<?php	    
    require_once('functions.php');	    
    index();	
?>

<?php include(HEADER_TEMPLATE); ?>
<?php if (!empty($_SESSION['message'])) : ?>
<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <?php echo $_SESSION['message']; ?>
</div>
<?php clear_messages(); ?> <?php endif; ?>
<div class="listagem">

<?php if ($customers) : foreach ($customers as $customer) : ?>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default" role="tab" id="heading<?php echo $customer['id']; ?>">
        <div class="panel-heading" >
          <h4 class="panel-title">
            <a class="btn btn-outline-primary btn-block text-justify" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $customer['id']; ?>" aria-expanded="false" aria-controls="collapse<?php echo $customer['id']; ?>">

                <?php echo strtoupper($customer['id'].":  ".$customer['nome']); ?>

            </a>
          </h4>
        </div>
        <div id="collapse<?php echo $customer['id']; ?>" class="panel-collapse <?php echo ($customer['id'] == 0 ? 'collapse in' : 'collapse'); ?>" role="tabpanel" aria-labelledby="heading<?php echo $customer['id']; ?>">
          <div class="panel-body">

           
                <span class="input-group-text">Telefone Fixo </span> 
                
                <input type="text" class="form-control" value="<?php echo $customer['telefone_fixo']; ?>" readonly>
                <span class="input-group-text"> Telefone Celular</span>
                
                <input type="text" class="form-control" value="<?php echo $customer['telefone_celular']; ?>" readonly>              
                                     

            <div class="form-group">
                <label class="control-label">Congregação</label>
                <input type="text" class="form-control" value="<?php echo $customer['congregacao']; ?>" readonly>
            </div>

          </div>
        </div>
      </div>
    </div>


<?php endforeach;?>



    
        <?php// echo $customer['id']. " - " .$customer['nome'];?>
        <?php// echo $customer['telefone_fixo'];  ?> <br>
        <?php// echo $customer['telefone_celular'];  ?> <br>
        <?php// echo $customer['congregacao']; ?> <br>

    
    <?php else : ?>
    Nenhum registro encontrado
    <?php endif; ?>
</div>

<?php include(FOOTER_TEMPLATE); ?>