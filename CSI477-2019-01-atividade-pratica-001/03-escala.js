function validar_numero(campo, alerta, label) {

    console.log("Validar:" + campo);

    var n = parseFloat($(campo).val());

    if ($(campo).val().length === 0 || isNaN(n)) {

        $(alerta).slideDown();

        $(label).addClass("text-danger");

        $(campo).addClass("is-invalid");

        return false;
    }
//    tudo correto

    $(alerta).hide();
    $(campo).removeClass("is-invalid");
    $(label).removeClass("text-danger");
    $(campo).addClass("is-valid");

    return true;

}

$(document).ready(function () {

    $('#calcular').click(function () {

        if (validar_numero('#Amplitude', '#alertaAmplitude', '#labelAmplitude') &&
            validar_numero('#Delta', '#alertaDelta', '#labelDelta')) {

            var amp = parseFloat($('#Amplitude').val());
            var del = parseFloat($('#Delta').val());

            var mag = (Math.log10(amp) + 3 * Math.log10((8 * del)) - 2.92);
            mag = mag.toFixed(3);

            console.log(mag);
            var exibe = "<p>Magnitude Richter: " + mag + "</p>";

            if (mag < 3.5) {
                exibe += "<p>Efeitos: Geralmente não sentido, mas gravado.</p>";
            }
            if (mag >= 3.5 && mag <= 5.4) {
                exibe += "<p>Efeitos: As vezes sentido, mas raramente causa danos.</p>";
            }
            if (mag > 5.4 && mag <= 6.0) {
                exibe += "<p>Efeitos: No maximo causa pequenos danos a prédios bem construidos, " +
                    "mas pode danificar seriamente casas mal construidas em" +
                    " regiões próximas.</p>";
            }
            if (mag > 6.0 && mag <= 6.9) {
                exibe += "<p>Efeitos: Pode ser destrutivo em áreas em torno de até 100 Km do epicentro.</p>";
            }
            if (mag > 6.9 && mag <= 8) {
                exibe += "<p>Efeitos: Grande terremoto. Pode causar danos sérios numa grande faia</p>";
            }
            if (mag > 8) {
                exibe += "<p>Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros.</p>";
            }

            $("p").remove();
            $('#dados').append(exibe);


            return true;
        }
    })
});