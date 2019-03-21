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
<hr>
<div class="table-responsive">
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th width="30%">Nome</th>
            <th>Telefone Fixo</th>
            <th>Telefone Celular</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody> <?php if ($customers) : ?> <?php foreach ($customers as $customer) : ?>
        <tr>
            <td><?php echo $customer['id']; ?></td>
            <td><?php echo $customer['nome']; ?></td>
            <td><?php echo $customer['telefone_fixo']; ?></td>
            <td><?php echo $customer['telefone_celular']; ?></td>
            <td class="actions text-right">
                <a href="view.php?id= <?php echo $customer['id']; ?>" class="btn btn-sm btn-success">
                    <i class="fa fa-eye"></i> Visualizar
                </a>
                <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-sm btn-warning">
                    <i class="fa fa-pencil"></i> Editar
                </a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal"
                    data-customer="<?php echo $customer['id']; ?>">
                    <i class="fa fa-trash"></i> Excluir
                </a>
            </td>
        </tr> <?php endforeach; ?>
        <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr> <?php endif; ?>
    </tbody>
    
</table>
</div>
<?php include(FOOTER_TEMPLATE); ?>