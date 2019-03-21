<?php 	  
    require_once('functions.php'); 	  
    add();	
    ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="card">
    <div class="card-header">
        <p class="lead">Cadastro de pessoas para as aulas do Discipulado</p>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-center" id="num" > 
                <label>Ultimo Regristro: 20 </div></label>
            <div class="col-md-6">
            <form class="needs-validation formdetail" action="add.php" novalidate method="POST">
                <div class="form-row">
                    <div class="col-md-8">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="aluno['nome']" id="nome"
                            placeholder="Nome Completo" required>
                        <div class="invalid-feedback">
                            Por favor digite um nome valido
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8">
                        <label for="telefoneFixo">Telefone Fixo</label>
                        <input type="tel" class="form-control telefoneFixo" name="aluno['telefone_fixo']"
                            id="telefoneFixo" placeholder="(xx) xxxx-xxxx">
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8">
                        <label for="telefoneCelular">Telefone Celular</label>
                        <input type="tel" class="form-control telefoneCelular" name="aluno['telefone_celular']"
                            id="telefoneCelular" placeholder="(xx) xxxxx-xxxx">
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8">
                        <label for="congregacao">Selecione a Congregação</label>
                        <select class="custom-select my-1 mr-sm-2" name="aluno['congregacao']" id="congregacao"
                            required>
                            <option selected value="">Escolha...</option>
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
    </div>
</div>
<?php include(FOOTER_TEMPLATE); ?>