<?php require_once 'config.php'; ?> 
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?> 
<?php $db = open_database(); ?>
<?php if ($db) : ?>

<div class="card">
        <div class="card-header">
            <p class="lead">Cadastro de pessoas para as aulas do Discipulado</p>
        </div>
        <div class="card-body">
            <form class="needs-validation formdetail" novalidate method="POST"
                >
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo"
                            required>
                        <div class="invalid-feedback">
                            Por favor digite um nome valido
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneFixo">Telefone Fixo</label>
                        <input type="tel" class="form-control telefoneFixo" name="telefone_fixo" id="telefoneFixo"
                            placeholder="(xx) xxxx-xxxx"> <script>jQuery("#telefone").mask("(00) 0000-0000");</script>
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneCelular">Telefone Celular</label>
                        <input type="tel" class="form-control telefoneCelular" name="telefone_celular"
                            id="telefoneCelular" placeholder="(xx) xxxxx-xxxx"> <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="congregacao">Selecione a Congregação</label>
                        <select class="custom-select my-1 mr-sm-2" name="congregacao" id="congregacao" required>
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
<?php else : ?> <div class="alert alert-danger" role="alert">
    <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
</div>
<?php endif; ?>
<?php include(FOOTER_TEMPLATE); ?>