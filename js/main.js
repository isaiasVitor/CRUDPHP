$.getScript("js/jquery.mask.js", function(){
    $(document).ready(function(){
        $("input.telefoneFixo").mask("(00) 0000-0000");
        $("input.telefoneCelular").mask("(00) 00000-0000");
        alert("ok");
    });
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


