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
                    Total por Congregação
                </a>
            </div>
            <div id="collapseTotalPorCongregacao"
                class="panel-collapse <?php echo ("TotalPorCongregacao" == 0 ? 'collapse in' : 'collapse'); ?>"
                role="tabpanel" aria-labelledby="headingTotalPorCongregacao">
                <div class="panel-body">
                    <?php  if ($relatorios) : foreach ($relatorios as $relatorio) : ?>

                    <?php echo $relatorio{"congregacao"}. " : ".$relatorio["total"]; ?> <br>

                    <?php endforeach;?>
                    <?php else : ?>
                    Nenhum registro encontrado
                    <?php endif; ?>
                    <!--<span>Sede </span>
                    <input type="text" class="form-control" value="" readonly>

                    <span>Melhado</span>
                    <input type="text" class="form-control" value="" readonly>

                    <span>São Paulo</span>
                    <input type="text" class="form-control" value="" readonly>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>