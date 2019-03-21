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

<div class="list-group" <?php if ($customers) : foreach ($customers as $customer) : ?> >
    <a data-toggle="collapse" href="#collapseExample<?php echo $customer['id']?>" role="button" aria-expanded="false"
        aria-controls="collapseExample<?php echo $customer['id']?>" class="list-group-item list-group-item-action">
        <?php echo $customer['id']. " - " .$customer['nome'];?>
    </a>
    <div class="collapse" id="collapseExample<?php echo $customer['id']?>" >
        <div class="card card-body">
            <?php echo $customer['telefone_fixo'];  ?> <br>
            <?php echo $customer['telefone_celular'];  ?> <br>
            <?php echo $customer['congregacao']; ?> <br>
        </div>
        <div class="card card-body">
            <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning">
                <i class="fa fa-pencil"></i> Editar
            </a>
        </div>
        
    </div>
    <?php endforeach; ?>
    <?php else : ?>
    Nenhum registro encontrado
    <?php endif; ?>
</div>
<?php include(FOOTER_TEMPLATE); ?>