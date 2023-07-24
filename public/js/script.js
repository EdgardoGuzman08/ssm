var areaInput = document.querySelector('input[name="area"]');
areaInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^a-zA-Z\s]/g, '');
});

var lineaEquipoInput = document.querySelector('input[name="linea_equipo"]');
lineaEquipoInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^a-zA-Z\s]/g, '');
});

var autorInput = document.querySelector('input[name="autor"]');
autorInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^a-zA-Z\s]/g, '');
});

var noEmplInput = document.querySelector('input[name="no_empl"]');
noEmplInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^0-9]/g, '');
});

var noOtInput = document.querySelector('input[name="no_ot"]');
noOtInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^0-9]/g, '');
});

var noStInput = document.querySelector('input[name="no_st"]');
noStInput.addEventListener('input', function(event) {
    var value = event.target.value;
    event.target.value = value.replace(/[^0-9]/g, '');
});

/*function restrictCheckboxSelection1(checkbox) {
    var checkboxes = document.getElementsByName('departamento[]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] !== checkbox) {
                    checkboxes[i].checked = false;
                }
            }
}

function restrictCheckboxSelection2(checkbox) {
    var checkboxes = document.getElementsByName('prioridad[]');
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] !== checkbox) {
                    checkboxes[i].checked = false;
                }
            }
}

function validarFormulario() {
    var checkboxesDepartamento = document.querySelectorAll('input[name="departamento[]"]');
    var checkboxesPrioridades = document.querySelectorAll('input[name="prioridad[]"]');
    var isCheckedDepartamento = false;
    var isCheckedPrioridades = false;

    for (var i = 0; i < checkboxesDepartamento.length; i++) {
        if (checkboxesDepartamento[i].checked) {
            isCheckedDepartamento = true;
            break;
        }
    }

    for (var j = 0; j < checkboxesPrioridades.length; j++) {
        if (checkboxesPrioridades[j].checked) {
            isCheckedPrioridades = true;
            break;
        }
    }

    if (!isCheckedDepartamento) {
        alert('Por favor, seleccione al menos una opción de departamento.');
        return false;
    }

    if (!isCheckedPrioridades) {
        alert('Por favor, seleccione al menos una opción de prioridades.');
        return false;
    }

    return true;
}*/