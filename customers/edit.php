<?php 	  
    require_once('functions.php'); 	  
    edit();	
?>	
<?php include(HEADER_TEMPLATE); ?>	
<div class="card">
        <div class="card-header">
            <p class="lead">Edição do aluno do discipulado</p>
        </div>
        <div class="card-body">
            <form class="needs-validation formdetail" action="edit.php?id=<?php echo $customer['id'];?>" novalidate method="POST"
                >
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="aluno['nome']" id="nome" placeholder="Nome Completo" value="<?php echo $customer['nome']; ?>"
                            required>
                        <div class="invalid-feedback">
                            Por favor digite um nome valido
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneFixo">Telefone Fixo</label>
                        <input type="tel" class="form-control telefoneFixo" name="aluno['telefone_fixo']" id="telefoneFixo" value="<?php echo $customer['telefone_fixo']; ?>"
                            placeholder="(xx) xxxx-xxxx">
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneCelular">Telefone Celular</label>
                        <input type="tel" class="form-control telefoneCelular" name="aluno['telefone_celular']" value="<?php echo $customer['telefone_celular']; ?>"
                            id="telefoneCelular" placeholder="(xx) xxxxx-xxxx">
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="congregacao">Selecione a Congregação</label>
                        <select class="custom-select my-1 mr-sm-2" name="aluno['congregacao']" id="congregacao" required value="<?php echo $customer['congregacao']; ?>">
                            <option value="">Escolha...</option>
                            <option value="Sede">Sede</option>
                            <option value="Pq. São Paulo">Pq. São Paulo</option>
                            <option value="Jd. Europa">Jd. Europa</option>
                            <option value="Jd. Portugal">Jd. Portugal</option>
                        </select>
                        <div class="invalid-feedback">Selecione a Congregação</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <button class="btn btn-primary btn-block" type="submit">Salvar</button>
                    </div>
                    <div class="col-md-2 mb-3">
                        <button class="btn btn-danger btn-block" type="reset">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
 <?php include(FOOTER_TEMPLATE); ?>