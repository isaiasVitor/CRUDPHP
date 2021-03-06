$.getScript("js/jquery.mask.js", function(){
    
    $(document).ready(function(){

        $("input.telefoneFixo").mask("(00) 0000-0000");
        $("input.telefoneCelular").mask("(00) 00000-0000");
    });
 });


 function atualizar()
 {
     // Fazendo requisição AJAX
     $.post('atualizar.php', function (frase) {
  
         // Exibindo frase
         $('#frase').html("Último registro<br>" +"<p id='subfrase'>"+ frase.id +" - "+ frase.nome + " - "+frase.congregacao + "</p>" );
  
     }, 'JSON');
 }
  
 // Definindo intervalo que a função será chamada
 setInterval("atualizar()", 1000);
  
 // Quando carregar a página
 $(function() {
     // Faz a primeira atualização
     atualizar();
 });

(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();


