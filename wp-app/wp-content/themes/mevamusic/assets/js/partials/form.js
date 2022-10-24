const phoneField = document.getElementById('input-tel');

var phoneMask = IMask(
    phoneField, {
        mask: '+{375}(00)000-00-00'
    }
);