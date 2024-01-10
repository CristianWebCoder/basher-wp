function createCustomSelect(realSelectId, displayText) {
    var $realSelect = $('#' + realSelectId);
    var $customSelect = $('<div class="custom-select"></div>');
    var $customSelectDisplay = $('<div class="custom-select-display"></div>').text(displayText);
    var $customOptions = $('<div class="custom-options" style="display: none;"></div>');

    $realSelect.find('option').each(function() {
        var $option = $(this);
        var $customOption = $('<div class="custom-option"></div>').text($option.text());

        $customOption.on('click', function() {
            $realSelect.val($option.val()).trigger('change');
            $customSelectDisplay.text($option.text());
            $customOptions.hide();
            $customSelect.removeClass('open');
        });

        $customOptions.append($customOption);
    });

    $customSelect.append($customSelectDisplay);
    $customSelect.append($customOptions);

    $customSelectDisplay.on('click', function() {
        $customOptions.toggle();
        $customSelect.toggleClass('open');
    });

    $(document).on('click', function(e) {
        if (!$(e.target).closest('.custom-select').length) {
            $customOptions.hide();
            $customSelect.removeClass('open');
        }
    });

    // Añadir el select personalizado después del select real
    $realSelect.after($customSelect);
}

$(document).ready(function() {
    createCustomSelect('select-real-identi', '¿Cómo desea identificarse?*');
    createCustomSelect('select-real-contacto', 'Seleccione una opción de contacto*');
});

$(document).ready(function() {
    // Función para mostrar/ocultar campos basado en la selección
    function toggleContactFields() {
        var selectedOption = $('#select-real-contacto').val();
        if (selectedOption === 'Whatsapp') {
            $('.box_input_whatsapp').show();
            $('.box_input_telegram').hide();
        } else if (selectedOption === 'Telegram') {
            $('.box_input_telegram').show();
            $('.box_input_whatsapp').hide();
        } else {
            $('.box-input-whatsapp, .box-input-telegram').hide();
        }
    }

    $('.box_input_whatsapp, .box_input_telegram').hide();

    $('#select-real-contacto').change(toggleContactFields);

    toggleContactFields();
});

document.addEventListener('wpcf7mailsent', function(event) {
    var $containerThankYou = jQuery('.container_thank_you');
    var $containerForm = jQuery('.container_form');

    // Mostrar el mensaje de agradecimiento y ocultar el formulario
    $containerThankYou.addClass('active');
    $containerForm.addClass('hide');

    // Esperar 3 segundos (3000 milisegundos) y luego revertir los cambios
    setTimeout(function() {
        $containerThankYou.removeClass('active');
        $containerForm.removeClass('hide');
    }, 3000); // 3000 milisegundos equivalen a 3 segundos
}, false);