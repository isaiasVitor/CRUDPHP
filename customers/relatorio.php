<?php 	  
    require_once('functions.php'); 	  
    relatorios();
    
    ?>
<?php include(HEADER_TEMPLATE); ?>

<div class="card">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default" role="tab" id="headingTotalPorCongregacao">
            <div class="panel-heading">
                <a class="btn btn-outline-primary btn-block" role="button" data-toggle="collapse"
                    data-parent="#accordion" href="#collapseTotalPorCongregacao" aria-expanded="false"
                    aria-controls="collapseTotalPorCongregacao">
                    Total de alunos(as) por Congregação
                </a>
            </div>
            <div id="collapseTotalPorCongregacao"
                class="panel-collapse <?php echo ("TotalPorCongregacao" == 0 ? 'collapse in' : 'collapse'); ?>"
                role="tabpanel" aria-labelledby="headingTotalPorCongregacao">
                <div class="panel-body">
                    <?php  if ($relatorios) : foreach ($relatorios as $relatorio) : ?>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><?php echo $relatorio["total"] ?></span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" value=" <?php echo $relatorio["congregacao"]." - ".$relatorio["nome"] ?>" readonly>
                    </div>
                   

                    <?php endforeach;?>
                    <?php else : ?>
                    Nenhum registro encontrado
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>