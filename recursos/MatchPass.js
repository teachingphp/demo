var contra = document.getElementById("Contra")
, ConfirmContra = document.getElementById("ConfirmContra");

function validarCon(){
    if(contra.value != ConfirmContra.value) {
        ConfirmContra.setCustomValidity("Las contraseñas no coinciden !");
    } else {
        ConfirmContra.setCustomValidity('');

    }
}

contra.onchange = validarCon;
ConfirmContra.onkeyup= validarCon;
